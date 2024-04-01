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
define( 'AUTH_KEY',          'MC;=8mx*Wo3{l8)el_&?-PN B+nkUZcq4JTnPQIApRdhD4I!fOK*7f5ozN@x/G$>' );
define( 'SECURE_AUTH_KEY',   'de@(JWX:}-T26EmZ,|,{8yk/f{HB@p,|W B3N0S1%[):FI*5VIrL<b<i3Bm1pg X' );
define( 'LOGGED_IN_KEY',     'IMX#MPHFDZrG/r{u,.)/9Gz3Ue$P qUe^T9RI-mxRCKNt}-As%&jN6Q,DM{UKVRk' );
define( 'NONCE_KEY',         '-N{F8q:SbwP X3F+) Ua.:]WChtO|T ,HQ.9WXzIONC;e9gT]N-37uyz[j/W6YY{' );
define( 'AUTH_SALT',         '~KRT nVfBb$IW^x^sfpAez6{0CB.fQAnN&6}jc+)cHq`$LklL/ rKy$}Qd[B!lzw' );
define( 'SECURE_AUTH_SALT',  'yd{uwDv^k*5+6X0r6Xg )sIvSo]u8Nl+Nn/6>$ij3K)R1Igv]x&h#x>,?#u5hQ3f' );
define( 'LOGGED_IN_SALT',    'x ekip;>a8:p.5gPCqEN>Fi{7Jsxlvy/ =kE?#tWu<4k@12isB{q*%0Rr1ZMd+4f' );
define( 'NONCE_SALT',        'KMJ&Ow@s|mg}^j@26Cqnm2nR%x{0((j.U .g^eOaP PrY$^k.wWn:VxWo pZ1UJv' );
define( 'WP_CACHE_KEY_SALT', 'x@-a7QSAs39uS:!,{L0;diR,@zoTD0CdL]E N5aFaPz[^1/fB`*/JS8E}uuA$JsN' );


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
