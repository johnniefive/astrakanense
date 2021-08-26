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
define('AUTH_KEY',         'Q9Zg62wc00+TLYq2b+/GZzNQOtTiNnlSw9uiNpZH+dRwLLg4imheUcwAWirhn3lJrVOmY/2GcEWgUpKy2h5Hng==');
define('SECURE_AUTH_KEY',  'Qml1Fbv+10cTUP2oznHHsf8JJphvesmofXu6Y1d5NubeSjB/6fed1xZJg8KPnEnvzcml+8a1BF9E8gCMoyoukA==');
define('LOGGED_IN_KEY',    'HAHUdNdsMR/+RQHetO00o13Y0r2LkT+4lcDHFa04uSZPzwNu66J4ARohoNs4b3kLiEkHJ98l6tTb0jEFT6467Q==');
define('NONCE_KEY',        'ykRZgqDwzVTS5KpP2cvYOOy+mweO20GbqHsE1aJTGfQSm7NWKZfGFEhWf9f+AEW6YPgPFsKG1+xu2gjQXR6AMQ==');
define('AUTH_SALT',        'GZuU/Bb9isPqTGnxlSNrDIGwX1ZwOULu2U1Frg2datpiWrY1jvLsE6yZEbWxnPEh3Z3exHAzKmU7IZnvKiN9ew==');
define('SECURE_AUTH_SALT', 'LDFj9/LKatvspB9xZbiASnrnsYafcS42hK6QULkRO4Q+gq9F4V56XqG+cuqpYGaG7YL4uNfTIbn0Rr78dR9vYg==');
define('LOGGED_IN_SALT',   'MYoyeuepK9ylaojKmMRUcoi/P4kbX17wpIlHD/SdcHQN0a7Xj5p9ieGbjfF0g3YLsw+tOi1ATZhHt7qZ3nZkfw==');
define('NONCE_SALT',       'RkHAO/l1ikBjEztxqsWFzZ49M52GXi+sdfrJkuU37eRobu/SDSZnv8E3+13Kk+UgbVN3b51xwg7Z4HZcvyzn+g==');

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
