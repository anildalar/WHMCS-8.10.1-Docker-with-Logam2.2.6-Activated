<?php
/* Smarty version 3.1.48, created on 2025-01-04 08:49:01
  from '/var/www/html/templates/lagom2/domain-pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778f5fd8590b7_78715427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3b9dae72877659f48032da36c16821faeba735d' => 
    array (
      0 => '/var/www/html/templates/lagom2/domain-pricing.tpl',
      1 => 1725473022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778f5fd8590b7_78715427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>


<?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"DomainPricing",'saveState'=>"false"), 0, true);
?>
    <?php echo '<script'; ?>
 type="text/javascript">
        jQuery(document).ready(function(){
            var table = jQuery('#tableDomainPricing').removeClass('hidden').DataTable();
            table.order(2, 'asc');
            table.draw();
            jQuery('#tableLoading').addClass('hidden');
        });
    <?php echo '</script'; ?>
>   
    <div class="tld-toolbar">
        <div class="tld-categories">
            <?php $_smarty_tpl->_assignInScope('firstCat', key($_smarty_tpl->tpl_vars['tldCategories']->value));?>
            <select multiple class="form-control custom-multiselect" id="domain-filter">
                <option value="All" selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'all'),$_smarty_tpl ) );?>
 (<?php echo count($_smarty_tpl->tpl_vars['pricing']->value);?>
)</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tldCategories']->value, 'count', false, 'category');
$_smarty_tpl->tpl_vars['count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['count']->value) {
$_smarty_tpl->tpl_vars['count']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value == $_smarty_tpl->tpl_vars['firstCat']->value) {
}?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainTldCategory.".((string)$_smarty_tpl->tpl_vars['category']->value),'defaultValue'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="tld-search search-group">
            <div class="search-field">
                <i class="search-field-icon lm lm-search"></i>
                <input type="text" id="table-search" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableentersearchterm'];?>
" >
            </div>
        </div>
    </div>
    <div class="tld-table table-container">
        <table class="table table-list hidden" id="tableDomainPricing">
            <thead>
                <tr>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaintld'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'category'),$_smarty_tpl ) );?>
</th>
                    <th class="hidden">key</th>     
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.register'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.transfer'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.renewal'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gracePeriod'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'redemptionPeriod'),$_smarty_tpl ) );?>
</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pricing']->value, 'data', false, 'extension');
$_smarty_tpl->tpl_vars['data']->index = -1;
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extension']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_smarty_tpl->tpl_vars['data']->index++;
$__foreach_data_1_saved = $_smarty_tpl->tpl_vars['data'];
?>
                <tr>
                    <td>
                    <strong class="tld-name"><span>.</span><?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
</strong>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['group']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['group'] == "hot") {?>
                                <?php $_smarty_tpl->_assignInScope('grouplabel', "danger");?>
                                <?php $_smarty_tpl->_assignInScope('grouptext', $_smarty_tpl->tpl_vars['LANG']->value['domainCheckerSalesGroup']['hot']);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['group'] == "new") {?>
                                <?php $_smarty_tpl->_assignInScope('grouplabel', "success");?>
                                <?php $_smarty_tpl->_assignInScope('grouptext', $_smarty_tpl->tpl_vars['LANG']->value['domainCheckerSalesGroup']['new']);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['group'] == "sale") {?>
                                <?php $_smarty_tpl->_assignInScope('grouplabel', "purple");?>
                                <?php $_smarty_tpl->_assignInScope('grouptext', $_smarty_tpl->tpl_vars['LANG']->value['domainCheckerSalesGroup']['sale']);?>
                            <?php }?>
                            <span class="label label-<?php echo $_smarty_tpl->tpl_vars['grouplabel']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['grouptext']->value;?>
!
                            </span>
                        <?php }?>
                    </td>
                    <td>
                        <span class="tld-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'category'),$_smarty_tpl ) );?>
</span>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['categories'][0];?>

                        <span class="hidden">
                            All
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categories'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <?php echo $_smarty_tpl->tpl_vars['category']->value;?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </span>
                    </td>
                    <td class="hidden">
                        <?php echo $_smarty_tpl->tpl_vars['data']->index;?>

                    </td>       
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['register'], 'price', false, 'years');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['years']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                        <?php if (strstr(current($_smarty_tpl->tpl_vars['price']->value),"text-decoration: line-through;")) {?>
                            <?php $_smarty_tpl->_assignInScope('priceRegExp', explode("</span>",current($_smarty_tpl->tpl_vars['price']->value)));?>
                            <?php $_smarty_tpl->_assignInScope('priceRegisterOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['priceRegExp']->value[1],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",'')," ",''));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('priceRegisterOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['price']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",''));?>
                        <?php }?> 
                        <td data-order="<?php echo $_smarty_tpl->tpl_vars['priceRegisterOrder']->value;?>
">
                        <span class="tld-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.register'),$_smarty_tpl ) );?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['price']->value >= 0) {?>
                                <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<br>
                                <small><?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['years']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                            <?php } else { ?>
                                <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>
</small>
                            <?php }?>
                        </td>
                        <?php break 1;?>
                        <?php
}
if ($_smarty_tpl->tpl_vars['price']->do_else) {
?>
                        <td>-</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['transfer'], 'price', false, 'years');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['years']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                        <?php if (strstr(current($_smarty_tpl->tpl_vars['price']->value),"text-decoration: line-through;")) {?>
                            <?php $_smarty_tpl->_assignInScope('priceTransExp', explode("</span>",current($_smarty_tpl->tpl_vars['price']->value)));?>
                            <?php $_smarty_tpl->_assignInScope('priceTransferOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['priceTransExp']->value[1],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",'')," ",''));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('priceTransferOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['price']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",''));?>
                        <?php }?> 
                        <td data-order="<?php echo $_smarty_tpl->tpl_vars['priceTransferOrder']->value;?>
">
                        <span class="tld-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.transfer'),$_smarty_tpl ) );?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['price']->value >= 0) {?>
                                <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<br>
                                <small><?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['years']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                            <?php } else { ?>
                                <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>
</small>
                            <?php }?>
                        </td>
                        <?php break 1;?>
                        <?php
}
if ($_smarty_tpl->tpl_vars['price']->do_else) {
?>
                        <td>-</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['renew'], 'price', false, 'years');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['years']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                        <?php if (strstr(current($_smarty_tpl->tpl_vars['price']->value),"text-decoration: line-through;")) {?>
                            <?php $_smarty_tpl->_assignInScope('priceRenewExp', explode("</span>",current($_smarty_tpl->tpl_vars['price']->value)));?>
                            <?php $_smarty_tpl->_assignInScope('priceRenewalOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['priceRenewExp']->value[1],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",'')," ",''));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('priceRenewalOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['price']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",''));?>
                        <?php }?> 
                        <td data-order="<?php echo $_smarty_tpl->tpl_vars['priceRenewalOrder']->value;?>
">
                            <span class="tld-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.renewal'),$_smarty_tpl ) );?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['price']->value >= 0) {?>
                                <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<br>
                                <small><?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['years']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                            <?php } else { ?>
                                <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>
</small>
                            <?php }?>
                        </td>
                        <?php break 1;?>
                        <?php
}
if ($_smarty_tpl->tpl_vars['price']->do_else) {
?>
                        <td>-</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <td>
                        <?php if (is_null($_smarty_tpl->tpl_vars['data']->value['grace_period'])) {?>
                            -
                        <?php } else { ?>
                            <span class="tld-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gracePeriod'),$_smarty_tpl ) );?>
</span>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['grace_period']['days'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewalsdays'),$_smarty_tpl ) );?>
<br>
                            <small>(<?php echo $_smarty_tpl->tpl_vars['data']->value['grace_period']['price'];?>
)</small>
                        <?php }?>
                    </td>
                    <td>
                        <?php if (is_null($_smarty_tpl->tpl_vars['data']->value['redemption_period'])) {?>
                            -
                        <?php } else { ?>
                            <span class="tld-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'redemptionPeriod'),$_smarty_tpl ) );?>
</span>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['redemption_period']['days'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewalsdays'),$_smarty_tpl ) );?>
<br>
                            <small>(<?php echo $_smarty_tpl->tpl_vars['data']->value['redemption_period']['price'];?>
)</small>
                        <?php }?>
                    </td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_1_saved;
}
if ($_smarty_tpl->tpl_vars['data']->do_else) {
?>
                <tr>
                    <td colspan="7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"pricing.noExtensionsDefined"),$_smarty_tpl ) );?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <div class="loder loader-table" id="tableLoading">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </div>
<?php }
}
}
