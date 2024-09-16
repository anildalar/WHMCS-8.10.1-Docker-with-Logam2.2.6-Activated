<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/seo-image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7dc1ee71_87020746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '408136dc55cc10ad341e4ec3feeaa494e33739a7' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/seo-image.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/pages/includes/modal/tabs.tpl' => 1,
  ),
),false)) {
function content_66e40e7dc1ee71_87020746 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="seoImageModal" data-seo-image-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title h6">Seo Image</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <form 
                data-seo-image-form 
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@seoImage',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"
                data-load-icons-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'seo-image'), 0, false);
?>
                </div>
                <div class="modal__actions">
                    <button class="btn btn--primary" type="submit" data-btn-loader>
                        <span class="btn__preloader preloader preloader--light"></span>
                        <span class="btn__text">Add Selected</span>
                    </button>
                    <a class="btn btn--default btn--outline cancel__item" data-dismiss="lu-modal">
                        <span class="btn__text">Cancel</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
