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
define( 'DB_NAME', 'dbf8a2mcdutztm' );

/** MySQL database username */
define( 'DB_USER', 'uz96udn4p8seq' );

/** MySQL database password */
define( 'DB_PASSWORD', 'avdhy2r8g2zs' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'sHx.l^q)n&[mDJM3]6QHb+5+2y1_k{?!ws{Vh!r!V%5/f],[`~;mwOG}LeL4(sbN' );
define( 'SECURE_AUTH_KEY',   'p(*!%(PM9&U*(xo!oD9ux_(fB?uc#3axj*uw,HQ._EX#+kH7K.-4$bC=T.>@.D-G' );
define( 'LOGGED_IN_KEY',     '2)Qk_4:i*oukL@b&<p(A*fP3G-W5q9D:D~7Q+4D%DNFQ+}b{Hk?pQhjt0x}FtQ`>' );
define( 'NONCE_KEY',         'wLoG(]-d#)e9kOZ1kU<KqgHm+9`{RZGV,f;XwU.QyY<@Dlw)pHeMn_%/+0+iY:YK' );
define( 'AUTH_SALT',         'O<EywjS}[qHePw@ I>Rb 8xLE2tIt{4Q_;-X1Vz*e`ZD:8W%)OTe`u9=sq}ESA1b' );
define( 'SECURE_AUTH_SALT',  'pqsnr?|z (:I0P{4vvCGREk_q|*q,s~sc^7*PI95p$N:,d|@2cUz,saOOICo,I]n' );
define( 'LOGGED_IN_SALT',    'bs`m/d[w{{4|:`5TJKJ^H]?*TiTbNxPp Nh1Xx0HN>Q:T~v,k8SJbFb@#v/y!#_D' );
define( 'NONCE_SALT',        'lC[&Ga6d9im<(Y*%9P}C#-96*N0S._z3K]>PH>sI0l5t#v0+cZRAA`&v13k O6DU' );
define( 'WP_CACHE_KEY_SALT', '%s- a3Jq;_OY?gPF2.b,2hJ>:Nq&2RnQ2LGFHmmte|3Fig4=!L]vh+.;?=E7$fG9' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gjw_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
