<?php
/**
 * CB.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\helpers\CB
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
