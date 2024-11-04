<?php

use WHMCS\Database\Capsule;

require_once __DIR__ . '/../../init.php';
require_once __DIR__ . '/../../ratelimit.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if ($action === 'RephraseText') {
    $inputText = isset($_REQUEST['text']) ? $_REQUEST['text'] : '';
    
    if (empty($inputText)) {
        $inputText = "This beautiful 3-bedroom house is located in a quiet neighborhood. It features a spacious backyard, modern kitchen, and is just minutes away from local amenities.";
    }

    if (!empty($inputText)) {
        // Your OpenAI API key
        $apiKey = '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';
        $apiUrl = 'https://api.openai.com/v1/chat/completions';
        $data = [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                ["role" => "system", "content" => "You are an assistant that rephrases text to make it more attractive for selling properties."],
                ["role" => "user", "content" => "Rephrase the following text to make it more appealing: '" . $inputText . "'"]
            ],
            "temperature" => 0.7
        ];

        // Initialize cURL session
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $apiKey,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        // Execute the cURL request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            // Decode the response
            $result = json_decode($response, true);
            echo json_encode(['result' => 'error', 'message' => $result]);
            if (isset($result['choices'][0]['message']['content'])) {
                // Output the rephrased text
                echo "Rephrased Text: " . $result['choices'][0]['message']['content'];
            } else {
                echo "Error: Could not get rephrased text.";
            }
        }
        curl_close($ch);
    } else {
        echo "Error: No text provided to rephrase.";
    }
} else {
    echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
}
