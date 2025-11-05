<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'TY6E1CPwzrc05PJda38Ub9Z6OaHvW4fgd18v9kqFZUWhB7n0rex3q5mPbwgm7QOK');
//END Really Simple Security key

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '69(,9}we0eTvtlu$e:q0C[q_oHgxbaJ+dBU+V}7R_PI8v;c+9SpizcrM7Ck`7.XK' );
define( 'SECURE_AUTH_KEY',  '8FR%&Sai9F>.IFb&#[0smi5kkHiX1pKcPnaOm0yQ-w^?0)3A<=`Yp+jZn| dBl+6' );
define( 'LOGGED_IN_KEY',    'MN8fQGhBaK(!Lr=7fDi3Ks-BCH-<LCle}mK5*N*;iiU0hO&x47~DxlZ_TZ4!OAW>' );
define( 'NONCE_KEY',        '7&(RSx(f[Faqi?Cw@`DkELf3,cwJDrU7:j<!vPg|;}Weq2ia}+EnhS $d;*d+_4r' );
define( 'AUTH_SALT',        ']f[bIl&`;HW]-Ew$7ppV;am>{w,)gv(+DZfUZoDjj]*-,i<c [PPJfZXsZm>R6@^' );
define( 'SECURE_AUTH_SALT', 'fikc)6$k#3v6<94Eajc+fBZ/^#LzZj*m?(z[!8Zg9Y1Tr|sANUGvb_V87>@$eb:>' );
define( 'LOGGED_IN_SALT',   '-E|X/Kq!uQDLen/gUU+^7@DWXIBYPnagFjISP+q_^^M`x<HL;Y;&k]P|9sbJ*V(x' );
define( 'NONCE_SALT',       '(R2/Ky8&0>u5^0On|l;[])hUxT[U|US{&uhZAgy@HU5(!Nm]&t)s8aL~afoiz)^f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
