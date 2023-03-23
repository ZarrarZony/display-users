<?php
/*
Plugin Name: Display WP Users
Description: Categorize & Display users
Author:      Zony
Version:     1.0
Author URI:  https://www.fiverr.com/users/zony101 & https://linkedin.com/in/muhammadzarrar
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'Action will be taken' );

add_shortcode('DisplayUsers', 'displayFrontend');

function displayFrontend(){
	if(is_admin()){
		return '';
	}
	$users = getUsersData();
	initCssJs();
	ob_start();
	include_once('views/displayFrontend.php');
	return ob_get_clean();
	ob_end_clean();
}

function getUsersData(){
	$users = get_users(array('role' => 'subscriber'));
	foreach($users as $user){
		$user->phone = get_user_meta($user->ID,'billing_phone');
		$user->berater_category = get_user_meta($user->ID,'berater_category');
		$user->specialization = get_user_meta($user->ID,'specialization');
		$user->places = get_user_meta($user->ID,'places');
		$user->bild_berater_job_seite = wp_get_attachment_image_src((get_user_meta($user->ID,'bild_berater_job_seite')) ? get_user_meta($user->ID,'bild_berater_job_seite')[0] : null,10)[0];
	}
	return $users;
}

function initCssJs() {
	wp_enqueue_script('customScript',plugin_dir_url( __FILE__ ).'assets/script.js');
	wp_enqueue_style('customStyle',plugin_dir_url( __FILE__ ).'assets/style.css' );
}

getUsersData();