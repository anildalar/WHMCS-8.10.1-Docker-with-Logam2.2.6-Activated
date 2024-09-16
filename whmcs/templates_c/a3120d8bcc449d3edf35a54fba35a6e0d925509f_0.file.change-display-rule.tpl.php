<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:37:24
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/change-display-rule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e407d45b46d5_71608269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3120d8bcc449d3edf35a54fba35a6e0d925509f' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/change-display-rule.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e407d45b46d5_71608269 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="changeDisplayRule" data-change-display-rule-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title">Change Theme Display Rule</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Please confirm, that you'd like to change the "Display Rule", as this change will implement changes to your WHMCS theme. <a href="https://lagom.rsstudio.net/docs/website-builder/display-rules/" target="_blank">Learn more</a> about Display rules in our documentation.</p>
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" data-change-display-rule-modal-confirm>
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['confirm'];?>

                    </span>
                </button>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline">
                    <span class="btn__text">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>

                    </span>
                </button>
            </div>
        </div>
    </div>
</div><?php }
}
