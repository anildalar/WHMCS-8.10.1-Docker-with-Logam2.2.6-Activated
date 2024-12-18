{include file="six/includes/tablelist.tpl" tableName="TicketsList" filterColumn="2"}

{if $errormessage}
    {include file="six/includes/alert.tpl" type="error" errorshtml=$errormessage}
{/if}

{$mgCaResult.vars.content}
