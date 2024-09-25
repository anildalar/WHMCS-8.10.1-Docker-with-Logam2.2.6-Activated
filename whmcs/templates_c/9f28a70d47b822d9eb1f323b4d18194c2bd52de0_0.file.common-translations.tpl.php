<?php
/* Smarty version 3.1.48, created on 2024-09-25 07:13:36
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/common-translations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f3b8203c4612_25647508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f28a70d47b822d9eb1f323b4d18194c2bd52de0' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/common-translations.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f3b8203c4612_25647508 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="translationCommonModal" data-common-translations-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h6 class="top__title text-default"><span data-common-translations-title></span> Translations</h6>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body p-b-0x">
                <form 
                    id="commonMenuItemTranslations" 
                    data-translation-modal-form
                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@menuItemDescTranslate',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                >
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-label"><?php echo ucfirst($_smarty_tpl->tpl_vars['language']->value);?>
</label>
                                    <input class="form-control lang-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
-input" type="text" value="" name=languages[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <input data-translation-modal-parent type="hidden" name="parent" value="">
                    <input data-translation-modal-index type="hidden" name="index" value="">
                    <input data-translation-modal-type type="hidden" name="type" value="">
                </form>
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" type="submit" form="commonMenuItemTranslations" data-btn-loader>
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text">Save Changes</span>
                </button>
                <a class="btn btn--default btn--outline" data-dismiss="lu-modal">
                    <span class="btn__text">Cancel</span>
                </a>
            </div>
        </div>
    </div>
</div><?php }
}
