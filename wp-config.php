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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         'QMxkb^Oc1i0zO>ovNnR.N{_DVqe?,JB}.5K|5~<0-s(Vr|&PgC.05w|<1<tvO2J%');
define('SECURE_AUTH_KEY',  '3O+YZ=oYHQ2KGQ63IkVpCo9Z7.0UY}R/bRBO$A_U5;sN.+!okSG*O]lTFd an /e');
define('LOGGED_IN_KEY',    'vN9}&zji7mF+vM/%A8msbk<t]s(~dBxK2k%@a7>WMtIBD`*kBIm(2~h]dMAS#p=}');
define('NONCE_KEY',        '-Y0o>iCn)hc%^23e|U/+K`}S,=^es=j^TBGyceJy>38UO!>Gq@AI}!3sF?8553cR');
define('AUTH_SALT',        'vC$r?T90hf(pJ@HNYUNdQ*IfsQ_dn*0|hRCYfFs<TZ5X|R*1CP:oU,wPyrx<nm[D');
define('SECURE_AUTH_SALT', '%Yp gp-eOG|@<Pi{`(+5O}jT!=h@a<E26K4A eo3b#L,%ww3B1PHwJFPmcjug:y0');
define('LOGGED_IN_SALT',   '=MBDxio#^QxK6KClQF$S-P^f@fr}5^pOqs?LRBM-W9(`Q)o{4^h};^NWQpiso(=<');
define('NONCE_SALT',       'anV;PSY<%9ZhF*1@CTZ$IZlqI~!Z>t.U^b=EoX,flh9(1Az!uvkwVo}q=#Oec]51');

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
