<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z-0.RSn*)gS#0^$F~5i06XYpB!rQkN&U1#/RQWM+llg$u<J*kwB-,R{o 80|2JW$');
define('SECURE_AUTH_KEY',  'a]yKxAwe7a&xLi6:9t,f2[I^B67,t3I!ju{}UD7 |PG +m{%i|!^kL$bU}x%b#zI');
define('LOGGED_IN_KEY',    'Rq{(GTsIL>w|0i:A|S#@ELW|b7mc=Lc)X<Df5MU3pSH8L]!tBB^L$T@5;31&(!!V');
define('NONCE_KEY',        '>7<s~RY|irAV[2n6+=+|8EF4$)<M$q9^X4.Qgt[R(^K9=DF2#r(5@F2;P1BZQG}0');
define('AUTH_SALT',        'u>NjpzB2_C+fv)`vrxpZj0_uX:&5Q[sB0uw_<p5Kn-m74j42_dE$DgkqY:x19F&>');
define('SECURE_AUTH_SALT', '3AI{-e9|q@];D|[-zdGkr&4b@JS38#t|(xjc)=f}Z|vB_|UT]bHvP.AZ7]Rg2j6g');
define('LOGGED_IN_SALT',   'e}ztr>-a|ukTwZ(}.hIR{7:qcYf2dAjm[7&$TN4R<p|7)1evABBTiGd}0Q.htgrQ');
define('NONCE_SALT',       'MoxA<((=(ZTE+r_4hQ{_yJU7a>/q%m$Cn9ZC4|5[Xq3v3|T+NN-sG>r,k)oA-R6x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
