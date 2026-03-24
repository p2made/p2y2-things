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
 * @class \p2m\internal\helpers\P2BootstrapIcon
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use Yii;
use p2m\internal\assets\P2BootstrapIconsCdnAsset;

use p2m\internal\interfaces\ColorableInterface;

final class P2BootstrapIcon extends P2Icon
	implements ColorableInterface
{
	private const BOOTSTRAP_COLOR_PREFIX = 'text';
	private const BOOTSTRAP_TEXT_COLORS = [
		'primary',   'primary-emphasis',
		'secondary', 'secondary-emphasis',
		'success',   'success-emphasis',
		'danger',    'danger-emphasis',
		'warning',   'warning-emphasis',
		'info',      'info-emphasis',
		'light',     'light-emphasis',
		'dark',      'dark-emphasis',
		'black',     'black-50',
		'white',     'white-50',
	];

	/**
	 * @var array
	 * protected array $options = [];
	 */

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
	 * ColorableInterface functions
	 *
	 * @see \p2m\internal\interfaces\ColorableInterface
	 *
	 * public function color(string $color): static;
	 * public function c(string $color): static;
	 * public function namedColor(string $color): static;
	 * public function n(string $color): static;
	 */

	use \p2m\internal\traits\BootstrapColorsTrait;

	/**
	 * @param string $color
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function color(string $color): static
	{
		return $this->applyBootstrapColorCss(
			self::BOOTSTRAP_COLOR_PREFIX,
			$color,
			self::BOOTSTRAP_TEXT_COLORS
		);
	}

	/**
	 * Shortcut for `color()` function
	 * @see color()
	 */
	public function c(string $color): static
	{
		return $this->color($color);
	}

	use \p2m\internal\traits\NamedColorsTrait;

	/**
	 * @param string $color
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function namedColor(string $color): static
	{
		return $this->applyNamedColorCss(self::BOOTSTRAP_COLOR_PREFIX, $color);
	}

	/**
	 * Shortcut for `namedColor()` function
	 * @see namedColor()
	 */
	public function n(string $color): static
	{
		return $this->namedColor($color);
	}
}
