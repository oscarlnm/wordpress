<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/* Conexión servidor FTP */ 	
define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_bbdd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}fL]7rnjzw{OdXw{Fcz-Nwk5^;v{0G)j.AGaS;EV9loe4X (<{k3kWmKhg;]3P_P' );
define( 'SECURE_AUTH_KEY',  '!<,k:mf:Ge&(,S.S[P1<I%Ha<88P#N2{vD:n#G>9VXk:8^J{MX3O j<oOg?G<UQ%' );
define( 'LOGGED_IN_KEY',    'BB)Vv/<JAeU[yrL~Jo_j;cQq10}X>u)*& i=n_b3:vK|eg1c]So p*W?R9;[W=B.' );
define( 'NONCE_KEY',        ' ^IeMo)6$X4}[Lefj[hlJdVujyt6O]yAy|5x/*mU!./mFmFc*?G)~ugoAbHc|iPJ' );
define( 'AUTH_SALT',        'A]Q!v1pXde7(BUF=B#wcA)O[m-*;;U,_.DW8Ej9RE[Ls7a@0S.``>?z(G>$YS7?o' );
define( 'SECURE_AUTH_SALT', 'C=}~J@MX/De-[%9!2?vc5h;xC}x.N=J_5S8{[i3tfjQYTzOEHtyw@vyJvx]4Wjue' );
define( 'LOGGED_IN_SALT',   'dD&zPa:aI>Xa/2I#hEXl)PH[mSoWJ/*.BKXF9.5Z}0AN~ZC f[K k*KDwyY@fL4S' );
define( 'NONCE_SALT',       '~%Uz%=zalw=>7kNA.O}Z^dRNTA+qw,A ;A_]]lz120?Af8*/4Ol^QmTKDyWB& 3H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// ** FTP CONFIGURACIÓN PARA AUTO-FTP ** //
define('FTP_HOST', 'localhost');
define('FTP_USER', 'NombredeUsuarioFTP');
define('FTP_PASS', 'ContraseñaFTP');
