<?php
/* Smarty version 3.1.48, created on 2024-09-24 07:11:45
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/lagomsmall.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f266310ff846_73233664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a92244e4d58a1e02138a99c40478eafbc6c7697' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/lagomsmall.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../includes/media/no-data.tpl' => 1,
  ),
),false)) {
function content_66f266310ff846_73233664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconLocation', "./../../../assets/svg-icons");
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value['lagomSmall'], 'lagomSmallIcon');
$_smarty_tpl->tpl_vars['lagomSmallIcon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lagomSmallIcon']->value) {
$_smarty_tpl->tpl_vars['lagomSmallIcon']->do_else = false;
?>
    <label class="media__item" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['name'];?>
" data-media-item="<?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['class'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['searchTerms'], 'searchTerm');
$_smarty_tpl->tpl_vars['searchTerm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['searchTerm']->value) {
$_smarty_tpl->tpl_vars['searchTerm']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['searchTerm']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
        <div class="media__item-icon">
            <i class="<?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['class'];?>
"></i>
        </div>
        <input class="media__item-input lagom-icon" type="radio" name="item[font-icon]" value="<?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['class'];?>
">
        <span class="media__item-border"></span>
        <span class="media__item-label"></span>
    </label>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:./../includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
