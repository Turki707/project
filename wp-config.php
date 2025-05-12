<?php
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
define( 'DB_NAME', 'Turkigmd' );

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
define( 'AUTH_KEY',         '&>!ZE==YsKEF%}q/;V-pe$/e95~4i|FCsz-K+U $4Uj?9E~*8gVx88>J8VD8MSWg' );
define( 'SECURE_AUTH_KEY',  '4U.Qd?Ge-ba,1/,*=STo]xKqR.HfVBnhnfiAti`<6C`#vqe&*SZBpMc`eR1.tm,R' );
define( 'LOGGED_IN_KEY',    'DX9!asMtsaYg){wELMea,IT{T$K:gQ[ Bw;$%7Iy%weD9.oMSP9(le*Nh}PvOfoK' );
define( 'NONCE_KEY',        '-cTTle=CQwL^8fDw vI)cH7AqY}H?X.^ST@jmvezMw:^;6)JW<62LT[osi1sREaX' );
define( 'AUTH_SALT',        'y{J%W0_I3;n;5XzkDI+Ge:x nVaay8*sn<1J}hPz`HdbUW*52A/1tHtmTS_C6E<d' );
define( 'SECURE_AUTH_SALT', '_<>h_#h]iuupdFj!cc/TU^O- JZJ?bY}S053z`Cv+1$i9%X,E9V^;k=#69HkM0-f' );
define( 'LOGGED_IN_SALT',   '<.n%nA{}#QUF*^kobF4FYj`AP?4SR|EuxkD*iYTRKxXQ>mz~c7.XfQDDTpa.~y[.' );
define( 'NONCE_SALT',       '{l83sm`[v6;o]HM/-R*^-7ma>tLn0f9b!4n2#_I!Wt&i36e/<Nk]QaU)1Jnr(]cd' );

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
