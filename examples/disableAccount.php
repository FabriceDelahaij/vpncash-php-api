<?php

require_once 'vendor/autoload.php';

try {
	$api = new VPNCash_Client();
	$data = [
		'access_token' => 'ID-TOKEN',
		'vpn_username' => 'test123'
	];
	$api->disableAccount($data);
} catch (Exception $e) {
	echo 'API call failed: '.htmlspecialchars($e->getMessage());
}
