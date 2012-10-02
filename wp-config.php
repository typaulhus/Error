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
define('DB_NAME', 'typaulhus_blog');

/** MySQL database username */
define('DB_USER', 'tylerp');

/** MySQL database password */
define('DB_PASSWORD', 'ratFink401');

/** MySQL hostname */
define('DB_HOST', 'mysql.typaulh.us');

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
define('AUTH_KEY',         '~qlU8bW)lBm8#uQAwTsh?IyhczDw)+P@0u;$4(eYqQ"A%p(YND#NvWJpsDe(j7bZ');
define('SECURE_AUTH_KEY',  '3TcL~wSds1:(&d7W4~+jP|%Bu+IQOM`6Z~g;inCHzK~8(JOs|AnUhI4A:G_j:Y^D');
define('LOGGED_IN_KEY',    'cG"~~_)kqlUm~UW)$_#ce%1L`Q%CF*JR5ekdA5cl1w@#+!_5H*1`?PlAt0H8#cP_');
define('NONCE_KEY',        'DOrXx:s$jNq|Ptpr9TF8:Qz3nnrY^(dG9nd#HHmeIsnH1sFke&Nq56ySYjC_DjMK');
define('AUTH_SALT',        'f;slSh)G:wgAol+mH?F*dh^xhkdEcQheH;7KVidmW!BPQO+kvX(/+5rU@0yOjp:`');
define('SECURE_AUTH_SALT', '&BU;l)~hAN!/fae(Id"NG^!R2FEjwS4S!`0K;/hTK`pPC@#yf3uNJ|*irhB~Z?Sn');
define('LOGGED_IN_SALT',   '#TvS9R3vxDBqLIPMCH09t3Kj1(|u8"E4jS+M|i%AtMeTzW?m(za!GjwyL4tN0UmG');
define('NONCE_SALT',       'lHbh)a_wvhA77+zu)@X3hmVh_B:K7cTJ8#^:_fM:c7W~9nJ$YeXIIgnu5_%_IUfZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_8dd6ws_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

