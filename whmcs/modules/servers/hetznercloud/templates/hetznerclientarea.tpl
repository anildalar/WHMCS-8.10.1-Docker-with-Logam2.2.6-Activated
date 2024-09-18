{literal}
    <script type="text/javascript">
        var bandwidthUsageTotal = {/literal}{$server_outgoing_traffic + $server_ingoing_traffic}{literal};
        var bandwidthUsageTotal_in_TB = bandwidthUsageTotal;
        var totalbandwidth = {/literal}{$included_traffic}{literal};
        var rootpath = "{/literal}{$WEB_ROOT}{literal}";
        var totalUsedPercentage = {/literal}{$totalUsedPercentage}{literal};

    var langVar = {/literal}
    {if $langVarJson}{$langVarJson}
    {else}""
    {/if}
    {literal};
    var FLPprice = {/literal}
    {if $FLPprice}{$FLPprice}
    {else}""
    {/if}
    {literal};
    var currencyID = {/literal}
    {if $clientsdetails['currency']}{$clientsdetails['currency']}
    {else}""
    {/if}
    {literal};
    </script>
{/literal}

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js">
</script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js">
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.1.3/circle-progress.min.js"></script>
{if $clientAreaTemplate == 'hostx'}
    <link rel="stylesheet" href="{$WEB_ROOT}/modules/servers/hetznercloud/templates/css/hostx.css">
{/if}
{if $clientAreaTemplate == 'twenty-x'}
    <link rel="stylesheet" href="{$WEB_ROOT}/modules/servers/hetznercloud/templates/css/twentyx.css">
{/if}
{if $clientAreaTemplate == 'clientx-child'}
    <link rel="stylesheet" href="{$WEB_ROOT}/modules/servers/hetznercloud/templates/css/clientx.css">
{/if}
{if $clientAreaTemplate == 'cloudx'}
    <link rel="stylesheet" href="{$WEB_ROOT}/modules/servers/hetznercloud/templates/css/cloudx.css">
{/if}
{if $clientAreaTemplate == 'six'}
    <link rel="stylesheet" href="{$WEB_ROOT}/modules/servers/hetznercloud/templates/css/six.css">
{/if}
{if $clientAreaTemplate == 'lagom2'}
    <link rel="stylesheet" href="{$WEB_ROOT}/modules/servers/hetznercloud/templates/css/lagom2.css">
{/if}

<link rel="stylesheet" href="{$WEB_ROOT}/modules/servers/hetznercloud/templates/css/style.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<script type="text/javascript" src="{$WEB_ROOT}/modules/servers/hetznercloud/js/highcharts.js"></script>
<div id="overlaydiv" class="text-center">
    <img id="loading-image" src="{$WEB_ROOT}/modules/servers/hetznercloud/templates/images/ajaxloader.gif" alt="">
