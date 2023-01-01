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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite_db' );

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
define( 'AUTH_KEY',         ',Zx2&q&NRoI>_@_N%>*:9FMW<:w(]E:18A%LhXRAJ!1/di7WK+9r2L}V5kG$/]RK' );
define( 'SECURE_AUTH_KEY',  'E@EyN#lMN&!tA|1rH>&kI/M4+q C7}BeJv?k9c^;pMYyy@`H2Q8hr(8IH+Tb1x-y' );
define( 'LOGGED_IN_KEY',    '/ZBayr=HJ!&,y.wFIIP.Tx[dby;*$6HpdRUc^.j=jqd6-ELEL&hmD7b$t>:ymh0B' );
define( 'NONCE_KEY',        'F;}A|j3n|Qc}[sISgh;FUiaE$1;K0]BFc)eBSEl1.Ar&@axxXoB(~%0N{%x,3 AB' );
define( 'AUTH_SALT',        'h|PviS.qFKb/ 7Sr<Ly|Zmn5 XprAESK.9Gx.vbNI609cy._hg@Np_GX|(w.m.e~' );
define( 'SECURE_AUTH_SALT', 'U:OV/<NdFAE@0!ilYT0E*36<LOFy;O1Tk.2!ty!)g|BsaJ]foN*0-%T2dPAqL.nt' );
define( 'LOGGED_IN_SALT',   '`iClU>[gKJb#OV8G(O)C@U:;K#eQwAu`4+EkHdq5`s?}f>ijqF+g]RjOHnTP34|U' );
define( 'NONCE_SALT',       '-njVRy+i6|y[%%@[=Q:&2U9GCRX&Ds~S,i:-pJALjuL_oqAv4&O23Ek1M`=nz)@*' );

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
