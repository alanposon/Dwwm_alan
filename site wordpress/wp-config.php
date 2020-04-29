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
define( 'DB_NAME', 'wordpresssite' );

/** MySQL database username */
define( 'DB_USER', 'alan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'alan' );

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
define( 'AUTH_KEY',         '$q.O~CPj6<Lhxnr7^Mji(P~_TNd,Ge.)sp,`7-]L<?yVnkh[6I[V&Zx@0=ZfNy`?' );
define( 'SECURE_AUTH_KEY',  't9ZB?9)wiFS66(QMfrfRwcaK$H2;Hrh^L%~zzeL$$c<R}?(bU.R0b6AF}X/}Kf9=' );
define( 'LOGGED_IN_KEY',    'MoUe3{IR@-:of@n(*d}mV[Dv{67=Xwb~fbVhT[_[=4<pPk96=PGP=a0:~#GIegzr' );
define( 'NONCE_KEY',        'K~mImLSwDibTSSSpb6vU55!(ad^TP&I8rE*.K?n+/HR^^{+LV$=(3[bO4<[Az`U#' );
define( 'AUTH_SALT',        '&nlZTpu)QR^Br3 u7/V+&Q65M!VN@2b1e-KTDTGZ3j,{56(|C,6P:.--dxenS;@9' );
define( 'SECURE_AUTH_SALT', '+8&D$blL|Cv7s%dsac3){#Ei$ri hIOy[C*%p3Ww|@{rxMMT:aj~H{qAsmiJo/0f' );
define( 'LOGGED_IN_SALT',   ':5>L)Ti6ukaNK`[=;vMik3u8Pv}tko~%XB8Me}T=/_Ph(i{kNi/UAT_Z/x;H~T^I' );
define( 'NONCE_SALT',       'pb*s&Vmig$YEBQTv[T@EP=r8P3MeN~M;|*$$=@wUkE*uAf8K]YCMf<mrQ3<M Mj+' );

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