</div>
<div id="ajaxresult"></div>
<div class="server-satus-wrapper">
    <div class="server-satus-running">
        <div class="server-satus-title">
            <h3>{$server_name}</h3>
            <h5 style="text-transform: uppercase;" id="server_status">{$server_status}</h5>
        </div>
        <div class="server-satus-inner-box">
            <div class="server-satus-cantos text-center">
                <div><span id="imageloader"><i class="fa" style="font-size: 30px"></i></span></div>
                <img src="{$WEB_ROOT}/modules/servers/hetznercloud/templates/images/{$server_os_flavor}.svg"
                    alt="Image Not Found" />
                <p>{$server_image_name}</p>
            </div>
            <div class="server-satus-space-center">
                <ul class="server-top-ul">
                    <li>
                        <img src="{$WEB_ROOT}/modules/servers/hetznercloud/templates/images/server/icon-2.svg"
                            alt="Image Not Found" />
                        <span>vCPU: <b>{$server_cores}</b></span>
                    </li>
                    <li>
                        <img src="{$WEB_ROOT}/modules/servers/hetznercloud/templates/images/server/icon-3.svg"
                            alt="Image Not Found" />
                        {* <object data="{$WEB_ROOT}/modules/servers/hetznercloud/templates/images/server/icon-3.svg"
                            type="image/svg+xml"></object> *}
                        <span>RAM: <b>{$server_memory} GB</b></span>
                    </li>
                    <li>
                        <img src="{$WEB_ROOT}/modules/servers/hetznercloud/templates/images/server/icon-4.svg"
                            alt="Image Not Found" />
                        {* <object data="{$WEB_ROOT}/modules/servers/hetznercloud/templates/images/server/icon-4.svg"
                            type="image/svg+xml"></object> *}
                        <span>{$_language.disklocal}<b>{$server_disk} GB </b> + <b id="vol_size"></b><b>GB</b></span>
                    </li>
                </ul>
                <ul class="server-bottom-ul">
                    <li><i class="fa fa-cloud-upload"
                            aria-hidden="true"></i><span>{$server_outgoing_traffic}</span><sub>GB</sub></li>
                    <li><i class="fa fa-cloud-download"
                            aria-hidden="true"></i><span>{$server_ingoing_traffic}</span><sub>GB</sub></li>
                </ul>

            </div>
            <div class="button-box">
                <button id="reboot_btn" href="#" class="btn-style btn-color-1 action-btn"
                    style="display: {if $server_status eq 'off'}none{else}inline-block{/if}" data-toggle="modal"
                    data-target="#rebootModal"><i class="fa fa-power-off"
                        aria-hidden="true"></i>{$_language.reboot}</button>
                <button id="shutdown_btn" href="#" class="btn-style btn-color-2 action-btn"
                    style="display: {if $server_status eq 'off'}none{else}inline-block{/if}" data-toggle="modal"
                    data-target="#shutdownModal"><i class="fa fa-power-off"
                        aria-hidden="true"></i>{$_language.shutdown}</button>
                <button id="reset_btn" href="#" class="btn-style btn-color-3 action-btn"
                    style="display: {if $server_status eq 'off'}none{else}inline-block{/if}" data-toggle="modal"
                    data-target="#resetModal"><i class="fa fa-plug" aria-hidden="true"></i>{$_language.reset}</button>
                <button id="pass_reset_btn" href="#" class="btn-style btn-color-4 action-btn"
                    style="display: {if $server_status eq 'off'}none{else}inline-block{/if}" data-toggle="modal"
                    data-target="#pass_resetModal"><i class="fa fa-key"
                        aria-hidden="true"></i>{$_language.resetRootPasswd}</button>
                <button id="poweron_btn" class="btn-style btn-color-3 action-btn"
                    {if $server_status eq 'running'}disabled{/if}
                    style="display: {if $server_status eq 'running' || $server_status neq 'off'}none{else}inline-block{/if}"
                    onclick="apicall('poweron');"><i class="fa fa-play" style="font-size:15px"></i>
                    {$_language.start}</button>
                <button id="console_btn" class="btn-style btn-color-4 action-btn"
                    onclick="window.open('{$WEB_ROOT}/modules/servers/hetznercloud/console.php?query={$serviceid}', '{$server_name}', 'width=800,height=800')"><i
                        class="fa fa-desktop" style="font-size:15px"></i> {$_language.console}</button>
            </div>
        </div>
    </div>
    <div class="bandwidth-snapshop-wrapper">
        <div class="band-left">
            {if $bandUsageSection neq 1}
                <div class="wandwidth-container">
                    <div class="wandwidth-title">
                        <h3>{$_language.bandwidthUsage}</h3>
                    </div>
                    <div class="wandwidth-container-inner">
                        <div class="circle" id="circle-a">
                            <strong></strong>
                        </div>
                        <h4><img src="{$WEB_ROOT}/modules/servers/hetznercloud/templates/images/server/mazerment.png"
                                alt="mazerment" /><span id="" style="color: #ff0000;">{$usageSize}</span>/
                            {$included_traffic} TB</h4>
                        <p>Last Updated {$lastupdate_date}</p>
                    </div>
            </div>{/if}
            <div class="snapshot-container-right">
                {if $rebuildSection neq 1}

                    <div class="server-details-wrapper">

                        <div class="rescue-container-right">
                            <div class="wandwidth-title">
                                <h3>{$_language.rebuild}</h3>
                            </div>
                            <div class="rescue-container-inner">
                                <p>{$_language.rebuildContainerText}</p>
                                <form action="" id="rebuild_form">
                                    <select class="oprator-select" id="os_images" name="os_image_selected">
                                        <option value="0">Loading...</option>
                                    </select>
                                    <input type="hidden" name="customaction" value="rebuild">
                                    <input id="submitmodal" type="button" name="submit" value="REBUILD"
                                        class=" btn btn-primary rebuild-btn" data-toggle="modal"
                                        data-target="#rebuildWarningModal" disabled>

                                </form>
                            </div>
                        </div>
                    </div>
                {/if}
            </div>
        </div>
        <div class="band-right">
            <div class="server-details-container">
                <div class="wandwidth-title">
                    <h3>{$_language.serverNetDetail}</h3>
                </div>
                <div class="server-details-inner">
                    <ul>
                        <li class="server-name"><i class="fa fa-check" aria-hidden="true"></i><span> IPv4:</span></li>
                        <li class="server-version">{$server_ipv4}</li>
                    </ul>
                    <ul>
                        <li class="server-name"><i class="fa fa-check" aria-hidden="true"></i><span> IPv6:</span></li>
                        <li class="server-version">{$server_ipv6}</li>
                    </ul>
                    <ul>
                        <li class="server-name"><i class="fa fa-check"
                                aria-hidden="true"></i><span>{$_language.datacenter}</span></li>
                        <li class="server-version"> {$server_datacenter}</li>
                    </ul>
                    <ul>
                        <li class="server-name"><i class="fa fa-check"
                                aria-hidden="true"></i><span>{$_language.city}</span></li>
                        <li class="server-version"> {$server_location_city}</li>
                    </ul>
                    <ul class="m-b-0">
                        <li class="server-name"><i class="fa fa-check"
                                aria-hidden="true"></i><span>{$_language.country}</span></li>
                        <li class="server-version">
                            {if $server_location_country eq "DE"}Germany{else}{$server_location_country}{/if}</li>
                    </ul>
                </div>
            </div>
            {if $rescueSection neq 1}

                <div class="rescue-container-right rescue_section">
                    <div class="wandwidth-title">
                        <h3>{$_language.rescue}</h3>
                    </div>
                    <div class="rescue-container-inner rescue-bg">
                        <p>{$_language.rescueContainerDesc} .</p>
                        <button id="enable_rescue" class="enable-btn" data-toggle="modal" data-target="#rescueModal"
                            style="display: {if $rescue_enabled eq 1 }none{else}inline-block{/if}">{$_language.enableRescue}</button>
                        <button id="disable_rescue" class="btn btn-danger float-left" data-toggle="modal"
                            data-target="#disablerescueModal"
                            style="display: {if $rescue_enabled neq 1}none{else}inline-block{/if}">{$_language.disableRescue}</button>
                    </div>
                </div>
            {/if}
        </div>
    </div>
    <div class="bk-snp-wrapper snapshot_backup">
        <div class="server-satus-title">
            <h3 style="float: none;">{$_language.backupandSnapshot}</h3>
            <ul class="right-btn-bk nav nav-tabs" style="float: none; flex-direction:row-reverse; margin-bottom: 10px;">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" id="backupbtn">Backup <i
                            id="backup_tableloader" class="fa"></i></a></li>
                <li class="nav-item"><a class="nav-link bk-sn-active" data-toggle="tab" id="snapshotbtn"
                        class="bk-sn-active">Snapshots <i id="snapshot_tableloader" class="fa"></i></a></li>
            </ul>
        </div>

        <div class="snapshot-table server-satus-title">
            <div id="backup_tab" style="display: none">
                <div class="table-responsive">
                    <table id="backup_table" class="table table-hover " style="width:100%">
                        <thead>
                            <tr>
                                <th>{$_language.snapAndBackupDescription}</th>
                                <th>{$_language.snapAndBackupCreated}</th>
                                <th>{$_language.snapAndBackupDiskSize}</th>
                                <th>{$_language.snapAndBackupStatus}</th>
                                <th>{$_language.tableAction}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="snapshot_tab">
                <div class="table-responsive">
                    <table id="snapshot_table" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>{$_language.snapAndBackupDescription}</th>
                                <th>{$_language.snapAndBackupCreated}</th>
                                <th>{$_language.snapAndBackupDiskSize}</th>
                                <th>{$_language.snapAndBackupStatus}</th>
                                <th>{$_language.tableAction}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {* Firewall section *}

    <div class="bk-snp-wrapper firewall_section">
        <div class="server-satus-title">
            <h3>{$_language.firewalls}</h3>
            <ul class="right-btn-bk">
                <li class="tab">
                    <button id="create_firewall" class="btn btn-primary" data-toggle="modal"
                        data-target="#CreatefirewallModal">
                        {$_language.createfirewall} ({$firewall_count}/{$number_firewall_limits})
                        <i id="firewall_tableloader" class="fa"></i>
                    </button>
                </li>
            </ul>
        </div>
        <div class="create_firewall-table server-satus-title">
            <div id="firewall_create_tab">
                <div class="table-responsive">
                    <table id="firewall_create_table" class="table table-hover " style="width:100%">
                        <thead>
                            <tr>
                                <th>{$_language.firewallname}</th>
                                <th>{$_language.firewallCreated}</th>
                                <th>{$_language.firewallInboundrule}</th>
                                <th>{$_language.firewallOutboundrule}</th>
                                <th>{$_language.firewallAction}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {*firewall rules*}

    <div class="bk-snp-wrapper firewall_rule_section">
        <div class="server-satus-title">
            <h3>{$_language.firewallRules}</h3>
        </div>
        <div class="firewall_rules-table server-satus-title" style="position: relative; margin-bottom: 31px;">
            <div id="firewall_rule_tab">
                <div class="table-responsive">
                    <table id="firewall_rules_table" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>{$_language.firewallProtocol}</th>
                                <th>{$_language.firewallPort}</th>
                                <th>{$_language.firewallIP}</th>
                                <th>{$_language.firewallDirection}</th>
                                <th>{$_language.firewallDescription}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {* create Newtwork *}
    <div class="bk-snp-wrapper network_section">
        <div class="server-satus-title">
            <h3>{$_language.networks}</h3>
            <ul class="right-btn-bk">
                <li class="tab">
                    <button id="create_network" class="btn btn-primary" data-toggle="modal"
                        data-target="#CreatenetworkModal">
                        {$_language.create_network}
                        <i id="network_tableloader" class="fa"></i>
                    </button>
                </li>
            </ul>
        </div>
        <div class="create_netwrok-table server-satus-title">
            <div id="network_create_tab">
                <div class="table-responsive">
                    <table id="network_table" class="table table-hover " style="width:100%">
                        <thead>
                            <tr>
                                <th>{$_language.networkname}</th>
                                <th>{$_language.IPRange}</th>
                                <th style="text-align: center;">{$_language.firewallAction}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- reverse DNS with server -->
    <div class="bk-snp-wrapper reverseDns_section">
        <div class="server-satus-title">
            <h3>{$_language.Reverse_dns}</h3>
            <ul class="right-btn-bk">
                <li class="tab">
                    <button id="create_reverse_Dns" class="btn btn-primary" data-toggle="modal"
                        data-target="#CreateReverseDnsModal" onclick="create_ipv6_ReverseDns('create_ipv6_ReverseDns')">
                        {$_language.createDNS}
                    </button>
                </li>
            </ul>
        </div>
        <div class="create_DNS-table server-satus-title">
            <div id="ReverseDns_create_tab">
                <div class="table-responsive">
                    <table id="dns_create_table" class="table table-hover " style="width:100%">
                        <thead>
                            <tr>
                                <th>{$_language.DNSipv}</th>
                                <th>{$_language.DNSIp}</th>
                                <th>{$_language.ReverseDNS}</th>
                                <th>{$_language.firewallAction}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="bk-snp-wrapper floatingIps_section">
        <div class="server-satus-title">
            <div id="floatingIP_table_section">
                <h3>{$_language.floatingIP}</h3>
                {if $number_of_floatingIP > 0}
                    <div class="py-3 floating_detail">
                        <div id="flpstatus"> <b> {$_language.totalFloatingIP}</b>
                            {$number_of_floatingIP} &nbsp <b>{$_language.usedFloatingIP}</b>
                            {$number_of_floatingIP_used}
                        </div>
                        <button href="#" class="btn btn-primary float-right  addFloatingipbtn" style="display: inline-block"
                            data-toggle="modal" data-target="#addfloatingIPModal"><i class="fa fa-plus " aria-hidden="true"
                                style="font-size: 13px;"></i>{$_language.addfloatingIP}<i id="FloatingIP_tableloader"
                                class="fa"></i></button>
                    </div>
                {/if}
            </div>
        </div>
        {if $number_of_floatingIP > 0}
            <div class="Floating-IPS-table server-satus-title">
                <div id="FloatingIP_create_tab">
                    <div class="table-responsive">
                        <table id="floating_ipTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>IP</th>
                                    <th>{$_language.snapAndBackupDescription}</th>
                                    <th>{$_language.reverseDNS}</th>
                                    <th>{$_language.homeLocation}</th>
                                    <th>{$_language.tableAction}</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        {else}
            <div>
                <p>{$_language.noFloatingIPBuyed}</p>
            </div>
        {/if}
    </div>



    <div class="server-details-wrapper bk-snp-wrapper ISOImage_section">
        <div class="rescue-container-right">
            <div class="wandwidth-title" style="padding-top: 20px;">
                <h3>{$_language.isoimages}</h3>
                <ul class="right-btn-bk">
                    <li><a id="unmount" data-toggle="modal" data-target="#unmountModal"
                            class="bk-sn-active {if !$iso}disabled{/if}">{$_language.unmountbtn}</a>
                    </li>
                </ul>
            </div>
            <div class="rescue-container-inner">
                {if $server_iso_name}
                    <div class="server_iso_name">
                        <div class="optimize">
                            <p style="font-weight: bold; margin-bottom:0rem">An ISO image is mounted</p>
                        </div>
                        <p id="iso_description" data-value="{$server_iso_name}">
                            {$server_iso_name}
                        </p>
                    </div>
                {else}
                    <div class="server_iso_name" style="display: none;">
                        <div class="optimize">
                            <p style="font-weight: bold;">An ISO image is mounted</p>
                        </div>
                        <p id="iso_description" data-value="{$_language.noneSelected}">
                            {$_language.noneSelected}</p>
                    </div>
                {/if}
                <p>{$_language.isoContainerText}</p>
                <div><span id="isoloader"><i class="fa" style="font-size: 30px"></i></span></div>
                <form action="" id="mount_form">
                    <select class="oprator-select" id="iso" name="iso">
                        <option value="0">Loading...</option>
                    </select>
                    <input type="hidden" name="customaction" value="mount">
                    <div>
                        <button id="submitBtn" type="button" name="submit" class="btn btn-primary mount-btn"
                            onclick="mountIso(this);" disabled>
                            MOUNT
                            <i class="fa"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SSh key section -->
    {if $SSHkeyID}
        <div class="bk-snp-wrapper SSHKey_section">
            <div class="server-satus-title">
                <h3>{$_language.SshManage}</h3>
            </div>
            <div class="sshManager-table server-satus-title">
                <div id="ssh_manager_tab">
                    <div class="table-responsive">
                        <table id="ssh_table_manager" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>{$_language.SshName}</th>
                                    <th>{$_language.Fingerprint}</th>
                                    <th>{$_language.SshCreated}</th>
                                    <th>{$_language.firewallAction}</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {/if}
    {* {if $graphSection neq 1}
        <div class="graphs-wrapper">
            <div class="server-satus-title">
                <h3>{$_language.graphtext}</h3>
                <select class="graph-select">
                    <option value="live">{$_language.graphlivetext}</option>
                    <option value="12hr">{$_language.graph12hrtext}</option>
                    <option value="24hr">{$_language.graph24hrtext}</option>
                    <option value="week">{$_language.graph1weektext}</option>
                    <option value="month">{$_language.graph30daystext}</option>
                </select>
            </div>
            <div class="graphs-inner-box text-center">
                <span id="graphloader"><i class="fa" style="font-size: 30px"></i></span>
                <div id="CPU" class="grph_section active-graph">
                </div>
                <div id="Throughput" class="grph_section">
                </div>
                <div id="IOPS" class="grph_section">
                </div>
                <div id="Traffic" class="grph_section">
                </div>
                <div id="PPS" class="grph_section">
                </div>
            </div>

        </div>
    {/if} *}

    {if $graphSection neq 1}
        <div class="graphs-wrapper graph_section">
            <div class="server-satus-title">
                <h3>{$_language.graphtext}</h3>
                <select class="graph-select">
                    <option value="live">{$_language.graphlivetext}</option>
                    <option value="12hr">{$_language.graph12hrtext}</option>
                    <option value="24hr">{$_language.graph24hrtext}</option>
                    <option value="week">{$_language.graph1weektext}</option>
                    <option value="month">{$_language.graph30daystext}</option>
                </select>
                <select id="graph-selection">
                    <option value="CPU">{$_language.CPU}</option>
                    <option value="Throughput">{$_language.Throughput}</option>
                    <option value="IOPS">{$_language.IOPS}</option>
                    <option value="Traffic">{$_language.Traffic}</option>
                    <option value="PPS">{$_language.PPS}</option>
                </select>
            </div>
            <div class="graphs-inner-box text-center">
                <span id="graphloader"><i class="fa" style="font-size: 30px"></i></span>
                <div id="CPU" class="grph_section active-graph">
                </div>
                <div id="Throughput" class="grph_section">
                </div>
                <div id="IOPS" class="grph_section">
                </div>
                <div id="Traffic" class="grph_section">
                </div>
                <div id="PPS" class="grph_section">
                </div>
            </div>
        </div>
    {/if}
    <!-- Task history table -->
    <div class="bk-snp-wrapper taskHistory_section">
        <div class="server-satus-title">
            <h3>{$_language.taskHistory}</h3>
            <ul class="right-btn-bk">
                <li class="tab">
                    <button id="refresh_history" class="btn btn-light text-success" onclick="refresh_history()">
                        <i class="fa fa-sync-alt text-success" style="font-weight: 500; font-size: 17px;"></i>
                        {$_language.RefreshHistory}
                    </button>
                </li>
            </ul>
        </div>
        <div class="task_history-table server-satus-title">
            <div id="task_history_tab">
                <div class="table-responsive">
                    <table id="task_history_table" class="table table-hover" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>{$_language.taskName}</th>
                                <th>{$_language.taskStatus}</th>
                                <th>{$_language.taskCreated}</th>
                                <th>{$_language.Completed}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------- reboot modal -->
