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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sia.planning.unc.edu' );

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
define( 'AUTH_KEY',         'Y7nb<v,_GjZ-KLAkm}^h#!Yox+tSvc^SIr_~$!G/B9|iQL#fN4 Eq7|x(yCBlmU9' );
define( 'SECURE_AUTH_KEY',  '[3<Ow&7KzWDEl-w%f? /57_SCN/@}v158.-T^jl./UF4I)U=Os`Wl,//o H2ITR!' );
define( 'LOGGED_IN_KEY',    'eP~Be7oYDB!hAdV:Ui_lE0nSsj>g-nZK3Po);s.C@F>[$JzV,}UKIoG5vK?w]mK6' );
define( 'NONCE_KEY',        'K8)SpyRMa^LnShfxR4s^)?,{3sYDYG[*? ]N0Y_;cqo%A;_S-Iygh##[9OBO9a1D' );
define( 'AUTH_SALT',        'qak%VcbK&~<^|0Rdl*a:QQ@v*B@uM97Ev^_ut^}2Jc4L*i)y4>3VR;!9Ym-.z(B0' );
define( 'SECURE_AUTH_SALT', 'J7RV6v?K<[,>GKdRX@UFA/hMzA_(Zh*+%yDwG4^p:N;-T;(1yD[p0d8{_?:0t61k' );
define( 'LOGGED_IN_SALT',   '(,45Ho(Ao0gL)]469[pDVXxW4/OJ[b**%_f.=*zjA%|4QL6u2:eZYZW;Cdt>DOv,' );
define( 'NONCE_SALT',       '@6$JuoOywN_M$Sn&O=-+%m|$U8j6W8kk_@ks#dY{j46eM#3N)&X4;#-h5/V/ogj9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
