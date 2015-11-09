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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', '~@/E`=}">W');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.-rDa;/+aZyo1Mw11(CS-?d|%EI]<fHdg3:6W,C_&1).O|bXXT=|$]h$|o-+_u, ');
define('SECURE_AUTH_KEY',  'u$vbJq7;!5(q:7+|&]>s6#W-$c)aY<&{uoi6%B}ib8omi}AyOsTC*(Gg{F8&;/[j');
define('LOGGED_IN_KEY',    'L^DTyJ ;Z;R1fb=6;l<m8RgJO;v=%A|GZx)Z%|2g>{[4..UW;){bOK8YM#o)=*d,');
define('NONCE_KEY',        'Ds5[-[a]cIF=+!B6m#L~E<dcI;w1<P&a7~2Rpdt>$m&BmWBr%E;-:&{YXw8Yu*-,');
define('AUTH_SALT',        '(5TEC8=1V#li,--wlcl-qwB5asu|3C<3KV|UJ) 7[%{HTCW>3j@6qg@udhn<TF;r');
define('SECURE_AUTH_SALT', 'zNG3=K*2mH7!UYpt+V#z`E*bTAL]^RQ.iAq,?Xtsa7sV#x6`Dbg=9F-tO^<p84l|');
define('LOGGED_IN_SALT',   'Ehylr6Q,NiZiog-b3N=UG2_$<e}rZUE5OH*</%-+sU=$Yb$v%]+603LL tKwd[y4');
define('NONCE_SALT',       'JsvE|Et-ABlH8#ZjL,nS.G^m|bGE^-p9r+TSMb_f#|(na>c7])W8x[o-c^+5XN*c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
