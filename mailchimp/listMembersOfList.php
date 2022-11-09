<?php

require_once('packages/initializeMailchimp.php');

$response = $client->lists->getListMembersInfo(LIST_ID);

print_r($response);

?>