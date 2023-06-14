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
define( 'DB_NAME', 'wpdb2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'g&-nsGKBr*s(u-g4fe<xS/Yk>p{rY*ZLzfXS5pO$tZ9wJ=>o[>LT/*3]1$Z!`N&a' );
define( 'SECURE_AUTH_KEY',  'L:L(D{0^zsOus%9=7HOF7oo(cK#FZbu6n7H&r.chN ZUBs&rH4.8we;ot_ t1avM' );
define( 'LOGGED_IN_KEY',    'Kj~64qkK^2[g.OZ~:;ErhM7}ik!EbR&:rRYZ{qjTIW-0Y!/0:34s;W($;G:|1YNb' );
define( 'NONCE_KEY',        's_!Rwx0*>)FX0N.83(P[lDa@>S*%#8nVyb=(oD[y39SU+qrEu 6uzOv>j]@+OLc1' );
define( 'AUTH_SALT',        ']mF#ej3V*}Rr)eG*ucV2DSoQf[(#,m1,,PH^aV*>z&DdAgV}AqVh %K-`8bO^M.q' );
define( 'SECURE_AUTH_SALT', 'Rlez~Hui3b2?s%%gEc3G3br&hVO:)vO]&G=FCKxOEfg9FUhTw6MYH4:pe t,;@?z' );
define( 'LOGGED_IN_SALT',   '9-N/$CI]!(XRDvtPJQ3^Lv.}[`E^%c+#jH+VXuX?y0nL1t]mnqKO(OizEwN*=#0i' );
define( 'NONCE_SALT',       'aIiY$<|Mg|03v%_1p`_ok&#>ha,XfzrH#,tB{-B]=!$Ydw+N^x@$@p0;ntx5 Dn`' );

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
