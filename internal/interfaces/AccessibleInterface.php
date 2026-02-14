<?php
/**
 * AccessibleInterface.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @interface \p2m\internal\interfaces\AccessibleInterface
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\interfaces;

interface AccessibleInterface extends \Stringable
{
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
	 * @return static
	 */
	public function focusable(bool $focusable = true): static;
	public function f(bool $focusable = true): static;

	/**
	 * @param int $index
	 * @return static
	 */
	public function tabIndex(int $index): static;
	public function i(int $index): static;

	/**
	 * @param string $label
	 * @param ?string $role = null
	 * @return static
	 */
	public function ariaLabel(string $label, ?string $role = null): static;
	public function l(string $label, ?string $role = null): static;

	/**
	 * @param string $role
	 * @return static
	 */
	public function ariaRole(string $role): static;
	public function r(string $role): static;

	/**
	 * @param bool $hidden = true
	 * @return static
	 */
	public function ariaHidden(bool $hidden = true): static;
	public function h(bool $hidden = true): static;
}
