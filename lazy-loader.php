<?php

/*
Plugin Name: Kento lazy page load.
Plugin URI: http://kentothemes.com
Description: This plugin will enable a awesome, nice, smooth ,cusmomizeble lazy loader in your website.
Version: 1.0
Author: kentothemes
Author URI: http://kentothemes.com
License URI: http://kentothemes.com/copyright/

*/

/*===============================================
    Kento Lazy Load Plugin Path Register
=================================================*/
	
define('KENTO_LAZY_LOAD_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );



/*===============================================
    Register Latest jQuery/Css or Js Files
=================================================*/
function kento_lazy_load_script()
	{
	wp_enqueue_script('jquery');
	wp_enqueue_script('kento-lazy-loader-min-js', plugins_url( '/js/jquery.loading-indicator.js', __FILE__ ), array('jquery'), '1.0', false);
	wp_enqueue_style('kento-lazy-loader-main-css', KENTO_LAZY_LOAD_PLUGIN_PATH.'css/jquery.loading-indicator.css');
	wp_enqueue_style('wp-color-picker');
	wp_enqueue_script('kento-lazy-loader-wp-color-picker', plugins_url(), array( 'wp-color-picker' ), false, true );
	}
add_action('init', 'kento_lazy_load_script');





/*===============================================
    Kento Lazy Load Action Hoock
=================================================*/
function kento_lazy_load_js_active(){

	 $lazy_loader_timeout = get_option( 'lazy_loader_timeout' );
			if(empty($lazy_loader_timeout))
				{
					$lazy_loader_timeout = "1500";
				}
	?>

<script>
	jQuery(function() {
		var homeLoader = jQuery('body').loadingIndicator({
			useImage: false,
		}).data("loadingIndicator");
		
		setTimeout(function() {
			homeLoader.hide();
		},<?php echo $lazy_loader_timeout; ?>);
		
	});
</script>

<?php	
	}

add_action('wp_head', 'kento_lazy_load_js_active');




/*===============================================
    Kento Lazy Load Active Css
=================================================*/
function kento_lazy_load_css_active(){
	
	 $lazy_loader_top_color = get_option( 'lazy_loader_top_color' );
			if(empty($lazy_loader_top_color))
				{
					$lazy_loader_top_color = "#4aa3df";
				}		 
	 
	 $lazy_loader_left_color = get_option( 'lazy_loader_left_color' );
			if(empty($lazy_loader_left_color))
				{
					$lazy_loader_left_color = "#ffffff";
				}	 
	 $lazy_loader_bottom_color = get_option( 'lazy_loader_bottom_color' );
			if(empty($lazy_loader_bottom_color))
				{
					$lazy_loader_bottom_color = "#4aa3df";
				}	 
	 $lazy_loader_right_color = get_option( 'lazy_loader_right_color' );
			if(empty($lazy_loader_right_color))
				{
					$lazy_loader_right_color = "#ffffff";
				}

	 $lazy_loader_border_radius = get_option( 'lazy_loader_border_radius' );
			if(empty($lazy_loader_border_radius))
				{
					$lazy_loader_border_radius = "50";
				}
	 $display_lazy_load = get_option( 'display_lazy_load' );
	 
	 $lazy_loader_width = get_option( 'lazy_loader_width' );
			if(empty($lazy_loader_width))
				{
					$lazy_loader_width = "15";
				}	 
	 	 
	 $lazy_loader_height = get_option( 'lazy_loader_height' );	 
			if(empty($lazy_loader_height))
				{
					$lazy_loader_height = "15";
				}	 
	?>

<style type="text/css">
.loading-indicator-wrapper.loader-visible {
  opacity: 1;
  z-index: 9999;
}
.loading-indicator-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  text-align: center;
  background: rgba(0,0,0,.701881);
  -moz-transition: all 250ms linear;
  -o-transition: all 250ms linear;
  -webkit-transition: all 250ms linear;
  transition: all 250ms linear;
  display:<?php echo $display_lazy_load; ?>;
}
.loading-indicator-wrapper .loader {
  margin: 0 auto;
  font-size: <?php echo $display_lazy_load_op; ?>px;
  position: relative;
  display: inline-block;
  text-indent: -9999em;
  border-top: 1.1em solid <?php echo $lazy_loader_top_color; ?>;
  border-right: 1.1em solid <?php echo $lazy_loader_right_color; ?>;
  border-bottom: 1.1em solid <?php echo $lazy_loader_bottom_color; ?>;
  border-left: 1.1em solid <?php echo $lazy_loader_left_color; ?>;
  -webkit-animation: load 1.1s infinite linear;
  animation: load 1.1s infinite linear
}
.loading-indicator-wrapper .loader,
.loading-indicator-wrapper .loader:after {
  border-radius:<?php echo $lazy_loader_border_radius; ?>%;
  width: <?php echo $lazy_loader_width; ?>em;
  height: <?php echo $lazy_loader_height; ?>em;
}
</style>

<?php	
	}

add_action('wp_head', 'kento_lazy_load_css_active');


/*===============================================
    Kento Lazy Load Option Register
=================================================*/
function kento_lazy_load_option_init(){
	
	register_setting( 'kento_lazyloader_plugin_options', 'lazy_loader_top_color');
	register_setting( 'kento_lazyloader_plugin_options', 'lazy_loader_bottom_color');	
	register_setting( 'kento_lazyloader_plugin_options', 'lazy_loader_left_color');
	register_setting( 'kento_lazyloader_plugin_options', 'lazy_loader_right_color');
	register_setting( 'kento_lazyloader_plugin_options', 'lazy_loader_timeout');
    }
add_action('admin_init', 'kento_lazy_load_option_init' );



/*===============================================
    Kento Lazy Load Option Page Settings
=================================================*/
function kento_lazy_load_settings(){
	include('loader-admin.php');
}


function kento_lazy_load_menu() {
	add_menu_page(__('Lazy Load','kentolazyload'), __('Lazy Load','kentolazyload'), 'manage_options', 'kento_lazy_load_settings', 'kento_lazy_load_settings');
}
add_action('admin_menu', 'kento_lazy_load_menu');



?>