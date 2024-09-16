<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:37:57
  from '/var/www/html/templates/lagom2/includes/common/layouts-vars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e407f5754c24_67628477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6604ca550e042bf0f13f59497dab91bd4f3a596' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/common/layouts-vars.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e407f5754c24_67628477 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['mainGridNoSidebarClass']->value)) && $_smarty_tpl->tpl_vars['mainGridNoSidebarClass']->value && (!$_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() && !$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
    <?php $_smarty_tpl->_assignInScope('mainGrid', $_smarty_tpl->tpl_vars['mainGridNoSidebarClass']->value ,false ,2);
} elseif ((isset($_smarty_tpl->tpl_vars['mainGridOrderClass']->value)) && $_smarty_tpl->tpl_vars['mainGridOrderClass']->value) {?>
    <?php $_smarty_tpl->_assignInScope('mainGrid', $_smarty_tpl->tpl_vars['mainGridOrderClass']->value ,false ,2);
} elseif (!(isset($_smarty_tpl->tpl_vars['skipMainBodyContainer']->value)) || !$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>
    <?php $_smarty_tpl->_assignInScope('mainGrid', "row" ,false ,2);
}?>

<?php $_smarty_tpl->_assignInScope('iconsPages', array('clientareadomains','supportticketslist','clientareainvoices','clientareaproducts') ,false ,2);?>

<?php if ((((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainSidebar'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainSidebar'] == "true") || $_smarty_tpl->tpl_vars['ignoreSidebars']->value || ((isset($_smarty_tpl->tpl_vars['inShoppingCart']->value)) && $_smarty_tpl->tpl_vars['inShoppingCart']->value) || $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideSidebar'] == '1' || !($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) && !$_smarty_tpl->tpl_vars['forceSidebar']->value) {?>
    <?php $_smarty_tpl->_assignInScope('skipMainSidebar', "true" ,false ,2);
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainTop'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainTop'] == "true") || ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['isFullPage'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['isFullPage'] == "1") || $_smarty_tpl->tpl_vars['templatefile']->value == "oauth/layout" || ((isset($_smarty_tpl->tpl_vars['custompage']->value)) && $_smarty_tpl->tpl_vars['custompage']->value == 'blank')) {?>
    <?php $_smarty_tpl->_assignInScope('skipMainTop', "true" ,false ,2);
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainFooter'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainFooter'] == "true") || ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['isFullPage'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['isFullPage'] == "1") || $_smarty_tpl->tpl_vars['templatefile']->value == "oauth/layout" || ((isset($_smarty_tpl->tpl_vars['custompage']->value)) && $_smarty_tpl->tpl_vars['custompage']->value == 'blank')) {?>
    <?php $_smarty_tpl->_assignInScope('skipAppNav', "true" ,false ,2);
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainFooter'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainFooter'] == "true") || ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['isFullPage'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['isFullPage'] == "1") || $_smarty_tpl->tpl_vars['templatefile']->value == "oauth/layout" || ((isset($_smarty_tpl->tpl_vars['custompage']->value)) && $_smarty_tpl->tpl_vars['custompage']->value == 'blank')) {?>
    <?php $_smarty_tpl->_assignInScope('skipMainFooter', "true" ,false ,2);
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainBody'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainBody'] == "true") || $_smarty_tpl->tpl_vars['ignoreMainBody']->value || ((isset($_smarty_tpl->tpl_vars['custompage']->value)) && $_smarty_tpl->tpl_vars['custompage']->value == 'full') || ((isset($_smarty_tpl->tpl_vars['custompage']->value)) && $_smarty_tpl->tpl_vars['custompage']->value == 'blank')) {?>
    <?php $_smarty_tpl->_assignInScope('skipMainBody', "true" ,false ,2);
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainHeader'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['skipMainHeader'] == "true") || $_smarty_tpl->tpl_vars['ignoreHeader']->value || ((isset($_smarty_tpl->tpl_vars['custompage']->value)) && $_smarty_tpl->tpl_vars['custompage']->value == 'full') || ((isset($_smarty_tpl->tpl_vars['custompage']->value)) && $_smarty_tpl->tpl_vars['custompage']->value == 'blank')) {?>
    <?php $_smarty_tpl->_assignInScope('skipMainHeader', "true" ,false ,2);
}?>



<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "clientareahome" || $_smarty_tpl->tpl_vars['templatefile']->value == "homepage") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.my_dashboard') ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "viewinvoice") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['invoicesview'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "viewquote") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['rslang']->value->trans('billing.view_quote') ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "configureproduct") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['orderconfigure'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "configureproductdomain") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerchoosedomain'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "configuredomains") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['cartdomainsconfig'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "viewcart" || $_smarty_tpl->tpl_vars['templatefile']->value == "checkout") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['cartreviewcheckout'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "domainregister") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "domaintransfer") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['transferdomain'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "domain-renewals") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['domainrenewals'] ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('RSheaderRenewalSearch', true ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "service-renewals") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['renewService']['titleAltPlural'] ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('RSheaderServicesRenewalSearch', true ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "products") {?>
    <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['headline']) {?>
        <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['productGroup']->value['headline'] ,false ,2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['productGroup']->value['name'] ,false ,2);?>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "fraudcheck") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['cartfraudcheck'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "complete") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['orderconfirmation'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "error") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['thereisaproblem'] ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "clientareaproductdetails") {?>
    <?php $_smarty_tpl->_assignInScope('displayTitle', $_smarty_tpl->tpl_vars['LANG']->value['clientareaproductdetails'] ,false ,2);
}?>


<?php if ($_smarty_tpl->tpl_vars['rsFooter']->value['primary']) {?>
    <?php $_smarty_tpl->_assignInScope('footerColCount', count($_smarty_tpl->tpl_vars['rsFooter']->value['primary']));?>
    <?php if ($_smarty_tpl->tpl_vars['footerColCount']->value == 1) {?>
        <?php $_smarty_tpl->_assignInScope('footerPrimaryCol', "12" ,false ,2);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['footerColCount']->value == 2) {?>
        <?php $_smarty_tpl->_assignInScope('footerPrimaryCol', "6" ,false ,2);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['footerColCount']->value == 3) {?>
        <?php $_smarty_tpl->_assignInScope('footerPrimaryCol', "4" ,false ,2);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['footerColCount']->value >= 4) {?>
        <?php $_smarty_tpl->_assignInScope('footerPrimaryCol', "3" ,false ,2);?>
    <?php }
}
}
}
