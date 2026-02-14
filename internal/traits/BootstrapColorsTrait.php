<?php
/**
 * BootstrapColorsTrait.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @trait \p2m\internal\traits\BootstrapColorsTrait
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\traits;

trait BootstrapColorsTrait
{
	public function primary(bool $emphasis = false): static {
		return $this->color('primary' . ($emphasis ? '-emphasis' : ''));
	}
	public function secondary(bool $emphasis = false): static {
		return $this->color('secondary' . ($emphasis ? '-emphasis' : ''));
	}
	public function success(bool $emphasis = false): static {
		return $this->color('success' . ($emphasis ? '-emphasis' : ''));
	}
	public function danger(bool $emphasis = false): static {
		return $this->color('danger' . ($emphasis ? '-emphasis' : ''));
	}
	public function warning(bool $emphasis = false): static {
		return $this->color('warning' . ($emphasis ? '-emphasis' : ''));
	}
	public function info(bool $emphasis = false): static {
		return $this->color('info' . ($emphasis ? '-emphasis' : ''));
	}
	public function light(bool $emphasis = false): static {
		return $this->color('light' . ($emphasis ? '-emphasis' : ''));
	}
	public function dark(bool $emphasis = false): static {
		return $this->color('dark' . ($emphasis ? '-emphasis' : ''));
	}
	public function black(bool $fifty = false): static {
		return $this->color('black' . ($fifty ? '-50' : ''));
	}
	public function white(bool $fifty = false): static {
		return $this->color('white' . ($fifty ? '-50' : ''));
	}
}
