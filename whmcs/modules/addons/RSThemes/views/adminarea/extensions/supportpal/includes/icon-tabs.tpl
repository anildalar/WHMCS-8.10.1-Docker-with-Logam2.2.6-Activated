{assign var="iconLocation" value="./../../../../../assets/svg-icons"}
{assign var="iconsPath" value="./../../../../../../../../templates/{$themeName}/assets/svg-icon"}
{assign var="imagesPath" value="{$whmcsURL}/templates/{$template->getMainName()}/assets/img"}

{*TODO tu trzeba zwrócić uwage na odznaczanie opcji w przypadku różnic miedzy predefniowaną ikona a zwykła*}
<ul class="nav nav--h nav--tabs">
    <li class="nav__item is-active">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-lagom-small">
            <span>{$lang.menu.menu_items.modal.icon.ls}</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-lagom-medium">
            <span>{$lang.menu.menu_items.modal.icon.lm}</span>
        </a>
    </li>
    <li class="nav__item ">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-font-awesome">
            <span>{$lang.menu.menu_items.modal.icon.fa}</span>
        </a>
    </li>
    <li class="nav__item ">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-predefined-icons">
            <span>Predefined Icons</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-media-upload" data-media-upload>
            <span>Library</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-custom-icon" data-media-custom>
            <span>Upload</span>
        </a>
    </li>
</ul>


{assign var=media value=$extension->getImages()}
{assign var=icons value=$template->getIcons()}
<div class="tab-content">
    <div class="tab-pane tab-pane--icons is-active" id="{$type}-lagom-small" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media" >
           <div class="media__list has-scroll" data-media-list>
               {foreach $icons['lagomSmall'] as $lagomSmallIcon}
                    <label class="media__item" data-toggle="lu-tooltip" data-title="{$lagomSmallIcon['name']}" data-media-item="{$lagomSmallIcon['name']} {$lagomSmallIcon['class']}{foreach $lagomSmallIcon['searchTerms'] as $searchTerm} {$searchTerm}{/foreach}">
                        <div class="media__item-icon">
                            <i class="{$lagomSmallIcon['class']}"></i>
                        </div>
                        <input class="media__item-input lagom-icon" type="radio" name="item[icon]" value="{$lagomSmallIcon['class']}">
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                    </label>
                {/foreach}
                {include file="adminarea/includes/media/no-data.tpl" customClass="is-hidden"}
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--icons" id="{$type}-lagom-medium" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list>
                {foreach $icons['lagomMedium'] as $lagomMediumIcon}
                    <label class="media__item"  data-toggle="lu-tooltip" data-title="{$lagomMediumIcon['name']}" data-media-item="{$lagomMediumIcon['name']} {$lagomMediumIcon['class']}{foreach $lagomMediumIcon['searchTerms'] as $searchTerm} {$searchTerm}{/foreach}">
                        <div class="media__item-icon">
                            <i class="{$lagomMediumIcon['class']}"></i>
                        </div>
                        <input class="media__item-input predefined-icon" type="radio" name="item[icon]" value="{$lagomMediumIcon['class']}">
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                    </label>
                {/foreach}
                {include file="adminarea/includes/media/no-data.tpl" customClass="is-hidden"}
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--icons" id="{$type}-font-awesome" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list>
                {foreach $icons['fontAwesome'] as $fontAwesomeIcon}
                    <label class="media__item"  data-toggle="lu-tooltip" data-title="{$fontAwesomeIcon['name']}" data-media-item="{$fontAwesomeIcon['name']} {$fontAwesomeIcon['class']}{foreach $fontAwesomeIcon['searchTerms'] as $searchTerm} {$searchTerm}{/foreach}">
                        <div class="media__item-icon">
                            <i class="{$fontAwesomeIcon['class']}"></i>
                        </div>
                        <input class="media__item-input lagom-icon" type="radio" name="item[icon]" value="{$fontAwesomeIcon['class']}">
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                    </label>
                {/foreach}
                {include file="adminarea/includes/media/no-data.tpl" customClass="is-hidden"}
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--predefined-icons" id="{$type}-predefined-icons" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media" data-media-container>
            <div class="media__list has-scroll" data-media-list>
                {foreach $template->getAllIcons() as $key => $icon}
                    <label class="media__item" data-media-item="{$icon['name']}"  data-toggle="lu-tooltip" data-title="{$icon['name']}">
                        <div class="media__item-icon">
                            {include file="{$icon.path}"}
                        </div>
                        <input class="media__item-input lagom-icon" type="radio" name="item[predefined_icon]" value="{$icon['name']}">
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                    </label>
                {/foreach}
                {include file="adminarea/includes/media/no-data.tpl" customClass="is-hidden"}
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--media" id="{$type}-media-upload" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media"> {*media--img*}
            <div class="media__list has-scroll" data-media-list data-media-manager>
                {foreach $media as $media_img}
                    <label class="media__item media__item--lg" data-media-item="{$media_img['filename']}" data-toggle="lu-tooltip" data-title="{$media_img['filename']}">
                        {if $media_img['type'] == 'custom'}
                            <div class="media__item-icon">
                                <img src="{$imagesPath}/page-manager/{$media_img['filename']}" alt="{$media_img['filename']}">
                            </div>
                            <input class="media__item-input media-icon" type="radio" name="item[media]" value="{$media_img['filename']}">
                        {elseif $media_img['type'] == 'default'}
                            <div class="media__item-icon">
                                <img src="{$imagesPath}/page-manager/default/{$media_img['filename']}" alt="{$media_img['filename']}">
                            </div>
                            <input class="media__item-input media-icon" type="radio" name="item[media]" value="default/{$media_img['filename']}">
                        {/if}
                        <span class="media__item-border"></span>
                        <span class="media__item-label"><span class="truncate">{$media_img['filename']}</span></span>
                    </label>
                {/foreach}
                {include file="adminarea/includes/media/no-data.tpl" customClass="is-hidden"}
            </div>
        </div>
    </div>
    <div class="tab-pane" id="{$type}-custom-icon">
        <div class="media media--custom" data-media-custom>
            <div class="media__wrapper" data-media-custom-btn>
                <i class="media__icon ls ls-upload"></i>
                <strong class="media__title p-md">Click to Upload</strong>
                <span class="media__desc p-xs">Allowed extensions .PNG, .JPG, .SVG, .GIF. Max size 128MB.</span>
            </div>
            <input type="file" multiple name="customIcon" data-media-custom-input accept="image/*" data-ajax-url="{$helper->url('Page@seoImage',['templateName' => $template->getMainName()])}" data-assets-url="{$whmcsURL}/templates/{$themeName}/assets" />
            <div class="media__list row w-100 is-hidden" data-media-image-container>
                <div class="media__item media__item--lg col-md-12">
                    <div class="media__item-content">
                        <div class="media__item-icon" data-media-icon>
                            <img class="media__image" data-media-image data-graphic src="" alt=""/>
                        </div>
                        <span class="media__item-border"></span>
                        <span class="media__item-label"></span>
                        <div class="media__item-footer">
                            <span class="media__item-filename" data-media-image-filename></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>