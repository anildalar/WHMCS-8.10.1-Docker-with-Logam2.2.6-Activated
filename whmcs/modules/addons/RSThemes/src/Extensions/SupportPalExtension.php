<?php

namespace RSThemes\Extensions;

use RSThemes\View\ViewHelper;
use RSThemes\Helpers\Flash;
use RSThemes\Controller\Admin\TemplateController;
use RSThemes\Models\Settings as LagomSettings;
use WHMCS\Database\Capsule;
use RSThemes\Helpers\AddonHelper;
use RSThemes\Helpers\PagesHelper;
use RSThemes\Processors\PageProcessor;


/**
 * Class SupportToolsExtension
 * @package RSThemes\Extensions
 */
class SupportPalExtension extends Extension
{
    public $name = 'SupportPal Module Integration';
    public $description = 'Manage display settings for SupportPal Module Integration';
    public $version = '2.2.0';
    public $tableName = 'rsextension_supportpal';
    public $selected = false;
    public $updateRequired = false;
    static $isLicensed;

    public function handle(array $params = [])
    {

    }

    /**
     * Template paths for views
     */
    public function getTplPath()
    {
        if (!$this->isActive()) {
            $name = 'info';
        } else {
            $name = 'pages';
            if (isset($_GET['exaction'])) {
                $name = filter_input(INPUT_GET, 'exaction');
            }
        }
        return 'extensions/supportpal/' . $name;
    }

    /**
     * Extension Activate
     */
    public function loadConfig()
    {

        // $result = $this->checkLicense();
        // if($result != 'success')
        // {
        //     //Flash::setFlashMessage('error', $result);
        //     TemplateController::redirect((new ViewHelper())->url('Template@extension', ['templateName' => $this->template->getMainName(), 'extension' => $this->getLinkName()]));
        // }

        parent::loadConfig();
        $this->migrateExtension();

    }

    /**
     * Extension POST request handle
     */
    public function saveConfig()
    {
        if($_GET['exaction'] == "savePages" && isset($_POST))
        {
            unset($_POST['token']);

            LagomSettings::updateOrCreate(
                ['setting' => 'supportpal_extension_pages'],
                ['value' => json_encode($_POST)]
            );

            Flash::setFlashMessage('success', 'Templates saved sucessfully');
            TemplateController::redirect((new ViewHelper())->url('Template@extension', ['templateName' => $this->template->getMainName(), 'exaction' => 'pages', 'extension' => $this->getLinkName()]));
        }
        elseif ($_GET['exaction'] == "saveSettings" && isset($_POST)){
            $data = [];
            $kbcategories = $_POST['kbcategory']['id'];
            foreach($kbcategories as $index=>$categoryID) {
                if ($_POST['kbcategory']['kbid'][$index] == "") continue;
                $category[$index] = [
                    'id' => $index,
                    'icon' => $_POST['kbcategory']['icon'][$index],
                    'predefinedIcon' => $_POST['kbcategory']['predefined_icon'][$index],
                    'media' => $_POST['kbcategory']['media'][$index],
                    'kbId' => $_POST['kbcategory']['kbid'][$index] 
                ];
            }

            $data['viewticket'] = $_POST['viewticket'];
            $data['kbcategories'] = $category;
            $data['kbcategoriesCols'] = $_POST['kbcategoriesCols'];

            LagomSettings::updateOrCreate(
                ['setting' => 'supportpal_extension_settings'],
                ['value' => json_encode($data)]
            );

            Flash::setFlashMessage('success', 'Settings saved sucessfully');
            TemplateController::redirect((new ViewHelper())->url('Template@extension', ['templateName' => $this->template->getMainName(), 'exaction' => 'settings', 'extension' => $this->getLinkName()]));

        }
    }

    private function migrateExtension()
    {
        if (Capsule::schema()->hasTable('rsthemes_settings')) {
            if (LagomSettings::where('setting', 'supportpal_extension_pages')->doesntExist()) {
                LagomSettings::create([
                    'setting' => 'supportpal_extension_pages',
                    'value' => '{"support-departments":"default","knowledgebase-categories":"default","announcements":"default"}'
                ]);
            }
            if (LagomSettings::where('setting', 'supportpal_extension_settings')->doesntExist()) {
                LagomSettings::create([
                    'setting' => 'supportpal_extension_settings',
                    'value' => ''
                ]);
            }
        }
    }

    /**
     * Extension Deactivate
     */
    public function removeConfig()
    {
        if (isset($_GET['delete'])) {
            if (Capsule::schema()->hasTable('rsthemes_settings')) {
                LagomSettings::where("setting","supportpal_extension_pages")->first()->delete();
                LagomSettings::where("setting","supportpal_extension_settings")->first()->delete();
            }
            
        }
        parent::removeConfig();
    }

    public static function getPageTempates()
    {
        $data = LagomSettings::where("setting","supportpal_extension_pages")->get('value')->first()->toArray();
        $pages = json_decode($data['value']);
        return $pages;
    }

    public static function getPageSettings()
    {
        $data = LagomSettings::where("setting","supportpal_extension_settings")->get('value')->first()->toArray();
        $settings = json_decode($data['value']);
        return $settings;
    }

    public static function getImages()
    {
        $template = AddonHelper::getTemplate();
        $pageProcessor = new PageProcessor(AddonHelper::getTemplate()->getFullPath());
        $media = $pageProcessor->getPageManagerMedia();
        return $media;
    }
}