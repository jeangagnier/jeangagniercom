<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jeangagniercom');

/** MySQL database username */
define('DB_USER', 'jean');

/** MySQL database password */
define('DB_PASSWORD', '7TerGer0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i|~I-<_.F8-+-C=)Ag~%`>61[yeQ:[78)#QT+f&+>m/=Gyz?Unrx/}y]WLTj?o~M');
define('SECURE_AUTH_KEY',  '(aeI=wppZa;49&f$OH]d<xQ-H$Z9PEH7jJxb[Cc[fQEj6YpUPAId*Iw>/wtJ#Yj0');
define('LOGGED_IN_KEY',    'h5iG%%^yG1A0%d?KX>5uC)Urg}i 4Z=u-r}:t3S!j_sF2xrj25,D[AhBwMtpnB8M');
define('NONCE_KEY',        '}w6g!b]+3@(K}atF_{%V=k$~91fDc#}r:5>7 L3mhp+.r9#JHKG6b5<tXg3N+cT`');
define('AUTH_SALT',        'AmquiHW@hgXp2cPjhsM230JAHeW$fO]]JUx0)o9!F+d;<j4Oqel0upGT-g-u`O7-');
define('SECURE_AUTH_SALT', 'X03:mR#uyJFDIf``4,8EBk7A_5)SAG|J--}g+= :N|KvPxq>qayJ<@-0+i)(9/gh');
define('LOGGED_IN_SALT',   'I9kT71*lV-)(e:[x=,W%@^l[Ph0sDJ?rtP}:XzaJtr] (unF1SB28$R_~Q-c7yXl');
define('NONCE_SALT',       '7xtN!.;J-;i+0W8dv.o}5/AaT+nQs85)QH|9#T196S>:g4 =C[l,Wf,@H2:>U{15');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
