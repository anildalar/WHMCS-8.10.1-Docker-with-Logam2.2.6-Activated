<?php
/* Smarty version 3.1.48, created on 2024-09-10 03:22:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/icon-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dfbb6ba86795_42550464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ff0f858438db844c67895ccbe84ce1dcdff4f16' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/icon-tabs.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dfbb6ba86795_42550464 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav--h nav--tabs" data-icon-sets>
    <li class="nav__item is-active">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-lagom-small" data-media-load>
            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['modal']['icon']['ls'];?>
</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-lagom-medium" data-media-load>
            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['modal']['icon']['lm'];?>
</span>
        </a>
    </li>
    <li class="nav__item ">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-font-awesome" data-media-load>
            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['modal']['icon']['fa'];?>
</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane is-active" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-lagom-small" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
           <div class="media__list has-scroll" data-media-list data-media-insert="lagomsmall">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
                </div>
        </div>
    </div>
    <div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-lagom-medium" data-media-container> 
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list data-media-insert="lagommedium">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
                </div>
        </div>
    </div>
    <div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-font-awesome" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list data-media-insert="fontawesome">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
                </div>
        </div>
    </div>
</div><?php }
}
