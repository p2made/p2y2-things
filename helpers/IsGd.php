<?php
/**
 * IsGd.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\helpers\IsGd
 */

namespace p2m\helpers;

use yii;

/**
 * Use this helper with...
 *
 * use p2m\helpers\IsGd;
 * ...
 * echo IsGd::shortenUrl($inputUrl);
 * echo IsGd::checkInput($inputUrl);
 * echo IsGd::checkResult($shortenedUrl);
 *
 * or
 *
 * echo \p2m\helpers\IsGd::shortenUrl($inputUrl);
 * echo \p2m\helpers\IsGd::checkInput($inputUrl);
 * echo \p2m\helpers\IsGd::checkResult($shortenedUrl);
 */

/*
 * simple - success
 * A successful URL creation will give a single line of output in plain text
 * giving the new shortened URL. This will be similar to: -
 *
 * http://is.gd/R709K6
 * The HTTP status code of the response will be 200.
 *
 * simple - error
 * For any error the body of the response will contain a single line of plain text
 * which will always start with "Error: " followed by a description of the actual
 * error that has occurred. An example would be: -
 *
 * Error: Please specify a URL to shorten.
 * The HTTP status code of the response varies depending on the class of error that
 * occurred (see section on error codes): -
 *
 * 400 Bad Request - error code 1
 * 406 Not Acceptable - error code 2
 * 502 Bad Gateway - error code 3
 * 503 Service Unavailable - error code 4
 */
class IsGd
{
	const ISGD_BASIC = 'http://is.gd/create.php?format=simple&url=';
	const ISGD_ERROR = 'Error: ';

/*
	private static $contextOptions = array(
		'ssl' => array(
			'verify_peer' => true, // You could skip all of the trouble by changing this to false, but it's WAY uncool for security reasons.
			'cafile' => 'base/ssl/cacert.pem',
			'CN_match' => 'is.gd', // Change this to your certificates Common Name (or just comment this line out if not needed)
			'ciphers' => 'HIGH:!SSLv2:!SSLv3',
			'disable_compression' => true,
		)
	);

	private static $context = stream_context_create($contextOptions);
*/

	/*
	 * IsGdHelper::shortenUrl('www.example.com')
	 */
	public static function shortenUrl($inputUrl)
	{
		if(!self::checkInput($inputUrl)) { return false; }

		$encodedUrl = rawurlencode($inputUrl);
		$contextOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				//'verify_peer' => true, // You could skip all of the trouble by changing this to false, but it's WAY uncool for security reasons.
				//'cafile' => require 'base/ssl/cacert.pem',
				//'CN_match' => 'is.gd', // Change this to your certificates Common Name (or just comment this line out if not needed)
				//'ciphers' => 'HIGH:!SSLv2:!SSLv3',
				//'disable_compression' => true,
			)
		);
		$context = stream_context_create($contextOptions);
		$shortenedUrl = file_get_contents(self::ISGD_BASIC . $encodedUrl, false, $context);

		return self::checkResult($shortenedUrl);
	}

	private static function checkInput($inputUrl)
	{
		if(!isset($inputUrl)) { return false; }
		if(!is_string($inputUrl)) { return false; }
		if($inputUrl === '') { return false; }

		return true;
	}

	private static function checkResult($shortenedUrl)
	{
		//strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )
		if(strpos($shortenedUrl, self::ISGD_ERROR) === false) {
			// no error
			return $shortenedUrl;
		}

		$message = str_replace(self::ISGD_ERROR , '', $shortenedUrl);
		return ['error' => 'error', 'message' => $message];
	}
}
