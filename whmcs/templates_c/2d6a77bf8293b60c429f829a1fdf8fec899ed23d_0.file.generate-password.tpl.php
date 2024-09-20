<?php
/* Smarty version 3.1.48, created on 2024-09-20 03:53:41
  from '/var/www/html/templates/lagom2/includes/generate-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ecf1c50406e8_08240436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d6a77bf8293b60c429f829a1fdf8fec899ed23d' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/generate-password.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ecf1c50406e8_08240436 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="#" id="frmGeneratePassword" class="form-horizontal">
    <div class="modal fade" id="modalGeneratePassword" style="display: none">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
                    <h5 class="modal-title">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['generatePassword']['title'];?>

                    </h5>
                </div>
                <div class="modal-body">
                    <div class="alert alert-lagom alert-danger hidden" id="generatePwLengthError">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['generatePassword']['lengthValidationError'];?>

                    </div>
                    <div class="form-group row align-items-center">
                        <label for="generatePwLength" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['generatePassword']['pwLength'];?>
</label>
                        <div class="col-md-8">
                            <input type="number" min="8" max="64" value="12" step="1" class="form-control input-inline input-inline-100" id="inputGeneratePasswordLength">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="generatePwOutput" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['generatePassword']['generatedPw'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputGeneratePasswordOutput">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-default btn-sm">
                                <i class="ls ls-plus"></i>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['generatePassword']['generateNew'];?>

                            </button>
                            <button type="button" class="btn btn-default btn-sm copy-to-clipboard" data-clipboard-target="#inputGeneratePasswordOutput">
                                <i class="ls ls-copy"></i>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['copy'];?>

                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['close'];?>

                    </button>
                    <button type="button" class="btn btn-primary" id="btnGeneratePasswordInsert" data-clipboard-target="#inputGeneratePasswordOutput">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['generatePassword']['copyAndInsert'];?>

                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php }
}
