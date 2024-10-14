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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'secretpassword' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'g$*{j?H_YZZ$w.Zl5s9E^K:/Yy/XC`d[*3L9zq8!lx%09p9+=ob6v?FwnXmZFAiC' );
define( 'SECURE_AUTH_KEY',  'LT/8NVC:%VxKtz=3UGck#@z+.ojf{A!%I4To[8JRGH*~xP^}tDHnv$kC;A{/pX97' );
define( 'LOGGED_IN_KEY',    'I_+YoH^Hc6.BL7Y9CzUN}6b{KUzzA<u~.OT(w$ =[]Q-FI8]DtS0z}Ia$DbFZ?io' );
define( 'NONCE_KEY',        '>HBG`lL,`]Qb%H].z}l|<An$zzj5K5{L<p+#=qxzn/s0y*.:w-,` no_4>tdwC+z' );
define( 'AUTH_SALT',        'H-*r0K(S&f`?Z>]bp6~G@e{J|S =kbWi64`S!8])MhQh6NV(bv.n9tY[@kd[ )id' );
define( 'SECURE_AUTH_SALT', 'Z9(C;>8:trnqtI1M)xj.Ogb<54CcB1pk+dn{neTN5W}t|=x#yT!$h,T5{vg339H<' );
define( 'LOGGED_IN_SALT',   'v9H-Qb_ j|=R_j{5{DVN,!VX+x|MWljl{p_{pcsxDT0L[>W@<]0nkd&@]i){Fs;Z' );
define( 'NONCE_SALT',       'qE|;Pqg]cZMDR>I7]~s9ghd4<4YaV+qoU@!~~&_wX>h2|2sc?Ic>?[oE7Ofhhfm@' );

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
