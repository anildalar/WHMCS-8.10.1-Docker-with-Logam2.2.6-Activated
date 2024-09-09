<?php
/* Smarty version 3.1.48, created on 2024-09-09 04:16:08
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/promobanners/includes/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66de7688588d62_65669924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea2017a465669071c9426398ae55b8a41035a30d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/promobanners/includes/breadcrumb.tpl',
      1 => 1694173948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66de7688588d62_65669924 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #rs-module .top__toolbar .dropdown {
        display: none;
    }
</style>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['extension']->value->extensoin_path();?>
/css/style.css">
<div class="app-main__top">
    <div class="container">
        <div class="top">
            <div class="top__toolbar">
                <a class="btn btn--default btn--outline btn--icon btn--rounded btn--mob-link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@info',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 19L5 12L12 5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="top__content">
                <div class="top__title">
                    <ul class="top__title-text breadcrumb breadcrumb--angle-separator ">
                        <?php if (!$_smarty_tpl->tpl_vars['name']->value && $_smarty_tpl->tpl_vars['render']->value != 'extensions/promobanners/edit') {?><li class="breadcrumb__item"><a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extensions',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">Extensions</a></li><?php }?>
                        <li class="breadcrumb__item <?php if ($_smarty_tpl->tpl_vars['render']->value == 'extensions/promobanners/edit' || $_smarty_tpl->tpl_vars['render']->value == 'extensions/promobanners/add') {?> breadcrumb--truncate<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['render']->value == 'extensions/promobanners/edit' || $_smarty_tpl->tpl_vars['render']->value == 'extensions/promobanners/add') {?>
                                <a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">Promotion Manager</a>
                                <?php } else { ?>
                                <span class="breadcrumb__item-text">Promotion Manager</span>
                                <?php if ($_smarty_tpl->tpl_vars['extension']->value->isActive() && $_smarty_tpl->tpl_vars['render']->value != 'extensions/promobanners/add' && $_smarty_tpl->tpl_vars['render']->value != 'extensions/promobanners/edit') {?>
                                    <span class="label label--success label--outline m-l-2x">Active</span>
                                <?php }?>
                            <?php }?>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['name']->value) {?><li class="breadcrumb__item"><span class="breadcrumb__item-text"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span></li><?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['name']->value && $_smarty_tpl->tpl_vars['render']->value == 'extensions/promobanners/edit') {?><li class="breadcrumb__item">
                        <span class="breadcrumb__item-text">New slide</span>
                        </li><?php }?>
                        
                    </ul>
                </div>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['disableActions']->value) {?>
                <div class="top__toolbar">
                    <div class="has-dropdown">
                        <a class="btn btn--default btn--outline" href="" data-toggle="lu-dropdown" data-placement="bottom right">
                            <span class="btn__text">Actions</span>
                            <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-down" data-arrow-target></span>
                            <span class="btn__icon ls ls-caret is-hidden-mob-up" data-arrow-target></span>
                        </a>
                        <div class="dropdown" data-dropdown-menu>
                            <div class="dropdown__arrow" data-arrow></div>
                            <div class="dropdown__menu">
                                <ul class="nav">
                                    <?php if ($_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>
                                        <li class="nav__item">
                                            <a class="nav__link" href="#" data-toggle="lu-modal" data-target="#deactivateeModal">
                                                <span class="nav__link-icon ls ls-close"></span>
                                                <span class="nav__link-text">Deactivate</span>
                                            </a>
                                        </li>
                                    <?php } else { ?>
                                        <li class="nav__item">
                                            <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getLink('activate');?>
">
                                                <span class="nav__link-icon ls ls-check"></span>
                                                <span class="nav__link-text">Activate</span>
                                            </a>
                                        </li>
                                    <?php }?>
                                    <li class="nav__item">
                                        <a class="nav__link" href="https://rsstudio.net/my-account/submitticket.php?step=2&deptid=2">
                                            <span class="nav__link-icon lm lm-denied"></span>
                                            <span class="nav__link-text">Report Bug</span>
                                        </a>
                                    </li>
                                    <li class="nav__divider"></li>
                                    <li class="nav__item">
                                        <a class="nav__link" href="https://lagom.rsstudio.net/docs/extensions/promotion-manager.html" target="_blank">
                                            <span class="nav__link-icon lm lm-book"></span>
                                            <span class="nav__link-text">Docs</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>


<div class="modal" id="activateModal">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h4 class="top__title h6 m-b-0x">Before activate</h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon ls ls-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p class="p-1">Warning, enable backup before activation !</p>
                <div class="text-center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getLink('activate');?>
" class="btn btn--xlg btn--success">
                        <span class="btn__text">Activate</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="deactivateeDeleteModal">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger">Deactivate & Delete data Extension</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>This will delete all data about promotions, <br> are you sure you want to continue?</p>
            </div>
            <div class="modal__actions">
                <a href="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getLink('deactivate');?>
&delete" class="btn btn--danger">
                    <span class="btn__text">Yes, Deactivate</span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">No</span></button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="deactivateeModal">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger">Deactivate Extension</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Deactivate will stop all functions provided by specific  Lagom theme extension.</p>

                <div class="form-check m-b-0x">
                    <label>
                        <input onchange="deleteSwitch(this)" type="checkbox" name="deleteAll" id="delete" class="form-checkbox">
                        &nbsp;<span class="form-indicator"></span>
                        <span class="form-text" style="padding-top: 12px;">Clear all data used by this extension: images, files, database entries etc.  
                        <span class="font-weight-bold">Removed data cannot be restored!</span></span>
                    </label>
                </div>
            </div>
            <div class="modal__actions">
                <a id="deactivateSwitch" href="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getLink('deactivate');?>
" class="btn btn--danger">
                    <span class="btn__text">Yes, Deactivate</span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">No</span></button>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    
    function deleteSwitch(el) {
        if(jQuery(el).is(':checked')){
            console.log('yes');
            jQuery('#deactivateSwitch').attr('href' , '<?php echo $_smarty_tpl->tpl_vars['extension']->value->getLink('deactivate');?>
&delete ')
        }else{
            jQuery('#deactivateSwitch').attr('href' , '<?php echo $_smarty_tpl->tpl_vars['extension']->value->getLink('deactivate');?>
 ')
        }
    }
    
<?php echo '</script'; ?>
>
<?php }
}
