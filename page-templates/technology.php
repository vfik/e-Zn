<?php
/**
 * Template Name: Technology
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
			<div class="companyslider">

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="companysub">
				<div class="content">
					<h1>e-Zn reactor is a breakthrough enegy storage solution</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="technology-spread">
	<div class="container">
		<div class="row">
			<div class="col-md-6 left">
				<div class="left-content">
					<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
					<p>label for the image</p>
				</div>
			</div>
			<div class="col-md-6 right">
				<div class="right-content">
					<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
					<h2>The innovation</h2>
					<p>Numerous attempts have been made to store energy in zinc metal in the past siz decades based on an approach featuring multiple containers of zinc undergoing the processes of formation, storage and dissolution.</p>
					<p>e-Zn abandoned the traditional approach and placed all elements in a single container - eliminating the jamming problems and inventing the e-Zn Reactor. </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 right">
				<div class="right-content">
					<h2>The e-Zn reactor is an evolution beyond the battery.</h2>
					<p>Energy capacity does not fade with time and does not change with temperature. The e-Zn reactor is a long-life storage solution that can operate in temperatures ranging from -45°C to 70°C.</p>
					<p>More advantages over batteries:</p>
					<ul>
						<li>Lower costs to scale up storage capacity</li>
						<li>non-flammable</li>
						<li>Readily recyclable by pouring out the metal with electrolyte</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- End Page Content -->

<?php

get_footer();
