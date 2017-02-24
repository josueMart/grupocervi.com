<?php get_header();?>

<div>
	<?php
	$args = array('cat'=>5, 'edit_posts_per_page'=>10);
	$category_posts = new WP_Query($args);

	// LOOP --------------------------------------------------------------------

	if ($category_posts->have_posts()) :
		while ($category_posts->have_posts()) :
			$category_posts->the_post();
			?>
				<article>
				<?php 
					if (has_post_thumbnail()) { ?>
						<picture>
						<source srcset="<?php the_post_thumbnail_url('full');?>" media"(min-width: 600px)"> 
						<img src="<?php the_post_thumbnail_url('thumbnail');?>" alt="">
						</picture>

					<?php 
					}
					
				?>
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<footer>
					<small><?php the_tags(); ?> 
					<?php the_author(); ?> 
					<?php the_date(); ?></small>
					<a href="<?php the_permalink(); ?>">Leer más</a>
				</footer>
				</article>
			
			<?php  
				endwhile;
				else :
				?>
				<h4>No hay entradas</h4>
			<?php 
				endif;
				wp_reset_postdata();
			?>
			</div>
 <!-- LOOP -->
<?php get_footer();?>		
