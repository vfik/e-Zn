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
			<div class="col-md-6 colContent">
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
		<div class="col-md-6 boxCol">
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6 box"></div>
				<div class="col-md-6 box"></div>
				<div class="col-md-6"></div>
				<div class="col-md-6"></div>
				<div class="col-md-6 box"></div>
			</div>
		</div>
		<div class="col-md-6">
			<h2>Benefits of Zinc</h2>
			<p>on the left is zinc images + lab images</p>
			<p>zinc is great for these main points</p>
			<a href="#">Benefits of Zinc</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2>About our company</h2>
			<p>short copy</p>
			<a href="#">Company page</a>
			<a href="#">Careers</a>
		</div>
		<div class="col-md-6 box boxlg">

		</div>
	</div>
	<div class="row">
		<div class="col-md-6 box boxlg">

		</div>
		<div class="col-md-6">
			<h2> Our office and laboratory facility</h2>
			<p>25 Advance Rd<br>Toronto, Ontario<br>Canada, M8Z 2S6</p>
			<p>T - 416-000-0000</p>
			<p>E - info@e-zn.com</p>
		</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
