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


define('AUTH_KEY',         'uaUs+eGQyuxQ0+UQH227v4A0SNZLjoT2ubOZbTcA6tJPt3H8tGSs1zwNPlyqRIEL+TJuNfvOTd8C36+YB1zpCA==');
define('SECURE_AUTH_KEY',  'HU0UB/6Ar6tycxFvfK6+XBvxfzXfgmRfNNq+jUZJ3MHq4OFBDkSYZnrPL9PIBMSnuAqRKDWeO6bh/l0uc+Jz7A==');
define('LOGGED_IN_KEY',    'e0Se+ySNt7FYymcwImmE4WPXU5STE4n2LtW5C+nBqy2RNzCvUkdHrkk26rouJuD3Q2OIxgsmd2r0rUrgVD5mIw==');
define('NONCE_KEY',        'bYXjrwSFcIIOQneCTV0x709mplhfEzYoOZeV82DtLcuB3RcvRl8Tbp8zTZbqq/fbHmXN4nL/AIKoPe4TiKgSxw==');
define('AUTH_SALT',        'aMQu4v56YePCZyCahtKt+byd7O6noQ6e/01OcFtU1syjVkhGvION6EBd4a2BI+6NLUipzyuMH6XmDuxuQLh10Q==');
define('SECURE_AUTH_SALT', 'sFEEOUVDk0MoRG4ZyWauXx2JJKXw2LmvmG6c8wJQxDHYCpfdGmW3cQTm3V/i+bZ5X+pzDVCwOrvGTaN9Sjgr1A==');
define('LOGGED_IN_SALT',   'xWI6BaasKRIZJ09IciOWTfm+dQW5GHGnS3g397dnPXkjiykyQ5ppcEunxOjt5SSEeG9tzzp7SP3chKBCIrT5Lg==');
define('NONCE_SALT',       '7wCBAGixqldfwaF6CT+4utQArpf8mzwI9R3RZEJYT8AzYS2KxZ5aGeLvvFnhfa+NmE00tbrbBgaQxBgp5XGS6w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
