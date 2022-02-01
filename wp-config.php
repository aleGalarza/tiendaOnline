<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'wordpress_curso_unne' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '76[|8/,Zj(;83rK- @^Q^z.p E.h~QNJi1@#-lGwMV:t t_hD+[^SzUuo)E8uT[Z' );
define( 'SECURE_AUTH_KEY',  'VuiO2(j@cS$A9sjz]%6AY(5vkOUw]jg|?ZL[IeQxs)%u3g_D]CW$NXaXakw;tSSy' );
define( 'LOGGED_IN_KEY',    'p@|Fq+()tb_#Z,v+/vJ]+J3x4Q|C99#[xxT0wj=0]XRyhL|W9.JscDbJsE7X9.u1' );
define( 'NONCE_KEY',        'hd%!g.xQmfRl01#=Q>bVoX`AtTV97|L?)mg3Z`>,[qoDa$HCI-eCoK^~erzDG!n}' );
define( 'AUTH_SALT',        '(ZRalut,2-1Z41PXgNc3Ra>GtTC8%M?zQ:MuB{}`cEM9s/|Kv4Sh4RHY[PLjo%W,' );
define( 'SECURE_AUTH_SALT', 'Z( `=k^oM&5xVR -F7~_?q=YJbVp8uc{t?E>J7%1X2_Z~4mYB!igh-hqzuN=VLq@' );
define( 'LOGGED_IN_SALT',   'hv|m~$Me*ns!S#ugmz{gF,5YBhQ[Ykg%fNw61}6-)B8e[Kg_wZw$}o]0hT`CNL|1' );
define( 'NONCE_SALT',       'F.N|}aFs.XW A*vc,.Stk|eZ$C& Z}|q5r3l0v>H,]iUQ5qS=x;-R2vM5_js 6)A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'curso_unne_';

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
