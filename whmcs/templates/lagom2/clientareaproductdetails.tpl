
{if $product eq 'Ocean VoIP Agent Topup'}
    
    {foreach from=$clientsdetails.customfields item=customfield}
        {if $customfield.id == 14}
            <div style="position: absolute; top: 70px; right: 20px; background: linear-gradient(90deg, #007bff, #00c6ff); color: white; padding: 15px 20px; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                <h5 style="margin: 0; font-family: Orbitron, sans-serif; font-size: 18px; color: white;">
                    Wallet Balance: {$customfield.value}
                </h5>
                <!-- Add Payment Button -->
            </div>
        {/if}
    {/foreach}
    <div style="text-align: center;" style="padding:0px">
        <img src="https://oceanpbx.club/templates/lagom2/assets/img/page-manager/humanoid.png" alt="AI Graphic" style="max-width: 100%; height: 300px; margin-bottom: 20px;">
        <h4 style="font-family: Orbitron, sans-serif; font-weight: var(--font-weight-h4); line-height: var(--line-height-h4); color: var(--text-heading-color); margin-bottom: var(--headings-margin-bottom); font-size: var(--font-size-h4); text-align: center;">
            Enter your Text or Upload Audio File<br/>Our AI will Call on this no and Play it
        </h4>
    </div>
    
    <div class="content">
        <div class="row text-align-center justify-content-center">
            <div class="col-3">
            <label class="radio">
                <div class="radio-styled checked">
                <input type="radio" class="icheck-control" name="domainoption" value="text" id="selregister" checked="">
                </div>
                <span>Enter Text</span>
            </label>
            </div>
            <div class="col-3">
            <label class="radio">
                <div class="radio-styled">
                <input type="radio" class="icheck-control" name="domainoption" value="audio" id="seltransfer">
                </div>
                <span>Upload Audio</span>
            </label>
            </div>
        </div>
    </div>
    
    <!-- Text input section -->
    <div class="a_textbox orbitron row mb-3" id="textInputSection">
        <div class="col-12 mb-2 p-0">
            <textarea class="form-control ocean_textarea" rows="4" placeholder="Enter your Text"></textarea>
        </div>
        <div class="col-6 p-0 p-0 pe-1">
            <select class="pe-2 ocean_language" id="languageDropdown" name="language">
            <option value="" selected="">Select Language</option>
            <!-- Add your language options here -->
            </select>
        </div>
        <div class="col-6 p-0 ps-1">
            <select class="ocean_accent" name="accent">
            <option value="" selected="">Select Accent</option>
            <!-- Add your accent options here -->
            </select>
        </div>
    </div>

    <!-- File input section (hidden by default) -->
    <div class="row orbitron mb-3" id="fileInputSection" style="display: none;">
        <div class="col-12 mb-2 p-0">
            <input type="file" class="form-control ocean_file" id="audioFileInput" accept="audio/*">
            <p class="error_class" id="fileErrorMessage" style="color: red; display: none;">Please upload a valid audio file (.mp3, .wav).</p>
        </div>
    </div>
    
    <!-- Phone number input -->
    <div class="row orbitron">
    <div class="col-12 p-0">
        <textarea class="form-control ocean_number_bulk" rows="4" placeholder="Enter numbers you want to call like -  44123446646,1245789952,445266478"></textarea>
    </div>
    </div>
    <div id="newMessage" style="color: red; font-weight: bold;text-align:center; font-size: 17px;"></div>
    <p class="error_class" style="color: red;"></p>
    <!-- Call Button with Icon -->
    <div class="text-center mt-4">
        {if !$isSuspended}
            <button type="button" class="btn btn-primary btn-lg calling_btn_bulk" id="callButton">
                <i class="fas fa-phone-alt"></i> Call Now
            </button>
        {/if}
    </div>
    <br></br>
{/if}

