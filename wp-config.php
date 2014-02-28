<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dfzddv J*Mw9So[jMLSa{<kLd-/jx38<q0QAq~<+p+6)th j9S]q{<q/ifh/fp}8');
define('SECURE_AUTH_KEY',  ':SIony=n%zM1@v)fchJh8/(^`tuC>F&IDRZ8e/V6iYx%`:p^[oo:#ku3tNA=({$s');
define('LOGGED_IN_KEY',    '|VEn{@Js~B$374`r-,Py=qZg-b1_B4p#bzH`J!GehL,U.O9Kt Lw_,5fc39,qPoW');
define('NONCE_KEY',        '*Oj$t-?cb4]=Y*wH$,Q}$vM*k>wtk6+6k4jKD|x `sC]J0{1@*uAF;+a-:Lou4Ug');
define('AUTH_SALT',        '8Rpw5XaH|Hl:|jtBuYZ4WC~Pgga>pqU|tFlq<H97V{%As/F3;j|b4he?)Qpg|p@N');
define('SECURE_AUTH_SALT', '?dYMQ%v;e)rgn$v+7-X~p2?D3A-iikdQky$H5lY(Vt6XN@8CtNL[_#@|+0Qw(+@|');
define('LOGGED_IN_SALT',   'ci}?^]V|]lS5es2))F-%So`Bc-A`e-s4;7Xm`|BrXY Pf<se|p*w`,i8|hoyZtK$');
define('NONCE_SALT',       ']W;u<[Tyc%gq:JaAvvqwy2*w9c!4!>I<9q>w0;Yc@QKTB5Z+9_d?[|o-UnK(P74!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
