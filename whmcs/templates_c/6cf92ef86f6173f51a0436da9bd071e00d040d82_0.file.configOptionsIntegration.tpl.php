<?php
/* Smarty version 3.1.48, created on 2024-10-02 10:09:34
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/controlers/configOptionsIntegration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd1bde009404_95632153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cf92ef86f6173f51a0436da9bd071e00d040d82' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/controlers/configOptionsIntegration.tpl',
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
function content_66fd1bde009404_95632153 (Smarty_Internal_Template $_smarty_tpl) {
?><tr>
    <td colspan="2">
        <?php $_smarty_tpl->_subTemplateRender('file:assets/css_assets.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['isCustomIntegrationCss']->value) {?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['customAssetsURL']->value;?>
/css/integration.css">
        <?php }?>

        <div id="layers" class="layers-integration">
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
            function mgWaitForAssets(){
                setTimeout(function(){
                    if (typeof window.Vue === 'function' && typeof window.mgLoadPageContoler === 'function'
                    && typeof window.initMassActionsOnDatatables === 'function') {
                        mgLoadPageContoler();
                        mgEventHandler.on('AppCreated', null, function(appId, params){
                            params.instance.$nextTick(function () {
                                initContainerTooltips('layers');
                            });
                        }, 1000)
                    } else {
                        mgWaitForAssets();
                    }
                }, 1000);
            }
            mgWaitForAssets();
        <?php echo '</script'; ?>
>
    </td>
</tr>
<?php }
}
