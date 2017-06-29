<?php 
/*
Plugin Name: Disable comments notifications to admin email
Version: 1.0
Author: Jan Bien
Author URI: http://www.janbien.cz/
Copyright: Jan Bien
*/

add_filter('comment_moderation_recipients', 'webmaestro_no_comment_notify_jb', 10, 2);

function webmaestro_no_comment_notify_jb ( $emails, $comment_id ) {
	$admin_email = get_option( 'admin_email' ); 
	$key = array_search( $admin_email, $emails );
	if ( $key !== false ) unset ( $emails[$key] );
	return $emails;
}
