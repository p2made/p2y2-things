<?php
/**
 * P2PicsumImage.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * Picsum image builder.
 *
 * @package p2made/p2y2-things
 * @class \p2m\internal\helpers\P2PicsumImage
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use yii\bootstrap5\Html;
use yii\base\InvalidArgumentException;

class P2PicsumImage
{
	private const PICSUM_URL = 'https://picsum.photos/';
	private const JPG        = 'jpg';
	private const WEBP       = 'webp';
	private const GRAYSCALE  = 'grayscale';
	private const BLUR       = 'blur';
	private const RANDOM     = 'random';

	protected ?string $dimensions   = null;
	protected ?array  $options      = null;
	protected ?string $idSeed       = null;
	protected ?string $extension    = null;
	protected bool    $allowRandom  = false;
	protected array   $query        = [];

	public function __construct(int $width, ?int $height = null, ?array $options = null)
	{
		// the checks are done in size()

		$this->size($width, $height);
		$this->options($options);
	}

	public function __toString(): string
	{
		if ($this->options === null) {
			return $this->__url();
		}

		return $this->__img();
	}

	/**
	 * Enable internal random modifier (factory use only).
	 *
	 * @internal
	 */
	public function __allowRandomFromFactory(bool $on = true): self
	{
		$this->allowRandom = $on;
		return $this;
	}

	/**
	 * Set the `random` query parameter (factory use only).
	 *
	 * @internal
	 */
	public function __randomFromFactory(int $index): self
	{
		if (!$this->allowRandom) {
			throw new InvalidArgumentException(
				'P2PicsumImage::__randomFromFactory() is internal; use P2PicsumImageFactory::random()/r().'
			);
		}

		$this->allowRandom = false;

		if ($index < 1) {
			throw new InvalidArgumentException(
				'P2PicsumImage::__randomFromFactory() requires $index to be > 0.'
			);
		}

		$this->query[self::RANDOM] = $index;
		$this->idSeed = null;

		return $this;
	}

	private function __url(): string
	{
		if ($this->dimensions === null) {
			throw new InvalidArgumentException('P2PicsumImage has no dimensions set.');
		}

		$urlOut = self::PICSUM_URL;

		if ($this->idSeed !== null) {
			$urlOut .= $this->idSeed;
		}

		$urlOut .= $this->dimensions;

		if ($this->extension !== null) {
			$urlOut .= '.' . $this->extension;
		}

		if (!empty($this->query))
		{
			$urlOut .= '?' . http_build_query($this->query);
		}

		return $urlOut;
	}

	private function __img(): string
	{
		$options = $this->options ?? [];
		$options['alt'] ??= '';

		return Html::img($this->__url(), $options);
	}

	public function size(int $width, ?int $height = null): self
	{
		// Do the checks on $width & $height
		if ($width < 1) {
			throw new InvalidArgumentException('P2PicsumImage::size() requires width to be >= 1.');
		}

		if ($height !== null && $height < 1) {
			throw new InvalidArgumentException('P2PicsumImage::size() requires height to be >= 1 when provided.');
		}

		$this->dimensions = (string)$width;

		if ($height !== null) {
			$this->dimensions .= '/' . (string)$height;
		}

		return $this;
	}

	public function options(?array $options = null): self
	{
		if (!is_array($options) && $options !== null) {
			throw new InvalidArgumentException(
				'P2PicsumImage::options() requires an array or null.'
			);
		}

		$this->options = $options;
		return $this;
	}

	public function o(?array $options = null): self
	{
		return $this->options($options);
	}

	public function id(?int $id): self
	{
		if ($id !== null && $id < 1) {
			throw new InvalidArgumentException('P2PicsumImage::id() requires id to be > 0.');
		}

		if ($id === null) {
			$this->idSeed = null;
			return $this;
		}

		$this->idSeed = 'id/' . (string)$id . '/';
		unset($this->query[self::RANDOM]);

		return $this;
	}

	public function seed(?string $seed): self
	{
		$seed = ($seed === null) ? null : trim($seed);

		if ($seed === null || $seed === '') {
			$this->idSeed = null;
			return $this;
		}

		$this->idSeed = 'seed/' . rawurlencode($seed) . '/';
		unset($this->query[self::RANDOM]);

		return $this;
	}

	public function s(?string $seed): self
	{
		return $this->seed($seed);
	}

	public function grayscale(bool $on = true): self
	{
		if ($on === true) {
			$this->query[self::GRAYSCALE] = 1;
		}
		else {
			unset($this->query[self::GRAYSCALE]);
		}

		return $this;
	}

	public function g(bool $on = true): self
	{
		return $this->grayscale($on);
	}

	public function blur(int|bool $blur = true): self
	{
		if ($blur === false) {
			unset($this->query[self::BLUR]);
			return $this;
		}

		if ($blur === true) {
			$this->query[self::BLUR] = 1;
			return $this;
		}

		if ($blur < 1 || $blur > 10) {
			throw new InvalidArgumentException('P2PicsumImage::blur() requires an integer >= 1 and <= 10, or false to disable.');
		}

		$this->query[self::BLUR] = $blur;
		return $this;
	}

	public function b(int|bool $blur = true): self
	{
		return $this->blur($blur);
	}

	public function jpg(bool $on = true): self
	{
		$this->extension = $on === true ? self::JPG : null;
		return $this;
	}

	public function j(bool $on = true): self
	{
		return $this->jpg($on);
	}

	public function webp(bool $on = true): self
	{
		$this->extension = $on === true ? self::WEBP : null;
		return $this;
	}

	public function w(bool $on = true): self
	{
		return $this->webp($on);
	}
}
