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
define('DB_NAME', 'transferDBhzk39');

/** MySQL database username */
define('DB_USER', 'transferDBhzk39');

/** MySQL database password */
define('DB_PASSWORD', 'xiau1lqLIL');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '#51O8Vwh!wC0GRhJkw!gsz[4>J8YRr!kv^0BJ,}7FNUgBJQYjrzUfnv$>r$,{3FM');
define('SECURE_AUTH_KEY',  'tlt~#;5-_]1DKS:5DKSaltOWdlw~#hpw~[19G_[1CKSZ5CKRdls-Vdkw~|:s-![18');
define('LOGGED_IN_KEY',    '5:9HOW19KSZhpwWdls-_[|:4CKRZ8GNVdkszVgov@|}sz!>08JR}4BJRYgFNUckrz');
define('NONCE_KEY',        '>^}3FNUc7FQYfnv$Yjry^>r$,{3BI<7EMUbjEMUbju$,fmy^<7y*<6EMT2AIP');
define('AUTH_SALT',        '~C![5CKS18GOZhowVdks@|:sz!:4CK|08GNVgCJRcks@Ygoz!>4v@,08FR}4BJUck');
define('SECURE_AUTH_SALT', ';SalHOWelx~#hpx_]19-_]5DKSa5CKSZhtOVdls-_:|:4CKRd8GNVckszYgov@|}4');
define('LOGGED_IN_SALT',   '<ITbAIPXemyTbiqx*<mt+.]2EL#;6DLTaiHPWemt+Wemx*#;6x~]29HP]19HOaipK');
define('NONCE_SALT',       '77IQYfnMUbjr$,fnu$,3E^<7EMUb6EMXfnuPXfmu^<qy*{2AI.{2AITbiELTb');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
