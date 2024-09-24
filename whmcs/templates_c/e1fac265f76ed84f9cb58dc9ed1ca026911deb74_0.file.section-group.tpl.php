<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:44
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/section-group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252bc13f1c3_83096933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1fac265f76ed84f9cb58dc9ed1ca026911deb74' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/section-group.tpl',
      1 => 1720189762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
    'file:adminarea/pages/custom/sections/inputs/".((string)$_smarty_tpl->tpl_vars[\'sectionGroupInput\']->value[\'type\']).".tpl' => 1,
  ),
),false)) {
function content_66f252bc13f1c3_83096933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list-group__sortable" data-group-item="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
" data-group-position="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_order'];?>
" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" style="order:<?php echo $_smarty_tpl->tpl_vars['group']->value['group_order'];?>
">
    <div id="list-item-group-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
" class="list-group__item flex-column panel p-0x">
        <div class="list-group__top top" id="group-collapse-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
" aria-expanded="false">
            <div class="move-actions">
                <a class="move-actions__btn" type="button" data-group-move-up="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_order'];?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                    <i class="btn__icon ls ls-arrow-up" data-toggle="lu-tooltip" data-title="Move Up"></i>
                </a>
                <a class="move-actions__btn" type="button" data-group-move-down="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_order'];?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                    <i class="btn__icon ls ls-arrow-down" data-toggle="lu-tooltip" data-title="Move Down"></i>
                </a>
            </div>
            <a 
                href="#" 
                class="top__title" 
                data-group-item-title 
                data-toggle="lu-collapse"
                data-target="#collapse-s<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
-g<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                aria-expanded="false"
                aria-controls="collapse-s<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
-g<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                data-index="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
            >
                <?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>

            </a>
            <div class="top__toolbar">
                <button
                    type="button"
                    class="btn btn--icon btn--link btn--sm collapsed"
                    data-toggle="lu-collapse"
                    data-target="#collapse-s<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
-g<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                    aria-expanded="false"
                    aria-controls="collapse-s<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
-g<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                    data-edit-group-item
                    data-index="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                >
                    <i class="btn__icon lm lm-edit" data-toggle="lu-tooltip" data-title="Edit" data-lang-edit="Edit" data-lang-cancel="Cancel"></i>
                </button>
                <button
                    type="button"
                    class="btn btn--icon btn--link btn--sm"
                    href="#deleteGroupModal"
                    data-toggle="lu-modal"
                    data-backdrop="static"
                    data-keyboard="false"
                    data-remove-group-item
                    data-index="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                    data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                    data-position="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_order'];?>
"
                >  
                    <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="Remove"></i>
                </button>
            </div>
        </div>
        <div class="list-group__bottom collapse <?php if ($_smarty_tpl->tpl_vars['collapsed']->value) {?> show <?php }?>" id="collapse-s<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
-g<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
">
            <div class="list-group__content">
                <fieldset data-group-fieldset class="m-b-2x <?php if (!$_smarty_tpl->tpl_vars['grouped']->value) {?>is-hidden<?php }?>"> 
                    <div class="form-group">
                        <label class="control-label">
                            Group Title
                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='inline_url' target='_blank'>Learn More</a>");?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>"inline_description",'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                        </label>
                        <input 
                            type="text" 
                            class="form-control"
                            name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
][group_name]"
                            value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
"
                            data-group-name
                            data-index="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                            data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                            placeholder="Enter group name..."
                        >
                    </div>
                </fieldset>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['fields'], 'sectionGroupInput');
$_smarty_tpl->tpl_vars['sectionGroupInput']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionGroupInput']->value) {
$_smarty_tpl->tpl_vars['sectionGroupInput']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/custom/sections/inputs/".((string)$_smarty_tpl->tpl_vars['sectionGroupInput']->value['type']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('groupIndex'=>$_smarty_tpl->tpl_vars['group']->value['group_index'],'sectionGroupInputValue'=>$_smarty_tpl->tpl_vars['group']->value['fields'][$_smarty_tpl->tpl_vars['sectionGroupInput']->value['name']],'sectionGroupField'=>$_smarty_tpl->tpl_vars['sectionGroupInput']->value), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <input type="hidden"
                   class="group_order_<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                   name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
][group_order]"
                   value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_order'];?>
"
                   data-group-order
            >
            <input type="hidden"
                   name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
][group_index]"
                   value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                   data-group-index
            >
        </div>
    </div>
</div>
<?php }
}
