<?php

require_once('initializeMailchimp.php');

$response = $mailchimp->ping->get();

print_r($response);

?>