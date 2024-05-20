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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']9dLa%YNj98n$AO% QIvOTnxmZoU.W*PvWd$&Ym>`X.I6,bDBO;Ani(#uk~_Mz x' );
define( 'SECURE_AUTH_KEY',   'Ncr@;_cH7T}6-p}qL:$d=zqoLsr;.{^C7&`*]V=<CsnxCF[z;(Vi!]7dH4SKHQgS' );
define( 'LOGGED_IN_KEY',     '9/9n_BeYBb|&+k^saG3%1tgZIx2SWuP[IHrn3GyR4,}#S#B[Qk?@,/gu}D:GcpW>' );
define( 'NONCE_KEY',         'B%)A|6nWh}EEX=ZA_HTv9 l~>~~IDZY}Oz)S(Kl>WjY{Z3JM2n&TKwq6q8E.0d]e' );
define( 'AUTH_SALT',         'r5Wq5(58?t9e,HXKb#V86`P%2ral}9n#b/~T)/BQ3*yiZDvsf=xcs59ttm1n<u9E' );
define( 'SECURE_AUTH_SALT',  'r Zw=EVk/S+tBKfEEd<5gWH3kM+6^jQCRVW#dTF(;q^oU`r9}HLsl6krHH (C$_}' );
define( 'LOGGED_IN_SALT',    'QHkL)DQZO#|NOi2_@; +E2Tj%_^:}W6oy1mDZ4O|k~Yr0p-znp&@LzUGI9)eA(hC' );
define( 'NONCE_SALT',        'zgc,Kcck}n(sRiH5> *aka1P/aG2*Jb,Z=|D?RGb%R6g;g`fJdZIXr6Ip[lX`!CB' );
define( 'WP_CACHE_KEY_SALT', 'cFnKYruATJlK|Dl!nDq.qag_L=@_~O|j}D^Mwf}1]/]B-8,S0w/:@+S4eu8S<<:_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
