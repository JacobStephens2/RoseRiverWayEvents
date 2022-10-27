<?php

require_once('packages/initializeMailchimp.php');

$response = $client->lists->getListMembersInfo(ROSE_RIVER_WAY_WATERCOLOR_LIST_ID);

print_r($response);

?>