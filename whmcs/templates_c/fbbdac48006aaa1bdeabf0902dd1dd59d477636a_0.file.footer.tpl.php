<?php
/* Smarty version 3.1.48, created on 2024-09-27 10:17:06
  from '/var/www/html/templates/lagom2/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f6862215f271_88334519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbbdac48006aaa1bdeabf0902dd1dd59d477636a' => 
    array (
      0 => '/var/www/html/templates/lagom2/footer.tpl',
      1 => 1726806673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/".((string)$_smarty_tpl->tpl_vars[\'template\']->value)."/core/layouts/footer/default/default.tpl' => 1,
  ),
),false)) {
function content_66f6862215f271_88334519 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/footer.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['footer-layouts']))) {?>
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['footer-layouts']['mediumPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/layouts/footer/default/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }
}?>
<!--Start of Tawk.to Script-->
<?php echo '<script'; ?>
 type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66ecf6014cbc4814f7dbb1bd/1i86q1tn5';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
<?php echo '</script'; ?>
>
<!--End of Tawk.to Script--><?php }
}
