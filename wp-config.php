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
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Do not use FTP for downloading plugins etc. */
define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         'd[F*2LK^2/Om5{]S8*:CUoyT_1O_ag_N*Y1 O?ZfU|*#lHQe5cXP]%}B8j+!li8j' );
define( 'SECURE_AUTH_KEY',  'v-_TsW,%|LM`FE?xK`uPOx|.1Tq+]|YhRT##|UWB_N=y~SBT|b5v^5ZlI%5nVM%k' );
define( 'LOGGED_IN_KEY',    'PxLxxR{k,m=T54ht/ )-?ec[{S$~!-+H[g&8u|ur!ujq%-V8,>n#H9e&_%TFr@ U' );
define( 'NONCE_KEY',        'WXk0zr$:<Vp)IoSmHbe3cPzNoq59)0b8F%k}m$}4r4Nn{o{zXy*!xsx^AN41{VbP' );
define( 'AUTH_SALT',        'z!|I!Yg5s]V-uHv+ELw].Xr`CkG.;4FD7*mkwLyNzoL*>c}gxo0-{Uus,-Q(p6bs' );
define( 'SECURE_AUTH_SALT', 'yi%j7`:G8OL !}&EL;FY;8|tG .8&6xA6):9rNV!?OFCZ|&;7%CyF#~Y_{o07g,T' );
define( 'LOGGED_IN_SALT',   '){YZEYOBzk%eUZFRO^AAH&W(_DlFp AeaHmo8R[tk>X`w&lWbDpnB2 )s=S%ilG0' );
define( 'NONCE_SALT',       'Co@*)pt-p+w0)Cix3my[N4M%becsa;4lsk!6g6 v,UAw-7 =tZLr)Wg7{%6.v4*V' );
define( 'RECAPTCHA_SITEKEY', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI' );
define( 'RECAPTCHA_SECRETKEY', '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe' );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'DEV_ENV', 'true' );
define( 'CONTACT_EMAIL', 'webmaster@northeastmetalspinners.co.uk');
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
