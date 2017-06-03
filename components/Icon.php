<?php
/**
 * Icon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\components\Icon
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

use p2m\helpers\FA;
use yii\bootstrap\Html;

/**
 * Use this helper with...
 *
 * use p2m\components\Icon;
 * ...
 * echo Icon::method([$params]);
 *
 * or
 *
 * echo \p2m\components\Icon::method([$params]);
 */
class Icon extends \rmrevin\yii\fontawesome\component\Icon
{
	/**
	 *
	 * This in an empty sub-class of \rmrevin\yii\component\Icon
	 * for the purpose of mapping FontAwesome to the p2made namespace.
	 *
	 */

	/**
	 * public static $defaultTag = 'i';
	 */

	/** @var string */
	private $tag;

	/** @var array */
	private $options = [];

	/**
	 * public function __construct($name, $options = [])
	 *
	 * public function __toString()
	 *
	 * public function inverse()
	 *
	 * public function spin()
	 *
	 * public function fixed_width()
	 *
	 * public function fixedWidth()
	 *
	 * public function ul()
	 *
	 * public function li()
	 *
	 * public function border()
	 *
	 * public function pullLeft()
	 *
	 * public function pullRight()
	 *
	 * public function size($value)
	 *
	 * public function rotate($value)
	 *
	 * public function flip($value)
	 *
	 * public function tag($tag)
	 *
	 * public function addCssClass($class, $condition = true, $throw = false)
	 *
	 * public function render($tag = null, $content = null, $options = [])
	 */

}
