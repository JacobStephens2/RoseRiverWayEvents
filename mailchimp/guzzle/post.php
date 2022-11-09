<?php

require_once('vendor/autoload.php');
require_once('../../envVariables.php');

use GuzzleHttp\Client;
// use GuzzleHttp\Promise;
// use GuzzleHttp\Pool;
// use GuzzleHttp\Psr7;
// use GuzzleHttp\Psr7\Request;
// use GuzzleHttp\Psr7\Response;
// use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

$url = 'https://us19.api.mailchimp.com/3.0/lists/becfdf7b92/members';

$response = $client->request(
  'POST',
  $url,
  [ 
    'http_errors' => false,
    'Authorization' => 'Bearer 46814a383d3eedcd41fe043157346257-us19'
  ]
);

// 'http_errors' => false,

$responseBody = $response->getBody();
// Implicitly cast the body to a string and echo it
echo $responseBody;

?>