{if file_exists("templates/$template/includes/menu/overwrites/top-nav.tpl")}
    {include file="{$template}/includes/menu/overwrites/top-nav.tpl"}
{else}
    <ul class="top-nav">
        {if $adminMasqueradingAsClient || $adminLoggedIn}
            <li>
                <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="" data-toggle="tooltip" data-placement="bottom" title="{if $adminMasqueradingAsClient}{$LANG.adminmasqueradingasclient} {$LANG.logoutandreturntoadminarea}{else}{$LANG.adminloggedin} {$LANG.returntoadminarea}{/if}">
                    <i class="lm lm-arrow-fat-right"></i>
                </a>
            </li>
        {/if}
        {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}
        {if isset($RSThemes.addonSettings.display_mode_switcher) && $RSThemes.addonSettings.display_mode_switcher == "1" && isset($RSThemes.addonSettings.display_mode_type) && $RSThemes.addonSettings.display_mode_type == "switcher" && $RSThemes.styles.name != "futuristic"}
            <li class="dark-mode-switcher">
                <label class="switch switch--text switch--dark-mode">
                    <input class="switch__checkbox" type="checkbox" name="display_mode_switcher" value="1" {if isset($display_mode_switcher) && is_array($display_mode_switcher) && $display_mode_switcher['dark'] == "true"}checked{/if} data-lagom-display-mode-switcher/>
                    <span class="switch__container">
                        <span class="switch__handle">
                            <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.81304 12C3.19407 12 0.25 9.3085 0.25 6C0.25 2.6915 3.19407 0 6.81304 0C7.84891 0 8.79836 0.2485 9.75 0.5895C8.13768 0.8415 4.62536 2.2225 4.62536 6C4.62536 9.727 7.86149 11.104 9.75 11.4105C8.92962 11.8335 7.84891 12 6.81304 12Z" fill="var(--brand-primary)"/>
                            </svg>
                        </span>
                    </span>
                </label> 
            </li>
        {/if}
    </ul>
{/if}