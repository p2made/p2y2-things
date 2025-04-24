# P2Icons

## Bootstrap Icon Syntax

```
<i class="bi bi-icon"></i>
```

```
BI::icon(BI::_NAME, $options = []);

BI::i(BI::_NAME, $options = []);

BI::i(BI::_NAME, $options = [])->color(string $color);

BI::i(BI::_NAME, $options = [])->size(int $size);
```


## Emoji CSS Syntax

```
<i class='ec ec-emoji'></i>
```

```
EI::icon(EI::_NAME, $options = []);

EI::i(EI::_NAME, $options = []);

EI::i(EI::_NAME, $options = [])->size(int $size);
```


## Flag Icon Syntax

```
<i class="fi fi-flag"></i>
<i class="fi fi-flag fis"></i>
```

```
FI::icon(FI::_NAME, $options = []);

FI::i(FI::_NAME, $options = []);

FI::i(FI::_NAME, $options = [])->size(int $size);

FI::i(FI::_NAME, $options = [])->square(bool $square = true);
```

--

```
<i class="bi bi-icon"></i>
<i class='ec ec-emoji'></i>
<i class="fi fi-flag"></i>
<i class="fi fi-flag fis"></i>
```






