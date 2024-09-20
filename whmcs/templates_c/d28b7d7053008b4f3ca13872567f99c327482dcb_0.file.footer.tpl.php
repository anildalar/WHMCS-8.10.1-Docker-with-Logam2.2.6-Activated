<?php
/* Smarty version 3.1.48, created on 2024-09-20 04:01:33
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ecf39de59d86_58769902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd28b7d7053008b4f3ca13872567f99c327482dcb' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/footer.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/modals/change-display-rule.tpl' => 1,
    'file:adminarea/includes/modals/mismatch-system-url.tpl' => 1,
  ),
),false)) {
function content_66ecf39de59d86_58769902 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['extension']->value)) && $_smarty_tpl->tpl_vars['extension']->value) {?>
    <div class="modal modal--xlg" id="emailPrev">
        <div class="modal__dialog">
            <div class="modal__content">
                <div class="modal__top top">
                    <h4 class="top__title h6 m-b-0x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['email_preview']['title'];?>
</h4>
                    <div class="top__toolbar">
                        <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                            <i class="btn__icon lm lm-close"></i>
                        </button>
                    </div>
                </div>
                <div class="modal__body p-0x">
                    <iframe id="emailPreviewIframe" width="100%" height="100%" src="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getPreviewLink();?>
" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if (\RSThemes\Helpers\ContentChecker::checkCmsInstalled()) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/change-display-rule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flash']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['message']->value['message']) {?>
        <span class="hidden" data-message data-title="<?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "success") {?>Success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "danger") {?>Error<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "info") {?>Info<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "warning") {?>Warning<?php }?>" data-status="<?php echo $_smarty_tpl->tpl_vars['message']->value['type'];?>
" data-body="<?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
"></span>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((($_smarty_tpl->tpl_vars['template']->value->checkWhmcssUrl() !== null )) && is_array($_smarty_tpl->tpl_vars['template']->value->checkWhmcssUrl())) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->checkWhmcssUrl(), 'warningUrl', false, 'key');
$_smarty_tpl->tpl_vars['warningUrl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['warningUrl']->value) {
$_smarty_tpl->tpl_vars['warningUrl']->do_else = false;
?>
       <?php $_smarty_tpl->_assignInScope('warningMainUrl', $_smarty_tpl->tpl_vars['warningUrl']->value['url']);?>
       <?php $_smarty_tpl->_assignInScope('warningSystemUrl', $_smarty_tpl->tpl_vars['warningUrl']->value['systemUrl']);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/mismatch-system-url.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('warningUrl'=>$_smarty_tpl->tpl_vars['warningMainUrl']->value,'warningSystemUrl'=>$_smarty_tpl->tpl_vars['warningSystemUrl']->value), 0, false);
}?>


<div class="alert alert--success alert--outline alert--float alert--border-left has-icon alert--successfully-top-fixed" id="ajaxAlert">
    <div class="alert__body"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['changes_saved'];?>
</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('vendor.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['template']->value->getRSThemesVersion();?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('core.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['template']->value->getRSThemesVersion();?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('rsthemes.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['template']->value->getRSThemesVersion();?>
"><?php echo '</script'; ?>
>
<?php if ((($_smarty_tpl->tpl_vars['template']->value->checkWhmcssUrl() !== null )) && is_array($_smarty_tpl->tpl_vars['template']->value->checkWhmcssUrl())) {?>
    
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $('#modal-mismatch-system-url').modal('show');
               
                $('#modal-mismatch-system-url [data-close-modal]').on('click', function(){
                     $('#modal-mismatch-system-url').modal('hide'); 
                })
            });
        <?php echo '</script'; ?>
>
    
<?php }
}
}
