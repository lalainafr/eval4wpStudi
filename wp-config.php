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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eval04studi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ':U.SyCPJ7aPDx:<^!Ft6dH![Sz[s*!x9!mnv^Z2bE&CQT>fr]>(Y):I|8=V^^9~Z' );
define( 'SECURE_AUTH_KEY',  '8$WCZ38U,_@a2#!PJu5 BrKc`<]=s]+q~`}C}GTbv]qnp!VOwC1=5M.V,YFm?)qV' );
define( 'LOGGED_IN_KEY',    'vPK|mSGF!v^@R%TsTYP ~odt~^uPYEc?,?.mF+&<:wmku#W}H7,UcH{bK<+0OpXN' );
define( 'NONCE_KEY',        ' ATHA*3t}#[ii1/_JXF*mNqS1~mPVsu@_Ti@]b<V`02gL8 zAh[cLOqV+g#SR>l+' );
define( 'AUTH_SALT',        '`*.8!@k1K|sPcLPze{8_Xtg(}/iyMA]E$YwbJ`@[Ci5|W]<Fo1;9UbsBjct;U+^j' );
define( 'SECURE_AUTH_SALT', 'h%HY_q8FL;E7.o}xgciTLL,Ybf(fpjZDEfoO`CxU_$U%F&a-BwomI[2n4rl:s,]~' );
define( 'LOGGED_IN_SALT',   'lv_b$ ;(vfsOgs_(L-WCR<B+V1Rg=/40C4TCVb=`.Nf!q-^DLJXsF^5k9M3G3>M.' );
define( 'NONCE_SALT',       ']n<L;Uyu{iS8-C.=x<0z_AMTqfHpAC~494uru,u}1B(69,<P!VSoo`jFEwwe(!,Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ev04st_';

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
