<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:58:22
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/fields/tileRadioField_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f6de9f5607_80196384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb4613ad76bfe610c6a70e0977f58cf9d30a55e' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/fields/tileRadioField_components.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f6de9f5607_80196384 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-tile-radio-field-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
        :name="name"
        :active_value="active_value"
        :form_name="form_name"
        :form_data="form_data"
>

<div class="lu-tab-pane" id="tabExistingIcons">
    <div class="lu-preloader-container lu-preloader-container--full-screen lu-preloader-container--overlay" v-if="loading">
        <div class="lu-preloader lu-preloader--sm"></div>
    </div>
    <div class="lu-row lu-row--sm lu-neg-m-b-2x" v-else>
        <div class="lu-col-sm-3" v-for="(item, index) in items" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_9_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_9_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> >
                <a 
                    class="lu-widget lu-widget--sm lu-widget--gateway has-overlay" 
                    :class="(isSelected(item.id) === true ? 'is-active' : '')"
                    v-if="isSelectable">
                    <div class="lu-widget__overlay lu-widget__overlay--danger" v-if="!isSelected(item.id) && selected.length == 0 && !item.hasOwnProperty('isActive')">
                        <div class="lu-widget__content">
                            <div class="lu-msg lu-msg--sm">
                                <div class="lu-msg__icon">
                                    <span class="lu-zmdi lu-zmdi-delete"></span>
                                </div>
                                <div class="lu-msg__body">
                                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('addonAA','gateways','removeIconModal','remove','title');?>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="lu-widget__media" :id="item.attrId">
                        <img :src="item.img" :alt="item.name"/>
                    </div>
                </a>
            <div class="lu-widget lu-widget--sm lu-widget--gateway" :class="(isSelected(item.id) === true ? 'is-active' : '')" v-else>
                <div class="lu-widget__media" :id="item.attrId">
                    <img :src="item.img" :alt="item.name"/>
                </div>
            </div>
        </div>
        <input type="hidden" :name="form_name + '['+ index + ']'" v-for="(item,index) in selected" :value="item" v-if="isMultiple">
        <input type="hidden" :name="form_name" v-for="(item,index) in selected" :value="item" v-else>
    </div>
</div>

<?php echo '</script'; ?>
>
<?php }
}
