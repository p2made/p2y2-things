<?php
/**
 * MetisNav.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * With thanks to Francis Lavoie https://github.com/francislavoie
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\widgets\MetisNav - renders a Nav widget using MetisMenuAsset
 */

namespace p2m\widgets;

use Yii;
use yii\bootstrap\Html;
use yii\bootstrap\Nav;

/**
 * Use this widget with...
 *
 * use p2m\widgets\MetisNav;
 * ...
 * MetisNav::widget([$params]);
 *
 * or
 *
 * p2m\widgets\MetisNav::widget([$params]);
 */
class MetisNav extends Nav
{

	/**
	 * @var array list of items in the nav widget. Each array element represents a single
	 * menu item which can be either a string or an array with the following structure:
	 *
	 * - label: string, required, the nav item label.
	 * - url: optional, the item's URL. Defaults to "#".
	 * - visible: boolean, optional, whether this menu item is visible. Defaults to true.
	 * - linkOptions: array, optional, the HTML attributes of the item's link.
	 * - options: array, optional, the HTML attributes of the item container (LI).
	 * - active: boolean, optional, whether the item should be on active state or not.
	 * - dropDownOptions: array, optional, the HTML options that will passed to the [[Dropdown]] widget.
	 * - items: array|string, optional, the configuration array for creating a [[Dropdown]] widget,
	 *   or a string representing the dropdown menu. Note that Bootstrap does not support sub-dropdown menus.
	 * - encode: boolean, optional, whether the label will be HTML-encoded. If set, supersedes the $encodeLabels option for only this item.
	 *
	 * If a menu item is a string, it will be rendered directly without HTML encoding.
	 */
	public $items = [];
	/**
	 * @var boolean whether the nav items labels should be HTML-encoded.
	 */
	public $encodeLabels = true;
	/**
	 * @var boolean whether to automatically activate items according to whether their route setting
	 * matches the currently requested route.
	 * @see isItemActive
	 */
	public $activateItems = true;
	/**
	 * @var boolean whether to activate parent menu items when one of the corresponding child menu items is active.
	 */
	public $activateParents = false;
	/**
	 * @var string the route used to determine if a menu item is active or not.
	 * If not set, it will use the route of the current request.
	 * @see params
	 * @see isItemActive
	 */
	public $route;
	/**
	 * @var array the parameters used to determine if a menu item is active or not.
	 * If not set, it will use `$_GET`.
	 * @see route
	 * @see isItemActive
	 */
	public $params;
	/**
	 * @var string this property allows you to customize the HTML which is used to generate the drop down caret symbol,
	 * which is displayed next to the button text to indicate the drop down functionality.
	 * Defaults to `null` which means `<span class="caret"></span>` will be used. To disable the caret, set this property to be an empty string.
	 */
	public $dropDownCaret;
	/**
	 * @var string name of a class to use for rendering dropdowns withing this widget. Defaults to [[Dropdown]].
	 * @since 2.0.7
	 */
	public $dropdownClass = 'yii\bootstrap\Dropdown';

	/**
	 * Customized widget for MetisMenu navigation dropdowns to not flicker on page load
	 * by precomputing if the menu should be open or not. Portions were added below to
	 * add the 'collapse' css class if there is an item active within the submenu.
	 */
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
}
