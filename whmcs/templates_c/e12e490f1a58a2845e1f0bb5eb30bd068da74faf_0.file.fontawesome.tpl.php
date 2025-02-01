<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:44:58
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/fontawesome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b66af1c352_18787195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e12e490f1a58a2845e1f0bb5eb30bd068da74faf' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/fontawesome.tpl',
      1 => 1730150160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../includes/media/no-data.tpl' => 1,
  ),
),false)) {
function content_6784b66af1c352_18787195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconLocation', "./../../../assets/svg-icons");
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value['fontAwesome'], 'fontAwesomeIcon');
$_smarty_tpl->tpl_vars['fontAwesomeIcon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value) {
$_smarty_tpl->tpl_vars['fontAwesomeIcon']->do_else = false;
?>
    <label class="media__item" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['name'];?>
" data-media-item="<?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['class'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['searchTerms'], 'searchTerm');
$_smarty_tpl->tpl_vars['searchTerm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['searchTerm']->value) {
$_smarty_tpl->tpl_vars['searchTerm']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['searchTerm']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
        <div class="media__item-icon">
            <i class="<?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['class'];?>
"></i>
        </div>
        <input class="media__item-input lagom-icon" type="radio" name="item[font-icon]" value="<?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['class'];?>
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
