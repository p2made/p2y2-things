<?php
/**
 * P2Alert.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\widgets\P2Alert
 */

/**
 * Use this helper with...
 *
 * use p2m\widgets\P2Alert;
 * ...
 * echo P2Alert::method([$params]);
 *
 * or
 *
 * echo \p2m\widgets\P2Alert::method([$params]);
 */

/**
 * P2Alert widget renders a message from session flash for AdminLTE alerts. All flash messages are displayed
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
/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * Yii::$app->session->setFlash('error', 'This is the message');
 * Yii::$app->session->setFlash('success', 'This is the message');
 * Yii::$app->session->setFlash('info', 'This is the message');
 * ```
 *
 * Multiple messages could be set as follows:
 *
 * ```php
 * Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);
 * ```
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @author Alexander Makarov <sam@rmcreative.ru>
 */
namespace p2m\widgets;

use \yii;
use \yii\bootstrap5\Widget;

class P2Alert extends Widget
{
	/**
	 * @var array the alert types configuration for the flash messages.
	 * This array is setup as $key => $value, where:
	 * - $key is the name of the session flash variable
	 * - $value is the array:
	 * - class of alert type (i.e. danger, success, info, warning)
	 * - icon for alert AdminLTE
	 */
	public $alertTypes = [
		'error' => [
			'class' => 'alert-error',
			'icon' => '<i class="bi bi-x-octagon"></i>',
		],
		'danger' => [
			'class' => 'alert-danger',
			'icon' => '<i class="bi bi-x-circle"></i>',
		],
		'success' => [
			'class' => 'alert-success',
			'icon' => '<i class="bi bi-check-circle"></i>',
		],
		'info' => [
			'class' => 'alert-info',
			'icon' => '<i class="bi bi-info-circle"></i>',
		],
		'warning' => [
			'class' => 'alert-warning',
			'icon' => '<i class="bi bi-exclamation-triangle"></i>',
		],
	];

	/**
	 * @var array the options for rendering the close button tag.
	 */
	public $closeButton = [];

	/**
	 * Initializes the widget.
	 * This method will register the bootstrap asset bundle. If you override this method,
	 * make sure you call the parent implementation first.
	 */
	public function run()
	{
		$session = Yii::$app->session;
		$flashes = $session->getAllFlashes();
		$appendClass = isset($this->options['class']) ? ' ' . $this->options['class'] : '';

		// code from `app/common/widgets/Alert.php`
		foreach ($flashes as $type => $flash) {
			if (!isset($this->alertTypes[$type])) {
				continue;
			}

			foreach ((array) $flash as $i => $message) {
				echo \yii\bootstrap5\Alert::widget([
					'body' => $message,
					'closeButton' => $this->closeButton,
					'options' => array_merge($this->options, [
						'id' => $this->getId() . '-' . $type . '-' . $i,
						'class' => $this->alertTypes[$type] . $appendClass,
					]),
				]);
			}

			$session->removeFlash($type);
		}

		// code from the `init()` function of the class being rewritten
		foreach ($flashes as $type => $data) {
			if (!isset($this->alertTypes[$type])) {
				continue;
			}

			$data = (array) $data;
			foreach ($data as $message) {
				$this->options['class'] = $this->alertTypes[$type]['class'] . $appendClass;
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
