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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         'pTHl-@v4U-{X sX]{`KZ@^1{T/lrYL6=Q3Jf/re=ty!o6hp$8S^[USy=1>{GKsS9' );
define( 'SECURE_AUTH_KEY',  '&!.?Ih6I,Lr:1QSAP#b535sO2N{y+!W$-=kh{NdL$Scj`:h[rAO-[Il,x;S*ZYJt' );
define( 'LOGGED_IN_KEY',    'SqJBf.#O|.1#OT1/v>w|j}Y4~)A(]A@+F15?&?wNsk;)9?K$REZ]QCKb3lka@trk' );
define( 'NONCE_KEY',        'Z%w9S_I1je+3iz^9:=]]=nV[u+#k(UtNgduNw|popYWBw0}<YGtOJIYr0TXHnNFh' );
define( 'AUTH_SALT',        'P9|TzOX<r[,6>YkA<zWDr3}SD;1p/sxVd^p=]NwjrA60G+%)2<}ow}.ODi.A_O7B' );
define( 'SECURE_AUTH_SALT', 'v!dUEHYB54K.Wd%y8;7&jR** d<@h8,-^EU=Tftl+AdhhcFJS-}+>/r:r6z*Vv=*' );
define( 'LOGGED_IN_SALT',   'x|?NAZi1[M)n$8io]=#ZL=8M!xb|PO*Q]jI2?ThOP(4c>GzSAzha15GNX}5%I{C>' );
define( 'NONCE_SALT',       'LO N]Yzz#$8)!s(1?_ZWVqk|5}MG(,8OCT=}4EbGnBKu-oa?,4h_Noz$iRs1/j&!' );

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
