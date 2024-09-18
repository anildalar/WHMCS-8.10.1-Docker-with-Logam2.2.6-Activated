jQuery(document).ready(function () {

    jQuery("#ajaxresult").empty();

    jQuery('#os_images').change(function () {
        if (jQuery(this).val() !== '0') {
            jQuery("input[value=REBUILD]").attr('disabled', false);
            jQuery(".rebuild-btn").css('background-color', '#0c708a !important');
        } else {
            jQuery("input[value=REBUILD]").attr('disabled', true);
            jQuery(".rebuild-btn").css('background-color', '#58bed8');
        }
    });
    if (jQuery('#firewallname').val() == '') {
        jQuery("#submit_firewall").attr('disabled', true);
    }
    jQuery('#firewallname').keyup(function () {
        if (jQuery(this).val() !== '') {
            jQuery("#submit_firewall").attr('disabled', false);
        } else {
            jQuery("#submit_firewall").attr('disabled', true);
        }
    });
    if (jQuery("#editSSHKeyModal #editSSHKeyName").val() == '') {
        jQuery("#editSSHKeyModal #editSSHKey").attr('disabled', true);
    }
    jQuery("#editSSHKeyModal #editSSHKeyName").keyup(function () {
        if (jQuery(this).val() !== '') {
            jQuery("#editSSHKeyModal #editSSHKey").attr('disabled', false);
        } else {
            jQuery("#editSSHKeyModal #editSSHKey").attr('disabled', true);
        }
    });
    if ((jQuery('#CreatenetworkModal #network_name').val() == '') || (jQuery('#CreatenetworkModal #ip_range').val() == '') || (jQuery('#CreatenetworkModal #ip_range_add').val() == '')) {
        jQuery("#create_networks").attr('disabled', true);
    }
    jQuery('#CreatenetworkModal #network_name').keyup(function () {
        if ((jQuery(this).val() !== '') && (jQuery('#CreatenetworkModal #ip_range').val() !== '') && (jQuery('#CreatenetworkModal #ip_range_add').val() !== '')) {
            jQuery("#CreatenetworkModal #create_networks").attr('disabled', false);
        } else {
            jQuery("#CreatenetworkModal #create_networks").attr('disabled', true);
        }
    });
    jQuery("#content_modal_network #add_network_subnet").attr('disabled', true);
    jQuery('#content_modal_network #IPRanges').keyup(function () {
        var ipv4 = /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)(\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}\b/;
        var ipv6 = /((([0-9a-fA-F]){1,4})\:){7}([0-9a-fA-F]){1,4}/;
        if ((jQuery(this).val() !== '') && (jQuery("#iprangesubnet").val() >= 0) && ((ipv4.test(jQuery(this).val())) || (ipv6.test(jQuery(this).val())))) {
            jQuery("#content_modal_network #add_network_subnet").attr('disabled', false);
        } else {
            jQuery("#content_modal_network #add_network_subnet").attr('disabled', true);
        }
    });
    jQuery('#CreatenetworkModal #ip_range').keyup(function () {
        var ipv4 = /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)(\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}\b/;
        var ipv6 = /((([0-9a-fA-F]){1,4})\:){7}([0-9a-fA-F]){1,4}/;
        if (((jQuery(this).val() !== '') && (jQuery('#CreatenetworkModal #network_name').val() !== '') && (jQuery('#CreatenetworkModal #ip_range_add').val() !== '')) && ((ipv4.test(jQuery(this).val())) || (ipv6.test(jQuery(this).val())))) {
            jQuery("#CreatenetworkModal #create_networks").attr('disabled', false);
        } else {
            jQuery("#CreatenetworkModal #create_networks").attr('disabled', true);
        }
    });
    jQuery('#CreatenetworkModal #ip_range_add').keyup(function () {
        if ((jQuery(this).val() !== '') && (Number(jQuery(this).val()) >= 0) && (jQuery('#CreatenetworkModal #network_name').val() !== '') && (jQuery('#CreatenetworkModal #ip_range').val() !== '')) {
            jQuery("#CreatenetworkModal #create_networks").attr('disabled', false);
        }
        else {
            jQuery("#CreatenetworkModal #create_networks").attr('disabled', true);
        }
    });
    var $destination = jQuery('#createRoutes_form #destination');
    var $ipRange = jQuery('#createRoutes_form #ip_ranges');
    var $gateway = jQuery('#createRoutes_form #gateway');
    var $addNetworkRoutes = jQuery("#add_network_routes");
    function toggleButtonState() {
        var destinationValue = $destination.val();
        var ipRangeValue = $ipRange.val();
        var gatewayValue = $gateway.val();
        var ipv4 = /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)(\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}\b/;
        var ipv6 = /((([0-9a-fA-F]){1,4})\:){7}([0-9a-fA-F]){1,4}/;

        // Check if any of the required fields is empty
        if (destinationValue === '' || ipRangeValue === '' || gatewayValue === '') {
            $addNetworkRoutes.prop('disabled', true);
        } else {
            if ((ipv4.test(gatewayValue) || ipv6.test(gatewayValue)) && (ipv4.test(destinationValue) || ipv6.test(destinationValue))) {
                $addNetworkRoutes.prop('disabled', false);
            } else {
                $addNetworkRoutes.prop('disabled', true);
            }
        }
    }
    $destination.keyup(toggleButtonState);
    $ipRange.keyup(toggleButtonState);
    $ipRange.on('input', toggleButtonState);
    $gateway.keyup(toggleButtonState);

    // Initial check on page load
    toggleButtonState();

    jQuery(document).on('click', '.ResourcesSubnet', function () {
        jQuery("#create_resources").data('id', jQuery(this).data('id'));
    });

    jQuery('body').on('click', '#network_delete', function () {
        var networkId = jQuery(this).data('id');
        jQuery('#networkConfirmDelete').data('id', networkId);
        jQuery('#networkdeleteModal').modal('show');

    });
    jQuery('body').on('click', '#networkConfirmDelete', function () {
        var networkId = jQuery(this).data('id');
        deleteNetwork(networkId);
    });
    jQuery('body').on('click', '.createSubnet', function (ev) {
        ev.stopPropagation()
        jQuery("#add_subnet").collapse('hide');
        jQuery("#Edit_aliasIP").collapse('hide');
        var networkId = jQuery(this).data('id');
        jQuery('#content_modal_network').modal('show');
        jQuery("#content_modal_network .shownmessage").remove();
        var name = jQuery(this).closest('tr').find('td').eq(0).text();
        jQuery('#content_modal_network #exampleModalLabel').html("Subnets(" + name + ")");
        getsubnet(networkId);
        getResourcesTable(networkId);
    });
    if (jQuery("#resources_option").val() == '0') {
        jQuery("#resources_option").html('<option value="0">Select Resource Type</option>');
        jQuery("#resources_option").attr('disabled', true);
    }
    jQuery(document).on('change', '#attach_resourse', function () {

        if (jQuery(this).val() == 'server') {
            getserverResourse('getserverResourse');
            jQuery("#resources_option").attr('disabled', false);
        }
        if (jQuery(this).val() == 'loadbalancer') {
            getserverResourse('getloadbalancerResourse');
            jQuery("#resources_option").attr('disabled', false);
        }
        if (jQuery(this).val() == '0') {
            jQuery("#resources_option").html('<option value="0">Select Resource Type</option>');
            jQuery("#resources_option").attr('disabled', true);
        }
    });
    jQuery("#resource_name").parent().hide();

    jQuery(document).on("change", "#private_ip_resourse", function () {
        if (jQuery(this).is(":checked")) {
            jQuery("#resource_name").parent().show();
        } else {
            jQuery("#resource_name").parent().hide();
            jQuery("#resource_name").val('');
        }
    });
    jQuery(document).on('click', '#content_modal_network .adds_alias_ip', function () {
        var cloned = jQuery("#content_modal_network .change_alias_ip").last().clone();
        // cloned.find('input').val('');
        cloned.removeClass('mb-4');
        cloned.find('.adds_alias_ip').replaceWith('<button type="button" class="btn btn-danger delete_alias_ip" style="padding: 6px 32px;">Delete</button>');
        jQuery(this).closest('#content_modal_network .change_alias_ip').last().before(cloned);
        jQuery("#content_modal_network .change_alias_ip").last().find('input').val('');
    });

    jQuery(document).on('click', '#content_modal_network .delete_alias_ip', function () {
        jQuery(this).closest('.change_alias_ip').remove();
        validateInputAndToggleButtonForAllInputs();
    });

    function validateInputAndToggleButtonForAllInputs() {
        jQuery(".change_alias_ip .edit_alias_ip").each(function () {
            var inputField = jQuery(this);
            validateInputAndToggleButton(inputField);
        });
    }
    // function checkInputsAndToggleSubmitButton(this) {
    //     var reverseIpv6Value = jQuery("this").val();
    //     var reverseDnsNameValue = jQuery("this").val();
    //     var dnsRegex = /^((?!-)[A-Za-z0-9-]{1,63}(?<!-)\.)+[A-Za-z]{2,6}$/;
    //     if (reverseIpv6Value !== '' && reverseDnsNameValue !== '' && dnsRegex.test(reverseDnsNameValue)) {
    //         jQuery("#create_ipv6_modal #reverse_dns_submit").attr('disabled', false);
    //     } else {
    //         jQuery("#create_ipv6_modal #reverse_dns_submit").attr('disabled', true);
    //     }
    // }
    // jQuery(document).on("click", "#create_ipv6_modal #reverse_dns_form_ipv6 .delete_alias_ip", function () {
    //     jQuery("#add_alias_ip").attr('disabled', false);
    // });

    function checkInputsAndToggleSubmitButton() {
        var isValid = true;
        jQuery("#create_ipv6_modal #reverse_dns_form_ipv6 .reverse_ipv6").each(function () {
            var reverseIpv6Value = jQuery(this).val();
            var reverseDnsNameValue = jQuery(this).closest(".dns_container").find(".reverse_dns_name").val();
            var ipv6Regex = /^::\d+/;
            var dnsRegex = /^((?!-)[A-Za-z0-9-]{1,63}(?<!-)\.)+[A-Za-z]{2,6}$/;
            if (!ipv6Regex.test(reverseIpv6Value) || reverseDnsNameValue === '' || !dnsRegex.test(reverseDnsNameValue)) {
                isValid = false;
            }
        });
        jQuery("#create_ipv6_modal #reverse_dns_submit").prop('disabled', !isValid);
    }

    jQuery(document).on("click", "#create_ipv6_modal #reverse_dns_form_ipv6 .delete_alias_ip", function () {
        jQuery("#add_alias_ip").prop('disabled', false);
    });
    jQuery("#create_ipv6_modal #reverse_dns_submit").prop('disabled', true);
    jQuery(document).on("keyup", "#create_ipv6_modal #reverse_dns_form_ipv6 .reverse_ipv6, #create_ipv6_modal #reverse_dns_form_ipv6 .reverse_dns_name", function () {
        checkInputsAndToggleSubmitButton();
    });

    var dataip = jQuery("#reverse_dns_modal_IPV4 #reverse_dns_ptr").val();
    if (dataip == '') {
        jQuery("#reverse_dns_submit_ipv4").attr('disabled', true);
    }
    jQuery(document).on("keyup", "#reverse_dns_modal_IPV4 #reverse_dns_ptr", function () {
        if (jQuery(this).val() !== '') {
            jQuery("#reverse_dns_submit_ipv4").attr('disabled', false);
        } else {
            jQuery("#reverse_dns_submit_ipv4").attr('disabled', true);
        }
    });
    var dataipip6 = jQuery("#reverse_dns_modal_IPV6 .reverse_dns_name").val();
    var datareverse_ipv6 = jQuery("#reverse_dns_modal_IPV6 .reverse_ipv6").val();
    if (dataipip6 == '' || datareverse_ipv6 == '') {
        jQuery("#reverse_dns_ipv6_submit").attr('disabled', true);
    }
    jQuery(document).on("keyup", "#reverse_dns_modal_IPV6 .reverse_dns_name, #reverse_dns_modal_IPV6 .reverse_ipv6", function () {
        var reverseDnsNameValue = jQuery("#reverse_dns_modal_IPV6 .reverse_dns_name").val().trim();
        var reverseIpv6Value = jQuery("#reverse_dns_modal_IPV6 .reverse_ipv6").val().trim();
        var dnsRegex = /^((?!-)[A-Za-z0-9-]{1,63}(?<!-)\.)+[A-Za-z]{2,6}$/;
        var ipv6Regex = /^::\d+/;
        if (reverseDnsNameValue !== '' && ipv6Regex.test(reverseIpv6Value) && dnsRegex.test(reverseDnsNameValue)) {
            jQuery("#reverse_dns_ipv6_submit").prop('disabled', false);
        } else {
            jQuery("#reverse_dns_ipv6_submit").prop('disabled', true);
        }
    });
    jQuery('.protocol').change(function () {
        var $this = jQuery(this);
        if ($this.val() != 'tcp' && $this.val() != 'udp') {
            $this.closest('.inound_create_rule').find('.port1').val('');
            $this.closest('.inound_create_rule').find('.port2').val('');
            $this.closest('.outound_create_rule').find('.port1').val('');
            $this.closest('.outound_create_rule').find('.port2').val('');
            $this.closest('.inound_create_rule').find('.port1').attr('disabled', true);
            $this.closest('.inound_create_rule').find('.port1').css('background-color', '#afa5a538');
            $this.closest('.outound_create_rule').find('.port1').attr('disabled', true);
            $this.closest('.outound_create_rule').find('.port1').css('background-color', '#afa5a538');
            $this.closest('.inound_create_rule').find('.port2').attr('disabled', true);
            $this.closest('.inound_create_rule').find('.port2').css('background-color', '#afa5a538');
            $this.closest('.outound_create_rule').find('.port2').attr('disabled', true);
            $this.closest('.outound_create_rule').find('.port2').css('background-color', '#afa5a538');
        } else {
            $this.closest('.inound_create_rule').find('.port1').attr('disabled', false);
            $this.closest('.inound_create_rule').find('.port1').css('background-color', '#FFFFFF');
            $this.closest('.outound_create_rule').find('.port1').attr('disabled', false);
            $this.closest('.outound_create_rule').find('.port1').css('background-color', '#FFFFFF');
            $this.closest('.inound_create_rule').find('.port2').attr('disabled', false);
            $this.closest('.inound_create_rule').find('.port2').css('background-color', '#FFFFFF');
            $this.closest('.outound_create_rule').find('.port2').attr('disabled', false);
            $this.closest('.outound_create_rule').find('.port2').css('background-color', '#FFFFFF');
        }
    });
    jQuery('#iso').change(function () {

        if (jQuery(this).val() !== '0') {
            jQuery(".mount-btn").attr('disabled', false);
            jQuery(".mount-btn").css('background-color', 'rgb(9 76 149)');
        } else {
            jQuery(".mount-btn").attr('disabled', true);
            jQuery(".mount-btn").css('background-color', '#3cb3f4');
        }
    });
    // /firewall edit and delete
    jQuery('body').on('click', '#firewall_delete', function () {
        var firewallId = $(this).data('id');
        jQuery('#confirmDelete').data('id', firewallId);
        jQuery('#deleteModal').modal('show');
    });
    jQuery('body').on('click', '#confirmDelete', function () {
        var firewallId = jQuery(this).data('id');

        deletefirewall(firewallId);
    });
    jQuery(".bg-dark.text-light").append("<button id='copy_floatingIps' style='float:right; background-color: inherit; color: white;'>Copy</button>");
    jQuery(".bg-dark.text-light").hover(
        function () {
            jQuery("#copy_floatingIps").show();
        },
        function () {
            jQuery("#copy_floatingIps").hide();
        }
    );
    jQuery('body').on('click', '.bg-dark.text-light, #copy_floatingIps', function (event) {
        jQuery('#copy_floatingIps').hide();
        var divCopy = jQuery(this).closest('.bg-dark.text-light').clone();
        divCopy.find('button').remove();
        var text = divCopy.text();
        navigator.clipboard.writeText(text);
        if (!jQuery('#copiedMessage').length) {
            jQuery(this).closest('.bg-dark.text-light').append("<button class='btn-success' id='copiedMessage' style='float:right; color: white; border-radius:20px; border:none;'>Copied</button>");
            setTimeout(function () {
                jQuery('#copiedMessage').remove();
                jQuery('#copy_floatingIps').show();
                jQuery('.bg-dark.text-light').trigger('mouseenter');
            }, 500);
        }
    });
    jQuery("#add_alias_ip").attr('disabled', true);

    jQuery(".change_alias_ip .edit_alias_ip").keyup(function () {
        var inputField = jQuery(this);
        validateInputAndToggleButton(inputField);


    });

    function validateInputAndToggleButton(inputField) {
        var ipv4 = /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)(\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}\b/;
        var ipv6 = /((([0-9a-fA-F]){1,4})\:){7}([0-9a-fA-F]){1,4}/;

        if ((ipv4.test(inputField.val()) || ipv6.test(inputField.val()) || inputField.val() == '') && (inputField.val() !== inputField.data('value'))) {
            jQuery("#add_alias_ip").prop('disabled', false);
        } else {
            jQuery("#add_alias_ip").prop('disabled', true);
        }
    }
    // getOSimage_flavor('os_image_info');
    gettablecontent('gettable_snapshot');
    rebuildImages('getimages');
    loadIsos('getisos');
    getVolumeSize('getvol_size');
    getfirewall('create_firewall');
    getFirewallRules('firewall_rules');
    getNetwork('get_network');
    ReverseDns('reverse_dns');
    TaskHistory('getTaskHistory');
    // floatingIPcounter();
    getFloatingIP_tablecontent('floating_ips');
    graphSection_metrics('metrics_live', 'live', 'CPU');
    jQuery(".graph-select").change(function () {
        var valueSelected = this.value;
        var selectedOption = jQuery("#graph-selection option:selected").val();
        graphSection_metrics('metrics_live', valueSelected, selectedOption);
        // console.log(selectedOption);
        // jQuery('.grph_section').hide();
        // jQuery('#' + selectedOption).show();

    });
    jQuery('#graph-selection').change(function () {
        var selectedGraph = jQuery(this).val();
        var selectedOption = jQuery(".graph-select option:selected").val();
        graphSection_metrics('metrics_live', selectedOption, selectedGraph);
        // jQuery('.grph_section').hide();
        // jQuery('#' + selectedGraph).show();
    });
    getCurrency();
});
jQuery("#totalpriceFLP").text((jQuery("#noOFfloatIP").val()) * FLPprice);
jQuery('#noOFfloatIP').change(function () {
    noOffloatIP = jQuery(this).val();
    flptotalprice = noOffloatIP * FLPprice;
    jQuery("#totalpriceFLP").text(flptotalprice);
});