{if $product eq 'AI Assistant for Real Estate Agent/Broker'}
    {foreach from=$clientsdetails.customfields item=customfield}
        {if $customfield.id == 18}
            <div style="position: absolute; top: 70px; right: 20px; background: linear-gradient(90deg, #007bff, #00c6ff); color: white; padding: 15px 20px; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                <h5 style="margin: 0; font-family: Orbitron, sans-serif; font-size: 18px; color: white;">
                    Wallet Balance: {$customfield.value}
                </h5>
                <!-- Add Payment Button -->
            </div>
        {/if}
    {/foreach}
    <!--<p>Enter your ad link below:</p>
     <h1>Welcome, Real Estate Broker {$client.firstname}!</h1>
    
    <div style="position: relative; display: inline-block; width: 100%;">
        <input type="text" id="adLink" placeholder="http://example.com" style="width: 100%; padding-right: 80px;" />
        <button style="position: absolute; top: 0; right: 0; padding: 5px 10px; height: 100%;" type="button" class="btn btn-success">
            <i class="fas fa-sync-alt"></i> Fetch
        </button>
    </div>-->
    <div id="loader" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.8); z-index: 1000;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <i class="fas fa-spinner fa-spin" style="font-size: 30px;"></i>
            <p style="text-align: center;">Loading, please wait...</p>
        </div>
    </div>
    <div style="position: relative; margin-top: 20px;">
        <h3>Ad Preview</h3>
        <textarea class="form-control " id="adText" rows="4" placeholder="Enter your Text">1 villa in downtown, price around 1,000,000 USD, ready for sale.</textarea>
        
        <div style="position: absolute; top: 185px; left: 0px;">
            <button id="rephraseText" style="margin-bottom: 0px;" type="button" class="btn btn-success">
                <i class="fas fa-sync-alt"></i> Rephrase Ad
            </button>
        </div>
        <div style="position: absolute; top: 185px; right: 370px;">
            <select class="pe-2 ocean_language" id="languageDropdown" style="width: 200px; color: white; background-color: #007bff; border: 1px solid #0056b3;" name="language">
                <option value="Select a Language" selected="Select a Language">Select Language</option>
            </select>
        </div>
        <div style="position: absolute; top: 185px; right: 160px;">
            <select class="ocean_accent" name="accent" style="width: 200px; color: white; background-color: #007bff; border: 1px solid #0056b3;">
                <option value="Select Accent" selected="Select Accent">Select Accent</option>
            </select>
        </div>
        
        <div style="position: absolute; top: 185px; right: 0px;">
            <button type="button" id="generateAudio" class="btn btn-success">
                 <i class="fas fa-microphone"></i> Generate Audio
            </button>
        </div>
    </div>
    <br/><br/>
    <div id="audioContainer" style="width: 100%; margin-top: 30px; margin-bottom:30px;">
        <audio controls id="audioPlay" style="width:100%;"></audio>
    </div>

    <label for="bNumber">Enter Agent Number (Your Number):</label>
    <input type="text" class="form-control " id="input_realestate"   placeholder="e.g., 1234567890" />
    <br></br>
    <label for="aNumber">Enter Your Contact Numbers (Numbers):</label>
    <textarea class="form-control" placeholder="e.g., 4445186651,123545848" id="textarea_realestate" rows="4" placeholder="Enter your Text"></textarea>
    <div id="newMessage11" style="color: red; font-weight: bold;text-align:center; font-size: 17px;"></div>
    <div class="text-center mt-4">
        {if !$isSuspended}
            <button type="button" class="btn btn-primary btn-lg " id="callButton_realestate">
                <i class="fas fa-phone-alt"></i> Call Initiate
            </button>
        {/if}
    </div>
    <br></br>
    <script>
        $(document).ready(function() {
            $('#generateAudio').on('click', function() {
                const text = $('#adText').val();
                const selectedLanguage = $('#languageDropdown').val();
                const selectedAccent = $('.ocean_accent').val();
                if (!selectedLanguage || selectedLanguage === "Select a Language") {
                    alert("Please select a language.");
                    return;
                }
                if (!selectedAccent || selectedAccent === "Select Accent") {
                    alert("Please select an accent.");
                    return;
                }
                if (text) {
                    $('#loader').show();
                    generateAudioFromText(text);
                } else {
                    alert("Please enter some text to convert to audio.");
                }
            });
            function generateAudioFromText(text) {
                const audioElement = $('#audioPlay').get(0);
                const selectedLanguage = $('#languageDropdown').val();
                const selectedAccent = $('.ocean_accent').val();
                // Check if the audio source is already set and valid
                if (audioElement.src) {
                    $('#loader').hide();
                    audioElement.play(); // Play existing audio
                    alert('Playing existing audio!');
                    return; // Exit function if audio is already available
                }
                const postData = 'text=' + encodeURIComponent(text) +
                 '&language=' + encodeURIComponent(selectedLanguage) +
                 '&accent=' + encodeURIComponent(selectedAccent);
                fetch('generate_audio.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: postData
                })
                .then(response => response.blob())
                .then(blob => {
                    audioBlobData = blob;
                    const audioUrl = URL.createObjectURL(blob);
                    const audioContainer = $('#audioContainer');
                    audioContainer.empty(); // Clear any existing audio
                    const audio = $('<audio>', {
                        controls: true,
                        id: 'audioPlay',
                        src: audioUrl,
                        css: {
                            width: '100%'
                        }
                    });
                    audioContainer.append(audio);
                    $('#loader').hide();
                })
                .catch(error => {
                    $('#loader').hide();
                    console.error('Error generating audio:', error);
                    alert('Failed to generate audio. Please try again.');
                });
            }
            $("#callButton_realestate").on('click', function(){
                var blukPhones= $('#textarea_realestate').val().trim();
                var agentPhone= $('#input_realestate').val();
                var textData = $('#adText').val();
                const selectedLanguage = $('#languageDropdown').val();
                const selectedAccent = $('.ocean_accent').val();
                if (!blukPhones) {
                    alert("Please enter valida users number.");
                    return;
                }
                if (!agentPhone) {
                    alert("Please enter valid  agent number.");
                    return;
                }
                var date = new Date();
                var campaignName = 'Campaign_' + date.getFullYear() + 
                          (date.getMonth() + 1).toString().padStart(2, '0') + 
                          date.getDate().toString().padStart(2, '0') + '_' + 
                          date.getHours().toString().padStart(2, '0') + 
                          date.getMinutes().toString().padStart(2, '0') + 
                          date.getSeconds().toString().padStart(2, '0');

                
                if (textData) {
                    const formData = new URLSearchParams();
                    formData.append('action', 'InsetrRealEstate'); 
                    formData.append('bulkNumber', blukPhones); 
                    formData.append('agentNumber', agentPhone); 
                    formData.append('inputTextArea', textData); 
                    formData.append('calling_camp', campaignName); 
                    formData.append('accent_area', selectedAccent); 
                    formData.append('lang_area', selectedLanguage); 

                    fetch('includes/api/cronbbquery.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: formData.toString() 
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.result === 'success') {
                            $('#newMessage11').css('color', 'green').text('Calling start in few seconds....').show();
                        } else {
                            $('#newMessage11').css('color', 'red').text(result.message).show();
                        }
                    });
                } else {
                    alert("Please enter some text to convert to audio.");
                }
            });

            $('#rephraseText').on('click', function() {
                const inputText = $('#adText').val(); // Assuming you have a textarea or input with id 'adText'
                
                if (!inputText) {
                    alert("Please enter text to rephrase.");
                    return;
                }
                $('#loader').show();
                fetch('includes/api/rephrasetext.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=RephraseText&text=' + encodeURIComponent(inputText) // Sending the action and text
                })
                .then(response => response.json())
                .then(result => {
                    $('#loader').hide();
                    if (result.result === 'success') {
                        $('#adText').val(result.rephrasedText);
                        $('#newMessage11').css('color', 'green').text('Rephrased Text: ' + result.rephrasedText).show();
                    } else {
                        $('#newMessage11').css('color', 'red').text(result.message).show();
                    }
                })
                .catch(error => {
                    $('#loader').hide();
                    $('#newMessage11').css('color', 'red').text('An error occurred while rephrasing text.').show();
                    console.error('Error sending request:', error);
                });
            });
        });
    </script>
   
{/if}

