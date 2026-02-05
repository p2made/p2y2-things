<?php
/**
 * BlockableInterface.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @interface \p2m\internal\interfaces\BlockableInterface
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

interface BlockableInterface extends \Stringable
{
	public function circle(): static;
	public function block(string $size): static;
	public function radius(string $radius): static;
	public function square(): static;
}
