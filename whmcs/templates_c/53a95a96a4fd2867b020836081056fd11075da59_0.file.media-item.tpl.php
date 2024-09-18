<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:21:37
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/section/media-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea63616ced95_60876573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53a95a96a4fd2867b020836081056fd11075da59' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/section/media-item.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea63616ced95_60876573 (Smarty_Internal_Template $_smarty_tpl) {
?><label class="media__item media__item--thumb <?php if ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value == "predefined") {?>media__item--horizontal<?php }
if ((isset($_smarty_tpl->tpl_vars['comingsoon']->value)) && $_smarty_tpl->tpl_vars['comingsoon']->value) {?>media__item--comingsoon<?php }?>" data-media-item="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <div class="media__item-icon" data-label="Soon">
        <?php if ((isset($_smarty_tpl->tpl_vars['thumb']->value)) && $_smarty_tpl->tpl_vars['thumb']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/core/cms/sections/config/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
        <?php } else { ?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->img('placeholders/placeholder.png');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
        <?php }?>
    </div>
    <input class="media__item-input media-icon" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['inputName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['checked']->value)) && $_smarty_tpl->tpl_vars['checked']->value) {?>checked<?php }?>>          
    <span class="media__item-border"></span>
    <span class="media__item-label"></span>
    <div class="media__item-footer">
        <span class="media__item-name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
        <?php if ((isset($_smarty_tpl->tpl_vars['originalName']->value)) && $_smarty_tpl->tpl_vars['originalName']->value) {?>
            <span class="media__item-type"><?php echo $_smarty_tpl->tpl_vars['originalName']->value;?>
</span>
        <?php }?>    
    </div>                             
</label><?php }
}
