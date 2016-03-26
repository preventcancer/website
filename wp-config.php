<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'admin_pcf');

/** MySQL database username */
define('DB_USER', 'pcf_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Pr4C@n!6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8mb4');
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
define('AUTH_KEY',         '!Og]A9w*@9*{Sj^|W8#lW%tc!|%!0[.(#O aF^oP+vJ:B~_AX_uc~E5;G#f}#4^p');
define('SECURE_AUTH_KEY',  'd;6(K{)J_%X!5b-2z+]}x&Ze1[l~QB -f-nW-^rJok/&(-aoR|fCHigB*>l,lbw8');
define('LOGGED_IN_KEY',    'zV:#,sC9,W(DHI^*uh!93Wyszt!ULO97{EMVqS{rGvzcTq|{:qX`YpyC|]AP0^~f');
define('NONCE_KEY',        '<+y_`)f7|z H=KpnbUqjRmH<%-:H*R1Oz>%(df]<c#j}Eb4];;[ezi:5cAKnr3Dk');
define('AUTH_SALT',        '= T,-C[9%(6ph{2n6UeiWzf%^a4Gn7x?$QKE.,:y~5z_^7zOXuUU|+L_C-R+P+F/');
define('SECURE_AUTH_SALT', '@kJ#K{x 6t&7G1U8N>Xvj|eWQ>#<+-+J9#3n|zngr-Vf}o){CFvo2?e{uEY|ezg/');
define('LOGGED_IN_SALT',   '} _|C$c<*5Yf0}OQ4QEb&:;KR}|IrQKgIZmJ|532Tck!`Kub|7GlN#?f|>STKjr/');
define('NONCE_SALT',       '].]x]60?S?=26l0[07(/aMU,,BSme+4S# I|hdK1N<s-2<(.8tg;/xi;Nf^9Y8?Q');

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
