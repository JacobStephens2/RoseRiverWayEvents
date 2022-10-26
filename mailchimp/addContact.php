<?php

require_once('initializeMailchimp.php');

$list_id = "YOUR_LIST_ID";

try {
    $response = $mailchimp->lists->addListMember($list_id, [
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