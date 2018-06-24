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
define('DB_NAME', 'hgtour');

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
define('AUTH_KEY',         '>s.p-1nFbn!B?X7Jq!N130I#OJmk[{dCI4NS3.1+mN6=@|IH]v-F`-tR*0+uI<+G');
define('SECURE_AUTH_KEY',  '3yuaysN#cZ;-XWKV3QC+A:v35lsm_:!ivO6{n1;k)##a<,x=oLpaUM}DI><ZQoRX');
define('LOGGED_IN_KEY',    'ZG6N^XJ_|mhlzaL?,*a_ TcZf^#G#gI6{X!2n8UT-SXUvmf+%<ovGt%{S4!{=^Az');
define('NONCE_KEY',        ']?GJ w!jyM}+>nhf<0h~SF~(AR]g+duz>;&GY#A*VDGt!bg)U~3]^xlj1A`*$iPG');
define('AUTH_SALT',        'Bz14ih8![H,rf4A__d)^:fLCW:,m,98:QCd&Bc1&)J^IT.VOQ_X,z>Dfb2WwODa^');
define('SECURE_AUTH_SALT', 'lMa+}.pfRKzm2Aj_# tu@HHPvaHeW,Fy):%+ua*._w58 gX8O6--+4XWz~Nvf<?9');
define('LOGGED_IN_SALT',   'z(8*X#eCmwN:~cPFu^+`v*CQPC/hKUxkatJs`mfN$r:Aij)P!c=*hY|VO1%$e,60');
define('NONCE_SALT',       'XCRP?c/r8g>KYK<mo^K+~c~vjsS]Q@zR[Vi;l3*NuaK}~|R~|-+X=G5OFKY/y+82');

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
