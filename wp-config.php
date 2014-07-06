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
define('AUTH_KEY',         '%$=%+>e(FHS28tN>b+IqBz7nzcobWTj9g@$d_N+t#SO59>tyn}IS.wQ-M=vS=gD}');
define('SECURE_AUTH_KEY',  'U~Sm<cM%uU-^@$W#wf02[S; {8sAz?a,6 ,(L-`J8wQWyY(Q*0Gys+}*^jbxujx{');
define('LOGGED_IN_KEY',    '|{V5X<_or=rc~:eQ@,fzeN@O)H2=`= <0&G ^4ft_B<h/QYqW&QS^J|:! Q_z:C&');
define('NONCE_KEY',        '%RfDpd_|G@X,4YH3(;yruR=Mmk-`:0+|7$hmU@iPU=AWGxRaVgNv[]saKIcl!T=k');
define('AUTH_SALT',        '=).O0BUrC|iRau[|D)!C|.=w2a!{j,XCVwgTUq6-->+;~!_6U=4=i ?X:RR(H%lP');
define('SECURE_AUTH_SALT', ' UgnzEDlN>|I?+yX}o-cEmR$0h2We/#{n8!E[=ZD+X7ZSu2E}n>aZ(U|nxwsJ6B<');
define('LOGGED_IN_SALT',   'K|4KC1.U]JG_rd{yyrp]3*bN~FLz:[z!`Vf`OBiv^aT{C}UdTi>FyOE0Xz|AZ}b!');
define('NONCE_SALT',       '$E+CS7ZugsLe8BV~Lw^7P[MwRM-c|mlfocUg~gkx-G!ZFye@K*1P*8f$W4`O:Kxh');

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

