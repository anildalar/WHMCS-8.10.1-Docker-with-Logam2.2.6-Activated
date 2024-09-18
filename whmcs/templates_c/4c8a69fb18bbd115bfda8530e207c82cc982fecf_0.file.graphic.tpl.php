<?php
/* Smarty version 3.1.48, created on 2024-09-18 03:59:44
  from '/var/www/html/templates/lagom2/core/cms/sections/common/graphic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea5030ab1ef4_87484176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c8a69fb18bbd115bfda8530e207c82cc982fecf' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/graphic.tpl',
      1 => 1720186756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea5030ab1ef4_87484176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/graphic.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'illustration') {?>
        <?php if ($_smarty_tpl->tpl_vars['iconType']->value != "modern" && strstr($_smarty_tpl->tpl_vars['graphic']->value,"/modern/")) {?>
            <?php $_smarty_tpl->_assignInScope('graphic', smarty_modifier_replace($_smarty_tpl->tpl_vars['graphic']->value,'modern/',''));?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['graphic']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'media') {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['activeScheme']->value)) && $_smarty_tpl->tpl_vars['activeScheme']->value != 'default') {?>
            <?php $_smarty_tpl->_assignInScope('schemePath', '/');?>
            <?php $_smarty_tpl->_assignInScope('graphicTemp', explode('.',$_smarty_tpl->tpl_vars['graphic']->value));?>
            <?php if (is_array($_smarty_tpl->tpl_vars['graphicTemp']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('graphicExt', ".".((string)(end($_smarty_tpl->tpl_vars['graphicTemp']->value))));?>
                <?php $_smarty_tpl->_assignInScope('graphicName', smarty_modifier_replace($_smarty_tpl->tpl_vars['graphic']->value,$_smarty_tpl->tpl_vars['graphicExt']->value,''));?>
                <?php $_smarty_tpl->_assignInScope('currentDirTemp', explode('/core/',dirname($_smarty_tpl->source->filepath)));?>
                <?php $_smarty_tpl->_assignInScope('graphicDir', ((string)$_smarty_tpl->tpl_vars['currentDirTemp']->value[0])."/assets/img/page-manager/lagom-color-schemes/".((string)$_smarty_tpl->tpl_vars['graphicName']->value)."-".((string)$_smarty_tpl->tpl_vars['activeScheme']->value).((string)$_smarty_tpl->tpl_vars['graphicExt']->value));?>
                <?php if (file_exists($_smarty_tpl->tpl_vars['graphicDir']->value)) {?>
                    <?php $_smarty_tpl->_assignInScope('graphic', "lagom-color-schemes/".((string)$_smarty_tpl->tpl_vars['graphicName']->value)."-".((string)$_smarty_tpl->tpl_vars['activeScheme']->value).((string)$_smarty_tpl->tpl_vars['graphicExt']->value));?>
                <?php }?>
            <?php }?>
        <?php }?>    
        <img 
            class="lazyload" data-src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['graphic']->value;?>
" 
            alt="<?php if ($_smarty_tpl->tpl_vars['title']->value || $_smarty_tpl->tpl_vars['caption']->value || $_smarty_tpl->tpl_vars['elementTitle']->value) {
if ((isset($_smarty_tpl->tpl_vars['pageSeoTitle']->value))) {
echo preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['pageSeoTitle']->value, ENT_QUOTES));?>
 - <?php }
if ($_smarty_tpl->tpl_vars['elementTitle']->value && $_smarty_tpl->tpl_vars['elementTitle']->value != '') {
echo preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['elementTitle']->value, ENT_QUOTES));
} else {
if ($_smarty_tpl->tpl_vars['title']->value) {
echo preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES));
} elseif ($_smarty_tpl->tpl_vars['caption']->value) {
echo preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES));
}
}
}?>">
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'icon') {?>
        <?php if ($_smarty_tpl->tpl_vars['theme']->value == "primary" || $_smarty_tpl->tpl_vars['theme']->value == "secondary") {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['graphic']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('onDark'=>true), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['graphic']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    <?php }
}
}
}
