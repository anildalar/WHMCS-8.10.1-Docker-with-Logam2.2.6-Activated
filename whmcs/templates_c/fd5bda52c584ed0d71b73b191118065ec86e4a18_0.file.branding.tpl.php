<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:08:28
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/branding/branding.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40f1c219f86_93137882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd5bda52c584ed0d71b73b191118065ec86e4a18' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/branding/branding.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 4,
    'file:adminarea/includes/modals/unsaved-changes.tpl' => 1,
  ),
),false)) {
function content_66e40f1c219f86_93137882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152829774266e40f1c208451_98263846', "template-heading");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57109825166e40f1c209d54_94601407', "template-tabs");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201327916266e40f1c20ae39_18300267', "template-content");
?>
   

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108147379366e40f1c216489_88760378', "template-modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178822967766e40f1c216fb7_93365594', "template-scripts");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_382754866e40f1c218935_91314117', "template-actions");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_152829774266e40f1c208451_98263846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_152829774266e40f1c208451_98263846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_57109825166e40f1c209d54_94601407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_57109825166e40f1c209d54_94601407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_201327916266e40f1c20ae39_18300267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_201327916266e40f1c20ae39_18300267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form 
        id="#themesConfig" 
        action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@branding',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
        method="POST" 
        enctype="multipart/form-data" 
        data-check-unsaved-changes
    >
        <div class="section">
            <div class="section__header">
                <h3 class="section__title">
                    Full Logo
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['branding']['full_logo']), 0, false);
?>
                </h3>
            </div>
            <div class="section__body section--branding">
                <div class="row row--eq-height">
                    <div class="col-sm-5 logo-box logo-box--light">
                        <?php if ($_smarty_tpl->tpl_vars['images']->value['logo_big']) {?>
                            <input class="is-hidden" type="file" name="logo_big" data-logo-input>
                            <div class="widget widget--branding branding-overlay" href="#" data-input-trigger='logo_big'>
                                <div class="widget__media">
                                    <div class="tooltip-toggle" data-toggle="lu-tooltip" data-title="Delete">
                                        <a class="delete__icon" href="#deleteBrandingImgModal" data-toggle="lu-modal" data-backdrop="static" data-delete-branding data-img-name="logo_big">
                                            <i class="lm lm-trash"></i>
                                        </a>
                                    </div>
                                    <a class="widget__overlay " >
                                        <div class="widget__content">
                                            <div class="msg">
                                                <div class="upload__icon upload__icon--hover i-circled">
                                                    <span class="lm lm-edit"></span>
                                                </div>
                                                <div class="widget__text-box">
                                                    <div class="change__text type-7">Click to change graphic</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="widget__content text-center">
                                        <div class="brand-logo-preview">
                                            <img  name="logo_bigImage" src="<?php echo $_smarty_tpl->tpl_vars['images']->value['logo_big'];?>
" alt="" height="100%"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Full logo displayed on light and white background</p>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <input class="is-hidden" type="file" name="logo_big" data-logo-input>
                            <a class="widget widget--branding widget--link" href="#" data-input-trigger='logo_big'>
                                <div class="widget__body">
                                    <div class="msg">
                                        <div class="upload__icon i-circled">
                                            <span class="lm lm-upload"></span>
                                        </div>
                                        <div class="widget__text-box">
                                            <div class="msg__title type-7">Click to upload a file.</div>
                                            <div class="widget__suggestion">Suggested to upload graphic with at least 40px height</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Full logo displayed on light and white background</p>
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                    <div class="col-sm-5 logo-box logo-box--dark">
                        <?php if ($_smarty_tpl->tpl_vars['images']->value['logo_big_inverse']) {?>
                            <input class="is-hidden" type="file" name="logo_big_inverse" data-logo-input>
                            <div class="widget  widget--branding branding-overlay" href="#" data-input-trigger='logo_big_inverse'>
                                <div class="widget__media">
                                    <div class="tooltip-toggle" data-toggle="lu-tooltip" data-title="Delete">
                                        <a class="delete__icon" href="#deleteBrandingImgModal" data-toggle="lu-modal" data-backdrop="static" data-delete-branding data-img-name="logo_big_inverse">
                                            <i class="lm lm-trash"></i>
                                        </a>
                                    </div>
                                    <a class="widget__overlay ">
                                        <div class="widget__content">
                                            <div class="msg">
                                                <div class="upload__icon upload__icon--hover i-circled">
                                                    <span class="lm lm-edit"></span>
                                                </div>
                                                <div class="widget__text-box">
                                                    <div class="change__text type-7">Click to change graphic</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="widget__content text-center">
                                        <div class="brand-logo-preview">
                                            <img  name="logo_big_inverseImage"  src="<?php echo $_smarty_tpl->tpl_vars['images']->value['logo_big_inverse'];?>
" alt="" height="100%"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Full logo displayed on dark background</p>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <input class="is-hidden" type="file" name="logo_big_inverse" data-logo-input>
                            <a class="widget widget--branding widget--link" href="#" data-input-trigger='logo_big_inverse' >
                                <div class="widget__body">
                                    <div class="msg">
                                        <div class="upload__icon i-circled">
                                            <span class="lm lm-upload"></span>
                                        </div>
                                        <div class="widget__text-box">
                                            <div class="msg__title type-7">Click to upload a file.</div>
                                            <div class="widget__suggestion">Suggested to upload graphic with at least 40px height</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Full logo displayed on dark background</p>
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <h3 class="section__title">
                Square Logo
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['branding']['square_logo']), 0, true);
?>
            </h3>
            <div class="section__body section--branding">
                <div class="row row--eq-height">
                    <div class="col-sm-5 logo-box logo-box--light">
                        <?php if ($_smarty_tpl->tpl_vars['images']->value['logo_small']) {?>
                            <input class="is-hidden" type="file" name="logo_small" data-logo-input>
                            <div class="widget widget--branding branding-overlay">
                                <div class="widget__media">
                                    <div class="tooltip-toggle" data-toggle="lu-tooltip" data-title="Delete">
                                        <a class="delete__icon" href="#deleteBrandingImgModal" data-toggle="lu-modal" data-backdrop="static" data-delete-branding data-img-name="logo_small">
                                            <i class="lm lm-trash"></i>
                                        </a>
                                    </div>
                                    <a class="widget__overlay " href="#" data-input-trigger='logo_small' >
                                        <div class="widget__content">
                                            <div class="msg">
                                                <div class="upload__icon upload__icon--hover i-circled">
                                                    <span class="lm lm-upload"></span>
                                                </div>
                                                <div class="widget__text-box">
                                                    <div class="change__text type-7">Click to change graphic</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="widget__content text-center">
                                        <div class="brand-logo-preview p-5x">
                                            <img name="logo_smallImage" src="<?php echo $_smarty_tpl->tpl_vars['images']->value['logo_small'];?>
" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Square logo displayed on light background</p>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <input class="is-hidden" type="file" name="logo_small" data-logo-input>
                            <a class="widget widget--branding widget--link" href="#" data-input-trigger='logo_small' >
                                <div class="widget__body">
                                    <div class="msg">
                                        <div class="upload__icon i-circled">
                                            <span class="lm lm-upload"></span>
                                        </div>
                                        <div class="widget__text-box">
                                            <div class="msg__title type-7">Click to upload a file.</div>
                                            <div class="widget__suggestion">Suggested to upload graphic with at least 40px height</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Square logo displayed on light background</p>
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                    <div class="col-sm-5 logo-box logo-box--dark">
                        <?php if ($_smarty_tpl->tpl_vars['images']->value['logo_small_inverse']) {?>
                            <input class="is-hidden" type="file" name="logo_small_inverse" data-logo-input>
                            <div class="widget widget--branding branding-overlay">
                                <div class="widget__media">
                                    <div class="tooltip-toggle" data-toggle="lu-tooltip" data-title="Delete">
                                        <a class="delete__icon" href="#deleteBrandingImgModal" data-toggle="lu-modal" data-backdrop="static" data-delete-branding data-img-name="logo_small_inverse">
                                            <i class="lm lm-trash"></i>
                                        </a>
                                    </div>
                                    <a class="widget__overlay" href="#" data-input-trigger='logo_small_inverse'>
                                        <div class="widget__content">
                                            <div class="msg">
                                                <div class="upload__icon upload__icon--hover i-circled">
                                                    <span class="lm lm-upload"></span>
                                                </div>
                                                <div class="widget__text-box">
                                                    <div class="change__text type-7">Click to change graphic</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="widget__content text-center">
                                        <div class="brand-logo-preview p-5x">
                                            <img name="logo_small_inverseImage"  src="<?php echo $_smarty_tpl->tpl_vars['images']->value['logo_small_inverse'];?>
" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Square logo displayed on dark background</p>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <input class="is-hidden" type="file" name="logo_small_inverse" data-logo-input>
                            <a class="widget widget--branding widget--link" href="#" data-input-trigger='logo_small_inverse' >
                                <div class="widget__body">
                                    <div class="msg">
                                        <div class="upload__icon i-circled">
                                            <span class="lm lm-upload"></span>
                                        </div>
                                        <div class="widget__text-box">
                                            <div class="msg__title type-7">Click to upload a file.</div>
                                            <div class="widget__suggestion">Suggested to upload graphic with at least 40px height</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Square logo displayed on dark background</p>
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <h3 class="section__title">
                Favicon
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['branding']['favicon']), 0, true);
?>
            </h3>
            <div class="section__body section--branding">
                <div class="row row--eq-height">
                    <div class="col-sm-5 logo-box logo-box--favicon">
                        <?php if ($_smarty_tpl->tpl_vars['images']->value['icon']) {?>
                            <input class="is-hidden" type="file" name="icon" data-logo-input>
                            <div class="widget widget--branding branding-overlay">
                                <div class="widget__media">
                                    <div class="tooltip-toggle" data-toggle="lu-tooltip" data-title="Delete">
                                        <a class="delete__icon" href="#deleteBrandingImgModal" data-toggle="lu-modal" data-backdrop="static" data-delete-branding data-img-name="icon">
                                            <i class="lm lm-trash"></i>
                                        </a>
                                    </div>
                                    <a class="widget__overlay " href="#" data-input-trigger='icon' >
                                        <div class="widget__content">
                                            <div class="msg">
                                                <div class="upload__icon upload__icon--hover i-circled">
                                                    <span class="lm lm-upload"></span>
                                                </div>
                                                <div class="widget__text-box">
                                                    <div class="change__text type-7">Click to change graphic</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="widget__content text-center">
                                        <div class="brand-logo-preview">
                                            <img name="iconImage" src="<?php echo $_smarty_tpl->tpl_vars['images']->value['icon'];?>
" alt="" height="100%"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Favicon shown in browser tab</p>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <input class="is-hidden" type="file" name="icon" data-logo-input>
                            <a class="widget widget--branding widget--link" href="#" data-input-trigger='icon' >
                                <div class="widget__body">
                                    <div class="msg">
                                        <div class="upload__icon i-circled">
                                            <span class="lm lm-upload"></span>
                                        </div>
                                        <div class="widget__text-box">
                                            <div class="msg__title type-7">Click to upload a file.</div>
                                            <div class="widget__suggestion">Suggested to upload graphic with at least 40px height</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget__actions">
                                    <div class="widget__content">
                                        <p class="p-4 m-b-0x text-center flex-1">Favicon shown in browser tab</p>
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['emailExtension']->value) {?>
            <div class="section">
                <div class="section__header">
                    <h3 class="section__title">
                        Email Logo
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['branding']['email_logo']), 0, true);
?>
                    </h3>
                </div>
                <div class="section__body section--branding">
                    <div class="row row--eq-height">
                        <div class="col-sm-5 logo-box logo-box--light">
                            <?php if ($_smarty_tpl->tpl_vars['images']->value['email_light']) {?>
                                <input class="is-hidden" type="file" name="email_light" data-logo-input>
                                <div class="widget widget--branding branding-overlay" href="#" data-input-trigger='email_light'>
                                    <div class="widget__media">
                                        <div class="tooltip-toggle" data-toggle="lu-tooltip" data-title="Delete">
                                            <a class="delete__icon" href="#deleteBrandingImgModal" data-toggle="lu-modal" data-backdrop="static" data-delete-branding data-img-name="email_light">
                                                <i class="lm lm-trash"></i>
                                            </a>
                                        </div>
                                        <a class="widget__overlay " >
                                            <div class="widget__content">
                                                <div class="msg">
                                                    <div class="upload__icon upload__icon--hover i-circled">
                                                        <span class="lm lm-edit"></span>
                                                    </div>
                                                    <div class="widget__text-box">
                                                        <div class="change__text type-7">Click to change graphic</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="widget__content text-center">
                                            <div class="brand-logo-preview">
                                                <img  name="logo_email_light" src="<?php echo $_smarty_tpl->tpl_vars['images']->value['email_light'];?>
" alt="" height="100%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget__actions">
                                        <div class="widget__content">
                                            <p class="p-4 m-b-0x text-center flex-1">Full logo displayed on light and white background</p>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <input class="is-hidden" type="file" name="email_light" data-logo-input>
                                <a class="widget widget--branding widget--link" href="#" data-input-trigger='email_light'>
                                    <div class="widget__body">
                                        <div class="msg">
                                            <div class="upload__icon i-circled">
                                                <span class="lm lm-upload"></span>
                                            </div>
                                            <div class="widget__text-box">
                                                <div class="msg__title type-7">Click to upload a file.</div>
                                                <div class="widget__suggestion">Suggested to upload graphic with at least 40px height</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget__actions">
                                        <div class="widget__content">
                                            <p class="p-4 m-b-0x text-center flex-1">Full logo displayed on light and white background</p>
                                        </div>
                                    </div>
                                </a>
                            <?php }?>
                        </div>
                        <div class="col-sm-5 logo-box logo-box--dark">
                            <?php if ($_smarty_tpl->tpl_vars['images']->value['email_inverse']) {?>
                                <input class="is-hidden" type="file" name="email_inverse" data-logo-input>
                                <div class="widget  widget--branding branding-overlay" href="#" data-input-trigger='email_inverse'>
                                    <div class="widget__media">
                                        <div class="tooltip-toggle" data-toggle="lu-tooltip" data-title="Delete">
                                            <a class="delete__icon" href="#deleteBrandingImgModal" data-toggle="lu-modal" data-backdrop="static" data-delete-branding data-img-name="email_inverse">
                                                <i class="lm lm-trash"></i>
                                            </a>
                                        </div>
                                        <a class="widget__overlay ">
                                            <div class="widget__content">
                                                <div class="msg">
                                                    <div class="upload__icon upload__icon--hover i-circled">
                                                        <span class="lm lm-edit"></span>
                                                    </div>
                                                    <div class="widget__text-box">
                                                        <div class="change__text type-7">Click to change graphic</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="widget__content text-center">
                                            <div class="brand-logo-preview">
                                                <img  name="email_inverseImage"  src="<?php echo $_smarty_tpl->tpl_vars['images']->value['email_inverse'];?>
" alt="" height="100%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget__actions">
                                        <div class="widget__content">
                                            <p class="p-4 m-b-0x text-center flex-1">Full logo displayed on dark background</p>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <input class="is-hidden" type="file" name="email_inverse" data-logo-input>
                                <a class="widget widget--branding widget--link" href="#" data-input-trigger='email_inverse' >
                                    <div class="widget__body">
                                        <div class="msg">
                                            <div class="upload__icon i-circled">
                                                <span class="lm lm-upload"></span>
                                            </div>
                                            <div class="widget__text-box">
                                                <div class="msg__title type-7">Click to upload a file.</div>
                                                <div class="widget__suggestion">Suggested to upload graphic with at least 40px height</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget__actions">
                                        <div class="widget__content">
                                            <p class="p-4 m-b-0x text-center flex-1">Full logo displayed on dark background</p>
                                        </div>
                                    </div>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </form>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-modals"} */
class Block_108147379366e40f1c216489_88760378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_108147379366e40f1c216489_88760378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/unsaved-changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="modal" id="deleteBrandingImgModal" data-delete-branding-modal>
        <div class="modal__dialog">
            <div class="modal__content">
                <div class="modal__top top">
                    <div class="top__title text-danger">Delete branding image</div>
                    <div class="top__toolbar">
                        <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                            <i class="btn__icon lm lm-close"></i>
                        </button>
                    </div>
                </div>
                <div class="modal__body">
                    <p>Are you sure you want to delete this item?</p>
                    <div class="form-group">
                        <input type="hidden" name="filename" id="media-filename" value="">
                    </div>
                </div>
                <div class="modal__actions">
                    <button id="deleteImageAjax" class="btn btn--danger" type="button" data-delete-branding-modal-submit data-img-name data-btn-loader>
                        <span class="btn__preloader preloader preloader--light"></span>
                        <span class="btn__text">Delete</span>
                    </button>
                    <a class="btn btn--default btn--outline cancel__item" data-dismiss="lu-modal">
                        <span class="btn__text">Cancel</span>
                    </a>
                </div>             
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_178822967766e40f1c216fb7_93365594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_178822967766e40f1c216fb7_93365594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 id="image_template" type="text/template">
        <div class="widget widget--branding branding-overlay" href="#" data-trigger='newLogo'>
            <div class="widget__media">
                <div class="tooltip-toggle tooltip-toggle--added" data-toggle="lu-tooltip" data-title="Delete">
                    <a class="delete__icon" href="#deleteBrandingImgModal" data-toggle="lu-modal" data-backdrop="static" data-delete-branding data-img-name="">
                        <i class="lm lm-trash"></i>
                    </a>
                </div>
                <a class="widget__overlay ">
                    <div class="widget__content">
                        <div class="msg">
                            <div class="upload__icon upload__icon--hover i-circled">
                                <span class="lm lm-upload"></span>
                            </div>
                            <div class="widget__text-box">
                                <div class="change__text type-7">Click to change graphic</div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="widget__content text-center">
                    <div class="brand-logo-preview p-5x">
                        <img name="newLogoImage" src="" alt=""/>
                    </div>
                    
                </div>
            </div>
            <div class="widget__actions">
                <div class="widget__content">
                    <p class="p-4 m-b-0x text-center flex-1">
                        <span class="preview-light">Full logo displayed on light background</span>
                        <span class="preview-dark">Full logo displayed on dark background</span>
                        <span class="preview-favicon">Favicon shown in browser tab</span>
                    </p>
                </div>
            </div>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="non_image_template" type="text/template">
        <a class="widget widget--branding widget--link" href="#" data-input-trigger='newLogo' >
            <div class="widget__body">
                <div class="msg">
                    <div class="upload__icon i-circled">
                        <span class="lm lm-upload"></span>
                    </div>
                    <div class="widget__text-box">
                        <div class="msg__title type-7">Click to upload a file.</div>
                        <div class="widget__suggestion">Suggested to upload graphic with at least 40px height</div>
                    </div>
                </div>
            </div>
            <div class="widget__actions">
                <div class="widget__content">
                    <p class="p-4 m-b-0x text-center flex-1">
                        <span class="preview-light">Full logo displayed on light background</span>
                        <span class="preview-dark">Full logo displayed on dark background</span>
                        <span class="preview-favicon">Favicon shown in browser tab</span>
                    </p>
                </div>
            </div>
        </a>
    <?php echo '</script'; ?>
>

    
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).on('mouseenter', '.widget--branding .delete__icon' , function(){
                $(this).closest('.widget--branding').removeClass('branding-overlay'); 
            });
            $(document).on('mouseout', '.widget--branding .delete__icon' , function(){
                $(this).closest('.widget--branding').addClass('branding-overlay'); 
            });
            $('.tooltip-toggle').on('click', function(e){
                e.stopPropagation();
            });
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $('#deleteImageAjax').on('click', function(){
                $.ajax({
                    url: '<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@brandingDelete',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
&type='+$(this).data("img-name"),
                    success: function(response) {

                    }
                });
            });
        <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
/* {block "template-actions"} */
class Block_382754866e40f1c218935_91314117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_382754866e40f1c218935_91314117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container">
            <a 
                class="btn btn--primary" 
                href="#" 
                data-form="submit" 
                data-check-unsaved-changes
            >
                <span class="btn__text">Save Settings</span>
                <span class="btn__preloader preloader"></span>
            </a>
            <a 
                class="btn btn--default btn--outline" 
                href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@branding',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
            >
                <span class="btn__text">Cancel</span>
                <span class="btn__preloader preloader"></span>
            </a>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
}
