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
define( 'DB_NAME', 'tienda_online' );

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
define( 'AUTH_KEY',         'd}7+!g9*v$eo6=6SG%<SGNvx1}MT>7U]LjYSp![n#O)V;VO3r_7hr{9AN$7R;XXI' );
define( 'SECURE_AUTH_KEY',  '04}%:_+[@/Be2,](HW/:N?/j&Z6DNg1T+CICHE#A(6S*sKBm(tgh8)gDeHG1Q?wQ' );
define( 'LOGGED_IN_KEY',    'R5%tp2N@*K:o5H{[&IkoZ7|.ibQ5W7|0]w>U%I`%Nu8q{`8z?Fsk6PtNHdjAf#sM' );
define( 'NONCE_KEY',        '{^8)lmIxe86s|zd*A%jiELTc.+Fli,nwi/^2Zl47Tsx]hgw54.Lf<[xg%0b5/zG<' );
define( 'AUTH_SALT',        'rqFcWk~|KBYqYU^f*9)^!p`0TK3v5x@,fN?{L+WZA2Sau1]x!KE#QXTSS9l4-ECn' );
define( 'SECURE_AUTH_SALT', 'kvmp{hCrR@PwBk6CnW`{6pg!l=L?TG6:078,4.h%t2Cawi>:MQJ!/FaTP6j72R1=' );
define( 'LOGGED_IN_SALT',   'E:;I?<H]{K@>;Mu)WA=NKBG0?}6:>[jXhq!WO%I]xc37F&rURJl)VK%*)r=#DOX1' );
define( 'NONCE_SALT',       'XOQS-P%QKA<Y;u1)rGV</h(]J[<F?0YGnC6SkIyvaP~G>X26~n4cB{]NGP^ji~H-' );

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
