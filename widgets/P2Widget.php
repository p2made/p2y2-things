<?php
/**
 * P2Widget.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\widgets;

use yii\helpers\Html;

/**
 * Base widget class for yii2-widgets
 *
 * @var public $options = [];
 * @var public $pluginOptions = [];
 * @var public $pluginEvents = [];
 * You must define events in
 * event-name => event-function format
 * for example:
 * ~~~
 * pluginEvents = [
 *     "change" => "function() { log("change"); }",
 *     "open" => "function() { log("open"); }",
 * ];
 * ~~~
 *
 * @var public $i18n = [];
 * @var protected $_msgCat = '';
 * @var protected $_pluginName;
 * @var protected $_hashVar;
 * @var protected $_dataVar;
 * @var protected $_encOptions = '';
 */

class P2Widget extends \yii\base\Widget
{

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
		if (empty($this->options['id'])) {
			$this->options['id'] = $this->getId();
		}
	}
}
