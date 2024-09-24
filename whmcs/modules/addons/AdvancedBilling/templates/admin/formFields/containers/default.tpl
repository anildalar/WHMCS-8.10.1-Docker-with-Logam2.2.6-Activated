<form class="form-horizontal normal-form" action="{$url}" method="post">
    <div class="form-group">
        <div class="col-lg-12">
            <legend>{$MGLANG->T('header')}</legend>
        </div>
    </div>
    {foreach from=$hidden item=field}
        {$field->parseElement()}
    {/foreach}
    {foreach from=$fields item=field}
        {$field->parseElement()}
    {/foreach}
</form>