function getFirewallRules(action) {
    $("#firewall_rules_table").dataTable().fnDestroy();
    var dataTableObj = $("#firewall_rules_table").DataTable({
        "ajax": {
            "url": "",
            "type": "POST",
            "data": {
                customaction: action,
            },
            "dataSrc": "data"
        },
        columns: [
            { "data": 'Protocol' },
            { "data": 'Port' },
            { "data": 'Ip' },
            { "data": 'direction' },
            { "data": 'description' }
        ]
    });

}

function sendfirewalldata(action) {
    var inboundData = jQuery('#CreatefirewallModal .FormData_inbound').serializeArray();
    var outboundData = jQuery('.outbound_firewall #FormData_outbound').serializeArray();
    var firewall_name = jQuery('#FormData_firewallname').serializeArray();

    var rules = [];
    var rule = {};
    var mergedData = outboundData.concat(inboundData);
    for (var i = 0; i < mergedData.length; i++) {
        if (mergedData[i].name == 'out_direction' || mergedData[i].name == 'In_direction') {
            if (Object.keys(rule).length !== 0) {
                rules.push(rule);
            }
            rule = {};
        }
        rule[mergedData[i].name] = mergedData[i].value;
    }
    if (Object.keys(rule).length !== 0) {
        rules.push(rule);
    }

    var data = {
        customaction: action,
        firewall_name: firewall_name[0].value,
        rules: rules
    };
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#submit_firewall").attr('disabled', true);
            jQuery("#submit_firewall i").addClass("fa-spinner fa-spin");
            jQuery("#create_firewall").attr('disabled', true);
            jQuery("#create_firewall i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {

            jQuery("#submit_firewall").attr('disabled', false);
            jQuery("#CreatefirewallModal").modal('hide');
            jQuery("#CreatefirewallModal .inbound_firewall .inound_create_rule").remove();
            jQuery("#CreatefirewallModal .outbound_firewall .outound_create_rule").remove();
            jQuery("#firewallname").val('');
            response = JSON.parse(response);
            if (response.status !== 'error') {
                liveToast_success();
                jQuery(".toast-body").html('<span class="mounterr"> Successfully firewall created </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                var used = jQuery("#firewall_create_table tbody tr").length;
                var used_zero = jQuery("#firewall_create_table tbody tr td").length;
                function updateFirewall() {
                    Promise.all([
                        getfirewall('create_firewall'),
                        getFirewallRules('firewall_rules')
                    ]).then(function () {
                        var text_old = $('#create_firewall').text().split('/');
                        if (text_old[1] && text_old[1].slice(0, -1) != "0") {
                            if (used_zero == '1') {
                                used = '0';
                            }
                            var new_text = '(' + (Number(used) + 1) + '/' + text_old[1];
                            $('#create_firewall').text('Create Firewall ' + new_text);
                        }
                        jQuery("#create_firewall").attr('disabled', false);
                        jQuery("#submit_firewall i").removeClass("fa-spinner fa-spin");
                    });
                }

                setTimeout(updateFirewall, 5000);
            }
            else {
                jQuery("#create_firewall i").removeClass("fa-spinner fa-spin");
                jQuery("#submit_firewall").attr('disabled', false);
                jQuery("#CreatefirewallModal").modal('hide');
                jQuery("#create_firewall").attr('disabled', false);
                jQuery("#submit_firewall i").removeClass("fa-spinner fa-spin");
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr"> ' + response['msg'] + ' </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');

            }
        }
    });
}
function getfirewall(action) {

    jQuery("#create_firewall").attr('disabled', true);
    $("#firewall_create_table").dataTable().fnDestroy();
    var dataTableObj = $("#firewall_create_table").DataTable({
        "ajax": {
            "url": "",
            "type": "POST",
            "data": {
                customaction: action,
            },
            "dataSrc": "data"
        },
        columns: [
            { "data": 'Name' },
            { "data": 'Created' },
            { "data": 'Inbound' },
            { "data": 'Outbound' },
            { "data": 'Action' }
        ],
        "initComplete": function () {
            jQuery("#create_firewall").attr('disabled', false);
        }
    });
}
function getserverResourse(action) {

    var networkId = jQuery("#create_resources").data('id');
    var data = {
        customaction: action,
        networkId: networkId
    };
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#create_resources").attr('disabled', true);
            jQuery("#create_resources i").addClass("fa-spinner fa-spin");
            jQuery("#resources_option").html('<option>Loading...</option>');
        },
        success: function (response) {
            jQuery("#create_resources").attr('disabled', false);
            jQuery("#create_resources i").removeClass("fa-spinner fa-spin");
            jQuery("#resources_option").html(response);
        }
    });

}
function getResourcesTable(networkId) {
    var action = "getResourcesTable";
    $("#Resources_table").dataTable().fnDestroy();
    var dataTableObj = $("#Resources_table").DataTable({
        "ajax": {
            "url": "",
            "type": "POST",
            "data": {
                customaction: action,
                networkId: networkId
            },
            "dataSrc": "data"
        },
        columns: [
            { "data": 'server' },
            { "data": 'ip' },
            { "data": 'alias_ip' },
            { "data": 'alias_ips_edit' }
        ],
        initComplete: function () {
        }

    });
}

function ReverseDns(action) {
    jQuery("#create_reverse_Dns").attr('disabled', true);
    jQuery("#dns_create_table").dataTable().fnDestroy();
    var dataTableObj = $("#dns_create_table").DataTable({
        "ajax": {
            "url": "",
            "type": "POST",
            "data": {
                customaction: action,
            },
            "dataSrc": function (data) {
                if (data && Array.isArray(data.data)) {
                    data.data.forEach(function (item) {
                        jQuery("#create_reverse_Dns").data('prep_id', item.pre_ip);
                        delete item.pre_ip;
                    });
                    return data.data;

                }
            },
        },
        columns: [
            { "data": 'name' },
            { "data": 'ip' },
            { "data": 'reverseDns' },
            { "data": 'DnsAction' }
        ],
        "initComplete": function () {
            jQuery("#create_reverse_Dns").attr('disabled', false);
        }
    });
}

function Edit_reverse_dns(action, name, ip, Dns_ptr) {
    if (name == 'ipv4') {
        jQuery('#reverse_dns_modal_IPV4 #reverse_dns_ip').val(ip);
        jQuery('#reverse_dns_modal_IPV4 #reverse_dns_ptr').val(Dns_ptr);
        jQuery('#reverse_dns_modal_IPV4').modal('show');
    }
    if (name == 'ipv6') {
        var parts = ip.split("::");
        var firstPart = parts[0];
        var secondPart = parts[1];
        delete_reverse_dns
        jQuery('#reverse_dns_modal_IPV6 #delete_reverse_dns').data('ip', ip);
        jQuery('#reverse_dns_modal_IPV6 .reverse_dns_ip').val(firstPart);
        jQuery('#reverse_dns_modal_IPV6 .reverse_ipv6').val('::' + secondPart);
        jQuery('#reverse_dns_modal_IPV6 .reverse_dns_name').val(Dns_ptr);
        jQuery('#reverse_dns_modal_IPV6').modal('show');
    }
}
function create_ipv6_ReverseDns(action) {
    var ipv6 = jQuery("#create_reverse_Dns").data('prep_id');
    var parts = ipv6.split("::");
    var firstPart = parts[0];
    var dnsContainerCount = jQuery('#create_ipv6_modal #reverse_dns_form_ipv6 .dns_container').length;
    if (dnsContainerCount === 0) {
        jQuery('#create_ipv6_modal .reverse_dns_ip').val(firstPart);
        jQuery('#create_ipv6_modal .reverse_ipv6').val('::');
        var clonedDiv = jQuery('#create_ipv6_modal .dns_container').first().clone(true);
        clonedDiv.find('.reverse_dns_ptr').val('');
        clonedDiv.show();
        jQuery('#create_ipv6_modal #reverse_dns_form_ipv6 .add_moreDnsIpv6').before(clonedDiv);
    }
    jQuery('#create_ipv6_modal').modal('show');

}
function changeDns(action) {
    if (action == 'changeDnsipv4') {
        var formData = jQuery('#reverse_dns_modal_IPV4 #reverse_dns_form').serializeArray();
        var data = {
            customaction: action,
            ip: formData[0].value,
            ptr: formData[1].value
        };
        jQuery.ajax({
            url: "",
            type: 'POST',
            data: data,
            beforeSend: function () {
                jQuery("#reverse_dns_submit_ipv4").attr('disabled', true);
                jQuery("#reverse_dns_submit_ipv4 i").addClass("fa-spinner fa-spin")
            },
            success: function (response) {
                jQuery("#reverse_dns_submit_ipv4").attr('disabled', false);
                jQuery("#reverse_dns_submit_ipv4 i").removeClass("fa-spinner fa-spin")
                jQuery("#reverse_dns_modal_IPV4").modal('hide');
                json_response = JSON.parse(response);
                if (json_response.status == 'error') {
                    liveToast_Errors();
                    jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                }
                else {
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mounterr"> Successfully reverse dns updated </span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    setTimeout(function () {
                        ReverseDns('reverse_dns');
                    }, 5000);
                }
            }
        });
    } else if (action == 'createDnsipv6') {
        var formData = jQuery('#create_ipv6_modal #reverse_dns_form_ipv6').serializeArray();
        var resultArray = [];

        for (var i = 0; i < formData.length; i += 3) {
            var dnsPtrIndex = i + 2;
            var ipNoIndex = i;
            var ipv6NoIndex = i + 1;

            if (formData[dnsPtrIndex] && formData[ipNoIndex] && formData[ipv6NoIndex]) {
                var ipNoValue = formData[ipNoIndex].value;
                var ipv6NoValue = formData[ipv6NoIndex].value;

                if (ipNoValue.trim() !== '' && ipv6NoValue.trim() !== '') {
                    var combinedIPv6 = ipNoValue + ipv6NoValue;
                    resultArray.push({ "dns_ptr": formData[dnsPtrIndex].value, "ip": combinedIPv6 });
                }
            }
        }
        if (resultArray.length > 0) {
            var data = {
                customaction: action,
                data: resultArray
            };
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: data,
                beforeSend: function () {
                    jQuery("#reverse_dns_submit").attr('disabled', true);
                    jQuery("#reverse_dns_submit i").addClass("fa-spinner fa-spin")
                },
                success: function (response) {
                    jQuery("#reverse_dns_submit").attr('disabled', false);
                    jQuery("#reverse_dns_submit i").removeClass("fa-spinner fa-spin")
                    jQuery('#create_ipv6_modal').modal('hide');
                    json_response = JSON.parse(response);
                    if (json_response.status == 'error') {
                        liveToast_Errors();
                        jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                    }
                    else {
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully reverse dns updated </span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        jQuery("#create_ipv6_modal #reverse_dns_form_ipv6 .dns_container").remove();
                        setTimeout(function () {
                            ReverseDns('reverse_dns');
                        }, 5000);
                    }
                }
            })
        }
        else {
            liveToast_Errors();
            jQuery(".toast-body").html('<span class="mounterr"> Please fill the required fields </span>');
            jQuery('#liveToast').removeClass('hide');
            jQuery('#liveToast').addClass('block fade show');
        }
    } else if (action == 'editDnsipv6') {
        var formData = jQuery('#reverse_dns_modal_IPV6 #reverse_dns_edit_form_ipv6').serializeArray();
        var data = {
            customaction: action,
            ip: formData[0].value,
            ipv6: formData[1].value,
            Dns_ptr: formData[2].value
        };
        jQuery.ajax({
            url: "",
            type: 'POST',
            data: data,
            beforeSend: function () {
                jQuery("#reverse_dns_ipv6_submit").attr('disabled', true);
                jQuery("#reverse_dns_ipv6_submit i").addClass("fa-spinner fa-spin")
            },
            success: function (response) {
                jQuery("#reverse_dns_ipv6_submit").attr('disabled', false);
                jQuery("#reverse_dns_ipv6_submit i").removeClass("fa-spinner fa-spin")
                jQuery("#reverse_dns_modal_IPV6").modal('hide');
                json_response = JSON.parse(response);
                if (json_response.status == 'error') {
                    liveToast_Errors();
                    jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                }
                else {
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mounterr"> Successfully reverse dns updated </span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    setTimeout(function () {
                        ReverseDns('reverse_dns');
                    }, 5000);
                }
            }
        });

    }
}
function refresh_history() {
    jQuery("#refresh_history i").addClass("fa-spin");
    TaskHistory('getTaskHistory');
}

