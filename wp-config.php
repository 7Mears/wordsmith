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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wordsmith');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I4!@Lk,9[JC-o;TIJ<d21;$E(-,E4ECjfeK%G|6d9?30l&albm::METi`>Bk#aK-');
define('SECURE_AUTH_KEY',  'Q)t:-9#+23>!ld$(pMTbn(P+%wTX$bNJCKB|h-q<]C#h6,d*GJ-_N+@cosa!D|+A');
define('LOGGED_IN_KEY',    'K!)y~ALV>1K`$YAACgiKL=S|dXPsf*`[!fg!HU+Idg@;B^yb_1;)n.-spA_]!Y|.');
define('NONCE_KEY',        '?N+xQw8AzeOyBJcUh|T82Ci}H5j-n=pK/kQeE+)noT0dyJ-S;OfMF*mKu-P<x,r[');
define('AUTH_SALT',        '#EYC5ZiYYce;^i[I2GP&b}mT7:JTg(?7_[i[()n^tVq`d.w!]]o%~/n!`N[0;g)}');
define('SECURE_AUTH_SALT', '}:,~b5BlDKb1v@z`-NNy;et}Y(gp$K`>)Wc<6mAGg]Pj-0WIx|ZuDn?[7,+C8n&)');
define('LOGGED_IN_SALT',   'bE-0n:xNB,A${;jjB#KQg]k%z_]P$yqM|fT,C^^+lYeu[&4b#Ssny3`9]4;k(q;e');
define('NONCE_SALT',       '(.oG(*Ut<dpL,at8tCI/Rkb8VFmNjv%#SYjWd08U>J52OA++7.Jp_#HrT- Ip{Nz');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
