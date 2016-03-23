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
define('DB_NAME', 'learningWordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dpqjfnr123');

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
define('AUTH_KEY',         '5(:*Z4I9tFQ~r20D|tqz]A}<Q6&~.21>~!gIHAR$?@d6=w<Svm:7aU83yU+e[ :U');
define('SECURE_AUTH_KEY',  '@!iK7$ (9,DZdtg}y6{n?V@a(xI`&i-PB3GN 9|j!x@{j9(x2tUpN*JiX171Y#gn');
define('LOGGED_IN_KEY',    '{MkHu /_r??~k*akMv.+RErl*PD;J<*RxwBrBB)S,v>5C/_iUhOLo(jnf4|x9L^ ');
define('NONCE_KEY',        '-#Yb 6/z+F X_ITV+-!}mrQ-L2M1Q`J_=_+INLys;@.Hx@`A1VsqHj36>8-$C z&');
define('AUTH_SALT',        ']i];[Fzv@[mD+t&*<++~/q,#:^*sUmS+AjuSxat;}RovY$l&$Foy+:z9cezN-(v#');
define('SECURE_AUTH_SALT', 'I/o-P9XPYvVq/~Y!Pg}O[D-Xs[l/;{& +:=3l4&8Vy3)G&kHBYKni,|t_tPok{j3');
define('LOGGED_IN_SALT',   'eIs;`6gfwnp=pxnNrl#>4W|>du8BAFxlj+GP^OjO-Ny5LR/;^l:}l k^w|Z`SCh&');
define('NONCE_SALT',       '/RPKphDU_l:]qzDf,0friwi*Q-HSBJy~KG|l0wQdl_+42r/8Tu%KV[b>o E+-[n^');

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
