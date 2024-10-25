<?php
if (isset($_POST['text'])) {
    $text = $_POST['text'];

    // Replace with your TTS service configuration
    $apiKey = 'AIzaSyBOZkT2F8cbA4zDrZKbnlhkovuqg7PVoxg'; // Replace with your actual API key
    $url = "https://texttospeech.googleapis.com/v1/text:synthesize?key=$apiKey";


    // Prepare the request payload
    $data = [
        'input' => [
                    'text' => $text ." If you are interested press 1 to talk to us."
        ],
        'voice' => [
            'languageCode' => 'en-US',
            'name' => 'en-US-Wavenet-D'
        ],
        'audioConfig' => [
            'audioEncoding' => 'MP3'
        ]
    ];

    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($data),
        ],
    ];

    // Make the request to Google TTS API
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) {
        echo 'Error generating audio.';
        exit;
    }

    $response = json_decode($result, true);
    if (isset($response['audioContent'])) {
        // Decode the base64 audio content
        header('Content-Type: audio/mpeg');
        echo base64_decode($response['audioContent']);
    } else {
        echo 'Failed to generate audio.';
    }
} else {
    echo 'No text provided.';
}
?>
