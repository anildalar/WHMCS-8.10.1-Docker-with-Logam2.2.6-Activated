<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:42:25
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/includes/name-translation-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff8612ede95_28657377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a44075e82a0617483ebeb4d787b1ed14172ed322' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/includes/name-translation-modal.tpl',
      1 => 1700238186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff8612ede95_28657377 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal--lg" id="supportHoursTranslationModal" data-support-hours-translation-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h6 class="top__title text-default"></i><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</h6>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body has-scroll p-b-0x">
                <form id="supportHoursTranslationFrom" data-support-hours-translation-form data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@getSeoTranslationText',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getWhmcsLanguages(), 'whmcsLanguage');
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['whmcsLanguage']->value) {
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = false;
?>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-label"><?php echo ucfirst($_smarty_tpl->tpl_vars['whmcsLanguage']->value);?>
</label>
                                    <input class="form-control lang-<?php echo $_smarty_tpl->tpl_vars['whmcsLanguage']->value;?>
-input" type="text" value="" name=languages[<?php echo $_smarty_tpl->tpl_vars['whmcsLanguage']->value;?>
]>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                    <input type="hidden" data-support-hours-translation-item-id>
                </form>
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" type="submit" form="supportHoursTranslationFrom" >
                    <span class="btn__text">Save Changes</span>
                    <span class="btn__preloader preloader preloader--light"></span>
                </button>
                <a class="btn btn--default btn--outline" data-dismiss="lu-modal">
                    <span class="btn__text">Cancel</span>
                </a>
            </div>
        </div>
    </div>
</div><?php }
}
