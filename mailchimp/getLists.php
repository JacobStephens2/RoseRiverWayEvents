<?php

require_once('packages/initializeMailchimp.php');

$response = $client->lists->getAllLists();

print_r($response);

?>