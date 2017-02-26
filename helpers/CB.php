<?php
/**
 * CB.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2m\helpers;

/**
 * Use this helper with...
 *
 * use p2m\helpers\CB;
 * ...
 * echo CB::method([$params]);
 *
 * or
 *
 * echo \p2m\helpers\CB::method([$params]);
 */

/**
 * Class CB
 * @package p2m\yii2-p2y2-things
 */
class CB extends \p2m\helpers\base\CircleButton
{

	/**
	 * Size values
	 * @see p2m\components\base\CircleButtonBase::size
	 */
	const SIZE_NORMAL = '';
	const SIZE_LARGE = 'lg';
	const SIZE_XLARGE = 'xl';
	const SIZE_SMALL = 'sm';    // DO NOT USE
	const SIZE_XSMALL = 'xs';   // DO NOT USE

	const TYPE_DEFAULT = 'default';
	const TYPE_PRIMARY = 'primary';
	const TYPE_SUCCESS = 'success';
	const TYPE_INFO = 'info';
	const TYPE_WARNING = 'warning';
	const TYPE_DANGER = 'danger';
	const TYPE_LINK = 'link';   // DO NOT USE

}
