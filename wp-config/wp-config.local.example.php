<?php
/**
 * Local Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment
 * in this file.
 *
 * @package    BillieMead WordPress Multi-Environment Config
 */

# Database Configuration
define( 'DB_NAME', 'procureability_wpengine' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );

# Localized Language Stuff

// define( 'WP_ENV', 'local' );

define( 'WP_AUTO_UPDATE_CORE', FALSE );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', 0775 );
define( 'FS_CHMOD_FILE', 0664 );
define( 'DISALLOW_FILE_MODS', FALSE );
define( 'FORCE_SSL_LOGIN', FALSE );

# WP Engine Settings
/** Disable WP File Editor */
define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

define('WP_DEBUG', TRUE);
define( 'WP_DEBUG_LOG', TRUE );
define( 'WP_DEBUG_DISPLAY', FALSE );
@ini_set( 'display_errors', 0 );
// define( 'WP_SITEURL', 'https://devprocureability.localdev' );
// define( 'WP_HOME', 'https://devprocureability.localdev' );
define('FORCE_SSL_ADMIN', FALSE);

define( 'BE_MEDIA_FROM_PRODUCTION_URL', 'https://procureability.com' );