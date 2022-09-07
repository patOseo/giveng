<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<?php 
$contact = get_field('contact_info_tabs', 'option');
?>

<footer class="site-footer text-light" id="colophon">

		<div class="footer-section text-light py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center">
						<div class="d-block mb-3"><?php echo wp_get_attachment_image($contact['logo'], 'full'); ?></div>
						<?php if($contact['address']): ?><div class="mb-3"><?php echo $contact['address']; ?></div><?php endif; ?>
						<?php if($contact['email']): ?><p class="mb-1"><i class="fa fa-envelope"></i> Email: <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p><?php endif; ?>
						<?php if($contact['phone_number']): ?><p class="mb-1"><i class="fa fa-phone"></i> Phone: <a href="tel:<?php echo $contact['phone_number']; ?>"><?php echo $contact['phone_number']; ?></a></p><?php endif; ?>
						<?php if($contact['fax']): ?><p class="mb-1"><i class="fa fa-fax"></i> Fax: <a href="tel:<?php echo $contact['fax']; ?>"><?php echo $contact['fax']; ?></a></p><?php endif; ?>
						<?php if(have_rows('social_links', 'option')): ?>
							<div class="social-links my-3">
							<?php while(have_rows('social_links', 'option')): the_row(); ?>
								<a class="mx-1" href="<?php echo get_sub_field('link'); ?>" target="_blank"><i class="fa fa-<?php echo get_sub_field('icon'); ?>"></i></a>
							<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-md-6 text-center">
						<div class="d-block mb-3"><?php echo wp_get_attachment_image($contact['us_logo'], 'full'); ?></div>
						<?php if($contact['us_address']): ?>
							<p class="mb-1"><?php echo $contact['us_address']; ?></p>
						<?php endif; ?>
						<?php if($contact['email']): ?><p class="mb-3"><i class="fa fa-envelope"></i> Email: <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p><?php endif; ?>
						<p>Visit the <a href="https://www.givensliftingsystems.com" target="_blank" rel="noopener,noreferrer">Givens Lifting Systems</a> Website</p>
					</div>
				</div>
			</div>
		</div>

		<div class="copyright">
	
			<div class="<?php echo esc_attr( $container ); ?> py-4">
		
				<div class="row">
		
					<div class="col-md-12">
		
							<div class="site-info text-center">
		
								© <?php echo date("Y"); ?> Givens Engineering Inc. | All Rights Reserved
		
							</div><!-- .site-info -->
		
					</div><!--col end -->
		
				</div><!-- row end -->
		
			</div><!-- container end -->

		</div>
</footer><!-- #colophon -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<!-- ZoomInfo NoScript Tracking Code -->
  <noscript>
    <img src="https://ws.zoominfo.com/pixel/6283aa298f43f50012ae4d82" width="1" height="1" style="display: none;" alt="websights"/>
  </noscript>
  <!-- End ZoomInfo NoScript Tracking Code -->

</body>

</html>

