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
define( 'DB_NAME', 'wordpresstrial_db' );

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
define( 'AUTH_KEY',         'cQ.(R>ak*qxnGsP,tH:s{h8*rXm|N(yGM5~3V~<29tl3&nIe-!WkI_s6gR|ld/)d' );
define( 'SECURE_AUTH_KEY',  '1VIN]pzzrHE6WPpKtSCpd+g{4poo.UDj7b=]ddUVLw!a3k}KEsih&`PhEI0OvM~C' );
define( 'LOGGED_IN_KEY',    'zJ%ngge?3HTATSxl5js{Az*Qfq&gPh9UaM571|g)joU+Kp>AatP7qbywjf]ShF#D' );
define( 'NONCE_KEY',        'Em;$!2f8B=wdi$Xw!1!F5.Z3BJLHptD<M}C=oS-6YF)<H9Qez3@(;E2>[@D~gr0}' );
define( 'AUTH_SALT',        'J)EbJb_JOJv>Pn{7*DGz(a(,#%)TS#>[!GE|Amjec%N/_vhx,O[>DGolkY-wn6>3' );
define( 'SECURE_AUTH_SALT', 'Hr|]I4IDj^o^#VSa42ICxX~5Pl+n{Op%~wI<{2lyZv*^+3y%?XCl%ONJU6$d:=&q' );
define( 'LOGGED_IN_SALT',   'i<yb3 vMf41x0l!gTXiN-V^R3lbN)P6[0So;nR6S~uM24@OA=Pf~Z-z}iM0rzO=?' );
define( 'NONCE_SALT',       '&.U:6#xpn[=~Vw3:a!-_If3>-yVZiiM{TCqguF[vi=zUJES}{)[L3ERmJ:@}`k#$' );

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
