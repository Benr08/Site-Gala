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
define('DB_NAME', 'web');

/** MySQL database username */
define('DB_USER', 'A CHANGER');

/** MySQL database password */
define('DB_PASSWORD', 'A CHANGER');

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
define('AUTH_KEY',         'Vi[eIOvT=J}NY1wC5sl1_[#=fe-r+S5i/S;P$,2;ws,GDOCez_PCED(?xYA_naCF');
define('SECURE_AUTH_KEY',  '0z4M/jpI;>iQ^Xwwz}E]yCrzb)I[O[YAh7;edtc@qmFnlc4cLHFI|5,dD_`8|o&~');
define('LOGGED_IN_KEY',    'udpps%4},3Fb?Q:VkI+9CJXm){~EOuBo!?I!Y|1TM3K.;`#cdZcFX&w+raw8c9rq');
define('NONCE_KEY',        'MK~PF[o{.qVc4)3Nv.ClfZvMG9/nF[ARG.</wJuBPn6_QC=E0 EbW-WUkUi)_svM');
define('AUTH_SALT',        'jhSAw]d-A=ab2t5*lEXcx;.VMRTi:B^q/p6nR[sTf2c6{Jot-(XLMk !cFZj0W.&');
define('SECURE_AUTH_SALT', 'NhXhN!U^1VCU@;0UNojOoVo--YI~xweItx&O%CpTb~Iss9ZzIT@PD%;#oz<#MWCW');
define('LOGGED_IN_SALT',   '1t[j#jiQu.HBh;Eb^GC&=WJnr$y($e^z-6cd&kD}Bb#&GH_jMHFhV!TTSrH|>9-/');
define('NONCE_SALT',       'Q7$M<ElNui*z5,@._$No-/XadtF05?R7q%9Bj;PWP[QW$SV7Q7ZG@z~;6[uQ/vpd');

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
