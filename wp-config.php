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
define('DB_NAME', 'peoplest_soul');

/** MySQL database username */
define('DB_USER', 'peoplest_soul');

/** MySQL database password */
define('DB_PASSWORD', '6)5p4S4H.u');

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
define('AUTH_KEY',         '8cj5wgc4hzufbxqzpeasaznboqcfpfoahu1llxgykorks5ygom81vbyleauo7xvn');
define('SECURE_AUTH_KEY',  'x7avvhriahnfstgtypjywkbidcjlnsntryexbgjfookhbdauck1thzxtp3cgaizc');
define('LOGGED_IN_KEY',    'c15koq9gzy2wl8twi2uii46tt1izntzajh2xahrcycli0krojlu8cfexgtqxxqdg');
define('NONCE_KEY',        'qhgsxx58c2p0dujcrmptjv1igtdzvng1ezqthuksnkeeqmefceoqyzb1qzuqsrqb');
define('AUTH_SALT',        'gp47zh5taw8xrwbl7fqxrzjzh06b3fd9xk4akc4zfe0ytptubad7f1z0lscbsmra');
define('SECURE_AUTH_SALT', 'weri80cgcu2rcjljohpd57grlhf8fqs9q7ydznkizrux2trbz8ha9h8ej4gcbyef');
define('LOGGED_IN_SALT',   'ut6xoeeccmxq9cngu4yhkiuhldvffotge1hbjx9ememzcw5mbhdybnyvunbjrqrd');
define('NONCE_SALT',       'vxbmymjc3mrk7z9r7xnnhpiauy4airscg3ycaqatkrzc5rblm8bdzaov8pdwiqi5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpjm_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


//Disable File Edits
define('DISALLOW_FILE_EDIT', true);

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

