<?php
/**
 * P2Icon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\internal\helpers\P2Icon
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use yii\bootstrap5\Html;
use yii\helpers\ArrayHelper;

abstract class P2Icon extends P2IconBase
{
	/**
	 * @var array
	 */
	//protected array $options = [];

	/**
	 * @param string $cssPrefix
	 * @param string $name
	 * @param array $options
	 */
	public function __construct(string $cssPrefix, ?string $name = null, array $options = [])
	{
		Html::addCssClass($options, $cssPrefix);

		if (!empty($name)) {
			Html::addCssClass($options, $cssPrefix . '-' . $name);
		}

		$ariaDefaults = [
			'aria-hidden' => 'true',
			'focusable'   => 'false',
		];

		$this->options = array_merge($ariaDefaults, $options);
	}

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		$options = $this->options;
		$tag = ArrayHelper::remove($options, 'tag', 'i');

		return Html::tag($tag, null, $options);
	}

	/**
	 * @param string $id
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function id(string $id, bool $throw = true): static
	{
		$id = trim($id);

		if ($id === '') {
			if ($throw) {
				throw new InvalidArgumentException('ID must be a non-empty string.');
			}
			return $this;
		}

		$this->options['id'] = $id;
		return $this;
	}

	/**
	 * @param string $title
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function title(string $title): static
	{
		$title = trim($title);

		return $this->addAttribute(
			'title', $title, $title !== '',
			sprintf('%s - invalid value. Title must be a non-empty string.', 'P2Icon::title()')
		);
	}

	/**
	 * Convenience alias.
	 */
	public function t(string $title): static
	{
		return $this->title($title);
	}

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
	 * Convenience alias.
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
	 * Convenience alias.
	 */
	public function x(int $x = 1): static
	{
		return $this->multiply($x);
	}

	/**
	 * @param int $index
	 * @return self
	 */
	public function tabIndex(int $index): static
	{
		return $this->addAttribute('tabindex', (string)$index);
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
		$this->options['focusable'] = $focusable ? 'true' : 'false';
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
		$label = trim($label);

		if ($label === '')
		{
			throw new InvalidConfigException(sprintf(
				'%s - invalid value. Label must be a non-empty string.',
				'P2Icon::ariaLabel()'
			));
		}

		$this->addAttribute('aria-label', $label)
			->exposeToAT();

		if ($role !== null && $role !== '') {
			$this->ariaRole($role);
		}

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
		$role = strtolower(trim($role));

		$roles = [
			P2IconFactory::IMG,
			P2IconFactory::PRESENTATION,
			P2IconFactory::NONE,
			P2IconFactory::BUTTON,
			P2IconFactory::LINK,
			P2IconFactory::STATUS,
			P2IconFactory::ALERT,
			P2IconFactory::NOTE,
		];

		return $this->addAttribute(
			'role', $role,
			in_array($role, $roles, true),
			sprintf(
				'%s - invalid value. Use one of: %s.',
				'P2Icon::ariaRole()',
				implode(', ', $roles)
			)
		);
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
		if ($hidden) {
			$this->options['aria-hidden'] = 'true';
			return $this;
		}
		else {
			unset($this->options['aria-hidden']);
			return $this;
		}
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
		$name = trim($name);

		return $this->addAttribute(
			'data-' . $name, $value,
			$name !== '' && preg_match('/^[A-Za-z0-9][A-Za-z0-9\-_:.]*$/', $name),
			sprintf('%s - invalid value. Data attribute name is invalid.', 'P2Icon::data()')
		);
	}
}
