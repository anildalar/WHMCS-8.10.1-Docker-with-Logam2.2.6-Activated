<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:28:14
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/tabs_media.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b27eed0950_20941578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bee2a10a6d3571665a3902d32c03a028bd84e0a' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/tabs_media.tpl',
      1 => 1730150160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../includes/media/no-data.tpl' => 1,
  ),
),false)) {
function content_6784b27eed0950_20941578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconLocation', "./../../../assets/svg-icons");
$_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['template']->value->getMainName())."/assets/svg-icon");
$_smarty_tpl->_assignInScope('ilustrationPath', "./../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['template']->value->getMainName())."/assets/svg-illustrations");
$_smarty_tpl->_assignInScope('imagesPath', ((string)$_smarty_tpl->tpl_vars['whmcsURL']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['template']->value->getMainName())."/assets/img");
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['media']->value, 'media_img');
$_smarty_tpl->tpl_vars['media_img']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['media_img']->value) {
$_smarty_tpl->tpl_vars['media_img']->do_else = false;
?>
    <label class="media__item media__item--lg" data-media-item="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
                            <?php if ($_smarty_tpl->tpl_vars['media_img']->value['type'] == 'custom') {?>
                <div class="media__item-icon">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagesPath']->value;?>
/page-manager/<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
                </div>
                <input class="media__item-input media-icon" type="radio" name="item[media]" value="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['media_img']->value['type'] == 'default') {?>
                <div class="media__item-icon">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagesPath']->value;?>
/page-manager/default/<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
                </div>
                <input class="media__item-input media-icon" type="radio" name="item[media]" value="default/<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
            <?php }?>
            <span class="media__item-border"></span>
            <span class="media__item-label"></span>
                        </label>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:./../includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