<div class="modal fade custom_modal" id="rebootModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.rebootModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.rebootModaltext}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    onclick="apicall('reboot');">{$_language.reboot}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>

    </div>
</div>
<!------   Unmount modal -->
<div class="modal fade custom_modal" id="unmountModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.unmountModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center" id="iso_description_name">
                <p>UNMOUNT attched {$server_iso_name} image</p>
            </div>
            <div class="modal-footer">
                <button id="unmount_btn" type="button" class="btn btn-danger"
                    onclick="unMountIso(this);">{$_language.unmountbtn}
                    <i class="fa"></i>
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!------   Toaster modal -->
{* <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> *}

<div id="liveToastModal" class="position-fixed bottom-0 right-0 p-3" style="right: 0; top: 20px;">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000">
        <div class="toast-header">
            <i class="fa fa-check" aria-hidden="true"></i>
        </div>
        <div class="toast-body">
        </div>
    </div>
</div>

<!------   shutdown modal -->
<div class="modal fade custom_modal" id="shutdownModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.shutdownModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.shutdownModaltext}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    onclick="apicall('shutdown');">SHUTDOWN</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!-- ------RESET MODAL   -->
<div class="modal fade custom_modal" id="resetModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.resetModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.resetModaltext}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    onclick="apicall('reset');">RESET</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!-- ------PASSWORD RESET MODAL   -->
<div class="modal fade custom_modal" id="pass_resetModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.resetpassModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.resetpassModaltext}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    onclick="apicall('reset_password');">{$_language.resetpassModalHeading}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade custom_modal" id="rootPasswordRest" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.resetpassSuccessModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.resetpassSuccessModaltext}</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal" aria-hidden="true">{$_language.closeText}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade custom_modal" id="serverSnapshot" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.serverSnapshotModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.serverSnapshotModalText}</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="serverSnapshot_btn" class="btn btn-danger"
                    onclick="apicall('create_image');">{$_language.createSnapshot}
                    <i class="fa"></i>
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade custom_modal" id="serverBackup" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.serverBackupModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.serverBackupModalText}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="create_backup_btn"
                    onclick="apicall('create_backup');">{$_language.createBackup}<i class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade custom_modal" id="rescueModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">ENABLE RESCUE</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>Please choose a rescue system and optionally add an ssh key.</p>
                <form action="">
                    <div class="form-group">
                        <select class="form-control" name="rescue_os" id="rescue_os">
                            <option value="linux64">linux64</option>
                            <option value="linux32">linux32</option>
                            <option value="freebsd64">freebsd64</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="ssh-key" placeholder="SSH KEY"
                            style=" margin-bottom: 15px;">
                        <button type="submit" class="btn btn-danger" id="enable_rescue_btn"
                            onclick="apicall('enable_rescue');">{$_language.enableRescue}
                            <i class="fa "></i>
                        </button>
                        <button type="button" class="btn btn-danger"
                            data-dismiss="modal">{$_language.cancelText}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade custom_modal" id="disablerescueModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.disableRescue}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.disableRescueModaltext}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="disablerescue_btn"
                    onclick="apicall('disable_rescue');">{$_language.disableRescue}
                    <i class="fa "></i>
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!-- Rebuild warning modal -->
<div class="modal fade custom_modal" id="rebuildWarningModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.rebuildModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.rebuildModalText}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="submit">{$_language.rebuild} <i class="fa"
                        style="font-size: 30px"></i>
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>

<!-- Backup table Rebuild warning modal -->

