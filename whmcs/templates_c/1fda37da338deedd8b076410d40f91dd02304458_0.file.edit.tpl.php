<?php
/* Smarty version 3.1.48, created on 2024-09-10 03:22:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dfbb6b50b3a6_37987455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fda37da338deedd8b076410d40f91dd02304458' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/edit.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/cms/breadcrumb.tpl' => 1,
    'file:adminarea/sections/fields.tpl' => 1,
    'file:adminarea/sections/includes/sidebar.tpl' => 1,
    'file:adminarea/pages/includes/modal/modals.tpl' => 1,
    'file:adminarea/sections/includes/modal-remove-section.tpl' => 1,
    'file:adminarea/pages/includes/modal/other/load-autosave.tpl' => 1,
  ),
),false)) {
function content_66dfbb6b50b3a6_37987455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120635713366dfbb6b4eef06_35480261', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106878780166dfbb6b4f09d1_43495746', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206248418866dfbb6b4fc946_10311187', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98327120766dfbb6b5014f2_60540611', "template-modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24955538966dfbb6b502df4_52793965', "template-sidebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151943644666dfbb6b50a1e1_83282042', "template-scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_120635713366dfbb6b4eef06_35480261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_120635713366dfbb6b4eef06_35480261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"section"), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_106878780166dfbb6b4f09d1_43495746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_106878780166dfbb6b4f09d1_43495746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="editSectionForm" 
        action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Section@update',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'sectionId'=>$_smarty_tpl->tpl_vars['sectionId']->value));?>
"
        method="POST"
        enctype="multipart/form-data"
        data-autosave
        data-autosave-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->apiUrl('CmsApi@predefinedAutosave',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
        <?php if ($_smarty_tpl->tpl_vars['autosaveExists']->value && $_GET['autosave'] != "1") {?>
            data-autosave-show-modal
        <?php }?>
    >   <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
">
        <div class="block is-loading">
            <div class="block__body">
                <div class="section">
                    <h3 class="section__title">Section Name</h3>
                    <div class="section__body panel" data-section-name-container>
                        <div class="form-group m-b-0x" data-section-name-form-group>
                            <div class="input-group">
                                <input 
                                    data-section-name 
                                    class="form-control" 
                                    type="text" 
                                    name="name" 
                                    value="<?php echo $_smarty_tpl->tpl_vars['section']->value->name;?>
"
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Section@checkSectionName',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
                                    required
                                >
                                <div class="input-group__loader is-hidden" data-section-name-loader>
                                    <span class="preloader"></span>
                                </div>
                            </div>
                            <div class="alert alert--outline alert--danger alert--xs m-b-0x m-t-1x is-hidden" data-section-name-alert data-text-taken="This section name is taken, please try different one." data-text-empty="Section name can't be empty"></div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <h3 class="section__title">Section Content</h3>
                    <div class="section__body">
                        <div class="form-group form-group--language">
                            <label class="form-label">Choose Language To Edit</label>
                            <div class="has-dropdown">
                                <a 
                                    class="btn btn btn--default btn--outline btn--block btn--language" 
                                    href="" 
                                    data-toggle="lu-dropdown" 
                                    data-display="static" 
                                    data-placement="bottom left" 
                                    data-section-language
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Section@changeSectionLanguage',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'sectionId'=>$_smarty_tpl->tpl_vars['section']->value->id));?>
"
                                >
                                    <span class="btn__text" data-value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"><?php echo ucfirst($_smarty_tpl->tpl_vars['language']->value);?>
</span>
                                    <span class="btn__icon btn__icon-arrow ls ls-caret" data-arrow-target></span>
                                </a>
                                <div class="dropdown dropdown--language" data-dropdown-menu data-section-language-menu>
                                    <div class="dropdown__arrow" data-arrow></div>
                                    <div class="dropdown__menu">
                                        <ul class="nav">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['whmcsLanguages']->value, 'whmcsLanguage');
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['whmcsLanguage']->value) {
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = false;
?>
                                                <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['whmcsLanguage']->value == $_smarty_tpl->tpl_vars['language']->value) {?>is-active<?php }?>">
                                                    <a class="nav__link" data-section-language-menu-item="<?php echo $_smarty_tpl->tpl_vars['whmcsLanguage']->value;?>
" data-section-language-menu-item-text="<?php echo ucfirst($_smarty_tpl->tpl_vars['whmcsLanguage']->value);?>
">
                                                        <span class="nav__link-text"><?php echo ucfirst($_smarty_tpl->tpl_vars['whmcsLanguage']->value);?>
</span>
                                                        <span class="nav__link-icon ls ls-check"></span>
                                                    </a>
                                                </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                         
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__loader preloader-container is-hidden" data-section-loader>
                            <div class="preloader preloader--lg"></div>
                        </div>
                        <div class="section__content" data-section-content>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/sections/fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['sectionValues']->value), 0, false);
?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender('file:adminarea/sections/includes/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
        </div>
    </form>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_206248418866dfbb6b4fc946_10311187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_206248418866dfbb6b4fc946_10311187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container d-flex">
            <div style="flex-grow: 1">
                <button id="saveSectionButton" class="btn btn--primary is-disabled" type="submit" form="editSectionForm" data-section-save>
                    <span class="btn__text">Save Changes</span>
                    <span class="btn__preloader preloader preloader--light"></span>
                </button>
                <a class="btn btn--default btn--outline" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'tab'=>'section'));?>
">
                    <span class="btn__text">Cancel</span>
                    <span class="btn__preloader preloader"></span>
                </a>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['historyList']->value)) && count($_smarty_tpl->tpl_vars['historyList']->value) > 0) {?>
                <div class="m-r-2x">
                    <button type="button" class="btn btn--default btn--outline" data-app-sidebar-slide-open>
                        <span class="btn__text">Show Edit History</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                </div>
            <?php }?>
            <div class="m-r-2x">
                <a class="btn btn--default btn--outline" href="#deleteSectionModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false">
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['delete'];?>
</span>
                    <span class="btn__preloader preloader"></span>
                </a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_98327120766dfbb6b5014f2_60540611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_98327120766dfbb6b5014f2_60540611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/modals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/sections/includes/modal-remove-section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    <?php if ($_smarty_tpl->tpl_vars['autosaveExists']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/other/load-autosave.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('autosave_type'=>'predefined'), 0, false);
?>
    <?php }
}
}
/* {/block "template-modals"} */
/* {block "template-sidebar"} */
class Block_24955538966dfbb6b502df4_52793965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-sidebar' => 
  array (
    0 => 'Block_24955538966dfbb6b502df4_52793965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['historyList']->value)) && count($_smarty_tpl->tpl_vars['historyList']->value) > 0) {?>
        <div class="app-main__sidebar app-main__sidebar--fixed app-main__sidebar--slide" data-app-sidebar-slide>
            <div class="section">
                <div class="section__header top">
                    <h3 class="section__title top__title">Edit History</h3>
                    <div class="section__actions top__actions">
                        <button class="close btn btn--xs btn--icon btn--link" data-app-sidebar-slide-close><i class="btn__icon lm lm-close"></i></button>
                    </div>
                </div>    
                <div class="section__body">
                    <div class="list-group list-group--history">
                        <a class="list-group__item <?php if (!$_GET['history']) {?>is-active<?php }?>"
                            href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Section@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'sectionId'=>$_smarty_tpl->tpl_vars['section']->value->id));?>
