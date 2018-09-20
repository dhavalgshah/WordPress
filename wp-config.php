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
define('DB_NAME', 'wc_dev_multisite');

/** MySQL database username */
define('DB_USER', 'wp_tester');

/** MySQL database password */
define('DB_PASSWORD', 'm5O$y%#DSRXg5RpEs&uN8alm2a2f');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ob ~Yp_P#9 <-,bi3(NUx@hv]ZhjSqk`&ps6=L/zhXB+>vXL>GqHJYxCklYmK.23');
define('SECURE_AUTH_KEY',  'EWom[0@B.a.q];/&?I>sG=`]ehMES5^zK|e>hTZ.`vf>Il[Mpc]0QNSnlapMK2(.');
define('LOGGED_IN_KEY',    'WNalP;A?Pa=N*|K_oP/G[q&01`#DoQR#DqR4{r(mwz}u:(;@+-~i5v15+d+DS%$l');
define('NONCE_KEY',        'oZjWkHQ/DI|e0-xiJT <clHDFq)}V=4VF?SG+_& pqj1`Xgxnl^VAU`.E6:Au[-r');
define('AUTH_SALT',        'f^sYxq>A o!@Z&9U@4U^Az)@L-6M/^%w]_e-H~oX(4x}=.8S;CPl,ff^+/H@anyq');
define('SECURE_AUTH_SALT', 'cjlBAk 2`3LGa**S?6Xdj9u&%E!W fWl%@4#&+O>,-A-s{I#ZFT?jcR-~49|^2Lh');
define('LOGGED_IN_SALT',   '0J2-:||h!&~~`~5?^&~oOu=R(FKGFL|L5&:DCSNC5*`xQ_o_!IujM{DC-}@3{Z; ');
define('NONCE_SALT',       '9PW~Q0C]e<g1,q^u r43O|]=_&M:X`xT$WC_*Iq&[he3hzE+0HjyZ0@WLge<PqNA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_multisite_';

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );

define( 'WP_MULTISITE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
