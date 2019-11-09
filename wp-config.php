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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'msconfig2012' );

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
define( 'AUTH_KEY',         'I0,:ebFIamfppTN<uMTBX[z.!d!?JeH<hU9J1j(E5cJ +mrUMB#566/]~duc -CR' );
define( 'SECURE_AUTH_KEY',  '0%|%Z*&Z`@,4&:rn?H}KM1*~}c_n4A4Dw.b,NEb3V^+Vj%1*T&z5l3_ScT?@GmG;' );
define( 'LOGGED_IN_KEY',    'M9}Uv*-M!s!8SHUQdNW}{P)2A9WICx=n3kqX`LQX}JY}&I9S0.Q_?5*4K~OEKS^)' );
define( 'NONCE_KEY',        '~1[hH8ng9ww{%5S4FMM.8=wL]=@B>B]cUzTA@w3g+/uOh~?V5?&GB<K7RIp_]VcY' );
define( 'AUTH_SALT',        'fLw4zB<nP|rB|77k7Ni?[u)/=~^1U-*14Uq0+>(P{N`Zs$w9L#D#d cXO];m}1)i' );
define( 'SECURE_AUTH_SALT', 'jT2 }9,IF@{^3 )g7-rHno#~l>(R;=dR,;cWpi+9iMdhR},Cm%S)B}7vGJ3NF7]]' );
define( 'LOGGED_IN_SALT',   '`!VdpzTVb@D!#A#jB}|5$[X|k6CVx+j>]+wnQc2ce%]k5KOY6D.-wyX+?Qn)ZB6%' );
define( 'NONCE_SALT',       '?CMr:yGIDfpmfK9FG=yF@%,e<+#074Gv-%mb3h)0opcyO~*dVP?zB;wjaRUK@fP#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
