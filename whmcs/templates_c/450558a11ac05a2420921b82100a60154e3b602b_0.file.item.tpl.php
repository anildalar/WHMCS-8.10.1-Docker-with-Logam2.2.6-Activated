<?php
/* Smarty version 3.1.48, created on 2024-09-24 06:17:47
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/customcode/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f2598b157861_49344511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '450558a11ac05a2420921b82100a60154e3b602b' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/customcode/item.tpl',
      1 => 1700234028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/customcode/includes/breadcrumbs/breadcrumbs-item.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 2,
    'file:adminarea/includes/helpers/popover.tpl' => 5,
    'file:adminarea/extensions/customcode/includes/modal/remove-item.tpl' => 1,
    'file:adminarea/includes/modals/save-confirmation.tpl' => 1,
    'file:adminarea/includes/modals/unsaved-changes.tpl' => 1,
  ),
),false)) {
function content_66f2598b157861_49344511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195386008366f2598b0daa05_84440274', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166567182866f2598b0dc920_42284956', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185758134766f2598b150863_97331594', "template-scripts");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43521220266f2598b153879_37902416', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128207031166f2598b155a51_84467812', "template-modals");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_195386008366f2598b0daa05_84440274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_195386008366f2598b0daa05_84440274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/customcode/includes/breadcrumbs/breadcrumbs-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_166567182866f2598b0dc920_42284956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_166567182866f2598b0dc920_42284956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form 
        id="customCodeForm" 
        action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"save"));?>
" 
        data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"save"));?>
"
        method="POST"
        data-check-unsaved-changes
    >
        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("id");?>
" class="form-control " type="hidden" name="id">
        <div class="block">
            <div class="block__body">
                <div class="section">
                    <h3 class="section__title">
                        Editor
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['extension']->value->getDocs()->item['editor']), 0, false);
?>
                    </h3>
                    <div class="widget panel widget--editor">
                        <div class="widget__body">
                            <div class="widget__content p-0x" style="position: relative; min-height: 300px;">
                                <input class="editor-value" type="hidden" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("value");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" name="value">
                                <div id="editor"><?php echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("value");?>
</div>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['extension']->value->getItemData("id"))) {?>
                        <p><span class="text-faded">Last Modification: </span><b><?php echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("edited");?>
</b></p>
                    <?php }?>
                </div>
            </div>
            <div class="block__sidebar block__sidebar--md">
                <div class="section">
                    <h3 class="section__title">Instance Settings
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['extension']->value->getDocs()->item['instance_settings']), 0, true);
?>
                    </h3>
                    <div class="section__body">
                        <div class="widget panel of-visible">
                            <label class="widget__top top">
                                <div class="top__title">
                                    General
                                </div>
                            </label>
                            <div class="widget__body">
                                <div class="widget__content">
                                    <div class="form-group">
                                        <label class="form-label">
                                            Name
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['name']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['name']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['name']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['name']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['name']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                            <?php }?>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("name");?>
" lu-required>
                                            <span class="form-feedback is-hidden"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['field_required'];?>
</span>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="form-label text-default form-text m-r-2x m-t-0x m-b-0x" style="flex-grow: 1">
                                            Activate Instance
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['activate_instance']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['activate_instance']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['activate_instance']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['activate_instance']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['general']['activate_instance']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </span>
                                        <label>
                                            <div class="switch switch--primary">
                                                <input class="switch__checkbox" name="enabled" value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("enabled");?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("enabled")) {?>checked<?php }?>>
                                                <span class="switch__container"><span class="switch__handle"></span></span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget panel of-visible">
                            <label class="widget__top top">
                                <div class="top__title">
                                    Display
                                </div>
                            </label>
                            <div class="widget__body">
                                <div class="widget__content">
                                    <div class="form-group">
                                        <label class="form-label">
                                            Code Location
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['code_location']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['code_location']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['code_location']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['code_location']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['code_location']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </label>
                                        <select class="form-control code-location-select" name="location" data-custom-code-location-select>
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ClientAreaHeaderOutput") {?>selected<?php }?>>ClientAreaHeaderOutput</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ClientAreaHeadOutput") {?>selected<?php }?>>ClientAreaHeadOutput</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ClientAreaFooterOutput") {?>selected<?php }?>>ClientAreaFooterOutput</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ClientAreaProductDetailsOutput") {?>selected<?php }?>>ClientAreaProductDetailsOutput</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ShoppingCartCheckoutOutput") {?>selected<?php }?>>ShoppingCartCheckoutOutput</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ShoppingCartConfigureProductAddonsOutput") {?>selected<?php }?>>ShoppingCartConfigureProductAddonsOutput</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ClientAreaDomainDetailsOutput") {?>selected<?php }?>>ClientAreaDomainDetailsOutput</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-b-0x">
                                        <label class="form-label">
                                            Customer Status
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['customer_status']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['customer_status']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['customer_status']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['customer_status']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['customer_status']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </label>
                                        <select class="form-control" name="client">
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("client") == "all") {?>selected<?php }?> value="all">All</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("client") == "loggedin") {?>selected<?php }?> value="loggedin">Logged In</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("client") == "loggedout") {?>selected<?php }?> value="loggedout">Logged Out</option>
                                        </select>
                                    </div>
                                    <div data-custom-code-location-specified-page-container id="specificPageField" class="form-group m-t-2x <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ClientAreaHeaderOutput" || $_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ClientAreaHeadOutput" || $_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == "ClientAreaFooterOutput" || $_smarty_tpl->tpl_vars['extension']->value->getItemData("location") == '') {
} else { ?>is-hidden<?php }?>">
                                        <label class="form-label">
                                            Display on specific pages
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['display_on_page']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['display_on_page']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['display_on_page']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['display_on_page']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['display']['display_on_page']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </label>
                                        <select data-custom-code-location-specified-page class="form-control multiselect form-control--basic specific-page-select" name="pages[]" multiple>
                                            <option value="AllPages" <?php if (is_array(json_decode($_smarty_tpl->tpl_vars['extension']->value->getItemData("pages"))) && in_array("AllPages",json_decode($_smarty_tpl->tpl_vars['extension']->value->getItemData("pages")))) {?> selected<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['extension']->value->getItemData("id"))) {?>selected<?php }?>>All</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getVisiblePages(), 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
" <?php if (is_array(json_decode($_smarty_tpl->tpl_vars['extension']->value->getItemData("pages"))) && in_array($_smarty_tpl->tpl_vars['page']->value['name'],json_decode($_smarty_tpl->tpl_vars['extension']->value->getItemData("pages")))) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
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
/* {block "template-scripts"} */
class Block_185758134766f2598b150863_97331594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_185758134766f2598b150863_97331594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->extensionAdminScript('customcode','ace.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->extensionAdminScript('customcode','ace.textmate.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        ace.config.set('basePath', "<?php echo $_smarty_tpl->tpl_vars['helper']->value->extensionAdminScript('customcode','');?>
");
        var editor = ace.edit("editor");

        editor.setTheme("ace/theme/textmate");
        editor.session.setMode("ace/mode/php");
        editor.session.on('change', (e) => {
            document.querySelector('.editor-value').value = editor.getValue()
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->extensionAdminScript('customcode','custom-code.js');?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
/* {block "template-actions"} */
class Block_43521220266f2598b153879_37902416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_43521220266f2598b153879_37902416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <div class="d-flex justify-space-between w-100">
                <div>
                    <button 
                        class="btn btn--primary"
                        type="button"
                        data-check-unsaved-changes
                        data-changes-save="#customCodeForm"
                        data-form-validate="#customCodeForm"
                    >
                        <span class="btn__text">Save Changes</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--outline btn--default" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">
                        <span class="btn__text">Cancel</span>
                        <span class="btn__preloader preloader"></span>
                    </a>
                </div>
                <div class="m-l-a">
                    <a class="btn btn--outline btn--default" href="#modal-delete-item" data-toggle="lu-modal" data-check-unsaved-changes>
                        <span class="btn__text">Delete</span>
                        <span class="btn__preloader preloader"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_128207031166f2598b155a51_84467812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_128207031166f2598b155a51_84467812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/customcode/includes/modal/remove-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['extension']->value->getItemData("id")), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/save-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/unsaved-changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-modals"} */
}
