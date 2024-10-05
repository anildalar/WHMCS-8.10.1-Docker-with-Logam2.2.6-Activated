<?php
/* Smarty version 3.1.48, created on 2024-10-04 06:19:46
  from '/var/www/html/modules/servers/HetznerVps/app/UI/Home/Templates/pages/manageService.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ff8902371770_34265409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ab209c88a717e75856f87e3e854f9c36e6898fa' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/app/UI/Home/Templates/pages/manageService.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ff8902371770_34265409 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['rawObject']->value->getPages()) {?>
    <div class="h4 lu-m-b-3x lu-m-t-3x"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('serverCA','home','pagesHeader');?>
</div>
    <div class="lu-tiles lu-row lu-row--eq-height">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getPages(), 'settings', false, 'controller');
$_smarty_tpl->tpl_vars['settings']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['controller']->value => $_smarty_tpl->tpl_vars['settings']->value) {
$_smarty_tpl->tpl_vars['settings']->do_else = false;
?>
            <div class="lu-col-sm-20p" style="justify-content: center;">
                <a class="lu-tile lu-tile--btn" href="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getURL($_smarty_tpl->tpl_vars['controller']->value);?>
">
                    <div class="lu-i-c-6x">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getImageUrl($_smarty_tpl->tpl_vars['controller']->value);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('serverCA','iconTitle',$_smarty_tpl->tpl_vars['controller']->value);?>
" />
                    </div>
                    <div class="lu-tile__title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('serverCA','iconTitle',$_smarty_tpl->tpl_vars['controller']->value);?>
</div>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php }
}
