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
define( 'DB_NAME', 'lvivit' );

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
define( 'AUTH_KEY',         'Q=1`n|xb[H7KI{PcIllxD0U.JB2ac;`fa+_%MPN^BQTO=RyO;*FB~n&/TA/y =|D' );
define( 'SECURE_AUTH_KEY',  'Z7+/}R#T:{3k@)V I=.y-hrm @;-u[oUBMEJEN.jbrE=OqgA`FK1~QA324n*4v}-' );
define( 'LOGGED_IN_KEY',    '2Asw]Ew-Mf1)YIVI~ZUtPZ%UrBG2^:c64C>y$.sJy#t%.w-_t#yz8nPY^a&R Q5{' );
define( 'NONCE_KEY',        'M5#z|47g&x}&6l1?N:K:fKSv)OWwnC1Xr+yv$S0r=)Fk,[t3MPAJ/WS(2%BTYp@)' );
define( 'AUTH_SALT',        '&]Z*wP~*ysm@Q71Z{eRIL+u&]Z-<D9@B&78SI@8:2/uL,xX[SLIjGE}jdr9v]*iu' );
define( 'SECURE_AUTH_SALT', 'H mxG#XH@Ya&HrNVqQVckk_E;,CKPE)zCs]B>]10/Y%#5M1nz:$aDnp6%.~)-4-P' );
define( 'LOGGED_IN_SALT',   '6T19pb>T(_vBJ5):k)TKaj`k+4bW%?&d2@Me?R1Lm0Geyya1w^AfECevPGg~3K*t' );
define( 'NONCE_SALT',       '!lIpQmG,<z7EanuuJdz%Wp)i1W#W;!5q9,h7@!JSMaC7sR,_Kfpj#t[;b;jui,GQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lv_';

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
