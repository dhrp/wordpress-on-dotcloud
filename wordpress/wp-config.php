<?php
// Read the file and convert the underlying JSON dictionary into a PHP array
$env = json_decode(file_get_contents("/home/dotcloud/environment.json"), true); 

// ** MySQL settings from resource descriptor ** //
define('DB_NAME', 'wordpress');
define('DB_USER', $env['DOTCLOUD_DB_MYSQL_LOGIN']);
define('DB_PASSWORD', $env['DOTCLOUD_DB_MYSQL_PASSWORD']);
define('DB_HOST', $env['DOTCLOUD_DB_MYSQL_HOST']);
define('DB_PORT', $env['DOTCLOUD_DB_MYSQL_PORT']);

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define ('WPLANG', '');
define('WP_DEBUG', false);

require('wp-salt.php');

$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

