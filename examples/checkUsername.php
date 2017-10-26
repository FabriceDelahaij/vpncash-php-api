<?php
require_once('vendor/autoload.php');

try
{
	$api = new VPNCash_Client();
	$data = [
		'vpn_username' => ''
	];

	$api->checkUsername($data);

}
catch (Exception $e)
{
	echo 'API call failed: '.htmlspecialchars($e->getMessage());
}
