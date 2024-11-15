<?php
    if (!defined("WHMCS")) {
        die("This file cannot be accessed directly");
    }

    function getBaseURL() {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];  // e.g. 'example.com'
        $baseUrl = $protocol . '://' . $host;
        return $baseUrl;
    }
    
    function CTIAdapter_MetaData()
    {
        return [
            'DisplayName' => 'CTI Adapter for WHMCS CRM',
            'APIVersion' => '1.0',
        ];
    }

    function CTIAdapter_config()
    {
        return [
            'name' => 'CTI Adapter for WHMCS CRM',
            'description' => 'Integrates CTI with WHMCS CRM and triggers modal on CRM page.',
            'author' => 'OceanPBX',
            'language' => 'english',
            'version' => '1.0',
            'fields' => [
                'socketServerUrl' => [
                    'FriendlyName' => 'Socket Server URL',
                    'Type' => 'text',
                    'Size' => '50',
                    'Placeholder' => 'https://yoursocketserver:10000',
                    'Default' => '',
                ]
            ],
        ];
    }

    function CTIAdapter_activate()
    {
        $hookFilePath = __DIR__ . '/../../../includes/hooks/CTIAdapterCRM.php';
        if (!file_exists($hookFilePath)) {
            $hookContent = <<<PHP
                <?php
                    if (!defined("WHMCS")) {
                        die("This file cannot be accessed directly");
                    }   
                    use WHMCS\Database\Capsule;
                    add_hook('AdminAreaFooterOutput', 1, function(\$vars) {
                        if (\$vars['filename'] === 'crm') {
                            // Check if the CTI Adapter module is active
                            \$isActive = Capsule::table('tbladdonmodules')
                                ->where('module', 'CTIAdapter')
                                ->exists();
            
                            if (!\$isActive) {
                                return '';
                            }
            
                            \$socketServerUrl = Capsule::table('tbladdonmodules')
                                ->where('module', 'CTIAdapter')
                                ->where('setting', 'socketServerUrl')
                                ->value('value');
                            \$socketServerUrl = \$socketServerUrl ?: '';
            
                            return <<<HTML
                                <div id="callPopup" class="call-popup">
                                    <div class="left-panel">
                                        <button type="button" class="close-btn" onclick="hidePopup()">X</button>
                                        <span class="status">CONNECTED</span>
                                    </div>
                                    <div class="right-panel">
                                        <div class="header">
                                            <div class="icons">
                                                <!-- Top-aligned Icons -->
                                                <i id="acceptIcon" class="icon" onclick="acceptCall()">📞</i>
                                                <i class="icon">📆</i>
                                                <i class="icon">✏️</i>
                                                <i class="icon">📄</i>
                                                <i class="icon">⚙️</i>
                                                <i class="icon">🔔</i>
                                                <i id="endIcon" class="icon" style="display: none;">🔴</i>
                                            </div>
                                        </div>
                                        <div class="caller-info">
                                            <span class="inbound-label">inbound</span>
                                            <h5 class="caller-name">MILLENIUM BPO S.A</h5>
                                            <p class="caller-number">14237655388</p>
                                        </div>
                                        <div class="timer">
                                            <span id="timer">00:00:00</span>
                                        </div>
                                        <textarea class="note-input" placeholder="Enter Your Note"></textarea>
                                        <button class="save-btn"><a id="contactLink" href="#" target="_blank" class="save-btn">Open Contact</a></button>
                                    </div>
                                </div>
                                <style>
                                    #callPopup {
                                        opacity: 0;
                                        visibility: hidden;
                                        transition: opacity 0.3s ease, visibility 0.3s ease;
                                    }
                                    #callPopup.visible {
                                        opacity: 1;
                                        visibility: visible;
                                    }
                                    .call-popup {
                                        position: fixed;
                                        bottom: 20px;
                                        right: 20px;
                                        width: 400px;
                                        height: 300px;
                                        display: flex;
                                        background-color: #f7f7f7;
                                        border: 1px solid #ccc;
                                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                                        border-radius: 8px;
                                        font-family: Arial, sans-serif;
                                        overflow: hidden;
                                        z-index: 10000;
                                    }
                                    .vibrate {
                                        animation: vibrate 0.3s infinite;
                                    }
                                    @keyframes vibrate {
                                        0% { transform: translate(1px, 1px) rotate(0deg); }
                                        10% { transform: translate(-1px, -2px) rotate(-1deg); }
                                        20% { transform: translate(-3px, 0px) rotate(1deg); }
                                        30% { transform: translate(3px, 2px) rotate(0deg); }
                                        40% { transform: translate(1px, -1px) rotate(1deg); }
                                        50% { transform: translate(-1px, 2px) rotate(-1deg); }
                                        60% { transform: translate(-3px, 1px) rotate(0deg); }
                                        70% { transform: translate(3px, 1px) rotate(-1deg); }
                                        80% { transform: translate(-1px, -1px) rotate(1deg); }
                                        90% { transform: translate(1px, 2px) rotate(0deg); }
                                        100% { transform: translate(1px, -2px) rotate(-1deg); }
                                    }
                                    .inbound-label, .caller-name, .caller-number {
                                        font-weight: bold;
                                        color: #ff5722; 
                                    }
                                    .left-panel {
                                        width: 60px;
                                        background-color: #ff9800;
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        color: #fff;
                                        padding: 10px;
                                        position: relative;
                                        justify-content: center;
                                    }
                                    .status {
                                        font-size: 15px;
                                        font-weight: bold;
                                        margin-top: 10px;
                                        writing-mode: vertical-rl;
                                        text-orientation: mixed;
                                    }
                                    .close-btn {
                                        background: #333;
                                        border: none;
                                        color: #fff;
                                        font-size: 12px;
                                        font-weight: bold;
                                        border-radius: 50%;
                                        width: 24px;
                                        height: 24px;
                                        cursor: pointer;
                                        position: absolute;
                                        top: 5px;
                                        left: 17px;
                                    }
                                    .right-panel {
                                        flex: 1;
                                        padding: 10px;
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: space-between;
                                    }
                                    .header {
                                        display: flex;
                                        justify-content: flex-end;
                                        gap: 8px;
                                    }
                                    .icons {
                                        display: flex;
                                        gap: 8px;
                                    }
                                    .icon {
                                        font-size: 16px;
                                        cursor: pointer;
                                    }
                                    .caller-info {
                                        margin-top: 10px;
                                    }
                                    .caller-info h5 {
                                        margin: 0;
                                        font-size: 16px;
                                        color: #333;
                                    }
                                    .caller-info p {
                                        margin: 4px 0;
                                        font-size: 14px;
                                        color: #666;
                                    }
                                    .timer {
                                        font-size: 20px;
                                        font-weight: bold;
                                        color: #333;
                                        text-align: center;
                                        margin: 10px 0;
                                    }
                                    .note-input {
                                        width: 100%;
                                        padding: 8px;
                                        font-size: 14px;
                                        border: 1px solid #ddd;
                                        border-radius: 4px;
                                        resize: none;
                                        margin-top: 8px;
                                    }
                                    .save-btn {
                                        width: 100%;
                                        padding: 8px;
                                        font-size: 14px;
                                        background-color: #4caf50;
                                        color: #fff;
                                        border: none;
                                        border-radius: 4px;
                                        cursor: pointer;
                                        text-align: center;
                                        margin-top: 10px;
                                    }
                                    .save-btn:hover {
                                        background-color: #45a049;
                                    }
                                </style>
                                <!-- JavaScript to trigger the modal on page load -->
                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/socket.io-client@4.4.0/dist/socket.io.min.js"></script>
                                <script>
                                    window.onload = function () {
                                        var baseUrl = "<?php echo getBaseURL(); ?>";
                                        const socketServerUrl = "{\$socketServerUrl}";
                                        const socket = io(socketServerUrl);
                                        var CrmTableID = 0;
                                        socket.on('connect', () => {
                                            console.log("Connected to socket.io server");
                                        });
                                        socket.on('incomingCall', (data) => {
                                            startTimer();
                                            showPopup();
                                            document.querySelector('.inbound-label').textContent = data.direction || "Inbound";
                                            document.querySelector('.caller-name').textContent = data.callerName || "Unknown Caller";
                                            document.querySelector('.caller-number').textContent = data.callerNumber || "Unknown Number";
                                            $.ajax({
                                                url: '/modules/addons/CTIAdapter/checkCrmData.php',  // Adjust to your actual endpoint
                                                method: 'POST',
                                                data: { phone: data.callerNumber },
                                                success: function(response) {
                                                    const parsedResponse = JSON.parse(response);
                                                    CrmTableID = parsedResponse.id;
                                                    if (parsedResponse.status === 'success') {
                                                        const contactLink = document.getElementById('contactLink');
                                                        if (contactLink) {
                                                            contactLink.href = `\${baseUrl}/admin/crm.php#!/contacts/`+parsedResponse.id+`/summary`;
                                                        }
                                                    } else if (parsedResponse.status === 'exists') {
                                                        const contactLink = document.getElementById('contactLink');
                                                        const NameOfContact =  parsedResponse.fname +  parsedResponse.lname;
                                                        document.querySelector('.caller-name').textContent = NameOfContact;
                                                        if (contactLink) {
                                                            contactLink.href = `\${baseUrl}/admin/crm.php#!/contacts/`+parsedResponse.id+`/summary`;
                                                        }
                                                    } else if (parsedResponse.status === 'error') {
                                                        console.log('Error: ' + parsedResponse.message);
                                                    } else {
                                                        console.log('Unexpected status: ' + parsedResponse.status);
                                                    }
                                                },
                                                error: function(xhr, status, error) {
                                                    console.error('Error checking or storing record: ', error);
                                                }
                                            });
                                            
                                        });
                                        socket.on('callAccepted', () => {
                                            const contactLink = document.getElementById('contactLink');
                                            if (contactLink) {
                                                const contactUrl = `\${baseUrl}/admin/crm.php#!/contacts/`+CrmTableID+`/summary`;
                                                contactLink.href = contactUrl;
                                                window.open(contactUrl, '_blank');
                                            }
                                        });    
                                        socket.on('callEnded', () => {
                                            hidePopup();
                                        });
                                    };
                                    let timerInterval;
                                    function startTimer() {
                                        let seconds = 0;
                                        timerInterval = setInterval(() => {
                                            seconds++;
                                            document.getElementById('timer').textContent = new Date(seconds * 1000).toISOString().substr(11, 8);
                                        }, 1000);
                                    }
                                    function showPopup() {
                                        document.getElementById('callPopup').classList.add('visible');
                                        document.getElementById('callPopup').classList.add('vibrate');
                                    }

                                    function hidePopup() {
                                        document.getElementById('callPopup').classList.remove('visible');
                                        clearInterval(timerInterval);
                                    }
                                    function saveNote() {
                                        const note = document.querySelector('.note-input').value;
                                        alert("Note saved: " + note);
                                    }
                                    function acceptCall() {
                                        document.getElementById('acceptIcon').style.display = 'none';
                                        document.getElementById('endIcon').style.display = 'inline-block';
                                    }
                                </script>

                            HTML; 
                        }
                    });
            PHP;

            if (file_put_contents($hookFilePath, $hookContent) === false) {
                return [
                    'status' => 'error',
                    'description' => 'Failed to create the CTIAdapterCRM.php file in the includes/hooks directory.',
                ];
            }
        }else{
            return [
                'status' => 'error',
                'description' => 'includes/hooks  not founf directory.',
            ];
        }

        return [
            'status' => 'success',
            'description' => 'CTI Adapter for WHMCS CRM has been activated!',
        ];
    }

    function CTIAdapter_deactivate()
    {

        $hookFilePath = __DIR__ . '/../../../includes/hooks/CTIAdapterCRM.php';
        if (file_exists($hookFilePath)) {
            if (unlink($hookFilePath)) {
                return [
                    'status' => 'success',
                    'description' => 'CTI Adapter for WHMCS CRM has been deactivated and the hook file has been deleted.',
                ];
            } else {
                return [
                    'status' => 'error',
                    'description' => 'CTI Adapter deactivated, but failed to delete the hook file.',
                ];
            }
        } else {
            return [
                'status' => 'success',
                'description' => 'CTI Adapter for WHMCS CRM has been deactivated. No hook file found to delete.',
            ];
        }
    }
    use WHMCS\Database\Capsule;

    function checkAndStoreCRMResource($phone) {
        $existingRecord = Capsule::table('crm_resources')
            ->where('phone', $phone)
            ->first();
    
        if (!$existingRecord) {
            // Record does not exist, so insert a new record
            Capsule::table('crm_resources')->insert([
                'name' => 'Unknown',  // Set a default value or fetch from somewhere
                'phone' => $phone,
                'status_id' => 1,  // You can set a default status, or handle it dynamically
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                // Add other default values if needed
            ]);
            return 'Record created';
        } else {
            // Record already exists
            return 'Record exists';
        }
    }
    