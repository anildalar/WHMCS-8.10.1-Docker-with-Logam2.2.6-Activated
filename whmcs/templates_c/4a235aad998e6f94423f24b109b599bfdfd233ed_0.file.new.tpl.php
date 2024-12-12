<?php
/* Smarty version 3.1.48, created on 2024-12-12 05:05:33
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675a6f1d0775c5_21062178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a235aad998e6f94423f24b109b599bfdfd233ed' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/new.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/cms/breadcrumb.tpl' => 1,
    'file:adminarea/pages/custom/sections/inputs/".((string)$_smarty_tpl->tpl_vars[\'sectionField\']->value[\'type\']).".tpl' => 1,
    'file:adminarea/sections/includes/sidebar.tpl' => 1,
    'file:adminarea/pages/includes/modal/modals.tpl' => 1,
    'file:adminarea/sections/includes/modal-remove-section.tpl' => 1,
  ),
),false)) {
function content_675a6f1d0775c5_21062178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195559186675a6f1d04d532_89706569', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_284647691675a6f1d053d98_74691721', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_337594540675a6f1d072644_82212312', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1738271542675a6f1d074825_22065554', "template-modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58154280675a6f1d075ae1_91857641', "template-scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_195559186675a6f1d04d532_89706569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_195559186675a6f1d04d532_89706569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"section"), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_284647691675a6f1d053d98_74691721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_284647691675a6f1d053d98_74691721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="newSectionForm" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Section@store',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" method="POST">
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
                                    value="" 
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
                            <label for="sectionLanguage" class="form-label">Choose Language To Edit</label>
                            <input type="hidden" name="language" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
                            <div 
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->section['new']['change_language']) {?>
                                    data-toggle="lu-tooltip"
                                    title="<?php echo $_smarty_tpl->tpl_vars['cms_tooltips']->value->section['new']['change_language'];?>
"
                                <?php }?>
                            >
                                <button 
                                    type="button" 
                                    class="btn btn btn--default btn--outline btn--block btn--language is-disabled"                                    
                                >
                                    <span class="btn__text" data-value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"><?php echo ucfirst($_smarty_tpl->tpl_vars['language']->value);?>
</span>
                                    <span class="btn__icon btn__icon-arrow ls ls-caret" data-arrow-target></span>
                                </button>
                            </div>
                        </div>
                        <div id="section-settings">
                            <div class="widget panel  of-visible m-b-0x">
                                <div class="widget__top top">
                                    <div class="top__title">
                                        <?php echo $_smarty_tpl->tpl_vars['newSection']->value['name'];?>

                                    </div>
                                </div>
                                <div class="widget__body">
                                    <div class="widget__content" data-section-fields>
                                        <?php $_smarty_tpl->_assignInScope('hasSubSection', false);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newSection']->value['fields'], 'sectionField', true, 'sectionKey');
$_smarty_tpl->tpl_vars['sectionField']->iteration = 0;
$_smarty_tpl->tpl_vars['sectionField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionKey']->value => $_smarty_tpl->tpl_vars['sectionField']->value) {
$_smarty_tpl->tpl_vars['sectionField']->do_else = false;
$_smarty_tpl->tpl_vars['sectionField']->iteration++;
$_smarty_tpl->tpl_vars['sectionField']->last = $_smarty_tpl->tpl_vars['sectionField']->iteration === $_smarty_tpl->tpl_vars['sectionField']->total;
$__foreach_sectionField_0_saved = $_smarty_tpl->tpl_vars['sectionField'];
?>
                                            <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['type'] == "subsection") {?>
                                                <?php $_smarty_tpl->_assignInScope('hasSubSection', true);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/custom/sections/inputs/".((string)$_smarty_tpl->tpl_vars['sectionField']->value['type']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sectionIndex'=>0,'sectionField'=>$_smarty_tpl->tpl_vars['sectionField']->value,'sectionKey'=>$_smarty_tpl->tpl_vars['sectionKey']->value), 0, true);
?>
                                            <?php if ($_smarty_tpl->tpl_vars['sectionField']->last && $_smarty_tpl->tpl_vars['hasSubSection']->value) {?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }?>     
                                        <?php
$_smarty_tpl->tpl_vars['sectionField'] = $__foreach_sectionField_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender('file:adminarea/sections/includes/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['newSection']->value), 0, false);
?>
        </div>
    </form>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_337594540675a6f1d072644_82212312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_337594540675a6f1d072644_82212312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container">
            <div>
                <button id="saveSectionButton" class="btn btn--primary is-disabled-override" type="submit" form="newSectionForm" data-section-save>
                    <span class="btn__text">Save Changes</span>
                    <span class="btn__preloader preloader preloader--light"></span>
                </button>
                <a class="btn btn--default btn--outline" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'tab'=>'section'));?>
">
                    <span class="btn__text">Cancel</span>
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
class Block_1738271542675a6f1d074825_22065554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_1738271542675a6f1d074825_22065554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/modals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/sections/includes/modal-remove-section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_58154280675a6f1d075ae1_91857641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_58154280675a6f1d075ae1_91857641',
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
