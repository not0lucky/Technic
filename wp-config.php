<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'technic_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E8Y88CK4zv}-71vf,dN&OM%blTfv8x?9#E8o8p6N07Dx:AJAeQ>@T-jJMNmYoRKX' );
define( 'SECURE_AUTH_KEY',  'ZN0d;k,[#UaUTK9#JrSb,L8@ltNDM0^xm`(ehmU_oH*G~3n)$a4Y?[Vf0fAF|RbS' );
define( 'LOGGED_IN_KEY',    '.PSLSR_k^.4{AV9fO.C$K8@.@XqB=6h>G(zmrYOTApNqCr=`ID5>h/j-=QK8[/x!' );
define( 'NONCE_KEY',        'k<Qx^}b233q`ryLrtU?~kibPM[h9v5k6&v50.U4VK0<$5Po 6}%~?H~!T~N]%1TG' );
define( 'AUTH_SALT',        '1bmKULn{#I$ 1/!c:@N:nxcu5gv b?2b_sgpt)ojA)VJj-l$#.[6+_$`fB1c%e?;' );
define( 'SECURE_AUTH_SALT', 'nar`]~,xjiK@ )Lr1N%I,N-&ZWbY3qfLit[qU`6O4ih`K{(mcC8VoX5wCm+%A/3u' );
define( 'LOGGED_IN_SALT',   '9+?U::F<q4z-o>{dg,k&q=oN~=j^8ULB`!BG..<d(`u$C3uM2k85:yXq5]xFjJ7R' );
define( 'NONCE_SALT',       '~|?G)7FW^F>uDeTMpX%Etpfa#CLG9yg+`vWKJw3~,.:ztCmJLa:apFUi#|yEM F)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
