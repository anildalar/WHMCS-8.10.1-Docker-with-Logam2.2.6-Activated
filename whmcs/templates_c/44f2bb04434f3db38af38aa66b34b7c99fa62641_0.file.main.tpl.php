<?php
/* Smarty version 3.1.48, created on 2025-01-04 09:20:09
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/controlers/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778fd4902cf45_13949259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f2bb04434f3db38af38aa66b34b7c99fa62641' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/controlers/main.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:assets/css_assets.tpl' => 1,
    'file:assets/js_assets.tpl' => 1,
  ),
),false)) {
function content_6778fd4902cf45_13949259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:assets/css_assets.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="layers">
    <div class="lu-app">
        <div class="lu-app-header lu-app-header--responsive lu-navbar">
            <a class="lu-navbar__brand lu-brand lu-brand--product" href="<?php echo $_smarty_tpl->tpl_vars['mainURL']->value;?>
">
                <div class="lu-brand__logo lu-product-<?php echo $_smarty_tpl->tpl_vars['tagImageModule']->value;?>
-for-whmcs lu-i-c-5x">
                    <img class="lu-i-c-3x" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/img/products/<?php echo $_smarty_tpl->tpl_vars['tagImageModule']->value;?>
.svg" alt="<?php echo $_smarty_tpl->tpl_vars['mainName']->value;?>
">
                </div>
                <div class="lu-brand__text">
                    <?php echo $_smarty_tpl->tpl_vars['mainName']->value;?>

                </div>
            </a>
            <button class="lu-navbar__burger lu-navbar-right lu-btn" data-toggle="offCanvas" data-target=".lu-app-navbar">
                <span class="lu-btn__icon lu-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
        <div class="lu-app-navbar lu-navbar lu-navbar--responsive lu-off-canvas-responsive lu-off-canvas-responsive--right">
            <div class="lu-navbar__top">
                <a class="lu-navbar__brand lu-brand lu-brand--product" href="<?php echo $_smarty_tpl->tpl_vars['mainURL']->value;?>
">
                    <div class="lu-brand__logo lu-product-<?php echo $_smarty_tpl->tpl_vars['tagImageModule']->value;?>
-for-whmcs lu-i-c-6x">
                        <img class="lu-i-c-4x" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/img/products/<?php echo $_smarty_tpl->tpl_vars['tagImageModule']->value;?>
.svg" alt="<?php echo $_smarty_tpl->tpl_vars['mainName']->value;?>
">
                    </div>
                    <div class="lu-brand__text">
                        <?php echo $_smarty_tpl->tpl_vars['mainName']->value;?>

                    </div>
                </a>
                <a class="lu-navbar__brand lu-brand lu-is-right" href="https://www.modulesgarden.com" target="_blank">
                    <div class="lu-brand__logo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/img/logo-collaboration-with-lagom.svg" alt="ModulesGarden" width="150">
                    </div>
                </a>
            </div>
            <div class="lu-navbar__nav">
                <ul class="lu-nav lu-nav--h lu-is-left">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'category', false, 'catName');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catName']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['category']->value['submenu']) {?>
                            <li class="lu-nav__item has-dropdown <?php if (strtolower($_smarty_tpl->tpl_vars['currentPageName']->value) === strtolower($_smarty_tpl->tpl_vars['catName']->value)) {?>is-active<?php }?>">
                                <a class="lu-nav__link" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value['icon']) {?>
                                        <i class="<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
"></i>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value['label']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['subpage']->value['label'];?>

                                        <span class="lu-nav__link-drop-arrow"></span>
                                    <?php } else { ?>
                                        <span class="lu-nav__link-text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels','label',$_smarty_tpl->tpl_vars['catName']->value);?>
</span>
                                        <span class="lu-nav__link-drop-arrow"></span>
                                    <?php }?>
                                    <span class="drop-arrow"></span>
                                </a>
                                <ul class="lu-nav lu-nav--sub">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['submenu'], 'subCategory', false, 'subCatName');
$_smarty_tpl->tpl_vars['subCategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subCatName']->value => $_smarty_tpl->tpl_vars['subCategory']->value) {
$_smarty_tpl->tpl_vars['subCategory']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['externalUrl']) {?>
                                            <li class="lu-nav__item">
                                                <a class="lu-nav__link" href="<?php echo $_smarty_tpl->tpl_vars['subCategory']->value['externalUrl'];?>
" target="_blank">
                                                    <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['icon']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['subCategory']->value['icon'];?>
"></i><?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['label']) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['subCategory']->value['label'];?>

                                                    <?php } else { ?>
                                                        <span class="lu-nav__link-text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels',$_smarty_tpl->tpl_vars['catName']->value,$_smarty_tpl->tpl_vars['subCatName']->value);?>
</span>
                                                    <?php }?>                                                        
                                                </a>
                                            </li>
                                        <?php } else { ?>
                                            <li class="lu-nav__item">
                                                <a class="lu-nav__link" href="<?php echo $_smarty_tpl->tpl_vars['subCategory']->value['url'];?>
">
                                                    <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['icon']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['subCategory']->value['icon'];?>
"></i><?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['label']) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['subCategory']->value['label'];?>

                                                    <?php } else { ?>
                                                        <span class="lu-nav__link-text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels',$_smarty_tpl->tpl_vars['catName']->value,$_smarty_tpl->tpl_vars['subCatName']->value);?>
</span>
                                                    <?php }?>                                                        
                                                </a>
                                            </li>                                         
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </li>                            
                        <?php } else { ?>
                            <li class="lu-nav__item <?php if (strtolower($_smarty_tpl->tpl_vars['currentPageName']->value) === strtolower($_smarty_tpl->tpl_vars['catName']->value)) {?>is-active<?php }?>">
                                <a class="lu-nav__link" href="<?php if ($_smarty_tpl->tpl_vars['category']->value['externalUrl']) {
echo $_smarty_tpl->tpl_vars['category']->value['externalUrl'];
} else {
echo $_smarty_tpl->tpl_vars['category']->value['url'];
}?>"
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value['externalUrl']) {?> target="_blank"<?php }?>>
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value['icon']) {?>
                                        <i class="<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
"></i>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value['label']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['subpage']->value['label'];?>

                                    <?php } else { ?>
                                        <span class="lu-nav__link-text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels','label',$_smarty_tpl->tpl_vars['catName']->value);?>
</span>
                                    <?php }?>
                                    <span class="drop-arrow"></span>
                                </a>
                            </li>        
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <div class="lu-app-main">
            <div class="lu-app-main__body">
                <div class="lu-app-main__top lu-top">
                    <ul class="lu-breadcrumb lu-type-5">
                        <?php $_smarty_tpl->_assignInScope('brKeys', array_keys($_smarty_tpl->tpl_vars['breadcrumbs']->value));?>
                        <?php $_smarty_tpl->_assignInScope('brLastKey', end($_smarty_tpl->tpl_vars['brKeys']->value));?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'brItem', false, 'brKey');
$_smarty_tpl->tpl_vars['brItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brKey']->value => $_smarty_tpl->tpl_vars['brItem']->value) {
$_smarty_tpl->tpl_vars['brItem']->do_else = false;
?>
                            <?php if (strtolower($_smarty_tpl->tpl_vars['brItem']->value->getTitle()) !== 'index') {?>
                                <li class="lu-breadcrumb__item is-active">
                                    <?php if ($_smarty_tpl->tpl_vars['brItem']->value->getUrl() && $_smarty_tpl->tpl_vars['brLastKey']->value !== $_smarty_tpl->tpl_vars['brKey']->value && !$_smarty_tpl->tpl_vars['brItem']->value->isDisabled()) {?>
                                        <a class="lu-breadcrumb__link" href="<?php echo $_smarty_tpl->tpl_vars['brItem']->value->getUrl();?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['brItem']->value->getRawTitle()) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['brItem']->value->getRawTitle();?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['brKeys']->value[0] === $_smarty_tpl->tpl_vars['brKey']->value) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels','label',$_smarty_tpl->tpl_vars['brItem']->value->getTitle());?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels',$_smarty_tpl->tpl_vars['breadcrumbs']->value[($_smarty_tpl->tpl_vars['brKey']->value-1)]->getTitle(),$_smarty_tpl->tpl_vars['brItem']->value->getTitle());?>

                                            <?php }?>
                                        </a>
                                    <?php } else { ?>
                                        <span class="breadcrumb__link">
                                            <?php if ($_smarty_tpl->tpl_vars['brItem']->value->getRawTitle()) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['brItem']->value->getRawTitle();?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['brKeys']->value[0] === $_smarty_tpl->tpl_vars['brKey']->value) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels','label',$_smarty_tpl->tpl_vars['brItem']->value->getTitle());?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels',$_smarty_tpl->tpl_vars['breadcrumbs']->value[($_smarty_tpl->tpl_vars['brKey']->value-1)]->getTitle(),$_smarty_tpl->tpl_vars['brItem']->value->getTitle());?>

                                            <?php }?>
                                        </span>
                                    <?php }?>
                                </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['moduleRequirementsErrors']->value) {?>
                    <div class="lu-alert lu-alert--outline lu-alert--icon lu-alert--danger lu-alert--bordered lu-m-b-x lu-alert--dismiss mg-message">
                        <div class="lu-alert__body">
                            <b><?php echo $_smarty_tpl->tpl_vars['moduleRequirementsErrors']->value;?>
</b>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div class="lu-alert lu-alert--outline lu-alert--icon lu-alert--danger lu-alert--bordered lu-m-b-x lu-alert--dismiss mg-message">
                        <div class="lu-alert__body">
                            <b><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</b>
                        </div>
                        <button type="button" class="lu-btn lu-btn--icon lu-btn--link lu-btn--close" data-dismiss="alert">
                            <i class="lu-btn__icon lu-zmdi lu-zmdi-close"></i>
                        </button>
                    </div>                    
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>    
                    <div class="lu-alert lu-alert--outline lu-alert--icon lu-alert--success lu-alert--bordered lu-m-b-x lu-alert--dismiss mg-message">
                        <div class="lu-alert__body">
                            <b><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</b>
                        </div>
                        <button type="button" class="lu-btn lu-btn--icon lu-btn--link lu-btn--close" data-dismiss="alert">
                            <i class="lu-btn__icon lu-zmdi lu-zmdi-close"></i>
                        </button>
                    </div>                
                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['isDebug']->value == true && (count($_smarty_tpl->tpl_vars['MGLANG']->value->getMissingLangs()) != 0))) {?>
                    <div class="lu-row">
                        <div class="lu-col-md-12">
                            <div class="lu-widget">
                                <div class="lu-widget__body">
                                    <div class="lu-widget__content">
                                        <div class="lu-row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MGLANG']->value->getMissingLangs(), 'value', false, 'varible');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['varible']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                <div class="lu-col-md-12"><b><?php echo $_smarty_tpl->tpl_vars['varible']->value;?>
</b> = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';</div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:assets/js_assets.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="clear"></div>
<?php }
}
