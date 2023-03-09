<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woo_commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KV@ Q^eMo+<T_MNQNAVfS!uVh;|R7fBQLE}j/Mkbc)/zWv5q%T8:{,noOD&A/R^0' );
define( 'SECURE_AUTH_KEY',  'j+moX]@eQ]?+)$r~#q0wt9gf!}S<L~Z@t@#Kd~k1mCU}Cj2cC<+N O.bfwXWW}b#' );
define( 'LOGGED_IN_KEY',    'S(/gjAK>nviKuh*oJ`?LqKYv#dP;&%sQ9#ml*q.aOa(pzF]3,!m4XQBBDLJ=YHBd' );
define( 'NONCE_KEY',        ')=QiVhR43o2|+Ru`;YIN0!@BDa!:z q`%GS%y~fx5t38cH+iu;!^fBJ5&VblI;qi' );
define( 'AUTH_SALT',        'e^!oO(8eSV+P:j&jf+Cn{WKOK$CG:O8=|jY{#jBA~nE3/vP`[jPkSxBRuC-.O^Uf' );
define( 'SECURE_AUTH_SALT', 'oPEoKg.d6Fj%R&!Gw`vGEQJ*-R*Rbch;Tto`9RA>G;1iW|IwJSUjH@M!LGLdFukm' );
define( 'LOGGED_IN_SALT',   'Cyb7QimxZ~/D}9xTlz<VX54{vr93~DJUODza$jR>O$HSK3!r.p-uM-~zmmxgnSek' );
define( 'NONCE_SALT',       'etfB-1w&O=]rRGc5p:#>h$EAlr4?0Tc%u)mxr:s8cp,Cm/Su)uFz2 $~qi9Jk%GN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
