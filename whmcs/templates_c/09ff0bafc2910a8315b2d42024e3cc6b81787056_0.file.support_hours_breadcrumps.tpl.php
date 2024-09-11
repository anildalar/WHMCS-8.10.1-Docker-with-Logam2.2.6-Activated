<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:42:18
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff85a9c93e2_66685776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09ff0bafc2910a8315b2d42024e3cc6b81787056' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl',
      1 => 1700238186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff85a9c93e2_66685776 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="app-main__top">
    <div class="container">
        <div class="top">
            <div class="top__toolbar">
                <a 
                    class="btn btn--default btn--outline btn--icon btn--rounded btn--mob-link" 
                    <?php if ($_GET['exaction'] == 'item') {?>
                        href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
"
                    <?php } else { ?>
                        href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extensions',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                    <?php }?>    
                >
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 19L5 12L12 5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="top__content">
                <div class="top__title"><?php echo $_smarty_tpl->tpl_vars['smarty']->value;?>

                    <h1 class="top__title-text">
                        <ul class="top__title-text breadcrumb breadcrumb--angle-separator">
                            <?php if (!$_smarty_tpl->tpl_vars['name']->value && $_GET['exaction'] != 'item') {?><li class="breadcrumb__item"><a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extensions',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">Extensions</a></li><?php }?>
                            <?php if ($_GET['exaction'] != 'item') {?>
                                <li class="breadcrumb__item"><span class="breadcrumb__item-text">Support Hours</span>
                                    <?php if ($_GET['exaction'] != 'client_data_edit' && $_GET['exaction'] != 'client_show') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>
                                            <span class="label label--outline label--success m-l-2x">Active</span>
                                        <?php }?>
                                    <?php }?>
                                </li>
                            <?php } else { ?>
                                <li class="breadcrumb__item"><a class="breadcrumb__item-text" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">Support Hours</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("name")) {?>
                                    <li class="breadcrumb__item"><span class="breadcrumb__item-text"><?php echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("name");?>
</span></li>
                                <?php }?>
                            <?php }?>
                        </ul>
                    </h1>
                </div>
            </div>
            <div class="top__toolbar <?php if ($_GET['exaction'] == 'item') {?> hidden<?php }?>">
                <div class="has-dropdown">
                    <a class="btn btn--default btn--outline" href="" data-toggle="lu-dropdown" data-placement="bottom right">
                        <span class="btn__text">Actions</span>
                        <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-down" data-arrow-target></span>
                        <span class="btn__icon zmdi zmdi-more-vert is-hidden-mob-up" data-arrow-target></span>
                    </a>
                    <div class="dropdown" data-dropdown-menu>
                        <div class="dropdown__arrow" data-arrow></div>
                        <div class="dropdown__menu">
                            <ul class="nav">
                                <?php if ($_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>
                                    <li class="nav__item">
                                        <a class="nav__link" href="#" data-toggle="lu-modal" data-target="#deactivateModal">
                                            <span class="nav__link-icon ls ls-close"></span>
                                            <span class="nav__link-text">Deactivate</span>
                                        </a>
                                    </li>
                                <?php }?>
                                <li class="nav__item">
                                    <a class="nav__link" href="https://rsstudio.net/my-account/submitticket.php?step=2&deptid=2" target="_blank">
                                        <span class="nav__link-icon lm lm-denied"></span>
                                        <span class="nav__link-text">Report Bug</span>
                                    </a>
                                </li>
                                <li class="nav__divider"></li>
                                <li class="nav__item">
                                    <a class="nav__link" href="https://lagom.rsstudio.net/docs/extensions/support-hours/configuration/" target="_blank">
                                        <span class="nav__link-icon lm lm-book"></span>
                                        <span class="nav__link-text">Docs</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>
                    <a class="btn btn--primary" href="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getLink('activate');?>
">
                        <span class="btn__icon ls ls-check"></span>
                        <span class="btn__text">Activate</span>
                    </a>
                <?php }?>
            </div>
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
                        <i class="btn__icon lm lm-close"></i>
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

<div class="modal modal--hero" id="deactivateModal">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"></i>Deactivate Extension</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Deactivate will stop all functions provided by specific  Lagom theme <br> extension.</p>
                <div class="form-check m-b-0x"> 
                    <label class="m-b-0x">
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
        if($(el).is(':checked')){
            $('#deactivateSwitch').attr('href', '<?php echo $_smarty_tpl->tpl_vars['extension']->value->getLink('deactivate');?>
&delete=1')
        }else{
            $('#deactivateSwitch').attr('href', '<?php echo $_smarty_tpl->tpl_vars['extension']->value->getLink('deactivate');?>
')
        }
    }
    
<?php echo '</script'; ?>
>
<?php }
}
