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

interface ScalableInterface extends \Stringable
{
	public function size(int $value): static;
	public function s(int $value): static;
	public function multiply(int $x = 1): static;
	public function x(int $x = 1): static;
}
