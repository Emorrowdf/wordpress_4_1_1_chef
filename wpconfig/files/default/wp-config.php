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

define('WP_HOME','d124rvi8v5vcgt.cloudfront.net');
define('WP_SITEURL','d124rvi8v5vcgt.cloudfront.net');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'MeaganAPhoto');

define('WP_REDIS_HOST', 'photo-wordpress.1sysmb.0001.use2.cache.amazonaws.com');

/** MySQL database username */
define('DB_USER', 'MeaganAPhoto');

/** MySQL database password */
define('DB_PASSWORD', 'MeaganAPhoto');

/** MySQL hostname */
define('DB_HOST', 'meaganaphoto.csuxspxhhoee.us-east-2.rds.amazonaws.com:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v4n@Pt R<an(eUV5g2e1#%<bcgcy+1Q`aGR$a4~zV:59c*a5o-KHV=` p7zOKXH!');
define('SECURE_AUTH_KEY',  '4/{R6wOVvh2!n4E!nK/&YHu+vkV) EGP<$ )-7|e-nYH>WF&s]BW`^:@&z2l8z4N');
define('LOGGED_IN_KEY',    'PweQT4?<,yvqu r4bZMBCiyH^z994*dL-d8Lz2.Xx@Ms^1+Lo4!GL@#KZ4:n5tHL');
define('NONCE_KEY',        'WLzbVBMbzBqS0yLV$M!pF%2839qb0<):]v@{u+MfVgztA` B2TWIk{ylk98(6hR+');
define('AUTH_SALT',        'e<EZTjZk[bMTQlsm~dB7YfF.9uDMYT|b8M^qV*wBQGdNDV+QsL<W){2lI6_zU^Jx');
define('SECURE_AUTH_SALT', '66,89J[[D)!pq][>a:x6q.$v1>FGM[vZBi>>WKcOKG5puQz#&{)LY#a?mJ@p[.#^');
define('LOGGED_IN_SALT',   'z0z,?n!OAVT;9mdnW}9&oS7~@7+8%F5c|,n )qpixGG&~`/$SS2S+^S%{3b8$#(A');
define('NONCE_SALT',       'E30-L%:eFbDQy4oLvmg}^1HH( 0Euvry%Cz.tdL?E-.3aIAG9_-aPoX> r1G6YM ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'photo_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
