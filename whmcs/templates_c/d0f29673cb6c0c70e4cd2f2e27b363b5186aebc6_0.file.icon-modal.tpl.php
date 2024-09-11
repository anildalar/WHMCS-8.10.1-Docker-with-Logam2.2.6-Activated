<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:45:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals/icon-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff933e40945_54050744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0f29673cb6c0c70e4cd2f2e27b363b5186aebc6' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals/icon-modal.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/menu/includes/components/icon-tabs.tpl' => 1,
  ),
),false)) {
function content_66dff933e40945_54050744 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal--lg modal--media" id="menuIconModal" data-modal-menu-icon>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h6 class="top__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['modal']['icon']['title'];?>
</h6>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <form 
                class="modal__body" 
                data-modal-menu-icon-body
                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets" enctype="multipart/form-data"
                data-load-icons-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/components/icon-tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'menu-icon'), 0, false);
?>
            </form>
            <div class="modal__actions">
                <button class="btn btn--primary" type="button" data-modal-menu-icon-submit data-btn-loader data-index data-parent data-submenu-icon>
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['confirm'];?>
</span>
                </button>
                <a class="btn btn--default btn--outline cancel__item" data-dismiss="lu-modal">
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span>
                </a>
            </div>
        </div>
    </div>
</div><?php }
}
