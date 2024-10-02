var mgUrlParser = {
    oldMgUrlParser: mgUrlParser,
    
    getCurrentUrl: function () {
        var url = this.oldMgUrlParser.getCurrentUrl();
        //var params = $.param($("#frmProductEdit").serializeArray());
        var params = $.param({
            'module': 'HetznerVps',
            'servertype': 'HetznerVps',
            'magic': '1',
            'token': $("#frmProductEdit [name=token]").val(),
            'servergroup': $("#frmProductEdit [name=servergroup]").val(),
            'gid': $("#frmProductEdit [name=servergroup]").val()
        });
        
        return url.replace("action=edit", "action=save").replace("&success=true", "") + "&" + params;
    }
};
