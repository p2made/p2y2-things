<?php
/**
 * P2BootstrapIcon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\components\P2BootstrapIcon
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\components;

use Yii;
use p2m\components\P2Icon;
use p2m\assets\P2BootstrapIconsAsset;

class P2BootstrapIcon extends P2Icon
{
	/**
	 * @param string $cssPrefix
	 * @param string $name
	 * @param array  $options
	 */
	public function __construct(string $cssPrefix, string $name, array $options = [])
	{
		// register the asset bundle for BI
		P2BootstrapIconsAsset::register(Yii::$app->view);

		// call parent with original arguments
		parent::__construct($cssPrefix, $name, $options);
	}

	/**
	 * @param string $value
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function color(string $value): self
	{
		$values = [
			P2Icons::PRIMARY,
			P2Icons::PRIMARY_EMPHASIS,
			P2Icons::SECONDARY,
			P2Icons::SECONDARY_EMPHASIS,
			P2Icons::SUCCESS,
			P2Icons::SUCCESS_EMPHASIS,
			P2Icons::DANGER,
			P2Icons::DANGER_EMPHASIS,
			P2Icons::WARNING,
			P2Icons::WARNING_EMPHASIS,
			P2Icons::INFO,
			P2Icons::INFO_EMPHASIS,
			P2Icons::LIGHT,
			P2Icons::LIGHT_EMPHASIS,
			P2Icons::DARK,
			P2Icons::DARK_EMPHASIS,
		];

		return $this->addCssClass(
			self::TEXT_PREFIX . '-' . $value,
			in_array((string)$value, $values, true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'P2Icons::color()',
				implode(', ', $values)
			)
		);
	}
}