<div class="modal fade custom_modal" id="backuptable_rebuildWarningModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.rebuildModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.rebuildModalText}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="backuptable_submit">{$_language.rebuild}<i
                        class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!-- convert backup to snapshot -->
<div class="modal fade custom_modal" id="backuptable_backupToSnapshot" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.convertTosnapModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.convertTosnapModaltext}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                    id="backupToSnapshot_submit">{$_language.convertTosnapModalHeading}<i class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!-- delete backup or snapshot -->
<div class="modal fade custom_modal" id="delete_backupOrSnapshot" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.deleteBkpSnapModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.deleteBkpSnapModaltext}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" clicktype=""
                    id="delete_backupOrSnapshot_submit">{$_language.deleteText} <i class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!-- edit SSHName modal -->
<div class="modal fade custom_modal" id="editSSHKeyModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.EditSSHName}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body ">
                <p>{$_language.EditSSHMsg}</p>
                <div style="display: flex; flex-direction: column; margin: 26px;">
                    <div>
                        <label for="editSSHKeyName">SSH Name</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" id="editSSHKeyName" value=""
                            style="background-repeat: no-repeat; padding-left: 7px;">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="editSSHKey"
                    onclick="EditsshName('Edit_SSHName');">{$_language.FirewallEdit}<i class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>

    </div>
</div>
<!-- enable protection for snapshot -->
<div class="modal fade custom_modal" id="protection_Snapshot" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.enableProModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.enableProModalText}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                    id="protection_Snapshot_submit">{$_language.enableProModalHeading}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!-- change description of snapshot -->
<div class="modal fade custom_modal" id="snapshot_change_description" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.ChangeDescription}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>{$_language.SnapshotIPDescription}</p>
                <form>
                    <div class="input-group">
                        <label for="floating_ipDescription">{$_language.Description}</label>
                        <input type="text" id="snapshotName" class="form-control" value="" name="imageName">
                    </div>
                    <div class="modal-footer" style="width: 100%;">
                        <button id="snapshotNameid" class="btn btn-danger" type="submit" name="submit" value="Save">Save
                            <i class="fa"></i></button>
                        <button type="button" class="btn btn-danger"
                            data-dismiss="modal">{$_language.cancelText}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Floating IPs instruction Modal -->
<div class="modal fade custom_modal" id="floating_ip_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.fIpInstrModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p style="font-weight: 600;">{$_language.fIpInstrModalbodyText1}</p>
                <p class="mt-3 mb-4">{$_language.fIpInstrModalbodyText2}</p>
                <div class="bg-dark text-light mb-3">{$_language.fIpInstrModalbodyText3}</div>
                <div>{$_language.fIpInstrModalbodyText4}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                    data-dismiss="modal">{$_language.fIpInstrModalfooter}</button>
            </div>
        </div>
    </div>
</div>
<!-- Floating IPs protection Modal -->

<div class="modal fade custom_modal" id="protection_floatingIP" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.enableProModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.fIpProtectModalbodyText1}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                    id="protection_floatingIP_submit">{$_language.enableProModalHeading}<i class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!--floating_ip_change_description-->
<div class="modal fade custom_modal" id="floating_ip_change_description" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.ChangeDescription}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>{$_language.floatingIPDescription}</p>
                <form action=" " method="post">
                    <div class="input-group">
                        <label for="floating_ipDescription">{$_language.Description}</label>
                        <input type="text" id="floating_ipDescription" class="form-control" value=""
                            name="floating_ipDescription">
                    </div>
                    <div class="modal-footer" style="width: 100%;">
                        <button id="floating_ipNameid" class="btn btn-danger" type="submit" name="submit"
                            value="Save">Save <i class="fa"></i></button>
                        <button type="button" class="btn btn-danger"
                            data-dismiss="modal">{$_language.cancelText}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{* Firewall delete modal *}

<div class="modal fade custom_modal" id="deleteModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">
                    <h4 style="color: black;">{$_language.confirmDelete}</h4>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.confirmDeleteMessage}</p>
            </div>
            <div class="modal-footer">
                <button id="confirmDelete" class="btn btn-danger">{$_language.DeleteYES}<i class="fa"
                        aria-hidden="true"></i></button>
                <button class="modal-close btn btn-danger" data-dismiss="modal">{$_language.DeleteNO}</button>
            </div>
        </div>
    </div>
</div>

{* create network *}
<div class="modal custom_modal fade" id="CreatenetworkModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.create_network}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="createNetwork_form">
                <div class="modal-body">
                    <p>{$_language.network_msg}</p>
                    <div class="form-group mr-3 ml-3">
                        <div class="row" style="margin-bottom: 14px;">
                            <div class="col-md-5">
                                <label for="network_name" style="display: flex;">Network Name</label>
                                <input type="text" name="network_name" class="form-control" id="network_name"
                                    placeholder="{$_language.networkname}" required="true">
                            </div>
                            <div class="col-md-5">
                                <label style="display: flex;">Network Zone </label>
                                <select name="network_zone" class="form-control">
                                    <option value="eu-central">eu-central</option>
                                    <option value="us-east">us-east</option>
                                    <option value="us-west">us-west</option>
                                </select>
                            </div>
                        </div>
                        <label for="ip_range">IP Range</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="ip_range" class="form-control" id="ip_range"
                                    placeholder="{$_language.IPRange}" required="true">
                            </div>
                            <div class="col-md-1">
                                <h2>/</h2>
                            </div>
                            <div class="col-md-3">
                                <input type="number" name="ip_range_add" class="form-control" id="ip_range_add" min="1">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button id="create_networks" class="btn btn-primary"
                    onclick="createNetwork('create_network');">{$_language.create_network}<i class="fa"
                        aria-hidden="true"></i></button>
                <button id="closeModalButton" class="modal-close btn btn-danger"
                    data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
{* delete network modal *}
<div class="modal fade custom_modal" id="networkdeleteModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">
                    <h4 style="color: black;">{$_language.confirmDelete}</h4>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.confirmDeleteMessageNetwork}</p>
            </div>
            <div class="modal-footer">
                <button id="networkConfirmDelete" class="btn btn-danger">{$_language.DeleteYES}<i class="fa"
                        aria-hidden="true"></i></button>
                <button class="modal-close btn btn-danger" data-dismiss="modal">{$_language.DeleteNO}</button>
            </div>
        </div>
    </div>
</div>

{* content manage inside modal *}

