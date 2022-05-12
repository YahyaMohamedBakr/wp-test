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
define( 'AUTH_KEY',         'e$QDLtjd3O!!O99v1fI7$dS,Q?h]tEjlR6y~RVx2rc/Fv|efr`$m+[~tSF|>) |~' );
define( 'SECURE_AUTH_KEY',  'bH{/wHPIG]|~+uNEqcv)#5oRtfUONH#o= /;UjudvYWf`LX!@q-f%$>)lOxC$BSA' );
define( 'LOGGED_IN_KEY',    'NJ4wL9l@cM/=?mW^@S0OI@kUr#`t=<2X{D4.QC>7mRq=:8~PM|9t?<?GY79~dKau' );
define( 'NONCE_KEY',        'k M#?Dhq)!y/m6n0HNzj+V9SIn!UL<cXp&({#-Pgz(7%qzxR-KC|6i.1J?uq^:S@' );
define( 'AUTH_SALT',        '-mB2TTy]2q$KM $s..zyo41nvA0Oq+Z9d/RP[]UbaY#t4_qWa=SY(1Z)e`ct~jBV' );
define( 'SECURE_AUTH_SALT', 'SWEV?``>.tqTrU8Y>)G1meD?)Ri2ap$6]e)3-sc^qsmYqzUemJ:->eM=%MHYZbT=' );
define( 'LOGGED_IN_SALT',   'D8$&i@t:*Vhf jOK1*(b,_h31/Pb<?$G3O`0+T6T-VMAKv=`bdeU;Cx0F4XV!JVF' );
define( 'NONCE_SALT',       '0L5{V_Hqf (@,?1oaI_AF_7^Q&7UBNHGGatRfqwa?2 UGiz{x7.|AH?+He4<`gWn' );

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
