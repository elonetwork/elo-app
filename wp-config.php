<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'H3WPLyI&S[N/>SynyNs7_[a9&&IA#qVm^Djn-s::Q#{:_3[Fx5tP*bZS&n2!CTXF' );
define( 'SECURE_AUTH_KEY',   '_djUQ)MrGqg^P,:5Yc={OucB(}f}JSNU0a~e-?j&|/|8jOnw3v8&;C%ay<*3TV+{' );
define( 'LOGGED_IN_KEY',     '_.P]MmgO0?8HYogdkgJ3P&yQSsIXMw]r;$+Gb1Yps=GB.xq~.Ul7KJ>Um^3KJXQP' );
define( 'NONCE_KEY',         'O{ayGgmexU{Xes&:U&e$#H(sG+@FflVAZG`6~y yU4&2HXm=h]is$}RuzdxdIg[P' );
define( 'AUTH_SALT',         'X8uLkL5%K<v#@s bvWLj4ngivr`,a#deDphW7~j,%6y%g?46pq0 78y?741CyFEI' );
define( 'SECURE_AUTH_SALT',  '4X$dV[s=R{ja$W=rc!+(pB+I-mbC-Ir_%XB.6 +C*%IhnMCthyGE#wNKNc9/OzrC' );
define( 'LOGGED_IN_SALT',    'G2vbzjdCnRWo;<>$97]ZrJ|wg,.9(-lL(rB{,h43>*],b;8Ba[U/47 >xi*)*PN=' );
define( 'NONCE_SALT',        'J~Ayq>yTq-D&`L:cyHW3|!2^6!+yJH7,HK*#y7{|?{1iP TFxOjh8}B:oskpo8><' );
define( 'WP_CACHE_KEY_SALT', 'KVf0g%;#a|e-3YZ~vd`V:R16yWdcT*Ut:k4[0pZ@Wdl/dR7l|4K:|d_!4C>;o3=?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