<div class="modal fade custom_modal" id="content_modal_network" tabindex="-1" role="dialog"
    aria-labelledby="subnetModal" aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog" role="document" id="NetworkSubnet">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center" id="exampleModalLabel">Subnet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    &times
                </button>
            </div>
            <div class="modal-body">
                <div style="display: flow-root;">
                    <ul class="right-btn-bk">
                        <li class="tab">
                            <button class="btn btn-primary" type="button" data-toggle="collapse" id="create_subnet"
                                data-target="#add_subnet" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fa fa-plus " aria-hidden="true" style="font-size: 13px;"></i>
                                {$_language.addSubnet}
                                <i id="network_tableloader" class="fa"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="collapse" id="add_subnet">
                    <div class="card card-body">
                        <form id="createSubnet_form">
                            <div class="modal-body">
                                <p>{$_language.subnet_msg}</p>
                                <div class="form-group">
                                    <label for="IPRanges">IP Range</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="ip_range" class="form-control" id="IPRanges"
                                                placeholder="{$_language.IPRange}" required="true">
                                        </div>
                                        <div class="col-md-1">
                                            <h2>/</h2>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="ip_range_add" class="form-control"
                                                id="iprangesubnet" min="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button id="add_network_subnet" class="btn btn-danger"
                                onclick="addSubnet('addSubnet');">{$_language.SubnetEdit}<i class="fa"
                                    aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="create_subnet-table server-satus-title">
                    <div id="subnet_create_tab">
                        <div class="table-responsive">
                            <table id="subnet_table" class="table table-hover " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>{$_language.IPRange}</th>
                                        <th>{$_language.Gateway}</th>
                                        <th>{$_language.firewallAction}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {* <div class="collapse" id="AddResource">
                    <div class="card card-body">
                         <div style="display: flow-root;">
                            <ul class="right-btn-bk">
                                <li class="tab btn">
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        id="create_resources" data-target="#attach_resources" aria-expanded="false"
                                        aria-controls="attach_resources">
                                        {$_language.addResources}
                                        <i id="network_tableloader" class="fa"></i>
                                    </button>
                                </li>
                            </ul>
                        </div> *}
                {* <div class="collapse" id="attach_resources">
                            <div class="card card-body">
                                <form id="createResources_form">
                                    <div class="modal-body">
                                        <p>{$_language.Resources_msg}</p>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label id="attach_resourse">{$_language.ResourceType}</label>
                                                <select class="form-control" id="attach_resourse" name="ResourceType">
                                                    <option value="0">None</option>
                                                    <option value="server">Server</option>
                                                    <option value="loadbalancer">Load Balancer</option>
                                                </select>
                                            </div>
                                            <div class="col form-group">
                                                <label for="resources_option">{$_language.addResources}</label>
                                                <select id="resources_option" class="form-control"
                                                    name="AvaliableResource">
                                                    <option value="0">Select Type</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="resource_name">{$_language.Private_IP}</label>
                                                <input type="text" name="resource_private_ip"
                                                    class="form-control form-control" id="resource_name"
                                                    placeholder="{$_language.Private_IP}" required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group form-check" style="margin-left: 1rem;">
                                                <input type="checkbox" class="form-check-input"
                                                    name="private_ip_resourse" id="private_ip_resourse" required="true">
                                                <label class="form-check-label" for="private_ip_resourse">configure
                                                    IP
                                                    address manually</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button id="add_network_resources" class="btn btn-primary"
                                        onclick="AttachResources('addResources');">{$_language.AddResources}<i
                                            class="fa" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div> *}
                <div class="create_Resources-table server-satus-title">
                    <div class="modal-header resourcestableHeader">
                        <h3 class="modal-title" id="exampleModalLabe" style="margin-top: 0px;">Subnet Resource</h3>
                    </div>
                    <div id="Resources_create_tab">
                        <div class="table-responsive">
                            <table id="Resources_table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>{$_language.resource_name}</th>
                                        <th>{$_language.Resource_privateIp}</th>
                                        <th>{$_language.AliasIps}</th>
                                        <th>{$_language.ResourcesAction}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="collapse fade" id="Edit_aliasIP">
                    <div class="card card-body">
                        <div class="alias_header">
                            <h4 class="Alias-title">{$_language.Edit_alias}</h4>
                        </div>
                        <div class="alias-body">
                            <form id="createAliasIP_form">
                                <div class="modal-body">
                                    <p>{$_language.EditAlias_msg}</p>
                                    <div class="form-group mr-3 ml-3">
                                        <label style="display: flex;">{$_language.AliasIP}</label>
                                        <div class="row change_alias_ip mb-4">
                                            <div class="col-md-8">
                                                <input type="text" name="alias_ip" class=" form-control edit_alias_ip"
                                                    placeholder="{$_language.AliasIP}" required="true">
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-primary adds_alias_ip"><i
                                                        class="fa fa-plus"
                                                        style="font-size: 13px; margin-right: 3px;"></i>Add
                                                    More</button>
                                            </div>
                                        </div>
                                        <div class="add_alias_btn modal-footer">
                                            <button type="button" class="btn btn-danger" id="add_alias_ip"
                                                onclick="Add_aliasIp('Add_alias_ip')">Save alias IPs <i class="fa"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {* </div> *}
                {* </div>  *}
            </div>
        </div>
    </div>
</div>

<!-- Get Network subnet modal -->
{* <div id="NetworkSubnet" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subnet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="display: flow-root;">
                    <ul class="right-btn-bk">
                        <li class="tab btn">
                            <button class="btn btn-primary" type="button" data-toggle="collapse" id="create_subnet"
                                data-target="#add_subnet" aria-expanded="false" aria-controls="collapseExample">
                                {$_language.addSubnet}
                                <i id="network_tableloader" class="fa"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="collapse" id="add_subnet">
                    <div class="card card-body">
                        <form id="createSubnet_form">
                            <div class="modal-body">
                                <p>{$_language.subnet_msg}</p>
                                <div class="form-group">
                                    <label for="IPRanges">IP Range</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="ip_range" class="form-control" id="IPRanges"
                                                placeholder="{$_language.IPRange}" required="true">
                                        </div>
                                        <div class="col-md-1">
                                            <h2>/</h2>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="ip_range_add" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button id="add_network_subnet" class="btn btn-primary"
                                onclick="addSubnet('addSubnet');">{$_language.SubnetEdit}<i class="fa"
                                    aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="create_subnet-table server-satus-title">
                    <div id="subnet_create_tab">
                        <table id="subnet_table" class="table table-hover " style="width:100%">
                            <thead>
                                <tr>
                                    <th>{$_language.IPRange}</th>
                                    <th>{$_language.Gateway}</th>
                                    <th>{$_language.firewallAction}</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                { <div class="collapse" id="AddResource">
                    <div class="card card-body">
                        { <div style="display: flow-root;">
                            <ul class="right-btn-bk">
                                <li class="tab btn">
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        id="create_resources" data-target="#attach_resources" aria-expanded="false"
                                        aria-controls="attach_resources">
                                        {$_language.addResources}
                                        <i id="network_tableloader" class="fa"></i>
                                    </button>
                                </li>
                            </ul>
                        </div> *}
{* <div class="collapse" id="attach_resources">
                            <div class="card card-body">
                                <form id="createResources_form">
                                    <div class="modal-body">
                                        <p>{$_language.Resources_msg}</p>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label id="attach_resourse">{$_language.ResourceType}</label>
                                                <select class="form-control" id="attach_resourse" name="ResourceType">
                                                    <option value="0">None</option>
                                                    <option value="server">Server</option>
                                                    <option value="loadbalancer">Load Balancer</option>
                                                </select>
                                            </div>
                                            <div class="col form-group">
                                                <label for="resources_option">{$_language.addResources}</label>
                                                <select id="resources_option" class="form-control"
                                                    name="AvaliableResource">
                                                    <option value="0">Select Type</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="resource_name">{$_language.Private_IP}</label>
                                                <input type="text" name="resource_private_ip"
                                                    class="form-control form-control" id="resource_name"
                                                    placeholder="{$_language.Private_IP}" required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group form-check" style="margin-left: 1rem;">
                                                <input type="checkbox" class="form-check-input"
                                                    name="private_ip_resourse" id="private_ip_resourse" required="true">
                                                <label class="form-check-label" for="private_ip_resourse">configure
                                                    IP
                                                    address manually</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button id="add_network_resources" class="btn btn-primary"
                                        onclick="AttachResources('addResources');">{$_language.AddResources}<i
                                            class="fa" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div> *}
{* <div class="create_Resources-table server-satus-title">
                            <div id="Resources_create_tab">
                                <div class="table-responsive">
                                    <table id="Resources_table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>{$_language.resource_name}</th>
                                                <th>{$_language.Resource_privateIp}</th>
                                                <th>{$_language.AliasIps}</th>
                                                <th>{$_language.ResourcesAction}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="Edit_aliasIP">
                            <div class="card card-body">
                                <div class="alias_header">
                                    <h5 class="Alias-title">{$_language.Edit_alias}</h5>
                                </div>
                                <div class="alias-body">
                                    <form id="createAliasIP_form">
                                        <div class="modal-body">
                                            <p>{$_language.EditAlias_msg}</p>
                                            <div class="form-group mr-3 ml-3">
                                                <label style="display: flex;">{$_language.AliasIP}</label>
                                                <div class="row change_alias_ip">
                                                    <div class="col-md-6">
                                                        <input type="text" name="alias_ip" class="form-control"
                                                            placeholder="{$_language.AliasIP}" required="true">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="button"
                                                            class="btn btn-danger delete_alias_ip">Delete</button>
                                                    </div>
                                                </div>
                                                <div class="adds_alias_ip">
                                                    <p style="text-align: center;"> Add more Alias_IP </p>
                                                </div>
                                                <div class="add_alias_btn">
                                                    <button type="button" class="btn btn-primary" id="add_alias_ip"
                                                        onclick="Add_aliasIp('Add_alias_ip')">Add Alias_IP <i class="fa"
                                                            aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                { </div>  *}
{* </div> *}
{* </div> *}
{* </div> *}
{* </div> *}

<!-- GET THE NETWORK ROUTES MODAL -->
<div class="modal fade custom_modal" id="route_modal_network" tabindex="-1" role="dialog" aria-labelledby="RoutesModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document" id="NetworkRoutes">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center" id="exampleModalLabel">{$_language.RoutesName}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    &times
                </button>
            </div>
            <div class="modal-body">
                <div style="display: flow-root;">
                    <ul class="right-btn-bk">
                        <li class="tab">
                            <button class="btn btn-primary" type="button" data-toggle="collapse" id="create_Routes"
                                data-target="#add_Routes" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fa fa-plus " aria-hidden="true" style="font-size: 13px;"></i>
                                {$_language.addRoute}
                                <i id="Routes_tableloader" class="fa"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="collapse" id="add_Routes">
                    <div class="card card-body">
                        <form id="createRoutes_form">
                            <div class="modal-body">
                                <p>{$_language.Routes_msg}</p>
                                <div class="form-group mr-3 ml-3">
                                    {* <label for="destination"
                                        style="display: flex;">{$_language.RouteDestination}</label> *}
                                    <div class="row">
                                        <div class="col-md-7">
                                            <input type="text" name="ip_range" class="form-control" id="destination"
                                                placeholder="{$_language.RouteDestination}" required="true">
                                        </div>
                                        <div class="col-md-1">
                                            <h2>/</h2>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="ip_range_add" class="form-control" id="ip_ranges"
                                                min="1" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="text" name="gateway" class="form-control" id="gateway"
                                                id="Routesgateway" placeholder="{$_language.Gateway}" required="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button id="add_network_routes" class="btn btn-danger"
                                onclick="AddRoutes('AddRoutes');">{$_language.RoutesEdit}<i class="fa"
                                    aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="create_route-table server-satus-title">
                    <div id="Route_create_tab">
                        <table id="Route_tables" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>{$_language.RouteDestination}</th>
                                    <th>{$_language.Gateway}</th>
                                    <th>{$_language.firewallAction}</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{* delete subnet modal *}
<div class="modal fade custom_modal" id="subnetdeleteModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content deletesubnet">
            <div class="modal-header ">
                <h4 class="modal-title text-center">
                    <h4 style="color: black;">{$_language.confirmDelete}</h4>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.confirmDeleteMessageSubnet}</p>
            </div>
            <div class="modal-footer">
                <button id="subnetConfirmDelete" class="btn btn-danger"
                    onclick="confirmSubnetDelete('delete_subnet')">{$_language.DeleteYES}<i class="fa"
                        aria-hidden="true"></i></button>
                <button class="modal-close btn btn-danger" data-dismiss="modal">{$_language.DeleteNO}</button>
            </div>
        </div>
    </div>
</div>

<!-- delete route modal -->
<div class="modal fade custom_modal" id="RoutedeleteModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content deletesubnet">
            <div class="modal-header ">
                <h4 class="modal-title text-center">
                    <h4 style="color: black;">{$_language.confirmDelete}</h4>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.Routesdelete_msg}</p>
            </div>
            <div class="modal-footer">
                <button id="RoutesConfirmDelete" class="btn btn-danger"
                    onclick="confirmRouteDelete('delete_Routes')">{$_language.DeleteYES}<i class="fa"
                        aria-hidden="true"></i></button>
                <button class="modal-close btn btn-danger" data-dismiss="modal">{$_language.DeleteNO}</button>
            </div>
        </div>
    </div>
</div>
<!-- reset reverse dns modal -->
<div class="modal fade custom_modal" id="reverseDNSresetModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.ResetReverseDNSHead}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.ResetReverseDNS}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="reverseDNSresetModal_submit">{$_language.DeleteYES}<i
                        class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!-- delete resources modal -->
<div class="modal fade custom_modal" id="ResourcesdeleteModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content deletesubnet">
            <div class="modal-header ">
                <h4 class="modal-title text-center">
                    <h4 style="color: black;">{$_language.confirmDelete}</h4>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.Resourcesdelete_msg}</p>
            </div>
            <div class="modal-footer">
                <button id="ResourcesConfirmDelete" class="btn btn-danger"
                    onclick="confirmResourcesDelete('delete_Resources')">{$_language.DeleteYES}<i class="fa"
                        aria-hidden="true"></i></button>
                <button class="modal-close btn btn-danger" data-dismiss="modal">{$_language.DeleteNO}</button>
            </div>
        </div>
    </div>
