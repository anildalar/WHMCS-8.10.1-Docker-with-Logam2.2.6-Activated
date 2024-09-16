<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:25:57
  from '/var/www/html/templates/lagom2/core/cms/sections/common/feature-cols.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e41335a098b3_21656973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d2780344476c217ef365bfd25b169fa2488fcb' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/feature-cols.tpl',
      1 => 1694186636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e41335a098b3_21656973 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/feature-cols.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/feature-cols.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['featureColsDesktop']->value == 1) {?>
        <?php $_smarty_tpl->_assignInScope('colDesktop', "col-xl-12");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsDesktop']->value == 2) {?>
        <?php $_smarty_tpl->_assignInScope('colDesktop', "col-xl-6");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsDesktop']->value == 3) {?>
        <?php $_smarty_tpl->_assignInScope('colDesktop', "col-xl-4");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsDesktop']->value == 4) {?>
        <?php $_smarty_tpl->_assignInScope('colDesktop', "col-xl-3");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsDesktop']->value == 5) {?>
        <?php $_smarty_tpl->_assignInScope('colDesktop', "col-xl5");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsDesktop']->value == 6) {?>
        <?php $_smarty_tpl->_assignInScope('colDesktop', "col-xl-2");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('colDesktop', "col-xl-4");?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['featureColsTabH']->value == 1) {?>
        <?php $_smarty_tpl->_assignInScope('colTabH', "col-lg-12");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabH']->value == 2) {?>
        <?php $_smarty_tpl->_assignInScope('colTabH', "col-lg-6");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabH']->value == 3) {?>
        <?php $_smarty_tpl->_assignInScope('colTabH', "col-lg-4");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabH']->value == 4) {?>
        <?php $_smarty_tpl->_assignInScope('colTabH', "col-lg-3");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabH']->value == 5) {?>
        <?php $_smarty_tpl->_assignInScope('colTabH', "col-lg5");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabH']->value == 6) {?>
        <?php $_smarty_tpl->_assignInScope('colTabH', "col-lg-2");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('colTabH', "col-lg-4");?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['featureColsTabV']->value == 1) {?>
        <?php $_smarty_tpl->_assignInScope('colTabV', "col-md-12");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabV']->value == 2) {?>
        <?php $_smarty_tpl->_assignInScope('colTabV', "col-md-6");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabV']->value == 3) {?>
        <?php $_smarty_tpl->_assignInScope('colTabV', "col-md-4");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabV']->value == 4) {?>
        <?php $_smarty_tpl->_assignInScope('colTabV', "col-md-3");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabV']->value == 5) {?>
        <?php $_smarty_tpl->_assignInScope('colTabV', "col-md5");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsTabV']->value == 6) {?>
        <?php $_smarty_tpl->_assignInScope('colTabV', "col-md-2");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('colTabV', "col-md-4");?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['featureColsMob']->value == 1) {?>
        <?php $_smarty_tpl->_assignInScope('colMob', "col-12");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsMob']->value == 2) {?>
        <?php $_smarty_tpl->_assignInScope('colMob', "col-6");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsMob']->value == 3) {?>
        <?php $_smarty_tpl->_assignInScope('colMob', "col-4");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsMob']->value == 4) {?>
        <?php $_smarty_tpl->_assignInScope('colMob', "col-3");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsMob']->value == 5) {?>
        <?php $_smarty_tpl->_assignInScope('colMob', "col5");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['featureColsMob']->value == 6) {?>
        <?php $_smarty_tpl->_assignInScope('colMob', "col-2");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('colMob', "col-4");?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('cols', array($_smarty_tpl->tpl_vars['colDesktop']->value,$_smarty_tpl->tpl_vars['colTabH']->value,$_smarty_tpl->tpl_vars['colTabV']->value,$_smarty_tpl->tpl_vars['colMob']->value) ,false ,2);
}?>    <?php }
}
