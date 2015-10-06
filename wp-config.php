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
define('DB_NAME', 'vvvictor_com_1');

/** MySQL database username */
define('DB_USER', 'vvvictorcom1');

/** MySQL database password */
define('DB_PASSWORD', 'BY-^4W9e');

/** MySQL hostname */
define('DB_HOST', 'mysql.vvvictor.com');

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
define('AUTH_KEY',         'UUTsBeKb?V^piFEMk(n+5U:st)^IpU/TJ@2vy|Ho6D~/c"6!c(j`yXP5x!1V_wCC');
define('SECURE_AUTH_KEY',  'SQ)qqCBU(4jYCup&LqKtMOfCVLC61pQoIb(q30P)eP@%+j;"ksHNqP(~)GI^9arS');
define('LOGGED_IN_KEY',    'i;f9a+:DNHk0P__Pb&!fF7&X!gj3j4%bDU@0cA9da(azlFH`HdPka9*5(l5:gmus');
define('NONCE_KEY',        '6LzW|LswpxIKqQ`yXIO`ueH^UMq~Ms4fWas/cmL_jNRuAF8!6i6d+1EMZwF#4?iH');
define('AUTH_SALT',        'kJvMA$jz3ZX|Q/"jZV?D3l%/rud^O5L;GgO/U15xzpBsC+f/zfGYiKyAs^x8;*|o');
define('SECURE_AUTH_SALT', '0D)mkXl`U/2+uMsY|YfoYA9Ym81v8BRsU^ig0QY:zTs%*%iZK#&b8t5hy$lpsu?^');
define('LOGGED_IN_SALT',   'AYGu?mzxJoGO~8sX7"Gps|I@20IcwPJGaDx(I4_;qRr;Eo7XOb&mHP#%Dejqpr?g');
define('NONCE_SALT',       'xgQtz`K$pXD6r5&f_?c5XjY%T2F6f?30lf1Us3pG&wBeB^IXth`7nw$opjcI*8Wu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_rfnajr_';

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

