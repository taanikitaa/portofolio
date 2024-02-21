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
define( 'DB_NAME', 'nikita' );

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
define( 'AUTH_KEY',         '.smS*U|QQr5FS.DEX|h.WMSjap)J.7xZ0F3{rH^X2Dyd>cf9un&$0=^Suv`yu9(~' );
define( 'SECURE_AUTH_KEY',  'eors&3@_a]3nHD|F3,)>oDGuB;3]-$?:[/,,=Zh=i?Y7H)vmGsCANfCH*Zy_6B4X' );
define( 'LOGGED_IN_KEY',    'Gc92K+:xfyFe>yx%k^-QWqW)B|0W-pejX^?qGF)XgD;K_jIa~`$Ef5HYSNi,IPL.' );
define( 'NONCE_KEY',        '`X/O/p#=!`JW97CeL7/n.LKYP~-p.x-aP%:qEFzNn<|z2.~Z9pEGBo{?}(c1n2zN' );
define( 'AUTH_SALT',        'wI*&g+Roip4nh5M)#|,HlSms(r</zO?*l.;@KRm=JWA.^$+A)@r/V+Gp1~Td}K*W' );
define( 'SECURE_AUTH_SALT', '_a_f))+8a;YLJ_7]2rlyy->C}zaY=0e1EnmH+#g@4bI+xtQ32HB [|Vu[HKpdc/j' );
define( 'LOGGED_IN_SALT',   'xQ@eltb.G!nRc,h6l^N6LG2vQtJu e>~in@hv~nSHQ!P$z9<;B^+5:{8pW/YcMGB' );
define( 'NONCE_SALT',       '=?l04@nEqzBC<kNB^V=,BB*54`n6xUG>5+-1B;5D4;V4)vF90CQ_ ,sQ]dcHE;n|' );

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
