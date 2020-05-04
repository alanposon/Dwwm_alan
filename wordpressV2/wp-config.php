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
define( 'DB_NAME', 'wordpress' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';al:Amf@xL0R e1xq#oOphS;^y060%quGEqz*%pB(9.|cM:*8]otdbpCuF8b)({|' );
define( 'SECURE_AUTH_KEY',  'W=<V^XiHvn0^%J[L<wG`$req+bOJEjdyEE7?j~e(/<`>7 4gap2y?:Zo>G^mLd|=' );
define( 'LOGGED_IN_KEY',    '$juR@,E*v Kb.A+YCMwnlH9Q,{]J3?k9(44$S}kXHJpv:m^^E,MWo-bM>au::-c[' );
define( 'NONCE_KEY',        'Y4Kz;K`5ZZzx|z%X^I9c<9uZxv ~629]Y2fX-&bV*YZ^Or6G.XLHO4&K4MO=@}I.' );
define( 'AUTH_SALT',        ':Wjt3rJ5T%ZaH2]5A PhxZPu):6[#h4S9&z`kY!4F41-/{&CVwjWM0i2Wo|khLtZ' );
define( 'SECURE_AUTH_SALT', ':XxoG8s_>($^&YS_RT4`:(RXYSR.mz!4{~sBS2;;h$0/aJ5GxMoGYa+oE&qe|+fy' );
define( 'LOGGED_IN_SALT',   'Ino}g@3sO<q^4Xa4 ,hlACEi;V-z /%sRW%bdqY(~3x25-L-+soEz1(8V>t!.k|e' );
define( 'NONCE_SALT',       ')|Nm6v?jac[hE3o9lNWZi^7DN_/fe*8hNxhCt:M.~gGQR3v2<.>n+Zr=}AOEdy=j' );

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