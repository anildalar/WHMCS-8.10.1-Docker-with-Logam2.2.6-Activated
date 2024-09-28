<?php 

session_start();

// Rate limit settings
$rateLimit = 20; // maximum requests
$timeFrame = 3600; // time frame in seconds (1 hour)

// Check if the session variable exists
if (!isset($_SESSION['request_count'])) {
    $_SESSION['request_count'] = 0;
    $_SESSION['first_request_time'] = time();
}

// Increment request count
$_SESSION['request_count']++;

// Check if the time frame has passed
if (time() - $_SESSION['first_request_time'] > $timeFrame) {
    // Reset the count and time
    $_SESSION['request_count'] = 1;
    $_SESSION['first_request_time'] = time();
}

// Check if the limit has been reached
if ($_SESSION['request_count'] > $rateLimit) {
    http_response_code(429); // Too Many Requests
    echo json_encode(['error' => 'Rate limit exceeded. Please try again later.']);
    exit;
}


?>