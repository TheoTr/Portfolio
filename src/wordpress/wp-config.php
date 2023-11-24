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
define( 'DB_NAME', 'wordpress_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'theo_wp' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'J18M12A2001' );

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
define( 'AUTH_KEY',         'F<Qz_N6<Lh4ep<T`:H|?J?`/P5ky/OyJQ6vg~u7H(Q2Q{;V34DK)D0kqS)Smg?i<' );
define( 'SECURE_AUTH_KEY',  '0T@?z-<*hlm=f37pa+T;?~+q}Z&Lp|j;+&V]NEKt**Z$]1,Tzun;sQj/~Ks~@HW2' );
define( 'LOGGED_IN_KEY',    'C8{s=qt;4A0g}ysx 4 xjRleY^#e*zkT6/L}w-j3v+AZp^U-ScP$bIqf1XYnnz30' );
define( 'NONCE_KEY',        '[2!IzHodV(=T=QiOB@.agp#|/nF76UAXy8.6H;KI/]*}5lnEuLv$j$-u9Doz+n/G' );
define( 'AUTH_SALT',        '#qYY6:t):;=Jv,Glied:Bg <MRn<U>%$RSi$s1P!li:;0j=J!l`=1|YOkAOFfiXd' );
define( 'SECURE_AUTH_SALT', '6w$]`&{wAK1Fh& &8jdfnnxbE+Pu@6!d8}9aqvG1WWXh_AB1{^J_[;RYrhs0!M%>' );
define( 'LOGGED_IN_SALT',   '`n$;Pi!NZ6~m&z`{y7)>uv1E^yZ}V,(4kWq4B%j@7>=.Aa$Wo?VM3I4JK4YU:<?d' );
define( 'NONCE_SALT',       'di:i&uQLv]4<-~4gp:;,j}h>&pO6j*kWs<p+sS(~kqRc]2I>^674a3,8TjTY3EHb' );
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
