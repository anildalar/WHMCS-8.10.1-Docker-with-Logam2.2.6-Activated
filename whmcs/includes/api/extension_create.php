<?php

    use WHMCS\Database\Capsule;

    require_once __DIR__ . '/../../init.php';

    // Authenticate API request
    if (!isset($_REQUEST['secret']) || $_REQUEST['secret'] !== 'XQDj9TAZ5zWokbHIW0wJyDg95jSDz16b') {
        echo json_encode(['result' => 'error', 'message' => 'Invalid API secret']);
        exit;
    }

    // Get API action  Invalid API action
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

    if ($action === 'createExtension') {
        $firstname = $_REQUEST['firstname'];
        $lastname  = $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $password  = $_REQUEST['password'];
        $staff_id  = intval($_REQUEST['staffid']);
        $licensekey  = $_REQUEST['licensekey'];
        $mobno = random_int(100000, 999999) + $staff_id;

        $service = Capsule::table('tblhosting')
                ->where('domain', $licensekey)
                ->first();
        if (!$service) {
            echo json_encode(['result' => 'error', 'message' => 'License key not found']);
            exit;
        }
    
        if ($licensekey) {
            $username = $firstname . ' ' . $lastname;
            $baseUrl = "https://pbx7.oceanpbx.club";
            $apiUrl = "$baseUrl/admin/api/api/gql";
            $tokenUrl = "$baseUrl/admin/api/api/token";
    
            // Client ID and Secret
            $clientId = "8f9f75e077e68c105f77b014cf8dce4b2d1f006ba49044f8174e3b63e7e381f0";
            $clientSecret = "5efddbcb41e23dcc96414656fc16e86b";
    
            // Retrieve JWT token
            $jwtToken = get_jwt_token($tokenUrl, $clientId, $clientSecret);
    
            if ($jwtToken) {
                // Prepare GraphQL mutation for adding an extension
                $addExtensionQuery = <<<GQL
                mutation {
                    addExtension(
                        input: {
                            extensionId: "$mobno",
                            name: "$username",
                            tech: "pjsip",
                            channelName: "$username",
                            outboundCid: "$mobno",
                            email: "$email",
                            umEnable: true,
                            umPassword: "$mobno",
                            vmEnable: true,
                            vmPassword: "$mobno",
                            callerID: "$mobno"
                        }
                    ) {
                        status
                        message
                    }
                }
                GQL;
                // Send the mutation
                $response = send_graphql_mutation($apiUrl, $addExtensionQuery, $jwtToken);
                if ($response && $response->data->addExtension->status === true) {
                    try {
                        $insertId = Capsule::table('extension_details')->insertGetId([
                            'username'         => $username,
                            'email'            => $email,
                            'password'         => password_hash($password, PASSWORD_BCRYPT), // Secure password storage
                            'staff_id'         => $staff_id,
                            'user_id'          => $service->userid,
                            'extension_number' => $mobno,
                            'license_key'      => $licensekey,
                            'created_at'       => date('Y-m-d H:i:s'),
                            'updated_at'       => date('Y-m-d H:i:s'),
                        ]);
                        if($insertId){
                            $parsedUrl = parse_url($baseUrl, PHP_URL_HOST);
                            $sip_domain = $parsedUrl;
                            $data = [
                                'user_id' => $staff_id,
                                'username' => $username,
                                'sip_username' => $mobno,
                                'sip_password' => $password,
                                'sip_domain_url' =>$sip_domain
                            ];
                            echo json_encode(['result' => 'success', 'message' => 'Extension created successfully', 'data' =>  $data]);
                        }
                    } catch (Exception $e) {
                        echo json_encode(['result' => 'error', 'message' => 'Failed to create extension: ' . $e->getMessage()]);
                    }
                } else {
                    echo json_encode(['result' => 'error', 'message' => 'Failed to add extension for staff ID:']);
                }
            }else{
                echo json_encode(['result' => 'error', 'message' => 'Failed to get JWT token for extension create']);
            }
        }

    } else {
        echo json_encode(['result' => 'error', 'message' => 'Invalid API Action']);
    }


    function get_jwt_token($tokenUrl, $clientId, $clientSecret)
    {
        $data = [
            'grant_type'    => 'client_credentials',
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
        ];

        $ch = curl_init($tokenUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            log_message('error', 'Error obtaining JWT token: ' . $error);
            return false;
        }

        $responseData = json_decode($response);
        return $responseData->access_token ?? false;
    }

    function send_graphql_mutation($apiUrl, $query, $jwtToken)
    {
        $data = json_encode(['query' => $query]);

        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            "Authorization: Bearer $jwtToken",
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            log_message('error', 'Error sending GraphQL mutation: ' . $error);
            return false;
        }

        return json_decode($response);
    }
?>

