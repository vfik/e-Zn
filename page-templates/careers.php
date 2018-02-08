<?php
/**
 * Template Name: Careers
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>

<!-- Begin Page Content -->

<div class="careers-intro">
	<div class="container">
		<div class="row bg">
			<div class="col-md-10">
				<div class="bg-top">
					<div class="content">
						<h1>Join a materials science revolution</h1>
						<p>e-Zn is looking for the most qualified scientists for the project. They will be working on zinc.</p>
						<p>e-Zn is looking for the most qualified scientists for the project.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row img justify-content-end">
			<div class="col-md-4">
				<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<div class="job postings">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Open Job Positions</h2>
				<p>Scientist</p>
				<p>Scientist</p>
				<p>Scientist</p>
			</div>
		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
