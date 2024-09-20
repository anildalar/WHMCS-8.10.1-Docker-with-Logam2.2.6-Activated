/***************************************************************************************
 *
 * 
 *                  ██████╗██████╗ ███╗   ███╗         Customer
 *                 ██╔════╝██╔══██╗████╗ ████║         Relations
 *                 ██║     ██████╔╝██╔████╔██║         Manager
 *                 ██║     ██╔══██╗██║╚██╔╝██║
 *                 ╚██████╗██║  ██║██║ ╚═╝ ██║         For WHMCS
 *                  ╚═════╝╚═╝  ╚═╝╚═╝     ╚═╝
 * 
 *    
 * @author      Piotr Sarzyński <piotr.sa@modulesgarden.com> 
 *              
 *                           
 * @link        http://www.docs.modulesgarden.com/CRM_For_WHMCS for documenation
 * @link        http://modulesgarden.com ModulesGarden
 *              Top Quality Custom Software Development
 * @copyright   Copyright (c) ModulesGarden, INBS Group Brand, 
 *              All Rights Reserved (http://modulesgarden.com)
 * 
 * This software is furnished under a license and mxay be used and copied only  in  
 * accordance  with  the  terms  of such  license and with the inclusion of the above 
 * copyright notice.  This software  or any other copies thereof may not be provided 
 * or otherwise made available to any other person.  No title to and  ownership of 
 * the  software is hereby transferred.
 *
 **************************************************************************************/

/**
 * So this is a core of whole module
 *
 * Main implementations for module
 * This contain jQuery integration part, reinitialize stuff etc
 *
 * Try to not use angular directives here
 * 
 * @author Piotr Sarzyński <piotr.sa@modulesgarden.com> 
 */
var mgCRM = (function()
{

/**
 * START: CORE CONTAINERS
 */
var appConfig = {}; // this is automatically injected from TWIG
                    // MODULE config array > PHP > TWIG > and injected here as an js object
                    // sinde we want have access to most important settings/variables here directly

var assetsPath        = '';
var globalImgPath     = 'img/';
var globalPluginsPath = 'plugins/';
var globalCssPath     = 'css/';
var globalViewsPath   = 'views/';
var renderStandalone  = false;

/**
 * END: CORE CONTAINERS
 */

// containers
var settings = {
    gotoSession : 'gotoSession',
    refresh     : 'refresh',
    search      : 'search',
    sessions    : [],
    title       : 'Sessions',
};

////////////////////////////////////////////////////
////////////////////////////////////////////////////
//
/*             UI FEATURES                         */

// Handles the go to top button at the footer
var handleGoTop = function () 
{
    var offset = 300;
    var duration = 500;

    if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {  // ios supported
        $(window).bind("touchend touchcancel touchleave", function(e){
           if ($(this).scrollTop() > offset) {
                $('.scroll-to-top').fadeIn(duration);
            } else {
                $('.scroll-to-top').fadeOut(duration);
            }
        });
    } else {  // general
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset) {
                $('.scroll-to-top').fadeIn(duration);
            } else {
                $('.scroll-to-top').fadeOut(duration);
            }
        });
    }

    $('.scroll-to-top').click(function(e) {
        e.preventDefault();
        mgCRM.scrollTop();
        return false;
    });
};


// Handles box tools & actions
var handleBoxFullscreen= function() 
{
    // handle box fullscreen
    $('body').on('click', '.box > .box-title .fullscreen', function(e) {
        e.preventDefault();
        var box = $(this).closest(".box");
        if (box.hasClass('box-fullscreen')) {
            $(this).removeClass('on');
            box.removeClass('box-fullscreen');
            $('body').removeClass('page-box-fullscreen');
            box.children('.box-body').css('height', 'auto');
        } else {
            var height = mgCRM.getViewPort().height -
                box.children('.box-title').outerHeight() -
                parseInt(box.children('.box-body').css('padding-top')) -
                parseInt(box.children('.box-body').css('padding-bottom'));

            $(this).addClass('on');
            box.addClass('box-fullscreen');
            $('body').addClass('page-box-fullscreen');
            box.children('.box-body').css('height', height);
        }
    });
};




