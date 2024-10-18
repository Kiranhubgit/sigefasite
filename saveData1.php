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
$email11 = $_POST['email']; 

$headers = [
    'accept' => 'application/json',
    'Content-Type' => 'application/json',
    'Api-Token' => '7c8fc7f0af37aa7f46c1b49437c7cac42c88d3f9a43a27114af2968796b4c31b303a4c34'
];

$response = $client->request('GET', 'https://cjwit.api-us1.com/api/3/contacts?email='.$email11.'', [
  'headers' => $headers,
]);

//echo $response->getBody();
$dopt_get_response = $response->getBody();
$result = json_decode($dopt_get_response, true);
//echo '<pre>';
//print_r($result['contacts']);
//echo '</pre>';

if(empty($result['contacts'])) {
    $data['success'] = false;
    $data['message'] = "User not registered previously";
} else {
    $data['success'] = true;
    $data['message'] = 'User already registered';
}

echo json_encode($data);