function TaskHistory(action) {
    jQuery("#task_history_table").dataTable().fnDestroy();
    var dataTableObj = $("#task_history_table").DataTable({
        "ajax": {
            "url": "",
            "type": "POST",
            "data": {
                customaction: action,
            },
            "dataSrc": "data"
        },
        "order": [[3, 'desc']],
        "columns": [
            { "data": 'TaskName' },
            { "data": 'Status' },
            { "data": 'created' },
            { "data": 'completed' }
        ],
        "initComplete": function () {
            jQuery("#refresh_history i").removeClass("fa-spin");
        }
    });
}
// pageLength: 2, // Set the number of items per page to 2
//     pagingType: 'full_numbers', // Use the 'full_numbers' paging type
function delete_reverse_dns(element) {
    var $ip = jQuery(element).data('ip');
    jQuery('#ReverseDnsdeleteModal').modal('show');
    jQuery("#ReverseDnsConfirmDelete").data('ip', $ip);
}
function confirmreverseDnsDelete(action) {
    var ip = jQuery("#ReverseDnsConfirmDelete").data('ip');
    var data = {
        customaction: action,
        ip: ip,
        Dns_ptr: ""
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#ReverseDnsConfirmDelete").attr('disabled', true);
            jQuery("#create_reverse_Dns").attr('disabled', true);
            jQuery("#ReverseDnsConfirmDelete i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            jQuery("#ReverseDnsConfirmDelete").attr('disabled', false);
            jQuery("#ReverseDnsdeleteModal").modal('hide');
            jQuery("#reverse_dns_modal_IPV6").modal('hide');
            jQuery("#create_reverse_Dns").attr('disabled', false);
            jQuery("#ReverseDnsConfirmDelete i").removeClass("fa-spinner fa-spin");
            json_response = JSON.parse(response);
            if (json_response.status == 'error') {
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
            }
            else {
                liveToast_success();
                jQuery(".toast-body").html('<span class="mounterr"> Successfully reverse dns deleted </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                setTimeout(function () {
                    ReverseDns('reverse_dns');
                }, 5000);
            }
        }
    })

}
function addMoreDnsIpv6() {
    jQuery("#create_ipv6_modal #reverse_dns_submit").prop('disabled', true);
    var clonedDiv = jQuery('#create_ipv6_modal .dns_container').first().clone(true);
    clonedDiv.find('.reverse_dns_ptr').val('');
    clonedDiv.show();
    jQuery('#create_ipv6_modal #reverse_dns_form_ipv6 .add_moreDnsIpv6').before(clonedDiv);
}
function DeleteDnsIpv6(element) {
    $(element).closest('.dns_container').remove();
    checkInputsAndToggleSubmitButton();

}
function checkInputsAndToggleSubmitButton() {
    var isValid = true;
    jQuery("#create_ipv6_modal #reverse_dns_form_ipv6 .reverse_ipv6").each(function () {
        var reverseIpv6Value = jQuery(this).val();
        var reverseDnsNameValue = jQuery(this).closest(".dns_container").find(".reverse_dns_name").val();
        var ipv6Regex = /^::\d+/;
        var dnsRegex = /^((?!-)[A-Za-z0-9-]{1,63}(?<!-)\.)+[A-Za-z]{2,6}$/;

        if (!ipv6Regex.test(reverseIpv6Value) || reverseDnsNameValue === '' || !dnsRegex.test(reverseDnsNameValue)) {
            isValid = false;

        }
    });
    jQuery("#create_ipv6_modal #reverse_dns_submit").prop('disabled', !isValid);
}
function deletefirewall(firewallId) {
    var firewallId = firewallId;
    data = {
        customaction: "firewall_delete",
        firewall_id: firewallId
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#deleteModal #confirmDelete").attr('disabled', true);
            jQuery("#deleteModal i").addClass("fa-spinner fa-spin");

        },
        success: function (response) {
            jQuery('#deleteModal').modal('hide');
            json_response = JSON.parse(response);
            if (json_response.status == 'error') {
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                jQuery("#deleteModal i").removeClass("fa-spinner fa-spin");
                jQuery("#deleteModal #confirmDelete").attr('disabled', false);
            }
            else {
                function updateFirewall() {
                    var used = jQuery("#firewall_create_table tbody tr").length;
                    var used_zero = jQuery("#firewall_create_table tbody tr td").length;
                    Promise.all([getfirewall('create_firewall'), getFirewallRules('firewall_rules')]).then(function () {
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully firewall deleted </span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        var text_old = $('#create_firewall').text().split('/');
                        if (text_old[1] && text_old[1].slice(0, -1) != "0") {
                            if (used_zero == '1') {
                                used = '0';
                            }
                            var new_text = '(' + (Number(used) - 1) + '/' + text_old[1];
                            $('#create_firewall').text('Create Firewall ' + new_text);
                        }

                        jQuery("#deleteModal i").removeClass("fa-spinner fa-spin");
                        jQuery("#deleteModal #confirmDelete").attr('disabled', false);
                    });
                }
                setTimeout(updateFirewall, 5000);
            }
        }
    });

}
function edit_firewall(action) {
    jQuery("#updatefirewallModal .inbound_firewall .inound_create_rule").remove();
    jQuery("#updatefirewallModal .outbound_firewall .outound_create_rule").remove();
    data = {
        customaction: "firewall_edit",
        firewall_id: action
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#updatefirewallModal").modal('show')
            jQuery('#updatefirewallModal .modal-content .overlaydivupdatefirewall').css('display', 'block');
            jQuery("#updatefirewallModal .updateLoader i").addClass("fa-spinner fa-spin");
            jQuery("#updatefirewallModal #update_firewall").attr('disabled', true);
            jQuery("#updatefirewallModal #update_inbound_rules").css({
                'pointerEvents': 'none',
                'backgroundColor': 'rgb(204, 204, 204)'
            });
            jQuery("#updatefirewallModal #update_outbound_rules").css({
                'pointerEvents': 'none',
                'backgroundColor': 'rgb(204, 204, 204)'
            });
        },
        success: function (response) {
            jQuery('#updatefirewallModal .modal-content .overlaydivupdatefirewall').css('display', 'none');
            jQuery("#updatefirewallModal #update_inbound_rules").css({
                'pointerEvents': 'auto',
                'backgroundColor': 'rgba(247, 244, 222, 0.25)',

            });
            jQuery("#updatefirewallModal #update_outbound_rules").css({
                'pointerEvents': 'auto',
                'backgroundColor': 'inherit'
            });
            jQuery("#updatefirewallModal #update_outbound_rules").attr('disabled', false);
            jQuery("#updatefirewallModal #update_firewall").attr('disabled', false);
            jQuery("#updatefirewallModal .updateLoader i").removeClass("fa-spinner fa-spin");
            json_response = JSON.parse(response);
            for (var i = 0; i < json_response.length; i++) {
                if (json_response[i].direction == "out") {
                    var clonedDiv = $('.outound_create_rule').first().clone(true);
                    clonedDiv.find('.description').val(json_response[i].description);
                    clonedDiv.find('.protocol').val(json_response[i].protocol);
                    if (json_response[i].protocol !== "tcp" && json_response[i].protocol !== "udp") {
                        clonedDiv.find('.port1').attr('disabled', true);
                        clonedDiv.find('.port1').css('background-color', '#afa5a538');
                        clonedDiv.find('.port2').attr('disabled', true);
                        clonedDiv.find('.port2').css('background-color', '#afa5a538');
                    }
                    if ((json_response[i].port !== null) && (json_response[i].port !== "any") && (json_response[i].port !== "")) {
                        var port = json_response[i].port.split('-');
                        clonedDiv.find('.port1').val(port[0]);
                        if (port.length > 1) {
                            clonedDiv.find('.port2').val(port[1]);
                        }
                    }
                    else {
                        clonedDiv.find('.port1').val(json_response[i].port);
                    }
                    $("#updatefirewallModal .firewall_id #firewall_id").val(json_response[i].firewall_id);

                    clonedDiv.show();
                    $('#update_outbound_rules').before(clonedDiv);
                }
                else if (json_response[i].direction == "in") {
                    var clonedDiv = $('.inound_create_rule').first().clone(true);
                    clonedDiv.find('.description').val(json_response[i].description);
                    clonedDiv.find('.protocol').val(json_response[i].protocol);

                    if (json_response[i].protocol !== "tcp" && json_response[i].protocol !== "udp") {
                        clonedDiv.find('.port1').attr('disabled', true);
                        clonedDiv.find('.port1').css('background-color', '#afa5a538');
                        clonedDiv.find('.port2').attr('disabled', true);
                        clonedDiv.find('.port2').css('background-color', '#afa5a538');
                    }

                    if ((json_response[i].port !== null) && (json_response[i].port !== "any") && (json_response[i].port !== "")) {
                        var port = json_response[i].port.split('-');
                        clonedDiv.find('.port1').val(port[0]);
                        if (port.length > 1) {
                            clonedDiv.find('.port2').val(port[1]);
                        }
                    }
                    else {
                        clonedDiv.find('.port1').val(json_response[i].port);
                    }
                    $("#updatefirewallModal .firewall_id #firewall_id").val(json_response[i].firewall_id);
                    clonedDiv.show();
                    $('#update_inbound_rules').before(clonedDiv);
                }
            }
        }
    });
}
function updatedfirewalldata(action) {
    var inboundData = jQuery('#updatefirewallModal .FormData_inbound').serializeArray();
    var outboundData = jQuery('#updatefirewallModal .outbound_firewall #FormData_outbound').serializeArray();
    var firewall_ID = jQuery('#updatefirewallModal #FormData_firewallId').serializeArray();

    var rules = [];
    var rule = {};
    var mergedData = outboundData.concat(inboundData);
    for (var i = 0; i < mergedData.length; i++) {
        if (mergedData[i].name == 'out_direction' || mergedData[i].name == 'In_direction') {
            if (Object.keys(rule).length !== 0) {
                rules.push(rule);
            }
            rule = {};
        }
        rule[mergedData[i].name] = mergedData[i].value;
    }
    if (Object.keys(rule).length !== 0) {
        rules.push(rule);
    }
    var data = {
        customaction: action,
        firewall_Id: firewall_ID[0].value,
        rules: rules
    };

    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#submit_firewall").attr('disabled', true);
            jQuery("#create_firewall").attr('disabled', true);
            jQuery("#update_firewall i").addClass("fa-spinner fa-spin");
            jQuery("#update_firewall").attr('disabled', true);

        },
        success: function (response) {
            jQuery("#update_firewall").attr('disabled', false);
            jQuery("#update_firewall i").removeClass("fa-spinner fa-spin");
            jQuery("#create_firewall").attr('disabled', false);
            jQuery("#submit_firewall").attr('disabled', false);
            jQuery("#updatefirewallModal").modal('hide');
            jQuery("#updatefirewallModal .inbound_firewall .inound_create_rule").remove();
            jQuery("#updatefirewallModal .outbound_firewall .outbound_create_rule").remove();

            try {
                json_response = JSON.parse(response);
            }
            catch (error) {
                console.log('Error parsing JSON:', error, json_response);
            }
            if (json_response.status == 'error') {
                jQuery("#updatefirewallModal").modal('hide');
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
            }
            else {
                liveToast_success();
                jQuery(".toast-body").html('<span class="mounterr"> Successfully firewall updated </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                getFirewallRules('firewall_rules');
                getfirewall('create_firewall');
                setTimeout(function () {

                }, 7000);
            }
        }
    });
}
// newtrok section
function getNetwork(action) {
    jQuery("#create_network").attr('disabled', true);
    jQuery("#network_table").dataTable().fnDestroy();
    var dataTableObj = $("#network_table").DataTable({
        "ajax": {
            "url": "",
            "type": "POST",
            "data": {
                customaction: action,
            },
            "dataSrc": "data"
        },
        columns: [
            { "data": 'Name' },
            { "data": 'IpRange' },
            { "data": 'Action' },
        ],
        "createdRow": function (row, data, dataIndex) {
            $(row).find('td:last').css({
                'display': 'flex',
                'justify-content': 'space-evenly',
                'position': 'relative',
            });
        },
        "initComplete": function () {
            jQuery("#create_network").attr('disabled', false);
        }
    });
}
function createNetwork(action) {
    var formData = jQuery('#createNetwork_form').serializeArray();
    var network_name = formData[0].value;
    var network_zone = formData[1].value;
    var ip_range = formData[2].value;
    var ip_range_add = formData[3].value;
    var data = {

        customaction: action,
        network_name: network_name,
        network_zone: network_zone,
        ip_range: ip_range,
        ip_range_add: ip_range_add
    };
    if (network_name == '' || ip_range == '' || ip_range_add == '') {
        liveToast_Errors();
        jQuery(".toast-body").html('<span class="mounterr"> Please fill all the fields </span>');
        jQuery('#liveToast').removeClass('hide');
        jQuery('#liveToast').addClass('block fade show');
        return false;
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#create_networks").attr('disabled', true);
            jQuery("#create_networks i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            jQuery("#create_networks").attr('disabled', false);
            jQuery("#create_networks i").removeClass("fa-spinner fa-spin");
            jQuery("#closeModalButton").click();

            json_response = JSON.parse(response);
            if (json_response.status == 'error') {
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
            }
            else {
                liveToast_success();
                jQuery(".toast-body").html('<span class="mounterr"> Successfully network created </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                getNetwork('get_network');
            }
        }
    });
}
function deleteNetwork(data) {
    var action = "delete_network";
    data = {
        customaction: action,
        network_id: data
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#create_network").attr('disabled', true);
            jQuery("#networkConfirmDelete").attr('disabled', true);
            jQuery("#networkConfirmDelete i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            json_response = JSON.parse(response);
            jQuery('#networkdeleteModal').modal('hide');
            jQuery("#create_network").attr('disabled', false);
            jQuery("#networkConfirmDelete").attr('disabled', false);
            jQuery("#networkConfirmDelete i").removeClass("fa-spinner fa-spin");
            if (json_response.status == 'error') {
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
            }
            else {
                liveToast_success();
                jQuery(".toast-body").html('<span class="mounterr"> Successfully network deleted </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                setTimeout(function () {
                    getNetwork('get_network');
                }, 7000);
            }
        }

    });
}
function getsubnet(networkId) {
    var data = {
        customaction: "getsubnet",
        networkId: networkId
    };
    jQuery("#create_subnet").attr('disabled', true);
    $("#subnet_table").dataTable().fnDestroy();
    var dataTableObj = $("#subnet_table").DataTable({
        "ajax": {
            "url": "",
            "type": "POST",
            "data": data,
            "dataSrc": "data"
        },
        columns: [
            { "data": 'ip_range' },
            { "data": 'gateway' },
            { "data": 'action' }
        ],
        initComplete: function () {
            jQuery("#create_subnet").attr('disabled', false);
            jQuery('#content_modal_network #create_subnet').data('id', networkId);
        }
    });
}
function addSubnet(action) {
    var formData = jQuery('#createSubnet_form').serializeArray();
    var ip_range = formData[0].value;
    var ip_range_add = formData[1].value;
    var networkId = jQuery("#content_modal_network #create_subnet").data('id');
    var data = {
        customaction: action,
        ip_range_add: ip_range_add,
        ip_range: ip_range,
        networkId: networkId
    };
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#add_network_subnet").attr('disabled', true);
            jQuery("#add_network_subnet i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            jQuery("#add_network_subnet").attr('disabled', false);
            jQuery("#add_network_subnet i").removeClass("fa-spinner fa-spin");
            json_response = JSON.parse(response);
            if (json_response.status == 'error') {
                // liveToast_Errors();
                // jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                jQuery("#content_modal_network .shownmessage").remove();
                var error = 'Error! ' + json_response.msg;
                jQuery("#content_modal_network .modal-body:first").prepend('<div class="shownmessage alert alert-danger" role="alert">' + error + '</div>');
            }
            else {
                // liveToast_success();
                // jQuery(".toast-body").html('<span class="mounterr"> Successfully subnet created </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                var success = 'Success! Successfully subnet created';
                jQuery("#content_modal_network .shownmessage").remove();
                jQuery("#content_modal_network .modal-body").prepend('<div class="shownmessage" alert alert-success" role="alert">' + success + '</div>');
                getsubnet(data.networkId);
            }
        }
    });
}
function delete_subnet(networkId, ip_range) {
    jQuery('#subnetdeleteModal').modal('show');
    jQuery('#subnetdeleteModal #subnetConfirmDelete').data('id', networkId);
    jQuery('#subnetdeleteModal #subnetConfirmDelete').data('ipRange', ip_range);
    var subnetId = jQuery("#subnetConfirmDelete").data('id');

}
function confirmSubnetDelete(action) {
    var networkId = jQuery("#subnetConfirmDelete").data('id');
    var ip_range = jQuery("#subnetConfirmDelete").data('ipRange');

    var data = {
        customaction: action,
        subnetId: networkId,
        ip_range: ip_range
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#create_subnet").attr('disabled', true);
            jQuery("#subnetConfirmDelete").attr('disabled', true);
            jQuery("#subnetConfirmDelete i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            json_response = JSON.parse(response);
            jQuery('#subnetdeleteModal').modal('hide');
            jQuery("#create_subnet").attr('disabled', false);
            jQuery("#subnetConfirmDelete").attr('disabled', false);
            jQuery("#subnetConfirmDelete i").removeClass("fa-spinner fa-spin");
            if (json_response.status == 'error') {
                // liveToast_Errors();
                // jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                jQuery("#content_modal_network .shownmessage").remove();
                var error = 'Error! ' + json_response.msg;
                jQuery("#content_modal_network .modal-body:first").prepend('<div class="shownmessage alert alert-danger" role="alert">' + error + '</div>');
            }
            else {
                // liveToast_success();
                // jQuery(".toast-body").html('<span class="mounterr"> Successfully subnet deleted </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                var success = 'Success!  Successfully subnet deleted';
                jQuery("#content_modal_network .shownmessage").remove();
                jQuery("#content_modal_network .modal-body:first").prepend('<div class="shownmessage alert alert-success" role="alert">' + success + '</div>');
                setTimeout(function () {
                    getsubnet(data.subnetId);
                }, 7000);
            }
        }
    });
}

