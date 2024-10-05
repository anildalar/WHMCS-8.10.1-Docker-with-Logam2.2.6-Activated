<?php
/* Smarty version 3.1.48, created on 2024-10-02 10:13:07
  from '/var/www/html/templates/lagom2/clientareacancelrequest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd1cb3122f58_46941200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dddfe38583ea64ee415ce72f27e6f921fd08880f' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientareacancelrequest.tpl',
      1 => 1725455020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd1cb3122f58_46941200 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>	
	<?php if ($_smarty_tpl->tpl_vars['invalid']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['clientareacancelinvalid'],'textcenter'=>true), 0, true);
?>
		<p class="text-center">
			<a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareabacklink'];?>
</a>
		</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['requested']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['clientareacancelconfirmation'],'textcenter'=>true), 0, true);
?>
		<p class="text-center">
			<a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareabacklink'];?>
</a>
		</p>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>"<li>".((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareacancelreasonrequired'])."</li>"), 0, true);
?>
		<?php }?>
		<label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancelproduct'];?>
</label>
		<div class="well">
			<h4 class="m-b-0"><?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['productname']->value;?>
</h4>
			<?php if ($_smarty_tpl->tpl_vars['domain']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" class="text-small"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</a><?php }?>
		</div>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=cancel&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-stacked">
			<input type="hidden" name="sub" value="submit" />
			<div class="panel panel-default panel-form">
				<div class="panel-body">
					<div class="form-group">
						<label for="cancellationreason"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancelreason'];?>
</label>
						<textarea name="cancellationreason" id="cancellationreason" class="form-control" rows="6"></textarea>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['domainid']->value) {?>
						<label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancelrequestdomain'];?>
</label>
						<div class="well">
							<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['cancelrequestdomaindesc'],$_smarty_tpl->tpl_vars['domainnextduedate']->value,$_smarty_tpl->tpl_vars['domainprice']->value,$_smarty_tpl->tpl_vars['domainregperiod']->value ));?>
</p>
							<label class="checkbox">
								<input class="icheck-control" type="checkbox" name="canceldomain" id="canceldomain" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancelrequestdomainconfirm'];?>

							</label>
						</div>
					<?php }?>
					<div class="form-group">
						<label class="control-label" for="type"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancellationtype'];?>
</label>
						<select name="type" id="type" class="form-control">
                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideOptionImmediate'] != "1") {?>
                                <option value="Immediate"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancellationimmediate'];?>
</option>
                            <?php }?>
							<option value="End of Billing Period"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancellationendofbillingperiod'];?>
</option>
						</select>
					</div>
				</div>
				<div class="panel-footer">
					<button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancelrequestbutton'];?>
" class="btn btn-danger"><i class="ls ls-denial"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancelrequestbutton'];?>
</button>
					<a href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
</a>
				</div>
			</div>
		</form>
	<?php }
}
}
}
