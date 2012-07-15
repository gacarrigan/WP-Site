<?php
/*
  Plugin Name: WP Engine System
  Plugin URI: http://wpengine.com/plugins
  Description: WP Engine-specific services and options
  Author: WP Engine
  Version: 2.0.32
  
  Changelog: (see changelog.txt)
 */

define( 'WPE_PLUGIN_VERSION', '2.0.32' );
define( 'WPE_PLUGIN_URL', content_url('/mu-plugins/wpengine-common') );

require_once(dirname(__FILE__)."/wpengine-common/plugin.php");
