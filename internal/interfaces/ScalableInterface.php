<?php
/**
 * ScalableInterface.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @interface \p2m\internal\interfaces\ScalableInterface
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\interfaces;

interface ScalableInterface extends \Stringable
{
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
	 * Sets a Bootstrap size, 1 to 6
	 *
	 * @param int $value
	 * @return static
	 */
	public function size(int $value): static;
	public function s(int $value): static;

	/**
	 * Sets a size multiplier, 1 to 10, using p2 custom CSS
	 *
	 * @param int $x = 1
	 * @return static
	 */
	public function multiply(int $x = 1): static;
	public function x(int $x = 1): static;
}
