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
define( 'AUTH_KEY',         'YQ*qtNfKw8j;kAt{pEo(_t0D:dooF%SU[z:nyeUD%hPN0f;g ILcsAq}BL+f<sFE' );
define( 'SECURE_AUTH_KEY',  '5jl|o^M:3W&a!za qLP9+wpp3C)$O;wrykc<Yjph|%||kPlj^1J5BV5Yo{,3TGik' );
define( 'LOGGED_IN_KEY',    'Ots aqH%[K8!WhqysH)ojv{U{rK1wit#`{]Vx?.q7(#BHE4#iaZs3%#l)6^{RFVm' );
define( 'NONCE_KEY',        'h{CYv ^2LJ{i/A=j9>ha.J3AYvv;9(RJ:XA>ZJYQ,/-rA^0lCk][+z]v&+#vZ0DP' );
define( 'AUTH_SALT',        'x+~iTcS.OMlVwBlM({FbUK:I#ca9$~~B jn#2tCvvR(nt&WFq0`?_{)tzxE>bTc]' );
define( 'SECURE_AUTH_SALT', 'YnS3b{F}q.scFVRcLr`:kUnJvkk(`d[=tdL_6ShtH#aF3_Fp[vbX8RNNsO V:8u/' );
define( 'LOGGED_IN_SALT',   'v{(c0PN!%gM[lN-#2wK;IVz8=D2/lnQ,hMXwJ*+#%eHvNr$j`cf,914oUuK},fCn' );
define( 'NONCE_SALT',       'itpp^j;E,Jm5[ab.;<@w[>U>n&|7?9<7<K+fvsfw0Ag>-<k-m+F8;=?^,~Q+)1.8' );

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
