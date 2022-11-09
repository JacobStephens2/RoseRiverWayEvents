<?php

require_once('packages/initializeMailchimp.php');

$response = $client->lists->createList([
    "name" => "name",
    "permission_reminder" => "permission_reminder",
    "email_type_option" => true,
    "contact" => [
        "company" => "company",
        "address1" => "address1",
        "city" => "city",
        "country" => "country",
    ],
    "campaign_defaults" => [
        "from_name" => "from_name",
        "from_email" => "Amaya17@hotmail.com",
        "subject" => "subject",
        "language" => "language",
    ],
]);

print_r($response);

?>