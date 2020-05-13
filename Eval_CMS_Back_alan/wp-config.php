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
define( 'DB_NAME', 'eval_back_wp' );

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
define( 'AUTH_KEY',         'Rcgim3% xMm;^#i}2g$apb_dA US:T6lxbB_Q~>TrPwRFtIW&(C6LxW^H|7ZPVA.' );
define( 'SECURE_AUTH_KEY',  ')v~Am_zkP@kumMHqPsR{9CGQhz+#Ao$pVWX,?[7Ar.<4!YKd<XD3%>,)R@L_.Gx;' );
define( 'LOGGED_IN_KEY',    'q*Ex;!z]Fso`iQO`&7 IwtYvWoZ(mq{})C_kKWEz~TE[yy2/LQflcZ+/`t0Vx~e5' );
define( 'NONCE_KEY',        '@*T*hlkRuMzPw-Ub=I:q2YNI{kE>!ZbC%7s,%xvBWG<}}^K+y9WU+5M+=%a)Y+aL' );
define( 'AUTH_SALT',        '2:]rlYWsKM]I(mUVKi dV}K&~<fm9ScGpt%H])YJY7+p!A@%V#5hHsJk`3p`,(ny' );
define( 'SECURE_AUTH_SALT', 'YQ)`)GX$r(FV0hbK:[On3ar7fn*^n^P7uC~!@u88g|E*4{_,KFmh&NBoAJgKy3Dc' );
define( 'LOGGED_IN_SALT',   'Aa-[4BOiEPcDAA0i)*N3]~fSH~3cfl Y?Wg+(h]R|h;OzH(n~pFI+Qzi;5%V?IcA' );
define( 'NONCE_SALT',       '-h|Hj{BI;ngiCU^<TNt?BE2nzN%L1Eed,C)DgTX6v#ZeLxw#YtZa>`N`>1Uu9HRC' );

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
