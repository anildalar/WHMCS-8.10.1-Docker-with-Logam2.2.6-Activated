<?php
/* Smarty version 3.1.48, created on 2024-09-10 03:22:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/edit-item/graphic-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dfbb6bb055a5_97254403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ebe17ea86db0612b9f967df6f0b43c353d34b22' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/edit-item/graphic-edit.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/pages/includes/modal/tabs.tpl' => 1,
  ),
),false)) {
function content_66dfbb6bb055a5_97254403 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal--lg modal--media" id="editGraphicModal" data-edit-graphic-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h4 class="top__title h6">Choose Graphic <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->modal['item']['add_edit']['graphic']), 0, false);
?></h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <form
                id="editGraphicForm"
                data-edit-graphic-form
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getGraphicItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets" enctype="multipart/form-data"
                data-load-icons-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'graphic-edit'), 0, false);
?>
                    <input type="hidden" name="item[graphic_name]" data-edit-graphic-name value=""/>
                    <input type="hidden" name="item[section]" data-edit-graphic-section-index value=""/>
                    <input type="hidden" name="item[group]" data-edit-graphic-group-index value=""/>
                </div>
                <div class="modal__actions">
                    <button class="btn btn--primary" type="submit" form="editGraphicForm" data-edit-graphic-btn>
                        <span class="btn__text">Add Selected</span>
                        <span class="btn__preloader preloader"></span>
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
