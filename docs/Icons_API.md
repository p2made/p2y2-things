# P2Icons

**Note:** For functions that apply to all icon types, these docs use "P2" to represent any of "BI", "EI", or "FI".

## Bootstrap Icon Syntax

For...

```
<i class="bi bi-{icon}"></i>
```

Use...

```
BI::icon(BI::_NAME, $options = []);

// shortcut alias
BI::i(BI::_NAME, $options = []);
```

## Emoji CSS Syntax

For...

```
<i class='ec ec-{emoji}'></i>
```

Use...

```
EI::icon(EI::_NAME, $options = []);

// shortcut alias
EI::i(EI::_NAME, $options = []);
```

## Flag Icon Syntax

For...

```
<i class="fi fi-{flag}"></i>
```

Use...

```
FI::icon(FI::_NAME, $options = []);

// shortcut alias
FI::i(FI::_NAME, $options = []);
```

## Chain Functions

All of these functions chain to the constructor.

#### `ariaLabel()`

```
ariaLabel(string $label, ?string $role = P2Icons::IMG)

// shortcut alias
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

// shortcut alias
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

// shortcut alias
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

// shortcut alias
f(bool $focusable = true)
```

* Sets `focusable` to the `true`.

#### `size()`

```
size(int $value)

// shortcut alias
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

// shortcut alias
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

// shortcut alias
i(int $index)
```

* Sets `tabIndex` to the passed value.

#### `title()`

```
title(string $title)

// shortcut alias
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

// shortcut alias
att(string $name, string $value, bool $condition = true, $throw = false)
```

* Adds an arbitrary attribute.

#### `addCssClass()`

```
addCssClass($class, $condition = true, $throw = false)

// shortcut alias
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

-- -- ^ -- -- ^ -- -- ^ -- -- ^ -- -- ^ -- --

#### `id()`

* @param string $id
* @return self
* @throws \yii\base\InvalidConfigException

```
id(string $id)

// example usage
P2::i(P2::_NAME, $options = [])->id(string $id);
```

#### `size()`, `s()`

* @param integer $value range 1 to 6
* @return \p2m\components\P2Icon
* @throws \yii\base\InvalidConfigException

```
size(int $value)

// shortcut alias
s(int $value)

// example usage
P2::i(P2::_NAME, $options = [])->s(int $value);
```

#### `title()`, `t()`

* @param string $title
* @return self
* @throws \yii\base\InvalidConfigException

```
title(string $title)

// shortcut alias
t(string $title)

// example usage
P2::i(P2::_NAME, $options = [])->t(string $title);
```

#### `multiply()`, `x()`

* @param int $x = 1
* @return self

```
multiply(int $x = 1)

// shortcut alias
x(int $x = 1)

// example usage
P2::i(P2::_NAME, $options = [])->x(int $x = 1);
```

#### `tabIndex()`, `i()`

* @param int $index
* @return self

```
tabIndex(int $index)

// shortcut alias
i(int $index)

// example usage
P2::i(P2::_NAME, $options = [])->i(int $index);
```

#### `focusable()`, `f()`

* @param bool $focusable = true
* @return \p2m\components\P2Icon
* @throws \yii\base\InvalidConfigException

```
focusable(bool $focusable = true)

// shortcut alias
f(bool $focusable = true)

// example usage
P2::i(P2::_NAME, $options = [])->f(bool $focusable = true);
```

#### `ariaLabel()`, `l()`

* @param string $label
* @param string|null $role Default P2IconFactory::IMG. Use '' or null to not set role.
* @return self
* @throws \yii\base\InvalidConfigException

```
ariaLabel(string $label, ?string $role = P2IconFactory::IMG)

// shortcut alias
l(string $label, ?string $role = P2IconFactory::IMG)

// example usage
P2::i(P2::_NAME, $options = [])->l(string $label, ?string $role = P2IconFactory::IMG);
```

#### `ariaRole()`, `r()`

* @param string $role
* @return self
* @throws \yii\base\InvalidConfigException

```
ariaRole(string $role)

// shortcut alias
r(string $role)

// example usage
P2::i(P2::_NAME, $options = [])->r(string $role);
```

#### `ariaHidden()`, `h()`

* Force aria-hidden state.
	 *
* @param bool $hidden
* @return self

```
ariaHidden(bool $hidden = true)

// shortcut alias
h(bool $hidden = true)

// example usage
P2::i(P2::_NAME, $options = [])->h(bool $hidden = true);
```

#### `data()`

* @param string $name
* @param string $value
* @return self
* @throws \yii\base\InvalidConfigException

```
data(string $name, string $value)

// example usage
P2::i(P2::_NAME, $options = [])->data(string $name, string $value);
```

#### `addCssClass()`, `css()`

* @param string $class
* @param bool $condition
* @param string|bool $throw
* @return \p2m\icons\P2Icon
* @throws \yii\base\InvalidConfigException
* @codeCoverageIgnore

```
addCssClass($class, $condition = true, $throw = false)

// shortcut alias
css($class, $condition = true, $throw = false)

// example usage
P2::i(P2::_NAME, $options = [])->css($class, $condition = true, $throw = false);
```

#### `addAttribute()`, `att()`

* Add or overwrite an HTML attribute.
	 *
* @param string      $name
* @param string      $value
* @param bool        $condition
* @param string|bool $throw
* @return self
* @throws \yii\base\InvalidConfigException

```
addAttribute(string $name, string $value, bool $condition = true, $throw = false)

// shortcut alias
att(string $name, string $value, bool $condition = true, $throw = false)

// example usage
P2::i(P2::_NAME, $options = [])->att(string $name, string $value, bool $condition = true, $throw = false);
```

#### `removeCssClass()`

* @param string $class
* @return self

```
removeCssClass(string $class)

// example usage
P2::i(P2::_NAME, $options = [])->removeCssClass(string $class);
```

#### `removeCssClassPrefix()`

* @param string $prefix
* @return self

```
removeCssClassPrefix(string $prefix)

// example usage
P2::i(P2::_NAME, $options = [])->removeCssClassPrefix(string $prefix);
```



