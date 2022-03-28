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
define( 'DB_NAME', 'studio_harcourt' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gQ*q7`?Mqa5|sbL%{?}MH&w dSB+/ggAP[5S7,fCV#O4orhwX;dEi& X:%bZI5}K' );
define( 'SECURE_AUTH_KEY',  'u,pf0CBe7cbj3@)0TQ7% =  &i3:m@Jm;3>~>}i:<A^N.V9Xx$*k_v*eR3.PX6(+' );
define( 'LOGGED_IN_KEY',    'K&f6F<xAWaLpiw<Iv%EVld~;v-y`9gSX[<VGWJD_GcsE:pI]:!VyVx+2uoo1i/~E' );
define( 'NONCE_KEY',        'x+Jl+/P82DaaNu^B.@72!lAm;$uVC.oZue3tYdq.|,Tav?~VC,QdWjMBt1iO0/jw' );
define( 'AUTH_SALT',        '1OW|T(KRAv~/pq.f!vqQ*] U^u~v*A*S(?]hqYF^FN`r*=Y}+^@qzr;5+#z1u_Pt' );
define( 'SECURE_AUTH_SALT', 'yKirlF92>$_Qw-3orAnIp/Y/1`:0V=WgH@WP$LL-FMm .a@PDvv#5_^7;:euX&}z' );
define( 'LOGGED_IN_SALT',   '<9U:+b[sh./M:=utrfkD2{q]x<m3H3FXm-sk.ox~f/Jm?qK2<AwDQxo!2GXD)-=H' );
define( 'NONCE_SALT',       'PM^B|Ll;f%Y-aok-]kH4/b<kw@DXWqi=n?<cWHLoWj-%-t__-3Sm~D5Y{iwTQ%wd' );
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
