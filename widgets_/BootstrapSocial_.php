<?php
/**
 * BootstrapSocial.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;

namespace p2made\helpers;

/**
 *
 *
 */

class BootstrapSocial
{
	protected $_services = [
		'adn' =>           ['name' => 'App.net', 'icon' => 'adn', 'hex' => '#D87A68'],
		'bitbucket' =>     ['name' => 'Bitbucket', 'icon' => 'bitbucket', 'hex' => '#205081'],
		'dropbox' =>       ['name' => 'Dropbox', 'icon' => 'dropbox', 'hex' => '#1087DD'],
		'facebook' =>      ['name' => 'Facebook', 'icon' => 'facebook', 'hex' => '#3B5998'],
		'flickr' =>        ['name' => 'Flickr', 'icon' => 'flickr', 'hex' => '#2BA9E1'],
		'foursquare' =>    ['name' => 'Foursquare', 'icon' => 'foursquare', 'hex' => '#f94877'],
		'github' =>        ['name' => 'GitHub', 'icon' => 'github', 'hex' => '#444444'],
		'google' =>        ['name' => 'Google', 'icon' => 'google', 'hex' => '#DD4B39'],
		'instagram' =>     ['name' => 'Instagram', 'icon' => 'instagram', 'hex' => '#3F729B'],
		'linkedin' =>      ['name' => 'LinkedIn', 'icon' => 'linkedin', 'hex' => '#007BB6'],
		'microsoft' =>     ['name' => 'Microsoft', 'icon' => 'windows', 'hex' => '#2672EC'],
		'odnoklassniki' => ['name' => 'Odnoklassniki', 'icon' => 'odnoklassniki', 'hex' => '#F4731C'],
		'openid' =>        ['name' => 'OpenID', 'icon' => 'openid', 'hex' => '#F7931E'],
		'pinterest' =>     ['name' => 'Pinterest', 'icon' => 'pinterest', 'hex' => '#CB2027'],
		'reddit' =>        ['name' => 'Reddit', 'icon' => 'reddit', 'hex' => '#EFF7FF'],
		'soundcloud' =>    ['name' => 'SoundCloud', 'icon' => 'soundcloud', 'hex' => '#FF5500'],
		'tumblr' =>        ['name' => 'Tumblr', 'icon' => 'tumblr', 'hex' => '#CB2027'],
		'twitter' =>       ['name' => 'Twitter', 'icon' => 'twitter', 'hex' => '#55ACEE'],
		'vimeo' =>         ['name' => 'Vimeo', 'icon' => 'vimeo-square', 'hex' => '#1AB7EA'],
		'vk' =>            ['name' => 'VK', 'icon' => 'vk', 'hex' => '#587EA3'],
		'yahoo' =>         ['name' => 'Yahoo!', 'icon' => 'yahoo', 'hex' => '#720E9E'],
	];

protected $_service = null;
protected $_serviceIcon = null;


//	public function a($text, $url = null, $options = [])
	public static function a($service, $content = null, $url = null, $options = [])
	{
		$text = ($content == null ? 'Sign in with' : $content) . ' ' . this::service($service);
		//
		//
		//

		return parent::a($text, $url, $options);
	}

//	public function a($text, $url = null, $options = [])
	public static function aIcon($service, $url = null, $options = [])
	{
		$text = FA::icon(this::serviceIcon($service))->fixedWidth();
		$this->addCssClass('btn btn-block');
		$this->addCssClass('btn-social-icon');
		$this->addCssClass('btn-' . $service);
		//
		//
		//

		return parent::a($text, $url, $options);
	}

//	public function button($content = 'Button', $options = [])
	public static function button($service, $content = null, $options = [])
	{
		//

		return parent::button($content, $options);
	}

//	public static function input($type, $name = null, $value = null, $options = [])
	public static function input($service, $name = null, $value = null, $options = [])
	{
		//

		return parent::input('button', $name = null, $value = null, $options = []);
	}

