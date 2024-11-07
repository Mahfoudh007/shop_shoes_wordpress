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
define( 'DB_NAME', 'shop_shoes_wordpress' );

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
define( 'AUTH_KEY',         '53J5%^p+PgVSRRi5W!ilax kH9_=Omy)8JV,KkcODj.F}]4Uk#==A?Q0Z%iAqdSW' );
define( 'SECURE_AUTH_KEY',  'X(SFJ*3yW$0 ,.3yH>AE~svv4HQV0*%`5Ajy0x_*=hRsK!9Ap{~BklZC6ZnMp`-4' );
define( 'LOGGED_IN_KEY',    'ckI`@t?#J8>P~?87~gj=J8sMUl|WU796M<Emo|k^geChJG!p]le~me:f|+v|)WG,' );
define( 'NONCE_KEY',        ',)m}7ykp^{=E>&S4(-RZTw]lp.&ezy.%t;e:1*f)<LAF/Do~}bHSfl@3>DWl4U-^' );
define( 'AUTH_SALT',        '6FQ( >kwCf,+i*8>OA+g$(V*}>7`BVyOW|t[rK.r+yMjcK$jeBV/[)c6mWlT|mS9' );
define( 'SECURE_AUTH_SALT', '[_)%+zl@L}[/:AD[bL)4%6lo>k`-P[@e8O_E[vT(9-Dv.|#>a)1iI{k9N=x@f8Ne' );
define( 'LOGGED_IN_SALT',   '.lu3D*^@@.7-1DM]n@xMBhlAOMh(jO<^qe.yurU}Q.Pg#+9kBu]BC-3!0mhn;44p' );
define( 'NONCE_SALT',       'jGEIsy$5U6b]%E5tmE11,Rnd~9T)kpz^X9HO~M[~:hG{ICKA?p/RxR;^*u%,,%S ' );

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
