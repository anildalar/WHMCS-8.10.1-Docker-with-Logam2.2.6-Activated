<?php
/* Smarty version 3.1.48, created on 2024-12-21 06:22:43
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/alert/integrationAvailable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67665eb34b15e3_88702790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f21c3a1ef0012e4f8be5f06719de95556aa1b6d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/alert/integrationAvailable.tpl',
      1 => 1730150156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67665eb34b15e3_88702790 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert--info alert--outline has-icon alert--border-left">
    <div class="alert__body">
        <h6><?php echo $_smarty_tpl->tpl_vars['lang']->value['alert']['integration_available']['title'];?>
</h6>
        <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['alert']['integration_available']['desc'];?>
</p>
    </div>
    <div class="alert__actions">
        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@loadSettings',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
            <input type="hidden" name="integrationType" value="<?php echo $_smarty_tpl->tpl_vars['integrationType']->value;?>
"> 
            <button type="submit" class="btn btn--secondary btn--sm"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['import'];?>
</button>
        </form>
        <?php if ($_smarty_tpl->tpl_vars['integrationType']->value == "cms") {?>
            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@dissmissSettings',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" data-cms-integration-dismiss>
                <button data-cms-integration-dismiss-submit class="btn btn--default btn--outline btn--sm" type="submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['dismiss'];?>
</button>
            </form>
        <?php }?>
    </div>
</div><?php }
}
