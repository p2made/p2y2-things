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

interface ColorableInterface extends \Stringable
{
	public function color(string $color): self;
	public function c(string $color): self;
	public function primary(): static;
	public function dark(): static;
	// further color presets
}
