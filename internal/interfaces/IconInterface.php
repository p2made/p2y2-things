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

namespace p2m\internal\interfaces;

interface IconInterface extends \Stringable
{
	/**
	 * IconInterface functions
	 *
	 * @see \p2m\internal\interfaces\IconInterface
	 *
	 * public function id(string $id): static;
	 * public function title(string $title): static;
	 * public function t(string $title): static;
	 * public function data(string $name, string $value): static;
	 */

	/**
	 * @param string $id
	 * @return static
	 */
	public function id(string $id): static;

	/**
	 * @param string $title
	 * @return static
	 */
	public function title(string $title): static;
	public function t(string $title): static;

	/**
	 * @param string $name
	 * @param string $value
	 * @return static
	 */
	public function data(string $name, string $value): static;
}
