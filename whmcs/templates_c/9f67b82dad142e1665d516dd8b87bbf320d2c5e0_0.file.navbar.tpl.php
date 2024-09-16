<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:37:57
  from '/var/www/html/templates/lagom2/includes/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e407f5852b24_74431931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f67b82dad142e1665d516dd8b87bbf320d2c5e0' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/navbar.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/".((string)$_smarty_tpl->tpl_vars[\'template\']->value)."/includes/overwrites/navbar.tpl' => 1,
    'file:templates/".((string)$_smarty_tpl->tpl_vars[\'template\']->value)."/includes/common/language-chooser-dropdown.tpl' => 1,
    'file:templates/".((string)$_smarty_tpl->tpl_vars[\'template\']->value)."/includes/common/currency-dropdown.tpl' => 1,
  ),
),false)) {
function content_66e407f5852b24_74431931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
if ((isset($_smarty_tpl->tpl_vars['primaryNavbarHtmlCache']->value)) && $_smarty_tpl->tpl_vars['navtype']->value == "primary") {?>
    <?php echo $_smarty_tpl->tpl_vars['primaryNavbarHtmlCache']->value;?>

<?php } elseif ((isset($_smarty_tpl->tpl_vars['secondaryNavbarHtmlCache']->value)) && $_smarty_tpl->tpl_vars['navtype']->value != "primary") {?>
    <?php echo $_smarty_tpl->tpl_vars['secondaryNavbarHtmlCache']->value;?>

<?php } else { ?>
    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/navbar.tpl")) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['pageType']->value != "website") {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('activeGroup', false);?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->getUri() == $_smarty_tpl->tpl_vars['currentUrl']->value && (isset($_smarty_tpl->tpl_vars['navtype']->value)) && $_smarty_tpl->tpl_vars['navtype']->value == "primary" && !strstr($_smarty_tpl->tpl_vars['item']->value->getClass(),"nav-item-btn") && !$_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
                    <?php $_smarty_tpl->_assignInScope('activeGroup', $_smarty_tpl->tpl_vars['item']->value->getName());?>  
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem', true);
$_smarty_tpl->tpl_vars['childItem']->iteration = 0;
$_smarty_tpl->tpl_vars['childItem']->index = -1;
$_smarty_tpl->tpl_vars['childItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->do_else = false;
$_smarty_tpl->tpl_vars['childItem']->iteration++;
$_smarty_tpl->tpl_vars['childItem']->index++;
$_smarty_tpl->tpl_vars['childItem']->last = $_smarty_tpl->tpl_vars['childItem']->iteration === $_smarty_tpl->tpl_vars['childItem']->total;
$__foreach_childItem_4_saved = $_smarty_tpl->tpl_vars['childItem'];
?>
                        <?php $_smarty_tpl->_assignInScope('activePage', false);?>
                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getUri() && ($_smarty_tpl->tpl_vars['childItem']->value->getUri() == $_smarty_tpl->tpl_vars['currentUrl']->value || (strstr($_smarty_tpl->tpl_vars['currentUrl']->value,"/ssl-certificates/") && strstr($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"/ssl-certificates") && !strstr($_smarty_tpl->tpl_vars['currentUrl']->value,"/ssl-certificates/manage")) || smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getUri(),".php",'') == $_smarty_tpl->tpl_vars['currentUrl']->value)) {?>
                            <?php $_smarty_tpl->_assignInScope('activePage', $_smarty_tpl->tpl_vars['childItem']->value->getName());?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['navtype']->value)) && $_smarty_tpl->tpl_vars['navtype']->value == "primary") {?>
                                <?php $_smarty_tpl->_assignInScope('activeGroup', $_smarty_tpl->tpl_vars['item']->value->getName());?>
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['activePage']->value) {
break 1;
}?>
                    <?php
$_smarty_tpl->tpl_vars['childItem'] = $__foreach_childItem_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['activeGroup']->value) {
break 1;
}?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li
                menuItemName="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
"
                class="<?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren() || $_smarty_tpl->tpl_vars['item']->value->getAttribute('languageDropdown') || $_smarty_tpl->tpl_vars['item']->value->getAttribute('currencyDropdown')) {?>dropdown<?php }
