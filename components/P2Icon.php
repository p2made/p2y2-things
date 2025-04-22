<?php
/**
 * P2Icon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\components\P2Icon
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\components;

use p2m\components\P2BootstrapConstants;
use p2m\components\P2EmojiConstants;
use p2m\components\P2FlagConstants;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class P2Icon
{
	/**
	 * @var array
	 */
	private $options = [];

	/**
	 * @param string $cssPrefix
	 * @param string $name
	 * @param array $options
	 */
	public function __construct($cssPrefix, $name, $options = [])
	{
		Html::addCssClass($options, $cssPrefix);

		if (!empty($name)) {
			Html::addCssClass($options, P2BootstrapIcons::$basePrefix . '-' . $name);
		}

		$this->options = $options;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		$options = $this->options;

		$tag = ArrayHelper::remove($options, 'tag', 'i');

		return Html::tag($tag, null, $options);
	}

	/**
	 * @param string $value
	 * @return \p2m\icons\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function color($value)
	{
		$values = [
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
			P2BootstrapIcons::$textPrefix . '-' . $value,
			in_array((string)$value, $values, true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'P2BootstrapIcons::color()',
				implode(', ', $values)
			)
		);
	}

	public function size($value)
	{
		return $this->addCssClass(
			P2BootstrapIcons::$sizePrefix . '-' . $value,
			in_array($value, range(1, 6), true),
			sprintf(
				'%s - invalid value. Use an integer between 1 and 6.',
				'P2BootstrapIcons::size()',
				implode(', ', range(1, 6))
			)
		);
	}

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return \p2m\icons\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 * @codeCoverageIgnore
	 */
	public function addCssClass($class, $condition = true, $throw = false)
	{
		if ($condition === false) {
			if (!empty($throw)) {
				$message = !is_string($throw)
					? 'Condition is false'
					: $throw;

				throw new InvalidConfigException($message);
			}
		} else {
			Html::addCssClass($this->options, $class);
		}

		return $this;
	}
}

/**
P2Icon.php
Parent for icon objects.
use p2m\components\P2Icon;
/p2m/components/P2Icon
P2BootstrapIcon.php
Object & logic for Bootstrap Icon.
use p2m\components\P2BootstrapIcon;
/p2m/components/P2BootstrapIcon
P2EmojiIcon.php
Object & logic for Emoji Icon.
use p2m\components\P2EmojiIcon;
/p2m/components/P2EmojiIcon
P2FlagIcon.php
Object & logic for Flag Icon.
use p2m\components\P2FlagIcon;
/p2m/components/P2FlagIcon
P2BootstrapConstants.php
Constants for Bootstrap Icons.
use p2m\components\P2BootstrapConstants;
/p2m/components/P2BootstrapConstants
P2EmojiConstants.php
Constants for Emoji Icons.
use p2m\components\P2EmojiConstants;
/p2m/components/P2EmojiConstants
P2FlagConstants.php
Constants for Flag Icons.
use p2m\components\P2FlagConstants;
/p2m/components/P2FlagConstants
P2Icons.php
Launchpad for Icon objects.
use p2m\components\P2Icons
/p2m/components/P2Icons
P2I.php
Public class.
use p2m\helpers\P2I
/p2m/helpers/P2I
 */
