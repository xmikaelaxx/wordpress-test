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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '|$SDfF#ggfu)u sDK0~%s1eK0`FlokRrxi4_QA8+,%W~F`-(..p83jmRk.B:Y4Il' );
define( 'SECURE_AUTH_KEY',  'eZM?5pf{nb^#`2[[2_h/VX%E}f4X]<C@h2}JDbad}}CYU,5 >xVo+(LLgRZ4H+x0' );
define( 'LOGGED_IN_KEY',    'gu3-PJ]5O|^%lR ;R1SyZ*~oa!{7xsM)H&-9-M.upsTp^xNO@~5mbYl^W0TE#o9Y' );
define( 'NONCE_KEY',        '/]+>yhQ,/dw1I,3XI}Jz>^bZ$`B6([5nh*yxoVE9m ~i45lV3?@V1q!BuSR/!i8~' );
define( 'AUTH_SALT',        'WyAMdxFf}D/9O%0OjEm8ej{Sv7n35ZhF{]/A@U.7tBOnq9vBw=kB)#q(C@fqV]=+' );
define( 'SECURE_AUTH_SALT', 'U_ ,37Ix0PP_=T=#8/p-keH9Rf{-Yf|g^}_-A&8c!O}G_yS|)[PnRbwn(k&T7h%m' );
define( 'LOGGED_IN_SALT',   '8Bl[ci9;*K]$NK*+CE%$9vd9Tamt%a/w`&.:<:muzNL6vN@ L$b?M8/A}]!CaNDr' );
define( 'NONCE_SALT',       '>=]i$K=glH}/_H.:a,1>aaEoe]uqtTDY399<vFXYAIYH2qYH=:bnbIM!uq?h2]R ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfolio';

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
