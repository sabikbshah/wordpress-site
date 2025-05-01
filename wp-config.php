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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'Root@123s' );

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
define( 'AUTH_KEY',         'Z_EA4NM 471OL3:Pn3r_Xe<;yF*XQS^fwJaaqm]2E4oXHZ<_#:U,`hn%v4[a FFX' );
define( 'SECURE_AUTH_KEY',  ']?K=$GFu`kTm2B,a[v!Vo2Rw:;S^a,dKqX1YmM!L2K|xJG0R6d^|vUMw)ug$sJed' );
define( 'LOGGED_IN_KEY',    'b4r2W=4RnNcekB.@0.hQb.P*F`9)F7@:5^p+<0@98N:ar?%j^GsP*y~i4P@&iV(x' );
define( 'NONCE_KEY',        '4*rxh{2wV[lrVh,o,Ro>-U.z`wcQ#~Fo-%_j2@!,Cm:ytO(lXRei|)7pY&TVZ7]-' );
define( 'AUTH_SALT',        'd/C&+js7_PL@GH%atAjy)<{kDtJCcuaT#b]aumD&wL7&>,sSBsrXd`VTb_{[n6:A' );
define( 'SECURE_AUTH_SALT', 'uXDSh;FFQp/(Ow1utH~ZR6|b]wk*vc|,:A1}pCwJxf@^yr9(n* g:f`we>co5236' );
define( 'LOGGED_IN_SALT',   '5`08BDTIot1t<~HOkr96b+g.7Uj4PnMQT]/G!A,gv!V|!E,>.~}vWspm?=)CG2 D' );
define( 'NONCE_SALT',       'KS/o$8 W!1aL;<,lQHwEB}e(DU+cM.pl+RN<M9jvKi#R4l`1aHr.niDM@<qX~I+%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
