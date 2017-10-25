<?php
require_once('./vpncash.class.php');

try
{
	$api = new Client();
	$data = [
		'vpn_username' => ''
	];

	$api->checkUsername($data);

}
catch (Exception $e)
{
	echo 'API call failed: '.htmlspecialchars($e->getMessage());
}
