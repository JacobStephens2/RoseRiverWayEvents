<?php

require_once('packages/initializeMailchimp.php');

$response = $client->ping->get();

print_r($response);

?>