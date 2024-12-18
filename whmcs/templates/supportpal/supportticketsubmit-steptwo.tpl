<link rel="stylesheet" type="text/css" media="screen" href="templates/supportpal/dist/viewticket.css" />

{if isset($submit_status) && $submit_status == 0}
    {include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false msg=$LANG.genericerror.title}
{/if}

<form id="submitticket" method="post" action="{$smarty.server.PHP_SELF}?step=2&deptid={$department.id|escape}&submit=1" enctype="multipart/form-data" role="form">
    <input type="hidden" name="deptid" value="{$department.id|escape}" />
    <div class="section">
        <div class="section-header">
            <h2 class="section-title">{$LANG.ticketinfo}</h2>
        </div>
        <div class="section-body">
            <div class="panel panel-default panel-form">
				<div class="panel-body">
                    <div class="row">       
                        <div class="form-group col-sm-6">
                            <label for="inputDepartment">{$LANG.supportticketsdepartment}</label>
                            <select name="hidden_deptid" class="form-control" disabled="disabled">
                                <option value="{$department.id|escape}" selected="selected">
                                    {$department.name|escape}
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="inputPriority">{$LANG.supportticketsticketurgency}</label>
                            <select name="urgency" id="inputPriority" class="form-control">
                                {section name=priority loop=$priorities}
                                    <option value="{$priorities[priority].id}" {if $priorities[priority].id eq $priority}selected="selected"{/if}>{$priorities[priority].name|escape}</option>
                                {/section}
                            </select>
                        </div>
                    </div>
                    {if $customfields|@count > 0}
                        <div id="customFieldsBox">
                            {include file='supportpal/customfields.tpl'}
                        </div>
                    {/if}
				</div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="section-header">
            <h2 class="section-title">{$LANG.contactmessage}</h2>
        </div>
        <div class="section-body">
            <div class="panel panel-default panel-form">
                <div class="panel-body">   
                    <div class="form-group">
                        <label for="inputSubject">{$LANG.supportticketsticketsubject}</label>
                        <input type="text" name="subject" id="inputSubject" value="{$subject|escape}" class="form-control" />
                    </div>    
                    <label for="inputMessage">{$LANG.contactmessage}</label>
                    <textarea name="message" id="inputMessage" rows="12" class="form-control">{$message|escape}</textarea>
                    <div class="row m-b-0 m-t-2x">
                        <label class="col-sm-12">{$LANG2.ticket_cc}</label>
                        <div class="col-sm-9">
                            {if $cc}
                                {foreach from=$cc item=email name=cc}
                                    <input type="text" name="cc[]" value="{$email|escape}" class="form-control"
                                        {if !$smarty.foreach.cc.first}style="margin-top: 8px;"{/if} />
                                {/foreach}
                            {else}
                                <input type="text" name="cc[]" class="form-control" />
                            {/if}
                            <div id="ccContainer"></div>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-info btn-block mob-m-t-16" id="sp-extra-cc">
                                <i class="ls ls-plus"></i> {$LANG.addmore}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="section">
        <div class="section-header">
            <h2 class="section-title">{$LANG.supportticketsticketattachments}</h2>
        </div>
        <div class="section-body">
            <div class="panel panel-default panel-form">
                <div class="panel-body">
					<div class="row m-b-0">        
                        <div class="col-sm-9">
                            <div class="file-input form-control">
                                <input type="file" name="attachments[]" id="inputAttachments" class="form-control" />
                                 <span class="file-input-button btn btn-default">{$rslang->trans('support.select_file')}</span>
                                 <span class="file-input-text text-light">{$LANG.no_file_selected}</span>
                            </div>
                            <div id="fileUploadsContainer"></div>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-info btn-block add-extra-attachement" data-nofiletext="{$rslang->trans('support.no_file_selected')}" data-selectfiletext="{$rslang->trans('support.select_file')}" data-removetext="{$LANG.orderForm.remove}">
                                <i class="ls ls-plus"></i> {$LANG.addmore}
                            </button>
                        </div>
                    </div>
                    <p class="ticket-attachments-message">
                        {$LANG.supportticketsallowedextensions}: {$settings.allowed_files|replace:'|':', '|escape}
                    </p>
                </div>
			</div>
		</div>
	</div>
    <div id="autoAnswerSuggestions" class="section hidden" data-is-enabled="{$article_suggestions|escape}">
        <div class="section-header">
            <h2 class="section-title">{$LANG.kbsuggestions}</h2>
            <p class="section-desc">{$LANG.kbsuggestionsexplanation}</p>
        </div>

        <div class="section-body kbarticles">
            <div class="list-group sp-articles">
                {foreach from=$kbarticles item=kbarticle}
                    <a class="list-group-item has-icon" href="knowledgebase.php?id={$kbarticle.id|escape}" target="_blank">
                        <i class="list-group-item-icon ls ls-document"></i>
                        <div class="list-group-item-body">
                            <div class="list-group-item-heading">
                                {$kbarticle.title|escape}
                            </div>
                            <p class="list-group-item-text">{$kbarticle.article|escape}...</p>
                        </div>
                    </a> 
                {/foreach}
            </div>
        </div>

    </div>
    {if isset($submit_status) && $submit_status == -1}
        {include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false msg=$LANG2.tickets_captchaError}
    {/if}
    {if isset($upload_error) && $upload_error == 1}
        {include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false msg=$LANG2.tickets_uploads_error}
    {/if}
    {include file='supportpal/recaptcha.tpl'}
    <div class="form-actions">
        <button type="submit" class="btn btn-primary btn-block">
            <i class="ls ls-check"></i>
            {$LANG.supportticketsticketsubmit}
        </button>
    </div>
</form>

