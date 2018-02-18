<?php
/**
 * Template Name: Company
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
			<div class="companyslider company">

			</div>
		</div>
	</div>
	<div class="row justify-content-end">
		<div class="col-md-6">
			<div class="companysub">
				<div class="content">
					<h1>e-Zn laboratories located in Toronto, Canada.</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="about-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="copy">
					<h2>A world leading zinc scientist's discovery sparked an innovation in metal energy storage.</h2>
					<h3>Gregory X. Zhang</h3>
					<h4>Ph.D. in Materials Science and Electrochemistry</h4>
					<p>Bio about greg, in here wil will tell a short story and make note of the books he authored and his career. Now its time for a zinc energy storagy.</p>
				</div>
			</div>
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/e-zn-solar-panels.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<div class="project">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/e-zn-solar-panels.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h2>SDTC project</h2>
						<p>Demonstration of the application feasibility of solar energy storage in zinc metal with Zn-Reactor</p>
						<p>1 kW/24 hours system. Three industrial partners Canadian solar, newesolar and broy engineering.</p>
						<p>funding $1.5M and project started October 2016.</p>
					</div>
				</div>
				<div class="img-label">
					<h4>Rooftop Installation in Toronto</h4>
					<p>Rooftop Installation in Toronto</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="about-history">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="bg-history">
					<div class="content">
						<h2>company history information</h2>
						<p>talk about progress, how far we've come.</p>
						<a href="#" class="sq-btn">Careers</a>
						<a href="#" class="sq-btn">Contact</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
