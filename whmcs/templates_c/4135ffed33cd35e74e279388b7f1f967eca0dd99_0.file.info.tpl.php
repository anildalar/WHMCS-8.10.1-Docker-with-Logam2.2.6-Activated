<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:37:24
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/info/info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e407d4489209_48683443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4135ffed33cd35e74e279388b7f1f967eca0dd99' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/info/info.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/includes/alert/newMenuImport.tpl' => 1,
    'file:adminarea/includes/alert/integrationAvailable.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 4,
    'file:adminarea/info/includes/sidebar-logo-lagom-2.tpl' => 1,
    'file:adminarea/info/includes/sidebar-logo-lagom.tpl' => 1,
    'file:adminarea/info/includes/sidebar-lines.tpl' => 1,
    'file:adminarea/includes/modals/license-refresh.tpl' => 1,
  ),
),false)) {
function content_66e407d4489209_48683443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58475224766e407d4440366_43711954', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120694327166e407d4442999_74259316', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80392013366e407d4443484_15696105', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141758381766e407d44886a6_18107682', "template-modals");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_58475224766e407d4440366_43711954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_58475224766e407d4440366_43711954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_120694327166e407d4442999_74259316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_120694327166e407d4442999_74259316',
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
class Block_80392013366e407d4443484_15696105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_80392013366e407d4443484_15696105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <div class="block">

        
                <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->getAddonMessages()) {?>
            <?php echo $_smarty_tpl->tpl_vars['template']->value->license()->getAddonMessages();?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['isLagom2']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['newChangedAnyMenuVersion']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/alert/newMenuImport.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['integrationAllowed']->value)) && $_smarty_tpl->tpl_vars['integrationAllowed']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/alert/integrationAvailable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('integrationType'=>$_smarty_tpl->tpl_vars['integratonType']->value), 0, false);
?>
            <?php }?>
        <?php }?>    

        <div class="block__body m-r-3x max-w-lg">

                        <div class="section">
                <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['title'];?>
</h3>
                <div class="section__body panel">
                    <ul class="list list--info list--p-1x">

                                                <li class="list__item">
                            <span class="list__label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['theme_version'];?>
:</span>
                            <span class="list__value">
                                <b><?php echo $_smarty_tpl->tpl_vars['template']->value->getVersion();?>
</b>  

                                                                <?php $_smarty_tpl->_assignInScope('isStable', true);?>
                                <?php $_smarty_tpl->_assignInScope('checkVersion', explode("-",$_smarty_tpl->tpl_vars['template']->value->getVersion()));?>
                                
                                <?php $_smarty_tpl->_assignInScope('isNewVersionStable', true);?>
                                <?php $_smarty_tpl->_assignInScope('checkNewVersion', smarty_modifier_replace($_smarty_tpl->tpl_vars['template']->value->newVersion(),"Lagom ",''));?>
                                <?php $_smarty_tpl->_assignInScope('checkNewVersion', explode("-",$_smarty_tpl->tpl_vars['checkNewVersion']->value));?>

                                <?php if ((isset($_smarty_tpl->tpl_vars['checkNewVersion']->value[1])) && $_smarty_tpl->tpl_vars['checkNewVersion']->value[1] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('isNewVersionStable', false);?>
                                <?php }?>

                                <?php if ((isset($_smarty_tpl->tpl_vars['checkVersion']->value[1])) && $_smarty_tpl->tpl_vars['checkVersion']->value[1] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('isStable', false);?>
                                <?php }?>
                               
                                                                <?php if ($_smarty_tpl->tpl_vars['template']->value->newVersionAvailable() && $_smarty_tpl->tpl_vars['isNewVersionStable']->value && $_smarty_tpl->tpl_vars['isLagom2']->value && $_smarty_tpl->tpl_vars['compability']->value === true) {?>
                                    <span class="notification m-l-1x">
                                        <i class="notification__icon text-danger ls ls-exclamation-circle"></i> 
                                        <span class="notification__text text-danger">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['new_version'];?>
                                         </span>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['new_version_desc']),'popoverFooter'=>"<a class='btn btn--secondary btn--xs' href='https://rsstudio.net/my-account/' target='_blank'>".((string)$_smarty_tpl->tpl_vars['lang']->value['general']['download_now'])."</a>"), 0, false);
