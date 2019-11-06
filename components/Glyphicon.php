<?php
/**
 * Glyphicon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\components\Glyphicon
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

namespace p2m\components;

use p2m\helpers\GI;
use yii\bootstrap\Html;

/**
 * Use this helper with...
 *
 * use p2m\components\Glyphicon;
 * ...
 * echo Glyphicon::method([$params]);
 *
 * or
 *
 * echo \p2m\components\Glyphicon::method([$params]);
 */
class Glyphicon extends \p2m\base\components\P2ComponentBase
{

	/** @var string */
	public static $defaultTag = 'i';

	/**
	 * @param string $service
	 * @param array $options
	 */
	public function __construct($name, $options = [])
	{
		Html::addCssClass($options, GI::$cssPrefix);
		Html::addCssClass($options, GI::$cssPrefix . '-' . $name);

		$this->options = $options;
	}


/**

	<div class="fa col-md-4">
		<p><i class="flag-icon-asterisk fa-fw"></i></p><br>
	</div>


 */

/**
	<div class="fa col-md-4">
		<p><i class="glyphicon glyphicon-adjust fa-fw"></i> glyphicon-adjust</p><br>
	</div>
 */



	/**
	 * @return string
	 */
	// public function __toString()

	/**
	 * Adds the Font Awesome 'fa-fw' class for fixed width
	 * @return self
	 */
	public function fixedWidth()
	{
		Html::addCssClass($this->options, 'fa-fw');

		return $this;
	}

	/**
	 * @param string $value
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function size($value)
	{
		return $this->addCssClass(
			'btn-' . $value,
			in_array((string)$value, [
				FI::SIZE_LARGE,
				FI::SIZE_SMALL,
				FI::SIZE_XSMALL
			], true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'FA::size()',
				'FI::SIZE_LARGE, FI::SIZE_SMALL, FI::SIZE_XSMALL'
			)
		);
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
