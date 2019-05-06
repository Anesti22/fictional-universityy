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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nk00RAS0/wnruNXJScvzdwwt2G+dgXff/CtTydGHmG++LlU6Ywu4NJFqhrNa0KVtZhCMpEzoxX7R2zGNvEvZcg==');
define('SECURE_AUTH_KEY',  'zp/+rmgsx22AnkpUcW3D35LGAZJZ2KtFU6U/nDeKi6CHAgzKPONt+dLGnc82UfNPaL53wKH5pe1ltmmjPoxbzw==');
define('LOGGED_IN_KEY',    'AZ2RJfDbGrsLWgV2Ppt32aVeWNBVlYdgJGsz2zwrbhJWMeKkbeocXZl8gNwD3y7hXxV9NoR8+fqU+pswCE/KOA==');
define('NONCE_KEY',        'kEoS2T/oy6cN+fchKzu1Brfn1q6hZJy4vP63Ur7c3XBl7qGC3vSDnPYC2BzQh9ZOrKwgPyhB9xrsztdUmX/bTw==');
define('AUTH_SALT',        'ZK3sJAsK6vOHyH5uDeU4GmV4CXWkKc2B/9iOwcAVp9zM3FVWa/KaBQ4P0xo4vw7f7+fo4In5uB6l3QCGX3PKpA==');
define('SECURE_AUTH_SALT', 'JTBFXdHVEdueuhG/GIZC7XzYn8Ah7y+Z7AAqLLN1nftNTQG0o7joq+q6X4GNjyktBQy4IjfOia2pZPf/1AflQw==');
define('LOGGED_IN_SALT',   'p1EChigf+iOxx8xjyHF83yXKxLd8HyN11O6D+wVgKxFyp7STCdOp/LS0+Q3NyauQvrx1mRcCLtkwcaweWXQoLg==');
define('NONCE_SALT',       'LSrHeSs6ZNj7LhfieenQAQy8W7HGfUi0GuNpzXKjO5DrG8LYVzKdDeLAhSm88ifBfw7B9by7JaCXHDCnklt55w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
