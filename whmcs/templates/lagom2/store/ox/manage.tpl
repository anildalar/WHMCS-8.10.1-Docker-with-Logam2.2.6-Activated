
<div class="section">
    <div class="section-body">
        <p class="m-b-0x">{lang key='ox.intro'}</p>
        <p>{lang key='ox.alias.intro'}</p>
        <div id="oxSuccess" class="alert alert-lagom alert-success hidden">
            <i class="fas fa-check fa-fw"></i>
            <span></span>
        </div>
        <div id="oxLoadError" class="alert alert-lagom alert-danger hidden">
            <i class="fas fa-times fa-fw"></i>
            <span></span>
        </div>
        <div class="panel panel-default panel-manage-ox">
            <div class="panel-heading d-flex align-center">
                <h3 class="panel-title">
                    <span id="accountCount">{lang key='ox.accountCount' number='-' limit=$model->qty}</span>
                </h3>
                <div class="panel-heading-actions d-flex align-center m-l-a">
                    <form action="{$upgradeUrl}" method="post">
                        <input type="hidden" name="isproduct" value="{$isService}">
                        <input type="hidden" name="serviceid" value="{$model->id}">
                        <button type="submit" class="btn btn-sm btn-default m-r-1x">{lang key='upgrade'}</button>
                    </form>
                    <button id="btnRefresh" type="button" class="btn btn-sm btn-default disabled m-r-1x" disabled="disabled">
                        <i class="ls ls-refresh" aria-hidden="true"></i>
                        {lang key='ox.refresh'}
                    </button>
                    <button id="btnAddAccount" type="button" class="btn btn-default btn-sm">
                        <i class="ls ls-plus"></i>
                        {lang key='ox.createUser'}
                    </button>
                </div>
            </div>
            <table class="ox-table-accounts table">
                <thead>
                    <tr>
                        <th width="30%">{lang key='ox.emailAddress'}</th>
                        <th width="20%">{lang key='ox.mailboxSize'}</th>
                        <th></th>
                    </tr>
                    {* <tr class="clone hidden" data-account-id="" data-account="" data-first-name="" data-last-name="" data-display-name="">
                        <td><span class="account"></span>@{$domain}</td>
                        <td><span class="limit"></span>GB</td>
                        <td class="text-right">
                            <button class="btn btn-default btn-sm manage-account">{lang key='ox.manageAccount'}</button>
                            <button class="btn btn-default btn-sm set-ox-password">{lang key='ox.setPassword'}</button>
                            <button class="btn btn-danger btn-sm ox-delete">{lang key='ox.delete'}</button>
                        </td>
                    </tr> *}
                </thead>
                <tbody id="tableBodyAccounts">
                    <tr class="loading">
                        <th colspan="3">
                            {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                        </th>
                    </tr>
                    <tr class="no-accounts hidden">
                        <th colspan="3">{lang key='ox.noAccounts'}</th>
                    </tr>
                </tbody>
                <tbody class="cloneAccountsBody hidden"
                data-account-id=""
                data-account=""
                data-first-name=""
                data-last-name=""
                data-display-name=""
                >
                <tr>
                    <td>
                        <span class="account"></span>@{$domain}<br/>
                        <span class="btn btn-xs btn-default email-aliases m-t-1x">
                            <i class="fas fa-chevron-right fa-xs fa-fw"></i>
                            {lang key='ox.alias.emailAliases'}:&nbsp; <span class="alias-count"></span>
                        </span>
                    </td>
                    <td><span class="limit"></span>GB</td>
                    <td class="text-right">
                        <div class="d-inline d-md-none">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle btn-icon dropdown-hamburger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bars"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#" class="dropdown-item manage-account">{lang key='ox.manageAccount'}</a></li>
                                    <li><a href="#" class="dropdown-item set-ox-password">{lang key='ox.setPassword'}</a></li>
                                    <li><a href="#" class="dropdown-item list-group-item-action ox-delete">{lang key='ox.delete'}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-none d-md-inline d-xl-none">
                            <div class="btn-group" role="group">
                                <button class="btn btn-default btn-sm manage-account">{lang key='ox.manageAccount'}</button>
                                <button type="button" class="btn btn-default btn-sm btn-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#" class="dropdown-item set-ox-password">{lang key='ox.setPassword'}</a></li>
                                    <li><a href="#" class="dropdown-item list-group-item-action ox-delete">{lang key='ox.delete'}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-none d-xl-inline">
                            <div class="btn-group" role="group">
                                <button class="btn btn-default btn-sm manage-account">{lang key='ox.manageAccount'}</button>
                                <button class="btn btn-default btn-sm set-ox-password">{lang key='ox.setPassword'}</button>
                                <button class="btn btn-danger btn-sm ox-delete">{lang key='ox.delete'}</button>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
                <tbody class="cloneAliasesBody hidden" data-account-id="">
                <tr>
                <td colspan="3 p-v-0x p-h-0x">
                    <table class="table m-b-0x">
                        <tr class="create-alias" data-alias="">
                            <td colspan="3">
                                <div class="input-group">
                                    <input type="text" name="alias" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            @{$domain}
                                        </span>
                                        <button class="btn btn-primary ox-create-alias">
                                        <span class="loader hidden">
                                            <i class="far fa-sync-alt fa-spin" aria-hidden="true"></i>
                                        </span>
                                            <span class="create-string">
                                            {lang key='ox.alias.createButton'}
                                        </span>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                </tr>
                </tbody>
                <tr class="cloneAliasRow hidden"
                    data-alias=""
                >
                    <td colspan="2"><span class="alias"></span>@{$domain}</td>
                    <td class="text-right">
                        <div class="btn-group" role="group">
                            <button class="btn btn-default btn-xs ox-delete-alias">{lang key='ox.delete'}</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="section">
    <div class="section-body">
        <div class="panel panel-default">
            <div class="panel-nav">
                <ul class="nav nav-tabs">		
                    <li>
                        <a class="active" href="#retrievalsettings" data-toggle="tab">
                            <i class="ls ls-envelope"></i>
                            {lang key='ox.settings.retrieval'}
                        </a>
                    </li>
                    <li>
                        <a href="#davsettings" data-toggle="tab">
                            <i class="ls ls-calendar"></i>
                            {lang key='ox.settings.davSettings'}
                        </a>
                    </li>
                    <li>
                        <a href="#usage" data-toggle="tab">
                            <i class="ls ls-document-info"></i>
                            {lang key='ox.settings.usageInstructions'}
                        </a>
                    </li>
                    <li class="hidden" id="migrationNav">
                        <a href="#migration" data-toggle="tab">
                            <i class="far fa-file-alt fa-fw"></i>
                            {lang key='ox.settings.migrationTitle'}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active show" id="retrievalsettings">
                    <div class="panel-body">{lang key='ox.settings.retrievalIntro'}</div>
                    <table class="table m-b-0">
                        <tbody>
                            <tr>
                                <td>{lang key='ox.settings.username'}</td>
                                <td>{lang key='ox.settings.email' domain=$domain}</td>
                            </tr>
                            <tr>
                                <td>{lang key='clientareapassword'}</td>
                                <td>{lang key='ox.settings.password'}</td>
                            </tr>
                            <tr>
                                <td>{lang key='ox.settings.pop'}</td>
                                <td class="d-flex align-center">
                                    <span class="pop-hostname">
                                        {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                                    </span> &nbsp; <span class="pop-port"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>{lang key='ox.settings.incoming'}</td>
                                <td class="d-flex align-center">
                                    <span class="incoming-hostname">
                                        {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}                                    
                                    </span>&nbsp;<span class="incoming-port"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>{lang key='ox.settings.outgoing'}</td>
                                <td class="d-flex align-center">
                                    <span class="outgoing-hostname">
                                        {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                                    </span>&nbsp;<span class="outgoing-port"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="davsettings">
                    <div class="panel-body">{lang key='ox.settings.davSettingsIntro'}</div>
                    <table class="table m-b-0">
                        <tbody>
                            <tr>
                                <td>{lang key='ox.settings.username'}</td>
                                <td>{lang key='ox.settings.email' domain=$domain}</td>
                            </tr>
                            <tr>
                                <td>{lang key='clientareapassword'}</td>
                                <td>{lang key='ox.settings.caldavPassword'}</td>
                            </tr>
                            <tr>
                                <td>{lang key='ox.settings.serverUrl'}</td>
                                <td>
                                    <span class="calendar-server">
                                        {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                                        
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="usage">
                    <table class="table m-b-0">
                        <thead id="tablePanelUsageHead">
                            <tr class="loading">
                                <td>
                                    {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                                </td>
                            </tr>
                        </thead>
                        <tbody id="tablePanelUsage">
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane panel-body fade hidden" id="migration">
                    <p>{lang key="ox.settings.migrationIntro"}</p>
                    <div>
                        <a class="migration-url btn btn-primary-faded btn-block btn-lg" href="#" target="_blank"
                        >{lang key="ox.settings.migrationLaunch"}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>    

<form id="frmOxAddAccount" action="{$addAccountUrl}" method="post">
    <div class="modal fade modal-lg" id="modalAddAccount">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{lang key='close'}"><i class="lm lm-close"></i></button>
                    <h4 class="modal-title" id="modalAddAccountTitle">
                        {lang key='ox.createUser'}
                    </h4>
                </div>
                <div class="modal-body" id="modalSetPasswordBody">
                    <div class="alert alert-lagom alert-sm alert-danger modal-error hidden">
                        <div class="alert-icon ls ls-close"></div>
                        <div class="alert-body">
                            <span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputFirstName">{lang key='orderForm.firstName'}</label>
                                <input id="inputFirstName" type="text" autocomplete="off" class="form-control required" name="first">
                                <span class="field-error-msg">{lang key='ox.required.firstName'}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputLastName">{lang key='orderForm.lastName'}</label>
                                <input id="inputLastName" type="text" autocomplete="off" class="form-control required" name="last">
                                <span class="field-error-msg">{lang key='ox.required.lastName'}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputDisplayName">{lang key='ox.displayName'}</label>
                                <input id="inputDisplayName" type="text" autocomplete="off" class="form-control required" name="display">
                                <span class="field-error-msg">{lang key='ox.required.displayName'}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputEmailAddress">{lang key='orderForm.emailAddress'}</label>
                                <div class="input-group">
                                    <input id="inputEmailAddress" type="text" autocomplete="off" class="form-control required" name="email">
                                    <span class="input-group-addon">@{$domain}</span>
                                </div>
                                <span class="field-error-msg">{lang key='ox.required.email'}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" id="newPassword1">
                                <div class="password-content password-content-top password-content-group">
                                    <label for="inputPassword">{lang key='clientareapassword'}</label>
                                    <div class="progress m-t-0" id="passwordStrengthBar" style="display: none">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">New Password Rating: 0%</span>
                                        </div>
                                    </div>
                                    <span class="text-small text-lighter password-content-text"><span id="passwordStrengthTextLabel">{$rslang->trans('login.at_least_pass')}</span><i data-toggle="tooltip" title="{$LANG.passwordtips}" data-html="true" data-container="body" class="ls ls-info-circle m-l-1x"></i></span>
                                </div>
                                <div class="input-password-strenght">
                                    <input type="password" class="form-control required" name="password" id="inputNewPassword1" data-error-threshold="{$pwStrengthErrorThreshold}" data-warning-threshold="{$pwStrengthWarningThreshold}" placeholder="{lang key="loginpassword"}" autocomplete="off" />
                                </div>
                                {include file="$template/includes/pwstrength.tpl"}
                                <span class="field-error-msg">{lang key='ox.required.password'}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" id="newPassword2">
                                <label for="inputConfirmPassword">{lang key='clientareaconfirmpassword'}</label>
                                <input id="inputNewPassword2" type="password" autocomplete="off" class="form-control required match" data-match-field="inputNewPassword1" name="password2">
                                <span class="field-error-msg">{lang key='ox.required.passwordMatch'}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">  
                    <button type="button" class="btn btn-primary ox-submit-button">
                        {lang key='orderForm.add'}
                    </button>                  
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        {lang key='close'}
                    </button>
                
                    <div class="pull-right loader hidden">
                        {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<form id="frmOxManageAccount" action="{$manageAccountUrl}" method="post">
    <div class="modal fade" id="modalManageAccount">
        <input type="hidden" value="" name="account">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{lang key='close'}"><i class="lm lm-close"></i></button>
                    <h4 class="modal-title" id="modalManageAccountTitle">
                        {lang key='ox.manageAccount'}
                    </h4>
                </div>
                <div class="modal-body" id="modalSetPasswordBody">
                    <div class="alert alert-lagom alert-sm alert-danger modal-error hidden">
                        <div class="alert-icon ls ls-close"></div>
                        <div class="alert-body">
                            <span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputManageDisplayName">{lang key='ox.displayName'}</label>
                        <input id="inputManageDisplayName" type="text" autocomplete="off" class="form-control required" name="display">
                        <span class="field-error-msg">{lang key='ox.required.displayName'}</span>
                    </div>
                    <div class="form-group">
                        <label for="inputManageFirstName">{lang key='orderForm.firstName'}</label>
                        <input id="inputManageFirstName" type="text" autocomplete="off" class="form-control required" name="first">
                        <span class="field-error-msg">{lang key='ox.required.firstName'}</span>
                    </div>
                    <div class="form-group">
                        <label for="inputManageLastName">{lang key='orderForm.lastName'}</label>
                        <input id="inputManageLastName" type="text" autocomplete="off" class="form-control required" name="last">
                        <span class="field-error-msg">{lang key='ox.required.lastName'}</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="pull-right loader hidden">
                    {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                    </div>
                    <button type="button" class="btn btn-primary ox-submit-button">
                        {lang key='clientareasavechanges'}
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        {lang key='close'}
                    </button>
                
                </div>
            </div>
        </div>
    </div>
</form>
<form id="frmOxSetPassword" action="{$setPasswordUrl}" method="post">
    <div class="modal fade" id="modalSetPassword">
        <input type="hidden" value="" name="account">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{lang key='close'}"><i class="lm lm-close"></i></button>
                    <h4 class="modal-title" id="modalSetPasswordTitle">
                        {lang key='ox.setPasswordFor'}
                    </h4>
                </div>
                <div class="modal-body" id="modalSetPasswordBody">
                    <div class="alert alert-lagom alert-sm alert-danger modal-error hidden">
                        <div class="alert-icon ls ls-close"></div>
                        <div class="alert-body">
                            <span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputChangePassword">{lang key='clientareapassword'}</label>
                        <div class="input-group">
                            <input type="password" class="form-control required" name="password" id="inputChangePassword" data-error-threshold="{$pwStrengthErrorThreshold}" data-warning-threshold="{$pwStrengthWarningThreshold}" placeholder="{lang key="loginpassword"}" autocomplete="off" />
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-default generate-password" data-targetfields="inputChangePassword,inputChangePasswordConfirm">
                                {lang key="generatePassword.btnShort"}
                            </button>
                        </span>
                        </div>

                        <div class="password-strength-meter">
                            <div class="progress" style="height: 10px; margin-top: 10px">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                                </div>
                            </div>
                            <p class="text-center small text-muted" id="passwordStrengthTextLabel">{lang key="pwstrength"}: {lang key="pwstrengthenter"}</p>
                        </div>
                        <span class="field-error-msg">{lang key='ox.required.password'}</span>
                    </div>
                    <div class="form-group">
                        <label for="inputChangePasswordConfirm">{lang key='clientareaconfirmpassword'}</label>
                        <input id="inputChangePasswordConfirm" type="password" autocomplete="off" class="form-control required match" data-match-field="inputChangePassword" name="password2">
                        <span class="field-error-msg">{lang key='ox.required.passwordMatch'}</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="pull-right loader hidden">
                        {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                    </div>
                    <button type="button" class="btn btn-primary ox-submit-button">
                        {lang key='ox.setPassword'}
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        {lang key='close'}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form id="frmOxDeleteAccount" action="{$deleteAccountUrl}" method="post">
    <div class="modal fade" id="modalDeleteAccount">
        <input type="hidden" value="" name="account">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{lang key='close'}"><i class="lm lm-close"></i></button>
                    <h4 class="modal-title" id="modalDeleteAccountTitle">
                        {lang key='ox.deleteAccount'}
                    </h4>
                </div>
                <div class="modal-body" id="modalDeleteAccountBody">
                    <div class="alert alert-lagom alert-sm alert-danger modal-error hidden">
                        <div class="alert-icon ls ls-close"></div>
                        <div class="alert-body">
                            <span></span>
                        </div>
                    </div>
                    <span class="delete-question" aria-hidden="true">{lang key='ox.deleteAccountQuestion'}</span>
                    <span class="delete-aliases-question" aria-hidden="true">{lang key='ox.deleteAccountWithAliasesQuestion'}</span>
                </div>
                <div class="modal-footer">
                    <div class="float-left loader hidden">
                        <i class="fas fa-sync-alt fa-spin"></i>
                        {lang key='loading'}
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        {lang key='close'}
                    </button>
                    <button type="button" class="btn btn-danger ox-submit-button" id="btnDoDelete">
                        {lang key='ox.delete'}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form id="frmOxDeleteAlias" action="{$modifyAliasesUrl}" method="post">
    <div class="modal fade" id="modalDeleteAlias">
        <input type="hidden" value="" name="aliasAction">
        <input type="hidden" value="" name="account">
        <input type="hidden" value="" name="alias">
        <input type="hidden" value="" name="aliases">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{lang key='close'}"><i class="lm lm-close"></i></button>
                    <h4 class="modal-title" id="modalDeleteAccountTitle">
                        {lang key='ox.alias.deleteTitle' domain=$domain}
                    </h4>
                </div>
                <div class="modal-body" id="modalDeleteAccountBody">
                    <div class="alert alert-lagom alert-sm alert-danger modal-error hidden">
                        <div class="alert-icon ls ls-close"></div>
                        <div class="alert-body">
                            <span></span>
                        </div>
                    </div>
                    {lang key='ox.alias.deleteQuestion'}
                </div>
                <div class="modal-footer">
                    <div class="pull-right loader hidden">
                        {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                    </div>
                    <button type="button" class="btn btn-danger ox-submit-button" id="btnDoDelete">
                        {lang key='ox.delete'}
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        {lang key='close'}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    function loadAccounts(force)
    {
        var tableBody = jQuery('#tableBodyAccounts'),
            trLoading = jQuery('tr.loading'),
            divError = jQuery('#oxLoadError'),
            trNoAccounts = jQuery('tr.no-accounts');

        force = force || 0;

        if (!divError.hasClass('hidden')) {
            divError.addClass('hidden');
        }

        jQuery('#btnRefresh').addClass('disabled').prop('disabled', 'disabled')
            .find('i').addClass('fa-spin');

        clearAccounts();
        clearAliases();

        if (trLoading.hasClass('hidden')) {
            trLoading.removeClass('hidden');
        }
        tableBody.html('');
        WHMCS.http.jqClient.jsonPost({
            url: '{$listAccountsUrl}',
            data: {
                token: csrfToken,
                force: force
            },
            success: function(data) {
                if (data.failedMessage) {
                    jQuery('#oxLoadError').text(data.failedMessage).removeClass('hidden');
                } else {
                    if (typeof data.accounts.length === "undefined" || data.accounts.length === 0) {
                        trNoAccounts.removeClass('hidden');
                    } else {
                        jQuery.each(data.accounts, function (index, account) {
                            addAccountToTable(account);
                            addAliasesToTable(account);
                            updateAliasesDisplay(account.id);
                        });
                    }
                    jQuery('#accountCount').find('.number').text(data.accounts.length);
                }
            },
            always: function() {
                trLoading.addClass('hidden');
                if (jQuery('#tableBodyAccounts').find('tr').length === 0) {
                    trNoAccounts.removeClass('hidden');
                }
                jQuery('#btnRefresh').removeClass('disabled').prop('disabled', false)
                    .find('i').removeClass('fa-spin');
            }
        });
    }

    function addAccountToTable(data)
    {
        var table = jQuery('table.ox-table-accounts'),
            clone = jQuery('tbody.cloneAccountsBody').clone();
        clone.attr('id', '');
        clone.find('.account')
            .text(data.username);
        clone.find('.limit')
            .text(data.quota);
        clone.attr('data-account-id', data.id)
            .attr('data-first-name', data.first_name)
            .attr('data-last-name', data.last_name)
            .attr('data-display-name', data.display_name)
            .attr('data-account', data.username + '@{$domain}');
        clone.addClass('account-entry').removeClass('cloneAccountsBody').removeClass('hidden');
        table.append(clone);
    }

    function addAliasesToTable(data) {
        var table = jQuery('table.ox-table-accounts'),
            cloneTbody = jQuery('tbody.cloneAliasesBody').clone();
        if (typeof data.aliases !== 'undefined' && data.aliases.length > 0) {
            data.aliases.forEach(function(alias) {
                var isPrimary = false;
                if (data.username.localeCompare(alias, 'en', { sensitivity: 'base' }) === 0) {
                    isPrimary = true;
                }
                addAliasTr(alias, cloneTbody.find('table'), isPrimary);
            })
        }
        cloneTbody.attr('data-account-id', data.id).attr('id', 'tbodyAlias' + data.id);
        cloneTbody.removeClass('cloneAliasesBody hidden').addClass('aliases-body').hide();
        table.append(cloneTbody);
    }
    function addAliasTr(alias, cloneTbody, isPrimary = false) {
        var cloneTr = jQuery('tr.cloneAliasRow').clone();
        cloneTr.find('.alias')
            .text(alias);
        cloneTr.attr('data-alias', alias);
        cloneTr.addClass('alias-entry').removeClass('cloneAliasRow');
        if (isPrimary === false) {
            cloneTr.removeClass('hidden');
        }
        cloneTbody.prepend(cloneTr);
    }

    function clearAccounts() {
        jQuery('.ox-table-accounts tbody.account-entry').remove();
    }
    function clearAliases() {
        jQuery('.ox-table-accounts tbody.aliases-body').remove();
    }

    function updateAccountsDisplay() {
        var trNoAccounts = jQuery('table.ox-table-accounts tbody tr.no-accounts'),
            accountsCount = jQuery('#accountCount').find('.number');
        var count = jQuery('table.ox-table-accounts tbody.account-entry').length;
        if (count == 0) {
            trNoAccounts.addClass('hidden');
        } else {
            trNoAccounts.removeClass('hidden');
        }
        accountsCount.text(count);
    }

    function updateAliasesDisplay(accountId) {
        var aliasesCount = jQuery('tbody.account-entry[data-account-id="' + accountId + '"] span.alias-count');
            count = jQuery('tbody.aliases-body[data-account-id="' + accountId + '"] tr.alias-entry')
                .not('.hidden')
                .length;
            aliasesCount.text(count);
    }

    function loadConfiguration(force)
    {
        var tabNames = ['Usage'];
        var tabs = [];
        tabNames.forEach(function(tabName) {
            var tabSpec = {
                'panel': jQuery('#tablePanel' + tabName),
                'header': jQuery('#tablePanel' + tabName + 'Head'),
            };
            tabs.push(tabSpec);
            if (tabSpec.header.find('tr.loading').hasClass('hidden')) {
                tabSpec.header.find('tr.loading').removeClass('hidden');
            }
        });

        force = force || 0;
        WHMCS.http.jqClient.jsonPost({
            url: '{$configurationUrl}',
            data: {
                force: force,
                token: csrfToken
            },
            success: function(data) {
                var error = '{lang|addslashes key="unavailable"}';
                if (data.settings) {
                    jQuery('.incoming-hostname').text(data.settings.incoming.hostname);
                    jQuery('.incoming-port').text(data.settings.incoming.port);
                    jQuery('.pop-hostname').text(data.settings.pop.hostname);
                    jQuery('.pop-port').text(data.settings.pop.port);
                    jQuery('.outgoing-hostname').text(data.settings.outgoing.hostname);
                    jQuery('.outgoing-port').text(data.settings.outgoing.port);
                    jQuery('.calendar-server').text(data.settings.calendar.hostname);
                } else {
                    jQuery('.incoming-hostname').text(error);
                    jQuery('.incoming-port').text(error);
                    jQuery('.pop-hostname').text(error);
                    jQuery('.pop-port').text(error);
                    jQuery('.outgoing-hostname').text(error);
                    jQuery('.outgoing-port').text(error);
                    jQuery('.calendar-server').text(error);
                }
                if (data.usage) {
                    var tabSpec = tabs[tabNames.indexOf('Usage')];
                    tabSpec.panel.find('tr').remove();
                    jQuery.each(data.usage, function (index, value) {
                        tabSpec.panel.append(
                            '<tr><td>' + value + '</td></tr>'
                        );
                    });
                }
                if (data.migration_tool) {
                    jQuery('.migration-url').attr('href', data.migration_tool.url);
                    jQuery('#migration, #migrationNav').removeClass('hidden');
                }
            },
            always: function() {
                tabs.forEach(function(tabSpec) {
                    tabSpec.header.find('tr.loading').addClass('hidden');
                });
            }
        });
    }
    jQuery(document).on('ready', function() {
        loadAccounts();
        loadConfiguration();
        jQuery('button.btn-add').width(function() {
            return jQuery(this).outerWidth(true);
        }).find('span.loading').toggleClass('hidden loading');
        jQuery('#modalAddAccount,#modalSetPassword').on('shown.bs.modal', function() {
            jQuery('.modal-backdrop.fade.show').css('zIndex', 1030);
            jQuery(this).css('zIndex', 1035);
            jQuery(this).css('opacity', '1');
        });
        jQuery(document)
            .on('click', '#btnRefresh', function() {
                jQuery(this).addClass('disabled').prop('disabled', true);
                loadAccounts(true);
                loadConfiguration(true);
            })
            .on('click', '#btnAddAccount', function() {
                jQuery('#modalAddAccount').modal('show');
            })
            .on('click', 'tbody.account-entry', function() {
                var accountId = jQuery(this).data('account-id'),
                    aliasesBody = jQuery('#tbodyAlias' + accountId);
                if (aliasesBody.is(':visible')) {
                    jQuery(this).find('i.fa-chevron-right').attr(
                        'style',
                        'transform: rotate(0deg); transition: .1s transform ease-in-out;',
                    );
                    aliasesBody.hide();
                } else {
                    jQuery(this).find('i.fa-chevron-right').attr(
                        'style',
                        'transform: rotate(90deg); transition: .1s transform ease-in-out;',
                    );
                    aliasesBody.show();
                }
            })
            .on('click', '.manage-account', function(e) {
                var tbody = jQuery(this).closest('tbody'),
                    accountId = tbody.data('account-id'),
                    account = tbody.data('account'),
                    modalManageAccount = jQuery('#modalManageAccount');

                e.stopPropagation();
                modalManageAccount.find('input[name="account"]').val(accountId);
                modalManageAccount.find('span.email').text(account);
                jQuery('#inputManageDisplayName').val(tbody.attr('data-display-name'));
                jQuery('#inputManageFirstName').val(tbody.attr('data-first-name'));
                jQuery('#inputManageLastName').val(tbody.attr('data-last-name'));
                modalManageAccount.modal('show');
            })
            .on('click', '.set-ox-password', function(e) {
                var accountId = jQuery(this).closest('tbody').data('account-id'),
                    account = jQuery(this).closest('tbody').data('account'),
                    modalSetPassword = jQuery('#modalSetPassword');

                e.stopPropagation();
                modalSetPassword.find('input[name="account"]').val(accountId);
                modalSetPassword.find('span.email').text(account);
                modalSetPassword.modal('show');
            })
            .on('click', '.ox-delete', function(e) {
                var accountId = jQuery(this).closest('tbody.account-entry').data('account-id'),
                    account = jQuery(this).closest('tbody.account-entry').data('account'),
                    modalDeleteAccount = jQuery('#modalDeleteAccount'),
                    aliasCount = jQuery(this).closest('tbody.account-entry').find('span.alias-count').text(),
                    deleteAliasesSpan = jQuery('span.delete-aliases-question'),
                    deleteAccountSpan = jQuery('span.delete-question');
                deleteAccountSpan.hide();
                deleteAliasesSpan.hide();
                if (aliasCount > 0) {
                    deleteAliasesSpan.show();
                } else {
                    deleteAccountSpan.show();
                }

                e.stopPropagation();
                modalDeleteAccount.find('input[name="account"]').val(accountId);
                modalDeleteAccount.find('span.count').text(aliasCount);
                modalDeleteAccount.find('span.email').text(account);
                modalDeleteAccount.modal('show');
            })
            .on('click', '.ox-create-alias', function() {
                var element = jQuery(this),
                    oxError = jQuery('#oxLoadError'),
                    oxSuccess = jQuery('#oxSuccess'),
                    accountId = element.closest('tbody.aliases-body').data('account-id'),
                    aliasTableTbody = element.closest('tbody'),
                    alias = element.closest('tr.create-alias')
                        .find('input[name="alias"]').val(),
                    aliases = element.closest('tbody.aliases-body')
                        .find('tr.alias-entry')
                        .map(function(index, element) {
                            return jQuery(element).data('alias') + '@{$domain}';
                        }).get();
                if (typeof alias === 'undefined' && alias.length == 0) {
                    return false;
                }
                element.css('min-width', element.outerWidth());
                element.find('span.create-string').addClass('hidden');
                element.attr('disabled', 'disabled').addClass('disabled');
                element.find('span.loader').removeClass('hidden');
                aliases.push(alias + '@{$domain}');
                oxError.addClass('hidden').find('span').text('');
                oxSuccess.addClass('hidden').find('span').text('');
                WHMCS.http.jqClient.jsonPost({
                    url: '{$modifyAliasesUrl}',
                    data: {
                        token: csrfToken,
                        aliasAction: 'create',
                        account: accountId,
                        aliases: JSON.stringify(aliases),
                    },
                    success: function(data) {
                        if (data.success === true) {
                            oxSuccess.find('span').text(data.successMessage);
                            oxSuccess.removeClass('hidden');
                            addAliasTr(
                                alias,
                                aliasTableTbody
                            );
                            element.closest('tr.create-alias')
                                .find('input[name="alias"]')
                                .val('');
                        } else {
                            oxError.find('span').text(data.failedMessage);
                            oxError.removeClass('hidden');
                        }
                    },
                    always: function() {
                        element.find('span.loader').hide();
                        element.find('span.create-string').removeClass('hidden');
                        element.removeAttr('disabled').removeClass('disabled');
                        updateAliasesDisplay(accountId);
                    }
                });
            })
            .on('click', '.ox-delete-alias', function() {
                var accountId = jQuery(this).closest('tbody.aliases-body').data('account-id'),
                    alias = jQuery(this).closest('tr.alias-entry').data('alias'),
                    aliases = jQuery(this).closest('tr.alias-entry')
                        .siblings('tr.alias-entry')
                        .map(function(index, element) {
                            return jQuery(element).data('alias') + '@{$domain}';
                        }).get(),
                    modalDeleteAlias = jQuery('#modalDeleteAlias');
                modalDeleteAlias.find('.modal-error').hide().text(''),
                    modalDeleteAlias.find('input[name="aliasAction"]').val('delete');
                modalDeleteAlias.find('input[name="account"]').val(accountId);
                modalDeleteAlias.find('input[name="alias"]').val(alias);
                modalDeleteAlias.find('input[name="aliases"]').val(JSON.stringify(aliases));
                modalDeleteAlias.find('span.alias').text(alias);
                modalDeleteAlias.modal('show');
            })
            .on('click', '.ox-submit-button', function() {
                var frm = jQuery(this).closest('form'),
                    formId = frm.attr('id'),
                    modal = frm.find('div.modal'),
                    formData = frm.serialize(),
                    accountId = frm.find('input[name="account"]').val(),
                    oxError = modal.find('.modal-error'),
                    oxLoadError = jQuery('#oxLoadError'),
                    oxSuccess = jQuery('#oxSuccess'),
                    tableBody = jQuery('#tableBodyAccounts'),
                    trNoAccounts = jQuery('tr.no-accounts'),
                    accountCount = jQuery('#accountCount').find('.number'),
                    err = false;


                frm.find('.form-group').removeClass('has-error');
                frm.find('.field-error-msg').hide();

                frm.find('.required').each(function() {
                    if (jQuery(this).val() === '') {
                        if (jQuery(this).hasClass('match')) {
                            jQuery(this).setInputError("{lang key='ox.required.passwordMatchMissing'}");
                        }
                        jQuery(this).showInputError();
                        err = true;
                    }
                });

                frm.find('.match').each(function() {
                    var matchInput = jQuery(this).data('match-field');
                    if (jQuery('#' + matchInput).val() !== jQuery(this).val()) {
                        jQuery(this).setInputError("{lang key='ox.required.passwordMatch'}").showInputError();
                        err = true;
                    }
                });
                if (formId === 'frmOxAddAccount') {
                    var verify = jQuery('#inputConfirmPassword');
                    if (jQuery('#inputPassword').val() !== verify.val()) {
                        verify.showInputError();
                        err = true;
                    }
                }
                if (formId === 'frmOxSetPassword') {
                    var verify2 = jQuery('#inputChangePasswordConfirm');
                    if (jQuery('#inputChangePassword').val() !== verify2.val()) {
                        verify2.showInputError();
                        err = true;
                    }
                }
                if (!err) {
                    oxError.addClass('hidden').find('span').text('');
                    oxLoadError.addClass('hidden');
                    oxSuccess.addClass('hidden');

                    modal.find('.loader').removeClass('hidden');
                    WHMCS.http.jqClient.jsonPost({
                        url: frm.attr('action'),
                        data: formData,
                        success: function(data) {
                            if (data.success === true) {
                                var tbody = jQuery('tbody[data-account-id="' + accountId + '"]');
                                oxSuccess.find('span').text(data.successMessage);
                                oxSuccess.removeClass('hidden');
                                switch (formId) {
                                    case 'frmOxDeleteAccount':
                                        tbody.slideUp().remove();
                                        break;
                                    case 'frmOxAddAccount':
                                        data.aliases = [data.username];
                                        addAccountToTable(data);
                                        addAliasesToTable(data);
                                        updateAliasesDisplay(data.id);
                                        break;
                                    case 'frmOxManageAccount':
                                        tbody.attr('data-display-name', data.display_name);
                                        tbody.attr('data-first-name', data.first_name);
                                        tbody.attr('data-last-name', data.last_name);
                                        break;
                                    case 'frmOxDeleteAlias':
                                        var alias = frm.find('input[name="alias"]').val(),
                                            tr = jQuery('tr.alias-entry[data-alias="' + alias + '"]');
                                        tr.slideUp().remove();
                                        break;
                                }
                                frm.find('input').not('[name="token"]').each(function() {
                                    jQuery(this).val('');
                                });
                                modal.modal('hide');
                            } else {
                                oxError.find('span').text(data.failedMessage);
                                oxError.removeClass('hidden');
                            }
                        },
                        always: function() {
                            var count = tableBody.find('tr').length;
                            if (count === 0) {
                                trNoAccounts.removeClass('hidden');
                            } else {
                                trNoAccounts.addClass('hidden');
                            }
                            accountCount.text(count);
                            updateAliasesDisplay(accountId);
                            modal.find('.loader').addClass('hidden');
                        }
                    });
                }
            });
    });
</script>
<style>
    tbody.aliases-body > tr > td{
        padding: 0;
    }
    tbody.aliases-body tr.create-alias > td{
        border-top: none;
    }
    tbody.aliases-body tr.alias-entry > td{
        border-top: none;
        border-bottom: 1px solid var(--table-border-color);
    }
    @media (max-width: 991px){
        .panel-manage-ox .panel-heading {
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .panel-manage-ox .panel-heading .panel-heading-actions {
            margin-left: unset !important;
            margin-top: 16px;
        }
        .panel-manage-ox .table tr td.text-right button {
            margin-top: 8px;
        }
    }
</style>
