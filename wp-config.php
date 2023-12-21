<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lobos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' bfw9:mI9U~]3R;pIN+EBRnO<2!nZqjuz)_6Z*J4G2X0d6aY2=,:odRwvB5 h+/8' );
define( 'SECURE_AUTH_KEY',  'H:E%uDg(Ez!7-1TcrG}.n<rSI*>+aV8C5{83`xumDm%Jjxk!yW{()I9G|,@DXjmz' );
define( 'LOGGED_IN_KEY',    '*|V(YY=o+<[y+BP$,Ajdrn(2oA,zVRvWO!%xiwt.%g]2N-/f|j1xK$ws]Eq8`}$j' );
define( 'NONCE_KEY',        'J|$PC(gPaVLMj@~AJ(S4zR}bqV%g?m{1;4wkeU><Ls&cgJ^HS_6@]nlDgsCm!Azu' );
define( 'AUTH_SALT',        '1,pZo&3;o@w^Po0Au^:Oig}p6?puU41RD5q&aJ]/zd*UV[Qta~hSJcBJk}$li5./' );
define( 'SECURE_AUTH_SALT', '8!L6B3h$Kym)nSTG8%_%e7Ibd!Iu;aMn~pYLFSf;=is8R}m:@evQA>YhIx!-TQJ(' );
define( 'LOGGED_IN_SALT',   '6G{MH3zFnq;^=bw,F@t9gb,z]v2>l!C<NGstM-(39gIcMUl91Y3!mBWWrxTQ[-$J' );
define( 'NONCE_SALT',       '^]@dooe+IbPf[b4$qCn7 3ju>ikyA,BeHM}f`ecE^$e^m:frZ3W@pD=1zZ%QOX0P' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
