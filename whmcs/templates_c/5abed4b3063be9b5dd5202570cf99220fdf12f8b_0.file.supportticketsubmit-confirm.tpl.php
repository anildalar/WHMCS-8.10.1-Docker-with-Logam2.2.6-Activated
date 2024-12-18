<?php
/* Smarty version 3.1.48, created on 2024-12-15 02:45:35
  from '/var/www/html/templates/lagom2/supportticketsubmit-confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675e42cfcb7eb8_62109659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5abed4b3063be9b5dd5202570cf99220fdf12f8b' => 
    array (
      0 => '/var/www/html/templates/lagom2/supportticketsubmit-confirm.tpl',
      1 => 1679490292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675e42cfcb7eb8_62109659 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="message message-lg message-success">
        <div class="message-icon">
            <i class="lm lm-check"></i>
        </div>
        <h2 class="message-title"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketcreated'];?>
 #<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
</h2>
        <p class="message-desc"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketcreateddesc'];?>
</p>
        <div class="message-actions">
            <a href="viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" class="btn btn-primary">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
 
            </a>
        </div>
    </div>
<?php }?>    
<?php }
}
