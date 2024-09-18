<?php
/* Smarty version 3.1.48, created on 2024-09-18 03:59:44
  from '/var/www/html/templates/lagom2/core/cms/sections/common/button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea5030a9b4b1_17139570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32eb697251588334ccd28f00fee517b581da23b6' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/button.tpl',
      1 => 1714141152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea5030a9b4b1_17139570 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/button.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif (!is_string($_smarty_tpl->tpl_vars['button']->value) && (isset($_smarty_tpl->tpl_vars['button']->value['link_type']))) {?>
    <?php if ($_smarty_tpl->tpl_vars['button']->value['link_type'] == 'whmcs-page') {?>
        <?php $_smarty_tpl->_assignInScope('url', $_smarty_tpl->tpl_vars['button']->value['url']);?>
        <?php if (substr($_smarty_tpl->tpl_vars['url']->value,0,1) != "/" && strstr($_smarty_tpl->tpl_vars['url']->value,"http") === false) {?>
            <?php $_smarty_tpl->_assignInScope('url', "/".((string)$_smarty_tpl->tpl_vars['url']->value));?>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('url', $_smarty_tpl->tpl_vars['button']->value['custom_url']);?>
        <?php if (substr($_smarty_tpl->tpl_vars['url']->value,0,1) == "#") {?>
            <?php $_smarty_tpl->_assignInScope('smoothScroll', true);?>
        <?php }?>
      
    <?php }?>

    <a
        <?php if ($_smarty_tpl->tpl_vars['button']->value['link_type'] == "whmcs-product") {?>
            href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&pid=<?php echo $_smarty_tpl->tpl_vars['button']->value['whmcs_product'];
if ((isset($_smarty_tpl->tpl_vars['button']->value['product_pricing']['bestCycle']))) {?>&billingcycle=<?php echo $_smarty_tpl->tpl_vars['button']->value['product_pricing']['bestCycle'];
}?>"
        <?php } elseif ($_smarty_tpl->tpl_vars['url']->value) {?>href="<?php if ($_smarty_tpl->tpl_vars['button']->value['link_type'] == "homepage" || substr($_smarty_tpl->tpl_vars['url']->value,0,1) == "/") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
}
echo $_smarty_tpl->tpl_vars['url']->value;?>
"<?php }?> <?php if (strstr($_smarty_tpl->tpl_vars['button']->value['custom_classes'],'has-loader')) {?>data-btn-loader<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['smoothScroll']->value) {?>
            data-scroll-to
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['keyFeaturesButton']->value) {?>
            onclick="handleClick(event)"
        <?php }?>
        class="btn<?php if ($_smarty_tpl->tpl_vars['button']->value['style'] !== 'link') {?> btn-<?php echo $_smarty_tpl->tpl_vars['button']->value['type'];
}
if ($_smarty_tpl->tpl_vars['button']->value['style'] !== 'solid') {?> btn-<?php echo $_smarty_tpl->tpl_vars['button']->value['style'];
}
if ($_smarty_tpl->tpl_vars['button']->value['size'] !== 'default') {
if ($_smarty_tpl->tpl_vars['button']->value['size'] == 'extra-large') {?> btn-xlg<?php }
if ($_smarty_tpl->tpl_vars['button']->value['size'] == 'large') {?> btn-lg<?php }
if ($_smarty_tpl->tpl_vars['button']->value['size'] == 'small') {?> btn-sm<?php }
if ($_smarty_tpl->tpl_vars['button']->value['size'] == 'extra-small') {?> btn-xs<?php }
}?> <?php echo $_smarty_tpl->tpl_vars['button']->value['custom_classes'];?>
" <?php if ($_smarty_tpl->tpl_vars['button']->value['target_blank']) {?> target="_blank"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['button']->value['show_icon'] && $_smarty_tpl->tpl_vars['button']->value['font-icon'] && $_smarty_tpl->tpl_vars['button']->value['font-icon'] != "undefined") {?>
            <div class="btn-icon">
                <i class="<?php echo $_smarty_tpl->tpl_vars['button']->value['font-icon'];?>
"></i>
            </div>
        <?php }?>
        <span class="btn-text">
            <?php if ((isset($_smarty_tpl->tpl_vars['frontHelper']->value))) {
echo $_smarty_tpl->tpl_vars['frontHelper']->value->langParse($_smarty_tpl->tpl_vars['button']->value['text']);
} else {
echo $_smarty_tpl->tpl_vars['button']->value['text'];
}?>
        </span>
        <?php if (strstr($_smarty_tpl->tpl_vars['button']->value['custom_classes'],'has-loader')) {?>
            <div class="loader loader-button hidden" >
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>
            </div>
        <?php }?>
    </a>
<?php }
}
}
