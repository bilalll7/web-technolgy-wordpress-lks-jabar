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
define( 'DB_NAME', 'testwp' );

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
define( 'AUTH_KEY',         '#nUYu@/}lX:]{G%Rg0}qWxKw<uI|Gb%0rZ<fWU19p:Kdve5+p-&aygo&HiO z<|5' );
define( 'SECURE_AUTH_KEY',  'n.D*,YB)`ku+/90tG0<8@Dm+m{UYY2]pV37SSLI1qS}oe?H$+SrLQ(S8o|pl)20S' );
define( 'LOGGED_IN_KEY',    'bftt,_<KjGn;/]H32QHKY6n+k;uot]LxY!/l*WjT[t6@e2{va>hlwq,-BH!8%.[`' );
define( 'NONCE_KEY',        'D ^.d]%GaFEoYYKO$qrc`;WN6`+FH?*8:2Zw!2n<_CVt_1AgqwIcPpn4v5ad@0~(' );
define( 'AUTH_SALT',        ',B]kfqbw3STl6)}*kVVi2ik/m_:ExDf@c@ZyB=)-:;8qAYRl8Wm$:`NsH.wbRv;f' );
define( 'SECURE_AUTH_SALT', 'txu)}U;;d/;1US_PqT@yK;mmx&Otu>W8Esgjt[+B@o!PRW[} {)oL<W#4fw/`C)d' );
define( 'LOGGED_IN_SALT',   'RILTN.7vOs7ZHJM0FuBXi0{vgdz~s$!cQ$y]k?oo_SG.(_1NCG&E_35c0i1?|Pi9' );
define( 'NONCE_SALT',       'oQ)787Zl6qPBHI=7ibfz`A]XMZv7tgpiCYYc3s7$;/j=4bPx4_}+I1LeYu:&obT.' );

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
