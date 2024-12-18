<?php

declare (strict_types=1);
namespace SupportPal\WhmcsIntegration\Controller\Ticket;

use Closure;
use Illuminate\Support\Arr;
use SupportPal\WhmcsIntegration\Vendor\SupportPal\ApiClient\Exception\InvalidArgumentException;
use SupportPal\WhmcsIntegration\Exception\InvalidApiResponse;
use SupportPal\WhmcsIntegration\Factory\ClientAreaFactory;
use SupportPal\WhmcsIntegration\Helper\AuthenticatedUserHelper;
use SupportPal\WhmcsIntegration\Helper\DateTimeFormatter;
use SupportPal\WhmcsIntegration\Repository\Core\CoreSettingsRepository;
use SupportPal\WhmcsIntegration\Repository\Ticket\DepartmentRepository;
use SupportPal\WhmcsIntegration\Repository\Ticket\PriorityRepository;
use SupportPal\WhmcsIntegration\Repository\Ticket\StatusRepository;
use SupportPal\WhmcsIntegration\Repository\Ticket\TicketRepository;
use SupportPal\WhmcsIntegration\Repository\UserRepository;
use SupportPal\WhmcsIntegration\Request\Request;
use SupportPal\WhmcsIntegration\Service\Converter\ModelToArrayConverter;
use SupportPal\WhmcsIntegration\Service\Manager\Locale\LocaleManager;
use WHMCS\Application\Support\Facades\Lang;
use WHMCS\ClientArea;
use function array_column;
use function array_key_exists;
use function e;
use function in_array;
use function json_encode;
use function sha1;
use function sprintf;
class TicketGridController extends \SupportPal\WhmcsIntegration\Controller\Ticket\BaseTicketController
{
    protected const DEFAULT_PAGE_TITLE = 'supportticketspagetitle';
    protected const TYPE = 'supporttickets';
    private const TEMPLATE = '../supportpal/supporttickets';
    /** @var string[] */
    private $locale;
    /** @var AuthenticatedUserHelper */
    private $authenticatedUserHelper;
    /** @var UserRepository */
    private $userRepository;
    /** @var CoreSettingsRepository */
    private $coreSettingsRepository;
    /** @var DepartmentRepository */
    private $departmentRepository;
    /** @var ModelToArrayConverter */
    private $modelToArrayConverter;
    /** @var StatusRepository */
    private $statusRepository;
    /** @var PriorityRepository */
    private $priorityRepository;
    /** @var TicketRepository */
    private $ticketRepository;
    /** @var ClientAreaFactory */
    private $clientAreaFactory;
    public function __construct(\SupportPal\WhmcsIntegration\Repository\UserRepository $userRepository, \SupportPal\WhmcsIntegration\Helper\AuthenticatedUserHelper $authenticatedUserHelper, \SupportPal\WhmcsIntegration\Repository\Core\CoreSettingsRepository $coreSettingsRepository, \SupportPal\WhmcsIntegration\Repository\Ticket\DepartmentRepository $departmentRepository, \SupportPal\WhmcsIntegration\Repository\Ticket\StatusRepository $statusRepository, \SupportPal\WhmcsIntegration\Repository\Ticket\PriorityRepository $priorityRepository, \SupportPal\WhmcsIntegration\Repository\Ticket\TicketRepository $ticketRepository, \SupportPal\WhmcsIntegration\Helper\DateTimeFormatter $dateTimeFormatter, \SupportPal\WhmcsIntegration\Service\Converter\ModelToArrayConverter $modelToArrayConverter, \SupportPal\WhmcsIntegration\Service\Manager\Locale\LocaleManager $localeManager, \SupportPal\WhmcsIntegration\Factory\ClientAreaFactory $clientAreaFactory)
    {
        parent::__construct($dateTimeFormatter);
        $this->userRepository = $userRepository;
        $this->authenticatedUserHelper = $authenticatedUserHelper;
        $this->coreSettingsRepository = $coreSettingsRepository;
        $this->departmentRepository = $departmentRepository;
        $this->priorityRepository = $priorityRepository;
        $this->ticketRepository = $ticketRepository;
        $this->modelToArrayConverter = $modelToArrayConverter;
        $this->statusRepository = $statusRepository;
        $this->locale = $localeManager->getLocale(\WHMCS\Application\Support\Facades\Lang::trans('locale'));
        $this->clientAreaFactory = $clientAreaFactory;
    }
    /**
     * @param string $templatePath
     * @return ClientArea
     */
    protected function prologue(string $templatePath) : \WHMCS\ClientArea
    {
        $clientArea = $this->clientAreaFactory->create();
        $clientArea->initPage();
        $clientArea->requireLogin();
        $clientArea->setPageTitle(\WHMCS\Application\Support\Facades\Lang::trans(self::DEFAULT_PAGE_TITLE));
        $clientArea->addToBreadCrumb('index.php', \WHMCS\Application\Support\Facades\Lang::trans('globalsystemname'));
        $clientArea->addToBreadCrumb('clientarea.php', \WHMCS\Application\Support\Facades\Lang::trans('clientareatitle'));
        $clientArea->addToBreadCrumb(self::TYPE . '.php', \WHMCS\Application\Support\Facades\Lang::trans(self::DEFAULT_PAGE_TITLE));
        return $clientArea;
    }
    /**
     * @param ClientArea $clientArea
     */
    protected function epilogue(\WHMCS\ClientArea $clientArea) : void
    {
        $clientArea->assign('LANG2', $this->locale);
        $clientArea->addOutputHookFunction('ClientAreaPageSupportTickets');
        $clientArea->output();
    }
    /**
     * @param Request $request
     * @throws InvalidArgumentException
     * @throws InvalidApiResponse
     */
    public function index(\SupportPal\WhmcsIntegration\Request\Request $request) : void
    {
        $ca = $this->prologue(self::TEMPLATE);
        $client = $this->authenticatedUserHelper->getAuthenticatedClient();
        if ($client === null) {
            $this->epilogue($ca);
            return;
        }
        $ca->setTemplate(self::TEMPLATE);
        $this->epilogue($ca);
    }
    /**
     * @return string|false
     * @throws InvalidApiResponse
     * @throws InvalidArgumentException
     */
    public function tickets(\SupportPal\WhmcsIntegration\Request\Request $request)
    {
        $client = $this->authenticatedUserHelper->getAuthenticatedClient();
        if ($client === null) {
            return \json_encode(['draw' => (int) $request->get('draw', 1), 'recordsTotal' => 0, 'recordsFiltered' => 0, 'data' => [], 'error' => 'Not authenticated.']);
        }
        $orderByOptions = [1 => 'subject', 5 => 'updated_at'];
        $orderDirectionOptions = ['asc', 'desc'];
        $orderBy = \Illuminate\Support\Arr::get($request->get('order'), '0.column', 6);
        $orderBy = \array_key_exists($orderBy, $orderByOptions) ? $orderByOptions[$orderBy] : 'updated_at';
        $orderDirection = \Illuminate\Support\Arr::get($request->get('order'), '0.dir', 'desc');
        $orderDirection = \in_array($orderDirection, $orderDirectionOptions) ? $orderDirection : 'desc';
        $helpdeskUser = $this->userRepository->getHelpdeskAccount(null, $client->email);
        $tickets = [];
        $ticketCount = 0;
        // Only bother if the user exists in AD
        if (isset($helpdeskUser) && !empty($helpdeskUser['id'])) {
            // Get core settings
            $settings = $this->coreSettingsRepository->get();
            $departments = $this->modelToArrayConverter->convertMany($this->departmentRepository->findBy([])->getModels());
            $departments = \array_column($departments, null, 'id');
            $statuses = $this->modelToArrayConverter->convertMany($this->statusRepository->findBy([])->getModels());
            $statuses = \array_column($statuses, null, 'id');
            $priorities = $this->modelToArrayConverter->convertMany($this->priorityRepository->findBy([])->getModels());
            $priorities = \array_column($priorities, null, 'id');
            // Get tickets
            $data = ['internal' => 0, 'search' => ($search = \Illuminate\Support\Arr::get($request->get('search'), 'value')) !== '' ? $search : null, 'start' => $request->get('start', 0), 'limit' => $request->get('length', 10), 'order_column' => $orderBy, 'order_direction' => $orderDirection];
            // Handle if the user is part of an organisation
            if (!empty($helpdeskUser['organisation_id']) && (int) $helpdeskUser['organisation_access_level'] === 0) {
                $data['organisation'] = $helpdeskUser['organisation_id'];
            } else {
                $data['user'] = $helpdeskUser['id'];
            }
            $tickets = $this->ticketRepository->findBy($data);
            $ticketCount = $tickets->getCount();
            $tickets = $this->modelToArrayConverter->convertManyAndApply($tickets->getModels(), $this->setDepartmentName($departments), $this->setStatus($statuses), $this->setPriority($priorities), $this->formatDateTime($settings), $this->setTicketUrl());
        }
        $ticketData = [];
        foreach ($tickets as $ticket) {
            $ticketData[] = [0 => \sprintf('<span class="text-primary">#%s</span><br />%s', \e($ticket['number']), \e($ticket['subject'])), 1 => \e($ticket['department']), 2 => \sprintf('<span class="status" style="--status-color:%s">%s</span>', \e($ticket['status_colour']), \e($ticket['status'])), 3 => \sprintf('<span class="status" style="--status-color: %s">%s</span>', \e($ticket['priority_colour']), \e($ticket['priority'])), 4 => \e($ticket['updated_at']), 'RowData' => ['number' => \e($ticket['number']), 'token' => \e($ticket['token'])]];
        }
        return \json_encode(['draw' => (int) $request->get('draw', 1), 'recordsTotal' => $ticketCount, 'recordsFiltered' => $ticketCount, 'data' => $ticketData]);
    }
    /**
     * @param mixed[] $departments
     * @return Closure
     */
    private function setDepartmentName(array $departments) : \Closure
    {
        return function (array $ticket) use($departments) {
            $ticket['department'] = $departments[$ticket['department_id']]['name'];
            return $ticket;
        };
    }
    /**
     * @param mixed[] $statuses
     * @return Closure
     */
    private function setStatus(array $statuses) : \Closure
    {
        return function (array $ticket) use($statuses) {
            $ticket['status'] = $statuses[$ticket['status_id']]['name'];
            $ticket['status_colour'] = $statuses[$ticket['status_id']]['colour'];
            return $ticket;
        };
    }
    /**
     * @param mixed[] $priorities
     * @return Closure
     */
    private function setPriority(array $priorities) : \Closure
    {
        return function (array $ticket) use($priorities) {
            $ticket['priority'] = $priorities[$ticket['priority_id']]['name'];
            $ticket['priority_colour'] = $priorities[$ticket['priority_id']]['colour'];
            return $ticket;
        };
    }
    /**
     * @return Closure
     */
    private function setTicketUrl() : \Closure
    {
        return function (array $ticket) {
            $ticket['token'] = \sha1($ticket['id'] . '-' . $ticket['number']);
            return $ticket;
        };
    }
}
