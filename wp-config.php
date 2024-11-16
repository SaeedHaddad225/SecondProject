<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'Nt>;JYxV% 7?Kkh@vBj[xCMy5rf907,CqEX B`2i}q0s;A=NpYNQ}Ir#FeD>k02q' );
define( 'SECURE_AUTH_KEY',  'd)^/+q)<ZEQpDB>LGgjvQpHpHH%I./L#hk9}Xf_RdF2v*+Dg~rRIK`P_3#cg#uh)' );
define( 'LOGGED_IN_KEY',    '6:pq9(%^ul<.-k|Z!P-C8Mwqc7;](8fD^}|cr[UKMOMg,YE^qNDv5%u;Spm}0f[ ' );
define( 'NONCE_KEY',        '23[8$*;]lxB.H`6[CbGDG]rR-he$V(2E0^wFv-Uu5JwB2f!u}7TAS{y/*^.qw7&g' );
define( 'AUTH_SALT',        '^yV#)Q0.RdICkEwzG Dkd,6`44up-l|VBDu$w+W|}LuHo_,clp5TlrmXH(.gHMkh' );
define( 'SECURE_AUTH_SALT', '`+151||4y5Uc8dz<-Cm|LzGA0KG2?Mcz@BK-9;zScF<<88ssZ_pV7A,,UFaVe?sV' );
define( 'LOGGED_IN_SALT',   ':IZ.Lq$}(vm<d/03:2JN S,5dA!|jA#yeWy(<,xTYohc%/[^N>Q=3WJ>?zI_xud9' );
define( 'NONCE_SALT',       '+NeLIj!jq2w[MxNGoRG=P9|@+>D&TI)=-[zN[ReqLP9~`yHOFnwbG0[Jt(>!^0TJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
