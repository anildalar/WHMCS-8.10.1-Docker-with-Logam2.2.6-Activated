{assign var="iconLocation" value="./../../../../../../assets/svg-icons"}
{assign var="iconsPath" value="./../../../../../../../../templates/{$themeName}/assets/svg-icon"}

<ul class="nav nav--h nav--tabs m-b-2x">
    <li class="nav__item is-active">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-lagom-small" data-media-load>
            <span>{$lang.menu.menu_items.modal.icon.ls}</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-lagom-medium" data-media-load>
            <span>{$lang.menu.menu_items.modal.icon.lm}</span>
        </a>
    </li>
    <li class="nav__item ">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-font-awesome" data-media-load>
            <span>{$lang.menu.menu_items.modal.icon.fa}</span>
        </a>
    </li>
    <li class="nav__item ">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-predefined-icons" data-media-load>
            <span>SVG Icons</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-predefined-illustration" data-media-illustrations data-media-load>
            <span>SVG Illustration</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-media-upload" data-media-upload data-media-load>
            <span>Library</span>
        </a>
    </li>
    <li class="nav__item">
        <a class="nav__link" data-toggle="lu-tab" href="#{$type}-custom-icon" data-media-custom>
            <span>Upload</span>
        </a>
    </li>
</ul>

{assign var=icons value=$template->getIcons()}
<div class="tab-content">
    <div class="tab-pane tab-pane--icons is-active" id="{$type}-lagom-small" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
           <div class="media__list has-scroll" data-media-list data-media-insert="lagomsmall">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--icons" id="{$type}-lagom-medium" data-media-container> 
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list data-media-insert="lagommedium">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
            </div>
        </div>
    </div>
    <div class="tab-pane tab-pane--icons" id="{$type}-font-awesome" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list data-media-insert="fontawesome">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
            </div>
        </div>
    </div>
    {* predefined icons *}
    <div class="tab-pane tab-pane--predefined-icons" id="{$type}-predefined-icons" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list data-media-insert="icons">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
            </div>
        </div>
    </div>
    {* predefined illustration *}
    <div class="tab-pane tab-pane--predefined-illustrations" id="{$type}-predefined-illustration" data-media-container>
         <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media">
            <div class="media__list has-scroll" data-media-list data-media-insert="illustrations">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
            </div>
        </div>
    </div>
    {* media *}
    <div class="tab-pane tab-pane--media" id="{$type}-media-upload" data-media-container>
        <div class="media__search input-group">
            <i class="input-group__addon lm lm-search"></i>
            <input type="text" class="form-control" placeholder="Search" data-media-search>
        </div>
        <div class="media"> {*media--img*}
            <div class="media__list has-scroll" data-media-list data-media-manager data-media-insert="media">

            </div>
            <div class="media__preloader preloader is-hidden" data-media-preloader>
            </div>
        </div>
    </div>
    {* media custom *}
    <div class="tab-pane tab-pane--media-custom" id="{$type}-custom-icon">
        <div class="media media--custom" data-media-custom>
            <div class="media__wrapper" data-media-custom-btn>
                <i class="media__icon ls ls-upload"></i>
                <strong class="media__title p-md">Click to Upload</strong>
                <span class="media__desc p-xs">Allowed extensions .PNG, .JPG, .SVG, .GIF. Max size 128MB.</span>
            </div>
            <input type="file" multiple name="customIcon" data-media-custom-input accept="image/*" data-ajax-url="{$helper->url('Page@seoImage',['templateName' => $template->getMainName()])}" data-assets-url="{$whmcsURL}/templates/{$themeName}/assets"/>            
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
                            {*<a href="#" class="btn btn--icon btn--sm media__item-delete" data-media-image-delete data-toggle="lu-tooltip" data-title="{$lang.general.remove}"><i class="btn__icon lm lm-trash"></i></a>*}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>