<?php
/* Smarty version 3.1.48, created on 2025-03-08 12:21:55
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/withSidebar/pages/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67cc36630eafb3_48993320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c3660766c918e07eb7715df88e5e3a45361f5d' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/withSidebar/pages/page.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cc36630eafb3_48993320 (Smarty_Internal_Template $_smarty_tpl) {
?><mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>

        component_id='<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
'
        component_namespace='<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
'
        component_index='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
'
        init_details='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getInitDetails();?>
'
></mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
>
<div class="main-header preloaded">
    <div class="container">
        <div class="main-header-content">
            <div class="header-lined">
                <h1 id="newOrderHeader" class="main-header-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('order_new_product');?>
</h1>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getElementById('currencyComponent')) {?>
                <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->insertElementById('currencyComponent');?>

            <?php }?>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getElementById('groupsComponent')) {?>
        <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->insertElementById('groupsComponent');?>

    <?php }?>
</div>
<div class="main-body preloaded">
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getElementById('loaderComponent')) {?>
        <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->insertElementById('loaderComponent');?>

    <?php }?>
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getElementById('promoCodeInfoComponent')) {?>
            <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->insertElementById('promoCodeInfoComponent');?>

        <?php }?>
        <div class="main-grid">
            <div id="baseOrderContent" class="main-content main-content-m-w">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getOrganisedComponentsIds(), 'id', false, 'name');
$_smarty_tpl->tpl_vars['id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getElementById($_smarty_tpl->tpl_vars['id']->value)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->insertElementById($_smarty_tpl->tpl_vars['id']->value);?>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getComponentFields(), 'id', false, 'name');
$_smarty_tpl->tpl_vars['id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getElementById($_smarty_tpl->tpl_vars['id']->value)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->insertElementById($_smarty_tpl->tpl_vars['id']->value);?>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getIntegrationComponents(), 'id', false, 'name');
$_smarty_tpl->tpl_vars['id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getElementById($_smarty_tpl->tpl_vars['id']->value)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->insertElementById($_smarty_tpl->tpl_vars['id']->value);?>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getElementById('cartComponent')) {?>
                <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->insertElementById('cartComponent');?>

            <?php }?>
        </div>
    </div>   
</div><?php }
}
