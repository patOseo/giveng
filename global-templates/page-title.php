<?php 

$submenu = get_field('sub_menu');

?>

<div class="page-title-bar py-5 <?php if(!$submenu) { echo 'mb-5'; } ?>">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="page-title text-center">
					<h1 class="mb-2"><?php the_title(); ?></h1>
				</div>
				<?php
				if ( function_exists('yoast_breadcrumb') && get_field('hide_menu') != 1 ) {
				  yoast_breadcrumb( '<p id="breadcrumbs" class="text-center">','</p>' );
				}
				?>
				<button class="d-block d-lg-none mx-auto btn btn-primary sub-menu-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#subMenu" href="#subMenu" role="button" aria-expanded="false" aria-controls="subMenu">Sub-Menu <i class="fa fa-chevron-down"></i></button>
			</div>
		</div>
	</div>
</div>

<?php if($submenu): ?>

<div class="sub-menu-bar mb-5">
	<div class="sub-menu-container collapse" id="subMenu">
		<div class="container">
			<div class="row">
				<?php
				wp_nav_menu(
					array(
						'menu_class'      => 'navbar-nav justify-content-center flex-column flex-lg-row flex-grow-1 py-3 pe-3',
						'fallback_cb'     => '',
						'menu'         => $submenu,
						'depth'           => 1,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div>
		</div>
	</div>
</div>

<?php endif; 