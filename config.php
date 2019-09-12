<?php 
	session_start();

	$appId = '381360626133280'; 
	$appSecret = '7dfccb057dea3b78c9b84ae4f699a1f1';
	$requiredPermissions = 'public_profile, publish_actions, user_groups'; 
	$redirectURL = 'https://fbgroupz.herokuapp.com'; // FB will redirect to this page with a code
 	
 	$minDelayTime = 20; // Set the min delay in seconds between api requests
	$maxDelayTime = 40; // Set the max delay in seconds between api requests
	$maxGroups = 1; // Set the max amount of groups to post to
?>