<?php
/* Smarty version 3.1.48, created on 2025-03-04 13:09:41
  from '/var/www/html/templates/lagom2/banned.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c6fb95175c29_82675434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab33cf95d6f6b3856de93a96edc9730318caf55' => 
    array (
      0 => '/var/www/html/templates/lagom2/banned.tpl',
      1 => 1741086856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c6fb95175c29_82675434 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="message message-danger message-lg message-no-data ">
        <div class="message-icon">
            <i class="lm lm-close"></i>
        </div>
        <h2 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedyourip'];?>
 <?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedhasbeenbanned'];?>
</h2>
        <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedbanreason'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['reason']->value;?>
</strong></h4>
        <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedbanexpires'];?>
: <?php echo $_smarty_tpl->tpl_vars['expires']->value;?>
</h5>
    </div>
<?php }
}
}
