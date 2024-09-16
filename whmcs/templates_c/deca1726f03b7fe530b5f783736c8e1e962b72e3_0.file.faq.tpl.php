<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:25:57
  from '/var/www/html/templates/lagom2/core/cms/sections/config/faq/faq.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e41335cab6f5_51025601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deca1726f03b7fe530b5f783736c8e1e962b72e3' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/faq/faq.tpl',
      1 => 1714141152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e41335cab6f5_51025601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="site-section section-faq section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>"
    id="<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['caption']->value) {?>
            <p class="section-caption"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES);?>
</p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            <h2 class="section-title"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
</h2>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?>
            <div class="section-subtitle"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>
</div>
        <?php }?>
        <div class="section-content m-w-lg m-a">
            <?php if ((isset($_smarty_tpl->tpl_vars['list_group']->value)) && is_array($_smarty_tpl->tpl_vars['list_group']->value) && count($_smarty_tpl->tpl_vars['list_group']->value) > 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['list_group']->value['grouped'] !== '0') {?>
                    <div class="faq-tabs  content-slider" data-cms-content-slider>
                        <ul class="nav nav-tabs nav-tabs-slider content-slider-wrapper" data-content-slider-wrapper>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_group']->value['groups'], 'group', false, 'key');
$_smarty_tpl->tpl_vars['group']->index = -1;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->index++;
$_smarty_tpl->tpl_vars['group']->first = !$_smarty_tpl->tpl_vars['group']->index;
$__foreach_group_17_saved = $_smarty_tpl->tpl_vars['group'];
?>
                                <li class="nav-item content-slider-item">
                                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['group']->first) {?>active<?php }?>"
                                        href="<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>#tab-faq-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>#tab-faq-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"&amp;","and"));
}?>" 
                                        data-toggle="tab"
                                        role="tab" 
                                        <?php if ($_smarty_tpl->tpl_vars['group']->first) {?>aria-selected="true" <?php } else { ?>aria-selected="false"<?php }?>
                                    >
                                        <?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>

                                    </a>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_17_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['list_group']->value)) && is_array($_smarty_tpl->tpl_vars['list_group']->value) && count($_smarty_tpl->tpl_vars['list_group']->value) > 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['list_group']->value['grouped'] == '1') {?>
                    <div class="faq-tab-content tab-content">
                <?php }?>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['list_group']->value['groups'])) && is_array($_smarty_tpl->tpl_vars['list_group']->value['groups']) && count($_smarty_tpl->tpl_vars['list_group']->value['groups']) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_group']->value['groups'], 'group', false, 'key');
$_smarty_tpl->tpl_vars['group']->index = -1;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->index++;
$_smarty_tpl->tpl_vars['group']->first = !$_smarty_tpl->tpl_vars['group']->index;
$__foreach_group_18_saved = $_smarty_tpl->tpl_vars['group'];
?>
                    <?php if (count($_smarty_tpl->tpl_vars['group']->value) > 1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['list_group']->value['grouped'] !== '0') {?>
                            <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['group']->first) {?>active<?php }?>"
                                id="<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>tab-faq-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>tab-faq-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"&amp;","and"));
}?>">
                        <?php }?>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['fields']['list'])) && is_array($_smarty_tpl->tpl_vars['group']->value['fields']['list']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['list']) > 0) {?>
                        <div class="panel-faq-group<?php if ($_smarty_tpl->tpl_vars['list_type']->value == "accordion") {?> accordion<?php }?>"
                            <?php if ($_smarty_tpl->tpl_vars['list_type']->value == "accordion") {?>id="accordion-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
" <?php }?>>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['fields']['list'], 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$_smarty_tpl->tpl_vars['item']->first = !$_smarty_tpl->tpl_vars['item']->index;
$__foreach_item_19_saved = $_smarty_tpl->tpl_vars['item'];
?>
                                <div class="faq-item <?php if (!$_smarty_tpl->tpl_vars['item']->first || $_smarty_tpl->tpl_vars['list_type']->value == "expanded") {?>collapsed<?php }?> <?php if ($_smarty_tpl->tpl_vars['list_style']->value == 'divided') {?> faq-item-divided<?php }
if ($_smarty_tpl->tpl_vars['list_type']->value == "expanded") {?> faq-item-expanded<?php }
if ($_smarty_tpl->tpl_vars['list_style']->value == 'boxed') {?> faq-item-boxed<?php }?>"
                                    id="faq-collapse-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['list_type']->value == 'accordion') {?>data-toggle="collapse" <?php }?>
                                    data-target="#faq-<?php if ((isset($_smarty_tpl->tpl_vars['sectionId']->value))) {
echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php }
if (is_array($_smarty_tpl->tpl_vars['group']->value) && (isset($_smarty_tpl->tpl_vars['group']->value['group_index']))) {
echo $_smarty_tpl->tpl_vars['group']->value['group_index'];
}?>-<?php if (is_array($_smarty_tpl->tpl_vars['item']->value) && (isset($_smarty_tpl->tpl_vars['item']->value['index']))) {
echo $_smarty_tpl->tpl_vars['item']->value['index'];
}?>"
                                    aria-expanded="true">
                                    <div class="faq-item-top panel-heading">
                                        <h3 class="h5"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
                                        <?php if ($_smarty_tpl->tpl_vars['list_type']->value == 'accordion') {?>
                                            <div class="accordion-icon">
                                                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/img/cms/accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div id="faq-<?php if ((isset($_smarty_tpl->tpl_vars['sectionId']->value))) {
echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php }
if (is_array($_smarty_tpl->tpl_vars['group']->value) && (isset($_smarty_tpl->tpl_vars['group']->value['group_index']))) {
echo $_smarty_tpl->tpl_vars['group']->value['group_index'];
}?>-<?php if (is_array($_smarty_tpl->tpl_vars['item']->value) && (isset($_smarty_tpl->tpl_vars['item']->value['index']))) {
echo $_smarty_tpl->tpl_vars['item']->value['index'];
}?>"
                                        class="panel-collapse <?php if ($_smarty_tpl->tpl_vars['list_type']->value == 'accordion') {?>collapse<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->first) {?>show<?php }?>"
                                        aria-expanded="true" style="" <?php if ($_smarty_tpl->tpl_vars['list_type']->value == 'accordion') {?>data-parent="#accordion-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_index'];?>
"
                                        <?php }?>>
                                        <div class="faq-item-bottom">
                                            <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES);?>

                                        </div>
                                    </div>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_19_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['list_group']->value) > 1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['list_group']->value['grouped'] == '1') {?>
                            </div>
                        <?php }?>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_18_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>
</div><?php }
}
