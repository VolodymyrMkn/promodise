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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'vladimir' );

/** Database password */
define( 'DB_PASSWORD', 'PhmEQQ5TgzG7N9F' );

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
define( 'AUTH_KEY',         ';n`&V8~X9N_:46)H%DP@viK>`Zcqqt6fIK^TKp|:PKSDgn`*dB`bBPPf;US.Fg[,' );
define( 'SECURE_AUTH_KEY',  'qZJ`}b0&Tq0]2m$+#L!j6e: R;RbOC|xC[%2J4BPrUpPn,,XUQ:}_q h;qTj{g!V' );
define( 'LOGGED_IN_KEY',    'q:FgTl1Za^~<3Sk_l,_NC {GTg*_P{ChuqL>.eZIB$B>-a|L9t}|bD{;&_]%R[19' );
define( 'NONCE_KEY',        '1,I9;]!?v07S*I;K0 W^x5,owCVOTN){sb.4vu>IpFYW7|kq2X!>*>ss[@m#*?dN' );
define( 'AUTH_SALT',        '{X=D)]L*Sz2_FglaQ1C!~-&SXSRj4<krk-0./F,ofhn0)u2F;9e5huO>pXiwyeD ' );
define( 'SECURE_AUTH_SALT', ',7/P,W&dBi=$z_`R`!659u9.&zU8u2@,pf5(4R5i/$yB%DwS4]3[S<:3;&!({r/t' );
define( 'LOGGED_IN_SALT',   'xKu(s3N+q%&gPsddhUzCaOFXJ3_RnP4|kgf.X6^xCVF{F@VgWlcb<!H]{:0T:e*J' );
define( 'NONCE_SALT',       'wNT;}XgI&567h}Z+dbe[W!hRoV~FH6sA93t9*t~b>mwjn7|0[^<JFUzXULli.PVx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'promodise_';

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
