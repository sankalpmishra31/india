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
define('DB_NAME', 'india');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'a');

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
define('AUTH_KEY',         '&>$pJo*(R`J!!P~HXCsY;!_WuwWE8Zyx;m?)!5!z@=bEPldY;P,UGD:vgF<~XOe!');
define('SECURE_AUTH_KEY',  'cj<7phni1:K-U<#1MkSw,YM6#OG#m,;G*Y=Kg1[`j]$mwuwi;Tl$pvh_F4jORJ}f');
define('LOGGED_IN_KEY',    '7c;Ap,k9@^[}GPaWlC;n>)RW$tvAg8GeT9NJ4CuG4cj`vob2EXPgb]RD@yqu-DMh');
define('NONCE_KEY',        '}<,*?gF-?-7;PRy02/50F,Dgrsn_<=1wT<O6zh6`f+*ebbRu-z]`w;+N}?J8woq)');
define('AUTH_SALT',        ':b~Ey:sA&J1bh1HWldqeYq,R&zchW6 rVp#dV7dQz)ff}trb2R+_nof^Ge2y+$9A');
define('SECURE_AUTH_SALT', 'OJR`t.SkI=L9JX{+^%hmBN~ZO1&17ijxP$e>^yJx4cfPUX}j*#=&qfN3>I9J2M>-');
define('LOGGED_IN_SALT',   ';3Pa.7)S04XL3=~-b4bx=2WQ.8[MX?kKOWE-@e%8qlWOITvkE$b>qb4%2T9UGhO5');
define('NONCE_SALT',       '|!aHY5$$1+Pg46r{W/=9ijIM([;U8]m&Mz,w$zBWhHVWy?TQMztAX,GT$sRENBum');

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
