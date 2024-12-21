<?php
/* Smarty version 3.1.48, created on 2024-12-21 07:18:58
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67666be2733c35_19862155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae98e84b7679b3a6516d2073a1fbe9d3e107cd8' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/breadcrumb.tpl',
      1 => 1734764845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb/button-back.tpl' => 2,
  ),
),false)) {
function content_67666be2733c35_19862155 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="app-main__top">
    <div class="container">
        <div class="top">
                        <?php if ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value === 'custom_page') {?>
                <div class="top__toolbar">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'tab'=>'website'))), 0, false);
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
                                    <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'tab'=>'website'));?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['website'];?>

                                    </a>
                                </li>
                                <?php if ((isset($_smarty_tpl->tpl_vars['customPage']->value))) {?>
                                    <li class="breadcrumb__item breadcrumb__item--page">
                                        <span class="breadcrumb__item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['customPage']->value->display_name;?>

                                        </span>
                                    </li>
                                <?php } else { ?>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['new_page'];?>

                                        </span>
                                    </li>
                                <?php }?>
                            </ul>
                        </h1>
                    </div>
                </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['customPage']->value))) {?>
                    <div class="top__toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<?php if ((isset($_smarty_tpl->tpl_vars['customPage']->value->url)) && !$_smarty_tpl->tpl_vars['isHomepage']->value) {
echo $_smarty_tpl->tpl_vars['customPage']->value->url;
}?>" class="btn btn--primary" target="_blank">
                            <span class="btn__icon lm lm-search"></span>
                            <span class="btn__text">Preview</span>
                        </a>
                    </div>
                <?php }?>                                                               
                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value == 'section') {?>
                <div class="top__toolbar">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb/button-back.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'tab'=>'section'))), 0, true);
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
                                    <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'tab'=>'section'));?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['sections'];?>

                                    </a>
                                </li>
                                <?php if ((isset($_smarty_tpl->tpl_vars['newSection']->value))) {?>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['new_section'];?>

                                        </span>
                                    </li>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['section']->value))) {?>
                                    <li class="breadcrumb__item">
                                        <span class="breadcrumb__item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['section']->value->name;?>

                                        </span>
                                    </li>
                                <?php }?>
                            </ul>
                        </h1>
                    </div>
                </div>
            <?php }?>  
        </div>
    </div>     
</div>    <?php }
}
