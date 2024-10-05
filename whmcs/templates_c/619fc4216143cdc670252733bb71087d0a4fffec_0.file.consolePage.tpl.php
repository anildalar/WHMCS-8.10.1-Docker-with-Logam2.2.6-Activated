<?php
/* Smarty version 3.1.48, created on 2024-10-03 10:18:46
  from '/var/www/html/modules/servers/HetznerVps/app/UI/Console/Templates/pages/consolePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fe6f86d4ada5_99258079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '619fc4216143cdc670252733bb71087d0a4fffec' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/app/UI/Console/Templates/pages/consolePage.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fe6f86d4ada5_99258079 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if (!$_smarty_tpl->tpl_vars['rawObject']->value->isError()) {?>

<?php }?>


<div class="lu-row">
    <div class="lu-col-md-12">
        <div class="lu-widget">
            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle() || $_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>
                <div class="lu-widget__header">
                <div class="lu-widget__top lu-top">
                <div class="lu-top__title">
            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isError()) {?>
                <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i><?php }
if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?>
            <?php } else { ?>
                <div name="noVNC_status_bar" class="noVNC_status_bar_top">
                    <div id="noVNC_status">Loading</div>
                </div>
            <?php }?>
                </div>
                <div class="lu-top__toolbar">
            <?php if (!$_smarty_tpl->tpl_vars['rawObject']->value->isError()) {?>
                    <div id="noVNC_buttons">
                        <input type=button value="Send Ctrl+Alt+Del"id="sendCtrlAltDelButton" class="noVNC_shown lu-btn lu-btn--danger no-vnc-btn" style="color: #fff !important;">
                        <span id="noVNC_power_buttons" class="noVNC_hidden">
                                    <input type=button value="Shutdown" class="lu-btn lu-btn--danger no-vnc-btn"
                                           id="machineShutdownButton">
                                    <input type=button value="Reboot" class="lu-btn lu-btn--danger no-vnc-btn"
                                           id="machineRebootButton">
                                    <input type=button value="Reset" class="lu-btn lu-btn--danger no-vnc-btn"
                                           id="machineResetButton">
                                </span>
                    </div>
                <?php }?>
                </div>
                </div>
                </div>
            <?php }?>
            <div class="lu-widget__body">
                <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isError()) {?>
                    <div class="col-md-12" style="padding-top:15px;">
                    <div class="lu-alert lu-alert--danger">
                    <div class="lu-alert__body"><?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getError();?>
</div>
                    </div>
                    </div>
                <?php } else { ?>

                    <div id="noVNCConsolePlacecholder">
                    </div>
                    <div id="noVNC_status_bar" name="noVNC_status_bar" <?php if (!$_smarty_tpl->tpl_vars['rawObject']->value->getUrl()) {?> style="display: none!important" <?php }?>>
                    <div id="noVNC_left_dummy_elem"></div>
                    </div>

                <?php }?>
            </div>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
 type="application/javascript">
    var noVncUrl = '<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getUrl();?>
';
    var noVncPassword = '<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getPassword();?>
';
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="module" crossorigin="anonymous">
    window._noVNC_has_module_support = true;
    window.MGConsoleRuning = false;

    import * as WebUtil from '<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getAssetsUrl();?>
/app/webutil.js';
    import RFB from '<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getAssetsUrl();?>
/core/rfb.js';

    var rfb;
    var desktopName;

    function updateDesktopName(e) {
        desktopName = e.detail.name;
    }
    function credentials(e) {
        var html;

        var form = document.createElement('form');
        form.innerHTML = '<label></label>';
        form.innerHTML += '<input type=password size=10 id="password_input">';
        form.onsubmit = setPassword;

        // bypass status() because it sets text content
        document.getElementsByName('noVNC_status_bar').forEach(
            function(currentValue) {
                currentValue.setAttribute("class", "noVNC_status_warn");
            });
        document.getElementById('noVNC_status').innerHTML = '';
        document.getElementById('noVNC_status').appendChild(form);
        document.getElementById('noVNC_status').querySelector('label').textContent = 'Password Required: ';
    }
    function setPassword() {
        rfb.sendCredentials({ password: document.getElementById('password_input').value });
        return false;
    }
    function sendCtrlAltDel() {
        rfb.sendCtrlAltDel();
        return false;
    }
    function machineShutdown() {
        rfb.machineShutdown();
        return false;
    }
    function machineReboot() {
        rfb.machineReboot();
        return false;
    }
    function machineReset() {
        rfb.machineReset();
        return false;
    }
    function status(text, level) {
        switch (level) {
            case 'normal':
            case 'warn':
            case 'error':
                break;
            default:
                level = "warn";
        }

        document.getElementsByName('noVNC_status_bar').forEach(
            function(currentValue) {
                currentValue.className = "noVNC_status_" + level;
            });
        document.getElementById('noVNC_status').textContent = text;
    }

    function connected(e) {
        document.getElementById('sendCtrlAltDelButton').disabled = false;
        if (WebUtil.getConfigVar('encrypt',
            (window.location.protocol === "https:"))) {
            status("Connected (encrypted) to " + desktopName, "normal");
        } else {
            status("Connected (unencrypted) to " + desktopName, "normal");
        }
    }

    function disconnected(e) {
        document.getElementById('sendCtrlAltDelButton').disabled = true;
        updatePowerButtons();
        if (e.detail.clean) {
            status("Disconnected", "normal");
        } else {
            status("Something went wrong, connection is closed", "error");
        }
    }

    function updatePowerButtons() {
        var powerbuttons;
        powerbuttons = document.getElementById('noVNC_power_buttons');

        if (rfb.capabilities.power) {
            powerbuttons.className= "noVNC_shown";
        } else {
            powerbuttons.className = "noVNC_hidden";
        }
    }

    document.getElementById('sendCtrlAltDelButton').onclick = sendCtrlAltDel;
    document.getElementById('machineShutdownButton').onclick = machineShutdown;
    document.getElementById('machineRebootButton').onclick = machineReboot;
    document.getElementById('machineResetButton').onclick = machineReset;

    document.title = WebUtil.getConfigVar('title', 'noVNC');
    // By default, use the host and port of server that served this file

    var port = WebUtil.getConfigVar('port', '');

    // if port == 80 (or 443) then it won't be present and should be
    // set manually
    if (!port) {
        if (window.location.protocol.substring(0,5) == 'https') {
            port = 443;
        }
        else if (window.location.protocol.substring(0,4) == 'http') {
            port = 80;
        }
    }

    var path = WebUtil.getConfigVar('path', '');

    // If a token variable is passed in, set the parameter in a cookie.
    // This is used by nova-novncproxy.
    var token = WebUtil.getConfigVar('token', null);
    if (token) {
        // if token is already present in the path we should use it
        path = WebUtil.injectParamIfMissing(path, "token", token);

        WebUtil.createCookie('token', token, 1)
    }


    $(function () {
        status("Connecting", "normal");

        if ((!noVncUrl) || (!port)) {
            status('Must specify host and port in URL', 'error');
        }

        rfb = new RFB(document.getElementById('noVNCConsolePlacecholder'), noVncUrl,
        {credentials: { password: noVncPassword } });
    rfb.addEventListener("connect", connected);
    rfb.addEventListener("disconnect", disconnected);
    rfb.addEventListener("capabilities", function () {
        updatePowerButtons();
    });
    rfb.addEventListener("credentialsrequired", credentials);
    rfb.addEventListener("desktopname", updateDesktopName);
    rfb.addEventListener('securityfailure', function(){
        console.log('adawd');
    });
    rfb.scaleViewport = WebUtil.getConfigVar('scale', false);
    rfb.resizeSession = WebUtil.getConfigVar('resize', false);
    localStorage.removeItem('firstLoad');
    });


<?php echo '</script'; ?>
>



<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getAssetsUrl();?>
/app/styles/lite.css">
<?php }
}
