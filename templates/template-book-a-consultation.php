<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Book A Consultation & Email Design Template
 *
 * @package storefront
 */
 
 
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];




global $post;
$slug = $post->post_name;

if($slug=="email-design"){
	$book_type ="email-design";
	$contact_type="Email";

} else {
	$book_type ="consultation";
	$contact_type="Consultation";
}


include "template-book-a-test_ride.php";



?>