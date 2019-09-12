<?php 
	session_start();

	$appId = '306186073657013'; 
	$appSecret = '5768208cf15964e6c45c17ed4839bf1';
	$requiredPermissions = 'public_profile, publish_actions, user_groups'; 
	$redirectURL = 'https://fbgroupz.herokuapp.com'; // FB will redirect to this page with a code
 	
 	$minDelayTime = 20; // Set the min delay in seconds between api requests
	$maxDelayTime = 40; // Set the max delay in seconds between api requests
	$maxGroups = 1; // Set the max amount of groups to post to
?>