<?php
/**
 * P2Image.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\internal\helpers\P2Image
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use yii\bootstrap5\Html;
use yii\helpers\ArrayHelper;

use p2m\internal\interfaces\ImageInterface;

abstract class P2Image extends P2Icon
	implements ImageInterface
{
	/**
	 * @var array
	 * protected array $options = [];
	 */

	protected static string $fileUrl;

	protected static array $ariaDefaults = [
		'aria-hidden' => 'false',
		'focusable'   => 'false',
	];

	/**
	 * @param string $cssPrefix
	 * @param string $src
	 * @param ?string $name
	 * @param array $options
	 */
	public function __construct(string $cssPrefix, string $sizePrefix, string $src, ?string $name = null, array $options = [])
	{
		$this->cssPrefix  = $cssPrefix;
		$this->sizePrefix = $cssPrefix;

		$options['alt'] ??= '';

		$this->options = array_merge(static::$ariaDefaults, $options);
		$this->options['src'] = $src;

		Html::addCssClass($this->options, $cssPrefix);

		if (!empty($name)) {
			Html::addCssClass($this->options, $cssPrefix . '-' . $name);
		}
	}

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		$options = $this->options;
		$tag = ArrayHelper::remove($options, 'tag', 'img');

		return Html::tag($tag, '', $options);
	}

	/**
	 * @param string $alt
	 * @return static
	 */
	public function alt(string $text): static
	{
		$this->options['alt'] = $text;
		return $this;
	}

	/**
	 * @param string $src
	 * @return static
	 */
	public function src(string $src): static
	{
		$this->options['src'] = $src;
		return $this;
	}

	/**
	 * @param string $dimensions
	 * @return static
	 */
	public function dimensions(int $w, int $h): static
	{
		$this->options['width'] = $w;
		$this->options['height'] = $h;
		return $this;
	}

	public function dim(int $w, int $h): static
	{
		return $this->dimensions($w, $h);
	}


	/**
	 * @param string $height
	 * @return static
	 */
	public function height(int $h): static
	{
		$this->options['height'] = $h;
		return $this;
	}

	/**
	 * @param string $width
	 * @return static
	 */
	public function width(int $w): static
	{
		$this->options['width'] = $w;
		return $this;
	}
}
