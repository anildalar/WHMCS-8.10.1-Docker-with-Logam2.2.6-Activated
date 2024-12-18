{*************************************
* EDITED BY MODULESGARDEN (28.11.2017)
* Modified WHMCS template for Freshdesk Module
*************************************}
{*
{if $errormessage}
{include file="six/includes/alert.tpl" type="error" errorshtml=$errormessage}
{/if}

{$mgCaResult.vars.content}



{include file="six/includes/captcha.tpl"}
*}

{*
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="{$assetsURL}/css/layers-ui.css">
*}

{$mgCaResult.vars.content}


{*<script type="text/javascript" src="https://unpkg.com/vue"></script>*}

{*
<script type="text/javascript" src="{$assetsURL}/js/vue.min.js"></script>
<script type="text/javascript" src="{$assetsURL}/js/mgComponents.js"></script>
<script type="text/javascript" src="{$assetsURL}/js/jscolor.min.js"></script>            
<script type="text/javascript" src="{$assetsURL}/js/layers-ui.js"></script>
<script type="text/javascript" src="{$assetsURL}/js/layers-ui-table.js"></script>  
*}