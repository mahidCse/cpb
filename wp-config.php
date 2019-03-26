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
define( 'DB_NAME', 'cliprdbu_cpbst' );

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
define( 'AUTH_KEY',         '8.8~7Bd~^>5~ID{~9==dDgv0)<D>;HI}}@B)$lzqH IwSU+^)MRaTzH1Lb>B, cZ' );
define( 'SECURE_AUTH_KEY',  '@o<E8:OH@M@78 :5zeE^#ju6D3)ti`(a%,rSwu]RDm[68_hKxeNgs;UF4; 5xRFY' );
define( 'LOGGED_IN_KEY',    'V7fDN(kGqtgZg!#z>V:;HH)VKJADp6zz>yZlB~hiSIRK^-k.@S% eG/EI25X;tq-' );
define( 'NONCE_KEY',        'K[p1eO1EK:u}bo:`dUK!9U|hbNbzZ%o%Q|fpQjN*scKDH<sf/H[+n$Vt+Q{p%:N{' );
define( 'AUTH_SALT',        '%[2O`2)Ka[[0j$%j4FTcXr}d$rlRyz2C={%M|]yR$IqszS?Q1#vY`>2PSU57/Lr,' );
define( 'SECURE_AUTH_SALT', 'o;nX1J HrZ`0&ZdxGsUKsf|Mj{mPx,%-zyW!Ky-goE.4ZE0G+2i]o<sa&mL#y;zy' );
define( 'LOGGED_IN_SALT',   '9W!R-QCps!eP@O9(3@XB%kJy[Q_o^<YN?IwJPV?:59k{pl,nf$d`|SH8Q5I3J+lD' );
define( 'NONCE_SALT',       'a-PL0xW}ixOpxL_*wFZcwoi@o&QzyJOC ys0W%M-t,/K36p`>fXc?2CG+crKa899' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cpbst_';

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

/** Sets up new login direcotry. */
/* define('WP_ADMIN_DIR', 'login-panel');
define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_DIR); */