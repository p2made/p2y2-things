# P2Icons Functions & Inheritance Map

```tree
@p2m
├─ Icons
│  ├─ @p2m\internal\helpers\P2IconBase
│  │  │  ├─ applySizeCss(int $value): static
│  │  │  ├─ applyMultiplyCss(int $x = 1): static
│  │  │  ├─ applyColorCss(string $color): static
│  │  │  ├─ applyGradientCss(string $from, string $to): static
│  │  │  ├─ applyBootstrapColorCss(string $color, bool $option = false): static
│  │  │  ├─ applyNamedColorCss(string $color): static
│  │  │  ├─ applyRgbColorCss(string|bool $color): static
│  │  │  ├─ addCssClass($class, $condition = true, $throw = false): static
│  │  │  ├─ css($class, $condition = true, $throw = false): static
│  │  │  ├─ addAttribute(string $name, string $value, bool $condition = true, $throw = false): static
│  │  │  ├─ att(string $name, string $value, bool $condition = true, $throw = false): static
│  │  │  ├─ removeCssClass(string $class): static
│  │  │  ├─ rm(string $class): static
│  │  │  ├─ removeCssClassPrefix(string $prefix): static
│  │  │  ├─ setCssVar(string $name, string $value): static
│  │  │  ├─ setCssVarIf(bool $condition, string $name, string $value): static
│  │  │  ├─ normalizeToCssRgb(string|array $color): string
│  │  │  ├─ options(array $options): static
│  │  │  └─ abstract public function __toString(): string;
│  │  ├─ @p2m\internal\helpers\P2Icon
│  │  │  │  ├─ id(string $id): static
│  │  │  │  ├─ title(string $title): static
│  │  │  │  ├─ t(string $title): static
│  │  │  │  ├─ data(string $name, string $value): static
│  │  │  │  ├─ focusable(bool $focusable = true): static
│  │  │  │  ├─ f(bool $focusable = true): static
│  │  │  │  ├─ tabIndex(int $index): static
│  │  │  │  ├─ i(int $index): static
│  │  │  │  ├─ ariaLabel(string $label, ?string $role = P2IconFactory::IMG): static
│  │  │  │  ├─ l(string $label, ?string $role = P2IconFactory::IMG): static
│  │  │  │  ├─ ariaRole(string $role): static
│  │  │  │  ├─ r(string $role): static
│  │  │  │  ├─ ariaHidden(bool $hidden = true): static
│  │  │  │  ├─ h(bool $hidden = true): static
│  │  │  │  ├─ size(int $value): static
│  │  │  │  ├─ s(int $value): static
│  │  │  │  ├─ multiply(int $x = 1): static
│  │  │  │  └─ x(int $x = 1): static
│  │  │  ├─ @p2m\internal\helpers\P2BootstrapIcon
│  │  │  │     ├─ color(string $color): static
│  │  │  │     ├─ c(string $color): static
│  │  │  │     ├─ gradient(string $from, string $to): static
│  │  │  │     ├─ g(string $from, string $to): static
│  │  │  │     ├─ bootstrapColor(string $color): static
│  │  │  │     ├─ b(string $color): static
│  │  │  │     ├─ namedColor(string $color): static
│  │  │  │     ├─ n(string $color): static
│  │  │  │     ├─ rgbColor(string|array $color): static
│  │  │  │     └─ rgb(string|array $color): static
│  │  │  ├─ @p2m\internal\helpers\P2EmojiIcon
│  │  │  └─ @p2m\internal\helpers\P2FlagIcon
│  │  │        ├─ square(bool $enable = true): self
│  │  │        └─ sq(bool $enable = true): self
│  │  └─ @p2m\internal\helpers\P2IconBlock
│  │        ├─ id(string $id): static
│  │        ├─ title(string $title): static
│  │        ├─ t(string $title): static
│  │        ├─ data(string $name, string $value): static
│  │        ├─ focusable(bool $focusable = true): static
│  │        ├─ f(bool $focusable = true): static
│  │        ├─ tabIndex(int $index): static
│  │        ├─ i(int $index): static
│  │        ├─ ariaLabel(string $label, ?string $role = P2IconFactory::IMG): static
│  │        ├─ l(string $label, ?string $role = P2IconFactory::IMG): static
│  │        ├─ ariaRole(string $role): static
│  │        ├─ r(string $role): static
│  │        ├─ ariaHidden(bool $hidden = true): static
│  │        ├─ h(bool $hidden = true): static
│  │        ├─ color(string $color, bool $onIcon = false): static
│  │        ├─ c(string $color, bool $onIcon = false): static
│  │        ├─ gradient(string $from, string $to, bool $onIcon = false): static
│  │        ├─ g(string $from, string $to, bool $onIcon = false): static
│  │        ├─ bootstrapColor(string $color, bool $onIcon = false): static
│  │        ├─ b(string $color, bool $onIcon = false): static
│  │        ├─ namedColor(string $color, bool $onIcon = false): static
│  │        ├─ n(string $color, bool $onIcon = false): static
│  │        ├─ rgbColor(string|array $color, bool $onIcon = false): static
│  │        ├─ rgb(string|array $color, bool $onIcon = false): static
│  │        ├─ primary(): static
│  │        ├─ dark(): static
│  │        ├─ size(int $value, bool $onIcon = false): static
│  │        ├─ s(int $value, bool $onIcon = false): static
│  │        ├─ multiply(int $x = 1, bool $onIcon = false): static
│  │        ├─ x(int $x = 1, bool $onIcon = false): static
│  │        ├─ block(string $size): static
│  │        ├─ square(): static
│  │        ├─ circle(): static
│  │        ├─ radius(string $radius): static
│  │        ├─ options(array $options): static
│  │        ├─ private function unhideWrapper(): void
│  │        ├─ icon(): P2Icon
│  │        └─ i(): P2Icon
│  └─ @p2m\internal\helpers\P2IconFactory
│     │  ├─ icon(string $name, $options = [])
│     │  ├─ i($name, $options = [])
│     │  ├─ circle(P2Icon $icon, string $label, array $options = [])
│     │  └─ c(P2Icon $icon, string $label, array $options = [])
│     ├─ @p2m\internal\helpers\P2BootstrapIconFactory
│     │  └─ @p2m\helpers\BI
│     ├─ @p2m\internal\helpers\P2EmojiIconFactory
│     │  └─ @p2m\helpers\EI
│     └─ @p2m\internal\helpers\P2FlagIconFactory
│        └─ @p2m\helpers\FI
├─ @p2m\internal\interfaces
│  ├─ @p2m\internal\interfaces\AccessibleInterface
│  │     ├─ focusable(bool $focusable = true): static;
│  │     ├─ f(bool $focusable = true): static;
│  │     ├─ tabIndex(int $index): static;
│  │     ├─ i(int $index): static;
│  │     ├─ ariaLabel(string $label, ?string $role = null): static;
│  │     ├─ l(string $label, ?string $role = null): static;
│  │     ├─ ariaRole(string $role): static;
│  │     ├─ r(string $role): static;
│  │     ├─ ariaHidden(bool $hidden = true): static;
│  │     └─ h(bool $hidden = true): static;
│  ├─ @p2m\internal\interfaces\ColorableInterface
│  │     ├─ color(string $color): static;
│  │     ├─ c(string $color): static;
│  │     ├─ gradient(string $from, string $to): static;
│  │     ├─ g(string $from, string $to): static;
│  │     ├─ bootstrapColor(string $color): static;
│  │     ├─ b(string $color): static;
│  │     ├─ namedColor(string $color): static;
│  │     ├─ n(string $color): static;
│  │     ├─ rgbColor(string|array $color): static;
│  │     └─ rgb(string|array $color): static;
│  ├─ @p2m\internal\interfaces\IconInterface
│  │     ├─ id(string $id): static;
│  │     ├─ title(string $title): static;
│  │     ├─ t(string $title): static;
│  │     └─ data(string $name, string $value): static;
│  └─ @p2m\internal\interfaces\ScalableInterface
│        ├─ size(int $value): static;
│        ├─ s(int $value): static;
│        ├─ multiply(int $x = 1): static;
│        └─ x(int $x = 1): static;
└─ @p2m\internal\traits
   ├─ @p2m\internal\traits\BootstrapColorsTrait
   │     ├─ primary(bool $extra = false): static
   │     ├─ secondary(bool $extra = false): static
   │     ├─ success(bool $extra = false): static
   │     ├─ danger(bool $extra = false): static
   │     ├─ warning(bool $extra = false): static
   │     ├─ info(bool $extra = false): static
   │     ├─ light(bool $extra = false): static
   │     ├─ dark(bool $extra = false): static
   │     ├─ black(bool $extra = false): static
   │     └─ white(bool $extra = false): static
   └─ @p2m\internal\traits\NamedColorsTrait
         ├─ silver(): static
         ├─ gray(): static
         ├─ maroon(): static
         ├─ red(): static
         └─ ...
```




