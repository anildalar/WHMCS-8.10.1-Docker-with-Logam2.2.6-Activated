<?php
/* Smarty version 3.1.48, created on 2024-10-07 05:14:22
  from '/var/www/html/modules/servers/HetznerVps/app/UI/Home/Templates/pages/controlPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67036e2e27ff66_16589547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6442af00a1775f61ea5820d0985dea0fab707d66' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/app/UI/Home/Templates/pages/controlPanel.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67036e2e27ff66_16589547 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="h4 lu-m-b-3x lu-m-t-3x"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('serverCA','home','manageHeader');?>
</div>
<div class="lu-tiles lu-row lu-row--eq-height">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getButtons(), 'dataElement', false, 'setting');
$_smarty_tpl->tpl_vars['dataElement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value => $_smarty_tpl->tpl_vars['dataElement']->value) {
$_smarty_tpl->tpl_vars['dataElement']->do_else = false;
?>
        <div class="lu-col-sm-20p" style="justify-content: center;">
            <a class="lu-tile lu-tile--btn  <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataElement']->value->getHtmlAttributes(), 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_2_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                data-title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('buttons','actions',$_smarty_tpl->tpl_vars['dataElement']->value->getTitle());?>
"
               >
                <div class="lu-i-c-6x">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['dataElement']->value->getImage();?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('serverCA','iconTitle',$_smarty_tpl->tpl_vars['dataElement']->value->getTitle());?>
" />
                </div>
                <div class="lu-tile__title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('serverCA','iconTitle',$_smarty_tpl->tpl_vars['dataElement']->value->getTitle());?>
</div>
            </a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
