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
define( 'DB_NAME', 'pharmacy' );

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
define( 'AUTH_KEY',         'jL6Y3jVa?o-NLl.q:hBRvrF PCM$0v%EdSw Mo|&d1cz&c_10FU%3sQmO?L/`R])' );
define( 'SECURE_AUTH_KEY',  'l>MAk~Oe,GSF]FhY2I5}IO>}u)Ku()ep%r21U-3}`~felf?l~V(Meg{psj;o3?U1' );
define( 'LOGGED_IN_KEY',    '>rMG`LDr%%DaGSAl(eKqoN. ,{K0Ep:SeZYUmGHp>h|%>@Au^+^KqX$U8@PEj} G' );
define( 'NONCE_KEY',        'A+_{|6)hCt&Y[EuEhLx;gh8/~tbuoL1Aga?5/^ZIh^T*>oCsP|M>SNS^Zy]P{z?j' );
define( 'AUTH_SALT',        '#Qeqhj%2HOw]e#I`mE2<|szXOUS)(+u/cUg8`;<`K/Qq{)x#n3Jp},1PG7xW5o}#' );
define( 'SECURE_AUTH_SALT', '>7TN2Q=f.r^`)21/mXMr_1^S(GQ{g@g}(7W@WD%) IoEnQrbWQhsT<!p/FpsYfL-' );
define( 'LOGGED_IN_SALT',   'LahmuA&ll1s/|Y3I:W|Tq>@Yy$N&`{-2]~b M&qOEemELAWaBUyqmF%=+!n?H;B<' );
define( 'NONCE_SALT',       '{@tP.(CSanJ<T@4+&Vev*Na2SjH+HR.E~`KLmF;e+5z(7ZG@HV^Ggk(~eHfkJs7|' );

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
