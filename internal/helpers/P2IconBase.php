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
	protected array $options = [];

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
	 * Convenience alias.
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
	 * Convenience alias.
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
	 * Convenience alias.
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

	/**
	 * @param int $value range 1 to 6
	 * @throws \yii\base\InvalidConfigException
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
	 * @param int $x = 1
	 * @return self
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

	// (Optional) convenience if you like:
	public function options(array $options): static
	{
		$this->options = array_merge($this->options, $options);
		return $this;
	}

	abstract public function __toString(): string;
}
