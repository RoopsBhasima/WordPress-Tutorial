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
define('DB_NAME', 'rb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'L%qB`j6l(z4>U*|td9*>| 0qSh~&p3B0%^Dcn OYo%aXT@Op37$:z]Y4@0[;%,a5');
define('SECURE_AUTH_KEY',  't5?g`H?FFIYYXc:a/P->:mr047Tpy&=%eu% PZIAy*[ ao`GD5o|9?P*$!Rq-(B+');
define('LOGGED_IN_KEY',    'EjE96&]tayml4g9xK%PTeLzkr`rV<>[{3%gCHxF#,P{KmwqBv[fZc^G5ZuTF}L[7');
define('NONCE_KEY',        'V.S^ZpYR_CL}.NTX)M:bohl$8$mnG<Adk]fHZ`H&i7V{cLaZFn8;k8$:=/yZ`c@f');
define('AUTH_SALT',        ')^14d=X!|Kl3=&eQ5#D*@]^eCM^?@5A,L#Y44BbHz`!RP.c3bwlGv9TFWWeJWE;j');
define('SECURE_AUTH_SALT', '|xYJz2h)Xt+cqJh5%(aD-? Qo?:cafS#iGb)B[`T AvU!~st#P$M8zz$~*rsn9Z)');
define('LOGGED_IN_SALT',   'iUK6tCKJJW-KRHR9@P.A;eidb!}nHk` Bi;I6mxV1==XnWz>;;P?+iMe{4!<;f?X');
define('NONCE_SALT',       'IT!<Wws)tn=/ZG:o:Q)+CoDU]zxqfe65,3+w?FETwnL4izV0dWc)E<6?#il3q-#U');

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
