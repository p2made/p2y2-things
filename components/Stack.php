<?php
/**
 * Stack.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\components;

use yii\helpers\Html;

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
 * Class Stack
 * @package p2made\yii2-p2y2-things
 */
class Stack extends \rmrevin\yii\fontawesome\component\Stack
{
	/**
	 *
	 * This in an empty sub-class of \rmrevin\yii\component\Stack
	 * for the purpose of mapping FontAwesome to the p2made namespace.
	 *
	 */

	/**
	 * public static $defaultTag = 'span';
	 */

	/** @var string */
	private $tag;

	/** @var array */
	private $options = [];

	/** @var Icon */
	private $icon_front;

	/** @var Icon */
	private $icon_back;

	/**
	 * public function __construct($options = [])
	 *
	 * public function __toString()
	 *
	 * public function icon($icon, $options = [])
	 *
	 * public function on($icon, $options = [])
	 *
	 * public function tag($tag)
	 *
	 * public function render($tag = null, $options = [])
	 */

}
