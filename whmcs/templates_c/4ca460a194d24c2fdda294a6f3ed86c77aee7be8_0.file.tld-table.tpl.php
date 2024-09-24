<?php
/* Smarty version 3.1.48, created on 2024-09-24 08:37:08
  from '/var/www/html/templates/lagom2/core/cms/sections/config/tld-table/tld-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f27a34ccd438_31921216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ca460a194d24c2fdda294a6f3ed86c77aee7be8' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/tld-table/tld-table.tpl',
      1 => 1720186760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f27a34ccd438_31921216 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="site-section section-title-above section-features section-features-tlds section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
    <div class="container <?php if ($_smarty_tpl->tpl_vars['display_tlds_slider']->value) {?>container-slider<?php }?> <?php if ($_smarty_tpl->tpl_vars['tlds_slider_type']->value == "screen-slider") {?>full-screen-slider<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['caption']->value) {?>
            <span class="section-caption"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES);?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            <h2 class="section-title"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
</h2>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?>
            <div class="section-subtitle"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>
</div>
        <?php }?>
        <div class="section-content section-tld-table">
            <div class="table-container dtTable <?php if ($_smarty_tpl->tpl_vars['tld_table_style']->value == "bordered") {?>is-bordered<?php } elseif ($_smarty_tpl->tpl_vars['tld_table_style']->value == "boxed") {?>is-boxed<?php }?>">
                <?php if (false) {?>
                    <div class="tld-categories">
                        <?php $_smarty_tpl->_assignInScope('firstCat', key($_smarty_tpl->tpl_vars['tldCategories']->value));?>
                        <select class="form-control " id="domain-filter">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tldCategories']->value, 'count', false, 'category');
$_smarty_tpl->tpl_vars['count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['count']->value) {
$_smarty_tpl->tpl_vars['count']->do_else = false;
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value == $_smarty_tpl->tpl_vars['firstCat']->value) {
}?>> (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                <?php }?>
                <table 
                    id="domains-table-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
" 
                    class="table tld-table invisible" 
                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Tld&method=getTldList&columns=<?php if ($_smarty_tpl->tpl_vars['show_register_column']->value == "1") {?>register<?php }
if ($_smarty_tpl->tpl_vars['show_transfer_column']->value == "1") {?>,transfer<?php }
if ($_smarty_tpl->tpl_vars['show_renewal_column']->value == "1") {?>,renew<?php }
if ($_smarty_tpl->tpl_vars['show_dns_management_column']->value == "1") {?>,dns_management<?php }
if ($_smarty_tpl->tpl_vars['show_email_forwarding_column']->value == "1") {?>,email_forwarding<?php }
if ($_smarty_tpl->tpl_vars['show_id_protection_column']->value == "1") {?>,idprot<?php }
if ($_smarty_tpl->tpl_vars['show_dns_management_column']->value == "1") {?>,dns<?php }
if ($_smarty_tpl->tpl_vars['show_email_forwarding_column']->value == "1") {?>,email<?php }?>" 
                    data-items-per-page="<?php echo $_smarty_tpl->tpl_vars['domains_per_page']->value;?>
"
                    data-items-currency-prefix=""
                    data-table-id="<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
"
                    data-lang-empty-table="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>
"
                    data-lang-info="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableshowing'];?>
"
                    data-lang-info-empty="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableempty'];?>
"
                    data-lang-info-filtered="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablefiltered'];?>
"
                    data-lang-lenght-menu="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablelength'];?>
"
                    data-lang-loading-records="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableloading'];?>
"
                    data-lang-paginate-first="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesfirst'];?>
"
                    data-lang-paginate-last="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepageslast'];?>
"
                    data-lang-paginate-next="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesnext'];?>
"
                    data-lang-paginate-previous="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesprevious'];?>
"
                    data-lang-search-tld="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('tld.search_tlds');?>
"

                >
                    <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('tld.tld');?>
<span class="sorting-arrows"></span></th> 
                            <?php if ($_smarty_tpl->tpl_vars['show_register_column']->value == "1") {?>
                                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsregister'];?>
<span class="sorting-arrows"></span></th>
                            <?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['show_transfer_column']->value == "1") {?>
                                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewalprice'];?>
<span class="sorting-arrows"></span></th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_renewal_column']->value == "1") {?>    
                                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
<span class="sorting-arrows"></span></th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_dns_management_column']->value == "1") {?>
                                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindnsmanagement'];?>
<span class="sorting-arrows"></span></th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_email_forwarding_column']->value == "1") {?>
                                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>
<span class="sorting-arrows"></span></th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_id_protection_column']->value == "1") {?>    
                                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>
<span class="sorting-arrows"></span></th>
                            <?php }?>    
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="loader loader-table-domains ">
                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
                </div>
            </div> 
        </div>    
        <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?> 
            <div class="section-actions">
                <div class="section-actions-buttons">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php }?>
    </div>   
</div> <?php }
}
