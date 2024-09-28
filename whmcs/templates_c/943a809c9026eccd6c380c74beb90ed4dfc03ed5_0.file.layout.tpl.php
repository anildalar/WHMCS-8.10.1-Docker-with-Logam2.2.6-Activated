<?php
/* Smarty version 3.1.48, created on 2024-09-27 10:43:43
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f68c5ff0f390_15492420',
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
function content_66f68c5ff0f390_15492420 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66085765466f68c5ff0a9d5_09150694', "template-heading");
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28138414966f68c5ff0b493_85732729', "template-tabs");
?>

            </div>
            <div class="app-main__body" id="themesConfig">    
                <div class="container">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158809224666f68c5ff0be23_22998865', "template-content");
?>

                </div>
            </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148464145066f68c5ff0c710_31546814', "template-sidebar");
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35643558366f68c5ff0cff5_22438433', "template-actions");
?>

        </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48904265166f68c5ff0dbd0_65425283', "template-modals");
?>

                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37111128966f68c5ff0eac9_19817907', "template-scripts");
?>

    </div>
</div>
<?php }
/* {block "template-heading"} */
class Block_66085765466f68c5ff0a9d5_09150694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_66085765466f68c5ff0a9d5_09150694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_28138414966f68c5ff0b493_85732729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_28138414966f68c5ff0b493_85732729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_158809224666f68c5ff0be23_22998865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_158809224666f68c5ff0be23_22998865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
}
}
/* {/block "template-content"} */
/* {block "template-sidebar"} */
class Block_148464145066f68c5ff0c710_31546814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-sidebar' => 
  array (
    0 => 'Block_148464145066f68c5ff0c710_31546814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-sidebar"} */
/* {block "template-actions"} */
class Block_35643558366f68c5ff0cff5_22438433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_35643558366f68c5ff0cff5_22438433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_48904265166f68c5ff0dbd0_65425283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_48904265166f68c5ff0dbd0_65425283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_37111128966f68c5ff0eac9_19817907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_37111128966f68c5ff0eac9_19817907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-scripts"} */
}
