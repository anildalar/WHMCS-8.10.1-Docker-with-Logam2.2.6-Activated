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

/* app/app.routes.js */
class __TwigTemplate_529bc9f3fcc5f0b0e5757cb9c76aff428418337497eb0c99b99f18b6de0dfd62 extends \Twig\Template
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
        echo "/***************************************************************************************
 *
 * 
 *                  ██████╗██████╗ ███╗   ███╗         Customer
 *                 ██╔════╝██╔══██╗████╗ ████║         Relations
 *                 ██║     ██████╔╝██╔████╔██║         Manager
 *                 ██║     ██╔══██╗██║╚██╔╝██║
 *                 ╚██████╗██║  ██║██║ ╚═╝ ██║         For WHMCS
 *                  ╚═════╝╚═╝  ╚═╝╚═╝     ╚═╝
 * 
 *    
 * @author      Piotr Sarzyński <piotr.sa@modulesgarden.com> 
 *              
 *                           
 * @link        http://www.docs.modulesgarden.com/CRM_For_WHMCS for documenation
 * @link        http://modulesgarden.com ModulesGarden
 *              Top Quality Custom Software Development
 * @copyright   Copyright (c) ModulesGarden, INBS Group Brand, 
 *              All Rights Reserved (http://modulesgarden.com)
 * 
 * This software is furnished under a license and mxay be used and copied only  in  
 * accordance  with  the  terms  of such  license and with the inclusion of the above 
 * copyright notice.  This software  or any other copies thereof may not be provided 
 * or otherwise made available to any other person.  No title to and  ownership of 
 * the  software is hereby transferred.
 *
 **************************************************************************************/


/**
 * keep on mind that this file is parsed by twig extension !!!!!!!!!!!
 * I didnt renamed it as .twig extension since IDE wont highlight syntax (fu**k)
 * 
 * @author Piotr Sarzyński <piotr.sa@modulesgarden.com> 
 */

/////////////////////////////
// UU-Routes Provide states and routing
/////////////////////////////
// Use \$urlRouterProvider to configure any redirects (when) and invalid urls (otherwise).
\$urlRouterProvider
  // redirects, since I dont want to render abstract states, just go to other
  .when('/settings/fields',     '/settings/fields/list')
  .when('/settings/webforms',   '/settings/webforms/list')
  .when('/settings',            '/settings/personal')
  .when('/campaigns',           '/campaigns/list')
  .when('/contacts',            '/contacts/list')
  .when('/general',             '/general/overview')
  .when('/utils',               '/utils/statistics')
  .when('/utils/notifications', '/utils/notifications/list')
  // If the url is ever invalid, e.g. '/asdf', then redirect to '/' aka the home state
  .otherwise('dashboard');

//////////////////////////
// State Configurations //
//////////////////////////
\$stateProvider

    ////////////////////
    // TEST RUTES
    ////////////////////
    .state(\"buttons\", {
        url: \"/buttons\",
        templateUrl: '";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/buttons.html',
        data: {pageTitle: 'Buttons'}
    })
    .state(\"typography\", {
        url: \"/typography\",
        templateUrl: '";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/typography.html',
        data: {pageTitle: 'Typography'},
    })
    .state(\"panels\", {
        url: \"/panels\",
        templateUrl: '";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/panels.html',
        data: {pageTitle: 'Panels'},
    })
    .state(\"icons\", {
        url: \"/icons\",
        templateUrl: '";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/icons.html',
        data: {pageTitle: 'Icons'},
    })
    .state(\"boxes\", {
        url: \"/boxes\",
        templateUrl: '";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/boxes.html',
        data: {pageTitle: 'Boxes'},
    })
    .state(\"tables_simple\", {
        url: \"/tables_simple\",
        templateUrl: '";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/tables_simple.html',
        data: {pageTitle: 'Tables Simple'},
    })
    .state(\"tables_extended\", {
        url: \"/tables_extended\",
        templateUrl: '";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/tables_extended.html',
        data: {pageTitle: 'Tables Extended'},
    })
    .state(\"tables_datatables\", {
        url: \"/tables_datatables\",
        templateUrl: '";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/tables_datatables.html',
        data: {pageTitle: 'Tables Datatables'},
    })
    .state(\"form_general\", {
        url: \"/form_general\",
        templateUrl: '";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/form_general.html',
        data: {pageTitle: 'Tables General'},
    })
    .state(\"form_advanced\", {
        url: \"/form_advanced\",
        templateUrl: '";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/form_advanced.html',
        data: {pageTitle: 'Tables Advanced'},
    })

    ////////////////////
    // STATIC PAGES
    ////////////////////

    ";
        // line 118
        echo "    .state(\"static\", {
        url:        \"/static/pages\",
        template:   '<div ui-view></div>',
        name:       'pages',
        abstract:   true, // to activate child states
        data: {
            pageTitle: 'Static Pages',
        },
    })
    .state(\"static.icons\", {
        url: \"/icons\",
        templateUrl: '";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/views/frontend/icons.html',
        name: 'pages.icons',
        data: {
            pageTitle: 'Icons'
        },
    })
    ////////////////////
    // SETTINGS FAMILY
    ////////////////////
    ";
        // line 139
        echo "    .state(\"settings\", {
        url: \"/settings\",
        // Note: abstract still needs a ui-view for its children to populate.
        template: '<ui-view/>',
        name: 'settings',
        redirect: 'settings.personal',
        abstract: true, // to activate child states
        data: {
            pageTitle: 'Settings',
            proxy:     'settings',
            navid:     'settings',
        }
    })
    ";
        // line 153
        echo "    .state(\"settings.fields\", {
        url: \"/fields\",
        // Note: abstract still needs a ui-view for its children to populate.
        templateUrl: '";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/navigationController.html',
        name: 'settings.fields',
        redirect: 'settings.fields.list',
        controller: 'settingsFieldsNavigationController',
        abstract: true, // to activate child states
        data: {
            pageTitle: 'Fields',
            proxy:     'settings.fields',
        },
        resolve: {
        
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                      // required controllers
                      '";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/navigationController.js',
                ]);
            }],
        }
    })
    ";
        // line 176
        echo "    .state(\"settings.fields.list\", {
        url: \"/list\",
        templateUrl: '";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/templates/fields.html',
        name: 'settings.fields.list',
        data: {
              pageTitle: 'Fields List',
              navid:     'navigation-settings-fields',
        },
        controller: 'settingsFieldsList',
        resolve: {

            // ACL - based on specific rule
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.manage_fields') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.manage_fields'});
                return \$q.reject('Unauthorized');
            }],

            settingsFieldsListServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // required services
                    '";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/services/field.js',
                    '";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/groups/services/groups.js',
                ]);
            }],

            deps: ['\$ocLazyLoad', 'settingsFieldsListServices', function(\$ocLazyLoad, settingsFieldsListServices) {
                return \$ocLazyLoad.load([
                    // required controllers
                    '";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/controllers/list.js',
                ]);
            }],
        }
    })
    ";
        // line 216
        echo "    .state(\"settings.fields.edit\", {
        url: \"/edit/{id:int}\",
        templateUrl: '";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/templates/edit.html',
        name: 'settings.fields.edit',
        data: {
            pageTitle: 'Edit #";
        // line 221
        echo "{{ fieldID }}";
        echo "',
            navid:     'navigation-settings-fields',
        },
        controller: 'settingsFieldsEdit',
        resolve: {

            // ACL - based on specific rule
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.manage_fields') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.manage_fields'});
                return \$q.reject('Unauthorized');
            }],

            // update title, tricky, but works :) version for breadcrumbs
            fieldID: function(\$stateParams) {
                return \$stateParams.id;
            },

            settingsFieldsEditServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // required services
                    '";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/services/field.js',
                    '";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/services/validators.js',
                    '";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/services/options.js',
                    '";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/groups/services/groups.js',
                ]);
            }],

            deps: ['\$ocLazyLoad', 'settingsFieldsEditServices', function(\$ocLazyLoad, settingsFieldsEditServices) {
                return \$ocLazyLoad.load([
                    // required controllers
                    '";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/controllers/edit.js',
                ]);
            }],
        }
    })
    ";
        // line 263
        echo "    .state(\"settings.fields.groups\", {
        url: \"/groups\",
        templateUrl: '";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/groups/templates/groups.html',
        name: 'settings.fields.groups',
        data: {
            pageTitle: 'Fields Groups',
            navid:     'navigation-settings-fields',
        },
        controller: 'settingsFieldsGroups',
        resolve: {

            // ACL - based on specific rule
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.manage_fields') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.manage_fields'});
                return \$q.reject('Unauthorized');
            }],

            settingsFieldsGroupsServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // required services
                    '";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/groups/services/groups.js',
                ]);
            }],

            deps: ['\$ocLazyLoad', 'settingsFieldsGroupsServices', function(\$ocLazyLoad, settingsFieldsGroupsServices) {
                return \$ocLazyLoad.load([
                    // required controllers
                    '";
        // line 296
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/groups/controllers/groups.js',
                ]);
            }],
        }
    })
    ";
        // line 302
        echo "    .state(\"settings.fields.statuses\", {
        url: \"/statuses\",
        templateUrl: '";
        // line 304
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/statuses/templates/statuses.html',
        name: 'settings.fields.statuses',
        data: {
            pageTitle: 'Statuses',
            navid:     'navigation-settings-fields',
        },
        controller: 'settingsFieldsStatuses',
        resolve: {
            
            // ACL - based on specific rule
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                
                // check access
                if( AclService.can('settings.manage_statuses') ) {
                    return true;
                }
                
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.manage_statuses'});
                return \$q.reject('Unauthorized');
            }],
              
            settingsFieldsStatusesServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 328
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/statuses/services/statuses.js',
                  ]);
            }],
        
            deps: ['\$ocLazyLoad', 'settingsFieldsStatusesServices', function(\$ocLazyLoad, settingsFieldsStatusesServices) {
                  return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 335
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/statuses/controllers/statuses.js',
                  ]);
            }],
        }
    })
    ";
        // line 341
        echo "    .state(\"settings.fields.views\", {
        url: \"/views\",
        templateUrl: '";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/views/templates/views.html',
        name: 'settings.fields.views',
        data: {
            pageTitle: 'Views',
            navid:     'navigation-settings-fields',
        },
        controller: 'settingsFieldsViews',
        resolve: {
            
            settingsFieldsServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/views/services/fieldViews.js',
                  ]);
            }],
        
            deps: ['\$ocLazyLoad', 'settingsFieldsServices', function(\$ocLazyLoad, settingsFieldsServices) {
                  return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 362
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/views/controllers/views.js',
                  ]);
            }],
        }
    })
    ";
        // line 368
        echo "    .state(\"settings.fields.map\", {
        url: \"/map\",
        templateUrl: '";
        // line 370
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/map/templates/map.html',
        name: 'settings.fields.map',
        data: {
            pageTitle: 'Map',
            navid:     'navigation-settings-fields',
        },
        controller: 'settingsFieldsMap',
        resolve: {
            
            // ACL - based on specific rule
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                
                // check access
                if( AclService.can('settings.manage_fields_map') ) {
                    return true;
                }
                
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.manage_fields_map'});
                return \$q.reject('Unauthorized');
            }],
            
            settingsFieldsMapServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 394
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/personal/services/fieldViews.js',
                  ]);
            }],
        
            deps: ['\$ocLazyLoad', 'settingsFieldsMapServices', function(\$ocLazyLoad, settingsFieldsMapServices) {
                  return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 401
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/map/controllers/map.js',
                  ]);
            }],
        }
    })
    ";
        // line 407
        echo "    .state(\"settings.personal\", {
        url: \"/personal\",
        templateUrl: '";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/personal/abstractTpl.html',
        name: 'settings.personal',
        redirect: 'settings.personal.personal',
        abstract: true,
        controller: 'settingsPersonalAbstractController',
        data: {
            pageTitle: 'Personal',
            proxy:     'settings.personal',
            navid:     'navigation-settings-personal',
        },
        resolve: {
        
            settingsPersonalServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load([
                        // required services
                    '";
        // line 424
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/personal/services/fieldViews.js',
                  ]);
            }],
        
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad, settingsPersonalServices) {
                return \$ocLazyLoad.load([ 
                    // controllers
                    '";
        // line 431
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/personal/controllers/personal.js',
                ]);
            }],
        
        }
    })
    ";
        // line 438
        echo "    .state(\"settings.personal.personal\", {
        url: \"/general\",
        templateUrl: '";
        // line 440
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/personal/templates/personalTpl.html',
        name: 'settings.personal.personal',
        data: {
            pageTitle: 'Settings',
            navid:     'navigation-settings-personal',
        },
        controller: 'settingsPersonalController',
    })
    ";
        // line 449
        echo "    .state(\"settings.personal.fieldsview\", {
        url: \"/fieldsview\",
        templateUrl: '";
        // line 451
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/personal/templates/fieldsviewTpl.html',
        name: 'settings.personal.fieldsview',
        data: {
            pageTitle: 'Fields\\' View',
            navid:     'navigation-settings-personal',
        },
        controller: 'settingsPersonalFieldsviewController',
    })
    ";
        // line 460
        echo "    .state(\"settings.general\", {
        url: \"/general\",
        templateUrl: '";
        // line 462
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/abstractTpl.html',
//        template: '<ui-view/>',
        name: 'settings.general',
        redirect: 'settings.general.overview',
        data: {
            pageTitle: 'General',
            navid:     'navigation-settings-general',
            proxy:     'settings.general',
        },
        controller: 'settingsAbstractGeneralController',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                
                // check access
                if( AclService.can('settings.view_general') ) {
                    return true;
                }
                
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.view_general'});
                return \$q.reject('Unauthorized');
            }],
        
            settingsGeneralServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load([
                        // required services
                    '";
        // line 489
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/services/followupTypes.js',
                    '";
        // line 490
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/services/followupStatuses.js',
                    '";
        // line 491
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/services/googleAuth.js',
                    '";
        // line 492
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/services/labels.js',
                  ]);
            }],

            deps: ['\$ocLazyLoad', 'settingsGeneralServices', function(\$ocLazyLoad, settingsGeneralServices) {
                return \$ocLazyLoad.load([ 
                    // controllers
                    '";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/controllers/general.js',
                ]);
            }],
        }
    })
    ";
        // line 505
        echo "    .state(\"settings.general.overview\", {
        url: \"/overview\",
        templateUrl: '";
        // line 507
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/templates/overviewTpl.html',
        name: 'settings.general.overview',
        data: {
            pageTitle: 'System Overview',
            navid:     'navigation-settings-general',
        },
        controller: 'settingsGeneralController',
    })
    ";
        // line 516
        echo "    .state(\"settings.general.options\", {
        url: \"/options\",
        templateUrl: '";
        // line 518
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/templates/settingsTpl.html',
        name: 'settings.general.options',
        data: {
            pageTitle: 'Options',
            navid:     'navigation-settings-general',
        },
        controller: 'settingsGeneralController',
    })
    ";
        // line 527
        echo "    .state(\"settings.general.followups\", {
        url: \"/followups\",
        templateUrl: '";
        // line 529
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/templates/followupsTpl.html',
        name: 'settings.general.followups',
        data: {
            pageTitle: 'Follow-ups',
            navid:     'navigation-settings-general',
        },
        controller: 'settingsGeneralController',
    })
    ";
        // line 538
        echo "    .state(\"settings.general.label\", {
        url: \"/label\",
        templateUrl: '";
        // line 540
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/general/templates/labelTpl.html',
        name: 'settings.general.label',
        data: {
            pageTitle: 'Labels',
            navid:     'navigation-settings-general',
        },
        controller: 'settingsGeneralController',
    })
    ";
        // line 549
        echo "    .state(\"settings.migrator\", {
        url: \"/migrator\",
        templateUrl: '";
        // line 551
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/migrator/templates/migrator.html',
        name: 'settings.general',
        data: {
            pageTitle: 'Migrator',
            navid:     'navigation-settings-migrator',
        },
        controller: 'settingsMigratorController',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                
                // check access
                if( AclService.can('other.access_migrator') ) {
                    return true;
                }
                
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'other.access_migrator'});
                return \$q.reject('Unauthorized');
            }],
        
            settingsMigratorServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                      '";
        // line 574
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/personal/services/fieldViews.js',
                ]);
            }],
        
            deps: ['\$ocLazyLoad', 'settingsMigratorServices', function(\$ocLazyLoad, settingsMigratorServices) {
                return \$ocLazyLoad.load([ 
                    // controller services
                    '";
        // line 581
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/migrator/controllers/migrator.js',
                ]);
            }],
        }
    })
    ";
        // line 587
        echo "    .state(\"settings.permissions\", {
        url: \"/permissions\",
        templateUrl: '";
        // line 589
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/permissions/templates/permissions.html',
        name: 'settings.permissions',
        data: {
            pageTitle: 'Permissions',
            navid:     'navigation-settings-permissions',
        },
        controller: 'settingsPermissionController',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', function(\$q, \$rootScope) {
                
                if( \$rootScope.acl.isFullAdmin == true ) {
                    return true;
                }
                
                // Does not have permission
                \$rootScope.\$broadcast('AclNoAccess', {msg: 'This page is only for Full Access Admins'});
                return \$q.reject('Unauthorized');
            }],

            settingsPermissionServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    '";
        // line 612
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/permissions/services/permissionGroups.js',
                ]);
            }],

            deps: ['\$ocLazyLoad', 'settingsPermissionServices', function(\$ocLazyLoad, settingsPermissionServices) {
                return \$ocLazyLoad.load([ 
                    '";
        // line 618
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/permissions/controllers/permission.js',
                ]);
            }],
        }
    })
    ";
        // line 624
        echo "    .state(\"settings.types\", {
        url: \"/types\",
        templateUrl: '";
        // line 626
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/types/list/typesListTpl.html',
        name: 'settings.types',
        controller: 'settingsTypesListController',
        data: {
            pageTitle: 'Contact Types',
            navid:     'navigation-settings-types',
        },
        resolve: {

            // ACL - based on specific rule
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                
                // check access
                if( AclService.can('settings.manage_types') ) {
                    return true;
                }
                
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.manage_types'});
                return \$q.reject('Unauthorized');
            }],

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 650
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/types/list/typesListCtrl.js',
                  ]);
            }],
        }
    })
    ////////////////////
    // MAILBOX
    ////////////////////
    ";
        // line 659
        echo "    .state(\"settings.mailbox\", {
        url: \"/mailbox\",
        templateUrl: '";
        // line 661
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/abstractTpl.html',
        name: 'settings.mailbox',
        redirect: 'settings.mailbox',
        abstract: true,
        data: {
            pageTitle: 'Mailbox',
            proxy: 'settings.mailbox.list',
            navid:     'navigation.settings.mailbox',
        },
        resolve: {
            parentDeps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'settings.mailbox',
                    files: ['";
        // line 675
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/abstractCtrl.js']
                });
            }],
        }
    })
    ";
        // line 681
        echo "    .state(\"settings.mailbox.list\", {
        url: \"/list\",
        templateUrl: '";
        // line 683
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/list/listTpl.html',
        name: 'settings.mailbox.list',
        data: {
            pageTitle: 'Mailboxes List',
            navid:     'navigation-settings-mailbox',
        },
        controller: 'mailboxListController',
        resolve: {

            // TODO - leave it?
            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.mailbox') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.mailbox'});
                return \$q.reject('Unauthorized');
            }],

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'settings.mailbox.list',
                    files: ['";
        // line 709
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/list/listCtrl.js']
                });
            }],
        }
    })
    ";
        // line 715
        echo "    .state(\"settings.mailbox.add\", {
        url: \"/add\",
        templateUrl: '";
        // line 717
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/add/addTpl.html',
        name: 'settings.mailbox.add',
        data: {
            pageTitle: 'Add Mailbox',
            navid:     'navigation-settings-mailbox',
        },
        controller: 'mailboxAddController',
        resolve: {

              // TODO - leave it?
              // ACL - permit only full admins
              isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                  // check access
                  if( AclService.can('settings.mailbox') ) {
                      return true;
                  }

                  \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.mailbox'});
                  return \$q.reject('Unauthorized');
              }],

              paramsServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                    return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 742
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/add/mailboxParams.js',
                    ]);
              }],

              deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  // required controllers
                  return \$ocLazyLoad.load({
                      name: 'settings.mailbox.list',
                      files: ['";
        // line 750
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/add/addCtrl.js']
                  });
              }],
        }
    })
    ";
        // line 756
        echo "    .state(\"settings.mailbox.edit\", {
        url: \"/edit/{id:int}\",
        templateUrl: '";
        // line 758
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/edit/editTpl.html',
        name: 'settings.mailbox.edit',
        data: {
            pageTitle: 'Mailbox #";
        // line 761
        echo "{{ mailboxID }}";
        echo "',
            navid:     'navigation-settings-mailbox',
        },
        controller: 'mailboxEditController',
        resolve: {
              isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                  // check access
                  if( AclService.can('settings.mailbox') ) {
                      return true;
                  }

                  \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.mailbox'});
                  return \$q.reject('Unauthorized');
               }],
          
               paramsServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                    return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 780
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/add/mailboxParams.js',
                    ]);
               }],

              // update title, tricky, but works :) version for breadcrumbs
              mailboxID: function(\$stateParams) {
                  return \$stateParams.id;
              },

              deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load({
                      name: 'settings.mailbox.list',
                      files: ['";
        // line 792
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/mailbox/edit/editTpl.js']
                  });
              }],
        }
    })
    ////////////////////
    // IMPORT/EXPORT
    ////////////////////
    ";
        // line 801
        echo "    .state(\"settings.importexport\", {
        url: \"/importexport\",
        templateUrl: '";
        // line 803
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/importexport/importexportHeaderTpl.html',
        name: 'settings.importexport',
        controller: 'importexportHeaderCtrl',
        redirect: 'settings.importexport.export',
        abstract: true,
        data: {
            pageTitle: 'Import / Export',
            proxy:     'settings.importexport',
            navid:      'navigation-settings-importexport',
        },
        resolve: {
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'importexportHeaderCtrl',
                    files: ['";
        // line 818
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/importexport/importexportHeaderCtrl.js']
                });
            }],
        }
    })
    ";
        // line 824
        echo "    .state(\"settings.importexport.export\", {
        url: \"/export\",
        templateUrl: '";
        // line 826
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/importexport/export/exportTpl.html',
        name: 'settings.importexport.export',
        data: {
            pageTitle: 'Export',
            navid:     'navigation-settings-importexport',
        },
        controller: 'exportCtrl',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.importexport') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.importexport'});
                return \$q.reject('Unauthorized');
            }],

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'exportCtrl',
                    files: ['";
        // line 851
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/importexport/export/exportCtrl.js']
                });
            }],
        }
    })
    ";
        // line 857
        echo "    .state(\"settings.importexport.import\", {
        url: \"/import\",
        templateUrl: '";
        // line 859
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/importexport/import/importTpl.html',
        name: 'settings.importexport.import',
        data: {
            pageTitle: 'Import',
            navid:     'navigation-settings-importexport',
        },
        controller: 'importCtrl',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.importexport') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.importexport'});
                return \$q.reject('Unauthorized');
            }],

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'importCtrl',
                    files: ['";
        // line 884
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/importexport/import/importCtrl.js']
                });
            }],
        }
    })
    ////////////////////
    // WEBFROMS
    ////////////////////
    ";
        // line 893
        echo "    .state(\"settings.webforms\", {
        url: \"/webforms\",
        template: '<ui-view/>',
        name: 'settings.webforms',
        redirect: 'settings.webforms.list',
        data: {
            pageTitle: 'Web Forms',
            proxy:     'settings.webforms',
            navid:     'navigation-settings-webforms',
        },
        resolve: {
            cachedListData: ['\$http', '\$rootScope', function(\$http, \$rootScope) {
                // Perform actions on initialize these controller
                return \$http.get(\$rootScope.settings.config.apiURL + '/helpers/resources/table/json', {cache: true});
            }],
        }
    })
    ";
        // line 911
        echo "    .state(\"settings.webforms.list\", {
        url: \"/list\",
        templateUrl: '";
        // line 913
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/webforms/list/webformsList.html',
        name: 'settings.webforms.list',
        data: {
            pageTitle: 'Web Forms',
            navid:     'navigation-settings-webforms',
        },
        controller: 'webformsListCtrl',
        resolve: {
            
            // ACL - based on specific rule
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                
                // check access
                if( AclService.can('settings.webforms') ) {
                    return true;
                }
                
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.webforms'});
                return \$q.reject('Unauthorized');
            }],
        
            additionalParams: ['\$stateParams', function(\$stateParams) {
                    return {
                        templates_root: '";
        // line 936
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "',
                    };
            }],
       
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 943
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/webforms/list/webformsListCtrl.js',
                  ]);
            }],
        }
    })
    ";
        // line 949
        echo "    .state(\"settings.webforms.add\", {
        url: \"/add\",
        templateUrl: '";
        // line 951
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/webforms/create/webformsAdd.html',
        name: 'settings.webforms.add',
        data: {
            pageTitle: 'Create Web Form',
            navid:     'navigation-settings-webforms',
        },
        controller: 'webformsAddCtrl',
        resolve: {
            
            // ACL - based on specific rule
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                
                // check access
                if( AclService.can('settings.webforms') ) {
                    return true;
                }
                
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.webforms'});
                return \$q.reject('Unauthorized');
            }],
            settingsFieldsListServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 974
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/services/field.js',
                        '";
        // line 975
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/groups/services/groups.js',
                        '";
        // line 976
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/webforms/create/webformsAddService.js',
                    ]);
                }],
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 982
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/webforms/create/webformsAddCtrl.js',
                  ]);
            }],
        }
    })
    ";
        // line 988
        echo "    .state(\"settings.webforms.details\", {
        url: \"/details/{id:int}\",
        templateUrl: '";
        // line 990
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/webforms/details/webformsDetails.html',
        name: 'settings.webforms.details',
        data: {
            pageTitle: 'Web Form Details',
            navid:     'navigation-settings-webforms',
        },
        controller: 'webformsDetailsCtrl',
        resolve: {
            
            // ACL - based on specific rule
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                
                // check access
                if( AclService.can('settings.webforms') ) {
                    return true;
                } 
                             
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.webforms'});
                return \$q.reject('Unauthorized');
            }],
 
            settingsFieldsListServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 1014
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/fields/services/field.js',
                        '";
        // line 1015
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/fields/groups/services/groups.js',
                    ]);
                }],
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 1021
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/webforms/details/webformsDetailsCtrl.js',
                        '";
        // line 1022
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/webforms/details/webformsEditService.js',

                  ]);
            }],
        }
    })
    ////////////////////
    // AUTOMATIONS
    ////////////////////
    ";
        // line 1032
        echo "    .state(\"settings.automations\", {
        url: \"/automations\",
        template: '<ui-view/>',
        name: 'settings.automations',
        redirect: 'settings.automations.list',
        data: {
            pageTitle: 'Automations',
            proxy:     'settings.automations',
            navid:     'navigation-settings-automations',
        },
        resolve: {}
    })
    ";
        // line 1045
        echo "    .state(\"settings.automations.list\", {
        url: \"/list\",
        templateUrl: '";
        // line 1047
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/automations/list/templates/group.html',
        name: 'settings.automations.list',
        data: {
            pageTitle: 'List',
            navid:     'navigation-settings-automations',
        },
        controller: 'automationsListCtrl',
        resolve: {
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                if( AclService.can('settings.automations') ) {
                    return true;
                }
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.automations'});
                return \$q.reject('Unauthorized');
            }],
        
