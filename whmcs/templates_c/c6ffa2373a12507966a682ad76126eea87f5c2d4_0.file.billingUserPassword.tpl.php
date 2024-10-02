<?php
/* Smarty version 3.1.48, created on 2024-10-02 03:41:44
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingUserPassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcc0f833c562_98003011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6ffa2373a12507966a682ad76126eea87f5c2d4' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingUserPassword.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc0f833c562_98003011 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-billing-user-password-field">
    <div class="col-sm-6" :class="progressBar.inputFrameClass">
        <div :id="'div-'+field.id" class="form-group" :class="{ 'has-error' : !isValidField }">
            <div class="password-content password-content-top password-content-group">
                <label :for="field.id" v-html="field.label"></label>
                <div class="progress" :id="'passwordStrengthBar-' + field.id" style="display: none;">
                    <div class="progress-bar" :class="progressBar.statusClass"
                            role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100" :style="progressBar.styles">
                        <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','form','field','password','rating');?>
</span>
                    </div>
                </div>
                <span class="text-small text-lighter password-content-text">
                    <span id="passwordStrengthTextLabel">
                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','form','field','password','at_least');?>

                    </span>
                    <i data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','passwordTooltip');?>
" data-html="true" class="ls ls-info-circle">
                    </i>
                </span>
            </div>
            <div class="input-password-strenght">
                <form autocomplete="off">
                    <input type="password" class="form-control" :name="field.name" :id="field.name" v-model="value">
                </form>
            </div>
            <div class="password-content">
                <button type="button" class="btn btn-default btn-sm generate-password" data-targetfields="inputNewPassword1,inputNewPassword2" @click="showModal()">
                    <i class="ls ls-refresh"></i><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','billing_details','fields','generate','password');?>

                </button>
            </div>
            <div class="alert alert-danger alert-sm" v-if="!isValidField" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('addonCA','order','mainContainer','LagomOrderForm','clientArea','scripts','fieldIsRequired');?>
'"></div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
