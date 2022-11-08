<?php

require_once('vendor/autoload.php');
require_once('../packages/envVariables.php');

use GuzzleHttp\Client;

$client = new Client();

$url = 'https://us19.api.mailchimp.com/3.0/becfdf7b92';

$headers = ['Authorization' => 'Bearer ' . MAILCHIMP_API_KEY];

$response = $client->request(
  'GET',
  $url,
  ['http_errors' => false]
);

$body = $response->getBody();
// Implicitly cast the body to a string and echo it
echo $body;

// https://us19.api.mailchimp.com/3.0/lists/becfdf7b92/members

?>