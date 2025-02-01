<?php
/* Smarty version 3.1.48, created on 2025-01-04 09:20:08
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/sections/tileRadioButtonSection_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778fd48f2cff1_37802852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8926a5f23afb7e37bb282faadccba4bc518cd091' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/sections/tileRadioButtonSection_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778fd48f2cff1_37802852 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-tile-radio-buttons-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
        :name="name"
        :active_value='active_value'
>
    <div class="lu-row" :id="component_id">
        <template v-for="button in tileButtons">
            <div class="lu-col-sm-6 lu-col-md-3 lu-col-lg-2" v-if="button.isVisible">
                <div class="lu-widget lu-widget--settings" :class="[(button.isDisabled === true ? 'is-disabled' : ''), (button.value === activeTileButton ? 'is-active' : '')]" >
                    <span class="check-sign" v-if="button.value === activeTileButton"><i class="ls ls-check"></i></span>
                    <div class="lu-widget__media" @click="activeTile(button.value, button.isDisabled)">
                        <div class="lu-widget__content" >
                            <img :src="button.imagePath">
                        </div>
                    </div>
                </div>
                <h6 v-html="button.title" v-if="button.isAvailable"></h6>
                <h6 v-else>{{button.title}} <span class="lu-label lu-label--sm lu-label--outline lu-label--primary"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Soon');?>
</span></h6>
            </div>
        </template>
        <input type="hidden" :name="name" :value="activeTileButton">
    </div>

<?php echo '</script'; ?>
>
<?php }
}
