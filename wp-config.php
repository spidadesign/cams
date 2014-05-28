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
define('DB_NAME', 'cam_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'v|2t-t[h?%49?M_19Y Y  VOH(3LbOIi+JBRwN] v?x,C).!cf9[CF+BtzDCi1n=');
define('SECURE_AUTH_KEY',  '{;YW=n-wfjW@{^nmtssKT$|$GPgT8]oQ-%XY$Uz3~ .F:`mh` 8xp-}.S9sy`|[}');
define('LOGGED_IN_KEY',    ',Z dy&FrI$Ho,w{E]yJy109ULxLM.GYC;?G}~-|a}i4^F+:V-B>cH>CUZ1JRMB=u');
define('NONCE_KEY',        'S%,}j^D3uUQ{Oz_r;0)#&n_zl}%)^jDpPvl&H_uU}r0/~>+=%!LR1H2vy#|(lNmG');
define('AUTH_SALT',        'N+>^@r8[oNVu]Iji6v1.`~J5tU`bTZQcS^x(/}L+{-v+:+zF|y~o+IN&MP>yNE.u');
define('SECURE_AUTH_SALT', '@ApOF_cv|YKv=weSnR76w4BaMFtL|D9VQj$dh.8OB.)Ko!z.=C9q<|@<v{7F;B?u');
define('LOGGED_IN_SALT',   'I)^D{~qR5.$>}U&/WS<,I$XC~M$]`% (Hgfy7->8&%9jo*Y|Yw+m 1<[%{E+></2');
define('NONCE_SALT',       'C}Ba0Hm#p%282? }?cCTOL#A+~C?yk2G+y@[E.WIM+2E>.:Wb<mMrM3+@dk1}t!4');

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
