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

/* standalone.twig */
class __TwigTemplate_50477699ec3a0ffd0d7275423968389dc6ec7553fdf1cdee01adfc6325da1b4f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\" data-ng-app=\"mgCRMapp\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\" data-ng-app=\"mgCRMapp\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\" data-ng-app=\"mgCRMapp\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <head>
    <meta charset=\"UTF-8\">
    <title data-ng-bind=\"page.title\"></title>

    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/> -->
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

            <!-- START GLOBALS -->
                
";
        // line 23
        echo "
                <!-- Header External Includes-->
                ";
        // line 26
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "url_scheme", []), "html", null, true);
        echo "://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
                ";
        // line 28
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />

                <!-- Header Include Libs -->
                <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-ui/css/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "whmcsDir", []), "html", null, true);
        echo "assets/css/selectize.bootstrap3.css\" rel=\"stylesheet\" type=\"text/css\">
                <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/bootstrap/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />

                <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-ui-tree-master/dist/angular-ui-tree.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ng-dialog/css/ngDialog.min.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ng-dialog/css/ngDialog-theme-default.min.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-xeditable/css/xeditable.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/block-ui/angular-block-ui.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-select/dist/select.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-bootstrap-calendar/dist/css/angular-bootstrap-calendar.min.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-moment-picker/dist/angular-moment-picker.min.css\" rel=\"stylesheet\">

            <!-- END GLOBALS -->

            <!-- START DYMANICLY LOADED CSS FILES -->
            <!-- here is a place where angular will put css/js files needed to load dynamically NEEDS TO BE AFTER GLOBALS -->
            <link id=\"ng_load_plugins_before\" />
            <!-- END DYMANICLY LOADED CSS FILES -->


            <!-- Header Include General Style -->
            <link href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/global-components.css\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Header Include Layout specific colors theme  -->
            <link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/layout.css\" rel=\"stylesheet\" type=\"text/css\" />
            ";
        // line 59
        echo "            <!-- Header Include Layout plugins custom styles -->
            <link href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- CUSTOM DEFINED !? just for module purpose -->
            <link href=\"";
        // line 62
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


            <!-- Header Include General Style -->
            <link href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/global-components.css\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Header Include Layout specific colors theme  -->
            <link href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/layout.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/default.css\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Header Include Layout plugins custom styles -->
            <link href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- CUSTOM DEFINED !? just for module purpose -->
            <link href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/custom.css\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- possible to mergo above -->

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->

            <!-- site icon -->
            <link rel=\"shortcut icon\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/img/favicon.png\"/>

            <style>
                .mg-wrapper .mg-loader,
                .mg-wrapper .mg-loader-img {
                    background: url(";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/img/mg-loader.gif);
                }
                .mg-wrapper .mg-loader-flow {
                    background: url(";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/img/mg-loader-flow.png);
                }
            </style>
        
  </head>

  <!-- START BODY -->
  <!-- <body class=\"skin-blue sidebar-mini\"> -->
  <body  style=\"margin: 0;\">
      
  <!-- dont forget \"mg-wrapper\" ! -->
    <div ng-controller=\"AppController\" class=\"full-screen-module-container mg-wrapper body\" data-target=\".body\" data-spy=\"scroll\" data-twttr-rendered=\"true\">
            



            <!-- PAGE SPINNER will be here -->

            <!-- END PAGE SPINNER -->

            <!-- BEGIN HEADER -->
            <div class=\"page-header\">
               ";
        // line 124
        $this->loadTemplate("partials/header.twig", "standalone.twig", 124)->display($context);
        // line 125
        echo "            </div>
            <!-- END HEADER -->

            <div class=\"clearfix\">
            </div>

            <!-- BEGIN CONTAINER -->
            <div class=\"page-container\">

                <!-- BEGIN PAGE HEAD -->
                <!-- <div {* data-ng-include=\"'modsubpage/head.html'\" data-ng-controller=\"PageHeadController\" *} class=\"page-head\"> -->
    ";
        // line 137
        echo "                    ";
        // line 138
        echo "    ";
        // line 139
        echo "                <!-- END PAGE HEAD -->

                <!-- BEGIN PAGE CONTENT -->
                <!-- usable with class: container-fluid -->
                <div class=\"page-content\" ng-controller=\"ContentController\">

                    <!-- BEGIN PAGE SPINNER -->
                    <div ng-spinner-bar class=\"page-mg-loadingbar\">
                        <div class=\"mg-loader\"></div>
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
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => "followups.alarm.date.label"], "method"), "html", null, true);
        echo "</strong><span ng-bind-html=\"item.date\" style=\"margin-left: 10px;\"></span>
                                        <br>
                                        <strong>";
        // line 166
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
        // line 181
        echo "                        <div class=\"clearfix\"></div>
                        <div class=\"container-fluid raw\">
                            ";
        // line 184
        echo "                            <ui-breadcrumbs displayname-property=\"data.pageTitle\" abstract-proxy-property=\"data.proxy\" class=\"pull-left\"></ui-breadcrumbs>
                            ";
        // line 186
        echo "                            <loading-notification></loading-notification>
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
        // line 207
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
        // line 209
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
        // line 217
        echo "
                        ";
        // line 219
        echo "                        <div ui-view>
                        </div>
                        ";
        // line 222
        echo "
                    </div>
                </div>
                <!-- END PAGE CONTENT -->


                <!-- BEGIN FOOTER -->
                <div class=\"page-footer\">
                    <div class=\"container\">
                        ";
        // line 231
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
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/respond.min.js\"></script>
            <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/excanvas.min.js\"></script>
            <![endif]-->

            <!-- JQUERY -->
