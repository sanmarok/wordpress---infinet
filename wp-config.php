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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'infinet' );

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
define( 'AUTH_KEY',         'RV{]F>,-uVlx[Ec|DZU/[G BiU`&$&C=xW>K4jfvY%E>Gr^6olorz2m$<7>[bx;.' );
define( 'SECURE_AUTH_KEY',  'jJ7Hfx[g2.HmN(hKVf%}AS@89@~=3qE~ZlETU~e*xvq0_L`HksjvkST;&f;F[-+J' );
define( 'LOGGED_IN_KEY',    'EO&uqhui)4XX1j7babDW?1Gs$cw:UxB)2,,iroP9<1KOJ!]Jl 9(!]L+E0=;o)ZE' );
define( 'NONCE_KEY',        '2`1;8aIHBE#:s4_]nd)9%CeI<bcDK[-0_gd?8@y~&q5$(8HKEfJ%${h!~OJo()De' );
define( 'AUTH_SALT',        '.o9Os:GnI~$1sIiej<v,<5)BglAF_tg|uY#{;UR^(Jb*U`HmXw,Sew&Vm#&uBP6:' );
define( 'SECURE_AUTH_SALT', '}pkcHCTIdqc!p9+~AM[w1;:gCf!-u@J1Dd#9t!Q%#9N)zj$=Z=Oe[{VZ=S[]T5[F' );
define( 'LOGGED_IN_SALT',   '9ympG02Rwlf^2x[M|b3G{Dyd)ZBgv,eLBrohC&Y2HPz-2W#LBgZd^Y}A+``c.g+1' );
define( 'NONCE_SALT',       '%&^v>DYk2g ik&1ojp]r`o2}NWz/fW9Bg#mh<Kh2GUF!(5LGdA_8B&H.y;ovw2P[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
