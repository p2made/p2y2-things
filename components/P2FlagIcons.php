<?php
/**
 * P2FlagIcons.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\components\P2FlagIcons
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\components;

use p2m\components\P2Flag;

class P2FlagIcons
{
	/**
	 * CSS class prefix
	 * @var string
	 */
	public static $cssPrefix = self::FLAG_ICON;

	/**
	 * CSS base prefix
	 * @var string
	 */
	public static $basePrefix = self::FLAG_ICON;

	/**
	 * CSS square suffix
	 * @var string
	 */
	public static $squarePrefix = self::SQUARE_FLAG;

	/**
	 * Creates an `Icon` component that can be used to FontAwesome html icon
	 *
	 * @param string $name
	 * @param array $options
	 * @return P2Flag
	 */
	public static function icon($name, $options = [])
	{
		return new P2Flag(static::$cssPrefix, $name, $options);
	}

	/**
	 * Shortcut for `icon()` method
	 * @param string $name
	 * @param array $options
	 * @return P2Flag
	 * @see icon()
	 *
	 */
	public static function i($name, $options = [])
	{
		return static::icon($name, $options);
	}

	const FLAG_ICON   = 'fi';  // Flag Icon
	const FLAG_BUTTON = 'fib'; // Flag Button
	const SQUARE_FLAG = 'fis'; // Flag Icon Square

	/**
	 * flags name
	 */

	const _UNKNOWN                                  = 'xx'; // Unknown

// Asia

	const _EAST_TURKESTAN = 'cn-et'; // East Turkestan

// Australia

	const _ABORIGINAL_AUSTRALIANS = 'au-aa'; // Aboriginal Australians
	const _EUREKA_FLAG = 'au-eu'; // Eureka Flag
	const _TORRES_STRAIT_ISLANDS = 'au-tsi'; // Torres Strait Islands

// Europe

	const _ALTAI_REPUBLIC = 'ru-al'; // Altai Republic
	const _ASTRAKHAN_OBLAST = 'ru-ast'; // Astrakhan Oblast
	const _AZORES = 'pt-20'; // Azores
	const _BALEARIC_ISLANDS = 'es-ib'; // Balearic Islands
	const _BASHKORTOSTAN = 'ru-ba'; // Bashkortostan
	const _BURYATIA = 'ru-bu'; // Buryatia
	const _CHECHNYA = 'ru-ce'; // Chechnya
	const _CHELYABINSK_OBLAST = 'ru-che'; // Chelyabinsk Oblast
	const _CHUVASHIA = 'ru-cu'; // Chuvashia
	const _CRIMEA = 'ua-43'; // Crimea
	const _CRIMEAN_TATARS = 'ua-ct'; // Crimean Tatars
	const _DAGESTAN = 'ru-da'; // Dagestan
	const _KALMYKIA = 'ru-kl'; // Kalmykia
	const _KARAKALPAKSTAN = 'uz-qr'; // Karakalpakstan
	const _KURGAN_OBLAST = 'ru-kgn'; // Kurgan Oblast
	const _MADEIRA = 'pt-30'; // Madeira
	const _NAVARRA = 'es-na'; // Navarra
	const _SAKHA_REPUBLIC = 'ru-sa'; // Sakha Republic (Yakutia)
	const _SVERDLOVSK_OBLAST = 'ru-sve'; // Sverdlovsk Oblast
	const _TATARSTAN = 'ru-ta'; // Tatarstan
	const _TUVA = 'ru-ty'; // Tuva

// Organisation

	const _TURKIC_STATES = 'turkic'; // Organisation of Turkic States

// Organisations

	const _ASEAN                                    = 'asean'; // Association of Southeast Asian Nations
	const _CEFTA                                    = 'cefta'; // Central European Free Trade Agreement
	const _EAST_AFRICAN_COMMUNITY                   = 'eac'; // East African Community
	const _EUROPE                                   = 'eu'; // European Union
	const _LEAGUE_OF_ARAB_STATES                    = 'arab'; // League of Arab States
	const _PACIFIC_COMMUNITY                        = 'pc'; // Pacific Community
	const _UNITED_NATIONS                           = 'un'; // United Nations