{if $product eq 'HostedPBX+CRM(with Dialer)'}
    {assign var="crmData" value=$crm_instances|json_decode:true}

    {if $crmData.status eq 'none'}
        <div style="text-align: center;margin-bottom:15px; padding: 20px; font-family: Orbitron, sans-serif; font-size: 16px; color: #ffffff; background: linear-gradient(90deg, #ff5722, #ff9800); border-radius: 12px;">
            <strong>CRM is provisioning now, please wait some time...</strong>
        </div>
    {else}
        <div style="text-align: center;  height: 44vh;">
            <div style="background: linear-gradient(90deg, #007bff, #00c6ff); 
                        color: white; 
                        padding: 10px 20px; 
                        border-radius: 12px; 
                        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
                        text-align: left;">
                
                <h4 style="font-family: Orbitron, sans-serif; font-size: 20px; font-weight: bold; color: #ffeb3b; margin: 0;">
                    CRM URL:
                </h4>
                
                <a href="{$crmData.crmUrl}/admin/authentication" 
                   target="_blank" 
                   style="font-family: Orbitron, sans-serif; font-size: 18px; font-weight: bold; color: #ffffff; text-decoration: none;">
                    {$crmData.crmUrl}/admin/authentication
                </a>

                <hr style="border: 1px solid white; margin: 10px 0;">

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">IP Address:</strong> {$crmData.ipAdd}
                </p>

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">Username:</strong> admin@gmail.com
                </p>

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">Password:</strong> Anil@789
                    (<span style="color: #ffeb3b; font-size: 14px;">Please change your password as soon as possible.</span>)
                </p>

                <hr style="border: 1px solid white; margin: 10px 0;">

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">phpMyAdmin URL:</strong> {$crmData.pmaUrl}
                </p>

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">phpMyAdmin User:</strong> {$crmData.pmaUser}
                </p>

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">phpMyAdmin Password:</strong> {$crmData.pmaPass}
                </p>
                
                <hr style="border: 1px solid white; margin: 10px 0;">

                <h4 style="font-family: Orbitron, sans-serif; font-size: 20px; font-weight: bold; color: #ffeb3b; margin: 0;">
                    PBX Details:
                </h4>

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">PBX URL:</strong> <a href="https://{$izpbxHostUrl}" target="_blank" style="color: #ffffff; text-decoration: none;">https://{$izpbxHostUrl}</a>
                </p>

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">PBX User:</strong> ziya
                </p>

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">PBX Password:</strong> oklabs
                </p>

                <hr style="border: 1px solid white; margin: 10px 0;">

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">PBX phpMyAdmin URL:</strong> <a href="https://{$izpbxPmaUrl}" target="_blank" style="color: #ffffff; text-decoration: none;">https://{$izpbxPmaUrl}</a>
                </p>

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">PBX phpMyAdmin User:</strong> asterisk
                </p>

                <p style="font-family: Orbitron, sans-serif; font-size: 16px; margin: 5px 0;">
                    <strong style="color: #ffeb3b;">PBX phpMyAdmin Password:</strong> PleaseCHANGEM3
                </p>

            </div>
        </div>
    {/if}

{/if}



{if isset($RSThemes['pages'][$templatefile]) && file_exists($RSThemes['pages'][$templatefile]['fullPath'])}
    {include file=$RSThemes['pages'][$templatefile]['fullPath']}
    
