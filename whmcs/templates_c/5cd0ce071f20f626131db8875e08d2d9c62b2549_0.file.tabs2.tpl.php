<?php
/* Smarty version 3.1.48, created on 2024-12-04 05:07:58
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/tabs2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674fe3ae755af5_21365638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cd0ce071f20f626131db8875e08d2d9c62b2549' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/ajax/tabs2.tpl',
      1 => 1726757106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../includes/media/no-data.tpl' => 1,
  ),
),false)) {
function content_674fe3ae755af5_21365638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconLocation', "./../../../assets/svg-icons");
$_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon");
$_smarty_tpl->_assignInScope('ilustrationPath', "./../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations");
$_smarty_tpl->_assignInScope('imagesPath', ((string)$_smarty_tpl->tpl_vars['whmcsURL']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/img");?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIllustrations(), 'illustration', false, 'key');
$_smarty_tpl->tpl_vars['illustration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['illustration']->value) {
$_smarty_tpl->tpl_vars['illustration']->do_else = false;
?>
    <?php if (strstr($_smarty_tpl->tpl_vars['illustration']->value['path'],"custom/")) {?>
        <?php $_smarty_tpl->_assignInScope('hasCustomIllustration', true);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['hasCustomIllustration']->value) {?>
    <h6 class="media__subtitle" data-media-item="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIllustrations(), 'illustration', false, 'key');
$_smarty_tpl->tpl_vars['illustration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['illustration']->value) {
$_smarty_tpl->tpl_vars['illustration']->do_else = false;
if (strstr($_smarty_tpl->tpl_vars['illustration']->value['path'],"/custom/")) {?> <?php echo $_smarty_tpl->tpl_vars['illustration']->value['name'];
if ((($_smarty_tpl->tpl_vars['illustration']->value['tags'] && is_array($_smarty_tpl->tpl_vars['illustration']->value['tags']) !== null ))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['illustration']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['tag']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">Custom Illustrations</h6>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIllustrations(), 'illustration', false, 'key');
$_smarty_tpl->tpl_vars['illustration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['illustration']->value) {
$_smarty_tpl->tpl_vars['illustration']->do_else = false;
?>
        <?php if (strstr($_smarty_tpl->tpl_vars['illustration']->value['path'],"/custom/")) {?>
            <?php $_smarty_tpl->_assignInScope('illustrationName', explode("/",$_smarty_tpl->tpl_vars['illustration']->value['name']));?>
            <label 
                class="media__item" 
                data-media-item="<?php echo $_smarty_tpl->tpl_vars['illustration']->value['name'];?>
 <?php if ((($_smarty_tpl->tpl_vars['illustration']->value['tags'] && is_array($_smarty_tpl->tpl_vars['illustration']->value['tags']) !== null ))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['illustration']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['tag']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>" 
                data-toggle="lu-tooltip" 
                data-title="<?php echo end($_smarty_tpl->tpl_vars['illustrationName']->value);?>
"
            >
                <div class="media__item-icon">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['illustration']->value['path']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
                <input class="media__item-input lagom-icon" type="radio" name="item[illustration]" value="<?php echo $_smarty_tpl->tpl_vars['illustration']->value['name'];?>
">
                <span class="media__item-border"></span>
                <span class="media__item-label"></span>
            </label>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <h6 class="media__subtitle" data-media-item="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIllustrations(), 'illustration', false, 'key');
$_smarty_tpl->tpl_vars['illustration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['illustration']->value) {
$_smarty_tpl->tpl_vars['illustration']->do_else = false;
if (!strstr($_smarty_tpl->tpl_vars['illustration']->value['path'],"/custom/")) {?> <?php echo $_smarty_tpl->tpl_vars['illustration']->value['name'];
if ((($_smarty_tpl->tpl_vars['illustration']->value['tags'] && is_array($_smarty_tpl->tpl_vars['illustration']->value['tags']) !== null ))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['illustration']->value['tags'], 'tag');
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
        Lagom Illustrations
    </h6>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getAllIllustrations(), 'illustration', false, 'key');
$_smarty_tpl->tpl_vars['illustration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['illustration']->value) {
$_smarty_tpl->tpl_vars['illustration']->do_else = false;
?>
    <?php if (!strstr($_smarty_tpl->tpl_vars['illustration']->value['path'],"/svg-illustrations/custom/") && strstr($_smarty_tpl->tpl_vars['illustration']->value['path'],"/modern/")) {?>
        <?php $_smarty_tpl->_assignInScope('illustrationName', explode("/",$_smarty_tpl->tpl_vars['illustration']->value['name']));?>
        <label 
            class="media__item <?php if (strstr($_smarty_tpl->tpl_vars['illustration']->value['path'],"section-bg/modern/")) {?>media__item--extension-hide<?php }?>" 
            data-media-item="<?php echo $_smarty_tpl->tpl_vars['illustration']->value['name'];?>
 <?php if ((($_smarty_tpl->tpl_vars['illustration']->value['tags'] && is_array($_smarty_tpl->tpl_vars['illustration']->value['tags']) !== null ))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['illustration']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['tag']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>" 
            data-toggle="lu-tooltip" 
            data-title="<?php echo end($_smarty_tpl->tpl_vars['illustrationName']->value);?>
"
        >
            <div class="media__item-icon">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['illustration']->value['path']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <input class="media__item-input lagom-icon" type="radio" name="item[illustration]" value="<?php echo $_smarty_tpl->tpl_vars['illustration']->value['name'];?>
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
