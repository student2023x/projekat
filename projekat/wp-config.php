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
define( 'DB_NAME', 'projekat' );

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
define( 'AUTH_KEY',         'i<7-)Wum]$A-x1a`,9Jpo!Fp<@y~&9hvZ@[O5{Gs+&+|d6yXeZS&G-FxCznI4!7(' );
define( 'SECURE_AUTH_KEY',  'mlpW1NNnCAbp@t v$`>SZr^>eT-H@K}IHE~[FZf9:B:-=[)HTM89|!z@7=R&G{/X' );
define( 'LOGGED_IN_KEY',    'ROvCiW4jTA[6iE(,m4aE+&h*l]p1/y!@h[,wFL<aL_)11}bbfz7S}kLRyRfD$jf$' );
define( 'NONCE_KEY',        '0H-j:7ITCZ*.gpy0h+$Q:$!i^7o@|Qhy*Z)2c*si%t=,5%h((B/nMl1I_>XSCr`@' );
define( 'AUTH_SALT',        'e5H@AgZt (CA-T6ne>+n;%H0WNs@H^!ULt_E].f&-D(/&A5UJdr/[d)9 =s9PEsR' );
define( 'SECURE_AUTH_SALT', '*C*5@Y*/S2-m/Liicj>pXB)MKIWf4{T1UywA7a8nC|SC0e~U+#:d423I,bFmQh%<' );
define( 'LOGGED_IN_SALT',   'nYa_svkH|hB105ZfSDn3)s6|<|K0ig~(LlN/A ct#:?-ltnoEI}:B^Uf,n+^k>e*' );
define( 'NONCE_SALT',       '<bJ)#Q?^g&g$1LRVUXA/;X&[<7,r>MyL!:>^NMMXvI)5YE#`mlX,=S{:.aYy.[*s' );

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