if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['item']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['item']->value->getName() == $_smarty_tpl->tpl_vars['activeGroup']->value) {?> active<?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'] == 'left-nav-wide' && $_smarty_tpl->tpl_vars['item']->value->getName() == $_smarty_tpl->tpl_vars['activeGroup']->value && $_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?> open<?php }?>"
                id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"
                <?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('languageDropdown')) {?>data-language-select<?php }?>
            >
                <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBodyHtml()) {?>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getBodyHtml();?>

                <?php } else { ?>
                    <a
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren() || $_smarty_tpl->tpl_vars['item']->value->getAttribute('languageDropdown') || $_smarty_tpl->tpl_vars['item']->value->getAttribute('currencyDropdown')) {?>
                            class="dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        <?php } else { ?>
                            <?php if (strstr($_smarty_tpl->tpl_vars['item']->value->getUri(),"javascript:void") || strstr($_smarty_tpl->tpl_vars['item']->value->getUri(),"tel:") || strstr($_smarty_tpl->tpl_vars['item']->value->getUri(),"mailto:")) {?>
                                href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->getUri(),"/",'');?>
"
                            <?php } else { ?>
                                href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getUri();?>
"
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribute('target');?>
"<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] == "left-nav" && $_smarty_tpl->tpl_vars['navtype']->value == "primary" && $_smarty_tpl->tpl_vars['item']->value->getUri() && $_smarty_tpl->tpl_vars['item']->value->getUri() != "#" && $_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>data-nav-href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getUri();?>
"<?php }?>
                    >
                        <?php if (($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_gravatar_image'] == 'hidden' && $_smarty_tpl->tpl_vars['item']->value->getName() == 'Account') || ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_gravatar_image'] == 'displayed' && !$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['item']->value->getName() == 'Account')) {?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasIcon()) {?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->hasHeadingHtml()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->getHeadingHtml();?>

                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->hasIcon() && $_smarty_tpl->tpl_vars['item']->value->getName() != 'Account') {?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Notifications") {?>
                                <div class="notification-icon-container">
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->getBadge();?>

                                    <?php }?>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() != "Notifications") {?>

                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] == "left-nav" && $_smarty_tpl->tpl_vars['navtype']->value == "primary") {?>
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {
echo $_smarty_tpl->tpl_vars['item']->value->getBadge();
}?>
                                    </i>
                                <?php } else { ?>
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>
                                <?php }?>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->hasHeadingHtml() && $_smarty_tpl->tpl_vars['item']->value->getName() != 'Account') {?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Notifications") {?>
                                <div class="notification-icon-container notification-icon-container-svg">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getHeadingHtml();?>

                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->getBadge();?>

                                    <?php }?>
                                </div>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->getHeadingHtml();?>

                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == 'Account') {?>
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_gravatar_image'] == 'displayed') {?>
                                    <div class="client-avatar client-avatar-sm">
                                        <img class="lazyload" data-src="https://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['loggedinuser']->value->email);
if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] != "default") {?>?d=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'];
}?>" alt="Avatar">
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->getLabel() && $_smarty_tpl->tpl_vars['item']->value->getLabel() != '') {?>
                                    <?php if ($_smarty_tpl->tpl_vars['loggedinuser']->value && !empty($_smarty_tpl->tpl_vars['loggedinuser']->value->first_name)) {?>
                                        <div class="active-client">
                                            <span class="item-text"><?php echo $_smarty_tpl->tpl_vars['loggedinuser']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['loggedinuser']->value->last_name;?>
</span>
                                            <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['userid'] == $_smarty_tpl->tpl_vars['clientsdetails']->value['client_id']) {?>
                                                <span><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
</span>
                                            <?php }?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="active-client">
                                            <span class="item-text"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
</span>
                                            <span><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
</span>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getLabel() && $_smarty_tpl->tpl_vars['item']->value->getLabel() != '') {?>
                                <span class="item-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['myaccount'];?>
</span>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getLabel() && $_smarty_tpl->tpl_vars['item']->value->getLabel() != '') {?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Notifications") {?>
                                <span class="item-text item-text-badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {
echo $_smarty_tpl->tpl_vars['item']->value->getBadge();
}?></span>
                            <?php } else { ?>
                                <span class="item-text">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>

                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() != "Notifications" && $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] == "left-nav" && $_smarty_tpl->tpl_vars['navtype']->value == "primary") {?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {
echo $_smarty_tpl->tpl_vars['item']->value->getBadge();
}?>
                                    <?php }?>
                                </span>
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() != "Notifications" && ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] != "left-nav" || $_smarty_tpl->tpl_vars['navtype']->value != "primary")) {?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {
echo $_smarty_tpl->tpl_vars['item']->value->getBadge();
}?>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['item']->value->hasChildren() || $_smarty_tpl->tpl_vars['item']->value->getAttribute('languageDropdown') || $_smarty_tpl->tpl_vars['item']->value->getAttribute('currencyDropdown')) && !$_smarty_tpl->tpl_vars['item']->value->getAttribute('notificationDropdown')) {?><b class="ls ls-caret"></b><?php }?>
                    </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('languageDropdown')) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/language-chooser-dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getAttribute('currencyDropdown')) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/currency-dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
                                        <?php if (strstr($_smarty_tpl->tpl_vars['item']->value->getClass(),"dropdown-mega")) {?>
                        <div class="dropdown-menu dropdown-lazy <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] == "left-nav-wide" && $_smarty_tpl->tpl_vars['navtype']->value == "primary") {
} else { ?>has-scroll<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Account" && $_smarty_tpl->tpl_vars['loggedin']->value) {?>dropdown-menu-right<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('notificationDropdown')) {?>client-alerts<?php }?>">
                            <div class="dropdown-menu-body">
                                <div class="dropdown-menu-content">
                                    <?php $_smarty_tpl->_assignInScope('collapseOpened', false);?>
                                    <?php $_smarty_tpl->_assignInScope('headerFirst', false);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem', true, 'key');
$_smarty_tpl->tpl_vars['childItem']->iteration = 0;
$_smarty_tpl->tpl_vars['childItem']->index = -1;
$_smarty_tpl->tpl_vars['childItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->do_else = false;
$_smarty_tpl->tpl_vars['childItem']->iteration++;
$_smarty_tpl->tpl_vars['childItem']->index++;
$_smarty_tpl->tpl_vars['childItem']->last = $_smarty_tpl->tpl_vars['childItem']->iteration === $_smarty_tpl->tpl_vars['childItem']->total;
$__foreach_childItem_6_saved = $_smarty_tpl->tpl_vars['childItem'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->index == 0 && strstr($_smarty_tpl->tpl_vars['childItem']->value->getName(),"Header") && strstr($_smarty_tpl->tpl_vars['childItem']->value->getClass(),"nav-header") && !strstr($_smarty_tpl->tpl_vars['childItem']->value->getClass(),"nav-header-collapse")) {?>
                                            <?php $_smarty_tpl->_assignInScope('headerFirst', true);?>
                                        <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['childItem'] = $__foreach_childItem_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if (!$_smarty_tpl->tpl_vars['headerFirst']->value) {?><div class="dropdown-menu-parent">
                                        <div class="dropdown-menu-cols">
                                            <ul class="dropdown-menu-list"><?php }?>
                                                <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem', true);
$_smarty_tpl->tpl_vars['childItem']->iteration = 0;
$_smarty_tpl->tpl_vars['childItem']->index = -1;
$_smarty_tpl->tpl_vars['childItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->do_else = false;
$_smarty_tpl->tpl_vars['childItem']->iteration++;
$_smarty_tpl->tpl_vars['childItem']->index++;
$_smarty_tpl->tpl_vars['childItem']->last = $_smarty_tpl->tpl_vars['childItem']->iteration === $_smarty_tpl->tpl_vars['childItem']->total;
$__foreach_childItem_7_saved = $_smarty_tpl->tpl_vars['childItem'];
?>
                                                    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getName() == 'Client Details' && $_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                                        <li class="dropdown-menu-item dropdown-header dropdown-header--account">
                                                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_gravatar_image'] == 'displayed') {?>
                                                                <div class="client-avatar client-avatar-sm">
                                                                    <img class="lazyload hidden" data-src="https://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['loggedinuser']->value->email);
if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] != "default") {?>?d=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'];
}?>" alt="Avatar">
                                                                </div>
                                                            <?php }?>
                                                            <div class="dropdown-header-info">
                                                                <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                                                            </div>
                                                        </li>
                                                    <?php } else { ?>
                                                        <?php if ((!strstr($_smarty_tpl->tpl_vars['childItem']->value->getName(),"Divider") && !strstr($_smarty_tpl->tpl_vars['childItem']->value->getClass(),"nav-divider") && !strstr($_smarty_tpl->tpl_vars['childItem']->value->getName(),"Header") && !strstr($_smarty_tpl->tpl_vars['childItem']->value->getClass(),"nav-header")) || ($_smarty_tpl->tpl_vars['collapseOpened']->value && strstr($_smarty_tpl->tpl_vars['childItem']->value->getName(),"Divider"))) {?>
                                                            <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" class="dropdown-menu-item <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}?> <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getName() == $_smarty_tpl->tpl_vars['activePage']->value) {?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                                                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBodyHtml()) {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBodyHtml();?>

                                                                <?php } else { ?>
                                                                    <a
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"javascript:void") || strstr($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"tel:") || strstr($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"mailto:")) {?>
                                                                            href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"/",'');?>
