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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vavadia' );

/** Database username */
define( 'DB_USER', 'rajan' );

/** Database password */
define( 'DB_PASSWORD', 'Addweb@123' );

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
define('AUTH_KEY',         '^~OL){Qq8DpYn(O%aw+@LY-fs6kKC.Anr x3ptZNgn+IJZhq.K?xNI3h<CkYq]@/');
define('SECURE_AUTH_KEY',  'StBng$z,t@hJ<`tM78B^=j~0${jYuY_by%aG&/`|@YRs:_X$MTiw=kemI%bD6%l^');
define('LOGGED_IN_KEY',    '3h~mTvb+{o3Zs&V-f{y=wJ5,w1w-g6-5G6}!Eyc-ySbbvW[.S6|]`.crM{fn_T(T');
define('NONCE_KEY',        '0HD7ZhQrIc-w/m6rpc9Wf|Cs)K4s,y(>Kot1=NSkm+x@Y8J|7!#)D-|;!>r<@l?2');
define('AUTH_SALT',        'A#SNare5JbbefS^J=p*fZyK5%5VdUY{[:=,|t^Tz&HNNz:3jj#jzKW19/#-Lmiq9');
define('SECURE_AUTH_SALT', 'K&`v*Jst*us/_--n!-{$7rW1&){3o,dXqwH-gkI~0X|}0}}+L/g59?+He|6<;RO ');
define('LOGGED_IN_SALT',   'v_NuqPgpku_Vxf7~7v$MF}vsTXI/2TQhe)U#I`!E:5AR@!8d.<-]FZL&uh>V7K]#');
define('NONCE_SALT',       'o 2jSnS,xN2;@K+H//R7**xd USl06kQ-|p?6a:F }-{d0EHQE 1;Sc+j0T-uQy_');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
