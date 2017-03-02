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
define('DB_NAME', 'leesi02');

/** MySQL database username */
define('DB_USER', 'leesi02');

/** MySQL database password */
define('DB_PASSWORD', 'Cathy1994');

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
define('AUTH_KEY',         'kUxvQ+@im-C{L2-x9JKW0#mdDiQ(a]!/-iP^A*v/jr78jHf&D3Fg;LGS=r2/GDd7');
define('SECURE_AUTH_KEY',  'y]+`HtGrUFJ2j%Z%3?(k(~g2qbHv(-:):(@WWOV8_Ejl_6;|KmA$/uuc[3nP? no');
define('LOGGED_IN_KEY',    ':_8%(x-=qC%@i-sKColA>xvw.c,z>;=c)LwaoMMD`F?_2UQ/1DHQv0O>kC:pdd4;');
define('NONCE_KEY',        '` Mh?/Feo[gnYQ#nkl,R<bos/wMQyIB[aV}_Dw<kq0i$4hMZM#;/HJ&p8=n4pg3d');
define('AUTH_SALT',        '7AYT(HT!~i/zCr0_J#C<hMW2+{m2 =p41,^+bwN$]v+q:c4o6V`4QaW1Mb~%+)V<');
define('SECURE_AUTH_SALT', 'AIA|Fs9/h(/}l4nTTG;6mo?*? UC{z>M>}P b?gncBgE`4!-yzDq*,rw%7fL$N32');
define('LOGGED_IN_SALT',   '`T1~V8`n?M~8MwD?1!kGbiXqm%<TF>rS7qi7eHQ`8np2*+B15fhEE(;Vv2{|yX[3');
define('NONCE_SALT',       ';0A6Y@:{Eagr[(qHq3UY=7^9Dndo#87rfJW|Q>7p.&0yH&Jp*wxB]by0]@YLYbm^');

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
