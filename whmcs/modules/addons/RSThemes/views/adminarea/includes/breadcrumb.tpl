<div class="app-main__top">
    <div class="container">
        <div class="top">
            {* Styles *}
            {if isset($type) && $type === "style_manage"}
                <div class="top__toolbar">
                    {include file="adminarea/includes/breadcrumb/button-back.tpl" link=$helper->url('Template@styles',['templateName'=>$template->getMainName()])}
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="{$helper->url('Template@styles',['templateName'=>$template->getMainName()])}">
                                        {$lang.breadcrumb.styles}
                                    </a>
                                </li>
                                <li class="breadcrumb__item">
                                    <span class="breadcrumb__item-text">
                                        {if isset($style) && method_exists($style,"getName")}{$style->getName()}{else}{$smarty.get.styleName}{/if}
                                    </span>
                                    {if isset($style) && method_exists($style,"isActiveFromConfig") && $style->isActiveFromConfig()}
                                        <span class="label label--success label--outline m-l-2x">{$lang.general.active}</span>
                                    {/if}
                                </li>
                            </ul>
                        </h1>
                    </div>
                </div>

                <div class="top__toolbar">
                    {if isset($style) && method_exists($style,"isActiveFromConfig")}
                        {if !$style->isActiveFromConfig()}
                            <a class="btn btn--primary" href="{$helper->url('Template@setStyle',['templateName'=>$template->getMainName(), 'styleName' => $style->getMainName(), 'manage' => true])}">
                                <span class="btn__text">Activate</span>
                            </a>
                        {/if}
                    {/if}
                </div>

            {* Pages *}
            {elseif isset($type) && $type === "page"}
                <div class="top__toolbar">
                    {include file="adminarea/includes/breadcrumb/button-back.tpl" link=$helper->url('Template@pages',['templateName'=>$template->getMainName()])}
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="{$helper->url('Template@pages',['templateName'=>$template->getMainName()])}">
                                        {$lang.breadcrumb.pages}
                                    </a>
                                </li>
                                <li class="breadcrumb__item">
                                    <span class="breadcrumb__item-text">
                                        {$page->getName()}
                                    </span>
                                </li>
                            </ul>
                        </h1>
                    </div>
                </div>

            {* Page Manage *}
            {elseif isset($type) && $type === "page_manage"}
                <div class="top__toolbar">
                    {include file="adminarea/includes/breadcrumb/button-back.tpl" link=$helper->url('Template@pages',['templateName'=>$template->getMainName()])}
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="{$helper->url('Template@pages',['templateName'=>$template->getMainName()])}">
                                        {$lang.breadcrumb.pages}
                                    </a>
                                </li>
                                {if isset($settings['group'])}
                                    <li class="breadcrumb__item">
                                        <a class="breadcrumb__item-text" href="{$helper->url('Template@pages',['templateName'=>$template->getMainName(), 'tab' => $settings['group']])}">
                                            {$settings['group']}
                                        </a>
                                    </li>
                                {/if}
                                {if isset($settings['displayName'])}
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            {$settings['displayName']}
                                        </span>
                                    </li>
                                {/if}
                            </ul>
                        </h1>
                    </div>
                </div>
            {* Menu - Menus *}
            {elseif isset($type) && $type === 'menu'}
                <div class="top__toolbar">
                    {include file="adminarea/includes/breadcrumb/button-back.tpl" link=$helper->url('Template@menu',['templateName'=>$template->getMainName(), 'menuTab' => $smarty.get.menuTab])}
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="{$helper->url('Template@menu',['templateName'=>$template->getMainName()])}">
                                        {$lang.breadcrumb.menu}
                                    </a>
                                </li>
                                {if isset($menu)}
                                    <li class="breadcrumb__item">
                                        <a class="breadcrumb__item-text" href="{$helper->url('Template@menu',['templateName'=>$template->getMainName(), 'menuTab' => $smarty.get.menuTab])}">
                                            {$menu->location}
                                        </a>
                                    </li>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            {$menu->name}
                                        </span>
                                    </li>
                                {else}
                                    <li class="breadcrumb__item">
                                        <a class="breadcrumb__item-text" href="{$helper->url('Template@menu',['templateName'=>$template->getMainName(), 'menuTab' => $smarty.get.menuTab])}">
                                            {$smarty.get.menuLocation}
                                        </a>
                                    </li>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            {$lang.breadcrumb.new_menu}
                                        </span>
                                    </li>
                                {/if}
                            </ul>
                        </h1>
                    </div>
                </div>

            {* Settings - Display *}
            {elseif isset($type) && $type === 'display'}
                <div class="top__toolbar">
                    {include file="adminarea/includes/breadcrumb/button-back.tpl" link=$helper->url('Template@settings',['templateName'=>$template->getMainName()])}
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="{$helper->url('Template@settings',['templateName'=>$template->getMainName()])}">
                                        {$lang.breadcrumb.display_rules}
                                    </a>
                                </li>
                                {if isset($display)}
                                    <li class="breadcrumb__item"><span class="breadcrumb__item-text">{$display->name}</span></li>
                                {/if}
                            </ul>
                        </h1>
                    </div>
                </div>

            {* Menu - Sidebars *}
            {elseif isset($type) && $type === 'sidebar'}
                <div class="top__toolbar">
                    {include file="adminarea/includes/breadcrumb/button-back.tpl" link=$helper->url('Template@menu',['templateName'=>$template->getMainName(), 'menuTab' => 'sidebar'])}
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="{$helper->url('Template@menu',['templateName'=>$template->getMainName(), 'menuTab' => 'main'])}">
                                        {$lang.breadcrumb.menu}
                                    </a>
                                </li>
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="{$helper->url('Template@menu',['templateName'=>$template->getMainName(), 'menuTab' => 'sidebar'])}">
                                        {$lang.breadcrumb.sidebar}
                                    </a>
                                </li>
                                {if isset($sidebar)}
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            {$sidebar->name}
                                        </span>
                                    </li>
                                {else}
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            {$lang.breadcrumb.new_sidebar}
                                        </span>
                                    </li>
                                {/if}
                            </ul>
                        </h1>
                    </div>
                </div>
            {* Others *}
            {else}
                <div class="top__toolbar">
                    {if $smarty.get.controller == 'Template' && $smarty.get.action == 'info'}
                        {include file="adminarea/includes/breadcrumb/button-back.tpl" link=$helper->url('Templates@index',['templateName' => $template->getMainName()])}
                    {else}
                        {include file="adminarea/includes/breadcrumb/button-back.tpl" link=$helper->url('Template@info',['templateName' => $template->getMainName()])}
                    {/if}
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            {$template->getName()}
                        </h1>
                        {if $template->isActive()}
                            <span class="label label--success label--outline m-l-2x">{$lang.general.active}</span>
                            {*{if $template->getMainName() == 'lagom2' && \RSThemes\Helpers\ContentChecker::checkCmsInstalled()}
                                {include file="adminarea/cms/cms_breadcrumb.tpl"}
                            {/if}*}
                            {if \RSThemes\Helpers\ContentChecker::checkCmsInstalled()}
                            <div class="has-dropdown dropdown-style-display">
                                <a class="" href="" data-toggle="lu-dropdown" data-placement="bottom right" data-change-display-button>
                                    <span class="label label--info label--outline m-l-1x"><span class="text-faded">Display: </span> &nbsp;{$template->getActiveDisplay()->name}&nbsp;<i class="text-primary ls ls-caret"></i></span>
                                </a>
                                <div class="dropdown dropdown-styles" style="display: none" data-dropdown-menu data-url="">
                                    <div class="dropdown__arrow" data-arrow></div>

                                    <div class="dropdown__menu">
                                        <ul class="nav">
                                            {foreach $template->getDisplays() as $display}
                                                {if $template->getMainName() != 'lagom2' || !\RSThemes\Helpers\ContentChecker::checkCmsInstalled()}
                                                    {if $display->name == "CMS"}
                                                        {continue}
                                                    {/if}
                                                {/if}
                                                <li class="nav__item {if $display->active}is-active{/if}">
                                                    <a class="nav__link" {if !$display->active}data-change-display-rule{/if} data-ajax-url="{$helper->url('Display@setActiveDisplay',['templateName' => $template->getMainName(), 'displayId' => $display->id, 'breadcrumb' => true, 'tab' => $smarty.get.action])}">
                                                        <span class="nav__link-text">{$display->name}</span>
                                                        {if $display->active}<span class="nav__link-icon ls ls-check"></span>{/if}
                                                    </a>
                                                </li>
                                            {/foreach}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {/if}
                        {/if}
                    </div>
                </div>
                {* <div class="top__notification">
                    <button type="button" class="btn btn--default btn--outline" data-app-sidebar-slide-open><i class="lm lm-bell"></i></button>
                </div> *}
                <div class="top__toolbar">
                    <div class="has-dropdown">
                        <a class="btn btn--default btn--outline" href="" data-toggle="lu-dropdown" data-placement="bottom right">
                            <span class="btn__text">{$lang.general.actions}</span>
                            <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-down" data-arrow-target></span>
                            <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-up" data-arrow-target></span>
                        </a>
                        <div class="dropdown" data-dropdown-menu>
                            <div class="dropdown__arrow" data-arrow></div>
                            <div class="dropdown__menu">
                                <ul class="nav">
                                    {if $template->license()->isActive()}
                                        <li class="nav__item">
                                            <a class="nav__link" href="{$template->getSysTplLink()}" target="_blank">
                                                <span class="nav__link-icon lm lm-search"></span>
                                                <span class="nav__link-text">{$lang.general.live_preview}</span>
                                            </a>
                                        </li>
                                    {/if}
                                    <li class="nav__item">
                                        <a class="nav__link" href="https://rsstudio.net/my-account/submitticket.php?step=2&deptid=2" target="_blank">
                                            <span class="nav__link-icon lm lm-denied"></span>
                                            <span class="nav__link-text">{$lang.breadcrumb.report_bug}</span>
                                        </a>
                                    </li>
                                    <li class="nav__divider"></li>
                                    <li class="nav__item">
                                        <a class="nav__link" href="https://lagom.rsstudio.net/docs" target="_blank">
                                            <span class="nav__link-icon lm lm-book"></span>
                                            <span class="nav__link-text">{$lang.breadcrumb.docs}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {if $template->license()->isActive()}
                        {if !$template->isActive()}
                            <a class="btn btn--primary" href="{$helper->url('Template@setActive',['templateName'=>$template->getMainName()])}">
                                <span class="btn__text">{$lang.breadcrumb.activate_theme}</span>
                            </a>
                        {/if}
                    {/if}
                </div>
            {/if}
        </div>
    </div>
