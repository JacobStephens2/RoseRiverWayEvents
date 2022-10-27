<?php

require_once('vendor/autoload.php');
require_once('../packages/environmentVariables.php');

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://httpbin.org',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

?>