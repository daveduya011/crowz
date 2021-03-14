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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crowz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c;ek#zyXH>?Ou,UqbLgizH<SJ0{w_{+qB9}_SWp<vgOBJ;I9v$:w#Vl$ut_(&}/G' );
define( 'SECURE_AUTH_KEY',  'uaD^Dao.aOSq5rZ[JboXX@`z0%]wqU<aMifth~lR:BiJnUft L^m}71PR^z]+079' );
define( 'LOGGED_IN_KEY',    'S dEZi++8BrzQ0+zklt+-H-NV6FAf,Ug$_]6dNIOy9eodeX.h.>NI&ramXtt81Dm' );
define( 'NONCE_KEY',        '|^ip;./Db{+4Pj$^Nyil(<FBd(eN{J!Hd[gqG2|$fwl/]NlDJ]_J>oc4!0oMW%si' );
define( 'AUTH_SALT',        '.q1t]KH(3)Pd3lB>~sg]N^@;YvK3 RlROGLo!)FCtUqPaEro4XL7k=2ypu-T|@L@' );
define( 'SECURE_AUTH_SALT', '+:,Uv<9WfSYMwj<p{J#9& ^!eLi+E@@1;xXWS)NRw:|d5}3nkB>~<z+-h}dtR+pu' );
define( 'LOGGED_IN_SALT',   'ojti:tbM@$*CSy.1EaP@83-S]Cw.5Oq9!Mj1H03j?<]U1@+vGMMOq-<O1cXf+sib' );
define( 'NONCE_SALT',       '$juI%p]4BvRxBs=S>~v:n|q 7Z<uj>pP<]Ehn[0^5T#F 3zV:vMAPg@sa>^eoY?9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define('WP_CACHE', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
