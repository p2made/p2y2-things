<?php
/**
 * Copyright.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * Public interface for Copyright helpers.
 *
 * @package p2made/p2y2-things
 * @class \p2m\helpers\Copyright
 */

namespace p2m\helpers;

use p2m\internal\helpers\P2CopyrightFactory;

final class Copyright extends P2CopyrightFactory
{
	/**
	 * Copyright params
	'p2params' => [
		'ip' => [
			// Mandatory
			'author' => 'Pedro Plowman',
			'year'   => '2026',

			// Identity
			'title'  => 'P2Y2 SB Themes',
			'org'    => 'p2made',
			'owner'  => null,

			// Attribution
			'url'    => 'https://github.com/p2made',
			'page'   => 'https://github.com/p2made/p2y2-sb-themes',
			'email'  => 'pedrofp@me.com',

			// Classification
			'item'   => 'p2made/p2y2-sb-themes',
			'type'   => 'yii2-extension',

			// Legal
			'license'    => 'MIT',
			'licenseUrl' => 'https://github.com/p2made/p2y2-sb-themes/blob/master/README.md',
			//'licenseUrl' => 'https://opensource.org/licenses/MIT',
			'copyright'  => null, // optional override
			'notice'     => null,

			// Optional future
			'contributors' => [],
			'jurisdiction' => null,
		],
	],
	 */
}
