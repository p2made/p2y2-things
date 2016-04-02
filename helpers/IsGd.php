<?php
/**
 * IsGd.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-asset-demo-theme
 * @license MIT
 */

namespace p2made\helpers;

use yii;

/**
 * Use this helper with...
 *
 * use p2made\helpers\IsGd;
 * ...
 * echo IsGd::shortenUrl($inputUrl);
 * echo IsGd::checkInput($inputUrl);
 * echo IsGd::checkResult($shortenedUrl);
 *
 * or
 *
 * echo \p2made\helpers\IsGd::shortenUrl($inputUrl);
 * echo \p2made\helpers\IsGd::checkInput($inputUrl);
 * echo \p2made\helpers\IsGd::checkResult($shortenedUrl);
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

/**
 * Class IsGd
 * @package p2made\yii2-p2y2-things
 */
class IsGd
{
	const ISGD_BASIC = 'http://is.gd/create.php?format=simple&url=';
	const ISGD_ERROR = 'Error: ';

	/*
	 * IsGdHelper::shortenUrl('www.example.com')
	 */
	public static function shortenUrl($inputUrl)
	{
		if(!self::checkInput($inputUrl)) { return false; }

		$encodedUrl = rawurlencode($inputUrl);
		$shortenedUrl = file_get_contents(self::ISGD_BASIC . $encodedUrl);
		return self::checkResult($shortenedUrl);

//echo get_remote_data('http://example.com');                                // GET request
//echo get_remote_data('http://example.com', "var2=something&var3=blabla" ); // POST request
//file_get_contents('http://www.filehippo.com')

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
