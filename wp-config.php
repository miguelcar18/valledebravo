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
define('DB_NAME', 'prueba');

/** MySQL database username */
define('DB_USER', 'avivas');

/** MySQL database password */
define('DB_PASSWORD', 'A18719689');

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
define('AUTH_KEY',         'nKFj|ma{(x=Y1Y@=n-c5J72n+amQn;QCho%z*AAYtykfZ/2t(qP8La2=im/HCGX3');
define('SECURE_AUTH_KEY',  '{#OvuQ=bl{On:E7h{QZ)E)NL}D41|Y_sHhb??{_kMl&qEY3<,N_vBl=ofi:`S]To');
define('LOGGED_IN_KEY',    'e_,av$q2E_aO%=FMGf)$[t4l~8cRf)Q&QNnj*RCt1w#0#vwLs$_V%n-aY9~JyX3x');
define('NONCE_KEY',        '%n}#=nE(]x4JZ[qq/G/61wNC:~L`l{61v%HOymE~{-G0 dLSTUe>Zi(qF}ZRSa<J');
define('AUTH_SALT',        'x;te?PZzynKq<{#D8PFFa^K6+7,4R71o=KDz$bke5;cuacD*ofwk#%Wkw,3WaJ^N');
define('SECURE_AUTH_SALT', '4(0s:VpBp$Vajcx)dlWEAf!e$TtZr2p,uJ|J+F#LhE2SN5Uq! G9[weIXVd_Af+t');
define('LOGGED_IN_SALT',   ']Hw9vJu8R&d.0wQ3N9*UGxf`DSF$J2GWAA&6a.89F)3qBGNP6`e[>>C5:<PYNw?t');
define('NONCE_SALT',       'w%!(-jl1YN>U ^TN*,98>$/l!YEkeYtUin&k2jExY.uUQP}f>370C Zs1Vu<cL~w');

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
