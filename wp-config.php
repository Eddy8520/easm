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
define( 'AUTH_KEY',         'lN*=,m#FcMQ^zgd.4%S1$rAwFfOD 8q(Y+O1:Q*s$,!rom3~)c8aw:#3$@<CUGJ}' );
define( 'SECURE_AUTH_KEY',  '9hnUT!Iz}Qu.B-?Hak9-Y0cYX^Z0jF<yZ%vArcMIS*KtpxUR/fIx67]~6O!T<8bn' );
define( 'LOGGED_IN_KEY',    'I>RJa^bh5vAGQ!Iw7q5PQ]>Ae93Ip?M?z,f1|i*u8u~f)j4#nu|RbZgv{vTUA&i]' );
define( 'NONCE_KEY',        '(}sQ{B&Cq[yo.V[^A4|vGTllC}=$TDiD8Z:t,q*2z ]>C{1N.yYivJKysC)XTdG[' );
define( 'AUTH_SALT',        'U^9~[flUS7o?V3Ie?l.x*J[-{D?Y[h2@1l0lD&0j_1X~mF3=bc9n,R~hwS)xH)`z' );
define( 'SECURE_AUTH_SALT', '%|%xR/Tuo}84V+5f4@_[`)@~B/1.VMU1{P;IImv NpVH..fu1a59<U0DC#4&wOg8' );
define( 'LOGGED_IN_SALT',   'CO4={1 r_bb~[GftYq4h#eJzRsb@MLQPu Rjs:jQD|q>P6.L:_N|-@)fR,LOyH w' );
define( 'NONCE_SALT',       ' Dk~m{EdAD^,A]R&zPK[R.t;Z/cBA=!5ddb%__~5M1xj1MGoq9{kWXit;U1qhtD3' );

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
