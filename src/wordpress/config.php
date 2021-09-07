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
define( 'DB_USER', 'oscar' );

/** MySQL database password */
define( 'DB_PASSWORD', 'codam' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-svc' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '>b-wVX,Yw3Ax+AsKzj243<P({bLpTr 0,O/n[ ANe#q{}RiJS!KR2p4kI$s,BgOg' );
define( 'SECURE_AUTH_KEY',  'AClw[M!SF,r#QTgY}}?:Sr+{/{WdOk26$y*37upjiuT6 Fu;l+p7|Zp:vOyIm!9N' );
define( 'LOGGED_IN_KEY',    '>{l!kO08UGC`eGE/L.3LQuN}9q<Yk`!O{nkm1#cVn(_oA7&RFr_(.+!Mvqy}dT!I' );
define( 'NONCE_KEY',        'r3&oqBd(u&;FZ9~sDr$9 k-%y#4vkd_4*?#i]j EF%:TYDya|B**Z@%-h?-],80O' );
define( 'AUTH_SALT',        'MlW:phimX%2$6I&:y+*(x+D}kaK#`aU6m[&WjkdZfc(|P[@TKGq%&S*l$O&u5a&i' );
define( 'SECURE_AUTH_SALT', '4wd6CI^%@+-y=>ZuEFd+@$4LxRZ4+}Ukh4uY(c4xt,OV:U72bAthx*%F-GjqmIHr' );
define( 'LOGGED_IN_SALT',   ';]ynH.,]|=>rR4F:FLw)])2YLgvxtQy%U<_eS_ *b8KMf9}lY[)~O=G:dwBs{6Mi' );
define( 'NONCE_SALT',       'AYhF$erA<=Y~XNj{8:t4oLKmPEB{31.o+_O%+(5Pa^^5:r[Vw16bS;j8Yexxz%KN' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
