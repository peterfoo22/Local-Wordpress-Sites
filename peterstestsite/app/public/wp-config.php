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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'Q6kTz498iC03DNX3VreHedkhnxF3QqoBvMqD3eH9vYUOWQ4I+d7Gb6O1YZbN2IGtGpzMdTxwAMWTiq1cHosZSg==');
define('SECURE_AUTH_KEY',  'Fb9QivpTw+Kluz0yXfvKmEMXtLJrgPkdjH70iZbIb9OFBYn1Si0e7j8OInhMgL8NeTtrOSHawBJux03eKw1qQw==');
define('LOGGED_IN_KEY',    'VdKo+fcmJ0vXIyNBjaOpMdvWd0DbiV6CVZbkwio1B0HQexPALUzrlPC/dmL9H6/wsyFdOCu5kUmTVDJycOOMJQ==');
define('NONCE_KEY',        'J4opCb1wMdWr7D1de8uMaodzHdUEIv/19g5Ami28XhIiSJQ9l2/gKbX4J/ITwWws1bGd4rzkstALWj7fL3NfwA==');
define('AUTH_SALT',        'mG/432kL26ocZfctxUgtH4wtJKbOklyGMBcuHxYyADkKKag+En/hKWwmugRxQwRRLdANvEV25FS2bXanZGDCCg==');
define('SECURE_AUTH_SALT', 'W+KdLR7VjA8NokT6WpmFZ3XTDSFOnPJ9Ge9XZAgq5KKk1PSGzDMhSQ969Lczn4FqTHOOLiNTOtM/aajUtHEtIQ==');
define('LOGGED_IN_SALT',   'iPQCuTTVgVCwP72jRg6WoXxpyx8RCMID6xnMxxCCHAzrbLwsRTSTZ7yPLgKHAlgKj5Q/iDInAuNq1ctI8GF0PA==');
define('NONCE_SALT',       'V2tsCKE0ulhIWvnfzXQsU1rw5N2U7vDEqjvO+tOn6PQWnV77J5ULGL8uarPGbJJs6S9ZXItJukrd9z7H6FUGcA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
