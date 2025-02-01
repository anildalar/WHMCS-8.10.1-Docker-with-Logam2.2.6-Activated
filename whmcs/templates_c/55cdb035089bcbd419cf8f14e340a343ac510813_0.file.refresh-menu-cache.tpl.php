<?php
/* Smarty version 3.1.48, created on 2025-01-13 07:11:27
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/refresh-menu-cache.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784bc9f21f2b2_47227864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55cdb035089bcbd419cf8f14e340a343ac510813' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/refresh-menu-cache.tpl',
      1 => 1730150156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6784bc9f21f2b2_47227864 (Smarty_Internal_Template $_smarty_tpl) {
?><div 
    class="modal" 
    id="refresh-menu-cache" 
    data-modal-refresh-menu-cache
    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/adminApi.php?controller=HtmlCacheApi&method=deleteMenuCache"
> 
    <div class="modal__dialog">
        <div class="modal__content"> 
            <div class="modal__top top">
                <div class="top__title">Refresh Menu Cache</div>
                <div class="top__toolbar">
                    <button 
                        class="close btn btn--xs btn--icon btn--link" 
                        data-dismiss="lu-modal" 
                        aria-label="Close"
                        data-modal-refresh-menu-cache-close
                    >
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body p-b-0x">
                <div data-modal-refresh-menu-cache-info>
                    <p class="text-gray p-3">
                        The menu cache will be refreshed. Do not close the modal or browser during this process.
                    </p>
                    <div class="form-group m-t-3x m-b-4x">
                        <label class="checkbox m-t-0x align-items-start">
                            <input class="form-checkbox" type="checkbox" name="refresh-menu-cache-confirm" data-modal-refresh-menu-cache-confirm> 
                            <span class="form-indicator"></span>
                            <span class="form-text">Yes, I understood</span>
                        </label>
                    </div>
                </div>
                <div class="is-hidden" data-modal-refresh-menu-cache-refresh>
                    <p class="text-gray p-3 m-b-4x">Refreshing menu cache in progress, do not close your browser.</p>
                </div>
                <div class="is-hidden" data-modal-refresh-menu-cache-success>
                    <p class="m-b-4x text-center p-3">
                       <span class="text-gray">Menu Cache refresh</span> <b>completed successfully</b>.
                    </p>
                </div>
            </div>
            <div class="modal__actions" data-modal-refresh-menu-cache-actions>
                <button 
                    class="btn" 
                    disabled data-modal-refresh-menu-cache-btn
                >
                    <span class="btn__text">
                        Confirm
                    </span>
                    <span class="btn__preloader preloader"></span>
                </button>
                <button 
                    data-dismiss="lu-modal" 
                    aria-label="Close" 
                    type="button" 
                    class="btn btn--default btn--outline"
                    data-modal-refresh-menu-cache-close
                >
                    <span class="btn__text">
                        Cancel
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php }
}