"
                            class="btn btn-default"                             
                        >
                            <div class="list-group__item-content">
                                <div class="list-group__item-date">Current Version</div>
                            </div>
                            <span class="btn btn--link btn--xs">Load</span>
                        </a>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['historyList']->value), 'hist');
$_smarty_tpl->tpl_vars['hist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hist']->value) {
$_smarty_tpl->tpl_vars['hist']->do_else = false;
?>                            
                            <a 
                                href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Section@edit',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'sectionId'=>$_smarty_tpl->tpl_vars['sectionId']->value,'history'=>$_smarty_tpl->tpl_vars['hist']->value->fileId));?>
"
                                class="list-group__item <?php if ($_GET['history'] == $_smarty_tpl->tpl_vars['hist']->value->fileId) {?>is-active<?php }?>" 
                            >   
                                <div class="list-group__item-content">
                                    <div class="list-group__item-date"><span>Modified:</span><?php echo date("m-d-Y H:i:s",$_smarty_tpl->tpl_vars['hist']->value->fileModified);?>
</div>
                                    <div class="list-group__item-user"><span>Edited by:</span><?php echo $_smarty_tpl->tpl_vars['hist']->value->adminFirstname;?>
 <?php echo $_smarty_tpl->tpl_vars['hist']->value->adminLastname;?>
</div>
                                </div>
                                <span class="btn btn--link btn--xs">Load</span>
                            </a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
}
/* {/block "template-sidebar"} */
/* {block "template-scripts"} */
class Block_151943644666dfbb6b50a1e1_83282042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_151943644666dfbb6b50a1e1_83282042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('plugins/summernote.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('lagom-cms.js');?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