var handleFullScreenCRMAppButton = function() 
{

    $('body').on('click', '.full-screen-module-toogle', function(e) {
        e.preventDefault();

        var container = $(".full-screen-module-container");
        if (container.hasClass('full-screen-module-on'))
        {
            container.removeClass('full-screen-module-on');
            container.find('i.icon-size-actual').removeClass('icon-size-actual').addClass('icon-size-fullscreen');
            $('body').removeClass('box-fullscreen').css('height', '');
        }
        else
        {
//            var height = mgCRM.getViewPort().height -
//                box.children('.box-title').outerHeight() -
//                parseInt(box.children('.box-body').css('padding-top')) -
//                parseInt(box.children('.box-body').css('padding-bottom'));
        
            container.addClass('full-screen-module-on');
            container.find('i.icon-size-fullscreen').removeClass('icon-size-fullscreen').addClass('icon-size-actual');
            $('body').addClass('box-fullscreen').css('height', container.height());
        
        }
    });
}


    // Handles scrollable contents using jQuery SlimScroll plugin.
    var handleScrollers = function () {
        $('.scroller').each(function () {
            var height;
            if ($(this).attr("data-height")) {
                height = $(this).attr("data-height");
            } else {
                height = $(this).css('height');
            }
            
            $(this).slimScroll({
                allowPageScroll: true, // allow page scroll when the element scroll is ended
                size: '7px',
                color: ($(this).attr("data-handle-color")  ? $(this).attr("data-handle-color") : '#bbb'),
                railColor: ($(this).attr("data-rail-color")  ? $(this).attr("data-rail-color") : '#eaeaea'),
                position: 'right',
                height: height,
                alwaysVisible: ($(this).attr("data-always-visible") == "1" ? true : false),
                railVisible: ($(this).attr("data-rail-visible") == "1" ? true : false),
                disableFadeOut: true
            });
        });
    }



// Handle sidebar menu links
var handleMainMenuActiveLink = function(mode, id, data) 
{
    var menu = $('.top-menu ul.nav.mg-navbar');

    if (mode === 'set') {
        el = $('#'+id);
    } else if (mode === 'dynamic') {
        el = $('#contacts-list-sub-'+data);
        
        if ($('#contacts-list-'+data).size() === 1) {
            el = $('#contacts-list-'+data);
            $('#contacts-list-sub-'+data).addClass('active');
        } else {
            el = $('#contacts-list-sub-'+data);
        }
    }
    
    if (!el || el.size() == 0) {
        return;
    }
    
    menu.find('li.open').removeClass('open');
    menu.find('li.active').removeClass('active');

    el.addClass('active');
    if (el.parent('ul.dropdown-menu:not(ul.navbar-nav)').size() === 1) {
        el.parents('li.menu-dropdown').addClass('active');
    }
};

var standaloneAppFixes = function()
{
    renderStandalone = true;
    handleNavigationCollapseOnResize();
};


// Handle window resize
var handleNavigationCollapseOnResize = function() 
{
    var navbarInTwoLines        = false;                
    var navbarOnlyIcons         = false;                
    var moduleLogoSmall         = false;
    var hideModuleLogo          = false;
    var buffor                  = 20;
    
    var navFullWidth            = $('.top-menu .nav-menu:not(.nav-menu-right)').width();
    var navModuleNameWidth      = $('.modulename small').width() + 36;
    
    // determinate ui type
    if(renderStandalone) {
        // wider, since additional WHMCS image
        var navModuleLogoWidth      = 293; //$('.logo-default').width();
        var navModuleLogoCogWidth   = 173; //$('.logo-default-cog').width();
    } else {
        var navModuleLogoWidth      = 240; //$('.logo-default').width();
        var navModuleLogoCogWidth   = 120; //$('.logo-default-cog').width();
    }


    function NavigationSet() 
    {
        var navMaxWidth             = $('.page-header').width();
        var navWidth                = $('.top-menu .nav-menu:not(.nav-menu-right)').width();
        var navRightBannerWidth     = $('.top-menu .nav-menu-right').width();
        
        // calculate conditions
        if(navMaxWidth         <= (navFullWidth + navRightBannerWidth + navModuleNameWidth + buffor) && !navbarInTwoLines) {
            navbarInTwoLines  = true;
            $('.top-menu .modulename').addClass('centerred');
        } else if(navMaxWidth   > (navFullWidth + navRightBannerWidth + navModuleNameWidth + buffor) && navbarInTwoLines) {
            navbarInTwoLines  = false;
            $('.top-menu .modulename').removeClass('centerred');
        }
        
        if(navMaxWidth         <= (navFullWidth + navModuleLogoWidth + buffor) && !moduleLogoSmall) {
            moduleLogoSmall = true;
            $('.top-menu .modulename-logo').addClass('only-cog');
        } else if(navMaxWidth   > (navFullWidth + navModuleLogoWidth + buffor) && moduleLogoSmall) {
            moduleLogoSmall = false;
            $('.top-menu .modulename-logo').removeClass('only-cog');
        }
            
        if(navMaxWidth         <= (navFullWidth + navModuleLogoCogWidth + buffor) && !navbarOnlyIcons) {
            navbarOnlyIcons = true;
            $('.top-menu .nav-menu:not(.nav-menu-right)').addClass('only-icons');
        } else if(navMaxWidth   > (navFullWidth + navModuleLogoCogWidth + buffor) && navbarOnlyIcons) {
            navbarOnlyIcons = false;
            $('.top-menu .nav-menu:not(.nav-menu-right)').removeClass('only-icons');
        }

        if(navMaxWidth         <= (navWidth + navModuleLogoCogWidth + buffor) && !hideModuleLogo) {
            hideModuleLogo = true;
            $('.top-menu .nav-menu-right').hide();
        } else if(navMaxWidth   > (navWidth + navModuleLogoCogWidth + buffor) && hideModuleLogo) {
            hideModuleLogo = false;
            $('.top-menu .nav-menu-right').show();
        }
    }
    NavigationSet();
    $(document).ready(NavigationSet);
    $(window).resize(NavigationSet);
};

