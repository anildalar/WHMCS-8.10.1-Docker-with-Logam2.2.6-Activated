<?php
/* Smarty version 3.1.48, created on 2024-09-28 03:10:39
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/textAreaInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f773af3e8738_20802798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06c43ba9f00e912aa47358e76c841244fbb6eadb' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/textAreaInput.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f773af3e8738_20802798 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-textarea-input-field">
    <div class="panel" v-if="visible">
        <div class="panel-body">
            <h4 class="panel-title" v-html="details.optionname"></h4>
            <div class="form-group m-b-0">
        <textarea class="form-control" v-model="data.value" :placeholder="details.placeholder" v-html="data.value">
        </textarea>
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