// Africa

	const _ALGERIA                                  = 'dz'; // Algeria
	const _ANGOLA                                   = 'ao'; // Angola
	const _ASCENSION_ISLAND                         = 'sh-ac'; // Ascension Island
	const _BENIN                                    = 'bj'; // Benin
	const _BOTSWANA                                 = 'bw'; // Botswana
	const _BURKINA_FASO                             = 'bf'; // Burkina Faso
	const _BURUNDI                                  = 'bi'; // Burundi
	const _CABO_VERDE                               = 'cv'; // Cabo Verde
	const _CAMEROON                                 = 'cm'; // Cameroon
	const _CENTRAL_AFRICAN_REPUBLIC                 = 'cf'; // Central African Republic
	const _CHAD                                     = 'td'; // Chad
	const _COMOROS                                  = 'km'; // Comoros
	const _COTE_DIVOIRE                             = 'ci'; // Côte d'Ivoire
	const _DEMOCRATIC_REPUBLIC_OF_THE_CONGO         = 'cd'; // Democratic Republic of the Congo
	const _DJIBOUTI                                 = 'dj'; // Djibouti
	const _EGYPT                                    = 'eg'; // Egypt
	const _EQUATORIAL_GUINEA                        = 'gq'; // Equatorial Guinea
	const _ERITREA                                  = 'er'; // Eritrea
	const _ESWATINI                                 = 'sz'; // Eswatini
	const _ETHIOPIA                                 = 'et'; // Ethiopia
	const _FRENCH_SOUTHERN_TERRITORIES              = 'tf'; // French Southern Territories
	const _GABON                                    = 'ga'; // Gabon
	const _GAMBIA                                   = 'gm'; // Gambia
	const _GHANA                                    = 'gh'; // Ghana
	const _GUINEA                                   = 'gn'; // Guinea
	const _GUINEA_BISSAU                            = 'gw'; // Guinea-Bissau
	const _KENYA                                    = 'ke'; // Kenya
	const _LESOTHO                                  = 'ls'; // Lesotho
	const _LIBERIA                                  = 'lr'; // Liberia
	const _LIBYA                                    = 'ly'; // Libya
	const _MADAGASCAR                               = 'mg'; // Madagascar
	const _MALAWI                                   = 'mw'; // Malawi
	const _MALI                                     = 'ml'; // Mali
	const _MAURITANIA                               = 'mr'; // Mauritania
	const _MAURITIUS                                = 'mu'; // Mauritius
	const _MAYOTTE                                  = 'yt'; // Mayotte
	const _MOROCCO                                  = 'ma'; // Morocco
	const _MOZAMBIQUE                               = 'mz'; // Mozambique
	const _NAMIBIA                                  = 'na'; // Namibia
	const _NIGER                                    = 'ne'; // Niger
	const _NIGERIA                                  = 'ng'; // Nigeria
	const _REPUBLIC_OF_THE_CONGO                    = 'cg'; // Republic of the Congo
	const _REUNION                                  = 're'; // Réunion
	const _RWANDA                                   = 'rw'; // Rwanda
	const _SAINT_HELENA                             = 'sh-hl'; // Saint Helena
	const _SAINT_HELENA_ASCENSION_TRISTAN_DA_CUNHA  = 'sh'; // Saint Helena, Ascension & Tristan da Cunha
	const _SAO_TOME_PRINCIPE                        = 'st'; // Sao Tome & Principe
	const _SENEGAL                                  = 'sn'; // Senegal
	const _SEYCHELLES                               = 'sc'; // Seychelles
	const _SIERRA_LEONE                             = 'sl'; // Sierra Leone
	const _SOMALIA                                  = 'so'; // Somalia
	const _SOUTH_AFRICA                             = 'za'; // South Africa
	const _SOUTH_SUDAN                              = 'ss'; // South Sudan
	const _SUDAN                                    = 'sd'; // Sudan
	const _TANZANIA                                 = 'tz'; // Tanzania
	const _TOGO                                     = 'tg'; // Togo
	const _TRISTAN_DA_CUNHA                         = 'sh-ta'; // Tristan da Cunha
	const _TUNISIA                                  = 'tn'; // Tunisia
	const _UGANDA                                   = 'ug'; // Uganda
	const _WESTERN_SAHARA                           = 'eh'; // Western Sahara
	const _ZAMBIA                                   = 'zm'; // Zambia
	const _ZIMBABWE                                 = 'zw'; // Zimbabwe

