<?php
/* Smarty version 3.1.48, created on 2024-12-21 07:18:56
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/domainAddon_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67666be0747b98_06494539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4039242dc5bd853b626a44daf80e5a3705d317a5' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/domainAddon_components.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67666be0747b98_06494539 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-domain-addons-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="section" :class="[{ 'section--full-width': !showNumber}]" v-if="isVisible">
        <div class="section-number" v-if="showNumber">X</div>
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','domain','section','title','addon');?>
</h2>
        </div>
        <div class="section-body">
            <div class="row row-eq-height row-eq-height-md m-b-neg-16 m-b-neg-2x row--addons">
                <template v-for="addon in availableAddons">
                    <domain-addon :key="addon.id" :field="addon" :data.sync="addons"></domain-addon>
                </template>
            </div>
        </div>
    </div>
</div>
<?php echo '</script'; ?>
><?php }
}