</div>
{* reverse_dns_modal_IPV4 *}
<div class="modal fade custom_modal" id="reverse_dns_modal_IPV4" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.EditReverseDNS}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body ">
                <h6 style="text-align: left;">{$_language.ReverseDNS_msg}</h6>
                <form id="reverse_dns_form">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" id="reverse_dns_ip" name="ip_no" class="form-control text-center"
                                readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="reverse_dns_ptr" style="display: flex;">{$_language.ReverseDNS}<span
                                    style="color:red">*</label>
                            <input type="text" name="dns_ptr" id="reverse_dns_ptr" class="form-control" required="true">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="reverse_dns_submit_ipv4"
                    onclick="changeDns('changeDnsipv4')">{$_language.EditReverseDNS}<i class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>

<!-- create reverse_dns_modal_IPV6 -->
<div class="modal fade custom_modal" id="create_ipv6_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.createivp6Dns}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body ">
                <h6 style="text-align: left; margin-bottom:30px;">{$_language.ReverseDNS_msg}</h6>
                <div class="dns_container" style="display: none;">
                    <div class="ipv6_reverseDns">
                        <span class="close_dns" onclick="DeleteDnsIpv6(this)">x</span>
                        <div class="ipv6_edit">
                            <span>
                                <input type="text" class="reverse_dns_ip form-control" name="ip_no"
                                    class="form-control text-center" readonly>
                            </span>
                            <span>
                                <input type="text" class="reverse_ipv6 form-control" name="ipv6_no"
                                    class="form-control text-center" required>
                            </span>
                        </div>
                        <div>
                            <span>
                                <input type="text" class="reverse_dns_name form-control" name="ipv6_dns_ptr"
                                    class="form-control text-center" placeholder="Reverse DNS" required>
                            </span>
                        </div>
                    </div>
                </div>
                <form id="reverse_dns_form_ipv6">
                    <div class="add_moreDnsIpv6" onclick="addMoreDnsIpv6()">
                        <p style="padding-top: 12px;">+ Add Entry</p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="reverse_dns_submit"
                    onclick="changeDns('createDnsipv6')">{$_language.EditReverseDNS}<i class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Reverse Dns Modal -->
<div class="modal fade custom_modal" id="reverse_dns_modal_IPV6" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.EditReverseDNS}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body ">
                <h6 style="text-align: left; margin-bottom:30px;">{$_language.ReverseDNS_msg}</h6>
                <form id="reverse_dns_edit_form_ipv6">
                    <div class="dns_container">
                        <div class="ipv6_reverseDns">
                            <span class="close_dns" id="delete_reverse_dns" onclick="delete_reverse_dns(this)">x</span>
                            <div class="ipv6_edit">
                                <span>
                                    <input type="text" class="reverse_dns_ip form-control" name="ip_no"
                                        class="form-control text-center" readonly>
                                </span>
                                <span>
                                    <input type="text" class="reverse_ipv6 form-control" name="ipv6_no"
                                        class="form-control text-center">
                                </span>
                            </div>
                            <div>
                                <span>
                                    <input type="text" class="reverse_dns_name form-control" name="ipv6_dns_ptr"
                                        class="form-control text-center " placeholder="Reverse DNS">
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="reverse_dns_ipv6_submit"
                    onclick="changeDns('editDnsipv6')">{$_language.EditReverseDNS}<i class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>

<!-- delete Reverse Dns modal-->
<div class="modal fade custom_modal" id="ReverseDnsdeleteModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content deleteReverseDns" style="width: 59%; margin: auto;">
            <div class="modal-header">
                <h4 class="modal-title text-center">
                    <h4 style="color: black;">{$_language.confirmDelete}</h4>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.confirmDeleteMessageReverseDns}</p>
            </div>
            <div class="modal-footer">
                <button id="ReverseDnsConfirmDelete" class="btn btn-danger"
                    onclick="confirmreverseDnsDelete('delete_reverseDns')">{$_language.DeleteYES}<i class="fa"
                        aria-hidden="true"></i></button>
                <button class="modal-close btn btn-danger" data-dismiss="modal">{$_language.DeleteNO}</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete SSh modal-->
{* <div class="modal fade custom_modal" id="deleteSSHModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">
                    <h4 style="color: black;">{$_language.confirmDelete}</h4>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>{$_language.DeleteSSH}</p>
            </div>
            <div class="modal-footer">
                <button id="confirmSSHDelete" class="btn btn-danger">{$_language.DeleteYES}<i class="fa"
                        aria-hidden="true" onclick="confirmSSHDelete('delete_SSHKey')"></i></button>
                <button class="modal-close btn btn-danger" data-dismiss="modal">{$_language.DeleteNO}</button>
            </div>
        </div>
    </div>
</div> *}

<!-- Floating IPs Reverse DNS edit Modal -->

<div class="modal fade custom_modal" id="edit_reverseDNS" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.fIpRevDnsModalHeading}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>{$_language.fIpRevDnsModalbody}</p>
            </div>
            <div class="form-group mr-3 ml-3">
                <input id="ip_no" class="text-center form-control w-80 mb-4">
                <input type="text" name="floating_dns_ptr" class="form-control w-80" required="true">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                    id="edit_reverseDNS_submit">{$_language.fIpRevDnsModalHeading}<i class="fa"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>

<!-- SSH key Download modal -->
<div class="modal fade custom_modal" id="showSSHPublicKey" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.SSHPublicKey}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <label for="sshkeyname">{$_language.SSHKeyName}</label>
                <textarea class="sshkeyname" rows="1" readonly></textarea>
                <label for="fingerprintSSH">{$_language.Fingerprint}</label>
                <textarea class="fingerprintSSH" rows="1" readonly></textarea>
                <label for="downloadSShKEY">{$_language.SSHKey}</label>
                <textarea class="downloadSShKEY" rows="10" readonly></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary copysshkey"
                    id="copySSHPublicKey">{$_language.copySSHKey}</button>
                <button type="button" class="btn btn-primary"> <i class="fa fa-download"
                        style="font-size: 13px;margin-right:7px;"></i>{$_language.Download}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>

