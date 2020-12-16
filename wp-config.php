<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?A3b%w:-f|4d|*dX]0C>U_zH p(UGMg:3E#=i4W3zqYbUd7e]zq9go#;i589h>6o' );
define( 'SECURE_AUTH_KEY',  '09*ER[:XR*bm%qO#VvTy1D2~fRAR*v#9)d9*VaLt_ZICZfL|w3-T*s3N|-vlj.z>' );
define( 'LOGGED_IN_KEY',    'l{M>_ai{C8|7pn}Xr.ST|j1(:3>=5:d@P#Ruz#zh@gU,3 WEgw #W`I@y?b`p;~`' );
define( 'NONCE_KEY',        'S+hW89yff>:w}Cf@ka7:a+YizHCh_`GQRcz/NEHoN{=?I[eZBVvF7n<,dz_nO55g' );
define( 'AUTH_SALT',        'jvHy4o%%]9^n=*;+U)~b&|Z<N4N}gwKOAw12gn0_3f((u[kKswHq?vZ!%,-(H:i&' );
define( 'SECURE_AUTH_SALT', '8_78B){W$R<wqII~:=4;(Wm0e~7wic8SVpINcA5h]YF<w[ph]ezW(PP-)+g5{ZkW' );
define( 'LOGGED_IN_SALT',   '#eP*t!Facp=uf(GS#7iUI-C#]+{0R-0uE|nItJmjKMUoLj+J-~Q:UE^ oHQl5}[K' );
define( 'NONCE_SALT',       'R2H-%`9i&xVZ<m5E/ a^!m~wX/7Zue%2,L47;?P?8.WJZ<S>h7QgFb0<,nq3UM<[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
