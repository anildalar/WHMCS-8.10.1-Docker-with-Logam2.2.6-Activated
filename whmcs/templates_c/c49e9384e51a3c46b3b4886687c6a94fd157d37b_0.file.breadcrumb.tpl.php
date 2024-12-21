<?php
/* Smarty version 3.1.48, created on 2024-12-21 06:00:46
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6766598e345347_45460616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c49e9384e51a3c46b3b4886687c6a94fd157d37b' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/breadcrumb.tpl',
      1 => 1734760587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb/button-back.tpl' => 8,
  ),
),false)) {
function content_6766598e345347_45460616 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="app-main__top">
    <div class="container">
        <div class="top">
                        <?php if ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value === "style_manage") {?>
                <div class="top__toolbar">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Template@styles',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()))), 0, false);
?>
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@styles',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['styles'];?>

                                    </a>
                                </li>
                                <li class="breadcrumb__item">
                                    <span class="breadcrumb__item-text">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['style']->value)) && method_exists($_smarty_tpl->tpl_vars['style']->value,"getName")) {
echo $_smarty_tpl->tpl_vars['style']->value->getName();
} else {
echo $_GET['styleName'];
}?>
                                    </span>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['style']->value)) && method_exists($_smarty_tpl->tpl_vars['style']->value,"isActiveFromConfig") && $_smarty_tpl->tpl_vars['style']->value->isActiveFromConfig()) {?>
                                        <span class="label label--success label--outline m-l-2x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</span>
                                    <?php }?>
                                </li>
                            </ul>
                        </h1>
                    </div>
                </div>

                <div class="top__toolbar">
                    <?php if ((isset($_smarty_tpl->tpl_vars['style']->value)) && method_exists($_smarty_tpl->tpl_vars['style']->value,"isActiveFromConfig")) {?>
                        <?php if (!$_smarty_tpl->tpl_vars['style']->value->isActiveFromConfig()) {?>
                            <a class="btn btn--primary" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@setStyle',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'styleName'=>$_smarty_tpl->tpl_vars['style']->value->getMainName(),'manage'=>true));?>
">
                                <span class="btn__text">Activate</span>
                            </a>
                        <?php }?>
                    <?php }?>
                </div>

                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value === "page") {?>
                <div class="top__toolbar">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()))), 0, true);
?>
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['pages'];?>

                                    </a>
                                </li>
                                <li class="breadcrumb__item">
                                    <span class="breadcrumb__item-text">
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->getName();?>

                                    </span>
                                </li>
                            </ul>
                        </h1>
                    </div>
                </div>

                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value === "page_manage") {?>
                <div class="top__toolbar">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()))), 0, true);
?>
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['pages'];?>

                                    </a>
                                </li>
                                <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['group']))) {?>
                                    <li class="breadcrumb__item">
                                        <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'tab'=>$_smarty_tpl->tpl_vars['settings']->value['group']));?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['settings']->value['group'];?>

                                        </a>
                                    </li>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['displayName']))) {?>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['settings']->value['displayName'];?>

                                        </span>
                                    </li>
                                <?php }?>
                            </ul>
                        </h1>
                    </div>
                </div>
                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value === 'menu') {?>
                <div class="top__toolbar">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Template@menu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuTab'=>$_GET['menuTab']))), 0, true);
?>
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@menu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['menu'];?>

                                    </a>
                                </li>
                                <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value))) {?>
                                    <li class="breadcrumb__item">
                                        <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@menu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuTab'=>$_GET['menuTab']));?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['menu']->value->location;?>

                                        </a>
                                    </li>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>

                                        </span>
                                    </li>
                                <?php } else { ?>
                                    <li class="breadcrumb__item">
                                        <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@menu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuTab'=>$_GET['menuTab']));?>
">
                                            <?php echo $_GET['menuLocation'];?>

                                        </a>
                                    </li>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['new_menu'];?>

                                        </span>
                                    </li>
                                <?php }?>
                            </ul>
                        </h1>
                    </div>
                </div>

                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value === 'display') {?>
                <div class="top__toolbar">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Template@settings',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()))), 0, true);
?>
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@settings',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['display_rules'];?>

                                    </a>
                                </li>
                                <?php if ((isset($_smarty_tpl->tpl_vars['display']->value))) {?>
                                    <li class="breadcrumb__item"><span class="breadcrumb__item-text"><?php echo $_smarty_tpl->tpl_vars['display']->value->name;?>
</span></li>
                                <?php }?>
                            </ul>
                        </h1>
                    </div>
                </div>

                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value === 'sidebar') {?>
                <div class="top__toolbar">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Template@menu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuTab'=>'sidebar'))), 0, true);
?>
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@menu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuTab'=>'main'));?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['menu'];?>

                                    </a>
                                </li>
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@menu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuTab'=>'sidebar'));?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['sidebar'];?>

                                    </a>
                                </li>
                                <?php if ((isset($_smarty_tpl->tpl_vars['sidebar']->value))) {?>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['sidebar']->value->name;?>

                                        </span>
                                    </li>
                                <?php } else { ?>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['new_sidebar'];?>

                                        </span>
                                    </li>
                                <?php }?>
                            </ul>
                        </h1>
                    </div>
                </div>
                        <?php } else { ?>
                <div class="top__toolbar">
                    <?php if ($_GET['controller'] == 'Template' && $_GET['action'] == 'info') {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Templates@index',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()))), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Template@info',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()))), 0, true);
?>
                    <?php }?>
                </div>
                <div class="top__content">
                    <div class="top__title">
                        <h1 class="top__title-text">
                            <?php echo $_smarty_tpl->tpl_vars['template']->value->getName();?>

                        </h1>
                        <?php if ($_smarty_tpl->tpl_vars['template']->value->isActive()) {?>
                            <span class="label label--success label--outline m-l-2x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</span>
                                                        <?php if (\RSThemes\Helpers\ContentChecker::checkCmsInstalled()) {?>
                            <div class="has-dropdown dropdown-style-display">
                                <a class="" href="" data-toggle="lu-dropdown" data-placement="bottom right" data-change-display-button>
                                    <span class="label label--info label--outline m-l-1x"><span class="text-faded">Display: </span> &nbsp;<?php echo $_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name;?>
&nbsp;<i class="text-primary ls ls-caret"></i></span>
                                </a>
                                <div class="dropdown dropdown-styles" style="display: none" data-dropdown-menu data-url="">
                                    <div class="dropdown__arrow" data-arrow></div>

                                    <div class="dropdown__menu">
                                        <ul class="nav">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getDisplays(), 'display');
$_smarty_tpl->tpl_vars['display']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['display']->value) {
$_smarty_tpl->tpl_vars['display']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['template']->value->getMainName() != 'lagom2' || !\RSThemes\Helpers\ContentChecker::checkCmsInstalled()) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['display']->value->name == "CMS") {?>
                                                        <?php continue 1;?>
                                                    <?php }?>
                                                <?php }?>
                                                <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['display']->value->active) {?>is-active<?php }?>">
                                                    <a class="nav__link" <?php if (!$_smarty_tpl->tpl_vars['display']->value->active) {?>data-change-display-rule<?php }?> data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Display@setActiveDisplay',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'displayId'=>$_smarty_tpl->tpl_vars['display']->value->id,'breadcrumb'=>true,'tab'=>$_GET['action']));?>
">
                                                        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['display']->value->name;?>
</span>
                                                        <?php if ($_smarty_tpl->tpl_vars['display']->value->active) {?><span class="nav__link-icon ls ls-check"></span><?php }?>
                                                    </a>
                                                </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        <?php }?>
                    </div>
                </div>

                <div class="top__toolbar">
                    <div class="has-dropdown">
                        <a class="btn btn--default btn--outline" href="" data-toggle="lu-dropdown" data-placement="bottom right">
                            <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['actions'];?>
</span>
                            <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-down" data-arrow-target></span>
                            <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-up" data-arrow-target></span>
                        </a>
                        <div class="dropdown" data-dropdown-menu>
                            <div class="dropdown__arrow" data-arrow></div>
                            <div class="dropdown__menu">
                                <ul class="nav">
                                    <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->isActive()) {?>
                                        <li class="nav__item">
                                            <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['template']->value->getSysTplLink();?>
" target="_blank">
                                                <span class="nav__link-icon lm lm-search"></span>
                                                <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['live_preview'];?>
</span>
                                            </a>
                                        </li>
                                    <?php }?>
                                    <li class="nav__item">
                                        <a class="nav__link" href="https://rsstudio.net/my-account/submitticket.php?step=2&deptid=2" target="_blank">
                                            <span class="nav__link-icon lm lm-denied"></span>
                                            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['report_bug'];?>
</span>
                                        </a>
                                    </li>
                                    <li class="nav__divider"></li>
                                    <li class="nav__item">
                                        <a class="nav__link" href="https://lagom.rsstudio.net/docs" target="_blank">
                                            <span class="nav__link-icon lm lm-book"></span>
                                            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['docs'];?>
</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->isActive()) {?>
                        <?php if (!$_smarty_tpl->tpl_vars['template']->value->isActive()) {?>
                            <a class="btn btn--primary" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@setActive',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['activate_theme'];?>
</span>
                            </a>
                        <?php }?>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }
}