?>
                                    </span>
                                <?php }?>

                                                                <?php if ($_smarty_tpl->tpl_vars['compability']->value === false && $_smarty_tpl->tpl_vars['isStable']->value) {?>
                                    <span class="notification m-l-1x">
                                        <i class="notification__icon text-danger ls ls-exclamation-circle"></i> 
                                        <span class="notification__text text-danger">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['incompatible_version'];?>

                                        </span>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>"<b>Lagom ".((string)$_smarty_tpl->tpl_vars['template']->value->getVersion())."</b> ".((string)$_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['incompatible_version_desc_1'])." <b>WHMCS ".((string)$_smarty_tpl->tpl_vars['whmcsVersion']->value)."</b> ".((string)$_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['incompatible_version_desc_2']),'popoverFooter'=>"<a class='btn btn--secondary btn--xs' href='https://lagom.rsstudio.net/docs/common-problems/#i-m-using-incompatible-product-version' target='_blank'>".((string)$_smarty_tpl->tpl_vars['lang']->value['general']['learn_more'])."</a>"), 0, true);
?>
                                    </span>
                                <?php }?>
                            </span>
                        </li>

                                                <li class="list__item">
                            <span class="list__label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['registration_date'];?>
:</span>
                            <span class="list__value"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['template']->value->license()->details('regdate'),"%A, %B %e, %Y");?>
</span>
                        </li>

                                                <li class="list__item">
                            <span class="list__label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['next_due_date'];?>
:</span>
                            <span class="list__value">
                                <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->details('nextduedate') != '0000-00-00') {?>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['template']->value->license()->details('nextduedate'),"%A, %B %e, %Y");?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['lifetime_license'];?>

                                <?php }?>
                            </span>
                        </li>

                                                <li class="list__item">
                            <span class="list__label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['first_payment'];?>
:</span>
                            <span class="list__value">
                                <?php echo $_smarty_tpl->tpl_vars['template']->value->license()->details('first_payment_amount');?>

                            </span>
                        </li>

                                                <li class="list__item">
                            <span class="list__label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['recurring'];?>
:</span>
                            <span class="list__value">
                                <?php echo $_smarty_tpl->tpl_vars['template']->value->license()->details('recuring_amount');?>

                            </span>
                        </li>

                                                <li class="list__item">
                            <span class="list__label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['payment_method'];?>
:</span>
                            <span class="list__value">
                                <?php echo $_smarty_tpl->tpl_vars['template']->value->license()->details('payment_method');?>

                            </span>
                        </li>

                                                <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->getLicenseKey() && $_smarty_tpl->tpl_vars['template']->value->license()->details('service_status') == "Active") {?>
                            <li class="list__item">
                                <span class="list__label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['support_access'];?>
:</span>
                                <span class="list__value d-flex">    
                                    <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->details('nextduedate') != '0000-00-00' && $_smarty_tpl->tpl_vars['template']->value->license()->details('nextduedate') != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('diff', strtotime(smarty_modifier_date_format($_smarty_tpl->tpl_vars['template']->value->license()->details('nextduedate')))-time());?>
                                        <?php $_smarty_tpl->_assignInScope('diff', ($_smarty_tpl->tpl_vars['diff']->value/(60*60*24))+1);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('diff', false);?>    
                                    <?php }?>
                                    <?php if (sprintf("%d",$_smarty_tpl->tpl_vars['diff']->value) >= 0 || !$_smarty_tpl->tpl_vars['diff']->value) {?>
                                        <span class="label label--success label--outline">                                        
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>

                                        </span>
                                    <?php } else { ?>
                                        <span class="label label--danger label--outline">                                        
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['expired'];?>

                                        </span>

                                    <?php }?>
                                    
                                                                        
                                    <?php if ($_smarty_tpl->tpl_vars['diff']->value && sprintf("%d",$_smarty_tpl->tpl_vars['diff']->value) < 31 && sprintf("%d",$_smarty_tpl->tpl_vars['diff']->value) >= 0) {?>
                                        <span class="notification m-l-1x">
                                            <i class="notification__icon text-danger ls ls-exclamation-circle"></i> 
                                            <span class="notification__text text-danger">
                                                <?php if (sprintf("%d",$_smarty_tpl->tpl_vars['diff']->value) == 0) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['expire_today'];?>

                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['expire_in'];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['diff']->value);?>
 <?php if (sprintf("%d",$_smarty_tpl->tpl_vars['diff']->value) == 1) {
echo $_smarty_tpl->tpl_vars['lang']->value['general']['day'];
} else {
echo $_smarty_tpl->tpl_vars['lang']->value['general']['days'];
}?>
                                                <?php }?>
                                            </span>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>"<p>".((string)$_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['support_access_expire_desc'])."</p><p>".((string)$_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['support_access_pay_invoice'])."</p>",'popoverFooter'=>"<a class='btn btn--secondary btn--xs' href='https://lagom.rsstudio.net/docs/common-problems.html#access-into-theme-updates-and-support-has-exired-or-expiring-soon'' target='_blank'>".((string)$_smarty_tpl->tpl_vars['lang']->value['general']['learn_more'])."</a>"), 0, true);