//            additionalParams: ['\$stateParams', function(\$stateParams) {
//                    return {
//                        templates_root: '";
        // line 1065
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "',
//                    };
//            }],
       
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load(['";
        // line 1070
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/automations/list/controllers/automationsListCtrl.js']);
            }],
        }
    })
    ";
        // line 1075
        echo "    .state(\"settings.automations.add\", {
        url: \"/add\",
        templateUrl: '";
        // line 1077
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/automations/create/templates/create.html',
        name: 'settings.automations.add',
        data: {
            pageTitle: 'Create Automation',
            navid:     'navigation-settings-automations',
        },
        controller: 'automationsCreateController',
        resolve: {
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                if( AclService.can('settings.automations') ) {
                    return true;
                }
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.automations'});
                return \$q.reject('Unauthorized');
            }],
            settingsFieldsListServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load(['";
        // line 1093
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/automations/create/services/automationsCreateService.js']);
                }],
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  return \$ocLazyLoad.load(['";
        // line 1096
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/automations/create/controllers/automationsCreateController.js']);
            }],
        }
    })
    ";
        // line 1101
        echo "    .state(\"settings.automations.edit\", {
        url: \"/edit/{id:int}\",
        name: 'settings.automations.edit',
        data: {
            pageTitle: 'Automation Details',
            navid:     'navigation-settings-automations',
        },
        views: {
            '': {
                templateUrl: '";
        // line 1110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/automations/edit/templates/edit.html',
                controller: 'automationsEditController'
            }
        },
        resolve: {
            automationData: ['\$http', '\$rootScope', '\$stateParams', function(\$http, \$rootScope, \$stateParams) {
                return \$http.get(\$rootScope.settings.config.apiURL + '/settings/automations/get/' + \$stateParams.id + '/json');
            }],
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {
                if( AclService.can('settings.automations') ) {
                    return true;
                } 
                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.automations'});
                return \$q.reject('Unauthorized');
            }],
 
            settingsFieldsListServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load(['";
        // line 1127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/automations/edit/services/automationsEditService.js']);
                }],
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                    return \$ocLazyLoad.load(
                        [
                            '";
        // line 1132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/settings/automations/edit/controllers/automationsEditController.js'
                        ]);
            }],
        }
    })
    ////////////////////
    // CALENDAR
    ////////////////////
    ";
        // line 1141
        echo "    .state(\"calendar\", {
        url: \"/calendar\",
        templateUrl: '";
        // line 1143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/calendar/templates/calendar.html',
        name: 'calendar',
        data: {
            pageTitle: 'Calendar',
            navid:     'navigation-calendar',
        },
        controller: 'leadsCalendarController',
        resolve: {

            leadsCalendarServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load({
                    cache: true,
                    files: [
                    '";
        // line 1156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-bootstrap-calendar/dist/js/angular-bootstrap-calendar-tpls.min.js',
                    ]
                });
            }],

            deps: ['\$ocLazyLoad', 'leadsCalendarServices', function(\$ocLazyLoad, leadsCalendarServices) {
                return \$ocLazyLoad.load({
                    cache: true,
                    files: [
                    // required controllers
                    '";
        // line 1166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/calendar/controllers/calendar.js',
                    ]
                });
            }],
        }
    })
    ////////////////////
    // BOARD
    ////////////////////
    ";
        // line 1176
        echo "    .state(\"board\", {
        url: \"/board\",
        templateUrl: '";
        // line 1178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/board/templates/board.html',
        name: 'board',
        data: {
            pageTitle: 'Board',
            navid:     'navigation-board',
        },
        controller: 'boardController',
        resolve: {

            dataBoardService: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 1190
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/board/services/board.js'
                    ]);
                }],
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load({
                    cache: true,
                    files: [
                    '";
        // line 1197
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/board/controllers/board.js',
                    ]
                });
            }],
        }
    })
    ////////////////////
    // Dashboard
    ////////////////////
    .state(\"dashboard\", {
        url: \"/dashboard\",
        name: 'dashboard',
        data: {
            pageTitle: 'Dashboard',
            navid:     'navigation-dashboard',
        },
        views: {
            '': {
                templateUrl: '";
        // line 1215
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/templates/_main.html',
//                template: '<h1>main</h1><div ui-view=\"topWidgets\"></div><div ui-view=\"followups\"></div>'
                // we couls use url, but to obtain that simple html ? stsly?
                // when add new state views remember to add it here in correct order
                controller: 'dashboardController'
            },

            'topWidgets@dashboard': {
                templateUrl: '";
        // line 1223
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/templates/top_widgets.html',
                controller: 'topWidgetsDashboardController'
            },
            'followups@dashboard': {
                templateUrl: '";
        // line 1227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/templates/followups.html',
                controller: 'dashboardFollowupsController'
            },
            'resources@dashboard': {
                templateUrl: '";
        // line 1231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/templates/resources.html',
                controller: 'dashboardResourcesController'
            },
            'history@dashboard': {
                templateUrl: '";
        // line 1235
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/templates/history.html',
                controller: 'dashboardHistoryController'
            },
            'emails@dashboard': {
                templateUrl: '";
        // line 1239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/templates/emails.html',
                controller: 'dashboardEmailsController'
            }
        },
        resolve: {
          // guess we will need dependiency for personalization settings
          
            // A function value promises resolved data to controller and child statuses
            tableColumns: ['\$http', '\$rootScope', function(\$http, \$rootScope) {
                // but \$http returns: :D
                // Returns a Promise that will be resolved to a response object when the request succeeds or fails.
                return \$http.get(\$rootScope.settings.config.apiURL + '/settings/fields/views/for/dashboard/json');
            }],
            dashboardData: ['\$http', '\$rootScope', function(\$http, \$rootScope) {
                // but \$http returns: :D
                // Returns a Promise that will be resolved to a response object when the request succeeds or fails.
                return \$http.get(\$rootScope.settings.config.apiURL + '/dashboard/background/json');
            }],
            
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // load main controllers for each view
                    '";
        // line 1261
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/controllers/_main.js',
                    '";
        // line 1262
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/controllers/topWidgets.js',
                    '";
        // line 1263
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/controllers/followups.js',
                    '";
        // line 1264
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/controllers/resources.js',
                    '";
        // line 1265
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/controllers/history.js',
                    '";
        // line 1266
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/dashboard/controllers/emails.js',
                ]);
            }],
        }
    })
    
    ////////////////////
    // CAMPAIGNS
    ////////////////////
    ";
        // line 1276
        echo "    .state(\"campaigns\", {
        url: \"/campaigns\",
        templateUrl: '";
        // line 1278
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/campaigns/abstractTpl.html',
        name: 'campaigns',
        redirect: 'campaigns.list',
        abstract: true,
        data: {
            pageTitle: 'Campaigns',
            proxy: 'campaigns',
            navid:     'navigation-campaigns',
        },
        resolve: {
            parentDeps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'campaigns',
                    files: ['";
        // line 1292
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/campaigns/abstractCtrl.js']
                });
            }],
        }
    })
    ";
        // line 1298
        echo "    .state(\"campaigns.list\", {
        url: \"/list\",
        templateUrl: '";
        // line 1300
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/campaigns/list/listTpl.html',
        name: 'campaigns.list',
        data: {
            pageTitle: 'List',
            navid:     'navigation-campaigns',
        },
        controller: 'campaignsListController',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.campaigns') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.campaigns'});
                return \$q.reject('Unauthorized');
            }],

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'campaigns.list',
                    files: ['";
        // line 1325
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/campaigns/list/listCtrl.js']
                });
            }],
        }
    })
    ";
        // line 1331
        echo "    .state(\"campaigns.add\", {
        url: \"/add\",
        templateUrl: '";
        // line 1333
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/campaigns/add/addTpl.html',
        name: 'campaigns.add',
        data: {
            pageTitle: 'Add Campaign',
            navid:     'navigation-campaigns',
        },
        controller: 'campaignsAddController',
        resolve: {

              // ACL - permit only full admins
              isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                  // check access
                  if( AclService.can('settings.campaigns') ) {
                      return true;
                  }

                  \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.campaigns'});
                  return \$q.reject('Unauthorized');
              }],


              deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  // required controllers
                  return \$ocLazyLoad.load({
                      name: 'campaigns.list',
                      files: ['";
        // line 1359
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/campaigns/add/addCtrl.js']
                  });
              }],
        }
    })
    ";
        // line 1365
        echo "    .state(\"campaigns.edit\", {
        url: \"/edit/{id:int}\",
        templateUrl: '";
        // line 1367
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/campaigns/edit/editTpl.html',
        name: 'campaigns.edit',
        data: {
            pageTitle: 'Campaign #";
        // line 1370
        echo "{{ campaignID }}";
        echo "',
            pageTitleTemplate: 'Campaign #";
        // line 1371
        echo "{{ campaignID }}";
        echo "',
            proxy: 'campaigns.list',
            navid:     'navigation-campaigns',
        },
        controller: 'campaignsEditController',
        resolve: {

              // ACL - permit only full admins
              isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                  // check access
                  if( AclService.can('settings.campaigns') ) {
                      return true;
                  }

                  \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.campaigns'});
                  return \$q.reject('Unauthorized');
              }],

              // update title, tricky, but works :) version for breadcrumbs
              campaignID: function(\$stateParams) {
                  return \$stateParams.id;
              },

              deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  // required controllers
                  return \$ocLazyLoad.load({
                      name: 'campaigns.list',
                      files: ['";
        // line 1399
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/campaigns/edit/editTpl.js']
                  });
              }],
        }
    })
    
    ////////////////////
    // UTILS - abstract
    ////////////////////
    ";
        // line 1409
        echo "    .state(\"utils\", {
        url: \"/utils\",
        // Note: abstract still needs a ui-view for its children to populate.
        template: '<ui-view/>',
        name: 'utils',
        redirect: 'utils.statistics',
        abstract: true, // to activate child states
        data: {
            pageTitle: 'Utilities',
            proxy:     'utils',
            navid:     'navigation-utils',
        }
    })
    ";
        // line 1423
        echo "    .state(\"utils.statistics\", {
        url: \"/statistics\",
        name: 'utils.statistics',
        data: {
            pageTitle:          'Statistics',
            navid:              'navigation-utils-statistics',
        },
        views: {
            '': {
                templateUrl: '";
        // line 1432
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/templates/_main.html',
//                template: '<h1>main</h1><div ui-view=\"topWidgets\"></div><div ui-view=\"followups\"></div>'
                // we couls use url, but to obtain that simple html ? stsly?
                // when add new state views remember to add it here in correct order
                controller: 'statisticsController'
            },

            'perStatus@utils.statistics': {
                templateUrl: '";
        // line 1440
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/templates/perStatus.html',
                controller: 'perStatusStatisticsController'
            },
            'lastTen@utils.statistics': {
                templateUrl: '";
        // line 1444
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/templates/lastTen.html',
                controller: 'lastTenStatisticsController'
            },
            'totalPerAdmin@utils.statistics': {
                templateUrl: '";
        // line 1448
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/templates/totalPerAdmin.html',
                controller: 'totalPerAdminStatisticsController'
            },
            'newPerMonth@utils.statistics': {
                templateUrl: '";
        // line 1452
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/templates/newPerMonth.html',
                controller: 'newPerMonthStatisticsController'
            },
            'newPerDay@utils.statistics': {
                templateUrl: '";
        // line 1456
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/templates/newPerDay.html',
                controller: 'newPerDayStatisticsController'
            },
        },
        resolve: {
            // chart.js dependiences, since charts are used only here
            loadChartJsLib: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    { type: 'js', path:'";
        // line 1464
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/d3/d3.min.js'},
                    { type: 'js', path:'";
        // line 1465
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/Chart.js/Chart.min.js'},
                ]);
            }],
        
            deps: ['\$ocLazyLoad', 'loadChartJsLib', function(\$ocLazyLoad, loadChartJsLib) {
                return \$ocLazyLoad.load([
                    // load main controller
                    '";
        // line 1472
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/controllers/_main.js',
                    '";
        // line 1473
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/controllers/perStatus.js',
                    '";
        // line 1474
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/controllers/lastTen.js',
                    '";
        // line 1475
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/controllers/totalPerAdmin.js',
                    '";
        // line 1476
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/controllers/newPerMonth.js',
                    '";
        // line 1477
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/statistics/controllers/newPerDay.js',

                    // chart.js dependiences, since charts are used only here
                    '";
        // line 1480
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-chart/dist/angular-chart.min.css',
                    '";
        // line 1481
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-chart/dist/angular-chart.min.js',
                ]);
            }],
        }
    })
    ";
        // line 1487
        echo "    .state(\"utils.archive\", {
        url: \"/archive\",
        templateUrl: '";
        // line 1489
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/list/contactsListTpl.html',
        name: 'utils.archive',
        data: {
            pageTitle: 'Archive',
            navid: 'navigation-utils-archive',
        },
        controller: 'contactsListCtrl',
        resolve: {
            // I know, but damm it
            dynamicType: ['\$stateParams', 'ContactTypes', function(\$stateParams, ContactTypes) {
                var type = ContactTypes.getById(\$stateParams.contactTypeID);

                if(type !== null && type.name !== 'undefined') {
                    return type;
                }

                all = ContactTypes.get();

                // set up correct initial contact type for table
                for(i=0; i < all.length; i++) {
                    if(all[i].active === true) {
                        return all[i];
                    }
                }
                
                
                return {};
            }],
            cachedListData: ['\$http', '\$rootScope', function(\$http, \$rootScope) {
                // Perform actions on initialize these controller
                return \$http.get(\$rootScope.settings.config.apiURL + '/helpers/resources/table/json', {cache: true});
            }],
            statesConfig: function() {
                return {
                    IsItArchive: true,
                };
            },

            tableColumns: ['\$http', '\$rootScope', function(\$http, \$rootScope) {
                return \$http.get(\$rootScope.settings.config.apiURL + '/settings/fields/views/for/lists.leads/json');
            }],


            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    '";
        // line 1534
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/list/contactsListCtrl.js',
                ]);
            }],
        }
    })
    
    // NOTIFICATIONS
    ";
        // line 1542
        echo "    .state(\"utils.notifications\", {
        url: \"/notifications\",
        template: '<ui-view/>',
        name: 'utils.notifications',
        redirect: 'utils.notifications.list',
        abstract: true,
        data: {
            pageTitle: 'Notifications',
            proxy:     'utils.notifications',
            navid:     'navigation-utils-notifications',
        },
    })
    ";
        // line 1555
        echo "    .state(\"utils.notifications.list\", {
        url: \"/list\",
        templateUrl: '";
        // line 1557
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/notifications/list/listTpl.html',
        name: 'utils.notifications.list',
        data: {
            pageTitle: 'List',
            navid:     'navigation-utils-notifications',
        },
        controller: 'notificationsListController',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.notifications') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'utils.notifications'});
                return \$q.reject('Unauthorized');
            }],

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'campaigns.list',
                    files: ['";
        // line 1582
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/notifications/list/listCtrl.js']
                });
            }],
        }
    })
    ";
        // line 1588
        echo "    .state(\"utils.notifications.add\", {
        url: \"/add\",
        templateUrl: '";
        // line 1590
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/notifications/add/addTpl.html',
        name: 'utils.notifications.add',
        data: {
            pageTitle: 'Add Notification',
            navid:     'navigation-utils-notifications',
        },
        controller: 'notificationsAddController',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.notifications') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.notifications'});
                return \$q.reject('Unauthorized');
            }],

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'campaigns.list',
                    files: ['";
        // line 1615
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/notifications/add/addCtrl.js']
                });
            }],
        }
    })
    ";
        // line 1621
        echo "    .state(\"utils.notifications.edit\", {
        url: \"/edit/{id:int}\",
        templateUrl: '";
        // line 1623
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/notifications/edit/editTpl.html',
        name: 'utils.notifications.edit',
        data: {
            pageTitle: 'Notification #";
        // line 1626
        echo "{{ notificationID }}";
        echo "',
            pageTitleTemplate: 'Notification #";
        // line 1627
        echo "{{ notificationID }}";
        echo "',
            proxy: 'campaigns.list',
            navid:     'navigation-utils-notifications',
        },
        controller: 'notificationsEditController',
        resolve: {

              // ACL - permit only full admins
              isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                  // check access
                  if( AclService.can('settings.notifications') ) {
                      return true;
                  }

                  \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.notifications'});
                  return \$q.reject('Unauthorized');
              }],

              // update title, tricky, but works :) version for breadcrumbs
              notificationID: function(\$stateParams) {
                  return \$stateParams.id;
              },

              deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                  // required controllers
                  return \$ocLazyLoad.load({
                      name: 'campaigns.list',
                      files: ['";
        // line 1655
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/notifications/edit/editTpl.js']
                  });
              }],
        }
    })
    // MASS MAIL
    ";
        // line 1662
        echo "    .state(\"utils.massmessage\", {
        url: \"/massmessage\",
        templateUrl: '";
        // line 1664
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/massmessage/abstractTpl.html',
        name: 'utils.massmessage',
        redirect: 'utils.massmessage.add',
        abstract: true,
        data: {
            proxy:      'utils.massmessage.list',
            navid:      'navigation-utils-massmessage',
        },
        resolve: {
            parentDeps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'massmessage',
                    files: ['";
        // line 1677
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/massmessage/abstractCtrl.js']
                });
            }],
        }
    })
    ";
        // line 1683
        echo "    .state(\"utils.massmessage.list\", {
        url: \"/list\",
        templateUrl: '";
        // line 1685
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/massmessage/list/listTpl.html',
        name: 'utils.massmessage.list',
        data: {
            pageTitle:          '";
        // line 1688
        echo "{{ breadcrumbsTitle }}";
        echo "',
            pageTitleTemplate:  '";
        // line 1689
        echo "{{ breadcrumbsTitle }}";
        echo "',
            navid:              'navigation-utils-massmessage',
        },
        controller: 'massmessageListController',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.manage_massmessage') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.manage_massmessage'});
                return \$q.reject('Unauthorized');
            }],

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'massmail.list',
                    files: ['";
        // line 1711
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/massmessage/list/listCtrl.js']
                });
            }],
        
            breadcrumbsTitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.massmessage.list').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    ";
        // line 1725
        echo "    .state(\"utils.massmessage.add\", {
        url: \"/add\",
        templateUrl: '";
        // line 1727
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/massmessage/add/addTpl.html',
        name: 'utils.massmessage.add',
        data: {
            pageTitle:          '";
        // line 1730
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            pageTitleTemplate:  '";
        // line 1731
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:      'navigation-utils-massmessage',
        },
        controller: 'massmessageAddController',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.manage_massmessage') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.manage_massmessage'});
                return \$q.reject('Unauthorized');
            }],

            depsTinymce: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'tinymce.lib',
                    files: ['";
        // line 1753
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/tinymce/tinymce.min.js']
                });
            }],

            depsTinymceIntegration: ['\$ocLazyLoad', 'depsTinymce', function(\$ocLazyLoad, depsTinymce) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'ui.tinymce',
                    files: ['";
        // line 1761
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-ui-tinymce/src/tinymce.js']
                });
            }],
        
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'massmessage.add',
                    files: ['";
        // line 1769
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/massmessage/add/addCtrl.js']
                });
            }],
          
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.massmessage.add').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        
            breadcrumbsTitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.massmessage.list').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    ";
        // line 1791
        echo "    .state(\"utils.massmessage.edit\", {
        url: \"/edit/{id:int}\",
        templateUrl: '";
        // line 1793
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/massmessage/edit/editTpl.html',
        name: 'utils.massmessage.edit',
        data: {
            pageTitle: '";
        // line 1796
        echo "{{ breadcrumbsSubtitle }}";
        echo " #";
        echo "{{ massmessageID }}";
        echo "',
            pageTitleTemplate: '";
        // line 1797
        echo "{{ breadcrumbsSubtitle }}";
        echo " #";
        echo "{{ massmessageID }}";
        echo "',
            navid:     'navigation-massmessage',
        },
        controller: 'massmessageEditController',
        resolve: {

            // ACL - permit only full admins
            isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                // check access
                if( AclService.can('settings.manage_massmessage') ) {
                    return true;
                }

                \$rootScope.\$broadcast('AclNoAccess', {rule: 'settings.manage_massmessage'});
                return \$q.reject('Unauthorized');
            }],
        
            // update title, tricky, but works :) version for breadcrumbs
            massmessageID: function(\$stateParams) {
                return \$stateParams.id;
            },

            depsTinymceIntegration: ['\$ocLazyLoad', 'depsTinymce', function(\$ocLazyLoad, depsTinymce) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'ui.tinymce',
                    files: ['";
        // line 1824
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-ui-tinymce/src/tinymce.js']
                });
            }],
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'massmessage.edit',
                    files: ['";
        // line 1831
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/massmessage/edit/editTpl.js']
                });
            }],
        
            depsTinymce: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'tinymce.lib',
                    files: ['";
        // line 1839
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/tinymce/tinymce.min.js']
                });
            }],

            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.massmessage.edit').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        
            breadcrumbsTitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.massmessage.list').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    .state(\"utils.importmail\", {
        url: \"/importmail\",
        name: 'utils.importmail',
        data: {
            pageTitle: 'Received Messages',
            navid:     'navigation-utils-importmail',
        },
        views: {
            '': {
                templateUrl: '";
        // line 1869
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/importmail/templates/_main.html',
                controller: 'importmailController'
            },
            
            'receive-list@utils.importmail': {
                templateUrl: '";
        // line 1874
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/importmail/templates/receive.html',
                controller: 'importmailReceiveController'
            },
        },
        resolve: {     
            importmailData: ['\$http', '\$rootScope', function(\$http, \$rootScope) {
                return \$http.get(\$rootScope.settings.config.apiURL + '/settings/statuses/importmail/general/json');
            }],
            
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    '";
        // line 1885
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/importmail/controllers/_main.js',
                    '";
        // line 1886
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/utils/importmail/controllers/receive.js',
                ]);
            }],
        }
    })
    ////////////////////
    // CONTACTS HAPPEN - Build Contacts Awesome routing
    ////////////////////
    ";
        // line 1895
        echo "    .state(\"contacts\", {
        url: '/contacts',
        template: '<ui-view/>',
        name: 'contacts',
        abstract: true,
        skipBreadcrumbsUrl: true,
        redirect: 'contacts.list',
        params: {
            contactTypeID: null,
        },
        data: {
            pageTitle: 'Contacts',
            proxy:     'contacts',
            navid:     'navigation-campaigns',
        },
        resolve: {

            // I know, but damm it
            dynamicType: ['\$stateParams', 'ContactTypes', '\$cookies', function(\$stateParams, ContactTypes, \$cookies) {
                if (\$stateParams.contactTypeID === null && \$cookies.get('contactTypeID') !== null) {
                    \$stateParams.contactTypeID = \$cookies.get('contactTypeID');
                    \$cookies.remove('contactTypeID');
                } else if (\$stateParams.contactTypeID !== null){
                    \$cookies.put('contactTypeID', \$stateParams.contactTypeID);
                }
                var type = ContactTypes.getById(\$stateParams.contactTypeID);

                if(type !== null && type.name !== 'undefined') {
                    return type;
                }

                all = ContactTypes.get();

                // set up correct initial contact type for table
                for(i=0; i < all.length; i++) {
                    if(all[i].active === true) {
                        return all[i];
                    }
                }
                
                
                return {};
            }],
          
            cachedListData: ['\$http', '\$rootScope', function(\$http, \$rootScope) {
                // Perform actions on initialize these controller
                return \$http.get(\$rootScope.settings.config.apiURL + '/helpers/resources/table/json', {cache: true});
            }],
        }
    })
    ";
        // line 1946
        echo "    .state(\"contacts.list\", {
        url: \"/list\",
        templateUrl: '";
        // line 1948
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/list/contactsListTpl.html',
        name: 'contacts.list',
        data: {
            pageTitle: '";
        // line 1951
        echo "{{  dynamicType.name }}";
        echo "',
            navid: 'contacts-list',
        },
        controller: 'contactsListCtrl',
        resolve: {

            // since there are few states that load exactly the same files/controllers
            // configure here config for that controller
            statesConfig: function() {
                return {
                    IsItArchive: false,
                };
            },

            tableColumns: ['\$http', '\$rootScope', function(\$http, \$rootScope) {
                return \$http.get(\$rootScope.settings.config.apiURL + '/settings/fields/views/for/lists.leads/json');
            }],



            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    '";
        // line 1973
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/list/contactsListCtrl.js',
                ]);
            }],
        }
    })
    ";
        // line 1979
        echo "    .state(\"contacts.create\", {
          url: \"/create\",
          templateUrl: '";
        // line 1981
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/templates/createForm.html',
          name: 'contacts.create',
          data: {
                pageTitle: 'Create',
                navid: 'navigation-createlead',
          },
          controller: 'leadsCreateController',
          resolve: {
                
                // ACL - permit only full admins
                isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                    // check access
                    if( AclService.can('resources.create_lead') ) {
                        return true;
                    }

                    \$rootScope.\$broadcast('AclNoAccess', {rule: 'resources.create_lead'});
                    return \$q.reject('Unauthorized');
                }],
        
                // no additional params bur required to DI
                additionalParams: ['\$stateParams', function(\$stateParams) {
                    return {
                        ticket_id: false,
                        quote_id:  false,
                        client_id: false,
                        params: false
                    };
                }],
            
                leadsCreateServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                    return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 2015
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadParams.js',
                        '";
        // line 2016
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadService.js',
                    ]);
                }],
                
                deps: ['\$ocLazyLoad', 'leadsCreateServices', function(\$ocLazyLoad, leadsCreateServices) {
                    return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 2023
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/controllers/createLead.js',
                    ]);
                }],
          }
    })
    ";
        // line 2029
        echo "    .state(\"contacts.createFromTicket\", {
          url: \"/create/ticket/{id:int}\",
          templateUrl: '";
        // line 2031
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/templates/createForm.html',
          name: 'contacts.createFromTicket',
          data: {
                pageTitle: 'Create Lead',
                navid: 'navigation-createlead',
          },
          controller: 'leadsCreateController',
          resolve: {
                
                // ACL - permit only full admins
                isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                    // check access
                    if( AclService.can('resources.create_lead') ) {
                        return true;
                    }

                    \$rootScope.\$broadcast('AclNoAccess', {rule: 'resources.create_lead'});
                    return \$q.reject('Unauthorized');
                }],
            
                additionalParams: ['\$stateParams', function(\$stateParams) {
                    return {
                        ticket_id: \$stateParams.id,
                        quote_id:  false,
                        client_id: false,
                        params: false
                    };
                }],
            
                leadsCreateServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                    return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 2064
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadParams.js',
                        '";
        // line 2065
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadService.js',
                    ]);
                }],
            
                deps: ['\$ocLazyLoad', 'leadsCreateServices', function(\$ocLazyLoad, leadsCreateServices) {
                    return \$ocLazyLoad.load([
                          // required controllers
                          '";
        // line 2072
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/controllers/createLead.js',
                    ]);
                }],
          }
    })
    ";
        // line 2078
        echo "    .state(\"contacts.createFromQuote\", {
          url: \"/create/quote/{id:int}\",
          templateUrl: '";
        // line 2080
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/templates/createForm.html',
          name: 'contacts.createFromQuote',
          data: {
                pageTitle: 'Create Lead',
                navid: 'navigation-createlead',
          },
          controller: 'leadsCreateController',
          resolve: {
                
                // ACL - permit only full admins
                isAllowed: ['\$q', '\$rootScope', 'AclService', function(\$q, \$rootScope, AclService) {

                    // check access
                    if( AclService.can('resources.create_lead') ) {
                        return true;
                    }

                    \$rootScope.\$broadcast('AclNoAccess', {rule: 'resources.create_lead'});
                    return \$q.reject('Unauthorized');
                }],
            
                additionalParams: ['\$stateParams', function(\$stateParams) {
                    return {
                        ticket_id: false,
                        quote_id:  \$stateParams.id,
                        client_id: false,
                        params: false
                    };
                }],
            
                leadsCreateServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                    return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 2113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadParams.js',
                        '";
        // line 2114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadService.js',
                    ]);
                }],
            
                deps: ['\$ocLazyLoad', 'leadsCreateServices', function(\$ocLazyLoad, leadsCreateServices) {
                    return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 2121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/controllers/createLead.js',
                    ]);
                }],
          }
    })
    ";
        // line 2127
        echo "    .state(\"contacts.createFromClient\", {
          url: \"/create/client/{id:int}\",
          templateUrl: '";
        // line 2129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/templates/createForm.html',
          name: 'contacts.createFromClient',
          data: {
                pageTitle: 'Create Lead',
                navid: 'navigation-createlead',
          },
          controller: 'leadsCreateController',
          resolve: {
                
                additionalParams: ['\$stateParams', function(\$stateParams) {
                    return {
                        ticket_id: false,
                        quote_id:  false,
                        client_id: \$stateParams.id,
                        params: false
                    };
                }],
            
                leadsCreateServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                    return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 2150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadParams.js',
                        '";
        // line 2151
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadService.js',
                    ]);
                }],
            
                deps: ['\$ocLazyLoad', 'leadsCreateServices', function(\$ocLazyLoad, leadsCreateServices) {
                    return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 2158
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/controllers/createLead.js',
                    ]);
                }],
          }
    })
    ";
        // line 2164
        echo "    .state(\"contacts.createFromParams\", {
          url: \"/create/email/{email:string}\",
          templateUrl: '";
        // line 2166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/templates/createForm.html',
          name: 'contacts.createFromParams',
          data: {
                pageTitle: 'Create Lead',
                navid: 'navigation-createlead',
          },
          controller: 'leadsCreateController',
          resolve: {
                
                additionalParams: ['\$stateParams', function(\$stateParams) {
                    return {
                        ticket_id: false,
                        quote_id:  false,
                        client_id: false,
                        params: {
                            email: \$stateParams.email
                        }
                    };
                }],
            
                leadsCreateServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                    return \$ocLazyLoad.load([
                        // required services
                        '";
        // line 2189
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadParams.js',
                        '";
        // line 2190
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/services/createLeadService.js',
                    ]);
                }],
            
                deps: ['\$ocLazyLoad', 'leadsCreateServices', function(\$ocLazyLoad, leadsCreateServices) {
                    return \$ocLazyLoad.load([
                        // required controllers
                        '";
        // line 2197
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/create/controllers/createLead.js',
                    ]);
                }],
          }
    })
    
    ";
        // line 2204
        echo "    .state(\"contacts.details\", {
        url: \"/{id:int}\",
        templateUrl: '";
        // line 2206
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/detailsHeaderTpl.html',
        name: 'contacts.details',
        controller: 'detailsHeaderCtrl',
        abstract: true,
        data: {
            proxy: 'contacts.list',
            navid: 'contacts-list',
        },
        resolve: {

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    '";
        // line 2218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/detailsHeaderCtrl.js',
                ]);
            }],

            // A function value promises resolved data to controller and child statuses
            leadMainDetailsData: ['\$stateParams', '\$resource', '\$rootScope', function(\$stateParams, \$resource, \$rootScope) {

                // Return a promise to makle sure the customer is completely
                // resolved before the controller is instantiated
                return \$resource(\$rootScope.settings.config.apiURL + '/lead/:id/getMainDetails/json', {id:'@id'}).get({id: \$stateParams.id}).\$promise;
            }],
        
            leadTypeData: ['\$stateParams', '\$resource', '\$rootScope', function(\$stateParams, \$resource, \$rootScope) {

                // Return a promise to makle sure the customer is completely
                // resolved before the controller is instantiated
                return \$resource(\$rootScope.settings.config.apiURL + '/lead/:id/getTypeDetails/json', {id:'@id'}).get({id: \$stateParams.id}).\$promise;
            }],
        
            // I know, but damm it - this approach works for breadcrumbs so its FINE
            dynamicType: ['leadMainDetailsData', 'ContactTypes', function(leadMainDetailsData, ContactTypes) {
                var type = ContactTypes.getById(leadMainDetailsData.type_id);

                if(type !== null && type.name !== 'undefined') {
                    return type;
                }

                all = ContactTypes.get();
                return all[0];
            }],
        
          }
      })
    ";
        // line 2252
        echo "    .state(\"contacts.details.summary\", {
        url: \"/summary\",
        name: 'contacts.details.summary',
        data: {
            pageTitle:         '#";
        // line 2256
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "', 
            pageTitleTemplate: '#";
        // line 2257
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:             'contacts-list',
        },
        views: {
            '': {
                templateUrl: '";
        // line 2262
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/designTpl.html',
                controller: 'detailsSummaryMainCtrl'
            },

            'customFields@contacts.details.summary': {
                templateProvider: ['\$templateFactory', 'leadMainDetailsData', function (\$templateFactory, leadMainDetailsData) {
                    if(leadMainDetailsData.deleted_at) {
                        return \$templateFactory.fromUrl('";
        // line 2269
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/templates/archive/customFields.html');
                    }
                    return \$templateFactory.fromUrl('";
        // line 2271
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/templates/customFields.html');
                }],
                controller: 'detailsSummaryCustomFieldsCtrl'
            },
            'followups@contacts.details.summary': {
                templateProvider: ['\$templateFactory', 'leadMainDetailsData', function (\$templateFactory, leadMainDetailsData) {
                    if(leadMainDetailsData.deleted_at) {
                        return \$templateFactory.fromUrl('";
        // line 2278
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/templates/archive/followups.html');
                    }
                    return \$templateFactory.fromUrl('";
        // line 2280
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/templates/followups.html');
                }],
                controller: 'detailsSummaryFollowupsCtrl'
            },
            'mainDetails@contacts.details.summary': {
                templateProvider: ['\$templateFactory', 'leadMainDetailsData', function (\$templateFactory, leadMainDetailsData) {
                    if(leadMainDetailsData.deleted_at) {
                        return \$templateFactory.fromUrl('";
        // line 2287
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/templates/archive/mainDetails.html');
                    }
                    return \$templateFactory.fromUrl('";
        // line 2289
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/templates/mainDetails.html');
                }],
                controller: 'detailsSummaryMainDetailsCtrl'
            },
            'notes@contacts.details.summary': {
                templateUrl: '";
        // line 2294
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/templates/notes.html',
                controller: 'detailsSummaryNotesCtrl'
            },
            'quickActionsTab@contacts.details.summary': {
                templateProvider: ['\$templateFactory', 'leadMainDetailsData', function (\$templateFactory, leadMainDetailsData) {
                    if(leadMainDetailsData.deleted_at) {
                        return \$templateFactory.fromUrl('";
        // line 2300
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/templates/archive/quickActionsTab.html');
                    }
                    return \$templateFactory.fromUrl('";
        // line 2302
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/templates/quickActionsTab.html');
                }],
                controller: 'detailsSummaryQuickActionTabsCtrl'
            },
        },
        resolve: {

            leadSummaryServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                    return \$ocLazyLoad.load([
                    // services
                    '";
        // line 2312
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/notes/services/notesService.js',
                ]);
            }],
        
            controllersResolve: ['\$ocLazyLoad', 'leadSummaryServices', function(\$ocLazyLoad, leadSummaryServices) {                
                return \$ocLazyLoad.load([
                    // controllers
                    '";
        // line 2319
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/designTpl.js',
                    '";
        // line 2320
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/controllers/customFields.js',
                    '";
        // line 2321
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/controllers/followups.js',
                    '";
        // line 2322
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/controllers/mainDetails.js',
                    '";
        // line 2323
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/controllers/notes.js',
                    '";
        // line 2324
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/summary/controllers/quickActionsTab.js',
                ]);
            }],
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.summary').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    ";
        // line 2338
        echo "    .state(\"contacts.details.followups\", {
        url: \"/followups\",
        templateUrl: '";
        // line 2340
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/followups/templates/followups.html',
        name: 'contacts.details.followups',
        data: {
            pageTitle:         '#";
        // line 2343
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            pageTitleTemplate: '#";
        // line 2344
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:             'contacts-list',
        },
        controller: 'leadFollowupController',
        resolve: {

            leadFollowupServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // services
                    '";
        // line 2353
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/followups/services/followupService.js',
                ]);
            }],

            deps: ['\$ocLazyLoad', 'leadFollowupServices', function(\$ocLazyLoad, leadFollowupServices) {
                return \$ocLazyLoad.load([
                    // controllers
                    '";
        // line 2360
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/followups/controllers/leadFollowupController.js',
                ]);
            }],
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                    // ";
        // line 2365
        echo "{{ breadcrumbsSubtitle }}";
        echo "
                var deferred = \$q.defer();
                \$translate('breadcrumbs.followups').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    ";
        // line 2375
        echo "    .state(\"contacts.details.followup\", {
        url: \"/followup/{followupID:int}\",
        templateUrl: '";
        // line 2377
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/followups/templates/edit.html',
        name: 'contacts.details.followup',
        data: {
            pageTitle:         '#";
        // line 2380
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo " #";
        echo "{{ followupID }}";
        echo "',
            pageTitleTemplate: '#";
        // line 2381
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo " #";
        echo "{{ followupID }}";
        echo "',
            navid:             'contacts-list',
        },
        controller: 'leadEditFollowupController',
        resolve: {

            leadEditFollowupServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // services
                    '";
        // line 2390
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/followups/services/singleFollowuprderService.js',
                    '";
        // line 2391
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/followups/services/singleReminderService.js',
                ]);
            }],

            deps: ['\$ocLazyLoad', 'leadEditFollowupServices', function(\$ocLazyLoad, leadEditFollowupServices) {
                return \$ocLazyLoad.load([
                    // controllers
                    '";
        // line 2398
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/followups/controllers/leadEditFollowup.js',
                ]);
            }],

            // update title, tricky, but works :) version for breadcrumbs
            followupID: function(\$stateParams) {
                return \$stateParams.followupID;
            },
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.followup.edit').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    ";
        // line 2417
        echo "    .state(\"contacts.details.notes\", {
        url: \"/notes\",
        templateUrl: '";
        // line 2419
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/notes/templates/notes.html',
        name: 'contacts.details.notes',
        data: {
            pageTitle:         '#";
        // line 2422
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            pageTitleTemplate: '#";
        // line 2423
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:             'contacts-list',
        },
        controller: 'leadNotesController',
        resolve: {

            leadNotesServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // services
                    '";
        // line 2432
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/notes/services/notesService.js',
                ]);
            }],

            deps: ['\$ocLazyLoad', 'leadNotesServices', function(\$ocLazyLoad, leadNotesServices) {
                return \$ocLazyLoad.load([
                    // controllers
                    '";
        // line 2439
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/notes/controllers/leadNotesController.js',
                ]);
            }],
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.followup.notes').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    ";
        // line 2453
        echo "    .state(\"contacts.details.emails\", {
        url: \"/emails\",
        templateUrl: '";
        // line 2455
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/emails/templates/emails.html',
        name: 'contacts.details.emails',
        data: {
            pageTitle:         '#";
        // line 2458
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            pageTitleTemplate: '#";
        // line 2459
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:             'contacts-list',
        },
        controller: 'leadEmailsController',
        resolve: {

            depsTinymce: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'tinymce.lib',
                    files: ['";
        // line 2469
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/tinymce/tinymce.min.js']
                });
            }],

            depsTinymceIntegration: ['\$ocLazyLoad', 'depsTinymce', function(\$ocLazyLoad, depsTinymce) {
                // required controllers
                return \$ocLazyLoad.load({
                    name: 'ui.tinymce',
                    files: ['";
        // line 2477
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/assets/plugins/angularjs/angular-ui-tinymce/src/tinymce.js']
                });
            }],
            leadEmailsServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // services
                    '";
        // line 2483
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/emails/services/emailService.js',
                ]);
            }],

            deps: ['\$ocLazyLoad', 'leadEmailsServices', function(\$ocLazyLoad, leadEmailsServices) {
                return \$ocLazyLoad.load([
                    // controller
                    '";
        // line 2490
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/emails/controllers/leadEmailsController.js',
                ]);
            }],
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.followup.emails').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    ";
        // line 2504
        echo "    .state(\"contacts.details.orders\", {
        url: \"/orders\",
        templateUrl: '";
        // line 2506
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/orders/templates/orders.html',
        name: 'contacts.details.orders',
        data: {
            pageTitle:         '#";
        // line 2509
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            pageTitleTemplate: '#";
        // line 2510
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:             'contacts-list',
        },
        controller: 'leadOrdersController',
        resolve: {

            leadOrdersServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // services
                    '";
        // line 2519
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/orders/services/orderService.js',
                ]);
            }],

            deps: ['\$ocLazyLoad', 'leadOrdersServices', function(\$ocLazyLoad, leadOrdersServices) {
                return \$ocLazyLoad.load([
                    // controllers
                    '";
        // line 2526
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/orders/controllers/leadOrdersController.js',
                ]);
            }],
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.followup.orders').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    ";
        // line 2540
        echo "    .state(\"contacts.details.quotes\", {
        url: \"/quotes\",
        templateUrl: '";
        // line 2542
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/quotes/templates/quotes.html',
        name: 'contacts.details.quotes',
        data: {
            pageTitle:         '#";
        // line 2545
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            pageTitleTemplate: '#";
        // line 2546
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:             'contacts-list',
        },
        controller: 'leadQuotesController',
        resolve: {

            // You can disable quotes in global settings
            isEnabled: ['\$q', '\$rootScope', '\$state', function(\$q, \$rootScope, \$state) {

                if( \$rootScope.settings.config.app.quotations_enable == true ) {
                    return true;
                }

                // Does not have permission
                \$rootScope.\$broadcast('AclNoAccess', {msg: 'Quotations integration is disabled'});
                return \$q.reject('Unauthorized');
            }],

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    '";
        // line 2566
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/quotes/controllers/leadQuotesController.js',
                ]);
            }],
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.followup.quotes').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],

        }
    })
    ";
        // line 2581
        echo "    .state(\"contacts.details.tickets\", {
        url: \"/tickets\",
        templateUrl: '";
        // line 2583
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/tickets/templates/tickets.html',
        name: 'contacts.details.tickets',
        data: {
            pageTitle:         '#";
        // line 2586
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            pageTitleTemplate: '#";
        // line 2587
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:             'contacts-list',
        },
        controller: 'leadTicketsController',
        resolve: {

            leadTicketsServices: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // services
                    '";
        // line 2596
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/tickets/services/ticketsService.js',
                ]);
            }],
        
            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    '";
        // line 2602
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/tickets/controllers/leadTicketsController.js',
                ]);
            }],
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.followup.tickets').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],

        }
    })
    ";
        // line 2617
        echo "    .state(\"contacts.details.files\", {
        url: \"/files\",
        templateUrl: '";
        // line 2619
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/files/templates/files.html',
        name: 'contacts.details.files',
        data: {
            pageTitle:         '#";
        // line 2622
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            pageTitleTemplate: '#";
        // line 2623
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:             'contacts-list',
        },
        controller: 'leadFilesController',
        resolve: {

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    // controllers
                    '";
        // line 2632
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/files/controllers/leadFilesController.js',
                ]);
            }],
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.followup.files').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })
    ";
        // line 2646
        echo "    .state(\"contacts.details.logs\", {
        url: \"/logs\",
        templateUrl: '";
        // line 2648
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/logs/templates/logs.html',
        name: 'contacts.details.logs',
        data: {
            pageTitle:         '#";
        // line 2651
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            pageTitleTemplate: '#";
        // line 2652
        echo "{{ leadMainDetailsData.id }}";
        echo " ";
        echo "{{ leadMainDetailsData.name }}";
        echo " / ";
        echo "{{ breadcrumbsSubtitle }}";
        echo "',
            navid:             'contacts-list',
        },
        controller: 'leadLogsController',
        resolve: {

            deps: ['\$ocLazyLoad', function(\$ocLazyLoad) {
                return \$ocLazyLoad.load([
                    '";
        // line 2660
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "templates", []), "rootDir", []), "html", null, true);
        echo "/app/contacts/details/logs/controllers/leadLogsController.js',
                ]);
            }],
        
            breadcrumbsSubtitle: ['\$translate', '\$q', function(\$translate, \$q) {
                var deferred = \$q.defer();
                \$translate('breadcrumbs.followup.logs').then(function (txt) {
                    deferred.resolve(txt);
                });
                return deferred.promise; 
            }],
        }
    })";
    }

    public function getTemplateName()
    {
        return "app/app.routes.js";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3638 => 2660,  3623 => 2652,  3615 => 2651,  3609 => 2648,  3605 => 2646,  3589 => 2632,  3573 => 2623,  3565 => 2622,  3559 => 2619,  3555 => 2617,  3538 => 2602,  3529 => 2596,  3513 => 2587,  3505 => 2586,  3499 => 2583,  3495 => 2581,  3478 => 2566,  3451 => 2546,  3443 => 2545,  3437 => 2542,  3433 => 2540,  3417 => 2526,  3407 => 2519,  3391 => 2510,  3383 => 2509,  3377 => 2506,  3373 => 2504,  3357 => 2490,  3347 => 2483,  3338 => 2477,  3327 => 2469,  3310 => 2459,  3302 => 2458,  3296 => 2455,  3292 => 2453,  3276 => 2439,  3266 => 2432,  3250 => 2423,  3242 => 2422,  3236 => 2419,  3232 => 2417,  3211 => 2398,  3201 => 2391,  3197 => 2390,  3179 => 2381,  3169 => 2380,  3163 => 2377,  3159 => 2375,  3147 => 2365,  3139 => 2360,  3129 => 2353,  3113 => 2344,  3105 => 2343,  3099 => 2340,  3095 => 2338,  3079 => 2324,  3075 => 2323,  3071 => 2322,  3067 => 2321,  3063 => 2320,  3059 => 2319,  3049 => 2312,  3036 => 2302,  3031 => 2300,  3022 => 2294,  3014 => 2289,  3009 => 2287,  2999 => 2280,  2994 => 2278,  2984 => 2271,  2979 => 2269,  2969 => 2262,  2957 => 2257,  2949 => 2256,  2943 => 2252,  2907 => 2218,  2892 => 2206,  2888 => 2204,  2879 => 2197,  2869 => 2190,  2865 => 2189,  2839 => 2166,  2835 => 2164,  2827 => 2158,  2817 => 2151,  2813 => 2150,  2789 => 2129,  2785 => 2127,  2777 => 2121,  2767 => 2114,  2763 => 2113,  2727 => 2080,  2723 => 2078,  2715 => 2072,  2705 => 2065,  2701 => 2064,  2665 => 2031,  2661 => 2029,  2653 => 2023,  2643 => 2016,  2639 => 2015,  2602 => 1981,  2598 => 1979,  2590 => 1973,  2565 => 1951,  2559 => 1948,  2555 => 1946,  2503 => 1895,  2492 => 1886,  2488 => 1885,  2474 => 1874,  2466 => 1869,  2433 => 1839,  2422 => 1831,  2412 => 1824,  2380 => 1797,  2374 => 1796,  2368 => 1793,  2364 => 1791,  2340 => 1769,  2329 => 1761,  2318 => 1753,  2293 => 1731,  2289 => 1730,  2283 => 1727,  2279 => 1725,  2263 => 1711,  2238 => 1689,  2234 => 1688,  2228 => 1685,  2224 => 1683,  2216 => 1677,  2200 => 1664,  2196 => 1662,  2187 => 1655,  2156 => 1627,  2152 => 1626,  2146 => 1623,  2142 => 1621,  2134 => 1615,  2106 => 1590,  2102 => 1588,  2094 => 1582,  2066 => 1557,  2062 => 1555,  2048 => 1542,  2038 => 1534,  1990 => 1489,  1986 => 1487,  1978 => 1481,  1974 => 1480,  1968 => 1477,  1964 => 1476,  1960 => 1475,  1956 => 1474,  1952 => 1473,  1948 => 1472,  1938 => 1465,  1934 => 1464,  1923 => 1456,  1916 => 1452,  1909 => 1448,  1902 => 1444,  1895 => 1440,  1884 => 1432,  1873 => 1423,  1858 => 1409,  1846 => 1399,  1815 => 1371,  1811 => 1370,  1805 => 1367,  1801 => 1365,  1793 => 1359,  1764 => 1333,  1760 => 1331,  1752 => 1325,  1724 => 1300,  1720 => 1298,  1712 => 1292,  1695 => 1278,  1691 => 1276,  1679 => 1266,  1675 => 1265,  1671 => 1264,  1667 => 1263,  1663 => 1262,  1659 => 1261,  1634 => 1239,  1627 => 1235,  1620 => 1231,  1613 => 1227,  1606 => 1223,  1595 => 1215,  1574 => 1197,  1564 => 1190,  1549 => 1178,  1545 => 1176,  1533 => 1166,  1520 => 1156,  1504 => 1143,  1500 => 1141,  1489 => 1132,  1481 => 1127,  1461 => 1110,  1450 => 1101,  1443 => 1096,  1437 => 1093,  1418 => 1077,  1414 => 1075,  1407 => 1070,  1399 => 1065,  1378 => 1047,  1374 => 1045,  1360 => 1032,  1348 => 1022,  1344 => 1021,  1335 => 1015,  1331 => 1014,  1304 => 990,  1300 => 988,  1292 => 982,  1283 => 976,  1279 => 975,  1275 => 974,  1249 => 951,  1245 => 949,  1237 => 943,  1227 => 936,  1201 => 913,  1197 => 911,  1178 => 893,  1167 => 884,  1139 => 859,  1135 => 857,  1127 => 851,  1099 => 826,  1095 => 824,  1087 => 818,  1069 => 803,  1065 => 801,  1054 => 792,  1039 => 780,  1017 => 761,  1011 => 758,  1007 => 756,  999 => 750,  988 => 742,  960 => 717,  956 => 715,  948 => 709,  919 => 683,  915 => 681,  907 => 675,  890 => 661,  886 => 659,  875 => 650,  848 => 626,  844 => 624,  836 => 618,  827 => 612,  801 => 589,  797 => 587,  789 => 581,  779 => 574,  753 => 551,  749 => 549,  738 => 540,  734 => 538,  723 => 529,  719 => 527,  708 => 518,  704 => 516,  693 => 507,  689 => 505,  681 => 499,  671 => 492,  667 => 491,  663 => 490,  659 => 489,  629 => 462,  625 => 460,  614 => 451,  610 => 449,  599 => 440,  595 => 438,  586 => 431,  576 => 424,  558 => 409,  554 => 407,  546 => 401,  536 => 394,  509 => 370,  505 => 368,  497 => 362,  487 => 355,  472 => 343,  468 => 341,  460 => 335,  450 => 328,  423 => 304,  419 => 302,  411 => 296,  401 => 289,  374 => 265,  370 => 263,  362 => 257,  352 => 250,  348 => 249,  344 => 248,  340 => 247,  311 => 221,  305 => 218,  301 => 216,  293 => 210,  283 => 203,  279 => 202,  252 => 178,  248 => 176,  240 => 170,  223 => 156,  218 => 153,  203 => 139,  191 => 129,  178 => 118,  167 => 109,  159 => 104,  151 => 99,  143 => 94,  135 => 89,  127 => 84,  119 => 79,  111 => 74,  103 => 69,  95 => 64,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "app/app.routes.js", "/var/www/html/modules/addons/mgCRM2/templates/ModulesGarden/app/app.routes.js");
    }
}
