<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:53:05
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/group-input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dffae118e118_40914017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2335a327ac98cab7ad70fbae11d7560e1f839e08' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/group-input.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
    'file:adminarea/pages/includes/section-group.tpl' => 2,
  ),
),false)) {
function content_66dffae118e118_40914017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ((isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value['grouped']))) {?>
    <?php $_smarty_tpl->_assignInScope('grouped', $_smarty_tpl->tpl_vars['sectionFieldValue']->value['grouped']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('grouped', $_smarty_tpl->tpl_vars['sectionField']->value['grouped']);
}
if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['group_forced']))) {?>
    <?php $_smarty_tpl->_assignInScope('groupForced', $_smarty_tpl->tpl_vars['sectionField']->value['group_forced']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('groupForced', $_smarty_tpl->tpl_vars['sectionFieldValue']->value['group_forced']);
}?>

<div class="section__field col-12">
    <input type="hidden" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][group_forced]"
           value="<?php if ($_smarty_tpl->tpl_vars['groupForced']->value) {?>1<?php } else { ?>0<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['groupForced']->value) {?>
        <div class="form-group">
            <label class="form-label is-pointer m-b-0x">
                <span class="form-text d-flex align-items-center">
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
                </span>
                <div class="switch switch--success m-l-0x">
                    <input type="hidden" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][grouped]" value="0" />
                    <input
                        class="switch__checkbox"
                        data-group-items
                        data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                        name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][grouped]"
                        value="1"
                        type="checkbox"
                        <?php if ($_smarty_tpl->tpl_vars['grouped']->value) {?> checked <?php }?>
                        data-switch-group-content
                    >                     <span class="switch__container">
                        <span class="switch__handle"></span>
                    </span>
                </div>
            </label>
        </div>
    <?php } else { ?>
        <input type="hidden" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][grouped]" value="1">
    <?php }?>
    
    <div class="form-group <?php if (!$_smarty_tpl->tpl_vars['grouped']->value) {?>is-hidden<?php }?>" data-group-header data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
        <span class="form-label"><?php echo smarty_modifier_replace(ucfirst($_smarty_tpl->tpl_vars['sectionField']->value['name']),"_"," ");?>

            <button type="button"
                class="btn btn--link btn--sm btn--success m-l-a p-r-0x"
                data-add-new-group
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@newGroup',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                data-group-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                data-new-index="<?php if ((isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value['new_group_index']))) {
echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['new_group_index'];
} else { ?>2<?php }?>"
                data-new-order="<?php if ((isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value['groups'])) && sizeof($_smarty_tpl->tpl_vars['sectionFieldValue']->value['groups']) > 0) {
echo sizeof($_smarty_tpl->tpl_vars['sectionFieldValue']->value['groups'])+1;
} else { ?>2<?php }?>"
                data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                data-grouped-section-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['group_section'];?>
"
            >
                <i class="btn__icon ls ls-plus"></i>
                <span class="btn__text">
                    Add Group
                </span>
            </button>
        </span>
    </div>
    <div class="sortable-list list-group d-flex list-group--section <?php if (!$_smarty_tpl->tpl_vars['grouped']->value) {?>list-group--ungrouped<?php }?> list-group--simple list-group--p-h-0x list-group--collapse m-b-0x" data-group-list data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
        <?php if ((isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value['groups']))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionFieldValue']->value['groups'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/section-group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('group'=>$_smarty_tpl->tpl_vars['group']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>             <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/section-group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('collapsed'=>true,'group'=>array('group_index'=>1,'group_name'=>'','group_order'=>1)), 0, true);
?>
        <?php }?>
    </div>
</div>



<?php }
}
