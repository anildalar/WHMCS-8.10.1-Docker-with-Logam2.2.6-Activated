<?php
/* Smarty version 3.1.48, created on 2024-10-07 05:14:22
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/controlers/adminServicesTabFieldsIntegration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67036e2e5d96a1_09634792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3dc001fc7ee8148017b9e98a7338c1d622fd434' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/controlers/adminServicesTabFieldsIntegration.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:assets/css_assets.tpl' => 1,
    'file:assets/js_assets.tpl' => 1,
  ),
),false)) {
function content_67036e2e5d96a1_09634792 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lu-col-md-12">
    <?php $_smarty_tpl->_subTemplateRender('file:assets/css_assets.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['isCustomIntegrationCss']->value) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['customAssetsURL']->value;?>
/css/integration.css">
    <?php }?>

    <div id="layers">
        <div class="lu-app">
            <div class="lu-app-main">
                <div class="lu-app-main__body">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                </div>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:assets/js_assets.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>
        $(window).load(function(){
            if (typeof whmcsPostOriginal === 'undefined') {
                var whmcsPostOriginal = {};
                Object.assign(whmcsPostOriginal, WHMCS.http.jqClient);
                function whmcsPostWrapper(t, e, i, n) {
                    if (typeof e.indexOf  !== 'undefined' && e.indexOf('modop')) {
                        if (typeof mgPageControler !== 'undefined' && typeof mgPageControler.vueLoader !== 'undefined' && mgPageControler.vueLoader !== false) {
                            for (var key in mgPageControler.vueLoader.$children) {
                                if (!mgPageControler.vueLoader.$children.hasOwnProperty(key)) {
                                    continue;
                                }
                                mgPageControler.vueLoader.$children[key].$destroy();
                                mgPageControler.vueLoader.$children[key] = false;
                            }
                            mgPageControler.vueLoader.$destroy();
                            mgPageControler.vueLoader = false;

                            $(".lu-tooltip").remove();
                        }
                    }

                    return whmcsPostOriginal.post(t, e, i, n);
                }

                WHMCS.http.jqClient.post = whmcsPostWrapper;
            }
        });

        function mgWaitForAssets(){
            setTimeout(function(){
                if (typeof window.Vue === 'function' && typeof window.mgLoadPageContoler === 'function'
                    && typeof window.initMassActionsOnDatatables === 'function') {
                    if ((typeof mgPageControler !== 'undefined' && mgPageControler.vueLoader === false) || (typeof mgPageControler === 'undefined')) {
                        mgLoadPageContoler();
                        mgEventHandler.on('AppCreated', null, function (appId, params) {
                            params.instance.$nextTick(function () {
                                initContainerTooltips('layers');
                            });
                        }, 1000);
                    }
                } else {
                    mgWaitForAssets();
                }
            }, 1000);
        }
        mgWaitForAssets();
    <?php echo '</script'; ?>
>
</div>
<?php }
}
