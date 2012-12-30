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
define('DB_NAME', 'hall1');

/** MySQL database username */
define('DB_USER', 'hall1');

/** MySQL database password */
define('DB_PASSWORD', 'hall1');

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
define('AUTH_KEY',         'SxFwAB<J&0N:1?t!+<RfD?~aq:=hC.N&1Lko*/pr,e+c?q)q%|*kS?lY~<)ew}^3');
define('SECURE_AUTH_KEY',  'X(E.PVb?>B+xLh3EUN@=YakV$I+#j;<06F2.&A~X,t^ z# NCj2+r#]I%y@?U?gD');
define('LOGGED_IN_KEY',    'Ike6O>)n}+lFqy76LL9+Bo3,>kf$_io-#Rt6!Cm560Nr839;7b);eH#U8F-Wdum4');
define('NONCE_KEY',        '4U-o{=?{; kEyZK@gJ],;e&%$B9h^AxA8Top+_]&K^#d>,o3fH)*R*Bn$-a/D}6]');
define('AUTH_SALT',        '~LYzG8qHa@U*]*+&POY.W{Q-W8Vlb(bgI_>>4kCq<^4n9+rYxS{n&DlR2C!l[`KQ');
define('SECURE_AUTH_SALT', '.otu,nB|c4C..lsj|3^g?_osW{%yEbpw9-# T9A9sJLDk[!6^|}/}zyG#G>G{Hq}');
define('LOGGED_IN_SALT',   'J[2s2Cx=c|IHd5  O7,Vy4$ruGnA##[5wr|!h;]@<h!_c+|$8TC<$| Vk2<4-&[6');
define('NONCE_SALT',       'd/3Dagrv|k6pSY$jM;1PKAk.5|re<m7B CIpjI=Lkvi{g1<Os+;n<j(1h4d|tgxG');

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
