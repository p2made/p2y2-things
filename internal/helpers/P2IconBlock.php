<?php
/**
 * P2IconBlock.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\internal\helpers\P2IconBlock
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use yii\bootstrap5\Html;

use p2m\internal\interfaces\IconInterface;
use p2m\internal\interfaces\AccessibleInterface;
use p2m\internal\interfaces\ColorableInterface;
use p2m\internal\interfaces\ScalableInterface;

final class P2IconBlock extends P2IconBase
	implements IconInterface, AccessibleInterface, ColorableInterface, ScalableInterface
{
	private const BOOTSTRAP_COLOR_PREFIX = 'bg';
	private const BOOTSTRAP_BG_COLORS = [
		'primary',   'primary-emphasis',
		'secondary', 'secondary-emphasis',
		'success',   'success-emphasis',
		'danger',    'danger-emphasis',
		'warning',   'warning-emphasis',
		'info',      'info-emphasis',
		'light',     'light-emphasis',
		'dark',      'dark-emphasis',
		'black',     'black-50',
		'white',     'white-50',
		'body',      'body-emphasis',
		'body-secondary',
		'body-tertiary',
	];

	/**
	 * @var array
	 * protected array $options = [];
	 */

	private P2Icon $icon;

	/**
	 * @param P2Icon $icon
	 * @param array $options = []
	 */
	public function __construct(bool $circle, P2Icon $icon, array $options = [])
	{
		$this->icon = $icon;
		$this->options = array_merge($this->ariaDefaults, $options);

		// Create block with a sane default size - explicit size by chaining `s()` or `x()`
		// Radius 0 if $circle = false
		// Radius for a circle if $circle = true

		// Existing code below

		Html::addCssClass($this->options, 'p2-icon-block');

		// Default size only if caller didn’t set it.
		$style = (string)($this->options['style'] ?? '');
		if (stripos($style, '--p2-block:') === false) {
			$this->options['style'] = trim(rtrim($style, ';') . '; --p2-block: 5rem;');
		}

		/*
		if (stripos($style, '--p2-radius:') === false) {
			$style = $this->setCssVarInStyle($style, '--p2-radius', '0.75rem');
		}

		$this->options['style'] = $style;
		*/
	}

	public function __toString(): string
	{
		try {
			return Html::tag('span', (string)$this->icon, $this->options);
		} catch (\Throwable $e) {
			return 'P2IconBlock render error';
		}
	}

	/**
	 * IconInterface functions - act on enclosed icon
	 *
	 * @see \p2m\internal\interfaces\IconInterface
	 *
	 * public function id(string $id): static;
	 * public function title(string $title): static;
	 * public function t(string $title): static;
	 * public function data(string $name, string $value): static;
	 */

	/**
	 * @param string $id
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function id(string $id): static
	{
		$this->icon->id($id);
		return $this;
	}

	/**
	 * @param string $title
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function title(string $title): static
	{
		$this->icon->title($title);
		return $this;
	}

	/**
	 * Shortcut for `title()` function
	 * @see title()
	 */
	public function t(string $title): static
	{
		return $this->title($title);
	}

	/**
	 * @param string $name
	 * @param string $value
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function data(string $name, string $value): static
	{
		$this->icon->data($name, $value);
		return $this;
	}

	/**
	 * AccessibleInterface functions - act on enclosed icon
	 *
	 * @see \p2m\internal\interfaces\AccessibleInterface
	 *
	 * public function focusable(bool $focusable = true): static;
	 * public function f(bool $focusable = true): static;
	 * public function tabIndex(int $index): static;
	 * public function i(int $index): static;
	 * public function ariaLabel(string $label, ?string $role = null): static;
	 * public function l(string $label, ?string $role = null): static;
	 * public function ariaRole(string $role): static;
	 * public function r(string $role): static;
	 * public function ariaHidden(bool $hidden = true): static;
	 * public function h(bool $hidden = true): static;
	 */

	/**
	 * @param bool $focusable = true
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function focusable(bool $focusable = true): static
	{
		$this->unhideWrapper();
		$this->icon->focusable($focusable);
		return $this;
	}

	/**
	 * Shortcut for `focusable()` function
	 * @see focusable()
	 */
	public function f(bool $focusable = true): static
	{
		return $this->focusable($focusable);
	}

	/**
	 * @param int $index
	 * @return self
	 */
	public function tabIndex(int $index): static
	{
		$this->unhideWrapper();
		$this->icon->tabIndex($index);
		return $this;
	}

	/**
	 * Shortcut for `tabIndex()` function
	 * @see tabIndex()
	 */
	public function i(int $index): static
	{
		return $this->tabIndex($index);
	}

	/**
	 * @param string $label
	 * @param string|null $role Default P2IconFactory::IMG. Use '' or null to not set role.
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function ariaLabel(string $label, ?string $role = P2IconFactory::IMG): static
	{
		$this->unhideWrapper();
		$this->icon->ariaLabel($label, $role);
		return $this;
	}

	/**
	 * Shortcut for `ariaLabel()` function
	 * @see ariaLabel()
	 */
	public function l(string $label, ?string $role = P2IconFactory::IMG): static
	{
		return $this->ariaLabel($label, $role);
	}

	/**
	 * @param string $role
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function ariaRole(string $role): static
	{
		$this->unhideWrapper();
		$this->icon->ariaRole($role);
		return $this;
	}

	/**
	 * Shortcut for `ariaRole()` function
	 * @see ariaRole()
	 */
	public function r(string $role): static
	{
		return $this->ariaRole($role);
	}

	/**
	 * Force aria-hidden state.
	 *
	 * @param bool $hidden
	 * @return self
	 */
	public function ariaHidden(bool $hidden = true): static
	{
		// Always forward to icon
		$this->icon->ariaHidden($hidden);

		// If icon is hidden, ensure wrapper cannot be announced
		if ($hidden) {
			$this->options['aria-hidden'] = 'true';
		}

		return $this;
	}

	/**
	 * Shortcut for `ariaHidden()` function
	 * @see ariaHidden()
	 */
	public function h(bool $hidden = true): static
	{
		return $this->ariaHidden($hidden);
	}

	/**
	 * ColorableInterface functions - act on block
	 *
	 * @see \p2m\internal\interfaces\ColorableInterface
	 *
	 * public function color(string $color): static;
	 * public function c(string $color): static;
	 * public function namedColor(string $color): static;
	 * public function n(string $color): static;
	 */

	use \p2m\internal\traits\BootstrapColorsTrait;

	/**
	 * @param string $color
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function color(string $color): static
	{
		return $this->applyBootstrapColorCss(
			self::BOOTSTRAP_COLOR_PREFIX,
			$color,
			self::BOOTSTRAP_TEXT_COLORS
		);
	}

	/**
	 * Shortcut for `color()` function
	 * @see color()
	 */
	public function c(string $color): static
	{
		return $this->color($color);
	}

	use \p2m\internal\traits\NamedColorsTrait;

	/**
	 * @param string $color
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function namedColor(string $color): static
	{
		return $this->applyNamedColorCss(self::BOOTSTRAP_COLOR_PREFIX, $color);
	}

	/**
	 * Shortcut for `namedColor()` function
	 * @see namedColor()
	 */
	public function n(string $color): static
	{
		return $this->namedColor($color);
	}

	/**
	 * ScalableInterface functions
	 *
	 * @see \p2m\internal\interfaces\ScalableInterface
	 *
	 * public function size(int $value): static;
	 * public function s(int $value): static;
	 * public function multiply(int $x = 1): static;
	 * public function x(int $x = 1): static;
	 */

	/**
	 * @param integer $value range 1 to 6
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function size(int $value): static
	{
		return $this->applySizeCss($value);
	}

	/**
	 * Shortcut for `size()` function
	 * @see size()
	 */
	public function s(int $value): static
	{
		return $this->size($value);
	}

	/**
	 * @param int $x = 1
	 * @return self
	 */
	public function multiply(int $x = 1): static
	{
		return $this->applyMultiplyCss($x);
	}

	/**
	 * Shortcut for `multiply()` function
	 * @see multiply()
	 */
	public function x(int $x = 1): static
	{
		return $this->multiply($x);
	}

	/**
	 * Blockable functions - only act on block
	 *
	 * public function radius(int $string): static
	 * public function d(string $radius): static
	 * public function gradient(string $from, string $to): static
	 * public function g(string $from, string $to): static
	 */

	/**
	 * Set block size (e.g. '5rem', '64px'). This is the wrapper size, not icon size.
	 */
	public function block(string $size): static
	{
		$size = trim($size);
		if ($size !== '') {
			$opts =& $this->optionsRef();
			$opts['style'] = $this->setCssVarInStyle($opts['style'] ?? '', '--p2-block', $size);
		}
		return $this;
	}

	/**
	 * Changes radius on a block to give a rounded rectangle.
	 * Border radius (e.g. '0', '.5rem', '12px', '9999px').
	 *
	 * @param string $radius
	 * @return static
	 */
	public function radius(string $radius): static
	{
		$radius = trim($radius);

		if ($radius !== '') {
			$opts =& $this->optionsRef();
			$opts['style'] = $this->setCssVarInStyle($opts['style'] ?? '', '--p2-radius', $radius);
		}

		return $this;
	}

	/**
	 * Shortcut for `radius()` function
	 * @see radius()
	 */
	public function d(string $radius): static
	{
		return $this->radius($radius);
	}

	/**
	 * Colorable functions only appliciable to blocks
	 *
	 * @param string $from
	 * @param string $to
	 * @return static
	 */
	public function gradient(string $from, string $to): static
	{
		$from = trim($from);
		$to   = trim($to);

		// Set Bootstrap gradient

		return $this;
	}

	/**
	 * Shortcut for `gradient()` function
	 * @see gradient()
	 */
	public function g(string $from, string $to): static
	{
		return $this->gradient($from, $to);
	}

