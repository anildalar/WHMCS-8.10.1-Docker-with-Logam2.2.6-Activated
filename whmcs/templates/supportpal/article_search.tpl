<form role="form" method="post" action="{$section}.php">
    <div class="search-group search-group-combined m-b-3x">
        <div class="search-field search-field-lg">
            <div class="search-field-icon"><i class="lm lm-search"></i></div>
            <input class="form-control form-control-lg" type="text" id="inputKnowledgebaseSearch" name="search" placeholder="{$LANG2.selfservice_search}" value="{$search|escape}" />
        </div>
        <div class="search-group-btn">
            <button class="btn btn-lg btn-primary{if $searchBoxStyle == 'primary'}{/if}" type="submit" id="btnKnowledgebaseSearch">{$LANG.search}</button>
        </div>
    </div>
</form> 

{*  <div class="search-box search-box--light">
    <form role="form" method="post" action="{$section}.php">
        <div class="search-group">
            <div class="search-field search-field-lg">
                <i class="search-field-icon lm lm-search"></i>
                <input class="form-control form-control-lg" type="text" id="inputKnowledgebaseSearch" name="search" placeholder="{$LANG2.selfservice_search}" value="{$search|escape}" />
            </div>
            <button class="btn btn-lg btn-primary{if $searchBoxStyle == 'primary'}{/if}" type="submit" id="btnKnowledgebaseSearch">{$LANG.search}</button>
        </div>
    </form>
</div>

 *}