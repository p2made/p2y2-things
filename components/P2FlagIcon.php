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
 * @class \p2m\components\P2FlagIcon
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\components;

use Yii;
use p2m\components\P2Icon;
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
}
