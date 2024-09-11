<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:30:09
  from '/var/www/html/templates/six/includes/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff581853083_17664777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb5c41e9762edea8efc1280d1d4905126b1f3ca9' => 
    array (
      0 => '/var/www/html/templates/six/includes/navbar.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff581853083_17664777 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" class="<?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>dropdown<?php }
if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
        <a <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>class="dropdown-toggle" data-toggle="dropdown" href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getUri();?>
"<?php }
if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribute('target');?>
"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>&nbsp;<?php }?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getBadge();?>
</span><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>&nbsp;<b class="caret"></b><?php }?>
        </a>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
            <ul class="dropdown-menu">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem');
$_smarty_tpl->tpl_vars['childItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->do_else = false;
?>
                <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
"<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
"<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target');?>
"<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span><?php }?>
                    </a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
