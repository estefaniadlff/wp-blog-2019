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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '12282ee16ea1d0720dbd8160a306cbadbcf751ca356301ba' );

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
define( 'AUTH_KEY',         'NOU(pK8l4g<(9)&oG9QI83<`+SIb$O4W1_JMvKuq4m|a.ZLE7-;R%-P+>iYXVo2i' );
define( 'SECURE_AUTH_KEY',  'c-Y;B-C/|Oj:IrJ2&aD[|0>!|y?7]v;+/G0$Q>z<qa:t]<KzOxWmAEuG2IN;&=Ee' );
define( 'LOGGED_IN_KEY',    '[LM0{kNoJ!Fls:^K_%/%FFEvr3^|C,0O4DiSmT}b^mXn!|Tq9zitV.R_`%>)*i4V' );
define( 'NONCE_KEY',        'R(F6F)IkRN|vx3W/>~Sq)R6Wt^.?[rbS X)5w#oE4@I--bz~y!71AAIEDCv2X3!&' );
define( 'AUTH_SALT',        '-&$yp0LnI{gmCB4oJ^KA][1cki$IprfT#{K%Pu,%ruGb6f]0+hk`Eg[$[#dX0c#b' );
define( 'SECURE_AUTH_SALT', '_!5/;3<mQ:P%`kvxu3cWD%ywj+_/*^*(R<TIDe-AQWf USv+M_]_+r9I){&FEUib' );
define( 'LOGGED_IN_SALT',   'V,(n,(/fNhzPpbdmCNm)/>!My,BD;)h7$nGUP@NFo6 9iQ%&rEkv`Yu^m&B{3@:)' );
define( 'NONCE_SALT',       'vYX],tA*^NB+(7DiI+6A1j5Vnpaw;f5s:yG{}m@Tq[}V?68r@{<nwk[HY{>Z@^*3' );

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
