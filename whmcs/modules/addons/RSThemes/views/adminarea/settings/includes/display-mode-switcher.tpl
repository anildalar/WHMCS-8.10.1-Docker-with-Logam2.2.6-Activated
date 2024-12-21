<div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            {$lang.settings.section.general.dark_mode.title}
            {if isset($tooltips.settings.general.dark_mode.title)}
                {if isset($tooltips.settings.general.dark_mode.url) && $tooltips.settings.general.dark_mode.url != ""}
                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$tooltips.settings.general.dark_mode.url}' target='_blank'>Learn More</a>"}
                {else}
                    {assign var="popoverFooter" value=false}
                {/if}
                {include 
                    file="adminarea/includes/helpers/popover.tpl" 
                    popoverClasses="notification__popover"
                    popoverBody="{$tooltips.settings.general.dark_mode.title}"
                    popoverFooter="{$popoverFooter}"
                }
            {/if}
        </h6>
        <label>
            <div class="switch collapsed" data-toggle="lu-collapse" data-target="#mode-switcher" aria-expanded="true">
                <input type="hidden" name="settings[display_mode_switcher]" value="0"/>
                <input class="switch__checkbox mode-display"
                        name="settings[display_mode_switcher]" value="1"
                        type="checkbox" {if $settings['display_mode_switcher']} checked {/if}>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div>
    <div class="collapse {if $settings['display_mode_switcher']} show {/if}" id="mode-switcher">
        <div class="theme-selectors d-flex">
            <div class="col-sm-6 p-0x">
                <div class="form-group m-b-0x p-3x">
                    <label class="form-text ">{$lang.settings.section.general.dark_mode.label}</label>
                    <select class="form-control" name="settings[display_mode_type]" data-mode-switcher>
                        <option value="switcher">Switcher (Light/Dark)</option>
                        <option value="force" {if $settings['display_mode_type'] == "force"}selected{/if}>Force Dark Mode</option>
                    </select>
                    <span class="form-feedback form-feedback-md form-feedback-danger form-feedback--icon">{$lang.settings.section.general.dark_mode.info}</span>
                </div>
            </div>
        </div>
    </div>
</div> 
