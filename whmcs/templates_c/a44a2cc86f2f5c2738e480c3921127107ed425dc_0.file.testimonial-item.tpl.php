<?php
/* Smarty version 3.1.48, created on 2024-09-23 04:53:13
  from '/var/www/html/templates/lagom2/core/cms/sections/config/testimonials/testimonial-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f0f4393f9410_61930392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a44a2cc86f2f5c2738e480c3921127107ed425dc' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/testimonials/testimonial-item.tpl',
      1 => 1714141152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f0f4393f9410_61930392 (Smarty_Internal_Template $_smarty_tpl) {
?><div
    class="testimonials-item<?php if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?> testimonials-single<?php }
if ($_smarty_tpl->tpl_vars['style']->value == "boxed") {?> is-boxed<?php } elseif ($_smarty_tpl->tpl_vars['style']->value == "bordered") {?> is-bordered<?php } elseif ($_smarty_tpl->tpl_vars['style']->value == "default") {?> testimonials-item-default<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?>
        <div class="testimonials-body">
        <?php }?>
    <div class="testimonials-title <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-2" || $_smarty_tpl->tpl_vars['type']->value == "type-1" || $_smarty_tpl->tpl_vars['type']->value == "type-4") {?>d-flex <?php }
if ($_smarty_tpl->tpl_vars['testimonial']->value['date'] != '') {?>avatar-title<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['testimonial']->value['title']) {?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?><h4><?php } else { ?><p><?php }
echo $_smarty_tpl->tpl_vars['testimonial']->value['title'];
if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?></h4><?php } else { ?></p><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?><span class="date"><?php echo $_smarty_tpl->tpl_vars['testimonial']->value['date'];?>
</span><?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-2" || $_smarty_tpl->tpl_vars['type']->value == "type-1" || $_smarty_tpl->tpl_vars['type']->value == "type-4") {?>
                <span class="date"><?php echo $_smarty_tpl->tpl_vars['testimonial']->value['date'];?>
</span>
            <?php }?>
        </div>
        <div class="testimonials-desc">
            <?php echo $_smarty_tpl->tpl_vars['testimonial']->value['description'];?>

        </div>
        <div class="testimonials-details">
            <?php if ($_smarty_tpl->tpl_vars['type']->value != "type-3") {?>
                <div class="testimonials-avatar">
                    <?php if ((isset($_smarty_tpl->tpl_vars['testimonial']->value['media']))) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['testimonial']->value['media'],'type'=>"media",'elementTitle'=>$_smarty_tpl->tpl_vars['testimonial']->value['title']), 0, true);
?>
                    <?php }?>
                    <span>”</span>
                </div>
            <?php }?>
            <div class="testimonials-author">
        <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?><h5><?php } else { ?><span><?php }
echo $_smarty_tpl->tpl_vars['testimonial']->value['author'];
if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?></h5><?php } else { ?></span><?php }
if ($_smarty_tpl->tpl_vars['type']->value != "type-3") {?><br><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['testimonial']->value['domain_url']) {?>
                <a target="blank" href=<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['domain_url'];?>
><?php echo $_smarty_tpl->tpl_vars['testimonial']->value['domain'];?>
</a>
            <?php } else { ?>
                <p><?php echo $_smarty_tpl->tpl_vars['testimonial']->value['domain'];?>
</p>
            <?php }?>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?>
        </div>
    <?php }?>
</div><?php }
}
