<?php
/**
 * FI.php
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
 * use p2made\helpers\FI;
 * ...
 * echo FI::i($flag, $options = []);
 * echo FI::span($flag, $options = []);
 * echo FI::div($flag, $options = []);
 *
 * or
 *
 * echo \p2made\helpers\FI::i($flag, $options = []);
 * echo \p2made\helpers\FI::span($flag, $options = []);
 * echo \p2made\helpers\FI::div($flag, $options = []);
 */

/**
 * Class FI
 * @package p2made\yii2-p2y2-things
 */
class FI extends \p2made\helpers\base\FlagIconCss
{

	/**
	 * ISO 3166-1 Flags
	 */
	const _AD = 'ad';
	const _AE = 'ae';
	const _AF = 'af';
	const _AG = 'ag';
	const _AI = 'ai';
	const _AL = 'al';
	const _AM = 'am';
	const _AO = 'ao';
	const _AQ = 'aq';
	const _AR = 'ar';
	const _AS = 'as';
	const _AT = 'at';
	const _AU = 'au';
	const _AW = 'aw';
	const _AX = 'ax';
	const _AZ = 'az';
	const _BA = 'ba';
	const _BB = 'bb';
	const _BD = 'bd';
	const _BE = 'be';
	const _BF = 'bf';
	const _BG = 'bg';
	const _BH = 'bh';
	const _BI = 'bi';
	const _BJ = 'bj';
	const _BL = 'bl';
	const _BM = 'bm';
	const _BN = 'bn';
	const _BO = 'bo';
	const _BQ = 'bq';
	const _BR = 'br';
	const _BS = 'bs';
	const _BT = 'bt';
	const _BV = 'bv';
	const _BW = 'bw';
	const _BY = 'by';
	const _BZ = 'bz';
	const _CA = 'ca';
	const _CC = 'cc';
	const _CD = 'cd';
	const _CF = 'cf';
	const _CG = 'cg';
	const _CH = 'ch';
	const _CI = 'ci';
	const _CK = 'ck';
	const _CL = 'cl';
	const _CM = 'cm';
	const _CN = 'cn';
	const _CO = 'co';
	const _CR = 'cr';
	const _CU = 'cu';
	const _CV = 'cv';
	const _CW = 'cw';
	const _CX = 'cx';
	const _CY = 'cy';
	const _CZ = 'cz';
	const _DE = 'de';
	const _DJ = 'dj';
	const _DK = 'dk';
	const _DM = 'dm';
	const _DO = 'do';
	const _DZ = 'dz';
	const _EC = 'ec';
	const _EE = 'ee';
	const _EG = 'eg';
	const _EH = 'eh';
	const _ER = 'er';
	const _ES = 'es';
	const _ET = 'et';
	const _FI = 'fi';
	const _FJ = 'fj';
	const _FK = 'fk';
	const _FM = 'fm';
	const _FO = 'fo';
	const _FR = 'fr';
	const _GA = 'ga';
	const _GB = 'gb';
	const _GD = 'gd';
	const _GE = 'ge';
	const _GF = 'gf';
	const _GG = 'gg';
	const _GH = 'gh';
	const _GI = 'gi';
	const _GL = 'gl';
	const _GM = 'gm';
	const _GN = 'gn';
	const _GP = 'gp';
	const _GQ = 'gq';
	const _GR = 'gr';
	const _GS = 'gs';
	const _GT = 'gt';
	const _GU = 'gu';
	const _GW = 'gw';
	const _GY = 'gy';
	const _HK = 'hk';
	const _HM = 'hm';
	const _HN = 'hn';
	const _HR = 'hr';
	const _HT = 'ht';
	const _HU = 'hu';
	const _ID = 'id';
	const _IE = 'ie';
	const _IL = 'il';
	const _IM = 'im';
	const _IN = 'in';
	const _IO = 'io';
	const _IQ = 'iq';
	const _IR = 'ir';
	const _IS = 'is';
	const _IT = 'it';
	const _JE = 'je';
	const _JM = 'jm';
	const _JO = 'jo';
	const _JP = 'jp';
	const _KE = 'ke';
	const _KG = 'kg';
	const _KH = 'kh';
	const _KI = 'ki';
	const _KM = 'km';
	const _KN = 'kn';
	const _KP = 'kp';
	const _KR = 'kr';
	const _KW = 'kw';
	const _KY = 'ky';
	const _KZ = 'kz';
	const _LA = 'la';
	const _LB = 'lb';
	const _LC = 'lc';
	const _LI = 'li';
	const _LK = 'lk';
	const _LR = 'lr';
	const _LS = 'ls';
	const _LT = 'lt';
	const _LU = 'lu';
	const _LV = 'lv';
	const _LY = 'ly';
	const _MA = 'ma';
	const _MC = 'mc';
	const _MD = 'md';
	const _ME = 'me';
	const _MF = 'mf';
	const _MG = 'mg';
	const _MH = 'mh';
	const _MK = 'mk';
	const _ML = 'ml';
	const _MM = 'mm';
	const _MN = 'mn';
	const _MO = 'mo';
	const _MP = 'mp';
	const _MQ = 'mq';
	const _MR = 'mr';
	const _MS = 'ms';
	const _MT = 'mt';
	const _MU = 'mu';
	const _MV = 'mv';
	const _MW = 'mw';
	const _MX = 'mx';
	const _MY = 'my';
	const _MZ = 'mz';
	const _NA = 'na';
	const _NC = 'nc';
	const _NE = 'ne';
	const _NF = 'nf';
	const _NG = 'ng';
	const _NI = 'ni';
	const _NL = 'nl';
	const _NO = 'no';
	const _NP = 'np';
	const _NR = 'nr';
	const _NU = 'nu';
	const _NZ = 'nz';
	const _OM = 'om';
	const _PA = 'pa';
	const _PE = 'pe';
	const _PF = 'pf';
	const _PG = 'pg';
	const _PH = 'ph';
	const _PK = 'pk';
	const _PL = 'pl';
	const _PM = 'pm';
	const _PN = 'pn';
	const _PR = 'pr';
	const _PS = 'ps';
	const _PT = 'pt';
	const _PW = 'pw';
	const _PY = 'py';
	const _QA = 'qa';
	const _RE = 're';
	const _RO = 'ro';
	const _RS = 'rs';
	const _RU = 'ru';
	const _RW = 'rw';
	const _SA = 'sa';
	const _SB = 'sb';
	const _SC = 'sc';
	const _SD = 'sd';
	const _SE = 'se';
	const _SG = 'sg';
	const _SH = 'sh';
	const _SI = 'si';
	const _SJ = 'sj';
	const _SK = 'sk';
	const _SL = 'sl';
	const _SM = 'sm';
	const _SN = 'sn';
	const _SO = 'so';
	const _SR = 'sr';
	const _SS = 'ss';
	const _ST = 'st';
	const _SV = 'sv';
	const _SX = 'sx';
	const _SY = 'sy';
	const _SZ = 'sz';
	const _TC = 'tc';
	const _TD = 'td';
	const _TF = 'tf';
	const _TG = 'tg';
	const _TH = 'th';
	const _TJ = 'tj';
	const _TK = 'tk';
	const _TL = 'tl';
	const _TM = 'tm';
	const _TN = 'tn';
	const _TO = 'to';
	const _TR = 'tr';
	const _TT = 'tt';
	const _TV = 'tv';
	const _TW = 'tw';
	const _TZ = 'tz';
	const _UA = 'ua';
	const _UG = 'ug';
	const _UM = 'um';
	const _US = 'us';
	const _UY = 'uy';
	const _UZ = 'uz';
	const _VA = 'va';
	const _VC = 'vc';
	const _VE = 've';
	const _VG = 'vg';
	const _VI = 'vi';
	const _VN = 'vn';
	const _VU = 'vu';
	const _WF = 'wf';
	const _WS = 'ws';
	const _YE = 'ye';
	const _YT = 'yt';
	const _ZA = 'za';
	const _ZM = 'zm';
	const _ZW = 'zw';

	/**
	 * Other Flags
	 */
	const _EU = 'eu';
	const _GB_ENG = 'gb-eng';
	const _GB_SCT = 'gb-sct';
	const _GB_WLS = 'gb-wls';
	const _UN = 'un';

	/**
	 * Size values
	 * @see p2made\components\SocialButton::size
	 */
	const SIZE_LARGE = 'lg';
	const SIZE_SMALL = 'sm';
	const SIZE_XSMALL = 'xs';

}
