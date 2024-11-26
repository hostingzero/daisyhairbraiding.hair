<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u756016664_dEx63' );

/** Database username */
define( 'DB_USER', 'u756016664_MUGiM' );

/** Database password */
define( 'DB_PASSWORD', 'dlSPHgPne5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'U@njRC|IURo>j:sif)hyWG,.zU}*0=$/Q(lxQlyN2dI<RI%9{|)VX:~u.khQ2<J-' );
define( 'SECURE_AUTH_KEY',   'W1yKz]* ?~VB|}w!W2G>xwwf~&if2Zk1t.1{jNi`)A@Bxt~E`dIEBC}sYji0Y.eb' );
define( 'LOGGED_IN_KEY',     '.*yJPjzQ+S!A8rZp29(;iH_Q>.G(#<-,B,?Q}%)F$[+@ODuC4j.c_?ly;nY$fF0l' );
define( 'NONCE_KEY',         'Kzpa!w@{jAAUWd5k<VFhXzPw~f{e0yaM``iwk^<KnRZ^5<?|q#9;TV.J0%#Ain,,' );
define( 'AUTH_SALT',         '9;nZes,ES1zaHfqm+(7w}_N_ykPc$C`tN84J0V9o4j$pD6E!o}1TH5Kl5S@H]{#$' );
define( 'SECURE_AUTH_SALT',  'Q3(3Uzh4xEiP2!7m *lOp@5TX%,9UjB36yIUyg}&TxGeqvO&wN??w(h@!hTT,r9S' );
define( 'LOGGED_IN_SALT',    'h)+?zM9Q8)X& ,Rk^C2:BY5j00%Q coFaeZ|?Lb!EVWiIT Bs0Y^vdHSLH_WqE`Z' );
define( 'NONCE_SALT',        '!:{Oi4)[D(8J^1zS[2#9%-Jgh<Y1@LK/|38uW0R!E54uHI&QAG$9fiM|j~azCZCV' );
define( 'WP_CACHE_KEY_SALT', 'n&}%P6ONjI>E^DDCe05;;U,/(g|bpG+aRDc[dS!$u{_{MECwMOVe5dOK+5Fq/VY>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '8fc0180b3097f5ec91545c40ade4e3ae' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
