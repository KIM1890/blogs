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
define( 'DB_NAME', 'blogs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' {r9|mQ/gd&SPTer~l;aS(O<>1L<K(^29G(L:(U]jH};F-x-EVbl7Y84Dw +Nkd8' );
define( 'SECURE_AUTH_KEY',  'C2u4O`vlntqhk[2R.nh)/_/!xhYRYzO_xu+jl]gMvwUPu|oGjkQ#;*mB|UikFX]E' );
define( 'LOGGED_IN_KEY',    '%l1/6u ?bVE`^85|c2q6gnKF}M/^[;xE>icuKFaFWNLkPbXknQM[&~TNAjL=+eM+' );
define( 'NONCE_KEY',        '*r[]Hr&&T xE|4j9fs7[scGX 7-MezhJv+JN:?HAtspx6w<9~ysN;nuW#F>kBm71' );
define( 'AUTH_SALT',        '{Hd(L.TtTM`on838SC|R9}l-)QU_OZ{Z]}4QI91eXOjae#*W/rx14%R%i5|FdbM0' );
define( 'SECURE_AUTH_SALT', 'Ex!%M]]#G3^Sr}ugep,#Gwq[JGf]tb:KZaOAwj!-wOFiLjC/Y,&1ThH,M<JFd+i_' );
define( 'LOGGED_IN_SALT',   'Ck?!zLj3DwC 9Vx6l`TOAMxt.}s|U&2*}fMGwj>*a){*,=S!?q8TV?YP#OcmIpC[' );
define( 'NONCE_SALT',       'h-=,<]n-Y_klz6z24PKcN@[;]hA?eQvamp6Z$[!|Uhp8DjM3n|G`6~&_p$W&|!rl' );

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
