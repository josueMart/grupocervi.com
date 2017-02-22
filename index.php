<?php get_header();?>
<!-- Slider -->
<div>
	<?php
	$args = array('cat'=>5);
	$category_posts = new WP_Query($args);

	if ($category_posts->have_posts()) :
		while ($category_posts->have_posts()) :
			$category_posts->the_post();
			?>
				<article>
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<footer>
					<small><?php the_tags(); ?> <?php the_author(); ?> <?php the_date(); ?></small>
				</footer>
				</article>
			
			<?php  
				endwhile;
				else :
				?>
				<h4>No hay entradas</h4>
			<?php 
				endif; 
			?>
			</div>
  <!-- Slider -->
<?php get_footer();?>		
