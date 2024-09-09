<?php
/* Smarty version 3.1.48, created on 2024-09-08 05:48:46
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dd3abed6e372_73553952',
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
function content_66dd3abed6e372_73553952 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148634928066dd3abed69893_86813411', "template-heading");
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75335541866dd3abed6a5e4_75057737', "template-tabs");
?>

            </div>
            <div class="app-main__body" id="themesConfig">    
                <div class="container">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213478302166dd3abed6af61_75010052', "template-content");
?>

                </div>
            </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153189946866dd3abed6b954_87287657', "template-sidebar");
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36775043866dd3abed6c251_87618080', "template-actions");
?>

        </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38775890866dd3abed6cb32_06307230', "template-modals");
?>

                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97004142066dd3abed6dbf1_91689384', "template-scripts");
?>

    </div>
</div>
<?php }
/* {block "template-heading"} */
class Block_148634928066dd3abed69893_86813411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_148634928066dd3abed69893_86813411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_75335541866dd3abed6a5e4_75057737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_75335541866dd3abed6a5e4_75057737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_213478302166dd3abed6af61_75010052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_213478302166dd3abed6af61_75010052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
}
}
/* {/block "template-content"} */
/* {block "template-sidebar"} */
class Block_153189946866dd3abed6b954_87287657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-sidebar' => 
  array (
    0 => 'Block_153189946866dd3abed6b954_87287657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-sidebar"} */
/* {block "template-actions"} */
class Block_36775043866dd3abed6c251_87618080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_36775043866dd3abed6c251_87618080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_38775890866dd3abed6cb32_06307230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_38775890866dd3abed6cb32_06307230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_97004142066dd3abed6dbf1_91689384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_97004142066dd3abed6dbf1_91689384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-scripts"} */
}
