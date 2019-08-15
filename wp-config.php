<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pkm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'pA3KR|Kq=KDtv]mS-[TuZ8uu1BAh`#KoB:/{<sQfeY&piaY6(G}}#>nuNHJX:o[6');
define('SECURE_AUTH_KEY',  '3A3<YMXrC]i]$B{W1#/|T`@clilcYH,i},#_LeB1Wu3(%i:r#$=~/QJudi@I7?xP');
define('LOGGED_IN_KEY',    '3hit]Y5NPBaDoXnEkAY^=FT$cnDsKA&$Ke<Wap,WptSREcnX(wpoKZXIsA89dJL7');
define('NONCE_KEY',        '-.g]}:VzWM L/v5*Z;/@qOn}{qKHssuKI4z8tWXA}m+V&*dJy)U]`_>HD.NXWia,');
define('AUTH_SALT',        ']nIUL6@6lGS W_NG:g_J{_p%n7h6EwM`@eL0ymd0h XgzIjs21jvA0[.RK,f*PN:');
define('SECURE_AUTH_SALT', '{UM`2{~aR7m)d4v5QM[?CtS/9[,:l<eD%q<Z#$jsE^jz(4O@MTUv(O&Il[aF:OK1');
define('LOGGED_IN_SALT',   '4ra+gHDS>D;3Bpf{@MG8,v//MN*k`|Xw/RV+bD+osG=Q/yNS%v=o2Ra2>*&0W~$m');
define('NONCE_SALT',       '/$wu@}-X07}?;j~XPyVfOq:Q7nHM0+<x@9PdI(/*B-:2iI<j[+xXlC^#2ItPlyB0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
