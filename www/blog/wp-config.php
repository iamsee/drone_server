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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zhuotong' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '-mqDHa.}ysD)e&A?&<}a13!QsY|kv7D3dk|~f5{;v2Dj_fG_h~;7sRl2#vmx0&d)' );
define( 'SECURE_AUTH_KEY',  'Wuad`I}?@VR%Q:b:)We7/Y/wbL)@s|b-gSO=E08%_BW?kPkACVZAo0d 1u,;rC8*' );
define( 'LOGGED_IN_KEY',    'TGaVWzmoM06UF?vUI$nR My66I~.%K/|3k#{91E)]XFo@/|TX,aE 0xpX:mwFze,' );
define( 'NONCE_KEY',        '~{YxFJksfi&`[sx#S.rBPWjMHUivP4B*vXh#e8}a1q5*wVumTWk P&kPZ{-[X@z;' );
define( 'AUTH_SALT',        'yg4OV5+b,XHg<D*2jBZOFfyx5(U&MG j:%rql3^4!pvQTIi8}6#kN~h3w+pF$URm' );
define( 'SECURE_AUTH_SALT', '(p/sV4/;/3`)uW[!_,:5Z{CO=t8[]Yn&F/9IHvyop0vrQ6goztc{F7P` sopjj`M' );
define( 'LOGGED_IN_SALT',   'H4;G/47,;3@v&N[}$S</tkrU5Fsx8~:l%@*R$89wczsoZ/KobzsuM57+A90;XiqP' );
define( 'NONCE_SALT',       ';:p:X7~>:o<2:_~)*oYWt=Mf^a5*L<{lmTJJsE 17L,PPU({;4<|=.J~c*1$Ob(B' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('WPLANG', 'zh_CN');
#define( 'WP_CONTENT_DIR', '/usr/share/nginx/html/blog');
#define( 'WP_CONTENT_DIR', '/iamseeData/drone_server/www/blog/wp-content/');
#define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
