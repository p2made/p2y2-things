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

final class P2IconBlock extends P2IconBase
{
	/**
	 * @var array
	 */
	//protected array $options = [];
	private P2Icon $icon;

	/**
	 * @param P2Icon $icon
	 * @param array $options = []
	 */
	public function __construct(P2Icon $icon, array $options = [])
	{
		$this->icon = $icon;
		$this->options = $options;

		Html::addCssClass($this->options, 'p2-icon-block');

		// Default: wrapper is decorative.
		$this->options['aria-hidden'] ??= 'true';

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

	// Icon-only proxies (fine)

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
	 * Convenience alias.
	 */
	public function t(string $title): static
	{
		return $this->title($title);
	}

	// Wrapper or icon

	/**
	 * @param integer $value range 1 to 6
	 * @param bool $onIcon = false
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function size(int $value, bool $onIcon = false): static
	{
		if ($onIcon) {
			$this->icon->size($value);
			return $this;
		}

		// For block “size” you probably *don’t* want 1..6; you want rem/px.
		// So I'd *not* overload size(). Use block() for wrapper size.
		return $this->applySizeCss($value);
	}

	/**
	 * Convenience alias.
	 */
	public function s(int $value, bool $onIcon = false): static
	{
		return $this->size($value, $onIcon);
	}

	/**
	 * @param int $x = 1
	 * @return self
	 */
	public function multiply(int $x = 1, bool $onIcon = false): static
	{
		if ($onIcon) {
			$this->icon->multiply($x);
			return $this;
		}
		return $this->applyMultiplyCss($x);
	}

	/**
	 * Convenience alias.
	 */
	public function x(int $x = 1, bool $onIcon = false): static
	{
		return $this->multiply($x, $onIcon);
	}

	// Semantics proxies: unhide wrapper so they can actually take effect

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
	 * Convenience alias.
	 */
	public function i(int $index): static
	{
		return $this->tabIndex($index);
	}

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
	 * Convenience alias.
	 */
	public function f(bool $focusable = true): static
	{
		return $this->focusable($focusable);
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
	 * Convenience alias.
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
	 * Convenience alias.
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
	 * Convenience alias.
	 */
	public function h(bool $hidden = true): static
	{
		return $this->ariaHidden($hidden);
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

	// Circle-specific styling helpers

	/**
	 * Convenience: perfect circle/pill.
	 */
	public function circle(): static
	{
		return $this->att('style', trim(rtrim((string)($this->options['style'] ?? ''), ';') . '; --p2-radius: 9999px;'), true);
		//return $this->radius('9999px');
	}

	public function primary(): static
	{
		$style = (string)($this->options['style'] ?? '');
		$style = rtrim($style, ';') . '; --p2-bg: var(--bs-primary); --p2-fg: #fff;';
		$this->options['style'] = trim($style);
		//$this->removeCssClass('is-dark');
		//$this->addCssClass('is-primary');
		return $this;
	}

	public function dark(): static
	{
		$style = (string)($this->options['style'] ?? '');
		$style = rtrim($style, ';') . '; --p2-bg: var(--bs-dark); --p2-fg: #fff;';
		$this->options['style'] = trim($style);
		//$this->removeCssClass('is-primary');
		//$this->addCssClass('is-dark');
		return $this;
	}

	// ---- shape helpers ----

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
	 * Border radius (e.g. '0', '.5rem', '12px', '9999px').
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
	 * Convenience: sharp corners.
	 */
	public function square(): static
	{
		return $this->radius('0');
	}

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
		return $this->icon;
	}

	/*
	 * still needed?
	protected function &optionsRef(): array
	{
		return $this->options;
	}
	 */
}
