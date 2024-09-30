<?php
/* Smarty version 3.1.48, created on 2024-09-28 19:35:55
  from '/var/www/html/templates/lagom2/core/cms/sections/config/key-features/key-features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f85a9b7f0002_05654851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a2077ce8e136fbdee7812bea27d5bce5818035' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/key-features/key-features.tpl',
      1 => 1720186760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f85a9b7f0002_05654851 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="site-section section-sides section-key-features section-graphic section-graphic-title-above section-graphic-<?php echo $_smarty_tpl->tpl_vars['features_graphic_type']->value;?>
 section-graphic-<?php echo $_smarty_tpl->tpl_vars['features_graphic_position']->value;?>
 section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?> lagom-animation lagom-animation-fadeinbottom">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
            <div class="container container-title <?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['graphic']['type'] == "illustration") {?> container-type-1<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['caption']->value) {?>
                <span class="section-caption"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES);?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
                <h2 class="section-title"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
</h2>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?>
                <div class="section-subtitle"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['features_list_type']->value == "tabs") {?>
                <div class="tabs content-slider" data-cms-content-slider>
                    <ul class="nav nav-tabs nav-tabs-slider content-slider-wrapper m-b-0x" data-content-slider-wrapper>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['key_features']->value['groups'], 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->index = -1;
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
$_smarty_tpl->tpl_vars['feature']->index++;
$_smarty_tpl->tpl_vars['feature']->first = !$_smarty_tpl->tpl_vars['feature']->index;
$__foreach_feature_0_saved = $_smarty_tpl->tpl_vars['feature'];
?>
                            <li class="nav-item content-slider-item">
                                <a class="nav-link multitab-link <?php if ($_smarty_tpl->tpl_vars['feature']->first) {?> active<?php }?>"
                                id="key-feature-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                onclick="changeMultitab(this, 'graphic-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
', 'feature-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
');"
                            >                        
                                    <?php echo $_smarty_tpl->tpl_vars['feature']->value['group_name'];?>

                                </a>
                            </li>
                        <?php
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php }?>
        </div>
        
    <div class="container container-default">
        <?php if ($_smarty_tpl->tpl_vars['features_list_type']->value == "default") {?>
            <div class="section-content">
                <div class="nav list-group-cms list-group-cms-key-features list-group-cms-<?php echo $_smarty_tpl->tpl_vars['features_list_style']->value;?>
"
                    role="tablist"
                >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['key_features']->value['groups'], 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->index = -1;
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
$_smarty_tpl->tpl_vars['feature']->index++;
$_smarty_tpl->tpl_vars['feature']->first = !$_smarty_tpl->tpl_vars['feature']->index;
$__foreach_feature_1_saved = $_smarty_tpl->tpl_vars['feature'];
?>
                        <div class="list-group-cms-item <?php if ($_smarty_tpl->tpl_vars['feature']->first) {?> active<?php }?>"
                            id="tab-feature-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                            data-toggle="tab" 
                            href="#graphic-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
                            role="tab" 
                            aria-controls="graphic-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
                            aria-selected="<?php if ($_smarty_tpl->tpl_vars['feature']->first) {?> true<?php } else { ?> false<?php }?>"
                        >
                            <div class="list-group-cms-item-top <?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['list_desc'] != '' && $_smarty_tpl->tpl_vars['feature']->value['fields']['list_desc'] != " ..." && $_smarty_tpl->tpl_vars['feature']->value['fields']['list_desc'] != " " && $_smarty_tpl->tpl_vars['features_list_type']->value != "default") {?>m-b-0<?php }?>">
                                <div class="list-group-cms-item-heading">
                                    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['group_name'], ENT_QUOTES);?>

                                </div>
                                <div class="list-group-cms-item-accordion-icon accordion">
                                                                    </div>
                            </div>
                            <div class="list-group-cms-item-body" <?php if ($_smarty_tpl->tpl_vars['type']->value == "Collapse") {?>data-slide-desc<?php }?>>                                       
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['list_desc']) {?>
                                    <div class="list-group-cms-item-text">
                                        <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['fields']['list_desc'], ENT_QUOTES);?>

                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['list_buttons']) {?>
                                    <div class="list-group-cms-item-actions m-t-1x">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['fields']['list_buttons'], 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('keyFeaturesButton'=>"true"), 0, true);
?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?> 
                    <div class="section-actions">
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
                    </div>
                <?php }?>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['features_list_type']->value == "accordion") {?>
            <div class="section-content" id="accordion-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
">
                <ul class="nav nav-tabs content-slider-wrapper hidden">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['key_features']->value['groups'], 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->index = -1;
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
$_smarty_tpl->tpl_vars['feature']->index++;
$_smarty_tpl->tpl_vars['feature']->first = !$_smarty_tpl->tpl_vars['feature']->index;
$__foreach_feature_4_saved = $_smarty_tpl->tpl_vars['feature'];
?>
                        <li class="nav-item content-slider-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['feature']->first) {?> active<?php }?>"
                                id="link-feature-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                data-toggle="tab" 
                                href="#graphic-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
                                role="tab" 
                                aria-controls="graphic-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
                                aria-selected="<?php if ($_smarty_tpl->tpl_vars['feature']->first) {?> true<?php } else { ?> false<?php }?>"
                            >                        
                                <?php echo $_smarty_tpl->tpl_vars['feature']->value['group_name'];?>

                            </a>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <div class="nav list-group-cms list-group-cms-accordion list-group-cms-key-features tab-content list-group-cms-<?php echo $_smarty_tpl->tpl_vars['features_list_style']->value;?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['key_features']->value['groups'], 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->index = -1;
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
$_smarty_tpl->tpl_vars['feature']->index++;
$_smarty_tpl->tpl_vars['feature']->first = !$_smarty_tpl->tpl_vars['feature']->index;
$__foreach_feature_5_saved = $_smarty_tpl->tpl_vars['feature'];
?>
                        <div class="list-group-cms-item tab-pane <?php if ($_smarty_tpl->tpl_vars['feature']->first) {?> active<?php }?>"
                        >
                            <div class="list-group-cms-item-top <?php if ($_smarty_tpl->tpl_vars['feature']->first) {?>collapse<?php } else { ?>collapsed<?php }?>" 
                                id="key-top-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                data-toggle="collapse" 
                                data-target="#key-collapse-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
                                aria-expanded="<?php if ($_smarty_tpl->tpl_vars['feature']->first) {?> true<?php } else { ?> false<?php }?>" 
                                aria-controls="key-collapse-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                data-graphic-type="section-graphic-<?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['graphic']['type'] == "media") {?>type-2<?php } else { ?>type-1<?php }?>"
                                onclick="$('#link-feature-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
').trigger('click');setActiveAccordion(this);"
                            >
                                <div class="list-group-cms-item-heading">
                                    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['group_name'], ENT_QUOTES);?>

                                </div>
                                <div class="list-group-cms-item-accordion-icon accordion">
                                    <div class="accordion-icon">
                                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/img/cms/accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-cms-item-body collapse <?php if ($_smarty_tpl->tpl_vars['feature']->first) {?>show<?php }?>"
                                id="key-collapse-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
                                aria-labelledby="key-top-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
                                data-parent="#accordion-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
"
                            >    
                                <div>
                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['list_desc']) {?>
                                        <div class="list-group-cms-item-text">
                                            <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['fields']['list_desc'], ENT_QUOTES);?>

                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['list_buttons']) {?>
                                        <div class="list-group-cms-item-actions">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['fields']['list_buttons'], 'button');
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
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?> 
                    <div class="section-actions">
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
                    </div>
                <?php }?>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['features_list_type']->value == "tabs") {?>
            <div class="section-content section-key-features-content">
                <div class="tab-content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['key_features']->value['groups'], 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->index = -1;
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
$_smarty_tpl->tpl_vars['feature']->index++;
$_smarty_tpl->tpl_vars['feature']->first = !$_smarty_tpl->tpl_vars['feature']->index;
$__foreach_feature_8_saved = $_smarty_tpl->tpl_vars['feature'];
?>
                        <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['feature']->first) {?> active<?php }?>"
                            id="feature-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                            role="tabpanel"
                            aria-labelledby="feature-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                            data-animation-css
                        >
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['list_desc']) {?>
                                <div class="section-desc">
                                    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['feature']->value['fields']['list_desc'], ENT_QUOTES);?>

                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['list_buttons']) {?>
                                <div class="section-actions">
                                    <div class="section-actions-buttons">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['fields']['list_buttons'], 'button');
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
                                </div>
                            <?php }?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?> 
                    <div class="section-actions">
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
                    </div>
                <?php }?>
            </div>
        <?php }?>
        <div class="section-background  <?php if ($_smarty_tpl->tpl_vars['features_graphic_type']->value == "type-2") {?>background-type-2<?php }
if ($_smarty_tpl->tpl_vars['features_list_type']->value == "tabs") {?> section-background-tabs<?php }?>">
            <div class="tab-content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['key_features']->value['groups'], 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->index = -1;
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
$_smarty_tpl->tpl_vars['feature']->index++;
$_smarty_tpl->tpl_vars['feature']->first = !$_smarty_tpl->tpl_vars['feature']->index;
$__foreach_feature_11_saved = $_smarty_tpl->tpl_vars['feature'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['fields']['graphic']['graphic']) {?>
                        <div class="section-graphic tab-pane <?php if ($_smarty_tpl->tpl_vars['feature']->first) {?> show active<?php } else { ?>is-animated<?php }?>"
                            id="graphic-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                            role="tabpanel"
                            aria-labelledby="feature-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                            data-animation-css
                        >
                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['feature']->value['fields']['graphic']['graphic'],'type'=>$_smarty_tpl->tpl_vars['feature']->value['fields']['graphic']['type'],'elementTitle'=>$_smarty_tpl->tpl_vars['feature']->value['group_name']), 0, true);
?>
                        </div>
                    <?php }?> 
                <?php
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="section-shape" id="section-shape-tab-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
">
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/svg-illustrations/cms/section-shape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
    </div>
    
        <?php echo '<script'; ?>
>
            function handleClick(event){
                event.stopPropagation();
            }
            function setActiveAccordion(element) {
                var parentElement = element.parentNode;

                parentElement.classList.add("active");

                var siblings = Array.from(parentElement.parentNode.children).filter(function(child) {
                    return child !== parentElement && child.classList.contains("list-group-cms-item");
                });
                siblings.forEach(function(sibling) {
                    sibling.classList.remove("active");
                });

            }
            function findAncestorWithClass(element, className) {
                while (element && !element.classList.contains(className)) {
                    element = element.parentNode;
                }
                return element;
            }
            function changeMultitab(element, tabOne, tabTwo){
                var parentElement = element.parentNode;
                var parentAncestor = parentElement.parentNode;
                var tabOneElement = document.querySelector('#' + tabOne);
                var tabTwoElement = document.querySelector('#' + tabTwo);

                var siblingsParent = Array.from(parentAncestor.children).filter(function(child) {
                    return child !== parentElement && child.classList.contains("content-slider-item");
                });
                var siblingsTabOne = Array.from(tabOneElement.parentNode.children).filter(function(child) {
                    return child !== tabOneElement && child.classList.contains("tab-pane");
                });
                var siblingsTabTwo = Array.from(tabTwoElement.parentNode.children).filter(function(child) {
                    return child !== tabTwoElement && child.classList.contains("tab-pane");
                });

                siblingsParent.forEach(function(sibling) {
                    sibling.children[0].classList.remove('active');
                });
                siblingsTabOne.forEach(function(sibling) {
                    sibling.classList.remove("active");
                });

                siblingsTabTwo.forEach(function(sibling) {
                    sibling.classList.remove("active");
                });

                tabOneElement.classList.add('show', 'active');
                tabTwoElement.classList.add('show', 'active');
                element.classList.add('active');

            }
        <?php echo '</script'; ?>
>
    
</div> 
<?php }
}
