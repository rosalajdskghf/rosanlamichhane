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
define( 'DB_NAME', 'roshan' );

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
define( 'AUTH_KEY',         'o*{:PPvhZP9zKoE@pfp:LRw4lU=0q):G>;nz@gG+_!x&.oKqzWa-8BPVgODit5m=' );
define( 'SECURE_AUTH_KEY',  'gPw>9NL/WORt5{C?(;EA*FFO|#|q?S{qAPFG`;5mPEB>lz%E( @uEm(06wdwX*`h' );
define( 'LOGGED_IN_KEY',    ',B}cc0aI4bhlj}:X50-K--N1TS%0>`vpYcYh0K_]ZqKyuC)}/?#y.PQj=_Ca72h0' );
define( 'NONCE_KEY',        'N[bbH-%]4Vw/>^nKn{J`{JEeG=a<Rv.klO/|&DClEVj-i7._88E>?~>wZbI_}M2U' );
define( 'AUTH_SALT',        '^ucyd/nNgt,M?Psv+}Y#[-e4w6!ymgXs%Bc+Sao{$gNp_lCrLoe@F1;q;n`1=W, ' );
define( 'SECURE_AUTH_SALT', 'gvkG49zyZ2l;`i*&IQIkPm$#|37^?{8eRzM;i2[i|[3mtmyH@F;He1FX~L]f=)bx' );
define( 'LOGGED_IN_SALT',   '!(%YsF}1{0:VTd,{ePbyo?!q&E)OcS:eMLAy/O_@^V7W]-rT(wxEbO4/k#9aX.T_' );
define( 'NONCE_SALT',       '6+}j]B#)p2<n=GVh7`!3e{4L)Oc;.Yiqmau,V*`eawVW|ZbV,=Q^cHAB#^Na&aF0' );

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
