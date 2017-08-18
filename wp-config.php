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
define('DB_NAME', 'vamosenglish');

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
define('AUTH_KEY',         'gNKLu_J`<qKrYGS4 eS3XAWpq[`SzcHvky*r-L|^XiP/^di:lz9qt4:5eT/Ij<Z}');
define('SECURE_AUTH_KEY',  '>:3#!Oj+YK$~ShgBB(M#_D9Ql%VhR{K!$BV3mhejM;aOY`>1$MH>@*lks;2dj/63');
define('LOGGED_IN_KEY',    'm}=jAVw+!,InI)+9{w@ey}ps)!UaKcEUcYyz?7BM.[w@DK<h9m~Gs DtKu1BwDGy');
define('NONCE_KEY',        ']Z</,V<p0pM%uh]~+H_X)~7w,6*fO:; Ji[q5mMv_~Yr}#`}WMtWydmnyN{a@nh,');
define('AUTH_SALT',        'uIonWK EDk4%%C2yZEIU#jx^>-7Xuie1=@`+$yU~d}GbqV>O@^bj*0m]Wzmr>,3j');
define('SECURE_AUTH_SALT', 'PFgQ-s!?M`^-/SE+,<GS>h3%Gn@1WxmpAROg3]%IU9OuaV#!>KN-5pYfV:Ef8Rnp');
define('LOGGED_IN_SALT',   'y0eHbng;N7MaCP)i*NpO~)d?XcR|gOJ2H;9D(|EA1emo6%~zro?qE=t=8Ku9*_F/');
define('NONCE_SALT',       'S_XE!R:LT!Tz`j ysG-%mIbK?quPNx}{l}+PDeM|;c0]{aPDcLtLaOAgw^$ea>d8');

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
