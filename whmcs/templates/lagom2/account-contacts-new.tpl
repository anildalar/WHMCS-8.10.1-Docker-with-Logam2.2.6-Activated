{if isset($RSThemes['pages'][$templatefile]) && file_exists($RSThemes['pages'][$templatefile]['fullPath'])}
    {include file=$RSThemes['pages'][$templatefile]['fullPath']}
{else}
    {if $errorMessageHtml}
        {include file="$template/includes/alert.tpl" type="error" errorshtml=$errorMessageHtml}
    {/if}
    <script>
        var stateNotRequired = true;
        jQuery(document).ready(function() {
            WHMCS.form.register();
        });
    </script>
    <script src="{$BASE_PATH_JS}/StatesDropdown.js"></script>
    <div class="section">
        <div class="section-header">
            <h3 class="section-title">{$LANG.clientareachoosecontact}</h3>
        </div>    
        <div class="section-body">
            <div class="section-body">
                <div class="panel panel-default panel-form">
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{routePath('account-contacts')}">
                        <div class="row">
                            <div class="col-md-6">
                                <select name="contactid" id="inputContactId" onchange="submit()" class="form-control">
                                    {foreach item=contact from=$contacts}
                                        <option value="{$contact.id}">{$contact.name} - {$contact.email}</option>
                                    {/foreach}
                                    <option value="new" selected="selected">{$LANG.clientareanavaddcontact}</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="section">
        <div class="section-body">
            <form role="form" method="post" action="{routePath('account-contacts-new')}">
                <div class="section">
                    <div class="section-header">
                        <h3 class="section-title">{$rslang->trans('generals.contact_details')}</h3>
                    </div>
                    <div class="section-body">				
                        <div class="panel panel-default panel-form">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputFirstName" class="control-label">{$LANG.clientareafirstname}</label>
                                            <input type="text" name="firstname" id="inputFirstName" value="{$formdata.firstname}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputLastName" class="control-label">{$LANG.clientarealastname}</label>
                                            <input type="text" name="lastname" id="inputLastName" value="{$formdata.lastname}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputEmail" class="control-label">{$LANG.clientareaemail}</label>
                                            <input type="email" name="email" id="inputEmail" value="{$formdata.email}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputPhone" class="control-label">{$LANG.clientareaphonenumber}</label>
                                            <input type="tel" name="phonenumber" id="inputPhone" value="{$formdata.phonenumber}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputCompanyName" class="control-label">{$LANG.clientareacompanyname}</label>
                                            <input type="text" name="companyname" id="inputCompanyName" value="{$formdata.companyname}" class="form-control" />
                                        </div>
                                    </div>                    
                                    {if $showTaxIdField}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputTaxId" class="control-label">{lang key=$taxIdLabel}</label>
                                                <input type="text" name="tax_id" id="inputTaxId" class="form-control" value="{$formdata.tax_id}" />
                                            </div>
                                        </div>    
                                    {/if}                        
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputAddress1" class="control-label">{$LANG.clientareaaddress1}</label>
                                            <input type="text" name="address1" id="inputAddress1" value="{$formdata.address1}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputAddress2" class="control-label">{$LANG.clientareaaddress2}</label>
                                            <input type="text" name="address2" id="inputAddress2" value="{$formdata.address2}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputCity" class="control-label">{$LANG.clientareacity}</label>
                                            <input type="text" name="city" id="inputCity" value="{$formdata.city}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="country">{$LANG.clientareacountry}</label>
                                            {$countriesdropdown}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputState" class="control-label">{$LANG.clientareastate}</label>
                                                    <input type="text" name="state" id="inputState" value="{$formdata.state}" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputPostcode" class="control-label">{$LANG.clientareapostcode}</label>
                                                    <input type="text" name="postcode" id="inputPostcode" value="{$formdata.postcode}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="section">
                        <div class="section-header">
                            <h3 class="section-title">{$LANG.clientareacontactsemails}</h3>
                        </div>
                        <div class="section-body">
                            <div class="panel panel-default panel-form">
                                <div class="panel-body">
                                    {foreach $formdata.emailPreferences as $emailType => $value}
                                        <div class="checkbox">
                                            <label>
                                                <input type="hidden" name="email_preferences[{$emailType}]" value="0">
                                                <input class="icheck-control" type="checkbox" name="email_preferences[{$emailType}]" id="{$emailType}emails" value="1"{if $value} checked="checked"{/if} />
                                                {lang key="clientareacontactsemails"|cat:$emailType}
                                            </label>
                                        </div>    
                                    {/foreach}
                                </div>
                            </div>
                        </div>        
                    </div>    
                </div>    
                <div class="form-actions">
                    <input class="btn btn-primary" type="submit" name="save" value="{$LANG.clientareasavechanges}" />
                    <input class="btn btn-default" type="reset" value="{$LANG.cancel}" />
                </div>
            </form>
        </div>
    </div>
{/if}