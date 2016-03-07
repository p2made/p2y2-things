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

use yii\base\Widget;
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

class P2Widget extends Widget{
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
?>


<?php
namespace app\components;

class Mywidget extends Widget{

	public $message;

	public function init(){
		// your logic here

		parent::init();

		if($this->message===null) {
			$this->message= 'Welcome Guest';
		}else{
			$this->message= 'Welcome '.$this->message;
		}
	}

	public function run(){
		// you can load & return the view or you can return the output variable

		return $this->render('myWidget',['message' => $this->message]);
	}

}
?>



<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class RecentPostWidget extends Widget{

	public function init(){
		// add your logic here
	}

	public function run(){
		return $this->render('myWidget');
	}
}
?>


<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class RecentPostWidget extends Widget{

	public $limit=5;
	public $posts;

	public function init(){

		parent::init();

		$this->posts = \app\models\Post::find()->limit($this->limit)->all();
	}

	public function run(){
		return $this->render('recentPostWidget',['posts'=>$this->posts]);
	}

}
?>


