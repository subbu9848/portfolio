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
define( 'DB_NAME', 'portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'manya' );

/** MySQL database password */
define( 'DB_PASSWORD', 'manya@123' );

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
define( 'AUTH_KEY',         '`N#}Zav|Yy=Qz&nbx2,!j,dm3B.! C36~*6V~G^C<*eP*v+YakGgUf+}3Cgl.(|7' );
define( 'SECURE_AUTH_KEY',  'F3NQM,=F=LJmE#JR5X9:Q`7OAi]E1cFRl<2Wn$}VF2;S.{F52wpN95i8mcB*gZT&' );
define( 'LOGGED_IN_KEY',    '1%622)f[)#Z+eKqg]EL57^yqfngzC3n~!:H8][7Xc--}qAg%MDp+[lVXz:Ji#hX`' );
define( 'NONCE_KEY',        'A5(jE^4u0Qh?_T*VnT>fvGJp`B,puU`*0DOvI;N_:=dizMoGv9FO<YYL-gG!<vSS' );
define( 'AUTH_SALT',        'Y@{Y]vfke%ug8 dfd}y1Byxc>;Nc}CGbCgbH,6^gT8?31ext`~f*,7ake3!E2!qH' );
define( 'SECURE_AUTH_SALT', '6IAg-[? R`-G:?nNguDfPUh`-^ #0}ydx1Qr?x.Z*ye!{/+~e=!aykY%^NUe}tZ|' );
define( 'LOGGED_IN_SALT',   '}Y#1R!Q*B.5*A::Zsyv9MB~k|:8;oiX~qQ,v@<SOeZIb9m+`ce0J(cnb|3fh(m1u' );
define( 'NONCE_SALT',       'sDh_w}?ICf.)t%t(l=r`F),7_m{)(E3/xS6V6h.vKXwR}d<l^o]/uJf4_{c*H~jD' );

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
