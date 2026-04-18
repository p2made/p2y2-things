<?php
/**
 * ImageInterface.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @interface \p2m\internal\interfaces\ImageInterface
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\interfaces;

interface ImageInterface extends \Stringable
{
	/**
	 * ImageInterface functions
	 *
	 * @see \p2m\internal\interfaces\ImageInterface
	 *
	 * public function id(string $id): static;
	 * public function title(string $title): static;
	 * public function t(string $title): static;
	 * public function data(string $name, string $value): static;
	 */

	/**
	 * @param string $text
	 * @return static
	 */
	public function alt(string $text): static;

	/**
	 * @param string $src
	 * @return static
	 */
	public function src(string $src): static;

	/**
	 * @param int $w
	 * @param int $h
	 * @return static
	 */
	public function dimensions(int $w, int $h): static;

	/**
	 * @param int $w
	 * @return static
	 */
	public function width(int $w): static;

	/**
	 * @param int $h
	 * @return static
	 */
	public function height(int $h): static;
}
