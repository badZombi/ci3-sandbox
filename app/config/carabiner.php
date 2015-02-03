<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * carabiner config
 *
 * The config file for carabiner
 *
 * @license		http://www.opensource.org/licenses/bsd-license.php BSD licensed.
 * @author		Mike Funk, Tony Dewan
 * @link		http://mikefunk.com
 * @email		mike@mikefunk.com
 *
 * @file		carabiner.php
 * @version		1.5.4
 * @date		03/05/2012
 */

/*
|--------------------------------------------------------------------------
| Script Directory
|--------------------------------------------------------------------------
|
| Path to the script directory.  Relative to the CI front controller.
|
*/

$config['script_dir'] = 'assets/';


/*
|--------------------------------------------------------------------------
| Style Directory
|--------------------------------------------------------------------------
|
| Path to the style directory.  Relative to the CI front controller
|
*/

$config['style_dir'] = 'assets/';

/*
|--------------------------------------------------------------------------
| Cache Directory
|--------------------------------------------------------------------------
|
| Path to the cache directory. Must be writable. Relative to the CI
| front controller.
|
*/

$config['cache_dir'] = 'assets/cache/';




/*
* The following config values are not required.  See Libraries/Carabiner.php
* for more information.
*/



/*
|--------------------------------------------------------------------------
| Base URI
|--------------------------------------------------------------------------
|
|  Base uri of the site, like http://www.example.com/ Defaults to the CI
|  config value for base_url.
|
*/

//$config['base_uri'] = 'http://www.example.com/';


/*
|--------------------------------------------------------------------------
| Development Flag
|--------------------------------------------------------------------------
|
|  Flags whether your in a development environment or not. Defaults to FALSE.
|
*/

// defaulting to true until I can figure out what to do about image urls.
// they are different depending on whether an item is cached or not.
$config['dev'] = FALSE;
if (ENVIRONMENT == 'testing') {$config['dev'] = TRUE;}


/*
|--------------------------------------------------------------------------
| Combine
|--------------------------------------------------------------------------
|
| Flags whether files should be combined. Defaults to TRUE.
|
*/

$config['combine'] = FALSE;


/*
|--------------------------------------------------------------------------
| Minify Javascript
|--------------------------------------------------------------------------
|
| Global flag for whether JS should be minified. Defaults to TRUE.
|
*/

$config['minify_js'] = FALSE;


/*
|--------------------------------------------------------------------------
| Minify CSS
|--------------------------------------------------------------------------
|
| Global flag for whether CSS should be minified. Defaults to TRUE.
|
*/

$config['minify_css'] = FALSE;

/*
|--------------------------------------------------------------------------
| Force cURL
|--------------------------------------------------------------------------
|
| Global flag for whether to force the use of cURL instead of file_get_contents()
| Defaults to FALSE.
|
*/

$config['force_curl'] = FALSE;


/*
|--------------------------------------------------------------------------
| Predifined Asset Groups
|--------------------------------------------------------------------------
|
| Any groups defined here will automatically be included.  Of course, they
| won't be displayed unless you explicity display them ( like this: $this->carabiner->display('jquery') )
| See docs for more.
|
*/

