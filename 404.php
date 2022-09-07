<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="page-title-bar py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="page-title text-center">
					<h1 class="mb-2">Error 404: Page Not Found</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found py-5">

						<header class="page-header">

							<h4 class="h2 mb-3 page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content text-center">

							<div class="row justify-content-center">
								<div class="col-lg-8">
									<p><?php esc_html_e( 'The page you requested does not exist. Try a search below:', 'understrap' ); ?></p>

									<?php get_search_form(); ?>
								</div>
							</div>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();
