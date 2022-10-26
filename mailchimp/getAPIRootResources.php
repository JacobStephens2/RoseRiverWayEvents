<?php

require_once('initializeMailchimp.php');

$response = $mailchimp->root->getRoot();

print_r($response);

?>