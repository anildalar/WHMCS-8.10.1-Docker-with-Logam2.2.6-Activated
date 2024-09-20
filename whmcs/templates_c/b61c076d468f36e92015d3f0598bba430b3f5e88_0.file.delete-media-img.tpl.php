<?php
/* Smarty version 3.1.48, created on 2024-09-20 07:04:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/delete-media-img.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed1e97056fc6_73315615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b61c076d468f36e92015d3f0598bba430b3f5e88' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/delete-media-img.tpl',
      1 => 1720189762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed1e97056fc6_73315615 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="modal" id="deleteImgModal" data-media-remove-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger">Delete media image</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Are you sure you want to delete this item?</p>
                <div class="form-group">
                    <input type="hidden" name="filename" id="media-filename" value="">
                </div>
            </div>
            <div class="modal__actions">
                <button class="btn btn--danger" type="button" data-media-remove data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->apiUrl("MediaApi@deleteMediaImage",array("templateName"=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                    <span class="btn__text">Delete</span>
                </button>
                <a class="btn btn--default btn--outline cancel__item" data-dismiss="lu-modal">
                    <span class="btn__text">Cancel</span>
                </a>
            </div>
        </div>
    </div>
</div><?php }
}
