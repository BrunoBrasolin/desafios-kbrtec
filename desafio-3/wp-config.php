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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'desafio-3' );

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

define('WP_CACHE', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LhfUHvDUu_#TAR{dxLYD 8;x 6Fb(Hr7iw|pZHTy9gl@qLz191E*ed9D5XJ7XUDG' );
define( 'SECURE_AUTH_KEY',  '{9`2}3Ov8]g1G$$T24RN9UsCai:E!xyH)^C>sl+r7}W5V)SaoPU;4p(yCBWMa$s#' );
define( 'LOGGED_IN_KEY',    '>xHA@+@gkZvyIx<uWW8Mf}*Rc?4*H|Mc/Jq#1+?n/}RL.5k2Z)@/`:0$g>[-4hvs' );
define( 'NONCE_KEY',        '>e|BxzLL8L9z^1;d`Io~pj/=)x@j3Tn+Obfa9OMG~>Ow=X$:::+*5Oq6SzP6Dk4|' );
define( 'AUTH_SALT',        'g(S|NX^AP4t~EiE2F0|@QvM~:nt|3ERZ(V{`It>~!pp`4`5Xrr{>Kqw;u?f[}@Oy' );
define( 'SECURE_AUTH_SALT', ';_9KKjumMIW1^.]T a6Y6<T$XQYE(ny6h5p?}<wT{#yG^I#>*hMF=f*iLxK8U<NV' );
define( 'LOGGED_IN_SALT',   ':8k*2=SGMJ-^*40* .O/_PiK$h=X6try#&MkwZq%xIymxB8ga3?*pno^G/aL8)vq' );
define( 'NONCE_SALT',       'Sm%OijbLAfZ`(E1sp35);tiT>C2P&P~?=8=C`Me27J2iTtp#9u;A)Y:NFd#| @4C' );

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
