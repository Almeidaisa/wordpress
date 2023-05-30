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
define( 'DB_NAME', 'banco_teste' );

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
define( 'AUTH_KEY',         '&8kA|OVO`Qn >s9a|hGCN,1sV8K~@JxA.*}I1 =eh@!P2qQ7~w1:,`6fT|isok,g' );
define( 'SECURE_AUTH_KEY',  'oZ;AkUwj#S&TdlYERc6eX1!`}PPW^uk+G.{@[J1}efJm.&{#iJjwum(J,3M2Teh~' );
define( 'LOGGED_IN_KEY',    'RAdCAGqr*s$MX88Bm6u:P )hpIc?*[JG=~.XJ8D!YJ$DsBR$_{]-PjH9#TWFndNN' );
define( 'NONCE_KEY',        'eO-L)u->PDt0_{V0L[dnRqADL>*9KIX* I2BPd.MLxXlgY^ }ZGa!Hha Yx,<3D_' );
define( 'AUTH_SALT',        'g^(6CfUWcaPHi_ZoJ[B2uAXrD5(;T|_HyLbO~1?e##GtqOwa2#{{yx<O+Gh$%dFe' );
define( 'SECURE_AUTH_SALT', '31C74Q}wC}K][bt-Wa1R7kvAJ]vdV^Qu$zALs??xFlpFi_1@hZ7{Ny_bGN<KwPQB' );
define( 'LOGGED_IN_SALT',   '3d[m^rT18/%D7AD2,fHV!#E&v*qL,;M;Pi~T0=c1qr*_:kNDu4%rw+%g9+Dflqpq' );
define( 'NONCE_SALT',       '~&@%6aA`MP.$;LBixnAz?+G/jhj;9]gx95t1Q/[<rM_Cx&O*vV4l/MH)N-3z;|QD' );

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
