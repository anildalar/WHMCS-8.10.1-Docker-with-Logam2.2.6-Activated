<?php
/* Smarty version 3.1.48, created on 2024-09-30 14:52:13
  from '/var/www/html/templates/orderforms/lagom2/configureproductdomain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fabb1de5e0c7_67574960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a57d4ce617a0d0a8fe1df9aaafcfe05657101a1e' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/configureproductdomain.tpl',
      1 => 1726063642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/search-result.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/spotlight.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/suggested.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/bottom-sticky.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/recommendations-modal.tpl' => 1,
  ),
),false)) {
function content_66fabb1de5e0c7_67574960 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="main-content <?php if ($_smarty_tpl->tpl_vars['mainContentClasses']->value) {
echo $_smarty_tpl->tpl_vars['mainContentClasses']->value;
}?>">
        <form 
            id="frmProductDomain" 
            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'] == 'true') {?>
                action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php" data-show-tld-cycle-switcher 
                <?php if ((isset($_GET['period']))) {?>
                    data-period="<?php echo $_GET['period'];?>
"
                <?php }?>
            <?php }?> 
            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true' && !(isset($_smarty_tpl->tpl_vars['freeDomainNotAllowed']->value)) && !$_smarty_tpl->tpl_vars['freeDomainNotAllowed']->value) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['productinfo']->value['freedomaintlds'])) && is_array($_smarty_tpl->tpl_vars['productinfo']->value['freedomaintlds']) && !empty($_smarty_tpl->tpl_vars['productinfo']->value['freedomaintlds']) && $_smarty_tpl->tpl_vars['productinfo']->value['freedomain'] != '') {?>
                    data-product-domain-free-price='<?php echo json_encode($_smarty_tpl->tpl_vars['productinfo']->value['freedomaintlds']);?>
'
                    data-whmcs-free-format="<?php echo formatCurrency(0);?>
"
                <?php }?>
            <?php }?>>
            <input type="hidden" id="frmProductDomainPid" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" />
            <div class="panel panel-choose-domain">
                <div class="panel-body panel-domain-option">
                    <div class="content">
                        <?php if ($_smarty_tpl->tpl_vars['incartdomains']->value) {?>
                            <label class="radio">
                                <input type="radio" class="icheck-control" name="domainoption" value="incart" id="selincart" /><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductdomainuseincart'];?>
</span>
                            </label>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                            <label class="radio">
                                <input type="radio" class="icheck-control" <?php if (($_GET['domain'] && $_GET['domain'] == "register") || $_smarty_tpl->tpl_vars['domainoption']->value == "register") {?>checked<?php }?> name="domainoption" value="register" id="selregister" /><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['cartregisterdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value ));?>
</span>
                            </label>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                            <label class="radio">
                                <input type="radio" class="icheck-control" <?php if (($_GET['domain'] && $_GET['domain'] == "transfer") || $_smarty_tpl->tpl_vars['domainoption']->value == "transfer") {?>checked<?php }?> name="domainoption" value="transfer" id="seltransfer" /><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['carttransferdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value ));?>
</span>
                            </label>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['owndomainenabled']->value) {?>
                            <label class="radio">
                                <input type="radio" class="icheck-control" <?php if (($_GET['domain'] && $_GET['domain'] == "owndomain") || $_smarty_tpl->tpl_vars['domainoption']->value == "owndomain") {?>checked<?php }?> name="domainoption" value="owndomain" id="selowndomain" /><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['cartexistingdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value ));?>
</span>
                            </label>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['subdomains']->value) {?>
                            <label class="radio">
                                <input type="radio" class="icheck-control" <?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "subdomain") {?> checked<?php }?> name="domainoption" value="subdomain" id="selsubdomain" /><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['cartsubdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value ));?>
</span>
                            </label>
                        <?php }?>
                    </div>
                </div>
                <div class="panel-body panel-domain-search panel-domain-search-<?php echo $_smarty_tpl->tpl_vars['searchBoxStyle']->value;?>
">
                    <?php if ($_smarty_tpl->tpl_vars['incartdomains']->value) {?>
                        <div class="inline-form hidden" id="domainincart">
                            <div class="inline-form-element w-100">
                                <select class="form-control input-lg" id="incartsld" name="incartdomain">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incartdomains']->value, 'incartdomain', false, 'num');
$_smarty_tpl->tpl_vars['incartdomain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['incartdomain']->value) {
$_smarty_tpl->tpl_vars['incartdomain']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="inline-form-element">                        
                                <button class="btn btn-lg btn-block btn-primary<?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>-faded<?php }?>" type="submit">
                                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['use'];?>
</span>
                                    <div class="loader loader-button">
                                        <?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'default') {?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>
                                        <?php }?>
                                    </div>
                                </button>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                        <div class="inline-form hidden" id="domainregister" >
                            <div class="inline-form-element w-100">
                                <input class="form-control input-lg" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.search_domain');?>
" id="registersld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
" />
                            </div>
                            <div class="inline-form-element">
                                <div class="dropdown" data-dropdown-select data-dropdown-counter>
                                    <div class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                                        <input name="domaintld" id="registertld" type="hidden" data-dropdown-select-value value="<?php if ($_smarty_tpl->tpl_vars['tld']->value) {
echo $_smarty_tpl->tpl_vars['tld']->value;
} else {
echo $_smarty_tpl->tpl_vars['registertlds']->value[0];
}?>">
                                        <div class="tld-select">
                                            <span data-dropdown-select-value-view>
                                                <?php if ($_smarty_tpl->tpl_vars['tld']->value) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['tld']->value;?>

                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['registertlds']->value[0];?>

                                                <?php }?>	
                                            </span>
                                            <b class="caret"></b>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-search pull-right">
                                        <div class="dropdown-header input-group align-center">
                                            <i class="input-group-icon lm lm-search"></i>
                                            <input class="form-control" placeholder="Search..." type="text" data-dropdown-select-search>
                                        </div>
                                        <div class="dropdown-menu-items has-scroll" data-dropdown-select-list>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registertlds']->value, 'listtld');
$_smarty_tpl->tpl_vars['listtld']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->do_else = false;
?>
                                                <div class="dropdown-menu-item <?php if ($_smarty_tpl->tpl_vars['tld']->value == $_smarty_tpl->tpl_vars['listtld']->value) {?>active<?php } elseif ($_smarty_tpl->tpl_vars['registertlds']->value[0] == $_smarty_tpl->tpl_vars['listtld']->value) {?>active<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
">
                                                    <a class=""><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</a>
                                                </div>	
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                        <div class="dropdown-menu-item dropdown-menu-no-data">
                                            <span class="text-info text-large">
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>

                                            </span>
                                        </div>                                             
                                    </div>
                                </div>								
                            </div>
                            <div class="inline-form-element">                        
                                <button class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>-faded<?php }?>" type="submit" >
                                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['check'];?>
</span>
                                    <div class="loader loader-button">
                                        <?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>
                                        <?php }?>
                                    </div>
                                </button>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                        <div class="inline-form hidden" id="domaintransfer">
                            <div class="inline-form-element w-100">
                                <input class="form-control input-lg" type="text" id="transfersld" placeholder="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.search_domain');?>
" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
"/>
                            </div>
                            <div class="inline-form-element">
                                <div  class="dropdown" data-dropdown-select data-dropdown-counter>
                                    <div class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                                        <input name="domaintld" id="transfertld" type="hidden" data-dropdown-select-value value="<?php if ($_smarty_tpl->tpl_vars['tld']->value) {
echo $_smarty_tpl->tpl_vars['tld']->value;
} else {
echo $_smarty_tpl->tpl_vars['transfertlds']->value[0];
}?>">
                                        <div class="tld-select">
                                            <span data-dropdown-select-value-view>
                                                <?php if ($_smarty_tpl->tpl_vars['tld']->value) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['tld']->value;?>

                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['transfertlds']->value[0];?>

                                                <?php }?>	
                                            </span>
                                            <b class="caret"></b>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-search pull-right">
                                        <div class="dropdown-header input-group align-center">
                                            <i class="input-group-icon lm lm-search"></i>
                                            <input class="form-control" placeholder="Search..." type="text" data-dropdown-select-search>
                                        </div>
                                        <div class="dropdown-menu-items has-scroll" data-dropdown-select-list>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transfertlds']->value, 'listtld');
$_smarty_tpl->tpl_vars['listtld']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->do_else = false;
?>
                                                <div class="dropdown-menu-item" data-value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
">
                                                    <a class=""><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</a>
                                                </div>	
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                        <div class="dropdown-menu-item dropdown-menu-no-data">
                                            <span class="text-info text-large">
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>

                                            </span>
                                        </div>       
                                    </div>	
                                </div>								
                            </div>
                            <div class="inline-form-element">                        
                                <button type="submit" class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>-faded<?php }?>">
                                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['transfer'];?>
</span>
                                    <div class="loader loader-button">                                        
                                        <?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>
                                        <?php }?>
                                    </div>
                                </button>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['owndomainenabled']->value) {?>
                        <div class="inline-form hidden" id="domainowndomain">
                            <div class="inline-form-element w-100">
                                <input type="text" id="owndomainsld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['yourdomainplaceholder'];?>
" class="form-control input-lg" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
" />
                            </div>
                            <div class="inline-form-element">
                                <input type="text" id="owndomaintld" value="<?php echo substr($_smarty_tpl->tpl_vars['tld']->value,1);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['yourtldplaceholder'];?>
" class="form-control input-lg" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                            </div>
                            <div class="inline-form-element">                        
                                <button type="submit" class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>-faded<?php }?>">
                                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['use'];?>
</span>
                                    <div class="loader loader-button">
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                                    </div>
                                </button>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['subdomains']->value) {?>
                        <div class="inline-form hidden" id="domainsubdomain">
                            <div class="inline-form-element w-100">
                                <input type="text" id="subdomainsld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" placeholder="yourname" class="form-control input-lg" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
" />
                            </div>
                            <div class="inline-form-element">
                                <div  class="dropdown" data-dropdown-select data-dropdown-counter>
                                    <div class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                                        <input name="domaintld" id="subdomaintld" type="hidden" data-dropdown-select-value value="<?php if ($_smarty_tpl->tpl_vars['sld']->value) {
echo $_smarty_tpl->tpl_vars['sld']->value;
} else {
echo $_smarty_tpl->tpl_vars['subdomains']->value[0];
}?>">
                                        <div class="tld-select">
                                            <span data-dropdown-select-value-view>
                                                <?php if ($_smarty_tpl->tpl_vars['sld']->value) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['sld']->value;?>

                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['subdomains']->value[0];?>

                                                <?php }?>
                                            </span>
                                            <b class="caret"></b>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-search pull-right ps">
                                        <div class="dropdown-header input-group align-center">
                                            <i class="input-group-icon lm lm-search"></i>
                                            <input class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
..." type="text" data-dropdown-select-search>
                                        </div>
                                        <div class="nav-divider">
                                            <a href="">
                                                -----
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-items" data-dropdown-select-list>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subdomains']->value, 'subdomain', false, 'subid');
$_smarty_tpl->tpl_vars['subdomain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subid']->value => $_smarty_tpl->tpl_vars['subdomain']->value) {
$_smarty_tpl->tpl_vars['subdomain']->do_else = false;
?>
                                                <div class="dropdown-menu-item" data-value="<?php echo $_smarty_tpl->tpl_vars['subdomain']->value;?>
">
                                                    <a><?php echo $_smarty_tpl->tpl_vars['subdomain']->value;?>
</a>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                        <div class="dropdown-menu-item dropdown-menu-no-data">
                                            <span class="text-info text-large">
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>

                                            </span>
                                        </div>
                                        <div class="ps__rail-x">
                                            <div class="ps__thumb-x" tabindex="0"></div>
                                        </div>
                                        <div class="ps__rail-y">
                                            <div class="ps__thumb-y" tabindex="0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-form-element">                        
                                <button type="submit" class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>-faded<?php }?>">
                                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['check'];?>
</span>
                                    <div class="loader loader-button">
                                        <?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>
                                        <?php }?> 
                                    </div>
                                </button>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['freedomaintlds']->value) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                    <div class="message message-free-domain">
                        <h4 class="message-title"><i class="lm lm-globe-alt"></i><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.free_domain_terms.title');?>
</h4>                    
                        <ul class="message-desc">
                            <?php if (is_array($_smarty_tpl->tpl_vars['productinfo']->value['freedomaintlds']) && !empty($_smarty_tpl->tpl_vars['productinfo']->value['freedomaintlds'])) {?><li><span><?php echo ucfirst($_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainappliesto']);?>
:</span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productinfo']->value['freedomaintlds'], 'freeTld');
$_smarty_tpl->tpl_vars['freeTld']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['freeTld']->value) {
$_smarty_tpl->tpl_vars['freeTld']->do_else = false;
?><span class="label label-sm label-default"><?php echo $_smarty_tpl->tpl_vars['freeTld']->value;?>
</span><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li><?php }?>
                            <?php if (is_array($_smarty_tpl->tpl_vars['productinfo']->value['freedomainpaymentterms']) && !empty($_smarty_tpl->tpl_vars['productinfo']->value['freedomainpaymentterms'])) {?><li><span><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.free_domain_terms.available_for_cycles');?>
:</span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productinfo']->value['freedomainpaymentterms'], 'paymentterm');
$_smarty_tpl->tpl_vars['paymentterm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paymentterm']->value) {
$_smarty_tpl->tpl_vars['paymentterm']->do_else = false;
$_smarty_tpl->_assignInScope('langkey', "orderpaymentterm".((string)$_smarty_tpl->tpl_vars['paymentterm']->value));?><span class="label label-sm label-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['langkey']->value];?>
</span><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li><?php }?>
                            <li><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.free_domain_terms.one_type_product');?>
</li>
                       </ul> 
                    </div>
                <?php } else { ?>
                    <p class="domain-suggestions-warning">* <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainregistration'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainappliesto'];?>
: <?php echo $_smarty_tpl->tpl_vars['freedomaintlds']->value;?>
</p>
                <?php }?>
            <?php }?>
        </form>
           
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
&domainselect=1" id="frmProductDomainSelections">
            <?php if ((!$_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showContinueButton'] || $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showContinueButton'] == "0")) {?>
                <?php if ($_GET['billingcycle']) {?>
                    <input type="hidden" name="billingcycle" value="<?php echo $_GET['billingcycle'];?>
" />
                <?php }?>
                <?php if ($_GET['addons']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_GET['addons'], 'addons', false, 'key');
$_smarty_tpl->tpl_vars['addons']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['addons']->value) {
$_smarty_tpl->tpl_vars['addons']->do_else = false;
?>
                        <input type="hidden" name="addons[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="1" />
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                
                <?php if ($_GET['configoption']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_GET['configoption'], 'cf', false, 'key');
$_smarty_tpl->tpl_vars['cf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cf']->value) {
$_smarty_tpl->tpl_vars['cf']->do_else = false;
?>
                        <input type="hidden" name="configoption[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['cf']->value;?>
" />
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php }?>
            <input type="hidden" id="resultDomainOption" name="domainoption" />
            <input type="hidden" id="resultDomain" name="domains[]" />
            <input type="hidden" id="resultDomainPricingTerm" />
            <div id="DomainSearchResults" class="hidden">
                <div id="searchDomainInfo" class="domain-checker-result-headline">
                    <div id="primaryLookupResult" <?php if ($_smarty_tpl->tpl_vars['isBundle']->value || $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showContinueButton'] == "1") {?>data-product-bundle<?php }?> <?php if ($_smarty_tpl->tpl_vars['sld']->value && $_smarty_tpl->tpl_vars['tld']->value && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['automaticallyAddViaExternalLink'] == "1") {?>data-add-to-cart-on-search<?php }?>>
                        <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/search-result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('configProductDomain'=>"true"), 0, true);
?>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['spotlightTlds']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/spotlight.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('configProductDomain'=>"true"), 0, true);
?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/suggested.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('configProductDomain'=>"true"), 0, true);
?>
                <?php }?>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/bottom-sticky.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"productdomian"), 0, true);
?>
            
        </form>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/recommendations-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            <?php if ($_smarty_tpl->tpl_vars['sld']->value && $_smarty_tpl->tpl_vars['tld']->value) {?>
                
                    setTimeout(function(){
                        let button = $('.panel-domain-search .inline-form:not(hidden) button');
                        jQuery(button).trigger('click');
                    }, 500);
                  
            <?php }?>
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
