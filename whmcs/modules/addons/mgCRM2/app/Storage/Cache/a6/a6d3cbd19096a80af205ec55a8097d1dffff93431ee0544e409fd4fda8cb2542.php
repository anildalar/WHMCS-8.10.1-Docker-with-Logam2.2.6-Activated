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

/* integrated.twig */
class __TwigTemplate_6cce04a6a90ade840f86eb1d672aa40419d3d1893249ab9549e322d728f92bf6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'root' => [$this, 'block_root'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["whmcs"] ?? null), "templateContent", [])), "integrated.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = [])
    {
        // line 4
        echo "
    <!-- START main angular app wrapper -->
    <div class=\"mg-wrapper body full-screen-module-container\" data-target=\".body\" data-spy=\"scroll\" data-twttr-rendered=\"true\" ng-controller=\"AppController\">

        <!-- START GLOBALS -->

            <!-- Header External Includes-->
            ";
        // line 12
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "url_scheme", []), "html", null, true);
        echo "://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>

            ";
        // line 15
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-ui-tree-master/dist/angular-ui-tree.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />

            <!-- Header Include Libs -->

";
        // line 22
        echo "
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-ui/css/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/bootstrap/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ng-dialog/css/ngDialog.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ng-dialog/css/ngDialog-theme-default.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-xeditable/css/xeditable.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/block-ui/angular-block-ui.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-select/dist/select.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-bootstrap-calendar/dist/css/angular-bootstrap-calendar.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-moment-picker/dist/angular-moment-picker.min.css\" rel=\"stylesheet\">

        <!-- END GLOBALS -->

        <!-- START DYMANICLY LOADED CSS FILES -->
        <!-- here is a place where angular will put css/js files needed to load dynamically NEEDS TO BE AFTER GLOBALS -->
        <link id=\"ng_load_plugins_before\" />
        <!-- END DYMANICLY LOADED CSS FILES -->


        <!-- Header Include General Style -->
        <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/global-components.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Header Include Layout specific colors theme  -->
        <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/layout.css\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        // line 48
        echo "        <!-- Header Include Layout plugins custom styles -->
        <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- CUSTOM DEFINED !? just for module purpose -->
        <link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/custom.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- possible to mergo above -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <!-- CSS DIRECTIVES TO PUT IMAGES URL ETC -->
        
        <style>
            .mg-wrapper .mg-loader-flow {
                background: url(";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/img/mg-loader-flow.png) no-repeat;
            }

            
        </style>

        <!-- PAGE SPINNER will be here -->

        <!-- END PAGE SPINNER -->

        <!-- BEGIN HEADER -->
        <div class=\"page-header\">
           ";
        // line 77
        $this->loadTemplate("partials/header.twig", "integrated.twig", 77)->display($context);
        // line 78
        echo "        </div>
        <!-- END HEADER -->

        <div class=\"clearfix\">
        </div>

        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">

            <!-- BEGIN PAGE CONTENT -->
            <!-- usable with class: container-fluid -->
            <div class=\"page-content\" ng-controller=\"ContentController\">
                
                <!-- BEGIN PAGE SPINNER -->
                <div ng-spinner-bar class=\"page-mg-loadingbar\">
                    <div class=\"mg-loader\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/img/mg-loader.gif\" /></div>
                </div>
                <!-- END PAGE SPINNER -->
                <!-- BEGIN FOLLOW UPS ALARM -->
                <div ng-controller=\"FollowUpsActiveAlarmController\">
                    <div class=\"box-followups-alarm\" ng-style=\"{'display': showDisplay }\">
                        <div ng-repeat=\"item in followupList\" class=\"followups-alarm\">
                            <div style=\"display: inline-block; margin-right: 5px;\">
                                <div class=\"title\">
                                    <h4>
                                        <strong>
                                            <span ng-bind-html=\"item.resource.email\" style=\"margin-right: 10px;\"></span>
                                        </strong>
                                        <span class=\"label ng-binding\" ng-style=\"{'background-color': item.type.color }\" ng-bind-html=\"item.type.name\"></span>
                                    </h4>
                                </div>
                                <div class=\"context\">
                                    <strong>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => "followups.alarm.date.label"], "method"), "html", null, true);
        echo "</strong><span ng-bind-html=\"item.date\" style=\"margin-left: 10px;\"></span>
                                    <br>
                                    <strong>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => "followups.alarm.description.label"], "method"), "html", null, true);
        echo "</strong><span ng-bind-html=\"item.description\" style=\"margin-left: 10px;\"></span>
                                </div>
                            </div>
                            <button type=\"button\" class=\"close\" style=\"display: inline-block;\" ng-class=\"'button-close-alarm-' + item.id\" ng-click=\"close(\$event,\$index)\">
                                <span aria-hidden=\"true\">×</span>
                                <span class=\"sr-only\">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END FOLLOW UPS ALARM -->
                <div class=\"container-fluid fade-in-up\">
                    
                    ";
        // line 126
        echo "                    <div class=\"clearfix\"></div>
                    <div class=\"container-fluid raw\">
                        ";
        // line 129
        echo "                        <ui-breadcrumbs displayname-property=\"data.pageTitle\" abstract-proxy-property=\"data.proxy\" class=\"pull-left\"></ui-breadcrumbs>
                        ";
        // line 131
        echo "                        <loading-notification></loading-notification>
                        <acl-no-access-notification></acl-no-access-notification>
                    </div>                   
                    <div ng-controller=\"NotificationsController\">
                        <div class=\"row-fluid ng-hide\" ng-show=\"showNotifications\" style=\"display:none;\" ng-style=\"{'display': (showNotifications) ? 'block':'none'}\">
                            <div class=\"box light margin-bottom-10\" ng-class=\"{'toogled': hiddenBox }\">
                                <div class=\"box-title\">
                                    <div class=\"caption\">
                                        <span class=\"font-red-thunderbird uppercase pull-left\" ng-bind-html=\" ( notifications.length > 1 ? 'notifications.main.widget.many' : 'notifications.main.widget.single') | translate:{ num: notifications.length }\"></span>
                                    </div>
                                    <div class=\"actions\">
                                        <a href=\"#\" ng-show=\"hiddenBox\" ng-click=\"hiddenBox=!hiddenBox\" class=\"btn btn-sm btn-danger btn-circle btn-outline btn-inverse btn-transparent btn-icon-only\">
                                            <i class=\"fa fa-expand\"></i>
                                        </a>
                                        <a href=\"#\" ng-hide=\"hiddenBox\" ng-click=\"hiddenBox=!hiddenBox\" class=\"btn btn-sm btn-danger btn-circle btn-outline btn-inverse btn-transparent btn-icon-only\">
                                            <i class=\"fa fa-compress\"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"box-body notifications\">
                                   <div class=\"note padding-right-15\" ng-class=\"n.class\" ng-repeat=\"n in notifications\">
                                        <span ng-show=\"n.accepted_at && n.confirmation\" class=\"text-muted small pull-right\">";
        // line 152
        echo "{{";
        echo " ::('notifications.main.accepted' | translate) ";
        echo "}}";
        echo " ";
        echo "{{";
        echo " n.accepted_at ";
        echo "}}";
        echo "</span>
                                        <p ng-bind-html=\"n.content\"  style=\"margin-bottom:0;\"></p>
                                        <button ng-show=\"n.confirmation && !n.accepted_at\" style=\"margin-top:10px;\" ng-click=\"acceptNote(n.id)\" class=\"btn btn-sm btn-success btn-inverse\">";
        // line 154
        echo "{{";
        echo " ::('notifications.main.btn.accept' | translate) ";
        echo "}}";
        echo "</button>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 162
        echo "        
                    ";
        // line 164
        echo "                    <div ui-view></div>
                    ";
        // line 166
        echo "
                </div>
            </div>
            <!-- END PAGE CONTENT -->


            <!-- BEGIN FOOTER -->
            <div class=\"page-footer\">
                <div class=\"container\">
                     ";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => "CRM"], "method"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => "Customer Relationship Manager"], "method"), "html", null, true);
        echo ". &copy; <a href=\"http://www.modulesgarden.com\" class=\"mgBanner\" target=\"_blank\">ModulesGarden</a>
                </div>
            </div>
            <div class=\"scroll-to-top\">
                <i class=\"icon-arrow-up\"></i>
            </div>
            <!-- END FOOTER -->

        </div>
        <!-- END CONTAINER -->


        <!-- BEGIN CORE JQUERY PLUGINS -->
        <!--[if lt IE 9]>
        <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/respond.min.js\"></script>
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/excanvas.min.js\"></script>
        <![endif]-->

         ";
        // line 193
        if ($this->getAttribute(($context["whmcs"] ?? null), "isVersion78", [])) {
            // line 194
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
            echo "/assets/plugins/jquery-ui/js/jquery-ui.min.js\" type=\"text/javascript\"></script>
         ";
        }
        // line 196
        echo "
        <!-- CORE JQUERY PLUGINS -->
        <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-blockui/jquery.blockui.min.js\" type=\"text/javascript\"></script>
