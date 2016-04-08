<?php
/**
 * Flag.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\components;

use p2made\helpers\FI;
use yii\bootstrap\Html;

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####                                           ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####                                           ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Use this helper with...
 *
 * use p2made\components\Flag;
 * ...
 * echo Flag::method([$params]);
 *
 * or
 *
 * echo \p2made\components\Flag::method([$params]);
 */

/**
 * Class Flag
 * @package p2made\yii2-p2y2-things
 */
class Flag extends \p2made\components\base\P2ComponentBase
{

	/** @var string */
	public static $defaultTag = 'div';

	/** @var string */
	private $name;

	/**
	 * @param string $service
	 * @param array $options
	 */
	public function __construct($name, $tag = 'div', $options = [])
	{
		$this->name = $name;
		$this->tag = $tag;

		if ($tag === 'i' || $tag === 'span') {
			Html::addCssClass($options, FI::$cssPrefix . '-icon');
		}
		if ($tag === 'div') {
			Html::addCssClass($options, 'img-thumbnail ' . FI::$cssPrefix .
				' ' . FI::$cssPrefix . '-icon-background');
		}
		Html::addCssClass($options, 'flag-icon-' . $name);

		$this->options = $options;
	}

	/**
	 * @return string
	 */
	// public function __toString()

	/**
	 * Creates a squared flag icon
	 * @return self
	 */
	public function square()
	{
		Html::addCssClass($this->options, 'flag-icon-squared');

		return $this;
	}

	/**
	 * Adds title attribute
	 * @param string $value
	 * @return self
	 * If $value == null then the flag identifier is used
	 */
	public function title($value = null)
	{
		$this->options = array_merge($this->options,
			['title' => ($value == null ? $this->name : $value)]
		);

		return $this;
	}

	/**
	 * Adds id attribute
	 * @param string $value
	 * @return self
	 * If $value == null then the flag identifier is used
	 */
	public function id($value = null)
	{
		$this->options = array_merge($this->options,
			['id' => ($value == null ? $this->name : $value)]
		);

		return $this;
	}


	/**
	 * Change html tag.
	 * @param string $tag
	 * @return self
	 */
	// public function tag($tag)

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return \rmrevin\yii\fontawesome\component\Icon
	 * @throws \yii\base\InvalidConfigException
	 * @codeCoverageIgnore
	 */
	// public function addCssClass($class, $condition = true, $throw = false)

	/**
	 * @param string|null $tag
	 * @param string|null $content
	 * @param array $options
	 * @return string
	 */
	// public function render($tag = null, $content = null, $options = [])

/*
	'i' =>      'flag-icon flag-icon-au',
	'span' =>   'flag-icon flag-icon-au',
	'div' =>    'img-thumbnail flag flag-icon-background flag-icon-au" title="au" id="au',
*/


/**
	<i class="flag-icon flag-icon-au"></i>
	<i class="flag-icon flag-icon-squared flag-icon-au"></i>
	<span class="flag-icon flag-icon-au"></span>
	<div class="img-thumbnail flag flag-icon-background flag-icon-eu" title="eu" id="eu"></div>
 */


}
