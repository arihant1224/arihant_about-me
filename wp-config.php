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
define( 'DB_NAME', 'arihant_about-me_db' );

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
define( 'AUTH_KEY',         '+87;f!1&?X3h*@-5k.@2>ggSFM$)HE0Quk7}~4G1J6_Qz+/:PzX|V U6} KIg*Ur' );
define( 'SECURE_AUTH_KEY',  '6xVHzqQ2BNxN[K9YM#OZXFh-$Xb[:aY2hy#RLhjtGJ5nb;.he1< *a+dQ-y5VWH)' );
define( 'LOGGED_IN_KEY',    'q`xFm3|g5P j xm]-2@v=38>NBWsGIkVCN=E+7RMmiKqbr?=M~}N{A@fLzeF2p^|' );
define( 'NONCE_KEY',        '^x<VCUqTYTmAek!>S8*IEpig=h}l#]N3dHI!GC-`!}KD*XVhg`-[bV`uWr-=)3qC' );
define( 'AUTH_SALT',        '%3rB/@z1Qcd1@teiAdl}0Q_~ogWz+7@vnl(/1tzy0QOvJ_@EP*)v./7]9T&t*>_u' );
define( 'SECURE_AUTH_SALT', 'KBEyBy;}nr%y]l8j6xAnO; Dw[NV#h_z}zf6*.pJ(HO?#DoO!0 Av&Ki(4ryMkR/' );
define( 'LOGGED_IN_SALT',   '_}<oUUcMN5$S([F(.9]GMZ:82EJ1^;b,^_Gs`zM{ s*Y&@a&lA`~:y,MI1N#hgwK' );
define( 'NONCE_SALT',       'S91S,ZnyG1RguxL=5@|%TsnY?yVt#^`aE1MiT_5za,lI;n~^NiC$4.Mr0_CgdZ*-' );

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
