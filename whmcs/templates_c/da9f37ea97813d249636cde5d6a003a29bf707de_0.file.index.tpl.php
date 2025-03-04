<?php
/* Smarty version 3.1.48, created on 2025-03-04 11:42:36
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c6e72cc1e147_91105216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9f37ea97813d249636cde5d6a003a29bf707de' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/index.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/header.tpl' => 1,
    'file:adminarea/includes/navbar.tpl' => 1,
    'file:adminarea/includes/footer.tpl' => 1,
  ),
),false)) {
function content_67c6e72cc1e147_91105216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div id="rs-module">
    <div class="app app--navbar-top app--navbar-h-simple">
        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="app-main">
            <div class="app-main__header">
                <div class="app-main__top p-b-0x">
                    <div class="container">
                        <div class="top">
                            <div class="top__content">
                                <div class="top__title justify-content-between">
                                    <h1 class="top__title-text">RS Themes</h1>
                                </div>
                            </div>
                            <div class="top__toolbar">
                                <a class="btn btn--default btn--outline" href="https://lagom.rsstudio.net/">
                                    <span class="btn__text">Explore Themes <b class="m-l-1x ls ls-new-window"></b></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-main__nav">
                    <div class="container">
                        <ul class="nav nav--md nav--h nav--tabs">
                            <li class="nav__item   is-active">
                                <a class="nav__link" href="addonmodules.php?controller=Templates&amp;action=index&amp;module=RSThemes">
                                    <span class="nav__link-text">Client Area</span>
                                </a>
                            </li>
                                                    </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__body">
                <div class="container">
                    <div class="row row--eq-height">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template', false, 'k', 'templatesLoop', array (
));
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="widget widget--theme-change <?php if ($_smarty_tpl->tpl_vars['template']->value->isActive()) {?>widget--has-shadow<?php }?>">    
                                    <?php $_smarty_tpl->_assignInScope('isNewVersionStable', true);?>
                                    <?php $_smarty_tpl->_assignInScope('checkNewVersion', smarty_modifier_replace($_smarty_tpl->tpl_vars['template']->value->newVersion(),"Lagom ",''));?>
                                    <?php $_smarty_tpl->_assignInScope('checkNewVersion', explode("-",$_smarty_tpl->tpl_vars['checkNewVersion']->value));?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['checkNewVersion']->value[1])) && $_smarty_tpl->tpl_vars['checkNewVersion']->value[1] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('isNewVersionStable', false);?>
                                    <?php }?>                               
                                    <?php if ($_smarty_tpl->tpl_vars['template']->value->newVersionAvailable() && smarty_modifier_replace($_smarty_tpl->tpl_vars['template']->value->model->version,".",'') > 200 && $_smarty_tpl->tpl_vars['isNewVersionStable']->value) {?>
                                        <div class="widget__alert alert alert--info alert--sm has-icon alert--outline">
                                            <div class="alert__body">
                                                <span id="newVersion">New version <b><?php echo $_smarty_tpl->tpl_vars['template']->value->newVersion();?>
</b> is available! </span>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->hasProblem()) {?>
                                        <div class="widget__alert alert alert--danger alert--sm has-icon alert--outline">
                                            <div class="alert__body">
                                               <?php echo $_smarty_tpl->tpl_vars['template']->value->license()->getProblem();?>

                                            </div>
                                        </div>
                                    <?php }?>
                                        <a class="widget__media" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@info',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['template']->value->getPreview()) {?>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value->getPreview();?>
" alt=""/>
                                            <?php } else { ?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->img('/placeholders/placeholder-xs.svg');?>
" alt=""/>
                                            <?php }?>
                                        </a>
                                    <div class="widget__actions widget__actions--raised flex flex-items-xs-between">                                        
                                        <span class="rail">
                                            <span class="type-6  m-r-2x"><?php echo $_smarty_tpl->tpl_vars['template']->value->getName();?>
</span>
                                            <?php if ($_smarty_tpl->tpl_vars['template']->value->isActive()) {?><span class="label label--outline label--success m-l-0x">Active</span><?php }?>
                                        </span>
                                        <div class="widget__btns p-0x">
                                            <a class="btn btn--sm btn--default btn--outline" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@info',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                                <span class="btn__text">Manage <span class="theme-text">Theme</span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>      
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>    
</div><?php }
}
