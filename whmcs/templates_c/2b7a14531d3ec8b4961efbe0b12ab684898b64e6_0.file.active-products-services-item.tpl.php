<?php
/* Smarty version 3.1.48, created on 2025-01-04 05:10:58
  from '/var/www/html/templates/lagom2/includes/active-products-services-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778c2e21e3498_84798269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b7a14531d3ec8b4961efbe0b12ab684898b64e6' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/active-products-services-item.tpl',
      1 => 1725473022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778c2e21e3498_84798269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/active-products-services-item.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/active-products-services-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <div class="list-group-item-content" data-href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
">
        <div class="list-group-item-name">
            <span><b><?php echo $_smarty_tpl->tpl_vars['service']->value->product->productGroup->name;?>
</b> - <?php echo $_smarty_tpl->tpl_vars['service']->value->product->name;?>
</span>
            <span class="text-domain"><?php echo $_smarty_tpl->tpl_vars['service']->value->domain;?>
</span>
        </div>
        <div class="list-group-item-status">
            <?php $_smarty_tpl->_assignInScope('nexDueTS', strtotime($_smarty_tpl->tpl_vars['service']->value->nextduedate));?>
            <?php if ($_smarty_tpl->tpl_vars['service']->value->billingcycle == "Monthly") {?>
                <?php $_smarty_tpl->_assignInScope('nexDueTSConv', strtotime("-3 day",strtotime($_smarty_tpl->tpl_vars['service']->value->nextduedate)));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('nexDueTSConv', strtotime("-30 day",strtotime($_smarty_tpl->tpl_vars['service']->value->nextduedate)));?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('todayDate', strtotime(smarty_modifier_date_format($_smarty_tpl->tpl_vars['todaysdate']->value,"%A, %B %e, %Y")));?>
            <?php echo smarty_function_math(array('assign'=>"days",'equation'=>'(x-y)/z','x'=>$_smarty_tpl->tpl_vars['nexDueTS']->value,'y'=>$_smarty_tpl->tpl_vars['todayDate']->value,'z'=>"86400"),$_smarty_tpl);?>

            <?php if (($_smarty_tpl->tpl_vars['nexDueTSConv']->value <= $_smarty_tpl->tpl_vars['todayDate']->value) && ($_smarty_tpl->tpl_vars['service']->value->nextduedate != '0000-00-00')) {?>
                <span class="status-expiry text-danger">
                    <?php if ($_smarty_tpl->tpl_vars['days']->value < 0) {?>
                        <?php echo smarty_function_math(array('assign'=>"days",'equation'=>'x*y','x'=>$_smarty_tpl->tpl_vars['days']->value,'y'=>"-1"),$_smarty_tpl);?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.expiredDaysAgo','days'=>sprintf("%d",$_smarty_tpl->tpl_vars['days']->value)),$_smarty_tpl ) );?>

                    <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.expiringIn','days'=>sprintf("%d",$_smarty_tpl->tpl_vars['days']->value)),$_smarty_tpl ) );?>

                    <?php }?>
                    <i class="ls ls-exclamation-circle"></i>
                </span>
            <?php }?>
            <span class="label label-<?php echo $_smarty_tpl->tpl_vars['statusProperties']->value[$_smarty_tpl->tpl_vars['service']->value->domainStatus]['modifier'];?>
"
                title="<?php echo $_smarty_tpl->tpl_vars['statusProperties']->value[$_smarty_tpl->tpl_vars['service']->value->domainStatus]['translation'];?>
"
            >
                <?php echo $_smarty_tpl->tpl_vars['statusProperties']->value[$_smarty_tpl->tpl_vars['service']->value->domainStatus]['translation'];?>

            </span>
        </div>
        <div class="list-group-item-actions">
            <?php if (!empty($_smarty_tpl->tpl_vars['buttonData']->value)) {?>
                <div class="list-group-item-dropdown dropdown" data-service-id="<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
">    
                    <button type="button"
                            class="btn btn-sm btn-default dropdown-toggle"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                    >
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['manage'];?>
</span>
                        <i class="ls ls-caret"></i>
                    </button>
                    <ul class="dropdown-menu" data-service-id="<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
" data-href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttonData']->value, 'buttonDatum');
$_smarty_tpl->tpl_vars['buttonDatum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['buttonDatum']->value) {
$_smarty_tpl->tpl_vars['buttonDatum']->do_else = false;
?>
                            <li class="dropdown-item btn-custom-action<?php if (!$_smarty_tpl->tpl_vars['buttonDatum']->value['active']) {?> disabled<?php }?>"
                                data-serviceid="<?php echo $_smarty_tpl->tpl_vars['buttonDatum']->value['serviceid'];?>
"
                                data-identifier="<?php echo $_smarty_tpl->tpl_vars['buttonDatum']->value['identifier'];?>
"
                                data-active="<?php echo $_smarty_tpl->tpl_vars['buttonDatum']->value['active'];?>
"
                                <?php if (!$_smarty_tpl->tpl_vars['buttonDatum']->value['active']) {?>disabled="disabled"<?php }?>
                            >
                                <?php echo $_smarty_tpl->tpl_vars['buttonDatum']->value['display'];?>

                                <span class="loading w-hidden">
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>   
                                </span>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <li class="dropdown-item"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['manage'];?>
</li>
                    </ul>
                </div>    
            <?php } else { ?>
                <button class="btn btn-default btn-sm btn-view-details">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['manage'];?>

                </button>    
            <?php }?>
        </div>
    </div>
<?php }
}
}
