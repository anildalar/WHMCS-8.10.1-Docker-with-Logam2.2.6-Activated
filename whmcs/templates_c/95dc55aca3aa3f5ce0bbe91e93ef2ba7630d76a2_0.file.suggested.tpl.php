<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:58
  from '/var/www/html/templates/orderforms/lagom2/includes/domain/suggested.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7ce7783b3_19453187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95dc55aca3aa3f5ce0bbe91e93ef2ba7630d76a2' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/domain/suggested.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/overwrites/suggested.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/world-loader.tpl' => 1,
  ),
),false)) {
function content_66dff7ce7783b3_19453187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/suggested.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/suggested.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="section suggested-domains<?php if (!$_smarty_tpl->tpl_vars['showSuggestionsContainer']->value) {?> hidden<?php }?>">
        <div class="section-header">
            <h2 class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.suggestedDomains'),$_smarty_tpl ) );?>
</h2>        
            <p class="section-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainssuggestionswarnings'),$_smarty_tpl ) );?>
</p>
        </div>
        <ul class="domain-lookup-result list-group hidden <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'] == 'true') {?>domain-lookup-result-extended<?php }?>" id="domainSuggestions">
            <li class="domain-suggestion list-group-item hidden">
                <div class="content">
                    <span class="domain"></span><span class="extension"></span>
                    <span class="promo hidden">
                        <span class="sales-group-hot label label-danger hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCheckerSalesGroup.hot'),$_smarty_tpl ) );?>
</span>
                        <span class="sales-group-new label label-success hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCheckerSalesGroup.new'),$_smarty_tpl ) );?>
</span>
                        <span class="sales-group-sale label label-purple hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCheckerSalesGroup.sale'),$_smarty_tpl ) );?>
</span>  
                    </span>
                </div>
                <div class="actions">
                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'] == 'true') {?>
                        <select 
                            class="form-control input-sm" 
                            data-tld-cycle-switcher 
                            data-lang-year="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.annually');?>
" 
                            data-lang-years="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.annually_multi');?>
" 
                        >
                        </select>
                    <?php } else { ?>
                        <span class="price price-xs price-right"></span>
                    <?php }?>
                    <div class="btn-group btn-group-remove">
                        <button type="button" class="btn btn-sm <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic']) {?>btn-outline btn-default<?php } else { ?>btn-primary-faded<?php }?> btn-add-to-cart" data-whois="1" data-domain="" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic']) {?>data-system-style="futuristic"<?php }?>>
                            <span class="to-add"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>
</span>
                            <span class="added"><i class="ls ls-check"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincheckeradded'),$_smarty_tpl ) );?>
</span>
                            <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary btn-remove-domain hidden" data-system-template="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" data-domain="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic']) {?>data-system-style="futuristic"<?php }?>>
                            <i class="ls ls-trash"></i> 
                            <div class="loader loader-button hidden">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                            </div>
                        </button>
                        <div class="btn-group-loader"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?></div>
                    </div>
                    <button type="button" class="btn btn-primary domain-contact-support hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainChecker.contactSupport'),$_smarty_tpl ) );?>
</button>
                </div>
            </li>
        </ul>
        <div class="more-suggestions hidden">
            <a id="moreSuggestions" href="#" onclick="loadMoreSuggestions(); return false;"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsmoresuggestions'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace($_prefixVariable1,"!",'');?>
<i class="ls ls-sort-desc"></i></a>
            <span id="noMoreSuggestions" class="no-more small hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincheckernomoresuggestions'),$_smarty_tpl ) );?>
</span>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/world-loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"default"), 0, true);
?>
    </div>
<?php }
}
}
