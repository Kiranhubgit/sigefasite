<?php

require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

// $data = $this->input->post();

// print_r($_POST);
// exit();

$website_url = sprintf(
    '%s://%s',
    isset($_SERVER['HTTPS']) ? 'https' : 'http',
    $_SERVER['HTTP_HOST']
);
// exit();

if($_POST['use_time'] == "other"){
    $use_time = $_POST['other'];
}else{
    $use_time = $_POST['use_time'];
}

// echo $use_time;

$headers = [
    'accept' => 'application/json',
    'Content-Type' => 'application/json',
    'Api-Token' => '7c8fc7f0af37aa7f46c1b49437c7cac42c88d3f9a43a27114af2968796b4c31b303a4c34'
];
$body = '{
    "contact": {
        "email": "'.$_POST['email'].'",
        "firstName": "'.$_POST['fname'].'",
        "lastName": "'.$_POST['lname'].'",
        "phone": "'.$_POST['phone_no'].'",
        "fieldValues": [
            {
                "field": "1",
                "value": "'.$website_url.'"
            },
            {
                "field": "3",
                "value": "'.$_POST['imagine_help'].'"
            },
            {
                "field": "4",
                "value": "'.$use_time.'"
            }
        ]
        
    }
}';

$response = $client->request('POST', 'https://cjwit.api-us1.com/api/3/contacts', [
    'body' => $body,
    'headers' => $headers
]);

echo $response->getBody();