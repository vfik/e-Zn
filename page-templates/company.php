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
			<div class="box-lg">

			</div>
		</div>
	</div>
	<div class="row justify-content-end">
		<div class="col-md-6">
			<div class="lg-full-label">
				<div class="content">
					<h2>e-Zn laboratories located in Toronto, Canada.</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
