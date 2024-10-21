<?php

use WHMCS\Database\Capsule;

require_once __DIR__ . '/../../init.php';
require_once __DIR__ . '/../../ratelimit.php';

// Example country codes array

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$audio_url = isset($_REQUEST['audioUrl']) ? $_REQUEST['audioUrl'] : '';

if ($action === 'GoogleTranscriptSpeechToText') {
    try {
        $apiKey = 'AIzaSyBOZkT2F8cbA4zDrZKbnlhkovuqg7PVoxg'; // Replace with your actual API key
        $audioFilePath = $audio_url;
        $audioContent = file_get_contents($audioFilePath);
        $base64Audio = base64_encode($audioContent);

        // Configure the request payload
        $data = [
            'config' => [
                'encoding' => 'LINEAR16', // Adjust based on your audio file type
                'sampleRateHertz' => 8000, // Match your audio file's sample rate
                'languageCode' => 'en-US',
                'enableAutomaticPunctuation' => true // Add punctuation automatically
            ],
            'audio' => [
                'content' => $base64Audio
            ]
        ];

        // Convert the data to JSON format
        $jsonData = json_encode($data);

        // Initialize cURL to make the request
        $url = "https://speech.googleapis.com/v1/speech:recognize?key=$apiKey";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

        // Execute the request
        $response = curl_exec($ch);
        curl_close($ch);

        // Decode and handle the response
        $responseData = json_decode($response, true);

        // Check for transcript result
        if (isset($responseData['results'][0]['alternatives'][0]['transcript'])) {
            $transcript = $responseData['results'][0]['alternatives'][0]['transcript'];
            // Example of simple keyword-based split
            $sentences = explode(',', $transcript); // Split by sentences (use appropriate delimiter)
            $callerTranscript = '';
            $receiverTranscript = '';
            foreach ($sentences as $sentence) {
                $trimmedSentence = trim($sentence);
                if ($callerTranscript === "") {
                    $callerTranscript = $trimmedSentence; // First sentence as caller
                } else {
                    $receiverTranscript = $trimmedSentence; // Second sentence as receiver
                }
            }

            // Prepare the output
            $output = "Caller - $callerTranscript\nReceiver - $receiverTranscript";
            echo json_encode(['result' => 'success', 'data' => $output]);
        } else {
            // Handle error if transcription is unsuccessful
            if (isset($responseData['error']['message'])) {
                echo "Error: " . $responseData['error']['message'];
            } else {
                echo "Error: Unable to transcribe audio.";
            }
        }
        
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
}


