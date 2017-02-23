<?php get_header();?>
<div>
	<?php
	// LOOP --------------------------------------------------------------------
	if (have_posts()) :
		while (have_posts()) :
			the_post();
			?>
				<article>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
				<footer>
					<small><?php the_tags(); ?> 
					<?php the_author(); ?> 
					<?php the_date(); ?></small>
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
