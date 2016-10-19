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
define('DB_NAME', 'ChiePotele');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%@I);GM^tqh>gQv?A=DuiKOK/nHcl;+3/;DVZU=`H#yP~J3>k]o(>/nF7/3^k`[%');
define('SECURE_AUTH_KEY',  't[sl>/fk ;o6Tn-$p*Y|hQX_xP)r:J)*w_j+geql&-Krx[g9#ifu*G^{!&=Pm_7E');
define('LOGGED_IN_KEY',    'IS_,dKiDDhwOzL`=RBpFeRKzv&d;Sm`KOEJeT-,>IHr97|1~m^1niN5aqx[Sv%vZ');
define('NONCE_KEY',        'oS]L2,s.:)cP@B]AMW.E{[RjOKT/n@O.D IXN.?n$Odzo/{7YmSCZ5o+Y6F6pqRL');
define('AUTH_SALT',        'UWl+`20 g_5%-*F1eu  UIUuF=OhXSrL0 L!SZoBNAG.Ax@W<5-+K$fS2o-.zlS.');
define('SECURE_AUTH_SALT', 'YLT;IPI .1rk/XqIqF@4qJBO=@PX.|}1qV+d@E}lp hhj`9t]2h79,,3Xoj-0HT8');
define('LOGGED_IN_SALT',   '<-G)r{3yFBtSry nWb%!X5NfG|(9IxS_D}EhiJ;-T=g[We22]C(VrZM{B)#]k,PU');
define('NONCE_SALT',       '9ic,%tu52Rk/N|7Djp[Knb]Qe8Lr,Tqzw<o<,`ci~6ST%H&QDTdGxhiFUi9=D8us');
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
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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