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
define( 'DB_NAME', 'nfrg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_S>R;1M4#gSwAX$R;ul@?OiCj}e*;pU 8SO-lJh/t1#{:v7LJ?YU?W145f:&*Z[ ' );
define( 'SECURE_AUTH_KEY',  'k7<:<HXUG/K4^fq]I-qB3;596V`6W ?nwTfGgYtRLLJ85&Zc_eCAx[ASVkT?<5HO' );
define( 'LOGGED_IN_KEY',    '%gDCQN^_(~mIVi+|1 .;yUStxCS Hi>R;DO1!A m}9<tyA(A{!icWMq1H3?`m96f' );
define( 'NONCE_KEY',        'On558rRQMv,#1(O$R6f9?_[i.>IlGk ;5cH<Xgefyyg4h(I^*!KWtu4yN/ot[ESV' );
define( 'AUTH_SALT',        'A_|DM*>)K?2h.9;Z^PX/>g&qs+y6e_)fWRnc.|PgR%`+Wi;o//1vM;pjaf3Hv:qH' );
define( 'SECURE_AUTH_SALT', 'biT&8I{#4;`zDv~X)pTo!6fn#lGYGNBy~NM{Z5Z[@LzN)Rz*w{&9MVH`UQ-d.T.W' );
define( 'LOGGED_IN_SALT',   '^omSAVuP| z|u{Z8R:YRuHgOLuT#^yk{kN/hS|NU SQRqAcnLwEN1+&T]hw`h]])' );
define( 'NONCE_SALT',       'jv%]2Ug -k mN[MNVqQ4,}j[[,~>]o|%;R 2pzZyX2E8|e1*s`_@6b.2l[t;aAXZ' );

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
