<?php
/* Smarty version 3.1.48, created on 2025-03-04 13:30:26
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/includes/page-template-widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c700724ce409_00753557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9b72e07c206aced312a7721a8d3907c50e236c' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/includes/page-template-widget.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c700724ce409_00753557 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-inline-block m-r-2x">
    <div class="widget widget--checkbox widget--page-template <?php if ($_smarty_tpl->tpl_vars['selectedLayout']->value == $_smarty_tpl->tpl_vars['layoutName']->value) {?>is-active<?php }?>" data-input>
        <input class="hidden" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['pageName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layoutName']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['selectedLayout']->value == $_smarty_tpl->tpl_vars['layoutName']->value) {?> checked <?php }?>/>
        <div class="widget__header">
            <div class="widget__media widget__media--lg">
                <img src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->img($_smarty_tpl->tpl_vars['layoutPreview']->value);?>
">
            </div>
            <div class="widget__checkbox">
                <img src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->img('widgets/checkbox.svg');?>
" alt="">
            </div>
        </div>
        <div class="widget__actions widget__actions--raised flex flex-items-xs-between">
            <div>
                <strong><?php echo $_smarty_tpl->tpl_vars['layoutLabel']->value;?>
</strong>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['selectedLayout']->value == $_smarty_tpl->tpl_vars['layoutName']->value) {?>
                <label class="label label--success label--outline">Active</label>
            <?php } else { ?>
                <label class="label label--default label--outline">Activate</label>
            <?php }?>
        </div>
    </div>
</div><?php }
}
