<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:53:05
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dffae1245af2_50179726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ed05c1e430fc0d8c2f3d2894a26be3a9505cb8' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/product.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/pages/includes/sortable-list.tpl' => 2,
  ),
),false)) {
function content_66dffae1245af2_50179726 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) && is_countable($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('newGroupItemPosition', sizeof($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)+1);?>     <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('newGroupItemPosition', 1);?>
    <?php }?>   
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']))) {?>
        <?php $_smarty_tpl->_assignInScope('showModalIconsTabs', $_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('isComparison', false);?>

    <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['fields'])) && is_array($_smarty_tpl->tpl_vars['sectionField']->value['fields'])) {?>    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "comparison-table") {?>  
                <?php $_smarty_tpl->_assignInScope('isComparison', "comparison_table");?>
                <?php break 1;?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <div class="form-group">
        <label class="form-label">
            <?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];?>

            <a href="#addNewProductItemModal" class="btn btn--link btn--success m-l-a p-r-0x <?php if (!(isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) || empty($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) {?>is-hidden<?php }?>"
               data-add-new-item="product"
               data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
               data-new-index=""
               data-new-position="<?php echo $_smarty_tpl->tpl_vars['newGroupItemPosition']->value;?>
"
               data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
               data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
               data-toggle="lu-modal"
               data-backdrop="static"
               data-keyboard="false"
               <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']))) {?> data-show-modal-icon='<?php if (!$_smarty_tpl->tpl_vars['showModalIconsTabs']->value) {?>false<?php } else { ?>true<?php }?>'<?php }?>>
                <i class="btn__icon ls ls-plus"></i>
                <span class="btn__text">
                    Add New
                </span>
            </a>
        </label>
        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/sortable-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value,'btnAddAction'=>'addNewProductItemModal','btnEditAction'=>'editProductItemModal','listType'=>'product','groupIndex'=>$_smarty_tpl->tpl_vars['groupIndex']->value,'comparison'=>$_smarty_tpl->tpl_vars['isComparison']->value), 0, false);
?>
        <input type="hidden" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" data-list="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
               name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
]" value="">
    </div>
<?php } else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value)) && is_countable($_smarty_tpl->tpl_vars['sectionFieldValue']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('newPosition', sizeof($_smarty_tpl->tpl_vars['sectionFieldValue']->value)+1);?>     <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('newPosition', 1);?>
    <?php }?>  
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['icons']))) {?> 
        <?php $_smarty_tpl->_assignInScope('showModalIconsTabs', $_smarty_tpl->tpl_vars['sectionField']->value['icons']);?>
    <?php }?>
    <div class="section__field col-12">
        <div class="form-group">
            <label class="form-label">
                <?php echo $_smarty_tpl->tpl_vars['sectionField']->value['label'];?>

                <a href="#addNewProductItemModal" class="btn btn--link btn--sm m-l-a p-r-0x <?php if (!(isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value)) || empty($_smarty_tpl->tpl_vars['sectionFieldValue']->value)) {?>is-hidden<?php }?>"
                   data-add-new-item="product"
                   data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                   data-new-index=""
                   data-new-position="<?php echo $_smarty_tpl->tpl_vars['newPosition']->value;?>
"
                   data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                   data-toggle="lu-modal"
                   data-backdrop="static"
                   data-keyboard="false"
                   <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['icons']))) {?> data-show-modal-icon='<?php if (!$_smarty_tpl->tpl_vars['showModalIconsTabs']->value) {?>false<?php } else { ?>true<?php }?>'<?php }?>>
                    <i class="btn__icon ls ls-plus"></i>
                    <span class="btn__text">
                    Add New
                </span>
                </a>
            </label>
            <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/sortable-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['sectionFieldValue']->value,'btnAddAction'=>'addNewProductItemModal','btnEditAction'=>'editProductItemModal','listType'=>'product'), 0, true);
?>
            <input type="hidden" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" data-list="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                   name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
]" value="">
        </div>
    </div>
<?php }?>


<?php }
}
