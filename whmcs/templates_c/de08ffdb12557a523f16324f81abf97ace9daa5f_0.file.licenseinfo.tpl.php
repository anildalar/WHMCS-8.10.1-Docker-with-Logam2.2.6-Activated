<?php
/* Smarty version 3.1.48, created on 2024-11-29 05:28:58
  from '/var/www/html/modules/servers/licensing/templates/licenseinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6749511a7d3f67_83323323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de08ffdb12557a523f16324f81abf97ace9daa5f' => 
    array (
      0 => '/var/www/html/modules/servers/licensing/templates/licenseinfo.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6749511a7d3f67_83323323 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['status']->value == "Reissued") {?>
    <div class="alert-message success">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['reissuestatusmsg'];?>

    </div>
<?php }?>

<p>
    <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['licensekey'];?>
:</h4>
    <?php echo $_smarty_tpl->tpl_vars['licensekey']->value;?>

</p>

<p>
    <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['validdomains'];?>
:</h4>
    <textarea rows="2" style="width:60%;" readonly="true"><?php echo $_smarty_tpl->tpl_vars['validdomain']->value;?>
</textarea>
</p>

<p>
    <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['validips'];?>
:</h4>
    <textarea rows="2" style="width:60%;" readonly="true"><?php echo $_smarty_tpl->tpl_vars['validip']->value;?>
</textarea>
</p>

<p>
    <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['validdirectory'];?>
:</h4>
    <textarea rows="2" style="width:60%;" readonly="true"><?php echo $_smarty_tpl->tpl_vars['validdirectory']->value;?>
</textarea>
</p>

<p>
    <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['status'];?>
:</h4>
    <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

</p>

<?php if ($_smarty_tpl->tpl_vars['allowreissues']->value && $_smarty_tpl->tpl_vars['status']->value == "Active") {?>
    <form method="post" action="clientarea.php?action=productdetails">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
        <input type="hidden" name="serveraction" value="custom" />
        <input type="hidden" name="a" value="reissue" />
        <p align="center">
            <br />
            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['reissue'];?>
" class="btn btn-success" />
        </p>
    </form>
<?php }
}
}
