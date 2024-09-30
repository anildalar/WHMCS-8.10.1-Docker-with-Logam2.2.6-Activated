<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:52:02
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/customcode/includes/breadcrumbs/breadcrumbs-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7dfd2de31a1_02399497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc0a82009b15c33a4b63d53c400f5d8435ac4dcc' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/customcode/includes/breadcrumbs/breadcrumbs-item.tpl',
      1 => 1700234028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f7dfd2de31a1_02399497 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="app-main__top">
    <div class="container">
        <div class="top">
            <div class="top__toolbar">
                <a class="btn btn--default btn--outline btn--icon btn--rounded btn--mob-link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 19L5 12L12 5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                
                </a>
            </div>
            <div class="top__content">
                <div class="top__title">
                    <h1 class="top__title-text">
                        <ul class="top__title-text breadcrumb breadcrumb--angle-separator">
                            <li class="breadcrumb__item"><a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
" class="breadcrumb__item-text">Custom Code Manager</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("name")) {?>
                                <li class="breadcrumb__item"><span class="breadcrumb__item-text"><?php echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("name");?>
</span></li>
                            <?php } else { ?>
                                <li class="breadcrumb__item"><span class="breadcrumb__item-text">Add New</span></li>    
                            <?php }?>
                        </ul>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
