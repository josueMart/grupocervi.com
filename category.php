<?php get_header();?>
  <h3>Categoría: <?php single_cat_title(); ?></h3>
<div class="row">
      <div class="col s12">
	<?php

	if (have_posts()) :
		while (have_posts()) :
			the_post();
			?>			
			<div class="col s12 m8 offset-m2 l6 offset-l3">
       		 <div class="card-panel grey lighten-5 z-depth-1">
         		 <div class="row valign-wrapper">
           		 <div class="col s2">
           		   <img src="http://localhost:8888/wp-content/uploads/2017/02/4595concentrador.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
           		 </div>
          		  <div class="col s10">
             		<span class="black-text">
             		   <h2><?php the_title(); ?></h2>
						<p><?php the_excerpt(); ?></p>	
             		 </span>
           		 </div>
         		 </div>
       		 </div>
     		 </div>		
			
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
 </div>
<?php get_footer();?>		


