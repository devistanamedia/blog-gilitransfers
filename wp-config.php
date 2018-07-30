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
define('DB_NAME', 'gilitran_wp165');

/** MySQL database username */
define('DB_USER', 'gilitran_wp165');

/** MySQL database password */
define('DB_PASSWORD', 'S]70(159Op');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '64M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zhpxocaatlohq941jc8jj8mn0xyrpvjwawjnxcdcnczwshqsbqqefdvrar3h0owj');
define('SECURE_AUTH_KEY',  'tpchgdb8yggvatbectb4sq5budsiruee6v418bgqgdljwysylpbelqsevwugnrmu');
define('LOGGED_IN_KEY',    '0kdofqxzunmtjls43pbrt7rppehh4jsb2todopnajfhiqbvtkjr6sowweauleya5');
define('NONCE_KEY',        'wfzphuxdmbhwk5vgtt8mud7pzfeaurm5auqsly3d5f7rzpvcdhjn5sikqpskdojx');
define('AUTH_SALT',        '4uun7zwrreia4bdx8zfawqh4wjlbzzhx05utsi8smti2oe5zv8aj8oe2pnqmum4w');
define('SECURE_AUTH_SALT', '2y8li3pjrpze6w4dzf98hjsino81dbuxoqly7luapsnbmnewb1dew3kes9brldlk');
define('LOGGED_IN_SALT',   'r7rj2o8okiara4lkhd6h3l3bjof3hgwyritgd3o3qv4nygeh33vmwbg5ybwus8jl');
define('NONCE_SALT',       'lhvzsthdebsalg3bfp1y0oqmrrimfv7nknejcmd0ivnwfc8ujvgg7pjud81fwkvx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptw_';

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