"
                                                                        <?php } else { ?>
                                                                            href="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
"
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target');?>
"<?php }?>
                                                                    >
                                                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?>
                                                                            <i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>
                                                                        <?php } elseif ($_smarty_tpl->tpl_vars['childItem']->value->hasHeadingHtml()) {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getHeadingHtml();?>

                                                                        <?php }?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {
echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();
}?>
                                                                    </a>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasFooterHtml()) {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getFooterHtml();?>

                                                                <?php }?>
                                                            </li> 
                                                        <?php } elseif (strstr($_smarty_tpl->tpl_vars['childItem']->value->getName(),"Header-collapse") && strstr($_smarty_tpl->tpl_vars['childItem']->value->getClass(),"nav-header-collapse")) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['collapseOpened']->value) {?>
                                                                </ul></div></li>
                                                                <?php $_smarty_tpl->_assignInScope('collapseOpened', false);?>
                                                            <?php }?>
                                                                <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" class="<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}?> <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getName() == $_smarty_tpl->tpl_vars['activePage']->value) {?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                                                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBodyHtml()) {?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBodyHtml();?>

                                                                    <?php }?>
                                                                    <div class="collapse" id="items-collapse-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getName(),'Header-collapse-','');?>
">
                                                                        <ul class="dropdown-menu dropdown-menu-collapse show" >
                                                                        <?php $_smarty_tpl->_assignInScope('collapseOpened', true);?>
                                                        <?php } elseif (strstr($_smarty_tpl->tpl_vars['childItem']->value->getName(),"Header") && strstr($_smarty_tpl->tpl_vars['childItem']->value->getClass(),"nav-header")) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['i']->value != "1" && !$_smarty_tpl->tpl_vars['collapseOpened']->value && !strstr($_smarty_tpl->tpl_vars['childItem']->value->getClass(),"keep-column")) {?>
                                                                </ul></div></div>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['collapseOpened']->value || strstr($_smarty_tpl->tpl_vars['childItem']->value->getClass(),"keep-column")) {?>
                                                                <li class="nav-header">
                                                                    <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBodyHtml();?>

                                                                </li>
                                                            <?php } else { ?>
                                                            <div class="dropdown-menu-parent">
                                                                <div class="nav-header">
                                                                    <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBodyHtml();?>

                                                                </div>
                                                                <div class="dropdown-menu-cols">
                                                                    <ul class="dropdown-menu-list">
                                                            <?php }?>        
                                                        <?php } else { ?>
                                                            </ul><ul class="dropdown-menu-list">
                                                        <?php }?>
                                                    <?php }?>
                                                <?php
