<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'wi$hhT40g}$ai%04Cm!,yxBnQAKw(kR6(zy_D(d2Ff,_)6yyhV2.8&!>_{x]t!+(' );
define( 'SECURE_AUTH_KEY',  '<r8|Gb[[?(c|FL[5a$LG~[%;i7y;:Rh)juVg:tZmPUn0xmhtREEsk{Ygf@aOy/ g' );
define( 'LOGGED_IN_KEY',    '=^9jz`J4)Ah}a,n,*fj72K6S#se+?Hu06ce!`3n5/-cQf.5;G~&Z8{A(Q QXYr*B' );
define( 'NONCE_KEY',        'PPCnY.^YB#;JL;nvsyLJ6uwQPg1w5|R[b:FN{e8LA.qSG)N*.dh|nx4[*>bk*Ucf' );
define( 'AUTH_SALT',        '2wfCQZ-RZG2LT$mihQvq*aZ.9TM9%p S#E(?%u?fWq.n/2`BwKQl[lcZz^yN!:87' );
define( 'SECURE_AUTH_SALT', '<XZn?HMTwWP83*:RkM0 oW [@kFB**1DZ/%U^j/IqI@-S}8{w{qT&pbugM:h.^GS' );
define( 'LOGGED_IN_SALT',   'Kdc@GlW|JI#P2mh(}[BW|atVoG^OyL5f{Z{)g)sl.@H=PaBoq^tN&/27(>EdU[R=' );
define( 'NONCE_SALT',       '=%+0D*^XPmL(dj*:i-cJ{,Vs?rST~@W@H[DW2C=~}`N#l.`GdlkrPXs9-4OqeT^k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
