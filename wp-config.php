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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heneyhome' );

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
define( 'AUTH_KEY',         'LOC2;XDV#gxZW#b{+V<Yj<b=RZ~;;C_&2d;v:eT4t2OI*+2S7Xd1_u75[=s_QBif' );
define( 'SECURE_AUTH_KEY',  'f&uPVU!,}@L(*ac7j}SG>vi~DIKClr`3f?Q$7(Di`EJ2GV?}D=.y@ZErK/NpzK9+' );
define( 'LOGGED_IN_KEY',    '(S.ppZpM5|/~t)`aAB*Gp!+O!lFzh5_z,~K>>%r!./[;40{UO)Ek}~4A>S>X,#Ex' );
define( 'NONCE_KEY',        '-}=kgFQBun|TNG|Oa(f{<j$}mEC:fBkrV$M6jskjbR/.L(C(|s`yJm{2&3q  MzI' );
define( 'AUTH_SALT',        'kl*LFf/$H}54=ZgIRXlrBu+n? XGsg#5e)y_7u&$2YmF#Pmi?ZgJ`B6LwBfXrq/<' );
define( 'SECURE_AUTH_SALT', 'h~V@8)KDEW103w4 _yDPO8:FG3|QnNGb &,5f?1t_Tg} iA%4vhE<{K 8q@=S_+~' );
define( 'LOGGED_IN_SALT',   'b9f-dwHJO+U$ymVj ?{R ;v(<@<^mzIse*5(y{x>*m3S`  %k/7^^]alr1f-eu&1' );
define( 'NONCE_SALT',       'gM^Bzy5paxe]!bo/er7D :]Q8+lR6t^pF6Ih-tDJe1Zs&T#6/g%AkA79{`ru;sJx' );

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
