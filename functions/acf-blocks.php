<?php

// Create custom Gutenberg block category for ACF Blocks
function oseo_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'givens-blocks',
                'title' => __( 'Givens Blocks', 'givens-blocks' ),
            ),
        )
    );
}
add_filter( 'block_categories', 'oseo_block_category', 1, 2);

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'divider',
            'title'             => __('Divider'),
            'description'       => __('A custom divider block.'),
            'render_template'   => 'block-templates/block-divider.php',
            'category'          => 'givens-blocks',
            'icon'              => 'minus',
            'mode'				=> 'edit',
            'keywords'          => array( 'divider', 'line', 'separator' ),
        ));

        acf_register_block_type(array(
            'name'              => 'hover-block',
            'title'             => __('Hover Block'),
            'description'       => __('A custom hover block.'),
            'render_template'   => 'block-templates/block-hover-block.php',
            'category'          => 'givens-blocks',
            'icon'              => 'align-full-width',
            'mode'              => 'edit',
            'keywords'          => array( 'hover', 'block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'clients',
            'title'             => __('Clients'),
            'description'       => __('A custom block to display client slider.'),
            'render_template'   => 'block-templates/block-clients.php',
            'category'          => 'givens-blocks',
            'icon'              => 'slides',
            'mode'              => 'edit',
            'keywords'          => array( 'clients', 'slider' ),
            'enqueue_assets'    => function(){
                wp_enqueue_style( 'slick-slider-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css', array(), null, 'all');
                wp_enqueue_style( 'slick-slider-css-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css', array(), null, 'all');
                wp_enqueue_script('slick-slider-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), null, true );
                wp_enqueue_script('slick-slider-clients-init', get_stylesheet_directory_uri() . '/block-templates/scripts/clients.js', array(), null, true );
            },
        ));

        acf_register_block_type(array(
            'name'              => 'image-slider',
            'title'             => __('Image Slider'),
            'description'       => __('A custom block to display an image slider.'),
            'render_template'   => 'block-templates/block-image-slider.php',
            'category'          => 'givens-blocks',
            'icon'              => 'images-alt',
            'mode'              => 'edit',
            'keywords'          => array( 'slider', 'images' ),
            'enqueue_assets'    => function(){
                wp_enqueue_style( 'slick-slider-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css', array(), null, 'all');
                wp_enqueue_style( 'slick-slider-css-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css', array(), null, 'all');
                wp_enqueue_script('slick-slider-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), null, true );
                wp_enqueue_script('slick-slider-imageslider-init', get_stylesheet_directory_uri() . '/block-templates/scripts/image-slider.js', array(), null, true );
            },
        ));
    }
}