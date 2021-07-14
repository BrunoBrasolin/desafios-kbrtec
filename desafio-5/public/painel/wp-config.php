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
define( 'DB_NAME', 'treifront' );

/** MySQL database username */
define( 'DB_USER', 'treifront' );

/** MySQL database password */
define( 'DB_PASSWORD', 'q1w2e3r4' );

/** MySQL hostname */
define( 'DB_HOST', 'treifront.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',         '@hFfU/n0PO8:a$g{ZiSVC}HN|b+]18SR:l,Lw+WyBcwy9{~xO54=ZG=R~9iIg2#d' );
define( 'SECURE_AUTH_KEY',  'vGVr4Mc!SX7k;k7kXA85_mMxKF2wect/-s#2#nJzc)*zO3[`zN$8n] 1XVcYf9U0' );
define( 'LOGGED_IN_KEY',    '#_Qc#&SfP+t C6B^K~A/<0W7hCgA(>WVT}@q_wymy6DCpiU^v)GP[!H )#@aa`(<' );
define( 'NONCE_KEY',        '_-lQd<bXO6(%GNyD?90r5a-`V;`q ox[FU$[;N(NS|^K2xttdRU)u^KoDC7UK%5y' );
define( 'AUTH_SALT',        '8uN&bv0%c`*P}v>9j&0}Q(]hLhT6&y8j=l$}*%Qh/5jkeLT482ef(k6x@F9b=(bP' );
define( 'SECURE_AUTH_SALT', ')q{W2D1gGo5$Ck+$eVkBq<sil9fqhqZk+=G_R}_EOok1D1,CbN/EvC[)S+Ubx}Vh' );
define( 'LOGGED_IN_SALT',   'fmU]Q$1Dkae*l,WyzRGFUTGJPKX|Gz/.lMFRHt1y%-}=rv/><SQ6pDO;?&k&uD=M' );
define( 'NONCE_SALT',       'lZJYd_>cdLgjO.4j9pBGKm@f,/`C)p[@Jecdy!,}2x;{Wv[$rzp:A lxW0|nnMY@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbruno3_';

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
