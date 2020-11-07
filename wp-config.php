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
define( 'DB_NAME', 'jongkreatif_' );

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
define( 'AUTH_KEY',         'SkV|b_$9GFhC&^cCrbf$?A_yvVale#L*x)uT#; >{<R;.CU#FC9a%NUC!Y7ZS`M1' );
define( 'SECURE_AUTH_KEY',  'XLQv7ez;[Ps8oq$T#nq6+YKJqXJy9- >,GJux:hF7:2nag_Ls$Q6$DM|h;Pe&%}V' );
define( 'LOGGED_IN_KEY',    'k@:|-/Bn!%ql{b-+H<v4qpFqhln.5XMFwz~]&g9*f,q!(cXjR;~H^/*?G&*XrJnt' );
define( 'NONCE_KEY',        '|QhWlQ9FzQTXP`r(aFNqX*9:{4}{nppV):Tzr$iE46XZYp>h!NQtOR~tC=o]pK6^' );
define( 'AUTH_SALT',        '8v49{,C.Zmw=]8&EwO_ob!c`n6NT;p<70w+Y&5)ZSM7?I.~A6VO7IMLO/dAHN@#T' );
define( 'SECURE_AUTH_SALT', 'Mtk?zd<.une8X*dD~J5=GwoH,w~9RVPlZZ)1N/)30F0}c)%NxImi^TDCU1x<^]v)' );
define( 'LOGGED_IN_SALT',   '%-Ym9dFuu;W .P~Jm*N ~p(bm%3Ba]G+XLD)o|d+Mf AqQe`/Tw[cjxInz7oo4r ' );
define( 'NONCE_SALT',       '=G3Fts)Fou`{$I7Y$U6axTqH^f<yMb`qsIK,38^1E +3.u}4]%%n]1h;7u>51vx7' );

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
