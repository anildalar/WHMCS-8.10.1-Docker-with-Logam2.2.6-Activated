<div class="custom-alerts">
    {foreach $clientNotifications as $alert}
        {if $alert.style->type != 'modal' && !$alert.isClosed}
            <div class="alert alert-{$alert.style->style} alert-primary alert-static clientAlert {$alert.custom_class}" id="clientAlert{$alert.id}" {if $alert.style->days } data-close-days="{$alert.style->days}"{/if}>
                {if $alert.style->allowclose}
                    <div class="alert-close">
                        <button class="btn btn-sm btn-icon" type="button" data-dismiss="alert">
                            <span class="lm lm-close"></span>
                        </button>
                    </div>
                {/if}
                <div class="alert-content">
                    {if $alertStyle.displayIcon}
                        {if $alertContent.alertIcon}
                            <span class="alert-icon {$alertContent.alertIcon}"></span> 
                        {elseif $alertContent.alertPredefinedIcon}
                            {if file_exists("templates/$template/assets/svg-icon/{$alertContent.alertPredefinedIcon}")}
                                {include file="{$template}/assets/svg-icon/{$alertContent.alertPredefinedIcon}"}
                            {/if}
                        {elseif $alertContent.alertPredefinedIllustration}
                            {if file_exists("templates/$template/assets/svg-illustrations/{$alertContent.alertPredefinedIllustration}")}
                                {include file="{$template}/assets/svg-illustrations/{$alertContent.alertPredefinedIllustration}"}
                            {/if}
                        {elseif $alertContent.alertImage}
                            <img src="{$WEB_ROOT}/templates/{$template}/assets/img/page-manager/{$alertContent.alertImage}" alt="{$alertContent.alertImage}"/> 
                        {else}
                            <span class="alert-icon ls ls-exclamation-circle"></span> 
                        {/if}
                    {/if}
                    <h6 class="alert-title">
                        {if is_array($alertContent.alertTitle) && $alertContent.alertTitle.$language}
                            {$alertContent.alertTitle.$language|html_entity_decode}
                        {else}
                            {if is_array($alertContent.alertTitle)}
                                {assign var=firstTitle value=$alertContent.alertTitle|@reset}
                            {else}
                                {assign var=firstTitle value=""}
                            {/if}
                            {$firstTitle|html_entity_decode}
                        {/if}
                    </h6>
                    <div class="alert-body">
                        {if is_array($alertContent.alertContent) && $alertContent.alertContent.$language}
                            {$alertContent.alertContent.$language|html_entity_decode}
                        {else}
                            {if is_array($alertContent.alertContent)}
                                {assign var=firstContent value=$alertContent.alertContent|@reset}
                            {/if}  
                            {$firstContent|html_entity_decode}
                        {/if}
                    </div>
                    {if !empty($alert.content->alertButton)}
                        <div class="alert-buttons">
                            {foreach $alert.content->alertButton as $button}
                                <a 
                                    href="{if $button->link_type == 'custom-url'}{$button->custom_url}{else}{$button->url}{/if}"
                                    class="btn {if $button->type == 'secondary'}btn-primary-faded{else}btn-{$button->type}{/if}{if $button->style != 'solid'} btn-{$button->style}{/if}{if $button->size != 'default'} btn-{$button->size}{/if} {if $button.link_type == 'close-element'}btn-dismiss-ca{/if} {$button->custom_classes}" {if $button->target_blank != '0'}target="_blank"{/if}
                                    {if $button.link_type == 'close-element'}data-dismiss="alert"{/if}
                                    >
                                    {if $button.show_icon && $button['font-icon'] !="" && $button['font-icon'] != "undefined"}
                                        <i class="btn-icon {$button['font-icon']}"></i>
                                    {/if}
                                    {if $button.text.$language}
                                        {$button.text.$language}
                                    {else}
                                        {assign var=firstText value=$button.text|@reset}
                                        {$firstText}
                                    {/if}
                                </a>
                            {/foreach}
                        </div>
                    {/if}
                </div>
            </div>
        {/if}
    {/foreach}
</div>