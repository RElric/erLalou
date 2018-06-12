<?php

if(is_file(dirname(__FILE__).'/wp-config.prod.php')) {
  require_once dirname(__FILE__).'/wp-config.prod.php';
  return;
}
if(is_file(dirname(__FILE__).'/wp-config.local.php')) {
  require_once dirname(__FILE__).'/wp-config.local.php';
  return;
}
if(is_file(dirname(__FILE__).'/wp-config.preprod.php')) {
  require_once dirname(__FILE__).'/wp-config.preprod.php';
  return;
}

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
define('DB_NAME', '');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', '');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Kd2`Jy@*a8.U.a!^lDQ>8&$eJy-<o8Um(i@=}UO:9tkjWJ(UvZori#k/:e=^trrF');
define('SECURE_AUTH_KEY',  'vetF.)g0aLhFAp}i|!76(=a6`g4*ze)5.vH[U4V-QhF)4NwHbeNGyngi=V2#rB7`');
define('LOGGED_IN_KEY',    '/keacjUpijPHz]v)h#JpM}|.NG9ON,WK&5f;y*d5Ie{nhNnQ3Kdc.vn&fbm6saV3');
define('NONCE_KEY',        '+}?@!*rz_.D&qHf3e}<zl5*nYI%6UJBrB*Tq]N9JA)7>]8O Jzo6+|&AAOakTybX');
define('AUTH_SALT',        '&[8}B_Y||Vct|%)dd|TcJv%ol)S0$s0OU.g#0c>`SOvVBJUe$/@FN`.q$A-Zqik|');
define('SECURE_AUTH_SALT', '9 [P/F&rm}[%Jva%H]j#vF^F$.qVW3iF&]bRX_2g^qb(|XDlTE1!|fxm4Or+#vd7');
define('LOGGED_IN_SALT',   ',C9H~.>o?`b;q=)@:rzF%Vws#Fa;H6)S$3M_lFC 1AUem~9);#Ka?d>wlku+KJ0!');
define('NONCE_SALT',       '~SrfZ!,Xj@82f2;Pg#Z&/=g$]Q$8l[hjC>T>aJ5|qNI(t? $-GQw, >%k+~+ci!}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
