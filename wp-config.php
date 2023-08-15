<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'world2' );
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
define( 'AUTH_KEY',         '<(_1smR;D[B/a~XDn73(J2[&~[Urb;q_4qtj Lw<^PpNpJgp6%18&QU1EMpOWyn3' );
define( 'SECURE_AUTH_KEY',  '1yH@_EGE3=Sit6K[JP8]DPjV|#)QxM):TN.v[#{??idZZ4/uiizN|9Nz&<^SDCm>' );
define( 'LOGGED_IN_KEY',    '~,=<+ZbKZ8#WB-Kn=1t$;H8-~+z&/Q1d{w]CvF6V$]g^iSQ+dD3sU?ZS@%iHl3sP' );
define( 'NONCE_KEY',        ']T Qj$DlYgt%/S Fnp#{ibgiMO9TVd{./vTPrK|?*-!EbNlHtXA0&Lj7> tL$Jd/' );
define( 'AUTH_SALT',        'x5tE/Q#M`ATpI(ku*Nm[6bTlw,NgdZ|DmfEb?P;edI]WpF?R/C3E!Zf:0HOI>X?U' );
define( 'SECURE_AUTH_SALT', 'YJga}M@%;mJ.EJsRa%<l12{x0hy*^AOoc1?y6TRW!>DnKemY#a;c6,c2.+~.XN]/' );
define( 'LOGGED_IN_SALT',   'L1Fu0UuY3qITze bfS8p[G4TPuf<2Pk;4KP.Oii[$DqK#TG&,K)[9s`T|F>n)@T#' );
define( 'NONCE_SALT',       '[IaJ|,L1R6=;&hg9Oo72e1/Vg1it0L[*[F/Tnf2++#r=6D6[4xg)_mR_w6H,5|~k' );
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
/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';