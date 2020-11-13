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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         'Z#|@x]r=o m;ZsC!7!<13_bqq0uO{XW0V+JXK#gm/3mbVcM>0C5Oz9}[+)Km/-4C' );
define( 'SECURE_AUTH_KEY',  'Zo rEI2CEoL-.>E5%ap-W7w;n3?zwX i)Be-POeUcZb${kt@b q(2J_Elk6jDl)|' );
define( 'LOGGED_IN_KEY',    'qUOxJ_H!j;`<zP*R,@5^NJMYUBF18=70/k[BuWqaEZLiusd.Cq9{vC2rdV,SX8Wi' );
define( 'NONCE_KEY',        'S?g_x+JhqAZD[P~ m#69lB#u0aS@!3aJw&bkXqM=E>BG1,f<4G2XF5;j-,hJ4~pu' );
define( 'AUTH_SALT',        '{w@Sy|w+hCI%*&mPtZzs_!(u}vh|mK(S?&k?hZ Nb1fo(SC6^ H=!I4z/}P{B+Qs' );
define( 'SECURE_AUTH_SALT', '%wW:H]88?B2+dOM%sC%i_;ysvU4QvB(4^=j-HEhh6-wOxdC[,^/AW5{.Iim0TYQF' );
define( 'LOGGED_IN_SALT',   '*fMx[mtymF9K|rZHd0g-#SyR1hc-?(ri9[3Z;]<R9dH/[yN}.gk {,~x+=Ce-Jnh' );
define( 'NONCE_SALT',       '5>GYi?hn.#pt~gkhY^oFln;@,BadRHv<:B3TM3O=43{#enpuL/}HL7eYPHg}n])>' );

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
