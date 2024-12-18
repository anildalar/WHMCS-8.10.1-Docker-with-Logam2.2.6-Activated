<?php
/* Smarty version 3.1.48, created on 2024-12-18 08:53:16
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/promoCode_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67628d7c6a1af8_91407416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '459a2b72aa30613a2f9a70f9108f0a8424883490' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/promoCode_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67628d7c6a1af8_91407416 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-promo-code-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="section section--promocode" v-if="isVisible && !(getSPage == 'addons' && !isOneStep)" :class="[{ 'section--full-width': !showNumber, 'mt-5' : isOneStep && pageType === 'sidebar'}]">
        <div class="section-number" v-if="showNumber">X</div>
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','section','promocode','title');?>
</h2>
        </div>
                <div class="section-body" >
            <div id="promoCode" class="box box-promo-code " :class="[
                { 'search-box-default' : layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.style_settings && layoutSettings.templates.lagom.style_settings.group && layoutSettings.templates.lagom.style_settings.group.elements.styles.search.value == 'default' },
                { 'search-box-primary' : layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.style_settings && layoutSettings.templates.lagom.style_settings.group && layoutSettings.templates.lagom.style_settings.group.elements.styles.search.value == 'primary' },
                { 'search-box-secondary' : layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.style_settings && layoutSettings.templates.lagom.style_settings.group && layoutSettings.templates.lagom.style_settings.group.elements.styles.search.value == 'secondary' },
                { 'search-box-primary' : (layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.style_settings && layoutSettings.templates.lagom.style_settings.group && !layoutSettings.templates.lagom.style_settings.group.elements.styles.search.value) || !layoutSettings.templates || !layoutSettings.templates.lagom.style_settings },
                ]">
                <div class="box-body">
                    <div class="search-group search-group-combined panel-choose-domain panel-choose-domain--subdomain">
                        <div class="search-field search-field-lg">
                            <i class="search-field-icon lm lm-wallet"></i>
                            <form autocomplete="off" @submit.prevent>
                                <input type="text" class="form-control" placeholder="" readonly v-bind:value="decodeHtml(promoDescription) + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','promoDiscount');?>
'" v-if="promoEnabled && promo.code">
                                <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','section','promocode','placeholder');?>
" v-model="code" @keyup.enter="addPromo" v-else>
                            </form>
                        </div>
                    </div>
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary-faded" @click="removePromo" v-if="promoEnabled && promo.code">
                            <span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','promo','remove');?>
</span>
                        </button>
                        <button type="button" class="btn btn-primary-faded" @click="addPromo" v-else>
                            <span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','section','promocode','btn');?>
</span>
                        </button>

                    </div>
                </div>
                <div class="promocode" :class="{ 'has-error': promoAlert == 'error', 'promocode--invalid-code' : promoAlert }" v-if="!promo.code && promoAlert && promoCodeErrorMessage">
                    <div class="alert alert-danger alert-sm" v-html="promoCodeErrorMessage"></div>
                </div>
                <div class="promocode" :class="{ 'has-error': promoAlert == 'error', 'promocode--invalid-code' : promoAlert }" v-else-if="!promo.code && promoAlert">
                    <div class="alert alert-danger alert-sm"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','orderPromoCodeNotFound');?>
</div>
                </div>
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
>	<?php }
}
