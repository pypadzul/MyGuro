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
define( 'DB_NAME', 'mrdennis' );

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
define( 'AUTH_KEY',         '1`KR D#Rhu%x(+IbRW#[OM80bBtD67`Xa0<nrQ(<,w!r.<jTj:v&aAZx;`z$laap' );
define( 'SECURE_AUTH_KEY',  'p9~<j*k/$dDr/(>AW(.+p`!J681qbrwZF&[b#+75ZR4p_F#;Vpz%Sc6R#zJvw#dS' );
define( 'LOGGED_IN_KEY',    'z?}XN?l5&O{}aAWdTha)Sk9!%O&ccFG2IP<d{KbeV7GmP&uD !03%_yj%-|A%|kH' );
define( 'NONCE_KEY',        'W&cWAs<E6X-={gG/#L/<K|z;#u>@HIFX*?7%mVC$&}^77@C/0DCvH#7UZ3[&Zl3#' );
define( 'AUTH_SALT',        '[~o.O8Om~?FI6|~m[B@Xs_uu3aZ<C$~2-LjQR?!xaon&.[aa3$5OHt87aB}JQ>rk' );
define( 'SECURE_AUTH_SALT', 'AP^sEfViXmgLr6>}t,XETT@rZOfHLQta4U~?mgWq=umoE[2A6FU;zVnCtlsu[g_f' );
define( 'LOGGED_IN_SALT',   ']K,PhE%T2jPOe>p?,XIx,W:S/jVVB ^OTu|[lbt_]0qe9j1Wnc+:v.PLa8+vybPa' );
define( 'NONCE_SALT',       'e^%Sd$5UkX:R!3z-Erg2_#$`gh+%Smb?)vZLGK@[@Jw7FU@Hfi9O0b:U>v#W,!=W' );

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
