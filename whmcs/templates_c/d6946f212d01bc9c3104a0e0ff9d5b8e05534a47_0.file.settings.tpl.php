<?php
/* Smarty version 3.1.48, created on 2024-09-20 11:30:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/emailstyle/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed5cef981e69_43496500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6946f212d01bc9c3104a0e0ff9d5b8e05534a47' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/emailstyle/settings.tpl',
      1 => 1668513000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/emailstyle/includes/breadcrumb.tpl' => 1,
    'file:adminarea/extensions/emailstyle/includes/tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 4,
    'file:adminarea/includes/helpers/tooltip.tpl' => 14,
  ),
),false)) {
function content_66ed5cef981e69_43496500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36687608166ed5cef95b5a9_51602480', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200902081066ed5cef95d583_08041387', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180202740066ed5cef95e0b2_87115516', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15378763266ed5cef980cd2_26270681', "template-actions");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_36687608166ed5cef95b5a9_51602480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_36687608166ed5cef95b5a9_51602480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/emailstyle/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_200902081066ed5cef95d583_08041387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_200902081066ed5cef95d583_08041387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/emailstyle/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_180202740066ed5cef95e0b2_87115516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_180202740066ed5cef95e0b2_87115516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>
        <div class="section">
            <form id="emailSettings" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName()));?>
" class="form neg-m-b-2x black-label">
                <div class="d-flex">
                    <div class="app-main__sidebar">
                        <div class="tabs tabs--block m-w-200">
                            <div class="tabs__nav" data-options="navStorage:localStorage; localStorageId:custom-slider-23; slideToClickedSlide: true;">
                                <ul class="nav nav--tabs custom-nav-styles">
                                    <div class="nav__header p-0x">Categories</div>
                                    <li class="nav__item is-active">
                                        <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#tabls-1">
                                            <span class="nav__link-text">General</span>
                                        </a>
                                    </li>
                                    <li class="nav__item">
                                        <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#tabls-2">
                                            <span class="nav__link-text">Social Links</span>
                                        </a>
                                    </li>
                                    <li class="nav__item">
                                        <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#tabls-3">
                                            <span class="nav__link-text">Footer</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="app-main__content">
                        <div class="tabs__body">
                            <div class="tab-content">
                                <div class="tab-pane is-active" id="tabls-1">
                                    <div class="section">
                                        <div class="section__header">
                                            <h3 class="section__title">
                                                General
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'https://lagom.rsstudio.net/docs/v2/settings.html#general'), 0, false);
?>
                                            </h3>
                                        </div>
                                        <div class="section__body panel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">
                                                            Header text
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'header text'), 0, false);
?>
                                                        </label>
                                                        <textarea placeholder="Header Text" class="form-control" name="header_text" rows="4"><?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('header_text');?>
</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-b-0x">
                                                        <label class="form-label">
                                                            Header link text
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'header link text'), 0, true);
?>
                                                        </label>
                                                        <textarea class="form-control" placeholder="Header link text" name="header_link_text" rows="4"><?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('header_link_text');?>
</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex m-t-3x p-0x hidden">
                                                <span class="form-label text-default form-text m-b-0x m-r-6x">
                                                    RTL Support
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'rtl support'), 0, true);
?>
                                                </span>
                                                <label>
                                                    <div class="switch switch--primary">
                                                        <input class="switch__checkbox" name="rtl" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('rtl') == '1') {?>checked<?php }?> value="1">
                                                        <span class="switch__container"><span class="switch__handle"></span></span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="tabls-2">
                                    <div class="section">
                                        <div class="section__header">
                                            <h3 class="section__title">
                                                Social Links
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'https://lagom.rsstudio.net/docs/v2/settings.html#general'), 0, true);
?>
                                            </h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel panel--collapse">
                                                    <div class="collapse-toggle">
                                                        <h6 class="top__title">Facebook</h6>
                                                        <label>
                                                            <div class="switch" data-toggle="lu-collapse" data-target="#facebookLink" aria-expanded="true">
                                                                <input class="switch__checkbox" name="facebook_active" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('facebook_active') == '1') {?>checked<?php }?> value="1">
                                                                <span class="switch__container"><span class="switch__handle"></span></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="collapse social-email-links <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('facebook_active') == '1') {?>show<?php }?>" id="facebookLink">
                                                        <div class="form-group p-3x">
                                                            <input name="facebook" value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('facebook');?>
" class="form-control" type="text" placeholder="Facebook Link">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel--collapse">
                                                    <div class="collapse-toggle">
                                                        <h6 class="top__title">Twitter</h6>
                                                        <label>
                                                            <div class="switch" data-toggle="lu-collapse" data-target="#twitterLink" aria-expanded="true">
                                                                <input class="switch__checkbox" type="checkbox" name="twitter_active" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('twitter_active') == '1') {?>checked<?php }?> value="1">
                                                                <span class="switch__container"><span class="switch__handle"></span></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="collapse social-email-links <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('twitter_active') == '1') {?>show<?php }?>" id="twitterLink">
                                                        <div class="form-group p-3x">
                                                            <input name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('twitter');?>
" class="form-control" type="text" placeholder="Twitter link">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel--collapse">
                                                    <div class="collapse-toggle">
                                                        <h6 class="top__title">Linkedin</h6>
                                                        <label>
                                                            <div class="switch" data-toggle="lu-collapse" data-target="#linkedinLink" aria-expanded="true">
                                                                <input class="switch__checkbox" type="checkbox" name="linkedin_active" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('linkedin_active') == '1') {?>checked<?php }?> value="1">
                                                                <span class="switch__container"><span class="switch__handle"></span></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="collapse social-email-links <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('linkedin_active') == '1') {?>show<?php }?>" id="linkedinLink">
                                                        <div class="form-group p-3x">
                                                            <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('linkedin');?>
" name="linkedin" class="form-control" type="text" placeholder="LinkedIn Link">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel--collapse">
                                                    <div class="collapse-toggle">
                                                        <h6 class="top__title">Youtube</h6>
                                                        <label>
                                                            <div class="switch" data-toggle="lu-collapse" data-target="#youtubeLink" aria-expanded="true">
                                                                <input class="switch__checkbox" type="checkbox" name="youtube_active" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('youtube_active') == '1') {?>checked<?php }?> value="1">
                                                                <span class="switch__container"><span class="switch__handle"></span></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="collapse social-email-links <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('youtube_active') == '1') {?>show<?php }?>" id="youtubeLink">
                                                        <div class="form-group p-3x">
                                                            <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('youtube');?>
" name="youtube" class="form-control" type="text" placeholder="YouTube Link">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel--collapse">
                                                    <div class="collapse-toggle">
                                                        <h6 class="top__title">Instagram</h6>
                                                        <label>
                                                            <div class="switch" data-toggle="lu-collapse" data-target="#instagramLink" aria-expanded="true">
                                                                <input class="switch__checkbox" type="checkbox" name="instagram_active" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('instagram_active') == '1') {?>checked<?php }?> value="1">
                                                                        <span class="switch__container"><span class="switch__handle"></span></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="collapse social-email-links <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('instagram_active') == '1') {?>show<?php }?>" id="instagramLink">
                                                        <div class="form-group p-3x">
                                                            <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('instagram');?>
" name="instagram" class="form-control" type="text" placeholder="Instagram Link">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabls-3">
                                    <div class="section">
                                        <div class="section__header">
                                            <h3 class="section__title">
                                                Copyright
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'https://lagom.rsstudio.net/docs/v2/settings.html#general'), 0, true);
?>
                                            </h3>
                                        </div>
                                        <div class="section__body panel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-b-0x">
                                                        <label class="form-label">
                                                            Copyright Text
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'copyright text'), 0, true);
?>
                                                        </label>
                                                        <textarea class="form-control" name="footer_text" rows="3" placeholder="Footer copy text"><?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_text');?>
</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="section">
                                        <div class="section__header">
                                            <h3 class="section__title">
                                                Links
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'https://lagom.rsstudio.net/docs/v2/settings.html#general'), 0, true);
?>
                                            </h3>
                                        </div>
                                        <div class="section__body">

                                            <div class="panel panel--collapse">
                                                <div class="collapse-toggle">
                                                    <h6 class="top__title">Link #1</h6>
                                                    <label>
                                                        <div class="switch" data-toggle="lu-collapse" data-target="#link_1" aria-expanded="true">
                                                            <input name="footer_link_1_active" class="switch__checkbox" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_1_active') == '1') {?>checked<?php }?> value="1">
                                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="collapse d-flex social-email-links p-3x <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_1_active') == '1') {?>show<?php }?>" id="link_1">
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            Name
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'name text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_1_name');?>
" name="footer_link_1_name" class="form-control" type="text" placeholder="Link name">
                                                    </div>
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            URL
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'url text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_1_url');?>
" name="footer_link_1_url" class="form-control" type="text" placeholder="Link url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel--collapse">
                                                <div class="collapse-toggle">
                                                    <h6 class="top__title">Link #2</h6>
                                                    <label>
                                                        <div class="switch" data-toggle="lu-collapse" data-target="#link_2" aria-expanded="true">
                                                            <input name="footer_link_2_active" class="switch__checkbox" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_2_active') == '1') {?>checked<?php }?> value="1">
                                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="collapse d-flex social-email-links p-3x <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_2_active') == '1') {?>show<?php }?>" id="link_2">
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            Name
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'name text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_2_name');?>
" name="footer_link_2_name" class="form-control" type="text" placeholder="Link name">
                                                    </div>
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            URL
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'url text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_2_url');?>
" name="footer_link_2_url" class="form-control" type="text" placeholder="Link url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel--collapse">
                                                <div class="collapse-toggle">
                                                    <h6 class="top__title">Link #3</h6>
                                                    <label>
                                                        <div class="switch" data-toggle="lu-collapse" data-target="#link_3" aria-expanded="true">
                                                            <input name="footer_link_3_active" class="switch__checkbox" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_3_active') == '1') {?>checked<?php }?> value="1">
                                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="collapse d-flex social-email-links p-3x <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_3_active') == '1') {?>show<?php }?>" id="link_3">
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            Name
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'name text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_3_name');?>
" name="footer_link_3_name" class="form-control" type="text" placeholder="Link name">
                                                    </div>
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            URL
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'url text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_3_url');?>
" name="footer_link_3_url" class="form-control" type="text" placeholder="Link url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel--collapse">
                                                <div class="collapse-toggle">
                                                    <h6 class="top__title">Link #4</h6>
                                                    <label>
                                                        <div class="switch" data-toggle="lu-collapse" data-target="#link_4" aria-expanded="true">
                                                            <input name="footer_link_4_active" class="switch__checkbox" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_4_active') == '1') {?>checked<?php }?> value="1">
                                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="collapse d-flex social-email-links p-3x <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_4_active') == '1') {?>show<?php }?>" id="link_4">
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            Name
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'name text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_4_name');?>
" name="footer_link_4_name" class="form-control" type="text" placeholder="Link name">
                                                    </div>
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            URL
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'url text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_4_url');?>
" name="footer_link_4_url" class="form-control" type="text" placeholder="Link url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel--collapse">
                                                <div class="collapse-toggle">
                                                    <h6 class="top__title">Link #5</h6>
                                                    <label>
                                                        <div class="switch" data-toggle="lu-collapse" data-target="#link_5" aria-expanded="true">
                                                            <input name="footer_link_5_active" class="switch__checkbox" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_5_active') == '1') {?>checked<?php }?> value="1">
                                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="collapse d-flex social-email-links p-3x <?php if ($_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_5_active') == '1') {?>show<?php }?>" id="link_5">
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            Name
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'name text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_5_name');?>
" name="footer_link_5_name" class="form-control" type="text" placeholder="Link name">
                                                    </div>
                                                    <div class="form-group p-0x">
                                                        <label class="form-label">
                                                            URL
                                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>'url text'), 0, true);
?>
                                                        </label>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getConfig('footer_link_5_url');?>
" name="footer_link_5_url" class="form-control" type="text" placeholder="Link url">
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
            </form>
        </div>
        <?php } else { ?>
        <div class="section">
            <h4 class="section__description">Extension is disabled, click bellow button to activate</h4>
        </div>
    <?php }?>
    <?php echo '<script'; ?>
>
        
        $(document).ready(function () {
            $('#emailSettings').on('submit', function (e) {
                e.preventDefault();
                var datastring = $("#emailSettings").serialize();
                $.ajax({
                    type: "POST",
                    url:  "<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName()));?>
"  ,
                    data: datastring,
                    dataType: "json",
                    success: function(data) {
                        console.log(data.status);
                        if(data.status === 'OK'){
                            $('#ajaxAlert').fadeIn();
                            setTimeout(function () {
                                $('#ajaxAlert').fadeOut();
                                $('#emailPreviewIframe')[0].contentWindow.location.reload(true);
                                $('#saveChangesButton').removeClass('is-loading is-disabled');
                            }, 1200)
                        }
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            });
        });
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_15378763266ed5cef980cd2_26270681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_15378763266ed5cef980cd2_26270681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>
    <div class="app-main__actions">
        <div class="container">
            <button id="saveChangesButton" onclick="$('#emailSettings').submit(); $(this).addClass('is-loading is-disabled')" class="btn btn--primary" type="submit">
                <span class="btn__text">Save Changes</span>
                <span class="btn__preloader preloader"></span>
            </button>
            <button class="btn btn--default btn--outline btn--plain" type="submit">Cancel</button>
        </div>
    </div>
    <?php }
}
}
/* {/block "template-actions"} */
}