<!-- firewall in bound create  Modal -->

<div class="inound_create_rule" style="display:none">
    <button id="inbound_delete_rules">X</button>
    <input type="hidden" name="In_direction" id="inbound_direction" value="in">
    <div class="col">
        <label for="description">{$_language.firewallDescription}</label>
        <input type="text" name="description" class="form-control description">
    </div>
    <div class="col">
        <label for="protocol">{$_language.firewallProtocol}</label>
        <select name="protocol" class="form-control protocol">
            <option value="tcp">{$_language.protocolTcp}</option>
            <option value="udp">{$_language.protocolUdp}</option>
            <option value="icmp">{$_language.protocolIcmp}</option>
            <option value="esp">{$_language.protocolEsp}</option>
            <option value="gre">{$_language.protocolGre}</option>
        </select>
    </div>
    <div class="col">
        <label for="port" style="text-align: center;">{$_language.firewallPortRange}</label>

        <div class="col" style="display: flex;">
            <input type="number" name="port1" class="port1 form-control" style="min-width: 70px; max-width:100px;">
            <p style="margin: 7px;">-
            <p>
                <input type="number" name="port2" class="port2 form-control" style="min-width: 70px; max-width:100px;">
        </div>
    </div>
</div>

{* firewall out bound create  Modal *}

<div class="outound_create_rule" style="display:none">
    <form id="FormData_outbound">
        <button id="outbound_delete_rules">X</button>
        <input type="hidden" name="out_direction" id="outbound_direction" value="out">
        <div class="col">
            <label for="description">{$_language.firewallDescription}</label>
            <input type="text" name="description" class="form-control description">
        </div>
        <div class="col">
            <label for="protocol">{$_language.firewallProtocol}</label>
            <select name="protocol" class="form-control protocol">
                <option value="tcp">{$_language.protocolTcp}</option>
                <option value="udp">{$_language.protocolUdp}</option>
                <option value="icmp">{$_language.protocolIcmp}</option>
                <option value="esp">{$_language.protocolEsp}</option>
                <option value="gre">{$_language.protocolGre}</option>
            </select>
        </div>
        <div class="col">
            <label for="port" style="text-align: center;">{$_language.firewallPortRange}</label>
            <div class="col" style="display: flex;">
                <input type="number" name="port1" class="port1 form-control" style="min-width: 70px; max-width:100px;">
                <p style="margin: 7px;">-
                <p>
                    <input type="number" name="port2" class="port2 form-control"
                        style="min-width: 70px; max-width:100px;">
            </div>
        </div>
    </form>
</div>

{* create firewall modal *}

<div class="modal fade custom_modal" id="CreatefirewallModal" tabindex="-1" role="dialog"
    aria-labelledby="firewallModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center" id="firewallModalLabel">{$_language.createfirewall}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    &times
                </button>
            </div>
            <div class="modal-body">
                <div class="createfirewall">
                    <input type="hidden" name="customaction" id="inbound_limit" value={$number_of_inbound_firewall}>
                    <input type="hidden" name="customaction" id="outbound_limit" value={$number_of_outbound_firewall}>
                    <form class="FormData_inbound">
                        <div class="inbound_logo" style="display: flex; align-items: center;">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            <p>{$_language.firewallInboundrule}</p>
                            <div class="inbound_count">
                                <span style="color: red;">Maximum inbound limit is :
                                    {$number_of_inbound_firewall}</span>
                            </div>
                        </div>
                        <div class="inbound_firewall">
                            <div id="add_inbound_rules">
                                <p>{$_language.addMoreRules}</p>
                            </div>
                        </div>
                    </form>
                    <div class="outbound_logo" style="display: flex; align-items: center;">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <p>{$_language.firewallOutboundrule}</p>
                        <div class="outbound_count">
                            <span style="color: red;">Maximum outbound limit
                                is : {$number_of_outbound_firewall}</span>
                        </div>
                    </div>

                    <div class="outbound_firewall">
                        <div id="add_outbound_rules">
                            <p>{$_language.addMoreRules}</p>
                        </div>
                    </div>

                    <div margin-top: 7px;>
                        <div class="firewall_name_logo" style="display: flex;">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            <p>{$_language.firewallname} <i class="" aria-hidden="true" style="color: red;">*</i>
                            </p>
                        </div>
                        <form id="FormData_firewallname">
                            <div class="firewall_name">
                                <div class="firewall_name_input">
                                    <input type="text" name="firewallname" class="form-control" id="firewallname"
                                        placeholder="Enter Firewall Name" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="submit_firewall"
                    onclick="sendfirewalldata('submit_firewall_data')">{$_language.createfirewall}
                    <i class="fa "></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
                <!-- Add additional buttons or actions if needed -->
            </div>
        </div>
    </div>
</div>

{* update firewall modal *}
<div class="modal fade custom_modal" id="updatefirewallModal" tabindex="-1" role="dialog"
    aria-labelledby="firewallModalLabel" aria-hidden="true">
    <div id="overlaydivupdatefirewall" class="text-center" style="display: none; font-size:30px;">
        <img id="loading-image" src="{$WEB_ROOT}/modules/servers/hetznercloud/templates/images/ajaxloader.gif" alt="">
    </div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center" id="firewallModalLabel">{$_language.FirewallEditHead}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    &times
                </button>
            </div>
            <div class="modal-body">
                <div class="updateLoader" style="align-items:center; position: absolute; top: 50%; left: 50%;">
                    <i class="fa "></i>
                </div>
                <div class="createfirewall">
                    <input type="hidden" name="customaction" id="inbound_limit" value={$number_of_inbound_firewall}>
                    <input type="hidden" name="customaction" id="outbound_limit" value={$number_of_outbound_firewall}>
                    <form class="FormData_inbound">
                        <div class="inbound_logo" style="display: flex; align-items: center;">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            <p>{$_language.firewallInboundrule}</p>
                            <div class="inbound_count">
                                <span style="color: red;">Maximum inbound limit is :
                                    {$number_of_inbound_firewall}</span>
                            </div>
                        </div>
                        <div class="inbound_firewall">
                            <div id="update_inbound_rules">
                                <p>{$_language.addMoreRules}</p>
                            </div>
                        </div>
                    </form>
                    <div class="outbound_logo" style="display: flex; align-items: center;">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <p>{$_language.firewallOutboundrule}</p>
                        <div class="outbound_count">
                            <span style="color: red;">Maximum outbound limit
                                is : {$number_of_outbound_firewall}</span>
                        </div>
                    </div>

                    <div class="outbound_firewall">
                        <div id="update_outbound_rules">
                            <p>{$_language.addMoreRules}</p>
                        </div>
                    </div>
                    <form id="FormData_firewallId">
                        <div class="firewall_id">
                            <div class="firewall_id_input" style="display:none;">
                                <input type="text" name="firewallname" class="form-control" id="firewall_id">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="update_firewall"
                    onclick="updatedfirewalldata('updated_firewall_data')">{$_language.firewallUpdate}
                    <i class="fa "></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
                <!-- Add additional buttons or actions if needed -->
            </div>
            <div class="overlay" style="display: none;"></div>
        </div>
    </div>
</div>

<!-- -----Add Floating IP modal section ------>

<div class="modal fade custom_modal" id="addfloatingIPModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.addfloatingIP}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p></p>
            </div>
            <div class="form-group mr-3 ml-3">
                <form action="" id="addFloatingIP_form">
                    <label for="noOFfloatIP">{$_language.numbOfFLP}</label>
                    <select class="form-control" id="noOFfloatIP" name="no_OF_floatIP">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select><br>
                    <label><span>{$_language.priceperFLP}: <span class="currCode"></span>{$FLPprice}<span
                                class="currCodeSuffix"></span></span></label><br>
                    <label><span>{$_language.total} : <span class="currCode"></span><b
                                id="totalpriceFLP"></b></span><span class="currCodeSuffix"></span></label> <br>
                    <label for="floatIP_type">{$_language.typeOfFloatIP}</label>

                    <select class="form-control" id="floatIP_type" name="floating_ips_type">
                        <option value="ipv4">IPv4</option>
                        <option value="ipv6">IPv6</option>
                    </select>
                    <input type="hidden" name="customaction" value="addFloatingIP">
                    <input type="hidden" name="currID" value="{$clientsdetails['currency']}">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    id="addFloatingIP_submit">{$_language.addfloatingIP}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.cancelText}</button>
            </div>
        </div>
    </div>
</div>
<!-- -----Add Floating IP Error modal section ------>

