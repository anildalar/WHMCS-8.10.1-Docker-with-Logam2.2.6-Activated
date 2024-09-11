<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:37:24
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/display/show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7343ed573_53399789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '263c9064c17a2f7ed71d252233531df1d98ea8a0' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/display/show.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
  ),
),false)) {
function content_66dff7343ed573_53399789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177903081366dff7343d29f2_01075600', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110570487966dff7343d4e49_85445233', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78973300966dff7343d5ae1_79358974', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207347982566dff7343eb9f2_97437758', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132660863366dff7343ec225_33115056', "template-scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_177903081366dff7343d29f2_01075600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_177903081366dff7343d29f2_01075600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'display'), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_110570487966dff7343d4e49_85445233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_110570487966dff7343d4e49_85445233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'display'), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_78973300966dff7343d5ae1_79358974 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_78973300966dff7343d5ae1_79358974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="displayForm" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Display@save',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'displayName'=>$_smarty_tpl->tpl_vars['display']->value->name,'ruleId'=>$_smarty_tpl->tpl_vars['displayRule']->value->id));?>
" method="POST">
        <div class="tab-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display']->value->rules, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                <div class="tab-pane display-rules <?php if ($_smarty_tpl->tpl_vars['displayRule']->value->id === $_smarty_tpl->tpl_vars['rule']->value->id) {?> is-active <?php }?>" id="display-rule-<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
">
                    <h3 class="section__title m-b-3x">Theme Settings for <?php echo $_smarty_tpl->tpl_vars['rule']->value->name;?>
</h3>
                    <div class="row panel m-h-0x p-r-1x p-b-1x">
                        <div class="col-md-6 p-l-0x p-r-2x">
                            <div class="form-group">
                                <label class="form-label">Navigation Layout</label>
                                <select class="form-control " name="rules[<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
][navigationLayout]">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getMainMenuLayouts(), 'layout');
$_smarty_tpl->tpl_vars['layout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['layout']->value->getMainName();?>
" <?php if ($_smarty_tpl->tpl_vars['rule']->value->navigation_layout == $_smarty_tpl->tpl_vars['layout']->value->getMainName()) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['layout']->value->getName();?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 p-l-0x p-r-2x">
                            <div class="form-group">
                                <label class="form-label">Footer Layout</label>
                                <select class="form-control" name="rules[<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
][footerLayout]">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getFooterLayouts(), 'layout');
$_smarty_tpl->tpl_vars['layout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['layout']->value->getMainName();?>
" <?php if ($_smarty_tpl->tpl_vars['rule']->value->footer_layout == $_smarty_tpl->tpl_vars['layout']->value->getMainName()) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['layout']->value->getName();?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h3 class="section__title m-b-3x">Menu Settings for <?php echo $_smarty_tpl->tpl_vars['rule']->value->name;?>
</h3>
                    <div class="row panel m-h-0x p-r-1x p-b-1x">
                        <div class="col-md-6 p-l-0x p-r-2x">
                            <div class="form-group">
                                <label class="form-label">Main Menu</label>
                                <select class="form-control menu-seletize" name="rules[<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
][mainMenu]">
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['rule']->value->main_menu_id))) {?>
                                        <option value="" selected>Choose menu from list bellow</option>
                                    <?php }?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display']->value->main_menus, 'mainMenu');
$_smarty_tpl->tpl_vars['mainMenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mainMenu']->value) {
$_smarty_tpl->tpl_vars['mainMenu']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['mainMenu']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['rule']->value->main_menu_id == $_smarty_tpl->tpl_vars['mainMenu']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value->name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 p-l-0x p-r-2x">
                            <div class="form-group">
                                <label class="form-label">Secondary Menu</label>
                                <select class="form-control menu-seletize" name="rules[<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
][secondaryMenu]" data-placeholder="Choose from selected list">
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['rule']->value->secondary_menu_id))) {?>
                                        <option value="" selected>Choose menu from list bellow</option>
                                    <?php }?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display']->value->secondary_menus, 'secondaryMenu');
$_smarty_tpl->tpl_vars['secondaryMenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['secondaryMenu']->value) {
$_smarty_tpl->tpl_vars['secondaryMenu']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['secondaryMenu']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['rule']->value->secondary_menu_id == $_smarty_tpl->tpl_vars['secondaryMenu']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['secondaryMenu']->value->name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 p-l-0x p-r-2x">
                            <div class="form-group">
                                <label class="form-label">Footer Menu</label>
                                <select class="form-control menu-seletize" name="rules[<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
][footerMenu]">
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['rule']->value->footer_menu_id))) {?>
                                        <option value="" selected>Choose menu from list bellow</option>
                                    <?php }?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display']->value->footer_menus, 'footerMenu');
$_smarty_tpl->tpl_vars['footerMenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['footerMenu']->value) {
$_smarty_tpl->tpl_vars['footerMenu']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['footerMenu']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['rule']->value->footer_menu_id == $_smarty_tpl->tpl_vars['footerMenu']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['footerMenu']->value->name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
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
class Block_207347982566dff7343eb9f2_97437758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_207347982566dff7343eb9f2_97437758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container d-flex">
            <div class="flex-grow-1">
                <button class="btn btn--primary" type="submit" form="displayForm">
                    <span class="btn__text">Save Changes</span>
                    <span class="btn__preloader preloader"></span>
                </button>
                <a class="btn btn--default btn--outline " href="">
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
/* {block "template-scripts"} */
class Block_132660863366dff7343ec225_33115056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_132660863366dff7343ec225_33115056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
        <?php echo '<script'; ?>
>
            $('.menu-seletize').selectize({
                allowEmptyOption: true,
            });
        <?php echo '</script'; ?>
>
        <style>
            .selectize-dropdown{
                height: auto!important;
            }
        </style>
    
<?php
}
}
/* {/block "template-scripts"} */
}
