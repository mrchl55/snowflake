<?php
define('WP_CACHE', true); // Added by WP Rocket
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'snowflake' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{UYbcEDwXKkkV`:C4b|fd0mD3=3q~H`DS.BOT&2{Q7eA>S0[ZR@5Wud{{Z EgB{&' );
define( 'SECURE_AUTH_KEY',  'jSMDC7~<#YvaqE8.39R~}$q/!5+c@`td0.ViQv?e>v`]h&ayBa0C )xwWb6t.b;n' );
define( 'LOGGED_IN_KEY',    'pFuzI![Z4ZtEy^(!0L^J65D&:?EQa_a%UZ@jv7g.ohH8H)eqw,uPcUfts9RbjQQ~' );
define( 'NONCE_KEY',        'MEwoBXs9`OaM^:@?~KMr7Wv!&w*1lR(iJFF$hk8]f!`6dNE.K35=kf0l/qiW+hec' );
define( 'AUTH_SALT',        '*y2V. bIwp|baARyu $BClRbVEkk:_hegYHXRMNPDQ*jS8u}LAs=}/Xqx|Hp9,Rc' );
define( 'SECURE_AUTH_SALT', '`P(jn(@{Ffh)g<{Xpd5>#v$x]`Ii9g6v3@j-n2sWM;e  WNi>7->f/HF3t/u+XE~' );
define( 'LOGGED_IN_SALT',   'YN} 6Wwq|=~{b.:L2{<P1LdaU&PDUM82RSJpfC*E^,/sd[=o4mCY~pJ9wQ6P1Jvp' );
define( 'NONCE_SALT',       'l_UpWqd:2KFhN)-jWKs)`@dXq]%]>S-B6[:b.icqWLtog81diCjtprsZwGV{$JUW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
