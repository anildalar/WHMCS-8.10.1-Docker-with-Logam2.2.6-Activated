<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:44:35
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/styles/style-manage-custom-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff8e3a8bd04_72786574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aba0dc15d57526588b6dec48c78f2bf4f57d2b94' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/styles/style-manage-custom-settings.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/includes/helpers/tooltip.tpl' => 1,
  ),
),false)) {
function content_66dff8e3a8bd04_72786574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187853455466dff8e3a73711_37811773', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33877966366dff8e3a761f7_18443509', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21145414366dff8e3a76ec4_68146100', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71435173866dff8e3a89052_27836551', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12477075966dff8e3a8a709_78421347', "template-scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_187853455466dff8e3a73711_37811773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_187853455466dff8e3a73711_37811773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"style_manage"), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_33877966366dff8e3a761f7_18443509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_33877966366dff8e3a761f7_18443509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"style"), 0, false);
?> 
<?php
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_21145414366dff8e3a76ec4_68146100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_21145414366dff8e3a76ec4_68146100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo $_smarty_tpl->tpl_vars['styleColorLoader']->value;?>

	<div class="row">
		<div class="col-md-12">
			<h1>Style Settings 
				<span class="label-docs">
					<a href="https://lagom.rsstudio.net/docs/style-manager.html#custom-css" class="btn--doc btn btn--link btn--xs" target="_blank" rel="noopener noreferrer">docs</a>
				</span>
			</h1> 
			<form id="cssStyleCustomSettingsForm" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@styleCustomSettingsSave',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'styleName'=>$_smarty_tpl->tpl_vars['styleName']->value));?>
" method="POST">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styleSettings']->value['group'], 'groupValue', true, 'groupIndex');
$_smarty_tpl->tpl_vars['groupValue']->iteration = 0;
$_smarty_tpl->tpl_vars['groupValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['groupIndex']->value => $_smarty_tpl->tpl_vars['groupValue']->value) {
$_smarty_tpl->tpl_vars['groupValue']->do_else = false;
$_smarty_tpl->tpl_vars['groupValue']->iteration++;
$_smarty_tpl->tpl_vars['groupValue']->last = $_smarty_tpl->tpl_vars['groupValue']->iteration === $_smarty_tpl->tpl_vars['groupValue']->total;
$__foreach_groupValue_0_saved = $_smarty_tpl->tpl_vars['groupValue'];
?>
				<div class="panel panel--collapse <?php if (!$_smarty_tpl->tpl_vars['groupValue']->last) {?>m-b-4x<?php }?>">
					<div class="collapse-toggle">
						<h6 class="top__title">
							<?php echo $_smarty_tpl->tpl_vars['groupValue']->value['name'];?>

						</h6>
					</div>
					<div class="collapse show p-3x">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupValue']->value['styles'], 'value', true, 'styleIndex');
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['styleIndex']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->iteration++;
$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
							<div class="form-group--horizontal form-group--style-select <?php if (!$_smarty_tpl->tpl_vars['value']->last) {?>m-b-2x<?php }?> p-0x <?php if ($_smarty_tpl->tpl_vars['styleIndex']->value == "navigationTop") {?>is-hidden<?php }?>">
								<label class="form-label text-default">
									<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

									<?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['value']->value['tooltip']), 0, true);
?>
								</label> 
								<select id="style-settings" class="selectized--style-settings" name="settings[<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['styleIndex']->value;?>
]">
									<option value="default"><span class="style-select-preview"></span>Default</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styleSettings']->value['schemes'], 'schemeValue', false, 'schemeIndex');
$_smarty_tpl->tpl_vars['schemeValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['schemeIndex']->value => $_smarty_tpl->tpl_vars['schemeValue']->value) {
$_smarty_tpl->tpl_vars['schemeValue']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['schemeIndex']->value;?>
" data-data='{"color": "<?php echo $_smarty_tpl->tpl_vars['schemeValue']->value['color'];?>
"}' <?php if (((isset($_smarty_tpl->tpl_vars['value']->value['value'])) && $_smarty_tpl->tpl_vars['value']->value['value'] == $_smarty_tpl->tpl_vars['schemeIndex']->value) || (!(isset($_smarty_tpl->tpl_vars['value']->value['value'])) && $_smarty_tpl->tpl_vars['value']->value['default'] == $_smarty_tpl->tpl_vars['schemeIndex']->value)) {?>selected<?php }?>>
											  <?php echo $_smarty_tpl->tpl_vars['schemeValue']->value['name'];?>

										</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php if ($_smarty_tpl->tpl_vars['value']->value['name'] == "Extended Footer Style") {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['styleSettings']->value['additionalFooterSchemes']['gray']['type'];?>
" data-data='{"color": "<?php ob_start();
echo $_smarty_tpl->tpl_vars['styleSettings']->value['additionalFooterSchemes']['gray']['color'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"}' <?php if (((isset($_smarty_tpl->tpl_vars['value']->value['value'])) && $_smarty_tpl->tpl_vars['value']->value['value'] == $_smarty_tpl->tpl_vars['styleSettings']->value['additionalFooterSchemes']['gray']['type']) || (!(isset($_smarty_tpl->tpl_vars['value']->value['value'])) && $_smarty_tpl->tpl_vars['value']->value['default'] == 'gray')) {?>selected<?php }?>>
											  <?php echo $_smarty_tpl->tpl_vars['styleSettings']->value['additionalFooterSchemes']['gray']['name'];?>

										</option>
									<?php }?>
								</select>
							</div>
						<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
				<?php
$_smarty_tpl->tpl_vars['groupValue'] = $__foreach_groupValue_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</form>
		</div>
	</div>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_71435173866dff8e3a89052_27836551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_71435173866dff8e3a89052_27836551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container">
            <button class="btn btn btn--primary" onclick="submitForm()" >
                <span class="btn__text">Save Changes</span>
                <span class="btn__preloader preloader"></span>
            </button>
            <a class="btn btn--default btn--outline " href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                <span class="btn__text">Cancel</span>
                <span class="btn__preloader preloader"></span>
            </a>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-scripts"} */
class Block_12477075966dff8e3a8a709_78421347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_12477075966dff8e3a8a709_78421347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
	function submitForm() {
		$('#cssStyleCustomSettingsForm').submit()
	};

	let $select = $('.selectized--style-settings').selectize({
		render:{
			option: function(data, escape){
				let previewTemplate;
				if(data.color){
					previewTemplate = "<div class='option selected'><div class='style-select-preview' style='background:var(" + escape(data.color) + ")'></div>" + escape(data.text) + "</div>"
				} else {
					previewTemplate = "<div class='option selected'><div class='style-select-preview' style='background-color:#FFF'></div>" + escape(data.text) + "</div>"
				}
				return previewTemplate
			},
			item: function(data, escape){
				let previewTemplate;
				if(data.color){
					previewTemplate = "<div class='option selected'><div class='style-select-preview' style='background:var(" + escape(data.color) + ")'></div>" + escape(data.text) + "</div>"
				} else {
					previewTemplate = "<div class='option selected'><div class='style-select-preview' style='background-color:#FFF'></div>" + escape(data.text) + "</div>"
				}
				return previewTemplate
			},
		}
	})
	$select.each(function (index, item){
		item.selectize.refreshOptions(false);
	})
	$('.selectize-input.selectized--style-settings input').each(function(){
		$(this).attr('disabled', true);
	});

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
