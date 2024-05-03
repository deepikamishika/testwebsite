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
define( 'DB_NAME', 'InnoVision-Studios' );

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
define( 'AUTH_KEY',         '/bAWT$==#Ks4S)r-}74P8xe{wyHcofQj|)z@|<x4R)r}sorN|y6J~?0M%WrDxtFg' );
define( 'SECURE_AUTH_KEY',  '(bdG=E87Z0uSvnW;&xJa$Q12mrIdMzAPDF)(3`yKs~iO9IPhwRE[y<T1V%|5?Aaj' );
define( 'LOGGED_IN_KEY',    'W*@]s}kC)@Wp+(v[5+x^V6drk1LS+U^v7|c F^qM_R |9/nRZ6< UybVBh2f tA[' );
define( 'NONCE_KEY',        '9&y5PC>`Tq+$}AWo@j;{U?@f=>N6In(}(cj1dPu=}*5[U8jZeaeSJG=Uh>_DSX(-' );
define( 'AUTH_SALT',        '1S8 ulAhV%Z!+wkka]M4L+d(B=E{+iR+7Z91PgZhi7&V]wf+XB(Etuv{=jyWI0hc' );
define( 'SECURE_AUTH_SALT', 'BHK]h)V064R~w)IB{^0$c(h-OnaBc@x[L2sv2Gr7Mx}P+Y{:@Iu{?t?[VVC;0,AC' );
define( 'LOGGED_IN_SALT',   'sA}Fo9Dz<0q;}TL#kj&.zq}*4,$gq-^5KT-]|3+k44c+G}Q#ydkux}JT]S@3>/7u' );
define( 'NONCE_SALT',       'yanmdO*eSAG&]HT)_Rg!hTaX31:Fsuu#9xsAKj:i!JxJeSVfP HH2!VVsgxoFKgE' );

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
