<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nicholv5_mydata');

/** MySQL database username */
define('DB_USER', 'nicholv5_nick');

/** MySQL database password */
define('DB_PASSWORD', 'nofearnoanxiety');

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
define('AUTH_KEY',         'l+ES N:U[j%2>,NCF;Q)%S:GDJTZxq|Zwo<MB+4Ld0%Gn03DMCrHhW6gQ;pDOU-X');
define('SECURE_AUTH_KEY',  '5|E~|ZRQM0+S:]}hTW/72K2gspuz bL~?KPn_|Yhd7awRvyA;_aht$%ew|9G(V+3');
define('LOGGED_IN_KEY',    'T^76n{_fUUJ~kY>9u1)U{&|ul1+)mg8{XWY5l1+3,&9sY 86/1;WM# Xy5sxjQPC');
define('NONCE_KEY',        '~sa)}hdG-C,Q$cKHA| t)K:s}tJO2|Sl:;ofim(@@YN,UX{L|bz5QR ~+2CQ5BbK');
define('AUTH_SALT',        '$$b-D}<[o|IdUI mM4/a30q$xv44&q!+OXL8#|m,>o=ZCM~Z|V*y{)wHk@$B=J(*');
define('SECURE_AUTH_SALT', 'NE9D;*}^)yz,)[gn8~b +JAT9E+|m!L5PC`w[RY]Y%fS1C###|V<psBcm$&`|id8');
define('LOGGED_IN_SALT',   '>Z[jLUL#tuh _#$.]nUKTN>bv5F,M:)5J80g[YEq7fPW26u[f`,A.9]1SYGvSI7,');
define('NONCE_SALT',       '}1??{gE--Q9&Y 7&5kxmqE-`b1R:sJq2uh2)JCW5@GHE{X2Yi^-+aR+!;l>2`%EF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
