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
define( 'DB_NAME', 'wordpress_to' );

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
define( 'AUTH_KEY',         '/mO4D+fM%zM9/1|vwi@]5 od[!F7A}b%vd9Izu25]qp(+Z$L%^!c/4!6vVjA<E8t' );
define( 'SECURE_AUTH_KEY',  '.Sxw=OGyzrRUDY`V>O*E7v%pN/*?:BX7Oc_GGP4U7xUo<{1ZXW9qd <>XN=.n*Jf' );
define( 'LOGGED_IN_KEY',    '48g~<YtvPkDIKrU-~hSZ]^g:>%gXKTjPyT2577,F8;=4+9>[CPDod,BN](a%l?4D' );
define( 'NONCE_KEY',        'Ul3;XbU#WE&)d]H:~Jpwx93]&g_8YS/%GS.zLxQ[2~n7Yn(bio? MX((=a)=P&u ' );
define( 'AUTH_SALT',        '>sT ;0,{fw6$anfs/-]-h=3$/Ne!vv22O0%E4waZ x*rkg&Xe^t`_wf->PSg;%;=' );
define( 'SECURE_AUTH_SALT', 'n*%<c^sGE2vSFd{MoaQ}Bsry`;G;_TLxo-.Z{/SMn^`:@0bvuqD|~-*Y6[.8nZx@' );
define( 'LOGGED_IN_SALT',   'wY^S5x+fVwOi|TeBhD;xqs}GV`Kd>p6*:/?8Wly]ZY,Ry^ISX^9D+1EI_%P.NaC9' );
define( 'NONCE_SALT',       '(xMzQ.+~S@T.b5z[]I_oyMyRHZ+#RM>8a}9a=e.g0cgcU|la~48LK G@8!><4#=#' );

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
