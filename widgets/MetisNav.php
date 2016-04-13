<?php
/**
 * MetisNav.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\widgets;

use Yii;
use yii\bootstrap\Nav;
use yii\bootstrap\Html;


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
	// public $items = [];
	/**
	 * @var boolean whether the nav items labels should be HTML-encoded.
	 */
	// public $encodeLabels = true;
	/**
	 * @var boolean whether to automatically activate items according to whether their route setting
	 * matches the currently requested route.
	 * @see isItemActive
	 */
	// public $activateItems = true;
	/**
	 * @var boolean whether to activate parent menu items when one of the corresponding child menu items is active.
	 */
	// public $activateParents = false;
	/**
	 * @var string the route used to determine if a menu item is active or not.
	 * If not set, it will use the route of the current request.
	 * @see params
	 * @see isItemActive
	 */
	// public $route;
	/**
	 * @var array the parameters used to determine if a menu item is active or not.
	 * If not set, it will use `$_GET`.
	 * @see route
	 * @see isItemActive
	 */
	// public $params;
	/**
	 * @var string this property allows you to customize the HTML which is used to generate the drop down caret symbol,
	 * which is displayed next to the button text to indicate the drop down functionality.
	 * Defaults to `null` which means `<b class="caret"></b>` will be used. To disable the caret, set this property to be an empty string.
	 */
	// public $dropDownCaret;


	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		parent::init();
	}

	/**
	 * Renders the widget.
	 */
	// public function run()

	/**
	 * Renders widget items.
	 */
	// public function renderItems()

	/**
	 * Renders a widget's item.
	 * @param string|array $item the item to render.
	 * @return string the rendering result.
	 * @throws InvalidConfigException
	 */
	public function renderItems()
	{
		$items = [];
		foreach ($this->items as $i => $item) {
			if (isset($item['visible']) && !$item['visible']) {
				continue;
			}
			$items[] = $this->renderItem($item);
		}

		/**
		 * Customized widget for MetisMenu navigation dropdowns to not flicker on page load
		 * by precomputing if the menu should be open or not. Portions were added below to
		 * add the 'collapse' css class if there is an item active within the submenu.
		 */
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

	/**
	 * Renders the given items as a dropdown.
	 * This method is called to create sub-menus.
	 * @param array $items the given items. Please refer to [[Dropdown::items]] for the array structure.
	 * @param array $parentItem the parent item information. Please refer to [[items]] for the structure of this array.
	 * @return string the rendering result.
	 * @since 2.0.1
	 */
	// protected function renderDropdown($items, $parentItem)

	/**
	 * Check to see if a child item is active optionally activating the parent.
	 * @param array $items @see items
	 * @param boolean $active should the parent be active too
	 * @return array @see items
	 */
	// protected function isChildActive($items, &$active)

	/**
	 * Checks whether a menu item is active.
	 * This is done by checking if [[route]] and [[params]] match that specified in the `url` option of the menu item.
	 * When the `url` option of a menu item is specified in terms of an array, its first element is treated
	 * as the route for the item and the rest of the elements are the associated parameters.
	 * Only when its route and parameters match [[route]] and [[params]], respectively, will a menu item
	 * be considered active.
	 * @param array $item the menu item to be checked
	 * @return boolean whether the menu item is active
	 */
	// protected function isItemActive($item)


	/**
	 */
}
