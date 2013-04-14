<?php
# Database Configuration
define('DB_NAME','wp_gacarrigan');
define('DB_USER','gacarrigan');
define('DB_PASSWORD','UPnSW3Z3CAtbv4MW7elr');
define('DB_HOST','127.0.0.1');
define('DB_HOST_SLAVE','localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'wl0WU;2US20Qa>W@!l$u._i!*Wpj9%]kOd*=l&-Dm&PsS}13(<jj7l:vC2k./vK&');
define('SECURE_AUTH_KEY',  'a|a,R,RxN1*]Dq|D,h<q;g2a%8A<&2gkA,08w4rp}aYj+(-|6 6;/J6z=<cRiZ R');
define('LOGGED_IN_KEY',    '9.P:Cu>-|~5yf9R# x}-])C+xcr<!V#Kg,g*sCi7-1%vJXK-yT+WE5eF=LPb<5j;');
define('NONCE_KEY',        'z8<ydsq?1yM^a0v+8{%HaxuU]tlj*byv$-X:a,7.$tlqhHHorp]::xN ;Q+p)NAx');
define('AUTH_SALT',        'tm)eM+79cJ[gsWZzS+-a+WkL~qr6qC*aL^]7BTK?b%lDlk_fbVMCffpkxM{?-7<F');
define('SECURE_AUTH_SALT', '%_aL>5x;&Xm=;i{N|A{5@Cw,,)|N@#/vO;*%MOX)!!d{*.GZ^M])MJgl$-9,A~>p');
define('LOGGED_IN_SALT',   'C D()56u-.F?I>7G!~yn(U5evb!J<1*i-*sQ!:;gDD/%]NfBqLmdlV1|h@0WuTY$');
define('NONCE_SALT',       'uf|rGvE+@aAKI!a_]<f-k]?6F|Zs}Eixaj@#|bSqgIyoJNjqbk0L7Cena]6Zg2D(');


# Localized Language Stuff

define('WP_CACHE',TRUE);

define('PWP_NAME','gacarrigan');

define('FS_METHOD','direct');

define('FS_CHMOD_DIR',0775);

define('FS_CHMOD_FILE',0664);

define('PWP_ROOT_DIR','/nas/wp');

define('WPE_APIKEY','05a27def0b1fb9eb59e48d5322eac7091dc251e4');

define('WPE_FOOTER_HTML',"<a href=\"http://wpengine.com/\" target=\"_blank\">Fast WordPress Hosting</a>");

define('WPE_CLUSTER_ID','1198');

define('WPE_CLUSTER_TYPE','pod');

define('WPE_ISP',true);

define('WPE_BPOD',true);

define('WPE_LARGEFS_BUCKET','largefs.wpengine');

define('DISALLOW_FILE_EDIT',FALSE);

define('DISABLE_WP_CRON',false);

define('WPE_FORCE_SSL_LOGIN',false);

define('FORCE_SSL_LOGIN',false);

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define('WPE_EXTERNAL_URL',false);

define('WP_POST_REVISIONS',FALSE);

define('WP_TURN_OFF_ADMIN_BAR',false);

umask(0002);

$wpe_cdn_uris=array ();

$wpe_no_cdn_uris=array ();

$wpe_content_regexs=array ();

$wpe_all_domains=array (  0 => 'www.westcoast-east.com',  1 => 'gacarrigan.wpengine.com',  2 => 'westcoast-east.com',);

$wpe_varnish_servers=array (  0 => 'pod-1198',);

$wpe_ec_servers=array ();

$wpe_largefs=array ();

$wpe_netdna_domains=array ();

$wpe_netdna_push_domains=array ();

$wpe_domain_mappings=array ();

$memcached_servers=array ();

define('WPE_RO_FILESYSTEM',false);

define('DISALLOW_FILE_MODS',FALSE);

define('WPE_CDN_DISABLE_ALLOWED',false);

define('WPE_BETA_TESTER',false);
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
