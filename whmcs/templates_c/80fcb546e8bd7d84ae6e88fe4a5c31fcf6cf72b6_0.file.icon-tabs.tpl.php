<?php
/* Smarty version 3.1.48, created on 2024-12-18 08:57:39
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/includes/icon-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67628e83216282_42843711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80fcb546e8bd7d84ae6e88fe4a5c31fcf6cf72b6' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/includes/icon-tabs.tpl',
      1 => 1701334774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/media/no-data.tpl' => 5,
  ),
),false)) {
function content_67628e83216282_42843711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconLocation', "./../../../../../assets/svg-icons");
$_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon");
$_smarty_tpl->_assignInScope('imagesPath', ((string)$_smarty_tpl->tpl_vars['whmcsURL']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['template']->value->getMainName())."/assets/img");?>

<ul class="nav nav--h nav--tabs">
    <li class="nav__item is-active">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-lagom-small">
            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['modal']['icon']['ls'];?>
</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-lagom-medium">
            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['modal']['icon']['lm'];?>
</span>
        </a>
    </li>
    <li class="nav__item ">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-font-awesome">
            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['modal']['icon']['fa'];?>
</span>
        </a>
    </li>
    <li class="nav__item ">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-predefined-icons">
            <span>Predefined Icons</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-media-upload" data-media-upload>
            <span>Library</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-custom-icon" data-media-custom>
            <span>Upload</span>
        </a>
    </li>
</ul>


<?php $_smarty_tpl->_assignInScope('media', $_smarty_tpl->tpl_vars['extension']->value->getImages());
$_smarty_tpl->_assignInScope('icons', $_smarty_tpl->tpl_vars['template']->value->getIcons());?>
<div class="tab-content">
    <div class="tab-pane tab-pane--icons is-active" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-lagom-small" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media" >
           <div class="media__list has-scroll" data-media-list>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value['lagomSmall'], 'lagomSmallIcon');
$_smarty_tpl->tpl_vars['lagomSmallIcon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lagomSmallIcon']->value) {
$_smarty_tpl->tpl_vars['lagomSmallIcon']->do_else = false;
?>
                    <label class="media__item" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['name'];?>
" data-media-item="<?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['class'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['searchTerms'], 'searchTerm');
$_smarty_tpl->tpl_vars['searchTerm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['searchTerm']->value) {
$_smarty_tpl->tpl_vars['searchTerm']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['searchTerm']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
                        <div class="media__item-icon">
                            <i class="<?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['class'];?>
"></i>
                        </div>
                        <input class="media__item-input lagom-icon" type="radio" name="item[icon]" value="<?php echo $_smarty_tpl->tpl_vars['lagomSmallIcon']->value['class'];?>
">
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customClass'=>"is-hidden"), 0, false);
?>
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--icons" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-lagom-medium" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value['lagomMedium'], 'lagomMediumIcon');
$_smarty_tpl->tpl_vars['lagomMediumIcon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lagomMediumIcon']->value) {
$_smarty_tpl->tpl_vars['lagomMediumIcon']->do_else = false;
?>
                    <label class="media__item"  data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lagomMediumIcon']->value['name'];?>
" data-media-item="<?php echo $_smarty_tpl->tpl_vars['lagomMediumIcon']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['lagomMediumIcon']->value['class'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lagomMediumIcon']->value['searchTerms'], 'searchTerm');
$_smarty_tpl->tpl_vars['searchTerm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['searchTerm']->value) {
$_smarty_tpl->tpl_vars['searchTerm']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['searchTerm']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
                        <div class="media__item-icon">
                            <i class="<?php echo $_smarty_tpl->tpl_vars['lagomMediumIcon']->value['class'];?>
"></i>
                        </div>
                        <input class="media__item-input predefined-icon" type="radio" name="item[icon]" value="<?php echo $_smarty_tpl->tpl_vars['lagomMediumIcon']->value['class'];?>
">
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customClass'=>"is-hidden"), 0, true);
?>
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--icons" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-font-awesome" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value['fontAwesome'], 'fontAwesomeIcon');
$_smarty_tpl->tpl_vars['fontAwesomeIcon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value) {
$_smarty_tpl->tpl_vars['fontAwesomeIcon']->do_else = false;
?>
                    <label class="media__item"  data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['name'];?>
" data-media-item="<?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['class'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['searchTerms'], 'searchTerm');
$_smarty_tpl->tpl_vars['searchTerm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['searchTerm']->value) {
$_smarty_tpl->tpl_vars['searchTerm']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['searchTerm']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
                        <div class="media__item-icon">
                            <i class="<?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['class'];?>
"></i>
                        </div>
                        <input class="media__item-input lagom-icon" type="radio" name="item[icon]" value="<?php echo $_smarty_tpl->tpl_vars['fontAwesomeIcon']->value['class'];?>
">
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customClass'=>"is-hidden"), 0, true);
?>
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--predefined-icons" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-predefined-icons" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media" data-media-container>
            <div class="media__list has-scroll" data-media-list>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIcons(), 'icon', false, 'key');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
                    <label class="media__item" data-media-item="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];?>
"  data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];?>
">
                        <div class="media__item-icon">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['icon']->value['path']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                        <input class="media__item-input lagom-icon" type="radio" name="item[predefined_icon]" value="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];?>
">
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customClass'=>"is-hidden"), 0, true);
?>
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--media" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-media-upload" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">             <div class="media__list has-scroll" data-media-list data-media-manager>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['media']->value, 'media_img');
$_smarty_tpl->tpl_vars['media_img']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['media_img']->value) {
$_smarty_tpl->tpl_vars['media_img']->do_else = false;
?>
                    <label class="media__item media__item--lg" data-media-item="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['media_img']->value['type'] == 'custom') {?>
                            <div class="media__item-icon">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['imagesPath']->value;?>
/page-manager/<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
                            </div>
                            <input class="media__item-input media-icon" type="radio" name="item[media]" value="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
                        <?php } elseif ($_smarty_tpl->tpl_vars['media_img']->value['type'] == 'default') {?>
                            <div class="media__item-icon">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['imagesPath']->value;?>
/page-manager/default/<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
                            </div>
                            <input class="media__item-input media-icon" type="radio" name="item[media]" value="default/<?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
">
                        <?php }?>
                        <span class="media__item-border"></span>
                        <span class="media__item-label"><span class="truncate"><?php echo $_smarty_tpl->tpl_vars['media_img']->value['filename'];?>
</span></span>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customClass'=>"is-hidden"), 0, true);
?>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
-custom-icon">
        <div class="media media--custom" data-media-custom>
            <div class="media__wrapper" data-media-custom-btn>
                <i class="media__icon ls ls-upload"></i>
                <strong class="media__title p-md">Click to Upload</strong>
                <span class="media__desc p-xs">Allowed extensions .PNG, .JPG, .SVG, .GIF. Max size 128MB.</span>
            </div>
            <input type="file" multiple name="customIcon" data-media-custom-input accept="image/*" data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@seoImage',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets" />
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
