<script src="templates/supportpal/dist/article.bundle.js"></script>
{literal}
<script type="text/javascript">
    <!--
    var page = new SpWhmcs.ArticlePage({
        lang: {/literal}{$LANG2|@json_encode nofilter},{literal}
        settings: {/literal}{$settings|@json_encode nofilter}{literal}
    });
    page.init();
    // -->
</script>
{/literal}