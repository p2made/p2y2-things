<?php
final class P2BootstrapIcon extends P2Icon
{
	public function __construct(string $cssPrefix, string $name, array $options = [])
	public function color(string $color): self
	public function c(string $color): self
}
final class P2EmojiIcon extends P2Icon
{
	public function __construct(string $cssPrefix, string $name, array $options = [])
}
final class P2FlagIcon extends P2Icon
{
	public function __construct(string $cssPrefix, string $name, array $options = [])
	public function square(bool $enable = true): self
	public function sq(bool $enable = true): self
}
abstract class P2Icon extends P2IconBase
{
	public function __construct(string $cssPrefix, ?string $name = null, array $options = [])
	public function __toString(): string
	public function id(string $id, bool $throw = true): static
	public function title(string $title): static
	public function t(string $title): static
	public function size(int $value): static
	public function s(int $value): static
	public function multiply(int $x = 1): static
	public function x(int $x = 1): static
	public function tabIndex(int $index): static
	public function i(int $index): static
	public function focusable(bool $focusable = true): static
	public function f(bool $focusable = true): static
	public function ariaLabel(string $label, ?string $role = P2IconFactory::IMG): static
	public function l(string $label, ?string $role = P2IconFactory::IMG): static
	public function ariaRole(string $role): static
	public function r(string $role): static
	public function ariaHidden(bool $hidden = true): static
	public function h(bool $hidden = true): static
	public function data(string $name, string $value): static
}
abstract class P2IconBase
{
	protected array $options = [];

	public function addCssClass($class, $condition = true, $throw = false): static
	public function css($class, $condition = true, $throw = false): static
	public function addAttribute(string $name, string $value, bool $condition = true, $throw = false): static
	public function att(string $name, string $value, bool $condition = true, $throw = false): static
	public function removeCssClass(string $class): static
	public function rm(string $class): static
	protected function removeCssClassPrefix(string $prefix): static
	protected function applySizeCss(int $value): static
	protected function applyMultiplyCss(int $x = 1): static
	public function options(array $options): static
	abstract public function __toString(): string;
}
final class P2IconBlock extends P2IconBase
{
	private P2Icon $icon;

	public function __construct(P2Icon $icon, array $options = [])
	public function __toString(): string
	public function id(string $id): static
	public function title(string $title): static
	public function t(string $title): static
	public function size(int $value, bool $onIcon = false): static
	public function s(int $value, bool $onIcon = false): static
	public function multiply(int $x = 1, bool $onIcon = false): static
	public function x(int $x = 1, bool $onIcon = false): static
	public function tabIndex(int $index): static
	public function i(int $index): static
	public function focusable(bool $focusable = true): static
	public function f(bool $focusable = true): static
	public function ariaLabel(string $label, ?string $role = P2IconFactory::IMG): static
	public function l(string $label, ?string $role = P2IconFactory::IMG): static
	public function ariaRole(string $role): static
	public function r(string $role): static
	public function ariaHidden(bool $hidden = true): static
	public function h(bool $hidden = true): static
	public function data(string $name, string $value): static
	public function circle(): static
	public function primary(): static
	public function dark(): static
	public function block(string $size): static
	public function radius(string $radius): static
	public function square(): static
	public function options(array $options): static
	private function unhideWrapper(): void
	public function icon(): P2Icon
}
abstract class P2IconFactory
{
	protected static string $cssPrefix;
	public static string $textPrefix = 'text';
	public static function icon(string $name, $options = [])
	public static function i($name, $options = [])
	public static function i($name, $options = [])
	public static function circle(P2Icon $icon, string $label, array $options = [])
	public static function c(P2Icon $icon, string $label, array $options = [])
}
