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

/* error_license.twig */
class __TwigTemplate_bc663be54c6593c2a4170c381b185e3b3cd5251d26ae3390a0b95ad44d0934f2 extends \Twig\Template
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
        return $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["whmcs"] ?? null), "templateContent", [])), "error_license.twig", 1);
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
        echo "/assets/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />

            <!-- Header Include Libs -->

";
        // line 21
        echo "
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-ui/css/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/bootstrap/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
                
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ng-dialog/css/ngDialog.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ng-dialog/css/ngDialog-theme-default.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-xeditable/css/xeditable.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/block-ui/angular-block-ui.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-select/dist/select.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-bootstrap-calendar/dist/css/angular-bootstrap-calendar.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            

        <!-- END GLOBALS -->

        <!-- START DYMANICLY LOADED CSS FILES -->
        <!-- here is a place where angular will put css/js files needed to load dynamically NEEDS TO BE AFTER GLOBALS -->
        <link id=\"ng_load_plugins_before\" />
        <!-- END DYMANICLY LOADED CSS FILES -->


        <!-- Header Include General Style -->
        <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/global-components.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Header Include Layout specific colors theme  -->
        <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/layout.css\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        // line 47
        echo "        <!-- Header Include Layout plugins custom styles -->
        <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- CUSTOM DEFINED !? just for module purpose -->
        <link href=\"";
        // line 50
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
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/img/mg-loader-flow.png) no-repeat;
            }
        </style>
        

        <!-- PAGE SPINNER will be here -->

        <!-- END PAGE SPINNER -->

        <!-- BEGIN HEADER -->
        <div class=\"page-header\">
           ";
        // line 75
        $this->loadTemplate("partials/header.twig", "error_license.twig", 75)->display($context);
        // line 76
        echo "        </div>
        <!-- END HEADER -->

        <div class=\"clearfix\">
        </div>

        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">

            <div class=\"container-fluid fade-in-up\" style=\"background-color: white;height: 250px;\">
                    
                    <div class=\"clearfix\"></div>               
                    
                    
        
                    <div class=\"ng-scope\" >
                        <div class=\"row-fluid ng-scope\" >
                            <div class=\"ng-scope\" >
                                <div class=\"box light ng-scope\" >
                                    <div class=\"alert alert-warning\" style=\"margin-top: 100px;margin-bottom: 100px;\">
                                    ";
        // line 96
        echo twig_escape_filter($this->env, ($context["message_error"] ?? null), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- BEGIN FOOTER -->
            <div class=\"page-footer\">
                <div class=\"container\">
                     ";
        // line 109
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
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/respond.min.js\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/excanvas.min.js\"></script>
        <![endif]-->

        ";
        // line 128
        echo "            <!-- jQuery required styles - all of them are required to keep compatibility with WHMCS one (fucking old ones....) -->
";
        // line 134
        echo "        ";
        // line 135
        echo "
        <!-- CORE JQUERY PLUGINS -->
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-blockui/jquery.blockui.min.js\" type=\"text/javascript\"></script>
";
        // line 142
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
        <!-- END CORE JQUERY PLUGINS -->

        
        ";
        // line 147
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/app.mgCRM.js\" type=\"text/javascript\"></script>
        

        <!-- BEGIN CORE ANGULARJS PLUGINS -->
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-sanitize.js\" type=\"text/javascript\"></script> 
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-animate.min.js\" type=\"text/javascript\"></script> 
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-router/angular-ui-router.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-resource.js\" type=\"text/javascript\"></script> 
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ocLazyLoad/dist/ocLazyLoad.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-translate/angular-translate.min.js\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-bootstrap/ui-bootstrap-tpls-0.13.4.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui.bootstrap.datetimepicker/dist/datetime-picker.min.js\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ng-dialog/js/ngDialog.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-xeditable/js/xeditable.min.js\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/block-ui/angular-block-ui.min.js\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-sortable/sortable.min.js\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/ui-select/dist/select.min.js\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/Smart-Table/dist/smart-table.js\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular-rangy.min.js\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular-sanitize.min.js\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/textAngular/dist/textAngular.min.js\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/moment/moment.min.js\"></script>
";
        // line 171
        echo "        <!-- END CORE ANGULARJS PLUGINS -->

        <!-- BEGIN APP LEVEL ANGULARJS SCRIPTS -->
        <!-- load CRM module for angular -->
            ";
        // line 176
        echo "
        <!-- END APP LEVEL ANGULARJS SCRIPTS -->

        <script type=\"text/javascript\">
        ";
        // line 181
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
        // line 196
        echo "        </script>
        <!-- END JAVASCRIPTS -->

        <!-- ASTERISK WIDGET TO CALL -->
        ";
        // line 200
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "integrations", []), "asterisk", [])) {
            // line 201
            echo "            ";
            $this->loadTemplate("partials/asteriskjs.twig", "error_license.twig", 201)->display($context);
            // line 202
            echo "        ";
        }
        // line 203
        echo "        

    </div><!-- END main angular app wrapper -->



";
    }

    public function getTemplateName()
    {
        return "error_license.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 203,  388 => 202,  385 => 201,  383 => 200,  377 => 196,  361 => 181,  355 => 176,  349 => 171,  345 => 169,  341 => 168,  337 => 167,  333 => 166,  329 => 165,  325 => 164,  321 => 163,  317 => 162,  313 => 161,  309 => 160,  305 => 159,  301 => 158,  297 => 157,  293 => 156,  289 => 155,  285 => 154,  281 => 153,  277 => 152,  273 => 151,  265 => 147,  257 => 142,  253 => 139,  249 => 138,  245 => 137,  241 => 135,  239 => 134,  236 => 128,  230 => 124,  226 => 123,  207 => 109,  191 => 96,  169 => 76,  167 => 75,  153 => 64,  136 => 50,  131 => 48,  128 => 47,  124 => 45,  119 => 43,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  75 => 23,  71 => 22,  68 => 21,  61 => 16,  56 => 15,  50 => 12,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "error_license.twig", "/var/www/html/modules/addons/mgCRM2/templates/ModulesGarden/error_license.twig");
    }
}
