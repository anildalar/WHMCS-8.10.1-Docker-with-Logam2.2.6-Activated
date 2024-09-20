{if file_exists("templates/$template/overwrites/footer.tpl")}
    {include file="{$template}/overwrites/footer.tpl"}
{else}
    {if isset($RSThemes['footer-layouts'])}
        {include file=$RSThemes['footer-layouts']['mediumPath']}
    {else}
        {include file="templates/{$template}/core/layouts/footer/default/default.tpl"}
    {/if}
{/if}
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66ecf6014cbc4814f7dbb1bd/1i86q1tn5';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->