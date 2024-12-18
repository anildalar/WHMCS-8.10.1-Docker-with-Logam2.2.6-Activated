<?php
/* Smarty version 3.1.48, created on 2024-12-16 07:31:32
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/comparison-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675fd7549ca326_37155883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d0860f475a27f11a63a05d06d384d8634af354' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/comparison-table.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/pages/includes/comparison-list.tpl' => 1,
  ),
),false)) {
function content_675fd7549ca326_37155883 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) && is_countable($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('newGroupItemPosition', sizeof($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)+1);?>     <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('newGroupItemPosition', 1);?>
    <?php }?>   
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']))) {?>
        <?php $_smarty_tpl->_assignInScope('showModalIconsTabs', $_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']);?>
    <?php }?>

    <label class="form-label">
        <?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];?>

        <a href="#addNewComparisonTableCategoryModal" class="btn btn--link btn--success m-l-a p-r-0x <?php if (!(isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) || empty($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) {?>is-hidden<?php }?>"
            data-add-new-item="comparison-category"
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
                Add Category
            </span>
        </a>
        <a href="#addNewComparisonTableItemModal" class="btn btn--link btn--success p-r-0x <?php if (!(isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) || empty($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) {?>is-hidden<?php }?>"
            data-add-new-item="comparison-item"
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
                Add Feature
            </span>
        </a>
    </label>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/comparison-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value,'btnAddAction'=>'addNewComparisonTableItemModal','btnEditAction'=>'editComparisonTableItemModal','groupIndex'=>$_smarty_tpl->tpl_vars['groupIndex']->value,'listType'=>"comparison-item"), 0, false);
?>
    <input 
        type="hidden" 
        data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" 
        data-list="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
" 
        data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
        name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
]" 
        <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']))) {?>
            data-show-modal-icon="<?php if (!$_smarty_tpl->tpl_vars['showModalIconsTabs']->value) {?>false<?php } else { ?>true<?php }?>"
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['link']))) {?> 
            data-show-modal-link="<?php if (!$_smarty_tpl->tpl_vars['sectionGroupField']->value['link']) {?>false<?php } else { ?>true<?php }?>"
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['sidebarType']->value)) && $_smarty_tpl->tpl_vars['sidebarType']->value) {?>data-list-sidebar-type<?php }?>
        value=""
    >
    
<?php } else { ?>
    
<?php }
}
}
