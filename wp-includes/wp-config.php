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
define('DB_NAME', 'scaffolder');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#3SvczeW2^yp12J{r?22jqEO1b*QsRm,Ptm.(8=?ir$r[M`:=oUvT!G R/Pznkte');
define('SECURE_AUTH_KEY',  '|u}Bpe4V1:@6Wfqu#w1Sz7`4 ^D?A@,Xm.)+ihTB-k]c,;}P?H/h/b<do#5y+F!1');
define('LOGGED_IN_KEY',    'd1RlUt-+rO{EvNFeV3EU#TLEhQ)Dx_ O*iWOj-BdXIi*39=*-f4 y7)CH=YK <,e');
define('NONCE_KEY',        '7.kR(@Z~P9a)!P:Po(P0>n9 HD}3:g_av4BYo0@oHf0y&FVJH<:)037/%*_xuZ}P');
define('AUTH_SALT',        'whFH GT2x2xP87996q*2Tb[~xG< %mFgB |Xd|}7Zw8!XV2Qz^L^pgb-Z@jK,WIV');
define('SECURE_AUTH_SALT', '7pdCFb$UQ>:SOFQ7T5xuM]by(>8F$wrp9~Roa7iQKV&;t=PY7xMBRhhzW;aHQkFv');
define('LOGGED_IN_SALT',   '[DA9^@waRCPj6c4RQ}oJ3ai5H;f|iF3~o6D6g4w0|22F{W4]xnRPZaQ|Z#4E/|lU');
define('NONCE_SALT',       '3RR?A-(a|FCd7jTS:Y/|_S`)ta7@$_!S!U,1iqcP TTr#/d$(=zj[5Li/tU)YxY1');

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
