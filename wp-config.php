<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abma.db' );

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
define( 'AUTH_KEY',         '2|72jE;{j<$hhwP.Jf;NP=z(D-2+v~:>{=uea&d_o8+#<)3I !<8$<s$iLtpXB5B' );
define( 'SECURE_AUTH_KEY',  '5fvxA}4S^CsU)SULqF8b.hrJ0D7t0qyf~(M/Q&#Nl4-EMn%L`Advd_KMskVNSa1y' );
define( 'LOGGED_IN_KEY',    '?K?4&AdBj{.8)D$~ jD6-LV%E-IfA71*kWx{kn^:`E)PsAt-x`WH8G_Zq3=,xnsh' );
define( 'NONCE_KEY',        'Ug4I:i3WwEjNcz[,HSi:W!I>RlJo~x:]AhOvr6q~4lzy*f<pqk4;*n(PAZ$]%-5U' );
define( 'AUTH_SALT',        'T4h$L*zFM84=OH9+.H4Xw9HBa($XBtTY%ZU,6NFSb,12Ce|*lh-7J{rZHu!DT XZ' );
define( 'SECURE_AUTH_SALT', 'c(ocmOId8%F0RYs8O;H|Rr$ABR^yN!-ap-J(.Mj*qF@PP{E$V9$SIf)bT&11Yx>N' );
define( 'LOGGED_IN_SALT',   'kgfd;YcJ0FZr:}MMYOS&[w-$*qcg2gM[0SO3{xa$Ck&oAu=XAMP[CiwVxW82*U#-' );
define( 'NONCE_SALT',       '=[Hk?W?E_=Bq{i}+FmKRYguFsMx%e4;}`^d~<qV`B03v*O0#^+Ysn e;QmpoEp@N' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
