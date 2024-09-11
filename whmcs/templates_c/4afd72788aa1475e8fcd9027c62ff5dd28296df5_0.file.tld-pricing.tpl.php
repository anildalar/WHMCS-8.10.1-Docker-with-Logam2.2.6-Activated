<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:58
  from '/var/www/html/templates/orderforms/lagom2/includes/domain/tld-pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7ce7fdde6_57851525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4afd72788aa1475e8fcd9027c62ff5dd28296df5' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/domain/tld-pricing.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/overwrites/tld-pricing.tpl' => 1,
  ),
),false)) {
function content_66dff7ce7fdde6_57851525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/tld-pricing.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/tld-pricing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="section domain-pricing<?php if ($_smarty_tpl->tpl_vars['customClass']->value) {?> <?php echo $_smarty_tpl->tpl_vars['customClass']->value;
}?>">
        <div class="section-header">
            <h2 class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.browseExtByCategory'),$_smarty_tpl ) );?>
</h2>
        </div>
        <div class="section-body">        
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
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showTLDCategoryFilter'] == '1') {?>
                <div class="tld-categories">
                    <?php $_smarty_tpl->_assignInScope('firstCat', key($_smarty_tpl->tpl_vars['categoriesWithCounts']->value));?>
                    <select multiple class="form-control custom-multiselect" id="domain-filter">
                        <option value="All" selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'all'),$_smarty_tpl ) );?>
 (<?php echo count($_smarty_tpl->tpl_vars['pricing']->value['pricing']);?>
)</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriesWithCounts']->value, 'count', false, 'category');
$_smarty_tpl->tpl_vars['count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['count']->value) {
$_smarty_tpl->tpl_vars['count']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainTldCategory.".((string)$_smarty_tpl->tpl_vars['category']->value),'defaultValue'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <?php }?>
                <div class="tld-search search-group">
                    <div class="search-field">
                        <input type="text" id="table-search" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableentersearchterm'];?>
" >
                        <div class="search-field-icon"><i class="lm lm-search"></i></div>     
                    </div>
                </div>
            </div>
            <div class="tld-table table-container clearfix">
                <table class="table table-list hidden" id="tableDomainPricing">
                    <thead>
                        <tr>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderdomain'),$_smarty_tpl ) );?>
</th>
                            <th class="hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'category'),$_smarty_tpl ) );?>
</th>   
                            <th class="hidden">key</th>                         
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.register'),$_smarty_tpl ) );?>
</th>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.transfer'),$_smarty_tpl ) );?>
</th>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.renewal'),$_smarty_tpl ) );?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pricing']->value['pricing'], 'price', false, 'tld');
$_smarty_tpl->tpl_vars['price']->index = -1;
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tld']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
$_smarty_tpl->tpl_vars['price']->index++;
$__foreach_price_3_saved = $_smarty_tpl->tpl_vars['price'];
?>
                            <tr>
                                <td>
                                    <strong class="tld-name"><span>.</span><?php echo $_smarty_tpl->tpl_vars['tld']->value;?>
</strong>
                                    <?php if ($_smarty_tpl->tpl_vars['price']->value['group']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['price']->value['group'] == "hot") {?>
                                            <?php $_smarty_tpl->_assignInScope('grouplabel', "danger");?>
                                            <?php $_smarty_tpl->_assignInScope('grouptext', $_smarty_tpl->tpl_vars['LANG']->value['domainCheckerSalesGroup']['hot']);?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['price']->value['group'] == "new") {?>
                                            <?php $_smarty_tpl->_assignInScope('grouplabel', "success");?>
                                            <?php $_smarty_tpl->_assignInScope('grouptext', $_smarty_tpl->tpl_vars['LANG']->value['domainCheckerSalesGroup']['new']);?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['price']->value['group'] == "sale") {?>
                                            <?php $_smarty_tpl->_assignInScope('grouplabel', "purple");?>
                                            <?php $_smarty_tpl->_assignInScope('grouptext', $_smarty_tpl->tpl_vars['LANG']->value['domainCheckerSalesGroup']['sale']);?>
                                        <?php }?>
                                        <span class="label label-<?php echo $_smarty_tpl->tpl_vars['grouplabel']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['grouptext']->value;?>
