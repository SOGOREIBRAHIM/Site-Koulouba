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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cmstp' );

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
define( 'AUTH_KEY',         'FHEX{ P`9F%L}Nu_GXJrk4VBpoyJ=|SEqB8.46@S/Hy$I#qa3yeN9#CtD0%}wYoa' );
define( 'SECURE_AUTH_KEY',  '+1*pqx5-TO`x=9+NZBuoSljBR4 0F]hQ,TJfihj;iL/f(m<R)^FqK5M~%*u$j{T_' );
define( 'LOGGED_IN_KEY',    '>b_[r6UHb,&b*nM89cMb>*.c05<Y2a>%t_-A8*gbJ]c}q7(d{_<.m~735a%P3>}V' );
define( 'NONCE_KEY',        'F~$qqaTbE`Twd{ehlz;sh}e}HC&i)wX0?P2#26I|XOv,=:aZoE$>{DJ@kMOLx~wV' );
define( 'AUTH_SALT',        'lNMVxH#z>,ydwS`IIx,>Cq|E!!T9Et)4hH$Ra-QVuQIcX5_1pxAbyYO$*jJ+cjIm' );
define( 'SECURE_AUTH_SALT', '-oSOg|#MIb|1xo#{>/r2R|xvt|B! x.j_q^AoXxD6tpE>(M.xM.gE|oF0,ypR~#:' );
define( 'LOGGED_IN_SALT',   'B~dG?=kMM4_h)5t&1ZK`59W Z|3a&!6^*{PazBxX$XxYg*c(hBjC$ybbN2?E={NC' );
define( 'NONCE_SALT',       'XidIqt[>#bGkNLz-2DVhk]`oCI2(#5X6Hu1nD8G 00zRRA0A-L](M@WEvks{F#)g' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
