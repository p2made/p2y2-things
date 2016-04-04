<?php

// normal use
echo FA::icon('home'); // <i class="fa fa-home"></i>

// shortcut
echo FA::i('home'); // <i class="fa fa-home"></i>

// icon with additional attributes
echo FA::icon('arrow-left', ['class' => 'big', 'data-role' => 'arrow']);
// <i class="big fa fa-arrow-left" data-role="arrow"></i>

// icon in button
echo Html::submitButton(
    Yii::t('app', '{icon} Save', ['icon' => FA::icon('check')])
); // <button type="submit"><i class="fa fa-check"></i> Save</button>

// icon with additional methods
echo FA::icon('cog')->inverse();    // <i class="fa fa-cog fa-inverse"></i>
echo FA::icon('cog')->spin();       // <i class="fa fa-cog fa-spin"></i>
echo FA::icon('cog')->fixedWidth(); // <i class="fa fa-cog fa-fw"></i>
echo FA::icon('cog')->ul();         // <i class="fa fa-cog fa-ul"></i>
echo FA::icon('cog')->li();         // <i class="fa fa-cog fa-li"></i>
echo FA::icon('cog')->border();     // <i class="fa fa-cog fa-border"></i>
echo FA::icon('cog')->pullLeft();   // <i class="fa fa-cog pull-left"></i>
echo FA::icon('cog')->pullRight();  // <i class="fa fa-cog pull-right"></i>

// icon size
echo FA::icon('cog')->size(FA::SIZE_3X);
// values: FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X
// <i class="fa fa-cog fa-size-3x"></i>

// icon rotate
echo FA::icon('cog')->rotate(FA::ROTATE_90);
// values: FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_180
// <i class="fa fa-cog fa-rotate-90"></i>

// icon flip
echo FA::icon('cog')->flip(FA::FLIP_VERTICAL);
// values: FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL
// <i class="fa fa-cog fa-flip-vertical"></i>

// icon with multiple methods
echo FA::icon('cog')->spin()->fixedWidth()->pullLeft()->size(FA::SIZE_LARGE);
// <i class="fa fa-cog fa-spin fa-fw pull-left fa-size-lg"></i>

// icons stack
echo FA::stack()->icon('twitter')->on('square-o');
// <span class="fa-stack">
//   <i class="fa fa-square-o fa-stack-2x"></i>
//   <i class="fa fa-twitter fa-stack-1x"></i>
// </span>

// icons stack with additional attributes
echo FA::stack(['data-role' => 'stacked-icon'])->on(FA::Icon('square')->inverse())->icon(FA::Icon('cog')->spin());
// <span class="fa-stack" data-role="stacked-icon">
//   <i class="fa fa-square-o fa-inverse fa-stack-2x"></i>
//   <i class="fa fa-cog fa-spin fa-stack-1x"></i>
// </span>

// autocomplete icons name in IDE
echo FA::icon(FA::_COG);
echo FA::icon(FA::_DESKTOP);
echo FA::stack()->on(FA::_CIRCLE_O)->icon(FA::_TWITTER);

