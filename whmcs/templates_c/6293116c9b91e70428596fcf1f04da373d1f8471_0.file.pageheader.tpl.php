<?php
/* Smarty version 3.1.48, created on 2024-09-18 06:31:17
  from '/var/www/html/templates/lagom2/includes/pageheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea73b5f42068_16459254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6293116c9b91e70428596fcf1f04da373d1f8471' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/pageheader.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea73b5f42068_16459254 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/pageheader.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['RSheadercenter']->value) {?>
        <div class="main-header-top">
            <h1 class="main-header-title">
            <?php if ($_smarty_tpl->tpl_vars['desc']->value) {?>
                <span class="text-lighter text-small"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</span>
                <br />
            <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h1>
            <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
        </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['RSheadersearch']->value) {?>
            <div class="main-header-top">
                <h1 class="main-header-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div class="search-group">
                    <div class="search-field">
                        <input type="text" id="table-search" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableentersearchterm'];?>
">  
                        <div class="search-field-icon"><i class="lm lm-search"></i></div>                
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproducts') {?>
                        <a class="btn btn-primary-faded" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php"><i class="ls ls-plus"></i><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.add_new');?>
</a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "clientareadomains") {?>
                        <a class="btn btn-primary-faded" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&domain=register.php"><i class="ls ls-plus"></i><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.add_new');?>
</a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "supportticketslist" && $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['type'] == 'navbar-left') {?>
                        <a class="btn btn-primary-faded" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/submitticket.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navopenticket'];?>
</a>
                    <?php }?>   
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['RSheaderRenewalSearch']->value) {?>
            <div class="main-header-top">
                <h1 class="main-header-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div class="search-group">
                    <div class="search-field">                
                        <input type="text" id="domainRenewalFilter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableentersearchterm'];?>
">
                       <div class="search-field-icon"><i class="lm lm-search"></i></div>     
                    </div>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['RSheaderServicesRenewalSearch']->value) {?>
            <div class="main-header-top">
                <h1 class="main-header-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div class="search-group">
                    <div class="search-field">                
                        <input type="text" id="serviceRenewalFilter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableentersearchterm'];?>
">
                       <div class="search-field-icon"><i class="lm lm-search"></i></div>     
                    </div>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['RSheaderCustomButton']->value || $_smarty_tpl->tpl_vars['RSheaderCustomSearch']->value) {?>
             <div class="main-header-top">
                <h1 class="main-header-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div class="search-group">
                    <?php if ($_smarty_tpl->tpl_vars['RSheaderCustomSearch']->value) {?>  
                        <div class="search-field">
                            <?php echo $_smarty_tpl->tpl_vars['RSheaderCustomSearch']->value;?>

                            <div class="search-field-icon"><i class="lm lm-search"></i></div>                
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['RSheaderCustomButton']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['RSheaderCustomButton']->value;?>

                    <?php }?>    
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "products") {?>
            <h1 class="main-header-title">
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h1>
            <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['tagline']) {?>
                <p><?php echo $_smarty_tpl->tpl_vars['productGroup']->value['tagline'];?>
</p>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "knowledgebasearticle") {?>
            <h1 class="main-header-title">
                <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>

            </h1>
        <?php } else { ?>
            <h1 class="main-header-title">
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h1>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value || $_smarty_tpl->tpl_vars['desc']->value) {?>
            <div class="main-header-bottom">
                <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
            </div>
        <?php }?>
    <?php }
}
}
}
