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
define( 'AUTH_KEY',         '!Dc!P/j^{Tl? h,Fk,hnd9ENI]BWyG? ]t:|bF%DaK.M7NWvy?gm},7,-J39W]$)' );
define( 'SECURE_AUTH_KEY',  ';m8Ouk?CZb#/o&MfRX%-;`l{mG-~uWMTi6,4[iUIefO!>2_$!8rE%8$0gStRX/eN' );
define( 'LOGGED_IN_KEY',    '4]&<0tHSP=!gy<b(*/fij,]N~OxXN-tP_3bx[+BB6kLv9TuA;;|!Z.]KI eiQEUm' );
define( 'NONCE_KEY',        '>-]JM ?mJdBhO%Gj}@{a%DG.75}X{VY/%hv}!@A#EV9`1u=T[{rq/n?jrHk$5c5x' );
define( 'AUTH_SALT',        ')2TQ&usNmNz!aQO]a*ZrZUIN^FE^4]V1<..Ojut}hiYWlnO3M[hAU;x.)i-D4[+/' );
define( 'SECURE_AUTH_SALT', 'p1DYE!nFcA37S6!ZRsG^fHc;[%q|C0J0{jOAD/2%g#g`F#gam(zOp%fxP7[ ;`iV' );
define( 'LOGGED_IN_SALT',   'FTxkLH}5 /LAA=DizrY5,Rhb;72g?RoupLW^8xbVZf+V/bixXMhX@>IFq2`<E2yc' );
define( 'NONCE_SALT',       '|?Vn9iGLY<4e;jrA.#xxb%OA9HD[HT9.jMgJ!xb|tfeW+QPXf)5mq1;QcJA<5f~Z' );

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