⸻

# Question



⸻

# Answer



```
```


⸻
⸻

```tree
@p2m
├─ Copyright
│  ├─ @p2m\internal\helpers\P2Copyright
│  └─ @p2m\internal\helpers\P2CopyrightFactory
│     └─ @p2m\helpers\Copyright
├─ Icons
│  ├─ @p2m\internal\helpers\P2IconBase
│  │  ├─ @p2m\internal\helpers\P2Icon
│  │  │  ├─ @p2m\internal\helpers\P2BootstrapIcon
│  │  │  ├─ @p2m\internal\helpers\P2EmojiIcon
│  │  │  └─ @p2m\internal\helpers\P2FlagIcon
│  │  └─ @p2m\internal\helpers\P2IconBlock
│  └─ @p2m\internal\helpers\P2IconFactory
│     ├─ @p2m\internal\helpers\P2BootstrapIconFactory
│     │  └─ @p2m\helpers\BI
│     ├─ @p2m\internal\helpers\P2EmojiIconFactory
│     │  └─ @p2m\helpers\EI
│     └─ @p2m\internal\helpers\P2FlagIconFactory
│        └─ @p2m\helpers\FI
├─ Picsum
│  ├─ @p2m\internal\helpers\P2PicsumImage
│  ├─ @p2m\internal\helpers\P2PicsumImageCollection
│  └─ @p2m\internal\helpers\P2PicsumImageFactory
│     └─ @p2m\helpers\Picsum
├─ Timezones
│  └─ @p2m\internal\helpers\P2TimeZone
│     └─ @p2m\helpers\TZ
├─ @p2m\internal\interfaces
│  ├─ @p2m\internal\interfaces\AccessibleInterface
│  ├─ @p2m\internal\interfaces\ColorableInterface
│  ├─ @p2m\internal\interfaces\IconInterface
│  └─ @p2m\internal\interfaces\ScalableInterface
└─ @p2m\internal\traits
   ├─ @p2m\internal\traits\BootstrapColorsTrait
   └─ @p2m\internal\traits\NamedColorsTrait
```


```tree
themes/
├─ base/
│  ├─ layouts/
│  │  ├─ main.php
│  │  ├─ header.php
│  │  └─ footer.php
└─ links/
   ├─ layouts/
   │  ├─ main.php
   │  ├─ header.php
   │  └─ footer.php
   ├─ partials/
   │  ├─ _navbar.php
   │  ├─ _sidebar.php
   │  └─ _letterContent.php
   └─ site/
      ├─ index.php
      └─ // other site files
```


