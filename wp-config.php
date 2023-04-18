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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rainbow_vision' );

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
define( 'AUTH_KEY',         'sF0r5,7R}b5Y[t*Cg1?5zc0jPiSa276m@@t|&!v=+I/<Wh(R#[`Dm>C* htlz,!]' );
define( 'SECURE_AUTH_KEY',  'z*X1<B9oUW<B;>)7L|4Y<?Jq5_idJ>*XuU,!{;,2U+3s4cSw.#;rk8%n^imc] i,' );
define( 'LOGGED_IN_KEY',    'cWih]+qO$%s<zZr/|yh^^=?;n}!Qrkj7@1*uh# |{-:#@Fe&OJ8soGZ@8jz@*:MC' );
define( 'NONCE_KEY',        '@=~*!fe7EQ/NVz6f-_!IfWSWU*$R*YM?ryAYr3]y7= W_{7%/3s6>9*W4X1k`5?~' );
define( 'AUTH_SALT',        '+c_reNgOnxYUN44J9vtdYEBxcKUjB:&i vLC2KS!G-#`n.pK6?PLgqlI/7b^R`8]' );
define( 'SECURE_AUTH_SALT', 'ye/{P:2D`Nd>ltqld08#=z?m6_Q$ox|TW S.1MG0o[rqV0gCJLio.eeJB,pK`h`z' );
define( 'LOGGED_IN_SALT',   '5U]<%<|=!Te0%y;5h:;0S IEs6!/_lPG ,~r9bcs0.~OJ}RSxh=:E2UE2!X?1Hb|' );
define( 'NONCE_SALT',       'egDNoY(,|.?(VK*K?0w/N83OVGNUpD^9!FtIVVB=rG8O#5mwav(|7hE]_0d&aaiy' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
