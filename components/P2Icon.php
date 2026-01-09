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
 * @class \p2m\components\P2Icon
 * @package p2made/yii2-p2y2
 */

namespace p2m\components;

use p2m\components\P2Icons;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class P2Icon
{
	/**
	 * @var array
	 */
	private $options = [];

	/**
	 * @param string $cssPrefix
	 * @param string $name
	 * @param array $options
	 */
	public function __construct($cssPrefix, $name, $options = [])
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
	public function __toString() :string
	{
		$options = $this->options;

		$tag = ArrayHelper::remove($options, 'tag', 'i');

		return Html::tag($tag, null, $options);
	}

	/**
	 * @param integer $value range 1 to 6
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function size(int $value): self
	{
		return $this->addCssClass(
			P2Icons::SIZE_PREFIX . '-' . $value,
			in_array($value, range(1, 6), true),
			sprintf(
				'%s - invalid value. Use an integer between 1 and 6.',
				'P2Icons::size()',
				implode(', ', range(1, 6))
			)
		);
	}

	/**
	 * Convenience alias.
	 */
	public function s(int $value): self
	{
		return $this->size($value);
	}

	/**
	 * @param string $label
	 * @param string|null $role Default P2Icons::IMG. Use '' or null to not set role.
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function ariaLabel(string $label, ?string $role = P2Icons::IMG): self
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
	public function l(string $label, ?string $role = P2Icons::IMG): self
	{
		return $this->ariaLabel($label, $role);
	}

	/**
	 * @param string $role
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function ariaRole(string $role): self
	{
		$role = strtolower(trim($role));

		$roles = [
			P2Icons::IMG,
			P2Icons::PRESENTATION,
			P2Icons::NONE,
			P2Icons::BUTTON,
			P2Icons::LINK,
			P2Icons::STATUS,
			P2Icons::ALERT,
			P2Icons::NOTE,
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
	public function r(string $role): self
	{
		return $this->ariaRole($role);
	}

	/**
	 * @param string $title
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function title(string $title): self
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
	public function t(string $title): self
	{
		return $this->title($title);
	}

	/**
	 * @param int $index
	 * @return self
	 */
	public function tabIndex(int $index): self
	{
		return $this->addAttribute('tabindex', (string)$index);
	}

	/**
	 * Convenience alias.
	 */
	public function i(int $index): self
	{
		return $this->tabIndex($index);
	}

	/**
	 * @param bool $focusable = true
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function focusable(bool $focusable = true): self
	{
		$this->options['focusable'] = $focusable ? 'true' : 'false';
		return $this;
	}

	/**
	 * Convenience alias.
	 */
	public function f(bool $focusable = true): self
	{
		return $this->focusable($focusable);
	}

	/**
	 * Force aria-hidden state.
	 *
	 * @param bool $hidden
	 * @return self
	 */
	public function ariaHidden(bool $hidden = true): self
	{
		if ($hidden) {
			$this->hideFromAT();
		}
		else {
			$this->exposeToAT();
		}

		return $this;
	}

	public function hideFromAT(): self
	{
		$this->options['aria-hidden'] = 'true';
		return $this;
	}

	public function exposeToAT(): self
	{
		unset($this->options['aria-hidden']);
		return $this;
	}

	/**
	 * Convenience alias.
	 */
	public function h(bool $hidden = true): self
	{
		return $this->ariaHidden($hidden);
	}

	/**
	 * @param string $id
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function id(string $id): self
	{
		$id = trim($id);

		return $this->addAttribute(
			'id', $id, $id !== '',
			sprintf('%s - invalid value. ID must be a non-empty string.', 'P2Icon::id()')
		);
	}

	/**
	 * @param string $name
	 * @param string $value
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function data(string $name, string $value): self
	{
		$name = trim($name);

		return $this->addAttribute(
			'data-' . $name, $value,
			$name !== '' && preg_match('/^[A-Za-z0-9][A-Za-z0-9\-_:.]*$/', $name),
			sprintf('%s - invalid value. Data attribute name is invalid.', 'P2Icon::data()')
		);
	}

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return \p2m\icons\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 * @codeCoverageIgnore
	 */
	public function addCssClass($class, $condition = true, $throw = false): self
	{
		if ($condition === false) {
			if (!empty($throw)) {
				$message = !is_string($throw)
					? 'Condition is false'
					: $throw;

				throw new InvalidConfigException($message);
			}
		} else {
			Html::addCssClass($this->options, $class);
		}

		return $this;
	}

	/**
	 * Convenience alias.
	 */
	public function css($class, $condition = true, $throw = false): self
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
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function addAttribute(string $name, string $value, bool $condition = true, $throw = false): self
	{
		if ($condition === false) {
			if (!empty($throw)) {
				$message = !is_string($throw)
					? 'Condition is false'
					: $throw;

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
	public function att(string $name, string $value, bool $condition = true, $throw = false): self
	{
		return $this->addAttribute($name, $value, $condition, $throw);
	}
}
