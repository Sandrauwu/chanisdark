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
define( 'DB_NAME', 'chanisdark' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'db665c405e10a72408332f508932ad6e8c70a01f409a0706' );

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
define( 'AUTH_KEY',         'kYFe*{~rkY8;T_F<3-jHfuq;=Hy[!Vvp[z8wtsLNOf=4wsw2X3j2uQ9L]j{Oy5+z' );
define( 'SECURE_AUTH_KEY',  ' <f+Ek@%$Lp:I<V&Gb?ax?t7{Xo$)Qy3z8LMVDU>j M/+# eP#}phw.ao/v!w3J#' );
define( 'LOGGED_IN_KEY',    '}l1Sf_4?|nc9w4_.(AUr/wbK_^k#W4^`{<7.oET1=oEFi+Xf,=2$XF[^D^x2yy}7' );
define( 'NONCE_KEY',        'NTc(nWns*t<;vgn_XQh1OEN~np}pm!)<I 99e)MSVd36:t*1?pmPCS$wx7+QC4W,' );
define( 'AUTH_SALT',        'c]Q^xLd4o[+S4OBo 8NV`,Aa2MH(ap/:gymQ>#,anh(Wz#B.X&FWR[_m;&^q68O$' );
define( 'SECURE_AUTH_SALT', 'qv~nLM_?9D``}Z`:B<qC{k*7@,P%+b&/vdZ(cGBMEmj|OM;r|QH2ff:WR_Sa=mnM' );
define( 'LOGGED_IN_SALT',   ';%}xxu/@u,m<rs:Po+[`)Fb_sz(9pXAuI]m4} ]IHB8W!*,{N-79o=_6[|-Z2yfL' );
define( 'NONCE_SALT',       'jWS r#,u.8<!=Cq09[A.1iuC@L6_l:x1UOYVH5-692+4:Jxf;Mes1-ldE@q=31-m' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
