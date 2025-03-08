<?php
/* Smarty version 3.1.48, created on 2025-03-04 18:45:18
  from '/var/www/html/templates/lagom2/core/pages/homepage/modern/homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c74a3edf60d4_34017959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e09fc81b03608480fb6cd45b28f76a322e8591ea' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/pages/homepage/modern/homepage.tpl',
      1 => 1741086857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c74a3edf60d4_34017959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ($_smarty_tpl->tpl_vars['secondarySectionStyle']->value == 'primary' || $_smarty_tpl->tpl_vars['secondarySectionStyle']->value == 'secondary') {?>
    <?php $_smarty_tpl->_assignInScope('SecondaryIconOnDark', "true");
}?>

<?php $_smarty_tpl->_assignInScope('homepageTemplate', $_smarty_tpl->tpl_vars['RSThemes']->value['pages']['homepage']['name']);?>


 <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showProducGroups'] == '1') {
$_smarty_tpl->_assignInScope('productGroupId', array(array('gid'=>1,'icon'=>'shared-hosting.tpl','featured'=>false),array('gid'=>2,'icon'=>'vps-hosting.tpl','featured'=>true),array('gid'=>3,'icon'=>'dedicated-servers.tpl','featured'=>false)));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroupId']->value, 'product', false, 'k');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->product) {?>
        <?php $_smarty_tpl->_assignInScope('showGroup', true);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

 
<?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showTestimonials'] == '1') {
$_smarty_tpl->_assignInScope('testimonials', array(array('author'=>'Sonia Stephens','avatar'=>'homepage-avatar-1.png','website'=>'lagom.rsstudio.net','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, doloremque doloribus impedit incidunt minus natus officiis omnis perspiciatis ullam.'),array('author'=>'John Doe','avatar'=>'homepage-avatar-2.png','website'=>'rsstudio.net','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, doloremque doloribus impedit incidunt minus natus officiis omnis perspiciatis ullam.'),array('author'=>'Alexandra Chapman','avatar'=>'homepage-avatar-3.png','website'=>'rsstudio.net','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, doloremque doloribus impedit incidunt minus natus officiis omnis perspiciatis ullam.'),array('author'=>'James Bond','avatar'=>'homepage-avatar-4.png','website'=>'lagom.rsstudio.com','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, doloremque doloribus impedit incidunt minus natus officiis omnis perspiciatis ullam.'),array('author'=>'Alice Smith','avatar'=>'homepage-avatar-5.png','website'=>'lagom.rsstudio.com','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, doloremque doloribus impedit incidunt minus natus officiis omnis perspiciatis ullam.'),array('author'=>'Emily Turner','avatar'=>'homepage-avatar-6.png','website'=>'lagom.rsstudio.com','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, doloremque doloribus impedit incidunt minus natus officiis omnis perspiciatis ullam.'),array('author'=>'Brandon Quinn','avatar'=>'homepage-avatar-7.png','website'=>'lagom.rsstudio.com','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, doloremque doloribus impedit incidunt minus natus officiis omnis perspiciatis ullam.')));?>
 <?php }?>

<div class="site site-index">
    <?php if ($_smarty_tpl->tpl_vars['homepage']->value->getPromotionExtensionStatus()) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/extensions/PromoBanners/promotion-home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/pages/homepage/".((string)$_smarty_tpl->tpl_vars['homepageTemplate']->value)."/shared/banner-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showDomainSearch'] == '1') {?>
    <div class="site-section position-static">
        <div class="container">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.find_domain.title');?>
</h2>
            <div class="section-content">
                <form method="post" action="domainchecker.php" id="frmDomainHomepage">
                    <div class="search-group search-group-lg search-group-combined">
                        <div class="search-field">
                            <input class="form-control" type="text" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.find_domain.example_domain');?>
" autocapitalize="none"/>
                            <div class="search-field-icon"><i class="lm lm-search"></i></div>
                        </div>
                        <div class="search-group-btn">
                            <input type="submit" class="btn btn-primary search <?php if (in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible')) && $_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value)) {
echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);
}?>" value="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.find_domain.search');?>
"/>
                        </div>
                    </div>
                </form>
                <?php if ($_smarty_tpl->tpl_vars['homepage']->value->getSpotlight()) {?>
                    <div class="domain-tlds row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homepage']->value->getSpotlight(), 'domain');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                            <div class="col-sm">
                                <div class="domain-tld">
                                    <div class="tld-name">
                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['domain']->value['ext'],".","<span>.</span>");?>

                                    </div>
                                    <div class="tld-price">
                                        <span><?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];?>
</span>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    <?php }?>   
    <?php if ($_smarty_tpl->tpl_vars['productGroupId']->value && $_smarty_tpl->tpl_vars['showGroup']->value && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showProducGroups'] == '1') {?>
    <div class="site-section">
        <div class="container">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.products.title');?>
</h2>
            <div class="section-content">
                <div class="row row-lg row-eq-height row-eq-height-sm">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroupId']->value, 'product', false, 'k');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->product) {?>
                            <div class="col">
                                <div class="package package-lg">
                                    <div class="package-icon">
                                        <?php if (strstr($_smarty_tpl->tpl_vars['product']->value['icon'],".tpl")) {?>
                                            <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['icon'],'.tpl','');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>$_prefixVariable1), 0, true);
?>
                                        <?php } else { ?>
                                            <img class="w-100" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['icon'];?>
">
                                        <?php }?>
                                    </div>
                                    <h3 class="package-title"><?php echo $_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->product->productGroup->name;?>
</h3>
                                    <p class="package-desc"><?php echo $_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->product->productGroup->tagline;?>
</p>
                                    <div class="package-price">
                                        <div class="package-starting-from "><?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingat'];?>
</div>
                                        <div class="price">
                                            <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', false);?>
                                            <?php if ((($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs !== null )) && is_array($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs)) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs, 'price', false, 'key');
$_smarty_tpl->tpl_vars['price']->iteration = 0;
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
$_smarty_tpl->tpl_vars['price']->iteration++;
$__foreach_price_3_saved = $_smarty_tpl->tpl_vars['price'];
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['price']->iteration == 1) {?>
                                                        <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', $_smarty_tpl->tpl_vars['key']->value);?>
                                                    <?php }?>
                                                <?php
$_smarty_tpl->tpl_vars['price'] = $__foreach_price_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['productGroupPriceDisplay'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['productGroupPriceDisplay'] != "Cheapest billing cycle" && ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value || (isset($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs[mb_strtolower($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['productGroupPriceDisplay'], 'UTF-8')])))) {?>
                                               
                                                <?php $_smarty_tpl->_assignInScope('billingCycleName', false);?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs[mb_strtolower($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['productGroupPriceDisplay'], 'UTF-8')])) && $_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs[mb_strtolower($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['productGroupPriceDisplay'], 'UTF-8')]['real_price'] != "-1") {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>                                                  
                                                        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs[mb_strtolower($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['productGroupPriceDisplay'], 'UTF-8')]['price']));?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs[mb_strtolower($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['productGroupPriceDisplay'], 'UTF-8')]['real_price']));?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_assignInScope('billingCycleName', mb_strtolower($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['productGroupPriceDisplay'], 'UTF-8'));?>
                                                <?php } else { ?>    
                                                    <?php if ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value) {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value || $_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == "onetime") {?>                                                  
                                                            <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs[$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['price']));?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs[$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['real_price']));?>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->_assignInScope('billingCycleName', $_smarty_tpl->tpl_vars['firstAvailableCycle']->value);?>
                                                    <?php }?>
                                                <?php }?>
                                                <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['formatedPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['formatedPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled") {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                <?php } else { ?>
                                                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['formatedPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>

                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->billing == 'free') {?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == 'onetime') {?>
                                                    <span class="price-cycle">
                                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];?>

                                                    </span>
                                                <?php } else { ?>
                                                    <span class="price-cycle">
                                                        <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['billingCycleName']->value == "monthly") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['billingCycleName']->value == "quarterly") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['billingCycleName']->value == "semiannually") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['billingCycleName']->value == "annually") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['billingCycleName']->value == "biennially") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['billingCycleName']->value == "triennially") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>

                                                            <?php }?>
                                                        <?php }?>    
                                                    </span>
                                                <?php }?>
                                            <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value || $_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == "onetime") {?>
                                                    <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs[$_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle]['price']));?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->tabs[$_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle]['real_price']));?>
                                                <?php }?>
                                                <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['formatedPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['formatedPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled") {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                <?php } else { ?>
                                                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['formatedPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>

                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->billing == 'free') {?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == 'onetime') {?>
                                                    <span class="price-cycle">
                                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];?>

                                                    </span>
                                                <?php } else { ?>
                                                    <span class="price-cycle">
                                                        <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == "monthly") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == "quarterly") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == "semiannually") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == "annually") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == "biennially") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->cycle == "triennially") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>

                                                            <?php }?>
                                                        <?php }?>                                                        
                                                    </span>
                                                <?php }?>
                                            <?php }?>
                                        </div>
                                                                            </div>
                                    <div class="package-actions">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
cart.php?gid=<?php echo $_smarty_tpl->tpl_vars['homepage']->value->productGroup($_smarty_tpl->tpl_vars['product']->value['gid'])->product->productGroup->id;?>
" class="btn btn-lg btn-primary" data-target="incoming"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.products.product_btn');?>
</a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>        
    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showFeatures'] == '1') {?>
    <div class="site-section<?php if ($_smarty_tpl->tpl_vars['secondarySectionStyle']->value == 'secondary') {?> section-secondary<?php } elseif ($_smarty_tpl->tpl_vars['secondarySectionStyle']->value == 'primary') {?> section-primary<?php }?>">
        <div class="container">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.title');?>
</h2>
            <p class="section-subtitle"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.subtitle');?>
</p>
            <div class="section-content">
                <div class="row row-eq-height row-eq-height-xs features">
                    <div class="col-xl-3 col-md-6">
                        <div class="feature feature-xs-left">
                            <div class="feature-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"addon-email-forwarding",'onDark'=>$_smarty_tpl->tpl_vars['SecondaryIconOnDark']->value), 0, true);
?>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-1.title');?>
</h4>
                                <p class="feature-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-1.desc');?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature feature-xs-left">
                            <div class="feature-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"increase-SEO-rank",'onDark'=>$_smarty_tpl->tpl_vars['SecondaryIconOnDark']->value), 0, true);
?>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-2.title');?>
</h4>
                                <p class="feature-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-2.desc');?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature feature-xs-left">
                            <div class="feature-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"free-reissues",'onDark'=>$_smarty_tpl->tpl_vars['SecondaryIconOnDark']->value), 0, true);
?>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-3.title');?>
</h4>
                                <p class="feature-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-3.desc');?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature feature-xs-left">
                            <div class="feature-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"seo",'onDark'=>$_smarty_tpl->tpl_vars['SecondaryIconOnDark']->value), 0, true);
?>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-4.title');?>
</h4>
                                <p class="feature-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-4.desc');?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature feature-xs-left">
                            <div class="feature-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"organization-validation",'onDark'=>$_smarty_tpl->tpl_vars['SecondaryIconOnDark']->value), 0, true);
?>                                    
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-5.title');?>
</h4>
                                <p class="feature-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-5.desc');?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature feature-xs-left">
                            <div class="feature-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"free-reissues",'onDark'=>$_smarty_tpl->tpl_vars['SecondaryIconOnDark']->value), 0, true);
?>                                   
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-6.title');?>
</h4>
                                <p class="feature-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-6.desc');?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature feature-xs-left">
                            <div class="feature-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"encryp-sensitive-data",'onDark'=>$_smarty_tpl->tpl_vars['SecondaryIconOnDark']->value), 0, true);
?>                                    
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-7.title');?>
</h4>
                                <p class="feature-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-7.desc');?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature feature-xs-left">
                            <div class="feature-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"content-delivery-network",'onDark'=>$_smarty_tpl->tpl_vars['SecondaryIconOnDark']->value), 0, true);
?>                                    
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-8.title');?>
</h4>
                                <p class="feature-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.features.feature-8.desc');?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['testimonials']->value && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showTestimonials'] == '1') {?>
    <div class="site-section overflow-hidden">
        <div class="container">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.testimonials.title');?>
</h2>
            <p class="section-subtitle"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.testimonials.subtitle');?>
</p>
            <div class="section-content">
                <?php if (count($_smarty_tpl->tpl_vars['testimonials']->value) < 4) {?>
                <div class="testimonials row row-eq-height">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial', false, 'testimonial_key');
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial_key']->value => $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
?>
                    <div class="col-xl-4">
                        <div class="testimonials-item">
                            <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/pages/homepage/".((string)$_smarty_tpl->tpl_vars['homepageTemplate']->value)."/shared/testimonial.tpl")) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/pages/homepage/".((string)$_smarty_tpl->tpl_vars['homepageTemplate']->value)."/shared/testimonial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                        </div>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['testimonials']->value) > 3) {?>
                <div class="slider testimonials" data-testimonial-slider>
                    <div class="content-slider <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['homepage']['config']['enableTestimonialsAutoplay']) {?> content-slider-autoplay<?php }?>" data-slider-container>
                        <div class="content-slider-wrapper" data-slider-wrapper>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial', false, 'testimonial_key');
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial_key']->value => $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
?>
                            <div class="content-slider-item testimonials-item">
                                <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/pages/homepage/".((string)$_smarty_tpl->tpl_vars['homepageTemplate']->value)."/shared/testimonial.tpl")) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/pages/homepage/".((string)$_smarty_tpl->tpl_vars['homepageTemplate']->value)."/shared/testimonial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php }?>
                            </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['announcements']->value && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showNews'] == '1') {?>
    <div class="site-section">
        <div class="container">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.latest_news.title');?>
</h2>
            <p class="section-subtitle"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.latest_news.subtitle');?>
</p>
            <div class="section-content">
                <div class="row row-eq-height row-eq-height-xs news">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
                        <div class="<?php if (count($_smarty_tpl->tpl_vars['announcements']->value) == 2) {?> col-xl-6 col-md-6<?php } elseif (count($_smarty_tpl->tpl_vars['announcements']->value) == 3) {?> col-xl-4 col-md-6<?php } elseif (count($_smarty_tpl->tpl_vars['announcements']->value) == 1) {?> col-xl-12 col-md-12<?php } else { ?> col-xl-3 col-md-6<?php }?>">
                            <a href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" class="news-box">
                                <div class="news-body">
                                    <div class="news-date">
                                        <i class="lm lm-calendar"></i>
                                        <span><?php echo $_smarty_tpl->tpl_vars['carbon']->value->translatePassedToFormat($_smarty_tpl->tpl_vars['announcement']->value['rawDate'],'M jS');?>
</span>
                                    </div>
                                    <div class="news-desc">
                                        <p><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</p>
                                    </div>
                                </div>
                                <div class="news-actions">
                                    <span><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.latest_news.read_more');?>
</span>
                                </div>
                            </a>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showGetStarted'] == '1') {?>
    <div class="site-section<?php if ($_smarty_tpl->tpl_vars['secondarySectionStyle']->value == 'secondary') {?> section-secondary<?php } elseif ($_smarty_tpl->tpl_vars['secondarySectionStyle']->value == 'primary') {?> section-primary<?php }?> text-center">
        <div class="container">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.get_started.title');?>
</h2>
            <p class="section-subtitle"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.get_started.subtitle');?>
</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/contact.php" class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['secondarySectionStyle']->value == 'primary') {?>-faded<?php }?>"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('homepage.get_started.btn_contact_text');?>
</a>
        </div>
    </div>
    <?php }?>
</div>
<?php }
}
