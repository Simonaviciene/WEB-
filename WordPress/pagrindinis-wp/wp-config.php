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
define( 'DB_NAME', 'manodarbas' );

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
define( 'AUTH_KEY',         'aA14(OH2(/s`Xb?L E<>-kS.1eM^h]<&kPgq<KwPSuK3f4ByhNXt-hVZlqIjP|k[' );
define( 'SECURE_AUTH_KEY',  'qT6-l&*Er uG-6Aig~p*U7lsH*bJA3Vp3M7sG[G5`aI.[a^ z,Vt>~8JfJ*g6<G>' );
define( 'LOGGED_IN_KEY',    '?p#Sk@dJG0*wL.Zj+ zye0qQC[c7cT|}E0OvA3Vq>ig]4<DGd!a34)e.aI]o3WJZ' );
define( 'NONCE_KEY',        '7;2S+{y}u%hTRi~[u%+/zU6e{#5|{c>8+V`kJpqsrJEAO~mvU=-2NGss]wrX_II;' );
define( 'AUTH_SALT',        'f7NT8NlklW*<=)^7%6wc fUy%7CQ5^-QTd2UVq16-fGSaS? Y3n $</R/EM^!1@7' );
define( 'SECURE_AUTH_SALT', '&&j}>X?33sW}S}V0mjl*9x8/p-cQWG|V;[V1icP6}r/GrfN spsj;6T&&9E2}>N|' );
define( 'LOGGED_IN_SALT',   '8]V%GM}  ))v#A{GF~[7&udXN}B7pcx!x$[;RRd@|fc*S5F^m<q(`[+_w:T5Yng)' );
define( 'NONCE_SALT',       'ZIn;<E4mi;82Tr8lV};wNc$$B#Pr5Q:p{Q(ia{YnS -aWv=yqc?%Ft%vjJI%6Bx,' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
