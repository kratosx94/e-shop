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
define( 'DB_NAME', 'e-shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'End_palace1!' );

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
define( 'AUTH_KEY',         '[764d^~&|u^)4ue=qUqok8*pS-Y=X<R{r?,9By(wHUHUq9K0jK6}P-uqA*7=@6N_' );
define( 'SECURE_AUTH_KEY',  'Y<^2u0yKRkjU@,xh,LBWS1XBY*x>dVhFy;A<Eg7cd(dv0aqYee#&E_N/F?xB#P8-' );
define( 'LOGGED_IN_KEY',    '[{1Tqp(QC)(QX*L*|QK!7agPmTR;ispJr/CYxkB`DRHAJN8}Pj)haTAT`Uuxs<[`' );
define( 'NONCE_KEY',        '-v;%=&~U%Pl_[G80;KLGTmrM271YsNFKF(YH}H)JZ1g9E!I)lJx:7Ir#Y1E(+VIq' );
define( 'AUTH_SALT',        '4ilz-pJ5t6cT6v-CKb_EAsGh|$S06R2k(CMp?gcu)Cg&VCG%D<[C%S;I7?@Ojf(p' );
define( 'SECURE_AUTH_SALT', '`HQ{laFh[K_OqCf4`#X1IeQFU>O>58m:nh!nzDO{X]U1L(~YUl:rMxp;&dIEOY<m' );
define( 'LOGGED_IN_SALT',   'NMR7; Ly+t_b`[v7<x b0h=(/#?-FYTUVL`v>PFG[UG*X!yZ$?S7$v # $3s={Hv' );
define( 'NONCE_SALT',       '{d[3r?F-gw5~iS)VywlBq~.r,.?aY0ZL4drFZ) QWrTIC-XhDh*KRKH{;W%(d*,O' );

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
