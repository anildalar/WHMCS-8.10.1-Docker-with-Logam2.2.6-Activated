<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:07:17
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/components/icon-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40ed5632c58_10910290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a604e726297e103b1abcc8fa2e5d56b39cae98d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/components/icon-tabs.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40ed5632c58_10910290 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav--h nav--tabs m-b-2x">
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
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-predefined-icons" data-media-predefined data-media-load>
            <span>SVG Icons</span>
        </a>
    </li>
    <li class="nav__item " data-icon-tabs-illustration>
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-predefined-illustration" data-media-illustrations data-media-load>
            <span>SVG Illustrations</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-media-library" data-media-upload data-media-load>
            <span>Library</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-media-upload" data-media-custom-graphic>
            <span>Upload</span>
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
    <div class="tab-pane tab-pane--predefined-icons" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-predefined-icons" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list data-media-insert="icons">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--predefined-illustrations" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-predefined-illustration" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list data-media-insert="illustrations">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--media" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-media-library" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list data-media-manager data-media-insert="media">
            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
            </div>
        </div>
    </div>
  
    <div class="tab-pane tab-pane--media-custom" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-media-upload">
        <div class="media media--custom" data-media-custom>
            <div class="media__wrapper" data-media-custom-btn>
                <i class="media__icon ls ls-upload"></i>
                <strong class="media__title p-md">Click to Upload</strong>
                <span class="media__desc p-xs">Allowed extensions .PNG, .JPG, .SVG, .GIF. Max size <?php echo $_smarty_tpl->tpl_vars['max_upload_size']->value['max_size_formated'];?>
.</span>
            </div>
            <input type="file" multiple name="customIcon" data-media-custom-input accept="image/*" data-max-file-size=<?php echo $_smarty_tpl->tpl_vars['max_upload_size']->value['max_size_bytes'];?>
 data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@seoImage',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"/>            
            <div class="media__list row w-100 is-hidden" data-media-image-container>
                <div class="media__item media__item--lg col-md-12">
                    <div class="media__item-content">
                        <div class="media__item-icon" data-media-icon>
                            <img class="media__image" data-media-image data-graphic src="" alt=""/>
                        </div>
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                        <div class="media__item-footer">
                            <span class="media__item-filename" data-media-image-filename></span>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
