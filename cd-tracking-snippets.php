<?php

/*
Plugin Name:  Tracking Snippets
Description:  Add various tracking snippets (Tag Manager, Analytics, Facebook Pixel, etc. ) in their correct locations.
Version: 1.0.0
Author: Creative Distillery
Author URI: creativedistillery.com
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'admin_init', 'acf_activated' );

function acf_activated() {
    if ( current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
        add_action( 'admin_notices', 'no_acf_plugin_notice' );

        deactivate_plugins( plugin_basename( __FILE__ ) );

        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
        }
    }
}

function no_acf_plugin_notice() {
  echo '<div class="notice error is-dismissible">';
  echo '<p>Wait! Advanced Custom Fields Pro must be activated before Tracking Snippets plugin can work.</p>';
  echo '<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button>';
  echo '</div>';
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Tracking Snippets',
		'menu_title'	=> 'Tracking Snippets',
		'menu_slug' 	=> 'cd-tracking-snippets',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

require( 'fields.php' );

function cd_head_snippets() {
  echo '<!-- cd_head_snippets -->';
  if ( have_rows( 'snippets', 'options' ) ) : while ( have_rows( 'snippets', 'options' ) ) : the_row();
    $location = get_sub_field( 'location' );
    if ( $location == 'head' ) {
      the_sub_field( 'code' );
    }
  endwhile; endif;
}

function cd_body_snippets() {
  if ( have_rows( 'snippets', 'options' ) ) : while ( have_rows( 'snippets', 'options' ) ) : the_row();
    $location = get_sub_field( 'location' );
    if ( $location == 'body' ) {
      the_sub_field( 'code' );
    }
  endwhile; endif;
}

function cd_footer_snippets() {
  if ( have_rows( 'snippets', 'options' ) ) : while ( have_rows( 'snippets', 'options' ) ) : the_row();
    $location = get_sub_field( 'location' );
    if ( $location == 'foot' ) {
      the_sub_field( 'code' );
    }
  endwhile; endif;
}

add_action( 'wp_head', 'cd_head_snippets', 1 );
add_action( 'cd_begin_body', 'cd_body_snippets' );
add_action( 'wp_footer', 'cd_footer_snippets' );
