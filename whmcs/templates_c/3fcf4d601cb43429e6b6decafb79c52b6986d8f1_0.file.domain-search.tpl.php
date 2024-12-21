<?php
/* Smarty version 3.1.48, created on 2024-12-21 06:17:58
  from '/var/www/html/templates/lagom2/core/cms/sections/config/domain-search/domain-search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67665d96d525f6_00623052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fcf4d601cb43429e6b6decafb79c52b6986d8f1' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/domain-search/domain-search.tpl',
      1 => 1732281828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67665d96d525f6_00623052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('sideTypes', array('left','right'));
$_smarty_tpl->_assignInScope('centerTypes', array('top-center','bottom-center'));?>

<div class="site-section section-domains <?php if ($_smarty_tpl->tpl_vars['graphic_type']->value == "type-0") {?> section-center section-graphic-<?php echo $_smarty_tpl->tpl_vars['graphic_type']->value;
} else { ?>section-sides section-graphic  section-graphic-<?php echo $_smarty_tpl->tpl_vars['graphic_position']->value;?>
 section-graphic-<?php echo $_smarty_tpl->tpl_vars['graphic_type']->value;
}?> section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
    <div class="container container-default">
        <div class="section-content">
            <?php if ($_smarty_tpl->tpl_vars['caption']->value) {?>
                <span class="section-caption"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES);?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
                <h2 class="section-title"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
</h2>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?>
                <p class="section-subtitle"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['desc']->value) {?>
                <div class="section-desc"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES);?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['domain_type']->value) {?>
                <div class="section-domain-search">
                    <?php if ($_smarty_tpl->tpl_vars['domain_type']->value == "tabs") {?>
                        <ul class="banner-nav nav nav-tabs">
                            <li>
                                <a class="tab-nav-domain active" href="#tab-register" data-type="register" data-toggle="tab">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navdomainsearch'];?>

                                </a>
                            </li>
                            <li>
                                <a class="tab-nav-domain" href="#tab-transfer" data-type="transfer" data-toggle="tab">                                     
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaintransfer'];?>

                                </a>
                            </li>
                        </ul>
                        <div class="banner-tab-content tab-content">
                            <div id="tab-register" class="tab-pane active">  
                                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/domain-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"register"), 0, true);
?>
                            </div>
                            <div id="tab-transfer" class="tab-pane">  
                                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/domain-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"transfer"), 0, true);
?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/domain-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['domain_type']->value), 0, true);
?>
                    <?php }?>      
                    <?php if ($_smarty_tpl->tpl_vars['show_spotlight_tlds']->value && is_array($_smarty_tpl->tpl_vars['spotlights_tlds']->value)) {?>
                                                <div class="section-tlds tlds-register content-slider" data-cms-content-slider>
                            <div class="content-slider-wrapper" data-content-slider-wrapper>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spotlights_tlds']->value, 'spotlight');
$_smarty_tpl->tpl_vars['spotlight']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['spotlight']->value) {
$_smarty_tpl->tpl_vars['spotlight']->do_else = false;
?>
                                    <div class="tld content-slider-item">
                                        <div class="tld-suffix">
                                            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['spotlight']->value['ext'],".","<span>.</span>");?>

                                        </div>
                                        <div class="tld-price">
                                            <span class="price-transfer"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['spotlight']->value['price']['transfer'],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
</span>
                                            <span class="price-register"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['spotlight']->value['price']['register'],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
</span>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?> 
                <div class="section-actions">
                    <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?>
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
                    <?php }?>
                </div>
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && ($_smarty_tpl->tpl_vars['graphic_type']->value == "type-1" || $_smarty_tpl->tpl_vars['graphic_type']->value == "type-2")) {?>
            <div class="section-background <?php if ($_smarty_tpl->tpl_vars['graphic_type']->value == "type-2") {?>background-type-2<?php }?>" data-animation-css>
                <div class="section-graphic">
                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['graphic_type']->value == "type-1" && !$_smarty_tpl->tpl_vars['disable_background_shape']->value) {?>
                    <div class="section-shape">
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/svg-illustrations/cms/section-shape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['graphic_type']->value == "type-3" && ($_smarty_tpl->tpl_vars['graphic_position']->value == "left" || $_smarty_tpl->tpl_vars['graphic_position']->value == "right")) {?>
            <div class="section-background section-background-side" data-animation-css>
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
            </div>
        <?php }?>   
    </div>
    <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['graphic_type']->value == "type-3" && ($_smarty_tpl->tpl_vars['graphic_position']->value == "top-center" || $_smarty_tpl->tpl_vars['graphic_position']->value == "bottom-center")) {?>
        <?php if (strstr($_smarty_tpl->tpl_vars['graphic']->value['graphic'],".tpl")) {?>
            <div class="section-background section-background-side">
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
            </div>
        <?php } else { ?>
            <div class="section-background section-background-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['graphic']->value['graphic'];?>
');">
            </div>
        <?php }?>
    <?php }?>   
</div> <?php }
}
