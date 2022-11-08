<?php

require_once('packages/vendor/autoload.php');
require_once('envVariables.php');

$client = new \MailchimpMarketing\ApiClient();

$client->setConfig([
	'apiKey' => MAILCHIMP_API_KEY,
	'server' => MAILCHIMP_SERVER_PREFIX
]);

?>