// America, North

	const _ANGUILLA                                 = 'ai'; // Anguilla
	const _ANTIGUA_BARBUDA                          = 'ag'; // Antigua & Barbuda
	const _BAHAMAS                                  = 'bs'; // Bahamas
	const _BARBADOS                                 = 'bb'; // Barbados
	const _BELIZE                                   = 'bz'; // Belize
	const _BERMUDA                                  = 'bm'; // Bermuda
	const _CANADA                                   = 'ca'; // Canada
	const _CAYMAN_ISLANDS                           = 'ky'; // Cayman Islands
	const _COSTA_RICA                               = 'cr'; // Costa Rica
	const _CUBA                                     = 'cu'; // Cuba
	const _DOMINICA                                 = 'dm'; // Dominica
	const _DOMINICAN_REPUBLIC                       = 'do'; // Dominican Republic
	const _EL_SALVADOR                              = 'sv'; // El Salvador
	const _GREENLAND                                = 'gl'; // Greenland
	const _GRENADA                                  = 'gd'; // Grenada
	const _GUADELOUPE                               = 'gp'; // Guadeloupe
	const _GUATEMALA                                = 'gt'; // Guatemala
	const _HAITI                                    = 'ht'; // Haiti
	const _HONDURAS                                 = 'hn'; // Honduras
	const _JAMAICA                                  = 'jm'; // Jamaica
	const _MARTINIQUE                               = 'mq'; // Martinique
	const _MEXICO                                   = 'mx'; // Mexico
	const _MONTSERRAT                               = 'ms'; // Montserrat
	const _NICARAGUA                                = 'ni'; // Nicaragua
	const _PANAMA                                   = 'pa'; // Panama
	const _PUERTO_RICO                              = 'pr'; // Puerto Rico
	const _SAINT_BARTHELEMY                         = 'bl'; // Saint Barthélemy
	const _SAINT_KITTS_NEVIS                        = 'kn'; // Saint Kitts & Nevis
	const _SAINT_LUCIA                              = 'lc'; // Saint Lucia
	const _SAINT_MARTIN                             = 'mf'; // Saint Martin
	const _SAINT_PIERRE_MIQUELON                    = 'pm'; // Saint Pierre & Miquelon
	const _SAINT_VINCENT_THE_GRENADINES             = 'vc'; // Saint Vincent & the Grenadines
	const _SINT_MAARTEN                             = 'sx'; // Sint Maarten
	const _TURKS_CAICOS_ISLANDS                     = 'tc'; // Turks & Caicos Islands
	const _UNITED_STATES_MINOR_OUTLYING_ISLANDS     = 'um'; // United States Minor Outlying Islands
	const _UNITED_STATES_OF_AMERICA                 = 'us'; // United States of America
	const _VIRGIN_ISLANDS_BRITISH                   = 'vg'; // Virgin Islands (British)
	const _VIRGIN_ISLANDS_US                        = 'vi'; // Virgin Islands (US)

// America, South

	const _ARGENTINA                                = 'ar'; // Argentina
	const _ARUBA                                    = 'aw'; // Aruba
	const _BOLIVIA                                  = 'bo'; // Bolivia
	const _BONAIRE_SINT_EUSTATIUS_SABA              = 'bq'; // Bonaire, Sint Eustatius & Saba
	const _BRAZIL                                   = 'br'; // Brazil
	const _CHILE                                    = 'cl'; // Chile
	const _COLOMBIA                                 = 'co'; // Colombia
	const _CURAÇAO                                  = 'cw'; // Curaçao
	const _ECUADOR                                  = 'ec'; // Ecuador
	const _FALKLAND_ISLANDS                         = 'fk'; // Falkland Islands
	const _FRENCH_GUIANA                            = 'gf'; // French Guiana
	const _GUYANA                                   = 'gy'; // Guyana
	const _PARAGUAY                                 = 'py'; // Paraguay
	const _PERU                                     = 'pe'; // Peru
	const _SURINAME                                 = 'sr'; // Suriname
	const _TRINIDAD_TOBAGO                          = 'tt'; // Trinidad & Tobago
	const _URUGUAY                                  = 'uy'; // Uruguay
	const _VENEZUELA                                = 've'; // Venezuela

// Antarctica

	const _ANTARCTICA                               = 'aq'; // Antarctica
	const _BOUVET_ISLAND                            = 'bv'; // Bouvet Island
	const _HEARD_ISLAND_MCDONALD_ISLANDS            = 'hm'; // Heard Island & McDonald Islands
	const _SOUTH_GEORGIA_THE_SOUTH_SANDWICH_ISLANDS = 'gs'; // South Georgia & the South Sandwich Islands

