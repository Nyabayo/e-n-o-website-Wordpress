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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'LW^IoK77+F7mr pGl|u]/Om#t$h]EL;yQ0O:cf1_m}@VQOknW:zei0F/Fu{1zAT^' );
define( 'SECURE_AUTH_KEY',   '4pr75[3nd-bp[-c6vZ4T{lp8u} zuC$t0$WQ;8~HBwOT`:+b%D6J} <6~J*.,6!b' );
define( 'LOGGED_IN_KEY',     '2q|~waL$)k&!R$xh:yZ`ZlUI/_hSf*<C})qKfLi_nU*&_Weimml#><I8>c(};qe-' );
define( 'NONCE_KEY',         '3WawOXdUZ%*u+??Sr.**kd~Ur7qzV4_H{lNmLHAEO}@RBV%<v##3&WWPoy@QC^+G' );
define( 'AUTH_SALT',         'g#h!^Z4kK9v0nt%Ln7?0 ]&@|$YrAQjGTF]qiq`m|i3%(?R^Hj@+0QC9fLRL*L}x' );
define( 'SECURE_AUTH_SALT',  'UohcxbC)@/?<[W?].jpWY_,H(!mZP|Xzyw7,bWth0.p.Q8=(CA;j6Cfo.+tIdT*s' );
define( 'LOGGED_IN_SALT',    '|tHatgqAngL8)AHq,EX3uJ2P.t<kqkPcwgKlsVZyt).92Wtp^7D-8{MF}2o^QYyy' );
define( 'NONCE_SALT',        's9Mw=!Hds^/t>s1~}+@do1V_w0TekgT[|kMIFuaCP>Bp%s>t#~YOxS}oQi3F;3 D' );
define( 'WP_CACHE_KEY_SALT', 'pkr^BVK>qN{sQ0(_mNPF?@2u#v?0Y&CCJCsWq+4L}7=vbZVpt2*Ru|DU#^3__P6x' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
