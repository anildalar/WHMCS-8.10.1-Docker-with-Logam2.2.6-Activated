<?php
/* Smarty version 3.1.48, created on 2025-01-15 10:59:28
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/display-rule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678795107231a8_79414500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd64a65f9cdd9e36045f45c1aed698b4bafa961b9' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/display-rule.tpl',
      1 => 1730150158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
  ),
),false)) {
function content_678795107231a8_79414500 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-pane <?php if ($_GET['settingsTab'] == 'display' || !(isset($_GET['settingsTab']))) {?> is-active <?php }?>" id="settings-display">
    <div class="t-c__top top" data-top-search
         data-toggler-options="toggleClass: is-open;">
        <div class="top__toolbar">
            <h3 class="section__title">Theme Display <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['settings']['theme_display']), 0, false);
?></h3>
        </div>
    </div>
    <div class="t-c__body t-c__body--boxed">
        <table class="t-c__table table mob-table--block" id="settings-table" data-services-table
               data-search-input="#table-elements" data-order='[0, "asc"]'
               data-clickable-rows="true" data-responsive="false">
            <colgroup>
                <col class="table__col-14">
                <col class="table__col-4">
                <col class="table__col-2">
            </colgroup>
            <thead>
            <tr>
                <th class="cell-title">
                    <span>Name</span>
                    <span class="sorting-icons-box">
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"/><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"/></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"/></clipPath></defs></svg>
                                                    </span>
                </th>
                <th class="cell-typet">
                    <span>Status</span>
                    <span class="sorting-icons-box">
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"/><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"/></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"/></clipPath></defs></svg>
                                                    </span>
                </th>
                <th class="cell-actions no-sort"></th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displays']->value, 'display');
$_smarty_tpl->tpl_vars['display']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['display']->value) {
$_smarty_tpl->tpl_vars['display']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['template']->value->getMainName() != 'lagom2' || !\RSThemes\Helpers\ContentChecker::checkCmsInstalled()) {?>
                    <?php if ($_smarty_tpl->tpl_vars['display']->value->name == "CMS") {?>
                        <?php continue 1;?>
                    <?php }?>
                <?php }?>
                <tr>
                    <td class="cell-title">
                        <div class="content-name">
                            <strong><?php echo $_smarty_tpl->tpl_vars['display']->value->name;?>
</strong>
                        </div>
                    </td>
                    <td class="cell-status">
                        <?php if (($_smarty_tpl->tpl_vars['display']->value->active)) {?>
                            <span class="label label--success label--outline">Active</span>
                        <?php } else { ?>
                            <span class="label label--danger is-disabled label--outline">Disabled</span>
                        <?php }?>
                    </td>
                    <td class="cell-actions">
                        <div class="has-dropdown">
                            <a class="btn btn--default btn--outline btn--xs" href=""
                               data-toggle="lu-dropdown" data-placement="bottom right">
                                <span class="btn__text is-hidden-mob-down">Actions</span>
                                <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-down"
                                      data-arrow-target></span>
                                <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-up"
                                      data-arrow-target></span>
                            </a>
                            <div class="dropdown" data-dropdown-menu>
                                <div class="dropdown__arrow" data-arrow></div>
                                <div class="dropdown__menu">
                                    <ul class="nav">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display']->value->rules, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                            <li class="nav__item">
                                                <a class="nav__link"
                                                   href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Display@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'ruleId'=>$_smarty_tpl->tpl_vars['rule']->value->id));?>
">
                                                    <span class="nav__link-icon ls ls-<?php echo $_smarty_tpl->tpl_vars['rule']->value->icon;?>
"></span>
                                                    <span class="nav__link-text">Manage <?php echo $_smarty_tpl->tpl_vars['rule']->value->name;?>
 rules</span>
                                                </a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <li class="nav__item"
                                            style="min-height: 15px !important;">
                                            <span style="margin:auto; background-color: lightgray;width: 100%; height: 1px"></span>
                                        </li>
                                        <li class="nav__item ">
                                            <a class="nav__link <?php if ($_smarty_tpl->tpl_vars['display']->value->active) {?> is-disabled <?php }?>"
                                               href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Display@setActiveDisplay',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'displayId'=>$_smarty_tpl->tpl_vars['display']->value->id,'breadcrumb'=>true,'tab'=>$_GET['action']));?>
">
                                                <span class="nav__link-icon ls ls-check"></span>
                                                <span class="nav__link-text">Activate</span>
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
            </tbody>
        </table>
    </div>
</div><?php }
}
