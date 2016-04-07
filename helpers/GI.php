<?php
/**
 * GI.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\helpers;

/**
 * Use this helper with...
 *
 * use p2made\helpers\GI;
 * ...
 * echo GI::method([$params]);
 *
 * or
 *
 * echo \p2made\helpers\GI::method([$params]);
 */

/**
 * Class GI
 * @package p2made\yii2-p2y2-things
 */
class GI extends \p2made\helpers\base\Glyphicons
{


	/**
	 * Size values
	 * @see p2made\components\SocialButton
	 */
	const _ADJUST = 'adjust';
	const _ALERT = 'alert';
	const _ALIGN_CENTER = 'align-center';
	const _ALIGN_JUSTIFY = 'align-justify';
	const _ALIGN_LEFT = 'align-left';
	const _ALIGN_RIGHT = 'align-right';
	const _APPLE = 'apple';
	const _ARROW_DOWN = 'arrow-down';
	const _ARROW_LEFT = 'arrow-left';
	const _ARROW_RIGHT = 'arrow-right';
	const _ARROW_UP = 'arrow-up';
	const _ASTERISK = 'asterisk';
	const _BABY_FORMULA = 'baby-formula';
	const _BACKWARD = 'backward';
	const _BAN_CIRCLE = 'ban-circle';
	const _BARCODE = 'barcode';
	const _BED = 'bed';
	const _BELL = 'bell';
	const _BISHOP = 'bishop';
	const _BITCOIN = 'bitcoin';
	const _BLACKBOARD = 'blackboard';
	const _BOLD = 'bold';
	const _BOOK = 'book';
	const _BOOKMARK = 'bookmark';
	const _BRIEFCASE = 'briefcase';
	const _BTC = 'btc';
	const _BULLHORN = 'bullhorn';
	const _CALENDAR = 'calendar';
	const _CAMERA = 'camera';
	const _CD = 'cd';
	const _CERTIFICATE = 'certificate';
	const _CHECK = 'check';
	const _CHEVRON_DOWN = 'chevron-down';
	const _CHEVRON_LEFT = 'chevron-left';
	const _CHEVRON_RIGHT = 'chevron-right';
	const _CHEVRON_UP = 'chevron-up';
	const _CIRCLE_ARROW_DOWN = 'circle-arrow-down';
	const _CIRCLE_ARROW_LEFT = 'circle-arrow-left';
	const _CIRCLE_ARROW_RIGHT = 'circle-arrow-right';
	const _CIRCLE_ARROW_UP = 'circle-arrow-up';
	const _CLOUD = 'cloud';
	const _CLOUD_DOWNLOAD = 'cloud-download';
	const _CLOUD_UPLOAD = 'cloud-upload';
	const _COG = 'cog';
	const _COLLAPSE_DOWN = 'collapse-down';
	const _COLLAPSE_UP = 'collapse-up';
	const _COMMENT = 'comment';
	const _COMPRESSED = 'compressed';
	const _CONSOLE = 'console';
	const _COPY = 'copy';
	const _COPYRIGHT_MARK = 'copyright-mark';
	const _CREDIT_CARD = 'credit-card';
	const _CUTLERY = 'cutlery';
	const _DASHBOARD = 'dashboard';
	const _DOWNLOAD = 'download';
	const _DOWNLOAD_ALT = 'download-alt';
	const _DUPLICATE = 'duplicate';
	const _EARPHONE = 'earphone';
	const _EDIT = 'edit';
	const _EDUCATION = 'education';
	const _EJECT = 'eject';
	const _ENVELOPE = 'envelope';
	const _EQUALIZER = 'equalizer';
	const _ERASE = 'erase';
	const _EUR = 'eur';
	const _EURO = 'euro';
	const _EXCLAMATION_SIGN = 'exclamation-sign';
	const _EXPAND = 'expand';
	const _EXPORT = 'export';
	const _EYE_CLOSE = 'eye-close';
	const _EYE_OPEN = 'eye-open';
	const _FACETIME_VIDEO = 'facetime-video';
	const _FAST_BACKWARD = 'fast-backward';
	const _FAST_FORWARD = 'fast-forward';
	const _FILE = 'file';
	const _FILM = 'film';
	const _FILTER = 'filter';
	const _FIRE = 'fire';
	const _FLAG = 'flag';
	const _FLASH = 'flash';
	const _FLOPPY_DISK = 'floppy-disk';
	const _FLOPPY_OPEN = 'floppy-open';
	const _FLOPPY_REMOVE = 'floppy-remove';
	const _FLOPPY_SAVE = 'floppy-save';
	const _FLOPPY_SAVED = 'floppy-saved';
	const _FOLDER_CLOSE = 'folder-close';
	const _FOLDER_OPEN = 'folder-open';
	const _FONT = 'font';
	const _FORWARD = 'forward';
	const _FULLSCREEN = 'fullscreen';
	const _GBP = 'gbp';
	const _GIFT = 'gift';
	const _GLASS = 'glass';
	const _GLOBE = 'globe';
	const _GRAIN = 'grain';
	const _HAND_DOWN = 'hand-down';
	const _HAND_LEFT = 'hand-left';
	const _HAND_RIGHT = 'hand-right';
	const _HAND_UP = 'hand-up';
	const _HD_VIDEO = 'hd-video';
	const _HDD = 'hdd';
	const _HEADER = 'header';
	const _HEADPHONES = 'headphones';
	const _HEART = 'heart';
	const _HEART_EMPTY = 'heart-empty';
	const _HOME = 'home';
	const _HOURGLASS = 'hourglass';
	const _ICE_LOLLY = 'ice-lolly';
	const _ICE_LOLLY_TASTED = 'ice-lolly-tasted';
	const _IMPORT = 'import';
	const _INBOX = 'inbox';
	const _INDENT_LEFT = 'indent-left';
	const _INDENT_RIGHT = 'indent-right';
	const _INFO_SIGN = 'info-sign';
	const _ITALIC = 'italic';
	const _JPY = 'jpy';
	const _KING = 'king';
	const _KNIGHT = 'knight';
	const _LAMP = 'lamp';
	const _LEAF = 'leaf';
	const _LEVEL_UP = 'level-up';
	const _LINK = 'link';
	const _LIST = 'list';
	const _LIST_ALT = 'list-alt';
	const _LOCK = 'lock';
	const _LOG_IN = 'log-in';
	const _LOG_OUT = 'log-out';
	const _MAGNET = 'magnet';
	const _MAP_MARKER = 'map-marker';
	const _MENU_DOWN = 'menu-down';
	const _MENU_HAMBURGER = 'menu-hamburger';
	const _MENU_LEFT = 'menu-left';
	const _MENU_RIGHT = 'menu-right';
	const _MENU_UP = 'menu-up';
	const _MINUS = 'minus';
	const _MINUS_SIGN = 'minus-sign';
	const _MODAL_WINDOW = 'modal-window';
	const _MOVE = 'move';
	const _MUSIC = 'music';
	const _NEW_WINDOW = 'new-window';
	const _OBJECT_ALIGN_BOTTOM = 'object-align-bottom';
	const _OBJECT_ALIGN_HORIZONTAL = 'object-align-horizontal';
	const _OBJECT_ALIGN_LEFT = 'object-align-left';
	const _OBJECT_ALIGN_RIGHT = 'object-align-right';
	const _OBJECT_ALIGN_TOP = 'object-align-top';
	const _OBJECT_ALIGN_VERTICAL = 'object-align-vertical';
	const _OFF = 'off';
	const _OIL = 'oil';
	const _OK = 'ok';
	const _OK_CIRCLE = 'ok-circle';
	const _OK_SIGN = 'ok-sign';
	const _OPEN = 'open';
	const _OPEN_FILE = 'open-file';
	const _OPTION_HORIZONTAL = 'option-horizontal';
	const _OPTION_VERTICAL = 'option-vertical';
	const _PAPERCLIP = 'paperclip';
	const _PASTE = 'paste';
	const _PAUSE = 'pause';
	const _PAWN = 'pawn';
	const _PENCIL = 'pencil';
	const _PHONE = 'phone';
	const _PHONE_ALT = 'phone-alt';
	const _PICTURE = 'picture';
	const _PIGGY_BANK = 'piggy-bank';
	const _PLANE = 'plane';
	const _PLAY = 'play';
	const _PLAY_CIRCLE = 'play-circle';
	const _PLUS = 'plus';
	const _PLUS_SIGN = 'plus-sign';
	const _PRINT = 'print';
	const _PUSHPIN = 'pushpin';
	const _QRCODE = 'qrcode';
	const _QUEEN = 'queen';
	const _QUESTION_SIGN = 'question-sign';
	const _RANDOM = 'random';
	const _RECORD = 'record';
	const _REFRESH = 'refresh';
	const _REGISTRATION_MARK = 'registration-mark';
	const _REMOVE = 'remove';
	const _REMOVE_CIRCLE = 'remove-circle';
	const _REMOVE_SIGN = 'remove-sign';
	const _REPEAT = 'repeat';
	const _RESIZE_FULL = 'resize-full';
	const _RESIZE_HORIZONTAL = 'resize-horizontal';
	const _RESIZE_SMALL = 'resize-small';
	const _RESIZE_VERTICAL = 'resize-vertical';
	const _RETWEET = 'retweet';
	const _ROAD = 'road';
	const _RUB = 'rub';
	const _RUBLE = 'ruble';
	const _SAVE = 'save';
	const _SAVE_FILE = 'save-file';
	const _SAVED = 'saved';
	const _SCALE = 'scale';
	const _SCISSORS = 'scissors';
	const _SCREENSHOT = 'screenshot';
	const _SD_VIDEO = 'sd-video';
	const _SEARCH = 'search';
	const _SEND = 'send';
	const _SHARE = 'share';
	const _SHARE_ALT = 'share-alt';
	const _SHOPPING_CART = 'shopping-cart';
	const _SIGNAL = 'signal';
	const _SORT = 'sort';
	const _SORT_BY_ALPHABET = 'sort-by-alphabet';
	const _SORT_BY_ALPHABET_ALT = 'sort-by-alphabet-alt';
	const _SORT_BY_ATTRIBUTES = 'sort-by-attributes';
	const _SORT_BY_ATTRIBUTES_ALT = 'sort-by-attributes-alt';
	const _SORT_BY_ORDER = 'sort-by-order';
	const _SORT_BY_ORDER_ALT = 'sort-by-order-alt';
	const _SOUND_5_1 = 'sound-5-1';
	const _SOUND_6_1 = 'sound-6-1';
	const _SOUND_7_1 = 'sound-7-1';
	const _SOUND_DOLBY = 'sound-dolby';
	const _SOUND_STEREO = 'sound-stereo';
	const _STAR = 'star';
	const _STAR_EMPTY = 'star-empty';
	const _STATS = 'stats';
	const _STEP_BACKWARD = 'step-backward';
	const _STEP_FORWARD = 'step-forward';
	const _STOP = 'stop';
	const _SUBSCRIPT = 'subscript';
	const _SUBTITLES = 'subtitles';
	const _SUNGLASSES = 'sunglasses';
	const _SUPERSCRIPT = 'superscript';
	const _TAG = 'tag';
	const _TAGS = 'tags';
	const _TASKS = 'tasks';
	const _TENT = 'tent';
	const _TEXT_BACKGROUND = 'text-background';
	const _TEXT_COLOR = 'text-color';
	const _TEXT_HEIGHT = 'text-height';
	const _TEXT_SIZE = 'text-size';
	const _TEXT_WIDTH = 'text-width';
	const _TH = 'th';
	const _TH_LARGE = 'th-large';
	const _TH_LIST = 'th-list';
	const _THUMBS_DOWN = 'thumbs-down';
	const _THUMBS_UP = 'thumbs-up';
	const _TIME = 'time';
	const _TINT = 'tint';
	const _TOWER = 'tower';
	const _TRANSFER = 'transfer';
	const _TRASH = 'trash';
	const _TREE_CONIFER = 'tree-conifer';
	const _TREE_DECIDUOUS = 'tree-deciduous';
	const _TRIANGLE_BOTTOM = 'triangle-bottom';
	const _TRIANGLE_LEFT = 'triangle-left';
	const _TRIANGLE_RIGHT = 'triangle-right';
	const _TRIANGLE_TOP = 'triangle-top';
	const _UNCHECKED = 'unchecked';
	const _UPLOAD = 'upload';
	const _USD = 'usd';
	const _USER = 'user';
	const _VOLUME_DOWN = 'volume-down';
	const _VOLUME_OFF = 'volume-off';
	const _VOLUME_UP = 'volume-up';
	const _WARNING_SIGN = 'warning-sign';
	const _WRENCH = 'wrench';
	const _XBT = 'xbt';
	const _YEN = 'yen';
	const _ZOOM_IN = 'zoom-in';
	const _ZOOM_OUT = 'zoom-out';

	/**
	 * Size values
	 * @see p2made\components\SocialButton::size
	 */
	const SIZE_LARGE = 'lg';
	const SIZE_SMALL = 'sm';
	const SIZE_XSMALL = 'xs';
}
