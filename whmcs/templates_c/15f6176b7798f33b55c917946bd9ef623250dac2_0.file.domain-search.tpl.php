<?php
/* Smarty version 3.1.48, created on 2025-01-03 14:24:09
  from '/var/www/html/templates/lagom2/core/cms/sections/common/domain-search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777f309755af5_17556631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15f6176b7798f33b55c917946bd9ef623250dac2' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/domain-search.tpl',
      1 => 1734764845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777f309755af5_17556631 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/domain-search.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/domain-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <form 
        method="post" 
        action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
if ($_smarty_tpl->tpl_vars['type']->value == "register") {?>/cart.php?a=add&domain=register<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "transfer") {?>/cart.php?a=add&domain=transfer<?php }?>"
    >
        <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
            <?php echo '<script'; ?>
>
                var recaptchaSiteKey = "<?php echo $_smarty_tpl->tpl_vars['captcha']->value->recaptcha->getSiteKey();?>
";
            <?php echo '</script'; ?>
>
        <?php }?>
        <div class="domain-search-input search-group search-group-lg search-group-combined has-shadow search-w-tooltip <?php if ($_smarty_tpl->tpl_vars['customClass']->value) {
echo $_smarty_tpl->tpl_vars['customClass']->value;
}?>" data-container=".search-w-tooltip" data-trigger="manual" data-no-domain="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('banner_domain.tooltip.no_domain');?>
" data-no-tld="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('banner_domain.tooltip.no_tld');?>
" data-no-domain-name="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('banner_domain.tooltip.no_domain_name');?>
">
            <div class="search-field">
                <input 
                    class="form-control" 
                    type="text" 
                    name="query"
                    placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['searchenterdomain'];?>
" 
                    autocapitalize="none"
                    data-domain-input
                />
                <div class="search-field-icon">
                    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/custom/search-field-icon.tpl")) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../assets/svg-icon/custom/search-field-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php } else { ?>
                        <i class="lm lm-search"></i>
                    <?php }?>  
                </div>
            </div>
            <div class="search-group-btn">
                <button 
                    type="submit" 
                    data-btn-loader
                    class="btn btn-primary domainSearchBtn <?php if (in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible')) && $_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value)) {
echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);
}?>" 
                >
                    <?php if ($_smarty_tpl->tpl_vars['type']->value == "register") {?><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "transfer") {?><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['transfer'];?>
</span><?php }?>
                    <div class="loader loader-button hidden" >
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                    </div>
                </button>
            </div>
        </div>
    </form>
<?php }
}
}
