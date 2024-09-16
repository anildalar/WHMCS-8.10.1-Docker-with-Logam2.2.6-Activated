<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/text-editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7d37e247_03004208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2be7b7957433846a09eef3025fa7ce574531b6f6' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/text-editor.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 2,
  ),
),false)) {
function content_66e40e7d37e247_03004208 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <div class="form-group">
        <label class="form-label">
            <?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];?>

            <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip']) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip_url'])) && $_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip_url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip_url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </label>
        <textarea 
            class="form-control" 
            data-html-editor name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
]"
        ><?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value) {
echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value;
}?></textarea>
    </div>
<?php } else { ?>
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
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['sectionField']->value['tooltip']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                <?php }?>
            </label>
            <textarea 
                class="form-control" 
                data-html-editor 
                name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
]"
            ><?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value) {
echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value;
}?></textarea>
        </div>
    </div>
<?php }
}
}
