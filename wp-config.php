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
define('DB_NAME', 'id3069306_vblogs');

/** MySQL database username */
define('DB_USER', 'id3069306_vblogs');

/** MySQL database password */
define('DB_PASSWORD', 'vblogswebsite');

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
define('AUTH_KEY',         '+>?);^PR-Cl5jEk6gFnDV~gRC$8WX~JFdb#.$fo$kcgBbS]H5i?:~(I CN[pO,VL');
define('SECURE_AUTH_KEY',  'ooPlD?~zR;E$B,U+~L[/GPvQ|Z7rn-)~,496gOrP;@Nhz_|st!-xWl>kA@,=k=7t');
define('LOGGED_IN_KEY',    'UO6@A2}t`~d i8#<54[[|;0]9K} yuir@bF<_Q7.Ly-q{QiQqka-25t@&[e.r#1U');
define('NONCE_KEY',        '2ep7c*[E xPFYVU&VW7Fz)mfE,f]iC[JRBzpb&+IG?S+q9Gh!cFHGL]nl2+L9k!:');
define('AUTH_SALT',        '+EabAWM9,&MN)*8?wLF#=8phKVWOQH@49[2s5cEf;w2>kHZhp0)iCXC<BtpmFj_#');
define('SECURE_AUTH_SALT', 'I|zhY?4AYM+8KS]cZGpADfKcmqZc`s32P|c:A[dBSuQ]tu<^~/^I#LoRE6BZ]54h');
define('LOGGED_IN_SALT',   'U-A-1=8}JUQq5b[Xo$Rln[US%1+F/|7A#53RVJ:}8&yq@|R)pN%.8B83#%z+ mCo');
define('NONCE_SALT',       '#hW<[74s9qx&+TXS7?Ez>2/uZl@[!7j5Q@$jx=~`RZ-Lf2_;H3]fPlbZ<Z.&*Z7T');

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
