<?php
/* Smarty version 3.1.48, created on 2025-03-04 11:57:58
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/cms/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c6eac6761732_15665607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fd3cfe589a5708caf1efb0cb00939d1036e51ad' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/cms/settings.tpl',
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
function content_67c6eac6761732_15665607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122054339967c6eac6758344_91032850', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123586163767c6eac675b966_78220286', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11304846267c6eac675cf04_26879319', "template-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_122054339967c6eac6758344_91032850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_122054339967c6eac6758344_91032850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/cms/includes/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_123586163767c6eac675b966_78220286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_123586163767c6eac675b966_78220286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/cms/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_11304846267c6eac675cf04_26879319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_11304846267c6eac675cf04_26879319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="block">
        <div class="block__body">
            <div class="section">
                <h3 class="section__title">Information</h3>
                <ul class="panel list list--info list--p-1x">
                    <li class="list__item">
                        <span class="list__label">Version:</span>
                        <span class="list__value"><b><?php echo $_smarty_tpl->tpl_vars['extension']->value->getVersion();?>
</b></span>
                    </li>
                    <li class="list__item">
                        <span class="list__label">Name:</span>
                        <span class="list__value"><b><?php echo $_smarty_tpl->tpl_vars['extension']->value->getName();?>
</b></span>
                    </li>
                    <li class="list__item">
                        <span class="list__label">Description:</span>
                        <span class="list__value"><b><?php echo $_smarty_tpl->tpl_vars['extension']->value->getDescription();?>
</b></span>
                    </li>
                </ul>
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
}
