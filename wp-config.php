<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'export-medit' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U2D+du5u}+7Wxyf#[hyW=~_{;q]nzXIX[z:(E|{ojH`00x ^-Gp/mWH YUR}l1`L' );
define( 'SECURE_AUTH_KEY',  'v#g!o76+J>CU`uhCjb*((hrG?OC27tl[bO|K,oif! uk5NlXAy=][@[_:mUV]cj{' );
define( 'LOGGED_IN_KEY',    'E 2D}cQ`F=&x?=m3/8U<l%Y} 2%Na1V33`e[p0ZwF,@w82*)J{~DDrWP;9%N=Tu`' );
define( 'NONCE_KEY',        'E/{T8+9py=B%i/&wzPFsw96+T}2rY*4r?fSBws1g$#d2t{hWLZ|`Pb4n4;_UPEB/' );
define( 'AUTH_SALT',        '?/Oh%WvIlP2L{*TbMNAbX5Is&hy*o@eeR8{-Y)}U.RujsW/+IZSW:x{5_h;C0eJ|' );
define( 'SECURE_AUTH_SALT', 'RM=1TiZ12S{<#KG&S0kRU@_cUT??|M Kj7/7>?7jJ![XjBUqo(_H4-`*o9*5o~li' );
define( 'LOGGED_IN_SALT',   '|`?Nw!g+T>eGJ85CU%hYL/n3hk$q3C-lt}|JS)nZ7`Qfr62c1I6j {NNV.;5yahS' );
define( 'NONCE_SALT',       'XKDz_;jx{[:t;QG=C|cpM^g,IU@k 7OS/S`0ecO|GB_6pvL}PE85a|bZ3!s=V{W~' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
