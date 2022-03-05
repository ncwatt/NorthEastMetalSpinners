<?php 
/*
	Template Name: Shop Page
*/
get_header(); ?>
<div class="page-content bg-color1">
	<div class="container">
		<div class="row">
			<div class="col-12">
				shop template
				<h1><?php the_title(); ?></h1>
				<?php
					if(have_posts()) : while(have_posts()) : the_post();
						the_content();
					endwhile; else : endif;
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>>