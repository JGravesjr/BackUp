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
define('DB_NAME', 'conversionDB');

/** MySQL database username */
define('DB_USER', 'conversion');

/** MySQL database password */
define('DB_PASSWORD', 'HarvardFan46');

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
define('AUTH_KEY',         ')&7clKF)%yr^9,j=>^0!3JYL+5__HI66a jdqdxS.IE-)`$xt5K<#-+$YD9gBA}t');
define('SECURE_AUTH_KEY',  'xYnHFdeb$EQHz7A#mkQRkHKlbf}t_T^GpR F(3;c.,`uXmxbAYndfAf[q/9C_E.L');
define('LOGGED_IN_KEY',    'Igk/qzU*C9Tm6=5cm;PrFZSkzD{H5fo]+$oDEAQ8p|93e{EExy2~Xj+M]oN($[[F');
define('NONCE_KEY',        'M[o(Gz=PUrJnLro+)Z?E/|-/D,}CWo4QU@v9~Zo7)_s4[la?g5Ngv!rxtcVB>OwJ');
define('AUTH_SALT',        '^,~o_$!]rTjFDqLOO(??]4.7;3bxI(D( .0sB[mQw7-!|egi<>_]b_D=.h@PnQ.*');
define('SECURE_AUTH_SALT', '$Nx0OU/oCN8htSzvPD>CW|r_*L/}U+p]7iS:&&V*U7{`DEn=p^zyKR, 78GlP_Z&');
define('LOGGED_IN_SALT',   'So{]Y4HnGFl+W)$ x<*KThbu,tA&E>&%|H|:Y&@%yA>w3$R9PYy[}c(p{odL5*a4');
define('NONCE_SALT',       '5JW:N;zLmIc/t MxVcTvZDDT#&h8.Cum((0$u`UxHgOUnx#wWWprl.E% ID4@dB,');

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

define('FS_METHOD','direct');
