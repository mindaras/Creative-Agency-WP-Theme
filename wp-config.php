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
define('DB_NAME', 'creative_agency');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin1');

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
 define('AUTH_KEY',         '9Vf:2h;x($Cd%/{O;m=1F y|{#x#1WQUwy>4dHhA||M$$W!_+irn+lp(C+GGL<&Y');
 define('SECURE_AUTH_KEY',  '|#($j~0+xpXS88<;=ry@HeR%-tE|8=%5jj,b*JO++g_BC^A.rC2!vCLEf>%|`48]');
 define('LOGGED_IN_KEY',    'kAy3g]-s`>c*|]`hIIMWKb-|5Q@i/BSz!]^W,-#k;q+/XNu(l]+C|wr+ggao)+?$');
 define('NONCE_KEY',        'VKh6#`Drs%3fah8&-MaCa=$kP7R6[EW2-Q>}r++}sW+]Dw(sI?e>TEuL-&%3-)7j');
 define('AUTH_SALT',        'j{(bm.$A71H>!])OIzD4-w.eVBM|1>R7Ko<@;-ew:/REDBBj4kP)nd.]y/tfiA!t');
 define('SECURE_AUTH_SALT', '>D^>c|GrLW$L[.4@Tu6kMdJb4(|+<F6Fl@$n_bhwXXKal+d&B?bdh+A*xS><}Q}w');
 define('LOGGED_IN_SALT',   'w8j5>*|Q{8OozRJ|il}rK>y-Ihz>dD=1PbN%Q?}e:rSFH|:)}UEUY xa5$MinXdf');
 define('NONCE_SALT',       '|,h7aHj{|kfCrZL)+%9DhWA$gNy z?}-yPh:648GQ|<>XIQMCYT07 +rT>P,ktp%');

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
define('FS_METHOD', 'direct');
define('WPCF7_AUTOP', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
