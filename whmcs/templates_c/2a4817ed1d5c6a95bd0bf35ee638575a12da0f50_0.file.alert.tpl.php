<?php
/* Smarty version 3.1.48, created on 2024-10-02 17:07:31
  from '/var/www/html/templates/lagom2/includes/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd7dd32ed5e7_27087631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a4817ed1d5c6a95bd0bf35ee638575a12da0f50' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/alert.tpl',
      1 => 1681727128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd7dd32ed5e7_27087631 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/alert.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <div class="alert alert-lagom alert-<?php if ($_smarty_tpl->tpl_vars['type']->value == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['type']->value;
} else { ?>info<?php }
if ($_smarty_tpl->tpl_vars['textcenter']->value) {?> text-center<?php }
if ($_smarty_tpl->tpl_vars['hide']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['additionalClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['additionalClasses']->value;
}?>"<?php if ($_smarty_tpl->tpl_vars['idname']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
            <span class="alert-icon ls <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></span> 
        <?php }?>
        <div class="alert-body">
            <?php if ($_smarty_tpl->tpl_vars['errorshtml']->value) {?>
                <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaerrors'];?>
</strong>
                <ul>
                    <?php echo $_smarty_tpl->tpl_vars['errorshtml']->value;?>

                </ul>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
                    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

            <?php }?>
        </div>
    </div>
<?php }
}
}
