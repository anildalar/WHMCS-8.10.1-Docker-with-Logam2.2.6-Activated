<?php
/* Smarty version 3.1.48, created on 2024-09-20 07:22:15
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed22a778fa06_35059647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82b81d8b6b6de80a0a441077206cfe6d3835f774' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/export.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed22a778fa06_35059647 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="exportConfirmation">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger">Export Warning</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Please save your changes before export. Unsaved changes won't be exported.</p>
            </div>
            <div class="modal__actions">
                <?php if ($_smarty_tpl->tpl_vars['itemType']->value == 'menu') {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Data@exportMenu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['itemId']->value));?>
" class="btn btn--danger" data-btn-loader>
                        <span class="btn__preloader preloader preloader--light"></span>
                        <span class="btn__text export__btn">Export anyway</span>
                    </a>
                <?php } elseif ($_smarty_tpl->tpl_vars['itemType']->value == 'sidebar') {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Data@exportSidebar',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'sidebarId'=>$_smarty_tpl->tpl_vars['itemId']->value));?>
" class="btn btn--danger" data-btn-loader>
                        <span class="btn__preloader preloader preloader--light"></span>
                        <span class="btn__text export__btn">Export anyway</span>
                    </a>
                <?php }?>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">Back</span></button>
            </div>
        </div>
    </div>
</div>
<?php }
}
