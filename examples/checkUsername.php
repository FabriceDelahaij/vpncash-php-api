<?php

require_once(dirname(__FILE__).'/../src/VPNCash/vpncash.class.php');

try {
	$api = new VPNCash_Client();
	$data = [
		'vpn_username' => ''
	];
	$api->checkUsername($data);
} catch (Exception $e) {
	echo 'API call failed: '.htmlspecialchars($e->getMessage());
}