";
        // line 203
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
        <!-- END CORE JQUERY PLUGINS -->

        ";
        // line 207
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/app.mgCRM.js\" type=\"text/javascript\"></script>

        <!-- BEGIN CORE ANGULARJS PLUGINS -->
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-cookies.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-sanitize.js\" type=\"text/javascript\"></script> 
        <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-animate.min.js\" type=\"text/javascript\"></script> 
        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-router/angular-ui-router.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-resource.js\" type=\"text/javascript\"></script> 
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ocLazyLoad/dist/ocLazyLoad.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-translate/angular-translate.min.js\"></script>
        <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-bootstrap/ui-bootstrap-tpls-0.13.4.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui.bootstrap.datetimepicker/dist/datetime-picker.min.js\"></script>
        <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ng-dialog/js/ngDialog.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-xeditable/js/xeditable.min.js\"></script>
        <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/block-ui/angular-block-ui.min.js\"></script>
        <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-sortable/sortable.min.js\"></script>
        <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-select/dist/select.min.js\"></script>
        <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/Smart-Table/dist/smart-table.js\"></script>
        <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular-rangy.min.js\"></script>
        <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular-sanitize.min.js\"></script>
        <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular.min.js\"></script>
        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/moment/moment.min.js\"></script>
        <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-bootstrap-multiselect-master/dist/angular-bootstrap-multiselect.min.js\"></script>
        <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-moment-picker/dist/angular-moment-picker.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-ui-tree-master/dist/angular-ui-tree.min.js\"></script>

