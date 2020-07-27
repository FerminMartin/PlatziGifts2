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
define( 'DB_NAME', 'platzigift' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'rc4k+lL2F(NAVyZ A*. t^I.H)|+Hu|{`Dcdcu0;vS0gjq6m-tI9&rWc[KVlva7[');
	define('SECURE_AUTH_KEY',  'RR-mxYh`f>2aIg!%25(jM3hok.QU:#vN]{ohpEqbqijDWeZ85RcVafs%2_GByr@9');
	define('LOGGED_IN_KEY',    '7zK{-^</RzAlD:07<~:wuu,IKx7^7]wdO`{(myUQHxTBdn1G%FU=*!`)ugG8/BR.');
	define('NONCE_KEY',        'V,e]d*(<j_AHY+J%.^7;t:y(le)nJgY{bY()5H,^|g|;z*6P5CwG}vOISLBm#y3G');
	define('AUTH_SALT',        'P+f=qj)Svd |{G4tV5_hsbnh(fcWES;H#8nYl0Z-2qQ;j|;*-kT9LjF sZG&X$Aj');
	define('SECURE_AUTH_SALT', '4}]FpPKoTLlswQyY,&!+-b|SF0}G}sHCxcCi~t&`MTS+GlBf]PN;=5X}1{k!M31t');
	define('LOGGED_IN_SALT',   '6{)Kj#b]E[cCZjTFsZQSTIfh>fG^xIdT8BvoKu9L4-yJRGeRtgjdX_~0Fp</;Z}m');
	define('NONCE_SALT',       'PeyDjoy9i7sjj)ki|UT,gU&b+j3#48l9ZS/*?1F~@X-pR.UyLq<?$0QLQpQKY.9A');

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
