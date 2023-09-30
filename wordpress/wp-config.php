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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'hHap=$CtLT92k>?O=.K;*2?1Kic7#=[/+r%|bB0I35Z&vpGFDYHjmB$e PN8~uHv' );
define( 'SECURE_AUTH_KEY',  '|Xox?klI:,v<_Mu8[9j>ViIRvP_|{~CW+po?=>U{J;P6c Z2.)>bvjouM&0^^U1$' );
define( 'LOGGED_IN_KEY',    'q6*Y3po2>x^v)`yz[jAzHS[Ix}U*7#WH~uE}X:5]-)L5g!R=Mg::tdTt+1X)nhd_' );
define( 'NONCE_KEY',        'J@kJn:5Jx=(ME4&C{`v#}f&2GUnj+, pW}5C6I.3MxR0Ez X>IcYRzP)2AdU.h&v' );
define( 'AUTH_SALT',        'eg+%5HG0RIQ>Chd)hAm5RuF{wCf27}XiF(D).dH}?aqGQR#NEwggm7.t>++A>6#0' );
define( 'SECURE_AUTH_SALT', 'cDIQ/{1NFcRk?!80/E=ds=34cFO+3u%Du,.|,*IeO.k ;pkG;fQ6l!`@-;L#hdp%' );
define( 'LOGGED_IN_SALT',   ';@GIuH5+Gp6SZKR6qINsWvK^=,n&2Uq-wz=i+GVs<f$TO8J(uN{aCLY>mu=LziSK' );
define( 'NONCE_SALT',       '>;Ew&F8(8fio{58$P00jJ+yg/qqA&,*4iHq__ dI]Wa1d{!9nO]):z=XvW}=f6|$' );

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
