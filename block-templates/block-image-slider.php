<?php

$images = get_field('images');

?>
<?php if($images): ?>

<div class="section-image-slider mb-3">

	<div class="container">

			<div class="image-slider">
	
				<?php foreach($images as $image_id): ?>
			
					<div class="slider-image">
						
						<?php echo wp_get_attachment_image($image_id, 'full', '', array('class' => 'w-100')); ?>
						<?php $cap = wp_get_attachment_caption($image_id); ?>
						<?php if($cap): ?>
							<small><i><?php echo $cap; ?></i></small>
						<?php endif; ?>
	
					</div>
			
				<?php endforeach; ?>
	
			</div>

	</div>

</div>

<?php endif; ?>