!</span>
                                    <?php }?>
                                </td>
                                <td class="hidden">
                                    All
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value['categories'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                        <?php echo $_smarty_tpl->tpl_vars['category']->value;?>
 
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </td>  
                                <td class="hidden">
                                    <?php echo $_smarty_tpl->tpl_vars['price']->index;?>

                                </td>   
                                <?php if (strstr(current($_smarty_tpl->tpl_vars['price']->value['register']),"text-decoration: line-through;")) {?>
                                    <?php $_smarty_tpl->_assignInScope('priceRegExp', explode("</span>",current($_smarty_tpl->tpl_vars['price']->value['register'])));?>
                                    <?php $_smarty_tpl->_assignInScope('priceRegisterOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['priceRegExp']->value[1],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",'')," ",''));?>
                                <?php } else { ?>
                                     <?php $_smarty_tpl->_assignInScope('priceRegisterOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(current($_smarty_tpl->tpl_vars['price']->value['register']),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",''));?>
                                <?php }?>                           
                                <td data-order="<?php echo $_smarty_tpl->tpl_vars['priceRegisterOrder']->value;?>
">
                                    <span class="tld-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.register'),$_smarty_tpl ) );?>
</span>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['price']->value['register'])) && current($_smarty_tpl->tpl_vars['price']->value['register']) > 0) {?>
                                        <?php echo current($_smarty_tpl->tpl_vars['price']->value['register']);?>
<br>
                                        <small><?php echo key($_smarty_tpl->tpl_vars['price']->value['register']);?>
 <?php if (key($_smarty_tpl->tpl_vars['price']->value['register']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['price']->value['register'])) && current($_smarty_tpl->tpl_vars['price']->value['register']) == 0) {?>
                                        <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderfree'),$_smarty_tpl ) );?>
</small>
                                    <?php } else { ?>
                                        <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'na'),$_smarty_tpl ) );?>
</small>
                                    <?php }?>
                                </td>
                                <?php if (strstr(current($_smarty_tpl->tpl_vars['price']->value['transfer']),"text-decoration: line-through;")) {?>
                                    <?php $_smarty_tpl->_assignInScope('priceTransExp', explode("</span>",current($_smarty_tpl->tpl_vars['price']->value['transfer'])));?>
                                    <?php $_smarty_tpl->_assignInScope('priceTransferOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['priceTransExp']->value[1],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",'')," ",''));?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('priceTransferOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(current($_smarty_tpl->tpl_vars['price']->value['transfer']),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",''));?>
                                <?php }?> 
                                <td data-order="<?php echo $_smarty_tpl->tpl_vars['priceTransferOrder']->value;?>
">
                                    <span class="tld-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.transfer'),$_smarty_tpl ) );?>
</span>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['price']->value['transfer'])) && current($_smarty_tpl->tpl_vars['price']->value['transfer']) > 0) {?>
                                        <?php echo current($_smarty_tpl->tpl_vars['price']->value['transfer']);?>
<br>
                                        <small><?php echo key($_smarty_tpl->tpl_vars['price']->value['transfer']);?>
 <?php if (key($_smarty_tpl->tpl_vars['price']->value['register']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['price']->value['transfer'])) && current($_smarty_tpl->tpl_vars['price']->value['transfer']) == 0) {?>
                                        <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderfree'),$_smarty_tpl ) );?>
</small>
                                    <?php } else { ?>
                                        <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'na'),$_smarty_tpl ) );?>
</small>
                                    <?php }?>
                                </td>
                                <?php if (strstr(current($_smarty_tpl->tpl_vars['price']->value['renew']),"text-decoration: line-through;")) {?>
                                    <?php $_smarty_tpl->_assignInScope('priceRenewExp', explode("</span>",current($_smarty_tpl->tpl_vars['price']->value['transfer'])));?>
                                    <?php $_smarty_tpl->_assignInScope('priceRenewalOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['priceRenewExp']->value[1],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",'')," ",''));?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('priceRenewalOrder', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(current($_smarty_tpl->tpl_vars['price']->value['renew']),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],''),",",''),".",''));?>
                                <?php }?> 
                                <td data-order="<?php echo $_smarty_tpl->tpl_vars['priceRenewalOrder']->value;?>
">
                                    <span class="tld-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.renewal'),$_smarty_tpl ) );?>
</span>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['price']->value['renew'])) && current($_smarty_tpl->tpl_vars['price']->value['renew']) > 0) {?>
                                        <?php echo current($_smarty_tpl->tpl_vars['price']->value['renew']);?>
<br>
                                        <small><?php echo key($_smarty_tpl->tpl_vars['price']->value['renew']);?>
 <?php if (key($_smarty_tpl->tpl_vars['price']->value['register']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['price']->value['renew'])) && current($_smarty_tpl->tpl_vars['price']->value['renew']) == 0) {?>
                                        <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderfree'),$_smarty_tpl ) );?>
</small>
                                    <?php } else { ?>
                                        <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'na'),$_smarty_tpl ) );?>
</small>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['price'] = $__foreach_price_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <div class="loder loader-table" id="tableLoading">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>        
        </div>
    </div>
<?php }
}
}
