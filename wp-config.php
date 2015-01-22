<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress slider');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K~z57-[W0g:ov!Umgrv^yoXP6mb]Pi*6JOf)~9PdB<gy+GG>}9TbwX=E-#$scy%s');
define('SECURE_AUTH_KEY',  '~!#V~!EaG 3mZ(%q:I7v~Bs(4}d?+%T~{`N?Smq#j.S+Ap?hC+D-dM7bljK@s>#V');
define('LOGGED_IN_KEY',    '=7F;AD;0ZsLPosJgPq#a!^7`Nj|#<#B^T3-q^r!l#+rMov|rdP+yK09taBZO.T=r');
define('NONCE_KEY',        ']-$o]@V]/.dTvw8~>!oAmVuLZ.;/-VD`RQI=Ex4?CZ^u~<wi^8n2C93%_Aawp.V0');
define('AUTH_SALT',        '|Ei9j73&=Hi<lFScjlH?+Zb[npU4G=^K|2`?M=;E,+9vPwPBJPse;=O7G-R@D+uQ');
define('SECURE_AUTH_SALT', 'C|:I()s+~-^R88?*su-[e#Lo^K!$&{B51es/^_f+%y7H-<K*eh5ew.4S:ox8B)W2');
define('LOGGED_IN_SALT',   '`wMmG0HY;#O8W!;MJ$2!k,@,d,c?ALZ1<H+hhn@s-}s(`9ZLNFd}@(<Ucp#-q--v');
define('NONCE_SALT',       '5wW5A?pdC_9 bJ.+hw)q,@Q(iO/qS,O?k u{Tc/kwgAE}?>?Sr_X*ncQ-&,!8SO9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wpslider_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');