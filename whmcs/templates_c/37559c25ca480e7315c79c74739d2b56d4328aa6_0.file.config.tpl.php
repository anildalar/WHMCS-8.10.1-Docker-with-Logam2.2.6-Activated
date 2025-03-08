<?php
/* Smarty version 3.1.48, created on 2025-03-04 13:25:52
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/cms/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c6ff60896201_70608103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37559c25ca480e7315c79c74739d2b56d4328aa6' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/cms/config.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/cms/includes/breadcrumbs.tpl' => 1,
    'file:adminarea/extensions/cms/includes/tabs.tpl' => 1,
    'file:adminarea/info/includes/sidebar-logo-lagom-2.tpl' => 1,
    'file:adminarea/info/includes/sidebar-lines.tpl' => 1,
  ),
),false)) {
function content_67c6ff60896201_70608103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1609485767c6ff6088a452_16708243', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16357626467c6ff6088cb14_14567303', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81395545267c6ff6088d969_97161943', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51977679567c6ff608922e3_22378320', "template-actions");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_1609485767c6ff6088a452_16708243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_1609485767c6ff6088a452_16708243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/cms/includes/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_16357626467c6ff6088cb14_14567303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_16357626467c6ff6088cb14_14567303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/cms/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_81395545267c6ff6088d969_97161943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_81395545267c6ff6088d969_97161943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block">
        <div class="block__body">
            <div class="section">
                <h3 class="section__title">Settings</h3>
                <div class="panel">
                    <form id="cmsSave" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"save"));?>
" method="POST">
                        <div class="form-group p-t-2x">
                            <label class="form-label">
                                History limit
                            </label>
                            <input class="form-control" type="text" name="config[history_limit]" value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getHistoryLimit();?>
"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="block__sidebar info-sidebar-block info-sidebar-block--cms">
            <div class="widget widget--lg">
                <a class="widget__media has-overlay info-sidebar-widget">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/info/includes/sidebar-logo-lagom-2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/info/includes/sidebar-lines.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_51977679567c6ff608922e3_22378320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_51977679567c6ff608922e3_22378320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <div class="d-flex justify-space-between w-100">
                <div>
                    <button class="btn <?php if (intval($_smarty_tpl->tpl_vars['template']->value->getVersion()) >= 2) {?>btn--primary<?php } else { ?>btn--success<?php }?>" form="cmsSave">
                        <span class="btn__text">Save Changes</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
}
