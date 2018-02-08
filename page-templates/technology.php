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
				</div>
			</div>
			<div class="col-md-6 right">
				<div class="right-content">
					<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
					<h2>The innovation</h2>
					<p>Numerous attempts have been made to store energy in zinc metal in past six decades based on an approach where formation, storage and dissolution of zinc metal are conducted in different containers as illustrated in the figure.</p><p>None of these attempts was successful due to the problem has been associated with the transportation of solid metal between the different containers.  Jamming tends to occur in pipes, in pumps and in cells.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3>e-Zn abandoned the traditional approach of having to transport the zinc metal between different containers</h3>
				<p>By placing all the elements for zinc formation, dissolution and stage within the same container therefore completely avoided the problem of jamming</p>
			</div>
		</div>
	</div>
</div>



<!-- End Page Content -->

<?php

get_footer();
