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
define( 'DB_NAME', 'zubair' );

/** Database username */
define( 'DB_USER', 'zubair' );

/** Database password */
define( 'DB_PASSWORD', 'Touchmate1@' );

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
define( 'AUTH_KEY',         '_?H+h*npZ)dMnICs1|oZ@n]|-ZaiULU2:o.imM*m6!{LE.iK0z+@]^w+*1fV0_.t' );
define( 'SECURE_AUTH_KEY',  'w/dY;q*_dKrUAbb%R}r^h&KTI^j6Yu&5ZCDourj#$wL%o@lB,%!Il|7&b?tKWzJ1' );
define( 'LOGGED_IN_KEY',    '.eeZU 9>*HWzj|Qv#;f5I6uW:,+u%p[.U36MRQrs8Cj;E385>;(pAzGLzl rhwo~' );
define( 'NONCE_KEY',        'f:F}}c6VW(2)t1|bQg3{S=t?Y)ycEX{0Hle]xf]^F-p{V(.9_TtTf}]&dG6DIz^N' );
define( 'AUTH_SALT',        'NuEv}x=oVOFk$rg+s?=km@>EdQ|6val*ryzizV+v$HvIy;6yIP&<^~pgjh.GO6xJ' );
define( 'SECURE_AUTH_SALT', 'K}P_Or9WS|ITT0 oyFBHBwEnEM7P]4>aH|@:J;iK #SpL[Hx`R*&$5W20;K6enN^' );
define( 'LOGGED_IN_SALT',   'RB9obr$HjF##nLxz3e)@(2BX5Qt}u_q/Fl@!Nn#Xa[NC}}[LU>|?mkUK%CnXO.@&' );
define( 'NONCE_SALT',       '}e/~p0W,KNhx6$mHsWZJhDqy1SAXhL9PbDWs@mn>~::.E4gJ<Gy;}Kx^8mU/>9;_' );

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
