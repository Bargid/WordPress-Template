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
define( 'DB_NAME', 'wordpresslaragon' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
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
define( 'AUTH_KEY',         'HmqxcuKK3E48J5qEMMb3bpCZYxBn8ENv6ZILsIqDRvMBZaLua7Lh0AjBVcC6D5BA' );
define( 'SECURE_AUTH_KEY',  'U68doUIGUBg2BoceAi2pvsl6FcbunjASDAwq6EsGgOfqa9dnO7p9vMCpFYtfA6KS' );
define( 'LOGGED_IN_KEY',    'T1ppNML9pYIK5ckseYZcNoWbcUiysxIbiLVtX10SFC5gqJwqTawFtq7KGIYTJ3bM' );
define( 'NONCE_KEY',        'JL1ecqByD3cuHUiyDCc0lXA1TWwJhLuQTwhXRESt3EheBwsSiYoPTg0jtjnArnHx' );
define( 'AUTH_SALT',        'E2DhN1YA26S3DgYvnt4cl01o7n6DsBhHJKgYW9brqK4V2B2Hvkdq3cgW1cEEdSma' );
define( 'SECURE_AUTH_SALT', 'HBCBZbItDL7XEvzYVY9JWPMdXlLRreJrdU55AnfSOhVT8J6Zs6DUPz8ZwOoSJgzk' );
define( 'LOGGED_IN_SALT',   'SvYdMWPcr4UgKC8Wh6pJ71UruSzofGR7l1GdPm7NdeR0SWELaeDhhpKs10CfZykZ' );
define( 'NONCE_SALT',       'hcIjmePoDWtJegigM3zkjjaGcmPZeyEPnvIYQVizDGspyumnqkbZ7Mbodwaa4UM4' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
