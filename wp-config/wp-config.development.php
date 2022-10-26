<?php
/**
 * Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 *
 * @package    BillieMead WordPress Multi-Environment Config
 */

# Database Configuration
define( 'DB_NAME', 'wp_procureabi2dev' );
define( 'DB_USER', 'procureabi2dev' );
define( 'DB_PASSWORD', 'xZoyuvFhlwrL2uGBz1IV' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );


# Localized Language Stuff

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'procureabi2dev' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '7fe1bd721afe0a5cafc7d68a2f64d52262239143' );

define( 'WPE_CLUSTER_ID', '205703' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'procureabi2dev.wpengine.com', 1 => 'procureabi2dev.wpenginepowered.com', 2 => 'development.procureability.com', );

$wpe_varnish_servers=array ( 0 => '127.0.0.1', );

$wpe_special_ips=array ( 0 => '35.190.191.226', 1 => '10.76.35.160', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => '127.0.0.1:11211', ), );


# WP Engine ID


# WP Engine Settings
/** Disable WP File Editor */
define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

define('WP_LOCAL_DEV', true);
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
define( 'WP_SITEURL', 'http://development.procureability.com' );
define( 'WP_HOME', 'http://development.procureability.com' );
define('FORCE_SSL_ADMIN', true);

define( 'WPE_SFTP_ENDPOINT', '104.196.180.90' );

define( 'WP_CACHE', TRUE );

