        </div>
    </div>
</div>
<div class="kb-rate-article article-rate panel panel-default">
    <div class="panel-body">
        <form>
            <p class="m-b-0x">
                <a href="javascript:window.print()" class="btn btn-default">
                    <i class="ls ls-printer"></i>&nbsp; {$LANG.print}
                </a>
            </p>
            <div class="d-flex align-center">
                <span class="m-r-1x">{$LANG2.selfservice_share}:</span>
                <a class="btn btn icon btn-social m-r-1x" href='mailto:?subject=&amp;body={$data.article.title|escape} - http://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI|escape|replace:"&":"%26"}'>
                    <i class="fa fas fa-envelope m-r-0"></i>
                </a>
                <a class="btn btn icon btn-social m-r-1x" href='http://twitter.com/intent/tweet?text={$data.article.title}&amp;url=http://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI|escape|replace:"&":"%26"}'>
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn icon btn-social" href='http://www.facebook.com/sharer.php?u=http://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI|escape|replace:"&":"%26"}'>
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </form>
    </div>
</div>
