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

/* partials/header.twig */
class __TwigTemplate_93934ad45e2aa7a043e5628b18a97b37a45ffa5816aaf905752356af329b625a extends \Twig\Template
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
        // line 2
        echo "
<div class=\"top-menu\">
    <div class=\"page-container\">
        <div class=\"modulename\">
            <div><span>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => "CRM"], "method"), "html", null, true);
        echo "</span></div>
            <small>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => "Customer Relationship Manager"], "method"), "html", null, true);
        echo "</small>
        </div>


        ";
        // line 12
        echo "        <div class=\"nav-menu\">
            ";
        // line 14
        echo "            <ul class=\"nav navbar-nav mg-navbar\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["navKey"] => $context["nav"]) {
            // line 16
            echo "                    
                    ";
            // line 17
            $context["render"] = true;
            // line 18
            echo "                    
                    ";
            // line 19
            if (($context["navKey"] == "dynamicTypes")) {
                // line 20
                echo "                        
                        ";
                // line 21
                if (($context["nav"] && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "dynamicTypes", []), "navigation", [])) > 0))) {
                    // line 22
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "dynamicTypes", []), "navigation", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["dnav"]) {
                        // line 23
                        echo "                                    <li id=\"contacts-list-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dnav"], "id", []), "html", null, true);
                        echo "\" ng-if=\"hasAccess(convertToCode('leads.";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dnav"], "name", []), "html", null, true);
                        echo "'))\">
                                        <a 
                                            ui-sref=\"contacts.list({contactTypeID: ";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dnav"], "id", []), "html", null, true);
                        echo "})\"
                                            data-target=\"#\">
                                            ";
                        // line 27
                        if ($this->getAttribute($context["dnav"], "icon", [])) {
                            echo "<i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["dnav"], "icon", []), "html", null, true);
                            echo "\"></i> ";
                        }
                        // line 28
                        echo "                                            <span>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dnav"], "name", []), "html", null, true);
                        echo "</span></a>
                                    </li>
                                    <li class=\"dropdown-separator\" ng-if=\"hasAccess(convertToCode('leads.";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dnav"], "name", []), "html", null, true);
                        echo "'))\">
                                        <span class=\"separator\"></span>
                                    </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dnav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "                        ";
                }
                // line 35
                echo "                        ";
                $context["render"] = false;
                // line 36
                echo "                        
                    ";
            }
            // line 38
            echo "                    ";
            if (($context["navKey"] == "dynamicTypesSubmenu")) {
                // line 39
                echo "                        
                        ";
                // line 40
                if (($this->getAttribute($context["nav"], "display", []) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "dynamicTypes", []), "submenu", [])) > 0))) {
                    // line 41
                    echo "                            <li class=\"menu-dropdown \">
                                <a data-hover=\"dropdown\" data-delay=\"0\" data-close-others=\"true\" data-toggle=\"dropdown\" href=\"javascript:;\">
                                    <i class=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "icon", []), "html", null, true);
                    echo "\"></i> <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => $this->getAttribute($context["nav"], "translate", [])], "method"), "html", null, true);
                    echo "</span> <i class=\"fa fa-angle-down dropdown-angle\"></i>
                                </a>
                                <ul class=\"dropdown-menu contacts-list-dropdown\">
                                ";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "dynamicTypes", []), "submenu", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 47
                        echo "                                    <li id=\"contacts-list-sub-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", []), "html", null, true);
                        echo "\" ng-if=\"hasAccess(convertToCode('leads.";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "name", []), "html", null, true);
                        echo "'))\">
                                        <a 
                                            ui-sref=\"contacts.list({contactTypeID: ";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", []), "html", null, true);
                        echo "})\"
                                            data-target=\"#\"
                                        >
                                            ";
                        // line 52
                        if ($this->getAttribute($context["sub"], "icon", [])) {
                            // line 53
                            echo "                                                <i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "icon", []), "html", null, true);
                            echo "\"></i>
                                            ";
                        }
                        // line 55
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "name", []), "html", null, true);
                        echo "
                                        </a>
                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                                </ul>
                            </li>
                            <li class=\"dropdown-separator\">
                                <span class=\"separator\"></span>
                            </li>
                        ";
                }
                // line 65
                echo "                        
                        ";
                // line 66
                $context["render"] = false;
                // line 67
                echo "                    ";
            }
            // line 68
            echo "                    
                    ";
            // line 69
            if ($this->getAttribute($context["nav"], "acl", [])) {
                // line 70
                echo "                        ";
                if ( !$this->getAttribute(($context["acl"] ?? null), "hasAccess", [0 => $this->getAttribute($context["nav"], "acl", [])], "method")) {
                    // line 71
                    echo "                            ";
                    $context["render"] = false;
                    // line 72
                    echo "                        ";
                }
                // line 73
                echo "                    ";
            }
            // line 74
            echo "                    
                    
                    ";
            // line 76
            if ((twig_test_empty($this->getAttribute($context["nav"], "submenu", [])) && ($context["render"] ?? null))) {
                // line 77
                echo "                        <li id=\"";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["nav"], "translate", []), ["." => "-"]), "html", null, true);
                echo "\">
                            
                            <a  
                                ";
                // line 80
                if ($this->getAttribute($context["nav"], "sref", [])) {
                    // line 81
                    echo "                                    ui-sref=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "sref", []), "html", null, true);
                    echo "\"
                                ";
                } elseif ($this->getAttribute(                // line 82
$context["nav"], "href", [])) {
                    // line 83
                    echo "                                    href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "href", []), "html", null, true);
                    echo "\"
                                ";
                } else {
                    // line 85
                    echo "                                    href=\"#\"
                                ";
                }
                // line 87
                echo "                                data-target=\"";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["nav"], "translate", []), ["." => "-"]), "html", null, true);
                echo " > a\"
                                ";
                // line 88
                if ($this->getAttribute($context["nav"], "color", [])) {
                    echo "style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "color", []), "html", null, true);
                    echo ";\"";
                }
                echo "><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "icon", []), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["nav"], "color", [])) {
                    echo "style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "color", []), "html", null, true);
                    echo ";\"";
                }
                echo "></i> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => $this->getAttribute($context["nav"], "translate", [])], "method"), "html", null, true);
                echo "</span></a>
                        </li>
                    ";
            } elseif (            // line 90
($context["render"] ?? null)) {
                // line 91
                echo "                        <li class=\"menu-dropdown \" onclick=\"\">
                            <a data-hover=\"dropdown\" data-delay=\"0\" data-close-others=\"true\" data-toggle=\"dropdown\" href=\"javascript:;\" ";
                // line 92
                if ($this->getAttribute($context["nav"], "color", [])) {
                    echo "style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "color", []), "html", null, true);
                    echo ";\"";
                }
                echo ">
                                <i class=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "icon", []), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["nav"], "color", [])) {
                    echo "style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "color", []), "html", null, true);
                    echo ";\"";
                }
                echo "></i> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => $this->getAttribute($context["nav"], "translate", [])], "method"), "html", null, true);
                echo "</span> <i class=\"fa fa-angle-down dropdown-angle\"></i>
                            </a>
                            
                            <ul class=\"dropdown-menu\">
                                
                            ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nav"], "submenu", []));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 99
                    echo "                                
                                ";
                    // line 100
                    $context["render"] = true;
                    // line 101
                    echo "                                ";
                    if ($this->getAttribute($context["sub"], "acl", [])) {
                        // line 102
                        echo "                                    ";
                        if ( !$this->getAttribute(($context["acl"] ?? null), "hasAccess", [0 => $this->getAttribute($context["sub"], "acl", [])], "method")) {
                            // line 103
                            echo "                                        ";
                            $context["render"] = false;
                            // line 104
                            echo "                                    ";
                        }
                        // line 105
                        echo "                                ";
                    }
                    // line 106
                    echo "                                
                                ";
                    // line 107
                    if ((($this->getAttribute($context["sub"], "acl", []) == "other.access_migrator") &&  !$this->getAttribute(($context["settings"] ?? null), "isMigrationAvailable", []))) {
                        // line 108
                        echo "                                    ";
                        $context["render"] = false;
                        // line 109
                        echo "                                ";
                    }
                    // line 110
                    echo "                                
                                ";
                    // line 111
                    if (($context["render"] ?? null)) {
                        // line 112
                        echo "                                    <li id=\"";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["sub"], "translate", []), ["." => "-"]), "html", null, true);
                        echo "\">
                                        <a 
                                            ";
                        // line 114
                        if ($this->getAttribute($context["sub"], "sref", [])) {
                            // line 115
                            echo "                                                ui-sref=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "sref", []), "html", null, true);
                            echo "\"
                                            ";
                        } elseif ($this->getAttribute(                        // line 116
$context["sub"], "href", [])) {
                            // line 117
                            echo "                                                href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "href", []), "html", null, true);
                            echo "\"
                                            ";
                        } else {
                            // line 119
                            echo "                                                href=\"#\"
                                            ";
                        }
                        // line 121
                        echo "                                            data-target=\"#";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "sref", []), "html", null, true);
                        echo "\"
                                            ";
                        // line 122
                        if ($this->getAttribute($context["sub"], "target", [])) {
                            echo "target=\"_blank\"";
                        }
                        // line 123
                        echo "                                            ";
                        if ($this->getAttribute($context["sub"], "color", [])) {
                            echo "style=\"color: ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "color", []), "html", null, true);
                            echo ";\"";
                        }
                        // line 124
                        echo "                                        >
                                            ";
                        // line 125
                        if ($this->getAttribute($context["sub"], "icon", [])) {
                            // line 126
                            echo "                                                <i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "icon", []), "html", null, true);
                            echo "\" ";
                            if ($this->getAttribute($context["sub"], "color", [])) {
                                echo "style=\"color: ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "color", []), "html", null, true);
                                echo ";\"";
                            }
                            echo "></i>
                                            ";
                        }
                        // line 128
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["lang"] ?? null), "translate", [0 => $this->getAttribute($context["sub"], "translate", [])], "method"), "html", null, true);
                        echo "
                                        </a>
                                    </li>
                                ";
                    }
                    // line 132
                    echo "                                
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                            </ul>
                        </li>
                    ";
            }
            // line 137
            echo "
                    
                    
                    
                    ";
            // line 141
            if (( !$this->getAttribute($context["loop"], "last", []) && ($context["render"] ?? null))) {
                // line 142
                echo "                        <li class=\"dropdown-separator\">
                            <span class=\"separator\"></span>
                        </li>
                    ";
            }
            // line 146
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['navKey'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                
                
            </ul>

        </div>
        ";
        // line 153
        echo "        
        
        ";
        // line 156
        echo "        <div class=\"nav-menu nav-menu-right\">
            ";
        // line 158
        echo "            <div class=\"modulename-logo\">
                <a href=\"http://www.modulesgarden.com\" target=\"_blank\">
                    <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/img/mg-logo.png\" alt=\"logo\" class=\"logo-default\">
                    <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/img/mg-logo-cog.png\" alt=\"logo\" height=\"29\" width=\"29\" class=\"logo-default-cog\">
                </a>
            </div>
            ";
        // line 165
        echo "            <ul class=\"nav navbar-nav navbar-right\">
                
                ";
        // line 167
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "renderStandalone", [])) {
            // line 168
            echo "                    <li>
                        <a href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "appAdminDir", []), "html", null, true);
            echo "\" style=\"padding-top: 21px;\">
                            <img src=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
            echo "/assets/img/whmcs.png\" alt=\"Bak to WHMCS\" height=18\" style=\"height: 18px;\">
                        </a>
                    </li>
                ";
        }
        // line 174
        echo "                
                ";
        // line 288
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "renderStandalone", [])) {
            // line 289
            echo "                    <li><a href=\"#\" class=\"full-screen-module-toogle\"><i class=\"icon-size-fullscreen\"></i>&nbsp;</a></li>
                ";
        }
        // line 291
        echo "                
            </ul>
        </div>
        ";
        // line 295
        echo "    
        <div class=\"clearfix\"></div>
    </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "partials/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 295,  514 => 291,  510 => 289,  507 => 288,  504 => 174,  497 => 170,  493 => 169,  490 => 168,  488 => 167,  484 => 165,  478 => 161,  474 => 160,  470 => 158,  467 => 156,  463 => 153,  456 => 147,  442 => 146,  436 => 142,  434 => 141,  428 => 137,  423 => 134,  416 => 132,  408 => 128,  396 => 126,  394 => 125,  391 => 124,  384 => 123,  380 => 122,  375 => 121,  371 => 119,  365 => 117,  363 => 116,  358 => 115,  356 => 114,  350 => 112,  348 => 111,  345 => 110,  342 => 109,  339 => 108,  337 => 107,  334 => 106,  331 => 105,  328 => 104,  325 => 103,  322 => 102,  319 => 101,  317 => 100,  314 => 99,  310 => 98,  294 => 93,  286 => 92,  283 => 91,  281 => 90,  262 => 88,  257 => 87,  253 => 85,  247 => 83,  245 => 82,  240 => 81,  238 => 80,  231 => 77,  229 => 76,  225 => 74,  222 => 73,  219 => 72,  216 => 71,  213 => 70,  211 => 69,  208 => 68,  205 => 67,  203 => 66,  200 => 65,  192 => 59,  181 => 55,  175 => 53,  173 => 52,  167 => 49,  159 => 47,  155 => 46,  147 => 43,  143 => 41,  141 => 40,  138 => 39,  135 => 38,  131 => 36,  128 => 35,  125 => 34,  115 => 30,  109 => 28,  103 => 27,  98 => 25,  90 => 23,  85 => 22,  83 => 21,  80 => 20,  78 => 19,  75 => 18,  73 => 17,  70 => 16,  53 => 15,  50 => 14,  47 => 12,  40 => 7,  36 => 6,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/header.twig", "/var/www/html/modules/addons/mgCRM2/templates/ModulesGarden/partials/header.twig");
    }
}
