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
define( 'DB_NAME', 'wp-cli' );

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
define( 'AUTH_KEY',         'd_1sE^e2f$tDJI$5KvWI<(#96z`Uy2dnx9jT)+:^bn;IxX1mr_-j9*~K=83z%u/n' );
define( 'SECURE_AUTH_KEY',  'JlW/r~|gWSOAC$A,@nT):O>gvK;bX|V?PeE^`v[vIp}fX1=VU[8]:gMSEg6z?nx/' );
define( 'LOGGED_IN_KEY',    'Ye18x}wb<yCB|2ed@*ZEmR>m)4cL%,?9>Z6z -pgvv`Q}q~tf|!nS~cYTS_hhA=]' );
define( 'NONCE_KEY',        '9,QH^r le8hmWKPN(o_Lm~NM@J+*My>!x3dM[k.~;7ql-6N&/R1v];g4/atx/9=%' );
define( 'AUTH_SALT',        'JJ/rv!*$#=B<sz,DPms4XJ{ujXF^/7@%-x[se=k#7kQPn+[,uZ2][d:*,5IY=(]7' );
define( 'SECURE_AUTH_SALT', 'tUIHq~%@7K5|FXT^;LtguCLG[4Z @VdP3}-sIs[bv@J,_|Zy7?xCkl#cQ<3?GMKM' );
define( 'LOGGED_IN_SALT',   'sEJY@V`)JS/<n{.=[2zvnCpI.za<04*;)^4BTc b ?FtQ+BkI6]dgpY4iYb9Qyoy' );
define( 'NONCE_SALT',       'jJkPY!JVT?E:FOlL8=2A ~`~C4,[/07XA~R4<&nvV-~GLI;}~w2)7}O3A3k*b/Ej' );

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
