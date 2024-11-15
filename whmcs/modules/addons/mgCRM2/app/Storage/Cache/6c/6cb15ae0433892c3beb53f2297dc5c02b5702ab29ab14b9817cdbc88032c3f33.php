<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__2c1fdac8ee12009b693dd26e599e27a442916722544021f1a4b9f773e7adc64c */
class __TwigTemplate_0ebd8663d5cd41d9e754cd39b7faf3c9f093748cd79de9367a07fca217cf065c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'root' => [$this, 'block_root'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\"  data-ng-app=\"mgCRMapp\" lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"referrer\" content=\"same-origin\">

    <title data-ng-bind=\"page.title\">WHMCS - </title>

    <link href=\"/assets/fonts/css/open-sans-family.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"templates/blend/css/all.min.css?v=e65179\" rel=\"stylesheet\">
    <link href=\"templates/blend/css/theme.min.css?v=e65179\" rel=\"stylesheet\">
    <link href=\"/assets/css/fontawesome-all.min.css\" rel=\"stylesheet\">
    <script type=\"text/javascript\" src=\"/modules/addons/mgCRM2/templates/ModulesGarden/assets/plugins/jquery/jquery-1.11.2.min.js\"></script><script type=\"text/javascript\" src=\"/modules/addons/mgCRM2/templates/ModulesGarden/assets/plugins/jquery-migrate/jquery-migrate-1.2.1.min.js\"></script><script type=\"text/javascript\" src=\"/modules/addons/mgCRM2/templates/ModulesGarden/assets/plugins/jquery-ui/js/jquery-ui.min.js\"></script><script type=\"text/javascript\" src=\"templates/blend/js/vendor.min.js?v=e65179\"></script>
    <script type=\"text/javascript\" src=\"templates/blend/js/scripts.min.js?v=e65179\"></script>
    <script>
        var datepickerformat = \"dd/mm/yy\",
            csrfToken=\"85c3419b45f131fcf893444d5a36c2705ab78cc9\",
            adminBaseRoutePath = \"/admin\",
            whmcsBaseUrl = \"\";

                            var mentionsFormat = '@\${username}';

            </script>

    
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../modules/addons/mgCRM2/templates/ModulesGarden/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css\">

<link rel=\"shortcut icon\" href=\"/modules/addons/mgCRM2/templates/ModulesGarden/assets/img/favicon.png\"></head>
<body class=\"no-sidebar\" data-phone-cc-input=\"1\">

    

    <div class=\"alert alert-warning global-admin-warning\">
        
    </div>

    <div class=\"navigation\">
        <a href=\"index.php\" class=\"logo\" title=\"Home\">
    <img src=\"templates/blend/images/logo.png\">
</a>

<ul class=\"left-nav\">
    <li class=\"bt visible-sidebar\">
        <a href=\"#\" class=\"nav-toggle\" id=\"btnNavbarToggle\" aria-label=\"Navigation Menu\">
            <i aria-hidden=\"true\" class=\"fas fa-bars always\"></i>
        </a>
    </li>
</ul>

<div class=\"navbar-collapse\">
    <ul>
                    <li class=\"bt has-dropdown\">
                <a href=\"#\" onclick=\"return false;\">
                    <i class=\"fas fa-plus always\"></i>
                    <span class=\"visible-sidebar\">Add New</span>
                </a>
                <ul class=\"slim\">
                                            <li><a href=\"clientsadd.php\">New Client</a></li>
                                                                <li><a href=\"ordersadd.php\">New Order</a></li>
                                                                <li>
                            <a href=\"/admin/index.php?rp=/admin/billing/invoice/new\" class=\"open-modal\" data-modal-title=\"New Invoice\" data-btn-submit-id=\"btnCreateInvoice\" data-btn-submit-label=\"Create Invoice\">
                                New Invoice
                            </a>
                        </li>
                                                                <li><a href=\"quotes.php?action=manage\">New Quote</a></li>
                                                                <li><a href=\"supporttickets.php?action=open\">New Ticket</a></li>
                                    </ul>
            </li>
                <li class=\"has-dropdown\">
            <a id=\"Menu-Clients\" href=\"#\" onclick=\"return false;\">
                <i class=\"fas fa-user\"></i>
                Clients
                <span class=\"caret\"></span>
            </a>
            <ul>
                                    <li>
                        <a id=\"Menu-Clients-View_Search_Clients\" href=\"clients.php\">
                            View/Search Clients
                        </a>
                    </li>
                                                    <li>
                        <a id=\"Menu-Clients-View_Search_Users\" href=\"/admin/index.php?rp=/admin/user/list\">
                            Manage Users
                        </a>
                    </li>
                                                    <li>
                        <a id=\"Menu-Clients-Add_New_Client\" href=\"clientsadd.php\">
                            Add New Client
                        </a>
                    </li>
                                                    <li class=\"has-dropdown sub-menu expand\">
                        <a id=\"Menu-Clients-Products_Services\" href=\"/admin/index.php?rp=/admin/services\">
                            Products/Services
                        </a>
                        <ul>
                            <li>
                                <a id=\"Menu-Clients-Products_Services-Shared_Hosting\" href=\"/admin/index.php?rp=/admin/services/shared\">
                                    -
                                    Shared Hosting
                                </a>
                            </li>
                            <li>
                                <a id=\"Menu-Clients-Products_Services-Reseller_Accounts\" href=\"/admin/index.php?rp=/admin/services/reseller\">
                                    -
                                    Reseller Accounts
                                </a>
                            </li>
                            <li>
                                <a id=\"Menu-Clients-Products_Services-VPS_Servers\" href=\"/admin/index.php?rp=/admin/services/server\">
                                    -
                                    VPS/Servers
                                </a>
                            </li>
                            <li>
                                <a id=\"Menu-Clients-Products_Services-Other_Services\" href=\"/admin/index.php?rp=/admin/services/other\">
                                    -
                                    Other Services
                                </a>
                            </li>
                        </ul>
                    </li>
                                                    <li><a id=\"Menu-Clients-Service_Addons\" href=\"/admin/index.php?rp=/admin/addons\">
                        Service Addons</a>
                    </li>
                                                    <li>
                        <a id=\"Menu-Clients-Domain_Registration\" href=\"/admin/index.php?rp=/admin/domains\">
                            Domain Registrations
                        </a>
                    </li>
                                                    <li>
                        <a id=\"Menu-Clients-Cancelation_Requests\" href=\"cancelrequests.php\">
                            Cancellation Requests
                        </a>
                    </li>
                                                    <li>
                        <a id=\"Menu-Clients-Manage_Affiliates\" href=\"affiliates.php\">
                            Manage Affiliates
                        </a>
                    </li>
                            </ul>
        </li>
        <li class=\"has-dropdown\">
            <a id=\"Menu-Orders\" href=\"#\" onclick=\"return false;\">
                <i class=\"fas fa-shopping-cart\"></i>
                Orders
                <span class=\"caret\"></span>
            </a>
            <ul>
                                    <li>
                        <a id=\"Menu-Orders-List_All_Orders\" href=\"orders.php\">
                            List All Orders
                        </a>
                    </li>
                    <li>
                        <a id=\"Menu-Orders-Pending_Orders\" href=\"orders.php?status=Pending\">
                            -
                            Pending Orders
                        </a>
                    </li>
                    <li>
                        <a id=\"Menu-Orders-Active_Orders\" href=\"orders.php?status=Active\">
                            -
                            Active Orders
                        </a>
                    </li>
                    <li>
                        <a id=\"Menu-Orders-Fraud_Orders\" href=\"orders.php?status=Fraud\">
                            -
                            Fraud Orders
                        </a>
                    </li>
                    <li>
                        <a id=\"Menu-Orders-Cancelled_Orders\" href=\"orders.php?status=Cancelled\">
                            -
                            Cancelled Orders
                        </a>
                    </li>
                                                    <li>
                        <a id=\"Menu-Orders-Add_New_Order\" href=\"ordersadd.php\">
                            Add New Order
                        </a>
                    </li>
                            </ul>
        </li>
        <li class=\"has-dropdown\">
            <a id=\"Menu-Billing\" href=\"#\" onclick=\"return false;\">
                <i class=\"fas fa-credit-card\"></i>
                Billing
                <span class=\"caret\"></span>
            </a>
            <ul>
                                    <li>
                        <a id=\"Menu-Billing-Transactions_List\" href=\"transactions.php\">
                            Transactions List
                        </a>
                    </li>
                                                    <li class=\"has-dropdown expand\">
                        <a id=\"Menu-Billing-Invoices\" href=\"invoices.php\">
                            Invoices
                        </a>
                        <ul>
                            <li><a id=\"Menu-Billing-Invoices-Paid\" href=\"invoices.php?status=Paid\">- Paid</a></li>
                            <li><a id=\"Menu-Billing-Invoices-Draft\" href=\"invoices.php?status=Draft\">- Draft</a></li>
                            <li><a id=\"Menu-Billing-Invoices-Unpaid\" href=\"invoices.php?status=Unpaid\">- Unpaid</a></li>
                            <li><a id=\"Menu-Billing-Invoices-Overdue\" href=\"invoices.php?status=Overdue\">- Overdue</a></li>
                            <li><a id=\"Menu-Billing-Invoices-Cancelled\" href=\"invoices.php?status=Cancelled\">- Cancelled</a></li>
                            <li><a id=\"Menu-Billing-Invoices-Refunded\" href=\"invoices.php?status=Refunded\">- Refunded</a></li>
                            <li><a id=\"Menu-Billing-Invoices-Collections\" href=\"invoices.php?status=Collections\">- Collections</a></li>
                            <li><a id=\"Menu-Billing-Invoices-Payment_Pending\" href=\"invoices.php?status=Payment%20Pending\">- Payment Pending</a></li>
                        </ul>
                    </li>
                                                    <li class=\"has-dropdown expand\">
                        <a id=\"Menu-Billing-Billable_Items\" href=\"billableitems.php\">
                            Billable Items
                        </a>
                        <ul>
                            <li><a id=\"Menu-Billing-Billable_Items-Uninvoiced_Items\" href=\"billableitems.php?status=Uninvoiced\">- Uninvoiced Items</a></li>
                            <li><a id=\"Menu-Billing-Billable_Items-Recurring_Items\" href=\"billableitems.php?status=Recurring\">- Recurring Items</a></li>
                            <li><a id=\"Menu-Billing-Billable_Items-Add_New\" href=\"billableitems.php?action=manage\">- Add New</a></li>                        </ul>
                    </li>
                                                    <li class=\"expand\">
                        <a id=\"Menu-Billing-Quotes\" href=\"quotes.php\">
                            Quotes
                        </a>
                        <ul>
                            <li><a id=\"Menu-Billing-Quotes-Valid\" href=\"quotes.php?validity=Valid\">- Valid</a></li>
                            <li><a id=\"Menu-Billing-Quotes-Expired\" href=\"quotes.php?validity=Expired\">- Expired</a></li>
                            <li><a id=\"Menu-Billing-Quotes-Create_New_Quote\" href=\"quotes.php?action=manage\">- Create New Quote</a></li>
                        </ul>
                    </li>
                                                    <li><a id=\"Menu-Billing-Offline_CC_Processing\" href=\"offlineccprocessing.php\">Offline CC Processing</a></li>
                
                                    <li><a id=\"Menu-Billing-Disputes\" href=\"/admin/index.php?rp=/admin/billing/disputes\">Disputes</a></li>
                                                    <li><a id=\"Menu-Billing-Gateway_Log\" href=\"gatewaylog.php\">Gateway Log</a></li>
                            </ul>
        </li>
        <li class=\"has-dropdown\">
            <a id=\"Menu-Support\" href=\"#\" onclick=\"return false;\">
                <i class=\"fas fa-life-ring\"></i>
                Support
                <span class=\"caret\"></span>
            </a>
            <ul>
                                    <li><a id=\"Menu-Support-Support_Overview\" href=\"supportcenter.php\">Support Overview</a></li>
                                                    <li class=\"has-dropdown expand\">
                        <a id=\"Menu-Support-Support_Tickets\" href=\"supporttickets.php\">
                            Support Tickets
                        </a>
                        <ul>
                            <li><a id=\"Menu-Support-Support_Tickets-Flagged_Tickets\" href=\"supporttickets.php?view=flagged\">- Flagged Tickets</a></li>
                            <li><a id=\"Menu-Support-Support_Tickets-All_Active_Tickets\" href=\"supporttickets.php?view=active\">- All Active Tickets</a></li>
                                                            <li><a id=\"Menu-Support-Support_Tickets-Open\" href=\"supporttickets.php?view=Open\">- Open</a></li>
                                                            <li><a id=\"Menu-Support-Support_Tickets-Answered\" href=\"supporttickets.php?view=Answered\">- Answered</a></li>
                                                            <li><a id=\"Menu-Support-Support_Tickets-Customer-Reply\" href=\"supporttickets.php?view=Customer-Reply\">- Customer-Reply</a></li>
                                                            <li><a id=\"Menu-Support-Support_Tickets-On_Hold\" href=\"supporttickets.php?view=On Hold\">- On Hold</a></li>
                                                            <li><a id=\"Menu-Support-Support_Tickets-In_Progress\" href=\"supporttickets.php?view=In Progress\">- In Progress</a></li>
                                                            <li><a id=\"Menu-Support-Support_Tickets-Closed\" href=\"supporttickets.php?view=Closed\">- Closed</a></li>
                                                    </ul>
                    </li>
                                                    <li><a id=\"Menu-Support-Open_New_Ticket\" href=\"supporttickets.php?action=open\">Open New Ticket</a></li>
                                                    <li><a id=\"Menu-Support-Predefined_Replies\" href=\"supportticketpredefinedreplies.php\">Predefined Replies</a></li>
                                                    <li><a id=\"Menu-Support-Announcements\" href=\"supportannouncements.php\">Announcements</a></li>
                                                    <li><a id=\"Menu-Support-Downloads\" href=\"supportdownloads.php\">Downloads</a></li>
                                                    <li><a id=\"Menu-Support-Knowledgebase\" href=\"supportkb.php\">Knowledgebase</a></li>
                                                    <li class=\"has-dropdown expand\">
                        <a id=\"Menu-Support-Network_Issues\" href=\"networkissues.php\">
                            Network Issues
                        </a>
                        <ul>
                            <li><a id=\"Menu-Support-Network_Issues-Open\" href=\"networkissues.php\">- Open</a></li>
                            <li><a id=\"Menu-Support-Network_Issues-Scheduled\" href=\"networkissues.php?view=scheduled\">- Scheduled</a></li>
                            <li><a id=\"Menu-Support-Network_Issues-Resolved\" href=\"networkissues.php?view=resolved\">- Resolved</a></li>
                            <li><a id=\"Menu-Support-Network_Issues-Create_New\" href=\"networkissues.php?action=manage\">- Create New</a></li>
                        </ul>
                    </li>
                            </ul>
        </li>
                    <li class=\"has-dropdown\">
                <a id=\"Menu-Reports\" href=\"#\" onclick=\"return false;\">
                    <i class=\"fas fa-chart-bar\"></i>
                    Reports
                    <span class=\"caret\"></span>
                </a>
                <ul>
                    <li><a id=\"Menu-Reports-Home\" href=\"reports.php\">Reports</a></li>
                    <li><a id=\"Menu-Reports-Daily_Performance\" href=\"reports.php?report=daily_performance\">Daily Performance</a></li>
                    <li><a id=\"Menu-Reports-Income_Forecast\" href=\"reports.php?report=income_forecast\">Income Forecast</a></li>
                    <li><a id=\"Menu-Reports-Annual_Income_Report\" href=\"reports.php?report=annual_income_report\">Annual Income Report</a></li>
                    <li><a id=\"Menu-Reports-New_Customers\" href=\"reports.php?report=new_customers\">New Customers</a></li>
                    <li><a id=\"Menu-Reports-Ticket_Feedback_Scores\" href=\"reports.php?report=ticket_feedback_scores\">Ticket Feedback Scores</a></li>
                    <li><a id=\"Menu-Reports-Batch_Invoice_PDF_Export\" href=\"reports.php?report=pdf_batch\">Batch Invoice PDF Export</a></li>
                    <li><a id=\"Menu-Reports-More...\" href=\"reports.php\">More...</a></li>
                </ul>
            </li>
                <li class=\"has-dropdown\">
            <a id=\"Menu-Utilities\" href=\"#\" onclick=\"return false;\">
                <i class=\"fas fa-file-alt\"></i>
                Utilities
                <span class=\"caret\"></span>
            </a>
            <ul>
                                    <li><a id=\"Menu-Utilities-Update\" href=\"update.php\">Update WHMCS</a></li>
                                                    <li><a id=\"Menu-Utilities-WHMCS_Connect\" href=\"whmcsconnect.php\">WHMCS Connect</a></li>
                                                    <li><a id=\"Menu-Utilities-System-Automation_Status\" href=\"automationstatus.php\">Automation Status</a></li>
                                                    <li><a id=\"Menu-Utilities-Module_Queue\" href=\"modulequeue.php\">Module Queue</a></li>
                                                    <li>
                        <a id=\"Menu-Utilities-Sitejet_Builder\" href=\"/admin/index.php?rp=/admin/utilities/sitejet/builder\" class=\"u-position-relative\">
                            Sitejet Builder
                            <span class=\"label label-success u-position-absolute u-right-0 sitejet-badge-new sitejet-success\">
                                New
                            </span>
                        </a>
                    </li>
                                                    <li><a id=\"Menu-Utilities-Tld_Sync\" href=\"/admin/index.php?rp=/admin/utilities/tools/tldsync/import\">Registrar TLD Sync</a></li>
                                                    <li><a id=\"Menu-Utilities-Email_Campaigns\" href=\"/admin/index.php?rp=/admin/utilities/tools/email/campaigns\">Email Campaigns</a></li>
                                                    <li><a id=\"Menu-Utilities-Email_Marketer\" href=\"utilitiesemailmarketer.php\">Email Marketer</a></li>
                                                    <li><a id=\"Menu-Utilities-Link_Tracking\" href=\"utilitieslinktracking.php\">Link Tracking</a></li>
                                                    <li><a id=\"Menu-Utilities-Calendar\" href=\"calendar.php\">Calendar</a></li>
                                                    <li><a id=\"Menu-Utilities-To-Do_List\" href=\"todolist.php\">To-Do List</a></li>
                                                    <li><a id=\"Menu-Utilities-WHOIS_Lookups\" href=\"whois.php\">WHOIS Lookup</a></li>
                                                    <li><a id=\"Menu-Utilities-Domain_Resolver\" href=\"utilitiesresolvercheck.php\">Domain Resolver</a></li>
                                                    <li><a id=\"Menu-Utilities-Integration_Code\" href=\"systemintegrationcode.php\">Integration Code</a></li>
                                                    <li class=\"has-dropdown expand\">
                        <a id=\"Menu-Utilities-System\" href=\"#\">
                            System
                        </a>
                        <ul>
                            <li><a id=\"Menu-Utilities-System-Database_Status\" href=\"systemdatabase.php\">Database Status</a></li>                            <li><a id=\"Menu-Utilities-System-System_Cleanup\" href=\"systemcleanup.php\">System Cleanup</a></li>                            <li><a id=\"Menu-Utilities-System-PHP_Info\" href=\"systemphpinfo.php\">PHP Info</a></li>                            <li><a id=\"Menu-Utilities-System-PhpCompat\" href=\"/admin/index.php?rp=/admin/utilities/system/php-compat\">PHP Version Compatibility</a></li>                        </ul>
                    </li>
                            </ul>
        </li>
        <li class=\"has-dropdown\">
            <a id=\"Menu-Addons\" href=\"#\" onclick=\"return false;\">
                <i class=\"fas fa-cube\"></i>
                Addons
                <span class=\"caret\"></span>
            </a>
            <ul>
                                    <li><a id=\"Menu-Addons-Advanced Billing\" href=\"addonmodules.php?module=AdvancedBilling\">Advanced Billing</a></li>
                                    <li><a id=\"Menu-Addons-RS Themes\" href=\"addonmodules.php?module=RSThemes\">RS Themes</a></li>
                                    <li><a id=\"Menu-Addons-Licensing Manager\" href=\"addonmodules.php?module=licensing\">Licensing Manager</a></li>
                                    <li><a id=\"Menu-Addons-CRMv2\" href=\"addonmodules.php?module=mgCRM2\">CRMv2</a></li>
                                    <li><a id=\"Menu-Addons-tawk.to WHMCS Module\" href=\"addonmodules.php?module=tawkto\">tawk.to WHMCS Module</a></li>
                            </ul>
        </li>
    </ul>

    <ul class=\"right-nav\">
                    <li class=\"bt\">
                <a href=\"automationstatus.php\" id=\"Menu-Automation-Status\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Automation Status\">
                                            <i class=\"fas fa-cogs always\"></i>
                                        <span class=\"visible-sidebar\">Automation Status</span>
                </a>
            </li>
                        <li class=\"bt has-dropdown\">
            <a id=\"Menu-Setup\" href=\"#\" onclick=\"return false;\">
                <i class=\"fas fa-wrench always\"></i>
                <span class=\"visible-sidebar\">Configuration</span>
            </a>
            <ul class=\"drop-icons\">
                                    <li>
                        <a id=\"Menu-Config-Setup\" href=\"/admin/index.php?rp=/admin/setup\">
                            <span class=\"ico-container\"><i class=\"fad fa-sliders-h\"></i></span>
                            System Settings
                        </a>
                    </li>
                                <li>
                    <a id=\"Menu-Config-Apps-Integrations\" href=\"/admin/index.php?rp=/admin/apps\">
                        <span class=\"ico-container wizard\"><i class=\"fad fa-cubes\"></i></span>
                        Apps & Integrations
                    </a>
                </li>
                                    <li>
                        <a id=\"Menu-Config-Admins\" href=\"configadmins.php\">
                            <span class=\"ico-container health\"><i class=\"fad fa-user-friends\"></i></span>
                            Manage Admins
                        </a>
                    </li>
                                                    <li>
                        <a id=\"Menu-Config-HealthStatus\" href=\"systemhealthandupdates.php\">
                            <span class=\"ico-container health\"><i class=\"fad fa-heart-rate\"></i></span>
                            System Health
                        </a>
                    </li>
                                                    <li>
                        <a id=\"Menu-Config-SetupWizard\" href=\"#\" onclick=\"openSetupWizard();return false;\">
                            <span class=\"ico-container wizard\"><i class=\"fad fa-magic\"></i></span>
                            Setup Wizard
                        </a>
                    </li>
                                                    <li>
                        <a id=\"Menu-Config-SysLogs\" href=\"systemactivitylog.php\">
                            <span class=\"ico-container logs\"><i class=\"fad fa-copy\"></i></span>
                            System Logs
                        </a>
                    </li>
                            </ul>
        </li>
        <li class=\"bt account has-dropdown\">
            <a id=\"Menu-Account\" href=\"#\" onclick=\"return false;\">
                                                                                    <img src=\"https://www.gravatar.com/avatar/1aedb8d9dc4751e229a335e371db8058?s=25&d=mp\" class=\"profile-icon\" alt=\"Account\"
                    onerror=\"\$(this).hide().parent().addClass('fas fa-user');\"/>
                <span class=\"visible-sidebar\">Account</span>
            </a>
            <ul class=\"slim drop-left\">
                <li><a href=\"myaccount.php\">My Account</a></li>
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#modalMyNotes\">My Notes</a></li>
                <li role=\"separator\" class=\"divider\"></li>
                <li><a href=\"../\">Visit Client Area</a></li>
                <li role=\"separator\" class=\"divider\"></li>
                <li><a id=\"Menu-Account-Logout\" href=\"logout.php\">Logout</a></li>
            </ul>
        </li>
        <li class=\"bt help has-dropdown\">
            <a id=\"Menu-Help\" href=\"#\" onclick=\"return false;\">
                <i class=\"far fa-question-circle always\"></i>
                <span class=\"visible-sidebar\">Help</span>
            </a>
            <ul class=\"drop-left\">
                <li><a href=\"https://docs.whmcs.com/\" target=\"_blank\">Documentation</a></li>
                <li><a href=\"systemsupportrequest.php\">Technical Support</a></li>
                <li><a id=\"Menu-Help-Community_Forums\" href=\"https://whmcs.community/?utm_source=InApp&utm_medium=Help_Menu\" target=\"_blank\">Community Forums</a></li>
                                    <li><a href=\"javascript:openFeatureHighlights()\">What's New</a></li>
                                                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"/admin/index.php?rp=/admin/help/license\">License Information</a></li>
                            </ul>
        </li>
    </ul>
</div>

<div class=\"intellisearch\" id=\"intelliSearchForm\">
    <form method=\"post\" action=\"/admin/index.php?rp=/admin/search/intellisearch\">
<input type=\"hidden\" name=\"token\" value=\"85c3419b45f131fcf893444d5a36c2705ab78cc9\" />
        <input type=\"hidden\" id=\"intelliSearchHideInactive\" name=\"hide_inactive\" value=\"1\">
        <i class=\"fas fa-search loader\"></i>
        <div class=\"input-group\">
            <input type=\"text\" name=\"searchterm\" class=\"form-control\" id=\"inputIntelliSearchValue\" placeholder=\"Enter search term...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\" id=\"btnIntelliSearchClose\">
                    <i class=\"far fa-times closer\"></i>
                </button>
            </span>
        </div>
        <input type=\"hidden\" id=\"intelliSearchExpand\" name=\"more\" value=\"\">
    </form>
</div>
    </div>

    <div class=\"sidebar\" id=\"sidebar\">
        <a href=\"#\" class=\"sidebar-collapse-expand\" id=\"sidebarCollapseExpand\">
            <i class=\"fa fa-chevron-down\"></i>
        </a>
        <div class=\"sidebar-collapse\">
            
<div class=\"sidebar-header\">
    <i class=\"fas fa-binoculars\"></i>
    Advanced Search
</div>
<div class=\"content-padded\">
    <form method=\"get\" action=\"search.php\">
        <select name=\"type\" id=\"searchtype\" onchange=\"populate(this)\" class=\"form-control\">
          <option value=\"clients\">Clients </option>
          <option value=\"orders\">Orders </option>
          <option value=\"services\">Services </option>
          <option value=\"domains\">Domains </option>
          <option value=\"invoices\">Invoices </option>
          <option value=\"tickets\">Tickets </option>
        </select>
        <select name=\"field\" id=\"searchfield\" class=\"form-control\">
          <option>Client ID</option>
          <option selected=\"selected\">Client Name</option>
          <option>Company Name</option>
          <option>Email Address</option>
          <option>Address 1</option>
          <option>Address 2</option>
          <option>City</option>
          <option>State</option>
          <option>Postcode</option>
          <option>Country</option>
          <option>Phone Number</option>
          <option>CC Last Four</option>
        </select>
        <div class=\"input-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" />
            <div class=\"input-group-btn\">
                <input type=\"submit\" value=\"Search\" class=\"btn btn-default\" />
            </div>
        </div>
    </form>
</div>

<div class=\"sidebar-header\">
    <i class=\"fas fa-users\"></i>
    Staff Online
</div>
<div class=\"content-padded small\">
    
</div>

<a href=\"#\" class=\"btn-min-sidebar\" id=\"sidebarClose\">
    &laquo; Minimise Sidebar
</a>
        </div>
    </div>
    <a href=\"#\" class=\"sidebar-opener\" id=\"sidebarOpener\">
        Open Sidebar
    </a>

    <div class=\"contentarea\" id=\"contentarea\">
        <div style=\"float:left;width:100%;\">
                            <h1></h1>
            ";
        // line 514
        $this->displayBlock('root', $context, $blocks);
        echo "        </div>
        <div class=\"clear\"></div>
    </div>

    <div class=\"footerbar\">
        <div class=\"copyright\">
            <!-- Removal of the WHMCS copyright notice is strictly prohibited -->
            <!-- Branding removal entitlement does not permit this line to be removed -->
            Copyright &copy;
            <a href=\"https://www.whmcs.com/\" target=\"_blank\">WHMCS</a> 2024.
            All Rights Reserved.
        </div>
        <div class=\"links\">
            <a href=\"https://www.whmcs.com/report-a-bug\" target=\"_blank\">Report a Bug</a>
            |
            <a href=\"https://docs.whmcs.com/\" target=\"_blank\">Documentation</a>
            |
            <a href=\"https://www.whmcs.com/contact\" target=\"_blank\">Contact Us</a>
        </div>
    </div>

    <div class=\"intellisearchresults\" id=\"intelligentSearchResults\">
    <div class=\"search-header\">
        <span class=\"search-result-count\">0</span> Search Results Found
    </div>
    <div class=\"outcome search-results\">
        <h5>
            Clients
            (<span class=\"count\"></span>)
            <i class=\"far fa-chevron-down\"></i>
        </h5>
        <ul data-type=\"client\">
            <li class=\"template\">
                <a href=\"/admin/clientssummary.php?userid=[id]\">
                    <span class=\"icon\"><i class=\"fal fa-user\"></i></span>
                    <strong>[name] [company_name]</strong>
                    #[id]
                    <span class=\"label [statusclass]\">[status]</span>
                    <em>[email]</em>
                </a>
            </li>
        </ul>
        <h5>
            Users
            (<span class=\"count\"></span>)
            <i class=\"far fa-chevron-down\"></i>
        </h5>
        <ul data-type=\"user\">
            <li class=\"template\">
                <a
                    [link]
                    class=\"open-modal\"
                    data-modal-title=\"Manage User: [email]\"
                    data-modal-size=\"modal-lg\"
                    data-btn-submit-label=\"Save\"
                    data-btn-submit-id=\"btnUpdateUser\"
                >
                    <span class=\"icon\"><i class=\"fal fa-user\"></i></span>
                    <strong>[name]</strong>
                    #[id]
                    <em>[email]</em>
                </a>
            </li>
        </ul>
        <h5>
            Contacts
            (<span class=\"count\"></span>)
            <i class=\"far fa-chevron-down\"></i>
        </h5>
        <ul data-type=\"contact\">
            <li class=\"template\">
                <a href=\"/admin/clientscontacts.php?userid=[user_id]&contactid=[id]\">
                    <span class=\"icon\"><i class=\"fal fa-user\"></i></span>
                    <strong>[name] [company_name]</strong>
                    #[id]
                    <em>[email]</em>
                </a>
            </li>
        </ul>
        <h5>
            Products/Services
            (<span class=\"count\"></span>)
            <i class=\"far fa-chevron-down\"></i>
        </h5>
        <ul data-type=\"service\">
            <li class=\"template\">
                <a href=\"/admin/clientsservices.php?userid=[user_id]&id=[id]\">
                    <span class=\"icon\"><i class=\"fal fa-cube\"></i></span>
                    <strong>[product_name] - [domain]</strong>
                    <span class=\"label [statusclass]\">[status]</span>
                    <em>[client_name] [client_company_name] #[user_id]</em>
                </a>
            </li>
        </ul>
        <h5>
            Domains
            (<span class=\"count\"></span>)
            <i class=\"far fa-chevron-down\"></i>
        </h5>
        <ul data-type=\"domain\">
            <li class=\"template\">
                <a href=\"/admin/clientsdomains.php?userid=[user_id]&id=[id]\">
                    <span class=\"icon\"><i class=\"fal fa-globe-americas\"></i></span>
                    <strong>[domain]</strong>
                    <span class=\"label [statusclass]\">[status]</span>
                    <em>[client_name] [client_company_name] #[user_id]</em>
                </a>
            </li>
        </ul>
        <h5>
            Invoices
            (<span class=\"count\"></span>)
            <i class=\"far fa-chevron-down\"></i>
        </h5>
        <ul data-type=\"invoice\">
            <li class=\"template\">
                <a href=\"/admin/invoices.php?action=edit&id=[id]\">
                    <span class=\"icon\"><i class=\"fal fa-file-invoice\"></i></span>
                    <strong>Invoice #[number]</strong>
                    <span class=\"label [statusclass]\">[status]</span>
                    <em>[client_name] [client_company_name] #[user_id]</em>
                </a>
            </li>
        </ul>
        <h5>
            Support Tickets
            (<span class=\"count\"></span>)
            <i class=\"far fa-chevron-down\"></i>
        </h5>
        <ul data-type=\"ticket\">
            <li class=\"template\">
                <a href=\"/admin/supporttickets.php?action=view&id=[id]\">
                    <span class=\"icon\"><i class=\"fal fa-comments\"></i></span>
                    <strong>Ticket #[mask]</strong>
                    <em>[subject]</em>
                </a>
            </li>
        </ul>
        <h5>
            Other Search Results
            (<span class=\"count\"></span>)
            <i class=\"far fa-chevron-down\"></i>
        </h5>
        <ul data-type=\"other\">
            <li class=\"template\">
                <a href=\"/admin/[href]\">
                    <span class=\"icon\"><i class=\"[icon]\"></i></span>
                    <strong>[title]</strong>
                    <em>[subTitle]</em>
                </a>
            </li>
        </ul>
    </div>
    <div class=\"outcome search-in-progress\">
        <i class=\"fas fa-spinner fa-spin\"></i>
        Performing search...
    </div>
    <div class=\"outcome search-no-results\">
        <i class=\"fas fa-exclamation-triangle\"></i>
        No search results found.<br>
        Please try broadening your search term.
    </div>
    <div class=\"outcome session-expired\">
        <i class=\"fas fa-exclamation-triangle\"></i>
        Your session has expired.<br>
        Please refresh the page and try again.
    </div>
    <div class=\"outcome search-warning\">
        <i class=\"fas fa-exclamation-triangle\"></i>
        <span class=\"warning-msg\"></span>
    </div>
    <div class=\"outcome error\">
        <i class=\"fas fa-exclamation-triangle\"></i>
        An Error Occurred.<br>
        Please see the browser console log for more information.
    </div>
    <div class=\"search-footer\">
        <a href=\"#\" class=\"collapse-toggle\" data-lang-collapse=\"Collapse All\" data-lang-expand=\"Expand All\">Collapse All</a>
        <span class=\"realtime\">
            <input type=\"checkbox\" id=\"intelliSearchRealtime\" data-size=\"mini\"
                data-label-text=\"Search as you type\" data-on-color=\"info\"
                data-url=\"/admin/index.php?rp=/admin/search/intellisearch/settings/autosearch\"
                 checked            >
        </span>
        <span class=\"hide-inactive\"><input type=\"checkbox\" id=\"intelliSearchHideInactiveSwitch\" data-size=\"mini\" data-label-text=\"Hide Inactive Clients\" checked=\"checked\"></span>
    </div>
    <div class=\"hidden\">
        <a class=\"search-more-results\" data-type=\"placeholder\">
            <i class=\"fas fa-info-circle\"></i>
            Show :count More Results.
        </a>
    </div>
</div>
    <form method=\"post\" action=\"/admin/index.php?rp=/admin/profile/notes\" id=\"frmMyNotes\">
    <input type=\"hidden\" name=\"action\" value=\"savenotes\" />
    <input type=\"hidden\" name=\"token\" value=\"85c3419b45f131fcf893444d5a36c2705ab78cc9\" />
    <div class=\"modal fade modal-my-notes\" id=\"modalMyNotes\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content panel-primary\">
                <div class=\"modal-header panel-heading\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">My Notes</h4>
                </div>
                <div class=\"modal-body\">
                    <textarea id=\"mynotesbox\" name=\"notes\" rows=\"12\" class=\"form-control\">Welcome to OceanPBX!  Please ensure you have setup the cron job to automate tasks</textarea>
                </div>
                <div class=\"modal-footer panel-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\" id=\"btnMyNotesSave\">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</form>


<div class=\"modal whmcs-modal fade\" id=\"modalAjax\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content panel panel-primary\">
            <div class=\"modal-header panel-heading\" id=\"modalAjaxHeader\">
                <button id=\"modalAjaxCloseSmall\" type=\"button\" class=\"close\" data-dismiss=\"modal\">
                    <span aria-hidden=\"true\">&times;</span>
                    <span class=\"sr-only\">Close</span>
                </button>
                <h4 class=\"modal-title\" id=\"modalAjaxTitle\"></h4>
            </div>
            <div class=\"modal-body panel-body\" id=\"modalAjaxBody\">
                Loading...
            </div>
            <div class=\"modal-footer panel-footer\" id=\"modalAjaxFooter\">
                <div id=\"modalFooterLeft\"></div>
                <div class=\"pull-left loader\" id=\"modalAjaxLoader\">
                    <i class=\"fas fa-circle-notch fa-spin\"></i>
                    Loading...
                </div>
                <button id=\"modalAjaxClose\" type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
                    Close
                </button>
                <button type=\"button\" class=\"btn btn-primary modal-submit\" id=\"modalAjaxSubmit\">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
        <div id=\"callPopup\" class=\"call-popup\">
        <div class=\"left-panel\">
            <button type=\"button\" class=\"close-btn\" onclick=\"closePopup()\">X</button>
            <span class=\"status\">CONNECTED</span>
        </div>
        <div class=\"right-panel\">
            <div class=\"header\">
                <div class=\"icons\">
                    <!-- Top-aligned Icons -->
                    <i id=\"acceptIcon\" class=\"icon\" onclick=\"acceptCall()\">📞</i>
                    <i class=\"icon\">📆</i>
                    <i class=\"icon\">✏️</i>
                    <i class=\"icon\">📄</i>
                    <i class=\"icon\">⚙️</i>
                    <i class=\"icon\">🔔</i>
                    <i id=\"endIcon\" class=\"icon\" onclick=\"endCall()\" style=\"display: none;\">🔴</i>
                </div>
            </div>
            <div class=\"caller-info\">
                <span class=\"inbound-label\">inbound</span>
                <h5 class=\"caller-name\">MILLENIUM BPO S.A</h5>
                <p class=\"caller-number\">14237655388</p>
            </div>
            <div class=\"timer\">
                <span id=\"timer\">00:00:00</span>
            </div>
            <textarea class=\"note-input\" placeholder=\"Enter Your Note\"></textarea>
            <button class=\"save-btn\"><a id=\"contactLink\" href=\"#\" target=\"_blank\" class=\"save-btn\">Open Contact</a></button>
        </div>
    </div>
    <style>
        .call-popup {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 400px;
            height: 300px;
            display: flex;
            background-color: #f7f7f7;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            font-family: Arial, sans-serif;
            overflow: hidden;
            z-index: 10000;
        }
        .vibrate {
            animation: vibrate 0.3s infinite;
        }
        @keyframes vibrate {
            0% { transform: translate(1px, 1px) rotate(0deg); }
            10% { transform: translate(-1px, -2px) rotate(-1deg); }
            20% { transform: translate(-3px, 0px) rotate(1deg); }
            30% { transform: translate(3px, 2px) rotate(0deg); }
            40% { transform: translate(1px, -1px) rotate(1deg); }
            50% { transform: translate(-1px, 2px) rotate(-1deg); }
            60% { transform: translate(-3px, 1px) rotate(0deg); }
            70% { transform: translate(3px, 1px) rotate(-1deg); }
            80% { transform: translate(-1px, -1px) rotate(1deg); }
            90% { transform: translate(1px, 2px) rotate(0deg); }
            100% { transform: translate(1px, -2px) rotate(-1deg); }
        }
        .inbound-label, .caller-name, .caller-number {
            font-weight: bold;
            color: #ff5722; 
        }
        .left-panel {
            width: 60px;
            background-color: #ff9800;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
            padding: 10px;
            position: relative;
            justify-content: center;
        }
        .status {
            font-size: 15px;
            font-weight: bold;
            margin-top: 10px;
            writing-mode: vertical-rl;
            text-orientation: mixed;
        }
        .close-btn {
            background: #333;
            border: none;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            cursor: pointer;
            position: absolute;
            top: 5px;
            left: 17px;
        }
        .right-panel {
            flex: 1;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .header {
            display: flex;
            justify-content: flex-end;
            gap: 8px;
        }
        .icons {
            display: flex;
            gap: 8px;
        }
        .icon {
            font-size: 16px;
            cursor: pointer;
        }
        .caller-info {
            margin-top: 10px;
        }
        .caller-info h5 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }
        .caller-info p {
            margin: 4px 0;
            font-size: 14px;
            color: #666;
        }
        .timer {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin: 10px 0;
        }
        .note-input {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: none;
            margin-top: 8px;
        }
        .save-btn {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            margin-top: 10px;
        }
        .save-btn:hover {
            background-color: #45a049;
        }
    </style>
    <!-- JavaScript to trigger the modal on page load -->
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/socket.io-client@4.4.0/dist/socket.io.min.js\"></script>
    <script>
        window.onload = function () {
            var baseUrl = \"<?php echo getBaseURL(); ?>\";
            const socketServerUrl = \"https://pbx7.oceanpbx.club:10000\";
            const socket = io(socketServerUrl); //
            var CrmTableID = 0;
            socket.on('connect', () => {
                console.log(\"Connected to socket.io server\");
            });
            socket.on('incomingCall', (data) => {
                startTimer();
                document.querySelector('.inbound-label').textContent = data.direction || \"Inbound\";
                document.querySelector('.caller-name').textContent = data.callerName || \"Unknown Caller\";
                document.querySelector('.caller-number').textContent = data.callerNumber || \"Unknown Number\";
                document.getElementById('callPopup').classList.add('vibrate');
                \$.ajax({
                    url: '/modules/addons/CTIAdapter/checkCrmData.php',  // Adjust to your actual endpoint
                    method: 'POST',
                    data: { phone: data.callerNumber },
                    success: function(response) {
                        const parsedResponse = JSON.parse(response);
                        CrmTableID = parsedResponse.id;
                        if (parsedResponse.status === 'success') {
                            const contactLink = document.getElementById('contactLink');
                            if (contactLink) {
                                contactLink.href = `/admin/crm.php#!/contacts/`+parsedResponse.id+`/summary`;
                            }
                        } else if (parsedResponse.status === 'exists') {
                            const contactLink = document.getElementById('contactLink');
                            const NameOfContact =  parsedResponse.fname +  parsedResponse.lname;
                            document.querySelector('.caller-name').textContent = NameOfContact;
                            if (contactLink) {
                                contactLink.href = `/admin/crm.php#!/contacts/`+parsedResponse.id+`/summary`;
                            }
                        } else if (parsedResponse.status === 'error') {
                            console.log('Error: ' + parsedResponse.message);
                        } else {
                            console.log('Unexpected status: ' + parsedResponse.status);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error checking or storing record: ', error);
                    }
                });
            });
            socket.on('callAccepted', () => {
                console.log(\"After Accept Call\",CrmTableID);
                const contactLink = document.getElementById('contactLink');
                if (contactLink) {
                    console.log(\"okk\");
                    const contactUrl = `/admin/crm.php#!/contacts//summary`;
                    contactLink.href = contactUrl;
                    window.open(contactUrl, '_blank');
                }
            });    
            socket.on('endCall', () => {
                endCall();
            });
        };
        let timerInterval;
        function startTimer() {
            let seconds = 0;
            timerInterval = setInterval(() => {
                seconds++;
                document.getElementById('timer').textContent = new Date(seconds * 1000).toISOString().substr(11, 8);
            }, 1000);
        }
        function closePopup() {
            document.getElementById('callPopup').style.display = 'none';
            clearInterval(timerInterval);
        }
        function saveNote() {
            const note = document.querySelector('.note-input').value;
            alert(\"Note saved: \" + note);
        }
        function acceptCall() {
            document.getElementById('acceptIcon').style.display = 'none';
            document.getElementById('endIcon').style.display = 'inline-block';
        }
        function endCall() {
            document.getElementById('endIcon').style.display = 'none';
            document.getElementById('acceptIcon').style.display = 'inline-block';
            // closePopup();
        }
    </script>

<script>var adminJsVars = {\"today\":\"2024-11-14\",\"minYear\":2000,\"maxYear\":2060,\"dateRangeFormat\":\"DD\\/MM\\/YYYY\",\"dateTimeRangeFormat\":\"DD\\/MM\\/YYYY HH:mm\",\"dateRangePicker\":{\"months\":[\"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\"],\"daysOfWeek\":[\"Su\",\"Mo\",\"Tu\",\"We\",\"Th\",\"Fr\",\"Sa\"],\"cancelLabel\":\"Clear\",\"applyLabel\":\"Apply\",\"customRangeLabel\":\"Custom\",\"defaultRanges\":{\"Today\":[\"14\\/11\\/2024 00:00\",\"14\\/11\\/2024 00:00\"],\"Yesterday\":[\"13\\/11\\/2024 00:00\",\"13\\/11\\/2024 00:00\"],\"Last 7 Days\":[\"08\\/11\\/2024 00:00\",\"14\\/11\\/2024 00:00\"],\"Last 30 Days\":[\"16\\/10\\/2024 00:00\",\"14\\/11\\/2024 00:00\"],\"This Month\":[\"01\\/11\\/2024 00:00\",\"30\\/11\\/2024 23:59\"],\"1 Month Ago\":[\"01\\/10\\/2024 00:00\",\"31\\/10\\/2024 23:59\"],\"This Year\":[\"01\\/01\\/2024 00:00\",\"31\\/12\\/2024 23:59\"],\"1 Year Ago\":[\"01\\/01\\/2023 00:00\",\"31\\/12\\/2023 23:59\"]},\"futureRanges\":{\"Today\":[\"14\\/11\\/2024 00:00\",\"14\\/11\\/2024 00:00\"],\"Tomorrow\":[\"15\\/11\\/2024 00:00\",\"15\\/11\\/2024 00:00\"],\"Next 7 Days\":[\"20\\/11\\/2024 00:00\",\"14\\/11\\/2024 00:00\"],\"Next 30 Days\":[\"13\\/12\\/2024 00:00\",\"14\\/11\\/2024 00:00\"],\"This Month\":[\"01\\/11\\/2024 00:00\",\"30\\/11\\/2024 23:59\"],\"1 Month From Now\":[\"01\\/12\\/2024 00:00\",\"31\\/12\\/2024 23:59\"],\"1 Year From Now\":[\"01\\/01\\/2024 00:00\",\"31\\/12\\/2024 23:59\"]},\"futureRangesTime\":{\"Today\":[\"14\\/11\\/2024 00:00\",\"14\\/11\\/2024 23:59\"],\"Tomorrow\":[\"15\\/11\\/2024 00:00\",\"15\\/11\\/2024 23:59\"],\"Next 7 Days\":[\"20\\/11\\/2024 00:00\",\"14\\/11\\/2024 23:59\"],\"Next 30 Days\":[\"13\\/12\\/2024 00:00\",\"14\\/11\\/2024 23:59\"],\"This Month\":[\"01\\/11\\/2024 00:00\",\"30\\/11\\/2024 23:59\"],\"1 Month From Now\":[\"01\\/12\\/2024 00:00\",\"31\\/12\\/2024 23:59\"],\"This Year\":[\"01\\/01\\/2024 00:00\",\"31\\/12\\/2024 23:59\"]},\"defaultSingleRanges\":{\"Today\":[\"14\\/11\\/2024 23:59\",\"14\\/11\\/2024 23:59\"],\"Yesterday\":[\"13\\/11\\/2024 23:59\",\"13\\/11\\/2024 23:59\"],\"7 Days Ago\":[\"07\\/11\\/2024 23:59\",\"07\\/11\\/2024 23:59\"],\"1 Month Ago\":[\"14\\/10\\/2024 23:59\",\"14\\/10\\/2024 23:59\"],\"1 Year Ago\":[\"14\\/11\\/2023 23:59\",\"14\\/11\\/2023 23:59\"]},\"futureSingleRanges\":{\"Today\":[\"14\\/11\\/2024 23:59\",\"14\\/11\\/2024 23:59\"],\"Tomorrow\":[\"15\\/11\\/2024 23:59\",\"15\\/11\\/2024 23:59\"],\"In 7 Days\":[\"21\\/11\\/2024 23:59\",\"21\\/11\\/2024 23:59\"],\"1 Month From Now\":[\"14\\/12\\/2024 23:59\",\"14\\/12\\/2024 23:59\"],\"1 Year From Now\":[\"14\\/11\\/2025 23:59\",\"14\\/11\\/2025 23:59\"]},\"futureTimeSingleRanges\":{\"Today\":[\"14\\/11\\/2024 00:00\",\"14\\/11\\/2024 00:00\"],\"Tomorrow\":[\"15\\/11\\/2024 00:00\",\"15\\/11\\/2024 00:00\"],\"In 7 Days\":[\"21\\/11\\/2024 00:00\",\"21\\/11\\/2024 00:00\"],\"1 Month From Now\":[\"14\\/12\\/2024 00:00\",\"14\\/12\\/2024 00:00\"],\"1 Year From Now\":[\"14\\/11\\/2025 00:00\",\"14\\/11\\/2025 00:00\"]}}};</script>


</body>
</html>
";
    }

    public function block_root($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__2c1fdac8ee12009b693dd26e599e27a442916722544021f1a4b9f773e7adc64c";
    }

    public function getDebugInfo()
    {
        return array (  546 => 514,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2c1fdac8ee12009b693dd26e599e27a442916722544021f1a4b9f773e7adc64c", "");
    }
}
