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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ajepanet_wp508');

/** MySQL database username */
define('DB_USER', 'ajepanet_wp508');

/** MySQL database password */
define('DB_PASSWORD', '59pBS1)b1)');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'njisderhhom48weo0n3wpnsvs551np6moku3foj1kmtykkqvsbz9jkpt1he8sj81');
define('SECURE_AUTH_KEY',  'wssl0pmk3fukv8dhxpzununks93vhhkysegvqwzkjely9elviheklopwxzmicet1');
define('LOGGED_IN_KEY',    'it01tauoowjbfljwevddfrztxubeqbeeabpjwcsqchbfku0zzrhqwubhrm64oidj');
define('NONCE_KEY',        'nf2cdryhzzva0mka8xpmla7rblxy1qd40oxow2fuyurk7xxq9lzutelr29jsajsq');
define('AUTH_SALT',        'capegrsjlcwtswycwzp5cu9fq83axvodknpumplrgiqlsf6tw59udmt44fladacx');
define('SECURE_AUTH_SALT', 'xlc2sqfedhkrewxoagtlgij0mnj6ys9uqsyud1z53rtrvaqogvikv8pc7mpnxo7c');
define('LOGGED_IN_SALT',   '4brxjapojvepsrbzfnth5orwzunpwhxswsghegk8codaacgkypuzjchtkurrb7wp');
define('NONCE_SALT',       'wzsog57qkpvgmpltn7fzyplti8eapwvtmc4snmwk8hcdqqcclspqe1pflrqp8pys');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdt_';

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
