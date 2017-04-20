<?php
/**
 * Promo Boxes for Front Page
 *
 * @package understrap
 */

?>
<section id="promo-squares" class="promo-squares">
<div class="row">
	<?php 

$posts = get_field('current_promo_squares');

if( $posts ): ?>
	<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
		<?php if( get_post_status($p->ID) == publish) : ?>

		    <article class="col-md-4 clearfix">
		    	<a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_post_thumbnail( $p->ID, 'large' ); ?></a>
		    	<span><?php echo get_the_title( $p->ID ); ?></span>
		    </article>

		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>
</div>
</section>