<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:36
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/media/no-data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252b43b2566_30986792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef48e9b3a08d94e547885371bd1041141ec9c00d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/media/no-data.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f252b43b2566_30986792 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="media__no-data media__no-data--full msg <?php if (!$_smarty_tpl->tpl_vars['startEmpty']->value) {?>is-hidden<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['customClass']->value))) {
echo $_smarty_tpl->tpl_vars['customClass']->value;
}?>" data-media-no-data>
    <div class="msg__icon i-c-3x">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.85 16.44L14.31 12.9C15.37 11.54 16 9.85 16 8C16 3.59 12.41 0 8 0C3.59 0 0 3.59 0 8C0 12.41 3.59 16 8 16C9.85 16 11.54 15.37 12.9 14.31L16.44 17.85C16.54 17.95 16.67 18 16.79 18C16.91 18 17.05 17.95 17.14 17.85L17.85 17.14C18.05 16.95 18.05 16.63 17.85 16.44ZM12 7V9H4V7H12Z" fill="#ACB0B8"/>
        </svg>
    </div>
    <div class="msg__body">
        <span class="msg__title">No results Found</span>
        <span class="msg__description">Clear the filter and try again with different string.</span>
    </div>
</div><?php }
}
