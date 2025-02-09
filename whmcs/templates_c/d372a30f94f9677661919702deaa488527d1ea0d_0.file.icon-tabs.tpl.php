<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:24:26
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/icon-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b19a092535_37736248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd372a30f94f9677661919702deaa488527d1ea0d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/icon-tabs.tpl',
      1 => 1734764845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6784b19a092535_37736248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('visibleFontIcons', false);
$_smarty_tpl->_assignInScope('visiblePredefinedIcons', false);
$_smarty_tpl->_assignInScope('visiblePredefinedIllustrations', false);?>

<?php $_smarty_tpl->_assignInScope('activeFontIcons', false);
$_smarty_tpl->_assignInScope('activePredefinedIcons', false);
$_smarty_tpl->_assignInScope('activePredefinedIllustrations', false);
$_smarty_tpl->_assignInScope('activeMediaLibrary', false);?>



<?php if ($_smarty_tpl->tpl_vars['type']->value == "item-add" || $_smarty_tpl->tpl_vars['type']->value == "item-edit" || $_smarty_tpl->tpl_vars['type']->value == "product-add" || $_smarty_tpl->tpl_vars['type']->value == "product-edit" || $_smarty_tpl->tpl_vars['type']->value == "group-add" || $_smarty_tpl->tpl_vars['type']->value == "group-edit" || $_smarty_tpl->tpl_vars['type']->value == "category-add" || $_smarty_tpl->tpl_vars['type']->value == "category-edit" || $_smarty_tpl->tpl_vars['type']->value == "graphic-icon-add" || $_smarty_tpl->tpl_vars['type']->value == "graphic-icon-edit") {?>
    <?php $_smarty_tpl->_assignInScope('visibleFontIcons', true);?>
    <?php $_smarty_tpl->_assignInScope('activeFontIcons', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == "item-add" || $_smarty_tpl->tpl_vars['type']->value == "item-edit" || $_smarty_tpl->tpl_vars['type']->value == "product-add" || $_smarty_tpl->tpl_vars['type']->value == "product-edit" || $_smarty_tpl->tpl_vars['type']->value == "group-add" || $_smarty_tpl->tpl_vars['type']->value == "group-edit" || $_smarty_tpl->tpl_vars['type']->value == "category-add" || $_smarty_tpl->tpl_vars['type']->value == "category-edit" || $_smarty_tpl->tpl_vars['type']->value == "graphic-icon-add" || $_smarty_tpl->tpl_vars['type']->value == "graphic-icon-edit") {?>
    <?php $_smarty_tpl->_assignInScope('visiblePredefinedIcons', true);
}?>


<?php if ($_smarty_tpl->tpl_vars['type']->value == "graphic-add" || $_smarty_tpl->tpl_vars['type']->value == "graphic-edit" || $_smarty_tpl->tpl_vars['type']->value == "product-add" || $_smarty_tpl->tpl_vars['type']->value == "product-edit" || $_smarty_tpl->tpl_vars['type']->value == "group-add" || $_smarty_tpl->tpl_vars['type']->value == "group-edit") {?>
    <?php $_smarty_tpl->_assignInScope('visiblePredefinedIllustrations', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == "graphic-add" || $_smarty_tpl->tpl_vars['type']->value == "graphic-edit") {?>
    <?php $_smarty_tpl->_assignInScope('activePredefinedIllustrations', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == "testimonial-add" || $_smarty_tpl->tpl_vars['type']->value == "testimonial-edit" || $_smarty_tpl->tpl_vars['type']->value == "seo-image") {?>
    <?php $_smarty_tpl->_assignInScope('activeMediaLibrary', true);
}?>

<ul class="nav nav--h nav--tabs m-b-2x">
    <?php if ($_smarty_tpl->tpl_vars['visibleFontIcons']->value) {?>
        <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['activeFontIcons']->value) {?>is-active<?php }?>">
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
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visiblePredefinedIcons']->value) {?>
        <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['activePredefinedIcons']->value) {?>is-active<?php }?>">
            <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-predefined-icons" data-media-predefined data-media-load>
                <span>SVG Icons</span>
            </a>
        </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visiblePredefinedIllustrations']->value) {?>
        <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['activePredefinedIllustrations']->value) {?>is-active<?php }?>">
            <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-predefined-illustration" data-media-illustrations data-media-load>
                <span>SVG Illustrations</span>
            </a>
        </li>
    <?php }?>
    <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['activeMediaLibrary']->value && !empty($_smarty_tpl->tpl_vars['media']->value)) {?>is-active<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['media']->value)) {?>is-hidden<?php }?>">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-media-library" data-media-upload data-media-load>
            <span>Library</span>
        </a>
    </li>
    <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['activeMediaLibrary']->value && empty($_smarty_tpl->tpl_vars['media']->value)) {?>is-active<?php }?>">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-media-upload" data-media-custom-graphic>
            <span>Upload</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    <?php if ($_smarty_tpl->tpl_vars['visibleFontIcons']->value) {?>
        <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['activeFontIcons']->value) {?>is-active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
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
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visiblePredefinedIcons']->value) {?>
        <div class="tab-pane tab-pane--predefined-icons <?php if ($_smarty_tpl->tpl_vars['activePredefinedIcons']->value) {?>is-active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
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
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visiblePredefinedIllustrations']->value) {?>
        <div class="tab-pane tab-pane--predefined-illustrations <?php if ($_smarty_tpl->tpl_vars['activePredefinedIllustrations']->value) {?>is-active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
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
    <?php }?>
    <div class="tab-pane tab-pane--media <?php if ($_smarty_tpl->tpl_vars['activeMediaLibrary']->value && !empty($_smarty_tpl->tpl_vars['media']->value)) {?>is-active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
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
  
    <div class="tab-pane tab-pane--media-custom <?php if ($_smarty_tpl->tpl_vars['activeMediaLibrary']->value && empty($_smarty_tpl->tpl_vars['media']->value)) {?>is-active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
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
