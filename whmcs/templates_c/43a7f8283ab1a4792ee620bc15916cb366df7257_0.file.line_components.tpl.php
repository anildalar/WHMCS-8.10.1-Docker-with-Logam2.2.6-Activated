<?php
/* Smarty version 3.1.48, created on 2024-10-03 10:18:58
  from '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/widget/graphs/line_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fe6f9200ffa3_78944236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43a7f8283ab1a4792ee620bc15916cb366df7257' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/widget/graphs/line_components.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fe6f9200ffa3_78944236 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/x-template" id="t-mg-graph-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
        :settings_key="settings_key"
>
    <div class="lu-widget vueDatatableTable widgetActionComponent" id="graph_<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
"  actionid="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
">
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle() || $_smarty_tpl->tpl_vars['rawObject']->value->getTitle() || $_smarty_tpl->tpl_vars['rawObject']->value->titleButtonIsExist()) {?>
            <div class="lu-widget__header">
                <div class="lu-widget__top lu-top">
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle() || $_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>
                        <div class="lu-top__title">
                             <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i><?php }
if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?> 
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->titleButtonIsExist()) {?>
                        <div class="lu-top__toolbar">
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getTitleButtons(), 'buttonValue', false, 'buttonKey');
$_smarty_tpl->tpl_vars['buttonValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['buttonKey']->value => $_smarty_tpl->tpl_vars['buttonValue']->value) {
$_smarty_tpl->tpl_vars['buttonValue']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['buttonValue']->value->getHtml();?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            </div>
        <?php }?>
        <div class="lu-widget__body">
            <canvas id="canv_<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getGraphWidth();?>
" height="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getGraphHeight();?>
"></canvas>
            <div class="lu-preloader-container lu-preloader-container--full-screen lu-preloader-container--overlay" v-show="loading">
                <div class="lu-preloader lu-preloader--sm"></div>
            </div>
        </div>
        <?php if (($_smarty_tpl->tpl_vars['isDebug']->value == true && (count($_smarty_tpl->tpl_vars['MGLANG']->value->getMissingLangs()) != 0))) {?>
            <div class="lu-row" style="max-width: 95%;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MGLANG']->value->getMissingLangs(), 'value', false, 'varible');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['varible']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <div class="lu-col-md-12"><b><?php echo $_smarty_tpl->tpl_vars['varible']->value;?>
</b> = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';</div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    </div>
<?php echo '</script'; ?>
>
<?php }
}
