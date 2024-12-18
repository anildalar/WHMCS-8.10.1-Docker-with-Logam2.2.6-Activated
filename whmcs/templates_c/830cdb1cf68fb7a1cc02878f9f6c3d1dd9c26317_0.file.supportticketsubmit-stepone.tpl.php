<?php
/* Smarty version 3.1.48, created on 2024-12-15 01:20:26
  from '/var/www/html/templates/lagom2/core/pages/supportticketsubmit-stepone/boxes/supportticketsubmit-stepone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675e2eda03e062_23790813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '830cdb1cf68fb7a1cc02878f9f6c3d1dd9c26317' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/pages/supportticketsubmit-stepone/boxes/supportticketsubmit-stepone.tpl',
      1 => 1681727128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675e2eda03e062_23790813 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="section">
    <div class="section-header">
        <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketschoosedepartment'];?>
</h2>
    </div>
    <div class="section-body">
        <?php if ($_smarty_tpl->tpl_vars['departments']->value) {?>
            <div class="row row-eq-height">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department', false, 'num');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>
                    <div class="col-md-4">
                        <a href="<?php echo $_SERVER['PHP_SELF'];?>
?step=2&amp;deptid=<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
" class="panel panel-default panel-support panel-department-box">
                            <div class="panel-body">
                                <h5 class="support-title"><i class="lm lm-envelope"></i><?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>
</h5>
                                <?php if ($_smarty_tpl->tpl_vars['department']->value['description']) {?>
                                    <p class="support-desc"><?php echo $_smarty_tpl->tpl_vars['department']->value['description'];?>
</p>
                                <?php }?>
                            </div>
                            <div class="panel-footer">
                                 <span class="btn btn-sm btn-primary-faded btn-block"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navopenticket'];?>
</span>
                            </div>
                                                        <?php if ($_smarty_tpl->tpl_vars['supportHours']->value && file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/support-hours/departments-hours.tpl")) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/support-hours/departments-hours.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]) {?>
                                <div class="panel-footer">                       
                                    <?php if ($_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['canCreate']) {?>
                                        <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['message'];?>
</span>
                                        <p>
                                            <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['havePointsMsg'];?>
 <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['havePoints'];?>

                                        </p>
                                    <?php } else { ?>
                                        <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['message'];?>
</span>
                                        <p>
                                            <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['requiredPointsMsg'];?>
 <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['requiredPoints'];?>
 <br />
                                            <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['havePointsMsg'];?>
 <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['havePoints'];?>
 <br />
                                        </p>
                                    <?php }?>
                                </div>
                            <?php }?>
                                                    </a>    
                        
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <div class="message message-no-data">
                <div class="message-image">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ticket"), 0, true);
?>  
                </div>
                <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['nosupportdepartments'];?>
</h6>
            </div>
        <?php }?>
    </div>
</div><?php }
}
