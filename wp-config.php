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
define('DB_NAME', 'ingenius');

/** Database username */
define('DB_USER', 'ingenius-admin');

/** Database password */
define('DB_PASSWORD', 'Ingenius-password!');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if (!defined('WP_CLI')) {
    define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
    define('WP_HOME', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
}



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
define('AUTH_KEY', 'YrfSwUs5zJXJbGOF63sQsEfP3xh6kksRmJtlHIcBoYWr7X6ZNxrVpb0uFU3FLMPj');
define('SECURE_AUTH_KEY', 'lRA0tgBMpYHFy7ekyBLTb3JAUgKDmuW5chP7Ypo8TvGpHdXj8Y6mvNVquGO58xgR');
define('LOGGED_IN_KEY', '23pSDndS6LNvYJvh8eUPHchw8Y3qpbKjW0HvxqkYkbXN8Ex1PItmxqzyUXW7mocA');
define('NONCE_KEY', 'qJ0ZdFe5hFlYsnGBCb5qUuxKOrj2o4y3YEJhyZwKKDx4NcfC7O15mN1u8kv1qKFE');
define('AUTH_SALT', 'NBy1pjo4pTwRbNCiGKGEXVc8lNN3UIG3AFzwaCwoaJCK4Z57r4UigNL66gr9OmK6');
define('SECURE_AUTH_SALT', 'd9DboffsErtVrF3fD8oCi63ddpQdlN9u3EONz9VhBxIz0iEQE17u1wSnx5CQyrAM');
define('LOGGED_IN_SALT', 'Ru7Q0I1lhAaa645zKkYaFnZhfZmqWih2m2tHKdF23Rto0YmpqTQZ8NP0IT958z0R');
define('NONCE_SALT', 'zugDJtsE13EAhTA9LmFtkp85CPrOsbKZwnyCIaNZuThmZaPd5uRs4N0DnATT30td');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';