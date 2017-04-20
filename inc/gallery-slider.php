<?php
	$images = get_field('images');

	if ($images):
?>	
	<div class="slide-box">
		
		<?php if(get_field('main_text')) : ?>
			<div class="hero-box text-center">
					<h1 class="hero-text"><?php the_field('main_text') ?></h1>
				<?php if(get_field('sub_text')) : ?>
					<h2 class="hero-text"><?php the_field('sub_text') ?></h2>
				<?php endif; ?>
				<?php if(get_field('link_url')) : ?>
					<a class="btn hero-btn" href="<?php the_field('link_url'); ?>"><?php the_field('link_text') ?></a>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<ul class="rslides">
			<?php foreach ($images as $image): ?>
				<li>
					<div class="rslide-image" style="background-image:url('<?php echo $image['url']; ?>');">
						
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
<?php endif;
?>