<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>

<!-- <img class="img-responsive" src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/services.jpg" alt="Image of restaurants, accommodations and other accessible locations"> -->
<div class="p-y-160" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services.jpg); background-size: cover; background-position: center; background-attachment: fixed;"></div>
<?php if ( have_posts() ) { ?>
<!--<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<?php while ( have_posts() ) { the_post(); ?>
				<h1 class="p-y-20"><?php the_title();?></h1>
				<div class="p-y-20"><?php the_content(); ?></div>
			<?php } // end while ?>
		</div>
	</div>
</div>-->
<?php } // end if ?>
<?php get_template_part('modules/services'); ?>

<?php get_footer(); ?>