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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'n7sMk9yoby');

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
define('AUTH_KEY',         'q_E_D<7F@2c>N$To~y3X<=.IVvj*0}Ts}F@G0g98NSgBzdDitK:Zs2%|t~eB%oG+');
define('SECURE_AUTH_KEY',  ':k*=^:pezmCpy@k*ta`/R7PV;+>$%FBQa.t2[zw#fK|__zD8 1;xv,&kMb#<{U4.');
define('LOGGED_IN_KEY',    '[R]$K(`X/..aWnq@H{ye=h(g#L09!|7:;wO_13cOH^$x_vE:.k@{YJ74$,56Q<u#');
define('NONCE_KEY',        '!6;n@5`eE:eqd_m$zi08yiDZbO{l8YB:oC[)1(Ft*6X^3R(Qfv-*|nBYA2Za.a[q');
define('AUTH_SALT',        '*gis^,TGtZ#:D2yYPj5h~ft.3y`jJ|n^XrQm%d]oJRAuti%[KK]CP8HQ%P0~@^*7');
define('SECURE_AUTH_SALT', ' /LTjTnApVhQKo)OxU.K*o<vd1eo1DBfM5nJ<;s>f<49d}PU]IZ~b?FY`PzCKI:H');
define('LOGGED_IN_SALT',   ':Jck lv%_hOpu}y$on1u?|A(CW!HP/1:IPAS;MJ|#(7h91tQ;Gt6L3&|( Uwq8Ah');
define('NONCE_SALT',       'Rk_4JICwAD2VTGxE,%[1DlRn]NT`Z{EW+4zB`-MI117I[@?[^OxZr8xA=+Vahbkl');

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

