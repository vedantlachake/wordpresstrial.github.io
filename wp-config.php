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
define( 'DB_NAME', 'envato123_db' );

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
define( 'AUTH_KEY',         '7Q^HnqZ|S,g8jpPs,fzI#s?BV(N1_8=1>kyXQ1[u|[x7UG/hE}9bf)l?zvS`=6vz' );
define( 'SECURE_AUTH_KEY',  ',n.]kc9@R]h11S1gXOcff0jPl !VfPI;j/i^c.dB)tFDZqh-BV;<J38)-D?jfGmw' );
define( 'LOGGED_IN_KEY',    'Wki*VpLS?lwk:nl_.97-!e=x82-Sz+xqx)k*l6+K2#oOC2t_{k0!yP.7DxrFjo^8' );
define( 'NONCE_KEY',        '{) bZ.k$lOr`SXkTEfr&5/_u6i.fBF(q~I%(G.@bXk6xC!{7U%L^g:J XgJrdqJ3' );
define( 'AUTH_SALT',        'G4/.#9eTHb`px0v9G1wN{!!8~gq(7:iYDr+9>-r2BMob#s^k%Is! vw2pqptvH9r' );
define( 'SECURE_AUTH_SALT', 'pO<ts$*3S@Atj38:PP8@|6WASo.O}<1S1wcYJwK4v~q44*FFic{W$L5%*%U~&T r' );
define( 'LOGGED_IN_SALT',   'j&p2/~=v SlNb,*_At|P/r]WLzT@}4T5mV7f6YbZs,x_u=u!I;GUed8KIf;2LxP_' );
define( 'NONCE_SALT',       ';by}XkYc*&QYqYwpPmxxFx6K,GuA|CUWN/`.3,+Y#1+4b6gd%=f4rz>Lm*f[%s1Q' );

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
