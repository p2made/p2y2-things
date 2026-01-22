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

use yii\bootstrap5\Html;
use p2m\helpers\BI;

class P2Copyright
{
	protected string $author;
	protected string $year;
	protected string $homepage;

	public function __construct(string $author, string $year, string $homepage)
	{
		$this->author   = $author;
		$this->year     = $year;
		$this->homepage = $homepage;
	}

	public function __toString(): string
	{
		return $this->__html();
	}

	private function __html(): string
	{
		$label = Html::encode($this->author) . ', ' . Html::encode($this->year);

		$link = Html::a($label, $this->homepage, [
			'class' => 'link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover',
			'rel' => 'noopener noreferrer',
			'target' => '_blank',
		]);

		return BI::i('copyright')->c('danger') . ' ' . $link;
	}
}
