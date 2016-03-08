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
define('DB_NAME', 'ironstreet');

/** MySQL database username */
define('DB_USER', 'ironstreet');

/** MySQL database password */
define('DB_PASSWORD', 'ashilamochila');

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
define('AUTH_KEY',         '#:$wg!R8s/gHUwJ -U<(%6JO1Fwmug<LTR``iL!.?tt!1^iBXGo;=VaAi4t4pqd;');
define('SECURE_AUTH_KEY',  'ZxX%1{56qYy=e>Y8Q~AIlTfQbyd1(4Bx[vP.zW<?>+!QvU-^GL<v*Q-=pdB]RN?t');
define('LOGGED_IN_KEY',    '#}8NFi0fa{_EC6n{fuDH&ekyg}?,VgL|6AMV9da8UjVN^t-e-8juGn8f=Q`)]1||');
define('NONCE_KEY',        'LJl, %^+y=u-qUQb=x^`-IS8uK]B9+;x3Q-O|27*<t.DQtsHIZ/mHek{P2g>0a^p');
define('AUTH_SALT',        '2TUS-dg5){{P[r5a}]pug,$nL7_J;<NXlcgsqXM^X7FTcGV_WJL4.pi#J$tdr $K');
define('SECURE_AUTH_SALT', '/p$=O(R<F>I~/*E-;L#;ezH1W}0gH4t3MTRREg>N4]0K{SayYUXWr+7Df}K[+J!p');
define('LOGGED_IN_SALT',   'KA#HzD[zFl:#46E|5h):-!TOi/+jp#-N-QH$QlkN)?y%!g`7Ql.d.,lc1YnLdsyj');
define('NONCE_SALT',       'W)Pkq}K|N@+eWU3]F#|HyK#L_to[<]<PYbqWZNBb;|U3u,^lrP%<-&>%-@W3YvT*');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
