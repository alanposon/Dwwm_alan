<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ffXea70qIel&S$en&oO_pWGXcwusrSxjR7eRLh->4Vs8W>j[k`T%#PA)z_xhxBom' );
define( 'SECURE_AUTH_KEY',  '^3&sh@7zYyhXv>x>dP1QsFqC`;t&>Io4OgU2d?9fg=0J&X`e)ziNf_Z[ySVhh)3`' );
define( 'LOGGED_IN_KEY',    'Z^~0.AYe/:+^2Jg2vQa}E$xo?b/f}=8.f!n;&|kKDq;Y):n>4pG91TY6&>B-6+w?' );
define( 'NONCE_KEY',        '-7noi@ND*qw&FOo^J@wL*I6SL^7eo%cRwD{4njAhM[tD!6nDQ0bEfSj+%$1<v3fr' );
define( 'AUTH_SALT',        ' `@_:K+g:.j+DcPHKeRK|$^w0c}[og>0w0w?HxtRWH#pvwr!6aO9GMd1h. 7!peV' );
define( 'SECURE_AUTH_SALT', 'HSw/1U,,dA#Xj,;*2:6v3fHMsE/~qb^!5BZC*-nZV5vo!a$hRsh3D2mEf@,Vw&Xb' );
define( 'LOGGED_IN_SALT',   'u/J&#^vk,N5_h7]!E{*-!s91${1:r5=5. R 6x2j@qG)rKL-q2C{~~VQkck _BTf' );
define( 'NONCE_SALT',       'R,b6*9*Rp|%=L8e7]atEfG^v*+Z0S)?D}Nx:]}ERz_{f<y`h,BtOn=lBBASJ|0Jc' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp1_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
