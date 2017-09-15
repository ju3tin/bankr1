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
define('DB_NAME', 'ibmx_a8869c7fc7a3ef1');

/** MySQL database username */
define('DB_USER', 'b547f1ebb93f31');

/** MySQL database password */
define('DB_PASSWORD', '6c2ad392');

/** MySQL hostname */
define('DB_HOST', 'eu-cdbr-sl-lhr-01.cleardb.net');

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
define('AUTH_KEY',         'Dx`kLRrK81BtB~(Hc`QMyG[lfL.iu,o:S7bgX>l+RhgpW&$kfxL$UQ1n-9BLm&wb');
define('SECURE_AUTH_KEY',  'eebG)h@gGS Opv-Pj/j+]_m^*DY}*95h,Hq3iaH#|@ 9_ehjuM-HTt:GBr%@0Qp#');
define('LOGGED_IN_KEY',    'Nc4U#MxyyMS$>H$o Xw%Yfu }^>+]Ti#3.R>LF9S_bGU0 Jwx pPCVX/(DOyLvhP');
define('NONCE_KEY',        'y}dx`z+`mXswv-(f_I^V]-e=@kvc0lTnX-EEEwd],tiMAF4RjVt>/KXU#I)t6Jl?');
define('AUTH_SALT',        ')?0G2RU87D^}g,o5K^b#Y=r(Rlxd?/l1 6J{HK-wOQU,3T0f8Ps&8`V$jmJ:Ybn3');
define('SECURE_AUTH_SALT', 'S`29RoV4/-,EgDAIm*~>>/_/My,aV]SI:VhXLuEei7gS18vNA!$&oc-)=krGa:z<');
define('LOGGED_IN_SALT',   '|->XhpkM~`7l+TA?N;Z[D!ZmCFq`CJ,T]/)-#n(S2>w2AL?|AB9ht,l>qh#2*Af|');
define('NONCE_SALT',       '#.W}z]nKJF,;GBwY?`;nJ>#zBZ6hdgD+F=R5]n At#cd?<vL@yiJnBAz$s-]b=Xc');

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
