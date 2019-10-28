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
define('DB_NAME', 'carbonj6_WPA7Q');

/** MySQL database username */
define('DB_USER', 'carbonj6_WPA7Q');

/** MySQL database password */
define('DB_PASSWORD', 'YIPHV5GN08teJNBVQ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '829437a92f438226792ca0081d561de108087325cb7281d24d76efad49b0c1a2');
define('SECURE_AUTH_KEY', 'e800c4f8e3ea4b92139bf568df5585dd68cea3372424cd5388ec35be80f34a01');
define('LOGGED_IN_KEY', 'fd6c0c70a3099955ab803fe72479175ba081b416a383c5380d0f7de9c3496cc7');
define('NONCE_KEY', 'af158a4792f1e838c2a1cdebb0f5a4b88e2128a6abf5060b22cff4e35e9baa95');
define('AUTH_SALT', '1a64f39a111cb249a2d0933dcc96e0c3ebcda28479580154806cbf7ef4301147');
define('SECURE_AUTH_SALT', '08e2d6b700a8c51b1782825960883be19729b4b456802795b37b8e8dff8b25d4');
define('LOGGED_IN_SALT', '4f550b1b2c40362173edae52cf64e0b068939eef3d78b9aaa1558a63e9e8a727');
define('NONCE_SALT', '9a987096bca004fe1863a3823779b302d36fbd8bb6f88ea55aff8e7b0b0c7a8b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_A7Q_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);


// Settings modified by hosting provider
define( 'WP_CRON_LOCK_TIMEOUT', 120   );
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
