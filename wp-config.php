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
define( 'DB_NAME', 'platzicommerse' );

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
define( 'AUTH_KEY',         'B@.X ?@toyW}O0d7~RT>l}Q@:PL#;E?6;SC7~Rum->hn]97}(@g^;a|Zd+6@tf|C' );
define( 'SECURE_AUTH_KEY',  'I><x&Inv>xquU_?1=f#%0g}3PfswtH6vOm4I0o)3ui|5&nH=m25zH *m@&La.Ndr' );
define( 'LOGGED_IN_KEY',    'Z`v]d(6/Ova~YSnK<SGjw8|KZ|eb$^00;g?i7&G{9,:^Mg-:FvzOkOiY6#Xo%302' );
define( 'NONCE_KEY',        '*vLP&/*MsL@k,$:Rk0aj(xeYErG)UIEI-KP25H>x_F_hih[aLHtLE%D*l9#e.fp(' );
define( 'AUTH_SALT',        '!hN$|plXg,4i=!ndpP%}-/BYa{D: L,gt]cC^-tF,q`q)zWP]T^Ad4}I(_C#4H/9' );
define( 'SECURE_AUTH_SALT', 'Z]O@Q?c;k/(VOM%ZwM`IoQ,EMtmq^c[s$uESsD#avoNBy^ciq.;N5D<xb:0*[4c~' );
define( 'LOGGED_IN_SALT',   '=Z]xI/8?WH2{_}?8Bewmr`*!n/b;Ee)RK29o0,GwFf`RY!,j$|a&velgNC8m}mG)' );
define( 'NONCE_SALT',       'vtBIO1V`%bE/8JXq(#-_4/D1$o9O}!xm,<>,Ld}D0Nenw#fm*;ypk@d mJzMQ5O^' );

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
