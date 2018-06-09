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
define('DB_NAME', 'luvanex');

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
define('AUTH_KEY',         'mXsw1|~jl0~MV),xVYQ:[h^^[aSeZ+v_*Y!6V&QYqrnKHL=w!!yo)w?ku^$kcHkW');
define('SECURE_AUTH_KEY',  'CRW/SQ2B=sY8M, B-p(^xp)cACl:-gs2^T<6a<s1x2qouoh79;m9oT)0qM)h83JY');
define('LOGGED_IN_KEY',    'o%D7Iy~NA1K$3u<KdGjIfbmqBON31I5_?&Rb2Iu*d`gbxIWe|_,?:Z3r$D.r.Esv');
define('NONCE_KEY',        'QlE#/!L(miU/BR(z,_u0yGV$WV}5`#[n8%X0^Pj<z$_HEgez_x@Y`~nB|=[{_!-=');
define('AUTH_SALT',        '<~hh<@?qS0YO1,i[~%;`!_hR_[!lxz_FsIBnyt>82@+Z_cGB{e(cgkwB4k~Ve=5,');
define('SECURE_AUTH_SALT', 'djAZZB^wrWco29Fy3C0{>8qj/=AV{T-AUX8Z8NK)ndz!Z G8JGDq47;MD~JT_7R2');
define('LOGGED_IN_SALT',   'J{+t;Hvr!+blrQ}pB^J:Jj9S`A/QLT_6%M#__>bG-xD 6Cy75J{>ptnd/s8aO-fN');
define('NONCE_SALT',       '150:vd2kI`kvZ oS1W,HO5Sn~,jV: |!sFAY-^HmH|d=Yi)NO)i%B-UV 1lU.=2n');

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
