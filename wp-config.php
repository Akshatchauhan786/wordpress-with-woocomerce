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
define( 'DB_NAME', 'rmsdemoc_pushan_trading' );

/** Database username */
define( 'DB_USER', 'rmsdemoc_pushan_trading' );

/** Database password */
define( 'DB_PASSWORD', '59h7yN5z1vh$' );

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
define( 'AUTH_KEY',         'E1B.MjtbYkV1VM[rq[qXD`?U`YVvs8~0)#f1^`r,*qzUi.{|LwQ0q!74&:DHpIkV' );
define( 'SECURE_AUTH_KEY',  'oZ}<?POX9Y[Y+vD!s@W*dwN0D1A{7Yv-YpxW9gP(h;>y$oY+e<W1N^ 73dy>x,&r' );
define( 'LOGGED_IN_KEY',    'ldHcO;hetV:]e~MMqw|[n?#`*.JvpUPI~O&b?<I N$;t`nf$%aAWe4YKS}KVO`F:' );
define( 'NONCE_KEY',        'o>=39=*ib]gMa8J>4z/K5;#` ;XAQ.?#!Aj@CzU[9=ugd<_7F9fvS)wP$pxwaTmm' );
define( 'AUTH_SALT',        ' GGT|+7nFB(^14 <=aW#{al]Lt_Ci!fT%;wHWBJNTiZr^+8BjZTRnFE`qp6I3FxG' );
define( 'SECURE_AUTH_SALT', 'S2j^=+r{!))3+Nh,g>gu!6SQD27;Di`>`@.y{vQquZ*CLYmnJs{k2Ir=&*za?B+&' );
define( 'LOGGED_IN_SALT',   'v*4xA{qF.0Vd<RmE{}/i-p]dl$N0Db.ed_qa:U]Av95Lm}14VPte*T4vSZJd/UVH' );
define( 'NONCE_SALT',       '2d$,]lra}f08LcvO,L9=7*t%yy&%>D>|2N-8nj(C<t1YWR <LcC`8Kd=tbbC5_w~' );

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
