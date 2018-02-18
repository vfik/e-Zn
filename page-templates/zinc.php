<?php
/**
 * Template Name: Zinc
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

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="companyslider zinc">

			</div>
		</div>
	</div>
	<div class="row justify-content-end">
		<div class="col-md-12">
			<div class="companysub">
				<div class="content">
					<h1>Benefits of Zinc for energy storage</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="benefits">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="point">
				<h2>Zinc is abundant</h2>
				<p>zinc as it is the fourth most used metal in the world behind only iron, aluminum and copper and is a relatively abundant element in earth's crest.  The current world annual zinc production is 11.2 million tons.  The world has about 480 million tons of zinc reserve base and about 1900 million tons as discovered resources. Thus, there is sufficient zinc for energy storage long into the future.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="point">
				<h2>Zinc is non-toxic</h2>
				<p>Half of steel is protected by Zinc coating from corrosion. Zinc oxide is an essential ingredient in baby's diaper cream and sunscreen.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="point">
				<h2>Zinc is inexpensive</h2>
				<p>include some figures $$$</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="point">
				<h2>Zinc has high energy density</h2>
				<p>It is the highest energy density of any metal that can store energy in aqueous solutions, making it ideal for reactors far more effective than batteries.</p>
			</div>
		</div>
	</div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
		</div>
		<div class="col-md-6">
			<h2>e-Zn's technology puts us at the forefront of zinc</h2>
			<a href="#">View Technology</a>
		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
