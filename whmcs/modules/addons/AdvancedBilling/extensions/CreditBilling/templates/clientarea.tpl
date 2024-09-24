{*{if $autoRefillEnable}*}
{*<div id="CreditBilling_Panel" class="panel panel-default">*}
{*    <div class="panel-heading">*}
{*        <h3 class="panel-title">{$MGLANG->T('Auto Refill')}</h3>*}
{*    </div>*}
{*    <div class="panel-body">*}
{*        {if $autoRefillError}*}
{*        <div class="alert alert-warning">{$autoRefillError}</div>*}
{*        {/if}*}
{*        {if $autoRefillInfo}*}
{*            <div class="alert alert-success">{$autoRefillInfo}</div>*}
{*        {/if}*}
{*        *}
{*        <form action="" method="post" class="form-horizontal">*}
{*            <input type="hidden" name="modaction" value="autorefill" />*}
{*            <div class="row">*}
{*                <label class="control-label col-sm-3">{$MGLANG->T('Enable Auto Refill')}: </label> *}
{*                <div class="col-sm-9 form-inline" style="display: flex;">*}
{*                    <input class="form-control" style="height: auto; width: auto; margin: 0 5px 0 0;" name="enableAutoRefill" type="checkbox"  {if $clientAutoRefill} checked="checked" {/if}>*}
{*                    <span class="help-inline">{$MGLANG->T('Enable to automatically charge from a credit card')}</span>*}
{*                </div>*}
{*            </div>*}
{*            <div class="row">*}
{*                <label class="control-label col-sm-3">{$MGLANG->T('Auto Refill Value')}: </label>*}
{*                <div class="col-sm-9 form-inline auto-refill-form-inline">*}
{*                    <input type="text" name="autoRefillValue" value="{$autoRefillValue}" class="auto-refill-input"/>*}
{*                    <span class="help-inline">{$MGLANG->T('How much should be refiled in a single refill operation')}</span>*}
{*                </div>*}
{*            </div>*}
{*            <div class="row">*}
{*                <label class="control-label col-sm-3">{$MGLANG->T('Auto Refill Under')}: </label>*}
{*                <div class="col-sm-9 form-inline auto-refill-form-inline">*}
{*                    <input type="text" name="autoRefillUnder" value="{$autoRefillUnder}" class="auto-refill-input"/>*}
{*                    <span class="help-inline">{$MGLANG->T('Refil if your credit balance falls below this value')}</span>*}
{*                </div>*}
{*            </div>*}
{*            <div class="row" style="text-align: center">*}
{*                <input type="submit" value="{$MGLANG->T('Save')}" class="btn btn-success auto-refill-submit"/>*}
{*            </div> *}
{*        </form>*}
{*    </div>*}
{*</div>*}

{*    <style>*}
{*        .icheckbox_square-blue {*}
{*            margin-right: 5px;*}
{*        }*}
{*        .auto-refill-submit {*}
{*            height: auto !important;*}
{*            margin-left: 13px;*}
{*        }*}
{*        .auto-refill-form-inline {*}
{*            flex-flow: row !important;*}
{*        }*}
{*        .auto-refill-input {*}
{*            margin-right: 5px;*}
{*        }*}
{*    </style>*}
{*                *}
{*{literal}*}
{*    <style>*}
{*        #CreditBilling_Panel .help-inline*}
{*        {*}
{*            color: #737373;*}
{*        }*}
{*        *}
{*        #CreditBilling_Panel .row*}
{*        {*}
{*            margin-bottom: 10px;*}
{*        }*}
{*        *}
{*        #CreditBilling_Panel input *}
{*        {*}
{*            height: 30px;*}
{*        }*}
{*        *}
{*        #CreditBilling_Panel .control-label *}
{*        {*}
{*            padding-top: 6px;*}
{*        }*}
{*    </style>*}
{*    <script type="text/javascript">*}
{*        //$(".bootstrap-switcher").bootstrapSwitch();*}
{*    </script>*}
{*{/literal}*}
{*{/if}*}
