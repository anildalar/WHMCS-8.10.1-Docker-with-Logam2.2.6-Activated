{if isset($recaptcha) and $recaptcha neq ''}
    <h4>{$LANG2.comments_confirm}</h4>

    {$LANG2.tickets_captchaplease}
    <br /><br />

    {$recaptcha}
    <br />
{/if}