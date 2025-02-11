<?php
/* Smarty version 3.1.48, created on 2025-01-31 10:14:02
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/load-autosave.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_679ca26a2b2840_49841909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c12022889f4cb660e01f7a43e61e698fca47b44' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/load-autosave.tpl',
      1 => 1734354616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679ca26a2b2840_49841909 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="loadAutosave" data-load-autosave-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"></i>Load Page from Autosave</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-load-autosave-modal-cancel data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Unsaved changes detected. Do you want to load them ?</p>
                <p>NOTE: Autosave will be automatically deleted after Save Page Changes</p>
            </div>
            <div class="modal__actions">
                <a
                    <?php if ((isset($_smarty_tpl->tpl_vars['autosave_type']->value)) && $_smarty_tpl->tpl_vars['autosave_type']->value == "predefined") {?>
                        href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Section@edit',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'sectionId'=>$_smarty_tpl->tpl_vars['sectionId']->value,'autosave'=>true));?>
"
                    <?php } else { ?>
                        href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageId'=>$_smarty_tpl->tpl_vars['customPage']->value->id,'autosave'=>true));?>
"
                    <?php }?>
                    class="btn btn--primary"
                    data-load-autosave-modal-submit
                >
                    <span class="btn__text">Load</span>
                </a>
                <button data-load-autosave-modal-cancel data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">Cancel</span></button>
            </div>
        </div>
    </div>
</div><?php }
}
