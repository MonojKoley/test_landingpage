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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_landingpage' );

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
define( 'AUTH_KEY',         '(feA?kSzW-/L-rPmMM.^/,Jw~oNIH@.hG]a}FNqy,F.V.E54#UWj ``p5Pc4+K`>' );
define( 'SECURE_AUTH_KEY',  '<5e99iNI~un{@pVUcK#V>-),E|7gCpKWg.{Sw:R}1U+,:O4Jt5TyB.bTxV&A(1S4' );
define( 'LOGGED_IN_KEY',    '`lW3=wle~Vk1vqp/ZvBpV2/~;O 3~QCO4$Sg4_M/-rO~R91lO`g)N}o9Wtr03_Se' );
define( 'NONCE_KEY',        'q;a<O8Eu43-76|RE}v|{iNdBW?z!/rS)S6Lu5gQWpQsmvAwGk~J~fYs_y>;tjmH&' );
define( 'AUTH_SALT',        '.a$R*j@w/eU4%%d/m9#N`%.Z` sg2FKWGwWWs./1Hx0m-Z6!AU@Vn[b&1@[%ZQ]5' );
define( 'SECURE_AUTH_SALT', 'rCT*,D1HsY!CPG7y4^P +-eHTL789oCT$RidKMeuCe%d3zD3uG43uU;p?b%=/^_z' );
define( 'LOGGED_IN_SALT',   'k^p8Jn[)IAg*~.f(E9:Urr|2e[.$,mi/GsQO~CX%E_s}og!q=].e8(4KC:^gAXnR' );
define( 'NONCE_SALT',       'hoz69^:C~qN{:(W1d;jqEG}%W@cKqFf7,S!gMs?ngx;L.%A$W`aI_Zy1GPWSTz.*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
