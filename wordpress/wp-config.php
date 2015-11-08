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
define('AUTH_KEY',         'rfx1|y&kVYy/f2@RP/m:eV+JVxI^p$@{F@hb8Xe|k*3 9p%zMyuCPst C^$Ef{bf');
define('SECURE_AUTH_KEY',  'eObc*dz@4yTJTlt|xS`X#^[iNIv?s%xh7U-dr-Wsx;QU4h(PTDH?xKzX1D}/YuC?');
define('LOGGED_IN_KEY',    'xyhU}; u_`X[SRCYq|+my--at`Z}37#!M1*JW#snN/qo$f%Lecx@oPiL4m+6Vp0#');
define('NONCE_KEY',        'TlvMNUzx p+ODle9X*{|h{]28#Ka#{3+>Q<C`okm/QKC^V>$xq~&A~O~R!jSw)ND');
define('AUTH_SALT',        '#r:`|3GuJ@fdax>G0D9(D$c<d9EW#9*w-Y`L2==bvQp[Tp:j&dJ%`Uud56+H^6B,');
define('SECURE_AUTH_SALT', '_m8Fp*-,f&~yJcW0VdU@S4P##@BSkfH&-Ly_`S0sYg?BF#SP~%@.V~Q)e2-3*HS`');
define('LOGGED_IN_SALT',   'ZQBk|fs.BJweRru!=$E#fyO?o0i3b3TNTDwrXYXs_.{:OhS+[h5y8fe+3be3E0IG');
define('NONCE_SALT',       'W ivjJr BX~=R[Ih+%x+rp )T.,b]Xd$@-[D4xT05>S}>sdX<]|<l3njqMj>dmjC');

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
