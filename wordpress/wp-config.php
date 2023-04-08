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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Nh}cn#DrWA}<ygVp4vd>>*&vM6srqq???xHBs]*xwNiV UzBx$YX$siGu$/@*5nz' );
define( 'SECURE_AUTH_KEY',  'U#4r,b>Bj7h=%k7^&7P)GBxFVjKh3<JcQKla.5F;|P05A_fx@:%Q$lbwNHo{7*>p' );
define( 'LOGGED_IN_KEY',    'Yj.i,?F~Y#=>Mcxc^8Pn-yH,;>Be23T/f.nn(({4ip5mw=mYT0jpj{x^D15UWk A' );
define( 'NONCE_KEY',        'B.[$V6`]p16u#&w|F=82q]yoX)M7g@g!t)X^UidPbB?fUylO;O6{=bN[xS]E)bFI' );
define( 'AUTH_SALT',        '0.%9FK*xIF {7T>YIVyl@=)K-|dVp6!FXs6`J)e%`kwJ_g&z|IXT2^VpqD5taM%V' );
define( 'SECURE_AUTH_SALT', '/qNhMju!kJxOJ<qtFO`jCO:qN^mjny2%[C<NA:m85:UTVge}I_ PHqm-ejF&=D3F' );
define( 'LOGGED_IN_SALT',   'W`C.{[q?}:gCtf0lMTM[h%Dnk<pX^}Fyrj(JEynUo67 ^|Ze,_bh{[oy?BXOSx(I' );
define( 'NONCE_SALT',       'Oc?Vm*p587HAd$ZOI4@0(yE.k.<IR(9WAlCTIP(a3D5]CyoMo?VNv1qsW<5&6y.M' );

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
