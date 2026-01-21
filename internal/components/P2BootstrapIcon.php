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
 * @class \p2m\internal\components\P2BootstrapIcon
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\components;

use Yii;
use p2m\assets\base\P2BootstrapIconsCdnAsset;

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
		P2BootstrapIconsCdnAsset::register(Yii::$app->view);

		// call parent with original arguments
		parent::__construct($cssPrefix, $name, $options);
	}

	/**
	 * @param string $color
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function color(string $color): self
	{
		$color = trim($color);

		$colors = [
			P2BootstrapIcons::PRIMARY,
			P2BootstrapIcons::PRIMARY_EMPHASIS,
			P2BootstrapIcons::SECONDARY,
			P2BootstrapIcons::SECONDARY_EMPHASIS,
			P2BootstrapIcons::SUCCESS,
			P2BootstrapIcons::SUCCESS_EMPHASIS,
			P2BootstrapIcons::DANGER,
			P2BootstrapIcons::DANGER_EMPHASIS,
			P2BootstrapIcons::WARNING,
			P2BootstrapIcons::WARNING_EMPHASIS,
			P2BootstrapIcons::INFO,
			P2BootstrapIcons::INFO_EMPHASIS,
			P2BootstrapIcons::LIGHT,
			P2BootstrapIcons::LIGHT_EMPHASIS,
			P2BootstrapIcons::DARK,
			P2BootstrapIcons::DARK_EMPHASIS,
		];

		return $this->addCssClass(
			P2BootstrapIcons::TEXT_PREFIX . '-' . $color,
			in_array($color, $colors, true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'P2BootstrapIcons::color()',
				implode(', ', $colors)
			)
		);
	}

	/**
	 * Convenience alias.
	 */
	public function c(string $color): self
	{
		return $this->color($color);
	}
}
