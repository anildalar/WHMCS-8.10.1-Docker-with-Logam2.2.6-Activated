<?php
/* Smarty version 3.1.48, created on 2025-02-11 11:19:05
  from '/var/www/html/modules/servers/HetznerVps/templates/client/default/controlers/errorPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67ab322954eaa0_47423016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4102a6ca39dad6b3efcbb59da7aaf82481e5c26' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/client/default/controlers/errorPage.tpl',
      1 => 1738818655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab322954eaa0_47423016 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mg-wrapper body" data-target=".body" data-spy="scroll" data-twttr-rendered="true">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/layers-ui.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/mg_styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/module_styles.css">

    <div class="full-screen-module-container" id="layers">
        <div class="clearfix"></div>
        <div class="page-container">
            <div class="page-content" id="MGPage<?php echo $_smarty_tpl->tpl_vars['currentPageName']->value;?>
">
                <div class="lu-container-fluid">
                    <div class="lu-block">
                        <div class="lu-block__body">
                            <div class="lu-widget">
                                <div class="lu-widget__header lu-docs-color lu-bg-danger-lighter">
                                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('addonCA','errorPage','error');?>

                                </div>
                                <div class="lu-widget__body lu-docs-color lu-bg-danger-faded" style="min-height: 350px">
                                    <div class="lu-row">
                                        <div class="lu-col-md-12">
                                            <div class="lu-msg__title lu-type-4 lu-docs-color-name" style="margin-bottom: 35px; margin-top: 25px; text-align: center;">
                                                <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('addonCA','errorPage','title');?>

                                            </div>
                                        </div>
                                        <div class="lu-col-md-12">
                                            <div class="lu-msg">
                                                <div class="lu-msg__body">
                                                    <p class="lu-msg__description lu-docs-color-value" style="font-size: 16px; margin-bottom: 15px;">
                                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('addonCA','errorPage','description');?>

                                                    </p>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errorPageDetails']->value, 'dValue', false, 'dKey');
$_smarty_tpl->tpl_vars['dValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dKey']->value => $_smarty_tpl->tpl_vars['dValue']->value) {
$_smarty_tpl->tpl_vars['dValue']->do_else = false;
?>
                                                        <p class="lu-msg__description lu-docs-color-value" style="font-size: 14px; margin-top: 5px; margin-bottom: 5px;">
                                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('addonCA','errorPage',$_smarty_tpl->tpl_vars['dKey']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['dValue']->value;?>

                                                        </p>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lu-col-md-12" style="margin-top: 35px; margin-bottom: 15px; text-align: center;">
                                            <div class="lu-msg__actions">
                                                <a class="lu-btn lu-btn--lg lu-btn--default" href="javascript:;" onclick="window.history.back();" style="background-color: #f66e6e !important; color: #fff">
                                                    <span class="lu-btn__text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('addonCA','errorPage','button');?>
</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>
<?php }
}