";
        // line 235
        echo "        <!-- END CORE ANGULARJS PLUGINS -->

        <!-- BEGIN APP LEVEL ANGULARJS SCRIPTS -->
        <!-- load CRM module for angular -->
        <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/app.module.CRM.js\" type=\"text/javascript\"></script> 
            ";
        // line 241
        echo "            ";
        // line 242
        echo "                ";
        $this->loadTemplate("app/app.angular.js.twig", "integrated.twig", 242)->display($context);
        // line 243
        echo "            ";
        // line 244
        echo "        <!-- END APP LEVEL ANGULARJS SCRIPTS -->

        <script type=\"text/javascript\">
        ";
        // line 248
        echo "            
            // maybe will be usefull string escape
            function jqescape(str) { return str.replace(/[#;&,\\.\\+\\*~':\"!\\^\\\$\\[\\]\\(\\)=>|\\/\\\\]/g, '\\\\\$&'); }

            // init JavaScript app
            \$(document).ready(function() 
            {
                // js template wrapper for some nesesary actions
                // related only with template, nothing more
                mgCRM.init(false);
                // fix for V4 template!
                \$('#content_container > #sidebar').prev().attr('class', 'col-lg-12 col-md-12');
            });
        
        ";
        // line 263
        echo "        </script>
        <!-- END JAVASCRIPTS -->

        <!-- ASTERISK WIDGET TO CALL -->
        ";
        // line 267
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "integrations", []), "asterisk", [])) {
            // line 268
            echo "            ";
            $this->loadTemplate("partials/asteriskjs.twig", "integrated.twig", 268)->display($context);
            // line 269
            echo "        ";
        }
        // line 270
        echo "        

    </div><!-- END main angular app wrapper -->



";
    }

    public function getTemplateName()
    {
        return "integrated.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 270,  514 => 269,  511 => 268,  509 => 267,  503 => 263,  487 => 248,  482 => 244,  480 => 243,  477 => 242,  475 => 241,  471 => 239,  465 => 235,  460 => 232,  456 => 231,  452 => 230,  448 => 229,  444 => 228,  440 => 227,  436 => 226,  432 => 225,  428 => 224,  424 => 223,  420 => 222,  416 => 221,  412 => 220,  408 => 219,  404 => 218,  400 => 217,  396 => 216,  392 => 215,  388 => 214,  384 => 213,  380 => 212,  376 => 211,  372 => 210,  365 => 207,  358 => 203,  354 => 200,  350 => 199,  346 => 198,  342 => 196,  336 => 194,  334 => 193,  328 => 190,  324 => 189,  305 => 175,  294 => 166,  291 => 164,  288 => 162,  276 => 154,  265 => 152,  242 => 131,  239 => 129,  235 => 126,  219 => 112,  214 => 110,  194 => 93,  177 => 78,  175 => 77,  160 => 65,  143 => 51,  138 => 49,  135 => 48,  131 => 46,  126 => 44,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  79 => 24,  75 => 23,  72 => 22,  65 => 17,  61 => 16,  56 => 15,  50 => 12,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "integrated.twig", "/var/www/html/modules/addons/mgCRM2/templates/ModulesGarden/integrated.twig");
    }
}