$_smarty_tpl->tpl_vars['childItem'] = $__foreach_childItem_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php if ($_smarty_tpl->tpl_vars['childItem']->last && $_smarty_tpl->tpl_vars['collapseOpened']->value) {?>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->hasFooterHtml()) {?>
                                    <div class="dropdown-menu-sidebar">
                                        <div class="dropdown-menu-sidebar-content">
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->getFooterHtml();?>

                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('collapseOpened', false);?>
                        <ul class="dropdown-menu dropdown-lazy <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] == "left-nav-wide" && $_smarty_tpl->tpl_vars['navtype']->value == "primary") {
} else { ?>has-scroll<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Account" && $_smarty_tpl->tpl_vars['loggedin']->value) {?>dropdown-menu-right<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('notificationDropdown')) {?>client-alerts<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['type'] == "navbar-left" && $_smarty_tpl->tpl_vars['navtype']->value == "primary") {?>
                                <li class="dropdown-header"><?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>
</li>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem', true);
$_smarty_tpl->tpl_vars['childItem']->iteration = 0;
$_smarty_tpl->tpl_vars['childItem']->index = -1;
$_smarty_tpl->tpl_vars['childItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->do_else = false;
$_smarty_tpl->tpl_vars['childItem']->iteration++;
$_smarty_tpl->tpl_vars['childItem']->index++;
$_smarty_tpl->tpl_vars['childItem']->last = $_smarty_tpl->tpl_vars['childItem']->iteration === $_smarty_tpl->tpl_vars['childItem']->total;
$__foreach_childItem_8_saved = $_smarty_tpl->tpl_vars['childItem'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getName() == 'Client Details' && $_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                    <li class="dropdown-header dropdown-header--account">
                                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_gravatar_image'] == 'displayed') {?>
                                            <div class="client-avatar client-avatar-sm">
                                                <img class="lazyload hidden" data-src="https://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['loggedinuser']->value->email);
if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] != "default") {?>?d=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'];
}?>" alt="Avatar">
                                            </div>
                                        <?php }?>
                                        <div class="dropdown-header-info">
                                            <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                                        </div>
                                    </li>
                                <?php } else { ?>
                                    <?php if (strstr($_smarty_tpl->tpl_vars['childItem']->value->getName(),"Header-collapse") && strstr($_smarty_tpl->tpl_vars['childItem']->value->getClass(),"nav-header-collapse")) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['collapseOpened']->value) {?>
                                                </ul>
                                             </li>
                                            <?php $_smarty_tpl->_assignInScope('collapseOpened', false);?>
                                        <?php }?>
                                        <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" class="<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}?> <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getName() == $_smarty_tpl->tpl_vars['activePage']->value) {?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBodyHtml()) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBodyHtml();?>

                                            <?php }?>
                                            <div class="collapse" id="items-collapse-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getName(),'Header-collapse-','');?>
">
                                                <ul class="dropdown-menu dropdown-menu-collapse show" >
                                                <?php $_smarty_tpl->_assignInScope('collapseOpened', true);?>
                                    <?php } else { ?>
                                        <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" class="<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}?> <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getName() == $_smarty_tpl->tpl_vars['activePage']->value) {?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBodyHtml()) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBodyHtml();?>

                                            <?php } else { ?>
                                                <a
                                                    <?php if (strstr($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"javascript:void") || strstr($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"tel:") || strstr($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"mailto:")) {?>
                                                        href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"/",'');?>
"
                                                    <?php } else { ?>
                                                        href="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
"
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target');?>
"<?php }?>
                                                >
                                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?>
                                                        <i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['childItem']->value->hasHeadingHtml()) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getHeadingHtml();?>

                                                    <?php }?>
                                                    <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {
echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();
}?>
                                                </a>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasFooterHtml()) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getFooterHtml();?>

                                            <?php }?>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->last && $_smarty_tpl->tpl_vars['collapseOpened']->value) {?>
                                                </ul>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>    
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['childItem'] = $__foreach_childItem_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>
                <?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
}
}
