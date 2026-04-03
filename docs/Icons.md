# P2Icons

The 3 icon classes are...

* `BI` - Bootstrap icons
* `EI` - Emoji icons
* `FI` - Flag icons

Here `IC` (for Icon Class) means any of those. For functions that only apply to one icon type, that class name is used.

## Basic Icons

```
IC::icon(IC::_NAME, $options = []);

shortcut alias

IC::i(IC::_NAME, $options = []);
```

Gives an `<i>` tag with `$options` handled as Yii2 options.

## Chain Functions

All of these functions chain to the constructor.

#### `ariaLabel()`

```
IC::i(IC::_NAME, $options)->ariaLabel(string $label, ?string $role = P2Icons::ROLE_IMG)

shortcut alias

IC::i(IC::_NAME, $options)->l(string $label, ?string $role = P2Icons::ROLE_IMG)
```

* Sets `ariaLabel` to the passed string.
* Sets `ariaHidden` to `false`.
* Sets `role` to the passed string.
	* To the passed string if one is passed.
	* To 'img' if no string is passed.
	* Left unset if an empty string or `null` is passed.

#### `ariaRole()`

```
IC::i(IC::_NAME, $options)->ariaRole(string $role)

shortcut alias

IC::i(IC::_NAME, $options)->r(string $role)
```

* Sets `role` to the passed string.
* Valid values are...

```
P2Icons::ROLE_IMG          = 'img';
P2Icons::ROLE_PRESENTATION = 'presentation';
P2Icons::ROLE_NONE         = 'none';
P2Icons::ROLE_BUTTON       = 'button';
P2Icons::ROLE_LINK         = 'link';
P2Icons::ROLE_STATUS       = 'status';
P2Icons::ROLE_ALERT        = 'alert';
P2Icons::ROLE_NOTE         = 'note';
```

#### `color()`

**Bootstrap Icons `BI::i()` only**

```
BI::i(BI::_NAME, $options)->color(string $color)

shortcut alias

BI::i(BI::_NAME, $options)->c(string $color)
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

#### `focusable()`

```
IC::i(IC::_NAME, $options)->focusable(bool $focusable = true)

shortcut alias

IC::i(IC::_NAME, $options)->f(bool $focusable = true)
```

* Sets `focusable` to the `true` or the passed boolean.

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






