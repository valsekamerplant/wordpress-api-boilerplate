<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/parameters.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/parameters.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}
// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );
// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'G+x(!OHY`ZD]+5q>/}B|};w;aa fY-rB$EW&DN5ox8:T>HjG?Jux<.Bl*$ULpl@r');
define('SECURE_AUTH_KEY',  'DhsjkM)QXJ)4+bXj[N=-=+@l-}a,34F93=f;v+`p&EzenAZ0*zrqRV}++sc;Ql9O');
define('LOGGED_IN_KEY',    '>qHXcBdoVKmf,%*b{:_]/G1J(IlZ-grX-O1Fv6?[cA:vUt+!6bFe?]{pXy9&cP5+');
define('NONCE_KEY',        '@0xRe+iKuy;t7&oly|}Y4fF3q|rWoXv+,9|LNi!~L!gjTvf8,vthhRiXWWL|+~p|');
define('AUTH_SALT',        'HAKy-5*xidtPW_~,|MCLtwp!p.x%df796C+yx5O^hH5~b7KB|d{GNL:Ti]!,g7h]');
define('SECURE_AUTH_SALT', 'ny,F4%=RLo%}VOGoc^IZZm1AX[:A.TEa*]B8m8JZd4vh01Q+u`PVFnH(})m(iO~@');
define('LOGGED_IN_SALT',   '|}FGn|8t-Nbev#(^!.XZ<(aS#0U0FNDVrPh{cdjF={ L.g>],Dq/gN%|cM(0/S!7');
define('NONCE_SALT',       '6u(1hg0_e@9R^kC%D0XxP<{OPU3%&YQq+e@}Dsoq]}nq5BM26~uNtxOAC0|2lLX8');
// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';
// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );
// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 1 );
define( 'WP_DEBUG_DISPLAY', true );
// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );
// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );
// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting
// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );