<?php
/* Smarty version 3.1.48, created on 2024-09-18 04:00:58
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea507a953163_62494746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a96387a6e1ea21d71a15c4a7959de7e69a510793' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/navbar.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea507a953163_62494746 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="app-navbar navbar navbar--main navbar--h">
    <div class="container">
        <a class="navbar__brand brand" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Templates@index');?>
">
            <div class="brand__logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->img('logos/logo-black.svg');?>
" alt="RSStudio" width="128">
            </div>
        </a>
        <div class="navbar__menu">
            <ul class="nav nav--md nav--h is-right align-items-center">
                <li class="nav__item">
                    <a class="btn btn--navbar" href="https://rsstudio.net/my-account/submitticket.php" target="_blank">
                        <i class="lm lm-chat-clouds btn__icon"></i>
                        <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['navigation']['contact_us'];?>
</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a class="btn btn--navbar" href="https://rsstudio.net/my-account/" target="_blank">
                        <i class="lm lm-user btn__icon"></i>
                        <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['navigation']['my_account'];?>
</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php }
}
