<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_techgirlz' );
define( 'DB_USER', 'techgirlz' );
define( 'DB_PASSWORD', 'DXLN2RxdgVQjqtmK' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_unicode_ci' );
$table_prefix = 'wp_';



# Security Salts, Keys, Etc
define( 'AUTH_KEY', 'L:jtL{>Q,v`8}yK%PB_+D+u;6Mpl,te+@Fq}0k;FEh_b^/CDJqg;]!tovj,]%4E)' );
define( 'SECURE_AUTH_KEY', '->c=Qp@=sP3*b+Y+rd*A9b-8WXq]^vXw4-uLhVd(8|~H_(J|AGf O]s$d0p]uc` ' );
define( 'LOGGED_IN_KEY', '3uF1F*bcTf{ju-W00ub^t_5*s&2}k&6?nM78TiMpe%q&:-Qx@aymd/lN$gi2A@O_' );
define( 'NONCE_KEY', 'e{R-twxC^7|m8;O<+c1.oev3q8hPyyf-U74VWT+:+kX5-~I6je>,$7Lc(2Fn#>z+' );
define( 'AUTH_SALT', 'Vb}*Ya87M{`6EK-EY[N]g[e*OV {J]TboN9dc[GjJ~X%(kovFlWtLABFcO;8@_#X' );
define( 'SECURE_AUTH_SALT', '1(p^{CGP3t}X3yo1TD55bqwGxl:&(UeixPFG_q{`7b&_53o7DS+Zhf%`2i0RO.~K' );
define( 'LOGGED_IN_SALT', '+#}r_;Qw-8@:eD4sp>s4}4b(t.4j|k<C=jYUkIo~yT%|T]6t Y/V$nC$XwS*&j7Y' );
define( 'NONCE_SALT', 'D_w|0g|RL//p-N&#-h9%Z8JZNFcW[3h8FC;+#V(I8-.65d~F|:LX|m?={[l+EmZ3' );



# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'techgirlz' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c45164711123edbb7199098ca0a7669f7451b802' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '10410' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 22 );

define( 'WPE_LBMASTER_IP', '66.216.109.164' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

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

$wpe_all_domains=array ( 0 => 'techgirlz.wpengine.com', 1 => 'www.techgirlz.org', 2 => 'techgirlz.org', );

$wpe_varnish_servers=array ( 0 => 'pod-10410', );

$wpe_special_ips=array ( 0 => '104.130.136.216', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_SITEURL', 'http://techgirlz.staging.wpengine.com' );

define( 'WP_HOME', 'http://techgirlz.staging.wpengine.com' );
define( 'WPLANG', '' );



# WP Engine Settings
define( 'PWP_DOMAIN_CONFIG', 'www.techgirlz.org' );





define( 'WPE_CACHE_TYPE', 'generational' );



























/*SSLSTART*/
if ( isset( $_SERVER['HTTP_X_WPE_SSL'] ) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on';
/*SSLEND*/



# Custom Settings












$_wpe_preamble_path = null;



# That's It. Pencils down
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );

$_wpe_preamble_path = null; if(false){}