function Routes_edit(networkId, eventTarget, gateway) {
    jQuery('#route_modal_network').modal('show');
    jQuery("#route_modal_network .shownmessage").remove();
    var name = jQuery(eventTarget).closest('tr').find('td').eq(0).text();
    jQuery('#NetworkRoutes #exampleModalLabel').html("Routes(" + name + ")");
    jQuery("#add_network_routes").data('id', networkId);
    jQuery("#createRoutes_form #gateway").val(gateway);
    jQuery("#route_modal_network #add_Routes").collapse('hide');
    jQuery("#route_modal_network #destination").val('');
    jQuery("#route_modal_network #ip_ranges").val('');
    getRoutes(networkId);
}

function getRoutes(networkID) {
    $("#Route_tables").dataTable().fnDestroy();
    var dataTableObj = $("#Route_tables").DataTable({
        "ajax": {
            "url": "", // replace with the path to your data source
            "type": "POST",
            "data": {
                customaction: "getRoutes",
                networkId: networkID
            },
            "dataSrc": "data"
        },
        columns: [
            { "data": 'destination' },
            { "data": 'gateway' },
            { "data": 'edit_routes' },
        ]
    });
}

function AddRoutes(action) {
    var networkId = jQuery("#add_network_routes").data('id');
    var formData = jQuery('#createRoutes_form').serializeArray();
    var destination = formData[0].value;
    var ip_range = formData[1].value;
    var gateway = formData[2].value;
    var data = {
        customaction: action,
        networkId: networkId,
        destination: destination,
        ip_range: ip_range,
        gateway: gateway
    };
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#create_routes").attr('disabled', true);
            jQuery("#add_network_routes").attr('disabled', true);
            jQuery("#add_network_routes i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            response = JSON.parse(response);
            jQuery("#create_routes").attr('disabled', false);
            jQuery("#add_network_routes").attr('disabled', false);
            jQuery("#add_network_routes i").removeClass("fa-spinner fa-spin");
            if (response.status == 'error') {
                // liveToast_Errors();
                // jQuery(".toast-body").html('<span class="mounterr"> ' + response.msg + ' </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                jQuery("#route_modal_network .shownmessage").remove();
                var error = 'Error! ' + response.msg;
                jQuery("#route_modal_network .modal-body:first").prepend('<div class="shownmessage alert alert-danger" role="alert">' + error + '</div>');
            }
            else {
                // liveToast_success();
                // jQuery(".toast-body").html('<span class="mounterr"> Successfully route created </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                var success = 'Success!  Successfully route created';
                jQuery("#route_modal_network .shownmessage").remove();
                jQuery("#route_modal_network .modal-body:first").prepend('<divclass="shownmessage alert alert-success" role="alert">' + success + '</div>');
                getRoutes(networkId);
            }
        }
    });
}
function delete_route(network_id, destination, gateway) {
    jQuery('#RoutedeleteModal').modal('show');
    jQuery('#RoutedeleteModal #RoutesConfirmDelete').data('id', network_id);
    jQuery('#RoutedeleteModal #RoutesConfirmDelete').data('destination', destination);
    jQuery('#RoutedeleteModal #RoutesConfirmDelete').data('gateway', gateway);
}
function confirmRouteDelete(action) {
    var networkId = jQuery("#RoutesConfirmDelete").data('id');
    var destination = jQuery("#RoutesConfirmDelete").data('destination');
    var gateway = jQuery("#RoutesConfirmDelete").data('gateway');
    var data = {
        customaction: action,
        networkId: networkId,
        destination: destination,
        gateway: gateway
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#create_routes").attr('disabled', true);
            jQuery("#RoutesConfirmDelete").attr('disabled', true);
            jQuery("#RoutesConfirmDelete i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            json_response = JSON.parse(response);
            jQuery('#RoutedeleteModal').modal('hide');
            jQuery("#create_routes").attr('disabled', false);
            jQuery("#RoutesConfirmDelete").attr('disabled', false);
            jQuery("#RoutesConfirmDelete i").removeClass("fa-spinner fa-spin");
            if (json_response.status == 'error') {
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
            }
            else {
                liveToast_success();
                jQuery(".toast-body").html('<span class="mounterr"> Successfully route deleted </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                setTimeout(function () {
                    getRoutes(data.networkId);
                }, 7000);
            }
        }
    });
}
// function AttachResources(action) {
//     var resourcse_data = jQuery("#createResources_form").serializeArray();
//     var networkId = jQuery("#create_resources").data('id');
//     var ResourceType = resourcse_data[0].value;
//     var ResourceId = resourcse_data[1].value;
//     var ResourcePrivateIp = resourcse_data[2].value;
//     if (ResourceType == '' || ResourceId == '') {
//         liveToast_Errors();
//         jQuery(".toast-body").html('<span class="mounterr"> Please fill all the fields </span>');
//          jQuery('#liveToast').removeClass('hide');
jQuery('#liveToast').addClass('block fade show');
//         return false;
//     }
//     var data = {
//         customaction: action,
//         networkId: networkId,
//         ResourceType: ResourceType,
//         ResourceId: ResourceId,
//         ResourcePrivateIp: ResourcePrivateIp
//     };
//     jQuery.ajax({
//         url: "",
//         type: 'POST',
//         data: data,
//         beforeSend: function () {
//             jQuery("#add_network_resources").attr('disabled', true);
//             jQuery("#add_network_resources i").addClass("fa-spinner fa-spin");
//         },
//         success: function (response) {
//             response = JSON.parse(response);
//             jQuery("#add_network_resources").attr('disabled', false);
//             jQuery("#add_network_resources i").removeClass("fa-spinner fa-spin");
//             if (response.status == 'error') {
//                 liveToast_Errors();
//                 jQuery(".toast-body").html('<span class="mounterr"> ' + response.msg + ' </span>');
//                  jQuery('#liveToast').removeClass('hide');
jQuery('#liveToast').addClass('block fade show');
//             }
//             else {
//                 liveToast_success();
//                 jQuery(".toast-body").html('<span class="mounterr"> Successfully resource attached </span>');
//                  jQuery('#liveToast').removeClass('hide');
jQuery('#liveToast').addClass('block fade show');
//                 if (ResourceType == 'server') {
//                     getserverResourse('getserverResourse');
//                 } else {
//                     getserverResourse('getloadbalancerResourse');
//                 }
//                 setTimeout(function () {
//                     getResourcesTable(networkId);
//                 }, 5000);
//             }
//         }
//     });
// }
function delete_resource(networkID, serverID, Type) {
    jQuery('#ResourcesdeleteModal').modal('show');
    jQuery('#ResourcesdeleteModal #ResourcesConfirmDelete').data('id', serverID);
    jQuery('#ResourcesdeleteModal #ResourcesConfirmDelete').data('networkID', networkID);
    jQuery('#ResourcesdeleteModal #ResourcesConfirmDelete').data('Type', Type);

}
function confirmResourcesDelete(action) {
    var serverID = jQuery("#ResourcesConfirmDelete").data('id');
    var networkID = jQuery("#ResourcesConfirmDelete").data('networkID');
    var Type = jQuery("#ResourcesConfirmDelete").data('Type');
    var data = {
        customaction: action,
        serverID: serverID,
        networkID: networkID,
        Type: Type
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#add_network_resources").attr('disabled', true);
            jQuery("#ResourcesConfirmDelete").attr('disabled', true);
            jQuery("#ResourcesConfirmDelete i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            json_response = JSON.parse(response);
            jQuery('#ResourcesdeleteModal').modal('hide');
            jQuery("#add_network_resources").attr('disabled', false);
            jQuery("#ResourcesConfirmDelete").attr('disabled', false);
            jQuery("#ResourcesConfirmDelete i").removeClass("fa-spinner fa-spin");
            if (json_response.status == 'error') {
                // liveToast_Errors();
                // jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                jQuery("#content_modal_network .shownmessage").remove();
                var error = 'Error! ' + json_response.msg;
                jQuery("#content_modal_network .modal-body:first").prepend('<div class="shownmessage alert alert-danger" role="alert">' + error + '</div>');
            }
            else {
                // liveToast_success();
                // jQuery(".toast-body").html('<span class="mounterr"> Successfully resource deleted </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                // jQuery('#content_modal_network').modal('hide');
                var success = 'Success! Successfully resource deleted';
                jQuery("#content_modal_network .shownmessage").remove();
                jQuery("#content_modal_network .modal-body:first").prepend('<div class="shownmessage alert alert-success" role="alert">' + success + '</div>');
                setTimeout(function () {
                    getNetwork('get_network');
                }, 5000);
            }
        }
    });

}
function Add_aliasIp(action) {
    var networkId = jQuery('#content_modal_network #add_alias_ip').data('id');
    var serverId = jQuery("#content_modal_network #add_alias_ip").data('serverid');
    var type = jQuery("#content_modal_network #add_alias_ip").data('type');
    var formData = jQuery('#content_modal_network #createAliasIP_form').serializeArray();
    var dataArr = [];
    formData.forEach(function (item) {
        if (item.value != '') {
            dataArr.push(item.value);
        }
    });
    var data = {
        customaction: action,
        networkId: networkId,
        serverId: serverId,
        type: type,
        aliasIp: dataArr

    };
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#add_alias_ip").attr('disabled', true);
            jQuery("#add_alias_ip i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            jQuery("#add_alias_ip").attr('disabled', false);
            jQuery("#add_alias_ip i").removeClass("fa-spinner fa-spin");
            response = JSON.parse(response);
            if (response.status == 'error') {
                // liveToast_Errors();
                // jQuery(".toast-body").html('<span class="mounterr"> ' + response.msg + ' </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                jQuery("#content_modal_network .shownmessage").remove();
                var error = 'Error! ' + response.msg;
                jQuery("#content_modal_network .modal-body:first").prepend('<div class="shownmessage alert alert-danger" role="alert">' + error + '</div>');

            }
            else {
                // liveToast_success();
                // jQuery(".toast-body").html('<span class="mounterr"> Successfully alias ip added </span>');
                //  jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                var success = 'Success! Successfully alias ip added';
                jQuery("#content_modal_network .shownmessage").remove();
                jQuery("#content_modal_network .modal-body:first").prepend('<div class="shownmessage alert alert-success" role="alert">' + success + '</div>');
                jQuery("#Edit_aliasIP").collapse('hide');
                setTimeout(function () {
                    getResourcesTable(data.networkId);
                }, 7000);
            }
        }
    });
}
function get_alias_ips(element, alias_ips) {
    var $networkId = jQuery(element).data('id');
    var $serverId = jQuery(element).data('serverid');
    var type = jQuery(element).data('type');
    jQuery('#content_modal_network #add_alias_ip').data('id', $networkId);
    jQuery('#content_modal_network #add_alias_ip').data('serverid', $serverId);
    jQuery('#content_modal_network #add_alias_ip').data('type', type);
    jQuery("#content_modal_network .change_alias_ip:not(:last)").remove();
    jQuery("#content_modal_network .change_alias_ip").last().val();
    for (var i = 0; i < alias_ips.length; i++) {
        var cloned = jQuery("#content_modal_network .change_alias_ip").last().clone();
        cloned.find('input').val(alias_ips[i]);
        cloned.removeClass('mb-4');
        cloned.find('.adds_alias_ip').replaceWith('<button type="button" class="btn btn-danger delete_alias_ip" style="padding: 6px 32px;">Delete</button>');
        jQuery("#content_modal_network .change_alias_ip").last().before(cloned);
    }
}
//ssh key section
get_ssh_key('getsshkey');
function get_ssh_key(action) {
    jQuery("#create_ssh").attr('disabled', true);
    $("#ssh_table_manager").dataTable().fnDestroy();
    var dataTableObj = $("#ssh_table_manager").DataTable({
        "ajax": {
            "url": "",
            "type": "POST",
            "data": { customaction: action },
            "dataSrc": "data"
        },
        columns: [
            { "data": 'Name' },
            { "data": 'PublicKey' },
            { "data": 'created' },
            { "data": 'action' },
        ],
        initComplete: function () {
            jQuery("#create_ssh").attr('disabled', false);
        }
    });
}
function deleteSshKey(data) {
    var action = "delete_ssh_key";
    data = {
        customaction: action,
        key_id: data
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#create_ssh_key").attr('disabled', true);
            jQuery("#sshKeyConfirmDelete").attr('disabled', true);
            jQuery("#sshKeyConfirmDelete i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            json_response = JSON.parse(response);
            jQuery('#sshkeydeleteModal').modal('hide');
            jQuery("#create_ssh_key").attr('disabled', false);
            jQuery("#sshKeyConfirmDelete").attr('disabled', false);
            jQuery("#sshKeyConfirmDelete i").removeClass("fa-spinner fa-spin");
            if (json_response.status == 'error') {
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
            }
            else {
                liveToast_success();
                jQuery(".toast-body").html('<span class="mounterr"> Successfully ssh key deleted </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                setTimeout(function () {
                    getsshkey('getsshkey');
                }, 7000);
            }
        }
    });
}
function Edit_SSH_Name(action, SSH_id) {
    jQuery("#editSSHKeyModal").modal('show');
    jQuery("#editSSHKeyModal #editSSHKey").data('id', SSH_id);
    tdata = jQuery("#SSH" + SSH_id).html();
    jQuery("#editSSHKeyModal #editSSHKeyName").val(tdata);
}
function EditsshName(action) {
    var SSH_id = jQuery("#editSSHKey").data('id');
    var SSHName = jQuery("#editSSHKeyModal #editSSHKeyName").val();
    if (SSHName == '') {
        liveToast_Errors();
        jQuery(".toast-body").html('<span class="mounterr"> Please fill all the fields </span>');
        jQuery('#liveToast').removeClass('hide');
        jQuery('#liveToast').addClass('block fade show');
        return false;
    }
    var data = {
        customaction: action,
        SSH_id: SSH_id,
        data: SSHName
    }
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: data,
        beforeSend: function () {
            jQuery("#editSSHKey").attr('disabled', true);
            jQuery("#editSSHKey i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            jQuery("#editSSHKey").attr('disabled', false);
            jQuery("#editSSHKey i").removeClass("fa-spinner fa-spin");
            json_response = JSON.parse(response);
            jQuery('#editSSHKeyModal').modal('hide');
            if (json_response.status == 'error') {
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + ' </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
            }
            else {
                liveToast_success();
                jQuery(".toast-body").html('<span class="mounterr"> Successfully name changed </span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                setTimeout(function () {
                    get_ssh_key('getsshkey');
                }, 5000);
            }
        }
    });
}
function downloadSSH(data, name, fingerprint) {
    jQuery("#showSSHPublicKey").modal('show');
    jQuery("#showSSHPublicKey .modal-body .sshkeyname").text(name);
    jQuery("#showSSHPublicKey .modal-body .fingerprintSSH").text(fingerprint);
    jQuery("#showSSHPublicKey .modal-body .downloadSShKEY").text(data);
    jQuery("#showSSHPublicKey .fa-download").parent().off('click').on('click', function () {
        var filename = "sshkey.txt";
        var blob = new Blob([data], { type: "text/plain;charset=utf-8" });
        var url = URL.createObjectURL(blob);
        var a = document.createElement("a");
        a.href = url;
        a.download = filename;
        a.style.display = 'none';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });
    jQuery(".copysshkey").off('click').on('click', function () {
        var sshkey = jQuery("#showSSHPublicKey .modal-body .downloadSShKEY").val();
        navigator.clipboard.writeText(sshkey);
        var button = jQuery(this);
        button.text('Copied');
        setTimeout(function () {
            button.text('Copy SSH Key');
        }, 2000);
    });
}
function unMountIso(obj) {
    var action = "unmountiso";
    jQuery('#unmountModal').modal('show');
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: "customaction=" + action,
        beforeSend: function () {
            jQuery("#unmount").addClass('disabled');
            jQuery("#unmount_btn").attr('disabled', true);
            jQuery('#unmountModal').modal('show');
            jQuery("#unmount_btn i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            jQuery("#unmount_btn i").removeClass("fa-spinner fa-spin");
            jQuery("#unmount_btn").attr('disabled', false);
            jQuery('#unmountModal').modal('hide');
            json_response = JSON.parse(response);
            if (json_response.status == 'error') {
                liveToast_error();
            } else {
                liveToast_success_unmount()
                jQuery(".server_iso_name").hide();
            }
        }
    });
}
function mountIso(obj) {
    var action = "mountiso";
    var selectedOption = $("#iso option:selected");
    var description = selectedOption.data("description");

    jQuery.ajax({
        url: "",
        type: 'POST',
        data: "customaction=" + action + '&iso=' + jQuery("#iso").val() + '&description=' + description,

        beforeSend: function () {
            jQuery(".mount-btn").attr('disabled', true);
            // jQuery(obj).css('pointer-events', 'none');
            jQuery("#submitBtn i").addClass("fa-spinner fa-spin");

        },
        success: function (response) {
            jQuery(".mount-btn").attr('disabled', false);
            jQuery(obj).css('pointer-events', 'auto');
            jQuery("#submitBtn i").removeClass("fa-spinner fa-spin");
            json_response = JSON.parse(response);

            if (json_response.status == 'error') {
                liveToast_Error()
            } else {
                jQuery("#unmount").removeClass('disabled');
                liveToast_success_mount()
                jQuery(".server_iso_name").show();
                jQuery("#iso_description").text(json_response.description);
                jQuery("#iso_description").val(json_response.description);
                jQuery("#iso_description_name p h9").text(json_response.description);

            }
        }
    });
}
function liveToast_success_mount() {
    jQuery('#liveToast').css({
        'box-shadow': '0px 0px 5px 1px green',
        'border-left': '5px solid rgb(26, 135, 14)'
    });
    jQuery(".toast-header").html('<i class="fa fa-check" aria-hidden="true"></i>');
    jQuery(".toast-body").html('<span class="mountsuccess">Server ISO Image attached</span>');
    jQuery("#liveToastModal").css('display', 'block');
    setTimeout(function () {
        jQuery("#liveToastModal").css('display', 'none');
    }, 5000);
    jQuery('#liveToast').removeClass('hide');
    jQuery('#liveToast').addClass('block fade show');
}
function liveToast_success() {
    jQuery('#liveToast').css({
        'box-shadow': '0px 0px 5px 1px green',
        'border-left': '5px solid rgb(26, 135, 14)'
    });
    jQuery(".toast-header").html('<i class="fa fa-check" aria-hidden="true"></i>');
    jQuery("#liveToastModal").css('display', 'block');
    setTimeout(function () {
        jQuery("#liveToastModal").css('display', 'none');
    }, 5000);
}
function liveToast_success_unmount() {
    jQuery('#liveToast').css({
        'box-shadow': '0px 0px 5px 1px green',
        'border-left': '5px solid rgb(26, 135, 14)'
    });
    jQuery(".toast-header").html('<i class="fa fa-check" aria-hidden="true"></i>');
    jQuery(".toast-body").html('<span class="mountsuccess">Server ISO Image detached</span>');
    jQuery("#liveToastModal").css('display', 'block');
    setTimeout(function () {
        jQuery("#liveToastModal").css('display', 'none');
    }, 5000);
    jQuery('#liveToast').removeClass('hide');
    jQuery('#liveToast').addClass('block fade show');
}
function liveToast_Error() {
    jQuery('#liveToast').css({
        'box-shadow': '0px 0px 5px 1px #fbbc90',
        'border-left': '5px solid red'
    });
    jQuery(".toast-header").html('<i class="fa fa-times" aria-hidden="true"></i>');
    jQuery(".toast-body").html('<span class="mounterr">' + json_response.message + '</span>');
    jQuery("#liveToastModal").css('display', 'block');
    setTimeout(function () {
        jQuery("#liveToastModal").css('display', 'none');
    }, 5000);
    jQuery('#liveToast').removeClass('hide');
    jQuery('#liveToast').addClass('block fade show');
}
function liveToast_Errors() {
    jQuery('#liveToast').css({
        'box-shadow': '0px 0px 5px 1px #fbbc90',
        'border-left': '5px solid red'
    });
    jQuery(".toast-header").html('<i class="fa fa-times" aria-hidden="true"></i>');
    jQuery("#liveToastModal").css('display', 'block');
    setTimeout(function () {
        jQuery("#liveToastModal").css('display', 'none');
    }, 5000);

}


