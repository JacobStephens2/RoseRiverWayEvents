<?php

require_once('packages/vendor/autoload.php');
require_once('../envVariables.php');

$client = new \MailchimpMarketing\ApiClient();

$client->setConfig([
	'apiKey' => MAILCHIMP_API_KEY,
	'server' => MAILCHIMP_SERVER_PREFIX
]);

try {
  $response = $client->lists->createList([
    "name" => "PHP Developers Meetup",
    "permission_reminder" => "permission_reminder",
    "email_type_option" => false,
    "contact" => [
      "company" => "Mailchimp",
      "address1" => "675 Ponce de Leon Ave NE",
      "city" => "Atlanta",
      "state" => "GA",
      "zip" => "30308",
      "country" => "US",
    ],
    "campaign_defaults" => [
      "from_name" => "Gettin' Together",
      "from_email" => "gettingtogether@example.com",
      "subject" => "PHP Developer's Meetup",
      "language" => "EN_US",
    ],
  ]);
  print_r($response);
} catch (MailchimpMarketing\ApiException $e) {
  echo $e->getMessage();
}

?>