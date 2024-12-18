{if file_exists("templates/orderforms/$carttpl/overwrites/common.tpl")}
    {include file="templates/orderforms/$carttpl/overwrites/common.tpl"}  
{else}
    {if $template != "lagom2"}
        <link href="{$WEB_ROOT}/modules/addons/LagomOrderForm/app/UI/Client/Templates/assets/css/order/variables.css" rel="stylesheet" type="text/css">
        <link href="{$WEB_ROOT}/templates/orderforms/{$carttpl}/assets/css/viewcart-other-template.css" rel="stylesheet" type="text/css">
    {/if}
    <link href="{$WEB_ROOT}/templates/orderforms/{$carttpl}/assets/css/viewcart.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{$WEB_ROOT}/templates/orderforms/{$carttpl}/js/order.min.js"></script>
{/if}