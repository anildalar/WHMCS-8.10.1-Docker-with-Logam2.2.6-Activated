<?php
/* Smarty version 3.1.48, created on 2024-12-11 09:41:24
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/tld-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67595e4425de40_96250474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1ca30e42ddc600fd920dae422c4391311fb7f5d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/tld-list.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/pages/includes/sortable-list.tpl' => 1,
  ),
),false)) {
function content_67595e4425de40_96250474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconLocation', "./../../../../../../assets/svg-icons");
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) && is_countable($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('newGroupItemPosition', sizeof($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)+1);?>     <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('newGroupItemPosition', 1);?>
    <?php }?>   
    <?php $_smarty_tpl->_assignInScope('domains', $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value);?>
    <div class="form-group">
        <label class="form-label">
            <?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];?>

            <a href="#addNewDomainItemModal" class="btn btn--link btn--success m-l-a p-r-0x <?php if (!(isset($_smarty_tpl->tpl_vars['domains']->value)) || empty($_smarty_tpl->tpl_vars['domains']->value)) {?>is-hidden<?php }?>"
               data-add-new-item="domain"
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
               data-keyboard="false">
                <i class="btn__icon ls ls-plus"></i>
                <span class="btn__text">
                    Add New
                </span>
            </a>
        </label>
                <ul class="sortableList list-page-manager list list--sortable <?php if (empty($_smarty_tpl->tpl_vars['domains']->value)) {?>is-hidden<?php }?>"
            data-item-list="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
            data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
            data-item-list-type="<?php echo $_smarty_tpl->tpl_vars['listType']->value;?>
">
            <?php if (!empty($_smarty_tpl->tpl_vars['domains']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain', false, 'key');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                    <li class="items-list list__item">
                                                <div class="list__item-name">
                            <?php echo $_smarty_tpl->tpl_vars['domain']->value['title'];?>

                        </div>
                                                <div class="list__item-actions">
                            <a class="btn btn--icon btn--link btn--xs"
                               href="#editDomainItemModal"
                               data-edit-item
                               data-toggle="lu-modal"
                               data-backdrop="static"
                               data-keyboard="false"
                               data-key="<?php echo $_smarty_tpl->tpl_vars['domain']->value['index'];?>
"
                               data-position="<?php echo $_smarty_tpl->tpl_vars['domain']->value['position'];?>
"
                               data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                               data-domain-id="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain_id'];?>
"
                            >
                                <i class="btn__icon ls ls-pen"></i>
                            </a>
                            <a class="deleteItem btn btn--icon btn--link btn--xs"
                               href="#deleteItemModal"
                               data-toggle="lu-modal"
                               data-backdrop="static"
                               data-delete-item
                               data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
                               data-index="<?php echo $_smarty_tpl->tpl_vars['domain']->value['index'];?>
"
                               data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                            >
                                <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="Delete Item"></i>
                            </a>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </ul>
                <div class="msg msg--sm m-v-3x <?php if (!empty($_smarty_tpl->tpl_vars['domains']->value)) {?>is-hidden<?php }?>" data-item-empty-list="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
            <div class="msg__icon i-c-6x">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconLocation']->value)."/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="msg__body">
                <span class="msg__title">No items found</span>
                <div class="msg__actions">
                    <a href="#addNewDomainItemModal" class="btn btn--primary"
                       data-add-new-item="domain"
                       data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
                       data-new-index="1"
                       data-new-position="1"
                       data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                       data-toggle="lu-modal"
                       data-backdrop="static"
                       data-keyboard="false">
                        <i class="btn__icon ls ls-plus"></i>
                        <span class="btn__text">Add new item</span>
                    </a>
                </div>
            </div>
        </div>
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
        <?php $_smarty_tpl->_assignInScope('newPosition', sizeof($_smarty_tpl->tpl_vars['sectionFieldValue']->value)+1);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('newPosition', 1);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('domains', $_smarty_tpl->tpl_vars['sectionFieldValue']->value);?>
    <div class="section__field col-12">
        <div class="form-group">
            <label class="form-label">
                <?php echo $_smarty_tpl->tpl_vars['sectionField']->value['label'];?>

                <a href="#addNewDomainItemModal" class="btn btn--link btn--sm m-l-a p-r-0x <?php if (!(isset($_smarty_tpl->tpl_vars['domains']->value)) || empty($_smarty_tpl->tpl_vars['domains']->value)) {?>is-hidden<?php }?>"
                   data-add-new-item="domain"
                   data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                   data-new-index=""
                   data-new-position="<?php echo $_smarty_tpl->tpl_vars['newPosition']->value;?>
"
                   data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                   data-toggle="lu-modal"
                   data-backdrop="static"
                   data-keyboard="false">
                    <i class="btn__icon ls ls-plus"></i>
                    <span class="btn__text">
                    Add New
                </span>
                </a>
            </label>
            <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/sortable-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['sectionFieldValue']->value,'btnAddAction'=>'addNewDomainItemModal','btnEditAction'=>'editDomainItemModal','listType'=>"tld-list"), 0, false);
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
