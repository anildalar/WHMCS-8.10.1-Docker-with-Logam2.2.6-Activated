<?php
/* Smarty version 3.1.48, created on 2024-12-21 07:18:52
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/clientnotifications/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67666bdcdbea78_60242491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17e8476ec32dec9d052fcf56bd2fe4b9bdf98543' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/clientnotifications/list.tpl',
      1 => 1734760266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/clientnotifications/includes/breadcrumbs/breadcrumbs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 1,
  ),
),false)) {
function content_67666bdcdbea78_60242491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183419098167666bdcd9def0_68958701', "template-heading");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34465614767666bdcd9f208_10871807', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144094996767666bdcdbcd07_84955073', "template-scripts");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34444214967666bdcdbda44_37579985', "template-modals");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_183419098167666bdcd9def0_68958701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_183419098167666bdcd9def0_68958701',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/clientnotifications/includes/breadcrumbs/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_34465614767666bdcd9f208_10871807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_34465614767666bdcd9f208_10871807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="t-c__top top m-b-3x" data-top-search="" data-toggler-options="toggleClass: is-open;">
        <div class="top__toolbar">
            <h3 class="section__title">
                Instances
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['extension']->value->getDocs()->instances['instances']), 0, false);
?>
            </h3>
        </div>
        <div class="top__toolbar is-right">
            <div class="top__search input-group">
                <span class="input-group__icon lm lm-search"></span>
                <input class="form-control input-group__form-control table-search" data-toggler-options="toggleFocus: true; clearOnBlur: true;" value="" placeholder="Search..." id="table-search">
            </div>
            <button data-notification-import-btn class="btn btn--secondary <?php if (!class_exists("ZipArchive")) {?> is-disabled<?php }?>">
                <span class="btn__text">Import</span>
                <i class="btn__icon lm lm-download"></i>
            </button>
            <a class="btn btn--primary " href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"item"));?>
">
                <i class="btn__icon lm lm-plus"></i>
                <span class="btn__text">Add New</span>
            </a>
        </div>
    </div>

    <div class="section">
        <div class="t-c__body t-c__body--boxed">
            <form class="dataTables_wrapper no-footer is-hidden" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName()));?>
" method="POST">
                <table class="t-c__table table mob-table--block dataTable no-footer" id="styles-table" data-services-table data-search-input="#table-search" data-clickable-rows="true" data-responsive="false">
                    <colgroup>
                        <col class="table__col-12">
                        <col class="table__col-3">
                        <col class="table__col-3">
                        <col class="table__col-3">
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
                                <span class="cell-name">Start Date</span>
                                <span class="sorting-icons-box">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"></path><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"></path></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg>
                                </span>
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="pages-tableCMS" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                                <span class="cell-name">End Date</span>
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
                        <?php if (count($_smarty_tpl->tpl_vars['extension']->value->getClientNotifications()) == 0) {?>
                                                    <?php } else { ?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getClientNotifications(), 'style', false, 'k');
$_smarty_tpl->tpl_vars['style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('alertData', json_decode($_smarty_tpl->tpl_vars['style']->value->date));?>
                                <tr>
                                    <td class="cell-name">
                                        <b> <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['style']->value->id,'exaction'=>"item"));?>
"><?php echo $_smarty_tpl->tpl_vars['style']->value->name;?>
</a></b>
                                    </td>
                                    <td class="cell-scheme">
                                        <?php if ($_smarty_tpl->tpl_vars['alertData']->value->start) {
echo $_smarty_tpl->tpl_vars['style']->value->getFormattedStartDate();
} else { ?><span class="cell-empty-date">-</span><?php }?>
                                    </td>
                                    <td class="cell-scheme">
                                        <?php if ($_smarty_tpl->tpl_vars['alertData']->value->end) {
echo $_smarty_tpl->tpl_vars['style']->value->getFormattedEndDate();
} else { ?><span class="cell-empty-date">-</span><?php }?>
                                    </td>
                                    <td class="cell-scheme">
                                        <?php if ($_smarty_tpl->tpl_vars['style']->value->enabled) {?>
                                            <span class="label label--outline label--success">Published</span>
                                        <?php } else { ?>
                                            <span class="label label--outline label--default">Disabled</span>
                                        <?php }?>
                                    </td>
                                    <td class="cell-actions">
                                        <div class="has-dropdown">
                                            <a class="btn btn--default btn--outline btn--xs" href="" data-toggle="lu-dropdown" data-placement="bottom right" data-notification-table-actions data-notification-id="<?php echo $_smarty_tpl->tpl_vars['style']->value->id;?>
">
                                                <span class="btn__text is-hidden-mob-down">Actions</span>
                                                <span class="m-l-1x caret"></span>
                                            </a>
                                            <div class="dropdown" data-dropdown-menu>
                                                <div class="dropdown__arrow" data-arrow></div>
                                                <div class="dropdown__menu">
                                                    <ul class="nav">
                                                        <li class="nav__item">
                                                            <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['style']->value->id,'exaction'=>"item"));?>
">
                                                                <span class="nav__link-icon ls ls-pen"></span>
                                                                <span class="nav__link-text">Manage</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav__item">
                                                            <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['style']->value->id,'exaction'=>"status"));?>
">
                                                                <?php if (!$_smarty_tpl->tpl_vars['style']->value->enabled) {?>
                                                                    <span class="nav__link-icon ls ls-check"></span>
                                                                    <span class="nav__link-text">Activate</span>
                                                                <?php } else { ?>
                                                                    <span class="nav__link-icon ls ls-close"></span>
                                                                    <span class="nav__link-text">Deactivate</span>
                                                                <?php }?>
                                                            </a>
                                                        </li>
                                                        <li class="nav__item">
                                                            <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'duplicate','id'=>$_smarty_tpl->tpl_vars['style']->value->id));?>
">
                                                                <span class="nav__link-icon ls ls-copy"></span>
                                                                <span class="nav__link-text">Duplicate</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav__item" style="min-height: 15px !important;">
                                                            <span style="margin:auto; background-color: lightgray;width: 100%; height: 1px"></span>
                                                        </li>
                                                        <li class="nav__item">
                                                            <a class="nav__link" href="#modal-delete-client-notification" data-notification-remove-<?php echo $_smarty_tpl->tpl_vars['style']->value->id;?>
 data-href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['style']->value->id,'exaction'=>"delete"));?>
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
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </tbody>
                </table>
            </form>
            <div class="preloader-container" data-table-preloader>
                <div class="preloader"></div>
            </div>
        </div>
    </div>
    <form data-notification-import-form enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"import"));?>
" method="POST">
        <input data-notification-import-input type="file" name="import" class="hidden">
    </form>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-scripts"} */
class Block_144094996767666bdcdbcd07_84955073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_144094996767666bdcdbcd07_84955073',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->extensionAdminScript('clientnotifications','client-notifications.js');?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
/* {block "template-modals"} */
class Block_34444214967666bdcdbda44_37579985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_34444214967666bdcdbda44_37579985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="modal-delete-client-notification" data-notification-modal-remove class="modal">
        <div class="modal__dialog">
            <div class="modal__content">
                <div class="modal__top top">
                    <h4 class="top__title text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['extensions']['custom_code_modal']['title'];?>
</h4>
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
                    <a class="btn btn--danger" href="" data-notification-modal-remove-btn>
                        Confirm
                    </a>
                    <button class="btn btn--outline btn--default" data-dismiss="lu-modal" aria-label="Close">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-modals"} */
}
