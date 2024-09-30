<?php
/* Smarty version 3.1.48, created on 2024-09-29 15:12:00
  from '/var/www/html/templates/lagom2/core/cms/sections/config/banner-form/banner-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f96e4087d253_65109563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dae0bc00784e20fd79ff238f94a25cec7432a9c7' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/banner-form/banner-form.tpl',
      1 => 1694186636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f96e4087d253_65109563 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_assignInScope('sideTypes', array('type-1','type-2','type-3'));
$_smarty_tpl->_assignInScope('centerTypes', array('type-4','type-5','type-6'));?>
<div class="site-banner banner banner-cms banner-domain banner-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 banner-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 <?php if (in_array($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['sideTypes']->value)) {?> banner-sides<?php } else { ?> banner-center<?php }?> <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-1") {?> banner-predefined-graphic<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "type-2") {?> banner-custom-graphic <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "type-3" || $_smarty_tpl->tpl_vars['type']->value == "type-4") {?> banner-custom-graphic-bg <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "type-5") {?> banner-custom-graphic-overlap <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "type-6") {?> banner-no-graphic<?php }?> <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>" data-site-banner>
    <?php if (in_array($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['centerTypes']->value)) {?>
        <div class="banner-body">
    <?php }?>
    <div class="container">
        <div class="banner-content">
            <?php if ($_smarty_tpl->tpl_vars['caption']->value) {?>
                <span class="banner-caption"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES);?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
                <h1 class="banner-title"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
</h1>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?>
                <div class="banner-subtitle">
                    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['form_type']->value) {?>
                <div class="banner-search-domain">
                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/forms/".((string)$_smarty_tpl->tpl_vars['form_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customClass'=>"has-shadow"), 0, true);
?>        
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?>
                <div class="banner-actions">
                    <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?>
                        <div class="banner-actions-buttons">
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
                    <?php }?>
                </div>
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && ($_smarty_tpl->tpl_vars['type']->value == "type-1" || $_smarty_tpl->tpl_vars['type']->value == "type-2")) {?>
            <div class="banner-background <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-2") {?>graphic-centered<?php }?>"  data-animation-css>
                <div class="banner-graphic">
                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-1" && !$_smarty_tpl->tpl_vars['disable_background_shape']->value) {?>
                    <div class="banner-shape">
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>"site/banner-shape.tpl",'type'=>"illustration"), 0, true);
?>
                    </div>
                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['type']->value == "type-3") {?>
            <div class="banner-graphic-background banner-graphic-background-side"  data-animation-css>
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
            </div>
        <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['type']->value == "type-5") {?>
            <div class="banner-graphic-background" data-animation-css>
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['type']->value == "type-4") {?>
            <?php if (strstr($_smarty_tpl->tpl_vars['graphic']->value['graphic'],".tpl")) {?>
                <div class="banner-graphic-background banner-graphic-background-image">
                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
                </div>
            <?php } else { ?>
                <div class="banner-graphic-background banner-graphic-background-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['graphic']->value['graphic'];?>
');">
                </div>
            <?php }?>
        <?php }?>
    <?php if (in_array($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['centerTypes']->value)) {?>
        </div>
    <?php }?>
</div><?php }
}
