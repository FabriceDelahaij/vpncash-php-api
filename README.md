# VPNCash PHP API Client
[![Build Status](https://scrutinizer-ci.com/g/FabriceDelahaij/vpncash-php-api/badges/build.png?b=master)](https://scrutinizer-ci.com/g/FabriceDelahaij/vpncash-php-api/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/FabriceDelahaij/vpncash-php-api/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/FabriceDelahaij/vpncash-php-api/?branch=master)
[![StyleCI](https://styleci.io/repos/108218190/shield?branch=master)](https://styleci.io/repos/108218190)
[![Dependency Status](https://www.versioneye.com/user/projects/59f011f90fb24f104530808c/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/59f011f90fb24f104530808c)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/279a9618-07bd-4ce2-aa09-0953ed8d4e85/mini.png)](https://insight.sensiolabs.com/projects/279a9618-07bd-4ce2-aa09-0953ed8d4e85)

## Requirements ##
To use the VPNCash API client, the following things are required:

+ Visit website for [VPNCash account](https://vpncash.com)
+ Create a new [profile](http://www.vpncash.com/api-access) to generate API keys
+ PHP 5.2 or 5.5
+ PHP cURL extension

## Install Composer
Install the VPNCash API client is to require it with [Composer](http://getcomposer.org/doc/00-intro.md).

    $ composer require fabricedelahaij/vpncash-php-api:master

    {
        "require": {
            "fabricedelahaij/vpncash-php-api": "master"
        }
    }


### Getting started
Required include class, If you're using Composer, you can skip this step.

```php
	require_once('VPNCash/vpncash.class.php');
```


```php
// Create VPN Account
$api = new VPNCash_Client();
$data = [
	'access_token' => 'ID-TOKEN',
	'vpn_username' => 'test123',
	'vpn_password' => '123546'
];
echo $api->createAccount($data);


// Disable VPN Account
$api = new VPNCash_Client();
$data = [
	'access_token' => 'ID-TOKEN',
	'vpn_username' => 'test123'
];
echo $api->disableAccount($data);


// Disable VPN Account
$api = new VPNCash_Client();
$data = [
	'access_token' => 'ID-TOKEN',
	'vpn_username' => 'test123'
];
echo $api->enableAccount($data);

// Change account password
$api = new VPNCash_Client();
$data = [
	'access_token' => 'ID-TOKEN',
	'vpn_username' => 'test123'
	'vpn_password' => '123546'
];
echo $api->changeAccountPassword($data);

```

## API documentation
If you wish to learn more about our API, please visit the [API Documentation](http://docs.vpnapi21.apiary.io).

## License
[BSD (Berkeley Software Distribution) License](https://opensource.org/licenses/bsd-license.php). Copyright (c) 2017, Extreemhost.

## Support
Contact: [www.extreemhost.nl](https://extreemhost.nl) - support@extreemhost.nl - +31 316-23 40 40