$config['groups']['cdn'] = array(

	'js' => array(
		array('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'),
		array('http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.js', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js')
	),
	'css' => array(
		array('http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.css', 'screen', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css', FALSE),
		array('http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css', 'screen', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css', FALSE)
	)

);



// jQuery (latest, as of 1.xx)
$config['groups']['jquery'] = array(

	'js' => array(

		array('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', TRUE, FALSE)

	)
);


// jQuery UI (latest, as of 1.xx)
$config['groups']['jqueryui'] = array(

	'js' => array(

		array('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', TRUE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js', TRUE, FALSE)

	)
);


// Ext Core (latest, as of 3.xx)
$config['groups']['ext-core'] = array(

	'js' => array(

		array('http://ajax.googleapis.com/ajax/libs/ext-core/3.0.0/ext-core-debug.js', 'http://ajax.googleapis.com/ajax/libs/ext-core/3/ext-core.js', TRUE, FALSE)

	)
);

// Chrome Frame (latest, as of 1.xx)
$config['groups']['chrome-frame'] = array(

	'js' => array(

		array('http://ajax.googleapis.com/ajax/libs/ext-core/3.0.0/ext-core-debug.js', 'http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js', TRUE, FALSE)

	)
);

// Prototype (latest, as of 1.x.x.x)
$config['groups']['prototype'] = array(

	'js' => array(

		array('http://ajax.googleapis.com/ajax/libs/prototype/1/prototype.js', 'http://ajax.googleapis.com/ajax/libs/prototype/1/prototype.js', TRUE, FALSE)

	)
);


// script.aculo.us (latest, as of 1.x.x)
$config['groups']['scriptaculous'] = array(

	'js' => array(

		array('http://ajax.googleapis.com/ajax/libs/prototype/1/prototype.js', 'http://ajax.googleapis.com/ajax/libs/prototype/1/prototype.js', TRUE , FALSE),
		array('http://ajax.googleapis.com/ajax/libs/scriptaculous/1/scriptaculous.js', 'http://ajax.googleapis.com/ajax/libs/scriptaculous/1/scriptaculous.js', TRUE, FALSE)

	)

);


// MooTools
$config['groups']['mootools'] = array(

	'js' => array(

		array('http://ajax.googleapis.com/ajax/libs/mootools/1/mootools.js', 'http://ajax.googleapis.com/ajax/libs/mootools/1/mootools-yui-compressed.js', TRUE, FALSE)

	)
);


// Dojo (latest, as of 1.xx)
$config['groups']['dojo'] = array(

	'js' => array(

		array('http://ajax.googleapis.com/ajax/libs/dojo/1/dojo/dojo.xd.js.uncompressed.js', 'http://ajax.googleapis.com/ajax/libs/dojo/1/dojo/dojo.xd.js', TRUE, FALSE)

	)
);


// SWFObject (latest, as of 2.xx)
$config['groups']['swfobject'] = array(

	'js' => array(

		array('http://ajax.googleapis.com/ajax/libs/swfobject/2/swfobject_src.js', 'http://ajax.googleapis.com/ajax/libs/swfobject/2/swfobject.js', TRUE, FALSE)

	)

);


// YUI (latest, as of 2.x.x)
$config['groups']['yui'] = array(

	'js' => array(

		// JS Core
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/yuiloader/yuiloader.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/yuiloader/yuiloader.js', TRUE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/dom/dom.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/dom/dom-min.js', TRUE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/event/event.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/event/event-min.js', TRUE, FALSE)

		// JS Utilities: Uncomment as needed
		//,array('http://ajax.googleapis.com/ajax/libs/yui/2/build/animation/animation.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/animation/animation-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/connection/connection.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/connection/connection-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/cookie/cookie.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/cookie/cookie-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/datasource/datasource.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/datasource/datasource-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/dragdrop/dragdrop.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/dragdrop/dragdrop-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/element/element.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/element/element-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/history/history.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/history/history-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/imageloader/imageloader.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/imageloader/imageloader-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/json/json.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/json/json-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/paginator/paginator.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/paginator/paginator-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/resize/resize.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/resize/resize-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/selector/selector.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/selector/selector-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/stylesheet/stylesheet.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/stylesheet/stylesheet-min.js', TRUE, FALSE),

		// Widget JS Tools: Uncomment as needed
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/container/container.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/container/container-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/menu/menu.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/menu/menu-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/autocomplete/autocomplete.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/autocomplete/autocomplete-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/button/button.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/button/button-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/calendar/calendar.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/calendar/calendar-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/charts/charts.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/charts/charts-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/colorpicker/colorpicker.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/colorpicker/colorpicker-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/datatable/datatable.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/datatable/datatable-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/editor/editor.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/editor/editor-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/imagecropper/imagecropper.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/imagecropper/imagecropper-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/layout/layout.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/layout/layout-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/paginator/paginator.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/paginator/paginator-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/slider/slider.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/slider/slider-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/tabview/tabview.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/tabview/tabview-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/treeview/treeview.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/treeview/treeview-min.js', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/uploader/uploader.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/uploader/uploader-min.js', TRUE, FALSE),

	),


	'css' => array(

		// CSS Core
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/fonts/fonts.css', 'screen', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/fonts/fonts-min.css', TRUE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/reset/reset.css', 'screen', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/reset/reset-min.css', TRUE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/grids/grids.css', 'screen', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/grids/grids-min.css', TRUE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/base/base.css', 'screen', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/base/base-min.css', TRUE, FALSE)

		//CSS for Controls: Uncomment as Needed
		//,array('http://ajax.googleapis.com/ajax/libs/yui/2/build/autocomplete/assets/skins/sam/autocomplete.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/container/assets/skins/sam/container.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/menu/assets/skins/sam/menu.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/button/assets/skins/sam/button.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/calendar/assets/skins/sam/calendar.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/carousel/assets/skins/sam/carousel.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/slider/assets/skins/sam/slider.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/colorpicker/assets/skins/sam/colorpicker.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/datatable/assets/skins/sam/datatable.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/editor/assets/skins/sam/editor.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/resize/assets/skins/sam/resize.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/imagecropper/assets/skins/sam/imagecropper.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/layout/assets/skins/sam/layout.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/tabview/assets/skins/sam/tabview.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/treeview/assets/skins/sam/treeview.css', 'screen', TRUE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/editor/assets/skins/sam/simpleeditor.css', 'screen', TRUE, FALSE)

	)

);

// --------------------------------------------------------------------------

/* End of file carabiner.php */
/* Location: ./carabiner/config/carabiner.php */