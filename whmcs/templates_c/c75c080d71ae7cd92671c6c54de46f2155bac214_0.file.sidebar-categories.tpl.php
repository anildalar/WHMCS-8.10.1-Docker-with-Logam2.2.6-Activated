<?php
/* Smarty version 3.1.48, created on 2024-09-28 11:42:56
  from '/var/www/html/templates/orderforms/lagom2/sidebar-categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7ebc0b444e3_41333680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c75c080d71ae7cd92671c6c54de46f2155bac214' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/sidebar-categories.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/overwrites/sidebar-categories.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories-selector.tpl' => 1,
  ),
),false)) {
function content_66f7ebc0b444e3_41333680 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/sidebar-categories.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondarySidebar']->value, 'panel');
$_smarty_tpl->tpl_vars['panel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->do_else = false;
?>
        <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" class="panel <?php if ($_smarty_tpl->tpl_vars['panel']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['panel']->value->getClass();
} else { ?>panel-sidebar<?php }
if ($_smarty_tpl->tpl_vars['panel']->value->getExtra('mobileSelect') && $_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?> hidden-sm hidden-xs<?php }?>"<?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasIcon()) {?>
                        <i class="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getIcon();?>
"></i>&nbsp;
                    <?php }?>

                    <?php echo $_smarty_tpl->tpl_vars['panel']->value->getLabel();?>


                    <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBadge()) {?>
                        &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['panel']->value->getBadge();?>
</span>
                    <?php }?>

                    <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                </h3>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBodyHtml()) {?>
                <div class="panel-body">
                    <?php echo $_smarty_tpl->tpl_vars['panel']->value->getBodyHtml();?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                <div class="list-group<?php if ($_smarty_tpl->tpl_vars['panel']->value->getChildrenAttribute('class')) {?> <?php echo $_smarty_tpl->tpl_vars['panel']->value->getChildrenAttribute('class');
}?>">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                            <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                                <?php if ($_smarty_tpl->tpl_vars['child']->value->hasIcon()) {?>
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['child']->value->getIcon();?>
"></i>&nbsp;
                                <?php } elseif (strstr($_smarty_tpl->tpl_vars['child']->value->getLabel(),"VPS") || strstr($_smarty_tpl->tpl_vars['child']->value->getLabel(),"Dedicated") || strstr($_smarty_tpl->tpl_vars['child']->value->getLabel(),"Hosting")) {?>
                                    <i class="ls ls-hosting"></i>
                                <?php } elseif (strstr($_smarty_tpl->tpl_vars['child']->value->getLabel(),"SSL")) {?>
                                    <i class="ls ls-shield"></i>
                                <?php } elseif (strstr($_smarty_tpl->tpl_vars['child']->value->getLabel(),"Product Addons")) {?>
                                    <i class="ls ls-addon"></i>
                                <?php } else { ?>
                                    <i class="ls ls-box"></i>
                                <?php }?>

                                <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                                <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                                    &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
</span>
                                <?php }?>
                            </a>
                        <?php } else { ?>
                            <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                                <?php if ($_smarty_tpl->tpl_vars['child']->value->hasIcon()) {?>
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['child']->value->getIcon();?>
"></i>&nbsp;
                                <?php }?>

                                <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                                <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                                    &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
</span>
                                <?php }?>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasFooterHtml()) {?>
                <div class="panel-footer clearfix">
                    <?php echo $_smarty_tpl->tpl_vars['panel']->value->getFooterHtml();?>

                </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['panel']->value->getExtra('mobileSelect') && $_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                        <div class="panel hidden-lg hidden-md <?php if ($_smarty_tpl->tpl_vars['panel']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['panel']->value->getClass();
} else { ?>panel-default<?php }?>"<?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories-selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        <?php }?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
