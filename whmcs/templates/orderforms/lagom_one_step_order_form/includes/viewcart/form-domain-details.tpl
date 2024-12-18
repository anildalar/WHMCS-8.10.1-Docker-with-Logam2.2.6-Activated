{if file_exists("templates/orderforms/$carttpl/includes/viewcart/overwrites/form-domain-details.tpl")}
    {include file="templates/orderforms/$carttpl/includes/viewcart/overwrites/form-domain-details.tpl"}
{else}
    {if $domainsinorder}
        <div class="section">
            <div class="section-header">
                <h2 class="section-title">{$LANG.domainregistrantinfo}</h2>
            </div>
            <div class="section-body">
                <div class="panel panel-form m-b-0">
                    <div class="panel-body">
                        <div class="section">
                            <p>{$LANG.orderForm.domainAlternativeContact}</p>
                            <select name="contact" id="inputDomainContact" class="form-control {if $contact eq "addingnew"}m-b-40{/if}">
                                <option value="">{$LANG.usedefaultcontact}</option>
                                {foreach $domaincontacts as $domcontact}
                                    <option value="{$domcontact.id}" {if $contact==$domcontact.id} selected{/if}>
                                        {$domcontact.name}
                                    </option>
                                {/foreach}
                                <option value="addingnew" {if $contact=="addingnew" } selected{/if}>
                                    {$LANG.clientareanavaddcontact}...
                                </option>
                            </select>
                        </div>
                        <div class="section {if $contact neq "addingnew"} hidden{/if}" id="domainRegistrantInputFields">
                            <h6>{$LANG.orderForm.personalInformation}</h6>
                            <div class="row">
                                {if !in_array("firstname", $hideBillingDetails)}
                                    <div class="col-sm-6 {if isset($orderPersonalInfo.firstname)}flex-order-{$orderPersonalInfo.firstname}{else}flex-order-4{/if}">
                                        <div class="form-group">
                                            <label for="inputDCFirstName" class="control-label">
                                                {$LANG.orderForm.firstName}
                                            </label>
                                            <input type="text" name="domaincontactfirstname" maxlength="50" id="inputDCFirstName" class="form-control" value="{$domaincontact.firstname}">
                                        </div>
                                    </div>
                                {/if}
                                {if !in_array("lastname", $hideBillingDetails)}
                                    <div class="col-sm-6 {if isset($orderPersonalInfo.lastname)}flex-order-{$orderPersonalInfo.lastname}{else}flex-order-5{/if}">
                                        <div class="form-group">
                                            <label for="inputDCLastName" class="control-label">
                                                {$LANG.orderForm.lastName}
                                            </label>
                                            <input type="text" name="domaincontactlastname" maxlength="50" id="inputDCLastName" class="form-control" value="{$domaincontact.lastname}">
                                        </div>
                                    </div>
                                {/if}
                                <div class="col-sm-6 {if isset($orderPersonalInfo.email)}flex-order-{$orderPersonalInfo.email}{else}flex-order-6{/if}">
                                    <div class="form-group">
                                        <label for="inputDCEmail" class="control-label">
                                            {$LANG.orderForm.emailAddress}
                                        </label>
                                        <input type="email" name="domaincontactemail" id="inputDCEmail" class="form-control" value="{$domaincontact.email}">
                                    </div>
                                </div>
                                {if !in_array("phonenumber", $hideBillingDetails)}
                                    <div class="col-sm-6 {if isset($orderPersonalInfo.phonenumber)}flex-order-{$orderPersonalInfo.phonenumber}{else}flex-order-7{/if}">
                                        <div class="form-group">
                                            <label for="inputDCPhone" class="control-label">
                                                {$LANG.orderForm.phoneNumber}
                                            </label>
                                            <input type="tel" name="domaincontactphonenumber" id="inputDCPhone" class="form-control" value="{$domaincontact.phonenumber}">
                                        </div>
                                    </div>
                                {/if}
                            </div>
                            <h6 class="m-t-2x">{$LANG.orderForm.billingAddress}</h6>
                            <div class="row">
                            {if !in_array("companyname", $hideBillingDetails)}
                                <div class="col-sm-6 {if isset($orderBillingAdress.companyname)}flex-order-{$orderBillingAdress.companyname}{else}flex-order-8{/if}">
                                    <div class="form-group">
                                        <label for="inputDCCompanyName" class="control-label">
                                            {$LANG.orderForm.companyName} ({$LANG.orderForm.optional})
                                        </label>
                                        <input type="text" name="domaincontactcompanyname" id="inputDCCompanyName" class="form-control" value="{$domaincontact.companyname}">
                                    </div>
                                </div>
                            {/if}
                            {if $showTaxIdField && !in_array("tax_id", $hideBillingDetails)}
                                <div class="col-sm-6 tax-input-container-domain {if isset($orderBillingAdress.tax_id)}flex-order-{$orderBillingAdress.tax_id}{else}flex-order-9{/if}">
                                    <div class="form-group">
                                        <label class="tax-label-domain" for="inputDCTaxId" data-hide-tax-domain="{$hideVat|implode:' '}">
                                            {$taxLabel} ({$LANG.orderForm.optional})
                                        </label>
                                        <input type="text" name="domaincontacttax_id" id="inputDCTaxId" class="form-control" value="{$domaincontact.tax_id}">
                                    </div>
                                </div>
                            {/if}
                            {if !in_array("address1", $hideBillingDetails)}
                                <div class="col-sm-6 {if isset($orderBillingAdress.address1)}flex-order-{$orderBillingAdress.address1}{else}flex-order-10{/if}">
                                    <div class="form-group">
                                        <label for="inputDCAddress1" class="control-label">
                                            {$LANG.orderForm.streetAddress}
                                        </label>
                                        <input type="text" name="domaincontactaddress1" id="inputDCAddress1" class="form-control" value="{$domaincontact.address1}">
                                    </div>
                                </div>
                            {/if}
                            {if !in_array("address2", $hideBillingDetails)}
                                <div class="col-sm-6 {if isset($orderBillingAdress.address2)}flex-order-{$orderBillingAdress.address2}{else}flex-order-11{/if}">
                                    <div class="form-group">
                                        <label for="inputDCAddress2" class="control-label">
                                            {$LANG.orderForm.streetAddress2}
                                        </label>
                                        <input type="text" name="domaincontactaddress2" id="inputDCAddress2" class="form-control" value="{$domaincontact.address2}">
                                    </div>
                                </div>
                            {/if}
                            {if !in_array("city", $hideBillingDetails)}
                                <div class="col-sm-6 {if isset($orderBillingAdress.city)}flex-order-{$orderBillingAdress.city}{else}flex-order-12{/if}">
                                    <div class="form-group">
                                        <label for="inputDCCity" class="control-label">
                                            {$LANG.orderForm.city}
                                        </label>
                                        <input type="text" name="domaincontactcity" id="inputDCCity" class="form-control" value="{$domaincontact.city}">
                                    </div>
                                </div>
                            {/if}
                            <div class="col-sm-6 {if isset($orderBillingAdress.country)}flex-order-{$orderBillingAdress.country}{else}flex-order-13{/if}">
                                <div class="form-group">
                                    <label for="inputDCPostcode" class="control-label">{$LANG.orderForm.country}</label>
                                    <select name="domaincontactcountry" id="inputDCCountry" class="form-control">
                                        {foreach $countries as $countrycode => $countrylabel}
                                            <option value="{$countrycode}" {if (!$domaincontact.country && $countrycode==$defaultcountry) || $countrycode eq $domaincontact.country} selected{/if}>
                                                {$countrylabel}
                                            </option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            {if !in_array("state", $hideBillingDetails)}
                                <div class="col-sm-6 {if isset($orderBillingAdress.state)}flex-order-{$orderBillingAdress.state}{else}flex-order-14{/if}">
                                    <div class="form-group">
                                        <label for="inputDCState" class="control-label">
                                            {$LANG.orderForm.state}
                                        </label>
                                        <input type="text" name="domaincontactstate" id="inputDCState" class="form-control" value="{$domaincontact.state}">
                                    </div>
                                </div>
                            {/if}
                            {if !in_array("postcode", $hideBillingDetails)}
                                <div class="col-sm-6 {if isset($orderBillingAdress.postcode)}flex-order-{$orderBillingAdress.postcode}{else}flex-order-15{/if}">
                                    <div class="form-group">
                                        <label for="inputDCPostcode" class="control-label">
                                            {$LANG.orderForm.postcode}
                                        </label>
                                        <input type="text" name="domaincontactpostcode" id="inputDCPostcode" class="form-control" value="{$domaincontact.postcode}">
                                    </div>
                                </div>
                            {/if}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function(){
                    if(document.querySelector('.tax-input-container-domain')){
                        let taxLabelArrayDomain = document.querySelector('.tax-label-domain').getAttribute("data-hide-tax-domain").split(" ");
                        let taxInputContainerDomain = document.querySelector('.tax-input-container-domain');
                        let inputCountryDomain = document.querySelector('#inputDCCountry')
    
                        function hideTaxDomain(){
                            if(taxLabelArrayDomain.includes(inputCountryDomain.value)){
                                taxInputContainerDomain.classList.add('hidden');
                            }else{
                                taxInputContainerDomain.classList.remove('hidden')
                            }
                        }
                        
                        hideTaxDomain();
                        inputCountryDomain.addEventListener("change", hideTaxDomain);
                    }
                });
            </script>
        </div>
    {/if}
{/if}