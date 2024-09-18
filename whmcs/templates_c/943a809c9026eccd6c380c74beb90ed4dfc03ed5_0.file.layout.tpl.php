<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:50:45
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea6a353d8f28_85195398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '943a809c9026eccd6c380c74beb90ed4dfc03ed5' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/layout.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/header.tpl' => 1,
    'file:adminarea/includes/navbar.tpl' => 1,
    'file:adminarea/includes/footer.tpl' => 1,
  ),
),false)) {
function content_66ea6a353d8f28_85195398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="rs-module">
    <div class="app app--navbar-top app--navbar-h-simple">
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="app-main">
		    <div class="app-main__header">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49775745466ea6a353d5691_95986728', "template-heading");
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76229584566ea6a353d60b5_23189769', "template-tabs");
?>

            </div>
            <div class="app-main__body" id="themesConfig">    
                <div class="container">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131739002766ea6a353d67f9_82425274', "template-content");
?>

                </div>
            </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53819549766ea6a353d6ed8_63922348', "template-sidebar");
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107842504066ea6a353d74e3_83972738', "template-actions");
?>

        </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179610115266ea6a353d7ae9_88666021', "template-modals");
?>

                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22594201666ea6a353d87c7_79905093', "template-scripts");
?>

    </div>
</div>
<?php }
/* {block "template-heading"} */
class Block_49775745466ea6a353d5691_95986728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_49775745466ea6a353d5691_95986728',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_76229584566ea6a353d60b5_23189769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_76229584566ea6a353d60b5_23189769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_131739002766ea6a353d67f9_82425274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_131739002766ea6a353d67f9_82425274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
}
}
/* {/block "template-content"} */
/* {block "template-sidebar"} */
class Block_53819549766ea6a353d6ed8_63922348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-sidebar' => 
  array (
    0 => 'Block_53819549766ea6a353d6ed8_63922348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-sidebar"} */
/* {block "template-actions"} */
class Block_107842504066ea6a353d74e3_83972738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_107842504066ea6a353d74e3_83972738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_179610115266ea6a353d7ae9_88666021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_179610115266ea6a353d7ae9_88666021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_22594201666ea6a353d87c7_79905093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_22594201666ea6a353d87c7_79905093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-scripts"} */
}
