<?php
/* Smarty version 3.1.48, created on 2024-09-10 03:22:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/testimonial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dfbb6b571940_64730197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28bd6bf0d971c0e0a9e0ebaf95e8ba3966b70c60' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/testimonial.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/pages/includes/sortable-list.tpl' => 2,
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66dfbb6b571940_64730197 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) && is_countable($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('newGroupItemPosition', sizeof($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)+1);?>     <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('newGroupItemPosition', 1);?>
    <?php }?>   
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']))) {?>
        <?php $_smarty_tpl->_assignInScope('showModalIconsTabs', $_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']);?>
    <?php }?>
    <div class="form-group">
        <label class="form-label">
            <?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];?>

            <a href="#newTestimonialsItemModal" class="btn btn--link btn--success m-l-a p-r-0x <?php if (!(isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) || empty($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) {?>is-hidden<?php }?>"
               data-add-new-item="testimonial"
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
        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/sortable-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value,'btnAddAction'=>'newTestimonialsItemModal','btnEditAction'=>'editTestimonialsItemModal','listType'=>'testimonial','groupIndex'=>$_smarty_tpl->tpl_vars['groupIndex']->value), 0, false);
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

                <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['tooltip']) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['tooltip_url'])) && $_smarty_tpl->tpl_vars['sectionField']->value['tooltip_url'] != '') {?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['sectionField']->value['tooltip_url'])."' target='_blank'>Learn More</a>");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['sectionField']->value['tooltip']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                <?php }?>
                <a 
                    href="#newTestimonialsItemModal" 
                    class="btn btn--link btn--sm m-l-a p-r-0x <?php if (!(isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value)) || empty($_smarty_tpl->tpl_vars['sectionFieldValue']->value)) {?>is-hidden<?php }?>"
                    data-add-new-item="testimonial"
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
                    <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['icons']))) {?> 
                        data-show-modal-icon="<?php if (!$_smarty_tpl->tpl_vars['showModalIconsTabs']->value) {?>false<?php } else { ?>true<?php }?>"
                    <?php }?>
                >
                    <i class="btn__icon ls ls-plus"></i>
                    <span class="btn__text">
                        Add New
                    </span>
                </a>
            </label>
            <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/sortable-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['sectionFieldValue']->value,'btnAddAction'=>'newTestimonialsItemModal','btnEditAction'=>'editTestimonialsItemModal','listType'=>'testimonial'), 0, true);
?>
            <input 
                type="hidden" 
                data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" 
                data-list="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
]"
                <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['icons']))) {?> 
                    data-show-modal-icon="<?php if (!$_smarty_tpl->tpl_vars['showModalIconsTabs']->value) {?>false<?php } else { ?>true<?php }?>"
                <?php }?> 
                value=""
            >
        </div>
    </div>
<?php }?>

<?php }
}
