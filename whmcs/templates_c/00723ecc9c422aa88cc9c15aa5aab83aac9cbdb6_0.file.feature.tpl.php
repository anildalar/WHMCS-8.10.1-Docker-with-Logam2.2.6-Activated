<?php
/* Smarty version 3.1.48, created on 2024-09-27 12:26:56
  from '/var/www/html/templates/lagom2/core/cms/sections/common/feature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f6a4905e3351_50750051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00723ecc9c422aa88cc9c15aa5aab83aac9cbdb6' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/feature.tpl',
      1 => 1714141152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f6a4905e3351_50750051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/feature.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/feature-cols.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cols']->value, 'col');
$_smarty_tpl->tpl_vars['col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['col']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['displaySlider']->value) {
if ($_smarty_tpl->tpl_vars['featureSliderType']->value == "screen-slider") {?> screen-slider-item<?php } else { ?> content-slider-item<?php }
}?>">
        <?php if (((($_smarty_tpl->tpl_vars['feature']->value['link_type'] == "custom-url" || $_smarty_tpl->tpl_vars['feature']->value['link_type'] == "homepage") && $_smarty_tpl->tpl_vars['feature']->value['custom_url'] != '') || ($_smarty_tpl->tpl_vars['feature']->value['link_type'] == "whmcs-page" && $_smarty_tpl->tpl_vars['feature']->value['whmcs_page'] != '')) && $_smarty_tpl->tpl_vars['feature']->value['show_link'] == "1") {?>
            <a href="<?php if ($_smarty_tpl->tpl_vars['feature']->value['link_type'] == "custom-url" || $_smarty_tpl->tpl_vars['feature']->value['link_type'] == "homepage") {
if ($_smarty_tpl->tpl_vars['feature']->value['link_type'] == "homepage" || substr($_smarty_tpl->tpl_vars['feature']->value['custom_url'],0,1) == "/") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
}
echo $_smarty_tpl->tpl_vars['feature']->value['custom_url'];
} elseif ($_smarty_tpl->tpl_vars['feature']->value['link_type'] == "whmcs-page") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
if (substr($_smarty_tpl->tpl_vars['feature']->value['url'],0,1) != "/") {?>/<?php }
echo $_smarty_tpl->tpl_vars['feature']->value['url'];
}?>" <?php if ($_smarty_tpl->tpl_vars['feature']->value['target_blank']) {?> target="_blank"<?php }?> data-feature-link
        <?php } else { ?>    
            <div
        <?php }?>
        class="feature <?php if ($_smarty_tpl->tpl_vars['featureSize']->value == "large") {?> feature-lg<?php } elseif ($_smarty_tpl->tpl_vars['featureSize']->value == "small") {?> feature-sm<?php }
if ($_smarty_tpl->tpl_vars['featureStyle']->value == 'boxed') {?> is-boxed<?php } elseif ($_smarty_tpl->tpl_vars['featureStyle']->value == 'bordered') {?> is-bordered<?php }
if ($_smarty_tpl->tpl_vars['featureIconPosition']->value == "left" || $_smarty_tpl->tpl_vars['featureIconPosition']->value == "right") {?> feature-horizontal<?php }?> feature-icon-<?php echo $_smarty_tpl->tpl_vars['featureIconPosition']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['feature']->value['custom_classes']) {?> <?php echo $_smarty_tpl->tpl_vars['feature']->value['custom_classes'];
}
if ($_smarty_tpl->tpl_vars['featureCustomClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['featureCustomClasses']->value;
}?> <?php if (!$_smarty_tpl->tpl_vars['feature']->value['description'] && $_smarty_tpl->tpl_vars['feature']->value['show_link'] == '0') {?>feature-title-only<?php }?>">
            <div class="feature-body">
                <?php if ($_smarty_tpl->tpl_vars['feature']->value['show_icon'] && ($_smarty_tpl->tpl_vars['feature']->value['icon'] || $_smarty_tpl->tpl_vars['feature']->value['media'] || $_smarty_tpl->tpl_vars['feature']->value['font-icon'])) {?>
                    <div class="feature-icon<?php if ($_smarty_tpl->tpl_vars['statNum']->value) {?> stat-icon<?php }?>"  data-animation-css>
                        <?php if ((isset($_smarty_tpl->tpl_vars['feature']->value['icon']))) {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['feature']->value['icon'],'type'=>"icon",'theme'=>$_smarty_tpl->tpl_vars['theme']->value), 0, true);
?>
                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['feature']->value['font-icon']))) {?>
                            <div class="font-icon <?php if ((isset($_smarty_tpl->tpl_vars['feature']->value['font-icon'])) && strstr($_smarty_tpl->tpl_vars['feature']->value['font-icon'],"fa-")) {?> font-icon-fa<?php }?>">
                                <i class="<?php echo $_smarty_tpl->tpl_vars['feature']->value['font-icon'];?>
"></i>
                            </div>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['feature']->value['media'],'type'=>"media",'elementTitle'=>$_smarty_tpl->tpl_vars['feature']->value['title']), 0, true);
?>
                        <?php }?>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['feature']->value['title'] || $_smarty_tpl->tpl_vars['feature']->value['description'] || $_smarty_tpl->tpl_vars['feature']->value['link_type'] || $_smarty_tpl->tpl_vars['feature']->value['stat']) {?>
                <div class="feature-content">
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['stat']) {?>
                            <p class="feature-stat" data-animation="" data-animation-options="type: featureValue; mobileAnimation: true; ">
                                <span data-animation-bar-value="<?php echo $_smarty_tpl->tpl_vars['feature']->value['stat'];?>
"><?php echo $_smarty_tpl->tpl_vars['feature']->value['stat'];?>
</span>
                            </p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['title']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['featureValue']->value) {?>  
                                <?php if (strstr($_smarty_tpl->tpl_vars['feature']->value['title'],".") || strstr($_smarty_tpl->tpl_vars['feature']->value['title'],",")) {?>
                                    <?php $_smarty_tpl->_assignInScope('valueRound', true);?>
                                <?php }?>
                                <h3 class="feature-title <?php if (strstr($_smarty_tpl->tpl_vars['feature']->value['title'],'feature-number')) {?>feature-title-flex<?php }?>" data-animation data-animation-options="type: featureValue; mobileAnimation: true; <?php if ($_smarty_tpl->tpl_vars['valueRound']->value) {?>valueRound: 100<?php }?>"><span data-animation-bar-value="<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['title'], ENT_QUOTES);?>
"><?php if (strstr($_smarty_tpl->tpl_vars['feature']->value['title'],'feature-number')) {
echo smarty_modifier_replace(htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['title'], ENT_QUOTES),'</span>','</span><span>');?>
</span><?php } else {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['title'], ENT_QUOTES);
}?></span></h3>
                            <?php } else { ?>
                                <h3 class="feature-title <?php if (strstr($_smarty_tpl->tpl_vars['feature']->value['title'],'feature-number')) {?>feature-title-flex<?php }?>"><?php if (strstr($_smarty_tpl->tpl_vars['feature']->value['title'],'feature-number')) {
echo smarty_modifier_replace(htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['title'], ENT_QUOTES),'</span>','</span><span>');?>
</span><?php } else {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['title'], ENT_QUOTES);
}?></h3>
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['description'] && $_smarty_tpl->tpl_vars['feature']->value['description'] !== ' ') {?>
                            <div class="feature-desc">
                                <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES);?>

                            </div>
                        <?php }?>
                        <?php if ((((($_smarty_tpl->tpl_vars['feature']->value['link_type'] == "custom-url" || $_smarty_tpl->tpl_vars['feature']->value['link_type'] == "homepage") && $_smarty_tpl->tpl_vars['feature']->value['custom_url'] != '') || ($_smarty_tpl->tpl_vars['feature']->value['link_type'] == "whmcs-page" && $_smarty_tpl->tpl_vars['feature']->value['whmcs_page'] != '')) && (isset($_smarty_tpl->tpl_vars['feature']->value['link_text'])) && $_smarty_tpl->tpl_vars['feature']->value['link_text'] != '') && $_smarty_tpl->tpl_vars['feature']->value['show_link'] == "1") {?>
                            <div class="btn btn-link <?php if ($_smarty_tpl->tpl_vars['featureSize']->value == "large") {?>btn-lg<?php }?> flex-row-reverse">
                                <div class="btn-icon">
                                    <i class="ls ls-arrow-right"></i> 
                                </div>
                                <div class="btn-text">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['frontHelper']->value))) {
echo $_smarty_tpl->tpl_vars['frontHelper']->value->langParse($_smarty_tpl->tpl_vars['feature']->value['link_text']);
} else {
echo $_smarty_tpl->tpl_vars['feature']->value['link_text'];
}?>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
            </div>
        <?php if (((($_smarty_tpl->tpl_vars['feature']->value['link_type'] == "custom-url" || $_smarty_tpl->tpl_vars['feature']->value['link_type'] == "homepage") && $_smarty_tpl->tpl_vars['feature']->value['custom_url'] != '') || ($_smarty_tpl->tpl_vars['feature']->value['link_type'] == "whmcs-page" && $_smarty_tpl->tpl_vars['feature']->value['whmcs_page'] != '')) && $_smarty_tpl->tpl_vars['feature']->value['show_link'] == "1") {?>
            </a>
        <?php } else { ?>    
            </div>
        <?php }?>
    </div>
<?php }?>    
<?php }
}
