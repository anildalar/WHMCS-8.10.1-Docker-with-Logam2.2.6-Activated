<?php
/* Smarty version 3.1.48, created on 2024-09-28 03:20:23
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/cookie-box-translation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f775f75fce30_06740844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c66aca871fa2f6037b0d3cb3bc4b30bb488eca' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/cookie-box-translation.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f775f75fce30_06740844 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="cookieBoxTranslationsModal" data-cookiebox-translation-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h6 class="top__title text-default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['cookie_box_translation']['title'];?>
</h6>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body p-b-0x">
                <div class="row" data-cookiebox-translation-form>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['whmcsLanguages']->value, 'whmcsLanguage');
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['whmcsLanguage']->value) {
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = false;
?>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo ucfirst($_smarty_tpl->tpl_vars['whmcsLanguage']->value);?>
</label>
                                <textarea class="form-control lang-<?php echo $_smarty_tpl->tpl_vars['whmcsLanguage']->value;?>
-input" name=<?php echo $_smarty_tpl->tpl_vars['whmcsLanguage']->value;?>
><?php if ((isset($_smarty_tpl->tpl_vars['cookiebox_settings']->value[$_smarty_tpl->tpl_vars['whmcsLanguage']->value]))) {
echo $_smarty_tpl->tpl_vars['cookiebox_settings']->value[$_smarty_tpl->tpl_vars['whmcsLanguage']->value];
}?></textarea>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" type="button" data-cookiebox-translation-modal-submit data-btn-loader>
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['save_changes'];?>
</span>
                </button>
                <a class="btn btn--default btn--outline" data-dismiss="lu-modal">
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span>
                </a>
            </div>
        </div>
    </div>
</div><?php }
}
