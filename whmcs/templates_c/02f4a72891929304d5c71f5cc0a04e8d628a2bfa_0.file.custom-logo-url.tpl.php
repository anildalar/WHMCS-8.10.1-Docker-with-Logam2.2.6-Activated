<?php
/* Smarty version 3.1.48, created on 2024-09-08 05:49:04
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/custom-logo-url.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dd3ad0888979_65212831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f4a72891929304d5c71f5cc0a04e8d628a2bfa' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/custom-logo-url.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66dd3ad0888979_65212831 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['custom_logo_url']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['custom_logo_url']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['custom_logo_url']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['custom_logo_url']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['custom_logo_url']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['custom_logo_url']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch" data-toggle="lu-collapse" data-target="#logo-url" aria-expanded="true">
                <input type="hidden" name="settings[show_logo_url]" value="0">
                <input class="switch__checkbox" name="settings[show_logo_url]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_logo_url']) {?> checked <?php }?>>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div>
    <div class="collapse <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_logo_url']) {?> show <?php }?>" id="logo-url">
        <div class="form-group m-b-0x p-3x">
            <label class="form-label text-default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['custom_logo_url']['label'];?>
</label>
            <input value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['logo_url'];?>
" class="form-control " type="text" name="settings[logo_url]">
        </div>
    </div>
</div><?php }
}
