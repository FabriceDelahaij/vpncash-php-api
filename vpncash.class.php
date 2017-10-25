<?php

	/*
	*	VPNCash PHP API Client
	*
	*	@File		vpncash.class.php
	*	@Author		Extreemhost <admin@extreemhost.nl> (2017)
	*	@License	Berkeley Software Distribution License (BSD-License 2) http://www.opensource.org/licenses/bsd-license.php
	*/


	class Client
	{
		protected static $APIURL = 'https://api.vpncash.com/';

		public function __construct() {
		}

		public static function request($data, $select) {
			$request = curl_init();
			$headers = array(
				'Content-Type: application/x-www-form-urlencoded'
			);
			curl_setopt($request, CURLOPT_URL, self::$APIURL.$select);
			curl_setopt($request, CURLOPT_POST, true);
			curl_setopt($request, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($request, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($request, CURLOPT_HEADER, false);
			$result = curl_exec($request);
			if ($result == FALSE) {
				throw new Exception('<p>Curl failed: '.curl_error($request).'</p>');
			}
			// Close connection
			curl_close($request);
			//
			print $result;
		}

		public function checkUsername($data) {
			$this->request($data, 'radius/check-username');
		}

		public function createAccount($data) {
			$this->request($data, 'radius/add');
		}

		public function enableAccount($data) {
			$this->request($data, 'radius/enabled');
		}

		public function disableAccount($data) {
			$this->request($data, 'radius/disabled');
		}

		public function changeAccountPassword($data) {
			$this->request($data, 'radius/change-password');
		}

		public function serverList($data) {
			$this->request($data, 'servers');
		}

		public function configFile($data) {
			$this->request($data, 'configurations');
		}
	}
