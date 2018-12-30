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
define('DB_NAME', 'momomac');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'jKI2p#39,6R/i3jF3}KrWr}._r&,8NfW&J_6dGU3KEhqAj@O**he.U9iX%Afu(a;');
define('SECURE_AUTH_KEY',  'aSw,hA,lOt&MU>#2fhZZ=]C<$ R)$_25Jk(JS#^s0Z5!,T<?~R<<Tw[~?Wj+>N;q');
define('LOGGED_IN_KEY',    '0Oh}h.8yd#QG~,lrsMQ1<_X?UcqHO1q&9j+Df`+&IPSY8&=CB0-W?Geoe)+IY$j%');
define('NONCE_KEY',        '%+N$BoA~Fu`kLPS9P3u@z4oOtl;>5XgYW:1%SXiSS^48evD/8N[e?sU2_c!qDrmc');
define('AUTH_SALT',        '-V+?>Uo-Vb[VO9XYXr#M$1%gNA> i=,f/FovH]&qI-yT<)6yk[Gw9EE 65sij*X4');
define('SECURE_AUTH_SALT', '~i!E1Cm$j+@Vl/-`daL@dm2Y_i6RjD[MmdmA(xt;O5WM.%&^0JNZ~WXH4C-a_IJ%');
define('LOGGED_IN_SALT',   'c4Oj[5W|C:UJyg{tN+rLpY`1ytvV$/R6T^3EPLryVQ(3/Y PE$zin5ziS a=QG>I');
define('NONCE_SALT',       '<R<f^1@r@5:LEXHc+$Md:4fCn=k1_ PxWyCBpj}M*[;MVlYJG.b)txU|HVJUaU8y');
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