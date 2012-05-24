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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',7~O|>hw*@=n1-LR_~NFpp:dnWb;fQLLI<KLQs<&w!y*AtsQ6j-;h?>|*tPO@H*@');
define('SECURE_AUTH_KEY',  '6*hy6Omf}$?V{&F]!u2kDy)[;;qobnxz`VUvW~o0#vOA&AU_pflXBRB%t|n9/5Gy');
define('LOGGED_IN_KEY',    '$X$P7 wAKh9678qA,ofuN1J*IANu~Q?1!:q7Th$d0t4F+Q` 0kPw#dEIw_FJVDj4');
define('NONCE_KEY',        '8_G-W 2^6^[C`n=aKW(UJo6-k1asDoei/_k3a5<T<r=fTE1Yd6&Kh&FQ_iF4dI<2');
define('AUTH_SALT',        'KyWQZ7.1I*gA#n5vf1pP^[XgoNB#mP,mCY)zm3=L9)uQx4hW@$$V^yCL?|QBQy!i');
define('SECURE_AUTH_SALT', '(~uI#5fF*=SM*08QDR-#/~Lnq!t{u5eut)(u|D)v;fgAK`gs;rg$b$EOp7#=1Sh.');
define('LOGGED_IN_SALT',   '7G2AtVzb:H{?:}+BTU}Dr{s;K/oxxK*k-P4e3s`;~&`8m&#?ZN%l  ^mS{Q /B4f');
define('NONCE_SALT',       'x=;r}FRwM-ZjP>D`~dP{s>{SwJM~ &4m*Z_@|2/ ^k<=k 7->NR=EbdBMZH0oo%V');

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
