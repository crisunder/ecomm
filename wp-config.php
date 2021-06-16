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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tu' );

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
define( 'AUTH_KEY',         '?mgV6!F8%WDKbQ=O93c<>$@ZY;X5>]ONd6{~u8&i[j}3A:@lEGZ!Kj.!H+id|/(O' );
define( 'SECURE_AUTH_KEY',  '`>1Gf8T>TPh)VV|lIuI8+[am93whl.L9SbZz~C_T;dB.[c,D`o]QHu,:7G,+ts*>' );
define( 'LOGGED_IN_KEY',    'jYO1xTez$(^|Qy$=;6;7x@uOgqY9y8{X{F#vV-^61xI9cFbN}8nD!UP<5p]K3RBA' );
define( 'NONCE_KEY',        'Zd4rUXE&OnMP9Wkx4lfccr:vS]S3%s`PTB,G)Y-fcKYKy5(oxh(Z]b L|eeHO.a^' );
define( 'AUTH_SALT',        '+)p90=BLBrgCT )MU{>VeU$3+mq -Ip34/rFN{UOmqlLVey*@q`CiCpj*dWTNoJK' );
define( 'SECURE_AUTH_SALT', 'D~=P-1)BLt?>iE7*CQ7XwYeWEhm#HDtz<s%K{N!=$?6VaIaSjd[K-hMdi^km? Kw' );
define( 'LOGGED_IN_SALT',   '1cT3y$5eu@K&</dzhQ4YP.XxK*,tyt8UJ@h2Lam5bO*a#EpPBbahxH[J~A;cN_SS' );
define( 'NONCE_SALT',       'RZ%jUy6siHa 5LN+IjDK~~hY)m[Gb/p=WY@g106c$co.OwFdz:5F~7/[A->oOivI' );

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
