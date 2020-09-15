<?php get_header(); 
get_template_part('template-parts/header-main');?>
	<div class = "content">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			<?php the_content();?>
		<?php endwhile;?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>