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
define( 'DB_NAME', 'nails_bd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=Ef x%#FF45(nAas^kxU~DX;IO1)(-?au[e/x@T-BMX:S0d!S:v5qoqP_2g?mgKa' );
define( 'SECURE_AUTH_KEY',  'O:+Q W{XTGifq +c!}n5`8X!ngXzGb^%weg^8|L&b+ z!Gv_X`HLu1g9yB*KVcw$' );
define( 'LOGGED_IN_KEY',    'r&YZG=ovb)Zuu#[tj^9bEdn}oL} xpt/C1erpd3Q~[HJS(+56baT&K61uZnZTue;' );
define( 'NONCE_KEY',        'Xt`7a:?<Lh?Lh 1|=|b-z~&SedLa-!t%&_d)#b](M3m8m(e{Bo=r>h4&5RgO](y#' );
define( 'AUTH_SALT',        '}pH^5q |5:l Ga+v4-B*CGyUt5-GUpBo%Vwe1b[ JME.x8U1r`mB:mW:WFA~[6H3' );
define( 'SECURE_AUTH_SALT', 'v@b79s?~;iN1XnUIq?0mM@-[`&4Kp^c`nS1tg:XbhaIvb#:)k?@AtQ)aZP6yR3FZ' );
define( 'LOGGED_IN_SALT',   '&MxXiP6G/bUF~Nn5T<B3tq;Uwb_W_On^WTzb!g&g`*}IF>wt^C5Xk2;o/po1,<)2' );
define( 'NONCE_SALT',       'hM3_#R4jw<+=)(BkDOOPj?!Y`~t,wBq|JOHhJ;`Yv<Q1/c}.yKSmXa4T9$-c+/2h' );

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