/**
 * START: AVAILABLE METHOD DIRECTIVES
 */
return {
    // set config
    setConfig: function(config) {
        this.appConfig = config;

        this.setAssetsPath(this.getConfig('rootDir') + '/assets/');
        globalViewsPath = this.getConfig('rootDir') + '/views/';
    },

    // get config or single variable FROM config
    getConfig: function(what){
        if(typeof what === 'undefined') {
            return this.appConfig;
        } else if(typeof what === 'string') {
            if(typeof this.appConfig[what] != 'undefined') {
                return this.appConfig[what];
            } else return false;
        } else
            return false;
    },

    // Most important function !
    init: function(standalone) {
        // console.clear();
        // IMPORTANT!!!: Do not modify the core handlers order. I'll kill you

        //Core handlers
        // handleInit(); // initialize core variables
        this.initFooter();
        if(standalone === true) {
            standaloneAppFixes();
        }
    },

    //public helper function to get actual input value(used in IE9 and IE8 due to placeholder attribute not supported)
    getActualVal: function(el) {
        el = $(el);
        if (el.val() === el.attr("placeholder")) {
            return "";
        }
        return el.val();
    },


    //public function to get a paremeter by name from URL
    getURLParameter: function(paramName) {
        var searchString = window.location.search.substring(1),
            i, val, params = searchString.split("&");

        for (i = 0; i < params.length; i++) {
            val = params[i].split("=");
            if (val[0] == paramName) {
                return unescape(val[1]);
            }
        }
        return null;
    },

    // assets
    setAssetsPath: function(path) {
        assetsPath = path;
    },
    getAssetsPath: function() {
        return assetsPath;
    },

    // img path
    getImgPath: function() {
        return assetsPath + globalImgPath;
    },

    // img plugins
    getPluginsPath: function() {
        return assetsPath + globalPluginsPath;
    },

    // css plugins
    getCssPath: function() {
        return assetsPath + globalCssPath;
    },

    // views
    globalViewsPath: function() {
        return globalViewsPath;
    },
    // views
    templateViewsPath: function(name) {
        return globalViewsPath + name;
    },


    ////////////////////////////////////////////////////
    ////////////////////////////////////////////////////
    //
    /*           ASTERISK INTEGRATION                  */



    // views
    openAsterishWidget: function(destination) {
        if($("#originateCallForm").length) {
            $("#originateCallForm input[name=destination]").val(destination);
            $("#calloutwidget").dialog({minWidth: 350,close: function(){}});
        }
    },



    ////////////////////////////////////////////////////
    ////////////////////////////////////////////////////
    //
    /*             UI FEATURES                         */

    initFooter: function() {
        //handles scroll to top functionality in the footer
        handleGoTop();
        handleBoxFullscreen();
        handleFullScreenCRMAppButton();
        handleScrollers();
        handleNavigationCollapseOnResize();
    },


//        startPageLoading: function(options) {
//            if (options && options.animate) {
//                $('.page-spinner-bar').remove();
//                $('body').append('<div class="page-spinner-bar"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
//            } else {
//                $('.page-loading').remove();
//                $('body').append('<div class="page-loading"><img src="' + this.getGlobalImgPath() + 'loading-spinner-grey.gif"/>&nbsp;&nbsp;<span>' + (options && options.message ? options.message : 'Loading...') + '</span></div>');
//            }
//        },
//
//        stopPageLoading: function() {
//            $('.page-loading, .page-spinner-bar').remove();
//        },


    // set active element in main navigation
    setMainMenuActiveLink: function(mode, id, data) {
        handleMainMenuActiveLink(mode, id, data);
    },

    
    // function to scroll to the top
    scrollTop: function() {
        this.scrollTo();
    },
    
    // reinitiate scroolers
    handleScrollers: function() {
        handleScrollers();
    },
    
    // things to do after ajax change
    // things to reinitialize etc
    reInitializeAfterAjax: function() {
        handleScrollers();
    },
        
    // scrool to selected element
    scrollTo: function(el, offeset) {
        var pos = (el && el.size() > 0) ? el.offset().top : ((this.getConfig('scroolModule') && this.getConfig('scroolModule') === true) ? $('.mg-wrapper.body').offset().top : 0);

        if (el) {
            if ($('.mg-wrapper.body').hasClass('page-header-fixed')) {
                pos = pos - $('.page-header').height();
            }
            pos = pos + (offeset ? offeset : -1 * el.height());
        }

        
        $('html, body').animate({
            scrollTop: pos
        }, 'fast');
    },
        
    // To get the correct viewport width based on  http://andylangton.co.uk/articles/javascript/get-viewport-size-javascript/
    getViewPort: function() {
        var e = window,
            a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }

        return {
            width: e[a + 'Width'],
            height: e[a + 'Height']
        };
    },

};
/**
 * END: AVAILABLE METHOD DIRECTIVES
 */

}());
