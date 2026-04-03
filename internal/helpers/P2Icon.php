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

use p2m\internal\interfaces\IconInterface;
use p2m\internal\interfaces\AccessibleInterface;
use p2m\internal\interfaces\ScalableInterface;

abstract class P2Icon extends P2IconBase
	implements IconInterface, AccessibleInterface, ScalableInterface
{
	/**
	 * @var array
	 * protected array $options = [];
	 */

	/**
	 * @param string $cssPrefix
	 * @param string $name
	 * @param array $options
	 */
	public function __construct(string $cssPrefix, ?string $name = null, array $options = [])
	{
		$this->options = array_merge(self::ARIA_DEFAULTS, $options);

		Html::addCssClass($this->options, $cssPrefix);

		if (!empty($name)) {
			Html::addCssClass($this->options, $cssPrefix . '-' . $name);
		}
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
	 * IconInterface functions
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
		$name = trim($name);

		return $this->addAttribute(
			'data-' . $name, $value,
			$name !== '' && preg_match('/^[A-Za-z0-9][A-Za-z0-9\-_:.]*$/', $name),
			sprintf('%s - invalid value. Data attribute name is invalid.', 'P2Icon::data()')
		);
	}

	/**
	 * AccessibleInterface functions
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
		$this->options['focusable'] = $focusable ? 'true' : 'false';
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
		return $this->addAttribute('tabindex', (string)$index);
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
	 * @param string|null $role Default P2IconFactory::ROLE_IMG. Use '' or null to not set role.
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function ariaLabel(string $label, ?string $role = P2IconFactory::ROLE_IMG): static
	{
		$label = trim($label);

		if ($label === '')
		{
			throw new InvalidConfigException(sprintf(
				'%s - invalid value. Label must be a non-empty string.',
				'P2Icon::ariaLabel()'
			));
		}

		$this->addAttribute('aria-label', $label);

		if ($role !== null && $role !== '') {
			$this->ariaRole($role);
		}

		return $this;
	}

	/**
	 * Shortcut for `ariaLabel()` function
	 * @see ariaLabel()
	 */
	public function l(string $label, ?string $role = P2IconFactory::ROLE_IMG): static
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
			P2IconFactory::ROLE_IMG,
			P2IconFactory::ROLE_PRESENTATION,
			P2IconFactory::ROLE_NONE,
			P2IconFactory::ROLE_BUTTON,
			P2IconFactory::ROLE_LINK,
			P2IconFactory::ROLE_STATUS,
			P2IconFactory::ROLE_ALERT,
			P2IconFactory::ROLE_NOTE,
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
	 * Shortcut for `ariaHidden()` function
	 * @see ariaHidden()
	 */
	public function h(bool $hidden = true): static
	{
		return $this->ariaHidden($hidden);
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
}