</div>
{*block name="template-sidebar"}
        <div class="app-main__sidebar app-main__sidebar--fixed app-main__sidebar--notifications app-main__sidebar--slide" data-app-sidebar-slide>
            <div class="section">
                <div class="section__header top">
                    <span class="top__icon"><i class="lm lm-bell"></i></span>
                    <h3 class="section__title top__title h6">Notifications</h3>
                    <div class="section__actions top__actions">
                        <div class="mark-all tooltip-toggle" data-toggle="lu-tooltip" data-title="Mark all as read">
                            <i class="lm lm-inbox"></i>
                        </div>
                        <button class="close btn btn--xs btn--icon btn--link" data-app-sidebar-slide-close><i class="btn__icon lm lm-close"></i></button>
                    </div>
                </div>    
                <div class="section__body">
                    <div class="list-group list-group--notification">
                        {* no data notifcation *} {*
                            <div class="list-group__item list-group__item--no-data">
                                <div class="list-group__item-icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5 23.625C15.9375 24.375 15.625 25.25 15.625 26.25C15.625 28.6875 17.5625 30.625 20 30.625C22.4375 30.625 24.375 28.6875 24.375 26.25C24.375 25.25 24.0625 24.375 23.5 23.625C22.375 23.5 21.1875 23.4375 20 23.4375C18.8125 23.4375 17.625 23.5 16.5 23.625Z" fill="#1062FE" stroke="#1062FE" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M24.3125 4.1875C23.9375 2.1875 22.125 0.625 20 0.625C17.875 0.625 16.0625 2.1875 15.6875 4.1875M35.625 28.1875C33.625 25.8125 32.5 23.25 32.5 20.5V16.25C32.5 9.375 26.875 3.75 20 3.75C13.125 3.75 7.5 9.375 7.5 16.25V20.5C7.5 23.25 6.375 25.8125 4.375 28.1875M4.375 28.1875C3.5625 29.125 3.125 30.1875 3.125 31.25C3.125 33.5 5 35.5 8.0625 37C11.125 38.4375 15.3125 39.375 20 39.375C24.6875 39.375 28.875 38.4375 31.9375 37C35 35.5 36.875 33.5 36.875 31.25C36.875 29 35 27 31.9375 25.5C28.875 24.0625 24.6875 23.125 20 23.125C15.3125 23.125 11.125 24.0625 8.0625 25.5C6.5 26.25 5.25 27.1875 4.375 28.1875Z" stroke="#17191C" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="list-group__item-title p-d m-b-0x">No notification found</div>
                                <div class="list-group__item-desc p-sm m-b-0x">We’ll let you know when we get messages for you.</div>
                            </div>
                        {* end no data notification *}
                        {* standard notification *} {*
                            <div class="list-group__item ">
                                <div class="list-group__item-title p-d"><i class="ls ls-exclamation-circle text-primary"></i>New Menu Version Available!</div>
                                <div class="list-group__item-desc p-sm">Addon has detected theme version change. Install Learn more about implemented changes in our changelog.</div>
                                <div class="list-group__item-action"><button class="btn btn--secondary btn--notification">Import</button></div>
                            </div>
                            <div class="list-group__item ">
                                <div class="list-group__item-title p-d"><i class="ls ls-exclamation-circle text-primary"></i>Install Configuration for Lagom Integration</div>
                                <div class="list-group__item-desc p-sm">Addon has detected installation of integration files. has been prepared during integration service, so please click "Update" button to install this configuration.</div>
                                <div class="list-group__item-action"><button class="btn btn--secondary btn--notification">Update</button></div>
                            </div>
                            <div class="list-group__item ">
                                <div class="list-group__item-title p-d"><i class="ls ls-text-cloud text-danger"></i>New Version Available</div>
                                <div class="list-group__item-desc p-sm">A new version of Lagom WHMCS Client Theme is available to download. Log in to the RS Studio client portal and download the latest version.</div>
                                <div class="list-group__item-action"><button class="btn btn--secondary btn--notification">Download Now</button></div>
                            </div>
                            <div class="list-group__item ">
                                <div class="list-group__item-title p-d"><i class="ls ls ls-check text-success"></i>Success Message</div>
                                <div class="list-group__item-desc p-sm">We’ll let you know when we get messages for you.</div>
                                <div class="list-group__item-action">
                                    <button class="btn btn--secondary btn--notification">Learn More</button>
                                    <button class="btn btn--notification btn--default btn--outline">Dismiss</button>
                                    <span class="date p-xs">2023-07-20 16:23:00</span>
                                </div>
                            </div>
                            <div class="list-group__item ">
                                <div class="list-group__item-title p-d"><i class="ls ls-text-cloud text-warning"></i>Success Message</div>
                                <div class="list-group__item-desc p-sm">We’ll let you know when we get messages for you.</div>
                                <div class="list-group__item-action">
                                    <button class="btn btn--notification btn--default btn--outline">Dismiss</button>
                                    <span class="date p-xs">2023-07-20 16:23:00</span>
                                </div>
                            </div>
                            <div class="list-group__item ">
                                <div class="list-group__item-title p-d"><i class="ls ls-text-cloud text-warning"></i>Success Message</div>
                                <div class="list-group__item-desc p-sm">We’ll let you know when we get messages for you.</div>
                                <div class="list-group__item-action">
                                    <button class="btn btn--notification btn--default btn--outline">Dismiss</button>
                                    <span class="date p-xs">2023-07-20 16:23:00</span>
                                </div>
                            </div>
                            <div class="list-group__item ">
                                <div class="list-group__item-title p-d"><i class="ls ls-text-cloud text-warning"></i>Success Message</div>
                                <div class="list-group__item-desc p-sm">We’ll let you know when we get messages for you.</div>
                                <div class="list-group__item-action">
                                    <button class="btn btn--notification btn--default btn--outline">Dismiss</button>
                                    <span class="date p-xs">2023-07-20 16:23:00</span>
                                </div>
                            </div>
                        {* end of standard notification *} {*
                    </div>
                </div>
            </div>
        </div>
{/block*}
