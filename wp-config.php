<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bootstraDB1xddj');

/** MySQL database username */
define('DB_USER', 'bootstraDB1xddj');

/** MySQL database password */
define('DB_PASSWORD', 'iRUUZRtzio');

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
define('AUTH_KEY',         '1GKSls-~#9GOSahowz!4CKNVdw@|[1KRVdw~|[1KSZrz}48FNgosz!4CJNVow@![C');
define('SECURE_AUTH_KEY',  'y$.7EMTbjnu$7EMUbjruaemu+.{ELTbiqy*.{2AIbXqu$.;5DLelt+LTmt6DLh-_');
define('LOGGED_IN_KEY',    'Xbu$.{36EMTbjLSailt+_]emt+;6DLTaiqt+.]GOhpw~#]19HOWel~#;5DLSaelt+');
define('NONCE_KEY',        'mp.]emtx*<;6PXemq#:5p-~#;5OWelt+_#;5DLSai+18GOVdhpw~|:GOWdls-_#:5');
define('AUTH_SALT',        'LOhpx~_]29Saipx+_]29H[19GOWdw~#:5DKOWdlt#_5DKSah-![08GNVdw@|:4CKO');
define('SECURE_AUTH_SALT', 'VZs-![:4CKRZs-07BJQYgn!>0krz@|}4BJRYsz!$^>7FMUcj$,}3BJQYcjrz^>07');
define('LOGGED_IN_SALT',   'orz!4BJRYgksz!>CJRZcYfnvJQYgz^>07FNQYgnv@,7FNjqy^,{3BIQXfy^>7EMU');
define('NONCE_SALT',       '0JQUckr,}4BJNUckrz}IQXbjry^3BIQYfjry^3BIQYfjrz^>PXfmuy*<6EXfmu$^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
