<script src="templates/supportpal/dist/viewticket.bundle.js"></script>
{literal}
<script type="text/javascript">
    <!--
    var page = new SpWhmcs.ViewTicketPage({
        lang: {/literal}{$LANG2|@json_encode nofilter},{literal}
        settings: {/literal}{$settings|@json_encode nofilter}{literal}
    });
    page.init();
    // -->
</script>
{/literal}