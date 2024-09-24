

$.when($(".bootstrap-switcher").bootstrapSwitch());

$(document).on('switchChange.bootstrapSwitch', ".switcher", function (event) {
    
    event.preventDefault();
    var status = $(this).data('status');
    var rid = $(this).data('rid');
    var hostingId = $('#hostingId').val();
    postAJAX("changeStatus", {rid: rid, status: status, hostingId: hostingId}, function (result) {
        alertMessage('#resultMessage', result.alert);
    });
});

function alertMessage(selector, alert)
{
    $(selector).html(alert);
}

function initModal()
{
    $('#Modal').modal('show');
}
function postAJAX(action, data, callbackfunc)
{
    callbackfunc = typeof callbackfunc !== 'undefined' ? callbackfunc : 0;
    return $.ajax({
        type: "POST",
        url: "index.php?m=AdvancedBilling&extensionPage=Notifications&page=clientArea&json=1&mg-action=" + action,
        data: data,
        dataType: 'json',
        success: function (result) {
            if (callbackfunc)
            {
                callbackfunc(result);
            }
        },
        error: function (result) {
            if (callbackfunc)
            {
                callbackfunc(result);
            }
        }

    });
}


$(function () {
    $("#showReminders").click(function (event) {
        event.preventDefault();
        $(this).hide();
        $("#hideReminders").show();
        $("#reminders").show();

    });
    $("#hideReminders").click(function (event) {
        event.preventDefault();
        $(this).hide();
        $("#showReminders").show();
        $("#reminders").hide();

    });
});

$(document).on("click", '.addReminderModal', function (e)
{
    getModal('addReminder', {hostingId: $('#hostingId').val()});
});


$(document).on("click", '.makeLimits', function (e)
{
    var rid = $(this).data('rid');
    var hid = $(this).data('hid');
    var productId = $('#productId').val();
    getModal('makeLimits', {rid: rid, hid: hid, productId: productId});
});






$(document).on("click", ".editReminder", function (event) {
    var rid = $(this).data('rid');
    var hostingId = $('#hostingId').val();
    getModal("editReminder", {rid: rid, hostingId: hostingId});

});

function getModal(action, vars)
{
    var url = "index.php?m=AdvancedBilling&extensionPage=Notifications&mg-page=clientArea&mg-action=" + action + "&customPage=1";

    $('#modalLoader').modal('show');
    $.ajax({
        url: url,
        data: vars,
        success: function (content) {

            $("#Modal").replaceWith(content);
            $('#modalLoader').modal('hide');
            initModal();
        },
        error: function (xhr, status, error) {
            $('#modalLoader').modal('hide');
            console.log(xhr.responseText);
        },

    });

}

function refreshData(action, selector, vars)
{
    var url = "index.php?m=AdvancedBilling&extensionPage=Notifications&mg-page=clientArea&mg-action=refreshData&customPage=1";
    $.ajax({
        url: url,
        data: vars,
        success: function (content) {
            $(selector).replaceWith(content);
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
        },
    });
}

$(document).on("click", "#resourcesLimit", function (event) {

    event.preventDefault();
    var width;
    var flag = true;
    var values = {};
    $(".alert-danger").hide();
    $('.has-error.has-feedback').removeClass('has-error has-feedback');
    $('input[name^=fields]').each(function () {
        if ($.isNumeric($(this).val()) === false)
        {
            flag = false;
            $(".numericValuesError").show();
            width = $(this).innerWidth()+2; // +border
            $(this).parent().addClass("has-error has-feedback").css('width', width);
        }
        else if($(this).val() < 0)
        {
            flag = false;
            $(".numericValuesErrorNegative").show();
            width = $(this).innerWidth()+2; // +border
            $(this).parent().addClass("has-error has-feedback").css('width', width);
        }
        values[this.name] = $(this).val();
    });

    var types = {};
    $('select[name^=selects]').each(function () {
        types[this.name] = $(this).val();

    });
    var ids = {};
    $('input[name^=ids]').each(function () {
        ids[this.name] = $(this).val();
    });
    var rid = $(this).data('rid');
    var productId = $('#productId').val();
    
    var obj = $.extend({}, values, types);
    var obj_out = $.extend({}, obj, ids);
    obj_out['rid'] = rid;
    obj_out['productId'] = productId;
    if (flag === true)
    {
        postAJAX('limiter', obj_out, function (result) {
            $('#Modal').modal('hide');
            alertMessage('#resultMessage', result.alert);

        });
    }



});

$(document).on("click", ".deleteReminderYes", function (event) {
    var rid = $(this).data('rid');
    var hostingId = $('#hostingId').val();
    postAJAX('deleteReminder', {rid: rid, hostingId: hostingId}, function (result) {
        $('#Modal').modal('hide');
        alertMessage('#resultMessage', result.alert);
        refreshData('refreshData', '#reminderGroup', {hostingId: hostingId});
    });
});

$(document).on("click", ".deleteReminder", function (event) {

    var rid = $(this).data('rid');
    var hostingId = $('#hostingId').val();
    getModal("deleteReminder", {rid: rid, hostingId: hostingId});

});

$(document).on("click", ".errorInput", function (event) {

    $(this).parent().removeClass("has-error has-feedback");

});

$(document).on('click', ".periodFrequency, .mailFrequency", function(){
    var inputName = $(this).attr('class');
    $('input[name="field['+inputName+']"]').val($(this).text());
});


$(document).on("click", "#addReminder", function (event) {

    event.preventDefault();
    var flag = true;
    var hostingId = $('#hostingId').val();
    var productId = $('#productId').val();
    var name = $('input[name=name]').val();
    var id = $(this).data('id');
    var obj = [];
    $(".alert danger").hide();
    $('input[name^=field]').each(function () {
        var value = periodConverter($(this).val());
        obj.push(value);
        if(!name)
        {
            flag = false;
            $(".emptyFieldsError").show();
            $(".errorInput").parent().addClass("has-error has-feedback");
        }
        
        if(!value)
        {
            flag = false;
            $(".emptyFieldsError").show();
            $(this).parent().addClass("has-error has-feedback");
        }
        else if ($.isNumeric(value) === false)
        {
            flag = false;
            $(".numericValuesError").show();
            
            $(this).parent().addClass("has-error has-feedback");
        }
        else if(value < 0)
        {
            flag = false;
            $(".numericValuesErrorNegative").show();
            
            $(this).parent().addClass("has-error has-feedback");
        }
    }
    );
    var periodFrequency = obj[0];
    var mailFrequency = obj[1];
    if (flag === true)
    {
        $(".alertMessage").removeAttr("class");
        $(".alertMessage").empty();
        
        postAJAX("addReminder", {name: name, mailFrequency: mailFrequency, periodFrequency: periodFrequency, id: id, hostingId: hostingId, productId: productId}, function (result) {
            
            $('#Modal').modal('hide');
            alertMessage('#resultMessage', result.alert);
            refreshData('refreshData', '#reminderGroup', {hostingId: hostingId});

        });
    }
});



function periodConverter (period)
{
    switch (period)
        {
            case "1 Hour": 
                return 1;
            case "3 Hours": 
                return 3;
            case "6 Hours": 
                return 6;
            case "1 Day": 
                return 24;
            case "3 Days": 
                return 72;
            case "1 Week": 
                return 168;
            case "2 Weeks": 
                return 336;
            default:
                return period;
        }
        return false;
}

