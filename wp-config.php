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
define('DB_NAME', 'wp-playground');

/** MySQL database username */
define('DB_USER', 'caseykdavis');

/** MySQL database password */
define('DB_PASSWORD', 'Punkrock*2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY', 'F/W#K(bpSl2>zlBl?z+<$5+Q(9!U+o7I(J6qn!{nN!1MN(v}wp>WMzKAM- |oG2v');
 define('SECURE_AUTH_KEY', 'TcB{d7abJ,]Q_8<`EF-{K=+|w[-HwgPI#my`% v-~|:sYhM#TI/+:r2yBd$;*E)z');
 define('LOGGED_IN_KEY', '>;mf-/V,ZKqND`{2Q[3Wg|YqU(s2y`bm)=bkp|G#}t)JK4!h0|!5#_%EzBmr,v%-');
 define('NONCE_KEY', 'fHQ<Q(hJ;See11!TZMD.)!i9NFTE]#4m% m $$/(|Bs$e.j8>*IEaNqaZs;!G-E.');
 define('AUTH_SALT', 'EzF-3Azg/#y< 0Xc5;@Sm)z)[|]+WT.vZGd!UOx.O)~SiB3<N6QXf{3~zQZ:%xOu');
 define('SECURE_AUTH_SALT', 'gcb/SaoX^fq`haj|T_W]:u5)Gb#mYx.W(=J>dxOBGdUh,#J[T.adZ?OV+Bgwe+=7');
 define('LOGGED_IN_SALT', 'Os&=yzm1}1]ah~Rgu:P+M;2bJSj%Nfj/Hk3 L6_etp@#OzK0k;:2}(g(r1kVIl+%');
 define('NONCE_SALT', 'aOk[j)4y0Ru+83}Sm1.SVb=c1(WxDZ?UC{{wngjb} xnT*3McL*VDZq[~tH(!`P.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
