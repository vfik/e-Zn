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
			<div class="col-md-6">
				<h3>The e-Zn reactor is an evolution beyond the battery.</h3>
				<p>talk about</p>
			</div>
		</div>
	</div>
</div>



<!-- End Page Content -->

<?php

get_footer();
