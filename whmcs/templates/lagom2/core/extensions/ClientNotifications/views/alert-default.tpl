
{if !$alertClosed}
    <div class="alert alert-{$alertStyle.style} alert-primary alert-lagom alert-static clientAlert {$alert.custom_class} {if $alertStyle.allowclose}alert-dismissible{/if}" id="clientAlert{$alert.id}" {if $alertStyle.days } data-close-days="{$alertStyle.days}"{/if}>
        <div class="container">
            {if $alertStyle.displayIcon}
                {if $alertContent.alertIcon}
                    <span class="alert-icon {$alertContent.alertIcon}"></span> 
                {elseif $alertContent.alertPredefinedIcon}
                    <div class="alert-predefined-icon-container">
                        {if file_exists("templates/$template/assets/svg-icon/{$alertContent.alertPredefinedIcon}")}
                            {include file="{$template}/assets/svg-icon/{$alertContent.alertPredefinedIcon}"}
                        {/if}
                    </div>
                {elseif $alertContent.alertPredefinedIllustration}
                    <div class="alert-predefined-illustration-container {if $alertContent.alertPredefinedIllustration|strstr:"products/"}promo-illustration{/if}">
                        {if file_exists("templates/$template/assets/svg-illustrations/{$alertContent.alertPredefinedIllustration}")}
                            {include file="{$template}/assets/svg-illustrations/{$alertContent.alertPredefinedIllustration}"}
                        {/if}
                    </div>
                {elseif $alertContent.alertImage}
                    <div class="alert-custom-image-container">
                        <img src="{$WEB_ROOT}/templates/{$template}/assets/img/page-manager/{$alertContent.alertImage}" alt="{$alertContent.alertImage}"/> 
                    </div>
                {else}
                    <span class="alert-icon ls ls-exclamation-circle"></span> 
                {/if}
            {/if}
            <div class="alert-content">
                <div class="alert-body">
                    {if is_array($alertContent.alertTitle)}
                        {assign var=firstTitle value=$alertContent.alertTitle|@reset}
                    {/if}
                    {if is_array($alertContent.alertTitle) && $alertContent.alertTitle.$language && $alertContent.alertTitle.$language != ""}
                        <h6 class="alert-title">
                            {$alertContent.alertTitle.$language|html_entity_decode}
                        </h6>
                    {elseif $firstTitle != ""}
                        <h6 class="alert-title">
                            {$firstTitle|html_entity_decode}
                        </h6>
                    {/if}
                
                    {if is_array($alertContent.alertContent) && $alertContent.alertContent.$language}
                        {$alertContent.alertContent.$language|html_entity_decode}
                    {else}
                        {if is_array($alertContent.alertContent)}
                            {assign var=firstContent value=$alertContent.alertContent|@reset}
                        {/if}
                        {$firstContent|html_entity_decode}
                    {/if}
                {if $alertStyle.buttonLocation != "bottom"}</div>{/if}
                    {if !empty($alertContent.alertButton)}
                        <div class="alert-actions">
                            {foreach $alertContent.alertButton as $button}
                                <a 
                                    href="{if $button.link_type == 'custom-url'}{$button.custom_url}{else}{$button.url}{/if}"
                                    class="btn {if $button.type == 'secondary'}btn-primary-faded{else}btn-{$button.type}{/if}{if $button.style != 'solid'} btn-{$button.style}{/if}{if $button.size != 'default'} btn-{$button.size}{/if} {if $button.link_type == 'close-element'}btn-dismiss-ca{/if} {$button.custom_classes}" {if $button.target_blank != '0'}target="_blank"{/if}
                                    {if $button.link_type == 'close-element'}data-dismiss="alert"{/if}
                                    >
                                    {if $button.show_icon && $button['font-icon'] !="" && $button['font-icon'] != "undefined"}
                                        <i class="btn-icon {$button['font-icon']}"></i>
                                    {/if}
                                    {if $button.text.$language}
                                        {$button.text.$language}
                                    {else}
                                        {if is_array($button.text)}
                                            {assign var=firstText value=$button.text|@reset}
                                        {/if}
                                        {$firstText}
                                    {/if}
                                </a>
                            {/foreach}
                        </div>
                    {/if}
                {if $alertStyle.buttonLocation == "bottom"}</div>{/if}
            </div>
        </div>
        {if $alertStyle.allowclose}
            <button class="btn btn-sm btn-icon" type="button" data-dismiss="alert">
                <span class="lm lm-close"></span>
            </button>
        {/if}
    </div>
{/if}