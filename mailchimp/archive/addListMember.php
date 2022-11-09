<?php

require_once('packages/initializeMailchimp.php');

$list_id = LIST_ID;

try {
    $response = $client->lists->addListMember($list_id, [
        "email_address" => "test@test.com",
        "status" => "subscribed",
        "merge_fields" => [
          "FNAME" => "Prudence",
          "LNAME" => "McVankab"
        ]
    ]);
    print_r($response);
} catch (MailchimpMarketing\ApiException $e) {
    echo $e->getMessage();
}

?>