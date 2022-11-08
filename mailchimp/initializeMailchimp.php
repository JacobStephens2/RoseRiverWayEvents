<?php

require_once('packages/vendor/autoload.php');
require_once('passwords.php');

$mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
	'apiKey' => MAILCHIMP_API_KEY,
	'server' => MAILCHIMP_SERVER_PREFIX
]);

?>