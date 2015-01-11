<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mrchandler');

/** MySQL database username */
define('DB_USER', 'pdouglasMCT');

/** MySQL database password */
define('DB_PASSWORD', 'tld411PLD617!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'J/h()R]]CwN;~=+=y>P)xOBvNw4G}S^|GJL~Bw$fMNa[dz,BVDT[0f7V){)DUa;A');
define('SECURE_AUTH_KEY',  'tA2mb1on -wOzXwPsj1&woc^kca1h~co!=~GdC}.of5v6/D24FsUq)cw)eowL,z<');
define('LOGGED_IN_KEY',    '6(ti2PVhtp6Ax+.b^N8_xe2s5?#c;63)HlsVpU))G7Gi.;0N2K#]N@mw/dksdDzk');
define('NONCE_KEY',        '6 fN^2i[V-.eHK$,..0#.^~X>ic!`u A#l2R7vlEcTR99a<VD$t`iMY~Sx/So0H{');
define('AUTH_SALT',        'buZiK)01gL:@KbxMnG^O{Wuc$*XjMy331.B|XJ]*/%+fr(*Ko.7iRx|C045/f*XO');
define('SECURE_AUTH_SALT', 'P!|}y-:s]AyY|}^Z++`~hv/$OlL-2#j+X031Wn}]W?$-j>DG2m2DczTr/$;QoYT&');
define('LOGGED_IN_SALT',   '+{z1f=3w~8f_hzm(nCgGa6- iXCH1,h45j|KM~5Xv*o^24RbH#6XkLI-g1L(x9x.');
define('NONCE_SALT',       '5EUdD(,~]ei(T=)|]i<-9FP Q8J@0Tr|%#4x/5/E-CX73({*Ve`>HQxXjP:<!%F`');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
