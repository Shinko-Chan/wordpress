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
define( 'AUTH_KEY',         'AkjM#:v<+vq!&8xJD4 4L@ZVT,.K=<,BHbx:@=Xo,~2)-`kmFOxNH1PLttCXcMI]' );
define( 'SECURE_AUTH_KEY',  ',+=@I7{G4eltse<%`Y;Y9U0@}{/{%B)xn=]A;8df+<~SJC@QI45$_YhN4bXvWonu' );
define( 'LOGGED_IN_KEY',    '1lDyiLy1G/k4j6hI+5R7Z2)_T4hP K6Aueiot#YWVyINKRV<%y-L<}&_%UvwSl]+' );
define( 'NONCE_KEY',        'WKV|&R}xIk1]2p7ZGai=<&o1uPhpKT57jMw;reG$8~y!iIeE+3yeh!h W&O8a[P`' );
define( 'AUTH_SALT',        'J#2QOvHh`EOa-wK0[_V?5}g2l^qfbA(,x|%S8 I~BORUO59Z{NrVpVenu(++aLQ(' );
define( 'SECURE_AUTH_SALT', ',z$:~6BGfQB90h@Ed[?|tNLwT >9.Y];##KfJsrnqC*pj~x3tJzy]RriyP,0`tQ;' );
define( 'LOGGED_IN_SALT',   '&,eCN-|WVUR*m,T:+);=8/m9|9w<Ht@}F>6I7Z!qUYjPxnt2Si6*;<P-3;L(y =o' );
define( 'NONCE_SALT',       'P-eFY% :BE|sc^cN?k!0+1XgHF-2tzn=C$$f*}UW2*{UnqW`w$`}J*|x-OKEp%(p' );

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
