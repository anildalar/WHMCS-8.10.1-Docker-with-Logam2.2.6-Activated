<?php
require_once dirname(__DIR__) . '/init.php';
use WHMCS\Database\Capsule;

$userId = $_SESSION['uid'];

// if ($userId) {
//     // Fetch service IDs for this user
//     $services = Capsule::table('tblhosting')
//         ->where('userid', $userId)
//         ->get(['id', 'domain', 'packageid', 'domainstatus']);

//     if (count($services) > 0) {
//         foreach ($services as $service) {
//             echo "Service ID: " . $service->id . "<br>";
//             echo "Domain: " . $service->domain . "<br>";
//             echo "Package ID: " . $service->packageid . "<br>";
//             echo "Status: " . $service->domainstatus . "<br><br>";
//         }
//     } else {
//         echo "No services found for this user.";
//     }
// } else {
//     echo "User not logged in.";
// }

if (isset($_SESSION['uid'])) {
    $serviceId = 65;
    $amount = 45.56;

    if ($userId && $serviceId > 0 && $amount > 0) {
        // Fetch the service details to verify it belongs to the logged-in user
        $service = Capsule::table('tblhosting')
            ->where('id', $serviceId)
            ->where('userid', $userId)
            ->first();

        if ($service) {
            $postData = [
                'userid' => $userId,
                'sendinvoice' => true, // Send an email notification for the invoice
                'status' => 'Paid',
                'itemdescription1' => 'Additional Payment for Service ID: ' . $serviceId,
                'itemamount1' => $amount,
                'itemtaxed1' => 0,
                'serviceid' => 8 // Link the invoice to the existing service
            ];
        
            $results = localAPI('CreateInvoice', $postData);
            $invoiceId = $results['invoiceid'];
            header("Location: /cart.php?a=checkout&gid=8&invoiceid={$invoiceId}");
            // header("Location: /cart.php?a=checkout&invoiceid=59");
            // header("Location: viewinvoice.php?id=59");    
            // header('Location: /cart.php?a=checkout');
        } else {
            echo "Invalid service or user not authenticated.";
        }
    } else {
        echo "Invalid request data.";
    }
} else {
    echo "Invalid request method.";
}
