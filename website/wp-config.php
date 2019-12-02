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
define( 'DB_NAME', 'id10219352_wp_afcaee3aa5822f3688b3e7eea59091ec' );

/** MySQL database username */
define( 'DB_USER', 'id10219352_wp_a8a27d114caac3a0ad9c639896ac5704' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a121556440d34fb6ccbe38b688c2602c7390633a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'K}m9[~)(VwZzEDe|nyd-O;g=(;OFi[D1i,avAu}XD.|HxJuaXd3pF=H*K4?4x/>9' );
define( 'SECURE_AUTH_KEY',   '$e:6xFekmZD!JLdPw8O/!wZ^&/h0w)%*lUg&qd?}~8qcYy-6zXPxO|?ihgjp!!/=' );
define( 'LOGGED_IN_KEY',     'vsBQs0kM8,Y}nNp>aq=+vX;Mgy(>a,;]H`N7`;zif?O<eV,k(W0 W@|[Q0`K~.z3' );
define( 'NONCE_KEY',         '0[Fa<vZQXf!0Hob$]MU+xfJ[Nc_Pg9gbT%`KCE;18TygZhJ{s*Nhsj|p({+)DSWm' );
define( 'AUTH_SALT',         'Mv.?XTaumfW5.HKD!+~3_KpHTGD{S9C9h+g_S3f]2T`GNUxXX:>9IjpeXk-4o)FU' );
define( 'SECURE_AUTH_SALT',  'I_Z/VwM#TNm{`4!(g3K,e%k2+?F`B!>q@S_iiC9)6~P_uA,U^$_~^;8kub)kf$/2' );
define( 'LOGGED_IN_SALT',    'kk,xFQ:5~]-V@7z4pE^+%V/tTTkH$dJa@Hlt^n%8PhY0o}~-5AS=?*7Tp9}2d6X(' );
define( 'NONCE_SALT',        'sxcv([9gdF0p{JBF*|O]UfCH%)K/NFM1|9.g,OuS?Q/][&!MTB.DPX9wT4A~eeXQ' );
define( 'WP_CACHE_KEY_SALT', 'v:lBbJ#k8wdmu5N2Zy_N~@*(4IkKp,vivwc{4hkc/N;Xiwc1bg5a]}.%ipkF:Js%' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
