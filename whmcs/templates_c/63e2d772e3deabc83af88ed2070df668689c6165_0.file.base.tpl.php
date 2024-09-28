<?php
/* Smarty version 3.1.48, created on 2024-09-28 02:07:04
  from '/var/www/html/modules/addons/AdvancedBilling/templates/admin/pages/settings/extensions/base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f764c830a178_03893254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63e2d772e3deabc83af88ed2070df668689c6165' => 
    array (
      0 => '/var/www/html/modules/addons/AdvancedBilling/templates/admin/pages/settings/extensions/base.tpl',
      1 => 1697014410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f764c830a178_03893254 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-primary">
    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Each extension is configured per product, therefore you can use different sets of extensions according to your needs');?>
.</div>
</div>
    
<?php if ($_smarty_tpl->tpl_vars['licenseError']->value) {?>
<div id="alertMessage" class="alert alert-danger">
   <?php echo $_smarty_tpl->tpl_vars['licenseError']->value;?>

</div>
<?php }?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Available Extensions');?>
</h3>
    </div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Extension');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Type');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Actions');?>
</td>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extensions']->value, 'extension');
$_smarty_tpl->tpl_vars['extension']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extension']->value) {
$_smarty_tpl->tpl_vars['extension']->do_else = false;
?>
                <tr>
                    <td>
                        <b><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['extension']->value->friendlyName);?>
</b><br> 
                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['extension']->value->description);?>

                        
                    </td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['extension']->value->type;?>
</td>
                    <td>
                        <input id="statusSwitcher" data-module="<?php echo $_smarty_tpl->tpl_vars['extension']->value->name;?>
" class="bootstrap-switcher" data-on-text="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Enabled');?>
" data-off-text="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Disabled');?>
" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['extension']->value->enabled) {?>checked<?php }?>/>
                        <a data-module="<?php echo $_smarty_tpl->tpl_vars['extension']->value->name;?>
"  class="configureBtn btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Configure');?>
</a>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
  </div>
</div>
        
<div id="Modal"></div>
          
        

    <?php echo '<script'; ?>
 type="text/javascript">
        $(".bootstrap-switcher").bootstrapSwitch();
        $(".configureBtn").click(function(e){
            e.preventDefault();

            var extension = $(this).data("module");
            getModal('getExtensionConfiguration', {'extension': extension});
        });
        
        
        $('.bootstrap-switcher').on('switchChange.bootstrapSwitch', function(event, state) {
            var extId = $(this).data("module");
            postAJAX("settings|toggleExtension", {"extension": extId}, 'json', "resultMessage");
        });
        
        
        function getModal(action, vars)
        {
            var url = "addonmodules.php?module=AdvancedBilling&mg-page=settings&mg-action="+action+"&customPage=1";
            $.ajax({
                type: "GET",
                url: url,
                data: vars,
                success: function(content){
                    $("#Modal").replaceWith(content);
                    initModal();
                },
                dataType: 'html',
            });
        }
        
        
    <?php echo '</script'; ?>
>
<?php }
}
