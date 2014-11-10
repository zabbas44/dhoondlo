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

define( 'FS_METHOD', 'direct' );

define('DB_NAME', 'shadi.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'a1_7QA/1;^XnvON+=m/nR0m/%-B[%(qiW2@U|b.7<Q.yZ%2Fy!tJ9~f8YF*ED:){');
define('SECURE_AUTH_KEY',  '/U {oA@[31!bEzeCcvK~TzcNGp[m2OW[+.q!W@qnH%Nl61xB![,>W/ilF47kq0q)');
define('LOGGED_IN_KEY',    'O!: VV]^$~hNG,1armI^up5)b)/<9WAJ&5w=njUuc;S_W|uB->oAbKa?deWd1i8j');
define('NONCE_KEY',        'A9VAZxvl+X:|EXmyRD(b&@Q_1U[]N%9Oo~t7gPho5Zy$QY+B{lljsgH%py-[!G3*');
define('AUTH_SALT',        '+Qo`JYr}Wcm84dCSj3,z7`=*{O=d5-%=RP*BHj&]U59 u1uAQ!>;+yv_4[ EHdG4');
define('SECURE_AUTH_SALT', 'N/c ,MNLK1)E38b)@45brL.,%q_]]~[&NnMs(dja8((FC-+gMF<]%OH=.E;bbQBb');
define('LOGGED_IN_SALT',   'x@?Y@Jw<}>>4NL(S,SH7(m!IgO#Fd7<*#4V9lxcBcI)NfpB.Dn3niL*)Dt$?Pq(+');
define('NONCE_SALT',       '/:6PO@mCPsBn;8uh%LuqG6Cp=$z^Pe#6/Asgc=pA!<O?Q2SB+]Ox*BpSWl#dvlx#');

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
