<?php
/*
Template Name: About
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
			<h2 class="featurette-heading">Mission.</h2>
			<p class="lead"><span lang="fr">J’accède Québec</span> is a non-profit organization, our primary goal is to promote a more inclusive and barrier free Society, to improve access for all regardless of their ability including seniors and people with disabilities.</p>
		</div>

		<div class="col-md-5">
		<img class="featurette-image img-responsive center-block" alt="A group of volunteers painting ramps" src="/wp-content/uploads/2016/11/about.jpg">
		</div>
	</div>

	<hr class="featurette-divider">

	<div class="row featurette">
		<div class="col-md-12">
			<h2 class="featurette-heading">About the Founder <span lang="fr">J’accède Québec</span></h2>
			<p>I had a pool accident in the summer of 1993 that left me quadriplegic. For a 16 year old kid, this is a real life changer. After a year of rehabilitation and physiotherapy, I was still not fully autonomous. One of the first things I realized, coming out of the hospital in a wheelchair, was that environmental barriers were everywhere. Going back to school in a wheelchair proved to be quite a challenge, as it only took a step or two to prevent me from accessing my classrooms, or certain areas of the school. That made integrating back into school almost impossible. My mother had to fight tooth and nail with the school board to find suitable accommodations that allowed me pursue my studies, by moving my class to a more accessible section of the school. This episode of spontaneous and positive militancy from my mother to raise awareness towards accessibility and inclusion at my school and find a suitable compromise so I could finish my studies like any other kid had a profound impact on me.</p>
			<p>As I moved to Montreal in 2004, I found a city that was very inclusive. As I was pursuing my university studies and integrating the work force, I quickly realized that a lot more needed to be accomplished before Montreal could also be considered an accessible city. I started volunteering in various NPO for people with mobility impairments and started doing my part to make the city more inclusive for everyone. If most malls are very accessible to people with mobility impairments, a vast majority of small businesses are not, as they are simply unvisitable to anyone using a wheelchair. This inspired me to follow in the footsteps of Luke Andersen and the StopGap.ca foundation in Toronto, and kick off a similar project in Montreal.</p>
			<p>"One step at a time, for an accessible city" <span lang="fr">(Une marche à la fois, pour une ville accessible)</span> is a volunteer project that aims to raise awareness the Montreal population about inaccessible businesses.</p>
			<p>I am passionate about accessible travel, volunteering and adapted bicycling.</p>
		</div>
		
	</div>

	<hr class="featurette-divider">

	<div class="row m-b-60">
		<div class="col-md-12">
			<h2>Our Partners</h2>
			<ul class="list-unstyled">
				<li><a href="http://stopgap.ca">Stopgap Foundation</a></li>
				<li><a href="http://www.knowbility.org/">Open Air</a></li>
			</ul>
		</div>
	</div>

</div>

<?php get_footer(); ?>