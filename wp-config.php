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
define('DB_NAME', 'newdevcoDBjaxag');

/** MySQL database username */
define('DB_USER', 'newdevcoDBjaxag');

/** MySQL database password */
define('DB_PASSWORD', 'zcoFTn14Zl');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Vz}8NJQfrn$>IYqm$<IXjfq^3FUQc@>74Fn$>,3Ffr^$Deu*+]6Xi*+]6Wmxt.;I');
define('SECURE_AUTH_KEY',  '4Gcs@8NZVgwMXnju,EQMbuA6IXy.^3Ufcr$7JYUn>7IEQr^}>;9al+x_2Slhx_D');
define('LOGGED_IN_KEY',    'i#6SOa+]52DSt40Cds@z|4Vokv|FRNco[:C8Klws_:Ogds@8KGRs~IFQr$}>3Ug$y');
define('NONCE_KEY',        'lx95Hix]95Hhx_~;9v|0}8Nozv|7Yozv!0RcYds:8OKVw!84Ggs!@[8ZbXny3EUQb');
define('AUTH_SALT',        ':GRsk!-|C5VObUr$u{,B7UMjvn{.E7UMjun,$7MEUNYvn,@70NFcUg,$7MFcUg$');
define('SECURE_AUTH_SALT', 'a>Vk@}0Ngv,Ncr@:0GVk@:Js!0GZo3IMbr^3Ifu6Mfu.^FUn$}br^3IYcr6Let.L');
define('LOGGED_IN_SALT',   'ITfuAXTe*;A6Iiu$y,EUfbn$7QMXm<3Abnj;9al+x_DPlht:95Hhx_~.2Team<6');
define('NONCE_SALT',       '_Ht_#5Wl-DSl-FJYo!0FVr4JYo!08NRgw|8Ok}CRkz[4JZo!0GV,4JYr!|:GVk-CR');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
