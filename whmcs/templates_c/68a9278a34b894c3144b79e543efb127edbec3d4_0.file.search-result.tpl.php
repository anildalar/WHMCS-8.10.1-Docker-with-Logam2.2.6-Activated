<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:58
  from '/var/www/html/templates/orderforms/lagom2/includes/domain/search-result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7ce752034_36273266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68a9278a34b894c3144b79e543efb127edbec3d4' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/domain/search-result.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/overwrites/search-result.tpl' => 1,
  ),
),false)) {
function content_66dff7ce752034_36273266 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/search-result.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/search-result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div id="idnLanguageSelector" class="message message-no-data idn-language-selector idn-language hidden">
        <p class="text-center">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.idnLanguageDescription'),$_smarty_tpl ) );?>

        </p>
        <div class="form-group w-100 m-b-0">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <select name="idnlanguage" class="form-control">
                        <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.idnLanguage'),$_smarty_tpl ) );?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['idnLanguages']->value, 'idnLanguage', false, 'idnLanguageKey');
$_smarty_tpl->tpl_vars['idnLanguage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idnLanguageKey']->value => $_smarty_tpl->tpl_vars['idnLanguage']->value) {
$_smarty_tpl->tpl_vars['idnLanguage']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['idnLanguageKey']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>('idnLanguage.').($_smarty_tpl->tpl_vars['idnLanguageKey']->value)),$_smarty_tpl ) );?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <span class="field-error-msg help-block text-center text-danger">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.selectIdnLanguageForRegister'),$_smarty_tpl ) );?>

            </span>
        </div>
    </div>
    <div class="domain-available message message-lg message-success message-h">
        <div class="message-content m-w-lg">
            <div class="message-icon">
                <i class="lm lm-check"></i>
            </div>        
            <div class="message-body">
                <div class="message-title">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailablemessage'];?>

                </div>
                <div class="domain-price">
                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'] == 'true') {?>
                        <div class="dropdown">
                            <a data-toggle="dropdown" class="btn-price" href="#" data-tld-cycle-switcher-button>
                                <span class="btn-text"></span>
                                <i class="btn-icon ls ls-caret"></i>
                            </a>
                            <ul 
                                data-tld-cycle-switcher
                                data-lang-year="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.annually');?>
" 
                                data-lang-years="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.annually_multi');?>
" 
                                class="dropdown-menu dropdown-menu-right">
                            </ul>
                        </div>
                    <?php } else { ?>
                        <div class="price price-sm price-left"></div>
                    <?php }?>  
                </div>
            </div>
            <div class="message-actions">          
                <?php if ($_smarty_tpl->tpl_vars['configProductDomain']->value && ($_smarty_tpl->tpl_vars['isBundle']->value || $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showContinueButton'] == "1")) {?>
                    <button type="submit" class="btn btn-lg btn-primary" data-whois="0" data-domain="">
                        <span><i class="ls ls-share"></i><span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
</span></span>
                    </button>
                <?php } else { ?>
                    <div class="btn-group btn-group-remove">
                        <button type="submit" class="btn btn-lg btn-primary-faded btn-add-to-cart" <?php if ($_smarty_tpl->tpl_vars['configProductDomain']->value) {?>data-product-domain=true<?php }?> data-whois="0" data-domain="">
                            <span class="to-add"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.addToCart'),$_smarty_tpl ) );?>
</span>
                            <span class="added"><i class="lm lm-check"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincheckeradded'),$_smarty_tpl ) );?>
</span>
                            <span class="unavailable" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                        </button>
                        <button type="button" class="btn btn-lg btn-primary btn-remove-domain hidden" data-system-template="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" data-domain="" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
">
                            <i class="lm lm-trash"></i> 
                            <div class="loader loader-button hidden">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                            </div>
                        </button>
                        <div class="btn-group-loader"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?></div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "domainregister") {?>
        <div class="domain-tld-unavailable domain-checker-unavailable message message-lg message-danger message-h">
            <div class="message-icon">
                <i class="lm lm-close"></i>
            </div>
            <div class="message-body">
                <p class="message-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainHasUnavailableTld'),$_smarty_tpl ) );?>
</p>
            </div>
        </div>
    <?php }?>
    <div class="domain-unavailable message message-lg message-danger message-h">
        <div class="message-icon">
            <i class="lm lm-close"></i>
        </div>
        <div class="message-body">
            <p class="message-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainIsUnavailable'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>
    <div class="domain-invalid message message-lg message-danger message-h">
        <div class="message-icon">
            <i class="lm lm-close"></i>
        </div>        
        <div class="message-body">
            <p class="message-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainInvalid'),$_smarty_tpl ) );?>
</p>
            <p class="text-light">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainInvalidCheckEntry'),$_smarty_tpl ) );?>

            </p>
        </div>
    </div>
    <div class="domain-error message message-lg message-danger message-h">
        <div class="message-icon">
            <i class="lm lm-close"></i>
        </div>
        <div class="message-body">
            <p class="message-title"></p>
        </div>    
    </div>
    <?php if ($_smarty_tpl->tpl_vars['configProductDomain']->value) {?>
    <div class="transfer-eligible message message-lg message-success message-h">
        <div class="message-icon">
            <i class="lm lm-check"></i>
        </div>
        <div class="message-body">
            <p class="message-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferEligible'),$_smarty_tpl ) );?>
</p>
            <p class="text-light">
                <span class="transfer-eligible-desc-uk hidden"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.change_domains_ipstag');?>
</span>
                <span class="transfer-eligible-desc hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferUnlockBeforeContinuing'),$_smarty_tpl ) );?>
</span>
            </p>
            <div class="domain-price">
                <span class="domain-price-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainPriceTransferLabel'),$_smarty_tpl ) );?>
</span>
                <div class="price price-sm price-left"></div>
            </div>
        </div>
        <div class="message-actions">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="ls ls-share m-r-8"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'continue'),$_smarty_tpl ) );?>

            </button>
        </div>
    </div>
    <div class="transfer-not-eligible message message-lg message-danger message-h">
        <div class="message-icon">
            <i class="lm lm-close"></i>
        </div>
        <div class="message-body">
            <p class="message-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferNotEligible'),$_smarty_tpl ) );?>
</p>
            <p class="text-light">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferNotRegistered'),$_smarty_tpl ) );?>

                <br />
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.trasnferRecentlyRegistered'),$_smarty_tpl ) );?>

                <br />
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferAlternativelyRegister'),$_smarty_tpl ) );?>

            </p>
        </div>
    </div>
    <?php }
}
}
}
