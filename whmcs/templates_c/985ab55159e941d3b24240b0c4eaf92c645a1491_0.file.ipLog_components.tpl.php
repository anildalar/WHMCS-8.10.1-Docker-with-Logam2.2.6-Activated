<?php
/* Smarty version 3.1.48, created on 2025-01-04 09:20:21
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/ipLog_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778fd553f1118_73701523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '985ab55159e941d3b24240b0c4eaf92c645a1491' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/ipLog_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778fd553f1118_73701523 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-ip-log-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="section" :class="[{ 'section--full-width': !showNumber}]" v-if="ipAddress.isSsl && isVisible">
        <div class="section-body">

            <h1><?php echo $_smarty_tpl->tpl_vars['servedOverSsl']->value;?>
</h1>

            <div class="alert alert-warning alert-primary checkout-security-msg">
                <div class="alert-body">
                    <i class="ls ls-shield"></i>
                    <span>
                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','section','ipLog','orderSecure');?>
 (<strong v-html="ipAddress.ip"></strong>) <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','section','ipLog','orderSecure2');?>

                    </span>
                </div>
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
>	<?php }
}
