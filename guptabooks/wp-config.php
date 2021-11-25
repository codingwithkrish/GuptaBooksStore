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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'guptabooks' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'H(piTDa&QI@ZJFjE4i9h*99J1.%-HR|l@L7)<WXs!R4JF1 ![XoNpiCxN:RZ>M)+' );
define( 'SECURE_AUTH_KEY',  'NU58N#4Jjv)3T1 :2Z(^xU5%]3+(7}BtYo3<WHKC4?kxORS%_OodFdZUQX>:+&:j' );
define( 'LOGGED_IN_KEY',    'p_s JzkJ@=F?_,(:T)8cn<<Qw*! )Ca9eMs^A2W(i|S>2e@5.y<!sEHEiNdpQR&[' );
define( 'NONCE_KEY',        'RSZ+AgeXOux(F{|^9wpDO:iD(+{IADL[[{od2!Mc|{9b[T, ,_LsH{/TP E>>ns9' );
define( 'AUTH_SALT',        'm)dQ/|/^toFo`;3}mXUv.<{#>>*dEWjJ}I<oB|ZL{M$2w6`gEH5L[[RM~?,~gI8q' );
define( 'SECURE_AUTH_SALT', 'VCO<|a?N W-mOntan11p;+,!F6gpLcLE=Z9o#ohJ!nQU>bc6$Id?FG<c*jm*_y!a' );
define( 'LOGGED_IN_SALT',   '_HldUw#7]j. ~!H)k>Bp0b,guoly6:IWY4zDH75j`#ccI5]aurGF6r-M5OG+G748' );
define( 'NONCE_SALT',       '*V<UH4GOGO2kFwxT-q-g*#K_sKNU> zW|572 Qf.:5+26~Mz8(pT.^I!=e3@l5U,' );

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
