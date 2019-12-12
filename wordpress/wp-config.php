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
define( 'DB_NAME', 'mta' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'mKKUZ*}KCsjdiKCSCMm.h?]J;IlM1k&OM]/T}j8_TNWEBGTby!~T|LxQdAmt(z T' );
define( 'SECURE_AUTH_KEY',  '-Ph?D^(-N`PM[`lBMfJ2Zim_~9v{jkF7% 3x5G7o17L)N}YKf&`bA;]%tcKa-.fm' );
define( 'LOGGED_IN_KEY',    ')mU-=FQ#@b/B8K/s<Ls/.cB/W.>?x4eXMNV+1 K$$iHYY(Ar,D`}tn~{pwcvmIv[' );
define( 'NONCE_KEY',        '(SG*M,.%vs)ov,PV|b.S /64>iXW&/H*XUcu]c]BF&(;&%pvAah2VmT-5S:Iw_L^' );
define( 'AUTH_SALT',        'C1(R6AHEe@m,{IW7K(Db*{U{SE^)9EWVtFU)/=vKx@)5vOr72N%]cxlp*gd+inGo' );
define( 'SECURE_AUTH_SALT', 'Pr_:/ilgf/V7rY3dGL0l0!mo/ ;C!^5_(MP@[&dFIUJ;Dc5cH9h AS+o1]-!y>}A' );
define( 'LOGGED_IN_SALT',   'sB{0@DwlZ(vo-;-ne#NFZ<Fb@m#22bc5BHa@GoV|T_yaTiR5#931?%q;Y$(LFv7$' );
define( 'NONCE_SALT',       '5u$:`U|,k`%%e=eyrF5,t/%:N@w`TYwk!!}Q`h=<kUca2N6T!(ypEL@2Sb,vRg)`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_atm_';

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
