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
define('AUTH_KEY',         '4YxkMfgSZYynx6GcjLilYOZpg2CJFJxFoSES7TuCBJHGeNQOhy+9wB0lCBB9qUbwXPtfO5g+kFcFBrYMVqoVBg==');
define('SECURE_AUTH_KEY',  '0nLhGzT+4lYSBqjeRGaBsgEi6CAPhMBDL1TFVwuFVZ5aCA1IcdeBqtXUi4RDqwooeuramu3FYtLGiB85BqRbMQ==');
define('LOGGED_IN_KEY',    'Bg59QIN0ot8IE7LxYlxl4hY9/GzfvuXzXTla2pYgsIti3Ag5ZKc6hLYm1f6n8iF+9WorUG4ecPs6pkXaKMbT4w==');
define('NONCE_KEY',        'mCGRaBFyGXd6E6zVVhlAqEC1fVqYjzS1cM52dlGnQFzEUXWBafhLRqj8QC4+fc2JsOfNe070IgVFjZWc+NQuDQ==');
define('AUTH_SALT',        'Qt0CzQxtaElnpg6pD5WWkOycPOHmeGC4uuk/JDHxx7lC09ZxdNOYBz+5L6/gkvGBm8t2tsKde6q8QhAQOVTWxQ==');
define('SECURE_AUTH_SALT', 'z5ZceJwUZdgabSn2xuqRAM2JOMPGkkUsTcy1Kodw+kPdZTor0rU3D6RD2GUcOfKTRGQr4Nx5mUeYNHEXR8SMNA==');
define('LOGGED_IN_SALT',   'KD4rVeiP0vFELxMy69bNwbjUdETkkx2jFuFdfzO7RMGRDvLb0EjqlLrKku49nkpQe2XyPJlGrrs7gZX29JKHJw==');
define('NONCE_SALT',       '/xpThXWv6EyILPA0JxowaUbh3d0FMkyqMoe8/boG6n8UtyC8gu6pkhp9xOyJ+MK2DcA7mDTZxbwyk3WU1pTOlA==');

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
