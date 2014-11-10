<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'balcanis');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'e(!.~@K2?ZrL6fXL|<%,6?ODU9IrDaDxH:Cg30/SmEk.E>(0!rS4Yiu Yu|g`PX8');
define('SECURE_AUTH_KEY',  '7O|JR>q|3FN%|BHY1+h_Z+nWW$:A9-e<&rFa_u&lJ-od&wyN?pO-n#+.g<xo%s[*');
define('LOGGED_IN_KEY',    '=W8:-Rbn6v,DGG/R+O 62SmJi0`aS/tak,0*Y1kN6Np#G:YpS~& m:@-eGq^.*9`');
define('NONCE_KEY',        'FM,<#EI9/8Ujmr%Ge~:0a(cJjIOKPd>/dmD1<LNz}Ty&?PKlqF/YS!H-n4s_4_0p');
define('AUTH_SALT',        '?qGBGi>#xj~|WDvU1AR|.y0MxX=|U4/M5T?H0eWJN!gs--I1GIJ-M~|vl99=]mv^');
define('SECURE_AUTH_SALT', '[t/7=l|:e<6q<[z_+^Mx&TL%nxd0~tsCnopAE-|Cxzzb-^N|Omg]^k(%][PA1z6N');
define('LOGGED_IN_SALT',   'O05K(X-EHIqH]u:JcD]^,t,H$h<,z6,^GAD,hca42+g*xq;fKt`g(b#IYX?w{YE]');
define('NONCE_SALT',       'h4Jm+Xjy[BRdm?KcAmy0!IzQ<XPxATaG3wG4-GlDnI,9~ZPm$Cq}|frr$.9}wh_t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
