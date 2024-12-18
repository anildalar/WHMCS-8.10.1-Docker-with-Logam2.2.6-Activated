{section name=item loop=$customfields}
    {if $customfields[item].public}
        <div class="form-customfields m-b-2x"
             {if $customfields[item].required}data-rule-required="required"{/if}
             data-msg-required="{$LANG2.validation_field_required|escape}"
             data-field="{$customfields[item].id|escape}"
             data-locked="{! empty($customfields[item].value) && $customfields[item].locked}"
             data-dependent-children="{$customfields[item].children|escape}"
             data-depends-on-option="{$customfields[item].depends_on_option_id|escape}"
             {if $customfields[item].depends_on_option_id && ! $customfields[item].parent_selected}style="display: none"{/if}>
            <div class="row">
                <div class="form-group col-sm-12 m-b-0x">
                    <label for="cf_{$customfields[item].id|escape}">
                        {$customfields[item].name|escape}
                        {if isset($customfields[item].value) && ($customfields[item].type == 6 || $customfields[item].encrypted)}
                            &nbsp; <span class="light">({$LANG2.only_to_change})</span>
                        {/if}
                    </label>
                    {if $customfields[item].type == 0}
                        <!-- Boolean -->
                        <div class="radio">
                            <label>
                                <input class="icheck-control" type="radio" name="cf_{$customfields[item].id|escape}" value="1"
                                    {if isset($customfields[item].value) && $customfields[item].value == 1}checked="checked"{/if} />{$LANG2.yes}
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input class="icheck-control" type="radio" name="cf_{$customfields[item].id|escape}" value="0"
                                    {if isset($customfields[item].value) && $customfields[item].value == 0}checked="checked"{/if} />{$LANG2.no}
                            </label>
                        </div>

                    {elseif $customfields[item].type == 1}
                        <!-- Checkbox -->
                        <input name='cf_{$customfields[item].id|escape}' class='hiddenInput' value='0' type='hidden' />
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="checkbox icheck-control" name="cf_{$customfields[item].id|escape}" value='1' checked="checked"
                                {if isset($customfields[item].value) && $customfields[item].value == 1}checked="checked"{/if} />
                            </label>
                        </div>
                    {elseif $customfields[item].type == 2}
                        <!-- Checklist -->
                        {section name=i loop=$customfields[item].options}
                            <div class="checkbox">
                                <label>
                                    <input class="checkbox icheck-control" type="checkbox" name="cf_{$customfields[item].id|escape}[]"
                                        value='{$customfields[item].options[i].id|escape}'
                                        {if isset($customfields[item].value) && in_array($customfields[item].options[i].id, $customfields[item].value)}checked="checked"{/if} />&nbsp;
                                    {$customfields[item].options[i].value|escape}
                                </label>
                            </div>
                        {/section}
                    {elseif $customfields[item].type == 3}
                        <!-- Date -->
                        <input type="text"
                            name="cf_{$customfields[item].id|escape}"
                            id="cf_{$customfields[item].id|escape}"
                            data-date-format="{$settings.date_format|escape}"
                            class="form-control sp-date-picker {if $customfields[item].required}required{/if}"
                            {if isset($customfields[item].id)}value="{$customfields[item].value|escape}"{/if} />
                    {elseif $customfields[item].type == 4}
                        <!-- Multiple Options -->
                        <select name="cf_{$customfields[item].id|escape}[]" id="cf_{$customfields[item].id|escape}"
                            class="selectMultiple form-control {if $customfields[item].field_required}required" title="{$LANG.validate.emptyfield}{/if}"
                            multiple="multiple">
                            {section name=i loop=$customfields[item].options}
                                <option value="{$customfields[item].options[i].id|escape}"
                                    {if isset($customfields[item].id) && isset($customfields[item].value) && in_array($customfields[item].options[i].id, $customfields[item].value)}selected="selected"{/if}>
                                    {$customfields[item].options[i].value|escape}
                                </option>
                            {/section}
                        </select>
                    {elseif $customfields[item].type == 5}
                        <!-- Options -->
                        <select name="cf_{$customfields[item].id|escape}" id="cf_{$customfields[item].id|escape}"
                            {if $customfields[item].required}
                                title="{$LANG.validate.emptyfield}" class="form-control required"
                            {else}
                                class="form-control"
                            {/if}>
                            <option value="">{$LANG2.general_choose}</option>
                            {section name=i loop=$customfields[item].options}
                                <option value="{$customfields[item].options[i].id|escape}"
                                    {if isset($customfields[item].value) && $customfields[item].value == $customfields[item].options[i].id}selected="selected"{/if}>
                                    {$customfields[item].options[i].value|escape}
                                </option>
                            {/section}
                        </select>
                    {elseif $customfields[item].type == 6}
                        <!-- Password -->
                        <input type="password" name="cf_{$customfields[item].id|escape}" id="cf_{$customfields[item].id|escape}"
                            class="form-control {if $customfields[item].required}required{/if}" />
                    {elseif $customfields[item].type == 7}
                        <!-- Radio Buttons -->
                        <br />
                        {section name=i loop=$customfields[item].options}
                            <div class="radio">
                                <label>
                                    <input class="icheck-control" type="radio" name="cf_{$customfields[item].id|escape}"
                                        value='{$customfields[item].options[i].id|escape}'
                                        {if isset($customfields[item].value) && $customfields[item].value == $customfields[item].options[i].id}checked="checked"{/if} />&nbsp;
                                    {$customfields[item].options[i].value|escape} &nbsp;
                                </label>
                            </div>
                        {/section}
                    {elseif $customfields[item].type == 8}
                        <!-- Text -->
                        <input type="text" name="cf_{$customfields[item].id|escape}" id="cf_{$customfields[item].id|escape}"
                            class="form-control {if $customfields[item].required}required{/if}"
                            {if isset($customfields[item].value)}value="{$customfields[item].value|escape}"{/if} />
                    {elseif $customfields[item].type == 9}
                        <!-- Textarea -->
                        <textarea name="cf_{$customfields[item].id|escape}" id="cf_{$customfields[item].id|escape}" rows="4"
                            class="form-control {if $customfields[item].required}required{/if}" style="width:100%;">{if isset($customfields[item].value)}{$customfields[item].value|escape}{/if}</textarea>
                    {/if}
                    {if isset($customfields[item].description)}
                        <div class="ticket-attachments-message text-muted help-block">
                            {$customfields[item].description|escape}
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    {/if}
{/section}