<?php if(get_field('display_client_slider') == 1): ?>
<?php if(have_rows('clients', 'option')): ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<div class="section-clients">

	<div class="container">

			<div class="client-slider">
	
				<?php while(have_rows('clients', 'option')): the_row(); $logo = get_sub_field('client_logo'); ?>
			
					<div class="client">
	
						<?php echo wp_get_attachment_image($logo); ?>
	
					</div>
			
				<?php endwhile; ?>
	
			</div>

	</div>

</div>

<?php endif; endif; ?>