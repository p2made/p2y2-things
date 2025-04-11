<?php
/**
 * P2Flag.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\helpers\P2Flag
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\helpers;

use p2m\helpers\P2FlagIcons;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class P2Flag
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
			Html::addCssClass($options, P2FlagIcons::$basePrefix . '-' . $name);
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
	 * @return \p2m\flags\P2Flag
	 * @throws \yii\base\InvalidConfigException
	 */
	public function square()
	{
		Html::addCssClass($this->options, P2FlagIcons::SQUARE_FLAG);
		return $this;
	}
}
