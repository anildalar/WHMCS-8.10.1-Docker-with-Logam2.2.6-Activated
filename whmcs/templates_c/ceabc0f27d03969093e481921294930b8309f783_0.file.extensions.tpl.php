<?php
/* Smarty version 3.1.48, created on 2024-09-24 06:17:35
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/extensions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f2597f1e11f2_90859520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceabc0f27d03969093e481921294930b8309f783' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/extensions.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 2,
  ),
),false)) {
function content_66f2597f1e11f2_90859520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38669395566f2597f1abe51_56849172', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58921826566f2597f1b00d2_05898813', "template-tabs");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43506755566f2597f1b1046_42263378', "template-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_38669395566f2597f1abe51_56849172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_38669395566f2597f1abe51_56849172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_58921826566f2597f1b00d2_05898813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_58921826566f2597f1b00d2_05898813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_43506755566f2597f1b1046_42263378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_43506755566f2597f1b1046_42263378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

    <div class="section">
        <div class="t-c mob-t-c--full" data-table-container data-table-check-container>
            <div class="t-c__top top" data-top-search data-toggler-options="toggleClass: is-open;">
                <div class="top__toolbar">
                    <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['extensions']['title'];
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['extensions']['extensions']), 0, false);
?></h3>
                    
                </div>

                                <div class="top__toolbar is-right">

                                        <div class="top__search input-group">
                        <span class="input-group__icon lm lm-search"></span>
                        <input class="form-control input-group__form-control table-search" data-toggler-options="toggleFocus: true; clearOnBlur: true;" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['search'];?>
..." id="table-search" placeholder="Search">
                    </div>

                                        <a class="btn btn--secondary" href="https://lagom.rsstudio.net/extensions" target="_blank">
                        <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['explore_marketplace'];?>
</span>
                        <span class="btn__icon ls ls-share"></span>
                    </a>

                                        <div class="top__filter has-dropdown is-hidden" data-filter-table="#extensions-table">
                        <button class="btn btn--default btn--outline btn--mob-link" type="button" data-toggle="filter-dropdown" data-placement="bottom right">
                            <span class="btn__label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['status'];?>
: </span>
                            <span class="btn__text">
                                <span class="status" data-filter-icon><span class="status__text" data-filter><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['all'];?>
</span></span>
                            </span>
                            <span class="btn__icon btn__icon-arrow ls ls-caret" data-arrow-target></span>
                        </button>
                        <div class="dropdown" data-dropdown-menu>
                            <div class="dropdown__arrow" data-arrow></div>
                            <div class="dropdown__menu" data-filter-table="#extensions-table">
                                <ul class="nav nav--sm">
                                    <li class="nav__header">
                                        <span class="nav__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['filter_by_status'];?>
</span>
                                    </li>
                                    <li class="nav__item is-active" data-value="All">
                                        <a class="nav__link" href="#">
                                            <span class="nav__link-icon status status--"></span>
                                            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['all'];?>
</span>
                                            <span class="badge badge--outline"></span>
                                        </a>
                                    </li>
                                    <li class="nav__item" data-value="Disabled"  data-status-class="error">
                                        <a class="nav__link" href="#">
                                            <span class="nav__link-icon status status--closed"></span>
                                            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['disabled'];?>
</span>
                                            <span class="badge badge--outline"></span>
                                        </a>
                                    </li>
                                    <li class="nav__item" data-value="Active"  data-status-class="active">
                                        <a class="nav__link" href="#">
                                            <span class="nav__link-icon status status--active"></span>
                                            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</span>
                                            <span class="badge badge--outline"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                
            <div class="t-c__body t-c__body--boxed">
                <table class="t-c__table table mob-table--block" id="extensions-table" data-services-table data-search-input="#table-search" data-order='[3, "asc"]' data-clickable-rows="true" data-responsive="false">
                    <colgroup>
                        <col class="table__col-15">
                        <col class="table__col-5">
                        <col class="table__col-4">
                        <col class="table__col-0">
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="cell-name">
                                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['name'];?>
</span>
                                <span class="sorting-icons-box">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"/><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"/></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"/></clipPath></defs></svg>
                                </span>
                            </th>
                            <th class="cell-version">
                                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['version'];?>
</span>
                               <span class="sorting-icons-box">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"/><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"/></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"/></clipPath></defs></svg>
                                </span>
                            </th>
                            <th class="cell-status filter">
                                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['status'];?>
</span>
                                <span class="sorting-icons-box">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"/><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"/></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"/></clipPath></defs></svg>
                                </span>
                            </th>
                            <th class="cell-actions no-sort"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($_smarty_tpl->tpl_vars['template']->value->getExtensions()) == 0) {?>
                                                    <?php } else { ?>                            
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getExtensions(), 'extension', false, 'k');
$_smarty_tpl->tpl_vars['extension']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['extension']->value) {
$_smarty_tpl->tpl_vars['extension']->do_else = false;
?>
                                                                <tr>

                                        
                                    <td class="cell-name">
                                        <div class="rail">
                                            <div class="content-extension">
                                                <a <?php if ($_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'info'));?>
"<?php }?>><strong><?php echo $_smarty_tpl->tpl_vars['extension']->value->getName();?>
</strong></a>
                                                <p class="extensions-description"><?php echo $_smarty_tpl->tpl_vars['extension']->value->getDescription();?>
</p>
                                            </div>
                                        </div>
                                    </td>

                                        
                                    <td class="cell-version">
                                        <strong>v<?php echo $_smarty_tpl->tpl_vars['extension']->value->getVersion();?>
</strong>
                                      
                                                                                <?php $_smarty_tpl->_assignInScope('isStable', true);?>
                                        <?php $_smarty_tpl->_assignInScope('checkVersion', explode("-",$_smarty_tpl->tpl_vars['template']->value->getVersion()));?>
                                       
                                        <?php if ($_smarty_tpl->tpl_vars['checkVersion']->value[1] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('isStable', false);?>
                                        <?php }?>
                                        
                                          
                                        <?php if ($_smarty_tpl->tpl_vars['extensions']->value->extensions[$_smarty_tpl->tpl_vars['k']->value]->newVersionAvailable && $_smarty_tpl->tpl_vars['extensions']->value->extensions[$_smarty_tpl->tpl_vars['k']->value]->newVersionAvailable != $_smarty_tpl->tpl_vars['extension']->value->getVersion() && $_smarty_tpl->tpl_vars['isStable']->value) {?>
                                            <span class="notification">
                                                <i class="notification__icon text-danger ls ls-exclamation-circle"></i> 
                                                <span class="notification__text text-danger">
                                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['new_version'];?>
                                                 </span>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['lang']->value['extensions']['new_version_desc_1'])." <b>“".((string)$_smarty_tpl->tpl_vars['extension']->value->getName())."”</b> ".((string)$_smarty_tpl->tpl_vars['lang']->value['extensions']['new_version_desc_2']),'popoverFooter'=>"<a class='btn btn--secondary btn--xs' href='https://rsstudio.net/my-account/' target='_blank'>".((string)$_smarty_tpl->tpl_vars['lang']->value['general']['download_now'])."</a>"), 0, true);
?>
                                            </span>
                                        <?php }?>
                                        
                                            
                                        <?php if ($_smarty_tpl->tpl_vars['extensions']->value->extensions[$_smarty_tpl->tpl_vars['k']->value]->compability === false && $_smarty_tpl->tpl_vars['isStable']->value && smarty_modifier_replace($_smarty_tpl->tpl_vars['template']->value->getVersion(),".",'') > '169') {?>
                                            <span class="notification">
                                                <i class="notification__icon text-danger ls ls-exclamation-circle"></i> 
                                                <span class="notification__text text-danger">
                                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['incompatible_version'];?>

                                                </span>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>"<b>".((string)$_smarty_tpl->tpl_vars['extension']->value->getName())." ".((string)$_smarty_tpl->tpl_vars['extension']->value->getVersion())."</b> ".((string)$_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['incompatible_version_desc_1'])." <b>Lagom WHMCS Client Theme ".((string)$_smarty_tpl->tpl_vars['template']->value->getVersion())."</b> ".((string)$_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['incompatible_version_desc_2'])." ",'popoverFooter'=>"<a class='btn btn--secondary btn--xs' href='https://lagom.rsstudio.net/docs/extensions/common-problems.html#i-m-using-incompatible-extension-version' target='_blank'>".((string)$_smarty_tpl->tpl_vars['lang']->value['general']['learn_more'])."</a>"), 0, true);
?>
                                            </span>
                                        <?php }?>

                                       
                                    <td class="cell-status">
                                        <div class="status">
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>
                                                <label class="label label--success label--outline"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</label>
                                            <?php } else { ?>
                                                <label class="label label--default label--outline is-disabled"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['disabled'];?>
</label>
                                            <?php }?>
                                        </div>
                                    </td>

                                       
                                    <td class="cell-actions">
                                        <?php if ($_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
" class="btn btn--xs btn--default btn--outline"><span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['manage'];?>
</span></a>
                                        <?php } else { ?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'info'));?>
" class="btn btn--xs btn--default btn--outline"><span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['manage'];?>
</span></a>
                                        <?php }?>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </tbody>
                </table>
                <div class="preloader-container is-hidden" data-table-preloader>
                    <div class="preloader"></div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
}
/* {/block "template-content"} */
}
