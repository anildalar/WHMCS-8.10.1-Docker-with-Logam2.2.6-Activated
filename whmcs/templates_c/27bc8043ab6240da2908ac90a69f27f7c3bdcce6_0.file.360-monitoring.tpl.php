<?php
/* Smarty version 3.1.48, created on 2024-10-05 09:33:55
  from '/var/www/html/templates/lagom2/core/cms/sections/common/forms/360-monitoring.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67010803714b89_55070710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27bc8043ab6240da2908ac90a69f27f7c3bdcce6' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/forms/360-monitoring.tpl',
      1 => 1715336408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67010803714b89_55070710 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/360-monitoring.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/360-monitoring.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <form 
        action="<?php echo routePath('cart-threesixtymonitoring-site-check');?>
" 
        id="frmSiteCheck"
    >
        <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
            <?php echo '<script'; ?>
>
                var recaptchaSiteKey = "<?php echo $_smarty_tpl->tpl_vars['captcha']->value->recaptcha->getSiteKey();?>
";
            <?php echo '</script'; ?>
>
        <?php }?>
        <div class="search-group search-group-lg search-group-combined has-shadow <?php if ($_smarty_tpl->tpl_vars['customClass']->value) {
echo $_smarty_tpl->tpl_vars['customClass']->value;
}?>">
            <div class="search-field" data-custom-tooltip data-placement="top" title="Please enter URL" data-trigger="manual">
                <input 
                    class="form-control" 
                    type="text" 
                    name="url"
                    placeholder="www.example.com"
                />
                <div class="search-field-icon">
                    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/custom/search-field-icon.tpl")) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/svg-icon/custom/search-field-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php } else { ?>
                        <i class="lm lm-search"></i>
                    <?php }?>  
                </div>
            </div>

            <div class="dropdown dropup" data-select-dropdown  data-custom-tooltip data-placement="top" title="Please select location" data-trigger="manual">
                <div class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                    <input name="probe_id" id="" type="hidden" data-select-dropdown-value value="">
                    <div class="tld-select">
                        <span data-select-dropdown-value-view>
                            <b>Select location</b>
                        </span>
                        <b class="caret"></b>
                    </div>
                </div>
                <div class="dropdown-menu dropdown-menu-search pull-right">
                    <div class="dropdown-menu-items has-scroll" data-select-dropdown-list>
                                                <div class="dropdown-menu-item" data-value="60e81944f401963e610a0623">
                            <a class="">Nuremberg, DE</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61162681cac0b5844220bbdb">
                            <a class="">Helsinki, FI</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61162c08cac0b5844220bbdc">
                            <a class="">Falkenstein, DE</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61162c38cac0b5844220bbdd">
                            <a class="">Falkenstein #2, DE</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61162c72cac0b5844220bbde">
                            <a class="">Falkenstein #3, DE</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61162d5acac0b5844220bbdf">
                            <a class="">Helsinki #2, FI</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61165c3bcac0b5844220bbe0">
                            <a class="">Nuremberg, DE</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="616441aff8e2232e0d58907f">
                            <a class="">New York, US</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="616448a8ba7169082b506849">
                            <a class="">Los Angeles, US</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61644bc8f8e2232e0d5893aa">
                            <a class="">Atlanta, US</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61644bd3ba7169082b5069a8">
                            <a class="">Chicago, US</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61644bd7f0478a0c9846b751">
                            <a class="">Dallas, US</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61644bd8f8e2232e0d5893de">
                            <a class="">London, UK</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61644bdcf8e2232e0d5893df">
                            <a class="">Mexico City, MX</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61644bdcf8e2232e0d5893e0">
                            <a class="">Paris, FR</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61644bdfba7169082b5069da">
                            <a class="">Silicon Valley, US</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61644be3f0478a0c9846b771">
                            <a class="">Tokyo, JP</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="6164669cf8e2232e0d589bc8">
                            <a class="">Toronto, CA</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="616466a0f0478a0c9846be1b">
                            <a class="">Amsterdam, NL</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="616466a3ba7169082b50723a">
                            <a class="">Miami, US</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="616466a5f0478a0c9846be1c">
                            <a class="">Seattle, US</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="616466aaba7169082b50723b">
                            <a class="">Singapore, SG</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="616466aaf8e2232e0d589bc9">
                            <a class="">Stockholm, SE</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="616466aeba7169082b50723c">
                            <a class="">Sydney, AU</a>
                        </div>
                        <div class="dropdown-menu-item" data-value="61fb935e26fcf0158b834562">
                            <a class="">Ashburn, US</a>
                        </div>
                    </div>
                    <div class="dropdown-menu-item dropdown-menu-no-data">
                        <span class="text-info text-large">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>

                        </span>
                    </div>                                             
                </div>
            </div>

            <div class="search-group-btn">
                <button 
                    type="submit" 
                    class="btn btn-primary <?php if (in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible')) && $_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value)) {
echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);
}?>" 
                >
                    <span>Check</span>
                    <div class="loader hidden" >
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                    </div>
                </button>
            </div>
        </div>
    </form>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../modals/360-monitoring-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
