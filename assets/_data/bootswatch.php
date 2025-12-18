--------------------------------------------------------------------------------
P2BriteAsset.php:
<?php
/**
 * P2BriteAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/P2madeAsset
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2BriteAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2BriteAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2BriteAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2BriteAsset extends AssetBundle
{
	private $theme = 'brite';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-Ofi7E7ZOYTr4CxupdpiGUzzXde5ISlET4zbL25ujM4xQDsQmnLHb5H5d+Helx0qk';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2CeruleanAsset.php:
<?php
/**
 * P2CeruleanAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2CeruleanAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2CeruleanAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2CeruleanAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2CeruleanAsset extends AssetBundle
{
	private $theme = 'cerulean';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-HqhCRk5UwZdbqmzeyYZHCwu3IuFe84q3c8UZtboEpYrdnIwi0RLZDag0RpKbFBHL';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2CosmoAsset.php:
<?php
/**
 * P2CosmoAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2CosmoAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2CosmoAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2CosmoAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2CosmoAsset extends AssetBundle
{
	private $theme = 'cosmo';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-QOrayDhdkHbTAsh/gb0iGlDY/xHwI3sdDvyHkxnfpY20Y+Pa8aRHFXmLQYklmIx/';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2CyborgAsset.php:
<?php
/**
 * P2CyborgAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2CyborgAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2CyborgAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2CyborgAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2CyborgAsset extends AssetBundle
{
	private $theme = 'cyborg';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-qxGSw6SRX7woR/PK/wbYrdowFJ2DdFQF+nwWswHGKp+jqtYAQKCvBzB/3b+Pjx6W';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2DarklyAsset.php:
<?php
/**
 * P2DarklyAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2DarklyAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2DarklyAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2DarklyAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DarklyAsset extends AssetBundle
{
	private $theme = 'darkly';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-t2UKecXY6tDoQIsEiNhYTaTFWmoHgQT7MV80h9huTejPYLkdgaOHv8ssDrS3Cdcw';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2FlatlyAsset.php:
<?php
/**
 * P2FlatlyAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2FlatlyAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2FlatlyAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2FlatlyAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FlatlyAsset extends AssetBundle
{
	private $theme = 'flatly';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-MZ3pnZEBOL1wAG2nrP+M1A9LCApF229c39UC+1T3B96aI3VjuAWMeb1I99GMJacE';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2JournalAsset.php:
<?php
/**
 * P2JournalAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2JournalAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2JournalAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2JournalAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2JournalAsset extends AssetBundle
{
	private $theme = 'journal';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-eRVXTeypnZFrG30qaCO1StJ3gOF9/t2OF+M6BLE1/o69NMCO6W135Be6Z+ajWR6V';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2LiteraAsset.php:
<?php
/**
 * P2LiteraAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2LiteraAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2LiteraAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2LiteraAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2LiteraAsset extends AssetBundle
{
	private $theme = 'litera';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-g6vhFEtzOi0DDt7vbQKSu/YNZmo3NJPwXhjhyao/avcyLwyY4C+t630BOB6eoBpF';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2LumenAsset.php:
<?php
/**
 * P2LumenAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2LumenAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2LumenAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2LumenAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2LumenAsset extends AssetBundle
{
	private $theme = 'lumen';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-VvtmOf0H1c5UOkg0sTVnp2+DaE7+6PO78xrugFKUni8B3tEbZ6V56DNytr8Zs2ZI';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2LuxAsset.php:
<?php
/**
 * P2LuxAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2LuxAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2LuxAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2LuxAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2LuxAsset extends AssetBundle
{
	private $theme = 'lux';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-0hYdc6q9O/GUgxXwzZ4g/D6UAIb+PdD4RbQADGoSKqAGG5yBVeJYHWz1EXZXFjf6';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2MateriaAsset.php:
<?php
/**
 * P2MateriaAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2MateriaAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2MateriaAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2MateriaAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2MateriaAsset extends AssetBundle
{
	private $theme = 'materia';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-W2UjBw+COF3Eo7koIX3NVgE5zvvJqgwN/iqcHt00n+MNZlyeUzotrrhvPcZVfSUZ';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2MintyAsset.php:
<?php
/**
 * P2MintyAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2MintyAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2MintyAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2MintyAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2MintyAsset extends AssetBundle
{
	private $theme = 'minty';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-7cNn55KSVPdYzfuegchZCGqbVrV6ksXrmgEb1VZbPHSwQqCFDFTrQfg8MsZmSI7u';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2MorphAsset.php:
<?php
/**
 * P2MorphAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2MorphAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2MorphAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2MorphAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2MorphAsset extends AssetBundle
{
	private $theme = 'morph';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-x8ZzaWWeiHoeOKxzqViigGot3Uxq/86QdU4PmdzkDbpvqikfiztn9NXAOe9VoDn/';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2PulseAsset.php:
<?php
/**
 * P2PulseAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2PulseAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2PulseAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2PulseAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2PulseAsset extends AssetBundle
{
	private $theme = 'pulse';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-s1beQxR3MhCcfAHT7ulQXJiGt1ejAnXU2LMI2I+23+ty05iA1rf+jsy5WiWJOnms';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2QuartzAsset.php:
<?php
/**
 * P2QuartzAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2QuartzAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2QuartzAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2QuartzAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2QuartzAsset extends AssetBundle
{
	private $theme = 'quartz';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-1Pk9yPJEOSSDwX+PSDz1BitsclSsBQdVX17SR6KJEzl/LlT5lnTnOArjHcu/4VG1';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2SandstoneAsset.php:
<?php
/**
 * P2SandstoneAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2SandstoneAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2SandstoneAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2SandstoneAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SandstoneAsset extends AssetBundle
{
	private $theme = 'sandstone';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-fNau2pcWOdbUULBw483bxURlLECRa/y2jWlGAJqBbnFzurmThA8gwbpHKogT37Do';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2SimplexAsset.php:
<?php
/**
 * P2SimplexAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2SimplexAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2SimplexAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2SimplexAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SimplexAsset extends AssetBundle
{
	private $theme = 'simplex';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-6ROvCwoH6HDVxMBZrCLzh5t4tMXwFcEXILGqY/fvKl2bQpD4cij1g6fSUA0SbXsh';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2SketchyAsset.php:
<?php
/**
 * P2SketchyAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2SketchyAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2SketchyAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2SketchyAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SketchyAsset extends AssetBundle
{
	private $theme = 'sketchy';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-JydQZovtaTxBDWypezbaeDcTZRTjToRV4VMLNx6PTVbViu5x+4DtMCJQmwpYrZCF';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2SlateAsset.php:
<?php
/**
 * P2SlateAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2SlateAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2SlateAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2SlateAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SlateAsset extends AssetBundle
{
	private $theme = 'slate';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-qhrBcipvKS9sQcI3lcoXpdKNs9jmQAunazzwZW3aZeuFMoRih2NYJIDsr6XTFndn';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2SolarAsset.php:
<?php
/**
 * P2SolarAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2SolarAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2SolarAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2SolarAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SolarAsset extends AssetBundle
{
	private $theme = 'solar';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-sD1IsxtjOsJchPKi0IV4d26qTKtjaSCKexjv71/cyndbK1gFKAz7iPf2xtRbsqpi';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2SpacelabAsset.php:
<?php
/**
 * P2SpacelabAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2SpacelabAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2SpacelabAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2SpacelabAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SpacelabAsset extends AssetBundle
{
	private $theme = 'spacelab';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-6O06/mG6zTPV5qcszBfW91idf95OvvBVrsSlQ23AP7bq5TYK0Gh4lmmHSf47i/B2';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2SuperheroAsset.php:
<?php
/**
 * P2SuperheroAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2SuperheroAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2SuperheroAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2SuperheroAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SuperheroAsset extends AssetBundle
{
	private $theme = 'superhero';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-fU437/gCPFVIYQG5/RnXUGGh+prGONHn6C9GslvteaFVmNCeul6aHunWDz85bM78';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2UnitedAsset.php:
<?php
/**
 * P2UnitedAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2UnitedAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2UnitedAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2UnitedAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2UnitedAsset extends AssetBundle
{
	private $theme = 'united';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-CtE18eQN6gdhF75AwSNgRfJDqd3YmE+cpu9NqHKEhsp4Xbh8MbPboXFaGaMjs4oE';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2VaporAsset.php:
<?php
/**
 * P2VaporAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2VaporAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2VaporAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2VaporAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2VaporAsset extends AssetBundle
{
	private $theme = 'vapor';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-V2qF16o6CEJntOUT/bjC83Rs2wB24++/hfV0D2AV4lM3rGwY1U56PszercfsQWnm';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2YetiAsset.php:
<?php
/**
 * P2YetiAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2YetiAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2YetiAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2YetiAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2YetiAsset extends AssetBundle
{
	private $theme = 'yeti';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-OMwG/TAHy7NRQbZ6SZ/45S4g8n76iLIAkbYP8evydAdSZiO97yIyh5g2zThHlY8r';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}
--------------------------------------------------------------------------------
P2ZephyrAsset.php:
<?php
/**
 * P2ZephyrAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2ZephyrAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2ZephyrAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2ZephyrAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2ZephyrAsset extends AssetBundle
{
	private $theme = 'zephyr';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-0qFVRx98HJem0F2omOB5o37vVaRuuesFrDqe5Q292oSriOauZU47Cz7anAMHnYnf';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}