function apicall(action) {

    jQuery(".action-btn").prop('disabled', true);
    var serverAction = action;
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: 'customaction=' + serverAction,
        beforeSend: function () {

            jQuery("#os-image").hide();
            switch (serverAction) {
                case 'shutdown':
                    jQuery("#overlaydiv").show()
                    jQuery("#server_status").text(langVar.statusShutdownRun);
                    jQuery("#shutdown_btn i").removeClass("fa-power-off");
                    jQuery("#shutdown_btn i").addClass("fa-spinner fa-spin");
                    break;
                case 'reboot':
                    jQuery("#overlaydiv").show()
                    jQuery("#server_status").text(langVar.statusRebootRun);
                    jQuery("#reboot_btn i").removeClass("fa-power-off");
                    jQuery("#reboot_btn i").addClass("fa-spinner fa-spin");
                    break;
                case 'reset':
                    jQuery("#overlaydiv").show()
                    jQuery("#server_status").text(langVar.statusResetRun);
                    jQuery("#reset_btn i").removeClass("fa-plug");
                    jQuery("#reset_btn i").addClass("fa-spinner fa-spin");
                    break;
                case 'reset_password':
                    jQuery("#overlaydiv").show()
                    jQuery("#server_status").text(langVar.statusResetPassRun);
                    jQuery("#pass_reset_btn i").removeClass("fa-key");
                    jQuery("#pass_reset_btn i").addClass("fa-spinner fa-spin");

                    break;
                case 'create_backup':
                    jQuery("#create_backup_btn").attr('disabled', true);
                    jQuery("#create_backup_btn i").addClass("fa-spinner fa-spin");
                    break;
                case 'create_image':
                    // jQuery("#overlaydiv").show()
                    jQuery("#serverSnapshot_btn").attr('disabled', 'true');
                    jQuery("#server_status").text(langVar.statusSnapshotRun);
                    jQuery("#serverSnapshot_btn i").addClass("fa-spinner fa-spin");

                    break;
                case 'enable_rescue':
                    jQuery("#enable_rescue_btn").attr('disabled', true);
                    jQuery("#enable_rescue_btn i").addClass("fa-spinner fa-spin");
                    break;
                case 'disable_rescue':
                    jQuery("#disablerescue_btn").attr('disabled', true);
                    jQuery("#disablerescue_btn i").addClass("fa-spinner fa-spin");
                    break;
                default:
                    jQuery("#server_status").text(langVar.statusPowerOnRun);
                    jQuery("#poweron_btn i").removeClass("fa-play");
                    jQuery("#poweron_btn i").addClass("fa-spinner fa-spin");
            }
        },
        success: function (response) {
            jQuery("#overlaydiv").hide()
            jQuery("#os-image").show();

            json_response = JSON.parse(response);
            if (json_response.status != "error") {
                jQuery(".action-btn").prop('disabled', false);
                switch (serverAction) {
                    case 'shutdown':
                        jQuery("#reboot_btn,#shutdown_btn,#reset_btn,#pass_reset_btn").hide();
                        jQuery("#poweron_btn").show();
                        jQuery("#server_status").text(langVar.statusOff);
                        jQuery("#shutdown_btn i").addClass("fa-power-off");
                        jQuery("#shutdown_btn i").removeClass("fa-spinner fa-spin");
                        break;
                    case 'poweron':
                        jQuery("#poweron_btn").hide();
                        jQuery("#reboot_btn, #shutdown_btn, #reset_btn,#pass_reset_btn").show();
                        jQuery("#server_status").text(langVar.statusOn);
                        jQuery("#poweron_btn i").removeClass("fa-spinner fa-spin");
                        jQuery("#poweron_btn i").addClass("fa-play");
                        break;
                    case 'reboot':
                        jQuery("#reboot_btn i").removeClass("fa-spinner fa-spin");
                        jQuery("#reboot_btn i").addClass("fa-power-off");
                        jQuery("#server_status").text(langVar.statusOn);
                        break;
                    case 'reset':
                        jQuery("#reset_btn i").removeClass("fa-spinner fa-spin");
                        jQuery("#reset_btn i").addClass("fa-plug");
                        jQuery("#server_status").text(langVar.statusOn);
                        break;
                    case 'reset_password':
                        jQuery("#pass_reset_btn i").removeClass("fa-spinner fa-spin");
                        jQuery("#pass_reset_btn i").addClass("fa-key");
                        jQuery("#server_status").text(langVar.statusOn);
                        break;
                    case 'create_image':
                        jQuery("#serverSnapshot_btn i").removeClass("fa-spinner fa-spin");
                        jQuery('#serverSnapshot').modal('hide');
                        jQuery("#server_status").text(langVar.statusOn);
                        jQuery("#snapshotbtn").addClass("bk-sn-active");
                        jQuery("#backupbtn").removeClass("bk-sn-active");
                        jQuery("#backup_tab").hide();
                        setTimeout(function () {
                            gettablecontent('gettable_snapshot');
                        }, 5000);
                        jQuery("#snapshot_tab").show();
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully Image created</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        break;
                    case 'create_backup':
                        jQuery("#serverBackup").modal('hide');
                        jQuery("#create_backup_btn").attr('disabled', false);
                        jQuery("#create_backup_btn i").removeClass("fa-spinner fa-spin");
                        jQuery("#snapshot-btn i").removeClass("fa-spinner fa-spin");
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully Backup is created</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        jQuery("#server_status").text(langVar.statusOn);
                        jQuery("#snapshotbtn").removeClass("bk-sn-active");
                        jQuery("#backupbtn").addClass("bk-sn-active");
                        jQuery("#backup_tab").hide();
                        setTimeout(function () {
                            gettablecontent('gettable_backup');
                        }, 5000);
                        jQuery("#backup_tab").show();
                        break;
                    default:
                        jQuery("#poweron_btn").hide();
                        jQuery("#reboot_btn, #shutdown_btn, #reset_btn, #pass_reset_btn").show();
                        jQuery("#server_status").text(langVar.statusOn);
                }
                if (serverAction == 'enable_rescue') {
                    jQuery("#enable_rescue_btn i").removeClass("fa-spinner fa-spin");
                    jQuery('#rescueModal').modal('hide');
                    jQuery("#enable_rescue").hide();
                    jQuery("#disable_rescue").show();
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mounterr"> ' + langVar.successAlertRescueEnabled + '</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b> ' + langVar.successAlertRescueEnabled + '</div>');

                } else if (serverAction == 'disable_rescue') {
                    jQuery("#disablerescue_btn").attr('disabled', false);
                    jQuery("#disablerescue_btn i").removeClass("fa-spinner fa-spin");
                    jQuery('#disablerescueModal').modal('hide');
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.successAlertRescueDisabled + '</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    jQuery("#enable_rescue").show();
                    jQuery("#disable_rescue").hide();
                    jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b> ' + langVar.successAlertRescueDisabled + '</div>');

                } else if (serverAction == 'create_image') {
                    var serverAction_text = langVar.successAlertServSnap;
                    jQuery("#serverSnapshot_btn").attr('disabled', false);
                    jQuery('#serverSnapshot').modal('hide');
                    jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + ' ' + langVar.successfully + '</div>');
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.success + '</b>' + serverAction_text + ' ' + langVar.successfully + '</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');

                } else if (serverAction == 'reset_password') {
                    var serverAction_text = langVar.successAlertRootPassReset;
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible" ><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + 'successfully</div>');
                    jQuery('#rootPasswordRest').modal('show');

                } else {
                    var serverAction_text = serverAction;
                    jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b><span style="text-transform:capitalize">' + serverAction_text + '</span> ' + langVar.successfully + '</div>');
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.success + '</b> ' + serverAction_text + ' ' + langVar.successfully + '</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                }

            } else if (serverAction == 'disable_rescue') {
                jQuery("#disablerescue_btn").attr('disabled', false);
                jQuery("#disablerescue_btn i").removeClass("fa-spinner fa-spin");
                jQuery('#disablerescueModal').modal('hide');
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
            }
            else if (serverAction == 'enable_rescue') {
                jQuery("#enable_rescue_btn").attr('disabled', false);
                jQuery("#enable_rescue_btn i").removeClass("fa-spinner fa-spin");
                jQuery('#rescueModal').modal('hide');
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
            }
            else if (serverAction == 'create_image') {
                jQuery("#serverSnapshot_btn").attr('disabled', false);
                jQuery("#serverSnapshot_btn i").removeClass("fa-spinner fa-spin");
                jQuery('#serverSnapshot').modal('hide');
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
            }
            else if (serverAction == 'shutdown') {
                jQuery("#reboot_btn,#shutdown_btn,#reset_btn,#pass_reset_btn").hide();
                jQuery("#shutdown_btn i").addClass("fa-power-off");
                jQuery("#shutdown_btn i").removeClass("fa-spinner fa-spin");
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
                jQuery(".action-btn").prop('disabled', false);
            }
            else if (serverAction == 'poweron') {
                jQuery("#poweron_btn").hide();
                jQuery("#reboot_btn, #shutdown_btn, #reset_btn, #pass_reset_btn").show();
                jQuery("#poweron_btn i").removeClass("fa-spinner fa-spin");
                jQuery("#poweron_btn i").addClass("fa-play");
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
                jQuery(".action-btn").prop('disabled', false);
            }
            else if (serverAction == 'reboot') {
                jQuery("#reboot_btn i").removeClass("fa-spinner fa-spin");
                jQuery("#reboot_btn i").addClass("fa-power-off");
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
                jQuery(".action-btn").prop('disabled', false);
            }
            else if (serverAction == 'reset') {
                jQuery("#reset_btn i").removeClass("fa-spinner fa-spin");
                jQuery("#reset_btn i").addClass("fa-plug");
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
                jQuery(".action-btn").prop('disabled', false);
            }
            else if (serverAction == 'reset_password') {
                jQuery("#pass_reset_btn i").removeClass("fa-spinner fa-spin");
                jQuery("#pass_reset_btn i").addClass("fa-key");
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
                jQuery(".action-btn").prop('disabled', false);
            }
            else if (serverAction == 'create_backup') {
                jQuery("#create_backup_btn").attr('disabled', false);
                jQuery("#create_backup_btn i").removeClass("fa-spinner fa-spin");
                jQuery("#snapshot-btn i").removeClass("fa-spinner fa-spin");
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
            }
            else {
                jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b><span style="text-transform:capitalize">' + json_response.msg + '</span></div>');
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.error + '</b> ' + ' ' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                $('#server_status').html('RUNNING');
                jQuery(".action-btn").prop('disabled', false);
            }
        },
    });
}
var backup_table = jQuery('#backup_table').DataTable({
    rowReorder: {
        selector: 'td:nth-child(2)'
    },
    responsive: true,
    "bLengthChange": false,
    "bInfo": false,
    searching: false,
    info: false,
});
// jQuery("#backup_table").dataTable();
var snapshot_table = jQuery('#snapshot_table').DataTable({
    rowReorder: {
        selector: 'td:nth-child(2)'
    },
    responsive: true,
    "bLengthChange": false,
    "bInfo": false,
    searching: false,
    info: false,
});
/*bandwidth circlegraph********************/
var progressBarOptions = {
    startAngle: -1.55,
    size: 150,
    value: totalUsedPercentage / 100, //bandwidthUsageTotal_in_TB / totalbandwidth,
    fill: {
        color: '#fe4e5b'
    }
}
jQuery('.circle').circleProgress(progressBarOptions).on('circle-animation-progress', function (event, progress, stepValue) {
    jQuery(this).find('strong').text(totalUsedPercentage + "%");

});
/*bandwidth circlegraph********************/

