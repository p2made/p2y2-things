<?php
/**
 * P2FlagIcon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\internal\components\P2FlagIcon
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\components;

use Yii;
use p2m\assets\P2FlagIconsAsset;

class P2FlagIcon extends P2Icon
{
	/**
	 * @param string $cssPrefix
	 * @param string $name
	 * @param array  $options
	 */
	public function __construct(string $cssPrefix, string $name, array $options = [])
	{
		// register the asset bundle for FI
		P2FlagIconsAsset::register(Yii::$app->view);

		// call parent with original arguments
		parent::__construct($cssPrefix, $name, $options);
	}

	/**
	 * If $enable is true, add the “fis” class; otherwise do nothing.
	 *
	 * @param bool $enable
	 * @return $this
	 */
	public function square(bool $enable = true): self
	{
		return $this->addCssClass(P2Icons::SQUARE_FLAG, $enable);
	}

	public function sq(bool $enable = true): self
	{
		return $this->square($enable);
	}
}
