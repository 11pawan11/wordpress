<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tathya' );

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
define( 'AUTH_KEY',         '9JXi]j43kMAhY--q(R[F_!+xqD~`Qk#(UP H0z.JiW+K8D(faa&N=!3 i2n5b(Nv' );
define( 'SECURE_AUTH_KEY',  '4-m4,*?NCwRKCnrCNaUT0dNRZ36|J%(bh0HyumBU8Sn&B/C4{N%5[/BQ5H^FQN L' );
define( 'LOGGED_IN_KEY',    'J_&5#S[}HU`=M*<!qmo1YD}c|cQ=V2Z,g8NjNe=&?ucvw!>=$T@/a+,^^J)=6R|Y' );
define( 'NONCE_KEY',        'M)r.s>Ov$`{cIpx4if%1+$:67S[ot;g-:*cbT%*1u7z$|5GD:NjOA8if##N+;Z4$' );
define( 'AUTH_SALT',        'k5)f3Rws^;4B.@,8{a]Vk`|{tKn5JPlUJn+0VlW{+CZ5{0p@8Ff%nlALX?1Z9Ab6' );
define( 'SECURE_AUTH_SALT', 'V8xb Kq|xekDzK-eU+sF;#c=wUvh<NF`5:7D,Nm39WY}Q+El0?q[,>B(V>xqd/1P' );
define( 'LOGGED_IN_SALT',   'wLCm)<]rFaU<^hQ$IUHM$~NbH9R(r8cCa~aO?nt} }.d_?&(r=.F{FIhXHd)DLHs' );
define( 'NONCE_SALT',       'C3QNhnN~MtGF8-t(/S$G!,@xgc)N5F5}.9hB?f&~]L9.g4dEIYaXH~ Db<}ceI]i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

