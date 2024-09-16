<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:25:57
  from '/var/www/html/templates/lagom2/core/cms/sections/common/anchor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e4133587bd92_95833643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10f56b363bc52b2275f1b2c0618da7d6a908235e' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/anchor.tpl',
      1 => 1694186636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e4133587bd92_95833643 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/anchor.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['section_anchor']->value)) && $_smarty_tpl->tpl_vars['section_anchor']->value != '') {?>
        <span class="anchor-target" id="<?php echo $_smarty_tpl->tpl_vars['section_anchor']->value;?>
"></span>
    <?php }?>    
<?php }
}
}
