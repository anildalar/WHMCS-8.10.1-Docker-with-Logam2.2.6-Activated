<div class="section">
	<div class="section-header">
		<p class="section-desc">
			{$LANG.supportticketsheader}
		</p>
	</div>
	<div class="section-body">
		{if $data}
			<div class="row row-eq-height">
					{section name=department loop=$data}
						<div class="col-md-4">
							<a class="panel panel-default panel-support panel-department-box" href="{$smarty.server.PHP_SELF}?step=2&amp;deptid={$data[department].id|escape}">
								<div class="panel-body">
									<h5 class="support-title">
										<i class="list-group-item-icon lm lm-envelope"></i>
										{$data[department].name|escape}
									</h5>
									{if $data[department].description}
										<p class="support-desc">{$data[department].description|escape}</p>
									{/if}	
								</div>
							
								<div class="panel-footer">
									<span class="btn btn-sm btn-primary-faded btn-block">{$LANG.navopenticket}</span>
								</div>
							</a>
						</div>
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

