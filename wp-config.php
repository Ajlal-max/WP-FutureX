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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'fZsji1KO^aeiE<Uk8rI~g,Tf>S83=tv|rnq.bja2K1L+w^d.l7|}Umtf07.?Y=y2' );
define( 'SECURE_AUTH_KEY',  'AAg@8>Hsu(D8EM^N.kn5b-P/*lb[QcZz5QUBR+4QWs%+cK2SW}Gqx/6y?9cfgFgU' );
define( 'LOGGED_IN_KEY',    '3/[DbP? /ayllEZYa%VI#SXS)vp%$@owrX7KwiX9N8kh,A%Y)ga5b&_YKIF JYp-' );
define( 'NONCE_KEY',        'J9^,0)-9!{nTYj}sG,W2I.95r{7C 6)#uEs@Gj..j^7D|2Wi,JY<3;oTq<W]9JCx' );
define( 'AUTH_SALT',        'tj8BPFG}N9])r4T)5t(GB*|jZE<5UCfwGD}&zV?+W !E(KDS$.HNSL;PiBHED&En' );
define( 'SECURE_AUTH_SALT', ')BDGy=P`F3H&^[Vse<xP=di/#&NjN`r3j?Swp;X(&Ip6.yxi3P/.WI5g1wQfn>l2' );
define( 'LOGGED_IN_SALT',   'EZna`S5Ba79%^BR51L_#C(Sf1RS[7jW@Zp_rsUb6R`V;OIaS76e;L?4 %xyVZ>G$' );
define( 'NONCE_SALT',       '0cNykH{!dVseN}3 0y?%L.?kl@id[%j}XtO6kC9|_.7`(-p`V6Kw(/o!+,K1QJVk' );

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
// define( 'WP_DEBUG', true );
// define( 'WP_MEMORY_LIMIT', '1024M' );
// define( 'WP_MAX_MEMORY_LIMIT' , '1024M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
