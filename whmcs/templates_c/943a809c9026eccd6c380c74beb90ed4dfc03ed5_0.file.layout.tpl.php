<?php
/* Smarty version 3.1.48, created on 2024-09-10 03:21:50
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dfbb4ea98891_04114858',
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
function content_66dfbb4ea98891_04114858 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134429136766dfbb4ea91a89_75662580', "template-heading");
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162306146566dfbb4ea945b3_18435078', "template-tabs");
?>

            </div>
            <div class="app-main__body" id="themesConfig">    
                <div class="container">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95482391066dfbb4ea94ec4_64311252', "template-content");
?>

                </div>
            </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184336517266dfbb4ea957d3_13187320', "template-sidebar");
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71178438866dfbb4ea960c5_07983855', "template-actions");
?>

        </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176183589166dfbb4ea96808_71909480', "template-modals");
?>

                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172490578466dfbb4ea98104_62966238', "template-scripts");
?>

    </div>
</div>
<?php }
/* {block "template-heading"} */
class Block_134429136766dfbb4ea91a89_75662580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_134429136766dfbb4ea91a89_75662580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_162306146566dfbb4ea945b3_18435078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_162306146566dfbb4ea945b3_18435078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_95482391066dfbb4ea94ec4_64311252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_95482391066dfbb4ea94ec4_64311252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
}
}
/* {/block "template-content"} */
/* {block "template-sidebar"} */
class Block_184336517266dfbb4ea957d3_13187320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-sidebar' => 
  array (
    0 => 'Block_184336517266dfbb4ea957d3_13187320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-sidebar"} */
/* {block "template-actions"} */
class Block_71178438866dfbb4ea960c5_07983855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_71178438866dfbb4ea960c5_07983855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_176183589166dfbb4ea96808_71909480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_176183589166dfbb4ea96808_71909480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_172490578466dfbb4ea98104_62966238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_172490578466dfbb4ea98104_62966238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template-scripts"} */
}
