<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mon_blog' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'mon_blog' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '4SZfqyqmQu1mu3EL' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3308' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '%9RZlbE}` IJ=Et.wB{tCKB@X#M|a2VZ4e*ad@.BOfg2ZT<?3rZ5yZLXK+MXO6sb' );
define( 'SECURE_AUTH_KEY',  '^>nG4MBEyxm=%{/dFw&mwd$ ^Jk9gu}e Oi76uf{ 0N-l|`:BMlz}sF6UojPiNw:' );
define( 'LOGGED_IN_KEY',    'LB~]@R(]&dvt}WaAt.XIIJ[#.,2|/uUiJ`ojZwK3Llh>>s?fqG*&Vh0j93/vM+sj' );
define( 'NONCE_KEY',        '0#Qm{PBCdu{-rz4oWt*m=mlo_dP@L=Vx1$e*M3-%gjNv#M~@wv1D]KxSA,}lB.**' );
define( 'AUTH_SALT',        'o6I 5M<%9L@5b{RiG=[@bkXc$<91E[lfp,t7-&vO>3]!&AYQ.! cZJcQPEA{`6to' );
define( 'SECURE_AUTH_SALT', '09X|u}?rd{N2L^yDM9V9;^za_gL9UoJWNO/UfZccfMm zx?NsHvEI?ouL|$~FI/R' );
define( 'LOGGED_IN_SALT',   'T*5=+)$~e8{lp)|5lc+OB(a4xLgS^0!>XJ6W-n}c@. khCS^K}LA2Ts[sG7^E`hF' );
define( 'NONCE_SALT',       ';S@(m%SnyM9kt^BJec:k[{ZDFTX49o^:+l}aMPztuEk8c)L/mH3fpUa3+cZa 36n' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mb_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
