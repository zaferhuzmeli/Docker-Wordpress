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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         't&.+`o566bA9KP<X{rc7(VfZ4PNvBwp:2wt/5PGvhp1w5frX<ZxN3KT]h3yk?5wc' );
define( 'SECURE_AUTH_KEY',  '!&Rk3/G&]ESNP_qQR|s{<Fj=Q,sA-q-,Oe_wt%_yZ`8{he?RYsJ%gIzsecavzD?9' );
define( 'LOGGED_IN_KEY',    'tZQ/q@DqH:U]r$4n+=]{sbD&]KVfBUxI[2cBYx)BTp]cw[E2lM*iG*}_ gOh^NvH' );
define( 'NONCE_KEY',        '&oj0{|pFzmkJK|AlOis|CfJL0Y_9GU0kjvF`%ZZPj7~Bs_#WIBK^h-brRicSZ=!5' );
define( 'AUTH_SALT',        'c &yTLhBPx0Z%iqtagePjg1-QWfiT?=f4l5(:(LtJ23c+ngVY^n@Xprb=:v4*/r[' );
define( 'SECURE_AUTH_SALT', 's2ArT)6!Fku9`n :@w}EBIU8Rhd;LHk1e,S/aae&38)Anp7lj6i![X1w!C<|*[hP' );
define( 'LOGGED_IN_SALT',   '1u_EAT-:Wz)4Nh,cq(7~lJWI%Q.$bSzo:]K}god4~$V0S^eO+}bEQW@0 {3F/^~:' );
define( 'NONCE_SALT',       'tXGiUzY%UsT!}SO^*]Z(3k;_N~2D2(2EXa9v4SH/Pr5} wLJ_FdG@OlmeH9-YbCz' );

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
