<div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            {$lang.settings.section.general.menu_cache_disable.title}
            {if isset($tooltips.settings.general.menu_cache_disable.title)}
                {if isset($tooltips.settings.general.menu_cache_disable.url) && $tooltips.settings.general.menu_cache_disable.url != ""}
                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$tooltips.settings.general.menu_cache_disable.url}' target='_blank'>Learn More</a>"}
                {else}
                    {assign var="popoverFooter" value=false}
                {/if}
                {include
                file="adminarea/includes/helpers/popover.tpl"
                popoverClasses="notification__popover"
                popoverBody="{$tooltips.settings.general.menu_cache_disable.title}"
                popoverFooter="{$popoverFooter}"
                }
            {/if}
        </h6>
        <label>
            <div class="switch" data-toggle="lu-collapse" data-target="#menu_cache_disabled" aria-expanded="true">
                <input type="hidden" name="settings[menu_cache_disabled]" value="disabled"/>
                <input class="switch__checkbox"
                       name="settings[menu_cache_disabled]" value="1"
                       type="checkbox" {if $settings['menu_cache_disabled'] == "1" } checked="checked" {/if}>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div><div class="collapse {if $settings['menu_cache_disabled'] == "1"} show {/if}" id="menu_cache_disabled">
        <div class="form-group m-b-0x p-3x">
            <label class="form-label text-default">
                {$lang.settings.section.general.menu_cache_disable.label}
            </label>
            <select class="form-control selectized opacity-1" name="settings[menu_cache_disabled_menu]" tabindex="-1">
                <option value="all" {if $settings['menu_cache_disabled_menu'] != 'secondary' && $settings['menu_cache_disabled_menu'] != 'primary'} selected {/if}>{$lang.settings.section.general.menu_cache_disable.all}</option>
                <option value="primary" {if $settings['menu_cache_disabled_menu'] == 'primary'} selected {/if}>{$lang.settings.section.general.menu_cache_disable.primary}</option>
                <option value="secondary" {if $settings['menu_cache_disabled_menu'] == 'secondary'} selected {/if}>{$lang.settings.section.general.menu_cache_disable.secondary}</option>
            </select>
        </div>
    </div>
</div>