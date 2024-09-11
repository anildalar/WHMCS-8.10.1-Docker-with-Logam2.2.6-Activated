<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:58
  from '/var/www/html/templates/orderforms/lagom2/includes/domain/featured-tlds.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7ce7b1998_30281612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '237888d01932cf0c643dfc1eb6addbc3006d1083' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/domain/featured-tlds.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/overwrites/featured-tlds.tpl' => 1,
  ),
),false)) {
function content_66dff7ce7b1998_30281612 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/featured-tlds.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/featured-tlds.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['featuredTlds']->value) {?>
        <div class="section domain-pricing">
            <div class="featured-tlds swiper-tld swiper-container">
                <div class="row swiper-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featuredTlds']->value, 'tldinfo', false, 'num');
$_smarty_tpl->tpl_vars['tldinfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['tldinfo']->value) {
$_smarty_tpl->tpl_vars['tldinfo']->do_else = false;
?>
                    <div class="<?php if (count($_smarty_tpl->tpl_vars['featuredTlds']->value) == 3) {?>col-md-4<?php } elseif (count($_smarty_tpl->tpl_vars['featuredTlds']->value) >= 4) {?>col-md-3<?php }?> col-sm-6 swiper-slide">
                            <div class="featured-tld">
                                <div class="img-container">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/tld_logos/<?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['tldNoDots'];?>
.png">
                                </div>
                                <div class="featured-tld-price <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['tldNoDots'];?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['domainTransfer']->value) {?>
                                        <?php if (is_object($_smarty_tpl->tpl_vars['tldinfo']->value['transfer'])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['transfer'];
if ($_smarty_tpl->tpl_vars['tldinfo']->value['period'] > 1) {
ob_start();
echo $_smarty_tpl->tpl_vars['tldinfo']->value['period'];
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYears",'years'=>$_prefixVariable2),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYear",'years'=>''),$_smarty_tpl ) );
}?>
                                        <?php } else { ?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>

                                        <?php }?>
                                    <?php } else { ?>
                                        <?php if (is_object($_smarty_tpl->tpl_vars['tldinfo']->value['register'])) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['register'];
if ($_smarty_tpl->tpl_vars['tldinfo']->value['period'] > 1) {
ob_start();
echo $_smarty_tpl->tpl_vars['tldinfo']->value['period'];
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYears",'years'=>$_prefixVariable3),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYear",'years'=>''),$_smarty_tpl ) );
}?>
                                        <?php } else { ?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>

                                        <?php }?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    <?php }
}
}
}
