<?php
/* Smarty version 3.1.48, created on 2024-09-24 06:20:16
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/cms/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f25a20b37693_35109352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37559c25ca480e7315c79c74739d2b56d4328aa6' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/cms/config.tpl',
      1 => 1720189766,
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
function content_66f25a20b37693_35109352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109750284066f25a20b22f36_80942582', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130647381466f25a20b24e60_08361049', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82911304366f25a20b25da6_41743303', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76039319666f25a20b33b34_46533103', "template-actions");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_109750284066f25a20b22f36_80942582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_109750284066f25a20b22f36_80942582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/cms/includes/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_130647381466f25a20b24e60_08361049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_130647381466f25a20b24e60_08361049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/cms/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_82911304366f25a20b25da6_41743303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_82911304366f25a20b25da6_41743303',
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
class Block_76039319666f25a20b33b34_46533103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_76039319666f25a20b33b34_46533103',
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
