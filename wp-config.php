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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'dbuser' );

/** Database password */
define( 'DB_PASSWORD', 'w0rdpr3ss' );

/** Database hostname */
define( 'DB_HOST', 'nems-mariadb' );

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
define( 'AUTH_KEY',         'KF?O ]=ffUqo3gYq-N{Pum7n3J.7,>BmI=)O:cp^@RD8z}vNFQr,6<`GB[e)0y7k' );
define( 'SECURE_AUTH_KEY',  'xf}A.%:5G~j/&JbV3F]bbjJ+bs7T7d;cM~{gfdoZxZ Y5zUt|#OLT{NjpqpW{?i&' );
define( 'LOGGED_IN_KEY',    'qHY{k+%ZJD)anZ!R&V?/rm[T-1Ww$Gtcy!G05)i_9K6)hYR{Gs17<NJ]$X#V8D%%' );
define( 'NONCE_KEY',        'D#-}:D(A5A$sRK/x^T{!dTq&]Z0L+eE)| y@4|c// VV4|Ul`fM#`LFPuE(wJm|P' );
define( 'AUTH_SALT',        '[Q`8dWX?hYGu$uyJoNboW-|Z=]z{l}4J S8>b:2#w?~lSK0%EJ4bUqCL3ow yOT<' );
define( 'SECURE_AUTH_SALT', '4]Fo0OO7*9,dv#Ox=NC55_Vu|!?N3`&JCwZOjp/-(H1:Pfi3PerV72vPqB1I#xj|' );
define( 'LOGGED_IN_SALT',   'JdPStIJn;`>S+wSUDtRS{0kRijd7}Bc/%xgh:7L2>)<3,lwOwn45vdocl7tIMMuU' );
define( 'NONCE_SALT',       'Ti_N=&|0VRy/GLmgr4*~^kG3.Xv=4ZQ_SZvMn5y<(QvCk^CXAd6Vu|MgEZ}_c=|W' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
