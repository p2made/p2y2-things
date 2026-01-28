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
			P2BootstrapIconFactory::PRIMARY,
			P2BootstrapIconFactory::PRIMARY_EMPHASIS,
			P2BootstrapIconFactory::SECONDARY,
			P2BootstrapIconFactory::SECONDARY_EMPHASIS,
			P2BootstrapIconFactory::SUCCESS,
			P2BootstrapIconFactory::SUCCESS_EMPHASIS,
			P2BootstrapIconFactory::DANGER,
			P2BootstrapIconFactory::DANGER_EMPHASIS,
			P2BootstrapIconFactory::WARNING,
			P2BootstrapIconFactory::WARNING_EMPHASIS,
			P2BootstrapIconFactory::INFO,
			P2BootstrapIconFactory::INFO_EMPHASIS,
			P2BootstrapIconFactory::LIGHT,
			P2BootstrapIconFactory::LIGHT_EMPHASIS,
			P2BootstrapIconFactory::DARK,
			P2BootstrapIconFactory::DARK_EMPHASIS,
		];

		return $this->addCssClass(
			P2BootstrapIconFactory::TEXT_PREFIX . '-' . $color,
			in_array($color, $colors, true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'P2BootstrapIconFactory::color()',
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
