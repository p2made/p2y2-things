<?php
/**
 * Alert.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\widgets\Alert
 */

namespace p2m\widgets;

use \yii\bootstrap\Alert as BootstrapAlert;

/**
 * Use this helper with...
 *
 * use p2m\widgets\Alert;
 * ...
 * echo Alert::method([$params]);
 *
 * or
 *
 * echo \p2m\widgets\Alert::method([$params]);
 */

/**
 * Alert widget renders a message from session flash for AdminLTE alerts. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * \Yii::$app->getSession()->setFlash('error', '<b>Alert!</b> Danger alert preview. This alert is dismissable.');
 * ```
 *
 * Multiple messages could be set as follows:
 *
 * ```php
 * \Yii::$app->getSession()->setFlash('error', ['Error 1', 'Error 2']);
 * ```
 *
 * @author Evgeniy Tkachenko <et.coder@gmail.com>
 */
class Alert extends \p2m\base\widgets\P2WidgetBase
{
	/**
	 * @var array the alert types configuration for the flash messages.
	 * This array is setup as $key => $value, where:
	 * - $key is the name of the session flash variable
	 * - $value is the array:
	 * - class of alert type (i.e. danger, success, info, warning)
	 * - icon for alert AdminLTE
	 */
	public $alertTypes = array(
		'error' => [
			'class' => 'alert-danger',
			'icon' => '<i class="icon fa fa-ban"></i>',
		],
		'danger' => [
			'class' => 'alert-danger',
			'icon' => '<i class="icon fa fa-ban"></i>',
		],
		'success' => [
			'class' => 'alert-success',
			'icon' => '<i class="icon fa fa-check"></i>',
		],
		'info' => [
			'class' => 'alert-info',
			'icon' => '<i class="icon fa fa-info"></i>',
		],
		'warning' => [
			'class' => 'alert-warning',
			'icon' => '<i class="icon fa fa-warning"></i>',
		],
	);

	/**
	 * @var array the options for rendering the close button tag.
	 */
	public $closeButton = [];

	/**
	 * Initializes the widget.
	 * This method will register the bootstrap asset bundle. If you override this method,
	 * make sure you call the parent implementation first.
	 */
	public function init()
	{
		parent::init();

		$session = \Yii::$app->getSession();
		$flashes = $session->getAllFlashes();
		$appendCss = isset($this->options['class']) ? ' ' . $this->options['class'] : '';

		foreach ($flashes as $type => $data) {
			if (isset($this->alertTypes[$type])) {
				$data = (array) $data;
				foreach ($data as $message) {
					$this->options['class'] = $this->alertTypes[$type]['class'] . $appendCss;
					$this->options['id'] = $this->getId() . '-' . $type;

					echo BootstrapAlert::widget([
						'body' => $this->alertTypes[$type]['icon'] . $message,
						'closeButton' => $this->closeButton,
						'options' => $this->options,
					]);
				}

				$session->removeFlash($type);
			}
		}
	}
}
