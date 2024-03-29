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
define( 'DB_NAME', 'woocommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'M~:MxeY?f26gjZ{Ut=:LORF:#2j$d {d9$r{N033K3K=rZTEpkB>kl,yvl7BBTJ-' );
define( 'SECURE_AUTH_KEY',  '1oz)wCP3nsnK$Etj>O^Qm `wtU*PO4k0<xNmufYE%+WS`KivtV)Y!j2H}PIzV]H/' );
define( 'LOGGED_IN_KEY',    ':yGJon#|_uI7<24]Y;FE!6MEbW;!O9br$,4-U(IBk>GIIZZyH a1NUUGQ(+2yY9#' );
define( 'NONCE_KEY',        'hc0w|^V_;5[[_oQA_Fx`Kh8`sobfQj[eN*KO6ph-.caDva~]y~!<.C}[ZO$%=q/q' );
define( 'AUTH_SALT',        'VZ[}TDG &r~|tO7@>VBg>K:^ctm|7s.V]J+jY(WkI)m*tTZAF.qkq6FDiKC]Gga1' );
define( 'SECURE_AUTH_SALT', 'Ac l#w`]@*6E)6P;qZmRqp=UFqge7QB4UU(r}GRC~LrR0TDP)LgLP;N1i@R7i|~p' );
define( 'LOGGED_IN_SALT',   'Ls=dr8-idMT|U;9O|4~_9462#MZF0`qt3:&?oa5#l_=~2f.pey3_,0ssD96~ %z(' );
define( 'NONCE_SALT',       '(Za&DjWN)+0P#Tu|r?6M*}<qOP[!}v, RSF6*OH}/dz/%F{Ix!P`UT3qy%kAN8nG' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
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
