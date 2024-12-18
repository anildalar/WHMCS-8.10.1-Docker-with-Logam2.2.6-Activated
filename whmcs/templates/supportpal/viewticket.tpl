<link rel="stylesheet" type="text/css" media="screen" href="templates/supportpal/dist/viewticket.css" />
{if $ticketError}
    {include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false msg=$LANG.supportticketinvalid}
{else}
	<div class="main-sidebar {if $sidebarOnRight || $RSThemes['layouts']['name'] == 'left-nav-wide'} main-sidebar-right{/if}">		
		{if $RSThemes['addonSettings']['sticky_sidebars'] == "true"}<div class="sidebar-sticky">{/if}
			<div class="sidebar sidebar-primary">
				<div menuitemname="Ticket Information" class="panel panel-sidebar panel-styled-group panel-ticket-information">
					<div class="panel-heading">
						<h3 class="panel-title">{$LANG.ticketinfo}</h3>
					</div>
					<div class="list-group">
						<div menuitemname="Ticket ID" class="list-group-item ticket-details-children" id="Primary_Sidebar-Ticket_ID">
							<span class="title">{$LANG.supportticketsticketid}</span>
							<br><strong>#{$data.number|escape}</strong>
						</div>
						<div menuitemname="Department" class="list-group-item ticket-details-children" id="Primary_Sidebar-Ticket_Information-Department">
							<span class="title">{$LANG.supportticketsstatus}</span>
							<br>{if $data.status.colour}<span style="color: {$data.status.colour|escape};">{/if}{$data.status.name|escape}{if $data.status.colour}</span>{/if}
						</div>
						<div menuitemname="Department" class="list-group-item ticket-details-children" id="Primary_Sidebar-Ticket_Information-Department">
							<span class="title">{$LANG.supportticketsdepartment}</span>
							<br>{$data.department.name|escape}
						</div>
						<div menuitemname="Date Opened" class="list-group-item ticket-details-children" id="Primary_Sidebar-Ticket_Information-Date_Opened">
							<span class="title">{$LANG.supportticketsticketurgency}</span>
							<br>{if $data.priority.colour}<span style="color: {$data.priority.colour|escape};">{/if}{$data.priority.name|escape}{if $data.priority.colour}</span>{/if}
						</div>
						<div menuitemname="Last Updated" class="list-group-item ticket-details-children" id="Primary_Sidebar-Ticket_Information-Last_Updated">
							<span class="title">{$LANG.supportticketsubmitted}</span>
							<br>{$data.created_at|escape}
						</div>
						<div menuitemname="Priority" class="list-group-item ticket-details-children" id="Primary_Sidebar-Ticket_Information-Priority">
							<span class="title">{$LANG.supportticketsticketlastupdated}</span>
							<br>{$data.updated_at|escape}
						</div>
					</div>
					<div class="panel-footer clearfix">
						<div class="row">
							<div class="col-6 col-xs-6 col-button-left">
								<button class="btn btn-success btn-sm btn-block" onclick="jQuery('#ticketReply').click()">
									<i class="fa fa-pencil"></i> {$LANG.supportticketsreply} </button>
							</div>
							<div class="col-6 col-xs-6 col-button-right">
								{if $smarty.get.user_closed == '1' || $smarty.get.user_closed == '0' || ($data.status.id == $settings.default_resolved_status && $data.locked == 0) || $data.locked == 1}						
								{else}
								<a class="btn btn-danger btn-sm btn-block" href="?number={$data.number|escape}&amp;token={$data.token|escape}&amp;close=1"><i class="fa fa-times"></i> Close</a>
								{/if}
							</div>
						</div>
					</div>
				</div>
			</div>
		{if $RSThemes['addonSettings']['sticky_sidebars'] == "true"}</div>{/if}
	</div>
	<div class="main-content">			
		{if $smarty.get.reply_posted == '1'}
			{include file="$template/includes/alert.tpl" type="success" textcenter=true hide=false msg=$LANG2.reply_posted}
		{elseif $smarty.get.reply_posted == '0'}
			{include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false msg=$LANG2.reply_posted_error}
		{/if}
		{if $smarty.get.saved_fields == '1'}
			{include file="$template/includes/alert.tpl" type="success" textcenter=true hide=false msg=$LANG2.fields_saved}
		{elseif $smarty.get.saved_fields == '0'}
			{include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false msg=$LANG2.fields_saved_error}
		{/if}

		{if $smarty.get.user_closed == '1'}
			{include file="$template/includes/alert.tpl" type="success" textcenter=true hide=false msg=$LANG2.user_closed}
		{elseif $smarty.get.user_closed == '0'}
			{include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false msg=$LANG2.user_closed_error}
		{elseif $data.status.id == $settings.default_resolved_status && $data.locked == 0}
			<!-- Closed ticket -->
			{include file="$template/includes/alert.tpl" type="success" textcenter=true hide=false msg=$LANG.supportticketclosedmsg}
		{elseif $data.locked == 1}
			<!-- Locked ticket -->
			{include file="$template/includes/alert.tpl" type="warning" textcenter=true hide=false msg=$LANG2.tickets_locked}
		
		{/if}
		{if !$data.locked}
			<div class="panel panel-default panel-ticket-reply panel-collapsable hidden-print">
				<div id="ticketReply" class="panel-heading" data-toggle="collapse" data-target="#ticketReplyBox" aria-expanded="true" aria-controls="ticketReplyBox">
					<div class="collapse-icon pull-right">
						<i class="ls ls-caret plus"></i>
					</div>
					<h4 class="panel-title">
						<i class="lm lm-pen"></i> &nbsp; {$LANG.supportticketsreply}
					</h4>
				</div>
				<div class="{if !$postingReply} collapse{/if}" id="ticketReplyBox"  aria-labelledby="ticketReply">
					<div class="panel-body">
						<form method="post" action="?number={$data.number|escape}&amp;token={$data.token|escape}" enctype="multipart/form-data" role="form" id="frmReply">
							<input type="hidden" name="reply" value="1" />
							<div class="form-group">
								<label for="inputMessage">{$LANG.contactmessage}</label>
								<textarea name="replymessage" id="inputMessage" rows="12" class="form-control">{$replymessage}</textarea>
							</div>
							<div class="row form-group">
								<div class="col-12">
									<label for="inputAttachments">{$LANG.supportticketsticketattachments}</label>
								</div>
								<div class="col-sm-9">
									<div class="file-input form-control">
										<input type="file" name="attachments[]" id="inputAttachments" class="form-control">
										<span class="file-input-button btn btn-default">
											{$rslang->trans('support.select_file')}
										</span>
										<span class="file-input-text text-light">{$rslang->trans('support.no_file_selected')}</span>
									</div>
									<div id="fileUploadsContainer"></div>
								</div>
								<div class="col-sm-3">
									<button type="button" class="btn btn-primary-faded btn-block add-extra-attachement" data-nofiletext="{$rslang->trans('support.no_file_selected')}" data-selectfiletext="{$rslang->trans('support.select_file')}" data-removetext="{$LANG.orderForm.remove}">
										<i class="ls ls-plus"></i>{$LANG.addmore}
									</button>
								</div>
								<div class="col-12">
									<div class="ticket-attachments-message"> {$LANG.supportticketsallowedextensions}: {$settings.allowed_files|escape} </div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-12">
									<label for="inputAttachments">{$LANG2.ticket_cc}</label>
								</div>
								<div class="col-sm-9">
									{if $data.cc}
										{foreach from=$data.cc item=email name=cc}
											<input type="text" name="cc[]" value="{$email|escape}" class="form-control"
												{if !$smarty.foreach.cc.first}style="margin-top: 8px;"{/if} />
										{/foreach}
									{else}
										<input type="text" name="cc[]" class="form-control" />
									{/if}
									<div id="ccContainer"></div>
								</div>
								<div class="col-sm-3">
									<button type="button" class="btn btn-primary-faded btn-block" id="sp-extra-cc">
										<i class="ls ls-plus"></i> {$LANG.addmore}
									</button>
								</div>
							</div>
							<div class="form-actions">
								<input class="btn btn-primary" type="submit" name="save" value="{$LANG.supportticketsticketsubmit}" />
								<input class="btn btn-default" type="reset" value="{$LANG.cancel}" onclick="jQuery('#ticketReply').click()" />
							</div>
						</form>
					</div>
				</div>
			</div>
		{/if}
		{if $customfields|@count > 0}
			<div class="panel panel-default panel-ticket-reply panel-collapsable hidden-print panel-ticket-information">
				<div id="customFields" class="panel-heading" data-toggle="collapse" data-target="#customFieldsBox" aria-expanded="true" aria-controls="customFieldsBox">
					<div class="collapse-icon pull-right">
						<i class="ls ls-caret plus"></i>
					</div>
					<h4 class="panel-title">
						<i class="ls ls-addon"></i>
						&nbsp; {$LANG.customfield}
					</h4>
				</div>
				<div class="{if !$postingReply} collapse{/if}" id="customFieldsBox"  aria-labelledby="customFields">
					<div class="panel-body">
						{if $data.status.id != $settings.default_resolved_status && $data.locked == 0}
							<form name="tcf" id="tcf" method="POST">
						{/if}
						{include file='templates/supportpal/customfields.tpl'}
						{if $data.status.id != $settings.default_resolved_status && $data.locked == 0}
								<div class="form-actions">
									<input type="hidden" name="update_fields" value="1" />
									<input type="submit" value="{$LANG.clientareasavechanges}" class="btn btn-primary" />
									<input class="btn btn-default" type="reset" value="{$LANG.cancel}" onclick="jQuery('#customFields').click()" />
								</div>
							</form>
						{/if}
					</div>
				</div>
			</div>
		{/if}
		{if !isset($viewTicketSorting->sorting) || (isset($viewTicketSorting->sorting) && $viewTicketSorting->sorting == "desc")}
			{$sorting = 1}
		{else}
			{$sorting = -1}
		{/if}
		{section loop=$messages name=index step=$sorting}
			{if $messages[index].type == 0}
				<div class="ticket-reply{if $messages[index].by == 0} staff{/if}">
					<div class="ticket-reply-top">
						{if $RSThemes.addonSettings.show_gravatar_image == 'displayed'}
							<div class="client-avatar client-avatar-sm">
								<img src="https://www.gravatar.com/avatar/{$messages[index].user.email|md5}" alt="Avatar">
								{* TODO: Sprawdzać które logo ma być wyświetlane na jakim tle? *}
								{if $messages[index].by == 0 && $RSThemes.logoSquareInverse}
									<div class="staff-reply">
										<a href="{if $lagom_logo_url}{$lagom_logo_url}{else}{$WEB_ROOT}/index.php{/if}" class="logo"><img src="{$WEB_ROOT}{$RSThemes.logoSquareInverse}" alt="{$companyname}"/></a>
									</div>
								{/if}
							</div>
						{/if}
						<div class="user">
							<div class="user-info">
								<span class="name">
									{if $RSThemes.addonSettings.show_gravatar_image == 'hidden'}
										<i class="ls ls-user"></i>
									{/if}
									{$messages[index].user.formatted_name|escape}
								</span>
								 <span class="type">
									<span class="float-md-right">
										{if $messages[index].by == 0}
											{$LANG.supportticketsstaff}
										{else}
											{$LANG.supportticketsclient}
										{/if}
									</span>
								</span>
							</div>
							<div class="date">
								{$messages[index].created_at|escape}
							</div>
						</div>
					</div>
					<div class="ticket-reply-message">
						{$messages[index].purified_text}
					</div>
					{if count($messages[index].attachments) gt 0}
						<div class="ticket-reply-attachments">
							<strong>{$LANG.supportticketsticketattachments} ({$messages[index].attachments|count})</strong>
							<ul>
								{foreach from=$messages[index].attachments item=attachment}
									<li>
										<a href="?number={$data.number|escape}&amp;token={$data.token|escape}&amp;download_file={$attachment.id|escape}">
											<i class="lm lm-document"></i>
											<div class="attachment-container">
												<span class="attachment-name">{$attachment.original_name|escape}</span>
												<span class="attachment-extension">({$attachment.upload.size|escape})</span>
											</div>
										</a>
									</li>
								{/foreach}
							</ul>
						</div>
					{/if}
				</div>
			{/if}
		{/section}	
	</div>
	
{/if}

