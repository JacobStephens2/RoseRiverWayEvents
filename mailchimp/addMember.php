<?php

require_once('packages/initializeMailchimp.php');

$response = $client->lists->addListMember(ROSE_RIVER_WAY_WATERCOLOR_LIST_ID, [
    "email_address" => "test@test.com",
    "status" => "pending",
]);

print_r($response);

?>