jQuery("#backupbtn").click(function () {
    var bckup_length = jQuery("#backup_table tbody td:not(.dataTables_empty)").length;
    var creating_length = jQuery("#backup_table tbody tr td:contains('creating')").length;
    jQuery("#delete_backupOrSnapshot_submit").attr('clicktype', 'backupbtn');
    jQuery("#backupbtn").addClass("bk-sn-active");
    jQuery("#snapshotbtn").removeClass("bk-sn-active");
    jQuery("#snapshot_tab").hide();
    if (bckup_length == 0 || creating_length > 0) {
        gettablecontent('gettable_backup');
    }
    jQuery("#backup_tab").show();

});
jQuery("#snapshotbtn").click(function () {
    var creating_length = jQuery("#snapshot_table tbody tr td:contains('creating')").length;
    var snap_length = jQuery("#snapshot_table tbody tr").length;
    jQuery("#delete_backupOrSnapshot_submit").attr('clicktype', 'snapshotbtn');
    jQuery("#snapshotbtn").addClass("bk-sn-active");
    jQuery("#backupbtn").removeClass("bk-sn-active");
    jQuery("#backup_tab").hide();
    if (snap_length == 0 || creating_length > 0) {
        gettablecontent('gettable_snapshot');
    }
    jQuery("#snapshot_tab").show();
});

function gettablecontent(action) {
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: "customaction=" + action,
        beforeSend: function () {
            if (action == "gettable_backup") {
                jQuery("#backup_tableloader").addClass("fa-spinner fa-spin");
            } else {
                jQuery("#snapshot_tableloader").addClass("fa-spinner fa-spin");
            }
        },
        success: function (response) {

            if (action == 'gettable_backup') {
                jQuery("#backup_table").DataTable().destroy();
                jQuery("#backup_table tbody").html(response);
                jQuery("#backup_tableloader").removeClass("fa-spinner fa-spin");
                var backup_table = jQuery('#backup_table').DataTable({
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },
                    responsive: true,
                    "bLengthChange": false,
                    "bInfo": false,
                    searching: false,
                    info: false,
                });

            } else {
                jQuery("#snapshot_table").DataTable().destroy();
                jQuery("#snapshot_table tbody").html(response);
                jQuery("#snapshot_tableloader").removeClass("fa-spinner fa-spin");
                var used = jQuery("#snapshot_table tbody tr").length;
                var used_zero = jQuery("#snapshot_table tbody tr td").length;
                var text_old = $('.snapshot-btn').text().split('/');
                if (text_old[1].slice(0, -1) != "0") {
                    if (used_zero == '1') {
                        used = '0';
                    }
                    var new_text = '(' + used + '/' + text_old[1];
                    $('.snapshot-btn').text('Take Snapshot ' + new_text);
                }
                var snapshot_table = jQuery('#snapshot_table').DataTable({
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },
                    responsive: true,
                    "bLengthChange": false,
                    "bInfo": false,
                    searching: false,
                    info: false,
                });

            }
        }
    });
}


function rebuildImages(action) {
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: "customaction=" + action,
        beforeSend: function () {
        },
        success: function (response) {
            jQuery("#os_images option[value='0']").text("None");

            json_response = JSON.parse(response);
            jQuery.each(json_response, function (index1, value1) {
                if (value1.type == 'system') {
                    jQuery('#os_images').append($('<option>', {
                        value: value1.name,
                        text: value1.description
                    }));
                }
            });
        }
    });
}

function loadIsos(action) {
    var iso_data = $('#iso_description').data('value');
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: "customaction=" + action + "&iso_data=" + iso_data,
        // beforeSend: function () {
        //     jQuery("#isoloader i").addClass("fa-spinner fa-spin");
        // },
        success: function (response) {
            jQuery("#isoloader i").removeClass("fa-spinner fa-spin");
            //jQuery("#poweron_btn").hide();
            //json_response = JSON.parse(response);
            jQuery('#iso').append(response);
            jQuery("#iso option[value='0']").text("None");

            // jQuery.each(json_response, function(index1, value1) {
            //     jQuery('#iso').append($('<option>', {
            //         value: value1.name,
            //         text: value1.description
            //     }));
            // });
        }
    });
}

// function getOSimage_flavor(action) {

//     jQuery.ajax({
//         url: "",
//         type: 'POST',
//         data: "customaction=" + action,
//         beforeSend: function () {
//             jQuery(".server-satus-cantos > img").hide();
//             jQuery("#imageloader i").addClass("fa-spinner fa-spin");

//         },
//         success: function (response) {
//             jQuery("#imageloader i").removeClass("fa-spinner fa-spin");
//             jQuery(".server-satus-cantos > img").show();
//             json_response = JSON.parse(response);
//             //alert(response);
//             if (json_response != null) {
//                 jQuery(".server-satus-cantos > img").attr("src", rootpath + '/modules/servers/hetznercloud/templates/images/' + json_response.os_flavor + '.svg');
//                 //jQuery(".server-satus-cantos > img").attr("alt", rootpath + '/modules/servers/hetznercloud/templates/images/' + json_response.os_flavor + '.svg');
//                 jQuery(".server-satus-cantos > img").css({
//                     "width": "115px",
//                     "height": "115px"
//                 });
//                 let name = json_response.os_flavor;
//                 jQuery(".server-satus-cantos > img + p").text(name.charAt(0).toUpperCase() + name.slice(1));
//             } else {
//                 jQuery(".server-satus-cantos > img").attr("alt", langVar.imgNotAvail);

//             }
//         }
//     });
// }

function getVolumeSize(action) {
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: "customaction=" + action,
        beforeSend: function () {
            jQuery("#vol_size").text('Loading..');
        },
        success: function (response) {
            if (response != 0) {
                jQuery("#vol_size").text(response);
            } else {
                prebtagtext = jQuery("#vol_size").prev().text();
                jQuery("#vol_size").parent().html("<span>" + langVar.disklocal + "<b>" + prebtagtext + "</b></span>");
            }
        }
    });
}

