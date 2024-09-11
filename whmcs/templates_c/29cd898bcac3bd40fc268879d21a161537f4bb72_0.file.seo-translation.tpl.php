<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:53:05
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/seo-translation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dffae12ac227_80879710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29cd898bcac3bd40fc268879d21a161537f4bb72' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/seo-translation.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dffae12ac227_80879710 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal seo-translation-modal" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
SeoTranslationModal" >
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
                <form id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
SeoTranslationFrom" data-seo-form data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@getSeoTranslationText',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['whmcsLanguages']->value, 'whmcsLanguage');
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['whmcsLanguage']->value) {
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = false;
?>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label"><?php echo ucfirst($_smarty_tpl->tpl_vars['whmcsLanguage']->value);?>
</label>
                                    <textarea class="form-control lang-<?php echo $_smarty_tpl->tpl_vars['whmcsLanguage']->value;?>
-input" type="text" value="" name=languages[<?php echo $_smarty_tpl->tpl_vars['whmcsLanguage']->value;?>
]></textarea>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                </form>
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" type="submit" form="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
SeoTranslationFrom" >
                    <span class="btn__text">Save Changes</span>
                    <span class="btn__preloader preloader preloader--light"></span>
                </button>
                <a class="btn btn--default btn--outline" data-dismiss="lu-modal">
                    <span class="btn__text">Cancel</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php }
}
