<?php 
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_enqueue_styles' );
function twenty_twenty_one_child_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/style.css' );
	wp_enqueue_style( 'sb-all', get_stylesheet_directory_uri() .'/assets/css/all.min.css' );
	wp_enqueue_style( 'sb-admin', get_stylesheet_directory_uri() .'/assets/css/sb-admin.css' );
} 

add_action( 'wp_ajax_nopriv_get_data', 'my_ajax_handler' );
add_action( 'wp_ajax_get_data', 'my_ajax_handler' );

function my_ajax_handler() {
    
	/* print_r($_POST); */
	
	$user_id = $_POST['user_id'];
	$email = $_POST['new_email'];
	$exists = email_exists( $email );
	if ( $exists ) {
		wp_send_json_error( 'That E-mail is alreday registered' );
	} else {
		$args = array(
			'ID'         => $user_id,
			'user_email' => esc_attr( $email )
		);
		wp_update_user( $args );
		wp_send_json_success( 'That E-mail does not belong to any registered users on this site' );
		
	}
	
	
}

 ?>
 
 
 