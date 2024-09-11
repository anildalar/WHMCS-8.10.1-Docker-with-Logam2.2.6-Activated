<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:43:13
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/tools/tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff8916c13c0_79370918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6467ddef9191c6ab8224b9d7f5902179354bcab' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/tools/tools.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/includes/modals/refresh-product-pricing-cache.tpl' => 1,
    'file:adminarea/includes/modals/reimport-menu.tpl' => 1,
    'file:adminarea/includes/modals/refresh-menu-cache.tpl' => 1,
    'file:adminarea/includes/modals/refresh-section-cache.tpl' => 1,
    'file:adminarea/includes/modals/generate-nginx-htaccess.tpl' => 1,
  ),
),false)) {
function content_66dff8916c13c0_79370918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193146460866dff8916b71b5_27784288', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88359376366dff8916b8983_11191335', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24208916266dff8916b94e5_86154858', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207759454266dff8916bc1e1_48312356', "template-modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181005535866dff8916bf590_72125132', "template-scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_193146460866dff8916b71b5_27784288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_193146460866dff8916b71b5_27784288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_88359376366dff8916b8983_11191335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_88359376366dff8916b8983_11191335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_24208916266dff8916b94e5_86154858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_24208916266dff8916b94e5_86154858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="section">    
        <h3 class="section__title">Service Tools</h3>
        <div class="section__body">
            <div class="panel d-flex align-items-center">
                <div class="panel__body">
                    <h6>Restore Default Menus</h6>
                    <p class="text-gray m-b-0x">Restore default settings for all navigation menus, <b>ONLY</b> for currently selected <a href="https://lagom.rsstudio.net/docs/website-builder/display-rules/#display-rule" target="_blank">"Display Rule"</a>.</p>
                </div>  
                <div class="p-l-3x m-l-a panel__actions">
                    <button
                        class="btn btn--primary"
                        type="button"
                        data-toggle="lu-modal"
                        data-backdrop="static"
                        data-keyboard="false"
                        data-target="#reimport-menu"
                    >
                        Restore
                    </button>
                </div>  
            </div>
        </div>
        <div class="panel d-flex align-items-center">
            <div class="panel__body">
                <h6>Product Pricing Cache</h6>
                <p class="text-gray m-b-0x">Clear pricing cache stored in Lagom database. Action may be required if pricing shown in Lagom pages has not been automatically updated. <a href="https://lagom.rsstudio.net/docs/website-builder/caching/#pricing-cache" target="_blank">Learn more..</a></p>
            </div>  
            <div class="p-l-3x m-l-a panel__actions">
                <button 
                    class="btn btn--primary"
                    type="button" 
                    data-toggle="lu-modal" 
                    data-backdrop="static"
                    data-keyboard="false"
                    data-target="#refresh-product-pricing-cache"
                >
                    Refresh
                </button>
            </div>  
        </div>
        <?php if ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS') {?>
            <div class="panel d-flex align-items-center">
                <div class="panel__body">
                    <h6>Menu Cache</h6>
                    <p class="text-gray m-b-0x">Clear main navigation cache stored in Lagom database. Action may be required if main navigation won't be automatically updated on your website. <a href="https://lagom.rsstudio.net/docs/website-builder/caching/#main-navigation-caching" target="_blank">Learn more..</a></p>
                </div>
                <div class="p-l-3x m-l-a panel__actions">
                    <button
                            class="btn btn--primary"
                            type="button"
                            data-toggle="lu-modal"
                            data-backdrop="static"
                            data-keyboard="false"
                            data-target="#refresh-menu-cache"
                    >
                        Refresh
                    </button>
                </div>
            </div>
            <div class="panel d-flex align-items-center">
                <div class="panel__body">
                    <h6>Section Cache</h6>
                    <p class="text-gray m-b-0x">Clear CMS section cache stored in Lagom database. Action may be required if CMS page content has not been automatically updated. <a href="https://lagom.rsstudio.net/docs/website-builder/caching/#page-sections-caching" target="_blank">Learn more..</a></p>
                </div>
                <div class="p-l-3x m-l-a panel__actions">
                    <button
                            class="btn btn--primary"
                            type="button"
                            data-toggle="lu-modal"
                            data-backdrop="static"
                            data-keyboard="false"
                            data-target="#refresh-section-cache"
                    >
                        Refresh
                    </button>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['isNginx']->value) {?>
                <div class="panel d-flex align-items-center">
                    <div class="panel__body">
                        <h6>NGINX .htaccess Generator Tool</h6>
                        <p class="text-gray m-b-0x">Automatically updates NGINX rewrite rules when pages are modified. This tool manages backups of your current configurations, applies new settings, and verifies the NGINX configuration. <a href="https://lagom.rsstudio.net/docs/website-builder/installation/#nginx-server" target="_blank">Learn more..</a></p>
                    </div>
                    <div class="p-l-3x m-l-a panel__actions">
                        <button
                                class="btn btn--primary"
                                type="button"
                                data-toggle="lu-modal"
                                data-backdrop="static"
                                data-keyboard="false"
                                data-target="#generate-nginx-htaccess"
                        >
                            Generate
                        </button>
                    </div>
                </div>
            <?php }?>
        <?php }?>
    </div>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-modals"} */
class Block_207759454266dff8916bc1e1_48312356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_207759454266dff8916bc1e1_48312356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/refresh-product-pricing-cache.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/reimport-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/refresh-menu-cache.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/refresh-section-cache.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['isNginx']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/generate-nginx-htaccess.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>    
    <?php }?>    
<?php
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_181005535866dff8916bf590_72125132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_181005535866dff8916bf590_72125132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('service-tools.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['template']->value->getRSThemesVersion();?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
