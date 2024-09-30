<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:44:52
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de24695789_28813763',
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
function content_66f7de24695789_28813763 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202128433166f7de24690fd1_67942774', "template-heading");
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77588904966f7de24691c18_10765843', "template-tabs");
?>

            </div>
            <div class="app-main__body" id="themesConfig">    
                <div class="container">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137223049766f7de24692513_28742820', "template-content");
?>

                </div>
            </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99394716966f7de24692ed2_05839631', "template-sidebar");
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59655946666f7de246937b3_42097412', "template-actions");
?>

        </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148730763866f7de24694063_31934093', "template-modals");
?>

                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64650802766f7de24694ff2_08494300', "template-scripts");
?>

    </div>
</div>
<?php }
/* {block "template-heading"} */
class Block_202128433166f7de24690fd1_67942774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_202128433166f7de24690fd1_67942774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_77588904966f7de24691c18_10765843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_77588904966f7de24691c18_10765843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_137223049766f7de24692513_28742820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_137223049766f7de24692513_28742820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
}
}
/* {/block "template-content"} */
/* {block "template-sidebar"} */
class Block_99394716966f7de24692ed2_05839631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-sidebar' => 
  array (
    0 => 'Block_99394716966f7de24692ed2_05839631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-sidebar"} */
/* {block "template-actions"} */
class Block_59655946666f7de246937b3_42097412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_59655946666f7de246937b3_42097412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_148730763866f7de24694063_31934093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_148730763866f7de24694063_31934093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_64650802766f7de24694ff2_08494300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_64650802766f7de24694ff2_08494300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-scripts"} */
}
