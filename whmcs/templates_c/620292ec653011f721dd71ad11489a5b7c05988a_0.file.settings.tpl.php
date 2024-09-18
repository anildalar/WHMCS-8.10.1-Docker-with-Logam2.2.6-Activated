<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:21:29
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea635992d6b8_16209497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '620292ec653011f721dd71ad11489a5b7c05988a' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/settings.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/settings/includes/tabs.tpl' => 1,
    'file:adminarea/settings/includes/display-rule.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 2,
    'file:adminarea/settings/includes/custom-logo-url.tpl' => 1,
    'file:adminarea/settings/includes/display-mode-switcher.tpl' => 1,
    'file:adminarea/settings/includes/sticky-sidebars.tpl' => 1,
    'file:adminarea/settings/includes/gravatar.tpl' => 1,
    'file:adminarea/settings/includes/affixed_navigation.tpl' => 1,
    'file:adminarea/settings/includes/mobile-menu-style.tpl' => 1,
    'file:adminarea/settings/includes/cookie-box.tpl' => 1,
    'file:adminarea/settings/includes/free-product-price.tpl' => 1,
    'file:adminarea/settings/includes/show-status-icon.tpl' => 1,
    'file:adminarea/settings/includes/table-filter-cache-duration.tpl' => 1,
    'file:adminarea/settings/includes/show-client-id.tpl' => 1,
    'file:adminarea/settings/includes/hreflang-links.tpl' => 1,
    'file:adminarea/settings/includes/capitalize_section_titles.tpl' => 1,
    'file:adminarea/settings/includes/hide-discounts.tpl' => 1,
    'file:adminarea/settings/includes/product-package-settings.tpl' => 1,
    'file:adminarea/settings/includes/product-price-settings.tpl' => 1,
    'file:adminarea/settings/includes/product-description-settings.tpl' => 1,
    'file:adminarea/settings/includes/group-inputs.tpl' => 2,
    'file:adminarea/settings/includes/enable-pw-strength.tpl' => 1,
    'file:adminarea/settings/includes/tld-cycle-switcher.tpl' => 1,
    'file:adminarea/includes/modals/unsaved-changes.tpl' => 1,
    'file:adminarea/includes/modals/cookie-box-translation.tpl' => 1,
    'file:adminarea/includes/modals/save-confirmation.tpl' => 1,
  ),
),false)) {
function content_66ea635992d6b8_16209497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85326531166ea63598f9fe4_94439426', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130947201666ea6359905d41_90581598', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34656624666ea6359906d42_54872895', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4546965566ea6359928f75_26477521', "template-modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198097182466ea635992afb6_22809493', "template-actions");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_85326531166ea63598f9fe4_94439426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_85326531166ea63598f9fe4_94439426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_130947201666ea6359905d41_90581598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_130947201666ea6359905d41_90581598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_34656624666ea6359906d42_54872895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_34656624666ea6359906d42_54872895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form 
        id="settingsForm" 
        action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@saveSettings',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
        method="POST" 
        data-check-unsaved-changes
    >
        <input type="hidden" name="settings_tab" value="<?php if ($_GET['settingsTab']) {
echo $_GET['settingsTab'];
} else { ?>settings-general<?php }?>"> 
       
        <div class="section">
            <div class="d-flex">
                <div class="app-main__sidebar">
                    <div class="tabs tabs--block m-w-200 is-sticky">
                        <div 
                            class="tabs__nav"
                            data-options="navStorage:localStorage; localStorageId:custom-slider-23; slideToClickedSlide: true;"
                        >
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
                        </div>
                    </div>
                </div>
                <div class="app-main__content">
                    <div class="tabs__body">
                        <div class="tab-content">
                                                        <?php if (\RSThemes\Helpers\ContentChecker::checkCmsInstalled()) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/display-rule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php }?>
                           
                                                        <div class="tab-pane <?php if ($_GET['settingsTab'] == 'settings-general' || (!\RSThemes\Helpers\ContentChecker::checkCmsInstalled() && !(isset($_GET['settingsTab'])))) {?> is-active <?php }?>" id="settings-general">
                                <div class="t-c__top top" data-top-search data-toggler-options="toggleClass: is-open;">
                                    <div class="top__toolbar">
                                        <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['title'];
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['settings']['general_settings']), 0, false);
?></h3>
                                        
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="app-main__content">
                                        <div class="section">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/custom-logo-url.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
                                                    
                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/display-mode-switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   

                                                                                                                                                            
                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/sticky-sidebars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
                                                    
                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/gravatar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/affixed_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/mobile-menu-style.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/cookie-box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/free-product-price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/show-status-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/table-filter-cache-duration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/show-client-id.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                    
                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/hreflang-links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/capitalize_section_titles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/hide-discounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                                                        <div class="tab-pane <?php if ($_GET['settingsTab'] == 'settings-order') {?> is-active <?php }?>" id="settings-order">
                                <div class="t-c__top top" data-top-search
                                     data-toggler-options="toggleClass: is-open;">
                                    <div class="top__toolbar">
                                        <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['title'];
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['settings']['order_process_settings']), 0, true);
?></h3>
                                        
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="app-main__content">
                                        <div class="section">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/product-package-settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/product-price-settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/product-description-settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                    
                                                                                                        <div class="panel panel--collapse">
                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/group-inputs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('switchId'=>'name-field','title'=>$_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_nameservers']['title'],'name'=>'hide_nameserver_fields','label'=>$_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_nameservers']['title'],'tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_nameservers'],'value'=>$_smarty_tpl->tpl_vars['settings']->value['hide_nameserver_fields']), 0, false);
?>
                                                    </div>

                                                                                                        <div class="panel panel--collapse">
                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/group-inputs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('switchId'=>'password-field','title'=>$_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_hostname']['title'],'name'=>'hide_password_fields','label'=>$_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_hostname']['title'],'tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['hide_product_hostname'],'value'=>$_smarty_tpl->tpl_vars['settings']->value['hide_password_fields'],'customHostname'=>true), 0, true);
?>
                                                    </div>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/enable-pw-strength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/settings/includes/tld-cycle-switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-modals"} */
class Block_4546965566ea6359928f75_26477521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_4546965566ea6359928f75_26477521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/unsaved-changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/cookie-box-translation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/save-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-modals"} */
/* {block "template-actions"} */
class Block_198097182466ea635992afb6_22809493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_198097182466ea635992afb6_22809493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container">
            <a class="btn btn--primary" data-changes-save="#settingsForm" data-form-validate="#settingsForm" data-check-unsaved-changes>
                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['save_changes'];?>
</span>
                <span class="btn__preloader preloader"></span>
            </a>
            <a class="btn btn--default btn--outline " href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@settings',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span>
                <span class="btn__preloader preloader"></span>
            </a>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
}
