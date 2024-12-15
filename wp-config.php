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
define( 'AUTH_KEY',          '}WR%5+9(*uwb;*$8tka_OF_s/c[&t0nBuvB(*4z$o~ypu3W[^j6:B28eb[Pi1 :G' );
define( 'SECURE_AUTH_KEY',   '?&{|FYAV-,R9PUr%[HUJjnDa-51/kt%iR_:Pq[]:d4z4@q}1bw]-No`S+6^]gy+q' );
define( 'LOGGED_IN_KEY',     '}tSLMsPj`jQYFD2^,yr3|(Bx#LxHf~`/V>.u{<F+aijjfw<fO.ay 5ieu%w>jlF>' );
define( 'NONCE_KEY',         'o J]f<tNOQgSh~,lmPR}l5swt.HiF}DF`jtPbFdxtGc?(T1XMr(YJ1{gCYDnLq~n' );
define( 'AUTH_SALT',         's>[!Hqm[A?xq5z<6J!x`eaQo|D]1j{p*Vb|tGy)qQj-!V]@UMmiD6q@F7SRzN?Nx' );
define( 'SECURE_AUTH_SALT',  'A^h}*qO}W#()u =W?znnwmGp,D wVa-Qf%SU3boGQ^)_`J#LbY?,~8NIV;ErY/c4' );
define( 'LOGGED_IN_SALT',    '$0iqe~S;7p&nIJJVCbgMeqQxxbt_FL!Q(o(ilCG@sSYOI_)3Kke+%]%hEMX*zH=c' );
define( 'NONCE_SALT',        'X[8xgEIGT)ln v*D?N9DIs/C =3)(|k@tSYczkM!1Op]7pr@}wjZgte%OIDR/:w=' );
define( 'WP_CACHE_KEY_SALT', '#<z#!D:t]>XBI^-u!I3&wpkn4OXy0Z5Y^|.3uM8tzHwHpVPkY7nKiYf<~-}oM^V;' );


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