// Asia

	const _AFGHANISTAN                              = 'af'; // Afghanistan
	const _ARMENIA                                  = 'am'; // Armenia
	const _AZERBAIJAN                               = 'az'; // Azerbaijan
	const _BAHRAIN                                  = 'bh'; // Bahrain
	const _BANGLADESH                               = 'bd'; // Bangladesh
	const _BHUTAN                                   = 'bt'; // Bhutan
	const _BRITISH_INDIAN_OCEAN_TERRITORY           = 'io'; // British Indian Ocean Territory
	const _BRUNEI_DARUSSALAM                        = 'bn'; // Brunei Darussalam
	const _CAMBODIA                                 = 'kh'; // Cambodia
	const _CHINA                                    = 'cn'; // China
	const _CHRISTMAS_ISLAND                         = 'cx'; // Christmas Island
	const _COCOS_KEELING_ISLANDS                    = 'cc'; // Cocos (Keeling) Islands
	const _GEORGIA                                  = 'ge'; // Georgia
	const _HONG_KONG                                = 'hk'; // Hong Kong
	const _INDIA                                    = 'in'; // India
	const _INDONESIA                                = 'id'; // Indonesia
	const _IRAN                                     = 'ir'; // Iran
	const _IRAQ                                     = 'iq'; // Iraq
	const _ISRAEL                                   = 'il'; // Israel
	const _JAPAN                                    = 'jp'; // Japan
	const _JORDAN                                   = 'jo'; // Jordan
	const _KAZAKHSTAN                               = 'kz'; // Kazakhstan
	const _KUWAIT                                   = 'kw'; // Kuwait
	const _KYRGYZSTAN                               = 'kg'; // Kyrgyzstan
	const _LAOS                                     = 'la'; // Laos
	const _LEBANON                                  = 'lb'; // Lebanon
	const _MACAU                                    = 'mo'; // Macau
	const _MALAYSIA                                 = 'my'; // Malaysia
	const _MALDIVES                                 = 'mv'; // Maldives
	const _MONGOLIA                                 = 'mn'; // Mongolia
	const _MYANMAR                                  = 'mm'; // Myanmar
	const _NEPAL                                    = 'np'; // Nepal
	const _NORTH_KOREA                              = 'kp'; // North Korea
	const _OMAN                                     = 'om'; // Oman
	const _PAKISTAN                                 = 'pk'; // Pakistan
	const _PHILIPPINES                              = 'ph'; // Philippines
	const _QATAR                                    = 'qa'; // Qatar
	const _SAUDI_ARABIA                             = 'sa'; // Saudi Arabia
	const _SINGAPORE                                = 'sg'; // Singapore
	const _SOUTH_KOREA                              = 'kr'; // South Korea
	const _SRI_LANKA                                = 'lk'; // Sri Lanka
	const _STATE_OF_PALESTINE                       = 'ps'; // State of Palestine
	const _SYRIA                                    = 'sy'; // Syria
	const _TAIWAN                                   = 'tw'; // Taiwan
	const _TAJIKISTAN                               = 'tj'; // Tajikistan
	const _THAILAND                                 = 'th'; // Thailand
	const _TIMOR_LESTE                              = 'tl'; // Timor-Leste
	const _TÜRKIYE                                  = 'tr'; // Türkiye
	const _TURKMENISTAN                             = 'tm'; // Turkmenistan
	const _UNITED_ARAB_EMIRATES                     = 'ae'; // United Arab Emirates
	const _UZBEKISTAN                               = 'uz'; // Uzbekistan
	const _VIETNAM                                  = 'vn'; // Vietnam
	const _YEMEN                                    = 'ye'; // Yemen

