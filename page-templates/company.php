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
			<div class="companyslider">

			</div>
		</div>
	</div>
	<div class="row justify-content-end">
		<div class="col-md-6">
			<div class="companysub">
				<div class="content">
					<h2>e-Zn laboratories located in Toronto, Canada.</h2>
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
					<p>Dr. Zhang is a visionary and seasoned technology developer.  Prior to founding e-Zn, Dr. Zhang worked for 20 years in Teck Resources as a scientist in the first ten years and as manager of R&D for the last ten when Dr. Zhang was responsible for leading a team of scientists and engineers in the development of new zinc products for battery applications and was deeply engaged in the development and commercialization of various types of zinc battery storage technologies.</p>
					<p>Dr. Zhang is an acknowledged world-expert in zinc electrochemistry and the author of the book “Corrosion and Electrochemistry of Zinc”, which has been the most comprehensive book on the subject since its publication in 1996. </p>
					<p>Dr. Zhang has over 50 peer-reviewed publications and holds several patents in the field. Dr. Zhang received his PhD in Electrochemistry and Materials Science from the Free University of Brussels and held post-doctoral positions at MIT and Columbia University.</p>
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
