<?php
/**
 * UuidHelpers.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-asset-demo-theme
 * @license MIT
 */

namespace p2made\helpers;

use yii;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

/*
 * UuidHelpers::p2uuid1()
 * UuidHelpers::p2uuid3('mfa_test')
 * UuidHelpers::p2uuid4()
 * UuidHelpers::p2uuid5('mfa_test')
 */

/**
 * Class UuidHelpers
 * @package p2made\yii2-p2y2-things
 */
class UuidHelpers
{
	const SUBDOMAIN_NONE = 0;	// NO subdomain.
	const SUBDOMAIN_UUID = 1;	// UUID as subdomain.
	const SUBDOMAIN_RAND = 2;	// Random hex as subdomain.
	const SUBDOMAIN_TIME = 3;	// microtime() as subdomain.
	const SUBDOMAIN_DEFAULT = 1;

	private $_reverseDomain;

	public static function uuid($subDomain = self::SUBDOMAIN_DEFAULT)
	{
		return self::p2uuid5($subDomain);
	}

	public static function p2uuid1()
	{
		return Uuid::uuid1();
	}

	public static function p2uuid3($subDomain = self::SUBDOMAIN_UUID)
	{
		return Uuid::uuid3(Uuid::uuid1(), self::fullReverseDomain($subDomain));
	}

	public static function p2uuid4()
	{
		return Uuid::uuid4();
	}

	public static function p2uuid5($subDomain = self::SUBDOMAIN_UUID)
	{
		return Uuid::uuid5(Uuid::uuid4(), self::fullReverseDomain($subDomain));
	}

	protected static function fullReverseDomain($subDomain = self::SUBDOMAIN_UUID)
	{
		// convenience to give unique name variations modify according to preference
		// this MUST return something meaningful as it is used in both functions that use names

		if(is_string($subDomain)) {
			return self::reverseDomain() . '.' . $subDomain;
		} elseif(self::SUBDOMAIN_NONE == $subDomain) {
			return self::reverseDomain();
		} elseif(self::SUBDOMAIN_UUID == $subDomain) {
			$subDomain = self::p2uuid4();
		} elseif(self::SUBDOMAIN_RAND == $subDomain) {
			$subDomain = self::randomHex();
		} elseif(self::SUBDOMAIN_TIME == $subDomain) {
			$subDomain = microtime();
		}

		return self::reverseDomain() . '.' . $subDomain;
	}

	private static function randomHex($length = 32)
	{
		// convenience to give a random hexadecimal string
		$charlist = "0123456789abcdef";
		$listlen = strlen($charlist);
		$result = "";
		for( $i = 0; $i < $length; $i++ ) {
			$result .= $charlist[rand(0, $listlen - 1)];
		}
		return $result;
	}

	protected static function reverseDomain()
	{
		if(isset($_reverseDomain)) { return $_reverseDomain; }

		// using 'p2made' as param space to allow for my other bits
		if(isset(\Yii::$app->params['p2made']['reverseDomain'])) {
			$_reverseDomain = \Yii::$app->params['p2made']['reverseDomain'];
		} else {
			$_reverseDomain = 'com.example.no.reverse.domain.set';
		}

		return $_reverseDomain;
	}
}
