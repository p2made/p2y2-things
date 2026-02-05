<?php
/**
 * P2BootstrapIcon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\internal\helpers\P2BootstrapIcon
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use Yii;
use p2m\internal\assets\P2BootstrapIconsCdnAsset;

final class P2BootstrapIcon extends P2Icon
{
	/**
	 * @param string $cssPrefix
	 * @param string $name
	 * @param array  $options
	 */
	public function __construct(string $cssPrefix, string $name, array $options = [])
	{
		// register the asset bundle for BI
		P2BootstrapIconsCdnAsset::register(Yii::$app->view);

		// call parent with original arguments
		parent::__construct($cssPrefix, $name, $options);
	}

	/**
	 * @param string $color
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function color(string $color): self
	{
		$color = trim($color);

		$colors = [
			P2BootstrapIconFactory::PRIMARY,
			P2BootstrapIconFactory::PRIMARY_EMPHASIS,
			P2BootstrapIconFactory::SECONDARY,
			P2BootstrapIconFactory::SECONDARY_EMPHASIS,
			P2BootstrapIconFactory::SUCCESS,
			P2BootstrapIconFactory::SUCCESS_EMPHASIS,
			P2BootstrapIconFactory::DANGER,
			P2BootstrapIconFactory::DANGER_EMPHASIS,
			P2BootstrapIconFactory::WARNING,
			P2BootstrapIconFactory::WARNING_EMPHASIS,
			P2BootstrapIconFactory::INFO,
			P2BootstrapIconFactory::INFO_EMPHASIS,
			P2BootstrapIconFactory::LIGHT,
			P2BootstrapIconFactory::LIGHT_EMPHASIS,
			P2BootstrapIconFactory::DARK,
			P2BootstrapIconFactory::DARK_EMPHASIS,
		];

		return $this->addCssClass(
			P2BootstrapIconFactory::TEXT_PREFIX . '-' . $color,
			in_array($color, $colors, true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'P2BootstrapIconFactory::color()',
				implode(', ', $colors)
			)
		);
	}

	/**
	 * Convenience alias.
	 */
	public function c(string $color): self
	{
		return $this->color($color);
	}

	/**
	 * @param string $id
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	public function id(string $id): self
	 */

	/**
	 * @param integer $value range 1 to 6
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	public function size(int $value): self
	 */

	/**
	 * Convenience alias.
	public function s(int $value): self
	 */

	/**
	 * @param string $title
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	public function title(string $title): self
	 */

	/**
	 * Convenience alias.
	public function t(string $title): self
	 */

	/**
	 * @param int $index
	 * @return self
	public function tabIndex(int $index): self
	 */

	/**
	 * Convenience alias.
	public function i(int $index): self
	 */

	/**
	 * @param bool $focusable = true
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	public function focusable(bool $focusable = true): self
	 */

	/**
	 * Convenience alias.
	public function f(bool $focusable = true): self
	 */

	/**
	 * @param string $label
	 * @param string|null $role Default P2IconFactory::IMG. Use '' or null to not set role.
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	public function ariaLabel(string $label, ?string $role = P2IconFactory::IMG): self
	 */

	/**
	 * Convenience alias.
	public function l(string $label, ?string $role = P2IconFactory::IMG): self
	 */

	/**
	 * @param string $role
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	public function ariaRole(string $role): self
	 */

	/**
	 * Convenience alias.
	public function r(string $role): self
	 */

	/**
	 * Force aria-hidden state.
	 *
	 * @param bool $hidden
	 * @return self
	public function ariaHidden(bool $hidden = true): self
	 */

	/**
	 * Convenience alias.
	public function h(bool $hidden = true): self
	 */

	/**
	 * @param string $name
	 * @param string $value
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	public function data(string $name, string $value): self
	 */

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return \p2m\icons\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 * @codeCoverageIgnore
	public function addCssClass($class, $condition = true, $throw = false): self
	 */

	/**
	 * Convenience alias.
	public function css($class, $condition = true, $throw = false): self
	 */

	/**
	 * Add or overwrite an HTML attribute.
	 *
	 * @param string      $name
	 * @param string      $value
	 * @param bool        $condition
	 * @param string|bool $throw
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	public function addAttribute(string $name, string $value, bool $condition = true, $throw = false): self
	 */

	/**
	 * Convenience alias.
	public function att(string $name, string $value, bool $condition = true, $throw = false): self
	 */
}
