<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:53
  from '/var/www/html/templates/orderforms/lagom2/sidebar-categories-selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7c9698f51_72459386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b900605ed96d5b12b69806fadef4238c4088149' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/sidebar-categories-selector.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/overwrites/sidebar-categories-selector.tpl' => 1,
  ),
),false)) {
function content_66dff7c9698f51_72459386 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/sidebar-categories-selector.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/sidebar-categories-selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['panel']->value) {?>
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
            </h3>
        </div>
        <div class="panel-body">
            <form role="form">
                <select class="form-control" onchange="selectChangeNavigate(this)">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                        <option menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="list-group-item" <?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?>selected="selected"<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                            <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                                (<?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
)
                            <?php }?>
                        </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </form>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasFooterHtml()) {?>
            <div class="panel-footer">
                <?php echo $_smarty_tpl->tpl_vars['panel']->value->getFooterHtml();?>

            </div>
        <?php }?>
    <?php } else { ?>
        <div class="categories-sidebar">
            <div class="dropdown">
                <a href="#" data-toggle="dropdown" class="btn btn-default">
                    <?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['domain']->value == "register") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navregisterdomain'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferinadomain'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['gid']->value == "addons") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['gid']->value == "renewals") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewals'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['gid']->value == "service-renewals") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['renewService']['titleAltPlural'];?>

                    <?php }?> 
                    <i class="ls ls-caret"></i>
                </a>
                <ul class="dropdown-menu has-scroll">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondarySidebar']->value, 'panel');
$_smarty_tpl->tpl_vars['panel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['panel']->value->getName() != "Choose Currency") {?>
                            <li class="dropdown-title h6"><?php echo $_smarty_tpl->tpl_vars['panel']->value->getLabel();?>
</li>
                            <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['child']->value->getClass() != "active" && $_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                                    <li>
                                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="<?php if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>

                                        </a>
                                    </li>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    <?php }
}
}
}
