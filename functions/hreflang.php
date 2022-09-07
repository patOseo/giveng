<?php 

/**
 * Prints the hreflang tags based on the meta fields value defined in the back-end.
 */
function apply_hreflang_tag() {

	if(get_the_ID()) {
		//Get the post meta
		$hreflang = get_field( 'no_usa_page', get_the_ID() );
		$page_link = get_permalink( get_the_ID() );
		$hreflang_link = 'https://www.givensliftingsystems.com/' . get_post(get_the_ID())->post_name . '/';
	
		//Print the hreflang tags
		if($hreflang != 1) {
			echo '<link rel="alternate" hreflang="en-CA" href="' . esc_url( $page_link ) . '" />' . "\n";
			echo '<link rel="alternate" hreflang="en-US" href="' . esc_url( $hreflang_link ) . '" />' . "\n";
		}	
	}
}

//Hook used to print data in the head tag of the front-end
add_action( 'wp_head', 'apply_hreflang_tag' );