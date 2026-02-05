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

interface AccessibleInterface extends \Stringable
{
	public function focusable(bool $focusable = true): static;
	public function f(bool $focusable = true): static;
	public function ariaLabel(string $label, ?string $role = null): static;
	public function l(string $label, ?string $role = null): static;
	public function ariaRole(string $role): static;
	public function r(string $role): static;
	public function ariaHidden(bool $hidden = true): static;
	public function h(bool $hidden = true): static;
}
