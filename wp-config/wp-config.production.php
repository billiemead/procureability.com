<?php
/**
 * Production environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 * 
 * @package    BillieMead WordPress Multi-Environment Config
 */

# Database Configuration
define( 'DB_NAME', 'wp_procurability' );
define( 'DB_USER', 'procurability' );
define( 'DB_PASSWORD', 'O_4ohFWtYBqAfAGMRCK-' );
define( 'DB_HOST', 'localhost:/var/run/mysqld/mysqld.sock' );
define( 'DB_HOST_SLAVE', 'localhost:/var/run/mysqld/mysqld.sock' );


# Localized Language Stuff

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'procurability' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'e92ffed93a5e2502239fd6ed98c982174ee15190' );

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

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

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

$wpe_all_domains=array ( 0 => 'procureability.com', 1 => 'procurability.wpengine.com', 2 => 'www.procureability.com', 3 => 'procurability.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => '127.0.0.1', );

$wpe_special_ips=array ( 0 => '35.190.191.226', 1 => '10.76.21.207', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( 0 =>  array ( 'match' => 'procureability.com', 'custom' => 'procurability.wpenginepowered.com', 'secure' => true, 'dns_check' => 0, ), 1 =>  array ( 'match' => 'www.procureability.com', 'custom' => 'procurability.wpenginepowered.com', 'secure' => true, 'dns_check' => 0, ), 2 =>  array ( 'match' => 'procurability.wpengine.com', 'custom' => 'procurability.wpenginepowered.com', 'secure' => true, 'dns_check' => 0, ), );

$wpe_netdna_domains_secure=array ( 0 =>  array ( 'match' => 'procureability.com', 'custom' => 'procurability.wpenginepowered.com', 'secure' => true, 'dns_check' => 0, ), 1 =>  array ( 'match' => 'www.procureability.com', 'custom' => 'procurability.wpenginepowered.com', 'secure' => true, 'dns_check' => 0, ), 2 =>  array ( 'match' => 'procurability.wpengine.com', 'custom' => 'procurability.wpenginepowered.com', 'secure' => true, 'dns_check' => 0, ), );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );


# WP Engine ID


# WP Engine Settings
/** Disable WP File Editor */
define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

define('WP_LOCAL_DEV', true);
define('WP_DEBUG', false);
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
define( 'WP_SITEURL', 'http://procureability.com' );
define( 'WP_HOME', 'http://procureability.com' );
define('FORCE_SSL_ADMIN', true);

define( 'WPE_SFTP_ENDPOINT', '104.196.180.90' );

define( 'WP_CACHE', TRUE );