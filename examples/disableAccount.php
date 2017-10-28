<?php

require_once(dirname(__FILE__).'/../src/VPNCash/vpncash.class.php');

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
