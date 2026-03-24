<?php
/**
 * ColorableInterface.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @interface \p2m\internal\interfaces\ColorableInterface
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\interfaces;

interface ColorableInterface extends \Stringable
{
	/**
	 * ColorableInterface functions
	 *
	 * @see \p2m\internal\interfaces\ColorableInterface
	 *
	 * public function color(string $color): static
	 * public function c(string $color): static
	 * public function namedColor(string $color): static;
	 * public function n(string $color): static;
	 */

	/**
	 * @param string $color
	 * @param bool $option = false
	 * @return static
	 *
	 * $option = true adds '-emphasis' or '-50' to Bootstrap colors that accept them
	 */
	public function color(string $color): static;
	public function c(string $color): static;

	/**
	 * @param string $color
	 * @return static
	 */
	public function namedColor(string $color): static;
	public function n(string $color): static;
}
