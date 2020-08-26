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
define( 'DB_NAME', 'mydb' );

/** MySQL database username */
define( 'DB_USER', 'joy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'joy@123' );

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
define( 'AUTH_KEY',         'Aud,42IF,BYXA<j>!KG7mDV,vl;*(Z$?0:e.[i[S<Sl!BQ^9deTQ/*bc4$]XWTSa' );
define( 'SECURE_AUTH_KEY',  '1uP_YcR(HuTr48[/%LH890S%z@g1pxf/x=_+_7CTizm|z<5rr]>ncSt/K2eMxZlI' );
define( 'LOGGED_IN_KEY',    'z=-4r{tsl@|eILc[[NY2h`NL.b3Gw}(t>E!Cus>Eu5O1;M.17P>BCy%YDNtwEL:T' );
define( 'NONCE_KEY',        '&WPAPA;&b2QAj0p{-k&8YtC%az,{4h8b7.9r;J/Uy|(F>xvu=<VYi*A$)2JpyN?C' );
define( 'AUTH_SALT',        'Nzw5wiPWy^TY6tMQEc~Oxgcz^RX3q!7BFbBz[O0 [%4!L5X[*Cyb_F12{]1kji#{' );
define( 'SECURE_AUTH_SALT', 'm:Cfk7fxn*1T{);=Azfvt=!`mX`o$MXHHVSZvZ(M$C7bKH F+t49BQ33,Z%ik72 ' );
define( 'LOGGED_IN_SALT',   '<JlD^dG.e*a@3hBOw_D~.wT-W(slDc6=jJl/5L4gjVq%e{h=wZI8)SVR1ipu8HX;' );
define( 'NONCE_SALT',       'kZ[4QOgd-lzxIqIY.(|Kyn;&e&z2N<RvCjokip&^n%>Y~W66opJt?L<jy$/Fm)S0' );

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
