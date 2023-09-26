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
define( 'DB_NAME', 'mvslider' );

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
define( 'AUTH_KEY',         'kf+MNRlphv,SDhX]{)Y!D30;q8!}WmZ*l4,^FtF K`Nz(Wl76OB_`gOl4_?1YWXL' );
define( 'SECURE_AUTH_KEY',  '=D<q15ADmDK57kOIk8XKgkhS)Loka`JiX~$VNN=9b?k.Nm<PXW9C_]kH5.;fldbj' );
define( 'LOGGED_IN_KEY',    'q`}qBLfo(Ahy@nco u[p_,&*/OJS(XL#Z>hd@Z>mEGefmvt05H>EIi|fFi(%/=<>' );
define( 'NONCE_KEY',        '{Y}a*dRq)H0%tdH&z=1%R-{e!+!O%5< :Dbv[~y-|`Y6IsjG0bJ@Q;):(z}:E)Fu' );
define( 'AUTH_SALT',        '5%BaZEkwFuUZB|J,kDCMF;wwP)tcOt.B~EZgX FK6Ak_OF|mn,%Di[b`*CIY~O7a' );
define( 'SECURE_AUTH_SALT', '66 If~Qz&=@cmyY<AA]oee-g708eHn?>jI,1r=.>`bDcfK~i[qTVyrl([l$Qgl5u' );
define( 'LOGGED_IN_SALT',   'bu@gsUzQ</gZP0KQ!4Gl,q|&Kv.JqK5;?-p6$Xb>4I0](eipfB+,b,b[aGc>4+i9' );
define( 'NONCE_SALT',       'gjk%un&UF51ND==U&U](n7Fhb-z{sW7dgkjp#kLIu_BiZT{I|hNqUYl!W.aI>5/6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mvslider';

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
