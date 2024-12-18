<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:58:22
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/buttons/tileStandaloneButton_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f6de99dff5_63851149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '631fabfef753eeaf0b023c33f6088366b8c90d82' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/buttons/tileStandaloneButton_components.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f6de99dff5_63851149 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-tile-standalone-button-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
        :img="img"
        :title="title"

>
<div class="lu-col-xxl-2 lu-col-xl-3 lu-col-md-4 lu-col-sm-6">
    <a data-toggle="lu-modal" class="lu-widget lu-widget--big lu-widget--gateway" :class="(imagePath ? 'has-overlay' : '')">
        <div class="lu-widget__media" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_4_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
            <div  :class="(imagePath ? 'lu-widget__overlay' : '')">
                <div class="lu-widget__content" id="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getId();?>
">
                    <div class="lu-msg lu-msg--sm">
                        <div class="lu-msg__icon lu-i-c--bordered-dash">
                            <span class="lu-i-c lu-zmdi lu-i-c-2x lu-zmdi-image-alt lu-text-default"></span>
                        </div>
                        <div class="lu-msg__body">
                            <div class="lu-msg__title lu-type-8"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('button','clickToAssign');?>
</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lu-widget__content" v-if="imagePath">
                <img :src="imagePath" :alt="title"/>
            </div>
        </div>
    </a>
    <h6 v-html="title"></h6>
</div>

<?php echo '</script'; ?>
><?php }
}