	protected static function service($serviceCode)
	{
		if ($_service != null) {
			return $_service;
		}

		$_service = $_services[$serviceCode];
		return $_service;
	}

	protected static function serviceIcon($serviceCode)
	{
		if ($_serviceIcon != null) {
			return $_serviceIcon;
		}

		$_serviceIcon = $_services[$serviceCode][$icon];
		return $_serviceIcon;
	}


/*
				<a class='btn btn-block btn-social btn-flickr'>
					<span class='fa fa-flickr'></span> Sign in with Flickr
				</a>

					<a class='btn btn-social-icon btn-adn'><span class='fa fa-adn'></span></a>

					<li data-code='openid' data-name='OpenID'><code>btn-openid</code> <span class='social-hex'>#F7931E</span></li>

				<div class='social-sizes'>
					<h3 class='text-center'>Different Sizes</h3>
					<a class='btn btn-block btn-social btn-lg btn-google'>
						<span class='fa fa-google-plus'></span>
						Sign in with Google
					</a>
					<a class='btn btn-block btn-social btn-google'>
						<span class='fa fa-google-plus'></span>
						Sign in with Google
					</a>
					<a class='btn btn-block btn-social btn-sm btn-google'>
						<span class='fa fa-google-plus'></span>
						Sign in with Google
					</a>
					<a class='btn btn-block btn-social btn-xs btn-google'>
						<span class='fa fa-google-plus'></span>
						Sign in with Google
					</a>
					<hr>
					<div class='text-center'>
						<a class='btn btn-social-icon btn-lg btn-google'><span class='fa fa-google-plus'></span></a>
						<a class='btn btn-social-icon btn-google'><span class='fa fa-google-plus'></span></a>
						<a class='btn btn-social-icon btn-sm btn-google'><span class='fa fa-google-plus'></span></a>
						<a class='btn btn-social-icon btn-xs btn-google'><span class='fa fa-google-plus'></span></a>
					</div>
				</div>


<a class='btn btn-default' href='#' role='button'>Link</a>
<button class='btn btn-default' type='submit'>Button</button>
<input class='btn btn-default' type='button' value='Input'>
<input class='btn btn-default' type='submit' value='Submit'>
*/
}



/*
use rmrevin\yii\fontawesome\FA;

// normal use
echo FA::icon('home'); // <i class="fa fa-home"></i>

// shortcut
echo FA::i('home'); // <i class="fa fa-home"></i>

// icon with additional attributes
echo FA::icon(
    'arrow-left',
    ['class' => 'big', 'data-role' => 'arrow']
); // <i class="big fa fa-arrow-left" data-role="arrow"></i>

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
echo FA::icon('cog')
        ->spin()
        ->fixedWidth()
        ->pullLeft()
        ->size(FA::SIZE_LARGE);
// <i class="fa fa-cog fa-spin fa-fw pull-left fa-size-lg"></i>

// icons stack
echo FA::stack()
        ->icon('twitter')
        ->on('square-o');
// <span class="fa-stack">
//   <i class="fa fa-square-o fa-stack-2x"></i>
//   <i class="fa fa-twitter fa-stack-1x"></i>
// </span>

// icons stack with additional attributes
echo FA::stack(['data-role' => 'stacked-icon'])
     ->on(FA::Icon('square')->inverse())
     ->icon(FA::Icon('cog')->spin());
// <span class="fa-stack" data-role="stacked-icon">
//   <i class="fa fa-square-o fa-inverse fa-stack-2x"></i>
//   <i class="fa fa-cog fa-spin fa-stack-1x"></i>
// </span>

// autocomplete icons name in IDE
echo FA::icon(FA::_COG);
echo FA::icon(FA::_DESKTOP);
echo FA::stack()
     ->on(FA::_CIRCLE_O)
     ->icon(FA::_TWITTER);
*/
