<?php

$image = get_field('image');
$content = get_field('content');
$link = get_field('link');
$link_id = url_to_postid($link);
?>

<div class="hover-block position-relative">
	<a href="<?php echo esc_url($link); ?>" class="stretched-link">
		<?php echo wp_get_attachment_image($image, 'full', '', array('class' => 'w-100')); ?>
		<div class="hover-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle">
			<div class="hover-content p-3 w-100 position-absolute top-50 start-50 translate-middle">
				<?php echo $content; ?>
			</div>
		</div>
	</a>
</div>