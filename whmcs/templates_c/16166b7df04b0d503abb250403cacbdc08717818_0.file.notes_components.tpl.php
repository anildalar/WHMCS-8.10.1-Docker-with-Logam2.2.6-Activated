<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:14
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/notes_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f2529edd3699_99572384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16166b7df04b0d503abb250403cacbdc08717818' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/notes_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f2529edd3699_99572384 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-notes-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
	<div class="section" :class="[{ 'section--full-width': !showNumber}]" v-if="isVisible">
		<div class="section-number" v-if="showNumber">X</div>
		<div class="section-header">
			<h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','notes','orderForm','additionalNotes');?>
</h2>
		</div>
		<div class="section-body">
			<div class="panel panel-form">
				<div class="panel-body">
					<textarea name="notes" class="form-control" rows="4" placeholder="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','notes','ordernotesdescription');?>
" v-model="message" @change="updateMessage"></textarea>
				</div>
			</div>
		</div>
	</div>    
<?php echo '</script'; ?>
>	<?php }
}
