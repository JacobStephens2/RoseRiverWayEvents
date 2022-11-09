<?php

require_once('packages/initializeMailchimp.php');

$response = $client->lists->setListMember(
    LIST_ID, 
    "subscriber_hash", 
    [
        "email_address" => "Lazaro78@hotmail.com",
        "status_if_new" => "unsubscribed",
    ]
);

print_r($response);

?>