// -- ^ -- -- ^ -- -- ^ -- -- ^ -- -- ^ --

	public function options(array $options): static
	{
		if (isset($options['class'])) {
			Html::addCssClass($this->options, $options['class']);
			unset($options['class']);
		}

		if (isset($options['style'])) {
			$this->options['style'] = trim(rtrim(($this->options['style'] ?? ''), ';') . '; ' . ltrim($options['style']));
			unset($options['style']);
		}

		$this->options = array_merge($this->options, $options);
		return $this;
	}

	private function unhideWrapper(): void
	{
		if (($this->options['aria-hidden'] ?? null) === 'true') {
			unset($this->options['aria-hidden']);
		}
	}

	public function icon(): P2Icon
	{
		return $this-icon;
	}

	public function i(): P2Icon
	{
		return $this-icon();
	}

	/*
	 * still needed?
	protected function &optionsRef(): array
	{
		return $this->options;
	}
	 */

	/**
	 * Convenience: sharp corners.
	 */
	public function square(): static
	{
		return $this->radius('0');
	}

	/**
	 * Convenience: perfect circle/pill.
	 */
	public function circle(): static
	{
		return $this->att('style', trim(rtrim((string)($this->options['style'] ?? ''), ';') . '; --p2-radius: 9999px;'), true);
		//return $this->radius('9999px');
	}
}
