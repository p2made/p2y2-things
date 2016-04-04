<?php
/**
 * BSocial.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\helpers;

use Yii;
use yii\bootstrap\Nav;
use yii\helpers\Html;


/**
 * Use this helper with...
 *
 * use p2made\helpers\MetisNav;
 * ...
 * echo MetisNav::method([$params]);
 *
 * or
 *
 * echo \p2made\helpers\MetisNav::method([$params]);
 */

/**
 * Class MetisNav
 * @package p2made\yii2-p2y2-things
 */
class MetisNav extends \yii\bootstrap\Nav
{

	/**
	 * Customized widget for MetisMenu navigation dropdowns to not flicker on page load
	 * by precomputing if the menu should be open or not. Portions were added below to
	 * add the 'collapse' css class if there is an item active within the submenu.
	 */
	/**
	public function renderItems() {
		$items = [];
		foreach ($this->items as $i => $item) {
			if (isset($item['visible']) && !$item['visible']) {
				continue;
			}
			$items[] = $this->renderItem($item);
		}

		// Begin custom code
		$hasActive = false;
		foreach ($this->items as $i => $child) {
			if($this->isItemActive($child)) {
				$hasActive = true;
				break;
			}
		}

		if(!$hasActive) {
			Html::addCssClass($this->options, 'collapse');
		}
		// End custom code

		return Html::tag('ul', implode("\n", $items), $this->options);
	}
	 */
}
