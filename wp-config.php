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
define('DB_NAME', 'sawana_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'QmNWF?V_`=2Z7=h}YdpJq1<TU kkzl}SK%:5IeDstb.,qN2/=lq{[%V_E_[fOfL2');
define('SECURE_AUTH_KEY',  '<8+l[WFyf5XojEQyS5.>LL`#.I!ngl{_f<[@.e)$xV!HNZ;$CuxlXWu)Xl{<AZha');
define('LOGGED_IN_KEY',    '}4eiONOQ4gs*/j<_V9~..xd54{%/H8nAni ;S72yVye7rjVfs/7jB!h-D%U5m6Ad');
define('NONCE_KEY',        ')T;Wtsbi8}Z]3/IK:bxl4Rh;8*=x7*4!q&p7>[Mt0^T8~7hvTFWr]($a*a*_f ?<');
define('AUTH_SALT',        '>WphOO/ge5Ik*L2:1PgvySv_3%kOA*lhM3)]XLhcWt`c(],J,}bgEG.{M}K^);v;');
define('SECURE_AUTH_SALT', '9?a#BKCj*U?[BW%tqYhG )]:*D.dW%#<7Hk?KQ/26(GE<t|_G$1;s}8&9Xq0n2Y5');
define('LOGGED_IN_SALT',   'mEhrfdql+;ypr.f0jpH6Invbw-wu PHNg4s^=|i|g93/.b1tJO*K37UOfIM8tiJ:');
define('NONCE_SALT',       'p2KfdIUJ~h:Ripg; Jow|Mu))wa+|ioUhWovs-CFD_89nw*7K.]#8IwzhWRJnJjn');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
