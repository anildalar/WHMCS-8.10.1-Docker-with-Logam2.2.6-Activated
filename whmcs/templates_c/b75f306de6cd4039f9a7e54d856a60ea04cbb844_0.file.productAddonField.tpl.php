<?php
/* Smarty version 3.1.48, created on 2025-03-08 12:21:55
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/productAddonField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67cc3663560999_92181183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b75f306de6cd4039f9a7e54d856a60ea04cbb844' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/productAddonField.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cc3663560999_92181183 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-standalone-addon-field">
    <div class="col-md-6" v-if="visible">
        <div class="panel panel-addon" :class="[
            { 'checked': (selected && !loader)},
            { 'panel-addon--has-image has-icon': field.image}
            ]">
            <div class="panel-body">
                <h4 class="panel-title" v-html="field.name"></h4>
                <p class="panel-desc" v-html="field.description.original + ' '"></p>
                <div class="panel-actions">
                    <button class="btn btn-sm btn-primary-faded has-loader" @click="addAddon()" v-if="!selected || loader">
                        <span class="btn-text" :class="{ 'invisible' : loader}"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','addons','order','add');?>
</span>
                        <div class="btn-loader">
                            <div class="spinner spinner-sm" v-if="loader">
                                <div class="rect1"></div>
                                <div class="rect2"></div>
                                <div class="rect3"></div>
                                <div class="rect4"></div>
                                <div class="rect5"></div>
                            </div>
                        </div>
                    </button>
                    <div class="btn-group" v-if="selected && !loader">
                        <button class="btn btn-sm btn-primary no-hover"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','addons','order','added');?>
</button>
                        <button type="button" class="btn btn-sm btn-primary btn-icon" @click="removeAddon()"><i class="ls ls-close"></i></button>
                    </div>
                    <div class="panel-actions-price" v-if="!isFree">
                        <span class="price price-right">
                            <span v-if="getAddonDiscountPrice()" class="price-savings">
                                <span v-html="getAddonRegularPrice() + getAddonShortBillingCycle()"></span>
                            </span>
                            <span class="price-value" v-if="!getAddonFinalPrice()"></span>
                            <span class="price-value" v-else v-html="getAddonFinalPrice() + getAddonShortBillingCycle()"></span>
                        </span>
                        <span class="price-savings align-self-end" v-if="getAddonRawDiscountSetupFee() > 0">
                             <span v-html="getAddonRegularSetupFee() + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','setupFee');?>
'"></span><br>
                         </span>
                        <span class="price price-sm" v-if="getAddonRawSetupFee() > 0">
                             <span v-html="getAddonFinalSetupFee() + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','setupFee');?>
'"></span>
                        </span>
                    </div>
                    <div class="panel-actions-price" v-else>
                        <span class="price">
                            <span class="price-value"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','addons','price','free');?>
</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="panel-icon" v-if="field.image" :class="[
            { 'panel-icon--default': field.illustrationType == 'default'},
            { 'panel-icon--icon': field.illustrationType == 'iconType'},
            { 'panel-icon--illustration': field.illustrationType == 'illustrationType'},
            { 'panel-icon--illustration-small': field.illustrationType == 'illustrationSmallType'}
            ]">
                <img :src="field.image"  alt="">
            </div>
            <span class="check-sign"><i class="ls ls-check"></i></span>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
