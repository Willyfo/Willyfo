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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lukenwp' );

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
define( 'AUTH_KEY',         'M{E#Sn,`V7h-lUv>pv2~Gfd?og%Z9dZSrXPu[;Gh.J:mh<t/TR1Z_8wObathOvQv' );
define( 'SECURE_AUTH_KEY',  'Q`5I]wX%Z}&{XB1k*}+N+o@3(,(oiO]9BJ]C5vm(W*#:HcD.6aHje1h0:@8|>9BV' );
define( 'LOGGED_IN_KEY',    'u?Ew#cZ!lTLR7VtiQ7SA&4&^_bZrf=QxFwNEV~|U:V$?AOTLsTR,mdBvl.]/5y@N' );
define( 'NONCE_KEY',        '8)gG3$8$*JbEn_!!Mp*z*7]MH+/5F}w (rA[qMDPX<:D2-#8;iyJp+_u<g%EGJ4^' );
define( 'AUTH_SALT',        'exx}a)wir}T#B~pcQ.MzA?|w&A^mMOg:z>;V*mu@!V3.54@H*PABbTZZ^@vTu>a^' );
define( 'SECURE_AUTH_SALT', 'Rcwbo1!!kh[f/5 =8qSmcFH8UBl6`8lMV<2g#]?_;VLYb/j4ynea6nh0-[ROdHLa' );
define( 'LOGGED_IN_SALT',   'PpTGCm%`C:d45W$A4,YVMs/2f@{86NzHG6s>;99Uz;eJ`CF;JOLL49)5yQPte3%G' );
define( 'NONCE_SALT',       ',6MoNZO;>=.?vc)irfAhpN>e>099YR:3,lC~KOYfTo3-HT={+@lNtM:9wkIBW?:M' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
