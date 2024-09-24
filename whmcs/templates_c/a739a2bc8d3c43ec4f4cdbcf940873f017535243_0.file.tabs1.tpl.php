<?php
/* Smarty version 3.1.48, created on 2024-09-24 08:35:24
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/tabs1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f279cc3f7004_82189284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a739a2bc8d3c43ec4f4cdbcf940873f017535243' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/tabs1.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../includes/media/no-data.tpl' => 1,
  ),
),false)) {
function content_66f279cc3f7004_82189284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconLocation', "./../../../assets/svg-icons");
$_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon");
$_smarty_tpl->_assignInScope('ilustrationPath', "./../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations");
$_smarty_tpl->_assignInScope('imagesPath', ((string)$_smarty_tpl->tpl_vars['whmcsURL']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/img");?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIcons(), 'icon', false, 'key');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
    <?php if (strstr($_smarty_tpl->tpl_vars['icon']->value['path'],"custom/")) {?>
        <?php $_smarty_tpl->_assignInScope('hasCustomIcon', true);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['hasCustomIcon']->value) {?>
    <h6 class="media__subtitle" data-media-item="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIcons(), 'icon', false, 'key');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
if (strstr($_smarty_tpl->tpl_vars['icon']->value['path'],"/custom/")) {
echo $_smarty_tpl->tpl_vars['icon']->value['name'];
if ((($_smarty_tpl->tpl_vars['icon']->value['tags'] && is_array($_smarty_tpl->tpl_vars['icon']->value['tags']) !== null ))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icon']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['tag']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">Custom Icons</h6>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIcons(), 'icon', false, 'key');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
        <?php if (strstr($_smarty_tpl->tpl_vars['icon']->value['path'],"/custom/")) {?>
            <label class="media__item" data-media-item="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];
if ((($_smarty_tpl->tpl_vars['icon']->value['tags'] && is_array($_smarty_tpl->tpl_vars['icon']->value['tags']) !== null ))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icon']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['tag']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];?>
">
                <div class="media__item-icon">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['icon']->value['path']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
                <input class="media__item-input lagom-icon" type="radio" name="item[icon]" value="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];?>
">
                <span class="media__item-border"></span>
                <span class="media__item-label"></span>
            </label>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <h6 class="media__subtitle" data-media-item="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIcons(), 'icon', false, 'key');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
if (!strstr($_smarty_tpl->tpl_vars['icon']->value['path'],"/custom/")) {?> <?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];
if ((($_smarty_tpl->tpl_vars['icon']->value['tags'] && is_array($_smarty_tpl->tpl_vars['icon']->value['tags']) !== null ))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icon']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['tag']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
        Lagom Icons
    </h6>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIcons(), 'icon', false, 'key');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
    <?php if (!strstr($_smarty_tpl->tpl_vars['icon']->value['path'],"/custom/")) {?>
        <label class="media__item" data-media-item="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];
if ((($_smarty_tpl->tpl_vars['icon']->value['tags'] && is_array($_smarty_tpl->tpl_vars['icon']->value['tags']) !== null ))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icon']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['tag']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];?>
">
            <div class="media__item-icon">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['icon']->value['path']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <input class="media__item-input lagom-icon" type="radio" name="item[icon]" value="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];?>
">
            <span class="media__item-border"></span>
            <span class="media__item-label"></span>
        </label>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:./../includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
