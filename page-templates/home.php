<?php
/**
 * Template Name: Home
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

<div class="slider">

	<div class="container">
		<div class="row justify-content-end image">
			<div class="col-md-12 colBlock">
				<div class="block">

				</div>
			</div>
		</div>
		<div class="row justify-content-start text">
			<div class="col-md-8 colContent">
				<div class="content">
					<h1>Energy into Matter</h1>
					<p>e-Zn has developed a breakthrough technology, Zn Reactor, for storing electrical energy in zinc metal. </p>
					<a href="#">Explore our technology ></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-3 box">

		</div>
		<div class="col-md-3">

		</div>
		<div class="col-md-6">
			<h2>Benefits of Zinc</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">

		</div>
		<div class="col-md-3 box">

		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