// function graphSection_metrics(action, time) {
//     jQuery.ajax({
//         url: "",
//         type: 'POST',
//         data: "customaction=" + action + "&time=" + time,
//         beforeSend: function () {
//             jQuery("#graphloader i").addClass("fa-spinner fa-spin");
//             jQuery(".graph-select").attr('disabled', true);
//             jQuery("#graph-selection").attr('disabled', true);
//         },
//         success: function (response) {
//             json_response = JSON.parse(response);
//             jQuery("#graphloader i").removeClass("fa-spinner fa-spin");
//             jQuery('#CPU').html('<div id="container1" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.CPU);
//             jQuery('#Throughput').html('<div id="container2" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.Throughput);
//             jQuery('#IOPS').html('<div id="container3" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.IOPS);
//             jQuery('#Traffic').html('<div id="container4" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.Traffic);
//             jQuery('#PPS').html('<div id="container5" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.PPS);
//             jQuery(".graph-select").attr('disabled', false);
//             jQuery("#graph-selection").attr('disabled', false);
//             return false;
//         }
//     });
// }
function graphSection_metrics(action, time, selectedOption) {
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: "customaction=" + action + "&time=" + time + "&selectedOption=" + selectedOption,
        beforeSend: function () {
            jQuery("#graphloader i").addClass("fa-spinner fa-spin");
            jQuery(".graph-select").attr('disabled', true);
            jQuery("#graph-selection").attr('disabled', true);

        },
        success: function (response) {
            json_response = JSON.parse(response);
            jQuery("#graphloader i").removeClass("fa-spinner fa-spin");
            jQuery("#container1").remove();
            jQuery("#container2").remove();
            jQuery("#container3").remove();
            jQuery("#container4").remove();
            jQuery("#container5").remove();

            if([selectedOption] == 'CPU'){
                jQuery('#CPU').html('<div id="container1" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.CPU);
            }
            if([selectedOption] == 'Throughput'){
                jQuery('#Throughput').html('<div id="container2" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.Throughput);
            }
            if([selectedOption] == 'IOPS'){
                jQuery('#IOPS').html('<div id="container3" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.IOPS);
            }
            if([selectedOption] == 'PPS'){
                jQuery('#PPS').html('<div id="container4" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.PPS);
            }
            if([selectedOption] == 'Traffic'){
                jQuery('#Traffic').html('<div id="container5" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.Traffic);
            }
            jQuery(".graph-select").attr('disabled', false);
            jQuery("#graph-selection").attr('disabled', false);


            // json_response = JSON.parse(response);
            // jQuery("#graphloader i").removeClass("fa-spinner fa-spin");
            // jQuery('#CPU').html('<div id="container1" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.CPU);
            // jQuery('#Throughput').html('<div id="container2" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.Throughput);
            // jQuery('#IOPS').html('<div id="container3" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.IOPS);
            // jQuery('#PPS').html('<div id="container4" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.PPS);
            // jQuery('#Traffic').html('<div id="container5" style="height: 370px; width: 100%;margin-top:40px;"></div>' + json_response.Traffic);
            // jQuery(".graph-select").attr('disabled', false);
            // jQuery(".grph_section").hide();
            // jQuery("#" + [selectedOption]).show();
            return false;
        }

    });
}


jQuery('#submit').click(function () {
    var rebuild = jQuery("#rebuild_form").serialize();
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: rebuild,
        beforeSend: function () {
            //jQuery("#overlaydiv").show();
            jQuery('#rebuildWarningModal').modal('show');
            jQuery("#submit i").addClass("fa-spinner fa-spin");
            jQuery("#submit").attr('disabled', true);
        },
        success: function (response) {
            json_response = JSON.parse(response);
            jQuery("#submit i").removeClass("fa-spinner fa-spin");
            jQuery("#poweron_btn").hide();
            jQuery("#reboot_btn, #shutdown_btn, #reset_btn, #pass_reset_btn").show();
            if (json_response.status != "error") {
                var serverAction_text = langVar.servRebuild;
                jQuery('#rebuildWarningModal').modal('hide');
                jQuery('#liveToast').css({
                    'box-shadow': '0px 0px 5px 1px green',
                    'border-left': '5px solid rgb(26, 135, 14)'
                });
                jQuery(".toast-header").html('<i class="fa fa-check" aria-hidden="true"></i>');
                jQuery(".toast-body").html('<span class="mountsuccess">' + langVar.success + '</b>' + serverAction_text + ' ' + langVar.successDone + '</span>');
                jQuery("#liveToastModal").css('display', 'block');
                setTimeout(function () {
                    jQuery("#liveToastModal").css('display', 'none');
                }, 5000);
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');

                setTimeout(function () {
                    window.location.reload();
                }, 6200);

            } else {
                jQuery('#rebuildWarningModal').modal('hide');
                jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.msg + '</div>');
                jQuery('#liveToast').css({
                    'box-shadow': '0px 0px 5px 1px #fbbc90',
                    'border-left': '5px solid red'
                });
                jQuery(".toast-header").html('<i class="fa fa-times" aria-hidden="true"></i>');
                jQuery(".toast-body").html('<span class="mounterr">' + langVar.error + '</b>' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
            }
        },
    });
    // getOSimage_flavor('os_image_info');
});

function tableaction(action, id, body) {
    var postData = 'customaction=' + action + '&os_image_selected=' + id;
    if (action == 'rebuild') {
        $('#backuptable_rebuildWarningModal').modal('show');
        jQuery("#backuptable_submit").off('click').click(function () {
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: postData,
                beforeSend: function () {
                    // jQuery("#overlaydiv").show();
                    jQuery("#backuptable_submit i").addClass("fa-spinner fa-spin");
                    jQuery("#backuptable_submit").prop('disabled', true)
                },
                success: function (response) {
                    $('#backuptable_rebuildWarningModal').modal('show');
                    // jQuery("#overlaydiv").hide();
                    jQuery("#backuptable_submit i").removeClass("fa-spinner fa-spin");
                    jQuery("#backuptable_submit").prop('disabled', false)
                    jQuery("#poweron_btn").hide();
                    jQuery("#reboot_btn, #shutdown_btn, #reset_btn, #pass_reset_btn").show();
                    json_response = JSON.parse(response);

                    if (json_response.status != "error") {
                        setTimeout(function () {
                            window.location.reload();
                        }, 10000);
                        var serverAction_text = langVar.servRebuild;
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + ' ' + langVar.successDone + '</div>');
                    } else {
                        liveToast_Errors();
                        jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.msg + '</div>');
                    }
                }
            });
            //getOSimage_flavor('os_image_info');
        });
    }
    if (action == 'convertToSnapshot') {
        $('#backuptable_backupToSnapshot').modal('show');
        jQuery("#backupToSnapshot_submit").off('click').click(function () {
            //alert(postData+body);
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: postData + body,
                beforeSend: function () {
                    // jQuery("#overlaydiv").show();
                    jQuery("#backupToSnapshot_submit i").addClass("fa-spinner fa-spin");
                    jQuery("#backupToSnapshot_submit").prop('disabled', true)
                },
                success: function (response) {
                    // jQuery("#overlaydiv").hide();
                    jQuery("#backupToSnapshot_submit i").removeClass("fa-spinner fa-spin");
                    jQuery("#backupToSnapshot_submit").prop('disabled', false)
                    jQuery("#backuptable_backupToSnapshot").modal('hide');
                    json_response = JSON.parse(response);
                    if (json_response.status != "error") {
                        gettablecontent("gettable_backup");
                        var serverAction_text = "BACKUP TO SNAPSHOT ";
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + ' ' + langVar.successDone + '</div>');
                    } else {
                        liveToast_Errors();
                        jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.msg + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.msg + '</div>');
                    }
                }
            });
        });

    }
    if (action == 'deleteImage') {

        $('#delete_backupOrSnapshot').modal('show');
        jQuery("#delete_backupOrSnapshot_submit").off('click').on('click', function () {
            var clicktype = jQuery(this).attr('clicktype');
            jQuery(this).find('i').addClass("fa-spinner fa-spin");
            jQuery(this).prop('disabled', true)
            var self = this;
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: postData,
                beforeSend: function () {
                    //jQuery("#overlaydiv").show();
                },
                success: function (response) {
                    // jQuery("#overlaydiv").hide();
                    json_response = JSON.parse(response);
                    //alert(json_response); 
                    var serverAction_text = langVar.imgDelete;

                    if (response == "null") {
                        if (clicktype == 'backupbtn') {
                            gettablecontent('gettable_backup');
                        }
                        else {
                            gettablecontent('gettable_snapshot');
                        }
                        // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + ' ' + langVar.successDone + '</div>');
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                    }
                    else if (typeof json_response.error !== 'undefined' && json_response.error) {
                        liveToast_Errors();
                        jQuery(".toast-body").html('<span class="mounterr"> ' + json_response.error.message + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.error.message + '</div>');
                    }
                    jQuery(self).find('i').removeClass("fa-spinner fa-spin");
                    jQuery(self).prop('disabled', false);
                    $('#delete_backupOrSnapshot').modal('hide');
                }
            });


        });

    }
    if (action == 'change_protection') {
        $('#protection_Snapshot').modal('show');
        if (body == '&delete=false') {
            $('#protection_Snapshot h4.modal-title.text-center').text(langVar.disableProtection);
            $('#protection_Snapshot_submit').html(langVar.disableProtection + '<i class="fa"></i>');
            $("#protection_Snapshot_submit").removeClass("btn-success").addClass("btn-danger");
        } else {
            $('#protection_Snapshot h4.modal-title.text-center').text(langVar.enableProtection);
            $('#protection_Snapshot_submit').html(langVar.enableProtection + '<i class="fa"></i>');
            $("#protection_Snapshot_submit").removeClass("btn-danger").addClass("btn-success");
        }
        jQuery("#protection_Snapshot_submit").click(function () {
            //alert(postData+body);
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: postData + body,
                beforeSend: function () {
                    // jQuery("#overlaydiv").show();
                    jQuery("#protection_Snapshot_submit i").addClass("fa-spinner fa-spin");
                    jQuery("#protection_Snapshot_submit").prop('disabled', true)
                },
                success: function (response) {
                    // jQuery("#overlaydiv").hide();
                    jQuery("#protection_Snapshot_submit i").removeClass("fa-spinner fa-spin");
                    jQuery("#protection_Snapshot_submit").prop('disabled', false);
                    jQuery('#protection_Snapshot').modal('hide');
                    json_response = JSON.parse(response);
                    if (json_response.status != "error") {
                        if (body == '&delete=true') {
                            var serverAction_text = langVar.imgProtecEnable;
                        } else {
                            var serverAction_text = langVar.imgProtecDisable;
                        }
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + ' ' + langVar.successDone + '</div>');


                    } else {
                        liveToast_Errors();
                        jQuery(".toast-body").html('<span class="mounterr">' + son_response.msg + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.msg + '</div>');
                    }
                }
            });
            //alert("test");
            gettablecontent('gettable_snapshot');
        });
    }
    if (action == 'change_description') {
        tdata = jQuery("#" + id).html();
        jQuery("#snapshot_change_description").modal('show');
        jQuery("#snapshot_change_description form").attr('id', id + "_form");
        jQuery("#snapshot_change_description input[type=text]").val(tdata);

        var formID = "#" + id + "_form";
        jQuery(formID).off('submit').on('submit', function (e) {
            var changeDesData = jQuery("#" + id + "_form").serialize();
            e.preventDefault();
            jQuery("#snapshotNameid").attr('disabled', true);
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: postData + "&" + changeDesData,
                beforeSend: function () {
                    jQuery("#snapshotNameid i").addClass("fa-spinner fa-spin");
                },
                success: function (response) {
                    jQuery("#snapshot_change_description").modal('hide');
                    jQuery("#snapshotNameid i").removeClass("fa-spinner fa-spin");
                    jQuery("#snapshotNameid").attr('disabled', false);
                    json_response = JSON.parse(response);
                    var newImageName = json_response.image.description;
                    // jQuery(formID).remove();
                    jQuery("#" + id).html(newImageName);
                    tdata = newImageName;
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mounterr"> Successfully Description Changed </span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                }
            });
        });

        //         jQuery(`#${id}`).html(`
        //     <form id="${id}_form" action="" method="GET">
        //         <div class="input-group">
        //             <input type="text" class="form-control" value="${tdata}" name="imageName" style="background-image: url('loader.gif'); background-repeat: no-repeat; padding-left: 30px;">
        //             <div class="input-group-btn okbtn">
        //                 <button class="btn btn-danger" type="submit" name="submit" style="line-height: 2.0;" value="Save">
        //                 Save <i class="fa"></i>
        //                 </button>
        //             </div>
        //         </div>
        //     </form>
        // `);

        // var formID = "#" + id + "_form";
        // jQuery("#" + id + "_form input[type=text]").focus();
        // jQuery(document).mouseup(function (e) {

        //     var container = jQuery("#" + id + "_form");
        //     if (!container.is(e.target) && container.has(e.target).length === 0) {
        //         jQuery(formID).remove();

        //         jQuery("#" + id).html(tdata);
        //     }
        // });

        // jQuery(formID).submit(function (e) {
        //     //alert(formID);
        //     var changeDesData = jQuery("#" + id + "_form").serialize();
        //     //alert(postData+"&"+changeDesData);
        //     e.preventDefault();

        //     jQuery.ajax({

        //         url: "",
        //         type: 'POST',
        //         data: postData + "&" + changeDesData,
        //         beforeSend: function () {

        //             jQuery(".okbtn i").addClass("fa-spinner fa-spin");
        //             jQuery("#" + id + "_form button").attr('disabled',true)
        //         },
        //         success: function (response) {

        //             jQuery(".okbtn i").removeClass("fa-spinner fa-spin");
        //             jQuery("#" + id + "_form button").attr('disabled', false)
        //             //alert(response);
        //             json_response = JSON.parse(response);
        //             var newImageName = json_response.image.description;
        //             jQuery(formID).remove();
        //             jQuery("#" + id).html(newImageName);
        //             tdata = newImageName;

        //             liveToast_success();
        //             jQuery(".toast-body").html('<span class="mounterr"> Successfully Description Changed </span>');
        //             jQuery('#liveToast').removeClass('hide');
        //             jQuery('#liveToast').addClass('block fade show');

        //             //json_response  = JSON.parse(response);
        //         }
        //     });
        // });
    }
}

function getFloatingIP_tablecontent(action) {
    jQuery("#floating_ipTable").DataTable().destroy();
    jQuery(".addFloatingipbtn").attr('disabled', true);
    // jQuery("#FloatingIP_tableloader").addClass("fa-spinner fa-spin");
    var dataTableObj = $("#floating_ipTable").DataTable({
        "ajax": {
            url: "",
            type: 'POST',
            data: {
                "customaction": action
            },
            "dataSrc": "data",
        },
        columns: [
            { "data": 'ip' },
            { "data": 'description' },
            { "data": 'dns_ptr' },
            { "data": 'city' },
            { "data": 'action' },
        ],
        initComplete: function () {
            jQuery(".addFloatingipbtn").attr('disabled', false);
            // jQuery("#FloatingIP_tableloader").removeClass("fa-spinner fa-spin");
        }
    });


    // jQuery.ajax({
    //     url: "",
    //     type: 'POST',
    //     data: "customaction=" + action,
    //     beforeSend: function () {
    //         jQuery(".addFloatingipbtn").attr('disabled', true);
    //         jQuery("#FloatingIP_tableloader").addClass("fa-spinner fa-spin");

    //     },
    //     success: function (response) {
    //         jQuery(".addFloatingipbtn").attr('disabled', false);
    //         jQuery("#floating_ipTable tbody").html(response);
    //         jQuery("#FloatingIP_tableloader").removeClass("fa-spinner fa-spin");
    //     }
    // });
}

