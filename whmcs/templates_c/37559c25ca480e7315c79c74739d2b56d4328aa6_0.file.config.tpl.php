<?php
/* Smarty version 3.1.48, created on 2024-09-09 03:32:40
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/cms/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66de6c58e69920_67807734',
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
function content_66de6c58e69920_67807734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105563038566de6c58e4f409_62599279', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89981449166de6c58e531a6_30775415', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214267828366de6c58e542d7_22256668', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162200755966de6c58e5a6c4_09554912', "template-actions");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_105563038566de6c58e4f409_62599279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_105563038566de6c58e4f409_62599279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/cms/includes/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_89981449166de6c58e531a6_30775415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_89981449166de6c58e531a6_30775415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/cms/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_214267828366de6c58e542d7_22256668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_214267828366de6c58e542d7_22256668',
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
class Block_162200755966de6c58e5a6c4_09554912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_162200755966de6c58e5a6c4_09554912',
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
