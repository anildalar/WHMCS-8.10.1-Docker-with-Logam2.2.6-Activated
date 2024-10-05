<?php
/* Smarty version 3.1.48, created on 2024-10-02 10:09:33
  from '/var/www/html/modules/servers/HetznerVps/app/UI/Configuration/Templates/pages/automationSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd1bddebc714_90761390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '261717fec9ce378d33875250d84432d33c03de0e' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/app/UI/Configuration/Templates/pages/automationSettings.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd1bddebc714_90761390 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lu-widget widgetActionComponent<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'data', false, 'name');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
<div class="lu-widget__header">
    <div class="lu-widget__top top">
        <div class="lu-top__title">
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        </div>
    </div>
    <div class="lu-top__toolbar">

    </div>
</div>

<div class="lu-widget__body">
    <div class="lu-widget__content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'dataElement', false, 'nameElement');
$_smarty_tpl->tpl_vars['dataElement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nameElement']->value => $_smarty_tpl->tpl_vars['dataElement']->value) {
$_smarty_tpl->tpl_vars['dataElement']->do_else = false;
?>
            <div id="<?php echo $_smarty_tpl->tpl_vars['dataElement']->value->getId();?>
" class="lu-row <?php echo $_smarty_tpl->tpl_vars['dataElement']->value->getClass();?>
">
                <?php echo $_smarty_tpl->tpl_vars['dataElement']->value->getHtml();?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['scriptHtml']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        <?php echo $_smarty_tpl->tpl_vars['scriptHtml']->value;?>

    <?php echo '</script'; ?>
>
<?php }
}
}
