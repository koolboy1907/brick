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
define('DB_NAME', 'brick');

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
define('AUTH_KEY',         'C[#C6|?erYu]o9TGeTpnz?tm+df}M(2+~:xv=74s@} WrMQf e1wY%W8Pj:GXWsH');
define('SECURE_AUTH_KEY',  '=~^m]0sTrRmf,_G%^H$G3@]y<wcM@[(tv{-f;Rm1*6!Tg<PfGk6%{M{2.Pj9o5o6');
define('LOGGED_IN_KEY',    'bv7^O;[1~pOK8cXjh(Z!E$&n?w}^Xe:vfF4I;by3~}C%Wgg}fJUUi-uj29|l/8KX');
define('NONCE_KEY',        ']bCXZ+Dt7bbsd?u@gh?9Cv_N.Zbn+>e*9|fC|Y}?Br3qDl=`%gvhUaU~8r?-koW#');
define('AUTH_SALT',        'j?NZ(:4(7lkt7&^;:Wjar,AEH<h/x)Qb|FITaHp)Qt]=] RU}h<b,vN&@WeF&4VV');
define('SECURE_AUTH_SALT', 'f,R%-XO/YhgQ/OZs=}_E)Gr *`kARz*`G(,pUBp#*ca| Tr:ja[634=I0TmJFd@%');
define('LOGGED_IN_SALT',   '/khw#NyzzN!)fgF/COXuOJ6VD]%9H~QL!_Pm#[/?,x|Hp:V2Jup6;vKNkzOR b=c');
define('NONCE_SALT',       'AD5e(?}?[NYi%JVEP1PvC[L>9-QBGQ!c-c5#jM9vuY khfLlj5S]OfpWbmp~gL*x');

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
