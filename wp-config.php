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
define('DB_NAME', 'lapaks');

/** MySQL database username */
define('DB_USER', 'lapaks');

/** MySQL database password */
define('DB_PASSWORD', 'pattake');

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
define('AUTH_KEY',         'GZ*+cBeY5aqlEqD8#uJ#z=a46rWLAp+YcLD dDMx,DU8r)(&E4DR^dw+5(1$*/xK');
define('SECURE_AUTH_KEY',  'Q-PF=+0?hGHPoqR]OEAhFxn49&418gBE4:|9zI(>|&N-7O4MPAo}``aFKW_wL.]O');
define('LOGGED_IN_KEY',    '7j.QL`c9PVSP[S&$87 C`-gC&F:]wutAiy&Sbrm<+cG+,(R|nq,`F5n94$Upn /<');
define('NONCE_KEY',        'nfs|ySv-(!IC1*|/.d]Kk+-]Zk4q-seOk`=^5.T<rP|Vb,bDsWTLdC(Et5/4o~-!');
define('AUTH_SALT',        '-.p/vN`-W,{r$U>B~lR2S_3D/8WSR7(h|X;$E/vq+$usTYf4cvDqMLZJ legjaxp');
define('SECURE_AUTH_SALT', 'v%trn_=@<eNZk#9p.q]lePe$`u4^-v!vRZZv&0np.cAZerh6We+fN:wC~rm6%,]/');
define('LOGGED_IN_SALT',   '6{^k#F-r.AW0+77luBZ}ZSgk<;><E%O.D=0X9A] /`MHKJ|XUPEhf`k_y4gts=xm');
define('NONCE_SALT',       '*TJo,G+Mk2bHN7~D@aYMnD>iA`rXP<~;q=--cxw,|14BM@2+~rq.gR~JSELZ,DwJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ts_';

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
