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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '5PXLsBIvI7Qcr[#3e|)9!=1v)Z^-2Hd/Uqo,a-z)_RxvOgU |jgP]mym,~DTGpGQ' );
define( 'SECURE_AUTH_KEY',  'g,(@.s SRA=YSA78iqhY9+bx-+0EBRXyn:)vg YRD/WDcw>l3(tf4#ES&_dZr8`Y' );
define( 'LOGGED_IN_KEY',    '{L(F8~uYi_HJ__zMM0Z^)Qq-2U&G*Qy=S@JPyZo4pN-uI4,z.FK!B764Z?w=3SGE' );
define( 'NONCE_KEY',        '[ sc?WSUSPEvP&NrI,E!ebCV@@T%;xA5xU:zbGNX6O+O1mA)9P;J~P+(Ba3VV:jd' );
define( 'AUTH_SALT',        'f8~.(};bhJG71+Sa;MuSU{w+;{^ArR(]5W?<#IMe#l2koJl*tO,l/,zLH1_CkS0E' );
define( 'SECURE_AUTH_SALT', 'VJ_<wd*Csd.JM6N@4|@<}L.Zxgo+27I<{pe(?SY?K~i%I<ZgWM2)==!ACDCE|w1I' );
define( 'LOGGED_IN_SALT',   '8GMvY0}vys3XZvxrG-5isF0+%%PsZ~M6?soRG5X`2G%Ni50okWA?uYVdV)o{m!hW' );
define( 'NONCE_SALT',       'v%%YvNzhY4EgndVFG7K<7UQyP-e%Zmw>K^i7M?%4n!3D+^C:m~dZ24jne%5xQP$a' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
