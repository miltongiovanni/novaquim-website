<?php

function validate_rechapcha($response, $recaptcha_site_key, $google_api_key, $projectId){
    // Verifying the user's response (https://developers.google.com/recaptcha/docs/verify)
    $verifyURL = "https://recaptchaenterprise.googleapis.com/v1/projects/$projectId/assessments?key=$google_api_key";
    $payload = [
        'event' => [
            'token' => $response,
            'siteKey' => $recaptcha_site_key,
            'expectedAction' => 'contact_form'
        ]
    ];

    // Send data on the best possible way
    if(function_exists('curl_init') && function_exists('curl_setopt') && function_exists('curl_exec')) {
        // Use cURL to get data 10x faster than using file_get_contents or other methods
        $ch =  curl_init($verifyURL);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-type: application/json'));
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    } else {
        // If server not have active cURL module, use file_get_contents
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $payload
            )
        );
        $context  = stream_context_create($opts);
        $response = file_get_contents($verifyURL, false, $context);
    }

    // Verify all reponses and avoid PHP errors
    if($response) {
        $result = json_decode($response, true);
        if ($httpCode !== 200 || !isset($result['tokenProperties']['valid'])) {
            echo json_encode(['success' => false, 'error' => 'Verification failed']);
            exit;
        }
        $valid  = $result['tokenProperties']['valid'];
        $score  = $result['riskAnalysis']['score'] ?? 0;
        $action = $result['tokenProperties']['action'] ?? '';

        return $valid && $score >= 0.6 && $action === 'contact_form';
    }

    // Dead end
    return false;
}