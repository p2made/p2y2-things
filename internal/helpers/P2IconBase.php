<?php
/**
 * P2IconBase.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\internal\helpers\P2IconBase
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use yii\bootstrap5\Html;
use yii\base\InvalidConfigException;

abstract class P2IconBase
{
	/**
	 * Yii tag options.
	 * Children may add more state, but this is the shared target for css()/att().
	 */
	protected array $options      = [];

	protected const ARIA_DEFAULTS = [
		'aria-hidden' => 'true',
		'focusable'   => 'false',
	];

	private const CSS_NAMED_COLORS = [
		'silver', 'gray', 'maroon', 'red', 'purple', 'fuchsia', 'green', 'lime',
		'olive', 'yellow', 'navy', 'blue', 'teal', 'aqua', 'aliceblue', 'antiquewhite',
		'aquamarine', 'azure', 'beige', 'bisque', 'blanchedalmond', 'blueviolet', 'brown',
		'burlywood', 'cadetblue', 'chartreuse', 'chocolate', 'coral', 'cornflowerblue',
		'cornsilk', 'crimson', 'cyan', 'darkblue', 'darkcyan', 'darkgoldenrod',
		'darkgray', 'darkgreen', 'darkgrey', 'darkkhaki', 'darkmagenta', 'darkolivegreen',
		'darkorange', 'darkorchid', 'darkred', 'darksalmon', 'darkseagreen',
		'darkslateblue', 'darkslategray', 'darkslategrey', 'darkturquoise', 'darkviolet',
		'deeppink', 'deepskyblue', 'dimgray', 'dimgrey', 'dodgerblue', 'firebrick',
		'floralwhite', 'forestgreen', 'gainsboro', 'ghostwhite', 'gold', 'goldenrod',
		'greenyellow', 'grey', 'honeydew', 'hotpink', 'indianred', 'indigo', 'ivory',
		'khaki', 'lavender', 'lavenderblush', 'lawngreen', 'lemonchiffon', 'lightblue',
		'lightcoral', 'lightcyan', 'lightgoldenrodyellow', 'lightgray', 'lightgreen',
		'lightgrey', 'lightpink', 'lightsalmon', 'lightseagreen', 'lightskyblue',
		'lightslategray', 'lightslategrey', 'lightsteelblue', 'lightyellow', 'limegreen',
		'linen', 'magenta', 'mediumaquamarine', 'mediumblue', 'mediumorchid',
		'mediumpurple', 'mediumseagreen', 'mediumslateblue', 'mediumspringgreen',
		'mediumturquoise', 'mediumvioletred', 'midnightblue', 'mintcream', 'mistyrose',
		'moccasin', 'navajowhite', 'oldlace', 'olivedrab', 'orange', 'orangered',
		'orchid', 'palegoldenrod', 'palegreen', 'paleturquoise', 'palevioletred',
		'papayawhip', 'peachpuff', 'peru', 'pink', 'plum', 'powderblue', 'rebeccapurple',
		'rosybrown', 'royalblue', 'saddlebrown', 'salmon', 'sandybrown', 'seagreen',
		'seashell', 'sienna', 'skyblue', 'slateblue', 'slategray', 'slategrey', 'snow',
		'springgreen', 'steelblue', 'tan', 'thistle', 'tomato', 'transparent',
		'turquoise', 'violet', 'wheat', 'whitesmoke', 'yellowgreen'
	];

	// Public API

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return static
	 * @throws \yii\base\InvalidConfigException
	 * @codeCoverageIgnore
	 */
	public function addCssClass($class, $condition = true, $throw = false): static
	{
		if ($condition === false) {
			if (!empty($throw)) {
				$message = !is_string($throw) ? 'Condition is false' : $throw;
				throw new InvalidConfigException($message);
			}
			return $this;
		}

		Html::addCssClass($this->options, $class);
		return $this;
	}

	/**
	 * Shortcut for `addCssClass()` function
	 * @see addCssClass()
	 */
	public function css($class, $condition = true, $throw = false): static
	{
		return $this->addCssClass($class, $condition, $throw);
	}

	/**
	 * Add or overwrite an HTML attribute.
	 *
	 * @param string      $name
	 * @param string      $value
	 * @param bool        $condition
	 * @param string|bool $throw
	 * @return static
	 * @throws \yii\base\InvalidConfigException
	 */
	public function addAttribute(string $name, string $value, bool $condition = true, $throw = false): static
	{
		$value = trim($value);

		if ($condition === false) {
			if (!empty($throw)) {
				$message = !is_string($throw) ? 'Condition is false' : $throw;
				throw new InvalidConfigException($message);
			}
			return $this;
		}

		if ($value === '') {
			if (!empty($throw)) {
				$message = !is_string($throw) ? 'Invalid value' : $throw;
				throw new InvalidConfigException($message);
			}
			return $this;
		}

		$this->options[$name] = $value;
		return $this;
	}

	/**
	 * Shortcut for `addAttribute()` function
	 * @see addAttribute()
	 */
	public function att(string $name, string $value, bool $condition = true, $throw = false): static
	{
		return $this->addAttribute($name, $value, $condition, $throw);
	}

	/**
	 * @param string $class
	 * @return static
	 */
	public function removeCssClass(string $class): static
	{
		Html::removeCssClass($this->options, $class);
		return $this;
	}

	/**
	 * Shortcut for `removeCssClass()` function
	 * @see removeCssClass()
	 */
	public function rm(string $class): static
	{
		return $this->removeCssClass($class);
	}

	/**
	 * @param string $prefix
	 * @return static
	 */
	protected function removeCssClassPrefix(string $prefix): static
	{
		$classes = preg_split('/\s+/', trim((string)($this->options['class'] ?? ''))) ?: [];
		$classes = array_values(array_filter($classes, fn($c) => $c !== '' && strpos($c, $prefix) !== 0));
		$this->options['class'] = implode(' ', $classes);

		return $this;
	}

	// Internal API

	/**
	 * @param int $value range 1 to 6
	 * @throws \yii\base\InvalidConfigException
	 * @return static
	 */
	protected function applySizeCss(int $value): static
	{
		$valid = ($x >= 1 && $x <= 6);

		return $this->addCssClass(
			P2IconFactory::SIZE_PREFIX . '-' . $value,
			$valid, sprintf(
				'%s - invalid value. Use an integer between 1 and 6.',
				static::class . '::size()'
			)
		);
	}

	/**
	 * @param int $x = 1 range 1 to 10
	 * @return static
	 */
	protected function applyMultiplyCss(int $x = 1): static
	{
		$valid = ($x >= 1 && $x <= 10);

		return $this->removeCssClassPrefix('p2-icon-multiply-')->addCssClass(
			"p2-icon-multiply-{$x}x",
			$valid, sprintf(
				'%s - invalid value. Use an integer between 1 and 10.',
				static::class . '::multiply()'
			)
		);
	}

	/**
	 * Apply a Bootstrap colour utility class, eg "text-primary" or "bg-body-tertiary".
	 *
	 * @param string   $prefix  Usually 'text' or 'bg'
	 * @param string   $color   One of $colors (without prefix)
	 * @param string[] $colors  Allowed colour tokens (without prefix)
	 */
	protected function applyBootstrapColorCss(string $prefix, string $color, array $colors): static
	{
		$prefix = trim($prefix);
		$color  = trim($color);

		if ($prefix === '') {
			throw new InvalidConfigException(sprintf(
				'%s - invalid value. Prefix must be a non-empty string.',
				static::class . '::applyBootstrapColorCss()'
			));
		}

		$valid = ($color !== '') && in_array($color, $colors, true);
		$this->clearColorState($prefix);
		$class = $prefix . '-' . $color;

		return $this->addCssClass(
			$class,
			$valid,
			sprintf(
				'%s - invalid value. Use one of: %s.',
				static::class . '::color()',
				implode(', ', $colors)
			)
		);
	}

	/**
	 * Apply a named colour utility class
	 *
	 * @param string   $prefix  Usually 'text' or 'bg'
	 * @param string   $color   One of CSS_NAMED_COLORS (without prefix)
	 */
	protected function applyNamedColorCss(string $prefix, string $color): static
	{
		$prefix = trim($prefix);
		$color = strtolower(trim($color));

		$valid = ($color !== '') && in_array($color, self::CSS_NAMED_COLORS, true);

		$this->clearColorState($prefix);

		// add helper class
		$this->addCssClass(
			$prefix === 'bg' ? 'p2-color-bg' : 'p2-color-text',
			$valid,
			sprintf(
				'%s - invalid named colour. Use a CSS named colour.',
				static::class . '::namedColor()'
			)
		);

		// set CSS variable
		$style = (string)($this->options['style'] ?? '');
		$style = rtrim($style, " \t\n\r\0\x0B;");
		$this->options['style'] = trim($style . '; --p2-color: ' . $color . ';');

		return $this;
	}

	/**
	 * @param string $from
	 * @param string $to
	 * @return static
	 */
	protected function applyGradientCss(string $from, string $to): static
	{
		// gradient() / g()
	}

	/**
	 * @param string   $prefix  Usually 'text' or 'bg'
	 */
	protected function clearColorState(string $prefix): void
	{
		// kill bootstrap text-* / bg-* etc
		$this->removeCssClassPrefix($prefix . '-');

		// kill our named-color helpers
		$this->removeCssClassPrefix('p2-color-text');
		$this->removeCssClassPrefix('p2-color-bg');

		// if you want to remove the var too:
		// (optional) strip --p2-color from style; can do later if you care
	}

	/**
	 * @param string $name
	 * @param string $value
	 * @return static
	 */
	protected function setCssVar(string $name, string $value): static
	{
		$name = trim($name);
		$value = trim($value);

		if ($name === '' || $value === '') {
			throw new InvalidConfigException(static::class . " - invalid CSS var assignment.");
		}

		$style = (string)($this->options['style'] ?? '');
		$style = trim(rtrim($style, ';'));

		// append `;` only if needed
		$style = $style === '' ? '' : $style . '; ';
		$style .= "{$name}: {$value};";

		$this->options['style'] = $style;
		return $this;
	}

	/**
	 * @param bool $condition
	 * @param string $name
	 * @param string $value
	 * @return static
	 */
	protected function setCssVarIf(bool $condition, string $name, string $value): static
	{
		return $condition ? $this->setCssVar($name, $value) : $this;
	}

	// (Optional) convenience if you like:
	public function options(array $options): static
	{
		$this->options = array_merge($this->options, $options);
		return $this;
	}

	abstract public function __toString(): string;
}
