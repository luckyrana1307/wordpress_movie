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
define( 'DB_NAME', 'wordpress_movie' );

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
define( 'AUTH_KEY',         '/)$;DX2H|B^[t~FSu(GQW_.W3|:joSMCM2&o/Q&*M&8t8b:jGaKsdnNzfEk*YxPJ' );
define( 'SECURE_AUTH_KEY',  'BPj(=F+t}Gvv&}|XLu!0_lL.:Ycw|S:ULVlH:SRv4bkl28Bo%b>eR|0?[[ks-}<N' );
define( 'LOGGED_IN_KEY',    ';;3&=(4diI{L@PZ-Q)XHa8Xr?IIT6Kd{*r.N]Hje=IZ}54QHWd-;FJu`kCM^MV5c' );
define( 'NONCE_KEY',        'H~o+x=%9q,Z7i{5p8-;O<;2kDugux $oe,Q{=<:WWIlBIrocGk/%t-p/=#^X6Fh$' );
define( 'AUTH_SALT',        'uht{O<`]16`0.z{ixPRtZcJX)[yW{|jFfaAXl_7f3%KlS@3)fu_-805h9!YDyDtM' );
define( 'SECURE_AUTH_SALT', 'DY mG#$5WU1vY2})/g@^g9-.nSbaxA+V:%/f 0_JKtr4Jt9p/72L;Tl]GAx&q;AI' );
define( 'LOGGED_IN_SALT',   '_mOZ<a!k^>ueA/r#z88tnl`km0eY8[M`)PM;k+em-ewK. >ASzoPED+UhN>|*[S!' );
define( 'NONCE_SALT',       '2}.YT_KAKc-H/Is%|fSH.OF8T4tB#PG+>]5eK#;_=NDcJ@]RQyG4)5/$Jub6`%~f' );

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