// Europe

	const _ALAND_ISLANDS                            = 'ax'; // Aland Islands
	const _ALBANIA                                  = 'al'; // Albania
	const _ANDORRA                                  = 'ad'; // Andorra
	const _AUSTRIA                                  = 'at'; // Austria
	const _BASQUE_COUNTRY                           = 'es-pv'; // Basque Country
	const _BELARUS                                  = 'by'; // Belarus
	const _BELGIUM                                  = 'be'; // Belgium
	const _BOSNIA_HERZEGOVINA                       = 'ba'; // Bosnia & Herzegovina
	const _BULGARIA                                 = 'bg'; // Bulgaria
	const _CANARY_ISLANDS                           = 'ic'; // Canary Islands
	const _CATALONIA                                = 'es-ct'; // Catalonia
	const _CROATIA                                  = 'hr'; // Croatia
	const _CYPRUS                                   = 'cy'; // Cyprus
	const _CZECH_REPUBLIC                           = 'cz'; // Czech Republic
	const _DENMARK                                  = 'dk'; // Denmark
	const _ENGLAND                                  = 'gb-eng'; // England
	const _ESTONIA                                  = 'ee'; // Estonia
	const _FAROE_ISLANDS                            = 'fo'; // Faroe Islands
	const _FINLAND                                  = 'fi'; // Finland
	const _FRANCE                                   = 'fr'; // France
	const _GALICIA                                  = 'es-ga'; // Galicia
	const _GERMANY                                  = 'de'; // Germany
	const _GIBRALTAR                                = 'gi'; // Gibraltar
	const _GREECE                                   = 'gr'; // Greece
	const _GUERNSEY                                 = 'gg'; // Guernsey
	const _HOLY_SEE                                 = 'va'; // Holy See
	const _HUNGARY                                  = 'hu'; // Hungary
	const _ICELAND                                  = 'is'; // Iceland
	const _IRELAND                                  = 'ie'; // Ireland
	const _ISLE_OF_MAN                              = 'im'; // Isle of Man
	const _ITALY                                    = 'it'; // Italy
	const _JERSEY                                   = 'je'; // Jersey
	const _KOSOVO                                   = 'xk'; // Kosovo
	const _LATVIA                                   = 'lv'; // Latvia
	const _LIECHTENSTEIN                            = 'li'; // Liechtenstein
	const _LITHUANIA                                = 'lt'; // Lithuania
	const _LUXEMBOURG                               = 'lu'; // Luxembourg
	const _MALTA                                    = 'mt'; // Malta
	const _MOLDOVA                                  = 'md'; // Moldova
	const _MONACO                                   = 'mc'; // Monaco
	const _MONTENEGRO                               = 'me'; // Montenegro
	const _NETHERLANDS                              = 'nl'; // Netherlands
	const _NORTH_MACEDONIA                          = 'mk'; // North Macedonia
	const _NORTHERN_IRELAND                         = 'gb-nir'; // Northern Ireland
	const _NORWAY                                   = 'no'; // Norway
	const _POLAND                                   = 'pl'; // Poland
	const _PORTUGAL                                 = 'pt'; // Portugal
	const _ROMANIA                                  = 'ro'; // Romania
	const _RUSSIA                                   = 'ru'; // Russia
	const _SAN_MARINO                               = 'sm'; // San Marino
	const _SCOTLAND                                 = 'gb-sct'; // Scotland
	const _SERBIA                                   = 'rs'; // Serbia
	const _SLOVAKIA                                 = 'sk'; // Slovakia
	const _SLOVENIA                                 = 'si'; // Slovenia
	const _SPAIN                                    = 'es'; // Spain
	const _SVALBARD_JAN_MAYEN                       = 'sj'; // Svalbard & Jan Mayen
	const _SWEDEN                                   = 'se'; // Sweden
	const _SWITZERLAND                              = 'ch'; // Switzerland
	const _UKRAINE                                  = 'ua'; // Ukraine
	const _UNITED_KINGDOM                           = 'gb'; // United Kingdom
	const _WALES                                    = 'gb-wls'; // Wales

// Oceania

	const _AMERICAN_SAMOA                           = 'as'; // American Samoa
	const _AUSTRALIA                                = 'au'; // Australia
	const _CLIPPERTON_ISLAND                        = 'cp'; // Clipperton Island
	const _COOK_ISLANDS                             = 'ck'; // Cook Islands
	const _DIEGO_GARCIA                             = 'dg'; // Diego Garcia
	const _FEDERATED_STATES_OF_MICRONESIA           = 'fm'; // Federated States of Micronesia
	const _FIJI                                     = 'fj'; // Fiji
	const _FRENCH_POLYNESIA                         = 'pf'; // French Polynesia
	const _GUAM                                     = 'gu'; // Guam
	const _KIRIBATI                                 = 'ki'; // Kiribati
	const _MARSHALL_ISLANDS                         = 'mh'; // Marshall Islands
	const _NAURU                                    = 'nr'; // Nauru
	const _NEW_CALEDONIA                            = 'nc'; // New Caledonia
	const _NEW_ZEALAND                              = 'nz'; // New Zealand
	const _NIUE                                     = 'nu'; // Niue
	const _NORFOLK_ISLAND                           = 'nf'; // Norfolk Island
	const _NORTHERN_MARIANA_ISLANDS                 = 'mp'; // Northern Mariana Islands
	const _PALAU                                    = 'pw'; // Palau
	const _PAPUA_NEW_GUINEA                         = 'pg'; // Papua New Guinea
	const _PITCAIRN                                 = 'pn'; // Pitcairn
	const _SAMOA                                    = 'ws'; // Samoa
	const _SOLOMON_ISLANDS                          = 'sb'; // Solomon Islands
	const _TOKELAU                                  = 'tk'; // Tokelau
	const _TONGA                                    = 'to'; // Tonga
	const _TUVALU                                   = 'tv'; // Tuvalu
	const _VANUATU                                  = 'vu'; // Vanuatu
	const _WALLIS_FUTUNA                            = 'wf'; // Wallis & Futuna
}
