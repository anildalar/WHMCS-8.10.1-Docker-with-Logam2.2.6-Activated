{if file_exists("templates/$template/core/layouts/main-menu/{$RSThemes.layouts.name}/header.tpl")}
    {include file="{$template}/core/layouts/main-menu/{$RSThemes.layouts.name}/header.tpl"}
{/if}

{include file="$template/includes/common/layouts-vars.tpl"}  

{if file_exists("templates/$template/includes/common/layouts-vars-custom.tpl")}  
    {include file="$template/includes/common/layouts-vars-custom.tpl"}  
{/if}

{if !$skipAppNav}
    <div class="app-nav app-nav-{$leftNavStyle} {if $RSThemes.addonSettings.show_affixed_navigation == 'enabled'} sticky-navigation{/if}" {if $RSThemes.addonSettings.show_affixed_navigation == 'enabled'}data-site-navbar data-site-navbar-left{/if}>
        <div class="app-nav-header" id="header">
            <div class="container">
                <button class="app-nav-toggle navbar-toggle" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {include file="$template/includes/common/logo.tpl"}
                {include file="$template/includes/menu/top-nav.tpl"}
            </div>
        </div>
        {include file="$template/includes/menu/mainmenu.tpl"}
    </div>
{/if}

{include file="$template/includes/network-issues-notifications.tpl"}

<div class="app-main {if $isOnePageOrder}app-main-order{/if}">
    {if !$skipMainTop}
        {if $secondaryNavbar|@count > 0 && !$adminMasqueradingAsClient && !$adminLoggedIn}
            {$hiddenLg = true}
            {$hiddenXl = true}
            {foreach $secondaryNavbar as $item}
                {if !$item->getClass()|strstr:"hidden-lg"}
                    {$hiddenLg = false}
                {/if}
                {if !$item->getClass()|strstr:"hidden-xl"}
                    {$hiddenXl = false}
                {/if}
            {/foreach}
        {/if}
        <div class="main-top {if $secondaryNavbar|@count == 0 && !$adminMasqueradingAsClient && !$adminLoggedIn && (!isset($secondaryNavbarHtmlCache) || $secondaryNavbarHtmlCache|replace:" ":"" == "")}hidden-lg hidden-xl{else}{if $hiddenLg}hidden-lg {/if}{if $hiddenXl}hidden-xl {/if}{/if}">
            <div class="container">
                {include file="$template/includes/menu/top-nav.tpl"}
            </div>
        </div>
    {/if}
    {if $pageType != "website"}
        {include file="$template/includes/verifyemail.tpl"}
        {include file="$template/includes/validateuser.tpl"}
    {/if}
    {if (
            (isset($skipMainHeader) && !$skipMainHeader) || 
            !isset($skipMainHeader)
        ) && (
            (isset($isOnePageOrder) && !$isOnePageOrder) || 
            !isset($isOnePageOrder)
        ) && (
            $pageType != "website" || $activeDisplay != "CMS"
        ) || (
            $pageType == "website" && $activeDisplay == "CMS" && !$pageContent && $templatefile !="homepage" && !$skipMainHeader
        )
    }
        <div class="main-header">
            <div class="container">
                {if !$inShoppingCart}
                {include file="$template/includes/pageheader.tpl" title="$displayTitle" desc=$tagline showbreadcrumb=true}
                {else}
                {include file="$template/includes/pageheader.tpl" title="$displayTitle {if $product}$product{/if}" desc=$tagline showbreadcrumb=false}
                    {if $templatefile === 'configureproductdomain'}
                        <div class="main-header-label"><span class="main-header-label-desc">{$rslang->trans('order.product_selected')}: <span class="main-header-label-name">{$productinfo.group_name} - {$productinfo.name}</span><span></div>
                    {/if}
                {/if}
            </div>
        </div>
    {/if} 
     {if ((isset($skipAppNav) && !$skipAppNav) || !isset($skipAppNav)) && (isset($skipMainBody) || isset($isOnePageOrder) || ($pageType == "website" && $activeDisplay == "CMS")) && (isset($lagomClientAlerts->default) && $lagomClientAlerts->default)}
        <div class="custom-alerts">
            {$lagomClientAlerts->default}
        </div>
    {/if}
    {if (
            (isset($skipMainBody) && !$skipMainBody) || 
            !isset($skipMainBody)
        ) && (
            (isset($isOnePageOrder) && !$isOnePageOrder) || 
            !isset($isOnePageOrder)
        ) && (
            $pageType != "website" || $activeDisplay != "CMS"
        ) || (
            $pageType == "website" && $activeDisplay == "CMS" && !$pageContent && $templatefile !="homepage" && !$skipMainBody
        )
    }
        <div class="main-body{if $appMainBodyClasses} {$appMainBodyClasses}{/if}">
            <div class="container{if isset($skipMainBodyContainer) && $skipMainBodyContainer}-fluid without-padding{/if}">
                {if !$skipAppNav && $lagomClientAlerts->default}
                    <div class="custom-alerts">
                        {$lagomClientAlerts->default}
                    </div>
                {/if}
                {if !$inShoppingCart}<div class="main-grid">{/if}
                {* Main grid with sidebar *}
                {if !$skipMainSidebar}
                    <div class="main-sidebar {if $sidebarOnRight || $RSThemes['layouts']['name'] == 'left-nav-wide'} main-sidebar-right {/if}">
                        {if $RSThemes['addonSettings']['sticky_sidebars'] == "true"}<div class="sidebar-sticky" {if $RSThemes.addonSettings.show_affixed_navigation == 'enabled'}data-sidebar-sticky{/if}>{/if}
                            <div class="sidebar sidebar-primary">
                                {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar} 
                                {include file="$template/includes/sidebar/sidebar-custom.tpl"}
                            </div>
                            <div class="sidebar sidebar-secondary ">
                                {include file="$template/includes/sidebar/sidebar-secondary-custom.tpl"}
                                {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                                {include file="$template/includes/sidebar/sidebar-promo.tpl"}
                            </div>
                        {if $RSThemes['addonSettings']['sticky_sidebars'] == "true"}</div>{/if}
                    </div>
                    <div class="main-content {if $mainContentClasses}{$mainContentClasses}{/if} {if $RSThemes.addonSettings.show_status_icon == 'displayed' && in_array($templatefile, $iconsPages)}status-icons-enabled{/if}">
                {* Main grid without sidebar *}
                {elseif (!isset($skipMainBodyContainer) || !$skipMainBodyContainer) && !$inShoppingCart}
                    <div class="main-content {if $mainContentClasses}{$mainContentClasses}{/if} {if $RSThemes.addonSettings.show_status_icon == 'displayed' && in_array($templatefile, $iconsPages)}status-icons-enabled{/if}">
                {/if}
    {/if}
    {* {if $pageType == "website" && $activeDisplay == "CMS" && !$pageContent && $templatefile !="homepage"}
        {if file_exists("templates/$template/core/cms/includes/whmcs-page-layout.tpl")}
            {include file="{$template}/core/cms/includes/whmcs-page-layout.tpl"}
        {/if}
    {/if} *}