";
        // line 250
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery/jquery-2.1.4.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-ui/js/jquery-ui.min.js\" type=\"text/javascript\"></script>
                
            <!-- CORE JQUERY PLUGINS -->
            <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-blockui/jquery.blockui.min.js\" type=\"text/javascript\"></script>
";
        // line 259
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
            <!-- END CORE JQUERY PLUGINS -->


            ";
        // line 264
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/app.mgCRM.js\" type=\"text/javascript\"></script>


            <!-- BEGIN CORE ANGULARJS PLUGINS -->
            <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-cookies.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-sanitize.js\" type=\"text/javascript\"></script> 
            <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-animate.min.js\" type=\"text/javascript\"></script> 
            <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-router/angular-ui-router.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-resource.js\" type=\"text/javascript\"></script> 
            <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ocLazyLoad/dist/ocLazyLoad.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-translate/angular-translate.min.js\"></script>
            <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-bootstrap/ui-bootstrap-tpls-0.13.4.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui.bootstrap.datetimepicker/dist/datetime-picker.min.js\"></script>
            <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ng-dialog/js/ngDialog.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-xeditable/js/xeditable.min.js\"></script>
            <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/block-ui/angular-block-ui.min.js\"></script>
            <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-sortable/sortable.min.js\"></script>
            <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-select/dist/select.min.js\"></script>
            <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/Smart-Table/dist/smart-table.js\"></script>
            <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular-rangy.min.js\"></script>
            <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular-sanitize.min.js\"></script>
            <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular.min.js\"></script>
            <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/moment/moment.min.js\"></script>
            <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-bootstrap-multiselect-master/dist/angular-bootstrap-multiselect.min.js\"></script>
            <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-moment-picker/dist/angular-moment-picker.min.js\"></script>
            <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angular-ui-tree-master/dist/angular-ui-tree.min.js\" type=\"text/javascript\" ></script>
";
        // line 292
        echo "            <!-- END CORE ANGULARJS PLUGINS -->

            <!-- BEGIN APP LEVEL ANGULARJS SCRIPTS -->
            <!-- load CRM module for angular -->
            <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/app.module.CRM.js\" type=\"text/javascript\"></script> 
                ";
        // line 298
        echo "                ";
        // line 299
        echo "                    ";
        $this->loadTemplate("app/app.angular.js.twig", "standalone.twig", 299)->display($context);
        // line 300
        echo "                ";
        // line 301
        echo "            <!-- END APP LEVEL ANGULARJS SCRIPTS -->

            <script type=\"text/javascript\">
            ";
        // line 305
        echo "
                // maybe will be usefull string escape
                function jqescape(str) { return str.replace(/[#;&,\\.\\+\\*~':\"!\\^\\\$\\[\\]\\(\\)=>|\\/\\\\]/g, '\\\\\$&'); }

                // init JavaScript app
                \$(document).ready(function() 
                {
                    // js template wrapper for some nesesary actions
                    // related only with template, nothing more
                    mgCRM.init(true);
                });

            ";
        // line 318
        echo "            </script>
            <!-- END JAVASCRIPTS -->

            <!-- ASTERISK WIDGET TO CALL -->
            ";
        // line 322
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "integrations", []), "asterisk", [])) {
            // line 323
            echo "                ";
            $this->loadTemplate("partials/asteriskjs.twig", "standalone.twig", 323)->display($context);
            // line 324
            echo "            ";
        }
        // line 325
        echo "
        </div><!-- END main angular app wrapper -->



  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "standalone.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 325,  584 => 324,  581 => 323,  579 => 322,  573 => 318,  559 => 305,  554 => 301,  552 => 300,  549 => 299,  547 => 298,  543 => 296,  537 => 292,  533 => 290,  529 => 289,  525 => 288,  521 => 287,  517 => 286,  513 => 285,  509 => 284,  505 => 283,  501 => 282,  497 => 281,  493 => 280,  489 => 279,  485 => 278,  481 => 277,  477 => 276,  473 => 275,  469 => 274,  465 => 273,  461 => 272,  457 => 271,  453 => 270,  449 => 269,  445 => 268,  437 => 264,  429 => 259,  425 => 256,  421 => 255,  417 => 254,  411 => 251,  406 => 250,  399 => 245,  395 => 244,  377 => 231,  366 => 222,  362 => 219,  359 => 217,  347 => 209,  336 => 207,  313 => 186,  310 => 184,  306 => 181,  289 => 166,  284 => 164,  257 => 139,  255 => 138,  253 => 137,  240 => 125,  238 => 124,  213 => 102,  207 => 99,  199 => 94,  185 => 83,  180 => 81,  175 => 79,  171 => 78,  166 => 76,  149 => 62,  144 => 60,  141 => 59,  137 => 57,  132 => 55,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  90 => 37,  86 => 36,  81 => 34,  77 => 33,  73 => 32,  67 => 29,  62 => 28,  57 => 26,  53 => 23,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "standalone.twig", "/var/www/html/modules/addons/mgCRM2/templates/ModulesGarden/standalone.twig");
    }
}
