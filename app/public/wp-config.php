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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '36feTKvE2/4/Q+WUamBcwnGSYJTZH8t1klvYcFjfo03RQzpyQYYQnRIAd8sz1SaKnxQAxgXYcVEqIVqi8MA1sQ==');
define('SECURE_AUTH_KEY',  'c6WVb/F5mgV9yBW+KKcvMqgBZTBBQmCDObjuL8NfZdG88JWht4W0G6sYibpn0k4OHnYsRk/nqHqXE/UIviRrxg==');
define('LOGGED_IN_KEY',    'VMXGvrn4P+jw/9bwz8VFHIK4Q1Wy4meHBHCJ+hoYZr+bq91aw9foP+5aM0yJNAu9RU3QCP5x7F//W2iUWakL2A==');
define('NONCE_KEY',        'XSdAnU8BUep6LLu9x/kEix2shFREjRtgCzdlKYoZIF8vZ7YtEkx/fYZPfoQUm5j9NYBT1Jg6+dQOEwIZFH1NKg==');
define('AUTH_SALT',        'Nsx3Nn12AKDiCkuq8zBIh77MAq32qMETWRPADBmqnhhOVkgBZ4CCoGrRmBhXhwU+yE0rj78j53kZNqKTmL5llA==');
define('SECURE_AUTH_SALT', 'INX4UthCj+9oD+7LqY4YBlMYvvSp64wlF52iYvUY/L1ps6OoT+ku7vXMNlgtkY80V4IGc9pBzjcdNpTSa2z9Pw==');
define('LOGGED_IN_SALT',   'hU9yuYcVPF4asCLjkcXH1dRe+miPAF82SP5eZ0pctmCiZK7jyYnTkKdL0viMjtHNDTRfBSGlDASm6KQft8uyrA==');
define('NONCE_SALT',       'XHfUgN2jXxteEStQC7UI/FgrV5xnojA/xGJOhmk+pxydEvpJb8oAyQ59/estKQMgyR2P70VKU4hEYbvA7yd2fg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
