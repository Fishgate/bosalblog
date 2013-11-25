<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

 if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
     include( dirname( __FILE__ ) . '/wp-config-local.php' );
 }else{
    define('DB_NAME', 'bosalblog');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');

    // Overwrites the database to save keep edeting the DB
    define('WP_HOME','http://staging.fishgate.co.za/OIM/');
    define('WP_SITEURL','http://staging.fishgate.co.za/OIM/');

    /**
    * For developers: WordPress debugging mode.
    *
    * Change this to true to enable the display of notices during development.
    * It is strongly recommended that plugin and theme developers use WP_DEBUG
    * in their development environments.
    */

    define('WP_DEBUG', false);
 }


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']n4U!0Yc|t^|fXbX+m+Cd)Og[uS=PoSrpRIh:k>Z;00)l=4& aysSD2qS<^cV:0<');
define('SECURE_AUTH_KEY',  'hc`8ORuC$FhRF>UKjN3Y:8<j6#^B4qJ5$B2c1GFPw`.NZ@=ua<14^M-]h%g4z-r[');
define('LOGGED_IN_KEY',    '[n}eabGPxS=/E2B# JuC<=^+@cR1PVReq`v!+MNfhYzfbSpmA)[_0CI+17%DJB&>');
define('NONCE_KEY',        '@1mTaMXV o1&7a5.t2%8`psqC1Bw=0?hvCO:2~YfZJ>eQha2bDECG6cz`knQ!| Z');
define('AUTH_SALT',        'hJ07y0h~!=@qV)ZU?WJ)(vt0W2T4Rn|iWz$QEh!}?8B& Tm:vl44pTpBVT^N8bFt');
define('SECURE_AUTH_SALT', 'w[~HCA4!wK|t!w,DX(UB%=M-%vu(aFY/HPqK?T0YAI)V-p+~!oQ+|zNd+|pn-i}[');
define('LOGGED_IN_SALT',   'dc!R7iW6d!h%;<qGtcosydP%J+Jf~a@jp[4R+_,>~~<[toYaUh+2~*{Rw*%s+=(|');
define('NONCE_SALT',       'AqLDYX!Gs(*+~z?muq|xz<Ct[7[nnulkk/2jPp^.]!#X>>QWBn>u.3GM-wtRRJ$x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
