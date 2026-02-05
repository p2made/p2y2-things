<?php
/**
 * IconInterface.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @interface \p2m\internal\interfaces\IconInterface
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

interface IconInterface extends \Stringable
{
	public function id(string $id): static;
	public function title(string $title): static;
	public function t(string $title): static;
	public function focusable(bool $focusable = true): static;
	public function f(bool $focusable = true): static;
	public function tabIndex(int $index): static;
	public function i(int $index): static;
	public function data(string $name, string $value): static;
}
