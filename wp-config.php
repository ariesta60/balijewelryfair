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
define('DB_NAME', 'balijewelry');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q+eg&#y(K0{29&wS$?#p0*TL-uYd<f&e`(T$oYH iG!LG$gm+1,G-jBAkZ9U+4-i');
define('SECURE_AUTH_KEY',  'ac~ey2h{KIU@xe{lH4,xc`7x.VtVs!l7E`-qI/746!b-WUU[l~hqjD=KinjQ B^X');
define('LOGGED_IN_KEY',    'fWP(_(bw??A>R9Q^KK`3F?SvGJl<!*|%U8loaYVy-t?5|mNh9e80FR[OfI=$gZrs');
define('NONCE_KEY',        '6,$@nzl-vr/fElH`K(wqdXk^=B0Cd%Nfvk||bJ@XwrbUBd:YH$Z[KHMti[3lSFT@');
define('AUTH_SALT',        '!`TJv-T+nc>g<gD8EKZ;*?C>[++v8dv`Oj@FWqm~2MXhz7)MOaBkVmV?zU`%p5W-');
define('SECURE_AUTH_SALT', 'j`h-k7Nhggx^o<_JOKt>~L$YwK0/f3*naTH[euUG?`HKx=Cw*CrH`YXD)aU`HV}A');
define('LOGGED_IN_SALT',   'YEKthkZB:G<tCBOu5M@&.EO6eR)U9lr,:LLhu(1*}+?Ig e4H1wX_R-.Yki%;oLf');
define('NONCE_SALT',       '.$l<{(e-yk|54ur4dva`yPf+T:[td;srlpGTJ*I*V(OHeoBwUqz.BE`$}NoDaG_$');

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
