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
define( 'AUTH_KEY',         'JLT(U&a.n}[f2p:^N_!th!?.I#$pN0u>}?%kFF9oB;TK<G?V`/*M,`p $Xk.^q{$' );
define( 'SECURE_AUTH_KEY',  'tg4Od`}QkSND?>g^G0>+x`kaW|sPH>]jvVoT.8:cQ.92z~1uJYV[6{:$mcb8]Fh1' );
define( 'LOGGED_IN_KEY',    'xlO{Yz4]:,N<yPPg_1BuMCYj-D^71yKG,:EL=uDD%7oP]5ZNTTIvp^)p`?O2.ga<' );
define( 'NONCE_KEY',        'sHhA9S^H?iM97x-gq,lFE9qh}ZBpt;D$V|QWKPWS>ILGpvQy;`S:g=w(z;mGI^v:' );
define( 'AUTH_SALT',        'a=1A*gHuofd+1#v%!a4U*?$UqGby`c?Azdb60^FRP#;G!A#@]wi9WkXra|p08X@*' );
define( 'SECURE_AUTH_SALT', 'Gm/I#7jnJf/(KwWe ;Ihk{<*+t;6*j)~&k5zG8.N+XrgyslHXfis0ah*,c+C9Ty(' );
define( 'LOGGED_IN_SALT',   'RnfGX<%EY|aVKyK.e%{+?R#--vNVm4A:Kl5w-fb@SoEQA7UzcD-M2wp4D.|1e@{]' );
define( 'NONCE_SALT',       '$dx^Rvj=Lz32P$!P}.ejoZyf3<fYMM,r%5YX2V~XJVbv07Ve#4a9a|5cmN}EB(XQ' );

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
