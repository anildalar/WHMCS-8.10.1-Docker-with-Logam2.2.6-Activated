<?php
/* Smarty version 3.1.48, created on 2024-09-28 02:07:12
  from '/var/www/html/modules/addons/AdvancedBilling/templates/admin/pages/settings/extensions/extensionConfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f764d00a4c33_26728109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdae3aace27912c916dd2e829f79880627f4d3dc' => 
    array (
      0 => '/var/www/html/modules/addons/AdvancedBilling/templates/admin/pages/settings/extensions/extensionConfig.tpl',
      1 => 1697014410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f764d00a4c33_26728109 (Smarty_Internal_Template $_smarty_tpl) {
?>                
<?php echo '<script'; ?>
 type="text/javascript">
    function initModal()
    {
        $.when( $(".bootstrap-switcher").bootstrapSwitch() ).done(function()
        {
            $('#Modal').modal('show');
            $('.modal-loader').hide();
        });
    }
        
    $("#saveExtensionConfig").click(function(e)
    {
        var values = $("#<?php echo $_smarty_tpl->tpl_vars['extension']->value->name;?>
").serializeArray();
        postAJAX("settings|saveExtension", values, "json", "resultMessage");
 
    });
<?php echo '</script'; ?>
>


<div id="Modal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 70%">

        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Set Configuration For ');?>
<b><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['extension']->value->friendlyName);?>
</b></h3>
                <button type="button" class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
            </div>

            <div class="modal-loader"></div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['extension']->value->displayExtensionConfiguration();?>

            </div>

            <div class="modal-footer">
              <button id="saveExtensionConfig" class="btn btn-success btn-inverse" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Save');?>
</button>
              <button class="btn btn-danger" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Cancel');?>
</button>
            </div>

        </div>

    </div>
</div> <?php }
}
