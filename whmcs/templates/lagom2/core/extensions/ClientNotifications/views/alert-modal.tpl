{if !$alertClosed}
    <div class="modal fade modal-{$alertStyle.style} modal-{$alertStyle.modalSize} clientAlertModal {if $alertStyle.modalDisplayOn == "load"} clientAlertModalOnLoad{else} clientAlertModalOnExit{/if} {$alert.custom_class} {if !$alertStyle.allowclose}prevent-close{/if}" id="clientAlert{$alert.id}" {if $alertStyle.onLoadDelay && $alertStyle.modalDisplayOn == "load"} data-onload-delay="{$alertStyle.onLoadDelay}"{elseif $alertStyle.modalDisplayOn == "load"} data-onload-delay="0" {/if} {if !$alertStyle.allowclose}data-backdrop="static" data-keyboard="false"{/if} {if $alertStyle.days } data-close-days="{$alertStyle.days}"{/if}>
        <div class="modal-dialog">
            <div class="modal-content">
                    {if is_array($alertContent.alertTitle)}
                        {assign var=firstTitle value=$alertContent.alertTitle|@reset}
                    {else}
                        {assign var=firstTitle value=""}
                    {/if}
                    {if !is_array($alertContent.alertTitle) || (!$alertContent.alertTitle.$language && $firstTitle =="") || ($alertContent.alertTitle.$language == "" && $firstTitle =="")}
                        {if $alertStyle.allowclose}
                            <button type="button" class="close close-oncontent" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
                        {/if}
                    {else}
                        <div class="modal-header {if !$alertStyle.displayIcon}modal-header-no-icon{/if}">
                            {if $alertStyle.allowclose}
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
                            {/if}
                            <h3 class="modal-title {if $alertContent.alertIcon}modal-title-icon-replaced{/if}">
                                {if $alertContent.alertIcon}
                                    <span class="alert-icon {$alertContent.alertIcon}"></span> 
                                {/if}
                                {if is_array($alertContent.alertTitle) && $alertContent.alertTitle.$language}
                                    {$alertContent.alertTitle.$language|html_entity_decode}
                                {else}
                                    {$firstTitle|html_entity_decode}
                                {/if}
                            </h3>
                        </div>
                    {/if}
                    <div class="modal-graphic {if ($alertContent.alertPredefinedIcon || $alert.custom_class|strstr:"modal-custom-icon") && !$alertContent.alertPredefinedIllustration}{if $alertStyle.modalButtonLocation == "left"}justify-content-start{elseif $alertStyle.modalButtonLocation == "center"}justify-content-center {elseif $alertStyle.modalButtonLocation == "right"}justify-content-end{/if}{/if}">
                        {if $alertContent.alertPredefinedIcon}
                            {if file_exists("templates/$template/assets/svg-icon/{$alertContent.alertPredefinedIcon}")}
                                <div class="alert-predefined-icon-container">
                                    {include file="{$template}/assets/svg-icon/{$alertContent.alertPredefinedIcon}"}
                                </div>
                            {/if}
                        {elseif $alertContent.alertPredefinedIllustration}
                            {if file_exists("templates/$template/assets/svg-illustrations/{$alertContent.alertPredefinedIllustration}")}
                                {if $alertContent.alertPredefinedIllustration|strstr:"products/"}
                                    <div class="modal-predefined-background">
                                        {if file_exists("templates/$template/assets/svg-illustrations/{$alertContent.alertPredefinedIllustration}")}
                                            {include file="{$template}/assets/svg-illustrations/site/banner-shape.tpl"}
                                        {/if}
                                    </div>
                                {/if}
                                <div class="alert-predefined-illustration-container {if $alertContent.alertPredefinedIllustration|strstr:"products/"}promo-illustration{/if}">
                                    {include file="{$template}/assets/svg-illustrations/{$alertContent.alertPredefinedIllustration}"}
                                </div>
                            {/if}
                        {elseif $alertContent.alertImage}
                            <div class="alert-custom-graphic-container">
                                <img src="{$WEB_ROOT}/templates/{$template}/assets/img/page-manager/{$alertContent.alertImage}" alt="{$alertContent.alertImage}"/> 
                            </div>
                        
                        {/if}
                    </div>
                <div class="modal-body">


                    {if is_array($alertContent.alertContent) && $alertContent.alertContent.$language}
                        {$alertContent.alertContent.$language|html_entity_decode}
                    {else}
                        {if is_array($alertContent.alertContent)}
                            {assign var=firstContent value=$alertContent.alertContent|@reset}
                        {/if}  
                        {$firstContent|html_entity_decode}
                    {/if}
                </div>
                {if !empty($alertContent.alertButton) || ($alertStyle.allowclose && $alertStyle.days > '0')}
                    <div class="modal-footer d-flex align-center {if $alertStyle.modalButtonLocation == "left"}justify-content-start{elseif $alertStyle.modalButtonLocation == "center"}justify-content-center {elseif $alertStyle.modalButtonLocation == "right"}justify-content-end{/if} {if $alertStyle.allowclose && $alertStyle.days > '0'} footer-has-checkbox {/if}">
                        {if !empty($alertContent.alertButton)}
                            <div class="alert-buttons">
                                {foreach $alertContent.alertButton as $button}
                                    <a 
                                        href="{if $button.link_type == 'custom-url'}{$button.custom_url}{else}{$button.url}{/if}"
                                        class="btn {if $button.type == 'secondary'}btn-primary-faded{else}btn-{$button.type}{/if}{if $button.style != 'solid'} btn-{$button.style}{/if}{if $button.size != 'default'} btn-{$button.size}{/if} {if $button.link_type == 'close-element'}btn-dismiss-ca{/if} {$button.custom_classes}" {if $button.target_blank != '0'}target="_blank"{/if}
                                        {if $button.link_type == 'close-element'}data-dismiss="modal"{/if}
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
                        {if $alertStyle.allowclose && $alertStyle.days > '0'}
                            <div class="checkbox m-t-1x m-b-1x m-l-a">
                                <label>
                                    <input id="checkClose" class="icheck-control" type="checkbox" />
                                    <span>{$rsClientNotificationLang->trans('modal.do_not_show_again')}</span>
                                </label>
                            </div>
                        {/if}
                    </div>
                {/if}
            </div>
        </div>
    </div>
{/if}