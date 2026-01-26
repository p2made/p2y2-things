<?php
/**
 * P2Copyright.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-things
 * @class \p2m\internal\components\P2Copyright
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\components;

use Yii;
use yii\bootstrap5\Html;
use yii\base\InvalidArgumentException;
use p2m\helpers\BI;

class P2Copyright
{
	private const AUTHOR        = 'author';
	private const YEAR          = 'year';

	private const TITLE         = 'title';
	private const ORG           = 'org';
	private const OWNER         = 'owner';

	private const URL           = 'url';
	private const PAGE          = 'page';
	private const EMAIL         = 'email';

	private const ITEM          = 'item';
	private const TYPE          = 'type';

	private const LICENSE       = 'license';
	private const LICENSEURL    = 'licenseUrl';
	private const COPYRIGHT     = 'copyright';
	private const NOTICE        = 'notice';

	private const CONTRIBUTORS  = 'contributors';
	private const JURISDICTION  = 'jurisdiction';

	private const UNLICENSED    = 'unlicensed';
	private const PROPRIETARY   = 'proprietary';
	private const PUBLIC_DOMAIN = 'public-domain';

	// Mandatory
	private string  $author;
	private string  $year;

	// Identity
	private ?string $title = null;
	private ?string $org = null;
	private ?string $owner = null;

	// Attribution
	private ?string $url = null;
	private ?string $page = null;
	private ?string $email = null;

	// Classification
	private ?string $item = null;
	private ?string $type = null;

	// Legal
	private ?string $license = null;
	private ?string $licenseUrl = null;
	private ?string $copyright = null;
	private ?string $notice = null;

	// Optional future
	private array   $contributors = [];
	private ?string $jurisdiction = null;

	private string  $output = self::COPYRIGHT;
	private array   $linkOptions = [];
	private array   $iconOptions = [];

	private static array $standardLicences = [
		// Permissive
		'MIT'          => 'https://opensource.org/licenses/MIT',
		'BSD-2-Clause' => 'https://opensource.org/licenses/BSD-2-Clause',
		'BSD-3-Clause' => 'https://opensource.org/licenses/BSD-3-Clause',
		'ISC'          => 'https://opensource.org/licenses/ISC',
		'Apache-2.0'   => 'https://www.apache.org/licenses/LICENSE-2.0',
		'Zlib'         => 'https://opensource.org/licenses/Zlib',

		// Copyleft
		'GPL-2.0'      => 'https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html',
		'GPL-3.0'      => 'https://www.gnu.org/licenses/gpl-3.0.en.html',
		'LGPL-2.1'     => 'https://www.gnu.org/licenses/old-licenses/lgpl-2.1.en.html',
		'LGPL-3.0'     => 'https://www.gnu.org/licenses/lgpl-3.0.en.html',
		'AGPL-3.0'     => 'https://www.gnu.org/licenses/agpl-3.0.en.html',

		// Creative Commons (common in content projects)
		'CC-BY-4.0'    => 'https://creativecommons.org/licenses/by/4.0/',
		'CC-BY-SA-4.0' => 'https://creativecommons.org/licenses/by-sa/4.0/',
		'CC0-1.0'      => 'https://creativecommons.org/publicdomain/zero/1.0/',

		// Public domain-ish
		'Unlicense' => 'https://unlicense.org/',
	];

	public function __construct(array $copyright)
	{
		$this->author = $copyright[self::AUTHOR];
		$this->year   = $copyright[self::YEAR];

		// Optional string fields
		$this->__setIfPresent($copyright, self::TITLE,      self::TITLE);
		$this->__setIfPresent($copyright, self::ORG,        self::ORG);
		$this->__setIfPresent($copyright, self::OWNER,      self::OWNER);

		$this->__setIfPresent($copyright, self::URL,        self::URL);
		$this->__setIfPresent($copyright, self::PAGE,       self::PAGE);
		$this->__setIfPresent($copyright, self::EMAIL,      self::EMAIL);

		$this->__setIfPresent($copyright, self::ITEM,       self::ITEM);
		$this->__setIfPresent($copyright, self::TYPE,       self::TYPE);

		$this->__setIfPresent($copyright, self::LICENSE,    self::LICENSE);
		$this->__setIfPresent($copyright, self::LICENSEURL, self::LICENSEURL);
		$this->__setIfPresent($copyright, self::COPYRIGHT,  self::COPYRIGHT);
		$this->__setIfPresent($copyright, self::NOTICE,     self::NOTICE);

		// Optional future
		if (isset($copyright[self::CONTRIBUTORS]) && is_array($copyright[self::CONTRIBUTORS])) {
			$this->contributors = $copyright[self::CONTRIBUTORS];
		}

		if (isset($copyright[self::JURISDICTION])) {
			$jur = trim((string)$copyright[self::JURISDICTION]);
			$this->jurisdiction = ($jur === '') ? null : $jur;
		}
	}

	public function __toString(): string
	{
		try {
			switch ($this->output) {
				case self::COPYRIGHT:
					return $this->__htmlOut(
						$this->__owner() . ', ' . Html::encode($this->year),
						$this->url,
						$this->__copyrightIcon()
					);

				case self::LICENSE:
					return $this->__htmlOut(
						Yii::t('p2m.things', 'Licence') . ', ' . Html::encode((string)$this->license),
						$this->licenseUrl,
						$this->__licenceIcon()
					);

				default:
					return 'P2Copyright invalid output';
			}
		} catch (\Throwable $e) {
			\Yii::error($e, 'p2m.things.copyright');

			if (defined('YII_DEBUG') && YII_DEBUG) {
				return 'P2Copyright render error: ' . $e->getMessage();
			}

			return 'P2Copyright render error';
		}
	}

	private function __owner(): string
	{
		$owner = '';

		if ($this->owner !== null && $this->owner !== '') {
			$owner = $this->owner;
		}
		elseif ($this->org !== null && $this->org !== '') {
			$owner = $this->org;
		}
		else {
			$owner = $this->author;
		}

		return Html::encode($owner);
	}

	private function __htmlOut(string $label, ?string $url, $icon, array $options = []): string
	{
		//$options ??= $this->linkOptions;
		$output = $label;

		if ($url !== null && $url !== '') {
			$output = Html::a($label, $url, $options);
		}

		return $icon . ' ' . $output;
	}

	private function __copyrightIcon(array $options = [])
	{
		return $this->__icon('c-circle', $options);
		/**
		 * Alternative icons...
		 * c-circle-fill
		 * c-square
		 * c-square-fill
		 */
	}

	private function __licenceIcon(array $options = [])
	{
		return $this->__icon('file-earmark-text', $options);
		/**
		 * Alternative icons...
		 * file-earmark
		 * file-earmark-fill
		 * file-earmark-text-fill
		 */
	}

	private function __icon(string $icon, array $options = [])
	{
		$bi = BI::i($icon);

		// Later: apply $options to $bi (mapping layer)
		// e.g. size, colour, aria-label, class, etc.

		return $bi;
	}

	private function __setIfPresent(array $data, string $key, string $property): void
	{
		if (!array_key_exists($key, $data) || $data[$key] === null) {
			return;
		}

		$value = trim((string)$data[$key]);
		if ($value === '') {
			return;
		}

		$this->{$property} = $value;
	}

	public function __copyright(): self
	{
		$this->output = self::COPYRIGHT;
		return $this;
	}

	public function license(): self
	{
		if ($this->license === null || $this->license === '') {
			throw new InvalidArgumentException('P2Copyright::license() requires a non-empty "license".');
		}

		$this->output = self::LICENSE;
		return $this;
	}

	public function l(): self
	{
		return $this->license();
	}
}
