<?php
/* Smarty version 3.1.48, created on 2024-12-18 08:57:39
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67628e831a1414_98430048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f8e17742a17c67c7b10152c0bb1781b360db2e7' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/settings.tpl',
      1 => 1701334774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/supportpal/includes/supportpal_breadcrumbs.tpl' => 1,
    'file:adminarea/extensions/supportpal/includes/supportpal_tabs.tpl' => 1,
    'file:adminarea/includes/helpers/tooltip.tpl' => 3,
    'file:adminarea/extensions/supportpal/includes/icon-modal.tpl' => 1,
    'file:adminarea/extensions/supportpal/includes/knowledgebase-icon-item-remove.tpl' => 1,
  ),
),false)) {
function content_67628e831a1414_98430048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191285083767628e83179789_20758080', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163179374367628e8317ac30_89089431', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66164771967628e8317b703_48709121', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43893689167628e8319b736_94158324', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69389165967628e8319ef57_94891945', "template-modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110998830967628e831a0494_64391686', "template-scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_191285083767628e83179789_20758080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_191285083767628e83179789_20758080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/supportpal_breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_163179374367628e8317ac30_89089431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_163179374367628e8317ac30_89089431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/supportpal_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_66164771967628e8317b703_48709121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_66164771967628e8317b703_48709121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon");?>
    <form 
        class="block" 
        action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"saveSettings"));?>
" 
        method="POST"
    >
        <div class="block__body">
            <div class="section">
                <h3 class="section__title">
                    Knowledgebase Category
                </h3>
                <div class="section__body">
                    <div 
                        class="widget__body panel" 
                        data-kb-categories
                    >       
                        <label class="form-label text-default neg-m-b-1x">
                            Graphic
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>"Assign graphics to Knowledgebase category ID (it only works with `modern` view of knowledgebase page)"), 0, false);
?>
                        </label>
                                    
                        <div class="kb-category-row">
                            <?php if ((($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategories !== null )) && is_array($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategories) && count($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategories) > 0) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategories, 'kbcategoryItem');
$_smarty_tpl->tpl_vars['kbcategoryItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kbcategoryItem']->value) {
$_smarty_tpl->tpl_vars['kbcategoryItem']->do_else = false;
?>                                
                                    <div 
                                        class="kb-category-item media media--field media--sm" 
                                        data-kb-category-item
                                        data-index="<?php echo $_smarty_tpl->tpl_vars['kbcategoryItem']->value->id;?>
"                                 
                                        data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"
                                    >
                                        <input type="hidden" name="kbcategory[id][]" value="<?php echo $_smarty_tpl->tpl_vars['kbcategoryItem']->value->id;?>
">
                                        <div class="media__content" >
                                            <a 
                                                class="media__upload <?php if ($_smarty_tpl->tpl_vars['kbcategoryItem']->value->icon != '' || $_smarty_tpl->tpl_vars['kbcategoryItem']->value->predefinedIcon != '' || $_smarty_tpl->tpl_vars['kbcategoryItem']->value->media != '') {?>is-hidden<?php }?>" 
                                                data-toggle="lu-modal" 
                                                data-target="#menuIconModal"
                                                data-kb-category-item-icon-button
                                                data-kb-category-item-icon-new
                                                href="#"
                                            >
                                                <div class="media__upload-content">
                                                    <i class="media__icon ls ls-upload"></i>
                                                    <strong class="media__title p-md">Click to choose icon</strong>
                                                </div>
                                            </a>
                                            <div class="media__body <?php if ($_smarty_tpl->tpl_vars['kbcategoryItem']->value->icon == '' && $_smarty_tpl->tpl_vars['kbcategoryItem']->value->predefinedIcon == '' && $_smarty_tpl->tpl_vars['kbcategoryItem']->value->media == '') {?>is-hidden<?php }?>" data-kb-category-item-icon-content>
                                                <i class="<?php if ($_smarty_tpl->tpl_vars['kbcategoryItem']->value->icon == '') {?>is-hidden<?php } else {
echo $_smarty_tpl->tpl_vars['kbcategoryItem']->value->icon;
}?>" data-kb-category-item-icon></i>
                                                <div class="media__predefined-icon media__predefined-icon--sp <?php if ($_smarty_tpl->tpl_vars['kbcategoryItem']->value->predefinedIcon == '') {?>is-hidden<?php }?>" data-kb-category-item-predefined-icon>
                                                    <?php if ($_smarty_tpl->tpl_vars['kbcategoryItem']->value->predefinedIcon && file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['kbcategoryItem']->value->predefinedIcon))) {?>
                                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['kbcategoryItem']->value->predefinedIcon), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>    
                                                    <?php }?>
                                                </div>
                                                <div class="media__predefined-media <?php if ($_smarty_tpl->tpl_vars['kbcategoryItem']->value->media == '') {?>is-hidden<?php }?>" data-kb-category-item-media>
                                                    <?php if ($_smarty_tpl->tpl_vars['kbcategoryItem']->value->media) {?>
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['kbcategoryItem']->value->media;?>
" />    
                                                    <?php }?>
                                                </div>
                                                <input type="hidden" name="kbcategory[icon][]" value="<?php echo $_smarty_tpl->tpl_vars['kbcategoryItem']->value->icon;?>
" data-kb-category-item-icon-value>
                                                <input type="hidden" name="kbcategory[predefined_icon][]" value="<?php echo $_smarty_tpl->tpl_vars['kbcategoryItem']->value->predefinedIcon;?>
" data-kb-category-item-predefined-icon-value>
                                                <input type="hidden" name="kbcategory[media][]" value="<?php echo $_smarty_tpl->tpl_vars['kbcategoryItem']->value->media;?>
" data-kb-category-item-media-value>
                                            </div>
                                            <div class="media__footer">                                                                                        
                                                <span class="media__name" data-kb-category-item-icon-name>
                                                    Cat Id: <input name="kbcategory[kbid][]" type="number" class="form-control form-control--xs" value="<?php echo $_smarty_tpl->tpl_vars['kbcategoryItem']->value->kbId;?>
" data-kb-category-id>
                                                </span>
                                                <span class="btn btn--icon btn--link btn--xs" data-toggle="lu-modal" data-target="#menuIconModal" data-kb-category-item-icon-button>
                                                    <i class="btn__icon lm lm-pen tooltip drop-target" data-toggle="lu-tooltip" data-title="Edit"></i>
                                                </span>
                                                <a class="btn btn--icon btn--link btn--xs" data-toggle="lu-modal" data-target="#deleteKnowledgebaseIconItem" data-kb-category-item-icon-remove>
                                                    <i class="btn__icon lm lm-trash tooltip drop-target" data-toggle="lu-tooltip" data-title="Remove"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>   
                            <div 
                                class="kb-category-item kb-category-item--new media media--field media--sm" 
                                data-kb-category-item-new
                                data-index="<?php if ((($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategories !== null )) && is_array($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategories)) {
echo count($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategories);
} else { ?>0<?php }?>"                                 
                                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"
                            >                                
                                <a 
                                    class="media__upload"                                         
                                    href="#"
                                >
                                    <div class="media__upload-content">
                                        <i class="media__icon ls ls-plus"></i>
                                        <strong class="media__title p-md">Add New</strong>
                                    </div>
                                </a>
                            </div>        
                        </div>
                        <div class="row m-t-2x">
                            <div class="form-group col-lg-4 col-md-6 col-sm-12 m-b-0x">
                                <label class="form-label text-default">
                                    Columns
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>"Select the number of columns to display categories"), 0, true);
?>
                                </label>
                                <select class="form-control" name="kbcategoriesCols[col]">
                                    <option value="1" <?php if ((($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col !== null )) && $_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col == "1") {?>selected<?php }?>>1</option>
                                    <option value="2" <?php if ((($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col !== null )) && $_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col == "2") {?>selected<?php }?>>2</option>
                                    <option value="3" <?php if ((($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col !== null )) && $_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col == "3") {?>selected<?php }?>>3</option>
                                    <option value="4" <?php if (((($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col !== null )) && $_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col == "4") || !(($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col !== null ))) {?>selected<?php }?>>4</option>
                                    <option value="5" <?php if ((($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col !== null )) && $_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->kbcategoriesCols->col == "5") {?>selected<?php }?>>5</option>
                                </select>
                            </div>
                        </div>        
                   </div>
                </div>
            </div>
            <div class="section">
                <h3 class="section__title">
                    View Ticket
                </h3>
                <div class="section__body">
                    <div class="widget__body panel">
                        <div class="row">
                            <div class="form-group col-lg-4 col-md-6 col-sm-12 m-b-0x">
                                <label class="form-label text-default">
                                    Ticket Reply Order
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>"Select the order in which ticket messages are shown, ascending where the latest message is last or descending where the latest message is first."), 0, true);
?>
                                    
                                </label>
                                <select class="form-control" name="viewticket[sorting]">
                                    <option value="asc" <?php if ((($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->viewticket->sorting !== null )) && $_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->viewticket->sorting == "asc") {?>selected<?php }?>>Ascending</option>
                                    <option value="desc" <?php if (((($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->viewticket->sorting !== null )) && $_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->viewticket->sorting == "desc") || !(($_smarty_tpl->tpl_vars['extension']->value->getPageSettings()->viewticket->sorting !== null ))) {?>selected<?php }?>>Descending</option>
                                </select>
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
/* {block "template-actions"} */
class Block_43893689167628e8319b736_94158324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_43893689167628e8319b736_94158324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <div class="d-flex justify-space-between w-100">
                <div>
                    <button class="btn <?php if (intval($_smarty_tpl->tpl_vars['template']->value->getVersion()) >= 2) {?>btn--primary<?php } else { ?>btn--success<?php }?>" data-form="submit">
                        <span class="btn__text">Save Changes</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--outline btn--default" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">
                        <span class="btn__text">Cancel</span>
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
class Block_69389165967628e8319ef57_94891945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_69389165967628e8319ef57_94891945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/icon-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/knowledgebase-icon-item-remove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_110998830967628e831a0494_64391686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_110998830967628e831a0494_64391686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->extensionAdminScript('supportpal','supportpal.js');?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
