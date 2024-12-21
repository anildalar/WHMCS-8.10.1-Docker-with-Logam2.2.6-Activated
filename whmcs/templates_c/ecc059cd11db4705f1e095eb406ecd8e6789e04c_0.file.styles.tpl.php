<?php
/* Smarty version 3.1.48, created on 2024-12-21 06:04:37
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/emailstyle/styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67665a7595a515_24730679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecc059cd11db4705f1e095eb406ecd8e6789e04c' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/emailstyle/styles.tpl',
      1 => 1734760266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/emailstyle/includes/breadcrumb.tpl' => 1,
    'file:adminarea/extensions/emailstyle/includes/tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 1,
  ),
),false)) {
function content_67665a7595a515_24730679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182152950367665a7594e7e0_91672512', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200241017667665a7594fec3_68961237', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27131433367665a75950986_15979512', "template-content");
?>


































<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_182152950367665a7594e7e0_91672512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_182152950367665a7594e7e0_91672512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/emailstyle/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_200241017667665a7594fec3_68961237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_200241017667665a7594fec3_68961237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/emailstyle/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_27131433367665a75950986_15979512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_27131433367665a75950986_15979512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="section">
        <div class="section__header">
            <h3 class="section__title">
                Styles
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'https://lagom.rsstudio.net/docs/v2/settings.html#general'), 0, false);
?>
            </h3>
        </div>
        <div class="section__body">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getStyles(), 'emailTemplate', false, 'key');
$_smarty_tpl->tpl_vars['emailTemplate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['emailTemplate']->value) {
$_smarty_tpl->tpl_vars['emailTemplate']->do_else = false;
?>
            <div class="d-inline-block m-r-2x">
                <form id="styleForm<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'styles'));?>
">
                    <input type="hidden" name="exaction" value="activatestyle">
                    <input type="hidden" name="style" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <div class="widget widget--checkbox widget--email-style <?php if ($_smarty_tpl->tpl_vars['extension']->value->getActivatedStyle() == $_smarty_tpl->tpl_vars['key']->value) {?>is-active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getActivatedStyle() != $_smarty_tpl->tpl_vars['key']->value) {?>onclick="document.getElementById(`styleForm<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
`).submit();"<?php }?> >
                        <div class="widget__header">
                            <div class="widget__media widget__media--lg">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/core/extensions/<?php echo $_smarty_tpl->tpl_vars['extension']->value->className;?>
/styles/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/thumb.png" alt=""/>
                            </div>
                            <div class="widget__checkbox">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->img('widgets/checkbox.svg');?>
" alt="">
                            </div>
                        </div>
                        <div class="widget__actions widget__actions--raised flex flex-items-xs-between">
                            <div>
                                <strong>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'basic') {?>Default<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'depth') {?>Depth<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'future') {?>Futuristic<?php } else {
echo ucfirst($_smarty_tpl->tpl_vars['key']->value);
}?>
                                </strong>
                            </div>
                                <?php if ($_smarty_tpl->tpl_vars['extension']->value->getActivatedStyle() != $_smarty_tpl->tpl_vars['key']->value) {?>
                                <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getActivatedStyle() == $_smarty_tpl->tpl_vars['key']->value) {?>
                                <label class="label label--success label--outline">Active</label>
                            <?php } else { ?>
                                <label class="label label--default label--outline">Activate</label>
                            <?php }?>
                        </div>
                    </div>
                </form>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
}
/* {/block "template-content"} */
}
