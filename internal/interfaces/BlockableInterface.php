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

namespace p2m\internal\interfaces;

interface BlockableInterface extends \Stringable
{
	/**
	 * BlockableInterface functions
	 *
	 * @see \p2m\internal\interfaces\BlockableInterface
	 *
	 * public function block(string): static
	 * public function b(string $radius): static
	 * public function radius(string): static
	 * public function d(string $radius): static
	 * public function gradient(string $from, string $to): static
	 * public function g(string $from, string $to): static
	 */

	/**
	 * Changes radius on a block to give a rounded rectangle.
	 *
	 * @param int $radius
	 * @return static
	 */
	public function radius(string $radius): static;
	public function d(string $radius): static;

	/**
	 * Changes radius on a block to give a rounded square.
	 *
	 * @param string $radius
	 * @return static
	 */
	public function radius(string $radius): static;
	public function d(string $radius): static;

	/**
	 * Colorable functions only appliciable to blocks
	 *
	 * @param string $from
	 * @param string $to
	 * @return static
	 */
	public function gradient(string $from, string $to): static;
	public function g(string $from, string $to): static;

	/**
	 * Set block size (e.g. '5rem', '64px'). This is the wrapper size, not icon size.
	 */
	public function block(string $size): static
}
