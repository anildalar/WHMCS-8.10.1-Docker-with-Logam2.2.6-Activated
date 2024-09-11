<?php
/* Smarty version 3.1.48, created on 2024-09-10 08:48:02
  from '/var/www/html/templates/lagom2/includes/pwstrength.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e007c2e7b287_24393733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d21fe7b13ff54fdac32ff88680cd3230e1c27e5' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/pwstrength.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e007c2e7b287_24393733 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/pwstrength.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>   
    <div class="password-content password-content-group">
         <button type="button" class="btn btn-default btn-sm generate-password" data-targetfields="inputNewPassword1,inputNewPassword2">
            <i class="ls ls-refresh"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['generatePassword']['btnLabel'];?>

        </button>
    </div>
   
    <?php echo '<script'; ?>
 type="text/javascript">
    jQuery("#inputNewPassword1").keyup(function() {


    if(typeof window.langPasswordWeak === 'undefined'){
        window.langPasswordWeak = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthweak'];?>
";
    }
    if(typeof window.langPasswordModerate === 'undefined'){
        window.langPasswordModerate = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthmoderate'];?>
";
    }
    if(typeof window.langPasswordStrong === 'undefined'){
        window.langPasswordStrong = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthstrong'];?>
";
    }
    if(typeof window.tooShort === 'undefined'){
        window.langPasswordTooShort = "at least 5 characters";
    }

    <?php if ((isset($_smarty_tpl->tpl_vars['pwStrengthErrorThreshold']->value))) {?>
        var pwStrengthErrorThreshold = <?php echo $_smarty_tpl->tpl_vars['pwStrengthErrorThreshold']->value;?>
;
    <?php } else { ?>
        var pwStrengthErrorThreshold = 50;
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['pwStrengthWarningThreshold']->value))) {?>
        var pwStrengthWarningThreshold = <?php echo $_smarty_tpl->tpl_vars['pwStrengthWarningThreshold']->value;?>
;
    <?php } else { ?>
        var pwStrengthWarningThreshold = 75;
    <?php }?>

        var $newPassword1 = jQuery("#newPassword1");
        var pw = jQuery("#inputNewPassword1").val();
        var pwlength=(pw.length);
        if(pwlength > 4){
            $('#passwordStrengthBar').show();
            if(pwlength>5)pwlength=5;
            var numnumeric=pw.replace(/[0-9]/g,"");
            var numeric=(pw.length-numnumeric.length);
            if(numeric>3)numeric=3;
            var symbols=pw.replace(/\W/g,"");
            var numsymbols=(pw.length-symbols.length);
            if(numsymbols>3)numsymbols=3;
            var numupper=pw.replace(/[A-Z]/g,"");
            var upper=(pw.length-numupper.length);
            if(upper>3)upper=3;
            var pwstrength=((pwlength*10)-20)+(numeric*10)+(numsymbols*15)+(upper*10);
            if (pwstrength < 0) pwstrength = 0;
            if (pwstrength > 100) pwstrength = 100;
            
            $newPassword1.removeClass('has-error has-warning has-success');
            jQuery("#passwordStrengthBar .progress-bar").removeClass("progress-bar-danger progress-bar-warning progress-bar-success").css("width", pwstrength + "%").attr('aria-valuenow', pwstrength);

            if (pwstrength < pwStrengthErrorThreshold) {
                $newPassword1.addClass('has-error');
                jQuery("#passwordStrengthTextLabel").html(langPasswordWeak).css("color", "#be0f1a");
                jQuery("#passwordStrengthBar .progress-bar").addClass("progress-bar-danger");
            } else if (pwstrength < pwStrengthWarningThreshold) {
                $newPassword1.addClass('has-warning');
                jQuery("#passwordStrengthTextLabel").html(langPasswordModerate).css("color", "#c59301");
                jQuery("#passwordStrengthBar .progress-bar").addClass("progress-bar-warning");
            } else {
                $newPassword1.addClass('has-success');
                jQuery("#passwordStrengthTextLabel").html(langPasswordStrong).css("color", "#198810");
                jQuery("#passwordStrengthBar .progress-bar").addClass("progress-bar-success");
            }
        }
        else{
            $('#passwordStrengthBar').hide();
            jQuery("#passwordStrengthTextLabel").html(langPasswordTooShort);
            jQuery("#passwordStrengthBar .progress-bar").removeClass("progress-bar-danger progress-bar-warning progress-bar-success").removeAttr('style');
        }
        validatePassword2();
    });

    function validatePassword2() {
        var password1 = jQuery("#inputNewPassword1").val();
        var password2 = jQuery("#inputNewPassword2").val();
        var $newPassword2 = jQuery("#newPassword2");

        if (password2 && password1 !== password2) {
            $newPassword2.removeClass('has-success').addClass('has-error');
            jQuery("#inputNewPassword2Msg").html('<p class="help-block" id="nonMatchingPasswordResult"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['pwdoesnotmatch'], ENT_QUOTES, 'UTF-8', true);?>
</p>');
            <?php if (!(isset($_smarty_tpl->tpl_vars['noDisable']->value))) {?>jQuery('input[type="submit"]').attr('disabled', 'disabled');<?php }?>
        } else {
            if (password2) {
                $newPassword2.removeClass('has-error').addClass('has-success');
                <?php if (!(isset($_smarty_tpl->tpl_vars['noDisable']->value))) {?>jQuery('input[type="submit"]').removeAttr('disabled');<?php }?>
            } else {
                $newPassword2.removeClass('has-error has-success');
            }
            jQuery("#inputNewPassword2Msg").html('');
        }
    }

    jQuery(document).ready(function(){
        <?php if (!(isset($_smarty_tpl->tpl_vars['noDisable']->value))) {?>jQuery('.using-password-strength input[type="submit"]').attr('disabled', 'disabled');<?php }?>
        jQuery("#inputNewPassword2").keyup(function() {
            validatePassword2();
        });
    });

    <?php echo '</script'; ?>
>
<?php }
}
}
