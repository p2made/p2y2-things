FontAwesome Asset Bundle & Helpers
==================================

This began as a wrapper on [rmrevin/yii2-fontawesome](https://github.com/rmrevin/yii2-fontawesome), for the convenience of having Font Awesome on the p2made namespace.

I love the elegance & cleverness of the recursive methods in @rmrevin's classes, however the syntax starts beautifully concise for basic icons, but becomes much longer as attributes are added. I've added a few shortcuts that reduce common combinations to method names of 2 or 3 letters.

Credit to @rmrevin for yii2-fontawesome.

Usage
-----

Once P2Y2Things is installed, here's how you use FontAwesome in your code.

First register the asset bundle where you want to use FontAwesome...

```
	p2made\assets\FontAwesomeAsset::register($this);
```

or specify as a dependency in another asset bundle loaded to the same page with...

```
	'p2made\assets\FontAwesomeAsset',
```

Also include `use p2made\helpers\FA;` at the top of the page.

Now your page is ready for FontAwesome!

Class reference
---------------

###Namespace: `p2made\helpers`;

###Class `FA`

#### icon methods

* `static FA::vs($name, $options = [])` - Shortcut for FA::icon()->inverse()
  * `$name` - name of icon in Font Awesome set.
  * `$options` - additional attributes for the html tag.
* `static FA::sp($name, $options = [])` - Shortcut for FA::icon()->spin()
  * `$name` & `$options` - as above.
* `static FA::pu($name, $options = [])` - Shortcut for FA::icon()->addCssClass('fa-pulse')->spin()
  * `$name` & `$options` - as above.
  * @rmrevin hasn't provided for 'fa-pulse', so this is my hacky workaround.
* `static FA::fw($name, $options = [])` - Shortcut for FA::icon()->fixedWidth()
  * `$name` & `$options` - as above.
* `static FA::ul($name, $options = [])` - Shortcut for FA::icon()->ul()
  * `$name` & `$options` - as above.
* `static FA::li($name, $options = [])` - Shortcut for FA::icon()->li()
  * `$name` & `$options` - as above.
* `static FA::bd($name, $options = [])` - Shortcut for FA::icon()->border()
  * `$name` & `$options` - as above.
* `static FA::pl($name, $options = [])` - Shortcut for FA::icon()->pullLeft()
  * `$name` & `$options` - as above.
* `static FA::pr($name, $options = [])` - Shortcut for FA::icon()->pullRight()
  * `$name` & `$options` - as above.
* `static FA::bl($name, $options = [])` - Shortcut for FA::icon()->border()->pullLeft()
  * `$name` & `$options` - as above.
* `static FA::br($name, $options = [])` - Shortcut for FA::icon()->border()->pullRight()
  * `$name` & `$options` - as above.

#### stack methods

* `static FA::s($foreground, $background, $options = [])` - Shortcut for stack()->icon()->on()
  * `$foreground` - `FA::icon` or the name of an icon in Font Awesome.
  * `$background` - `FA::icon` or the name of an icon in Font Awesome.
  * `$options` - additional attributes for the html tag.
* `static FA::is($foreground, $background, $options = [])` - Shortcut for a stack with the larger icon on top
  * `$foreground` - `FA::icon`.
  * `$background` - `FA::icon`.
  * `$options` - additional attributes for the html tag.
  * @rmrevin's classes don't permit the larger icon to be on top. This is my hacky workaround.
  * Yes, hacky...
  * It doesn't provide the recursion,
  * icons must be handed in fully formed, &
  * the size must be set as a class in `$options`.
* `static FA::ban($object, $options = [])` - Shortcut for is() using 'ban' as the top icon
  * `$object` - `FA::icon`.
  * `$options` - additional attributes for the html tag.
  * That hacky class is pretty verbose so this is a more concise method for 'ban' stacks.
  * It calls the first hacky effort so same limitations apply.

#### size constants

* `FA::SIZE_LARGE` = 'lg'.
* `FA::SIZE_2X` = '2x'.
* `FA::SIZE_3X` = '3x'.
* `FA::SIZE_4X` = '4x'.
* `FA::SIZE_5X` = '5x'.

#### rotate constants

* `FA::ROTATE_90` = '90'.
* `FA::ROTATE_180` = '180'.
* `FA::ROTATE_270` = '270'.

#### flip constants

* `FA::FLIP_HORIZONTAL` = 'horizontal'.
* `FA::FLIP_VERTICAL` = 'vertical'.

#### icon constants

* `FA::_500PX` = '500px'.
* `FA::_ADJUST` = 'adjust'.
* `FA::_ADN` = 'adn'.
* `FA::_ALIGN_CENTER` = 'align-center'.
* `FA::_ALIGN_JUSTIFY` = 'align-justify'.
* `FA::_ALIGN_LEFT` = 'align-left'.
* `FA::_ALIGN_RIGHT` = 'align-right'.
* `FA::_AMAZON` = 'amazon'.
* `FA::_AMBULANCE` = 'ambulance'.
* `FA::_ANCHOR` = 'anchor'.
* `FA::_ANDROID` = 'android'.
* `FA::_ANGELLIST` = 'angellist'.
* `FA::_ANGLE_DOUBLE_DOWN` = 'angle-double-down'.
* `FA::_ANGLE_DOUBLE_LEFT` = 'angle-double-left'.
* `FA::_ANGLE_DOUBLE_RIGHT` = 'angle-double-right'.
* `FA::_ANGLE_DOUBLE_UP` = 'angle-double-up'.
* `FA::_ANGLE_DOWN` = 'angle-down'.
* `FA::_ANGLE_LEFT` = 'angle-left'.
* `FA::_ANGLE_RIGHT` = 'angle-right'.
* `FA::_ANGLE_UP` = 'angle-up'.
* `FA::_APPLE` = 'apple'.
* `FA::_ARCHIVE` = 'archive'.
* `FA::_AREA_CHART` = 'area-chart'.
* `FA::_ARROW_CIRCLE_DOWN` = 'arrow-circle-down'.
* `FA::_ARROW_CIRCLE_LEFT` = 'arrow-circle-left'.
* `FA::_ARROW_CIRCLE_O_DOWN` = 'arrow-circle-o-down'.
* `FA::_ARROW_CIRCLE_O_LEFT` = 'arrow-circle-o-left'.
* `FA::_ARROW_CIRCLE_O_RIGHT` = 'arrow-circle-o-right'.
* `FA::_ARROW_CIRCLE_O_UP` = 'arrow-circle-o-up'.
* `FA::_ARROW_CIRCLE_RIGHT` = 'arrow-circle-right'.
* `FA::_ARROW_CIRCLE_UP` = 'arrow-circle-up'.
* `FA::_ARROW_DOWN` = 'arrow-down'.
* `FA::_ARROW_LEFT` = 'arrow-left'.
* `FA::_ARROW_RIGHT` = 'arrow-right'.
* `FA::_ARROW_UP` = 'arrow-up'.
* `FA::_ARROWS` = 'arrows'.
* `FA::_ARROWS_ALT` = 'arrows-alt'.
* `FA::_ARROWS_H` = 'arrows-h'.
* `FA::_ARROWS_V` = 'arrows-v'.
* `FA::_ASTERISK` = 'asterisk'.
* `FA::_AT` = 'at'.
* `FA::_AUTOMOBILE` = 'automobile'.
* `FA::_BACKWARD` = 'backward'.
* `FA::_BALANCE_SCALE` = 'balance-scale'.
* `FA::_BAN` = 'ban'.
* `FA::_BANK` = 'bank'.
* `FA::_BAR_CHART` = 'bar-chart'.
* `FA::_BAR_CHART_O` = 'bar-chart-o'.
* `FA::_BARCODE` = 'barcode'.
* `FA::_BARS` = 'bars'.
* `FA::_BATTERY_0` = 'battery-0'.
* `FA::_BATTERY_1` = 'battery-1'.
* `FA::_BATTERY_2` = 'battery-2'.
* `FA::_BATTERY_3` = 'battery-3'.
* `FA::_BATTERY_4` = 'battery-4'.
* `FA::_BATTERY_EMPTY` = 'battery-empty'.
* `FA::_BATTERY_FULL` = 'battery-full'.
* `FA::_BATTERY_HALF` = 'battery-half'.
* `FA::_BATTERY_QUARTER` = 'battery-quarter'.
* `FA::_BATTERY_THREE_QUARTERS` = 'battery-three-quarters'.
* `FA::_BED` = 'bed'.
* `FA::_BEER` = 'beer'.
* `FA::_BEHANCE` = 'behance'.
* `FA::_BEHANCE_SQUARE` = 'behance-square'.
* `FA::_BELL` = 'bell'.
* `FA::_BELL_O` = 'bell-o'.
* `FA::_BELL_SLASH` = 'bell-slash'.
* `FA::_BELL_SLASH_O` = 'bell-slash-o'.
* `FA::_BICYCLE` = 'bicycle'.
* `FA::_BINOCULARS` = 'binoculars'.
* `FA::_BIRTHDAY_CAKE` = 'birthday-cake'.
* `FA::_BITBUCKET` = 'bitbucket'.
* `FA::_BITBUCKET_SQUARE` = 'bitbucket-square'.
* `FA::_BITCOIN` = 'bitcoin'.
* `FA::_BLACK_TIE` = 'black-tie'.
* `FA::_BOLD` = 'bold'.
* `FA::_BOLT` = 'bolt'.
* `FA::_BOMB` = 'bomb'.
* `FA::_BOOK` = 'book'.
* `FA::_BOOKMARK` = 'bookmark'.
* `FA::_BOOKMARK_O` = 'bookmark-o'.
* `FA::_BRIEFCASE` = 'briefcase'.
* `FA::_BTC` = 'btc'.
* `FA::_BUG` = 'bug'.
* `FA::_BUILDING` = 'building'.
* `FA::_BUILDING_O` = 'building-o'.
* `FA::_BULLHORN` = 'bullhorn'.
* `FA::_BULLSEYE` = 'bullseye'.
* `FA::_BUS` = 'bus'.
* `FA::_BUYSELLADS` = 'buysellads'.
* `FA::_CAB` = 'cab'.
* `FA::_CALCULATOR` = 'calculator'.
* `FA::_CALENDAR` = 'calendar'.
* `FA::_CALENDAR_CHECK_O` = 'calendar-check-o'.
* `FA::_CALENDAR_MINUS_O` = 'calendar-minus-o'.
* `FA::_CALENDAR_O` = 'calendar-o'.
* `FA::_CALENDAR_PLUS_O` = 'calendar-plus-o'.
* `FA::_CALENDAR_TIMES_O` = 'calendar-times-o'.
* `FA::_CAMERA` = 'camera'.
* `FA::_CAMERA_RETRO` = 'camera-retro'.
* `FA::_CAR` = 'car'.
* `FA::_CARET_DOWN` = 'caret-down'.
* `FA::_CARET_LEFT` = 'caret-left'.
* `FA::_CARET_RIGHT` = 'caret-right'.
* `FA::_CARET_SQUARE_O_DOWN` = 'caret-square-o-down'.
* `FA::_CARET_SQUARE_O_LEFT` = 'caret-square-o-left'.
* `FA::_CARET_SQUARE_O_RIGHT` = 'caret-square-o-right'.
* `FA::_CARET_SQUARE_O_UP` = 'caret-square-o-up'.
* `FA::_CARET_UP` = 'caret-up'.
* `FA::_CART_ARROW_DOWN` = 'cart-arrow-down'.
* `FA::_CART_PLUS` = 'cart-plus'.
* `FA::_CC` = 'cc'.
* `FA::_CC_AMEX` = 'cc-amex'.
* `FA::_CC_DINERS_CLUB` = 'cc-diners-club'.
* `FA::_CC_DISCOVER` = 'cc-discover'.
* `FA::_CC_JCB` = 'cc-jcb'.
* `FA::_CC_MASTERCARD` = 'cc-mastercard'.
* `FA::_CC_PAYPAL` = 'cc-paypal'.
* `FA::_CC_STRIPE` = 'cc-stripe'.
* `FA::_CC_VISA` = 'cc-visa'.
* `FA::_CERTIFICATE` = 'certificate'.
* `FA::_CHAIN` = 'chain'.
* `FA::_CHAIN_BROKEN` = 'chain-broken'.
* `FA::_CHECK` = 'check'.
* `FA::_CHECK_CIRCLE` = 'check-circle'.
* `FA::_CHECK_CIRCLE_O` = 'check-circle-o'.
* `FA::_CHECK_SQUARE` = 'check-square'.
* `FA::_CHECK_SQUARE_O` = 'check-square-o'.
* `FA::_CHEVRON_CIRCLE_DOWN` = 'chevron-circle-down'.
* `FA::_CHEVRON_CIRCLE_LEFT` = 'chevron-circle-left'.
* `FA::_CHEVRON_CIRCLE_RIGHT` = 'chevron-circle-right'.
* `FA::_CHEVRON_CIRCLE_UP` = 'chevron-circle-up'.
* `FA::_CHEVRON_DOWN` = 'chevron-down'.
* `FA::_CHEVRON_LEFT` = 'chevron-left'.
* `FA::_CHEVRON_RIGHT` = 'chevron-right'.
* `FA::_CHEVRON_UP` = 'chevron-up'.
* `FA::_CHILD` = 'child'.
* `FA::_CHROME` = 'chrome'.
* `FA::_CIRCLE` = 'circle'.
* `FA::_CIRCLE_O` = 'circle-o'.
* `FA::_CIRCLE_O_NOTCH` = 'circle-o-notch'.
* `FA::_CIRCLE_THIN` = 'circle-thin'.
* `FA::_CLIPBOARD` = 'clipboard'.
* `FA::_CLOCK_O` = 'clock-o'.
* `FA::_CLONE` = 'clone'.
* `FA::_CLOSE` = 'close'.
* `FA::_CLOUD` = 'cloud'.
* `FA::_CLOUD_DOWNLOAD` = 'cloud-download'.
* `FA::_CLOUD_UPLOAD` = 'cloud-upload'.
* `FA::_CNY` = 'cny'.
* `FA::_CODE` = 'code'.
* `FA::_CODE_FORK` = 'code-fork'.
* `FA::_CODEPEN` = 'codepen'.
* `FA::_COFFEE` = 'coffee'.
* `FA::_COG` = 'cog'.
* `FA::_COGS` = 'cogs'.
* `FA::_COLUMNS` = 'columns'.
* `FA::_COMMENT` = 'comment'.
* `FA::_COMMENT_O` = 'comment-o'.
* `FA::_COMMENTING` = 'commenting'.
* `FA::_COMMENTING_O` = 'commenting-o'.
* `FA::_COMMENTS` = 'comments'.
* `FA::_COMMENTS_O` = 'comments-o'.
* `FA::_COMPASS` = 'compass'.
* `FA::_COMPRESS` = 'compress'.
* `FA::_CONNECTDEVELOP` = 'connectdevelop'.
* `FA::_CONTAO` = 'contao'.
* `FA::_COPY` = 'copy'.
* `FA::_COPYRIGHT` = 'copyright'.
* `FA::_CREATIVE_COMMONS` = 'creative-commons'.
* `FA::_CREDIT_CARD` = 'credit-card'.
* `FA::_CROP` = 'crop'.
* `FA::_CROSSHAIRS` = 'crosshairs'.
* `FA::_CSS3` = 'css3'.
* `FA::_CUBE` = 'cube'.
* `FA::_CUBES` = 'cubes'.
* `FA::_CUT` = 'cut'.
* `FA::_CUTLERY` = 'cutlery'.
* `FA::_DASHBOARD` = 'dashboard'.
* `FA::_DASHCUBE` = 'dashcube'.
* `FA::_DATABASE` = 'database'.
* `FA::_DEDENT` = 'dedent'.
* `FA::_DELICIOUS` = 'delicious'.
* `FA::_DESKTOP` = 'desktop'.
* `FA::_DEVIANTART` = 'deviantart'.
* `FA::_DIAMOND` = 'diamond'.
* `FA::_DIGG` = 'digg'.
* `FA::_DOLLAR` = 'dollar'.
* `FA::_DOT_CIRCLE_O` = 'dot-circle-o'.
* `FA::_DOWNLOAD` = 'download'.
* `FA::_DRIBBBLE` = 'dribbble'.
* `FA::_DROPBOX` = 'dropbox'.
* `FA::_DRUPAL` = 'drupal'.
* `FA::_EDIT` = 'edit'.
* `FA::_EJECT` = 'eject'.
* `FA::_ELLIPSIS_H` = 'ellipsis-h'.
* `FA::_ELLIPSIS_V` = 'ellipsis-v'.
* `FA::_EMPIRE` = 'empire'.
* `FA::_ENVELOPE` = 'envelope'.
* `FA::_ENVELOPE_O` = 'envelope-o'.
* `FA::_ENVELOPE_SQUARE` = 'envelope-square'.
* `FA::_ERASER` = 'eraser'.
* `FA::_EUR` = 'eur'.
* `FA::_EURO` = 'euro'.
* `FA::_EXCHANGE` = 'exchange'.
* `FA::_EXCLAMATION` = 'exclamation'.
* `FA::_EXCLAMATION_CIRCLE` = 'exclamation-circle'.
* `FA::_EXCLAMATION_TRIANGLE` = 'exclamation-triangle'.
* `FA::_EXPAND` = 'expand'.
* `FA::_EXPEDITEDSSL` = 'expeditedssl'.
* `FA::_EXTERNAL_LINK` = 'external-link'.
* `FA::_EXTERNAL_LINK_SQUARE` = 'external-link-square'.
* `FA::_EYE` = 'eye'.
* `FA::_EYE_SLASH` = 'eye-slash'.
* `FA::_EYEDROPPER` = 'eyedropper'.
* `FA::_FACEBOOK` = 'facebook'.
* `FA::_FACEBOOK_F` = 'facebook-f'.
* `FA::_FACEBOOK_OFFICIAL` = 'facebook-official'.
* `FA::_FACEBOOK_SQUARE` = 'facebook-square'.
* `FA::_FAST_BACKWARD` = 'fast-backward'.
* `FA::_FAST_FORWARD` = 'fast-forward'.
* `FA::_FAX` = 'fax'.
* `FA::_FEED` = 'feed'.
* `FA::_FEMALE` = 'female'.
* `FA::_FIGHTER_JET` = 'fighter-jet'.
* `FA::_FILE` = 'file'.
* `FA::_FILE_ARCHIVE_O` = 'file-archive-o'.
* `FA::_FILE_AUDIO_O` = 'file-audio-o'.
* `FA::_FILE_CODE_O` = 'file-code-o'.
* `FA::_FILE_EXCEL_O` = 'file-excel-o'.
* `FA::_FILE_IMAGE_O` = 'file-image-o'.
* `FA::_FILE_MOVIE_O` = 'file-movie-o'.
* `FA::_FILE_O` = 'file-o'.
* `FA::_FILE_PDF_O` = 'file-pdf-o'.
* `FA::_FILE_PHOTO_O` = 'file-photo-o'.
* `FA::_FILE_PICTURE_O` = 'file-picture-o'.
* `FA::_FILE_POWERPOINT_O` = 'file-powerpoint-o'.
* `FA::_FILE_SOUND_O` = 'file-sound-o'.
* `FA::_FILE_TEXT` = 'file-text'.
* `FA::_FILE_TEXT_O` = 'file-text-o'.
* `FA::_FILE_VIDEO_O` = 'file-video-o'.
* `FA::_FILE_WORD_O` = 'file-word-o'.
* `FA::_FILE_ZIP_O` = 'file-zip-o'.
* `FA::_FILES_O` = 'files-o'.
* `FA::_FILM` = 'film'.
* `FA::_FILTER` = 'filter'.
* `FA::_FIRE` = 'fire'.
* `FA::_FIRE_EXTINGUISHER` = 'fire-extinguisher'.
* `FA::_FIREFOX` = 'firefox'.
* `FA::_FLAG` = 'flag'.
* `FA::_FLAG_CHECKERED` = 'flag-checkered'.
* `FA::_FLAG_O` = 'flag-o'.
* `FA::_FLASH` = 'flash'.
* `FA::_FLASK` = 'flask'.
* `FA::_FLICKR` = 'flickr'.
* `FA::_FLOPPY_O` = 'floppy-o'.
* `FA::_FOLDER` = 'folder'.
* `FA::_FOLDER_O` = 'folder-o'.
* `FA::_FOLDER_OPEN` = 'folder-open'.
* `FA::_FOLDER_OPEN_O` = 'folder-open-o'.
* `FA::_FONT` = 'font'.
* `FA::_FONTICONS` = 'fonticons'.
* `FA::_FORUMBEE` = 'forumbee'.
* `FA::_FORWARD` = 'forward'.
* `FA::_FOURSQUARE` = 'foursquare'.
* `FA::_FROWN_O` = 'frown-o'.
* `FA::_FUTBOL_O` = 'futbol-o'.
* `FA::_GAMEPAD` = 'gamepad'.
* `FA::_GAVEL` = 'gavel'.
* `FA::_GBP` = 'gbp'.
* `FA::_GE` = 'ge'.
* `FA::_GEAR` = 'gear'.
* `FA::_GEARS` = 'gears'.
* `FA::_GENDERLESS` = 'genderless'.
* `FA::_GET_POCKET` = 'get-pocket'.
* `FA::_GG` = 'gg'.
* `FA::_GG_CIRCLE` = 'gg-circle'.
* `FA::_GIFT` = 'gift'.
* `FA::_GIT` = 'git'.
* `FA::_GIT_SQUARE` = 'git-square'.
* `FA::_GITHUB` = 'github'.
* `FA::_GITHUB_ALT` = 'github-alt'.
* `FA::_GITHUB_SQUARE` = 'github-square'.
* `FA::_GITTIP` = 'gittip'.
* `FA::_GLASS` = 'glass'.
* `FA::_GLOBE` = 'globe'.
* `FA::_GOOGLE` = 'google'.
* `FA::_GOOGLE_PLUS` = 'google-plus'.
* `FA::_GOOGLE_PLUS_SQUARE` = 'google-plus-square'.
* `FA::_GOOGLE_WALLET` = 'google-wallet'.
* `FA::_GRADUATION_CAP` = 'graduation-cap'.
* `FA::_GRATIPAY` = 'gratipay'.
* `FA::_GROUP` = 'group'.
* `FA::_H_SQUARE` = 'h-square'.
* `FA::_HACKER_NEWS` = 'hacker-news'.
* `FA::_HAND_GRAB_O` = 'hand-grab-o'.
* `FA::_HAND_LIZARD_O` = 'hand-lizard-o'.
* `FA::_HAND_O_DOWN` = 'hand-o-down'.
* `FA::_HAND_O_LEFT` = 'hand-o-left'.
* `FA::_HAND_O_RIGHT` = 'hand-o-right'.
* `FA::_HAND_O_UP` = 'hand-o-up'.
* `FA::_HAND_PAPER_O` = 'hand-paper-o'.
* `FA::_HAND_PEACE_O` = 'hand-peace-o'.
* `FA::_HAND_POINTER_O` = 'hand-pointer-o'.
* `FA::_HAND_ROCK_O` = 'hand-rock-o'.
* `FA::_HAND_SCISSORS_O` = 'hand-scissors-o'.
* `FA::_HAND_SPOCK_O` = 'hand-spock-o'.
* `FA::_HAND_STOP_O` = 'hand-stop-o'.
* `FA::_HDD_O` = 'hdd-o'.
* `FA::_HEADER` = 'header'.
* `FA::_HEADPHONES` = 'headphones'.
* `FA::_HEART` = 'heart'.
* `FA::_HEART_O` = 'heart-o'.
* `FA::_HEARTBEAT` = 'heartbeat'.
* `FA::_HISTORY` = 'history'.
* `FA::_HOME` = 'home'.
* `FA::_HOSPITAL_O` = 'hospital-o'.
* `FA::_HOTEL` = 'hotel'.
* `FA::_HOURGLASS` = 'hourglass'.
* `FA::_HOURGLASS_1` = 'hourglass-1'.
* `FA::_HOURGLASS_2` = 'hourglass-2'.
* `FA::_HOURGLASS_3` = 'hourglass-3'.
* `FA::_HOURGLASS_END` = 'hourglass-end'.
* `FA::_HOURGLASS_HALF` = 'hourglass-half'.
* `FA::_HOURGLASS_O` = 'hourglass-o'.
* `FA::_HOURGLASS_START` = 'hourglass-start'.
* `FA::_HOUZZ` = 'houzz'.
* `FA::_HTML5` = 'html5'.
* `FA::_I_CURSOR` = 'i-cursor'.
* `FA::_ILS` = 'ils'.
* `FA::_IMAGE` = 'image'.
* `FA::_INBOX` = 'inbox'.
* `FA::_INDENT` = 'indent'.
* `FA::_INDUSTRY` = 'industry'.
* `FA::_INFO` = 'info'.
* `FA::_INFO_CIRCLE` = 'info-circle'.
* `FA::_INR` = 'inr'.
* `FA::_INSTAGRAM` = 'instagram'.
* `FA::_INSTITUTION` = 'institution'.
* `FA::_INTERNET_EXPLORER` = 'internet-explorer'.
* `FA::_INTERSEX` = 'intersex'.
* `FA::_IOXHOST` = 'ioxhost'.
* `FA::_ITALIC` = 'italic'.
* `FA::_JOOMLA` = 'joomla'.
* `FA::_JPY` = 'jpy'.
* `FA::_JSFIDDLE` = 'jsfiddle'.
* `FA::_KEY` = 'key'.
* `FA::_KEYBOARD_O` = 'keyboard-o'.
* `FA::_KRW` = 'krw'.
* `FA::_LANGUAGE` = 'language'.
* `FA::_LAPTOP` = 'laptop'.
* `FA::_LASTFM` = 'lastfm'.
* `FA::_LASTFM_SQUARE` = 'lastfm-square'.
* `FA::_LEAF` = 'leaf'.
* `FA::_LEANPUB` = 'leanpub'.
* `FA::_LEGAL` = 'legal'.
* `FA::_LEMON_O` = 'lemon-o'.
* `FA::_LEVEL_DOWN` = 'level-down'.
* `FA::_LEVEL_UP` = 'level-up'.
* `FA::_LIFE_BOUY` = 'life-bouy'.
* `FA::_LIFE_BUOY` = 'life-buoy'.
* `FA::_LIFE_RING` = 'life-ring'.
* `FA::_LIFE_SAVER` = 'life-saver'.
* `FA::_LIGHTBULB_O` = 'lightbulb-o'.
* `FA::_LINE_CHART` = 'line-chart'.
* `FA::_LINK` = 'link'.
* `FA::_LINKEDIN` = 'linkedin'.
* `FA::_LINKEDIN_SQUARE` = 'linkedin-square'.
* `FA::_LINUX` = 'linux'.
* `FA::_LIST` = 'list'.
* `FA::_LIST_ALT` = 'list-alt'.
* `FA::_LIST_OL` = 'list-ol'.
* `FA::_LIST_UL` = 'list-ul'.
* `FA::_LOCATION_ARROW` = 'location-arrow'.
* `FA::_LOCK` = 'lock'.
* `FA::_LONG_ARROW_DOWN` = 'long-arrow-down'.
* `FA::_LONG_ARROW_LEFT` = 'long-arrow-left'.
* `FA::_LONG_ARROW_RIGHT` = 'long-arrow-right'.
* `FA::_LONG_ARROW_UP` = 'long-arrow-up'.
* `FA::_MAGIC` = 'magic'.
* `FA::_MAGNET` = 'magnet'.
* `FA::_MAIL_FORWARD` = 'mail-forward'.
* `FA::_MAIL_REPLY` = 'mail-reply'.
* `FA::_MAIL_REPLY_ALL` = 'mail-reply-all'.
* `FA::_MALE` = 'male'.
* `FA::_MAP` = 'map'.
* `FA::_MAP_MARKER` = 'map-marker'.
* `FA::_MAP_O` = 'map-o'.
* `FA::_MAP_PIN` = 'map-pin'.
* `FA::_MAP_SIGNS` = 'map-signs'.
* `FA::_MARS` = 'mars'.
* `FA::_MARS_DOUBLE` = 'mars-double'.
* `FA::_MARS_STROKE` = 'mars-stroke'.
* `FA::_MARS_STROKE_H` = 'mars-stroke-h'.
* `FA::_MARS_STROKE_V` = 'mars-stroke-v'.
* `FA::_MAXCDN` = 'maxcdn'.
* `FA::_MEANPATH` = 'meanpath'.
* `FA::_MEDIUM` = 'medium'.
* `FA::_MEDKIT` = 'medkit'.
* `FA::_MEH_O` = 'meh-o'.
* `FA::_MERCURY` = 'mercury'.
* `FA::_MICROPHONE` = 'microphone'.
* `FA::_MICROPHONE_SLASH` = 'microphone-slash'.
* `FA::_MINUS` = 'minus'.
* `FA::_MINUS_CIRCLE` = 'minus-circle'.
* `FA::_MINUS_SQUARE` = 'minus-square'.
* `FA::_MINUS_SQUARE_O` = 'minus-square-o'.
* `FA::_MOBILE` = 'mobile'.
* `FA::_MOBILE_PHONE` = 'mobile-phone'.
* `FA::_MONEY` = 'money'.
* `FA::_MOON_O` = 'moon-o'.
* `FA::_MORTAR_BOARD` = 'mortar-board'.
* `FA::_MOTORCYCLE` = 'motorcycle'.
* `FA::_MOUSE_POINTER` = 'mouse-pointer'.
* `FA::_MUSIC` = 'music'.
* `FA::_NAVICON` = 'navicon'.
* `FA::_NEUTER` = 'neuter'.
* `FA::_NEWSPAPER_O` = 'newspaper-o'.
* `FA::_OBJECT_GROUP` = 'object-group'.
* `FA::_OBJECT_UNGROUP` = 'object-ungroup'.
* `FA::_ODNOKLASSNIKI` = 'odnoklassniki'.
* `FA::_ODNOKLASSNIKI_SQUARE` = 'odnoklassniki-square'.
* `FA::_OPENCART` = 'opencart'.
* `FA::_OPENID` = 'openid'.
* `FA::_OPERA` = 'opera'.
* `FA::_OPTIN_MONSTER` = 'optin-monster'.
* `FA::_OUTDENT` = 'outdent'.
* `FA::_PAGELINES` = 'pagelines'.
* `FA::_PAINT_BRUSH` = 'paint-brush'.
* `FA::_PAPER_PLANE` = 'paper-plane'.
* `FA::_PAPER_PLANE_O` = 'paper-plane-o'.
* `FA::_PAPERCLIP` = 'paperclip'.
* `FA::_PARAGRAPH` = 'paragraph'.
* `FA::_PASTE` = 'paste'.
* `FA::_PAUSE` = 'pause'.
* `FA::_PAW` = 'paw'.
* `FA::_PAYPAL` = 'paypal'.
* `FA::_PENCIL` = 'pencil'.
* `FA::_PENCIL_SQUARE` = 'pencil-square'.
* `FA::_PENCIL_SQUARE_O` = 'pencil-square-o'.
* `FA::_PHONE` = 'phone'.
* `FA::_PHONE_SQUARE` = 'phone-square'.
* `FA::_PHOTO` = 'photo'.
* `FA::_PICTURE_O` = 'picture-o'.
* `FA::_PIE_CHART` = 'pie-chart'.
* `FA::_PIED_PIPER` = 'pied-piper'.
* `FA::_PIED_PIPER_ALT` = 'pied-piper-alt'.
* `FA::_PINTEREST` = 'pinterest'.
* `FA::_PINTEREST_P` = 'pinterest-p'.
* `FA::_PINTEREST_SQUARE` = 'pinterest-square'.
* `FA::_PLANE` = 'plane'.
* `FA::_PLAY` = 'play'.
* `FA::_PLAY_CIRCLE` = 'play-circle'.
* `FA::_PLAY_CIRCLE_O` = 'play-circle-o'.
* `FA::_PLUG` = 'plug'.
* `FA::_PLUS` = 'plus'.
* `FA::_PLUS_CIRCLE` = 'plus-circle'.
* `FA::_PLUS_SQUARE` = 'plus-square'.
* `FA::_PLUS_SQUARE_O` = 'plus-square-o'.
* `FA::_POWER_OFF` = 'power-off'.
* `FA::_PRINT` = 'print'.
* `FA::_PUZZLE_PIECE` = 'puzzle-piece'.
* `FA::_QQ` = 'qq'.
* `FA::_QRCODE` = 'qrcode'.
* `FA::_QUESTION` = 'question'.
* `FA::_QUESTION_CIRCLE` = 'question-circle'.
* `FA::_QUOTE_LEFT` = 'quote-left'.
* `FA::_QUOTE_RIGHT` = 'quote-right'.
* `FA::_RA` = 'ra'.
* `FA::_RANDOM` = 'random'.
* `FA::_REBEL` = 'rebel'.
* `FA::_RECYCLE` = 'recycle'.
* `FA::_REDDIT` = 'reddit'.
* `FA::_REDDIT_SQUARE` = 'reddit-square'.
* `FA::_REFRESH` = 'refresh'.
* `FA::_REGISTERED` = 'registered'.
* `FA::_REMOVE` = 'remove'.
* `FA::_RENREN` = 'renren'.
* `FA::_REORDER` = 'reorder'.
* `FA::_REPEAT` = 'repeat'.
* `FA::_REPLY` = 'reply'.
* `FA::_REPLY_ALL` = 'reply-all'.
* `FA::_RETWEET` = 'retweet'.
* `FA::_RMB` = 'rmb'.
* `FA::_ROAD` = 'road'.
* `FA::_ROCKET` = 'rocket'.
* `FA::_ROTATE_LEFT` = 'rotate-left'.
* `FA::_ROTATE_RIGHT` = 'rotate-right'.
* `FA::_ROUBLE` = 'rouble'.
* `FA::_RSS` = 'rss'.
* `FA::_RSS_SQUARE` = 'rss-square'.
* `FA::_RUB` = 'rub'.
* `FA::_RUBLE` = 'ruble'.
* `FA::_RUPEE` = 'rupee'.
* `FA::_SAFARI` = 'safari'.
* `FA::_SAVE` = 'save'.
* `FA::_SCISSORS` = 'scissors'.
* `FA::_SEARCH` = 'search'.
* `FA::_SEARCH_MINUS` = 'search-minus'.
* `FA::_SEARCH_PLUS` = 'search-plus'.
* `FA::_SELLSY` = 'sellsy'.
* `FA::_SEND` = 'send'.
* `FA::_SEND_O` = 'send-o'.
* `FA::_SERVER` = 'server'.
* `FA::_SHARE` = 'share'.
* `FA::_SHARE_ALT` = 'share-alt'.
* `FA::_SHARE_ALT_SQUARE` = 'share-alt-square'.
* `FA::_SHARE_SQUARE` = 'share-square'.
* `FA::_SHARE_SQUARE_O` = 'share-square-o'.
* `FA::_SHEKEL` = 'shekel'.
* `FA::_SHEQEL` = 'sheqel'.
* `FA::_SHIELD` = 'shield'.
* `FA::_SHIP` = 'ship'.
* `FA::_SHIRTSINBULK` = 'shirtsinbulk'.
* `FA::_SHOPPING_CART` = 'shopping-cart'.
* `FA::_SIGN_IN` = 'sign-in'.
* `FA::_SIGN_OUT` = 'sign-out'.
* `FA::_SIGNAL` = 'signal'.
* `FA::_SIMPLYBUILT` = 'simplybuilt'.
* `FA::_SITEMAP` = 'sitemap'.
* `FA::_SKYATLAS` = 'skyatlas'.
* `FA::_SKYPE` = 'skype'.
* `FA::_SLACK` = 'slack'.
* `FA::_SLIDERS` = 'sliders'.
* `FA::_SLIDESHARE` = 'slideshare'.
* `FA::_SMILE_O` = 'smile-o'.
* `FA::_SOCCER_BALL_O` = 'soccer-ball-o'.
* `FA::_SORT` = 'sort'.
* `FA::_SORT_ALPHA_ASC` = 'sort-alpha-asc'.
* `FA::_SORT_ALPHA_DESC` = 'sort-alpha-desc'.
* `FA::_SORT_AMOUNT_ASC` = 'sort-amount-asc'.
* `FA::_SORT_AMOUNT_DESC` = 'sort-amount-desc'.
* `FA::_SORT_ASC` = 'sort-asc'.
* `FA::_SORT_DESC` = 'sort-desc'.
* `FA::_SORT_DOWN` = 'sort-down'.
* `FA::_SORT_NUMERIC_ASC` = 'sort-numeric-asc'.
* `FA::_SORT_NUMERIC_DESC` = 'sort-numeric-desc'.
* `FA::_SORT_UP` = 'sort-up'.
* `FA::_SOUNDCLOUD` = 'soundcloud'.
* `FA::_SPACE_SHUTTLE` = 'space-shuttle'.
* `FA::_SPINNER` = 'spinner'.
* `FA::_SPOON` = 'spoon'.
* `FA::_SPOTIFY` = 'spotify'.
* `FA::_SQUARE` = 'square'.
* `FA::_SQUARE_O` = 'square-o'.
* `FA::_STACK_EXCHANGE` = 'stack-exchange'.
* `FA::_STACK_OVERFLOW` = 'stack-overflow'.
* `FA::_STAR` = 'star'.
* `FA::_STAR_HALF` = 'star-half'.
* `FA::_STAR_HALF_EMPTY` = 'star-half-empty'.
* `FA::_STAR_HALF_FULL` = 'star-half-full'.
* `FA::_STAR_HALF_O` = 'star-half-o'.
* `FA::_STAR_O` = 'star-o'.
* `FA::_STEAM` = 'steam'.
* `FA::_STEAM_SQUARE` = 'steam-square'.
* `FA::_STEP_BACKWARD` = 'step-backward'.
* `FA::_STEP_FORWARD` = 'step-forward'.
* `FA::_STETHOSCOPE` = 'stethoscope'.
* `FA::_STICKY_NOTE` = 'sticky-note'.
* `FA::_STICKY_NOTE_O` = 'sticky-note-o'.
* `FA::_STOP` = 'stop'.
* `FA::_STREET_VIEW` = 'street-view'.
* `FA::_STRIKETHROUGH` = 'strikethrough'.
* `FA::_STUMBLEUPON` = 'stumbleupon'.
* `FA::_STUMBLEUPON_CIRCLE` = 'stumbleupon-circle'.
* `FA::_SUBSCRIPT` = 'subscript'.
* `FA::_SUBWAY` = 'subway'.
* `FA::_SUITCASE` = 'suitcase'.
* `FA::_SUN_O` = 'sun-o'.
* `FA::_SUPERSCRIPT` = 'superscript'.
* `FA::_SUPPORT` = 'support'.
* `FA::_TABLE` = 'table'.
* `FA::_TABLET` = 'tablet'.
* `FA::_TACHOMETER` = 'tachometer'.
* `FA::_TAG` = 'tag'.
* `FA::_TAGS` = 'tags'.
* `FA::_TASKS` = 'tasks'.
* `FA::_TAXI` = 'taxi'.
* `FA::_TELEVISION` = 'television'.
* `FA::_TENCENT_WEIBO` = 'tencent-weibo'.
* `FA::_TERMINAL` = 'terminal'.
* `FA::_TEXT_HEIGHT` = 'text-height'.
* `FA::_TEXT_WIDTH` = 'text-width'.
* `FA::_TH` = 'th'.
* `FA::_TH_LARGE` = 'th-large'.
* `FA::_TH_LIST` = 'th-list'.
* `FA::_THUMB_TACK` = 'thumb-tack'.
* `FA::_THUMBS_DOWN` = 'thumbs-down'.
* `FA::_THUMBS_O_DOWN` = 'thumbs-o-down'.
* `FA::_THUMBS_O_UP` = 'thumbs-o-up'.
* `FA::_THUMBS_UP` = 'thumbs-up'.
* `FA::_TICKET` = 'ticket'.
* `FA::_TIMES` = 'times'.
* `FA::_TIMES_CIRCLE` = 'times-circle'.
* `FA::_TIMES_CIRCLE_O` = 'times-circle-o'.
* `FA::_TINT` = 'tint'.
* `FA::_TOGGLE_DOWN` = 'toggle-down'.
* `FA::_TOGGLE_LEFT` = 'toggle-left'.
* `FA::_TOGGLE_OFF` = 'toggle-off'.
* `FA::_TOGGLE_ON` = 'toggle-on'.
* `FA::_TOGGLE_RIGHT` = 'toggle-right'.
* `FA::_TOGGLE_UP` = 'toggle-up'.
* `FA::_TRADEMARK` = 'trademark'.
* `FA::_TRAIN` = 'train'.
* `FA::_TRANSGENDER` = 'transgender'.
* `FA::_TRANSGENDER_ALT` = 'transgender-alt'.
* `FA::_TRASH` = 'trash'.
* `FA::_TRASH_O` = 'trash-o'.
* `FA::_TREE` = 'tree'.
* `FA::_TRELLO` = 'trello'.
* `FA::_TRIPADVISOR` = 'tripadvisor'.
* `FA::_TROPHY` = 'trophy'.
* `FA::_TRUCK` = 'truck'.
* `FA::_TRY` = 'try'.
* `FA::_TTY` = 'tty'.
* `FA::_TUMBLR` = 'tumblr'.
* `FA::_TUMBLR_SQUARE` = 'tumblr-square'.
* `FA::_TURKISH_LIRA` = 'turkish-lira'.
* `FA::_TV` = 'tv'.
* `FA::_TWITCH` = 'twitch'.
* `FA::_TWITTER` = 'twitter'.
* `FA::_TWITTER_SQUARE` = 'twitter-square'.
* `FA::_UMBRELLA` = 'umbrella'.
* `FA::_UNDERLINE` = 'underline'.
* `FA::_UNDO` = 'undo'.
* `FA::_UNIVERSITY` = 'university'.
* `FA::_UNLINK` = 'unlink'.
* `FA::_UNLOCK` = 'unlock'.
* `FA::_UNLOCK_ALT` = 'unlock-alt'.
* `FA::_UNSORTED` = 'unsorted'.
* `FA::_UPLOAD` = 'upload'.
* `FA::_USD` = 'usd'.
* `FA::_USER` = 'user'.
* `FA::_USER_MD` = 'user-md'.
* `FA::_USER_PLUS` = 'user-plus'.
* `FA::_USER_SECRET` = 'user-secret'.
* `FA::_USER_TIMES` = 'user-times'.
* `FA::_USERS` = 'users'.
* `FA::_VENUS` = 'venus'.
* `FA::_VENUS_DOUBLE` = 'venus-double'.
* `FA::_VENUS_MARS` = 'venus-mars'.
* `FA::_VIACOIN` = 'viacoin'.
* `FA::_VIDEO_CAMERA` = 'video-camera'.
* `FA::_VIMEO` = 'vimeo'.
* `FA::_VIMEO_SQUARE` = 'vimeo-square'.
* `FA::_VINE` = 'vine'.
* `FA::_VK` = 'vk'.
* `FA::_VOLUME_DOWN` = 'volume-down'.
* `FA::_VOLUME_OFF` = 'volume-off'.
* `FA::_VOLUME_UP` = 'volume-up'.
* `FA::_WARNING` = 'warning'.
* `FA::_WECHAT` = 'wechat'.
* `FA::_WEIBO` = 'weibo'.
* `FA::_WEIXIN` = 'weixin'.
* `FA::_WHATSAPP` = 'whatsapp'.
* `FA::_WHEELCHAIR` = 'wheelchair'.
* `FA::_WIFI` = 'wifi'.
* `FA::_WIKIPEDIA_W` = 'wikipedia-w'.
* `FA::_WINDOWS` = 'windows'.
* `FA::_WON` = 'won'.
* `FA::_WORDPRESS` = 'wordpress'.
* `FA::_WRENCH` = 'wrench'.
* `FA::_XING` = 'xing'.
* `FA::_XING_SQUARE` = 'xing-square'.
* `FA::_Y_COMBINATOR` = 'y-combinator'.
* `FA::_Y_COMBINATOR_SQUARE` = 'y-combinator-square'.
* `FA::_YAHOO` = 'yahoo'.
* `FA::_YC` = 'yc'.
* `FA::_YC_SQUARE` = 'yc-square'.
* `FA::_YELP` = 'yelp'.
* `FA::_YEN` = 'yen'.
* `FA::_YOUTUBE` = 'youtube'.
* `FA::_YOUTUBE_PLAY` = 'youtube-play'.
* `FA::_YOUTUBE_SQUARE` = 'youtube-square'.


See the example page in [`yii2-p2y2-things-demo`](https://github.com/p2made/yii2-p2y2-things-demo) for usage examples.
