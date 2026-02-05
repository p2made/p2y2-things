<?php
/**
 * P2PicsumImageCollection.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * Collection of Picsum images with bulk-transform helpers.
 *
 * @package p2made/p2y2-things
 * @class \p2m\internal\helpers\P2PicsumImageCollection
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use IteratorAggregate;
use ArrayIterator;
use Countable;
use yii\base\InvalidArgumentException;

class P2PicsumImageCollection implements IteratorAggregate, Countable
{
	/** @var P2PicsumImage[] */
	protected array $images = [];

	public function __construct(array $images)
	{
		foreach ($images as $img) {
			if (!$img instanceof P2PicsumImage) {
				throw new InvalidArgumentException(
					'P2PicsumImageCollection expects an array of P2PicsumImage objects.'
				);
			}
		}
		$this->images = $images;
	}

	public function getIterator(): ArrayIterator
	{
		return new ArrayIterator($this->images);
	}

	public function count(): int
	{
		return count($this->images);
	}

	public function c(): int
	{
		return $this->count();
	}

	/** @return P2PicsumImage[] */
	public function toArray(): array
	{
		return $this->images;
	}

	/** @return P2PicsumImage[] */
	public function a(): array
	{
		return $this->toArray();
	}

	public function grayscale(bool $on = true): self
	{
		foreach ($this->images as $img) {
			$img->grayscale($on);
		}
		return $this;
	}

	public function g(bool $on = true): self
	{
		return $this->grayscale($on);
	}

	public function blur(int|bool $blur = true): self
	{
		foreach ($this->images as $img) {
			$img->blur($blur);
		}
		return $this;
	}

	public function b(int|bool $blur = true): self
	{
		return $this->blur($blur);
	}

	public function jpg(bool $on = true): self
	{
		foreach ($this->images as $img) {
			$img->jpg($on);
		}
		return $this;
	}

	public function j(bool $on = true): self
	{
		return $this->jpg($on);
	}

	public function webp(bool $on = true): self
	{
		foreach ($this->images as $img) {
			$img->webp($on);
		}
		return $this;
	}

	public function w(bool $on = true): self
	{
		return $this->webp($on);
	}
}
