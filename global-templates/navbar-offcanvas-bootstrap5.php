<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-dark" aria-labelledby="main-nav-label">

	<p id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</p>


	<div class="container-xxl position-relative">

		<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="navbarNavOffcanvas">

			<div class="offcanvas-header justify-content-end align-items-center">
				<button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div><!-- .offcancas-header -->

			<!-- The WordPress Menu goes here -->
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'offcanvas-body',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav justify-content-end align-items-center flex-grow-1 pe-3',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>

			<p class="d-md-none mb-0 py-5 text-light text-sm text-center"><small>Located in the US? Visit our <a href="https://www.givensliftingsystems.com/" target="_blank">US branch</a>.</small></p>
		</div><!-- .offcanvas -->

		<div id="searchbox" class="position-absolute"><?php get_search_form(); ?></div>
	</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->
