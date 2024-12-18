<div class="message message-lg message-success">
    <div class="message-icon">
        <i class="lm lm-check"></i>
    </div>
    <h2 class="message-title">{$LANG.supportticketsticketcreated} <a href="viewticket.php?number={$ticket_number|escape}&token={$ticket_token|escape}">#{$ticket_number|escape}</a></h2>
    <p class="message-desc">{$LANG.supportticketsticketcreateddesc}</p>
    <a href="viewticket.php?number={$ticket_number|escape}&token={$ticket_token|escape}" class="btn btn-primary">{$LANG.continue}</a>
</div>
{* {if !$primarySidebar->hasChildren() && !$secondarySidebar->hasChildren()}</div>{/if} *}