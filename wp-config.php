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


define('FS_METHOD' , 'direct');
define( 'WP_MEMORY_LIMIT', '1024M' );


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'integra' );

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
define( 'AUTH_KEY',         '^UzMlEe0,#aQ=kLTUrwPpt<2;c*c2LRb+@/BZ%3f~G83b:cCs?3uiP]oim2q#c}:' );
define( 'SECURE_AUTH_KEY',  'OgcJ$F(|VYP}F[pnK=a;3R%:q24nB`S3<Nh~ny.CN!^2We6=^rIOV>/Fr@{$GBCe' );
define( 'LOGGED_IN_KEY',    'T^f7T~geUK0YO.=&Vg|ZZ *W:N(k7/XTi7A#lEEK~tp]T|U,rpl;1Gb4.y)>C*->' );
define( 'NONCE_KEY',        '/J%6OvIEqPbd]^ r&7M%apZE?xFIQ#RB<VxT6oKLUz#odg&3i3*8u~?`.B*<.8O8' );
define( 'AUTH_SALT',        'IZ]kN<_Eg8*--K#3n^T]uqt-v};^3&NgsavAt_T7iM1&$Ve$@r`<i1[,2Ae).VLP' );
define( 'SECURE_AUTH_SALT', 'oH+j$D^^@_fFYLF_G=GAq<.`lm`CA98;j:{;%+n@XEJ[`-`o4UhHZI`Yp>VJOL0j' );
define( 'LOGGED_IN_SALT',   'CxLLyR80%uq-ECFQ5`v`SBV;S92.~?e$X9H<`w!xzLdkN-k@N^W<jV}iOYJ`?9WM' );
define( 'NONCE_SALT',       '<AIbWvj=~GTZhURU-gZMj|%{VVY_-n$/01q2Ttx!q}Eg-^`&D6SApok-,]dh{1PD' );

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
