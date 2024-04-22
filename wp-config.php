<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VnMr]j6IXz{E/m5]v0IOMQ<achsln9ryJ|b*Mn,#kvFVJ!T:]z[/etV)uAL&|O^Z' );
define( 'SECURE_AUTH_KEY',  'F`L9e3q2-`>NE*d!EKR1)eE/}NWHl2^vn.(/6r$^_p}egut3JMhl6u4ESyfn?p6R' );
define( 'LOGGED_IN_KEY',    '#rbr@]0TGE:U%)^04MM]:VUXkY/o@%2sN?!war2NU|3+tqQXt#UO@nl()AmW;-5z' );
define( 'NONCE_KEY',        'AMVdA)]eC@5v&D#XOL`;Z_P?R- l!dgngGzpe=/7*H1%|j6;4r1:x6hIOzL%ib#f' );
define( 'AUTH_SALT',        'vG>;vK jUA~_C8N%Kxxi5D-YQ!`tW?z|HBG57~4cre-k7n5=:%FeHP8+kG}w^]mf' );
define( 'SECURE_AUTH_SALT', '*~():33Q!}0!rrRh^ON+LdE)Tc@ > O:UzOV .|@mom1JPV~$V[]E9fC/LFXs{cF' );
define( 'LOGGED_IN_SALT',   '[HE{puL5MyM`7JVAz-_m-E++loub0hNE(BNnCM&A|0{I8a4>JU 1w JNU^sktyOj' );
define( 'NONCE_SALT',       'zFWzkf1G@x2qu&c1O4aS9oL7Y.)tbl#ZdLb+6N;cA+~hXb9[e(1b*x4MA=Zj0l<X' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
