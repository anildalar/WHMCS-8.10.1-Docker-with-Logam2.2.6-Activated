<?php
/* Smarty version 3.1.48, created on 2024-09-23 12:37:49
  from '/var/www/html/templates/lagom2/core/cms/sections/config/legal/legal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f1611d40cef7_46931750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4a323786480c42a93a5d3dfa52426d0c46fe971' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/legal/legal.tpl',
      1 => 1694186636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f1611d40cef7_46931750 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="site-section section-legal section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;
if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
	<div class="container">
		<div class="section-body">
			<?php if ($_smarty_tpl->tpl_vars['sidebar']->value) {?>
				<div class="section-sidebar">
					<ul class="nav nav-v nav-legal">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<li class="nav-item">
							<a 
								href="<?php if ($_smarty_tpl->tpl_vars['item']->value['custom_url']) {
if (substr($_smarty_tpl->tpl_vars['item']->value['custom_url'],0,1) == "/") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
}
echo $_smarty_tpl->tpl_vars['item']->value['custom_url'];
} elseif ($_smarty_tpl->tpl_vars['item']->value['whmcs_page']) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
if (substr($_smarty_tpl->tpl_vars['item']->value['url'],0,1) != "/") {?>/<?php }
echo $_smarty_tpl->tpl_vars['item']->value['url'];
}?>" 
								<?php if ($_smarty_tpl->tpl_vars['item']->value['target_blank'] == "1") {?>target="_blank"<?php }?> 
								class="nav-link<?php if ($_smarty_tpl->tpl_vars['item']->value['custom_classes']) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['custom_classes'];
}?>">
								<?php if ($_smarty_tpl->tpl_vars['item']->value['show_icon'] == "1") {?>	
									<i class="<?php echo $_smarty_tpl->tpl_vars['item']->value['font-icon'];?>
"></i>
								<?php }?>
								<span><?php echo $_smarty_tpl->tpl_vars['item']->value['link_text'];?>
</span>
							</a>
						</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>
			<div class="section-content">
				<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['main_content']->value, ENT_QUOTES);?>

			</div>
		</div>
	</div>
</div><?php }
}
