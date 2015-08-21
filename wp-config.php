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
define('DB_NAME', 'simoneacf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

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
define('AUTH_KEY',         '+uVZt%BTDw|M4HS:uDeS(>jLziV:C{*.~FO1&=mJ/mc&Fy!r5zt!yU|-E|fmgK,m');
define('SECURE_AUTH_KEY',  '$]2HUfy#Qi+=70zLb3Avav5h+CUq?m++n&UnG+AHsX`-!S&p(.yr8DrW};] -|m.');
define('LOGGED_IN_KEY',    '(wK4bX.o:DyLk+jiyJJB&vfE%++TE#bT^S{l)FK*fx4iWwIIaX?%U0<?x&gK V{X');
define('NONCE_KEY',        '|,2i1YR)18,2hka*<(bEt` Of|;FcknsUsawOCdi1._53)u4P4io7-{@{J)&|;?I');
define('AUTH_SALT',        'o,/{00Mm4ct&b6|Pt7KB8F#Uu^/PEI+Pt^eL;c?/L|-drgM+bxTJ^g>b[Pw_s96A');
define('SECURE_AUTH_SALT', 'S25+ GMi@`vV!$Z1&&c0g~:.}=-b954d|SLbEayGyxMn/;agWE.^3`OZ%(|g$rt-');
define('LOGGED_IN_SALT',   '1Z6~nWqA^.*[7gUI}Z&e~k|emNCPBYTg{~5,|Fk8x(ghk6oI!x0+#$CC[<oj<4ej');
define('NONCE_SALT',       '?|=^3rJN<(0C. }HO1}*%Ub>|U@|MHm?wdqJEsO_1:,iOclqzm+-H%j-V96k*!~y');

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