?>
                                        </span>
                                           
                                                                        <?php } elseif ($_smarty_tpl->tpl_vars['diff']->value && sprintf("%d",$_smarty_tpl->tpl_vars['diff']->value) < 0) {?>
                                        <span class="notification">
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>"<p>".((string)$_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['support_access_expired_desc'])."</p><p>".((string)$_smarty_tpl->tpl_vars['lang']->value['info']['theme_information']['support_access_pay_invoice'])."</p>",'popoverFooter'=>"<a class='btn btn--secondary btn--xs' href='https://lagom.rsstudio.net/docs/common-problems.html#access-into-theme-updates-and-support-has-exired-or-expiring-soon' target='_blank'>".((string)$_smarty_tpl->tpl_vars['lang']->value['general']['learn_more'])."</a>"), 0, true);
?>
                                        </span>
                                    <?php }?>
                                </span>
                            </li> 
                        <?php }?>
                    <ul>
                </div>
            </div>

                        <div class="section">
                <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['license_key']['title'];?>
</h3>
                <div class="section__body panel" data-license-container>   
                    
                                        <form class="max-w-md" data-license-form action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@info',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" method="POST">
                        <div class="form-group" data-license-form-group>
                            <div class="input-group input-group--lg">
                                <i class="lm lm-tag m-l-2x"></i>
                                <input 
                                    name="licenseKey" 
                                    class="form-control form-control--lg p-l-2x" 
                                    value="<?php if ($_smarty_tpl->tpl_vars['template']->value->license()->details('license_status') != '') {
echo $_smarty_tpl->tpl_vars['template']->value->license()->getLicenseKey();
}?>" 
                                    placeholder="" 
                                    data-license-input="<?php if ($_smarty_tpl->tpl_vars['template']->value->license()->details('license_status') != '') {
echo $_smarty_tpl->tpl_vars['template']->value->license()->getLicenseKey();
}?>" 
                                    data-license-template="<?php if ($_smarty_tpl->tpl_vars['template']->value->isActive()) {?>active<?php } else { ?>inactive<?php }?>"
                                    data-license-valid="<?php if ($_smarty_tpl->tpl_vars['template']->value->license()->getAddonMessages()) {?>false<?php } else { ?>true<?php }?>"
                                >
                                <button type="button" class="input-group__btn btn btn--lg btn--secondary" data-license-btn>
                                    <span class="btn__text">
                                        <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->getLicenseKey() && $_smarty_tpl->tpl_vars['template']->value->license()->details('license_status') != '') {?>
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['refresh'];?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['activate'];?>

                                        <?php }?>    
                                    </span>
                                    <span class="btn__preloader preloader"></span>
                                </button>
                            </div>
                            <div class="form-feedback form-feedback--icon form-feedback-danger is-hidden" data-license-feedback>License cannot be empty!</div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->hasInputError()) {?>
                            <div class="form-feedback form-feedback-lg form-feedback--icon <?php if (mb_strtolower($_smarty_tpl->tpl_vars['template']->value->license()->details('status'), 'UTF-8') == "suspended") {?>form-feedback-danger<?php } else { ?>form-feedback-info<?php }?>">
                                <span><?php echo $_smarty_tpl->tpl_vars['template']->value->license()->getInputError();?>
</span>
                            </div>
                        <?php }?>
                    </form>    

                            
                    <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->getLicenseKey() && $_smarty_tpl->tpl_vars['template']->value->license()->details('license_status') != '') {?>
                        <ul class="list list--info list--p-1x ">
                            <li class="list__item">
                                <span class="list__label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info']['license_key']['license_status'];?>
:</span>
                                <span class="list__value">    
                                    <span class="label <?php if ($_smarty_tpl->tpl_vars['template']->value->license()->details('license_status') == "Active") {?>label--success<?php } else { ?>label--danger<?php }?> label--outline"><?php if ($_smarty_tpl->tpl_vars['template']->value->license()->details('license_status') == '') {?>Invalid<?php } else {
echo $_smarty_tpl->tpl_vars['template']->value->license()->details('license_status');
}?></span>
                                </span>
                            </li>                           
                        </ul>
                    <?php }?>
                </div>
            </div>
        </div>

                <div class="block__sidebar info-sidebar-block">
            <div class="widget widget--lg">
                <a class="widget__media has-overlay info-sidebar-widget">
                    <?php if (intval($_smarty_tpl->tpl_vars['template']->value->getVersion()) >= 2) {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/info/includes/sidebar-logo-lagom-2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/info/includes/sidebar-logo-lagom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/info/includes/sidebar-lines.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </a>
            </div>	
        </div>
    </div>    
<?php
}
}
/* {/block "template-content"} */
/* {block "template-modals"} */
class Block_141758381766e407d44886a6_18107682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_141758381766e407d44886a6_18107682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/license-refresh.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-modals"} */
}
