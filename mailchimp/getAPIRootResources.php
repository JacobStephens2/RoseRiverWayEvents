<?php

require_once('packages/initializeMailchimp.php');

$response = $client->root->getRoot();

print_r($response);

?>