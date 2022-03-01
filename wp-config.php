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
define( 'DB_NAME', 'clauweeding' );

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
define( 'AUTH_KEY',         'YvE!4{N=$QqEvVSqnk6XhA]6dV2j$.98Qt-&Yu?{TY_UM.fwC:B^D%E@5g`:2E+s' );
define( 'SECURE_AUTH_KEY',  '|/,Uktub>Bp)#P@X,J55n[U(FhN5D7.SBSWX=cm.;Z8S2#~*suc(,B0WyFOpTT>E' );
define( 'LOGGED_IN_KEY',    'a$PD<a3F-B(DY48)~qqH ,xa@nbn[[OrK_uu(BZ_ehokcEL}e?c/+ ,w%.VSrO|h' );
define( 'NONCE_KEY',        '_`P$B^0%Y{{-z.>DRudyvr4>7Xr5GE_X@vt7v=ClZV IHD#n!VAaj1.tk(bR87D9' );
define( 'AUTH_SALT',        'uE51FulkP%`bKw~f* b->C={Gjh)s;(H57q!Q!)KMn|/%ZP*<yxz+}RVon(S5uhr' );
define( 'SECURE_AUTH_SALT', 'UM|WS>%l=;SIS@ue]+{ifRhH<vE9DOp;AFa;^c2X_&S2pX8P#z:/#2oY|O)#C%Kc' );
define( 'LOGGED_IN_SALT',   'ymk<U[]?tG[H-;W(`g,SBJPxbl6W2z}uHedg(,IKN,ph=7)7b)[sA_>0Y`Ed/TL+' );
define( 'NONCE_SALT',       '8+a|y[*W70%:bwk0P5sGfunFj[I@3PrX+5iFrfv(8O,>lz=CZDNj;#+8<l5E/[O$' );

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
