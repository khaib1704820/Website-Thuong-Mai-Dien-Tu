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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dienthoai' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[>CE9URp8]rhG^mTr#h*sRzH.qOaXY:v/Cp?=~B]dvZR)um2Mc YmVTZX?S.m8Pf' );
define( 'SECURE_AUTH_KEY',  '>;V+[8=8Ry>)y!10xoo::vR7%^L:2jG$<~N`jd=kmn+b~=S]SnxY{1+vL|:fah^U' );
define( 'LOGGED_IN_KEY',    'PT6yme5SW$;sm;6#E?[2F}U1~g-ESfPVWTr@_XV!;(yl5lq<Q9nz9Hmv2K8=9V@C' );
define( 'NONCE_KEY',        'mV8Y3c~vO:Wi5QC]QDI[6xrVCpXDv>EP*vScmhJDhYcUQ#oXp8dYfBtec^{dnFDP' );
define( 'AUTH_SALT',        ',s.qzL5|hJ RPg[1/IK!Vsn.Tjqat|qc},{9gMIxh|7_ax(hUG!E{|~I}aL~_9eo' );
define( 'SECURE_AUTH_SALT', 'X(x[@3SY,1_vY%F[Z5uK=TP6u$/<?qzZ+M5 LlhYb7+b~oER}LH~MLC[$TK`F$6h' );
define( 'LOGGED_IN_SALT',   'uuNZ7xh<-6{n@+Z@+_HgXq6y_vNsg&;KR3]|-.ujt=wu11N~=g] vCNYSkmsK>rf' );
define( 'NONCE_SALT',       'N=#ch6vIz$UQk41%-$F$bYZ}GHF0E>&eZ!>^$)4M+6q&{Bvd{%GXVZQo&*at(Yc5' );

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