{else}
    {if $RSThemes['pages'][$templatefile]['config']['hideRightBoxWithDetailsUsage'] == "1"}
        {assign var="hideDetailsBox" value=true}
    {/if}
    {if isset($RSThemes.layouts.vars.modules)}
        {foreach from=$RSThemes.layouts.vars.modules item=checkModule}
            {if $checkModule == $module}
                {assign var="customModuleInfo" value=true}
            {/if}
        {/foreach}
    {/if}
    {if $modulecustombuttonresult}
        {if $modulecustombuttonresult == "success"}
            {include file="$template/includes/alert.tpl" type="success" additionalClasses="alert-primary" msg=$LANG.moduleactionsuccess textcenter=true idname="alertModuleCustomButtonSuccess"}
        {else}
            {include file="$template/includes/alert.tpl" type="error" additionalClasses="alert-primary" msg=$LANG.moduleactionfailed|cat:' ':$modulecustombuttonresult textcenter=true idname="alertModuleCustomButtonFailed"}
        {/if}
    {/if}

    {if $pendingcancellation}
        {include file="$template/includes/alert.tpl" type="error" additionalClasses="alert-primary" msg=$LANG.cancellationrequestedexplanation textcenter=true idname="alertPendingCancellation"}
    {/if}

    {if $unpaidInvoice}
        <div class="alert alert-lagom alert-primary alert-{if $unpaidInvoiceOverdue}danger{else}warning{/if}" id="alert{if $unpaidInvoiceOverdue}Overdue{else}Unpaid{/if}Invoice">
            <div class="alert-body">
                {$unpaidInvoiceMessage}
            </div>
            <div class="alert-actions pull-right">
                <a href="viewinvoice.php?id={$unpaidInvoice}" class="btn btn-xs btn-{if $unpaidInvoiceOverdue}danger{else}warning{/if}">
                    {lang key='payInvoice'}
                </a>
            </div>
        </div>
    {/if}
    <div class="tab-content margin-bottom {if $hideDetailsBox}details-box-hidden{/if} {if $RSThemes['pages'][$templatefile]['config']['removeUrlFromDomainName'] == "1"}domain-url-disabled{/if} {if $RSThemes['pages'][$templatefile]['config']['removeProductGroupName'] == "1"}product-group-hidden{/if}">
        <div class="tab-pane active"  id="Overview">
            {if $tplOverviewTabOutput}
                {$tplOverviewTabOutput}
            {else}
            
                {if !$customModuleInfo}
                <div class="product-details clearfix">
                    <div class="row row-eq-height row-eq-height-sm">
                        <div class="{if $hideDetailsBox}col-md-12{else}col-md-6{/if}">
                            <div class="product-icon {if $hideDetailsBox} product-icon-sm{/if}">
                                <div class="product-content">
                                    <div class="product-image">
                                        {include file="$template/includes/common/svg-icon.tpl" icon="addon" onDark=true}
                                    </div>
                                    <h2 class="product-name">{if isset($RSThemes['pages'][$templatefile]) && $RSThemes['pages'][$templatefile]['config']['removeProductGroupName'] != "1"}<span class="product-group-name">{$groupname} - </span>{/if}{$product}</h2>
                                </div>    
                                {if $domain}  
                                {if isset($RSThemes['pages'][$templatefile]) && $RSThemes['pages'][$templatefile]['config']['removeUrlFromDomainName'] != "1"}<a class="product-footer" href="http://{$domain}">{$domain}</a>{else}<span class="product-footer">{$domain}</span>{/if}
                                {/if}
                            </div>
                        </div>
                        {if !$hideDetailsBox}
                            <div class="col-md-6">
                                {if $lastupdate}
                                    <div class="panel panel-default panel-form cpanel-usage-stats" id="cPanelUsagePanel">
                                        <div class="panel-body text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="usage-stats">
                                                        <span>{lang key='diskUsage'}</span>
                                                        <input type="text" value="{$diskpercent|substr:0:-1}" class="usage-dial" data-bgColor="#e6e8ec" data-fgColor="{if $RSThemes.styles.vars.colorPrimary}{$RSThemes.styles.vars.colorPrimary}{else}#0c70de{/if}" data-angleOffset="-125" data-angleArc="250" data-min="0" data-max="{if substr($diskpercent, 0, -1) > 100}{$diskpercent|substr:0:-1}{else}100{/if}" data-readOnly="true" data-width="104" data-thickness=.3 data-height="80" />                          
                                                        <span>{$diskusage} M / {$disklimit} M</span>
                                                    </div>    
                                                </div>
                                                <div class="col">
                                                    <div class="usage-stats">
                                                        <span>{lang key='bandwidthUsage'}</span>
                                                        <input type="text" value="{$bwpercent|substr:0:-1}" class="usage-dial" data-bgColor="#e6e8ec" data-fgColor="{if $RSThemes.styles.vars.colorPrimary}{$RSThemes.styles.vars.colorPrimary}{else}#0c70de{/if}" data-angleOffset="-125" data-angleArc="250" data-min="0" data-max="{if substr($bwpercent, 0, -1) > 100}{$bwpercent|substr:0:-1}{else}100{/if}" data-readOnly="true" data-width="104" data-thickness=.3 data-height="80" />
                                                        <span>{$bwusage} M / {$bwlimit} M</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="{$BASE_PATH_JS}/jquery.knob.js"></script>
                                            <script type="text/javascript">
                                                jQuery(function() {
                                                    jQuery(".usage-dial").knob({
                                                        'change': function (v) {},
                                                        draw: function () {
                                                            if ($(this.i).val() > 0){
                                                                $(this.i).val(this.cv + '%');
                                                            }
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="text-center limit-near">
                                                {$LANG.clientarealastupdated}: {$lastupdate}
                                            </div>
                                        </div>    
                                    </div>     
                                {else}
                                    <div class="product-info">
                                        <ul class="list-info list-info-v">
                                            <li>
                                                <span class="list-info-title">{$LANG.clientareastatus}</span>
                                                {if $product eq 'Ocean VoIP Agent Topup'}
                                                    {if $isSuspended}
                                                        <span class="list-info-text"><span class="status status-suspended">Suspended</span></span>
                                                    {else}
                                                        <span class="list-info-text"><span class="status status-{$rawstatus|strtolower}">{$status}</span></span>
                                                    {/if}

                                                {elseif $product eq 'AI Assistant for Real Estate Agent/Broker'}
                                                    {if $isSuspendedRealEstate}
                                                        <span class="list-info-text"><span class="status status-suspended">Suspended</span></span>
                                                    {else}
                                                        <span class="list-info-text"><span class="status status-{$rawstatus|strtolower}">{$status}</span></span>
                                                    {/if}    
                                                {else}
                                                    <span class="list-info-text"><span class="status status-{$rawstatus|strtolower}">{$status}</span></span>
                                                {/if}
                                            </li>
                                            <li>
                                                <span class="list-info-title">{$LANG.clientareahostingregdate}</span>
                                                <span class="list-info-text">{$regdate}</span>
                                            </li>
                                            {if $firstpaymentamount neq $recurringamount}
                                                <li>
                                                    <span class="list-info-title">{$LANG.firstpaymentamount}</span>
                                                    
                                                    {if $product eq 'Ocean VoIP Agent Topup'}
                                                        {if $isSuspended}
                                                            <span class="list-info-text">{$currentBalance|formatCurrency} </span>
                                                        {else}
                                                            <span class="list-info-text">{$currentBalance|formatCurrency} </span>
                                                        {/if}
                                                    {elseif $product eq 'AI Assistant for Real Estate Agent/Broker'}
                                                        {if $isSuspendedRealEstate}
                                                            <span class="list-info-text">{$currentBalanceRealEstate|formatCurrency} </span>
                                                        {else}
                                                            <span class="list-info-text">{$currentBalanceRealEstate|formatCurrency} </span>
                                                        {/if}    
                                                    {else}
                                                        <span class="list-info-text">{$currentBalance|formatCurrency} </span>
                                                    {/if}

                                                </li>
                                            {/if}
                                            {if $billingcycle != $LANG.orderpaymenttermonetime && $billingcycle != $LANG.orderfree}
                                                <li>
                                                    <span class="list-info-title">{$LANG.recurringamount}</span>
                                                    <span class="list-info-text">{$recurringamount}</span>
                                                </li>
                                            {/if}
                                            {if $quantitySupported && $quantity > 1}
                                                <li>
                                                    <span class="list-info-title">{lang key='quantity'}</span>
                                                    <span class="list-info-text">{$quantity}</span>
                                                </li>  
                                            {/if}
                                            <li>
                                                <span class="list-info-title">{$LANG.orderbillingcycle}</span>
                                                <span class="list-info-text">{$billingcycle}</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title">{$LANG.clientareahostingnextduedate}</span>
                                                <span class="list-info-text">{$nextduedate}</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title">{$LANG.orderpaymentmethod}</span>
                                                <span class="list-info-text"> {$paymentmethod}</span>
                                            </li>
                                            {if $product eq 'Ocean VoIP Agent Topup' && $isSuspended}
                                                <li>
                                                    <span class="list-info-title">{$LANG.suspendreason}</span>
                                                    <span class="list-info-text">Insufficient balance</span>
                                                </li>
                                            {/if}
                                            {if $product eq 'AI Assistant for Real Estate Agent/Broker' && $isSuspendedRealEstate}
                                                <li>
                                                    <span class="list-info-title">{$LANG.suspendreason}</span>
                                                    <span class="list-info-text">Insufficient balance</span>
                                                </li>
                                            {/if}
                                        </ul>
                                    </div>

                                {/if}
                            </div>
                        {/if}
                    </div>
                </div>
                {/if}
                {if $moduleclientarea}
                <div class="panel panel-default panel-product-details">
                    <div class="panel-body">
                    <div class="module-client-area module-{$module} p-0">
                        {$moduleclientarea}
                    </div>
                    </div>
                </div>
                {/if}
                {foreach $hookOutput as $output key=k}
                    <div class="section section-hook-output no-float-banner" data-style-type={$RSThemes.styles.iconType}>
                        {$output}
                    </div>
                {/foreach}
                {if $domain || $configurableoptions || $customfields || $customModuleInfo || $hideDetailsBox}
                <div class="section">
                    <div class="section-body">
                        <div class="panel panel-default">
                            <div class="panel-nav">
                                <ul class="nav nav-tabs">							
                                    {if $customModuleInfo || $lastupdate || $hideDetailsBox}
                                    <li>
                                        <a class=" active" href="#billingInfo" data-toggle="tab"><i class="ls ls-wallet"></i> {$LANG.billingOverview}</a>
                                    </li>							
                                    {/if}
                                    {if $domain}
                                        <li>
                                            <a class="{if !$customModuleInfo && !$lastupdate && !$hideDetailsBox}active{/if}" href="#domain" data-toggle="tab"><i class="ls ls-location"></i> {if $type eq "server"}{$LANG.sslserverinfo}{elseif ($type eq "hostingaccount" || $type eq "reselleraccount") && $serverdata}{$LANG.hostingInfo}{else}{$LANG.clientareahostingdomain}{/if}</a>
                                        </li>
                                    {/if}
                                    {if $configurableoptions}
                                        <li>
                                            <a class="{if !$domain && !$customModuleInfo && !$lastupdate  && !$hideDetailsBox}  active{/if}" href="#configoptions" data-toggle="tab"><i class="ls ls-configure"></i> {$LANG.orderconfigpackage}</a>
                                        </li>
                                    {/if}
                                    {if $metricStats}
                                        <li>
                                            <a class="{if !$domain && !$customModuleInfo && !$configurableoptions && !$lastupdate  && !$hideDetailsBox} active{/if}"  href="#metrics" data-toggle="tab"><i class="fas fa-chart-line fa-fw"></i> {$LANG.metrics.title}</a>
                                        </li>
                                    {/if}
                                    {if $customfields}
                                        <li>
                                            <a class="{if !$domain && !$customModuleInfo && !$metricStats && !$configurableoptions && !$lastupdate  && !$hideDetailsBox} active{/if}" href="#additionalinfo" data-toggle="tab"><i class="ls ls-info-circle"></i> {$LANG.additionalInfo}</a>
                                        </li>
                                    {/if}
                                </ul>
                            </div>               
                            <div class="tab-content">							
                                {if $customModuleInfo || $lastupdate || $hideDetailsBox}
                                    <div class="panel-body tab-pane{if $customModuleInfo || $lastupdate || $hideDetailsBox} active{/if} billingOverview" id="billingInfo">
                                        <div class="row row-eq-height row-eq-height-sm ">				
                                            {if $firstpaymentamount neq $recurringamount}
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="firstPaymentAmount">
                                                    <div class="col-12" >
                                                        <span class="gray-base">
                                                            {$LANG.firstpaymentamount}
                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        {$firstpaymentamount}
                                                    </div>
                                                </div>
                                            </div>
                                            {/if}
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="registrationDate">
                                                    <div class="col-12">
                                                        <span class="gray-base">
                                                            {$LANG.clientareahostingregdate}
                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        {$regdate}
                                                    </div>
                                                </div>
                                            </div>
                                            {if $billingcycle != $LANG.orderpaymenttermonetime && $billingcycle != $LANG.orderfree}
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="row" id="recurringAmount">
                                                        <div class="col-12">
                                                            <span class="gray-base">
                                                                {$LANG.recurringamount}
                                                            </span>
                                                        </div>
                                                        <div class="col-12">
                                                            {$recurringamount}
                                                        </div>
                                                    </div>
                                                </div>
                                            {/if}
                                            {if $quantitySupported && $quantity > 1}
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="gray-base">
                                                                {lang key='quantity'}
                                                            </span>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            {$quantity}
                                                        </div>
                                                    </div>
                                                </div> 
                                            {/if}
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="nextDueDate">
                                                    <div class="col-12">
                                                        <span class="gray-base">
                                                            {$LANG.clientareahostingnextduedate}
                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        {$nextduedate}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="billingCycle">
                                                    <div class="col-12">
                                                        <span class="gray-base">
                                                            {$LANG.orderbillingcycle}
                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        {$billingcycle}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="paymentMethod">
                                                    <div class="col-12">
                                                        <span class="gray-base">
                                                            {$LANG.orderpaymentmethod}
                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        {$paymentmethod}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                                {if $domain}
                                <div class="tab-pane {if !$customModuleInfo && !$lastupdate && !$hideDetailsBox}active{/if}" id="domain">
                                    <ul class="list-info list-info-50 list-info-bordered">
                                        {if $type eq "server"}
                                            <li>
                                                <span class="list-info-title">{$LANG.serverhostname}</span>
                                                <span class="list-info-text">{$domain}</span>
                                            </li>
                                            {if $dedicatedip}
                                                <li>
                                                    <span class="list-info-title">{$LANG.primaryIP}</span>
                                                    <span class="list-info-text">{$dedicatedip}</span> 
                                                </li>
                                            {/if}
                                            {if $assignedips}
                                                <li>
                                                    <span class="list-info-title">{$LANG.assignedIPs}</span>
                                                    <span class="list-info-text">{$assignedips|nl2br}</span>
                                                </li>
                                            {/if}
                                            {if $RSThemes['addonSettings']['hide_nameserver_fields'] != "displayed"}
                                                {assign var="ns_groups" value=","|explode:$RSThemes['addonSettings']['hide_nameserver_fields']}
                                                {if $groupId|in_array:$ns_groups}
                                                    {assign var="hideNSFields" value=true}
                                                {/if}
                                            {/if}
                                            {if ($ns1 || $ns2) && !$hideNSFields}
                                                <li>
                                                    <span class="list-info-title">{$LANG.domainnameservers}</span>
                                                    <span class="list-info-text">
                                                        {$ns1}<br />{$ns2}
                                                    </span>
                                                </li>
                                            {/if}
                                        {else}
                                            {if $domain}
                                                <li>
                                                    <span class="list-info-title">{$LANG.orderdomain}</span>                                                
                                                    <span class="list-info-text">{$domain}<span class="m-h-1x"><a href="http://{$domain}" target="_blank" class="btn btn-default btn-xs" >{$LANG.visitwebsite}</a></span></span>
                                                </li>
                                                {if $sslStatus}
                                                    <li class="align-center">
                                                        <span class="list-info-title">{$LANG.sslState.sslStatus}</span>                                                
                                                        {assign var="awords" value="/"|explode:$sslStatus->getImagePath()} 
                                                        {assign var="imageSSL" value=$awords|@end}
                                                        <img class="m-r-8 {$sslStatus->getClass()}" src="{$WEB_ROOT}/templates/{$template}/assets/img/ssl/12x12/{$imageSSL|replace:".png":".svg"}" width="12" data-type="service" data-domain="{$domain}" data-showlabel="1"> 
                                                        <span id="statusDisplayLabel">
                                                            {if !$sslStatus->needsResync()}
                                                                {$sslStatus->getStatusDisplayLabel()}
                                                            {else}
                                                                {$LANG.loading}
                                                            {/if}
                                                        </span>
                                                    </li>
                                                    {if $sslStatus->isActive() || $sslStatus->needsResync()}
                                                    <li>
                                                        <span class="list-info-title">{$LANG.sslState.startDate}</span>                                                
                                                        <span class="list-info-text" id="ssl-startdate">
                                                            {if !$sslStatus->needsResync() || $sslStatus->startDate}
                                                                {$sslStatus->startDate->toClientDateFormat()}
                                                            {else}
                                                                {$LANG.loading}
                                                            {/if}
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="list-info-title">{$LANG.sslState.expiryDate}</span>                                                
                                                        <span class="list-info-text" id="ssl-expirydate">
                                                            {if !$sslStatus->needsResync() || $sslStatus->expiryDate}
                                                                {$sslStatus->expiryDate->toClientDateFormat()}
                                                            {else}
                                                                {$LANG.loading}
                                                            {/if}
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="list-info-title">{$LANG.sslState.issuerName}</span>                                                
                                                        <span class="list-info-text" id="ssl-issuer">
                                                            {if !$sslStatus->needsResync() || $sslStatus->issuerName}
                                                                {$sslStatus->issuerName}
                                                            {else}
                                                                {$LANG.loading}
                                                            {/if}
                                                        </span>
                                                    </li>
                                                    {/if}
                                                {/if}                                            
                                            {/if}
                                            {if $username}
                                                <li>
                                                    <span class="list-info-title">{$LANG.serverusername}</span>
                                                    <span class="list-info-text">{$username}</span>
                                                </li>
                                            {/if}
                                            {if $serverdata}
                                                {if $serverdata.hostname}
                                                    <li>
                                                        <span class="list-info-title">{$LANG.servername}</span>
                                                        <span class="list-info-text">{$serverdata.hostname}</span>
                                                    </li>
                                                {/if}
                                                {if $serverdata.ipaddress}
                                                    <li>
                                                        <span class="list-info-title">{$LANG.domainregisternsip}</span>
                                                        <span class="list-info-text">{$serverdata.ipaddress}</span>
                                                    </li>
                                                {/if}
                                                {if $serverdata.nameserver1 || $serverdata.nameserver2 || $serverdata.nameserver3 || $serverdata.nameserver4 || $serverdata.nameserver5}
                                                    <li>
                                                        <span class="list-info-title">
                                                            {$LANG.domainnameservers}
                                                        </span>
                                                        <span class="list-info-text">
                                                            {for $i=1 to 5}
                                                                {assign var=key value="nameserver$i"}
                                                                {assign var=keyip value="nameserver`$i`ip"}
                                                                {if $serverdata.$key}{$serverdata.$key} {if {$serverdata.$keyip}}({$serverdata.$keyip}){/if}<br />{/if}
                                                            {/for}
                                                        </span>
                                                    </li>
                                                {/if}
                                            {/if}
                                        {/if}
                                    </ul> 
                                </div>
                                {/if}
                                {if $configurableoptions}
                                <div class="tab-pane {if !$domain && !$customModuleInfo && !$lastupdate && !$hideDetailsBox} active{/if}" id="configoptions">
                                    <ul class="list-info list-info-50 list-info-bordered">
                                        {foreach from=$configurableoptions item=configoption}
                                            <li>
                                                <span class="list-info-title">{$configoption.optionname}</span>
                                                <span class="list-info-text">
                                                    {if $configoption.optiontype eq 3}{if $configoption.selectedqty}{$LANG.yes}{else}{$LANG.no}{/if}{elseif $configoption.optiontype eq 4}{$configoption.selectedqty} x {$configoption.selectedoption}{else}{$configoption.selectedoption}{/if}
                                                </span>
                                            </li>
                                        {/foreach}
                                    </ul>
                                </div>
                                {/if}
                                {if $metricStats}
                                    <div class="tab-pane {if !$domain && !$customModuleInfo && !$lastupdate && !$configurableoptions && !$hideDetailsBox}active{/if}" id="metrics">
                                        {include file="$template/clientareaproductusagebilling.tpl"}
                                    </div>
                                {/if}
                                {if $customfields}
                                <div class="tab-pane {if !$domain && !$customModuleInfo && !$lastupdate && !$configurableoptions && !$metricStats && !$hideDetailsBox} active{/if} " id="additionalinfo">
                                    <ul class="list-info list-info-50 list-info-bordered">
                                        {foreach from=$customfields item=field}
                                            <li>
                                                <span class="list-info-title">{$field.name}</span>
                                                <span class="list-info-text">{$field.value}</span>
                                            </li>
                                        {/foreach}
                                    </ul>
                                </div>
                                {/if}
                                {if $sslInfo}
                                <div class="tab-pane fade text-center" id="ssl-info">
                                    {if $sslInfo->active}
                                        <div class="alert alert-lagom alert-primary alert-success" role="alert">
                                            {lang key='sslActive' expiry=$sslInfo->expiryDate->toClientDateFormat()}
                                        </div>
                                    {else}
                                        <div class="alert alert-lagom alert-primary alert-warning ssl-required" role="alert">
                                            {lang key='sslState.sslInactive'}
                                        </div>
                                    {/if}
                                </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
                {/if}                            
            {/if}

        </div>
            
        <div class="tab-pane " id="Downloads">
            <div class="section">
                <div class="section-body">
                    <div class="kbarticles kbdownloads kbdownloads-panels list-group">
                        {foreach from=$downloads item=download}
                            <div class="kbdownloads-panel list-group-item">
                                <div>
                                    <h6>{$download.title}</h6>
                                    <p>{$download.description}</p>
                                </div>
                                <a class="btn btn-primary-faded" href="{$download.link}">
                                    <i class="lm lm-download"></i>
                                </a>
                            </div>
                        {/foreach}
                    </div>
                </div>
            </div>    
        </div>
        <div class="tab-pane " id="Addons">
            <div class="section">
                <div class="section-header">
                    <h2 class="section-title">{$LANG.clientareahostingaddons}</h2>
                    {if $addonsavailable}
                        <p class="section-desc">{lang key="clientAreaProductAddonsAvailable"}</p>
                    {/if}
                </div>
                <div class="section-body">
                    <div class="row">
                        {foreach from=$addons item=addon}
                            <div class="col-md-6">
                                <div class="panel panel-default panel-accent-blue">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            {if isset($RSThemes['pages'][$templatefile]) && $RSThemes['pages'][$templatefile]['config']['showProductAddonsId'] == "1"}
                                                #{$addon.id} - 
                                            {/if}
                                            {$addon.name}
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-info list-info-50">
                                            <li>
                                                <span class="list-info-title">{$LANG.clientareastatus}</span>
                                                <span class="list-info-text">{$addon.status}</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title">{$LANG.recurringamount}</span>
                                                <span class="list-info-text">{$addon.pricing}</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title">{$LANG.registered}</span>
                                                <span class="list-info-text">{$addon.regdate}</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title">{$LANG.clientareahostingnextduedate}</span>
                                                <span class="list-info-text">{$addon.nextduedate}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    {if $addon.managementActions}
                                        <div class="panel-footer">
                                            {$addon.managementActions}
                                        </div>
                                    {/if}
                                </div>
                            </div>
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane " id="Changepw">
            <div class="section">
                <div class="section-header">
                    <h2 class="section-title">{$LANG.serverchangepassword}</h2>
                </div>
                <div class="section-body m-w-448">
                    {if $modulechangepwresult}
                        {if $modulechangepwresult == "success"}
                            {include file="$template/includes/alert.tpl" type="success" additionalClasses="alert-primary" msg=$modulechangepasswordmessage textcenter=true}
                        {elseif $modulechangepwresult == "error"}
                            {include file="$template/includes/alert.tpl" type="error" additionalClasses="alert-primary" msg=$modulechangepasswordmessage|strip_tags textcenter=true}
                        {/if}
                    {/if}
                    <script>
                        window.langPasswordStrength = "{$LANG.pwstrength}";
                        window.langPasswordWeak = "{$LANG.pwstrengthweak}";
                        window.langPasswordModerate = "{$LANG.pwstrengthmoderate}";
                        window.langPasswordStrong = "{$LANG.pwstrengthstrong}";
                        window.langPasswordTooShort = "{$rslang->trans('login.at_least_pass')}";
                        
                    </script>
                    <form class="using-password-strength" method="post" action="{$smarty.server.PHP_SELF}?action=productdetails#tabChangepw" role="form">
                        <div class="panel paneldefault panel-form">
                            <div class="panel-body">
                                <input type="hidden" name="id" value="{$id}" />
                                <input type="hidden" name="modulechangepassword" value="true" />
                                <div id="newPassword1" class="form-group">
                                    <label for="inputNewPassword1" class="control-label">{$LANG.newpassword}</label>
                                    <div class="input-password-strenght">
                                        <input type="password" class="form-control" id="inputNewPassword1" name="newpw" autocomplete="off" />
                                        <span class="text-small text-lighter"><span id="passwordStrengthTextLabel">{$rslang->trans('login.at_least_pass')}</span><i data-toggle="tooltip" title="{$LANG.passwordtips}" data-html="true" data-container="body" class="ls ls-info-circle"></i></span>
                                    </div>
                                    {include file="$template/includes/pwstrength.tpl"}
                                </div>
                                <div id="newPassword2" class="form-group m-b-0">
                                    <label for="inputNewPassword2" class="control-label">{$LANG.confirmnewpassword}</label>
                                    <input type="password" class="form-control" id="inputNewPassword2" name="confirmpw" autocomplete="off" />
                                    <div id="inputNewPassword2Msg"></div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <input class="btn btn-primary" type="submit" value="{$LANG.clientareasavechanges}" />
                                <input class="btn btn-default" type="reset" value="{$LANG.cancel}" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>

    <script>
        let assetsUrl = '{$WEB_ROOT}/templates/{$template}/assets/svg-illustrations/products/',
            activeStyle = '{$RSThemes.styles.iconType}',
            styleUrl = "";

        {literal}
            var hashtable = {};
            hashtable['<img src="assets/img/marketconnect/sitelock/'] = 'sitelock';
            hashtable['<img src="assets/img/marketconnect/weebly/'] = 'weebly';
            hashtable['<img src="assets/img/marketconnect/spamexperts/'] = 'spamexperts';
            hashtable['<img src="assets/img/marketconnect/codeguard/'] = 'codeguard'
            hashtable['<img src="assets/img/marketconnect/marketgoo/'] = 'marketgoo';
            hashtable['<img src="assets/img/marketconnect/sitebuilder/'] = 'sitebuilder';
            hashtable['<img src="assets/img/marketconnect/threesixtymonitoring/'] = 'threesixtymonitoring';
            hashtable['<img src="assets/img/marketconnect/xovinow/'] = 'xovinow';
            hashtable['<img src="assets/img/marketconnect/nordvpn/'] = 'nordvpn';
            hashtable['<img src="assets/img/marketconnect/ox/display-email'] = 'ox';
            function changeLogos() {
                $('#mc-promo-widgets .logo').each(function( index ) {
                    var banner = $(this);
                    $.each(hashtable, function( index, value ) {

                        if (banner.html().includes(index)){
                            if (activeStyle == "modern"){
                                styleUrl = "modern/"
                            }else{
                                styleUrl = ""
                            }
                            banner.html(banner.html().replace(index, ''));
                            banner.load(assetsUrl+styleUrl+value+'.tpl').removeClass('hidden');
                        }
                    });
                });
            };
            $(document).ready(function() {
                changeLogos();
            });
        {/literal}    
    </script>
{/if}
{if $product eq 'DNRC Lookup'}
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border">
                        <div class="card-header border-bottom">
                            <span class="">Phone Validation</span>
                            <span class="float-right">Real-time API Validation<span>
                        </div>
                        <div class="card-body">
                            <div class="form-section">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="authToken">Authorization Token</label>
                                        <input type="text" id="authToken" name="authToken" placeholder="Enter Authorization Token">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row align-items-center d-flex justify-content-between">
                                            <div class="col-md-6">
                                                <a href="#">Link to API Documentation</a>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-primary-outline btn-sm mt-2 float-right"><i class="fa fa-repeat"></i>Regenerate Token</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <!-- Batch Validations Card -->
                    <div class="card border">
                        <div class="card-header border-bottom">
                            <span>Batch Validations</span>
                            <button class="btn btn-sm btn-primary-outline float-right" onclick="downloadSampleFile()"><i class="fa fa-download"></i>Download Sample File</button>
                        </div>
                        <div class="card-body">
                            <div class="upload-section">
                            
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <label 
                                            data-bs-toggle="tooltip" 
                                            data-bs-placement="top" 
                                            title="• If unsure if a file was uploaded, contact support. Do NOT submit a file twice or you will be charged twice!&#10;• 1 MB limit on file size&#10;• Single column CSV file that contains email addresses&#10;• Column should not have a header"
                                            for="fileUpload">
                                            Browse or Drag and Drop
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="file" id="fileUpload" name="fileUpload">
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Submit Button -->
                                        <button class="btn btn-primary-outline btn-sm float-right" type="submit"><i class="fa fa-paper-plane"></i>Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <!-- Manual Validation Card -->
                    <div class="card border">
                        <div class="card-header border-bottom">
                            <strong>Manual Validation</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-section">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <label for="validationInput">Numbers for Validation </label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group mb-3">
                                            <!-- Textarea for multiple numbers separated by commas -->
                                            <textarea id="validationInput" oninput="updateRecipientsCount()" name="validationInput" class="form-control" placeholder="Enter numbers separated by , commas" aria-label="Enter numbers" rows="4" style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <small class="text-uppercase">
                                                    Total Number Of Recipients:<span class="number_of_recipients fw-bold text-success"></span>
                                                </small>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-primary-outline btn-sm rounded float-right"  type="button" onclick="showDummyJSON()" id="button-addon2"><i class="fa fa-paper-plane"></i>Check</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dummy JSON Response - Initially Hidden -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="col-md-12" id="jsonResponse" style="display:none; margin-top: 15px; font-family: monospace; background-color: #f8f9fa; padding: 10px; border-radius: 5px;">
                        <pre id="jsonOutput"></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <script>
        function downloadSampleFile() {
            // Create the sample file content
            const sampleContent = `email\nexample1@example.com\nexample2@example.com\nexample3@example.com`;

            // Create a blob object for the content
            const blob = new Blob([sampleContent], { type: 'text/csv' });

            // Create a temporary anchor element for downloading
            const a = document.createElement('a');
            a.href = URL.createObjectURL(blob);
            a.download = 'sample_file.csv'; // Set the download file name
            document.body.appendChild(a);

            // Trigger the download
            a.click();

            // Clean up the temporary anchor element
            document.body.removeChild(a);
        }

        function updateRecipientsCount() {
            // Get the input value
            const input = document.getElementById("validationInput").value.trim();

            // Split the input by commas, filter out empty values, and count valid numbers
            const numbers = input.split(',').filter(num => num.trim() !== "");

            // Update the count in the Total Number Of Recipients
            document.querySelector(".number_of_recipients").textContent = numbers.length;
        }
        var tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        function showDummyJSON() {
            // Get the input value (numbers separated by commas)
            const input = document.getElementById("validationInput").value.trim();
            
            // Split the input by commas and trim any extra spaces around the numbers
            const numbers = input.split(',').map(num => num.trim());

            // Initialize an array to hold the validation responses for each number
            const responses = numbers.map(num => {
                // Construct a dummy JSON response for each number
                return {
                    status: "success",
                    message: "Validation successful",
                    inputValue: num,
                    isValid: num.length >= 5 && num.length <= 10 && /^\d+$/.test(num)
                };
            });

            // Show the dummy JSON response for each number
            document.getElementById("jsonResponse").style.display = "block";
            document.getElementById("jsonOutput").textContent = JSON.stringify(responses, null, 2);
        }
       document.querySelector('.main-sidebar').remove();
    </script>
    <style>
        /* Customize tooltip appearance */
        .tooltip-inner {
            white-space: pre-line; /* Ensures line breaks are handled correctly */
        }
    </style>
{/if}

