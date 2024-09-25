<?php
require '/var/www/html/vendor/autoload.php'; // Make sure to point to the correct path

// Set the environment variable for Google credentials
putenv('GOOGLE_APPLICATION_CREDENTIALS=/var/www/html/dolfine-26cf3-4bc0c250adcf.json');

use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;

header('Content-Type: application/json');

try {
    // Initialize a Text-to-Speech client
    $client = new TextToSpeechClient([
        'credentials' => '/var/www/html/dolfine-26cf3-4bc0c250adcf.json' // Service account key
    ]);

    // Get list of available voices
    $response = $client->listVoices();

    // Initialize an array to hold unique language codes
    $languages = [];

    // Loop through the voices and extract language codes
    foreach ($response->getVoices() as $voice) {
        foreach ($voice->getLanguageCodes() as $languageCode) {
            $languages[$languageCode] = true;
        }
    }

    // Return the unique languages as JSON
    echo json_encode(array_keys($languages));

    // Close the client
    $client->close();

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}