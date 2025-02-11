<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:24:25
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/subsection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b1999c0597_52908080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3c98bdf5b6c0b649bbd6b35558aa9161a7b6766' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/subsection.tpl',
      1 => 1734354616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6784b1999c0597_52908080 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['sectionKey']->value != 0) {?>
            </div>
        </div>
    </div>
</div>
<?php }?>
<div class="widget__section section flex-1 <?php if ($_smarty_tpl->tpl_vars['sectionKey']->value == 0) {?>m-t-0x<?php }?>">
    <div class="section__header top <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['collapse'])) && $_smarty_tpl->tpl_vars['sectionField']->value['collapse']) {?>collapsed" data-toggle="lu-collapse" data-target="#<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionKey']->value;
}?>">
        <h6 class="top__title"><?php echo $_smarty_tpl->tpl_vars['sectionField']->value['label'];?>
</h6>
        <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['collapse'])) && $_smarty_tpl->tpl_vars['sectionField']->value['collapse']) {?>
            <button type="button" class="top__toolbar btn btn--link">
                <span class="btn__text">Expand</span>
                <span class="btn__text">Hide</span>
                <i class="btn__icon ls ls-down"></i>
            </button>
        <?php }?>
    </div>
    <div class="section__content <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['collapse'])) && $_smarty_tpl->tpl_vars['sectionField']->value['collapse']) {?>collapse<?php }?>"  <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['collapse'])) && $_smarty_tpl->tpl_vars['sectionField']->value['collapse']) {?>id="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionKey']->value;?>
"<?php }?>>
        <div class="well">
            <div class="row">
   <?php }
}
