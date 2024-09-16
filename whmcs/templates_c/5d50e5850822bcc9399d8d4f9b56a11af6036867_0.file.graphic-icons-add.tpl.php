<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/graphic-icons-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7dc0fbd5_66669594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d50e5850822bcc9399d8d4f9b56a11af6036867' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/graphic-icons-add.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/pages/includes/modal/other/icon-tabs.tpl' => 1,
  ),
),false)) {
function content_66e40e7dc0fbd5_66669594 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal--lg modal--media" id="addGraphicIconModal" data-add-new-graphic-icon-modal>
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
                id="addNewGraphicIconForm"
                data-add-new-graphic-icon-form
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getGraphicItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets" enctype="multipart/form-data"
                data-load-icons-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/other/icon-tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'graphic-icon-add'), 0, false);
?>
                    <input type="hidden" name="item[graphic_name]" data-graphic-name value=""/>
                    <input type="hidden" name="item[section]" data-graphic-section-index value=""/>
                    <input type="hidden" name="item[group]" data-graphic-group-index value=""/>
                </div>
                <div class="modal__actions">
                    <button class="btn btn--primary" type="submit" form="addNewGraphicIconForm" data-add-new-graphic-icon-btn>
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
</div>
<?php }
}
