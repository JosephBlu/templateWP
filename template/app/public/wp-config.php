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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rkStoU75MWLHLU4loHRCyif4aR8MU859s/3g9IUVGqgsv5iqdr20+KhmUK4Z60QyOJs5jcY9EJATs63BOllA0A==');
define('SECURE_AUTH_KEY',  '297j2shV4IEc2Lkkm1U0RZdcY8saskUzQQQAnFyoepR83laRGyn2JiYteWKXRBxq4x/hBUw2VolJrTGURwt00w==');
define('LOGGED_IN_KEY',    '7oqH2dFNyx/rvni37YIADM+UTHn+Ze82f2lT27HXmiswCtN1niJdeMDdQwWkuxEHV77fme1Fs+FJqvws/Aj+Zg==');
define('NONCE_KEY',        'Fik7TU7UAazwfMRGSu6TG0RRJ0rk7TJiK74g4UaNLB6TsTbQRr4+/5ptk+tuGNrlctb9QeHv8dwEJasgxdO81w==');
define('AUTH_SALT',        '936EgBvZsdWUCzOEDV/bctgzJ86/esazzmcJutxUKFq/pCNa/iXuDJ9GTru7fPHwKFGqB7GaCmAoHLAhpXwzMg==');
define('SECURE_AUTH_SALT', 'vSTSRkXEtXs8whOhj9vgYCtxoQZ5EoqgngKd5CAiZWZtT69lmxCod5izYZauuWWUeB2juXyFt8MgUZYRLXPqcg==');
define('LOGGED_IN_SALT',   'UhRE172eESFWl/j8bDjmgr4PKA3CydFL8i62WAM+K+rk/EQIyyF8iwDv+Z0n+Nb6gwQ02NJtT0bk/bgPYhuOCQ==');
define('NONCE_SALT',       'XLlWTLZNvKhbtzeQXIPV+Q9yy6een+xEmtVGJ7M1PSq9FfRiVKYlp1RQzQI+b7ws/U5hSu2/TDnAZkjYZtChrg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
