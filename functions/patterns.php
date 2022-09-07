<?php

// Remove all built-in WordPress patterns
function fire_theme_support() {
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'fire_theme_support');

// Register the Givens category
function givens_register_my_pattern_categories() {
	register_block_pattern_category(
		'givens',
		array( 'label' => __( 'Givens', 'givens' ) )
	);
}
 
add_action( 'init', 'givens_register_my_pattern_categories' );


// Register patterns
function givens_register_my_patterns() {
	register_block_pattern(
	    'givens/cta-pattern',
	    array(
	        'title'       => __( 'Call To Action', 'givens' ),
	        'categories'  => array('givens'),
	        'description' => _x( 'A Call-To-Action block.', 'Block pattern description', 'givens' ),
	        'content'     => "<!-- wp:cover {\"url\":\"/wp-content/uploads/2022/07/cta-bg.jpeg\",\"id\":92,\"hasParallax\":true,\"dimRatio\":80,\"minHeight\":181,\"minHeightUnit\":\"px\",\"gradient\":\"dark-red-to-red\",\"align\":\"full\",\"className\":\"mb-0\"} -->\n<div class=\"wp-block-cover alignfull has-parallax mb-0\" style=\"background-image:url(/wp-content/uploads/2022/07/cta-bg.jpeg);min-height:181px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-red-to-red-gradient-background\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"className\":\"mb-0\"} -->\n<div class=\"wp-block-columns mb-0\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:66.66%\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"style\":{\"typography\":{\"fontSize\":\"22px\"}},\"className\":\"mb-0\"} -->\n<p class=\"has-text-align-center mb-0\" style=\"font-size:22px\">Have any questions about our lifting equipment?</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" href=\"/contact/\">Contact Us</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
	    )
	);
	register_block_pattern(
	    'givens/contact-block-pattern',
	    array(
	        'title'       => __( 'Contact Form Block', 'givens' ),
	        'categories'  => array('givens'),
	        'description' => _x( 'Contact form block.', 'Block pattern description', 'givens' ),
	        'content'     => "<!-- wp:cover {\"url\":\"/wp-content/uploads/2022/07/cta-bg.jpeg\",\"id\":92,\"dimRatio\":90,\"overlayColor\":\"black\",\"minHeight\":625,\"minHeightUnit\":\"px\",\"align\":\"full\",\"className\":\"border-bottom border-secondary\"} -->\n<div class=\"wp-block-cover alignfull border-bottom border-secondary\" style=\"min-height:625px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-black-background-color has-background-dim-90 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-92\" alt=\"\" src=\"/wp-content/uploads/2022/07/cta-bg.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"fontSize\":\"large\"} -->\n<p class=\"has-text-align-center has-large-font-size\">Have any questions about our Cranes?</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:group {\"layout\":{\"inherit\":true}} -->\n<div class=\"wp-block-group\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:gravityforms/form {\"formId\":\"1\",\"title\":false,\"description\":false} /--></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group --></div></div>\n<!-- /wp:cover -->",
	    )
	);
	register_block_pattern(
	    'givens/fiftyfifty-block-pattern',
	    array(
	        'title'       => __( '50/50 Image and Text', 'givens' ),
	        'categories'  => array('givens'),
	        'description' => _x( '50/50 columns with image and text.', 'Block pattern description', 'givens' ),
	        'content'     => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading -->\n<h2>What is an Industrial Manipulator?</h2>\n<!-- /wp:heading -->\n\n<!-- wp:acf/divider {\"id\":\"block_62d022c80f151\",\"name\":\"acf/divider\",\"data\":{\"alignment\":\"left\",\"_alignment\":\"field_62cdd1eb4d10e\",\"margin\":\"3\",\"_margin\":\"field_62cdd5d7c98fe\"},\"align\":\"\",\"mode\":\"preview\"} /-->\n\n<!-- wp:paragraph -->\n<p>Industrial manipulators are pneumatically-balanced manual lift assists. Manipulators allow an operator to lift and position a part as if it were an extension of his/her hands. They are the high-speed, high-performance manual material-handling solution. Industrial manipulators render the load virtually weightless from the point of view of the operator, making it simple for the operator to lift, lower, or otherwise move the product. Normally, there are no up or down push buttons, allowing the operator to concentrate on moving the load quickly without focusing on the use of buttons. Unlike a crane, manipulators can help to support a load that might be offset from the axis of the end effector allowing products to be handled outside their center of mass.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":124,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"/wp-content/uploads/2022/07/M60_0.jpeg\" alt=\"M60 Manipulator with end effector for lifting a truck sidestep\" class=\"wp-image-124\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
	    )
	);
}
add_action( 'init', 'givens_register_my_patterns' );