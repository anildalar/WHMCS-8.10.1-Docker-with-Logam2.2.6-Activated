<?php
/* Smarty version 3.1.48, created on 2025-03-04 13:30:26
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/pages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c70072495bd8_14781447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0851b81ca23cf40fb647e9c696382d2f48571f32' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/pages.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/supportpal/includes/supportpal_breadcrumbs.tpl' => 1,
    'file:adminarea/extensions/supportpal/includes/supportpal_tabs.tpl' => 1,
    'file:adminarea/extensions/supportpal/includes/page-template-widget.tpl' => 6,
  ),
),false)) {
function content_67c70072495bd8_14781447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74691555067c70072482495_90041102', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175158479367c70072483c82_48060354', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44893575267c700724847b7_30991994', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11513325367c700724913f0_05021172', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35267813767c70072495603_05097643', "template-scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_74691555067c70072482495_90041102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_74691555067c70072482495_90041102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/supportpal_breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_175158479367c70072483c82_48060354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_175158479367c70072483c82_48060354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/supportpal_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_44893575267c700724847b7_30991994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_44893575267c700724847b7_30991994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="block" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"savePages"));?>
" method="POST">
        <div class="block__body">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getPageTempates(), 'pageTemplate', false, 'key');
$_smarty_tpl->tpl_vars['pageTemplate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pageTemplate']->value) {
$_smarty_tpl->tpl_vars['pageTemplate']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == "support-departments") {?>
                    <div class="section">
                        <h3 class="section__title">
                            Support Departments
                        </h3>
                        <div class="section__body" data-inputs-container="radio">
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/page-template-widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageName'=>"support-departments",'layoutName'=>"default",'selectedLayout'=>((string)$_smarty_tpl->tpl_vars['pageTemplate']->value),'layoutLabel'=>"Default",'layoutPreview'=>"supportpal/supportpal_preview-departments-default.png"), 0, true);
?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/page-template-widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageName'=>"support-departments",'layoutName'=>"boxes",'selectedLayout'=>((string)$_smarty_tpl->tpl_vars['pageTemplate']->value),'layoutLabel'=>"Boxes",'layoutPreview'=>"supportpal/supportpal_preview-departments-boxed.png"), 0, true);
?>   
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == "knowledgebase-categories") {?>      
                    <div class="section">
                        <h3 class="section__title">
                            Knowledgebase Categories
                        </h3>
                        <div class="section__body" data-inputs-container="radio">
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/page-template-widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageName'=>"knowledgebase-categories",'layoutName'=>"default",'selectedLayout'=>((string)$_smarty_tpl->tpl_vars['pageTemplate']->value),'layoutLabel'=>"Default",'layoutPreview'=>"supportpal/supportpal_preview-kb-default.png"), 0, true);
?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/page-template-widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageName'=>"knowledgebase-categories",'layoutName'=>"modern",'selectedLayout'=>((string)$_smarty_tpl->tpl_vars['pageTemplate']->value),'layoutLabel'=>"Modern",'layoutPreview'=>"supportpal/supportpal_preview-kb-modern.png"), 0, true);
?>   
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == "announcements") {?>    
                    <div class="section">
                        <h3 class="section__title">
                            Announcements
                        </h3>
                        <div class="section__body" data-inputs-container="radio">
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/page-template-widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageName'=>"announcements",'layoutName'=>"default",'selectedLayout'=>((string)$_smarty_tpl->tpl_vars['pageTemplate']->value),'layoutLabel'=>"Default",'layoutPreview'=>"supportpal/supportpal_preview-announcements-default.png"), 0, true);
?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supportpal/includes/page-template-widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageName'=>"announcements",'layoutName'=>"modern",'selectedLayout'=>((string)$_smarty_tpl->tpl_vars['pageTemplate']->value),'layoutLabel'=>"Modern",'layoutPreview'=>"supportpal/supportpal_preview-announcements-modern.png"), 0, true);
?>   
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </form>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_11513325367c700724913f0_05021172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_11513325367c700724913f0_05021172',
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
                    <a class="btn btn--outline btn--default" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'pages'));?>
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
/* {block "template-scripts"} */
class Block_35267813767c70072495603_05097643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_35267813767c70072495603_05097643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "template-scripts"} */
}
