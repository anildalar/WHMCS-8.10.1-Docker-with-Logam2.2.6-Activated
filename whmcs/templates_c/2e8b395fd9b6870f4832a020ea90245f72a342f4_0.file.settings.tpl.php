<?php
/* Smarty version 3.1.48, created on 2024-09-09 03:47:28
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66de6fd0161ac4_06496716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e8b395fd9b6870f4832a020ea90245f72a342f4' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/settings.tpl',
      1 => 1700238186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl' => 1,
    'file:adminarea/extensions/supporthours/includes/support_hours_tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 1,
  ),
),false)) {
function content_66de6fd0161ac4_06496716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72663478266de6fd01427a1_39150033', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44160055066de6fd0144526_19294583', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77101631166de6fd0145538_52041801', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159072442766de6fd0161360_98215831', "template-actions");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_72663478266de6fd01427a1_39150033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_72663478266de6fd01427a1_39150033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_44160055066de6fd0144526_19294583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_44160055066de6fd0144526_19294583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/support_hours_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_77101631166de6fd0145538_52041801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_77101631166de6fd0145538_52041801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="t-c__top top m-b-4x" data-top-search="" data-toggler-options="toggleClass: is-open;">
        <div class="top__toolbar">
            <h3 class="section__title">
                Support Hours
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['extension']->value->getDocs()->instances['support_hours']), 0, false);
?>
            </h3>
        </div>
        <div class="top__toolbar is-right">
            <div class="top__search input-group">
                <span class="input-group__icon lm lm-search"></span>
                <input class="form-control input-group__form-control table-search" data-toggler-options="toggleFocus: true; clearOnBlur: true;" value="" placeholder="Search..." id="table-search">
            </div>
            <a class="btn btn--primary " href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"item"));?>
">
                <i class="btn__icon lm lm-plus"></i>
                <span class="btn__text">Add New</span>
            </a>
        </div>
    </div>

    <div class="section">
        <div class="t-c__body t-c__body--boxed">
            <table class="t-c__table table mob-table--block dataTable no-footer" id="styles-table" data-services-table data-search-input="#table-search" data-clickable-rows="true" data-responsive="false">
                <colgroup>
                    <col class="table__col-9">                   
                    <col class="table__col-4">
                    <col class="table__col-4">
                    <col class="table__col-0">
                </colgroup>
                <thead>
                <tr role='row'>
                    <th class="sorting_asc" tabindex="0" aria-controls="pages-tableCMS" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending">
                        <span class="cell-name">Name</span>
                        <span class="sorting-icons-box">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"></path><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"></path></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg>
                    </span>
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="pages-tableCMS" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                        <span class="cell-name">Department</span>
                        <span class="sorting-icons-box">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"></path><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"></path></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg>
                    </span>
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="pages-tableCMS" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                        <span class="cell-name">Operating Hours</span>
                        <span class="sorting-icons-box">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"></path><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"></path></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg>
                    </span>
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="pages-tableCMS" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                        <span class="cell-name">Status</span>
                        <span class="sorting-icons-box">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"></path><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"></path></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg>
                    </span>
                    </th>
                    <th class="cell-actions no-sort"></th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($_smarty_tpl->tpl_vars['extension']->value->getExtensionWorkhours()) == 0) {?>
                                    <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getExtensionWorkhours(), 'workhours', false, 'k');
$_smarty_tpl->tpl_vars['workhours']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['workhours']->value) {
$_smarty_tpl->tpl_vars['workhours']->do_else = false;
?>
                        <tr>
                            <td class="cell-name">
                                <b> <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['workhours']->value->id,'exaction'=>"item"));?>
"><?php echo $_smarty_tpl->tpl_vars['workhours']->value->name;?>
</a></b>
                            </td>                           
                            <td class="cell-scheme cell-scheme--departments">
                                <?php if (is_array(json_decode($_smarty_tpl->tpl_vars['workhours']->value->departments)) && in_array("all",json_decode($_smarty_tpl->tpl_vars['workhours']->value->departments))) {?>
                                    All
                                <?php } else { ?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getSupportDepartments(), 'department');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>
                                        <?php if (is_array(json_decode($_smarty_tpl->tpl_vars['workhours']->value->departments)) && in_array($_smarty_tpl->tpl_vars['department']->value->id,json_decode($_smarty_tpl->tpl_vars['workhours']->value->departments))) {
echo $_smarty_tpl->tpl_vars['department']->value->name;?>
<span>,</span><?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>    
                            </td>
                            <td class="cell-scheme">
                                <?php if ($_smarty_tpl->tpl_vars['workhours']->value->all_day) {?>
                                    All day
                                <?php } else { ?>
                                    <?php echo date($_smarty_tpl->tpl_vars['extension']->value->getExtensionSettings('timeformat'),strtotime($_smarty_tpl->tpl_vars['workhours']->value->work_hours_begin));?>
 - <?php echo date($_smarty_tpl->tpl_vars['extension']->value->getExtensionSettings('timeformat'),strtotime($_smarty_tpl->tpl_vars['workhours']->value->work_hours_end));?>

                                <?php }?>
                            </td>
                            <td class="cell-scheme">
                                <?php if ($_smarty_tpl->tpl_vars['workhours']->value->activated) {?>
                                    <span class="label label--outline label--success">Active</span>
                                <?php } else { ?>
                                    <span class="label label--outline label--default">Disabled</span>
                                <?php }?>
                            </td>
                            <td class="cell-actions">
                                <div class="has-dropdown">
                                    <a class="btn btn--default btn--outline btn--xs" href="" data-toggle="lu-dropdown" data-placement="bottom right">
                                        <span class="btn__text is-hidden-mob-down">Actions</span>
                                        <span class="m-l-1x caret"></span>
                                    </a>
                                    <div class="dropdown" data-dropdown-menu>
                                        <div class="dropdown__arrow" data-arrow></div>
                                        <div class="dropdown__menu">
                                            <ul class="nav">
                                                <li class="nav__item">
                                                    <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['workhours']->value->id,'exaction'=>"item"));?>
">
                                                        <span class="nav__link-icon ls ls-pen"></span>
                                                        <span class="nav__link-text">Manage</span>
                                                    </a>
                                                </li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['workhours']->value->id,'exaction'=>"status"));?>
">
                                                        <?php if (!$_smarty_tpl->tpl_vars['workhours']->value->activated) {?>
                                                            <span class="nav__link-icon ls ls-check"></span>
                                                            <span class="nav__link-text">Activate</span>
                                                        <?php } else { ?>
                                                            <span class="nav__link-icon ls ls-close"></span>
                                                            <span class="nav__link-text">Deactivate</span>
                                                        <?php }?>
                                                    </a>
                                                </li>

                                                <li class="nav__item" style="min-height: 15px !important;">
                                                    <span style="margin:auto; background-color: lightgray;width: 100%; height: 1px"></span>
                                                </li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#modal-delete-item-<?php echo $_smarty_tpl->tpl_vars['workhours']->value->id;?>
" data-toggle="lu-modal">
                                                        <span class="nav__link-icon ls ls-trash"></span>
                                                        <span class="nav__link-text">Delete</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div id="modal-delete-item-<?php echo $_smarty_tpl->tpl_vars['workhours']->value->id;?>
" class="modal">
                            <div class="modal__dialog">
                                <div class="modal__content">
                                    <div class="modal__top top">
                                        <div class="top__title text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['extensions']['custom_code_modal']['title'];?>
</div>
                                        <div class="top__toolbar">
                                            <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                                                <i class="btn__icon lm lm-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal__body">
                                        <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['extensions']['custom_code_modal']['desc'];?>
</p>
                                    </div>
                                    <div class="modal__actions">
                                        <a class="btn btn--danger" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['workhours']->value->id,'exaction'=>"delete"));?>
">
                                            Delete
                                        </a>
                                        <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">Cancel</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_159072442766de6fd0161360_98215831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_159072442766de6fd0161360_98215831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "template-actions"} */
}
