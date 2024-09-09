<?php
/* Smarty version 3.1.48, created on 2024-09-08 05:49:04
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/helpers/popover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dd3ad0890829_25955801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '536652e2d446890164b231af325ea7703b1c774d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/helpers/popover.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd3ad0890829_25955801 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="<?php echo $_smarty_tpl->tpl_vars['popoverClasses']->value;?>
 popover-container" data-popover-container>
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" data-popover-open="hover">
        <circle cx="6" cy="6" r="5.5" stroke="#B9BDC5"/>
        <path d="M7 6V9H5V6H7ZM5 5V3H7V5H5Z" fill="#B9BDC5"/>
    </svg>
    <div class="popover" data-popover>
        <div class="popover__body">
            <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['popoverBody']->value, ENT_QUOTES);?>
                                                   
        </div>
        <?php if ($_smarty_tpl->tpl_vars['popoverFooter']->value && $_smarty_tpl->tpl_vars['popoverFooter']->value != '') {?>
            <div class="popover__footer">
                <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['popoverFooter']->value, ENT_QUOTES);?>

            </div>
        <?php }?>
    </div>
</span><?php }
}
