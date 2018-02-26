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
define('DB_NAME', 'butterfly');

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
define('AUTH_KEY',         '7V*Q$qZsJBL1_]sD!LxT}OdXK=K?c6+!@E{xPr.4p<z!!T+ohQVU1~lP=WJ*}EL<');
define('SECURE_AUTH_KEY',  '([&k4*3V00z0l~$6ow}Y)VfTz.<i$Ug=7,)_In604)cPFRvZiE@!f25Bp{Ym+j,_');
define('LOGGED_IN_KEY',    ':6+6YRClptkbHe$@`dfh{G)o/Ewh<U:)Lq!8Qb,zJls`GW)4;PinylXF7Z?2SX^]');
define('NONCE_KEY',        '* G+0nL>#dje$R6bp_HlA4^>#fW(YhhnDqbj-fl-`t8$`ZJv*,SV#EfIk;?WdB|g');
define('AUTH_SALT',        '{ge8}s(iX2rU~-v(r#[S<3K}=oCmKnLA!mrm`sCM9iXtEXre>Wt66]ZT5gPA)<[{');
define('SECURE_AUTH_SALT', '%831tsF@9Bum.gl@@|9sSVF^zY9m*#LS7&O;LMKDy.cckE@C$S>*ZWrrj9BV&>$q');
define('LOGGED_IN_SALT',   'F__YX  %a-Nam?M@FwqaSKf~AlRfZESq1FB/HFZ<if:%!&/dxt#am#2Z+3<&]`Z+');
define('NONCE_SALT',       'DJdy|HVwkP(9h.zzS*`F(^JjtI>M*_AogodJ43azpg aw2+_1ELvp4J{b]*xklK.');

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
