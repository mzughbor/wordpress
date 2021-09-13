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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'TY3ZTL`xpAnW ikD[IHK%,*fDe~G(Pv|@nG7*Iwh{t,d?q}~1S @gpI:TtBOXIKe' );
define( 'SECURE_AUTH_KEY',  'K-fF;`xaCu`]b+_P){.HanHqhwtg,_:P7Xp9(.r;Fw~]DJ7i~?zMiOg6YfS? ^7I' );
define( 'LOGGED_IN_KEY',    '^Y4r{&>>U),Zmj[cfvvPH<U_uqU+]mnBG{3lir1IGh`]rQ8C(*Q]]5,[L4A)~qRd' );
define( 'NONCE_KEY',        '2V{XL`yb|S[sWaD8MpRFcScWzV-f_8|{mk]r>oa<o.gsq6t)nz:Znd$>c<*Yhlb<' );
define( 'AUTH_SALT',        '8/fJ>k>S=$@6fdU_Ubq`Ba`}A*Zlc:Bic#H>+5?&(k&4tC$exy?!m82V*?g6;mYq' );
define( 'SECURE_AUTH_SALT', 'TDpqLU1OAQ#3-jvLEik9!.V|`}Xfh5x}Q|QKB2MZ:!b,}+IKWfA3HO^``J/:;jj+' );
define( 'LOGGED_IN_SALT',   'f&vTN)WZ9w9ta5.y]sVI9B_z#:1G|3bDR9h)#]]]LtL[@#oFJ_B7(l*RN#($n6@f' );
define( 'NONCE_SALT',       ';?bMHtP3</~_l&/,>|+fi348=i^3>{IG0Y+lo;$uJ,fXzz)m]M01Lf+`rhd#y6ix' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
