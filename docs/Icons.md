# P2Icons

## Bootstrap Icon Syntax

For...

```
<i class="bi bi-icon"></i>
```

Use...

```
BI::icon(BI::_NAME, $options = []);
shortcut alias
BI::i(BI::_NAME, $options = []);
```

## Emoji CSS Syntax

For...

```
<i class='ec ec-emoji'></i>
```

Use...

```
EI::icon(EI::_NAME, $options = []);
shortcut alias
EI::i(EI::_NAME, $options = []);
```


## Flag Icon Syntax

For...

```
<i class="fi fi-flag"></i>
```

Use...

```
FI::icon(FI::_NAME, $options = []);
shortcut alias
FI::i(FI::_NAME, $options = []);
```

## Chain Functions

All of these functions chain to the constructor.

#### `ariaLabel()`

```
ariaLabel(string $label, ?string $role = P2Icons::IMG)
shortcut alias
l(string $label, ?string $role = P2Icons::IMG)
```

* Sets `ariaLabel` to the passed string.
* Sets `ariaHidden` to `false`.
* Sets `role` to the passed string.
	* If no string is passed `role` is set to 'img'.
	* If an empty strilg or `null` is passed role is left unset.

#### `ariaRole()`

```
ariaRole(string $role)
shortcut alias
r(string $role)
```

* Sets `role` to the passed string.
* Valid values are...

```
P2Icons::IMG          = 'img';
P2Icons::PRESENTATION = 'presentation';
P2Icons::NONE         = 'none';
P2Icons::BUTTON       = 'button';
P2Icons::LINK         = 'link';
P2Icons::STATUS       = 'status';
P2Icons::ALERT        = 'alert';
P2Icons::NOTE         = 'note';
```

#### `color()`

**Bootstrap Icons `BI::i()` only**

```
color(string $color)
shortcut alias
c(string $color)
```

* Sets Bootstrap color to the passed string.
* Valid values are...

```
P2Icons::PRIMARY            = 'primary';
P2Icons::PRIMARY_EMPHASIS   = 'primary-emphasis';
P2Icons::SECONDARY          = 'secondary';
P2Icons::SECONDARY_EMPHASIS = 'secondary-emphasis';
P2Icons::SUCCESS            = 'success';
P2Icons::SUCCESS_EMPHASIS   = 'success-emphasis';
P2Icons::DANGER             = 'danger';
P2Icons::DANGER_EMPHASIS    = 'danger-emphasis';
P2Icons::WARNING            = 'warning';
P2Icons::WARNING_EMPHASIS   = 'warning-emphasis';
P2Icons::INFO               = 'info';
P2Icons::INFO_EMPHASIS      = 'info-emphasis';
P2Icons::LIGHT              = 'light';
P2Icons::LIGHT_EMPHASIS     = 'light-emphasis';
P2Icons::DARK               = 'dark';
P2Icons::DARK_EMPHASIS      = 'dark-emphasis';
```

Example...

```
BI::i(BI::_NAME, $options = [])->c(string $color);
```

#### `focusable()`

```
focusable(bool $focusable = true)
shortcut alias
f(bool $focusable = true)
```

* Sets `focusable` to the `true`.

#### `size()`

```
size(int $value)
shortcut alias
s(int $value)
```

* Sets `size` to the passed value.
* Valid values integers 1 to 7.

Example...

```
BI::i(BI::_NAME, $options = [])->s(int $size);
```

#### `square()`

**Flag Icons `FI::i()` only**

```
square(bool $enable = true)
shortcut alias
sq(bool $enable = true)
```

* Sets the flag to square.

Example...

```
FI::i(FI::_NAME, $options = [])->sq(bool $square = true);
```

#### `tabIndex()`

```
tabIndex(int $index)
shortcut alias
i(int $index)
```

* Sets `tabIndex` to the passed value.

#### `title()`

```
title(string $title)
shortcut alias
t(string $title)
```

* Sets `title` to the passed string.

#### `data()`

```
data(string $name, string $value)
```

* Sets `data` to the passed strings.

#### `id()`

```
id(string $id)
```

* Sets `id` to the passed string.

#### `addAttribute()`

```
addAttribute(string $name, string $value, bool $condition = true, $throw = false)
shortcut alias
att(string $name, string $value, bool $condition = true, $throw = false)
```

* Adds an arbitrary attribute.

#### `addCssClass()`

```
addCssClass($class, $condition = true, $throw = false)
shortcut alias
css($class, $condition = true, $throw = false)
```

* Adds an arbitrary CSS class.

--






```
<i class="bi bi-icon"></i>
<i class='ec ec-emoji'></i>
<i class="fi fi-flag"></i>
<i class="fi fi-flag fis"></i>
```






