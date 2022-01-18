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
define( 'DB_NAME', 'gamemartz' );

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
define( 'AUTH_KEY',         '.wd~FyN`3#S?Gg<*9IN:uF;lE,<o6v=b:OMY;xzE98! odwaI)`?DCihR0@{f+fW' );
define( 'SECURE_AUTH_KEY',  'cT9HzwfZ0SdBR`Mt5U04WT*d@vo0pVb_]TP/P(HW*mw1-DuK.,R!&FRZ$;I)~EnF' );
define( 'LOGGED_IN_KEY',    ' B4~CH+o4fFDaU,A*&tfdV>WiMQdRuMbjo1wg jg17KBaf%bf9WA.y|erZOwH s<' );
define( 'NONCE_KEY',        '#w{&Sftuv3Z1=Yx*+>4[wMoasAO#L,?`pS+2MS6B+,}eb>>w!M]d`.J#$?fe5*Z]' );
define( 'AUTH_SALT',        'k[fUq~xXDD.tFMm]$Ey3@.83JI]Tx!N(14nai;dGwV-Kh<Fwd[2Y$o+},){<g)T`' );
define( 'SECURE_AUTH_SALT', '+L0rdUT7-0&*!z;Rq?(7CSVUR,p~vc3_:l9hSl}SX8>OFQPk4ZWzf!Pp#Mo$K><,' );
define( 'LOGGED_IN_SALT',   'X%hj})JcH]n4D6UraBQ2t@!M]oeAazx~_&w(z+)<rpp$LHUdb-J,$ljcZp{K/,w,' );
define( 'NONCE_SALT',       'R3x`UCO2)iTBu0U/IUMkXMG/MDx.#P^)jz<,0q+DYW}I5!y0=-UCWE<EE))-=^=K' );

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
