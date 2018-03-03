<?php
/**
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 * 
 * Extra comments have been removed from this file for 
 * optimization purposes and improved readability. See the 
 * default version for these or check out the links provided.
 */

// ** MySQL settings - You can get this info from your web host ** //

if ( $_SERVER['SERVER_ADDR'] == '127.0.0.1' ) {
	//This encourages local development. Set your local database variables here.
	define( 'DB_NAME', '' );
	define( 'DB_USER', '' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
}
else {
	//Else, WordPress is online. Use those credentials
	define( 'DB_NAME', 'database_name_here' );
	define( 'DB_USER', 'username_here' );
	define( 'DB_PASSWORD', 'password_here' );
	define( 'DB_HOST', 'localhost' );
}

	/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change at: 
 * @link https://api.wordpress.org/secret-key/1.1/salt/ 
 * 
 * Change if needed to invalidate all existing cookies. 
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 * Only numbers, letters, and underscores please!
 * Change to a pithy semi-random prefix that no one will guess, ever. 
 */
$table_prefix = 'adgj_';
//Change the above. i.e. NOT wp_ or adgj_

/* WORDPRESS SPECIFIC CONSTANTS BEGIN */

/* WHERE WORDPRESS IS */

//define( 'WP_HOME', '' );
// What people expect to see when they visit your domain. A URL.
// This is a reminder to use https, such as through @link https://letsencrypt.org/

//define( 'WP_SITEURL', '' );
// Where core WordPress files reside, relative to site root. A URL.

//define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/' . 'wp-content' );
//Yes, you can change this. But do so carefully and test. It may break things.

/* WHAT WORDPRESS DOES */

define( 'WP_POST_TYPE', 'post' );
// Change the default internal feel to "cars", "books" or "spaceships".
// Values: string (Default: post)

/* HOW WORDPRESS UPDATES */

define( 'DISABLE_WP_CRON', true );
//This makes a HUGE difference. Go away, virtual cron!!! But you have to set up a server side cron. 
//Look it up if you don't know what this means.

define( 'WP_AUTO_UPDATE_CORE', false );
// Values: true|false|minor (Default: true)

/* HOW WORDPRESS WORKS FOR YOU */

define( 'WP_POST_REVISIONS', 5 );
//Values: true|false|int (Default: true)
//Maximum amount post revisions stored.

define( 'AUTOSAVE_INTERVAL', 180 );
//Values 0.. Default: 60)(seconds)

define( 'IMAGE_EDIT_OVERWRITE', true );
//Overwrites image edits (for cleaner folders)
//Values: true|false  (Default: false)

/* KEEPING WORDPRESS SAFE */

define( 'DISALLOW_UNFILTERED_HTML', true );
// Values: true|false (Default: false)

define( 'DISALLOW_FILE_EDIT', true );
// Removes ability to edit files from admin.
// Values: true|false (Default: true)

define( 'DISALLOW_FILE_MODS', true );
// Disables plugin updating from admin.
// Values: true|false (Default: false)

//Not included: Plugin and Languages directory.
//The name of the <theme> directory is hard coded (for now).

/* WORDPRESS SPECIFIC CONSTANTS END */

// @link https://codex.wordpress.org/Debugging_in_WordPress

define( 'WP_DEBUG', false );

// If set to true...
if ( WP_DEBUG ) {
	
	error_reporting( E_ALL );
	//ini_set( 'display_errors', 1 );
	
	@ini_set( 'log_errors', 'On' );
	// Ideally, this should be set in php.ini, if access is available.
	
	define( 'WP_DEBUG_DISPLAY', false );
	// We don't want bugs displayed to the public. SPLAT!!! Log them quietly and fix'em.
	
	define( 'WP_DEBUG_LOG', true );
	// Create {wp-content/}debug.log if Apache can't do it. Perm: 660.
	
	define( 'SCRIPT_DEBUG', true );
	// Use development versions of core CSS and JS Files
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
