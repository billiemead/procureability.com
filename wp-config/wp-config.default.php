<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files so make sure these are only set once.
 *
 * @package    BillieMead WordPress Multi-Environment Config
 */
  
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
define('AUTH_KEY', 'Q15L}P;f^&E]pnbOfj-)^e#A(y%qWW+1zFy[E8ygtD;Hxdk@}{*ap]</p<>RRP/L');
define('SECURE_AUTH_KEY', 'z!T*jVO3pp6Zv62d;u$(+1;j&vVH759fq:0$-nTBDhZcc,jFR6:>1bZjJYA]`o$C');
define('LOGGED_IN_KEY', 'WDY&#PpS[{/ra?E$^7MJh=l<ud?SFdgUZ}o}NAoT7_ws7^krL?e|8)|2CEbly::q');
define('NONCE_KEY', ']e3f_8p1b;0,9%|^ jI(YHR)~;0Wb<PoHQuPn!N2@AGXSd0zc^v~-6&6bV6qBHiM');
define('AUTH_SALT',        'P$BW9lA{ap|qX+{K-oe![[`n[Z|Aqxq*(-LJ7}b/N{s/,`N3~?g<e}(_I/$jdkx}');
define('SECURE_AUTH_SALT', '28wyP$yP |qg7}LstC]L/r&Y::z({yCGsb]UJWS9{Xw}`hnC{~MCz+x4]_Xbiuu9');
define('LOGGED_IN_SALT',   'gduXv-S{a(IqWq,N(e2$l9iB&e{Lw]6b7e+ZFK4eN~?^yMAJzVz/IRsIf`_d-;iY');
define('NONCE_SALT',       '~+SM5?LP)Q2VmmfxU+<}/2Uh~-J_WZWF/5z1U:q%k>w6Ng/Z0C@%f>8T^Zf-%P!L');

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
