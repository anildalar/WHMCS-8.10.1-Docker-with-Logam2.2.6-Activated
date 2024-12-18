{if isset($supportpalPages) && $supportpalPages['support-departments'] == "boxes"}
	{include file="templates/supportpal/supportticketsubmit-stepone-boxed.tpl" icon="ticket"}
{else}
	<div class="section">
		<div class="section-header">
			<p class="section-desc">
				{$LANG.supportticketsheader}
			</p>
		</div>
		<div class="section-body">
			{if $data}
				<div class="list-group ticket-departments">
					{section name=department loop=$data}
						<a class="list-group-item has-icon" href="{$smarty.server.PHP_SELF}?step=2&amp;deptid={$data[department].id|escape}">
							<i class="list-group-item-icon lm lm-envelope"></i>
							<div class="list-group-item-body">
								<div class="list-group-item-heading">
									{$data[department].name|escape}
								</div>
								{if $data[department].description}
									<p class="list-group-item-text">{$data[department].description|escape}</p>
								{/if}
							</div>
						</a>
					{sectionelse}
						{$LANG2.no_departments}
					{/section}
				</div>
			{else}
				<div class="message message-no-data">
					<div class="message-image">
						{include file="$template/includes/common/svg-icon.tpl" icon="ticket"}
					</div>
					<h6 class="message-title">{$LANG.nosupportdepartments}</h6>
				</div>
			{/if}
			{* {if !$primarySidebar->hasChildren() && !$secondarySidebar->hasChildren()}</div>{/if} *}
		</div>
	</div>
{/if}