function floatingIP_tableaction(action, id, body) {
    var postData = 'customaction=' + action + '&floatingIP_selected=' + id;

    if (action == 'floating_ip_instruction') {
        jQuery("#floating_ip_modal").modal('show');
        jQuery('span#ipAddress').text(id);
    }

    if (action == 'floating_ip_change_description') {
        iptdata = jQuery("#" + id).html();
        jQuery("#floating_ip_change_description").modal('show');
        jQuery("#floating_ip_change_description form").attr('id', id + "_form");
        jQuery("#floating_ip_change_description input[type=text]").val(iptdata);

        var formID = "#" + id + "_form";

        jQuery(formID).off('submit').on('submit', function (e) {
            var changeDesData = jQuery("#" + id + "_form").serialize();
            e.preventDefault();
            jQuery("#floating_ipNameid").attr('disabled', true);
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: postData + "&" + changeDesData,
                beforeSend: function () {
                    jQuery("#floating_ipNameid i").addClass("fa-spinner fa-spin");
                },
                success: function (response) {
                    jQuery("#floating_ipNameid i").removeClass("fa-spinner fa-spin");
                    jQuery("#floating_ipNameid").attr('disabled', false);
                    json_response = JSON.parse(response);
                    var newIpDesc = json_response.floating_ip.description;
                    jQuery("#floating_ip_change_description").modal('hide');
                    jQuery("#" + id).html(newIpDesc);
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mounterr"> Successfully Description changes</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    iptdata = newIpDesc;
                }
            });
        });
    }
    if (action == 'change_IPprotection') {
        $('#protection_floatingIP').modal('show');
        if (body.includes('&delete=false')) {
            $('#protection_floatingIP h4.modal-title.text-center').text(langVar.disableProtection);
            $('#protection_floatingIP_submit').html(langVar.disableProtection + "<i class='fa'></i>");
            $("#protection_floatingIP_submit").removeClass("btn-success").addClass("btn-danger");
        } else {
            $('#protection_floatingIP h4.modal-title.text-center').text(langVar.enableProtection);
            $('#protection_floatingIP_submit').html(langVar.enableProtection + "<i class='fa'></i>");
            $("#protection_floatingIP_submit").removeClass("btn-danger").addClass("btn-success");
        }
        // jQuery("#protection_floatingIP_submit").click(function () {
        jQuery("#protection_floatingIP_submit").off('click').click(function () {
            //alert(postData+body);
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: postData + body,
                beforeSend: function () {
                    // jQuery("#overlaydiv").show();
                    jQuery("#protection_floatingIP_submit").attr("disabled", true);
                    jQuery("#protection_floatingIP_submit i").addClass("fa-spinner fa-spin");
                },
                success: function (response) {
                    jQuery("#protection_floatingIP").modal('hide');
                    jQuery("#protection_floatingIP_submit").attr("disabled", false);
                    jQuery("#protection_floatingIP_submit i").removeClass("fa-spinner fa-spin");
                    json_response = JSON.parse(response);

                    if (!json_response.action.error) {
                        if (body == '&delete=true') {
                            var serverAction_text = langVar.enableProtection;
                        } else {
                            var serverAction_text = langVar.disableProtection;
                        }
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b> ' + serverAction_text + '' + langVar.successDone + '</div>');
                        setTimeout(() => {
                            getFloatingIP_tablecontent('floating_ips');
                        }, 5000);

                    } else {
                        liveToast_Errors();
                        jQuery(".toast-body").html('<span class="mounterr">' + json_response.msg + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                    }
                }
            });
        });
    }
    if (action == 'reverseDNSedit') {
        var str = body;
        var ipAddress = str.substr(4);
        jQuery('#edit_reverseDNS').modal('show');
        jQuery('input#ip_no').attr("value", ipAddress);
        jQuery('input#ip_no').prop("readonly", true);
        var revDNStext = jQuery("#dns_ptr" + id).text();
        jQuery('input[name=floating_dns_ptr]').attr("value", revDNStext);
        jQuery("#edit_reverseDNS_submit").attr("disabled", true);
        jQuery("input[name=floating_dns_ptr]").keyup(function () {
            // ValidIpAddressRegex = /^(([1-9]?\d|1\d\d|2[0-5][0-5]|2[0-4]\d)\.){3}([1-9]?\d|1\d\d|2[0-5][0-5]|2[0-4]\d)$/;
            // ValidHostnameRegex = /^(([a-zA-Z0-9]|[a-zA-Z0-9][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)+([A-Za-z0-9][A-Za-z0-9]|[A-Za-z0-9][A-Za-z0-9\-]*[A-Za-z0-9])$/;
            // ValidIPAddress_HostnameRegex = /^((([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$\.)+(^(([a-zA-Z0-9]|[a-zA-Z0-9][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)+([A-Za-z0-9][A-Za-z0-9]|[A-Za-z0-9][A-Za-z0-9\-]*[A-Za-z0-9])$)/;
            // var dns_check1 = new RegExp(ValidIpAddressRegex);
            // var dns_check2 = new RegExp(ValidHostnameRegex);
            // var dns_check3 = new RegExp(ValidIPAddress_HostnameRegex);
            // var dns_ptrVal = jQuery('input[name=floating_dns_ptr]').val();
            // if (dns_check2.test(dns_ptrVal) == true) {
            //alert(dns_check1.test(dns_ptrVal));
            jQuery("#edit_reverseDNS_submit").attr("disabled", false);
            // } else {
            //     // alert("Invalid host name");
            //     jQuery("#edit_reverseDNS_submit").attr("disabled", true);
            // }

        });
        jQuery("#edit_reverseDNS_submit").off('click').click(function () {
            dns_ptrVal = jQuery('input[name=floating_dns_ptr]').val();
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: postData + body + "&dns_ptr=" + dns_ptrVal,
                beforeSend: function () {
                    // jQuery("#overlaydiv").show();
                    jQuery("#edit_reverseDNS_submit").attr("disabled", true);
                    jQuery("#edit_reverseDNS_submit i").addClass("fa-spinner fa-spin");
                    // jQuery("#FloatingIP_tableloader").addClass("fa-spinner fa-spin");

                },
                success: function (response) {
                    jQuery("#edit_reverseDNS").modal('hide');
                    jQuery("#edit_reverseDNS_submit").attr("disabled", false);
                    jQuery("#edit_reverseDNS_submit i").removeClass("fa-spinner fa-spin");
                    // jQuery("#overlaydiv").hide();
                    jQuery("#FloatingIP_tableloader").removeClass("fa-spinner fa-spin");
                    json_response = JSON.parse(response);

                    if (json_response.action) {
                        serverAction_text = "EDIT REVERSE DNS";
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + '' + langVar.successDone + '</div>');
                        // sleep(5000);
                        setTimeout(() => {
                            getFloatingIP_tablecontent('floating_ips');
                        }, 3000);
                        // jQuery('input[name=floating_dns_ptr]').val(dns_ptrVal);

                    } else if (json_response.error) {
                        liveToast_Errors();
                        jQuery(".toast-body").html('<span class="mounterr">' + json_response.error.details.fields[0].messages[0] + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery('input[name=dns_ptr]').attr("value",revDNStext);            
                        // jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.error.details.fields[0].messages[0] + '</div>');
                        // var dns_ptrVal= jQuery('input[name=dns_ptr]').val();
                        // jQuery('input[name=floating_dns_ptr]').val(revDNStext);

                    }
                }
            });

        });
    }
    if (action == 'reverseDNSreset') {
        // alert(revDNStext);
        jQuery("#reverseDNSresetModal").modal('show');
        jQuery("#reverseDNSresetModal_submit").off('click').click(function () {
            jQuery.ajax({
                url: "",
                type: 'POST',
                data: postData + body + "&dns_ptr=" + null,
                beforeSend: function () {
                    jQuery("#reverseDNSresetModal_submit").attr("disabled", true);
                    jQuery("#reverseDNSresetModal_submit i").addClass("fa-spinner fa-spin");
                },
                success: function (response) {
                    jQuery("#reverseDNSresetModal").modal('hide');
                    jQuery("#reverseDNSresetModal_submit").attr("disabled", false);
                    jQuery("#reverseDNSresetModal_submit i").removeClass("fa-spinner fa-spin");
                    json_response = JSON.parse(response);

                    if (json_response.action) {
                        serverAction_text = langVar.resetRevDns;
                        liveToast_success();
                        jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + '' + langVar.successDone + '</div>');
                        getFloatingIP_tablecontent('floating_ips');

                    } else if (json_response.error) {
                        liveToast_Errors();
                        jQuery(".toast-body").html('<span class="mounterr">' + json_response.error.details.fields[0].messages[0] + '</span>');
                        jQuery('#liveToast').removeClass('hide');
                        jQuery('#liveToast').addClass('block fade show');
                        // jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.error.details.fields[0].messages[0] + '</div>');
                    }
                }
            });
        });

    }
    if (action == "unassignFIP") {
        jQuery.ajax({
            url: "",
            type: 'POST',
            data: postData,
            beforeSend: function () {
                jQuery("#overlaydiv").show();
                jQuery(".addFloatingipbtn").attr('disabled', true);
                // jQuery("#FloatingIP_tableloader").addClass("fa-spinner fa-spin");

            },
            success: function (response) {
                jQuery("#overlaydiv").hide();
                jQuery(".addFloatingipbtn").attr('disabled', false);
                // jQuery("#FloatingIP_tableloader").removeClass("fa-spinner fa-spin");
                json_response = JSON.parse(response);

                if (json_response.status == 'success') {
                    // jQuery('#flpAssignUnassignModal').modal('show');
                    // jQuery('#flpAssignUnassign').text(langVar.flpunassign);
                    // jQuery('#flpAssignUnassignResponse').text(langVar.flpunassign + '' + langVar.successDone);

                    serverAction_text = langVar.flpunassign;
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + '' + langVar.successDone + '</div>');
                    getFloatingIP_tablecontent('floating_ips');

                } else if (json_response.error) {
                    // jQuery('#flpAssignUnassignModal').modal('show');
                    // jQuery('#flpAssignUnassign').text(langVar.flpunassign + ' ' + langVar.error);
                    // jQuery('#flpAssignUnassignResponse').text(json_response.error.details.fields[0].messages[0]);
                    liveToast_Errors();
                    jQuery(".toast-body").html('<span class="mounterr">' + json_response.error.details.fields[0].messages[0] + '</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    // jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.error.details.fields[0].messages[0] + '</div>');
                }
            }
        });
    }
    if (action == "assignFIP") {
        jQuery.ajax({
            url: "",
            type: 'POST',
            data: postData,
            beforeSend: function () {
                jQuery("#overlaydiv").show();
                jQuery(".addFloatingipbtn").attr('disabled', true);
                // jQuery("#FloatingIP_tableloader").addClass("fa-spinner fa-spin");

            },
            success: function (response) {
                jQuery("#overlaydiv").hide();
                jQuery(".addFloatingipbtn").attr('disabled', false);
                // jQuery("#FloatingIP_tableloader").removeClass("fa-spinner fa-spin");
                json_response = JSON.parse(response);

                if (json_response.action) {
                    // jQuery('#flpAssignUnassignModal').modal('show');
                    // jQuery('#flpAssignUnassign').text(langVar.flpassign);
                    // jQuery('#flpAssignUnassignResponse').text(langVar.flpassign + '' + langVar.successDone);
                    serverAction_text = langVar.flpassign;
                    liveToast_success();
                    jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + '' + langVar.successDone + '</div>');
                    getFloatingIP_tablecontent('floating_ips');

                } else if (json_response.error) {
                    // jQuery('#flpAssignUnassignModal').modal('show');
                    // jQuery('#flpAssignUnassign').text(langVar.flpassign + ' ' + langVar.error);
                    // jQuery('#flpAssignUnassignResponse').text(json_response.error.details.fields[0].messages[0]);
                    liveToast_Errors();
                    jQuery(".toast-body").html('<span class="mounterr">' + json_response.error.details.fields[0].messages[0] + '</span>');
                    jQuery('#liveToast').removeClass('hide');
                    jQuery('#liveToast').addClass('block fade show');
                    // jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.error.details.fields[0].messages[0] + '</div>');
                }
            }
        });
    }

}
jQuery('#addFloatingIP_submit').click(function () {
    var addfloatingIPdata = jQuery("#addFloatingIP_form").serialize();
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: addfloatingIPdata,
        beforeSend: function () {
            jQuery("#overlaydiv").show();
            jQuery("#FloatingIP_tableloader i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            json_response = JSON.parse(response);
            jQuery("#overlaydiv").hide()
            jQuery("#FloatingIP_tableloader i").removeClass("fa-spinner fa-spin");
            if (json_response.status != "error") {
                var serverAction_text = langVar.addfloatingIPsuccess;
                liveToast_success();
                jQuery(".toast-body").html('<span class="mounterr"> Successfully ' + serverAction_text + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                // jQuery("#ajaxresult").html('<div class="alert alert-success alert-dismissible "><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.success + '</b>' + serverAction_text + ' ' + langVar.successfully + '</div>');
                jQuery("#addFloating_IPSuccess").modal('show');

            } else if (json_response.status == "error") {
                jQuery('#addFloatingIPResponseModal').modal('show');
                jQuery('#flpAddResponse').text(json_response.msg);
                liveToast_Errors();
                jQuery(".toast-body").html('<span class="mounterr">' + json_response.msg + '</span>');
                jQuery('#liveToast').removeClass('hide');
                jQuery('#liveToast').addClass('block fade show');
                // jQuery("#ajaxresult").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>' + langVar.error + '</b>' + json_response.msg + '</div>');
            }
        },
    });
    // getOSimage_flavor('os_image_info');
});
function floatingIPcounter() {
    var addfloatingIPdata = "customaction=countFIPStatus";
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: addfloatingIPdata,
        beforeSend: function () {
            jQuery("#overlaydiv").show();
            jQuery("#FloatingIP_tableloader i").addClass("fa-spinner fa-spin");
        },
        success: function (response) {
            jQuery("#overlaydiv").hide()
            jQuery("#FloatingIP_tableloader i").removeClass("fa-spinner fa-spin");
            json_response = JSON.parse(response);
            jQuery("#flpstatus").html('<b>' + langVar.totalFloatingIP + '</b>' + json_response.floatingIPcount + '&nbsp <b>' + langVar.usedFloatingIP + '</b>' + json_response.usedFloatIP);
        }
    });
    return false;

}
function getCurrency() {
    jQuery.ajax({
        url: "",
        type: 'POST',
        data: 'customaction=currencyIDCode&currCode=' + currencyID,
        success: function (response) {
            json_response = JSON.parse(response);
            jQuery(".currCode").text(json_response.prefix);
            jQuery(".currCodeSuffix").text(json_response.suffix);
        }
    });
    return false;
}
jQuery("#snapshot-table_submit").click(function () {

    jQuery.ajax({
        url: "",
        type: 'POST',
        data: "customaction=" + 'take-snapshot',
        success: function (response) {
            alert(response);
        }
    });
});

