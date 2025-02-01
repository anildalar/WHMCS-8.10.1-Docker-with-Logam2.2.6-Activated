<?php
/* Smarty version 3.1.48, created on 2025-01-04 00:56:12
  from '/var/www/html/templates/lagom2/supportticketsubmit-stepone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778872c6f85b9_48923337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bdb22e647a16d97423cb780057c77792c148996' => 
    array (
      0 => '/var/www/html/templates/lagom2/supportticketsubmit-stepone.tpl',
      1 => 1681745128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778872c6f85b9_48923337 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="section">
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketschoosedepartment'];?>
</h2>
        </div>
        <div class="section-body">
            <?php if ($_smarty_tpl->tpl_vars['departments']->value) {?>
                <div class="list-group">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department', false, 'num');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>
                        <a class="list-group-item has-icon" href="<?php echo $_SERVER['PHP_SELF'];?>
?step=2&amp;deptid=<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
">
                            <i class="list-group-item-icon lm lm-envelope"></i>
                            <div class="list-group-item-body <?php if ($_smarty_tpl->tpl_vars['supportHours']->value) {?>list-group-support-hours<?php }?>">
                                <div class="list-group-item-heading">
                                    <?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>
 
                                                                                <?php if ($_smarty_tpl->tpl_vars['supportHours']->value && file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/support-hours/departments-hours.tpl")) {?>
                                            <div class="support-time-box d-flex">
                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/support-hours/departments-hours.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </div>
                                        <?php }?>
                                        
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]) {?>  
                                            <?php if ($_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['canCreate']) {?>
                                                <span class="label label-success m-l-1x"><?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['message'];?>
</span>
                                            <?php } else { ?>
                                                <span class="label label-danger m-l-1x"><?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['message'];?>
</span>
                                            <?php }?>
                                        <?php }?>
                                                                        </div>

                                <?php if ($_smarty_tpl->tpl_vars['department']->value['description']) {?>
                                    <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['department']->value['description'];?>
</p>
                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]) {?>                      
                                    <?php if ($_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['canCreate']) {?>
                                        <p class="list-group-item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['havePointsMsg'];?>
 <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['havePoints'];?>

                                        </p>
                                    <?php } else { ?>
                                        <p class="list-group-item-text">
                                            <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['requiredPointsMsg'];?>
 <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['requiredPoints'];?>
 <br />
                                            <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['havePointsMsg'];?>
 <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value[$_smarty_tpl->tpl_vars['num']->value]['havePoints'];?>
 <br />
                                        </p>
                                    <?php }?>
                                <?php }?>
                                                            </div>
                        </a>    
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
    </div>
<?php }
}
}
