<?php

defined('ABSPATH') || exit('No access !!!');


define('DEODAR_THEMEDIR' , get_theme_file_path() . '/');
define('DEODAR_THEMEURL' , get_theme_file_uri() . '/');

// var_dump(DEODAR_THEMEDIR );
require_once DEODAR_THEMEDIR . 'inc/CMB2-develop/init.php';
// require_once DEODAR_THEMEDIR . 'inc/codestar/codestar-framework.php' ;
require_once DEODAR_THEMEDIR . 'inc/advanced-custom-fields/acf.php' ;
require_once DEODAR_THEMEDIR . 'inc/deodar-adminsettings.php';
require_once DEODAR_THEMEDIR . 'inc/post-types.php';
require_once DEODAR_THEMEDIR . 'inc/deodar-metaboxes.php';
require_once DEODAR_THEMEDIR . 'inc/deodar-actions.php';
require_once DEODAR_THEMEDIR . 'inc/deodar-hooks.php';
require_once DEODAR_THEMEDIR . 'inc/megamenu/megamenu.php';
require_once DEODAR_THEMEDIR . 'inc/megamenu/mega_menu_custom_walker.php';
require_once DEODAR_THEMEDIR . 'inc/deodar-shortcodes.php';
require_once DEODAR_THEMEDIR . 'inc/custom_comment_callback.php';
require_once DEODAR_THEMEDIR . 'inc/deodar-widgets.php';
require_once DEODAR_THEMEDIR . 'inc/deodar-breadcrupm.php';

require(DEODAR_THEMEDIR . 'inc/deodar-assets.php');
