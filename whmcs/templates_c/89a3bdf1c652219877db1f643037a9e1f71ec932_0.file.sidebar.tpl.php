<?php
/* Smarty version 3.1.48, created on 2025-01-03 16:53:42
  from '/var/www/html/templates/lagom2/includes/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67781616d7ec68_53489601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89a3bdf1c652219877db1f643037a9e1f71ec932' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/sidebar.tpl',
      1 => 1725473022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67781616d7ec68_53489601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/sidebar.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" class="panel panel-sidebar<?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Client Details" && $_smarty_tpl->tpl_vars['sidebarAccountBoxStyle']->value) {?> panel-sidebar-<?php echo $_smarty_tpl->tpl_vars['sidebarAccountBoxStyle']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['item']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['item']->value->getExtra('mobileSelect') && $_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?> hidden-sm hidden-xs<?php }?>"<?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribute('id');?>
"<?php }?>>
            <div class="panel-heading">
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_gravatar_image'] == 'displayed' && $_smarty_tpl->tpl_vars['item']->value->getName() == "Client Details") {?>
                <?php } else { ?>
                    <h5 class="panel-title">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getBadge();?>
</span><?php }?>
                        <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                    </h5>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBodyHtml()) {?>
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_gravatar_image'] == 'displayed' && $_smarty_tpl->tpl_vars['item']->value->getName() == "Client Details") {?>
                        <div class="client-avatar">
                            <img src="https://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['clientsdetails']->value['email']);
if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] != "default") {?>?d=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'];
}?>" alt="Avatar">
                        </div>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getBodyHtml();?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
                <div class="list-group<?php if ($_smarty_tpl->tpl_vars['item']->value->getChildrenAttribute('class')) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getChildrenAttribute('class');
}?>">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem');
$_smarty_tpl->tpl_vars['childItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getUri()) {?>
                            <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" 
                                href="<?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Domain Details Management" || $_smarty_tpl->tpl_vars['item']->value->getName() == "Service Details Overview") {
if (strstr($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"action") || (strstr($_smarty_tpl->tpl_vars['childItem']->value->getUri(),"https://"))) {
echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();
} else {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getUri(),$_smarty_tpl->tpl_vars['WEB_ROOT']->value,''),"/",'');
}
} else {
echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();
}?>" 
                                class="list-group-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['childItem']->value->isCurrent()) {?> active<?php }?>"
                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }?>
                                <?php $_smarty_tpl->_assignInScope('customActionData', $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('dataCustomAction'));?>
                                <?php if (is_array($_smarty_tpl->tpl_vars['customActionData']->value)) {?>
                                   data-active="<?php echo $_smarty_tpl->tpl_vars['customActionData']->value['active'];?>
"
                                   data-identifier="<?php echo $_smarty_tpl->tpl_vars['customActionData']->value['identifier'];?>
"
                                   data-serviceid="<?php echo $_smarty_tpl->tpl_vars['customActionData']->value['serviceid'];?>
"
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target');?>
"<?php }?> 
                                id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
"
                            >
                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBodyHtml()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBodyHtml();?>

                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Announcements Months") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getName() != "Older" && $_smarty_tpl->tpl_vars['childItem']->value->getName() != "RSS Feed") {?>
                                        <i class="ls ls-calendar"></i>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?>
                                            <i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>
                                        <?php }?>
                                    <?php }?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Attachments") {?>
                                       <i class="ls ls-download"></i>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?>
                                        <i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>
                                    <?php }?>
                                <?php }?>
                                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),'style="color','class="status" style="--status-color'),'loading hidden w-hidden','loading w-hidden'),'<i class="fas fa-spinner fa-spin"></i>','    <div class="spinner spinner-sm"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div></div>');?>

                                <?php if (is_array($_smarty_tpl->tpl_vars['customActionData']->value)) {?><span class="loading w-hidden" style="display: none;"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?> </span><?php }?>
                            <?php }?>
                            </a>
                        <?php } else { ?>
                            <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBodyHtml()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBodyHtml();?>

                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>&nbsp;<?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Ticket Information" && $_smarty_tpl->tpl_vars['childItem']->value->getName() != "Subject") {?>
                                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),'<br />','<span class="pull-right">');?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['childItem']->value->getName() == "Subject") {?>
                                    <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),'class="label"',''),'style="background-color','class="status" style="--status-color');?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                                <?php }?>
                            <?php }?>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasFooterHtml()) {?>
                <div class="panel-footer clearfix">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getFooterHtml();?>

                    <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Client Details") {?>
                       <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php" class="btn btn-outline btn-sm btn-block">
                           <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavlogout'];?>

                       </a>
                    <?php }?>

                </div>
            <?php }?>
        </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
