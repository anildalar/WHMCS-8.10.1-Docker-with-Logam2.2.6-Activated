<!-- Comments Section -->
{if $settings.comments_enabled}
    <div {if !$data.comments|@count}class="hidden-print d-print-none"{/if}>
        {if isset($comment_status) && $comment_status == 1}
            {include file="$template/includes/alert.tpl" type="success" textcenter=true hide=false additionalClasses="comment-status" msg=$LANG2.comments_success}
        {elseif isset($comment_status) && $comment_status == 0}
            {include file="$template/includes/alert.tpl" type="success" textcenter=true hide=false additionalClasses="comment-status" msg=$LANG2.comments_accepted_for_moderation}
        {elseif isset($comment_status) && $comment_status == -1}
            {include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false additionalClasses="comment-status" msg=$LANG2.tickets_captchaError}
        {elseif isset($comment_status) && $comment_status == -2}
            {include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false additionalClasses="comment-status" msg=$LANG.genericerror.title}
        {/if}

    </div>
    <div class="section">
        <div class="section-header">
            <h2 class="section-title">{$LANG2.comments}</h2>
        </div>
        <div class="section-body">
            {if $settings.comment_write == '1' && !$userLoggedIn}
                <a href="clientarea.php">{$LANG2.comments_login_to_comment}</a>
                <br /><br />
            {else}
                <div class="sp-add-comment add-comment panel panel-default panel-collapsable hidden-print">
                    <div class="panel-heading" type="button" data-toggle="collapse" data-target="#sp-add-comment" aria-expanded="false" aria-controls="sp-add-comment">
                        <div class="collapse-icon pull-right">
                            <i class="ls ls-caret plus"></i>
                        </div>
                        <h3 class="panel-title">
                            <i class="lm lm-chat-cloud"></i> &nbsp; {$LANG2.comments_add}
                        </h3>
                    </div>
                    <div class="{if !isset($orig_comment_message)} collapse{/if}" id="sp-add-comment">
                        <div class="panel-body">
                            <div id="replyDiv" style="display: none;"><strong>{$LANG2.comments_replying_to}:</strong> <span id="replySpan"></span>&nbsp;
                                <input class="btn btn-default btn-sm sp-cancel-comment" type="button" value="{$LANG2.button_cancel}" /><br /><br />
                            </div>

                            <form name="myForm" id="form{$data.article.id|escape}" method="POST" action="">
                                <input type="hidden" name="comment_parent_id" />

                                {if !$helpdeskUser}
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>{$LANG.supportticketsclientname}</label>
                                            <input type="text" name="comment_name" value="{$orig_comment_name|escape}" class="form-control" />
                                        </div>
                                    </div>
                                {else}
                                    <input type="hidden" name="comment_name" value="N/A" />
                                {/if}
                                <div class="form-group">
                                    <label>{$LANG.contactmessage}</label>
                                    <textarea name="comment_message" rows="5" class="form-control">{$orig_comment_message|escape}</textarea>
                                </div>

                                {if $helpdeskUser}
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="icheck-control" name="comment_email_author" {if $orig_comment_email_author == 'on'}checked="checked"{/if} />&nbsp; {$LANG2.comments_send_email}
                                        </label>
                                    </div>
                                {/if}

                                {include file='templates/supportpal/recaptcha.tpl'}

                                <input type="submit" value="{$LANG.supportticketsticketsubmit}" class="btn btn-primary" />
                            </form>
                        </div>
                    </div>
                </div>
            {/if}
        </div>
    </div>


    {if $data.comments|@count}

        {section name=c loop=$data.comments}
            <div class="ticket-reply {if $data.comments[c].operator_id}staff{/if}" {if !empty($data.comments[c].root_parent_id)}style="margin-left: 40px"{/if}>
                <a name="comment-{$data.comments[c].id}"></a>
                <div class="ticket-reply-top">
                    {if $RSThemes.addonSettings.show_gravatar_image == 'displayed'}
                        <div class="client-avatar client-avatar-sm">
                            <img src="https://www.gravatar.com/avatar/{$reply.email|md5}" alt="Avatar">
                            
                            {* TODO: Sprawdzać które logo ma być wyświetlane na jakim tle? *}
                            {if $reply.admin && $RSThemes.logoSquareInverse}
                                <div class="staff-reply">
                                    <a href="{if $lagom_logo_url}{$lagom_logo_url}{else}{$WEB_ROOT}/index.php{/if}" class="logo"><img src="{$WEB_ROOT}{$RSThemes.logoSquareInverse}" alt="{$companyname}"/></a>
                                </div>
                            {/if}
                        </div>
                    {/if}
                    <div class="user">
                        <div class="user-info">
                            <span class="name">
                                {if $RSThemes.addonSettings.show_gravatar_image == 'hidden'}
                                    <i class="ls ls-user"></i>
                                {/if}
                                {$data.comments[c].author.formatted_name|escape}
                            </span>
                                <span class="type">
                                <span class="label label-{if $data.comments[c].operator_id}success{else}info{/if} float-md-right">
                                    {if $data.comments[c].operator_id}
                                        {$LANG.supportticketsstaff}
                                    {else}
                                        {$LANG.supportticketsclient}
                                    {/if}
                                </span>
                            </span>
                        </div>
                        <div class="date">
                            {$data.comments[c].created_at|escape}
                        </div>
                    </div>
                </div>
                <div class="ticket-reply-message">
                    {$data.comments[c].text}
                </div>
                <div class="ticket-reply-attachments">
                    <a class="btn btn-default btn-sm commentreply sp-reply-comment hidden-print d-print-none"
                       data-id="{$data.comments[c].id|escape}"
                       data-author-name="{$data.comments[c].author.formatted_name|escape}"
                       onclick="$('#sp-add-comment').collapse('show');"
                       style="cursor: pointer;">
                        {$LANG2.comments_reply}
                    </a>
                </div>
            </div>
        {/section}
    {/if}
{/if}