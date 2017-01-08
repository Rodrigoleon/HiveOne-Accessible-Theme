<?php
/*
Template Name: Ramp Project
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ( have_posts() ) { ?>
				<?php while ( have_posts() ) { the_post(); ?>
					<h1 class="p-y-20"><?php the_title();?></h1>
					<div class="p-y-20"><?php the_content(); ?></div>
				<?php 
				} // end while
			} // end if
			?>
		</div>
	</div>
</div>

<div class="container marketing">

	<!-- START THE FEATURETTES -->
	<div class="row featurette">
		<div class="col-md-7">
			<h2 class="featurette-heading">Our Goal. <span class="text-muted">Breaking barriers.</span></h2>
			<p class="lead">To create awareness about barriers in our built environment that prevent people from enjoying some of the amazing buildings and businesses our city has to offer.</p>
		</div>

		<div class="col-md-5">
		<img class="featurette-image img-responsive center-block" alt="Volunteer painting ramp" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ramp-a.jpg">
		</div>
	</div>

	<hr class="featurette-divider">

	<div class="row featurette">
		<div class="col-md-7 col-md-push-5">
			<h2 class="featurette-heading">The Facts. <span class="text-muted">Making life easier.</span></h2>
			<p class="lead">Whether you are a parent pushing a stroller or a wheelchair user, ramps simply make life easier. A ramped storefront is smart for business, it allows access for everyone regardless of their ability.</p>
		</div>
		
		<div class="col-md-5 col-md-pull-7">
			<img class="featurette-image img-responsive center-block" alt="Volunteers building ramps" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ramp-b.jpg">
		</div>
	</div>

	<hr class="featurette-divider">

	<div class="row featurette">
		<div class="col-md-7">
			<h2 class="featurette-heading">Our Tasks. <span class="text-muted">Working as a team.</span></h2>
			<p class="lead"><i>WE</i> will help gather volunteers and material donations so that you and other inspired business owners can receive a lightweight nonpermanent ramp to suit your stepped storefront – for free!
			</p>
			<p class="lead"><i>YOU</i> will offer customers the use of your brightly coloured ramp should the need arise.</p>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-responsive center-block" alt="Group photo of volunteers" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ramp-c.jpg">
		</div>
	</div>

	<hr class="featurette-divider">

</div>

<?php get_footer(); ?>