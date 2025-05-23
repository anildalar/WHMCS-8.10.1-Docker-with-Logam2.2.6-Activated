/*
* Core js fw functions
* Do not edit this file 
*/

/* 
 * Set body Id for Layers js/css
 */
$('body').attr('id', 'layers-body');


/* 
 * Init app on page loaded (supports ie11+)
 */
function mgLoadPageContoler(){
    new Promise(function(resolve, reject) {
        var ret = mgJsComponentHandler.registerComponents();
        if (ret || !ret) {
            resolve(ret);
        }
    }).then(function(resault) {
        var appContainers = document.getElementsByClassName("vue-app-main-container");
        ret = mgEventHandler.runCallback('AppsPreLoad', null, {appContainers: appContainers});
        return ret;
    }).then(function(resault) {
        var appContainers = document.getElementsByClassName("vue-app-main-container");
        for (var i = 0; i < appContainers.length; i++) {
            mgPageControler = new mgVuePageControler(appContainers[i].id);
            mgPageControler.vinit();
        }
    });
};

if (document.readyState == 'complete') {
    mgLoadPageContoler();
} else {
    document.onreadystatechange = function () {
        if (document.readyState === "interactive") {
            mgLoadPageContoler();
        }
    };
}


/* 
 * Url Helper
 */
var mgUrlParser = {
    url: null,
    
    getCurrentUrl: function(){
        if(!this.url){
            if(window.location.href.indexOf('#') > 0){
                this.url = window.location.href.substr(0, window.location.href.indexOf('#'));
            }else{
                this.url = window.location.href;
            }       
        }
        
        return this.url;
    }
};
