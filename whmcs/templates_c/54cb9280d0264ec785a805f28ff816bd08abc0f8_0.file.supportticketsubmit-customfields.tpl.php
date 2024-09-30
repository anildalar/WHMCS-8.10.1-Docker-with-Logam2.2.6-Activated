<?php
/* Smarty version 3.1.48, created on 2024-09-29 14:42:11
  from '/var/www/html/templates/lagom2/supportticketsubmit-customfields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f96743462409_75671833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54cb9280d0264ec785a805f28ff816bd08abc0f8' => 
    array (
      0 => '/var/www/html/templates/lagom2/supportticketsubmit-customfields.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f96743462409_75671833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/supportticketsubmit-customfields.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/supportticketsubmit-customfields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
        <div class="panel panel-default panel-form">
            <div class="panel-body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
                    <div class="form-group">
                        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == 'tickbox') {?>
                            <label class="checkbox" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['customfield']->value['input'],'type="checkbox"','class="form-checkbox icheck-control" type="checkbox"');?>

                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];
if ($_smarty_tpl->tpl_vars['customfield']->value['required']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['customfield']->value['required'];
}?>
                            </label>
                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</p>
                            <?php }?>
                        <?php } else { ?>
                        <label class="control-label" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];
if ($_smarty_tpl->tpl_vars['customfield']->value['required']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['customfield']->value['required'];
}?></label>
                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == "link") {?>
                                <div class="input-group">
                                    <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['customfield']->value['input'],"<a","<a class='input-group-addon'"),"www","<i class='ls ls-chain'></i>");?>

                                </div>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</span><?php }?>
                        <?php }?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php }
}
}
}
