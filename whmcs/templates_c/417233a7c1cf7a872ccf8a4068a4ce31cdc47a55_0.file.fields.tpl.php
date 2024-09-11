<?php
/* Smarty version 3.1.48, created on 2024-09-10 03:22:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dfbb6b5339f8_31542431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '417233a7c1cf7a872ccf8a4068a4ce31cdc47a55' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/fields.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/pages/custom/sections/inputs/".((string)$_smarty_tpl->tpl_vars[\'sectionField\']->value[\'type\']).".tpl' => 1,
  ),
),false)) {
function content_66dfbb6b5339f8_31542431 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget panel  of-visible m-b-0x">
    <div class="widget__body">
        <div class="widget__content" data-section-fields>
            <?php $_smarty_tpl->_assignInScope('sectionLang', $_smarty_tpl->tpl_vars['section']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['translation']);?>
            <?php $_smarty_tpl->_assignInScope('hasSubSection', false);?>
            <input name="language" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" type="hidden"> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['type']['fields'], 'sectionField', true, 'sectionKey');
$_smarty_tpl->tpl_vars['sectionField']->iteration = 0;
$_smarty_tpl->tpl_vars['sectionField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionKey']->value => $_smarty_tpl->tpl_vars['sectionField']->value) {
$_smarty_tpl->tpl_vars['sectionField']->do_else = false;
$_smarty_tpl->tpl_vars['sectionField']->iteration++;
$_smarty_tpl->tpl_vars['sectionField']->last = $_smarty_tpl->tpl_vars['sectionField']->iteration === $_smarty_tpl->tpl_vars['sectionField']->total;
$__foreach_sectionField_2_saved = $_smarty_tpl->tpl_vars['sectionField'];
?>
                <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['type'] == "subsection") {?>
                    <?php $_smarty_tpl->_assignInScope('hasSubSection', true);?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('sectionFieldValue', $_smarty_tpl->tpl_vars['sectionLang']->value[$_smarty_tpl->tpl_vars['sectionField']->value['name']]);?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/custom/sections/inputs/".((string)$_smarty_tpl->tpl_vars['sectionField']->value['type']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sectionIndex'=>$_smarty_tpl->tpl_vars['sectionIndex']->value,'sectionField'=>$_smarty_tpl->tpl_vars['sectionField']->value,'sectionFieldValue'=>$_smarty_tpl->tpl_vars['sectionFieldValue']->value), 0, true);
?>
                <?php if ($_smarty_tpl->tpl_vars['sectionField']->last && $_smarty_tpl->tpl_vars['hasSubSection']->value) {?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>     
            <?php
$_smarty_tpl->tpl_vars['sectionField'] = $__foreach_sectionField_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
