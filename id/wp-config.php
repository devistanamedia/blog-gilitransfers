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
define('DB_NAME', 'gilitran_wp498');

/** MySQL database username */
define('DB_USER', 'gilitran_wp498');

/** MySQL database password */
define('DB_PASSWORD', '52cS2I)Pp-');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'z17zkqhp0d46egqsqyn4xb3yjcpflub70l4nnysr7kvjospn0ljrmz9hmu7pxmyw');
define('SECURE_AUTH_KEY',  'xq7ht65ezr9wl2qn2ke9lzksuybjh0hytdwec83xqewsvjt42p3orz62epwao483');
define('LOGGED_IN_KEY',    'xe0887ngcqggqdf2vui681u8xqnpze4e5gyduegijrlw3ibteydod85vhghxor3x');
define('NONCE_KEY',        'qlgpkieddh6luzueit7a6uhfsimm6oei7iprgbf0e1kwp5xdxqvyjgyjnzaudsvz');
define('AUTH_SALT',        'bjjt9rcfurf1dtjjsth1o4f4tzqgflsba8mlet7n34gdvlwkrletgdswg6m8afzp');
define('SECURE_AUTH_SALT', 'atkno6ciivyjsjaak7xlavm0ylkte71jzh0wregke4ma3rbdo4s1belc3ibwafuq');
define('LOGGED_IN_SALT',   'grilvksp4o0jnk44p2zcvxifkw6muqiv0zfbqq6hkh8gxshb8h4gkzdo35mfld9w');
define('NONCE_SALT',       'akwjq1v0m21ff90q0hhkalpbipo7gpyj9rwbutyb0ze74o9v5w5nb3qq6zpgrkxi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp6h_';

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
