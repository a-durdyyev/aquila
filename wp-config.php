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
define( 'DB_NAME', 'wp_testsite' );

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
define( 'AUTH_KEY',         ',sJ)jv:]-K;,yj:YC4;N4$Lc]fnp[#_;!ML`a5-Pz+;tTDt>K>!PR1^)*qI/ilS[' );
define( 'SECURE_AUTH_KEY',  'FaO/U,6(**}74,^7f^}9~0Yaop>:NMM=J>ch9D-|]QGrt|E]l:~((Fq,[%z&Ojz/' );
define( 'LOGGED_IN_KEY',    '!FYhW2ND;Qd%!@!Rx(X4e-T.]f{~]qox> #/&!{ :##S7M;nKckhaha`BhA-daUB' );
define( 'NONCE_KEY',        '!v~Ti)MIo4{l*E&Q/x{sC:Nn_TzcZxY2nB3+Dc6%H^y%,~VMby;M3oVa)IUDeFGI' );
define( 'AUTH_SALT',        'N|9dt1F#=C`lhyr8f38XuCPS/F#$YxmJ|Wn7$sz($B?[EWZ=kXu5uIi3Cbyu$FJB' );
define( 'SECURE_AUTH_SALT', ',c`e(a:G9Y/&2d06*w|[]jm@M_bYs5%yH]6ZnB%^R4ePs~(X:J-,yl;KG3KOMK?K' );
define( 'LOGGED_IN_SALT',   '{9w4n-!M:&<Dq$CEwu9e!H/(Rp_xSge2a^!^!1/*ZS[A&Q|?fpdp+B/X/GX4NZj(' );
define( 'NONCE_SALT',       'MRIp*BX//9J#S^C3FRvg0v!m}ZC^87-tu_|7I>Lqz>M |1bL5jD{>TvWF=)vWLvb' );

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
