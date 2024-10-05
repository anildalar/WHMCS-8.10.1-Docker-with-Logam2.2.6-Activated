<?php
/* Smarty version 3.1.48, created on 2024-10-02 17:07:18
  from '/var/www/html/templates/lagom2/includes/common/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd7dc668e694_08226583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2359c28cd51b7dab424a2c8ca0f492210f1d0635' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/common/message.tpl',
      1 => 1679490290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd7dc668e694_08226583 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/message.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>    
    <div class="message <?php if ($_smarty_tpl->tpl_vars['type']->value) {?>message-<?php echo $_smarty_tpl->tpl_vars['type']->value;
}
if ($_smarty_tpl->tpl_vars['customClass']->value) {?> <?php echo $_smarty_tpl->tpl_vars['customClass']->value;
}?>">
        <div class="message-body">
            <?php if ($_smarty_tpl->tpl_vars['img']->value) {?>
                <div class="message-image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icons/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
.svg" alt="no data">
                </div>
            <?php } else { ?>    
                <div class="message-icon">
                    <?php if ($_smarty_tpl->tpl_vars['type']->value == "success") {?>
                        <i class="lm lm-check"></i>
                    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "danger") {?>
                        <i class="lm lm-close"></i>
                    <?php } else { ?>
                        <i class="lm lm-info-text"></i>
                    <?php }?>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "no-data") {?>
                <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h6>
            <?php } else { ?>
                <h3 class="message-title"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['desc']->value) {?>
                <p class="message-desc"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</p>
            <?php }?>
        </div>
    </div>
<?php }?>    <?php }
}
