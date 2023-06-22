<?php
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
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

define( 'WP_HOME', 'https://vimapla.com' );
define( 'WP_SITEURL', 'https://vimapla.com' );

define( 'DB_NAME', 'vimapla' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '5SN9Lmng' );

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
define( 'AUTH_KEY',         'J*MCdf/1&iXMY#%.4?{i1z{MAwRs6w8^}`G+yT4&JCjCz.]i{d6S$(a$_Kz[NDw[' );
define( 'SECURE_AUTH_KEY',  'f.KXQNH<h(?PHY?ImLeL^tYdvB1=XmW8{BuLsf/[;9Y<toWkw 6jE#2F+Lfln:t!' );
define( 'LOGGED_IN_KEY',    '?:tLy,x.zp@Ib>ZY~Ig-b*`kSko-}(+*bp^/XcOeG6<*lgr1@AX3r|w|!I,sJsgP' );
define( 'NONCE_KEY',        'CE9bcSg2~L%qVHAZhfcn%eU_2|9sv[Tpi&!CrzB2yqk^Lquu6NLI!`c |U4da6J.' );
define( 'AUTH_SALT',        'NEmJOT vS^^0?irr;}#i`TOLP6o&tM_e:}JLA:K+lf)e+r_e./Z,6)fA*`p-f%me' );
define( 'SECURE_AUTH_SALT', '5/DW3?^4Vc96uVJ|8a^#qX!]Csgg0U>=k`Okyg}4Ky5b(;JB4[=TDb3w.J7Iy-eU' );
define( 'LOGGED_IN_SALT',   '7/%yP7 OW0~^K.xEaH73Ecl#[Cs:ka|``#Ga,Hd@f{z|[PXoS8~bH!F?1Z@#f>%l' );
define( 'NONCE_SALT',       'R8-QD<scB}oM~Q>/}B/-0&}W97c<AA|*r$)ei2e4X]v620J>HsSAoj&NRnHgac>]' );

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
	
define( 'WP_MEMORY_LIMIT', '500M' );
set_time_limit(90);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
