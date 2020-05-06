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
define( 'DB_NAME', 'themeperso' );

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
define( 'AUTH_KEY',         '9MQMBl82]iR8]Ujc4^]f2wDJr_k|+4jEA5@>imw&ZhAYK&J|RnB?7akp$z;Zyid!' );
define( 'SECURE_AUTH_KEY',  'x#}|Z*U-=FPf5;Q!Av_jRxcD3S#<1^;Crn/XYT#6  ~0yNW:l]Yvg@66:u|[~C&8' );
define( 'LOGGED_IN_KEY',    'F}V*qRhDP-G:+Q};b9g,kbX<:DE*6ila*$yrIYae4)88qct2DZDZos w{&-G,0gW' );
define( 'NONCE_KEY',        'Yp5G;}I33{Sp[>cT^H1m?ATPdbb&7~eUl%-z776AZUH)d$A`otoCl;]|m#HNrg%8' );
define( 'AUTH_SALT',        '7^!I;-?pb@@~eQ;xA>ovQkF6x^Lxaj~QjhteTK+gko(ODCW*r.MRd+eA0~ #ci17' );
define( 'SECURE_AUTH_SALT', 'pRzjUkAggUH<1(0`_j*xS<q5u+Q0e2mqSiJ|:0IWtITihA~gn>XzX5ib7Qub1U9W' );
define( 'LOGGED_IN_SALT',   '1R6f3L4&+`kah&i|8;k(2)ZeaC%afma6qHrX+1C{E:LyK67K%DDI?Y2R8jG%ARp3' );
define( 'NONCE_SALT',       'bwM]B.I0L&8Hj,(0t]7Rm^prq]m,([^]=o*XL#$@hOY*bJait7Y@sNI.y2o?nL]i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
