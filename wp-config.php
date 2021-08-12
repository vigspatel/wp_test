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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'NJk4_{D$.N>s)vo4mqMUpg&o?zPPLcs?El4irN7rF=C&?,7M<*tqUnKJDUIrXv`0' );
define( 'SECURE_AUTH_KEY',  'Xwv|g3f:D#ouor&x1+$|kv(CO`Pk~VZbCbbG/B!T53kb^+a`T.Rl]fB2X=lo73dv' );
define( 'LOGGED_IN_KEY',    ';-45>o,r+:}9+vlFvEX3&2^|{+t~tZjR2rDU.Z1NkG4G(`ch]uR2OkU`uj!q>uOP' );
define( 'NONCE_KEY',        '(9Dsl$NBs~<sFruQ(9~|MHB&JUe-0LPCC=M%)Sx%%w8Yf7t#W~pv 5Asf(^pfK=x' );
define( 'AUTH_SALT',        'bWpQ#:W,<|Q9j`DcVcVO4q#{]3YCKjIAys|bf5i;(1gnnf7g^%U0:3V4Vzsn#SN+' );
define( 'SECURE_AUTH_SALT', 'X3J!5N7vC[SlPG~XhE.cfu16iV-UW:Ij y:#rX8EuEA#:;=Hs%46Eyqg54.V4dN$' );
define( 'LOGGED_IN_SALT',   '#LJdNb^3P#;WS|m!I]w{p;DBikzFpMvjK>U0}$nZmBb>tAKuvtmbE7Z1G}kp7>d9' );
define( 'NONCE_SALT',       'aw5Yq?RgY3jsl6fN7c!!?[tK8}Z,$>+oQ<vCRkxy?[3SwswLnI}`xR[tArA|)Sh7' );

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
