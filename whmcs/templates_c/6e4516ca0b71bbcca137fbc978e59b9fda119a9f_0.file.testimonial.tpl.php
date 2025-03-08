<?php
/* Smarty version 3.1.48, created on 2025-03-04 18:45:18
  from '/var/www/html/templates/lagom2/core/pages/homepage/modern/shared/testimonial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c74a3eea69d8_47959124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e4516ca0b71bbcca137fbc978e59b9fda119a9f' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/pages/homepage/modern/shared/testimonial.tpl',
      1 => 1741086857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c74a3eea69d8_47959124 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="testimonials-desc">
    <p><?php echo $_smarty_tpl->tpl_vars['testimonial']->value['description'];?>
</p>
</div>
<div class="testimonials-details">
    <div class="testimonials-avatar">
        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/core/pages/homepage/<?php echo $_smarty_tpl->tpl_vars['homepageTemplate']->value;?>
/assets/img/<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['author'];?>
">
        <span>”</span>
    </div>
    <div class="testimonials-author">
        <span><?php echo $_smarty_tpl->tpl_vars['testimonial']->value['author'];?>
</span><br>
        <a href="https://<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['website'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['testimonial']->value['website'];?>
</a>
    </div>
</div><?php }
}
