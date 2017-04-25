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
define('DB_NAME', 'unique16_wp1');

/** MySQL database username */
define('DB_USER', 'unique16_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'T(kf6L27~ngODaMJlB(06(]8');

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
define('AUTH_KEY',         'hjQjVUbA4oalouO8ktv9I38v8cWrNOkeAGTIbzvtJHcr0GafTvmvIDfOxA38SxN5');
define('SECURE_AUTH_KEY',  '1VYfCe2z1rgYhCOjSxvbkNSd2PrUsRRJZEdLhUwsyMyc3eX5kHffjb2lV9sjJysf');
define('LOGGED_IN_KEY',    'sEpazURZWqJbPIVqUN8GmuVTJwEqhg7Fs3R7iGE4P6kunrvxOjad79pHEnY0OSyb');
define('NONCE_KEY',        '0kTfQWgSic0LjFFFRODajojEM6tomiojNUYvQppecjZcAzfx9JJw996273iXrY6m');
define('AUTH_SALT',        'hfvZUY8yQinGB6wC4dy89Kk4fuCLV4LyJrwMnT802tERbfPPovw2flmQszNuqh6v');
define('SECURE_AUTH_SALT', 'qXZm0UREsgxw8kXTEGJ3u2KQA8vtAl7D5w5vSgWzrtix2A47IAadQC1v8CeJoYiI');
define('LOGGED_IN_SALT',   'kon6PQPKLPH9ikcvA8cazfTsGaWZrHRu0XrJB6z4yftLe02K5EEA4xnDi3tOqcX3');
define('NONCE_SALT',       'vfqIGolzCdvuRgk3fZiBbLD287rMXmcnFY1JLkWnjtAzifw7mmimz1vhDX1z3ZIT');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
