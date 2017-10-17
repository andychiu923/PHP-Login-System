<?php 
	
	// Allow the config
	define('__CONFIG__', true);
	// require the config
	require_once "../inc/config.php"; 

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		header('Content-Type: application/json');
		$return = [];
		// Make the yser does not exist

		// Make sure the user CAN be added

		// Retuen the proper info back to JavaScript to redirect us.

		$return['redirect'] = '/dashboard.php';

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} 
	else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('test');
	}

	
?>