<div class="modal fade custom_modal" id="addFloatingIPResponseModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center">{$_language.addfloatingIP}&nbsp{$_language.error}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p id="flpAddResponse"></p>
            </div>
            <div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.closeText}</button>
            </div>
        </div>
    </div>
</div>

<!-- -----Assing /Unassign Floating IP modal section ------>

{* <div class="modal fade custom_modal" id="flpAssignUnassignModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center" id="flpAssignUnassign"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p id="flpAssignUnassignResponse"></p>
            </div>
            <div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.closeText}</button>
            </div>
        </div>
    </div>
</div> *}

<!-- -----add Floating IP response modal section ------>

<div class="modal fade custom_modal" id="addFloating_IPSuccess" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <h4 class="modal-title text-center" id="addFloating_IPSuccessHead">
                    {$_language.orderSuccesPlaceModalHead}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p id="addFloating_IPSuccessResponse">{$_language.orderSuccesPlaceModalBody}</p>
            </div>
            <div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{$_language.closeText}</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{$WEB_ROOT}/modules/servers/hetznercloud/js/hetzner_script.js"></script>

<script>
    $(document).ready(function() {
        var lastClickedButton = null;

        $(".snapshot-table.server-satus-title").before(
            `<button style="margin: 3px 50px 0px 0px;" href="#" class="btn btn-info snapshot-btn" {if $snapshotAddon_selected eq 'no'}disabled
            title="{$_language.addonNotInpackage}" {else} 
            {/if} data-toggle="modal"
            data-target="#serverSnapshot">{$_language.takesnapshot} ({$used_snapshot}/{$number_of_snapshot})</button>`
        );
        lastClickedButton = $(".snapshot-btn");
        $(document).on("click", "#backupbtn", function() {

            if (lastClickedButton) {
                lastClickedButton.remove();
            }
            $(".snapshot-table.server-satus-title").before(
                `<button id="backup-btn" style="margin: 10px 50px 0px 0px;" href="#" class="btn btn-info backup-btn" {if $backupAddon_selected eq 'no'}disabled
                title="{$_language.addonNotInpackage}" {else} 
                {/if} data-toggle="modal"
                data-target = "#serverBackup" > Manual Backup </button>`
            );
            lastClickedButton = $("#backup-btn");
        });
        $(document).on("click", "#snapshotbtn", function() {
            if (lastClickedButton) {
                lastClickedButton.remove();
            }
            $(".snapshot-table.server-satus-title").before(
                `<button style="margin: 3px 60px 0px 0px;" href="#" class="btn btn-info snapshot-btn" {if $snapshotAddon_selected eq 'no'}disabled
                title="{$_language.addonNotInpackage}" {else} 
                {/if} data-toggle="modal"
                data-target="#serverSnapshot">{$_language.takesnapshot} ({$used_snapshot}/{$number_of_snapshot})</button>`
            );
            lastClickedButton = $(".snapshot-btn");
        });

        $("#iso option[data-description='{$server_iso_name}']").prop('selected', true);

        var number_of_inbound = $("#inbound_limit").val();
        var number_of_outbound = $("#outbound_limit").val();

        $('body').on('click', '#CreatefirewallModal #add_inbound_rules', function() {
            if ($('#CreatefirewallModal .inound_create_rule').length >= number_of_inbound) {
                $('#add_inbound_rules').css({
                    'pointer-events': 'none',
                    'background-color': '#ccc'
                });
            } else {
                $('#add_inbound_rules').css({
                    'pointer-events': 'auto',
                    'background-color': 'rgba(247, 244, 222, 0.25)'
                });
                var clonedDiv = $('.inound_create_rule').first().clone(true);
                clonedDiv.show();
                $('#add_inbound_rules').before(clonedDiv);

                if ($('#CreatefirewallModal .inound_create_rule').length == number_of_inbound) {
                    $('#add_inbound_rules').css({
                        'pointer-events': 'none',
                        'background-color': '#ccc'
                    });
                }
            }
        });

        $('body').on('click', '#CreatefirewallModal #outbound_delete_rules', function() {
            $(this).closest('.outound_create_rule').remove();
            $('#add_outbound_rules').css({
                'pointer-events': 'auto',
                'background-color': '#f7f4de40'
            });
        });
        $('body').on('click', '#CreatefirewallModal #inbound_delete_rules', function() {
            $(this).closest('.inound_create_rule').remove();
            $('#add_inbound_rules').css({
                'pointer-events': 'auto',
                'background-color': '#f7f4de40'
            });
        });

        $('body').on('click', '#updatefirewallModal #outbound_delete_rules', function() {
            $(this).closest('.outound_create_rule').remove();
            $('#update_outbound_rules').css({
                'pointer-events': 'auto',
                'background-color': '#f7f4de40'
            });
        });
        $('body').on('click', '#updatefirewallModal #inbound_delete_rules', function() {
            $(this).closest('.inound_create_rule').remove();
            $('#update_inbound_rules').css({
                'pointer-events': 'auto',
                'background-color': '#f7f4de40'
            });
        });

        $('body').on('click', '#CreatefirewallModal #add_outbound_rules', function() {
            if ($('#CreatefirewallModal .outound_create_rule').length >= number_of_outbound) {
                $('#add_outbound_rules').css({
                    'pointer-events': 'none',
                    'background-color': '#ccc'
                });
            } else {
                $('#add_outbound_rules').css({
                    'pointer-events': 'auto',
                    'background-color': 'rgba(247, 244, 222, 0.25)'
                });
                var clonedDiv = $('.outound_create_rule').first().clone(true);
                clonedDiv.show();
                $('#add_outbound_rules').before(clonedDiv);

                if ($('#CreatefirewallModal .outound_create_rule').length == number_of_outbound) {
                    $('#add_outbound_rules').css({
                        'pointer-events': 'none',
                        'background-color': '#ccc'
                    });
                }
            }
        });
        //update firewall
        $('body').on('click', '#updatefirewallModal #update_inbound_rules', function() {
            if ($('#updatefirewallModal .inound_create_rule').length >= number_of_inbound) {
                $('#updatefirewallModal #update_inbound_rules').css({
                    'pointer-events': 'none',
                    'background-color': '#ccc'
                });
            } else {
                $('#updatefirewallModal #update_inbound_rules').css({
                    'pointer-events': 'auto',
                    'background-color': 'rgba(247, 244, 222, 0.25)'
                });
                var clonedDiv = $('.inound_create_rule').first().clone(true);
                clonedDiv.show();
                $('#update_inbound_rules').before(clonedDiv);

                if ($('#updatefirewallModal .inound_create_rule').length == number_of_inbound) {
                    $('#updatefirewallModal #update_inbound_rules').css({
                        'pointer-events': 'none',
                        'background-color': '#ccc'
                    });
                }
            }
        });

        $('body').on('click', '#updatefirewallModal #update_outbound_rules', function() {
            if ($('#updatefirewallModal .outound_create_rule').length >= number_of_outbound) {
                $('#updatefirewallModal #update_outbound_rules').css({
                    'pointer-events': 'none',
                    'background-color': '#ccc'
                });
            } else {
                $('#updatefirewallModal #update_outbound_rules').css({
                    'pointer-events': 'auto',
                    'background-color': 'rgba(247, 244, 222, 0.25)'
                });
                var clonedDiv = $('.outound_create_rule').first().clone(true);
                clonedDiv.show();
                $('#update_outbound_rules').before(clonedDiv);

                if ($('#updatefirewallModal .outound_create_rule').length == number_of_outbound) {
                    $('#updatefirewallModal #update_outbound_rules').css({
                        'pointer-events': 'none',
                        'background-color': '#ccc'
                    });
                }
            }
        });

        // submit firewall
        // $('body').on('click', '#submit_firewall', function() {
        //     console.log("hii");
        //     var inboundData = jQuery('#FormData_inbound').serializeArray();
        //     var outboundData = jQuery('.outbound_firewall #FormData_outbound').serializeArray();
        //     var firewall_name = jQuery('#FormData_firewallname').serializeArray();

        //     var rules = [];
        //     var rule = {};
        //     var mergedData = outboundData.concat(inboundData);
        //     for (var i = 0; i < mergedData.length; i++) {
        //         if (mergedData[i].name == 'out_direction' || mergedData[i].name == 'In_direction') {
        //             if (Object.keys(rule).length !== 0) {
        //                 rules.push(rule);
        //             }
        //             rule = {};
        //         }
        //         rule[mergedData[i].name] = mergedData[i].value;
        //     }
        //     if (Object.keys(rule).length !== 0) {
        //         rules.push(rule);
        //     }
        //     console.log(rules);

        //     var data = {
        //         'inbound': inboundData,
        //         'outbound': outboundData,
        //         'firewall_name': firewall_name
        //     };
        //     console.log(outboundData);

        // });


    });
</script>